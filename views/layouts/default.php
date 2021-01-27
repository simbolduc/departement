<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Technique Informatique</title>

    <link rel="stylesheet" href="/public/css/app.css">

    <link rel="stylesheet" href="/../../node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
</head>
<body class="dark">
    <header class="relative w-full bg-gray-100 px-32 text-white dark:bg-gray-900">
        <nav class="flex font-bold py-8 w-full">
            <div class="w-3/4 flex-none flex flex-wrap">
                <a href="<?= $this->router->generate('page.home') ?>" class="inline-block mr-4">
                    <img class="dark:hidden inline-block" src="/public/images/logos/dark_dep.png" alt="Logo département">
                    <img class="dark:inline-block hidden" src="/public/images/logos/dep.png" alt="Logo département">
                </a>
                <a href="<?= $this->router->generate('page.home') ?>" class="inline-block mr-4 pt-1">Accueil</a>
                <a href="#" class="inline-block mr-4 pt-1">Nouveautés</a>
                <a href="#" class="inline-block pt-1">Événements</a>
            </div>

            <div class="w-1/4 flex-none flex flex-wrap flex-row-reverse">
                <a href="#" class="inline-block ml-4">
                    <img class="theme-toggle dark:hidden inline-block" src="/public/images/svgs/moon.svg" alt="Lune">
                    <img class="theme-toggle dark:inline-block hidden" src="/public/images/svgs/sunny.svg" alt="Soleil">
                </a>
                <a href="#" class="inline-block bg-indigo-400 py-1 rounded-lg px-3 ml-4 pt-1">Inscription</a>
                <a href="#" class="inline-block pt-1">Connexion</a>
            </div>
        </nav>
        <section class="mt-12 flex flex-wrap relative">
            <div class="z-10">
                <div class="w-5/12">
                    <h3 class="text-4xl font-bold">Technique en Informatique</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci aspernatur consequatur dolore dolorem exercitationem facere in iusto laborum laudantium, molestiae nesciunt obcaecati qui quod ullam veniam veritatis voluptas voluptates?
                    </p>
                </div>
                <div class="w-7/12 pl-8 pt-8">
                    <div class="relative ml-32">
                        <img class="dark:hidden block absolute top-0 right-0 -mt-24" src="/public/images/svgs/sun.svg" alt="Soleil">
                        <img class="dark:hidden block absolute top-0 right-0 -mt-12 -mr-6" src="/public/images/svgs/cloud.svg" alt="Nuage">
                        <img class="dark:block hidden absolute top-0 right-0 -mt-32 -mr-24" src="/public/images/svgs/star.svg" alt="Nuage">
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-white dark:bg-gray-800 rounded-lg absolute bottom-0 right-0 mr-96 mb-48 w-128 p-8 text-black dark:text-white z-10">
            <h3 class="text-2xl font-bold">Programme</h3>
            <p>
                Tu es intéressé par le programme <strong>Technique de l'Informatique</strong> ? Visites la fiche complète du programme directement sur le site du Cégep de Trois-Rivières afin de connaître toutes les avantages et possibilités de cette technique.
            </p>
            <a href="#" class="bg-indigo-400 inline-block py-1 px-3 rounded-md mt-2">Visiter la fiche du cours</a>
        </section>
    </header>

    <section class="w-full dark:text-white px-32 pb-32">
        <?= $page_content ?? ''?>
    </section>

    <footer class="w-full bg-white dark:bg-gray-800 dark:text-white px-32 py-4 text-sm font-bold">
        Copyright &copy; 2021
        <span class="float-right">
            Site web crée par Simon Bolduc
        </span>
    </footer>

    <script src="/../../node_modules/jquery/dist/jquery.js"></script>
    <script src="/public/js/app.js"></script>
    <?= $scripts ?? '' ?>
</body>
</html>