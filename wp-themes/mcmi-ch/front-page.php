<?php get_header(); ?>

<main>

    <?php while (have_rows('illustration')) : the_row(); ?>
        <div class="relative md:h-screen h-screen">
            <?php while (have_rows('slider')) : the_row(); ?>
                <img src="<?php the_sub_field('image'); ?>" alt="Image" class="h-screen w-full object-center object-cover">
            <?php endwhile; ?>
            <div class="absolute inset-0 bg-black opacity-50 shadow-xl"></div>
            <div class="absolute inset-0 p-6 md:p-16 flex flex-col justify-center text-center items-center gap-y-8 ">
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




    <!-- Chiffres -->
    <?php while (have_rows('chiffres_cles')) : the_row(); ?>
        <div class="relative bg-gray-100">
            <div class="h-56 w-full bg-fixed bg-cover bg-center lg:bg-right lg:absolute lg:inset-y-0 lg:left-0 lg:h-full lg:w-1/2" style="background-image:url('https://images.unsplash.com/photo-1485230405346-71acb9518d9c?q=80&w=2094&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"> </div>
            <div class="mx-auto grid max-w-7xl lg:grid-cols-2">
                <div class="px-6 pb-24 pt-16 sm:pb-32 sm:pt-20 lg:col-start-2 lg:px-8 lg:pt-32">
                    <div class="mx-auto max-w-2xl lg:mr-0 lg:max-w-lg">
                        <?php if (get_sub_field('title')) : ?>
                            <h2 class="text-xl font-semibold leading-7 text-seondarycolor uppercase"><?php the_sub_field('title'); ?> </h2>
                        <?php endif ?>
                        <?php if (get_sub_field('subtitle')) : ?>
                            <p class="mt-6 text-lg leading-8 text-gray-700"><?php the_sub_field('subtitle'); ?> </p>
                        <?php endif ?>
                        <dl class="mt-16 grid max-w-xl grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-3 xl:mt-16">
                            <?php
                            $count = 1;
                            while (have_rows('key_numbers', 'option')) : the_row();
                            ?>
                                <div class="flex flex-col gap-y-3 border-l border-maincolor pl-6">
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

    <!-- Services -->
    <?php while (have_rows('nos_metiers')) : the_row(); ?>

        <div class="my-16">
            <div class="mx-auto max-w-3xl text-center flex flex-col items-center">
                <?php get_template_part('parts/title-decoration'); ?>
                <h2 class="text-2xl font-semibold leading-7 text-secondarycolor uppercase"><?php if (get_sub_field('title')) : ?> <?php the_sub_field('title'); ?><?php endif ?></h2>

                <p class="mt-6 text-lg leading-8 text-gray-600"><?php if (get_sub_field('content')) : ?> <?php the_sub_field('content'); ?><?php endif ?></p>
            </div>
            <div class="relative mx-auto mt-16 sm:mt-20 lg:mt-24">
                <dl class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                    <?php while (have_rows('jobs')) : the_row(); ?>
                        <div class="relative">
                            <img class="fit-picture" src="https://images.unsplash.com/photo-1487958449943-2429e8be8625?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Grapefruit slice atop a pile of other slices" />
                            <div class="absolute inset-0 p-6 md:p-16 flex flex-col justify-center text-center items-center gap-y-8 z-10">
                                <?php if (get_sub_field('name')) : ?>
                                    <h1 class="uppercase text-white text-2xl font-semibold max-w-xl"><?php the_sub_field('name'); ?></h1>
                                <?php endif ?>
                                <?php if (get_sub_field('description')) : ?>
                                    <div class="max-w-5xl">
                                        <h2 class="text-white max-w-3xl"><?php the_sub_field('description'); ?></h2>
                                    </div>
                                <?php endif ?>

                            </div>
                        </div>
                    <?php endwhile; ?>
                </dl>
                <!-- <div class="text-eseisblue-500 text-right mt-10 mx-auto max-w-6xl">
                    <a class="text-base font-semibold" href="/nos-services">
                        Voir plus
                        <span aria-hidden="true"> &rarr;</span>
                    </a>
                </div> -->
                <div class="absolute inset-0 bg-black opacity-50 shadow-xl"></div>

            </div>

        </div>

    <?php endwhile; ?>

    <!-- CTA -->
    <div class="bg-maincolor mt-20">
        <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 flex flex-col items-center justify-center lg:px-8">
            <h2 class="text-xl font-semibold tracking-tight text-center text-white sm:text-3xl uppercase">Ready to dive in?<br>Start your free trial today.</h2>
            <div class="mt-10 gap-x-6">
                <a href="/contact"><button type="button" class="rounded-md sm:px-3.5 sm:py-2.5 px-3 py-2 lg:text-base text-sm font-semibold text-gray-700 shadow-sm bg-white hover:bg-europassyellow-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 z-10">Contactez-nous</button></a>

            </div>
        </div>
    </div>

    <?php while (have_rows('nos_valeurs')) : the_row(); ?>
        <div class="pb-20 px-6 pt-20  sm:pb-24">
            <div class="mx-auto max-w-2xl text-center flex justify-center items-center flex-col lg:max-w-4xl">
                <?php get_template_part('parts/title-decoration'); ?>
                <h2 class="text-2xl font-semibold leading-7 text-secondarycolor uppercase"><?php if (get_sub_field('title')) : ?> <?php the_sub_field('title'); ?><?php endif ?></h2>

                <p class="mt-6 text-lg leading-8 text-gray-600"><?php if (get_sub_field('content')) : ?> <?php the_sub_field('content'); ?><?php endif ?></p>
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
                                <?php if (get_sub_field('name')) : ?> <p class="uppercase"><?php the_sub_field('name'); ?></p> <?php endif ?>
                            </dt>
                            <?php if (get_sub_field('description')) : ?><dd class="mt-2 text-base leading-7 text-gray-600 text-center"><?php the_sub_field('description'); ?></dd> <?php endif ?>

                        </div>
                    <?php endwhile; ?>

                </dl>
            </div>
        </div>
    <?php endwhile; ?>

    <div class="h-80 w-full bg-fixed bg-cover bg-center bg-right inset-y-0 left-0" style="background-image:url('https://images.unsplash.com/photo-1485230405346-71acb9518d9c?q=80&w=2094&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"> </div>

    <?php if (have_rows('actualites')) : ?>
        <?php while (have_rows('actualites')) : the_row(); ?>

            <div class="pb-10 px-6 pt-10 bg-gray-100">
                <div class="mx-auto max-w-2xl text-center flex flex-col items-center lg:max-w-4xl">
                    <?php get_template_part('parts/title-decoration'); ?>
                    <h2 class="text-2xl font-semibold leading-7 text-secondarycolor uppercase"><?php if (get_sub_field('title')) : ?> <?php the_sub_field('title'); ?><?php endif ?></h2>
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


            if ($query->have_posts()) : ?>

                <div class="p-6 bg-gray-100">
                    <div class="flex flex-wrap justify-center w-full gap-x-4 gap-y-8 sm:gap-x-20">
                        <?php while ($query->have_posts()) : $query->the_post(); ?>

                            <a href="<?php the_permalink() ?>" class="flex flex-col items-center w-full sm:w-96">
                                <div class="w-full rounded-lg hover:opacity-75">
                                    <div class="overflow-hidden w-full bg-gray-100 mb-2">
                                        <?php the_post_thumbnail('medium', ['class' => 'pointer-events-none object-cover h-64 w-full']) ?>
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
            <div class="mt-10 px-6 pt-10">
                <div class="mx-auto max-w-2xl text-center flex flex-col items-center lg:max-w-4xl mb-16">
                    <?php get_template_part('parts/title-decoration'); ?>
                    <h2 class="text-2xl font-semibold leading-7 text-secondarycolor uppercase"><?php if (get_sub_field('title')) : ?> <?php the_sub_field('title'); ?><?php endif ?></h2>
                </div>
            </div>
            <?php get_template_part('parts/they-trust-us'); ?>
        <?php endwhile; ?>
    <?php endif ?>

</main>
<?php get_footer(); ?>