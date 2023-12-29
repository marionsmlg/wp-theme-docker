<?php get_header(); ?>

<p><?php the_content() ?></p>
</ul>
<?php if (have_posts()) : ?>
    <ul role="list" class="grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
        <?php while (have_posts()) : the_post(); ?>
            <li class="relative">
                <a href="<?php the_permalink() ?>">
                    <div class="group aspect-h-7 aspect-w-10 block w-full overflow-hidden rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 focus-within:ring-offset-gray-100">
                        <?php the_post_thumbnail('medium', ['class' => 'pointer-events-none object-cover group-hover:opacity-75']) ?>
                        <button type="button" class="absolute inset-0 focus:outline-none">
                        </button>
                    </div>

                    <p class="pointer-events-none mt-2 block truncate text-sm font-medium text-gray-900"><?php the_title() ?></p>
                    <p class="pointer-events-none block text-sm font-medium text-gray-500"><?php the_author() ?></p>
                    <p><?php the_content() ?></p>
                </a>
            </li>
        <?php endwhile ?>
    </ul>
<?php else : ?>
    <h1>Pas d'articles</h1>
<?php endif; ?>




<?php get_footer(); ?>