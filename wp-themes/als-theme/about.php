<?php

/**
 *   Template Name: A propos
 */ ?>

<?php get_header(); ?>

<main class="min-h-screen">
    <?php get_template_part('parts/title-page') ?>

    <div class="px-4 md:px-10 lg:px-20 xl:px-40 py-10 lg:py-16">
        <div class="flex flex-col max-w-5xl mx-auto">

            <div class="space-y-16">

                <!-- Section Who We Are -->
                <?php if (have_rows('who_we_are_section')) : ?>
                    <?php while (have_rows('who_we_are_section')) : the_row(); ?>
                        <section>
                            <?php if (get_sub_field('title')) : ?>
                                <h2 class="text-3xl font-semibold tracking-tight text-slate-900">
                                    <?php the_sub_field('title'); ?>
                                </h2>
                                <?php get_template_part('parts/title-decoration'); ?>
                            <?php endif; ?>
                            <?php if (get_sub_field('content')) : ?>
                                <p class="text-lg text-slate-600  mt-6">
                                    <?php the_sub_field('content'); ?>
                                </p>
                            <?php endif; ?>
                        </section>
                    <?php endwhile; ?>
                <?php endif; ?>

                <!-- Section Our History -->
                <?php if (have_rows('history_section')) : ?>
                    <?php while (have_rows('history_section')) : the_row(); ?>
                        <section>
                            <?php if (get_sub_field('title')) : ?>
                                <h2 class="text-3xl font-semibold tracking-tight text-slate-900">
                                    <?php the_sub_field('title'); ?>
                                </h2>
                                <?php get_template_part('parts/title-decoration'); ?>
                            <?php endif; ?>
                            <div class="relative pl-8 ml-4 border-l-2 border-slate-200 mt-8">
                                <div class="space-y-12">
                                    <?php if (have_rows('timeline_items')) : ?>
                                        <?php while (have_rows('timeline_items')) : the_row(); ?>
                                            <div class="flex items-start gap-6">
                                                <div class="absolute -left-5 flex h-10 w-10 items-center justify-center rounded-full bg-maincolor text-white flex-shrink-0">
                                                    <?php if (get_sub_field('icon_svg')) : ?>
                                                        <?php the_sub_field('icon_svg'); ?>
                                                    <?php else : ?>
                                                        <!-- Icône par défaut -->
                                                        <svg fill="currentColor" height="24px" viewBox="0 0 256 256" width="24px" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm64-88a8,8,0,0,1-8,8H128a8,8,0,0,1-8-8V72a8,8,0,0,1,16,0v48h48A8,8,0,0,1,192,128Z"></path>
                                                        </svg>
                                                    <?php endif; ?>
                                                </div>
                                                <div>
                                                    <?php if (get_sub_field('year_title')) : ?>
                                                        <p class="text-lg font-semibold text-slate-900">
                                                            <?php the_sub_field('year_title'); ?>
                                                        </p>
                                                    <?php endif; ?>
                                                    <?php if (get_sub_field('description')) : ?>
                                                        <p class="text-slate-600">
                                                            <?php the_sub_field('description'); ?>
                                                        </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </section>
                    <?php endwhile; ?>
                <?php endif; ?>

                <!-- Section Vision, Values & Ambition -->
                <?php if (have_rows('vision_values_section')) : ?>
                    <?php while (have_rows('vision_values_section')) : the_row(); ?>
                        <section>
                            <div class="flex flex-col items-center justify-center">
                                <?php if (get_sub_field('title')) : ?>
                                    <h2 class="text-3xl font-semibold tracking-tight text-slate-900 text-center">
                                        <?php the_sub_field('title'); ?>
                                    </h2>
                                    <?php get_template_part('parts/title-decoration'); ?>
                                <?php endif; ?>
                            </div>
                            <div class="flex flex-wrap justify-center gap-8 mt-8">
                                <?php if (have_rows('items')) : ?>
                                    <?php while (have_rows('items')) : the_row(); ?>
                                        <div class="flex flex-col items-center text-center p-6 rounded-lg bg-white/50 border border-slate-200 w-full sm:w-[calc(50%-16px)] lg:w-[calc(33.333%-22px)]">
                                            <div class="mb-4 text-maincolor">
                                                <?php if (get_sub_field('icon_svg')) : ?>
                                                    <?php the_sub_field('icon_svg'); ?>
                                                <?php else : ?>
                                                    <!-- Icône par défaut -->
                                                    <svg fill="none" height="32" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="32" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
                                                <?php endif; ?>
                                            </div>
                                            <?php if (get_sub_field('title')) : ?>
                                                <h3 class="text-lg font-semibold text-slate-900">
                                                    <?php the_sub_field('title'); ?>
                                                </h3>
                                            <?php endif; ?>
                                            <?php if (get_sub_field('description')) : ?>
                                                <p class="text-sm text-slate-600 mt-2">
                                                    <?php the_sub_field('description'); ?>
                                                </p>
                                            <?php endif; ?>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </section>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <?php get_template_part('parts/key-numbers'); ?>

    <!-- Section Differentiating Assets -->

    <div class="px-4 md:px-10 lg:px-20 xl:px-40 py-10 lg:py-16">
        <div class="flex flex-col max-w-5xl mx-auto">

            <div class="space-y-16">
                <?php if (have_rows('assets_section')) : ?>
                    <?php while (have_rows('assets_section')) : the_row(); ?>
                        <section>
                            <?php if (get_sub_field('title')) : ?>
                                <div class="flex flex-col items-center justify-center">
                                    <h2 class="text-3xl font-semibold tracking-tight text-slate-900 text-center">
                                        <?php the_sub_field('title'); ?>
                                    </h2>
                                    <?php get_template_part('parts/title-decoration'); ?>
                                </div>
                            <?php endif; ?>
                            <div class="flex flex-wrap justify-center gap-8 mt-8">
                                <?php if (have_rows('assets')) : ?>
                                    <?php while (have_rows('assets')) : the_row(); ?>
                                        <div class="p-6 rounded-lg bg-white/50 border border-slate-200 w-full sm:w-[calc(50%-16px)] md:w-[calc(33.333%-22px)]">
                                            <?php if (get_sub_field('title')) : ?>
                                                <h3 class="text-lg font-semibold text-slate-900 mb-2">
                                                    <?php the_sub_field('title'); ?>
                                                </h3>
                                            <?php endif; ?>
                                            <?php if (get_sub_field('description')) : ?>
                                                <p class="text-sm text-slate-600">
                                                    <?php the_sub_field('description'); ?>
                                                </p>
                                            <?php endif; ?>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </section>
                    <?php endwhile; ?>
                <?php endif; ?>


            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>