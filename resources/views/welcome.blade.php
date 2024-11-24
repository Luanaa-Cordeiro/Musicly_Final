<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/inicio.css')}}">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg ">
  <div class="container">
    <a class="navbar-brand me-2" href="https://mdbgo.com/">
      <img
        src="{{asset('assets/imagens/MusicLy.png')}}"
        height="35"
        alt="MDB Logo"
        loading="lazy"
        style="margin-top: -1px;"
      />
    </a>

    <button
      data-mdb-collapse-init
      class="navbar-toggler"
      type="button"
      data-mdb-target="#navbarButtonsExample"
      aria-controls="navbarButtonsExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarButtonsExample">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link"href="#">MusicLy</a>
        </li>
      </ul>

      <div class="d-flex align-items-center">
        <button data-mdb-ripple-init type="button" class="btn btn-link px-3 me-2">
          @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/home') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                         class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a>


                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                             class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Cadastrar-se
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header>
        <!--<a
          data-mdb-ripple-init
          class="btn btn-dark px-3"
          href="https://github.com/mdbootstrap/mdb-ui-kit"
          role="button"
          ><i class="fab fa-github"></i
        ></a>-->
      </div>
    </div>
  </div>
</nav>


<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-interval="3000">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active " aria-current="true" aria-label="Slide 1"></button>
    <button style=""type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"aria-current="true" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item h-100 active" style="background-image: url('{{ asset('assets/imagens/artistas1.avif') }}'); background-size:contain; background-repeat: no-repeat; background-position: center;">
  
      <div class="carousel-caption d-none d-md-block">
        <button class="botao_entrar">Artistas</button>
      </div>
    </div>
    <div class="carousel-item h-100" style="background-image: url('{{ asset('assets/imagens/generos_musicais.jpg') }}'); background-size:contain; background-repeat: no-repeat; background-position: center; ">
      
      <div class="carousel-caption d-none d-md-block">
   
        <button class="botao_entrar">Gêneros</button>
      </div>
    </div>
    <div class="carousel-item h-100" style="background-image: url('{{ asset('assets/imagens/albuns.png') }}'); background-size:contain; background-repeat: no-repeat; background-position: center;">
     
      <div class="carousel-caption d-none d-md-block">
        <button class="botao_entrar">Albuns</button>
      </div>
    </div>
    <div class="carousel-item h-100" style="background-image: url('{{ asset('assets/imagens/musicas.jpg') }}'); background-size:contain; background-repeat: no-repeat; background-position: center;">
    
      <div class="carousel-caption d-none d-md-block">
        <button class="botao_entrar">Musicas</button>
      </div>
    </div>
  </div>
  <button  style="background-color: #6d7fcc; color: white;" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" style="background-color: #6d7fcc; color: white;">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class=" main_card">
<h1>Serviços</h1>

<div class="cartoes">
<div class="card" style="width: 18rem;">
  <img src="{{ asset('assets/imagens/artistas1.jpg') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Artistas</h5>
    <p class="card-text">Os melhores cantores da indústria musical!</p>

  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="{{ asset('assets/imagens/albuns2.jpg') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Gêneros</h5>
    <p class="card-text">Os melhores estilos musicais!</p>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="{{ asset('assets/imagens/albuns.jpg') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Álbuns</h5>
    <p class="card-text">Melhores álbuns de seus artistas preferidos!</p>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="{{ asset('assets/imagens/musica.avif') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Músicas</h5>
    <p class="card-text">As melhores disponíveis!</p>
  </div>
</div>
</div>
</div>

<div class="about">
<div class="itens_about">
  <h1>Sobre Nós</h1>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe repudiandae voluptatem nisi repellat! Veritatis autem eligendi porro atque nulla, laboriosam eos ducimus facere magnam delectus qui repellat quasi nesciunt. Labore.</p>
  </div>

  <img src="{{ asset('assets/imagens/albuns.jpg') }}" alt="">
</div>

<div class="populares">
  <h1>Populares</h1>
  <div class="table-wrapper">
                <table class="table table-responsive table-striped table-hover">
                  <thead class="">
                    <tr>
                      <th style="background-color:#6d7fcc; color:white;">Id</th>
                      <th style="background-color:#6d7fcc; color:white;">Música</th>
                      <th style="background-color:#6d7fcc; color:white;">Álbum</th>
                      <th style="background-color:#6d7fcc; color:white;">Artista</th>
                      <th style="background-color:#6d7fcc; color:white;">Gênero</th>
                    </tr>
                  </thead>
                  <tbody>
    @foreach($populars as $popular)
    <tr>
        <td>{{$popular->id}}</td>
        <td>{{$popular->musica->nome}}</td>
        <td>{{$popular->album->nome}}</td>
        <td>{{$popular->artista->nome}}</td>
        <td>{{$popular->genero->nome}}</td>
    </tr>
    @endforeach
</tbody>
        </table>
        </div>
    </div>
</div>

<div class="biografia">
  <h1>Biografias</h1>

  <div class="cartoes_bio">
  <div class="card" style="width: 18rem;">
  <img src="{{ asset('assets/imagens/theweekend.png') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Abel Makkonen Tesfaye, mais conhecido por seu nome artístico The Weeknd, é um cantor, compositor, ator e produtor musical canadense.</p>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="{{ asset('assets/imagens/arianna.jpeg') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Ariana Grande-Butera é uma cantora, compositora, produtora musical, atriz e empresária norte-americana.<p>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="{{ asset('assets/imagens/djavan.jpg') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Djavan Caetano Viana é um cantor, compositor, arranjador, produtor musical, empresário, violonista e ex-futebolista brasileiro. </p>
  </div>
</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>