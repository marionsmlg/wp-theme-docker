<?php

/**
 *   Template Name: Certifications
 */ ?>

<?php get_header(); ?>

<main class="min-h-screen">
    <?php get_template_part('parts/title-page') ?>

    <div class="px-4 md:px-10 lg:px-20 xl:px-40 py-10 lg:py-16">
        <div class="flex flex-col max-w-5xl mx-auto">

            <div class="space-y-16">
                
                <!-- Section QSE Policy -->
                <?php if (have_rows('qse_policy_section')) : ?>
                    <?php while (have_rows('qse_policy_section')) : the_row(); ?>
                        <div>
                            <h2 class="text-3xl font-bold mb-6 flex items-center gap-3 ml-2">
                                <?php if (get_sub_field('icon_svg')) : ?>
                                    <span class="text-maincolor mr-3">
                                        <?php the_sub_field('icon_svg'); ?>
                                    </span>
                                <?php else : ?>
                                    <!-- Icône par défaut -->
                                    <svg class="text-maincolor mr-3" width="36" height="36" fill="currentColor" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M225.86,102.82c-3.77-3.94-7.67-8-9.14-11.57-1.36-3.27-1.44-8.69-1.52-13.94-.15-9.76-.31-20.82-8-28.51s-18.75-7.85-28.51-8c-5.25-.08-10.67-.16-13.94-1.52-3.56-1.47-7.63-5.37-11.57-9.14C146.28,23.51,138.44,16,128,16s-18.27,7.51-25.18,14.14c-3.94,3.77-8,7.67-11.57,9.14C88,40.64,82.56,40.72,77.31,40.8c-9.76.15-20.82.31-28.51,8S41,67.55,40.8,77.31c-.08,5.25-.16,10.67-1.52,13.94-1.47,3.56-5.37,7.63-9.14,11.57C23.51,109.72,16,117.56,16,128s7.51,18.27,14.14,25.18c3.77,3.94,7.67,8,9.14,11.57,1.36,3.27,1.44,8.69,1.52,13.94.15,9.76.31,20.82,8,28.51s18.75,7.85,28.51,8c5.25.08,10.67.16,13.94,1.52,3.56,1.47,7.63,5.37,11.57,9.14C109.72,232.49,117.56,240,128,240s18.27-7.51,25.18-14.14c3.94-3.77,8-7.67,11.57-9.14,3.27-1.36,8.69-1.44,13.94-1.52,9.76-.15,20.82-.31,28.51-8s7.85-18.75,8-28.51c.08-5.25.16-10.67,1.52-13.94,1.47-3.56,5.37-7.63,9.14-11.57C232.49,146.28,240,138.44,240,128S232.49,109.73,225.86,102.82Zm-52.2,6.84-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z"></path>
                                    </svg>
                                <?php endif; ?>
                                <?php if (get_sub_field('title')) : ?>
                                    <?php the_sub_field('title'); ?>
                                <?php endif; ?>
                            </h2>
                            <?php if (get_sub_field('introduction')) : ?>
                                <p class="text-slate-600 mb-8"><?php the_sub_field('introduction'); ?></p>
                            <?php endif; ?>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <?php if (have_rows('qse_items')) : ?>
                                    <?php while (have_rows('qse_items')) : the_row(); ?>
                                        <div class="bg-white p-6 rounded-xl border border-maincolor-50">
                                            <?php if (get_sub_field('title')) : ?>
                                                <h3 class="text-xl font-bold mb-4"><?php the_sub_field('title'); ?></h3>
                                            <?php endif; ?>
                                            <ul class="space-y-3">
                                                <?php if (have_rows('points')) : ?>
                                                    <?php while (have_rows('points')) : the_row(); ?>
                                                        <li class="flex items-start gap-3 mb-2">
                                                            <svg class="text-maincolor mt-1 flex-shrink-0 mr-3" width="20" height="20" fill="currentColor" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M229.66,77.66l-128,128a8,8,0,0,1-11.32,0l-56-56a8,8,0,0,1,11.32-11.32L96,188.69,218.34,66.34a8,8,0,0,1,11.32,11.32Z"></path>
                                                            </svg>
                                                            <?php if (get_sub_field('text')) : ?>
                                                                <span><?php the_sub_field('text'); ?></span>
                                                            <?php endif; ?>
                                                        </li>
                                                    <?php endwhile; ?>
                                                <?php endif; ?>
                                            </ul>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                
                <!-- Section Triple Certification -->
                <?php if (have_rows('triple_certification_section')) : ?>
                    <?php while (have_rows('triple_certification_section')) : the_row(); ?>
                        <div>
                            <h2 class="text-3xl font-bold mb-6 flex items-center gap-3">
                                <?php if (get_sub_field('icon_svg')) : ?>
                                    <span class="text-maincolor mr-3">
                                        <?php the_sub_field('icon_svg'); ?>
                                    </span>
                                <?php else : ?>
                                    <!-- Icône par défaut -->
                                    <svg class="text-maincolor mr-3" width="36" height="36" fill="currentColor" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M225.86,102.82c-3.77-3.94-7.67-8-9.14-11.57-1.36-3.27-1.44-8.69-1.52-13.94-.15-9.76-.31-20.82-8-28.51s-18.75-7.85-28.51-8c-5.25-.08-10.67-.16-13.94-1.52-3.56-1.47-7.63-5.37-11.57-9.14C146.28,23.51,138.44,16,128,16s-18.27,7.51-25.18,14.14c-3.94,3.77-8,7.67-11.57,9.14C88,40.64,82.56,40.72,77.31,40.8c-9.76.15-20.82.31-28.51,8S41,67.55,40.8,77.31c-.08,5.25-.16,10.67-1.52,13.94-1.47,3.56-5.37,7.63-9.14,11.57C23.51,109.72,16,117.56,16,128s7.51,18.27,14.14,25.18c3.77,3.94,7.67,8,9.14,11.57,1.36,3.27,1.44,8.69,1.52,13.94.15,9.76.31,20.82,8,28.51s18.75,7.85,28.51,8c5.25.08,10.67.16,13.94,1.52,3.56,1.47,7.63,5.37,11.57,9.14C109.72,232.49,117.56,240,128,240s18.27-7.51,25.18-14.14c3.94-3.77,8-7.67,11.57-9.14,3.27-1.36,8.69-1.44,13.94-1.52,9.76-.15,20.82-.31,28.51-8s7.85-18.75,8-28.51c.08-5.25.16-10.67,1.52-13.94,1.47-3.56,5.37-7.63,9.14-11.57C232.49,146.28,240,138.44,240,128S232.49,109.73,225.86,102.82Zm-52.2,6.84-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z"></path>
                                    </svg>
                                <?php endif; ?>
                                <?php if (get_sub_field('title')) : ?>
                                    <?php the_sub_field('title'); ?>
                                <?php endif; ?>
                            </h2>
                            <?php if (get_sub_field('introduction')) : ?>
                                <p class="text-slate-600 mb-8"><?php the_sub_field('introduction'); ?></p>
                            <?php endif; ?>
                            <div class="space-y-6">
                                <?php if (have_rows('certifications')) : ?>
                                    <?php while (have_rows('certifications')) : the_row(); ?>
                                        <div class="bg-maincolor-50 p-6 rounded-xl flex items-start gap-6">
                                            <?php if (get_sub_field('logo')) : ?>
                                                <img alt="<?php echo get_sub_field('logo_alt') ?: get_sub_field('title') . ' Logo'; ?>" 
                                                     class="h-24 w-24 object-contain flex-shrink-0" 
                                                     src="<?php the_sub_field('logo'); ?>">
                                            <?php endif; ?>
                                            <div class="flex-1">
                                                <?php if (get_sub_field('title')) : ?>
                                                    <h3 class="text-xl font-bold mb-2"><?php the_sub_field('title'); ?></h3>
                                                <?php endif; ?>
                                                <?php if (get_sub_field('description')) : ?>
                                                    <p class="text-slate-800"><?php the_sub_field('description'); ?></p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                
                <!-- Section EcoVadis -->
                <?php if (have_rows('ecovadis_section')) : ?>
                    <?php while (have_rows('ecovadis_section')) : the_row(); ?>
                        <div>
                            <h2 class="text-3xl font-bold mb-6 flex items-center gap-3">
                                <?php if (get_sub_field('icon_svg')) : ?>
                                    <span class="text-maincolor mr-3">
                                        <?php the_sub_field('icon_svg'); ?>
                                    </span>
                                <?php else : ?>
                                    <!-- Icône par défaut -->
                                    <svg class="text-maincolor mr-3" width="36" height="36" fill="currentColor" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm40-68a28,28,0,0,1-28,28h-4v8a8,8,0,0,1-16,0v-8H104a8,8,0,0,1,0-16h36a12,12,0,0,0,0-24H116a28,28,0,0,1,0-56h4V72a8,8,0,0,1,16,0v8h16a8,8,0,0,1,0,16H116a12,12,0,0,0,0,24h24A28,28,0,0,1,168,148Z"></path>
                                    </svg>
                                <?php endif; ?>
                                <?php if (get_sub_field('title')) : ?>
                                    <?php the_sub_field('title'); ?>
                                <?php endif; ?>
                            </h2>
                            <div class="bg-white p-6 rounded-xl border border-maincolor-50 flex items-start gap-6">
                                <?php if (get_sub_field('logo')) : ?>
                                    <img alt="<?php echo get_sub_field('logo_alt') ?: 'EcoVadis Logo'; ?>" 
                                         class="h-28 w-28 object-contain flex-shrink-0" 
                                         src="<?php the_sub_field('logo'); ?>">
                                <?php endif; ?>
                                <div class="flex-1">
                                    <?php if (get_sub_field('content')) : ?>
                                        <p class="text-slate-600"><?php the_sub_field('content'); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                
            </div>

        </div>
    </div>
</main>

<?php get_footer(); ?>