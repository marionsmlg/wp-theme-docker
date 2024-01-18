<?php get_header(); ?>
<main class="mt-16 min-h-screen">
    <div class="relative h-40 md:h-56">
        <img src="https://eseisdotfr.wpcomstaging.com/wp-content/uploads/2024/01/absolutvision-WYd_PkCa1BY-unsplash.jpg" alt="image des actualités" class="aspect-[5/2] h-40 md:h-56 object-center w-full object-cover">
        <div class="absolute inset-0 bg-black opacity-40 shadow-xl"></div>
        <div class="absolute inset-0 p-6 md:p-16 flex items-center justify-center ">

            <h1 class="font-semibold text-4xl text-white sm:text-5xl"><?php single_post_title(); ?></h1>
        </div>

    </div>


    <?php if (have_posts()) : ?>
        <div class="bg-white py-14 md:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:max-w-4xl">
                    <h2 class="text-3xl font-bold tracking-tight text-eseisblue-500 sm:text-4xl">Exploiter le futur de l'environnement de travail</h2>
                    <p class="mt-2 text-lg leading-8 text-gray-600">Découvrez toutes les actualités d'ESEIS</p>
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