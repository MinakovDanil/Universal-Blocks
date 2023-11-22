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

            <div class="lib-circle-wrapper icon-circle border">
                <div class="lib-circle-img">
                    <?php echo wp_get_attachment_image(carbon_get_post_meta(get_the_ID(), 'lib_circle_image'), 'full'); ?>
                </div>


                <div class="lib-circle-items">
                    <?php $circle_block_items = carbon_get_post_meta(get_the_ID(), 'lib_circle_items'); 

                        if ($circle_block_items) :
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

            <button type="button" class="lib-btn"><?php echo carbon_get_post_meta(get_the_ID(), 'lib_circle_btn_text'); ?></button>
        </div>
    </div>
    <!-- Circle block - END -->


</div>

<?php get_footer();