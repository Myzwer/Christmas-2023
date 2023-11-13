<?php
/**
 * Template Name: Front Page
 *
 * The Frontpage of the Letitsnow Theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Letitsnow
 * @since 1.0.0
 */

get_header(); ?>

    <!-- Start Header -->
    <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
  rgba(0, 0, 0, 0.45),
  rgba(0, 0, 0, 0.45)
), url('https://images.unsplash.com/photo-1501612780327-45045538702b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2100&q=80') center center; background-repeat: no-repeat; background-size: cover;
 height: 60vh;">
        <div class="content-middle text-white text-center">
            <h1 class="text-4xl mb-5">Articles & Podcasts</h1>
            <a href=""
               class="bg-white rounded-full font-bold text-black px-8 py-3 transition duration-300 ease-in-out hover:bg-blue-light mt-10">
                Click here
            </a>
        </div>
    </div>
    <!-- End Header -->


    <div class="bg-white bg-no-repeat bg-scroll bg-cover relative" style="background:
            url('<?php the_field('noise', 'option'); ?>') no-repeat bottom center scroll; background-size: cover; ">
        <div class="lg:max-w-6xl lg:mx-auto">

            <!-- Start Outer -->
            <div class="grid grid-cols-12 pt-10">
                <div class="col-span-12 md:col-span-8">

                    <!-- Start Text Inner Row 1 -->
                    <?php if (have_rows('maryville')): ?>
                        <?php while (have_rows('maryville')): the_row(); ?>
                            <div class="grid grid-cols-12 py-10">
                                <div class="col-span-2">
                                    <img src="<?php the_sub_field('decor_image'); ?>" alt="Tree">
                                </div>
                                <div class="col-span-10">
                                    <h2><?php the_sub_field('location_title'); ?></h2>
                                    <h3><?php the_sub_field('day_1'); ?></h3>
                                    <p><?php the_sub_field('time_1'); ?></p>

                                    <h3><?php the_sub_field('day_2'); ?></h3>
                                    <p><?php the_sub_field('time_2'); ?></p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <!-- End Text Inner Row 1 -->

                    <!-- Start Text Inner Row 2 -->
                    <div class="grid grid-cols-12 py-10">
                        <div class="col-span-2">
                            <img src="" alt="Lamp">
                        </div>
                        <div class="col-span-10">
                            Knoxville
                        </div>
                    </div>
                    <!-- End Text Inner Row 2 -->

                    <!-- Start Text Inner Row 2 -->
                    <div class="grid grid-cols-12 py-10">
                        <div class="col-span-2">
                            <img src="" alt="Tree">
                        </div>
                        <div class="col-span-10">
                            FTG
                        </div>
                    </div>
                    <!-- End Text Inner Row 2 -->

                </div>

                <div class="col-span-12 md:col-span-4">
                    <img src="<?php the_field('houses'); ?>" alt="Houses">
                </div>

            </div>
            <!-- End Outer -->

        </div>
    </div>


<?php
get_footer();