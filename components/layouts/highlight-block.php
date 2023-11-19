<div class="bg-blue">
    <div class='lg:max-w-6xl mx-auto grid grid-cols-12 px-5 md:px-0 py-10 gap-4'>
        <div class="col-span-12 md:col-span-8 relative md:mx-5 mt-5">
            <div class="content-middle-medium">
                <h2 class="text-4xl font-bold uppercase "><?php the_sub_field('title'); ?></h2>
                <h3 class="text-xl font-bold uppercase pb-2"><?php the_sub_field('subtitle'); ?></h3>
                <p class=""><?php the_sub_field('main_copy'); ?></p>

                <?php if( have_rows('button') ): ?>
                <?php while( have_rows('button') ): the_row(); ?>
                    <a href="<?php the_sub_field('button_link'); ?>">
                        <button class="mt-5 mx-auto lg:mx-0 bg-yellow text-black font-bold rounded-md py-3 px-5 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            <?php the_sub_field('button_text'); ?>
                        </button>
                    </a>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>
        <div class="col-span-12 md:col-span-4 relative">
            <div class="image-border">
                <img src="<?php the_sub_field('image'); ?>" alt="Decor Image" class="rounded-image">
                <div class="inset-box"></div>
            </div>
        </div>
    </div>
</div>