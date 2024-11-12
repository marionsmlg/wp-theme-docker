<?php

/**
 *   Template Name: Engagements
 */ ?>

<?php get_header(); ?>

<main class="mt-16 min-h-screen">


    <div class="bg-white">
        <div aria-hidden="true" class="relative">
            <?php the_post_thumbnail('full', ['class' => 'aspect-[5/2] h-40 md:h-96 object-center w-full object-cover']) ?>
            <div class="absolute inset-0 bg-gradient-to-t from-white"></div>
        </div>
        <div class="relative mx-auto -mt-12 max-w-7xl px-4 pb-16 sm:px-6 sm:pb-24 lg:px-8">

            <div class="mx-auto max-w-2xl text-center lg:max-w-4xl mb-20">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"><?php single_post_title(); ?></h2>
                <?php if (get_field('subtitle_page')) : ?>
                    <p class="mt-4 text-lg text-gray-500"><?php the_field('subtitle_page'); ?></p>
                <?php endif; ?>
            </div>

            <div class="space-y-8 mb-20 mx-auto max-w-2xl lg:mx-0 lg:max-w-none">
                <p class="mt-4 sm:text-lg text-gray-600">ESEÏS, prestataire multitechnique et second-œuvre incontournable dans le secteur Soft Services, a su développer des solutions flexibles, innovantes et sur mesure pour ses clients depuis maintenant plus de 20 ans, dans un secteur d’activité en perpétuel mouvement. </p>
                <p class="mt-4 sm:text-lg text-gray-600">Chez ESEIS, nous comprenons les défis auxquels les entreprises du secteur de la distribution sont confrontées, notamment en ce qui concerne l'entretien des infrastructures, la gestion des installations et la mise en œuvre de projets de construction et de rénovation. C'est pourquoi nous offrons une gamme complète de services spécialisés, conçus pour répondre à ces exigences de manière <strong>efficace</strong>, <strong>durable</strong> et <strong>respectueuse de l'environnement</strong>.</p>
            </div>

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



<div class="bg-white">
    <div class="px-6 py-24 sm:px-6 sm:py-32 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">

            <h2 class="mx-auto max-w-2xl text-2xl font-bold tracking-tight text-eseisblue-500 sm:text-3xl">Envie d'en savoir plus sur notre engagement envers l'excellence, la responsabilité sociale et environnementale ?</h2>
            <p class="mx-auto mt-6 max-w-xl font-medium text-lg leading-8 text-eseisblue-400">Contactez-nous dès aujourd'hui pour découvrir comment nous pouvons collaborer ensemble pour un avenir durable et éthique.</p>
            <div class="text-center pt-10"><a href="/contact"><button type="button" class="rounded-md bg-eseisblue-500 px-3.5 py-2.5 text-lg font-semibold text-white shadow-sm hover:bg-eseisblue-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 z-10">Contactez-nous</button></a> </div>

        </div>
    </div>
</div>





</main>












<?php get_footer(); ?>