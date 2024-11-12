<?php

/**
 *   Template Name: Services
 */
?>

<?php get_header(); ?>

<main class="mt-16 min-h-screen">
    <?php get_template_part('parts/title-page'); ?>

    <div class="bg-white">
        <div class="relative mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-24 lg:px-8">

            <?php while (have_rows('services')) : the_row(); ?>
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

                    <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-7xl">
                        <dl class="grid max-w-2xl grid-cols-1 gap-x-16 gap-y-16 lg:max-w-none lg:grid-cols-2 lg:gap-y-20">
                            <?php while (have_rows('categories')) : the_row(); ?>
                                <div class="relative p-8 h-[600px] bg-white border-2 shadow-md">
                                    <dt class="text-lg flex flex-col font-semibold leading-7 text-gray-900 gap-2">
                                        <?php if (get_sub_field('title')) : ?>
                                            <?php the_sub_field('title'); ?>
                                        <?php endif; ?>
                                    </dt>
                                    <?php if (get_sub_field('description')) : ?>
                                        <dd class="mt-4 text-base leading-7 text-gray-600 mb-10"><?php the_sub_field('description'); ?></dd>
                                    <?php endif; ?>
                                    <?php if (get_sub_field('image')) : ?>
                                        <div class="absolute w-full left-6 -bottom-7">
                                            <img class="w-full" src="<?php the_sub_field('image'); ?>" alt=""/>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                        </dl>
                    </div>
                </div>
        </div>
    <?php endwhile; ?>


    <?php while (have_rows('values')) : the_row(); ?>
        <div class="pb-20 px-8 pt-20 sm:pb-24 bg-gray-100">
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
                <dl class="grid max-w-2xl grid-cols-1 gap-x-24 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                    <?php while (have_rows('arguments')) : the_row(); ?>
                        <div class="relative p-8 bg-white border-2 shadow-md">
                            <dt class="text-base flex flex-col items-center text-center font-semibold leading-7 text-gray-900 gap-2">
                                <div class="flex h-12 w-12 items-center justify-center bg-maincolor-200">
                                    <?php if (get_sub_field('icon')) : ?>
                                        <img class="style-svg h-8 w-8 text-white" src="<?php the_sub_field('icon'); ?>" alt=""/>
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



    <?php while (have_rows('choose_us')) : the_row(); ?>
        <div class="relative bg-maincolor-100">
            <?php if (get_sub_field('image')) : ?>
                <img class="h-56 w-full bg-gray-50 object-cover lg:absolute lg:inset-y-0 lg:left-0 lg:h-full lg:w-1/2" src="<?php the_sub_field('image'); ?>" alt="choose-us"/>
            <?php endif; ?>
            <div class="mx-auto grid max-w-7xl lg:grid-cols-2">
                <div class="px-6 pb-24 pt-24 sm:pb-32 sm:pt-20 lg:col-start-2 lg:px-8 lg:pt-32">
                    <div class="mx-auto max-w-2xl lg:mr-0 lg:max-w-lg">
                        <?php if (get_sub_field('title')) : ?>
                            <h2 class="text-2xl font-semibold leading-7 text-secondarycolor uppercase"><?php the_sub_field('title'); ?></h2>
                        <?php endif; ?>
                        <?php if (get_sub_field('subtitle')) : ?>
                            <p class="mt-6 text-lg leading-8 text-gray-700"><?php the_sub_field('subtitle'); ?></p>
                        <?php endif; ?>

                        <?php while (have_rows('list')) : the_row(); ?>
                        <div class="mt-6 max-w-xl lg:mt-0 xl:col-end-1 xl:row-start-1">
                            <div>
                                <?php if (get_sub_field('text')) : ?>
                                    <p class="mt-6 text-lg font-semibold leading-8 tracking-tight text-gray-900"><?php the_sub_field('text'); ?></p>
                                <?php endif; ?>
                                <?php if (get_sub_field('description')) : ?>
                                    <p class="mt-3 text-base leading-7 text-gray-600"><?php the_sub_field('description'); ?></p>
                                <?php endif; ?>
                            </div>
                    </div>
                    <?php endwhile; ?>

                 
                    </div>


                </div>
            </div>
        </div>
    <?php endwhile; ?>

    <?php while (have_rows('cta')) : the_row(); ?>
    <div class="bg-white">
        <div class="px-6 py-24 sm:px-6 sm:py-32 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-balance text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl"><?php if (get_sub_field('line_1')) : ?><?php the_sub_field('line_1'); ?><?php endif; ?><br><?php if (get_sub_field('line_2')) : ?><?php the_sub_field('line_2'); ?><?php endif; ?></h2>

                <?php if (get_sub_field('button_text')) : ?>
                    <?php if (get_sub_field('button_url')) : ?>
                        <div class="mt-10 flex items-center justify-center gap-x-6">
                            <a href="<?php the_sub_field('button_url'); ?>"><button type="button" class="rounded-md sm:px-3.5 sm:py-2.5 px-3 py-2 lg:text-base text-sm font-semibold text-white shadow-sm bg-maincolor-500 hover:bg-maincolor-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 z-10"><?php the_sub_field('button_text'); ?></button></a>

                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php endwhile; ?>



    </div>
</main>

<?php get_footer(); ?>