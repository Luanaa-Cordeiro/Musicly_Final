<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
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
                <span>Artistas</span>
            </li>
            <li class="inline">
                <span>Mostrar</span>
            </li>
        </ul>

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
                            <a href="{{route('home')}}" class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                                href="#homepage">
                                <span class="select-none">Início</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('artistas.index')}}" class="active flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
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
                
                 <form action="{{ route('logout') }}" method="POST" id="logout-form">
                 @csrf
                            <button class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50" type="submit" class="btn">Sair</button>
                            </form>
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
            
            

    <div class="deletar_main">
    <h1 class="text-4xl font-bold text-gray-900">Artista selecionado - {{$artistas->nome}}</h1>
    <div class="botoes_deletar">
    <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
    Deletar
</button>
    <a href="{{ route('artistas.index')}}">Voltar</a>
    </div>

</div>    

           
            <!-- Seu conteúdo adicional aqui -->
        </div>
    </main>
    <!-- Main content end -->

    <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 left-0 right-0 bottom-0 z-50 justify-center items-center flex bg-black bg-opacity-50">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Botão de fechar -->
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            
            <div class="p-4 md:p-5 text-center">
                <!-- Ícone do modal -->
                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Tem certeza que deseja apagar esse artista?</h3>
                <h4 class="mb-5  font-normal text-gray-500 dark:text-gray-400">Você apagará tudo relacionado a ele</h4>
                <form action="{{ route('artistas.destroy', ['artista' => $artistas->id]) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="delete">
                <!-- Botões dentro do modal -->
                <button data-modal-hide="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                    Apagar
                </button>
              
                <button data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>

    
    <script>

        //Navbar
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


        //Modal
        document.addEventListener('DOMContentLoaded', () => {
        const modal = document.getElementById('popup-modal');
        const openModalButton = document.querySelector('[data-modal-target="popup-modal"]');
        const closeModalButtons = document.querySelectorAll('[data-modal-hide="popup-modal"]');

        // Ação para abrir o modal
        openModalButton.addEventListener('click', () => {
            modal.classList.remove('hidden');  // Exibe o modal
        });

        // Ação para fechar o modal (clicando no botão de fechar ou no botão de cancelamento)
        closeModalButtons.forEach(button => {
            button.addEventListener('click', () => {
                modal.classList.add('hidden');  // Esconde o modal
            });
        });

        // Fechar o modal se clicar fora dele
        window.addEventListener('click', (event) => {
            if (event.target === modal) {
                modal.classList.add('hidden');  // Esconde o modal se clicar fora dele
            }
        });
    });


   //Fechar
    // Selecionando o botão de fechar
  const closeButton = document.getElementById('close-alert');
  const alertBox = document.getElementById('alert');

  // Adicionando um evento de clique para fechar o alerta
  closeButton.addEventListener('click', () => {
    alertBox.style.display = 'none'; // Esconde o alerta
  });
    </script>
</body>

</html>
