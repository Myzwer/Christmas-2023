<?php if (have_rows('location_arrival')):
    while (have_rows('location_arrival')) : the_row(); ?>
        <div class="accordion">
            <div class="accordion-item">
                <button id="accordion-button-1" aria-expanded="false">
                    <span class="accordion-title">
                        <?php the_sub_field('location_title'); ?>
                    </span>
                    <span class="icon" aria-hidden="true"></span>
                </button>
                <div class="accordion-content">
                    <?php if (have_rows('steps')):
                        while (have_rows('steps')) : the_row(); ?>
                            <h4 class="font-bold text-xl"><?php the_sub_field('title_step'); ?></h4>
                            <p><?php the_sub_field('explanation_step'); ?></p>
                        <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>

    <?php
    endwhile;
endif;
?>