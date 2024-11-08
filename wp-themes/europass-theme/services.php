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
                <div class="pb-20 px-6 pt-20 sm:pb-24">
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
        <div class="pb-20 px-6 pt-20 sm:pb-24 bg-gray-100">
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
        <div class="relative bg-maincolor-200">
            <?php if (get_sub_field('image')) : ?>
                <img class="h-56 w-full bg-gray-50 object-cover lg:absolute lg:inset-y-0 lg:left-0 lg:h-full lg:w-1/2" src="<?php the_sub_field('image'); ?>" alt="choose-us"/>
            <?php endif; ?>
            <div class="mx-auto grid max-w-7xl lg:grid-cols-2">
                <div class="px-6 pb-24 pt-16 sm:pb-32 sm:pt-20 lg:col-start-2 lg:px-8 lg:pt-32">
                    <div class="mx-auto max-w-2xl lg:mr-0 lg:max-w-lg">
                        <?php if (get_sub_field('title')) : ?>
                            <h2 class="text-2xl font-semibold leading-7 text-secondarycolor uppercase"><?php the_sub_field('title'); ?></h2>
                        <?php endif; ?>
                        <?php if (get_sub_field('subtitle')) : ?>
                            <p class="mt-6 text-lg leading-8 text-gray-700"><?php the_sub_field('subtitle'); ?></p>
                        <?php endif; ?>

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


                </div>
            </div>
        </div>
    <?php endwhile; ?>


    <div class="bg-white">
        <div class="px-6 py-24 sm:px-6 sm:py-32 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-balance text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl">Boost your productivity. Start using our app today.</h2>
                <p class="mx-auto mt-6 max-w-xl text-pretty text-lg/8 text-gray-600">Incididunt sint fugiat pariatur cupidatat consectetur sit cillum anim id veniam aliqua proident excepteur commodo do ea.</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</a>
                  
                </div>
            </div>
        </div>
    </div>
    </div>
</main>

<?php get_footer(); ?>