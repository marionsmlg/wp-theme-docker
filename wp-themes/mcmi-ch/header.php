<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <?php if (is_front_page()) : ?>
        <script>
            window.addEventListener("scroll", function() {
                const navbar = document.getElementById("navbar");
                if (window.scrollY > 150) {
                    navbar.classList.add(
                        "bg-secondarycolor",
                        "bg-opacity-70",
                        "backdrop-blur-md"
                    );
                } else {
                    navbar.classList.remove(
                        "bg-secondarycolor",
                        "bg-opacity-70",
                        "backdrop-blur-md"
                    );
                }
            });
        </script>
    <?php endif; ?>
</head>



<body>

    <?php
    $menu_name = 'header';
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    $menuitems = wp_get_nav_menu_items($menu->term_id, array('order' => 'DESC'));


    if (!empty($menuitems)) :
    ?>
        <nav id="navbar" class="fixed top-0 w-full z-50 <?php echo is_front_page() ? '' : 'bg-secondarycolor bg-opacity-70 backdrop-blur-md'; ?>">
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                    <div class="relative flex h-16ç">
                        <div class="-ml-2 mr-4 flex items-center lg:hidden">
                            <!-- Mobile menu button -->
                            <button type="button" id="menuToggleButton" data-menu-is-open="false" class="relative inline-flex items-center justify-center rounded-full p-2 text-gray-400 hover:text-gray-500 focus:outline-none" aria-controls="mobile-menu" aria-expanded="false">
                                <span class="absolute -inset-0.5"></span>
                                <span class="sr-only">Open main menu</span>

                                <svg id="burger" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>

                                <svg id="cross" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
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
                                    <img class="h-16 md:h-24 w-auto" src="<?= esc_url($image[0]) ?>" alt="home">
                                </a>

                            </div>
                            <div class="flex">
                                <div class="hidden lg:flex lg:ml-20  lg:space-x-8">
                                    <?php foreach ($menuitems as $item) : ?>
                                        <?php
                                        $current_class = (is_page($item->object_id)) || (is_home() && $item->object_id == get_option('page_for_posts')) || (is_page($item->object_id) && !is_home() && !is_front_page($item->object_id)) || ($item->url === get_post_type_archive_link('post') && !is_front_page($item->object_id) && is_single()) ? 'border-b-2 border-maincolor' : 'border-b-2 border-transparent hover:border-maincolor text-gray-500 hover:text-maincolor';

                                        ?>
                                        <a href="<?= esc_url($item->url) ?>" class="text-white inline-flex items-center px-1 pt-1 text-sm lg:text-base font-medium <?= $current_class ?>">
                                            <?= esc_html($item->title) ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                                    <a href="/contact"><button type="button" class="rounded-md sm:px-3.5 sm:py-2.5 px-3 py-2 text-sm sm:text-base font-semibold text-white shadow-sm bg-maincolor hover:bg-maincolor-400 hover:shadow-md focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 z-10">Contactez-nous</button></a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- Mobile menu -->
                <div class="hidden rounded-b-md" id="mobile-menu">
                    <div class="space-y-1 pb-4 pt-2">
                        <?php foreach ($menuitems as $item) : ?>
                            <?php
                            $current_class = (is_page($item->object_id)) || (is_home() && $item->object_id == get_option('page_for_posts')) || (is_page($item->object_id) && !is_home() && !is_front_page($item->object_id)) || ($item->url === get_post_type_archive_link('post') && !is_front_page($item->object_id) && is_single()) ? 'bg-secondarycolor-300 border-maincolor text-white' : 'border-transparent text-white hover:bg-secondarycolor-400 hover:border-gray-300';
                            ?>
                            <a href="<?= esc_url($item->url) ?>" class="block border-l-4 py-2 pl-3 pr-4 text-base font-medium <?= $current_class ?>"><?= esc_html($item->title) ?></a>
                        <?php endforeach; ?>

                    </div>
                </div>
        </nav>


    <?php endif; ?>


</body>

</html>