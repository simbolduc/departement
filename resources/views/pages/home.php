<section>
    <div class="w-full text-center">
        <h2 class="text-3xl font-bold">Qu'est-ce que la technique ?</h2>
        <span class="text-sm">D'un jeune passionné à un professionnel</span>
    </div>

    <div class="p-8 mt-8 w-full">
        <div class="flex flex-wrap justify-between w-full">
            <div class="w-1/4 flex-none text-center">
                <div class="inline-block w-64 h-64 rounded-full bg-cover bg-center hover:transform hover:scale-110 transition duration-300 ease-in-out" style="background-image:url('/images/miscs/cegeptr-locals.jpg');"></div>
                <span class="inline-block mt-4 text-xl">Des équipements modernes</span>
            </div>
            <div class="w-1/4 flex-none text-center">
                <div class="inline-block w-64 h-64 rounded-full bg-cover bg-center hover:transform hover:scale-110 transition duration-300 ease-in-out" style="background-image:url('/images/miscs/cegeptr-meetings.jpg');"></div>
                <span class="inline-block mt-4 text-xl">Des camarades engagés</span>
            </div>
            <div class="w-1/4 flex-none text-center">
                <div class="inline-block w-64 h-64 rounded-full bg-cover bg-center hover:transform hover:scale-110 transition duration-300 ease-in-out" style="background-image:url('/images/miscs/cegeptr-networking.jpg');"></div>
                <span class="inline-block mt-4 text-xl">L'apprentissage professionnel</span>
            </div>
            <div class="w-1/4 flex-none text-center">
                <div class="inline-block w-64 h-64 rounded-full bg-cover bg-center hover:transform hover:scale-110 transition duration-300 ease-in-out" style="background-image:url('/images/miscs/cegeptr-vr.jpg');"></div>
                <span class="inline-block mt-4 text-xl">Des projets personnalisés</span>
            </div>
        </div>
    </div>
</section>

<section class="mt-8">
    <div class="w-full text-center">
        <h2 class="text-3xl font-bold">Actualité</h2>
        <span class="text-sm">Nouveautés et annonces</span>
    </div>

    <div class="p-8 mt-8 w-full">
        <div class="owl-carousel flex">
            <!--     Slide 1       -->
            <div class="flex flex-wrap">
                <div class="p-8 w-1/3">
                    <div class="p-8 bg-white dark:bg-gray-800 rounded-lg">
                        <div class="bg-cover bg-center w-full h-64" style="background-image:url('/images/miscs/online-classes.jpg');"></div>
                        <h3 class="font-bold font-2xl p-4">Le télétravail</h3>
                        <p class="p-4 pt-0">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium autem consequuntur excepturi expedita nam repellat. At aut distinctio, eligendi illo ipsam natus necessitatibus nulla odio placeat, quas, recusandae repellendus voluptatem?
                        </p>
                        <a href="<?= $this->router->generate('page.news', array('id' => 1)) ?>" class="bg-indigo-400 inline-block py-1 px-3 rounded-md mt-2">Voir la nouvelle</a>
                    </div>
                </div>
                <div class="p-8 w-1/3">
                    <div class="p-8 bg-white dark:bg-gray-800 rounded-lg">
                        <div class="bg-cover bg-center w-full h-64" style="background-image:url('/images/miscs/school-class.jpg');"></div>
                        <h3 class="font-bold font-2xl p-4">De nouveaux locaux</h3>
                        <p class="p-4 pt-0">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium autem consequuntur excepturi expedita nam repellat. At aut distinctio, eligendi illo ipsam natus necessitatibus nulla odio placeat, quas, recusandae repellendus voluptatem?
                        </p>
                        <a href="#" class="bg-indigo-400 inline-block py-1 px-3 rounded-md mt-2">Voir la nouvelle</a>
                    </div>
                </div>
                <div class="p-8 w-1/3">
                    <div class="p-8 bg-white dark:bg-gray-800 rounded-lg">
                        <div class="bg-cover bg-center w-full h-64" style="background-image:url('/images/miscs/student.jpg');"></div>
                        <h3 class="font-bold font-2xl p-4">Des projets de VR</h3>
                        <p class="p-4 pt-0">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium autem consequuntur excepturi expedita nam repellat. At aut distinctio, eligendi illo ipsam natus necessitatibus nulla odio placeat, quas, recusandae repellendus voluptatem?
                        </p>
                        <a href="#" class="bg-indigo-400 inline-block py-1 px-3 rounded-md mt-2">Voir la nouvelle</a>
                    </div>
                </div>
            </div>
            <!--     Slide 2       -->
            <div class="flex flex-wrap">
                <div class="p-8 w-1/3">
                    <div class="p-8 bg-white dark:bg-gray-800 rounded-lg">
                        <div class="bg-cover bg-center w-full h-64" style="background-image:url('/images/miscs/student2.jpg');"></div>
                        <h3 class="font-bold font-2xl p-4">Comment conceptualiser</h3>
                        <p class="p-4 pt-0">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium autem consequuntur excepturi expedita nam repellat. At aut distinctio, eligendi illo ipsam natus necessitatibus nulla odio placeat, quas, recusandae repellendus voluptatem?
                        </p>
                        <a href="#" class="bg-indigo-400 inline-block py-1 px-3 rounded-md mt-2">Voir la nouvelle</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php ob_start() ?>
<script src="/js/owl.carousel.min.js"></script>

<script>
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel(
            {
                items: 1,
                loop: true,
                margin: 0,
                nav: true,
                navigationText: ["<img src='myprevimage.png'>","<img src='mynextimage.png'>"],
                dots: false,
                autoWidth: false,
                responsive: false
            }
        );
    });
</script>
<?php
$scripts = ob_get_clean();
?>