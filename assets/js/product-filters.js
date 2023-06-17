jQuery(document).ready(function($) {
  var loader = $('<div class="loader"><img src="/wp-content/uploads/2023/06/filter_loader.gif" alt="Loading..." width="20" height="20"></div>');
  $('.product-filter').change(function(e) {
    e.preventDefault();

    // Get the selected category and kalibar values from the HTML form
    var categories = [];
    var kalibars = [];

    // Loop through the selected checkboxes for categories
    $('.category-filter:checked').each(function() {
      categories.push($(this).data('catname'));
    });

    // Loop through the selected checkboxes for kalibar
    $('.kalibar-filter:checked').each(function() {
      kalibars.push($(this).attr('id'));
    });

    // Make the AJAX call to the server
    $.ajax({
      url: ajax.url,
      type: 'POST',
      data: {
        action: 'custom_post_filter',
        category: categories,
        kalibar: kalibars
      },
      beforeSend: function() {
        $('.fo-menu-wrapper').html(loader);
      },
      success: function(response) {
        // Handle the response and display the filtered posts
        if (response.length > 0) {
          // Iterate through the response array and do something with the post data
          for (var i = 0; i < response.length; i++) {
            var post = response[i];

            $('.fo-menu-wrapper').html(response);
          }
        } else {
          // No posts found with the selected filters
          console.log('No posts found.');
        }
      },
      error: function() {
        console.log('AJAX request failed.');
      }
    });
  });

  $('.filter-dropdown-arrow').on('click', function() {
    $('.category-filter-wrapper').toggleClass('category-filter-wrapper-active');
    $('.filter-dropdown-arrow').toggleClass('filter-dropdown-arrow-active');
  });
});