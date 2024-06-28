<?php get_header(); ?>

<main>

    <?php while (have_rows('illustration')) : the_row(); ?>
        <div class="relative md:h-screen h-screen">
            <?php while (have_rows('slider')) : the_row(); ?>
                <img src="<?php the_sub_field('image'); ?>" alt="Image" class="h-screen w-full object-center object-cover">
            <?php endwhile; ?>
            <div class="absolute inset-0 bg-black opacity-50 shadow-xl"></div>
            <div class="absolute inset-0 p-6 md:p-16 flex flex-col justify-center text-center items-center gap-y-8">
                <?php if (get_sub_field('headline')) : ?>
                    <h1 class="text-3xl sm:text-4xl md:text-5xl text-white font-semibold max-w-3xl"><?php the_sub_field('headline'); ?></h1>
                <?php endif ?>
                <?php if (get_sub_field('subheadline')) : ?>
                    <div class="max-w-5xl">
                        <h2 class="text-xl sm:text-2xl md:text-3xl text-white maw-w-3xl"><?php the_sub_field('subheadline'); ?></h2>
                    </div>

                <?php endif ?>
                <div><a href="/contact"><button type="button" class="rounded-md text-lg bg-maincolor hover:bg-maincolor-400 hover:shadow-md sm:px-6 sm:py-4 px-3.5 py-2.5 text-base font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 z-10">Contactez-nous</button></a> </div>
            </div>
        </div>

    <?php endwhile; ?>




    <!-- Entreprise -->
    <?php while (have_rows('chiffres_cles')) : the_row(); ?>
        <div class="relative bg-gray-200 py-16">

            <div class="mx-auto grid max-w-7xl lg:grid-cols-2">
                <div class="px-6 lg:col-start-1 lg:px-8">
                    <div class="mb-10">
                        <?php if (get_sub_field('title')) : ?>
                            <?php get_template_part('parts/title-decoration'); ?>
                            <h2 class="text-2xl font-semibold leading-7 text-seondarycolor uppercase"><?php the_sub_field('title'); ?> </h2>
                        <?php endif ?>
                        <?php if (get_sub_field('paragraph_1')) : ?>
                            <p class="mt-6 text-xl leading-8 text-gray-700"><?php the_sub_field('paragraph_1'); ?> </p>
                        <?php endif ?>
                        <?php if (get_sub_field('paragraph_2')) : ?>
                            <p class="mt-6 text-xl leading-8 text-gray-700"><?php the_sub_field('paragraph_2'); ?> </p>
                        <?php endif ?>
                    </div>
                    <div> <a href="/entreprise"><button type="button" class="rounded-md sm:px-3.5 sm:py-2.5 px-3 py-2 text-sm sm:text-base font-semibold text-white shadow-sm bg-maincolor hover:bg-maincolor-400 hover:shadow-md focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 z-10">En savoir plus</button></a>
                    </div>
                </div>
                <?php if (get_sub_field('image')) : ?>
                    <div class="p-8">
                        <img src="<?php the_sub_field('image'); ?>" alt="company" />
                    </div>
                <?php endif ?>
            </div>
        </div>
    <?php endwhile; ?>

    <!-- Services -->
    <?php while (have_rows('nos_metiers')) : the_row(); ?>

        <div class="mt-16">
            <div class="mx-auto max-w-3xl text-center flex flex-col items-center">
                <?php if (get_sub_field('title')) : ?>
                    <?php get_template_part('parts/title-decoration'); ?>
                    <h2 class="text-2xl font-semibold leading-7 text-secondarycolor uppercase"> <?php the_sub_field('title'); ?></h2>
                <?php endif ?>
                <?php if (get_sub_field('subtitle')) : ?>
                    <p class="mt-6 text-lg leading-8 text-gray-600"> <?php the_sub_field('subtitle'); ?></p>
                <?php endif ?>
            </div>
            <div class="relative mx-auto mt-16 sm:mt-20 lg:mt-24">
                <dl class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                    <?php while (have_rows('jobs')) : the_row(); ?>
                        <div class="relative group h-80">
                            <?php if (get_sub_field('icon')) : ?>
                                <img src="<?php the_sub_field('icon'); ?>" class="h-80 w-full object-cover object-center" alt="services" />
                            <?php endif ?>

                            <div class="absolute inset-0 p-6 md:p-16 flex flex-col justify-center items-center gap-y-8 z-10 transition-opacity duration-500 ease-in-out">
                                <?php if (get_sub_field('name')) : ?>
                                    <h1 class="uppercase text-white text-2xl font-semibold max-w-xl group-hover:invisible visible">
                                        <?php the_sub_field('name'); ?>
                                    </h1>
                                <?php endif ?>
                            </div>

                            <div class="absolute inset-0 p-6 md:p-16 flex flex-col justify-center items-center gap-y-8 z-10 bg-maincolor opacity-0 group-hover:opacity-100 transition-opacity duration-500 ease-in-out">
                                <?php if (get_sub_field('name')) : ?>
                                    <h1 class="uppercase text-white text-2xl font-semibold max-w-xl">
                                        <?php the_sub_field('name'); ?>
                                    </h1>
                                <?php endif ?>
                                <?php if (get_sub_field('description')) : ?>
                                    <div class="max-w-5xl">
                                        <h2 class="text-white max-w-3xl group-hover:visible invisible">
                                            <?php the_sub_field('description'); ?>
                                        </h2>
                                    </div>
                                <?php endif ?>
                            </div>
                        </div>
                    <?php endwhile; ?>

                    <div class="relative h-80">
                        <a href="/services">
                            <div class="hover:bg-secondarycolor/100 transition ease-in duration-500 absolute inset-0 p-6 md:p-16 flex flex-col justify-center text-center items-center gap-y-8 z-10">
                                <h1 class="uppercase text-white text-2xl font-semibold max-w-xl">Voir tous nos services</h1>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-10 w-10 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </dl>
                <div class="absolute inset-0 bg-black opacity-50 shadow-xl"></div>
            </div>

        </div>

    <?php endwhile; ?>

    <!-- CTA -->
    <div class="bg-maincolor">
        <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 flex flex-col items-center justify-center lg:px-8">
            <h2 class="text-xl font-semibold tracking-tight text-center text-white sm:text-3xl">Vous avez un projet ?<br>Nous seront ravis d’échanger avec vous et répondre a vos besoins</h2>
            <div class="mt-10 gap-x-6">
                <a href="/contact"><button type="button" class="rounded-md sm:px-3.5 sm:py-2.5 px-3 py-2 lg:text-base text-sm font-semibold text-gray-700 shadow-sm bg-white hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 z-10">Contactez-nous</button></a>

            </div>
        </div>
    </div>

    <?php while (have_rows('nos_valeurs')) : the_row(); ?>
        <div class="pb-20 px-6 pt-20  sm:pb-24 bg-white">
            <div class="mx-auto max-w-2xl text-center flex justify-center items-center flex-col lg:max-w-4xl">
                <?php if (get_sub_field('title')) : ?>
                    <?php get_template_part('parts/title-decoration'); ?>
                    <h2 class="text-2xl font-semibold leading-7 text-secondarycolor uppercase"> <?php the_sub_field('title'); ?></h2>
                <?php endif ?>
                <?php if (get_sub_field('subtitle')) : ?>
                    <p class="mt-6 text-lg leading-8 text-gray-600"> <?php the_sub_field('subtitle'); ?></p>
                <?php endif ?>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-7xl">
                <dl class="grid max-w-2xl grid-cols-1 gap-x-24 gap-y-10 lg:max-w-none lg:grid-cols-3 lg:gap-y-16">
                    <?php while (have_rows('values', 'options')) : the_row(); ?>
                        <div class="relative p-8 bg-white">
                            <dt class="text-base flex flex-col items-center text-center font-semibold leading-7 text-gray-900 gap-2">
                                <div class="rounded-full flex h-16 w-16 items-center justify-center bg-gray-100">
                                    <?php if (get_sub_field('icon')) : ?>
                                        <img class="style-svg h-8 w-8 text-white" src="<?php the_sub_field('icon'); ?>">
                                    <?php endif ?>
                                </div>
                                <?php if (get_sub_field('name')) : ?> <p class="uppercase text-lg"><?php the_sub_field('name'); ?></p> <?php endif ?>
                            </dt>
                            <?php if (get_sub_field('description')) : ?><dd class="mt-2 text-base leading-7 text-gray-600 text-center"><?php the_sub_field('description'); ?></dd> <?php endif ?>

                        </div>
                    <?php endwhile; ?>

                </dl>
            </div>
        </div>
    <?php endwhile; ?>



    <!-- Chiffres -->
    <?php if (get_field('img_key_numbers', 'option')) : ?>
        <div class="relative h-[30rem] md:h-72 w-full bg-fixed bg-cover bg-center bg-right inset-y-0 left-0" style="background-image:url('<?php the_field('img_key_numbers', 'option') ?>');">
        <?php endif ?>
        <div class="absolute inset-0 bg-black opacity-50 shadow-xl"></div>
        <div class="absolute grid grid-cols-1 md:grid-cols-3 w-full h-full">

            <?php
            $count = 1;
            while (have_rows('key_numbers', 'option')) : the_row();
            ?>
                <div class="inset-0 p-6 md:p-16 flex flex-col justify-center text-center items-center">
                    <?php if (get_sub_field('number')) : ?>
                        <h1 class="text-4xl md:text-5xl font-semibold max-w-3xl text-maincolor mb-3"><?php if (get_sub_field('prefix')) : ?> <?php the_sub_field('prefix'); ?><?php endif ?>
                                <span id="counter<?php echo $count; ?>"><?php the_sub_field('number'); ?></span>
                                <?php if (get_sub_field('unit')) : ?> <?php the_sub_field('unit'); ?><?php endif ?>
                        </h1>
                    <?php endif ?>
                    <?php if (get_sub_field('text')) : ?>
                        <div class="max-w-5xl">
                            <h2 class="text-xl sm:text-2xl md:text-3xl text-white maw-w-3xl uppercase"><?php the_sub_field('text'); ?></h2>
                        </div>
                    <?php endif ?>
                </div>
            <?php
                $count++;
            endwhile;
            ?>
        </div>
        </div>

        <?php if (have_rows('actualites')) : ?>
            <?php while (have_rows('actualites')) : the_row(); ?>

                <div class="pb-10 px-6 pt-10 bg-gray-200">
                    <div class="mx-auto max-w-2xl text-center flex flex-col items-center lg:max-w-4xl">
                        <?php if (get_sub_field('title')) : ?>
                            <?php get_template_part('parts/title-decoration'); ?>
                            <h2 class="text-2xl font-semibold leading-7 text-secondarycolor uppercase"> <?php the_sub_field('title'); ?></h2>
                        <?php endif ?>
                        <?php if (get_sub_field('subtitle')) : ?>
                            <p class="mt-6 text-lg leading-8 text-gray-600"><?php the_sub_field('subtitle'); ?></p>
                        <?php endif ?>
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


                if ($query->have_posts()) : ?>

                    <div class="p-6 bg-gray-200">
                        <div class="flex flex-wrap justify-center w-full gap-x-4 gap-y-10 sm:gap-x-20">
                            <?php while ($query->have_posts()) : $query->the_post(); ?>

                                <a href="<?php the_permalink() ?>" class="flex flex-col items-center w-full sm:w-[28rem]">
                                    <div class="w-full rounded-lg hover:opacity-75">
                                        <div class="overflow-hidden w-full bg-gray-100 mb-2">
                                            <?php the_post_thumbnail('large', ['class' => 'pointer-events-none object-cover h-72 w-full']) ?>
                                        </div>
                                        <div>
                                            <p class="pointer-events-none block truncate text-lg font-medium text-gray-900 uppercase"><?php the_title(); ?></p>
                                            <p class="pointer-events-none block text-lg text-maincolor mt-2 italic"><?php echo get_the_date(); ?></p>

                                            <p class="post-date text-lg text-gray-600"><?php echo wp_trim_words(get_the_excerpt(), 14, '...'); ?></p>
                                        </div>
                                    </div>
                                </a>
                            <?php endwhile; ?>
                        </div>
                        <div class="text-center py-24"><a href="<?= get_post_type_archive_link('post') ?>"><button type="button" class="rounded-md bg-maincolor hover:bg-maincolor-400 hover:shadow-md px-3.5 py-2.5 text-lg font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 z-10">Voir toutes les actualités</button></a> </div>

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
                <?php if (get_sub_field('title')) : ?>
                    <div class="mt-10 px-6 pt-10">
                        <div class="mx-auto max-w-2xl text-center flex flex-col items-center lg:max-w-4xl mb-16">

                            <?php get_template_part('parts/title-decoration'); ?>
                            <h2 class="text-2xl font-semibold leading-7 text-secondarycolor uppercase"> <?php the_sub_field('title'); ?></h2>

                        </div>
                    </div>
                    <?php get_template_part('parts/they-trust-us'); ?>
                <?php endif ?>
            <?php endwhile; ?>
        <?php endif ?>


</main>
<?php get_footer(); ?>