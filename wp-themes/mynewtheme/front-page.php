<?php get_header(); ?>


<?php while (have_rows('illustration')) : the_row(); ?>
    <div class="relative h-screen">
        <?php if (get_sub_field('main_image')) : ?><img src="<?php the_sub_field('main_image'); ?>" class="absolute inset-0 w-full h-full object-cover"><?php endif ?>
        <div class="absolute inset-0 bg-black opacity-50 shadow-xl"></div>
        <div class="absolute bottom-0 left-0 p-16">
            <?php if (get_sub_field('headline')) : ?><h1 class="text-5xl text-white"> <?php the_sub_field('headline'); ?> </h1><?php endif ?>
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
                <div class="relative pl-16">
                    <dt class="text-base font-semibold leading-7 text-gray-900">
                        <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-blue-600">
                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                            </svg>


                        </div>
                        <?php if (get_sub_field('job_name_1')) : ?> <?php the_sub_field('job_name_1'); ?> <?php endif ?>
                    </dt>
                    <?php if (get_sub_field('job_description_1')) : ?><dd class="mt-2 text-base leading-7 text-gray-600"><?php the_sub_field('job_description_1'); ?></dd> <?php endif ?>

                </div>

                <div class="relative pl-16">
                    <dt class="text-base font-semibold leading-7 text-gray-900">
                        <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-blue-600">

                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                            </svg>

                        </div>
                        <?php if (get_sub_field('job_name_2')) : ?> <?php the_sub_field('job_name_2'); ?> <?php endif ?>
                    </dt>
                    <?php if (get_sub_field('job_description_2')) : ?><dd class="mt-2 text-base leading-7 text-gray-600"><?php the_sub_field('job_description_2'); ?></dd> <?php endif ?>
                </div>

                <div class="relative pl-16">
                    <dt class="text-base font-semibold leading-7 text-gray-900">
                        <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-blue-600">

                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
                            </svg>

                        </div>
                        <?php if (get_sub_field('job_name_3')) : ?> <?php the_sub_field('job_name_3'); ?> <?php endif ?>
                    </dt>
                    <?php if (get_sub_field('job_description_3')) : ?><dd class="mt-2 text-base leading-7 text-gray-600"><?php the_sub_field('job_description_3'); ?></dd> <?php endif ?>
                </div>

                <div class="relative pl-16">
                    <dt class="text-base font-semibold leading-7 text-gray-900">
                        <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-blue-600">
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                        </div>
                        <?php if (get_sub_field('job_name_4')) : ?> <?php the_sub_field('job_name_4'); ?> <?php endif ?>
                    </dt>
                    <?php if (get_sub_field('job_description_4')) : ?><dd class="mt-2 text-base leading-7 text-gray-600"><?php the_sub_field('job_description_4'); ?></dd> <?php endif ?>
                </div>
                <div class="relative pl-16">
                    <dt class="text-base font-semibold leading-7 text-gray-900">
                        <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-blue-600">
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                            </svg>
                        </div>
                        <?php if (get_sub_field('job_name_5')) : ?> <?php the_sub_field('job_name_5'); ?> <?php endif ?>
                    </dt>
                    <?php if (get_sub_field('job_description_5')) : ?><dd class="mt-2 text-base leading-7 text-gray-600"><?php the_sub_field('job_description_5'); ?></dd> <?php endif ?>
                </div>
                <div class="relative pl-16">
                    <dt class="text-base font-semibold leading-7 text-gray-900">
                        <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-blue-600">
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33" />
                            </svg>
                        </div>
                        <?php if (get_sub_field('job_name_6')) : ?> <?php the_sub_field('job_name_6'); ?> <?php endif ?>
                    </dt>
                    <?php if (get_sub_field('job_description_6')) : ?><dd class="mt-2 text-base leading-7 text-gray-600"><?php the_sub_field('job_description_6'); ?></dd> <?php endif ?>
                </div>
            </dl>
        </div>
    </div>
<?php endwhile; ?>

