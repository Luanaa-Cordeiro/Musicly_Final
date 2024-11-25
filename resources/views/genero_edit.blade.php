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
                <span>Gêneros</span>
            </li>
            <li class="inline">
                <span>Editar</span>
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
                            <a href="{{route('artistas.index')}}" class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                                href="#link1">
                                <span class="select-none">Artistas</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('generos.index')}}" class="active flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
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
            
            
            @if(session()->has('message'))
            <div id="alert" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">

  <span class="block sm:inline"> {{ session()->get('message') }}</span>
  <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
    <svg id="close-alert" class="fill-current h-6 w-6 text-green-500 cursor-pointer" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
      <title>Close</title>
      <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
    </svg>
  </span>
</div>
@endif

@if($errors->any())
    @foreach($errors->all() as $error)
    <div id="alert" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
<span class="block sm:inline"> {{$error}}</span>
<span class="absolute top-0 bottom-0 right-0 px-4 py-3">
  <svg id="close-alert" class="fill-current h-6 w-6 text-red-500 cursor-pointer" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
    <title>Close</title>
    <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
  </svg>
</span>
</div>
    @endforeach
@endif

<div class="formulario_edit">  
<div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Editar Gênero
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="modal_main">
                <form class="space-y-4" action="{{ route('generos.update', ['genero' => $generos->id])}}" method='post'>
                @csrf
                    <div>
                        <label for="nome_artista" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome do Gênero<span class="asterisco">*</span></label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" 
                          value="{{$generos->nome}}" type="text" id="form1Example2" name="nome" placeholder="Nome"/>
                          <input type="hidden" name="_method" value="PUT">
                    </div>
                    <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" id="criar">Criar
                    </button>
                    <div class="botao_voltar_editar">
                    <a href="{{ route('generos.index')}}">Voltar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

   

           
            <!-- Seu conteúdo adicional aqui -->
        </div>
    </main>
    <!-- Main content end -->


    
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
       const modal = document.getElementById('authentication-modal');
       const openModalButton = document.querySelector('[data-modal-target="authentication-modal"]');
       const closeModalButton = document.querySelector('[data-modal-hide="authentication-modal"]');
       
       // Abrir o modal
       openModalButton.addEventListener('click', () => {
           modal.classList.remove('hidden');  // Exibe o modal
       });
       
       // Fechar o modal
       closeModalButton.addEventListener('click', () => {
           modal.classList.add('hidden');  // Esconde o modal
       });

       // Fechar o modal ao clicar fora dele
       window.addEventListener('click', (event) => {
           if (event.target === modal) {
               modal.classList.add('hidden');
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
