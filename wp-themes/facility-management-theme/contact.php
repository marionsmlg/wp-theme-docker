<?php

/**
 *   Template Name: Contact
 */ ?>

<?php get_header(); ?>

<main class="mt-16 min-h-screen">
    <?php if (get_field('image')) : ?>
        <div class="h-56 sm:h-72 relative overflow-hidden">
            <img class="absolute inset-0 object-contain object-top sm:object-cover sm:object-center w-full h-full" src="<?php echo esc_html(get_field('image')); ?>" alt="image de contact" />
        </div>
    <?php endif; ?>

    <div class="relative isolate bg-white">
        <div class="mx-auto grid max-w-7xl grid-cols-1 lg:grid-cols-2">
            <div class="relative px-6 pb-20 pt-4 sm:pt-20 lg:static lg:px-8 border-r">
                <div class="mx-auto max-w-xl lg:mx-0 lg:max-w-lg">
                    <?php if (get_field('title')) : ?>
                        <h2 class="text-3xl font-bold tracking-tight text-eseisblue-500"><?php echo esc_html(get_field('title')); ?></h2>
                    <?php endif; ?>
                    <?php if (get_field('subtitle')) : ?>
                        <p class="mt-6 text-lg leading-8 text-gray-600"><?php echo esc_html(get_field('subtitle')); ?></p>
                    <?php endif; ?>

                    <?php while (have_rows('contacts')) : the_row(); ?>
                        <dl class="mt-10 space-y-4 text-base leading-7 text-gray-600">
                            <div class="flex gap-x-4">
                                <dt class="flex-none">
                                    <span class="sr-only">Address</span>
                                    <svg class="h-7 w-6 text-eseisblue-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                                    </svg>
                                </dt>
                                <?php if (get_sub_field('line_1')) : ?>
                                    <dd><?php the_sub_field('line_1'); ?> <?php if (get_sub_field('line_2')) : ?><br><?php the_sub_field('line_2'); ?> <?php endif ?><?php if (get_sub_field('line_3')) : ?><br><?php the_sub_field('line_3'); ?> <?php endif ?><?php if (get_sub_field('line_4')) : ?><br><?php the_sub_field('line_4'); ?> <?php endif ?></dd>
                                <?php endif ?>

                            </div>
                            <?php if (get_sub_field('phone_number')) : ?>
                                <div class="flex gap-x-4">
                                    <dt class="flex-none">

                                        <span class="sr-only">Telephone</span>

                                        <svg class="h-7 w-6 text-eseisblue-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                        </svg>
                                    </dt>
                                    <dd><a class="hover:text-gray-900" href="tel:+1 (555) 234-5678"><?php the_sub_field('phone_number'); ?></a></dd>
                                </div>
                            <?php endif ?>
                            <?php if (get_sub_field('email')) : ?>
                                <div class="flex gap-x-4">
                                    <dt class="flex-none">
                                        <span class="sr-only">Email</span>
                                        <svg class="h-7 w-6 text-eseisblue-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                        </svg>
                                    </dt>
                                    <dd><a class="hover:text-gray-900" href="mailto:hello@example.com"><?php the_sub_field('email'); ?></a></dd>
                                </div>
                            <?php endif ?>
                            <?php if (get_field('linkedin', 'option')) : ?>
                                <div class="flex gap-x-4">
                                    <dt class="flex-none">
                                        <a href="<?php the_field('linkedin', 'option'); ?>" target="_blank" class="text-gray-400 hover:text-gray-500">
                                            <span class="sr-only">LinkedIn</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                            </svg>
                                        </a>
                                    </dt>
                                </div>
                            <?php endif ?>
                        </dl>
                    <?php endwhile; ?>
                </div>
            </div>
            <form method="POST" class="px-6 pb-24 pt-4 sm:pt-20 sm:pb-32 lg:px-8">
                <div class="mx-auto max-w-xl lg:mr-0 lg:max-w-lg">
                    <h2 class="text-3xl font-bold tracking-tight text-eseisblue-500">Formulaire de contact</h2>

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <?php the_content() ?>
                    <?php endwhile;
                    endif; ?>



                </div>
            </form>
        </div>
    </div>


</main>

<?php get_footer(); ?>