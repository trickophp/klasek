<?php

if ( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_6445342e2c680',
        'title' => 'Proizvod',
        'fields' => array(
            array(
                'key' => 'field_6445342ec4a69',
                'label' => 'Status',
                'name' => 'product_status',
                'aria-label' => '',
                'type' => 'select',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'Aktivan' => 'Aktivan',
                    'Neaktivan' => 'Neaktivan',
                ),
                'default_value' => 'Aktivan',
                'return_format' => 'value',
                'multiple' => 0,
                'allow_null' => 0,
                'ui' => 0,
                'ajax' => 0,
                'placeholder' => '',
            ),
            array(
                'key' => 'field_648c44686b81e',
                'label' => 'Sifra proizvoda',
                'name' => 'sifra_proizvoda',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_64453519c4a6a',
                'label' => 'Opis Proizvoda',
                'name' => 'product_description',
                'aria-label' => '',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'rows' => '',
                'placeholder' => '',
                'new_lines' => '',
            ),
            array(
                'key' => 'field_6445359fc4a6d',
                'label' => 'Cena Proizvoda',
                'name' => 'product_price',
                'aria-label' => '',
                'type' => 'number',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'min' => '',
                'max' => '',
                'placeholder' => '0 RSD',
                'step' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_648c441505682',
                'label' => 'Klasa proizvoda',
                'name' => 'klasa_proizvoda',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_648c442305683',
                'label' => 'Kolicina baruta',
                'name' => 'kolicina_baruta',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => 'e.g. 400g',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_64934b31c9121',
                'label' => 'Pakovanje',
                'name' => 'pakovanje',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => 'e.g. 6/25',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_64934ac1c911e',
                'label' => 'Tezina kartona',
                'name' => 'tezina_kartona',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => 'e.g. 3.5 kg',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_64934b01c911f',
                'label' => 'Opis efekta',
                'name' => 'opis_efekta',
                'aria-label' => '',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'rows' => '',
                'placeholder' => '',
                'new_lines' => '',
            ),
            array(
                'key' => 'field_64934b1bc9120',
                'label' => 'Trajanje efekta',
                'name' => 'trajanje_efekta',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => 'e.g. 40s',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_64a2fc9fd3862',
                'label' => 'Intezitet zvuka',
                'name' => 'product_sound_intensity',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_64a03f75b375d',
                'label' => 'Tip video snimka',
                'name' => 'product_video_type',
                'aria-label' => '',
                'type' => 'select',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'Embed (link)' => 'Embed (link)',
                    'Video fajl' => 'Video fajl',
                ),
                'default_value' => false,
                'return_format' => 'value',
                'multiple' => 0,
                'allow_null' => 0,
                'ui' => 0,
                'ajax' => 0,
                'placeholder' => '',
            ),
            array(
                'key' => 'field_64a03f05aad63',
                'label' => 'Embed Video Proizvoda',
                'name' => 'product_video_embed',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_64a03f75b375d',
                            'operator' => '==',
                            'value' => 'Embed (link)',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_64a03faeb375e',
                'label' => 'Media video proizvoda',
                'name' => 'product_video_media',
                'aria-label' => '',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_64a03f75b375d',
                            'operator' => '==',
                            'value' => 'Video fajl',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
                'preview_size' => 'medium',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'proizvodi',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));
    
endif;    

?>