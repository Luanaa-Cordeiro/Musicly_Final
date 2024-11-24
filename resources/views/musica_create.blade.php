
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <title>Home</title>
</head>
<body>
<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Musicly</h3>
            </div>

            <ul class="list-unstyled components">
            <li>
                    <a href="{{route('home')}}">Início</a>
                </li>
               
                <li>
                    <a href="{{route('artistas.index')}}">Artistas</a>
                </li>
                <li>
                    <a href="{{route('generos.index')}}">Géneros</a>
                </li>
                <li>
                    <a href="{{route('albuns.index')}}">Álbuns</a>
                </li>
                <li>
                    <a href="{{route('musicas.index')}}">Músicas</a>
                </li>
                <li>
                    <a href="{{route('populars.index')}}">Populares</a>
                </li>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Relatórios</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Home 1</a>
                        </li>
                        <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li>
                    </ul>
                </li>
            </ul>


        </nav>

        <!-- Page Content  -->
        <div id="content">

        <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
        
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                       <img src="{{ asset('assets/imagens/usuario-de-perfil.png')}}" alt="">
                       <div class="dropdown">
  <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
  {{ auth()->user()->name }}
  </a>

  <ul class="dropdown-menu">
  <form action="{{ route('logout') }}" method="POST" id="logout-form">
    @csrf
    <button type="submit" class="btn">Sair</button>
</form>
  </ul>
</div>
                    </div>
                </div>
            </nav>

@if($errors->any())
    <div class="alerta alert-danger alert alert-dismissible">
    {{$errors->first() }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

<div class="main">
<div class="formulario">
<form action="{{ route('musicas.store')}}" method="post">
@csrf
  <div data-mdb-input-init class="form-outline mb-4">
    <label class="form-label" for="nome_artista" style="color:white;">Nome da Música<span class="asterisco">*</span></label>
    <input type="text" id="form1Example2" class="form-control" name="nome" placeholder="Nome"/>
    <select name="id_artista" id="artista">
    <option disabled selected hidden>Selecione um Artista</option>
    @foreach($artistas as $artista)
        <option value="{{$artista->id}}">{{ $artista->nome }}</option>
    @endforeach
</select>
<select name="id_genero" id="artista" required>
    <option disabled selected hidden>Selecione um Gênero</option>
    @foreach($generos as $genero)
        <option value="{{$genero->id}}">{{ $genero->nome }}</option>
    @endforeach
</select>
<select name="id_album" id="artista" required>
    <option disabled selected hidden>Selecione um Álbum</option>
    @foreach($albuns as $album)
        <option value="{{$album->id}}">{{ $album->nome }}</option>
    @endforeach
</select>
  </div>

<div id="botao_criar">
  <button data-mdb-ripple-init type="submit" id="criar" class="btn btn-block">Criar</button>
  <a href="{{ route('musicas.index')}}">Voltar</a>
</div>
</form>
</div>
</div>

            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/script.js')}}"></script>
</body>
</html>



