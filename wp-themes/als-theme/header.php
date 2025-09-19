<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    
    <!-- Script pour la page d'accueil seulement (scroll navbar) -->
    <?php if (is_front_page()) : ?>
        <script>
            window.addEventListener("scroll", function() {
                const navbar = document.getElementById("navbar");
                const navLinks = document.querySelectorAll('.nav-link');
                const menuToggle = document.getElementById("menuToggleButton");

                if (window.scrollY > 150) {
                    // Background blanc avec animation fluide
                    navbar.classList.add(
                        "bg-white",
                        "bg-opacity-90",
                        "backdrop-blur-md",
                        "shadow-lg"
                    );

                    // Changer la couleur des liens en noir
                    navLinks.forEach(link => {
                        link.classList.remove('text-white');
                        link.classList.add('text-black');
                    });

                    // Changer la couleur du bouton mobile
                    menuToggle.classList.remove('text-gray-400');
                    menuToggle.classList.add('text-gray-600');

                } else {
                    // Retirer le background
                    navbar.classList.remove(
                        "bg-white",
                        "bg-opacity-90",
                        "backdrop-blur-md",
                        "shadow-lg"
                    );

                    // Remettre les liens en blanc
                    navLinks.forEach(link => {
                        link.classList.remove('text-black');
                        link.classList.add('text-white');
                    });

                    // Remettre la couleur du bouton mobile
                    menuToggle.classList.remove('text-gray-600');
                    menuToggle.classList.add('text-gray-400');
                }
            });
        </script>
    <?php endif; ?>
    
    <!-- Script pour le menu burger sur toutes les pages -->
    <script>
        // Toggle menu mobile avec background adaptatif
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

                        // Style du menu selon la page et le scroll
                        <?php if (is_front_page()) : ?>
                        if (window.scrollY <= 100) {
                            mobileMenu.classList.add("bg-white", "bg-opacity-70", "backdrop-blur-md");
                        } else {
                            mobileMenu.classList.remove("bg-white", "bg-opacity-70", "backdrop-blur-md");
                        }
                        <?php else : ?>
                        // Sur les autres pages, toujours le même style
                        mobileMenu.classList.add("bg-white", "bg-opacity-90", "backdrop-blur-md");
                        <?php endif; ?>
                    } else {
                        // Fermer le menu
                        mobileMenu.classList.add("hidden");
                        burger.classList.remove("hidden");
                        cross.classList.add("hidden");
                        mobileMenu.classList.remove("bg-white", "bg-opacity-70", "bg-opacity-90", "backdrop-blur-md");
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
        <nav id="navbar" class="fixed top-0 w-full z-50 transition-all duration-500 ease-in-out <?php echo is_front_page() ? '' : 'bg-white backdrop-blur-md shadow-lg'; ?>">
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                    <div class="relative flex h-18">
                        <div class="-ml-2 mr-4 flex items-center lg:hidden">
                            <!-- Mobile menu button -->
                            <button type="button" id="menuToggleButton" data-menu-is-open="false"
                                class="relative inline-flex items-center justify-center rounded-full p-2 <?php echo is_front_page() ? 'text-gray-400' : 'text-gray-600'; ?> hover:text-gray-500 focus:outline-none transition-colors duration-200"
                                aria-controls="mobile-menu" aria-expanded="false">
                                <span class="absolute -inset-0.5"></span>
                                <span class="sr-only">Open main menu</span>

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
                                        $text_color = is_front_page() ? 'text-white' : 'text-black';
                                        ?>
                                        <a href="<?= esc_url($item->url) ?>" class="<?= $text_color ?> inline-flex items-center px-1 pt-1 text-sm lg:text-base font-medium <?= $current_class ?> transition-colors duration-300">
                                            <?= esc_html($item->title) ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                                    <a href="/contact">
                                        <button type="button" class="rounded-md sm:px-3.5 sm:py-2.5 px-3 py-2 text-sm sm:text-base font-semibold text-white shadow-sm bg-maincolor hover:bg-maincolor-400 hover:shadow-md transition-all duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 z-10">
                                            Contactez-nous
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
                    </div>
                </div>
        </nav>

    <?php endif; ?>

</body>

</html>