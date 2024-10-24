<?php

/**
 *   Template Name: Services
 */ ?>

<?php get_header(); ?>

<main class="mt-16 min-h-screen">
<?php get_template_part('parts/title-page') ?>

    <div class="bg-white">
     
        <div class="relative mx-auto -mt-12 max-w-7xl px-4 pb-16 sm:px-6 sm:pb-24 lg:px-8">

            <?php while (have_rows('hard_services')) : the_row(); ?>
                <div class="mx-auto max-w-6xl px-2 lg:px-8 mt-16 lg:mt-24">
                    <div class="pb-16 sm:pb-24">
                        <div class="mt-4">
                            <?php if (get_sub_field('title')) : ?>
                                <h2 class="text-2xl font-bold tracking-tight text-eseisblue-500 sm:text-3xl"><?php the_sub_field('title'); ?></h2>
                            <?php endif; ?>
                            <?php if (get_sub_field('subtitle')) : ?>
                                <p class="mt-2 text-lg leading-8 text-gray-600"><?php the_sub_field('subtitle'); ?></p>
                            <?php endif; ?>
                        </div>

                        <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                            <?php while (have_rows('categories')) : the_row(); ?>

                                <div class="flex flex-col items-start justify-between border border-2 rounded-2xl bg-gray-100 pb-4 shadow-lg">
                                    <?php if (get_sub_field('illustration')) : ?>
                                        <div class="relative w-full">
                                            <img src="<?php the_sub_field('illustration'); ?>" alt="Illustration hard-services" class="aspect-[16/9] w-full rounded-t-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
                                            <div class="absolute inset-0 rounded-2xl"></div>
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
                                                <?php while (have_rows('jobs')) : the_row(); ?>
                                                    <?php if (get_sub_field('job')) : ?>
                                                        <li> <?php the_sub_field('job'); ?></li>
                                                    <?php endif; ?>
                                                <?php endwhile; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>

            <?php while (have_rows('soft_services')) : the_row(); ?>
                <div class="mx-auto max-w-6xl px-2 lg:px-8 mt-16 lg:mt-24">
                    <div class="pb-16 sm:pb-24">
                        <div class="mt-4">
                            <?php if (get_sub_field('title')) : ?>
                                <h2 class="text-2xl font-bold tracking-tight text-eseisblue-500 sm:text-3xl"><?php the_sub_field('title'); ?></h2>
                            <?php endif; ?>
                            <?php if (get_sub_field('subtitle')) : ?>
                                <p class="mt-2 text-lg leading-8 text-gray-600"><?php the_sub_field('subtitle'); ?></p>
                            <?php endif; ?>
                        </div>

                        <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                            <?php while (have_rows('categories')) : the_row(); ?>

                                <div class="flex flex-col items-start justify-between border border-2 rounded-2xl bg-gray-100 pb-4 shadow-lg">
                                    <?php if (get_sub_field('illustration')) : ?>
                                        <div class="relative w-full">
                                            <img src="<?php the_sub_field('illustration'); ?>" alt="Illustration soft-services" class="aspect-[16/9] w-full rounded-t-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
                                            <div class="absolute inset-0 rounded-2xl"></div>
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
                                                <?php while (have_rows('jobs')) : the_row(); ?>
                                                    <?php if (get_sub_field('job')) : ?>
                                                        <li> <?php the_sub_field('job'); ?></li>
                                                    <?php endif; ?>
                                                <?php endwhile; ?>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>



            <?php while (have_rows('pilotage')) : the_row(); ?>
                <div class="pb-16 sm:pb-24">
                    <div class="mt-4 mb-10">
                        <?php if (get_sub_field('title')) : ?>
                            <h2 class="text-2xl font-bold tracking-tight text-eseisblue-500 sm:text-3xl"><?php the_sub_field('title'); ?></h2>
                        <?php endif ?>
                        <?php if (get_sub_field('subtitle')) : ?>
                            <p class="mt-2 text-lg leading-8 text-gray-600"><?php the_sub_field('subtitle'); ?></p>
                        <?php endif ?>
                    </div>

                    <div class="mx-auto max-w-7xl">

                        <div class="grid grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:grid-cols-2 items-start">
                            <div class="lg:pr-4 text-left">
                                <div class="mx-auto lg:mx-0 lg:max-w-lg space-y-6">
                                    <?php if (get_sub_field('content_1')) : ?>
                                        <p class="leading-7"><?php the_sub_field('content_1'); ?></p>
                                    <?php endif ?>
                                    <?php while (have_rows('content_2')) : the_row(); ?>
                                        <div>
                                            <?php if (get_sub_field('text')) : ?>
                                                <p class="leading-7 mb-2"><?php the_sub_field('text'); ?></p>
                                            <?php endif ?>
                                            <ul role="list" class="mt-8 space-y-8">
                                                <?php while (have_rows('list')) : the_row(); ?>
                                                    <?php if (get_sub_field('element')) : ?>
                                                        <li class="flex gap-x-3">
                                                            <svg class="mt-1 h-5 w-5 flex-none text-eseisblue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                                            </svg>
                                                            <span><?php the_sub_field('element'); ?></span>
                                                        </li>
                                                    <?php endif ?>
                                                <?php endwhile; ?>
                                            </ul>

                                        </div>
                                    <?php endwhile; ?>
                                    <?php if (get_sub_field('content_3')) : ?>
                                        <p class="leading-7 font-semibold"><?php the_sub_field('content_3'); ?></p>
                                    <?php endif ?>

                                </div>
                            </div>
                            <div class="sm:px-6 lg:px-0 w-full h-full">
                                <?php if (get_sub_field('illustration')) : ?>
                                    <img src="<?php the_sub_field('illustration'); ?>" alt="illustration pilotage" class="rounded-xl w-full h-full object-cover object-center">
                            </div>
                        <?php endif ?>
                        </div>
                    </div>


                    <?php while (have_rows('engagements_pilotage')) : the_row(); ?>
                        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                            <div class="mt-4 mb-10">
                                <?php if (get_sub_field('title')) : ?>
                                    <h3 class="text-xl font-bold tracking-tight text-eseisblue-500 sm:text-2xl"><?php the_sub_field('title'); ?></h3>
                                <?php endif ?>
                                <?php if (get_sub_field('subtitle')) : ?>
                                    <p class="mt-2 text-lg leading-8 text-gray-600"><?php the_sub_field('subtitle'); ?></p>
                                <?php endif ?>
                            </div>
                            <div class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                                <?php while (have_rows('list_engagements')) : the_row(); ?>
                                    <div class="flex flex-col">
                                        <div class="text-base font-semibold leading-7 text-gray-900">
                                            <?php if (get_sub_field('icon')) : ?>
                                                <div class="mb-6 flex h-10 w-10 items-center justify-center rounded-lg bg-eseisblue-500">

                                                    <img class="style-svg h-6 w-6 text-white" src="<?php the_sub_field('icon'); ?>">

                                                </div>
                                            <?php endif ?>
                                            <?php if (get_sub_field('title')) : ?>
                                                <?php the_sub_field('title'); ?>
                                            <?php endif ?>
                                        </div>
                                        <ul class="mt-1 flex flex-col text-base leading-7 text-gray-600 list-disc list-inside space-y-2">
                                            <?php while (have_rows('sublist')) : the_row(); ?>
                                                <?php if (get_sub_field('text')) : ?>
                                                    <li class=""> <?php the_sub_field('text'); ?>
                                                    </li>
                                                <?php endif ?>
                                            <?php endwhile; ?>
                                        </ul>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>


                    <?php endwhile; ?>


                </div>





        </div>

    <?php endwhile; ?>

    </div>


    </div>

</main>












<?php get_footer(); ?>