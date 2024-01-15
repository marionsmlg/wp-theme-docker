<?php get_header(); ?>

<main class="mt-16">
    <div class="grid min-h-screen place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8">
        <div class="text-center">
            <p class="text-lg font-semibold text-gray-900">404</p>
            <h1 class="mt-4 text-3xl font-bold tracking-tight text-eseisblue-500 sm:text-5xl">Page introuvable</h1>
            <p class="mt-6 text-base leading-7 text-gray-600">Désolé, nous n'avons pas trouvé la page que vous recherchez.</p>
            <div class="mt-10 flex items-center justify-center">
                <a href="<?= home_url(); ?>" class="rounded-md bg-eseisblue-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-eseisblue-400">Retour à l'accueil</a>

            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>