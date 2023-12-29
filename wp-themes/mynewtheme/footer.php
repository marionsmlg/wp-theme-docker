<footer>
    <?php
    $menu_name = 'footer';
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    $menuitems = wp_get_nav_menu_items($menu->term_id, array('order' => 'DESC'));

    if (!empty($menuitems)) :
    ?>
        <?php foreach ($menuitems as $item) : ?>
            <a href="<?= esc_url($item->url) ?>" class="block border-l-4 border-indigo-500 bg-indigo-50 py-2 pl-3 pr-4 text-base font-medium text-indigo-700"><?= esc_html($item->title) ?></a>


        <?php endforeach; ?>
    <?php endif; ?>
</footer>
<?php wp_footer(); ?>