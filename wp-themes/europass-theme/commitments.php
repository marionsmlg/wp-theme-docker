<?php

/**
 *   Template Name: Engagements
 */ ?>

<?php get_header(); ?>

<main class="mt-16 min-h-screen">
<?php get_template_part('parts/title-page') ?>

    <div class="bg-white">

        <div class="relative mx-auto -mt-12 max-w-7xl px-4 pb-16 sm:px-6 sm:pb-24 lg:px-8">

            <?php while (have_rows('section_1')) : the_row(); ?>
                <div class="mx-auto max-w-2xl lg:mx-0 lg:grid lg:max-w-none lg:grid-cols-2 lg:gap-x-16 lg:gap-y-6 xl:grid-cols-1 xl:grid-rows-1 xl:gap-x-8">
                    <?php if (get_sub_field('title')) : ?>
                        <h1 class="max-w-2xl text-2xl font-semibold tracking-tight text-eseisblue-500 sm:text-4xl lg:col-span-2 xl:col-auto"><?php the_sub_field('title'); ?></h1>
                    <?php endif; ?>
                    <div class="mt-6 max-w-xl lg:mt-0 xl:col-end-1 xl:row-start-1">
                        <?php while (have_rows('arguments')) : the_row(); ?>
                            <div>
                                <?php if (get_sub_field('text')) : ?>
                                    <p class="mt-6 text-lg font-semibold leading-8 tracking-tight text-gray-900"><?php the_sub_field('text'); ?></p>
                                <?php endif; ?>
                                <?php if (get_sub_field('description')) : ?>
                                    <p class="mt-3 text-base leading-7 text-gray-600"><?php the_sub_field('description'); ?></p>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>



                    </div>
                    <?php if (get_sub_field('illustration')) : ?>
                        <img src="<?php the_sub_field('illustration'); ?>" alt="Illustration engagement RSE" class="mt-10 lg:aspect-[5/6] aspect-[6/5] w-full max-w-lg rounded-2xl object-cover sm:mt-16 lg:mt-0 lg:max-w-none xl:row-span-2 xl:row-end-2 xl:mt-36">
                    <?php endif; ?>
                </div>
        </div>
    </div>
<?php endwhile; ?>


<?php while (have_rows('section_2')) : the_row(); ?>
    <div class="bg-eseisblue-50">
        <div class="relative mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:pb-24 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0 lg:grid lg:max-w-none lg:grid-cols-2 lg:gap-x-16 lg:gap-y-6 xl:grid-cols-1 xl:grid-rows-1 xl:gap-x-8">

                <?php if (get_sub_field('title')) : ?>
                    <h1 class="max-w-2xl text-2xl font-semibold tracking-tight text-eseisblue-500 sm:text-4xl lg:col-span-2 lg:col-start-2"><?php the_sub_field('title'); ?></h1>
                <?php endif; ?>
                <div class="mt-6 max-w-xl lg:mt-0 lg:col-start-2  lg:col-auto">

                    <div class="mt-3">
                        <?php while (have_rows('paragraphs')) : the_row(); ?>
                            <?php if (get_sub_field('text')) : ?>
                                <p class="mt-3 text-base sm:text-lg leading-7 text-gray-900"><?php the_sub_field('text'); ?>
                                </p>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </div>

                </div>
                <?php if (get_sub_field('illustration')) : ?>
                    <img src="<?php the_sub_field('illustration'); ?>" alt="Ilustration Politique de recrutement" class="mt-10 aspect-[6/5] w-full max-w-lg rounded-2xl object-cover lg:mt-0 sm:mt-16 lg:max-w-none lg:row-span-2 lg:row-end-2 xl:mt-36">
                <?php endif; ?>

            </div>
        </div>
    </div>
<?php endwhile; ?>


<?php while (have_rows('section_3')) : the_row(); ?>
    <div class="bg-white">
        <div class="relative mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:pb-24 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0 lg:grid lg:max-w-none lg:grid-cols-2 lg:gap-x-16 lg:gap-y-6 xl:grid-cols-1 xl:grid-rows-1 xl:gap-x-8">
                <?php if (get_sub_field('title')) : ?>
                    <h1 class="max-w-2xl text-2xl font-semibold tracking-tight text-eseisblue-500 sm:text-4xl lg:col-span-2 xl:col-auto"><?php the_sub_field('title'); ?></h1>
                <?php endif; ?>
                <div class="mt-6 max-w-xl lg:mt-0 xl:col-end-1 xl:row-start-1">

                    <div class="mt-3">
                        <?php while (have_rows('paragraphs')) : the_row(); ?>
                            <?php if (get_sub_field('text')) : ?>
                                <p class="mt-3 text-base sm:text-lg leading-7 text-gray-900"><?php the_sub_field('text'); ?>
                                </p>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                </div>
                <?php if (get_sub_field('illustration')) : ?>
                    <img src="<?php the_sub_field('illustration'); ?>" alt="Illustration politique de formation" class="mt-10 aspect-[6/5] w-full max-w-lg rounded-2xl object-cover sm:mt-16 lg:mt-0 lg:max-w-none xl:row-span-2 xl:row-end-2 xl:mt-36">
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endwhile; ?>



<?php while (have_rows('section_4')) : the_row(); ?>
    <div class="bg-eseisblue-50">
        <div class="relative mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:pb-24 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0 lg:grid lg:max-w-none lg:grid-cols-2 lg:gap-x-16 lg:gap-y-6 xl:grid-cols-1 xl:grid-rows-1 xl:gap-x-8">
                <?php if (get_sub_field('title')) : ?>
                    <h1 class="max-w-2xl text-2xl font-semibold tracking-tight text-eseisblue-500 sm:text-4xl lg:col-span-2 xl:col-auto"><?php the_sub_field('title'); ?></h1>
                <?php endif; ?>
                <div class="mt-6 max-w-xl lg:mt-0 xl:col-end-1 xl:row-start-1">
                    <?php if (get_sub_field('subtitle')) : ?>
                        <p class="text-base sm:text-lg leading-7 text-gray-900"><?php the_sub_field('subtitle'); ?>
                        </p>
                    <?php endif; ?>
                    <ul class="mt-10 lg:mt-20 space-y-5">
                        <?php while (have_rows('arguments')) : the_row(); ?>
                            <?php if (get_sub_field('text')) : ?>
                                <li class="flex gap-x-3">
                                    <svg class="mt-1 h-5 w-5 flex-none text-eseisblue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                    </svg>
                                    <span class="md:text-lg font-semibold"><?php the_sub_field('text'); ?></span>
                                </li>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </ul>
                </div>
                <?php if (get_sub_field('illustration')) : ?>
                    <img src="<?php the_sub_field('illustration'); ?>" alt="Illustration environnement" class="mt-10 aspect-[6/5] w-full max-w-lg rounded-2xl object-cover sm:mt-16 lg:mt-0 lg:max-w-none xl:row-span-2 xl:row-end-2 xl:mt-36">
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endwhile; ?>



</main>












<?php get_footer(); ?>