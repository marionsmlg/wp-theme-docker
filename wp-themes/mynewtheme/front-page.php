<?php get_header(); ?>

<main class="mt-16">

    <?php while (have_rows('illustration')) : the_row(); ?>
        <div class="relative h-[700px]">
            <?php if (get_sub_field('main_image')) : ?>
                <img src="<?php the_sub_field('main_image'); ?>" class="absolute inset-0 w-full h-full object-cover">
            <?php endif ?>
            <div class="absolute inset-0 bg-black opacity-25 shadow-xl"></div>
            <div class="absolute inset-0 p-6 md:p-16 flex flex-col justify-center gap-y-8 ">
                <?php if (get_sub_field('headline')) : ?>
                    <h1 class="text-4xl sm:text-5xl text-white font-semibold max-w-3xl"><?php the_sub_field('headline'); ?></h1>
                <?php endif ?>
                <?php if (get_sub_field('subheadline')) : ?>
                    <h2 class="text-2xl sm:text-3xl text-white"><?php the_sub_field('subheadline'); ?></h2>
                <?php endif ?>
                <div><a href="/contactez-nous"><button type="button" class="rounded-md bg-blue-900 px-6 py-4 text-lg font-semibold text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 z-10">Contactez-nous</button></a> </div>

            </div>
        </div>

    <?php endwhile; ?>

    <!-- Metiers -->
    <?php while (have_rows('nos_metiers')) : the_row(); ?>

        <div class="mx-auto mt-16 max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-3xl lg:text-center">
                <h2 class="text-base font-semibold leading-7 text-blue-600 uppercase"><?php if (get_sub_field('title')) : ?> <?php the_sub_field('title'); ?><?php endif ?></h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-800 sm:text-4xl"><?php if (get_sub_field('subtitle')) : ?> <?php the_sub_field('subtitle'); ?><?php endif ?></p>
                <p class="mt-6 text-lg leading-8 text-gray-600"><?php if (get_sub_field('content')) : ?> <?php the_sub_field('content'); ?><?php endif ?></p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-3 lg:gap-y-16">
                    <?php while (have_rows('jobs')) : the_row(); ?>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold leading-7 text-gray-900">
                                <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-blue-600">
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                    </svg>
                                </div>
                                <?php if (get_sub_field('name')) : ?> <?php the_sub_field('name'); ?> <?php endif ?>
                            </dt>
                            <?php if (get_sub_field('description')) : ?><dd class="mt-2 text-base leading-7 text-gray-600"><?php the_sub_field('description'); ?></dd> <?php endif ?>

                        </div>
                    <?php endwhile; ?>
                </dl>
            </div>
        </div>
        <div class="text-center py-24"><a href="/contactez-nous"><button type="button" class="rounded-md bg-blue-900 px-3.5 py-2.5 text-lg font-semibold text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 z-10">Contactez-nous</button></a> </div>
    <?php endwhile; ?>

    <?php while (have_rows('chiffres_cles')) : the_row(); ?>

        <div class="relative z-10 mt-14 bg-[#D5E8F3] pb-20 sm:mt-32 sm:pb-24 xl:pb-0">
            <div class="mx-auto flex max-w-7xl flex-col items-center gap-x-8 gap-y-10 px-6 sm:gap-y-8 lg:px-8 xl:flex-row xl:items-stretch">
                <div class="-mt-8 w-full max-w-2xl xl:-mb-8 xl:w-96 xl:flex-none">
                    <div class="relative aspect-[2/1] h-full md:-mx-8 xl:mx-0 xl:aspect-auto">
                        <img class="absolute inset-0 h-full w-full rounded-2xl bg-gray-800 object-cover shadow-2xl" src="<?php if (get_sub_field('image')) : ?> <?php the_sub_field('image'); ?> <?php endif ?>" alt="" />
                    </div>
                </div>
                <div class="w-full max-w-2xl xl:max-w-none xl:flex-auto xl:px-16 xl:py-8">
                    <figure class="relative isolate pt-6 sm:pt-4">
                        <blockquote class="text-xl text-blue-900 font-semibold leading-8 sm:text-2xl sm:leading-9">
                            <p> <?php if (get_sub_field('title')) : ?> <?php the_sub_field('title'); ?> <?php endif ?></p>
                        </blockquote>
                        <figcaption class="mt-8 text-base">
                            <div class="font-semibold"> <?php if (get_sub_field('subtitle')) : ?> <?php the_sub_field('subtitle'); ?> <?php endif ?></div>
                        </figcaption>
                        <div class="pt-16 pb-8 gap-8 flex">
                            <?php while (have_rows('content')) : the_row(); ?>
                                <div class="flex flex-col text-blue-900 font-semibold">
                                    <?php if (get_sub_field('number')) : ?> <p class="text-4xl"><?php if (get_sub_field('prefix')) : ?> <?php the_sub_field('prefix'); ?><?php endif ?><?php the_sub_field('number'); ?><?php if (get_sub_field('unit')) : ?> <?php the_sub_field('unit'); ?><?php endif ?></p><?php endif ?>
                                    <p class="text-xl"><?php if (get_sub_field('text')) : ?><?php the_sub_field('text'); ?><?php endif ?></p>
                                </div>
                            <?php endwhile; ?>
                        </div>

                    </figure>
                </div>
            </div>
        </div>
    <?php endwhile; ?>

    <?php while (have_rows('secteurs_activite')) : the_row(); ?>

        <div class="relative isolate mx-auto mt-16 max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center lg:max-w-4xl">
                <h2 class="text-base font-semibold leading-7 text-blue-600 uppercase"><?php if (get_sub_field('title')) : ?> <?php the_sub_field('title'); ?><?php endif ?></h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-800 sm:text-4xl"><?php if (get_sub_field('subtitle')) : ?> <?php the_sub_field('subtitle'); ?><?php endif ?></p>
                <p class="mt-6 text-lg leading-8 text-gray-600"><?php if (get_sub_field('content')) : ?> <?php the_sub_field('content'); ?><?php endif ?></p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-3 lg:gap-y-16">
                    <?php while (have_rows('sectors')) : the_row(); ?>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold leading-7 text-gray-900">
                                <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-blue-600">
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                    </svg>


                                </div>
                                <?php if (get_sub_field('name')) : ?> <?php the_sub_field('name'); ?> <?php endif ?>
                            </dt>
                            <?php if (get_sub_field('description')) : ?><dd class="mt-2 text-base leading-7 text-gray-600"><?php the_sub_field('description'); ?></dd> <?php endif ?>

                        </div>
                    <?php endwhile; ?>
                </dl>
            </div>
        </div>
        <div class="text-center py-24"><a href="/contactez-nous"><button type="button" class="rounded-md bg-blue-900 px-3.5 py-2.5 text-lg font-semibold text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 z-10">Contactez-nous</button></a> </div>
    <?php endwhile; ?>


    <?php while (have_rows('nos_valeurs')) : the_row(); ?>
        <div class="bg-[#D5E8F3] pb-20 px-6 pt-10  sm:pb-24 shadow-md">
            <div class="mx-auto max-w-2xl text-center lg:max-w-4xl">
                <h2 class="text-base font-semibold leading-7 text-blue-600 uppercase"><?php if (get_sub_field('title')) : ?> <?php the_sub_field('title'); ?><?php endif ?></h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-800 sm:text-4xl"><?php if (get_sub_field('subtitle')) : ?> <?php the_sub_field('subtitle'); ?><?php endif ?></p>
                <p class="mt-6 text-lg leading-8 text-gray-600"><?php if (get_sub_field('content')) : ?> <?php the_sub_field('content'); ?><?php endif ?></p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-6xl">
                <dl class="grid max-w-2xl grid-cols-1 gap-x-24 gap-y-10 lg:max-w-none lg:grid-cols-3 lg:gap-y-16">
                    <?php while (have_rows('values')) : the_row(); ?>
                        <div class="relative p-8 bg-white rounded-lg shadow-md">
                            <dt class="text-base flex flex-col items-center text-center font-semibold leading-7 text-gray-900 gap-2">
                                <div class=" flex h-10 w-10 items-center justify-center rounded-lg bg-blue-600">
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                    </svg>
                                </div>
                                <?php if (get_sub_field('name')) : ?> <?php the_sub_field('name'); ?> <?php endif ?>
                            </dt>
                            <?php if (get_sub_field('description')) : ?><dd class="mt-2 text-base leading-7 text-gray-600"><?php the_sub_field('description'); ?></dd> <?php endif ?>

                        </div>
                    <?php endwhile; ?>

                </dl>
            </div>

        </div>
    <?php endwhile; ?>



    <?php if (have_rows('actualites')) : ?>
        <?php while (have_rows('actualites')) : the_row(); ?>

            <div class="mt-10 pb-10 px-6 pt-10 ">
                <div class="mx-auto max-w-2xl text-center lg:max-w-4xl">
                    <h2 class="text-base font-semibold leading-7 text-blue-600 uppercase"><?php if (get_sub_field('title')) : ?> <?php the_sub_field('title'); ?><?php endif ?></h2>
                    <p class="mt-2 text-3xl font-bold tracking-tight text-gray-800 sm:text-4xl"><?php if (get_sub_field('subtitle')) : ?> <?php the_sub_field('subtitle'); ?><?php endif ?></p>
                    <p class="mt-6 text-lg leading-8 text-gray-600"><?php if (get_sub_field('content')) : ?> <?php the_sub_field('content'); ?><?php endif ?></p>
                </div>
            </div>
            <?php
            // Récupérer les 3 derniers articles
            $args = array(
                'post_type' => 'post',   // Type de contenu: article
                'posts_per_page' => 3,   // Nombre d'articles à afficher
                'orderby' => 'date',     // Trier par date
                'post_status' => 'publish',
                'order' => 'DESC',       // Ordre décroissant
            );

            $query = new WP_Query($args);

            // Vérifier s'il y a des articles à afficher
            if ($query->have_posts()) : ?>

                <div class="p-6">
                    <ul role="list" class="flex flex-wrap justify-center gap-x-4 gap-y-8 sm:gap-x-20">
                        <?php while ($query->have_posts()) : $query->the_post(); ?>

                            <a href="<?php the_permalink() ?>" class="flex flex-col items-center w-80">
                                <div class="w-full h-80 rounded-lg hover:opacity-75">
                                    <div class="overflow-hidden w-full h-48 rounded-lg bg-gray-100 mb-2">
                                        <?php the_post_thumbnail('medium', ['class' => 'pointer-events-none object-cover h-48 w-full']) ?>
                                    </div>
                                    <div>
                                        <p class="pointer-events-none block text-sm font-medium text-gray-500"><?php echo get_the_date(); ?></p>
                                        <p class="pointer-events-none mt-2 block truncate text-sm font-medium text-gray-900"><?php the_title(); ?></p>

                                        <p class="post-date"><?php echo wp_trim_words(get_the_excerpt(), 14, '...'); ?></p>
                                    </div>
                                </div>
                            </a>
                        <?php endwhile; ?>
                    </ul>
                    <div class="text-blue-900 text-right mt-6">
                        <a class="text-base font-semibold" href="<?= get_post_type_archive_link('post') ?>">
                            Voir toutes les actualités
                            <span aria-hidden="true"> &rarr;</span>
                        </a>
                    </div>
                </div>
            <?php
                // Réinitialiser la requête
                wp_reset_postdata();

            else :
                echo '<p>Aucun article trouvé.</p>';
            endif;
            ?>

        <?php endwhile; ?>
    <?php endif ?>


    <?php if (have_rows('partners')) : ?>
        <?php while (have_rows('partners')) : the_row(); ?>
            <div class="mt-10 pb-20 px-6 pt-10 sm:pb-16">
                <div class="mx-auto max-w-2xl text-center lg:max-w-4xl">
                    <h2 class="text-base font-semibold leading-7 text-blue-600 uppercase"><?php if (get_sub_field('title')) : ?> <?php the_sub_field('title'); ?><?php endif ?></h2>
                    <p class="mt-2 text-3xl font-bold tracking-tight text-gray-800 sm:text-4xl"><?php if (get_sub_field('subtitle')) : ?> <?php the_sub_field('subtitle'); ?><?php endif ?></p>
                    <p class="mt-6 text-lg leading-8 text-gray-600"><?php if (get_sub_field('content')) : ?> <?php the_sub_field('content'); ?><?php endif ?></p>
                </div>
            </div>
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="flex flex-wrap mx-auto max-w-lg items-center justify-center gap-x-8 gap-y-12 sm:max-w-xl sm:gap-x-10 sm:gap-y-14 lg:mx-0 lg:max-w-none">
                    <?php while (have_rows('logo_partners')) : the_row(); ?>
                        <?php if (get_sub_field('logo')) : ?><img class="max-h-12 w-48 object-contain" src="<?php the_sub_field('logo'); ?>" alt="logo-partner" width="158" height="48"><?php endif ?>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif ?>


    <?php if (have_rows('certifications')) : ?>
        <?php while (have_rows('certifications')) : the_row(); ?>
            <div class="mt-10 pb-20 px-6 pt-10 sm:pb-16">
                <div class="mx-auto max-w-2xl text-center lg:max-w-4xl">
                    <h2 class="text-base font-semibold leading-7 text-blue-600 uppercase"><?php if (get_sub_field('title')) : ?> <?php the_sub_field('title'); ?><?php endif ?></h2>
                    <p class="mt-2 text-3xl font-bold tracking-tight text-gray-800 sm:text-4xl"><?php if (get_sub_field('subtitle')) : ?> <?php the_sub_field('subtitle'); ?><?php endif ?></p>
                </div>
            </div>
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto flex flex-wrap max-w-lg items-center justify-center gap-x-8 gap-y-12 sm:max-w-xl sm:gap-x-10 sm:gap-y-14 lg:mx-0 lg:max-w-none">
                    <?php while (have_rows('content')) : the_row(); ?>
                        <div class="flex flex-col items-center text-center">
                            <?php if (get_sub_field('name')) : ?><p class="mb-3 font-medium text-gray-500"><?php the_sub_field('name'); ?></p><?php endif ?>
                            <?php if (get_sub_field('logo')) : ?><img class="w-48 h-28 object-contain" src="<?php the_sub_field('logo'); ?>" alt="logo-certification" width="158" height="48"><?php endif ?>
                        </div>

                    <?php endwhile; ?>

                </div>
            </div>
        <?php endwhile; ?>
    <?php endif ?>

    <div class="text-center py-24"><a href="/contactez-nous"><button type="button" class="rounded-md bg-blue-900 px-3.5 py-2.5 text-lg font-semibold text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 z-10">Contactez-nous</button></a> </div>
</main>
<?php get_footer(); ?>