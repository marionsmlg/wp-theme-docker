 <?php

    /**
     *   Template Name: A propos
     */ ?>

 <?php get_header(); ?>

 <main class="mt-16 min-h-screen">
     <?php get_template_part('parts/title-page') ?>
     <!-- Hero section -->
     <div class="relative isolate -z-10 overflow-hidden">
         <div class="absolute inset-y-0 bg-white shadow-xl sm:-mr-80 lg:-mr-96" aria-hidden="true"></div>
         <div class="mx-auto max-w-7xl px-6 py-14 sm:py-32 lg:px-8">
             <div class="mx-auto max-w-2xl lg:mx-0 lg:grid lg:max-w-none lg:gap-x-16 lg:gap-y-6 lg:grid-cols-1 xl:grid-rows-1 xl:gap-x-8">

                 <?php if (get_field('title')) : ?>
                     <div><?php get_template_part('parts/title-decoration'); ?>
                         <h1 class="text-2xl font-semibold leading-7 text-secondarycolor uppercase"><?php echo esc_html(get_field('title')); ?></h1>
                     </div>

                 <?php endif; ?>


                 <div class="mt-8 max-w-xl xl:col-end-1 xl:row-start-1 space-y-6">
                     <?php while (have_rows('description')) : the_row(); ?>
                         <?php if (get_sub_field('paragraph')) : ?>
                             <p class="text-lg leading-8 text-gray-600"><?php the_sub_field('paragraph'); ?></p>
                         <?php endif; ?>
                     <?php endwhile; ?>
                 </div>

                 <?php if (get_field('image')) : ?>

                     <img src="<?php echo esc_html(get_field('image')); ?>" alt="company" class="mt-10 aspect-[6/5] w-full max-w-lg rounded-md object-cover sm:mt-16 lg:mt-0 lg:max-w-none xl:row-span-2 xl:row-end-2 xl:mt-36">
                 <?php endif; ?>
             </div>
         </div>
         <div class="absolute inset-x-0 bottom-0 -z-10 h-24 bg-gradient-to-t from-white sm:h-32"></div>
     </div>

     <!-- Content section -->
     <?php while (have_rows('our_mission')) : the_row(); ?>
         <div class="mx-auto max-w-7xl px-6 sm:mt-0 lg:px-8">
             <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none">

                 <?php if (get_sub_field('title')) : ?>
                     <?php get_template_part('parts/title-decoration'); ?>
                     <h2 class="text-2xl font-semibold leading-7 text-secondarycolor uppercase"><?php the_sub_field('title'); ?></h2>
                 <?php endif ?>
                 <div class="mt-6 flex flex-col gap-x-8 gap-y-20 lg:flex-row">
                     <div class="lg:w-full lg:flex-auto">
                         <?php if (get_sub_field('subtitle')) : ?>
                             <p class="text-lg leading-8 text-gray-600"><?php the_sub_field('subtitle'); ?></p>
                         <?php endif ?>

                         <!-- Feature section -->
                         <div class="mx-auto mt-14 max-w-7xl sm:mt-16 md:mt-20">
                             <dl class="mx-auto grid max-w-2xl grid-cols-1 gap-x-6 gap-y-10 text-base/7 text-gray-500 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:gap-x-8 lg:gap-y-16">
                                 <?php 
                                 $index = 1;
                                 while (have_rows('arguments')) : the_row(); ?>
                                     <div class="relative pl-9">
                                         <dt class="inline font-semibold text-gray-700">
                                     
                                                 <p class="absolute left-1 top-1 text-4xl  text-maincolor"><?php echo $index; ?>.</p>
                                      

                                             <?php if (get_sub_field('title')) : ?>
                                                 <?php the_sub_field('title'); ?>
                                             <?php endif ?>

                                         </dt>
                                         <?php if (get_sub_field('description')) : ?>
                                             <dd class="inline"> <?php the_sub_field('description'); ?></dd>
                                         <?php endif ?>
                                     </div>
                                 <?php 
                                    $index++;
                                    endwhile; ?>
                   
                             </dl>
                         </div>



                     </div>
                 </div>


                 <!-- Key numbers -->
                 <dl class="mt-16 grid grid-cols-1 gap-x-8 gap-y-12 sm:mt-20 sm:grid-cols-2 sm:gap-y-16 lg:mt-28 lg:grid-cols-4">
                     <?php
                        $count = 1;
                        while (have_rows('key_numbers', 'option')) : the_row();
                        ?>
                         <?php if (get_sub_field('text')) : ?>
                             <div class="flex flex-col-reverse gap-y-3 border-l border-gray-700 pl-6">
                                 <dt class="text-lg leading-7 text-gray-700"><?php the_sub_field('text'); ?></dt>
                                 <?php if (get_sub_field('number')) : ?>
                                     <dd class="text-4xl font-semibold tracking-tight text-gray-700"><?php if (get_sub_field('prefix')) : ?> <?php the_sub_field('prefix'); ?><?php endif ?>
                                             <span id="counter<?php echo $count; ?>"><?php the_sub_field('number'); ?></span>
                                             <?php if (get_sub_field('unit')) : ?> <?php the_sub_field('unit'); ?><?php endif ?>
                                     </dd>
                                 <?php endif ?>
                             </div>
                         <?php endif ?>
                     <?php
                            $count++;
                        endwhile;
                        ?>

                 </dl>

             </div>
         </div>
     <?php endwhile; ?>



     <!-- Values section -->
     <?php while (have_rows('our_values')) : the_row(); ?>
         <div class="pb-20 px-6 pt-20  sm:pb-24">
             <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-7xl">
                 <div class="mx-auto max-w-2xl lg:mx-0 mb-20">
                     <?php if (get_sub_field('title')) : ?>
                         <?php get_template_part('parts/title-decoration'); ?>
                         <h2 class="text-2xl font-semibold leading-7 text-secondarycolor uppercase"><?php the_sub_field('title'); ?></h2>
                     <?php endif ?>
                     <?php if (get_sub_field('subtitle')) : ?>


                         <p class="mt-6 text-lg leading-8 text-gray-600"><?php the_sub_field('subtitle'); ?></p>
                     <?php endif ?>
                 </div>
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
     <!-- Logo cloud -->


     <div class="relative isolate -z-10 my-16">
         <div class="mx-auto max-w-7xl px-6 lg:px-8 flex items-center flex-col">
             <?php get_template_part('parts/title-decoration'); ?>
             <h2 class="text-center text-2xl font-semibold leading-7 text-secondarycolor uppercase mb-10">Ils nous font confiance</h2>
             <?php get_template_part('parts/they-trust-us'); ?>
         </div>
     </div>

     <!-- Team section -->
     <?php while (have_rows('our_team')) : the_row(); ?>
         <div class="mx-auto mt-20 max-w-7xl px-6 sm:mt-36 lg:px-8 mb-24">
             <div class="mx-auto max-w-2xl lg:mx-0">
                 <?php if (get_sub_field('title')) : ?>
                     <h2 class="text-3xl font-semibold tracking-tight text-gray-700 sm:text-4xl"><?php the_sub_field('title'); ?></h2>
                 <?php endif ?>
                 <?php if (get_sub_field('subtitle')) : ?>
                     <p class="mt-6 text-lg leading-8 text-gray-600"><?php the_sub_field('subtitle'); ?></p>
                 <?php endif ?>
             </div>
             <ul role="list" class="mx-auto mt-20 grid max-w-2xl grid-cols-2 gap-x-8 gap-y-16 text-center sm:grid-cols-3 md:grid-cols-4 lg:mx-0 lg:max-w-none lg:grid-cols-5 xl:grid-cols-6">
                 <?php while (have_rows('members')) : the_row(); ?>
                     <li>
                         <?php if (get_sub_field('portrait')) : ?>
                             <img class="mx-auto h-24 w-24 rounded-full" src="<?php the_sub_field('portrait'); ?>" alt="">
                         <?php endif ?>
                         <?php if (get_sub_field('name')) : ?>
                             <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900"><?php the_sub_field('name'); ?></h3>
                         <?php endif ?>
                         <?php if (get_sub_field('profession')) : ?>
                             <p class="text-sm leading-6 text-gray-600"><?php the_sub_field('profession'); ?></p>
                         <?php endif ?>
                     </li>
                 <?php endwhile; ?>

             </ul>
         </div>
     <?php endwhile; ?>
 </main>












 <?php get_footer(); ?>