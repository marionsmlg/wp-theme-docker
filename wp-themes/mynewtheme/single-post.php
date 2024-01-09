<?php get_header(); ?>


<div class="mt-16 pt-16 min-h-screen px-4 sm:px-6 md:px-8">
        <div class="max-w-3xl mx-auto">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <p class="pointer-events-none block text-sm font-medium text-gray-500"><?php echo get_the_date(); ?></p>
                                <article class="pt-10">
                                        <h1 class="text-2xl font-extrabold text-blue-900 md:text-3xl mb-6"><?php the_title(); ?></h1>

                                        <?php if (get_field('description')) : ?>

                                                <p class="text-lg leading-8 text-gray-600"><?php the_field('description'); ?></p>

                                        <?php endif; ?>

                                        <div>
                                                <?php the_post_thumbnail('large', ['class' => 'mt-12 aspect-[6/3] w-full object-cover rounded-2xl']) ?>
                                        </div>


                                        <div class="prose max-w-none prose-img:rounded-xl prose-a:text-blue-600 hover:prose-a:text-blue-500 w-full py-12"> <?php the_content(); ?></div>
                                </article>


                <?php endwhile;
                endif; ?>


                <nav class="flex items-center justify-between border-t border-gray-200 px-4 pb-8 sm:px-0">
                        <div class="-mt-px flex w-0 flex-1">

                                <div class="inline-flex items-center h-10 border-t-2 border-transparent pr-1 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
                                        <?php $next_post = get_next_post();
                                        if (!empty($next_post)) : ?>
                                                <svg class="mr-3 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd" d="M18 10a.75.75 0 01-.75.75H4.66l2.1 1.95a.75.75 0 11-1.02 1.1l-3.5-3.25a.75.75 0 010-1.1l3.5-3.25a.75.75 0 111.02 1.1l-2.1 1.95h12.59A.75.75 0 0118 10z" clip-rule="evenodd" />
                                                </svg>
                                        <?php endif; ?>
                                        <?php
                                        $next_post_title = $next_post->post_title;
                                        $trim_next_title = wp_trim_words($next_post_title, 10, '...');
                                        ?>
                                        <div class="hidden sm:flex"><?php next_post_link("%link", $trim_next_title); ?></div>
                                        <div class="flex sm:hidden"><?php next_post_link("%link", 'Précédent'); ?></div>

                                </div>
                        </div>

                        <div class="-mt-px flex w-0 flex-1 justify-end">
                                <div class="inline-flex items-center h-10 border-t-2 border-transparent pl-1 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
                                        <?php $previous_post = get_previous_post();
                                        $prev_post_title = $previous_post->post_title;
                                        $trim_prev_title = wp_trim_words($prev_post_title, 10, '...');
                                        ?>

                                        <div class="hidden sm:flex"><?php previous_post_link("%link",  $trim_prev_title); ?></div>
                                        <div class="flex sm:hidden"><?php previous_post_link("%link", 'Suivant'); ?></div>
                                        <?php
                                        if (!empty($previous_post)) : ?>
                                                <svg class="ml-3 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd" d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z" clip-rule="evenodd" />
                                                </svg>
                                        <?php endif; ?>
                                </div>
                        </div>
                </nav>

        </div>




</div>





<?php get_footer(); ?>