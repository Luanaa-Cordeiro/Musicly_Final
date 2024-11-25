<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <title>Home</title>
</head>

<body class="bg-gray-100">

    <!-- Navbar start -->
    <nav id="navbar" class="fixed top-0 z-40 w-full flex flex-row justify-end bg-gray-700 px-4 sm:justify-between">
        <ul class="breadcrumb hidden flex-row items-center py-4 text-lg text-white sm:flex">
            <li class="inline">
                <a href="#">Homely</a>
            </li>
            <li class="inline">
                <span>Início</span>
            </li>
        </ul>

<!-- Modal Sair -->
<div id="sair-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-50 flex justify-center items-center w-full h-full bg-gray-900 bg-opacity-50">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Botão de fechar -->
            <button id="closeModalBtn" type="button" class="absolute top-3 right-3 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            
            <!-- Corpo do Modal -->
            <div class="p-4 md:p-5 text-center">
                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Tem certeza que deseja sair?</h3>
                <form action="{{ route('logout') }}" method="POST" id="logout-form">
                @csrf
                <button type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                    Sair
                </button>
                
        
                            
                <button id="closeModalBtn2" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    Cancelar
                </button>
                </form>
            </div>
        </div>
    </div>
</div>

        <div class="nav_button">
            <div class="user">
        <img src="{{ asset('assets/imagens/usuario-de-perfil.png')}}" alt="">
        <p>{{ auth()->user()->name }}</p>
        </div>
        
        <button id="btnSidebarToggler" type="button" class="py-4 text-2xl text-white hover:text-gray-200">
            <svg id="navClosed" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="h-8 w-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <svg id="navOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="hidden h-8 w-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        </div>
    </nav>
    <!-- Navbar end -->

    <!-- Sidebar start-->
    <div id="containerSidebar" class="z-40">
        <div class="navbar-menu relative z-40">
            <nav id="sidebar"
                class="fixed left-0 bottom-0 flex w-3/4 -translate-x-full flex-col overflow-y-auto bg-gray-700 pt-6 pb-8 sm:max-w-xs lg:w-80 transition-all duration-300">
                <!-- Sidebar content here -->
                <div class="px-4 pb-6">
                    <h3 style="color:white;" class="mb-2 text-xs font-medium uppercase">Páginas</h3>
                    <ul class="mb-8 text-sm font-medium">
                        <li>
                            <a href="{{route('home')}}" class="active flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                                href="#homepage">
                                <span class="select-none">Início</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('artistas.index')}}" class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                                href="#link1">
                                <span class="select-none">Artistas</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('generos.index')}}" class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                                href="#link1">
                                <span class="select-none">Gêneros</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('albuns.index')}}" class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                                href="#link1">
                                <span class="select-none">Álbuns</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('musicas.index')}}" class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                                href="#link1">
                                <span class="select-none">Músicas</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('populars.index')}}" class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                                href="#link1">
                                <span class="select-none">Populares</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar content ends -->
                 <div class="sair_itens">
                 <div class="sair">
                 <img src="{{ asset('assets/imagens/sair.png')}}" alt="">
                    <ul class=" text-sm font-medium">
                 <li>
                            <button id="openModalBtn" class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50" type="button"> Sair</button>
                        </li>
                        </ul>
                 </div>
                 </div>
            </nav>
        </div>
    </div>
    <!-- Sidebar end -->

    <!-- Main content start -->
    <main id="mainContent" class="pt-24 px-4 sm:px-8 transition-all duration-300">
        <!-- Aqui começa o conteúdo principal da página -->
        <div class="max-w-7xl mx-auto">
            <h1 class="text-4xl font-bold text-gray-900">Bem-Vindo(a), {{ auth()->user()->name }}!</h1>
           
            <div class="line"></div>

            <div class="art_gen">
