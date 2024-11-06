<?php

/**
 *   Template Name: Services
 */ ?>

<?php get_header(); ?>

<main class="mt-16 min-h-screen">
    <?php get_template_part('parts/title-page') ?>

    <div class="bg-white">

        <div class="relative mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-24 lg:px-8">

            <div class='border-l-2 border-maincolor pl-4'>
                <p class='italic text-gray-700'>"Protéger n'est pas seulement notre mission, c'est notre engagement. Europass s'efforce de fournir des solutions de sécurité personnalisées, fiables et à la pointe de l'innovation pour assurer la tranquillité de nos clients."</p>
            </div>

            <div class="pb-20 px-6 pt-20  sm:pb-24">
                <div class="mx-auto max-w-2xl text-center lg:max-w-4xl flex flex-col items-center">
                    <?php if (get_sub_field('title')) : ?>
                        <?php get_template_part('parts/title-decoration'); ?>
                        <h2 class="text-2xl font-semibold leading-7 text-secondarycolor uppercase"> <?php the_sub_field('title'); ?></h2>
                    <?php endif ?>
                    <p class="mt-6 text-lg leading-8 text-gray-600"><?php if (get_sub_field('subtitle')) : ?> <?php the_sub_field('subtitle'); ?><?php endif ?></p>
                </div>
                <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-7xl">
                    <dl class="grid max-w-2xl grid-cols-1 gap-x-16 gap-y-16 lg:max-w-none sm:grid-cols-2 lg:grid-cols-3 lg:gap-y-20">
                        <?php while (have_rows('values', 'options')) : the_row(); ?>
                            <div class="relative p-8 h-96 bg-white border-2 shadow-md">
                                <dt class="text-base flex flex-col font-semibold leading-7 text-gray-900 gap-2">
                                    <?php if (get_sub_field('name')) : ?> <?php the_sub_field('name'); ?> <?php endif ?>
                                </dt>
                                <?php if (get_sub_field('description')) : ?><dd class="mt-2 text-base leading-7 text-gray-600 mb-10"><?php the_sub_field('description'); ?></dd> <?php endif ?>
                                <img class="absolute mt-10 w-full left-6 -bottom-7" src="https://safecot-wordpress.technowebstore.com/wp-content/uploads/2023/08/s-3.png" class="trans" alt="">
                            </div>
                        <?php endwhile; ?>

                    </dl>
                </div>

            </div>

            <div class="pb-20 px-6 pt-20  sm:pb-24 bg-gray-100">
                <div class="mx-auto max-w-2xl text-center lg:max-w-4xl flex flex-col items-center">
                    <?php if (get_sub_field('title')) : ?>
                        <?php get_template_part('parts/title-decoration'); ?>
                        <h2 class="text-2xl font-semibold leading-7 text-secondarycolor uppercase"> <?php the_sub_field('title'); ?></h2>
                    <?php endif ?>
                    <p class="mt-6 text-lg leading-8 text-gray-600"><?php if (get_sub_field('subtitle')) : ?> <?php the_sub_field('subtitle'); ?><?php endif ?></p>
                </div>
                <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-7xl">
                    <dl class="grid max-w-2xl grid-cols-1 gap-x-24 gap-y-10 lg:max-w-none lg:grid-cols-3 lg:gap-y-16">
                        <?php while (have_rows('values', 'options')) : the_row(); ?>
                            <div class="relative p-8 bg-white border-2 shadow-md">
                                <dt class="text-base flex flex-col items-center text-center font-semibold leading-7 text-gray-900 gap-2">
                                    <div class=" flex h-12 w-12 items-center justify-center bg-maincolor-200">
                                        <?php if (get_sub_field('icon')) : ?>
                                            <img class="style-svg h-8 w-8 text-white" src="<?php the_sub_field('icon'); ?>">
                                        <?php endif ?>
                                    </div>
                                    <?php if (get_sub_field('name')) : ?> <?php the_sub_field('name'); ?> <?php endif ?>
                                </dt>
                                <?php if (get_sub_field('description')) : ?><dd class="mt-2 text-base leading-7 text-gray-600 text-center"><?php the_sub_field('description'); ?></dd> <?php endif ?>

                            </div>
                        <?php endwhile; ?>

                    </dl>
                </div>

            </div>

            <div class="relative bg-maincolor-200">

                <img class="h-56 w-full bg-gray-50 object-cover lg:absolute lg:inset-y-0 lg:left-0 lg:h-full lg:w-1/2" src="https://safecot-wordpress.technowebstore.com/wp-content/uploads/2023/08/s-3.png" alt="company">

                <div class="mx-auto grid max-w-7xl lg:grid-cols-2">
                    <div class="px-6 pb-24 pt-16 sm:pb-32 sm:pt-20 lg:col-start-2 lg:px-8 lg:pt-32">
                        <div class="mx-auto max-w-2xl lg:mr-0 lg:max-w-lg">
                            <?php if (get_sub_field('title')) : ?>
                                <h2 class="text-2xl font-semibold leading-7 text-secondarycolor uppercase"><?php the_sub_field('title'); ?> </h2>
                            <?php endif ?>
                            <?php if (get_sub_field('subtitle')) : ?>
                                <p class="mt-6 text-lg leading-8 text-gray-700"><?php the_sub_field('subtitle'); ?> </p>
                            <?php endif ?>

                        </div>
                    </div>
                </div>
            </div>



        </div>



    </div>


    </div>

</main>












<?php get_footer(); ?>