<?php

/**
 *   Template Name: Services
 */ ?>

<?php get_header(); ?>

<main class="min-h-screen">
    <?php get_template_part('parts/title-page') ?>

    <div class="py-16">
        <?php
        $total_services = count(get_field('services'));
        $current_index = 0;
        ?>

        <?php while (have_rows('services')) : the_row(); ?>
            <div class="mx-auto max-w-7xl px-8">
                <div class="mb-10">
                    <?php if (get_sub_field('title')) : ?>
                        <?php get_template_part('parts/title-decoration'); ?>
                        <h2 class="text-2xl font-semibold leading-7 text-seondarycolor uppercase"><?php the_sub_field('title'); ?></h2>
                    <?php endif ?>
                </div>

                <div class="grid grid-cols-1 gap-x-10 gap-y-16 sm:gap-y-20 lg:grid-cols-2 items-start">
                    <div>
                        <div class='mb-10'>
                            <?php if (get_sub_field('image')) : ?>
                                <img src="<?php the_sub_field('image'); ?>" alt="illustration service" class="shadow-2xl rounded-lg w-full h-full object-cover object-center">
                            <?php endif ?>
                        </div>
                        <div>
                            <?php if (get_sub_field('image_2')) : ?>
                                <img src="<?php the_sub_field('image_2'); ?>" alt="illustration service" class="shadow-2xl rounded-lg w-full h-full object-cover object-center">
                            <?php endif ?>
                        </div>
                    </div>

                    <div class="lg:pr-4 text-left">
                        <div class="mx-auto lg:mx-0 lg:max-w-lg space-y-6">
                            <?php if (get_sub_field('description')) : ?>
                                <p class="leading-7"><?php the_sub_field('description'); ?></p>
                            <?php endif ?>
                            <div>
                                <?php if (get_sub_field('list_title')) : ?>
                                    <p class="leading-7 mb-2 text-2xl font-semibold text-gray-600"><?php the_sub_field('list_title'); ?></p>
                                <?php endif ?>
                                <ul role="list" class="mt-8 space-y-4">
                                    <?php while (have_rows('list')) : the_row(); ?>
                                        <?php if (get_sub_field('element')) : ?>
                                            <li class="flex gap-x-3">
                                                <svg class="mt-1 h-5 w-5 flex-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                                </svg>
                                                <span><?php the_sub_field('element'); ?></span>
                                            </li>
                                        <?php endif ?>
                                    <?php endwhile; ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <?php
                $current_index++;


                if ($current_index < $total_services) :
                ?>
                    <div class="py-14 md:py-20">
                        <div class="max-w-4xl mx-auto border-t border-gray-300"></div>
                    </div>
                <?php endif; ?>

            </div>
        <?php endwhile; ?>

    </div>

    <?php while (have_rows('cta')) : the_row(); ?>
        <div class="mx-auto max-w-7xl sm:px-6 sm:pb-32">
            <div class="relative isolate overflow-hidden bg-maincolor px-6 py-24 text-center sm:shadow-2xl sm:rounded-xl sm:px-16">
                <h2 class="text-xl font-semibold tracking-tight text-center text-white sm:text-3xl"><?php if (get_sub_field('line_1')) : ?><?php the_sub_field('line_1'); ?><?php endif; ?><br><?php if (get_sub_field('line_2')) : ?><?php the_sub_field('line_2'); ?><?php endif; ?></h2>
                <?php if (get_sub_field('button_text')) : ?>
                    <?php if (get_sub_field('button_url')) : ?>
                        <div class="mt-10 gap-x-6">
                            <a href="<?php the_sub_field('button_url'); ?>"><button type="button" class="rounded-md sm:px-3.5 sm:py-2.5 px-3 py-2 lg:text-base text-sm font-semibold text-gray-700 shadow-sm bg-white hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 z-10"><?php the_sub_field('button_text'); ?></button></a>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>