<?php while (have_rows('chiffres_cles')) : the_row(); ?>

    <div class="relative z-10 mt-32 bg-[#D5E8F3] pb-20 sm:mt-56 sm:pb-24 xl:pb-0">
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
                        <div class="flex flex-col text-blue-900 font-semibold">
                            <p class="text-4xl"><?php if (get_sub_field('number_1')) : ?><?php the_sub_field('number_1'); ?><?php endif ?><?php if (get_sub_field('unit_1')) : ?> <?php the_sub_field('unit_1'); ?><?php endif ?></p>
                            <p class="text-xl"><?php if (get_sub_field('text_1')) : ?><?php the_sub_field('text_1'); ?><?php endif ?></p>
                        </div>

                        <div class="flex flex-col text-blue-900 font-semibold">
                            <p class="text-4xl"><?php if (get_sub_field('number_2')) : ?><?php the_sub_field('number_2'); ?><?php endif ?><?php if (get_sub_field('unit_2')) : ?> <?php the_sub_field('unit_2'); ?><?php endif ?></p>
                            <p class="text-xl"><?php if (get_sub_field('text_2')) : ?><?php the_sub_field('text_2'); ?><?php endif ?></p>
                        </div>

                        <div class="flex flex-col text-blue-900 font-semibold">
                            <p class="text-4xl"><?php if (get_sub_field('number_3')) : ?><?php the_sub_field('number_3'); ?><?php endif ?><?php if (get_sub_field('unit_3')) : ?> <?php the_sub_field('unit_2'); ?><?php endif ?></p>
                            <p class="text-xl"><?php if (get_sub_field('text_3')) : ?><?php the_sub_field('text_3'); ?><?php endif ?></p>
                        </div>
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
                <div class="relative pl-16">
                    <dt class="text-base font-semibold leading-7 text-gray-900">
                        <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-blue-600">
                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                            </svg>


                        </div>
                        <?php if (get_sub_field('sector_name_1')) : ?> <?php the_sub_field('sector_name_1'); ?> <?php endif ?>
                    </dt>
                    <?php if (get_sub_field('sector_description_1')) : ?><dd class="mt-2 text-base leading-7 text-gray-600"><?php the_sub_field('sector_description_1'); ?></dd> <?php endif ?>

                </div>

                <div class="relative pl-16">
                    <dt class="text-base font-semibold leading-7 text-gray-900">
                        <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-blue-600">

                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                            </svg>

                        </div>
                        <?php if (get_sub_field('sector_name_2')) : ?> <?php the_sub_field('sector_name_2'); ?> <?php endif ?>
                    </dt>
                    <?php if (get_sub_field('sector_description_2')) : ?><dd class="mt-2 text-base leading-7 text-gray-600"><?php the_sub_field('sector_description_2'); ?></dd> <?php endif ?>
                </div>

                <div class="relative pl-16">
                    <dt class="text-base font-semibold leading-7 text-gray-900">
                        <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-blue-600">

                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
                            </svg>

                        </div>
                        <?php if (get_sub_field('sector_name_3')) : ?> <?php the_sub_field('sector_name_3'); ?> <?php endif ?>
                    </dt>
                    <?php if (get_sub_field('sector_description_3')) : ?><dd class="mt-2 text-base leading-7 text-gray-600"><?php the_sub_field('sector_description_3'); ?></dd> <?php endif ?>
                </div>

                <div class="relative pl-16">
                    <dt class="text-base font-semibold leading-7 text-gray-900">
                        <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-blue-600">
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                        </div>
                        <?php if (get_sub_field('sector_name_4')) : ?> <?php the_sub_field('sector_name_4'); ?> <?php endif ?>
                    </dt>
                    <?php if (get_sub_field('sector_description_4')) : ?><dd class="mt-2 text-base leading-7 text-gray-600"><?php the_sub_field('sector_description_4'); ?></dd> <?php endif ?>
                </div>
                <div class="relative pl-16">
                    <dt class="text-base font-semibold leading-7 text-gray-900">
                        <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-blue-600">
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                            </svg>
                        </div>
                        <?php if (get_sub_field('sector_name_5')) : ?> <?php the_sub_field('sector_name_5'); ?> <?php endif ?>
                    </dt>
                    <?php if (get_sub_field('sector_description_5')) : ?><dd class="mt-2 text-base leading-7 text-gray-600"><?php the_sub_field('sector_description_5'); ?></dd> <?php endif ?>
                </div>
                <div class="relative pl-16">
                    <dt class="text-base font-semibold leading-7 text-gray-900">
                        <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-blue-600">
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33" />
                            </svg>
                        </div>
                        <?php if (get_sub_field('sector_name_6')) : ?> <?php the_sub_field('sector_name_6'); ?> <?php endif ?>
                    </dt>
                    <?php if (get_sub_field('sector_description_6')) : ?><dd class="mt-2 text-base leading-7 text-gray-600"><?php the_sub_field('sector_description_6'); ?></dd> <?php endif ?>
                </div>
            </dl>
        </div>

    </div>
<?php endwhile; ?>


