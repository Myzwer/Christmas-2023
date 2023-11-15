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
                <h1 class="text-red text-5xl md:text-8xl font-bold uppercase"><?php the_field('title');?></h1>
                <h1 class="text-red text-4xl md:text-4xl font-bold uppercase"><?php the_field('subtitle');?></h1>
        </div>
    </div>
    <!-- End Header -->


    <div class="bg-red text-white relative z-20">
        <div class='lg:max-w-6xl mx-auto grid grid-cols-12 px-5 md:px-0 py-10 gap-4'>
            <div class="col-span-12 md:col-span-6 relative md:mx-5 mt-5">
                    <h2 class="text-4xl font-bold uppercase pb-2"><?php the_field('resource_title');?></h2>
                    <p class="text-xl"><?php the_field('resource_copy');?></p>
                    <?php
                    // Gravity Forms Shortcode
                    $formid = get_field("form_shortcode");
                    echo do_shortcode("[gravityform id='$formid']");
                    ?>
            </div>
            <div class="col-span-12 md:col-span-6 relative">
                <div class="content-middle-medium">
                <img src=" <?php the_field('resource_image');?>" alt="">
                </div>
            </div>
        </div>
    </div>



<?php
get_footer();