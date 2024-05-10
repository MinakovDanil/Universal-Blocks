<?php get_header(); ?>

<div class="main">


    <!-- Circle block - START -->
    <div class="lib-circle-container">
        <div class="lib-circle">
            <h2 class="lib-title"><?php echo carbon_get_post_meta(get_the_ID(), 'lib_circle_title'); ?></h2>


            <!-- Icon types:
                - icon-circle
                - icon-circle border
                - icon-square
                - icon-square border
            -->

            <?php $circle_block_items = carbon_get_post_meta(get_the_ID(), 'lib_circle_items');
            if ($circle_block_items) : ?>

                <div class="lib-circle-wrapper icon-circle border items-<?php echo count($circle_block_items); ?>">
                    <div class="lib-circle-img">
                        <?php echo wp_get_attachment_image(carbon_get_post_meta(get_the_ID(), 'lib_circle_image'), 'full'); ?>
                    </div>

                    <div class="lib-circle-items">
                        <?php if ($circle_block_items) :
                            foreach ($circle_block_items as $item) : ?>
                                <div class="lib-circle__item">
                                    <div class="lib-circle__item-content">
                                        <h4 class="lib-circle__item-title"><?php echo $item['title']; ?></h4>
                                        <p class="lib-circle__item-text"><?php echo $item['text']; ?></p>
                                    </div>
                                    <div class="lib-circle__item-icon">
                                        <?php echo wp_get_attachment_image($item['icon'], 'full'); ?>
                                    </div>
                                </div>
                        <?php endforeach;
                        endif; ?>
                    </div>
                </div>

            <?php endif; ?>

            <button type="button" class="lib-btn"><?php echo carbon_get_post_meta(get_the_ID(), 'lib_circle_btn_text'); ?></button>
        </div>
    </div>
    <!-- Circle block - END -->


    <!-- How It Works - START -->
    <div class="lib-how">
        <div class="lib-container">
            <h2 class="lib-title"><?php echo carbon_get_post_meta(get_the_ID(), 'lib_how_title'); ?></h2>
            <p class="lib-subtitle"><?php echo carbon_get_post_meta(get_the_ID(), 'lib_how_subtitle'); ?></p>

            <div class="lib-how-wrapper">
                <?php
                $how_items = carbon_get_post_meta(get_the_ID(), 'lib_how_items');
                if ($how_items) :
                    $num = 1;
                    foreach ($how_items as $how_item) : ?>
                        <div class="lib-how-item">
                            <div class="lib-how-item__img">
                                <?php echo wp_get_attachment_image($how_item['image'], 'large'); ?>
                            </div>
                            <div class="lib-how-item-box">
                                <div class="lib-how-item__number"><?php echo sprintf("%02d", $num); ?></div>
                                <div class="lib-how-item-content">
                                    <h3 class="lib-how-item__title"><?php echo $how_item['title']; ?></h3>
                                    <div class="lib-how-item__text">
                                        <p><?php echo $how_item['text']; ?></p>
                                        <?php
                                        // Second version
                                        // echo wpautop($how_item['text']); 
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php $num++;
                    endforeach;
                endif; ?>
            </div>

            <a href="" class="lib-btn"><?php echo carbon_get_post_meta(get_the_ID(), 'lib_how_button_text'); ?></a>
        </div>
    </div>
    <!-- How It Works - END -->



    <!-- FAQ - START -->
    <div class="lib-faq">
        <div class="lib-faq-container">
            <h2 class="lib-title"><?php echo carbon_get_post_meta(get_the_ID(), 'lib_faq_title'); ?></h2>

            <div class="lib-faq-items" itemscope itemtype="https://schema.org/FAQPage">
                <?php $faq_items = carbon_get_post_meta(get_the_ID(), 'lib_faq_items');
                if ($faq_items) :
                    foreach ($faq_items as $item) : ?>
                        <details class="lib-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            <summary>
                                <h3 itemprop="name"><?php echo $item['title']; ?></h3>
                            </summary>
                            <p class="lib-faq-text" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><?php echo $item['text']; ?></p>
                        </details>
                <?php endforeach;
                endif; ?>
            </div>
        </div>
    </div>
    <!-- FAQ - END -->



    <!-- Cost - START -->
    <div class="lib-cost">
        <div class="lib-container">
            <h2 class="lib-title"><?php echo carbon_get_post_meta(get_the_ID(), 'lib_cost_title'); ?></h2>

            <div class="lib-cost-wrapper">
                <div class="lib-cost-tabs">
                    <?php if (carbon_get_post_meta(get_the_ID(), 'lib_cost_shipping_title')) { ?>
                        <div class="lib-cost-tab active">
                            <h3><?php echo carbon_get_post_meta(get_the_ID(), 'lib_cost_shipping_title'); ?></h3>
                        </div>
                    <?php } ?>
                    <?php if (carbon_get_post_meta(get_the_ID(), 'lib_cost_transit_title')) { ?>
                        <div class="lib-cost-tab">
                            <h3><?php echo carbon_get_post_meta(get_the_ID(), 'lib_cost_transit_title'); ?></h3>
                        </div>
                    <?php } ?>
                </div>
                <div class="lib-tab-content">

                    <!-- Shipping Table -->
                    <?php if (carbon_get_post_meta(get_the_ID(), 'lib_cost_shipping_title') && carbon_get_post_meta(get_the_ID(), 'lib_cost_shipping_table')) { ?>
                        <div class="lib-cost-tab-item">
                            <table class="lib-cost-table" border="0">
                                <tbody>
                                    <tr>
                                        <th>Origin</th>
                                        <th>Destination</th>
                                        <th>Average cost</th>
                                        <th>Cost per mile</th>
                                    </tr>
                                    <?php $shipping_table = carbon_get_post_meta(get_the_ID(), 'lib_cost_shipping_table'); ?>
                                    <?php foreach ($shipping_table as $item) { ?>
                                        <tr>
                                            <td><?php echo $item['origin']; ?></td>
                                            <td><?php echo $item['destination']; ?></td>
                                            <td><?php echo $item['average_cost']; ?></td>
                                            <td><?php echo $item['cost_per_mile']; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <!-- Mobile -->
                            <div class="lib-mobile-table">
                                <?php $shipping_table = carbon_get_post_meta(get_the_ID(), 'lib_cost_shipping_table'); ?>
                                <?php foreach ($shipping_table as $item) { ?>
                                    <div class="lib-mobile-table-wrapper">
                                        <div class="lib-mobile-table__item">
                                            <p class="lib-mobile-table-title">Origin</p>
                                            <p class="lib-mobile-table-text"><?php echo $item['origin']; ?></p>
                                        </div>
                                        <div class="lib-mobile-table__item">
                                            <p class="lib-mobile-table-title">Destination</p>
                                            <p class="lib-mobile-table-text"><?php echo $item['destination']; ?></p>
                                        </div>
                                        <div class="lib-mobile-table__item">
                                            <p class="lib-mobile-table-title">Average cost</p>
                                            <p class="lib-mobile-table-text"><?php echo $item['average_cost']; ?></p>
                                        </div>
                                        <div class="lib-mobile-table__item">
                                            <p class="lib-mobile-table-title">Cost per mile</p>
                                            <p class="lib-mobile-table-text"><?php echo $item['cost_per_mile']; ?></p>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>

                    <!-- Transit Time Table -->
                    <?php if (carbon_get_post_meta(get_the_ID(), 'lib_cost_transit_title') && carbon_get_post_meta(get_the_ID(), 'lib_cost_transit_title')) { ?>
                        <div class="lib-cost-tab-item">
                            <table class="lib-cost-table lib-transit-table" border="0">
                                <tbody>
                                    <tr>
                                        <th>Mileage</th>
                                        <th>*Average Transit Time</th>
                                    </tr>
                                    <?php $transit_table = carbon_get_post_meta(get_the_ID(), 'lib_cost_transit_table'); ?>
                                    <?php foreach ($transit_table as $item) { ?>
                                        <tr>
                                            <td><?php echo $item['mileage']; ?></td>
                                            <td><?php echo $item['average']; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                            <!-- Mobile -->
                            <div class="lib-mobile-table">
                                <?php $transit_table = carbon_get_post_meta(get_the_ID(), 'lib_cost_transit_table'); ?>
                                <?php foreach ($transit_table as $item) { ?>
                                    <div class="lib-mobile-table-wrapper">
                                        <div class="lib-mobile-table__item">
                                            <p class="lib-mobile-table-title">Mileage</p>
                                            <p class="lib-mobile-table-text"><?php echo $item['mileage']; ?></p>
                                        </div>
                                        <div class="lib-mobile-table__item">
                                            <p class="lib-mobile-table-title">*Average Transit Time</p>
                                            <p class="lib-mobile-table-text"><?php echo $item['average']; ?></p>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>

                            <p class="cost-under-text"><?php echo carbon_get_post_meta(get_the_ID(), 'lib_cost_transit_under_text'); ?><< /p>
                        </div>
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>
    <!-- Cost - END -->

</div>

<?php get_footer();
