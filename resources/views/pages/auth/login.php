<section class="w-1/3 m-auto">
    <h1 class="text-2xl font-bold">Connexion</h1>
    <?php
    if(\app\Session::has('error')) {
        foreach(\app\Session::get('error') as $error) {
    ?>
            <div class="w-full bg-red-400 p-4 rounded-lg mt-2">
                <span class="font-bold">Erreur! </span>
                <?= $error ?>
            </div>
    <?php
        }
    }
    ?>
    <form method="post" action="#" class="bg-gray-200 dark:bg-gray-800 p-8 mt-4 rounded-lg">
        <strong>Adresse courriel</strong>
        <label for="email" class="text-sm mb-2 inline-block w-full">
            <input type="email" name="email" placeholder="Adresse courriel" class="w-full bg-transparent focus:outline-none border-b border-solid border-black dark:border-white p-1" autocomplete="off">
        </label>
        <strong class="mt-2 inline-block">Mot de passe</strong>
        <label for="password" class="text-sm mb-2 inline-block w-full">
            <input type="password" name="password" placeholder="Mot de passe" class="w-full bg-transparent focus:outline-none border-b border-solid border-black dark:border-white p-1" autocomplete="off">
        </label>
        <a href="#" class="w-full inline-block text-xs">Mot de passe oublié ?</a>
        <div class="w-full flex flex-wrap flex-row-reverse">
            <button class="bg-indigo-400 inline-block py-1 px-3 rounded-md mt-2">Se connecter</button>
        </div>
    </form>
</section>