<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

</head>

<body>

    <?php
    $menu_name = 'header';
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    $menuitems = wp_get_nav_menu_items($menu->term_id, array('order' => 'DESC'));

    if (!empty($menuitems)) :
    ?>
        <nav class="bg-white shadow fixed top-0 w-full z-50">
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                <div class="relative flex h-16 justify-between">
                    <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                        <!-- Mobile menu button -->
                        <button type="button" id="menuToggleButton" data-menu-is-open="false" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-controls="mobile-menu" aria-expanded="false">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            <!--
            Icon when menu is closed.

            Menu open: "hidden", Menu closed: "block"
          -->
                            <svg id="burger" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <!--
            Icon when menu is open.

            Menu open: "block", Menu closed: "hidden"
          -->
                            <svg id="cross" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                        <div class="flex flex-shrink-0 items-center">
                            <!-- <?php
                                    $custom_logo_id = get_theme_mod('custom_logo');
                                    $image = wp_get_attachment_image_src($custom_logo_id, 'full'); ?> -->
                            <!-- <img class="h-8 w-auto" src="<?= esc_url($image[0]) ?>" alt="Your Company"> -->

                            <div class="">
                                <a href="<?php $url = home_url();
                                            echo $url; ?>">
                                    <?php
                                    $custom_logo_id = get_theme_mod('custom_logo');
                                    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

                                    if (has_custom_logo()) {
                                        echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" width="100%" class="logo">';
                                    } else {
                                        echo '<h1>' . get_bloginfo('name') . '</h1>';
                                    } ?>
                                </a>
                            </div>


                        </div>
                        <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                            <?php foreach ($menuitems as $item) : ?>
                                <?php
                                $current_class = (is_page($item->object_id) || is_single($item->object_id)) ? 'border-b-2 border-indigo-500 text-gray-900' : 'border-b-2 border-transparent hover:border-gray-300 text-gray-500 hover:text-gray-700';
                                ?>
                                <a href="<?= esc_url($item->url) ?>" class="inline-flex items-center px-1 pt-1 text-sm font-medium  <?= $current_class ?>">
                                    <?= esc_html($item->title) ?>
                                </a>
                            <?php endforeach; ?>
                        </div>

                    </div>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                        <a href="/contactez-nous"><button type="button" class="rounded-md bg-blue-900 px-3.5 py-2.5 text-lg font-semibold text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 z-10">Contactez-nous</button></a>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="hidden" id="mobile-menu">
                <div class="space-y-1 pb-4 pt-2">
                    <?php foreach ($menuitems as $item) : ?>
                        <?php
                        $current_class = (is_page($item->object_id) || is_single($item->object_id)) ? 'bg-indigo-50 border-indigo-500 text-indigo-700' : 'border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700';
                        ?>
                        <a href="<?= esc_url($item->url) ?>" class="block border-l-4 py-2 pl-3 pr-4 text-base font-medium <?= $current_class ?>"><?= esc_html($item->title) ?></a>
                    <?php endforeach; ?>

                </div>
            </div>
        </nav>


    <?php endif; ?>









</body>

</html>