<div class="bg-blue">
    <div class='lg:max-w-6xl mx-auto grid grid-cols-12 p-5 py-10 gap-4'>
        <div class="col-span-12 md:col-span-8 relative md:mx-10 mt-5">
            <div class="content-middle-medium">
                <h2 class="text-4xl font-bold uppercase pb-2"><?php the_sub_field('title'); ?></h2>
                <p class=""><?php the_sub_field('main_copy'); ?></p>
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