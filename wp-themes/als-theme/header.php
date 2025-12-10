<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    
    <!-- Script pour le menu burger sur toutes les pages -->
    <script>
        // Toggle menu mobile
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById("menuToggleButton");
            const mobileMenu = document.getElementById("mobile-menu");
            const burger = document.getElementById("burger");
            const cross = document.getElementById("cross");

            if (menuToggle && mobileMenu && burger && cross) {
                menuToggle.addEventListener("click", function() {
                    const isOpen = mobileMenu.classList.contains("hidden");

                    if (isOpen) {
                        // Ouvrir le menu
                        mobileMenu.classList.remove("hidden");
                        burger.classList.add("hidden");
                        cross.classList.remove("hidden");
                
                    } else {
                        // Fermer le menu
                        mobileMenu.classList.add("hidden");
                        burger.classList.remove("hidden");
                        cross.classList.add("hidden");
           
                    }
                });
            }
        });
    </script>
</head>

<body>

    <?php
    $menu_name = 'header';
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    $menuitems = wp_get_nav_menu_items($menu->term_id, array('order' => 'DESC'));

    if (!empty($menuitems)) :
    ?>
        <nav id="navbar" class="fixed top-0 w-full z-50 bg-white bg-opacity-90 backdrop-blur-md shadow-lg transition-all duration-500 ease-in-out">
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                    <div class="relative flex h-18">
                        <div class="-ml-2 mr-4 flex items-center lg:hidden">
                            <!-- Mobile menu button -->
                            <button type="button" id="menuToggleButton" data-menu-is-open="false"
                                class="relative inline-flex items-center justify-center rounded-full p-2 text-gray-600 hover:text-gray-500 focus:outline-none transition-colors duration-200"
                                aria-controls="mobile-menu" aria-expanded="false">
                                <span class="absolute -inset-0.5"></span>
                                <span class="sr-only"><?= als_translate('Open main menu') ?></span>

                                <svg id="burger" class="block h-6 w-6 transition-all duration-200" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>

                                <svg id="cross" class="hidden h-6 w-6 transition-all duration-200" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                        <div class="flex flex-1 items-center lg:items-stretch justify-between">
                            <div class="flex flex-shrink-0 items-center">
                                <?php
                                $custom_logo_id = get_theme_mod('custom_logo');
                                $image = wp_get_attachment_image_src($custom_logo_id, 'large'); ?>

                                <a href="<?php $url = home_url();
                                            echo $url; ?>">
                                    <?php
                                    $custom_logo_id = get_theme_mod('custom_logo');
                                    $logo = wp_get_attachment_image_src($custom_logo_id, 'full'); ?>
                                    <img class="h-16 md:h-24 w-auto transition-all duration-300" src="<?= esc_url($image[0]) ?>" alt="home">
                                </a>
                            </div>

                            <div class="flex">
                                <div class="hidden lg:flex lg:ml-20 lg:space-x-8">
                                    <?php foreach ($menuitems as $item) : ?>
                                        <?php
                                        $current_class = (is_page($item->object_id)) || (is_home() && $item->object_id == get_option('page_for_posts')) || (is_page($item->object_id) && !is_home() && !is_front_page($item->object_id)) || ($item->url === get_post_type_archive_link('post') && !is_front_page($item->object_id) && is_single()) ? 'nav-link active' : 'nav-link';
                                        ?>
                                        <a href="<?= esc_url($item->url) ?>" class="text-black inline-flex items-center px-1 pt-1 text-sm lg:text-base font-medium <?= $current_class ?> transition-colors duration-300">
                                            <?= esc_html($item->title) ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                                <div class="absolute inset-y-0 right-0 flex items-center gap-3 pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                                    <?php if (function_exists('pll_the_languages')) : ?>
                                        <div class="language-switcher hidden lg:block">
                                            <?php
                                            $languages = pll_the_languages(array(
                                                'raw' => 1,
                                                'hide_if_empty' => 0
                                            ));
                                            if ($languages) :
                                            ?>
                                                <div class="flex gap-2 items-center">
                                                    <?php foreach ($languages as $lang) : ?>
                                                        <a href="<?= esc_url($lang['url']) ?>"
                                                           class="language-link flex items-center gap-1 text-sm font-medium px-2 py-1 rounded transition-all duration-200 <?= $lang['current_lang'] ? 'bg-maincolor text-white' : 'text-gray-700 hover:bg-gray-100' ?>"
                                                           title="<?= esc_attr($lang['name']) ?>"
                                                           hreflang="<?= esc_attr($lang['slug']) ?>">
                                                            <?php if (!empty($lang['flag'])) : ?>
                                                                <img src="<?= esc_url($lang['flag']) ?>"
                                                                     alt="<?= esc_attr($lang['name']) ?>"
                                                                     width="20"
                                                                     height="14"
                                                                     class="inline-block" />
                                                            <?php endif; ?>
                                                            <span class="uppercase font-semibold"><?= esc_html($lang['slug']) ?></span>
                                                        </a>
                                                    <?php endforeach; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>

                                    <a href="/contact">
                                        <button type="button" class="rounded-md sm:px-3.5 sm:py-2.5 px-3 py-2 text-sm sm:text-base font-semibold text-white shadow-sm bg-maincolor hover:bg-maincolor-400 hover:shadow-md transition-all duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 z-10">
                                            <?= als_translate('Contactez-nous') ?>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mobile menu -->
                <div class="hidden rounded-b-md transition-all duration-300 ease-in-out" id="mobile-menu">
                    <div class="space-y-1 pb-4 pt-2">
                        <?php foreach ($menuitems as $item) : ?>
                            <?php
                            $current_class = (is_page($item->object_id)) || (is_home() && $item->object_id == get_option('page_for_posts')) || (is_page($item->object_id) && !is_home() && !is_front_page($item->object_id)) || ($item->url === get_post_type_archive_link('post') && !is_front_page($item->object_id) && is_single()) ? 'bg-maincolor-50 border-maincolor text-black' : 'border-transparent text-black hover:bg-maincolor-50 hover:border-gray-300';
                            ?>
                            <a href="<?= esc_url($item->url) ?>" class="block border-l-4 py-2 pl-3 pr-4 text-base font-medium <?= $current_class ?> transition-colors duration-200">
                                <?= esc_html($item->title) ?>
                            </a>
                        <?php endforeach; ?>

                        <?php if (function_exists('pll_the_languages')) : ?>
                            <?php
                            $languages = pll_the_languages(array(
                                'raw' => 1,
                                'hide_if_empty' => 0
                            ));
                            if ($languages) :
                            ?>
                                <!-- Séparateur -->
                                <div class="border-t border-gray-200 my-2"></div>

                                <!-- Sélecteur de langue mobile -->
                                <div class="px-3 py-2">
                                    <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Langue</p>
                                    <div class="flex flex-wrap gap-2">
                                        <?php foreach ($languages as $lang) : ?>
                                            <a href="<?= esc_url($lang['url']) ?>"
                                               class="flex items-center gap-2 px-3 py-2 rounded-md text-sm font-medium transition-all duration-200 <?= $lang['current_lang'] ? 'bg-maincolor text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' ?>"
                                               hreflang="<?= esc_attr($lang['slug']) ?>">
                                                <?php if (!empty($lang['flag'])) : ?>
                                                    <img src="<?= esc_url($lang['flag']) ?>"
                                                         alt="<?= esc_attr($lang['name']) ?>"
                                                         width="20"
                                                         height="14"
                                                         class="inline-block" />
                                                <?php endif; ?>
                                                <span class="uppercase font-semibold"><?= esc_html($lang['slug']) ?></span>
                                            </a>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
        </nav>

    <?php endif; ?>

</body>

</html>