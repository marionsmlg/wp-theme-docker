<?php
if (has_post_thumbnail()) {
?>
    <div class="relative h-80 md:h-96">

        <?php the_post_thumbnail('full', ['class' => 'aspect-[5/2] h-80 md:h-96 object-center w-full object-cover']) ?>
        <div class="absolute inset-0 bg-black opacity-50 shadow-xl"></div>

        <div class="absolute inset-0 flex flex-col justify-center p-6 max-w-7xl m-auto">

            <h1 class="font-semibold text-3xl text-white sm:text-4xl mb-4"><?php single_post_title(); ?></h1>
            <?php if (get_field('subtitle_page')) : ?>
                <p class="text-white border-l-2 border-maincolor pl-2 max-w-xl mr-auto"><?php the_field('subtitle_page'); ?></p>
            <?php endif; ?>
        </div>
    </div>
<?php
} else {
?>
    <div class="relative h-80 md:h-96 bg-zinc-600">

        <div class="absolute inset-0 flex flex-col justify-center p-10 max-w-7xl m-auto">

            <h1 class="font-semibold text-3xl text-white sm:text-4xl mb-4"><?php single_post_title(); ?></h1>
            <?php if (get_field('subtitle_page')) : ?>
                <p class="text-white border-l-2 border-maincolor pl-2 max-w-xl mr-auto"><?php the_field('subtitle_page'); ?></p>
            <?php endif; ?>
        </div>
    </div>
<?php
}
?>