<?php get_header(); ?>
<main class="min-h-screen">

    <div class="relative h-80 md:h-96 mt-16">
        <img src="https://mcmi-ch.com/wp-content/uploads/2024/09/absolutvision-WYd_PkCa1BY-unsplash.jpg" alt="actualités" class="aspect-[5/2] h-80 md:h-96 object-center w-full object-cover">
        <div class="absolute inset-0 bg-secondarycolor opacity-50 shadow-xl"></div>

        <div class="absolute inset-0 flex flex-col justify-center p-6 max-w-7xl m-auto">

            <h1 class="font-semibold text-3xl text-white sm:text-4xl mb-4"><?php single_post_title(); ?></h1>
            <p class="text-white border-l-2 border-maincolor pl-2 max-w-xl mr-auto">Découvrez les dernières nouvelles, les événements à venir et les réalisations récentes de notre entreprise</p>
        </div>
    </div>

    <div class="relative mx-auto mt-12 max-w-7xl px-4 pb-16 sm:px-6 sm:pb-24 lg:px-8">

        <?php if (have_posts()) : ?>
            <div class="bg-white pb-14 md:pb-24">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl lg:max-w-4xl">
                        <div class="mt-16 space-y-20 lg:mt-20 lg:space-y-20">
                            <?php while (have_posts()) : the_post();
                                $categories = get_the_category(); ?>
                                <article class="relative isolate flex flex-col gap-8 lg:flex-row">
                                    <div class="relative aspect-[16/9] sm:aspect-[2/1] lg:aspect-square lg:w-64 lg:shrink-0">
                                        <?php the_post_thumbnail('medium_large', ['class' => 'absolute inset-0 h-full w-full rounded-2xl bg-gray-50 object-cover']) ?>

                                        <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                                    </div>
                                    <div>
                                        <div class="flex items-center gap-x-4 text-xs">
                                            <p class="text-gray-500"><?php echo get_the_date(); ?></p>
                                            <?php if (!empty($categories)) :
                                                $first_category = $categories[0]; ?>
                                                <?php if ($first_category->name !== 'Non classé') :
                                                ?>
                                                    <p class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600"><?= esc_html($first_category->name) ?></p>
                                                <?php endif ?>
                                            <?php endif ?>
                                        </div>
                                        <div class="group relative max-w-xl">
                                            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                                <a href="<?php the_permalink() ?>">
                                                    <span class="absolute inset-0"></span>
                                                    <?php the_title(); ?>
                                                </a>
                                            </h3>
                                            <p class="mt-5 text-sm leading-6 text-gray-600"><?php echo wp_trim_words(get_the_excerpt(), 30, '...'); ?></p>
                                        </div>
                                        <div class="mt-6 flex border-t border-gray-900/5 pt-6">
                                            <!-- <div class="relative flex items-center gap-x-4">
                                            <div class="text-sm leading-6">
                                                <p class="font-semibold text-gray-900">
                                                    <span class="absolute inset-0"></span>
                                                    Michael Foster
                                                </p>
                                                <p class="text-gray-600">Co-Founder / CTO</p>
                                            </div>
                                        </div> -->
                                        </div>
                                    </div>
                                </article>
                            <?php endwhile; ?>
                            <?php the_posts_pagination(array(
                                'mid_size'  => 2,
                                'prev_text' => __('<p class="mr-1"> &larr;</p> Page précédente', 'textdomain'),
                                'next_text' => __('Page suivante <p class="ml-1"> &rarr;</p>', 'textdomain'),

                            )); ?>

                        </div>

                    </div>

                </div>
            </div>
        <?php else : ?>
            <h1>Pas d'articles</h1>
        <?php endif; ?>





</main>




<?php get_footer(); ?>