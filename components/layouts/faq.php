<div class="bg-yellow">
    <div class="lg:max-w-6xl lg:mx-auto py-10">

        <div class="grid grid-cols-12 gap-4 md:gap-10 p-5">
            <div class="col-span-12">
                <h2 class="text-4xl font-bold uppercase">FAQ's</h2>
            </div>

            <!-- Start Questions -->
            <?php

            // Check rows exists.
            if (have_rows('faq')):

                // Loop through rows.
                while (have_rows('faq')) : the_row(); ?>
                    <div class="col-span-12 md:col-span-6 pb-2">
                        <h3 class="font-bold text-2xl pb-2"><?php the_sub_field('question'); ?></h3>
                        <p><?php the_sub_field('answer'); ?></p>

                        <?php if( get_sub_field('button_link') ): ?>
                            <a href="<?php the_sub_field('button_link'); ?>">
                                <button class="mt-5 mx-auto lg:mx-0 bg-blue text-black font-bold rounded-md py-3 px-5 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                    <?php the_sub_field('button_text'); ?>
                                </button>
                            </a>
                        <?php endif; ?>

                    </div>
                <?php
                    // End loop.
                endwhile;

            endif;
            ?>

        </div>
    </div>
</div>
