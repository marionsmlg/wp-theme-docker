<footer class="bg-[#D5E8F3]">

    <div class="mx-auto max-w-7xl px-6 py-12 md:flex md:items-center md:justify-between lg:px-8">

        <?php
        $custom_logo_id = get_theme_mod('custom_logo');
        $image = wp_get_attachment_image_src($custom_logo_id, 'full'); ?>
        <img class="h-16 w-auto flex" src="<?= esc_url($image[0]) ?>" alt="Eseis">

        <div class="space-x-6 mt-8 md:mt-0">
            <p class="text-gray-500 font-semibold">Suivez-nous sur LinkedIn</p>
            <?php if (get_field('linkedin', 'option')) : ?>
                <a href="<?php the_field('linkedin', 'option') ?>" target="_blank" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">LinkedIn</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                    </svg>
                </a>
            <?php endif ?>
        </div>

    </div>
    <?php
    $menu_name = 'footer';
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    $menuitems = wp_get_nav_menu_items($menu->term_id, array('order' => 'DESC'));
    if (!empty($menuitems)) :
    ?>
        <div class="bg-blue-900 h-fit flex justify-center items-center">
            <div class="w-full text-center text-sm font-semibold text-white flex flex-wrap justify-center items-center py-6 px-3">
                <p>&copy; 2024 Eseis | </p>
                <?php $total_items = count($menuitems); ?>
                <?php foreach ($menuitems as $index => $item) : ?>
                    <a href="<?= esc_url($item->url) ?>" class="text-white mx-2"> <?= esc_html($item->title) ?></a>
                    <?= ($index < $total_items - 1) ? '|' : '' ?>
                <?php endforeach; ?>

            </div>
        </div>
    <?php endif; ?>
</footer>
<?php wp_footer(); ?>