<div class="cartoes_home  bg-white p-6 border border-gray-200 rounded-lg shadow">
<div class="cartoes_titulo">
<h3>Artistas</h3>
<img src="{{ asset('assets/imagens/microfone-com-fio.png')}}" alt="">
</div>
<div class="cartoes">
<p>Quantidade: {{ $total_artistas }}</p>
<a href="{{route('artistas.index')}}"><button>Conferir</button></a>
</div>
</div>


<div class="line"></div>


<div class="cartoes_home p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
<div class="cartoes_titulo">
<h3>Gêneros</h3>
<img src="{{ asset('assets/imagens/cd.png')}}" alt="">
</div>
<div class="cartoes">
<p>Quantidade: {{ $total_generos }}</p>
<a href="{{route('generos.index')}}"><button>Conferir</button></a>
</div>
</div>
</div>

<div class="line"></div>

<div class="alb_mus">
<div class="cartoes_home p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
<div class="cartoes_titulo">
<h3>Álbuns</h3>
<img src="{{ asset('assets/imagens/album-de-musica.png')}}" alt="">
</div>
<div class="cartoes">
<p>Quantidade: {{ $total_albuns }}</p>
<a href="{{route('albuns.index')}}"><button>Conferir</button></a>
</div>
</div>

<div class="line"></div>

<div class="cartoes_home p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
<div class="cartoes_titulo">
<h3>Músicas</h3>
<img src="{{ asset('assets/imagens/reprodutor-de-musica.png')}}" alt="">
</div>
<div class="cartoes">
<p>Quantidade: {{ $total_musicas }}</p>
<a href="{{route('musicas.index')}}"><button>Conferir</button></a>
</div>
</div>
</div>

<div class="line"></div>

<div class="pop">
<div class="cartoes_pop p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
<div class="cartoes_titulo">
<h3>Populares</h3>
<img src="{{ asset('assets/imagens/reprodutor-de-musica.png')}}" alt="">
</div>
<div class="cartoes">
<p>Quantidade: {{ $total_popular }}</p>
<a href="{{route('populars.index')}}"><button>Conferir</button></a>
</div>
</div>
</div>

</div>
</div>
            <!-- Seu conteúdo adicional aqui -->
        </div>
    </main>
    <!-- Main content end -->

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const navbar = document.getElementById("navbar");
            const sidebar = document.getElementById("sidebar");
            const mainContent = document.getElementById("mainContent");
            const btnSidebarToggler = document.getElementById("btnSidebarToggler");
            const navClosed = document.getElementById("navClosed");
            const navOpen = document.getElementById("navOpen");

            // Inicializa a sidebar como visível
            sidebar.classList.add("show");
            navClosed.classList.add("hidden"); // Exibe o ícone de fechar (navClosed)
            navOpen.classList.remove("hidden"); // Esconde o ícone de abrir (navOpen)
            mainContent.classList.add("ml-80"); // Adiciona margem à esquerda do conteúdo quando a sidebar está aberta

            btnSidebarToggler.addEventListener("click", (e) => {
                e.preventDefault();

                // Alterna a visibilidade da sidebar
                sidebar.classList.toggle("show");
                mainContent.classList.toggle("ml-80"); // Adiciona ou remove a margem do conteúdo conforme a sidebar

                // Alterna os ícones de abrir/fechar
                navClosed.classList.toggle("hidden");
                navOpen.classList.toggle("hidden");
            });

            // Ajuste da posição da sidebar
            sidebar.style.top = parseInt(navbar.clientHeight) - 1 + "px";
        });

         // Obtendo os elementos do botão e do modal
    const openModalBtn = document.getElementById('openModalBtn');
    const closeModalBtns = document.querySelectorAll('#closeModalBtn, #closeModalBtn2');
    const modal = document.getElementById('sair-modal');

    // Modal Sair
    openModalBtn.addEventListener('click', () => {
        modal.classList.remove('hidden');
    });

    // Função para fechar o modal
    closeModalBtns.forEach(button => {
        button.addEventListener('click', () => {
            modal.classList.add('hidden');
        });
    });

    </script>
</body>

</html>
