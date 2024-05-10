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
                    Field::make('textarea', 'text', __('Text'))->set_width(40),
                    Field::make('image', 'icon', __('Icon'))->set_width(20),
                )),
        ))
        // Circle - END


        // How It Works - START
        ->add_tab(__('How It Works'), array(
            Field::make('text', 'lib_how_title', __('Title')),
            Field::make('text', 'lib_how_subtitle', __('Subitle')),
            Field::make('complex', 'lib_how_items', __('Items'))
                ->add_fields(array(
                    Field::make('image', 'image', __('Image'))->set_width(20),
                    Field::make('text', 'title', __('Title'))->set_width(40),
                    Field::make('textarea', 'text', __('Text'))->set_width(40),
                )),
            Field::make('text', 'lib_how_button_text', __('Button text')),
        ))
        // How It Works - END


        // FAQ - START
        ->add_tab(__('FAQ'), array(
            Field::make('text', 'lib_faq_title', __('Title')),
            Field::make('complex', 'lib_faq_items', __('Items'))
                ->add_fields(array(
                    Field::make('text', 'title', __('Title'))->set_width(50),
                    Field::make('textarea', 'text', __('Text'))->set_width(50),
                )),
        ))
        // FAQ - END


        // Cost - START
        ->add_tab(__('Cost'), array(
            Field::make('text', 'lib_cost_title', __('Title')),
            Field::make('text', 'lib_cost_shipping_title', __('Shipping Title')),
            Field::make('complex', 'lib_cost_shipping_table', __('Shipping Table'))
                ->set_layout('tabbed-horizontal')
                ->add_fields(array(
                    Field::make('text', 'origin', __('Shipping - Origin'))->set_width(25),
                    Field::make('text', 'destination', __('Shipping - Destination'))->set_width(25),
                    Field::make('text', 'average_cost', __('Shipping - Average cost'))->set_width(25),
                    Field::make('text', 'cost_per_mile', __('Shipping - Cost per mile'))->set_width(25),
                )),
            Field::make('text', 'lib_cost_transit_title', __('Transit Title')),
            Field::make('complex', 'lib_cost_transit_table', __('Transit table'))
                ->set_layout('tabbed-horizontal')
                ->add_fields(array(
                    Field::make('text', 'mileage', __('Transit - Mileage'))->set_width(50),
                    Field::make('text', 'average', __('Transit - Average'))->set_width(50),
                )),
            Field::make('text', 'lib_cost_transit_under_text', __('Transit - Under text')),
        ));
    // Cost - END
}
