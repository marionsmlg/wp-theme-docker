<div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="flex flex-wrap mx-auto max-w-lg items-center justify-center gap-x-8 gap-y-12 sm:max-w-xl sm:gap-x-10 sm:gap-y-14 lg:mx-0 lg:max-w-none">
        <?php while (have_rows('logo_partners', 'option')) : the_row(); ?>
            <?php if (get_sub_field('logo')) : ?><img class="max-h-12 w-48 object-contain" src="<?php the_sub_field('logo'); ?>" alt="logo-partner" width="158" height="48"><?php endif ?>
        <?php endwhile; ?>
    </div>
</div>