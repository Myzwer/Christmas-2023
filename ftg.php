<?php
/**
 * Template Name: First Time Guest
 *
 * The FTG of the Letitsnow Theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Letitsnow
 * @since 1.0.0
 */

get_header(); ?>
    <!-- Start Particles-->
    <div id="particles-js"></div>
    <!-- End particles -->

    <!-- Start Header -->
    <video class="header-video" src="<?php the_field('video'); ?>" autoplay loop playsinline muted></video>

    <div class="viewport-header">
        <div class="head-container z-10">
            <h1 class="text-red text-5xl md:text-8xl font-bold uppercase"><?php the_field('title'); ?></h1>
            <h1 class="text-red text-4xl md:text-4xl font-bold uppercase"><?php the_field('subtitle'); ?></h1>
        </div>
    </div>
    <!-- End Header -->


    <div class="bg-red text-white relative z-20">
        <div class='lg:max-w-6xl mx-auto grid grid-cols-12 px-5 md:px-0 py-10 gap-4'>
            <div class="col-span-12 md:col-span-6 relative md:mx-5 mt-5">
                <h2 class="text-4xl font-bold uppercase pb-2"><?php the_field('resource_title'); ?></h2>
                <p class="text-xl"><?php the_field('resource_copy'); ?></p>
                <?php
                // Gravity Forms Shortcode
                $formid = get_field("form_shortcode");
                echo do_shortcode("[gravityform id='$formid']");
                ?>
            </div>
            <div class="col-span-12 md:col-span-6 relative">
                <div class="content-middle-medium">
                    <img src=" <?php the_field('resource_image'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="bg-yellow">
        <div class='lg:max-w-6xl mx-auto grid grid-cols-12 p-5 py-10 gap-4 md:gap-10'>
            <div class="col-span-12 md:col-span-6 relative">
                <?php
                // Gravity Forms Shortcode
                $formid = get_field("maps_shortcode");
                echo do_shortcode("[wpgmza id='$formid']");
                ?>

            </div>

            <div class="col-span-12 md:col-span-6 relative md:mx-10 mt-5">
                <h2 class="text-4xl font-bold uppercase pb-2"><?php the_field('directions_title'); ?></h2>

                <div class="pb-10">
                    <h3 class="text-xl font-bold uppercase"><?php the_field('location_1'); ?></h3>
                    <p class="pb-5"><?php the_field('address_1'); ?></p>

                    <?php if (have_rows('button_1')): ?>
                        <?php while (have_rows('button_1')): the_row(); ?>
                            <a href="<?php the_sub_field('button_link'); ?>" target="_blank">
                                <button class="mx-auto lg:mx-0 bg-red text-white font-bold rounded-md py-3 px-5 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                    <i class="fa-sharp fa-regular fa-arrow-up-right-from-square"></i> <?php the_sub_field('button_text'); ?>
                                </button>
                            </a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                <div class="pb-10">
                    <h3 class="text-xl font-bold uppercase"><?php the_field('location_2'); ?></h3>
                    <p class="pb-5"><?php the_field('address_2'); ?></p>

                    <?php if (have_rows('button_2')): ?>
                        <?php while (have_rows('button_2')): the_row(); ?>
                            <a href="<?php the_sub_field('button_link'); ?>" target="_blank">
                                <button class="mx-auto lg:mx-0 bg-red text-white font-bold rounded-md py-3 px-5 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                    <i class="fa-sharp fa-regular fa-arrow-up-right-from-square"></i> <?php the_sub_field('button_text'); ?>
                                </button>
                            </a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>


            </div>
        </div>
    </div>

    <div class="bg-red text-white">
        <div class='lg:max-w-6xl mx-auto grid grid-cols-12 p-5 py-10 gap-4 md:gap-10'>
            <div class="col-span-12 md:col-span-8 relative md:mx-10 mt-5 relative">
                <div class="content-middle-medium">
                    <h2 class="text-4xl font-bold uppercase pb-2"><?php the_field('gift_title'); ?></h2>
                    <p class=""><?php the_field('mug_copy'); ?></p>
                </div>
            </div>
            <div class="col-span-12 md:col-span-4 relative">
                <div class="image-border">
                    <img src="<?php the_field('mug_image'); ?>" alt="Mug Image" class="rounded-image">
                    <div class="inset-box"></div>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();