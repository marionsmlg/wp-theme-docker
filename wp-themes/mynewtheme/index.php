<?php get_header(); ?>
<main class="mt-16 min-h-screen">

    <div class="relative h-56">
        <?php the_post_thumbnail('full', ['class' => 'aspect-[5/2] h-56 object-center w-full object-cover']) ?>

        <div class="absolute inset-0 bg-black opacity-50 shadow-xl"></div>
        <div class="absolute inset-0 p-6 md:p-16 flex items-center justify-center ">

            <h1 class="font-semibold text-4xl text-white sm:text-5xl"><?php single_post_title(); ?></h1>
        </div>

    </div>
    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>
            <div class="relative px-6 py-10">

                <p><?php the_content() ?></p>

            </div>
        <?php endwhile ?>

    <?php endif; ?>

</main>


<?php get_footer(); ?>