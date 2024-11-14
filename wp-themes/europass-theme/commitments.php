<?php

/**
 *   Template Name: Engagements
 */ ?>

<?php get_header(); ?>

<main class="mt-16 min-h-screen">
    <?php get_template_part('parts/title-page') ?>

    <div class="bg-white">

        <div class="relative mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-24 lg:px-8">

            <?php while (have_rows('section_1')) : the_row(); ?>
                <div class="pb-20 px-6 sm:pb-24">
                    <div class="mx-auto max-w-2xl text-center lg:max-w-4xl flex flex-col items-center">
                        <?php if (get_sub_field('title')) : ?>
                            <?php get_template_part('parts/title-decoration'); ?>
                            <h2 class="text-2xl font-semibold leading-7 text-secondarycolor uppercase"><?php the_sub_field('title'); ?></h2>
                        <?php endif; ?>
                        <?php if (get_sub_field('subtitle')) : ?>
                            <p class="mt-6 text-lg leading-8 text-gray-600">
                                <?php the_sub_field('subtitle'); ?>
                            </p>
                        <?php endif; ?>
                    </div>

                    <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                        <?php while (have_rows('arguments')) : the_row(); ?>

                            <div class="flex flex-col items-start justify-between border-2 bg-gray-100 pb-4 shadow-lg">
                                <?php if (get_sub_field('image')) : ?>
                                    <div class="relative w-full">
                                        <img src="<?php the_sub_field('image'); ?>" alt="Illustration service" class="aspect-[16/9] w-full bg-gray-100 object-cover sm:aspect-[2/1]">

                                    </div>
                                <?php endif; ?>
                                <div class="w-full h-full p-6">
                                    <div class="group relative flex flex-col items-center justify-center">
                                        <?php if (get_sub_field('title')) : ?>
                                            <h3 class="mt-3 text-lg md:text-xl font-semibold leading-6 text-gray-900 text-center">
                                                <?php the_sub_field('title'); ?>
                                            </h3>
                                        <?php endif; ?>
                                        <ul class="mt-5 font-semibold leading-6 text-gray-600 text-center space-y-2">

                                            <?php if (get_sub_field('description')) : ?>
                                                <li> <?php the_sub_field('description'); ?></li>
                                            <?php endif; ?>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>

                </div>
        </div>
    <?php endwhile; ?>


    <?php while (have_rows('section_2')) : the_row(); ?>
        <div class="pb-20 px-8 pt-20 sm:pb-24 bg-maincolor-100 ">
            <div class="mx-auto max-w-2xl text-center lg:max-w-4xl flex flex-col items-center">
                <?php if (get_sub_field('title')) : ?>
                    <?php get_template_part('parts/title-decoration'); ?>
                    <h2 class="text-2xl font-semibold leading-7 text-secondarycolor uppercase"><?php the_sub_field('title'); ?></h2>
                <?php endif; ?>
                <?php if (get_sub_field('subtitle')) : ?>
                    <p class="mt-6 text-lg leading-8 text-gray-600">
                        <?php the_sub_field('subtitle'); ?>
                    </p>
                <?php endif; ?>
            </div>

            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-7xl">
                <dl class="grid max-w-2xl grid-cols-1 gap-x-24 gap-y-10 lg:max-w-none lg:grid-cols-3 lg:gap-y-16">
                    <?php while (have_rows('arguments')) : the_row(); ?>
                        <div class="relative p-8 bg-white border-2 shadow-md">
                            <dt class="text-base flex flex-col items-center text-center font-semibold leading-7 text-gray-900 gap-2">
                                <div class="flex h-12 w-12 items-center justify-center">
                                    <?php if (get_sub_field('icon')) : ?>
                                        <img class="style-svg h-20 w-20 text-white" src="<?php the_sub_field('icon'); ?>" alt="" />
                                    <?php endif; ?>
                                </div>
                                <?php if (get_sub_field('title')) : ?>
                                    <?php the_sub_field('title'); ?>
                                <?php endif; ?>
                            </dt>
                            <?php if (get_sub_field('description')) : ?>
                                <dd class="mt-2 text-base leading-7 text-gray-600 text-center"><?php the_sub_field('description'); ?></dd>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                </dl>
            </div>
        </div>
    <?php endwhile; ?>


    <?php while (have_rows('section_3')) : the_row(); ?>
        <div class="relative bg-gray-100">
            <?php if (get_sub_field('image')) : ?>
                <img class="h-56 w-full bg-gray-50 object-cover lg:absolute lg:inset-y-0 lg:left-0 lg:h-full lg:w-1/2" src="<?php the_sub_field('image'); ?>" alt="choose-us" />
            <?php endif; ?>
            <div class="mx-auto grid max-w-7xl lg:grid-cols-2">
                <div class="px-6 py-16 sm:pb-32 sm:pt-20 lg:col-start-2 lg:px-8 lg:pt-32">
                    <div class="mx-auto max-w-2xl lg:mr-0 lg:max-w-lg">
                        <?php if (get_sub_field('title')) : ?>
                            <?php get_template_part('parts/title-decoration'); ?>
                            <h2 class="text-2xl font-semibold leading-7 text-secondarycolor uppercase"><?php the_sub_field('title'); ?></h2>
                        <?php endif; ?>
                        <?php if (get_sub_field('subtitle')) : ?>
                            <p class="mt-6 text-lg leading-8 text-gray-700"><?php the_sub_field('subtitle'); ?></p>
                        <?php endif; ?>

                        <ul class="mt-10 lg:mt-16 space-y-5">
                            <?php while (have_rows('list')) : the_row(); ?>
                                <?php if (get_sub_field('text')) : ?>
                                    <li class="flex gap-x-3">

                                        <svg class="text-maincolor" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M20 6 9 17l-5-5" />
                                        </svg>
                                        <span class="md:text-lg font-semibold"><?php the_sub_field('text'); ?></span>
                                    </li>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>



    <!-- CTA -->
    <?php while (have_rows('cta')) : the_row(); ?>
        <div class="bg-gray-100">
            <div class="mx-auto max-w-7xl px-6 py-14 sm:py-32 lg:flex lg:items-center lg:justify-between lg:px-8">
                <div class="flex flex-col">
                    <?php if (get_sub_field('line_1')) : ?>
                        <h2 class="text-xl font-semibold tracking-tight text-gray-700 sm:text-3xl"><?php the_sub_field('line_1'); ?></h2>
                    <?php endif; ?>
                    <?php if (get_sub_field('line_2')) : ?>
                        <p class=" mt-6 max-w-xl text-lg/8 text-gray-600"><?php the_sub_field('line_2'); ?></p>
                    <?php endif; ?>
                </div>

                <?php if (get_sub_field('button_text')) : ?>
                    <?php if (get_sub_field('button_url')) : ?>
                        <div class="mt-10 flex items-center gap-x-6 lg:mt-0 lg:flex-shrink-0">
                            <a href="<?php the_sub_field('button_url'); ?>"><button type="button" class="rounded-md sm:px-3.5 sm:py-2.5 px-3 py-2 lg:text-base text-sm font-semibold text-white shadow-sm bg-maincolor-500 hover:bg-maincolor-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 z-10"><?php the_sub_field('button_text'); ?></button></a>

                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    <?php endwhile; ?>



</main>












<?php get_footer(); ?>