<?php
/**
 * Template Name: Form Success
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 *
 * @package WordPress
 * @subpackage Letitsnow
 * @since 1.0.0
 */

get_header(); ?>

    <div class="grid grid-cols-12">
        <div class="col-span-12 md:col-span-6 text-center">
            <div class="md:text-left md:mx-10">

                <p class="md:mt-10 uppercase">Form Success</p>
                <h1 class="text-2xl md:text-3xl">The PDF is on its way to you!</h1>
                <p>You should recieve an email in the next few moments with your download. Merry Christmas!</p>
                <div class="mt-10">
                    <a href="/">
                        <button class="mx-auto lg:mx-0 bg-red text-white font-bold rounded-md py-3 px-5 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            Back to Homepage
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-span-12 md:col-span-6">
            <div class="bg-no-repeat bg-scroll bg-cover relative"
                 style="background: url('<?php the_field('side_image'); ?>') center center;
                         height: 80vh;">
            </div>
        </div>
    </div>

<?php get_footer();