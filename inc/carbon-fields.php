<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'universalblocks_carbon');
function universalblocks_carbon()
{

    Container::make('post_meta', __('Home'))
    ->where('post_type', '=', 'page')
    ->where('post_id', '=', 7)

    // Circle - START
    ->add_tab(__('Circle block'), array(
        Field::make('text', 'lib_circle_title', __('Title')),
        Field::make('image', 'lib_circle_image', __('Main image')),
        Field::make('text', 'lib_circle_btn_text', __('Button text')),
        Field::make('complex', 'lib_circle_items', __('Items'))
        ->set_required(true)
        ->set_min(4)
        ->set_max(8)
        ->add_fields(array(
            Field::make('text', 'title', __('Title'))->set_width(40),
            Field::make('text', 'text', __('Text'))->set_width(40),
            Field::make('image', 'icon', __('Icon'))->set_width(20),
        )),
    ));
    // Circle - START
}
