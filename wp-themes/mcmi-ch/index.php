<?php get_header(); ?>
<main class="mt-16 min-h-screen">

    <?php get_template_part('parts/title-page') ?>


    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>
            <div class="px-6 py-14 md:py-24 mx-auto max-w-7xl ">

                <article class="prose max-w-none prose-img:rounded-xl prose-a:text-blue-400 hover:prose-a:text-blue-500"><?php the_content() ?></article>

            </div>
        <?php endwhile ?>

    <?php endif; ?>

</main>


<?php get_footer(); ?>