<?php

/**
 *   Template Name: Services
 */ ?>

<?php get_header(); ?>

<main class="flex-1">
    <?php get_template_part('parts/title-page') ?>

    <div class="px-4 md:px-10 lg:px-20 xl:px-40 py-10 lg:py-16">
        <div class="flex flex-col max-w-5xl mx-auto">

            <!-- Section Our Expertise -->
            <?php if (have_rows('expertise_section')) : ?>
                <?php while (have_rows('expertise_section')) : the_row(); ?>
                    <section>
                        <div class="flex flex-col items-center justify-center">
                            <?php if (get_sub_field('title')) : ?>
                                <h2 class="text-3xl font-semibold leading-tight tracking-tight text-slate-900 px-4 text-center">
                                    <?php the_sub_field('title'); ?>
                                </h2>
                                <?php get_template_part('parts/title-decoration'); ?>
                            <?php endif; ?>

                            <?php if (get_sub_field('description')) : ?>
                                <p class="mt-6 text-lg leading-8 text-gray-600 text-center max-w-3xl">
                                    <?php the_sub_field('description'); ?>
                                </p>
                            <?php endif; ?>
                        </div>

                        <div class="grid grid-cols-1 gap-16 mt-12">
                            <?php if (have_rows('expertise_items')) : ?>
                                <?php
                                $item_index = 0;
                                while (have_rows('expertise_items')) : the_row();
                                    $is_reversed = ($item_index % 2 == 1) ? 'md:flex-row-reverse' : 'md:flex-row';
                                ?>
                                    <div class="flex flex-col <?php echo $is_reversed; ?> items-center gap-8 md:gap-12">
                                        <div class="w-full md:w-1/2">
                                            <?php if (get_sub_field('image')) : ?>
                                                <img alt="<?php the_sub_field('image_alt') ?: 'Service illustration'; ?>"
                                                    class="rounded-xl object-cover w-full h-80"
                                                    src="<?php the_sub_field('image'); ?>">
                                            <?php endif; ?>
                                        </div>
                                        <div class="w-full md:w-1/2 flex flex-col gap-4">
                                            <?php if (get_sub_field('title')) : ?>
                                                <h3 class="text-2xl font-semibold leading-tight text-slate-900">
                                                    <?php the_sub_field('title'); ?>
                                                </h3>
                                            <?php endif; ?>
                                            <?php if (get_sub_field('description')) : ?>
                                                <p class="text-slate-600 text-base font-normal leading-relaxed">
                                                    <?php the_sub_field('description'); ?>
                                                </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php
                                    $item_index++;
                                endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </section>
                <?php endwhile; ?>
            <?php endif; ?>



            <!-- Section Commitments -->
            <?php if (have_rows('commitments_section')) : ?>
                <?php while (have_rows('commitments_section')) : the_row(); ?>
                    <section class="py-20">
                        <div class="flex flex-col items-center justify-center">
                            <?php if (get_sub_field('title')) : ?>
                                <h2 class="text-3xl font-semibold leading-tight tracking-tight text-slate-900 px-4 text-center">
                                    <?php the_sub_field('title'); ?>
                                </h2>
                                <?php get_template_part('parts/title-decoration'); ?>
                            <?php endif; ?>
                        </div>


                        <div class="flex flex-wrap justify-center gap-6 mt-8">
                            <?php if (have_rows('commitments')) : ?>
                                <?php while (have_rows('commitments')) : the_row(); ?>
                                    <div class="flex flex-col gap-4 rounded-xl border border-maincolor-50 bg-white/50 p-6 text-center items-center w-full sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)]">
                                        <div class="text-maincolor">
                                            <?php if (get_sub_field('icon_svg')) : ?>
                                                <?php the_sub_field('icon_svg'); ?>
                                            <?php else : ?>
                                                <!-- Icône par défaut -->
                                                <svg fill="currentColor" height="32" viewBox="0 0 256 256" width="32" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm64-88a8,8,0,0,1-8,8H128a8,8,0,0,1-8-8V72a8,8,0,0,1,16,0v48h48A8,8,0,0,1,192,128Z"></path>
                                                </svg>
                                            <?php endif; ?>
                                        </div>
                                        <div class="flex flex-col gap-1">
                                            <?php if (get_sub_field('title')) : ?>
                                                <h3 class="text-lg font-semibold leading-tight text-slate-900 mb-3">
                                                    <?php the_sub_field('title'); ?>
                                                </h3>
                                            <?php endif; ?>
                                            <?php if (get_sub_field('description')) : ?>
                                                <p class="text-slate-600 text-sm font-normal leading-normal">
                                                    <?php the_sub_field('description'); ?>
                                                </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </section>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>


    <!-- Section Why Choose Us -->
    <?php if (have_rows('why_choose_section')) : ?>
        <?php while (have_rows('why_choose_section')) : the_row(); ?>
            <section>
                <div class="relative bg-gray-100">
                    <?php if (get_sub_field('image')) : ?>
                        <img class="h-56 w-full bg-gray-50 object-cover lg:absolute lg:inset-y-0 lg:left-0 lg:h-full lg:w-1/2"
                            src="<?php the_sub_field('image'); ?>"
                            alt="<?php the_sub_field('image_alt') ?: 'Why choose us'; ?>" />
                    <?php endif; ?>
                    <div class="mx-auto grid max-w-7xl lg:grid-cols-2">
                        <div class="px-6 py-16 sm:pb-32 sm:pt-20 lg:col-start-2 lg:px-8 lg:pt-32">
                            <div class="mx-auto max-w-2xl lg:mr-0 lg:max-w-lg">
                                <?php if (get_sub_field('title')) : ?>

                                    <h2 class="text-3xl font-semibold leading-tight tracking-tight text-slate-900">
                                        <?php the_sub_field('title'); ?>
                                    </h2>
                                    <?php get_template_part('parts/title-decoration'); ?>
                                <?php endif; ?>
                                <?php if (get_sub_field('subtitle')) : ?>
                                    <p class="mt-6 text-lg leading-8 text-gray-700">
                                        <?php the_sub_field('subtitle'); ?>
                                    </p>
                                <?php endif; ?>

                                <ul class="mt-10 lg:mt-16 space-y-5">
                                    <?php if (have_rows('advantages')) : ?>
                                        <?php while (have_rows('advantages')) : the_row(); ?>
                                            <?php if (get_sub_field('text')) : ?>
                                                <li class="flex gap-x-3">
                                                    <svg class="text-maincolor flex-shrink-0 mt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M20 6 9 17l-5-5" />
                                                    </svg>
                                                    <span class="md:text-lg font-semibold"><?php the_sub_field('text'); ?></span>
                                                </li>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>

                                <?php if (get_sub_field('cta_button_text') && get_sub_field('cta_button_url')) : ?>
                                    <div class="mt-10">
                                        <a href="<?php the_sub_field('cta_button_url'); ?>">
                                            <button class="rounded-lg h-12 px-6 bg-maincolor text-white text-base font-semibold hover:bg-maincolor/90 transition-all duration-300">
                                                <?php the_sub_field('cta_button_text'); ?>
                                            </button>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>


    <div class="px-4 md:px-10 lg:px-20 xl:px-40 py-10 lg:py-16">
        <div class="flex flex-col max-w-5xl mx-auto">

            <!-- Section Performance Indicators -->
            <?php if (have_rows('performance_section')) : ?>
                <?php while (have_rows('performance_section')) : the_row(); ?>
                    <section>
                        <div class="flex flex-col items-center justify-center">
                            <?php if (get_sub_field('title')) : ?>
                                <h2 class="text-3xl font-semibold leading-tight tracking-tight text-slate-900 px-4 text-center">
                                    <?php the_sub_field('title'); ?>
                                </h2>
                                <?php get_template_part('parts/title-decoration'); ?>
                            <?php endif; ?>
                        </div>

                        <div class="flex flex-wrap justify-center gap-6 mt-8">
                            <?php if (have_rows('indicators')) : ?>
                                <?php while (have_rows('indicators')) : the_row(); ?>
                                    <div class="flex flex-col gap-4 rounded-xl border border-maincolor-50 bg-white/50 p-6 text-center items-center w-full sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)]">
                                        <div class="text-maincolor">
                                            <?php if (get_sub_field('icon_svg')) : ?>
                                                <?php the_sub_field('icon_svg'); ?>
                                            <?php else : ?>
                                                <!-- Icône par défaut -->
                                                <svg fill="currentColor" height="32" viewBox="0 0 256 256" width="32" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M205.66,61.64l-144,144a8,8,0,0,1-11.32-11.32l144-144a8,8,0,0,1,11.32,11.31ZM50.54,101.44a36,36,0,0,1,50.92-50.91h0a36,36,0,0,1-50.92,50.91ZM56,76A20,20,0,1,0,90.14,61.84h0A20,20,0,0,0,56,76ZM216,180a36,36,0,1,1-10.54-25.46h0A35.76,35.76,0,0,1,216,180Zm-16,0a20,20,0,1,0-5.86,14.14A19.87,19.87,0,0,0,200,180Z"></path>
                                                </svg>
                                            <?php endif; ?>
                                        </div>
                                        <div class="flex flex-col gap-1">
                                            <?php if (get_sub_field('title')) : ?>
                                                <h3 class="text-lg font-semibold leading-tight text-slate-900 mb-3">
                                                    <?php the_sub_field('title'); ?>
                                                </h3>
                                            <?php endif; ?>
                                            <?php if (get_sub_field('description')) : ?>
                                                <p class="text-slate-600 text-sm font-normal leading-normal">
                                                    <?php the_sub_field('description'); ?>
                                                </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </section>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>



    <!-- CTA Section (comme dans votre ancien code) -->
    <?php if (have_rows('cta')) : ?>
        <?php while (have_rows('cta')) : the_row(); ?>
            <div class="mx-auto max-w-7xl sm:px-6 sm:pb-32">
                <div class="relative isolate overflow-hidden bg-secondarycolor px-6 py-24 text-center sm:shadow-2xl sm:rounded-xl sm:px-16">
                    <h2 class="text-xl font-semibold tracking-tight text-center text-white sm:text-3xl">
                        <?php if (get_sub_field('line_1')) : ?><?php the_sub_field('line_1'); ?><?php endif; ?>
                        <br>
                        <?php if (get_sub_field('line_2')) : ?><?php the_sub_field('line_2'); ?><?php endif; ?>
                    </h2>
                    <?php if (get_sub_field('button_text') && get_sub_field('button_url')) : ?>
                        <div class="mt-10 gap-x-6">
                            <a href="<?php the_sub_field('button_url'); ?>">
                                <button type="button" class="rounded-md sm:px-3.5 sm:py-2.5 px-3 py-2 lg:text-base text-sm font-semibold text-gray-700 shadow-sm bg-white hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 z-10">
                                    <?php the_sub_field('button_text'); ?>
                                </button>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>