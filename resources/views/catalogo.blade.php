
@vite(['resources/sass/app.scss', 'resources/js/app.js'])

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    
    main {
        background-image: url('https://i.pinimg.com/736x/20/c3/bc/20c3bc06ddfa1779a74e623a3bcbf13a.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size:cover;
        background-position: center;
    }
  </style>
  <header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        
         <li><img width="100%" height="50" class="im-logo" src="https://cdn.discordapp.com/attachments/892429681503133776/1047542279621054485/logotippoooo.png"/></li>
          <li><a href="#" class="nav-link px-2 text-white">OLIMPUS LIBRARY</a></li>
          <li><a href="{{ url('/') }}" class="nav-link px-2 text-white">Pagina Principal</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Sobre Nosotros</a></li>
          <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
          
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          
          <button type="button" class="btn btn-warning">Volver</button>
        </div>
      </div>
    </div>
  </header>


<body>

  

  <main>

    <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">BIENVENIDO AL CATALOGO</h1>
        <p class="lead text-muted">Revisa entre los mejores generos de libros que tenemos para ofrecerte</p>
      </div>
    </div>

    </section>

    <div class="album py-5 bg-light">
      <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          @foreach($libros as $libro)
          <div class="col">
            <div class="card shadow-sm">
              <img src="{{asset('storage').'/'.$libro->portada}}" width="100%" height="225" class="img-fluid" alt="Responsive image">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                  dy=".3em"></text>
              </svg>

              <div class="card-body">
                
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="collapse"
                      data-bs-target="#collapseExample{{$libro->id}}" id="mostrar">INFORMACION</button>
                  </div>
                  <div class="btn-group">
                    <a class="btn btn-primary" href="confirmarcompra" role="button">Comprar</a>
                  </div>
                </div>
                <div class="collapse" id="collapseExample{{$libro->id}}">
                  
                  <p class="card-text">NOMBRE: {{$libro -> nombre}}</p>
                  <p class="card-text">AUTOR: {{$libro -> autor}}</p>
                  <p class="card-text">Reseña: {{$libro -> resena}}</p>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </main>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
 