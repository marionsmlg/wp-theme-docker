<?php if (als_get_field('img_key_numbers', 'option')) : ?>
    <div class="relative h-[30rem] md:h-72 w-full bg-fixed bg-cover bg-center inset-y-0 left-0" style="background-image:url('<?php echo esc_url(als_get_field('img_key_numbers', 'option')); ?>');">
    <?php endif ?>
    <div class="absolute inset-0 bg-secondarycolor opacity-50 shadow-xl"></div>
    <div class="absolute grid grid-cols-1 md:grid-cols-3 w-full h-full">

        <?php
        $count = 1;
        while (als_have_rows('key_numbers', 'option')) : the_row();
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
                        <h2 class="text-xl sm:text-2xl  text-white maw-w-3xl"><?php the_sub_field('text'); ?></h2>
                    </div>
                <?php endif ?>
            </div>
        <?php
            $count++;
        endwhile;
        ?>
    </div>
    </div>