<?php while (have_rows('nos_valeurs')) : the_row(); ?>

    <div class="mt-32 bg-[#D5E8F3] pb-20 px-6 pt-10 sm:mt-56 sm:pb-24 shadow-md">
        <div class="mx-auto max-w-2xl text-center lg:max-w-4xl">
            <h2 class="text-base font-semibold leading-7 text-blue-600 uppercase"><?php if (get_sub_field('title')) : ?> <?php the_sub_field('title'); ?><?php endif ?></h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-800 sm:text-4xl"><?php if (get_sub_field('subtitle')) : ?> <?php the_sub_field('subtitle'); ?><?php endif ?></p>
            <p class="mt-6 text-lg leading-8 text-gray-600"><?php if (get_sub_field('content')) : ?> <?php the_sub_field('content'); ?><?php endif ?></p>
        </div>
        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-6xl">
            <dl class="grid max-w-2xl grid-cols-1 gap-x-24 gap-y-10 lg:max-w-none lg:grid-cols-3 lg:gap-y-16">

                <div class="relative p-8 bg-white rounded-lg shadow-md">
                    <dt class="text-base flex flex-col items-center text-center font-semibold leading-7 text-gray-900 gap-2">
                        <div class=" flex h-10 w-10 items-center justify-center rounded-lg bg-blue-600">
                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                            </svg>


                        </div>
                        <?php if (get_sub_field('value_name_1')) : ?> <?php the_sub_field('value_name_1'); ?> <?php endif ?>
                    </dt>
                    <?php if (get_sub_field('value_description_1')) : ?><dd class="mt-2 text-base leading-7 text-gray-600"><?php the_sub_field('value_description_1'); ?></dd> <?php endif ?>

                </div>

                <div class="relative p-8 bg-white rounded-lg shadow-md">
                    <dt class="text-base flex flex-col items-center text-center font-semibold leading-7 text-gray-900 gap-2">
                        <div class=" flex h-10 w-10 items-center justify-center rounded-lg bg-blue-600">

                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                            </svg>

                        </div>
                        <?php if (get_sub_field('value_name_2')) : ?> <?php the_sub_field('value_name_2'); ?> <?php endif ?>
                    </dt>
                    <?php if (get_sub_field('value_description_2')) : ?><dd class="mt-2 text-base leading-7 text-gray-600"><?php the_sub_field('value_description_2'); ?></dd> <?php endif ?>
                </div>

                <div class="relative p-8 bg-white rounded-lg shadow-md">
                    <dt class="text-base flex flex-col items-center text-center font-semibold leading-7 text-gray-900 gap-2">
                        <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-blue-600">

                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
                            </svg>

                        </div>
                        <?php if (get_sub_field('value_name_3')) : ?> <?php the_sub_field('value_name_3'); ?> <?php endif ?>
                    </dt>
                    <?php if (get_sub_field('value_description_3')) : ?>
                        <dd class="mt-2 text-base leading-7 text-gray-600"><?php the_sub_field('value_description_3'); ?></dd> <?php endif ?>
                </div>


            </dl>
        </div>

    </div>
<?php endwhile; ?>



<?php if (have_rows('actualites')) : ?>
    <?php while (have_rows('actualites')) : the_row(); ?>

        <div class="mt-16 pb-20 px-6 pt-10 sm:pb-16">
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


                <ul role="list" class="grid grid-cols-1 gap-x-4 gap-y-8 lg:grid-cols-3 sm:gap-x-6 xl:gap-x-8">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <li class="flex flex-col items-center">
                            <div class="w-72 h-80 rounded-lg hover:ring-2 hover:opacity-75 hover:ring-blue-900 hover:ring-offset-2 hover:ring-offset-gray-100">
                                <div class="overflow-hidden w-72 h-48 rounded-lg bg-gray-100">
                                    <?php the_post_thumbnail('medium', ['class' => 'pointer-events-none object-cover h-48 w-96']) ?>
                                </div>
                                <div>
                                    <p class="pointer-events-none block text-sm font-medium text-gray-500"><?php echo get_the_date(); ?></p>
                                    <p class="pointer-events-none mt-2 block truncate text-sm font-medium text-gray-900"><?php the_title(); ?></p>

                                    <p class="post-date"><?php echo wp_trim_words(get_the_excerpt(), 14, '...'); ?></p>
                                </div>
                            </div>

                        </li>
                    <?php endwhile; ?>
                </ul>

                <div class="flex text-blue-900 items-center"> <a class="text-base font-semibold" href="<?= get_post_type_archive_link('post') ?>">Voir toutes les actualites</a>
                    <svg class="ml-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>

                </div>
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





<?php get_footer(); ?>