<?php get_header(); ?>

<main class="mt-16">

    <?php while (have_rows('illustration')) : the_row(); ?>
        <div class="relative md:h-[700px] h-[500px] mt-24">
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
                <div><a href="/contact"><button type="button" class="rounded-md bg-maincolor-500 sm:px-6 sm:py-4 px-3.5 py-2.5 text-lg font-semibold text-white shadow-sm hover:bg-maincolor-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 z-10">Contactez-nous</button></a> </div>

            </div>
        </div>

    <?php endwhile; ?>

    <!-- Metiers -->
    <?php while (have_rows('nos_metiers')) : the_row(); ?>

        <div class="mx-auto mt-16 max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-3xl text-center flex flex-col items-center">
                <?php if (get_sub_field('title')) : ?>
                    <?php get_template_part('parts/title-decoration'); ?>
                    <h2 class="text-2xl font-semibold leading-7 text-secondarycolor uppercase"> <?php the_sub_field('title'); ?></h2>
                <?php endif ?>
                <?php if (get_sub_field('subtitle')) : ?>
                    <p class="mt-6 text-lg leading-8 text-gray-600"> <?php the_sub_field('subtitle'); ?></p>
                <?php endif ?>
            </div>
            <div class="mx-auto mt-16 max-w-3xl sm:mt-20 lg:mt-24 lg:max-w-6xl">
                <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-3 lg:gap-y-16">
                    <?php while (have_rows('jobs')) : the_row(); ?>
                        <div class="flex flex-col">
                            <dt class="text-base font-semibold leading-7 text-gray-900">
                                <div class="mb-6 flex h-12 w-12 items-center justify-center rounded-sm bg-maincolor-200">
                                    <?php if (get_sub_field('icon')) : ?>
                                        <img class="style-svg h-8 w-8 text-white" src="<?php the_sub_field('icon'); ?>">
                                    <?php endif ?>
                                </div>
                                <?php if (get_sub_field('name')) : ?> <?php the_sub_field('name'); ?> <?php endif ?>
                            </dt>
                            <dd class="mt-1 flex flex-auto flex-col text-base leading-7 text-gray-600">
                                <?php if (get_sub_field('description')) : ?>
                                    <p class="flex-auto"><?php the_sub_field('description'); ?></p>
                                <?php endif ?>
                            </dd>
                        </div>
                    <?php endwhile; ?>
                </dl>
                <div class="text-eseisblue-500 text-right mt-10 mx-auto max-w-6xl">
                    <a class="text-base font-semibold" href="/services">
                        Voir plus
                        <span aria-hidden="true"> &rarr;</span>
                    </a>
                </div>
            </div>

        </div>

    <?php endwhile; ?>

    <!-- CTA -->
    <?php while (have_rows('cta')) : the_row(); ?>
        <div class="bg-gray-100 mt-20">
            <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:flex lg:items-center lg:justify-between lg:px-8">
                <h2 class="text-2xl font-semibold tracking-tight text-gray-700 sm:text-4xl"><?php if (get_sub_field('line_1')) : ?><?php the_sub_field('line_1'); ?><?php endif; ?><br><?php if (get_sub_field('line_2')) : ?><?php the_sub_field('line_2'); ?><?php endif; ?></h2>
                <?php if (get_sub_field('button_text')) : ?>
                    <?php if (get_sub_field('button_url')) : ?>
                        <div class="mt-10 flex items-center gap-x-6 lg:mt-0 lg:flex-shrink-0">
                            <a href="<?php the_sub_field('button_url'); ?>"><button type="button" class="rounded-md sm:px-3.5 sm:py-2.5 px-3 py-2 lg:text-base text-sm font-semibold text-white shadow-sm bg-maincolor-500 hover:bg-maincolor-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 z-10"><?php the_sub_field('button_text'); ?></button></a>

                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    <?php endwhile; ?>


    <?php while (have_rows('chiffres_cles')) : the_row(); ?>
        <div class="relative bg-maincolor-100">
            <?php if (get_sub_field('image')) : ?>
                <img class="h-56 w-full bg-gray-50 object-cover lg:absolute lg:inset-y-0 lg:left-0 lg:h-full lg:w-1/2" src="<?php the_sub_field('image'); ?>" alt="company">
            <?php endif ?>
            <div class="mx-auto grid max-w-7xl lg:grid-cols-2">
                <div class="px-6 pb-24 pt-16 sm:pb-32 sm:pt-20 lg:col-start-2 lg:px-8 lg:pt-32">
                    <div class="mx-auto max-w-2xl lg:mr-0 lg:max-w-lg">
                        <?php if (get_sub_field('title')) : ?>
                            <h2 class="text-2xl font-semibold leading-7 text-secondarycolor uppercase"><?php the_sub_field('title'); ?> </h2>
                        <?php endif ?>
                        <?php if (get_sub_field('subtitle')) : ?>
                            <p class="mt-6 text-lg leading-8 text-gray-700"><?php the_sub_field('subtitle'); ?> </p>
                        <?php endif ?>
                        <dl class="mt-16 grid max-w-xl grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-3 xl:mt-16">
                            <?php
                            $count = 1;
                            while (have_rows('key_numbers', 'option')) : the_row();
                            ?>
                                <div class="flex flex-col gap-y-3 border-l border-secondarycolor pl-6">
                                    <dt class="text-base leading-6 font-semibold text-gray-700"><?php if (get_sub_field('text')) : ?><?php the_sub_field('text'); ?><?php endif ?></dt>
                                    <?php if (get_sub_field('number')) : ?>
                                        <dd class="order-first text-4xl font-semibold tracking-tight text-secondarycolor"> <?php if (get_sub_field('prefix')) : ?> <?php the_sub_field('prefix'); ?><?php endif ?>
                                                <span id="counter<?php echo $count; ?>"><?php the_sub_field('number'); ?></span>
                                                <?php if (get_sub_field('unit')) : ?> <?php the_sub_field('unit'); ?><?php endif ?>
                                        </dd>
                                    <?php endif ?>
                                </div>


                            <?php
                                $count++;
                            endwhile;
                            ?>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>


    <?php while (have_rows('nos_valeurs')) : the_row(); ?>
        <div class="pb-20 px-6 pt-20  sm:pb-24">
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
    <?php endwhile; ?>



    <?php if (have_rows('actualites')) : ?>
        <?php while (have_rows('actualites')) : the_row(); ?>

            <div class="mt-10 pb-10 px-6 pt-10 bg-gray-100">
                <div class="mx-auto max-w-2xl text-center lg:max-w-4xl flex flex-col items-center">
                    <?php if (get_sub_field('title')) : ?>
                        <?php get_template_part('parts/title-decoration'); ?>
                        <h2 class="text-2xl font-semibold leading-7 text-secondarycolor uppercase"> <?php the_sub_field('title'); ?></h2>
                    <?php endif ?>
                    <p class="mt-6 text-lg leading-8 text-gray-600"><?php if (get_sub_field('subtitle')) : ?> <?php the_sub_field('subtitle'); ?><?php endif ?></p>
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

                <div class="p-6 bg-gray-100">
                    <div class="flex flex-wrap justify-center gap-x-4 gap-y-8 sm:gap-x-20">
                        <?php while ($query->have_posts()) : $query->the_post(); ?>

                            <a href="<?php the_permalink() ?>" class="flex flex-col items-center w-full sm:w-96 p-6 bg-white hover:shadow-md">
                                <div class="w-full rounded-lg hover:opacity-75">
                                    <div class="overflow-hidden w-full bg-gray-100 mb-2">
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
            <?php if (get_sub_field('title')) : ?>
                <div class="mt-10 px-6 pb-20">
                    <div class="mx-auto max-w-2xl text-center lg:max-w-4xl mb-16 flex flex-col items-center">
                    <?php get_template_part('parts/title-decoration'); ?>
                        <h2 class="text-2xl font-semibold leading-7 text-secondarycolor uppercase"><?php the_sub_field('title'); ?></h2>
                    </div>
                    <?php get_template_part('parts/they-trust-us'); ?>
                </div>

            <?php endif ?>
        <?php endwhile; ?>
    <?php endif ?>

</main>
<?php get_footer(); ?>