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

    <!-- Start Particles-->
    <div id="particles-js"></div>
    <!-- End particles -->

    <!-- Start Header -->
    <video class="header-video" src="<?php the_field('video'); ?>" autoplay loop playsinline muted></video>

    <div class="viewport-header">
        <div class="head-container z-10">
            <div class="w-10/12 md:w-1/2 mx-auto">
                <img src="<?php the_field('acf_logo');?>" alt="ACF Logo">
            </div>
            <div class="bg-white rounded-xl shadow-xl p-3 m-5">
            <h2 class="text-red text-xl md:text-3xl font-bold uppercase"><?php the_field('subtitle');?></h2>
            </div>
        </div>
    </div>
    <!-- End Header -->
<div class="bg-white relative z-20">
    <div class="bg-no-repeat bg-scroll bg-cover relative" style="background:
            url('<?php the_field('noise', 'option'); ?>') no-repeat bottom center scroll; background-size: cover; ">
        <div class="lg:max-w-6xl lg:mx-auto">

            <!-- Start Outer -->
            <div class="grid grid-cols-12 pt-10">
                <div class="col-span-12 md:col-span-8">

                    <!-- Start Text Inner Row 1 - Maryville -->
                    <?php if (have_rows('maryville')): ?>
                        <?php while (have_rows('maryville')): the_row(); ?>
                            <div class="grid grid-cols-12 gap-4 p-5 py-10">
                                <div class="col-span-2 relative">
                                    <div class="content-middle">
                                        <img src="<?php the_sub_field('decor_image'); ?>" alt="Tree">
                                    </div>
                                </div>
                                <div class="col-span-10">
                                    <h2 class="text-4xl font-bold uppercase pb-2"><?php the_sub_field('location_title'); ?></h2>
                                    <h3 class="text-xl font-bold uppercase"><?php the_sub_field('day_1'); ?></h3>
                                    <p class="pb-5"><?php the_sub_field('time_1'); ?></p>

                                    <h3 class="text-xl font-bold uppercase"><?php the_sub_field('day_2'); ?></h3>
                                    <p><?php the_sub_field('time_2'); ?></p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <!-- End Text Inner Row 1 -->

                    <!-- Start Text Inner Row 2 - Knoxville -->
                    <?php if (have_rows('knoxville')): ?>
                        <?php while (have_rows('knoxville')): the_row(); ?>
                            <div class="grid grid-cols-12 gap-4 p-5 py-10">
                                <div class="col-span-2 relative">
                                    <div class="content-middle">
                                        <img src="<?php the_sub_field('decor_image'); ?>" alt="Lamp">
                                    </div>
                                </div>
                                <div class="col-span-10">
                                    <h2 class="text-4xl font-bold uppercase pb-2"><?php the_sub_field('location_title'); ?></h2>
                                    <h3 class="text-xl font-bold uppercase"><?php the_sub_field('day_1'); ?></h3>
                                    <p class="pb-5"><?php the_sub_field('time_1'); ?></p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <!-- End Text Inner Row 2 -->

                    <!-- Start Text Inner Row 3 - FTG -->
                    <?php if (have_rows('ftg')): ?>
                        <?php while (have_rows('ftg')): the_row(); ?>
                            <div class="grid grid-cols-12 gap-4 p-5 py-10 -mb-24 md:mb-10 z-10 relative">
                                <div class="col-span-2 relative">
                                    <div class="content-middle">
                                        <img src="<?php the_sub_field('decor_image'); ?>" alt="Tree">
                                    </div>
                                </div>
                                <div class="col-span-10">
                                    <h2 class="text-4xl font-bold uppercase pb-2"><?php the_sub_field('location_title'); ?></h2>
                                    <a href="<?php the_sub_field('button_link'); ?>">
                                        <button class="mx-auto lg:mx-0 bg-yellow text-black font-bold rounded-md py-3 px-5 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                            <?php the_sub_field('button_text'); ?>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <!-- End Text Inner Row 3 -->

                </div>

                <div class="col-span-12 md:col-span-4 relative z-0 px-5">
                    <img class="md:absolute bottom-0" src="<?php the_field('houses'); ?>" alt="Houses">
                </div>

            </div>
            <!-- End Outer -->

        </div>
    </div>
</div>

<?php
// Check value exists.
if (have_rows('experience_info')) :

    // used for alternating colors
    // Note Highlight overrides this to force a blue
    $counter = 0;

    // Loop through rows.
    while (have_rows('experience_info')) : the_row();

        if (0 === $counter % 2) {
            $bg = 'bg-red';
            $font = "text-white";
        } else {
            $bg = 'bg-yellow';
            $font = "text-black";
        }

        echo "<div class='$bg $font'>";

        switch (get_row_layout()) {
            case 'standard_block':
                echo "<div class='col-span-12'>";
                get_template_part('components/layouts/info-block');
                echo "</div>";
                break;

            case 'highlight_block':
                echo "<div class='col-span-12'>";
                get_template_part('components/layouts/highlight-block');
                echo "</div>";
                break;

        }
        echo "</div>";
        $counter++;

        // End loop.
    endwhile;
endif;
?>
    </div>

    <!-- Start FAQ -->
        <?php get_template_part('components/layouts/faq'); ?>
    <!-- END FAQ -->

<?php
get_footer();