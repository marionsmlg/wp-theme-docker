<?php get_header(); ?>

<main class="mt-16">

    <?php while (have_rows('illustration')) : the_row(); ?>
        <div class="relative md:h-[700px] h-[500px]">
            <?php while (have_rows('slider')) : the_row(); ?>
                <img src="<?php the_sub_field('image'); ?>" alt="Image" class="slide aspect-[5/2] object-center object-cover">
            <?php endwhile; ?>
            <div class="absolute inset-0 bg-black opacity-35 shadow-xl"></div>
            <div class="absolute inset-0 p-6 md:p-16 flex flex-col justify-center text-center items-center lg:text-left lg:items-start gap-y-8 ">
                <?php if (get_sub_field('headline')) : ?>
                    <h1 class="text-3xl sm:text-4xl md:text-5xl text-white font-semibold max-w-3xl"><?php the_sub_field('headline'); ?></h1>
                <?php endif ?>
                <?php if (get_sub_field('subheadline')) : ?>
                    <div class="max-w-5xl">
                        <h2 class="text-xl sm:text-2xl md:text-3xl text-white maw-w-3xl"><?php the_sub_field('subheadline'); ?></h2>
                    </div>

                <?php endif ?>
                <div><a href="/contact"><button type="button" class="rounded-md bg-eseisblue-500 sm:px-6 sm:py-4 px-3.5 py-2.5 text-lg font-semibold text-white shadow-sm hover:bg-eseisblue-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 z-10">Contactez-nous</button></a> </div>

            </div>
        </div>

    <?php endwhile; ?>

    <!-- Metiers -->
    <?php while (have_rows('nos_metiers')) : the_row(); ?>

        <div class="mx-auto mt-16 max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-3xl text-center">
                <h2 class="text-base font-semibold leading-7 text-eseisblue-400 uppercase"><?php if (get_sub_field('title')) : ?> <?php the_sub_field('title'); ?><?php endif ?></h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-800 sm:text-4xl"><?php if (get_sub_field('subtitle')) : ?> <?php the_sub_field('subtitle'); ?><?php endif ?></p>
                <p class="mt-6 text-lg leading-8 text-gray-600"><?php if (get_sub_field('content')) : ?> <?php the_sub_field('content'); ?><?php endif ?></p>
            </div>
            <div class="mx-auto mt-16 max-w-3xl sm:mt-20 lg:mt-24 lg:max-w-6xl">
                <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-3 lg:gap-y-16">
                    <?php while (have_rows('jobs')) : the_row(); ?>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold leading-7 text-gray-900">
                                <div class="absolute left-0  top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-eseisblue-400">
                                    <?php if (get_sub_field('icon')) : ?>
                                        <img class="style-svg h-6 w-6 text-white" src="<?php the_sub_field('icon'); ?>">
                                    <?php endif ?>
                                </div>
                                <?php if (get_sub_field('name')) : ?> <?php the_sub_field('name'); ?> <?php endif ?>
                            </dt>
                            <?php if (get_sub_field('description')) : ?><dd class="mt-2 text-base leading-7 text-gray-600"><?php the_sub_field('description'); ?></dd> <?php endif ?>

                        </div>
                    <?php endwhile; ?>
                </dl>
                <div class="text-eseisblue-500 text-right mt-10 mx-auto max-w-6xl">
                    <a class="text-base font-semibold" href="/nos-services">
                        Voir plus
                        <span aria-hidden="true"> &rarr;</span>
                    </a>
                </div>
            </div>

        </div>
        <div class="text-center py-24"><a href="/contact"><button type="button" class="rounded-md bg-eseisblue-500 px-3.5 py-2.5 text-lg font-semibold text-white shadow-sm hover:bg-eseisblue-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 z-10">Contactez-nous</button></a> </div>
    <?php endwhile; ?>

    <?php while (have_rows('chiffres_cles')) : the_row(); ?>
        <div class="relative z-10 mt-14 bg-eseisblue-50 pb-20 sm:mt-32 sm:pb-24 xl:pb-0">
            <div class="mx-auto flex max-w-7xl flex-col items-center gap-x-8 gap-y-10 px-6 sm:gap-y-8 lg:px-8 xl:flex-row xl:items-stretch">
                <div class="-mt-8 w-full max-w-2xl xl:-mb-8 xl:w-96 xl:flex-none">
                    <div class="relative aspect-[2/1] h-full md:-mx-8 xl:mx-0 xl:aspect-auto">
                        <img class="absolute inset-0 h-full w-full rounded-2xl bg-gray-800 object-cover shadow-2xl" src="<?php if (get_sub_field('image')) : ?> <?php the_sub_field('image'); ?> <?php endif ?>" alt="" />
                    </div>
                </div>
                <div class="w-full max-w-2xl xl:max-w-none xl:flex-auto xl:px-16 xl:py-8">
                    <figure class="relative isolate pt-6 sm:pt-4">
                        <blockquote class="text-eseisblue-500 font-semibold leading-8 text-3xl sm:leading-9">
                            <p> <?php if (get_sub_field('title')) : ?> <?php the_sub_field('title'); ?> <?php endif ?></p>
                        </blockquote>
                        <figcaption class="mt-8 text-base sm:text-lg">
                            <div class="font-semibold"> <?php if (get_sub_field('subtitle')) : ?> <?php the_sub_field('subtitle'); ?> <?php endif ?></div>
                        </figcaption>
                        <div class="pt-16 pb-8 gap-8 flex flex-col sm:flex-row">
                            <?php
                            $count = 1;
                            while (have_rows('key_numbers', 'option')) : the_row();
                            ?>

                                <div class="flex flex-col font-semibold text-center sm:text-left">
                                    <?php if (get_sub_field('number')) : ?>
                                        <p class="text-5xl text-eseisblue-500">
                                            <?php if (get_sub_field('prefix')) : ?> <?php the_sub_field('prefix'); ?><?php endif ?>
                                                <span id="counter<?php echo $count; ?>"><?php the_sub_field('number'); ?></span>
                                                <?php if (get_sub_field('unit')) : ?> <?php the_sub_field('unit'); ?><?php endif ?>
                                        </p>
                                    <?php endif ?>
                                    <p class="text-xl">
                                        <?php if (get_sub_field('text')) : ?><?php the_sub_field('text'); ?><?php endif ?>
                                    </p>
                                </div>
                            <?php
                                $count++;
                            endwhile;
                            ?>
                        </div>

                    </figure>
                </div>
            </div>
        </div>

    <?php endwhile; ?>

    <?php while (have_rows('secteurs_activite')) : the_row(); ?>

        <div class="relative isolate mx-auto mt-16 lg:mt-32 max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center lg:max-w-5xl">
                <h2 class="text-base font-semibold leading-7 text-eseisblue-400 uppercase"><?php if (get_sub_field('title')) : ?> <?php the_sub_field('title'); ?><?php endif ?></h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-800 sm:text-4xl"><?php if (get_sub_field('subtitle')) : ?> <?php the_sub_field('subtitle'); ?><?php endif ?></p>
                <p class="mt-6 text-lg leading-8 text-gray-600"><?php if (get_sub_field('content')) : ?> <?php the_sub_field('content'); ?><?php endif ?></p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-6xl">
                <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-3 lg:gap-y-16">
                    <?php while (have_rows('sectors')) : the_row(); ?>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold leading-7 text-gray-900">
                                <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-eseisblue-400">
                                    <?php if (get_sub_field('icon')) : ?>
                                        <img class="style-svg h-6 w-6 text-white" src="<?php the_sub_field('icon'); ?>">
                                    <?php endif ?>
                                </div>
                                <?php if (get_sub_field('name')) : ?> <?php the_sub_field('name'); ?> <?php endif ?>
                            </dt>
                            <?php if (get_sub_field('description')) : ?><dd class="mt-2 text-base leading-7 text-gray-600"><?php the_sub_field('description'); ?></dd> <?php endif ?>

                        </div>
                    <?php endwhile; ?>
                </dl>
            </div>
        </div>
        <div class="text-center py-24"><a href="/contact"><button type="button" class="rounded-md bg-eseisblue-500 px-3.5 py-2.5 text-lg font-semibold text-white shadow-sm hover:bg-eseisblue-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 z-10">Contactez-nous</button></a> </div>
    <?php endwhile; ?>


    <?php while (have_rows('nos_valeurs')) : the_row(); ?>
        <div class="bg-eseisblue-50 pb-20 px-6 pt-10  sm:pb-24 shadow-md">
            <div class="mx-auto max-w-2xl text-center lg:max-w-4xl">
                <h2 class="text-base font-semibold leading-7 text-eseisblue-400 uppercase"><?php if (get_sub_field('title')) : ?> <?php the_sub_field('title'); ?><?php endif ?></h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-800 sm:text-4xl"><?php if (get_sub_field('subtitle')) : ?> <?php the_sub_field('subtitle'); ?><?php endif ?></p>
                <p class="mt-6 text-lg leading-8 text-gray-600"><?php if (get_sub_field('content')) : ?> <?php the_sub_field('content'); ?><?php endif ?></p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-7xl">
                <dl class="grid max-w-2xl grid-cols-1 gap-x-24 gap-y-10 lg:max-w-none lg:grid-cols-3 lg:gap-y-16">
                    <?php while (have_rows('values', 'options')) : the_row(); ?>
                        <div class="relative p-8 bg-white rounded-lg shadow-md">
                            <dt class="text-base flex flex-col items-center text-center font-semibold leading-7 text-gray-900 gap-2">
                                <div class=" flex h-10 w-10 items-center justify-center rounded-lg bg-eseisblue-400">
                                    <?php if (get_sub_field('icon')) : ?>
                                        <img class="style-svg h-6 w-6 text-white" src="<?php the_sub_field('icon'); ?>">
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
    <?php endwhile; ?>



    <?php if (have_rows('actualites')) : ?>
        <?php while (have_rows('actualites')) : the_row(); ?>

            <div class="mt-10 pb-10 px-6 pt-10 ">
                <div class="mx-auto max-w-2xl text-center lg:max-w-4xl">
                    <h2 class="text-base font-semibold leading-7 text-eseisblue-400 uppercase"><?php if (get_sub_field('title')) : ?> <?php the_sub_field('title'); ?><?php endif ?></h2>
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
                    <div class="flex flex-wrap justify-center gap-x-4 gap-y-8 sm:gap-x-20">
                        <?php while ($query->have_posts()) : $query->the_post(); ?>

                            <a href="<?php the_permalink() ?>" class="flex flex-col items-center w-80">
                                <div class="w-full h-80 rounded-lg hover:opacity-75">
                                    <div class="overflow-hidden w-full h-48 rounded-lg bg-gray-100 mb-2">
                                        <?php the_post_thumbnail('medium_large', ['class' => 'pointer-events-none object-cover h-48 w-full']) ?>
                                    </div>
                                    <div>
                                        <p class="pointer-events-none block text-sm font-medium text-gray-500"><?php echo get_the_date(); ?></p>
                                        <p class="pointer-events-none mt-2 block truncate text-sm font-medium text-gray-900"><?php the_title(); ?></p>

                                        <p class="post-date"><?php echo wp_trim_words(get_the_excerpt(), 14, '...'); ?></p>
                                    </div>
                                </div>
                            </a>
                        <?php endwhile; ?>
                    </div>
                    <div class="text-eseisblue-500 text-right mt-10 mx-auto max-w-6xl">
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
            <div class="mt-10 px-6 pt-10">
                <div class="mx-auto max-w-2xl text-center lg:max-w-4xl mb-16">
                    <h2 class="text-base sm:text-lg font-semibold leading-7 text-eseisblue-400 uppercase"><?php if (get_sub_field('title')) : ?> <?php the_sub_field('title'); ?><?php endif ?></h2>
                </div>
            </div>
            <?php get_template_part('parts/they-trust-us'); ?>
        <?php endwhile; ?>
    <?php endif ?>


    <?php if (have_rows('certifications')) : ?>
        <?php while (have_rows('certifications')) : the_row(); ?>
            <div class="mt-10 px-6 pt-16 pb-8 sm:pb-16">
                <div class="mx-auto max-w-2xl text-center lg:max-w-4xl mb-16">
                    <h2 class="text-base font-semibold sm:text-lg leading-7 text-eseisblue-400 uppercase"><?php if (get_sub_field('title')) : ?> <?php the_sub_field('title'); ?><?php endif ?></h2>
                </div>
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto flex flex-wrap max-w-lg items-center justify-center gap-x-8 gap-y-12 sm:max-w-xl sm:gap-x-10 sm:gap-y-14 lg:mx-0 lg:max-w-none">
                        <?php while (have_rows('certifications', 'options')) : the_row(); ?>
                            <div class="flex flex-col items-center text-center">
                                <?php if (get_sub_field('name')) : ?><p class="mb-3 font-medium text-gray-500"><?php the_sub_field('name'); ?></p><?php endif ?>
                                <?php if (get_sub_field('logo')) : ?><img class="w-48 h-28 object-contain" src="<?php the_sub_field('logo'); ?>" alt="logo-certification" width="158" height="48"><?php endif ?>
                            </div>

                        <?php endwhile; ?>

                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif ?>

        <div class="text-center py-24"><a href="/contact"><button type="button" class="rounded-md bg-eseisblue-500 px-3.5 py-2.5 text-lg font-semibold text-white shadow-sm hover:bg-eseisblue-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 z-10">Contactez-nous</button></a> </div>
</main>
<?php get_footer(); ?>