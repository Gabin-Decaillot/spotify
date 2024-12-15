<!DOCTYPE html>
<html class="scroll-smooth">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>Projet SPOTIFY</title>
        <link rel="icon" type="image/x-icon" href="imgs/EchoSphereLogo.ico">
        <link rel="stylesheet" href="css/style.css">
        <link href="css/output.css" rel="stylesheet">
        <link rel="stylesheet" href="css/menu.css">
    </head>
    <body class="h-screen bg-slate-700"><div class="fixed ml-10 mt-4 z-40" id="menuToggle">
    <input id="checkbox" type="checkbox">
    <label class="toggle" for="checkbox">
        <div class="bar bar--top"></div>
        <div class= "bar bar--middle"></div>
        <div class="bar bar--bottom"></div>
    </label>
</div>
<nav id="navbar" class="fixed w-full font-semibold items-center text-2xl text-white flex bg-gray-800 px-10 h-16 z-1">
    <a class="basis-1/2 text-center w-full mx-2 text-2xl my-auto" href="index.php">Accueil</a>
    <div class="basis-1/3 text-center w-full mx-2 text-3xl my-auto">Accès aux différentes fiches</div>
    <div class="basis-1/2 text-center flex h-full leading-30 w-full z-40 align-items">
        <a class="h-full flex justify-center items-center basis-1/4 hover:bg-slate-500 hover:border-red-700 hover:border-b-4 hover:basis-1/3 transition-all" href="fiche1.php">Fiche 1</a>
        <a class="h-full flex justify-center items-center basis-1/4 hover:bg-slate-500 hover:border-green-700 hover:border-b-4 hover:basis-1/3 transition-all" href="fiche2.php">Fiche 2</a>
        <a class="h-full flex justify-center items-center align-middle basis-1/4 hover:bg-slate-500 hover:border-yellow-300 hover:border-b-4 hover:basis-1/3 transition-all" href="fiche3.php">Fiche 3</a>
        <a class="h-full flex justify-center items-center align-middle basis-1/4 hover:bg-slate-500 hover:border-blue-400 hover:border-b-4 hover:basis-1/3 transition-all" href="fiche4.php">Fiche 4</a>
    </div>
</nav>

        
        <div class="flex w-full h-screen pb-28 pt-24">
            <div class="basis-1/2">
                <h1 class="font-semibold text-9xl mx-10 pt-40 text-white transition-all" id="titre">EchoSphere</h1>
                <p class="text-white italic mx-12 mt-5 text-2xl transition-all" id="soustitre">Naviguez dans le monde de la chanson.</p>
            </div>
            <div class="px-28 py-16 basis-1/2 w-full">
                <h3 class="text-center text-white text-4xl mb-6">Accès aux différentes fiches</h3>
                <div class="flex flex-col h-full">
                    <div class="bg-slate-500 basis-1/4 border-4 rounded-lg my-4 hover:basis-1/3 hover:border-red-500 transition-all">
                        <p class="h-full flex justify-center items-center text-white font-semibold text-4xl">FICHE 1</p>
                    </div>
                    <div class="bg-slate-500 basis-1/4 border-4 rounded-lg my-4 hover:basis-1/3 hover:border-green-500 transition-all">
                        <p class="h-full flex justify-center items-center text-white font-semibold text-4xl">FICHE 2</p>
                    </div>
                    <div class="bg-slate-500 basis-1/4 border-4 rounded-lg my-4 hover:basis-1/3 hover:border-yellow-200 transition-all">
                        <p class="h-full flex justify-center items-center text-white font-semibold text-4xl">FICHE 3</p>
                    </div>
                    <div class="bg-slate-500 basis-1/4 border-4 rounded-lg my-4 hover:basis-1/3 hover:border-blue-300 transition-all">
                        <p class="h-full flex justify-center items-center text-white font-semibold text-4xl">FICHE 4</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Scripts -->
        <script src="js/titleHandler.js"></script>
        <script src="js/menuHandler.js"></script>
    </body>
</html>