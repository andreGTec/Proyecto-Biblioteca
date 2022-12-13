<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"rel="stylesheet"/>
    </head>
    <body>
    <script src="https://kit.fontawesome.com/c15b744a04.js" crossorigin="anonymous"></script>
    <nav>
      <div class="logo">
        <i class="bx bx-menu menu-icon"></i>
        <td><img class="im-logo" src="https://cdn.discordapp.com/attachments/946226602868625423/1050593616210432010/logotupa.png"/></td>
        <!-- <span class="logo-name"></span> -->
      </div>
      <div class="sidebar">
        <div class="logo">
          <i class="bx bx-menu menu-icon"></i>
          <span class="logo-name">THE OLIMPUS LIBRARY</span>
        </div>

        <div class="sidebar-content">
          <ul class="lists">
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-home-alt icon"></i>
                <span class="link">Libros</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-bar-chart-alt-2 icon"></i>
                <span class="link">Biblioteca</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-bell icon"></i>
                <span class="link">Notificationes</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-message-rounded icon"></i>
                <span class="link">Sobre Nosotros</span>
              </a>
            </li>
            
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-heart icon"></i>
                <span class="link">Siguenos</span>
              </a>
            </li>
            </ul>
            @if (Route::has('login'))
            <div class="bottom-cotent">
                <li class="list">
                @auth
                <a href="{{ url('/home') }}" class="nav-link">
                    <i class="bx bx-folder-open icon"></i>
                    <span class="link">home</span>
                </a>
                </li>
                @else 
            <li class="list">
              <a href="{{ route('login') }}" class="nav-link">
                <i class="bx bx-log-out icon"></i>
                <span class="link">Log in</span>
              </a>
            </li>
            @if (Route::has('register'))
            <li class="list">
              <a href="{{ route('register') }}" class="nav-link">
                <i class="bx bx-cog icon"></i>
                <span class="link">Register</span>
                @endif
                @endauth                
              </a>
            </li>
          </div>
          @endif
        </div>
      </div>
    </nav>  
    

    <section class="overlay"></section>

    <script>
      const navBar = document.querySelector("nav"),
        menuBtns = document.querySelectorAll(".menu-icon"),
        overlay = document.querySelector(".overlay");

      menuBtns.forEach((menuBtn) => {
        menuBtn.addEventListener("click", () => {
          navBar.classList.toggle("open");
        });
      });

      overlay.addEventListener("click", () => {
        navBar.classList.remove("open");
      });
    </script>
  </body>
  <br><br><br>
  <div>
    <header class="hero">
      <div class="textos-hero">
          <h1>Bienvenido a The OLIMPUS Library</h1>
          <p>Tu Bliblioteca Favorita</p>
          <a class="bot" href="catalogo">Catalogo</a>
      </div>
      <div class="svg-hero" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
              style="height: 100%; width: 100%;">
              <!-- <path class="ondacent"  d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"></path> -->
          </svg></div>
  </header>


  <section class="wave-contenedor website">
      <img class="first-img" src="https://img.freepik.com/vector-gratis/grupo-personas-leyendo-tomando-prestado-libros_53876-43122.jpg?w=2000" alt="">
      <div class="contenedor-textos-main">
          <br>
          <h2 class="titulo left">¿Que encontraras aqui?</h2>
          <p class="parrafo">En esta pagina encontrar una infinidad de libros correspondientes a distitnas categorias,tambien almacenar de manera virtual tus libros favoritos.</p>
          <a href="" class="cta">Empezemos</a>
      </div>
  </section>

  <section class="info">
      <div class="contenedor">
          <h2 class="titulo left-secb">Juntos podemos crecer</h2>
          <p>Con los libros que tu aportes podremo hacer crecer esta bonita comunidad de lectores.</p>
      </div>
  </section>

  <section class="cards contenedor">
      <h2 class="titulo">Nuestros Servicios</h2>
      <div class="content-cards">
          <article class="card">
              <i class="far fa-clone"></i>
              <h3>compartir tus libros favoritos</h3>
              <p>comparte la lectura que aria feliz a esa persona especial</p>
              <a href="" class="cta-conj">Learn more</a>
          </article>
          <article class="card">
              <i class="fas fa-database"></i>
              <h3>Almancenar tus libros</h3>
              <p>Podras llevar almacenar tus libros en un hambiente virtual</p>
              <a href="" class="cta-conj">Learn more</a>
          </article>
          <article class="card">
              <i class="far fa-object-group"></i>
              <h3>buscar libros de amigos</h3>
              <p>Podras buscar libros que sean de tu agrado y descargarlos</p>
              <a href="" class="cta-conj">Learn more</a>
          </article>
      </div>
  </section>

  <section class="galeria">
      <div class="contenedor">
          <h2 class="titulo">Algunos Ejemplares</h2>
          <div class="carrusel">
              <div class="contenido">
                  <input type="radio" name="slider" id="item-1" checked>
                  <input type="radio" name="slider" id="item-2">
                  <input type="radio" name="slider" id="item-3">
      
                  <div class="cardsito">
                      <label class="cardex" for="item-1" id="selector-1">
                          <img src="https://m.media-amazon.com/images/I/41KqRCxVusL.jpg">
                      </label>
                      <label class="cardex" for="item-2" id="selector-2">
                          <img src="https://m.media-amazon.com/images/I/51qWry4gwcS.jpg">
                      </label>
                      <label class="cardex" for="item-3" id="selector-3">
                          <img src="https://m.media-amazon.com/images/I/51L8qkvlsjL.jpg">
                      </label>
      
                  </div>
              </div>
      
          </div>
      </div>
  </section>

  <section class="info-last">

      <div class="contenedor last-section">
          <div class="contenedor-textos-main">
              <h2 class="titulo left">Title of section</h2>
              <p class="parrafo">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum reprehenderit nostrum expedita quasi odio architecto laudantium sunt nemo dicta atque?</p>
              <a href="" class="cta-last">Learn more</a>
          </div>
          <img src="https://img.freepik.com/vector-premium/concepto-lectura-gente-lee-libros-estudiante-creativo-tiene-nueva-idea-libro-hombre-interesado-aprender-literatura-chicos-libros-texto-ilustracion-vectorial-gente-lee-libro-estudiantes-estudian_53562-12139.jpg?w=1380" alt="">
      </div>
      
      <div class="svg-wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
          style="height: 100%; width: 100%;">
          <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
              style="stroke: none; fill: #f0a257;"></path>
      </svg></div>
  </section>
  </div>



  

      
  <style>
    /* Google Fonts - Poppins */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap");

  *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

body {
  line-height: 1.5;
  min-height: 100%;
  background: #e3f2fd;
  font-family: 'Raleway', sans-serif;
}
nav {
  position: fixed;
  top: 0;
  left: 0;
  height: 70px;
  width: 100%;
  display: flex;
  align-items: center;
  background: #fff;
  box-shadow: 0 0 1px rgba(0, 0, 0, 0.1);
}
nav .logo {
  display: flex;
  align-items: center;
  margin: 0 24px;
}
.logo .menu-icon {
  color: #333;
  font-size: 24px;
  margin-right: 14px;
  cursor: pointer;
}
.logo .logo-name {
  color: #333;
  font-size: 22px;
  font-weight: 500;
}
.im-logo{
  width: 580px;
  height: 60px;
}
nav .sidebar {
  position: fixed;
  top: 0;
  left: -100%;
  height: 100%;
  width: 260px;
  padding: 20px 0;
  background-color: #fff;
  box-shadow: 0 5px 1px rgba(0, 0, 0, 0.1);
  transition: all 0.4s ease;
}
nav.open .sidebar {
  left: 0;
}
.sidebar .sidebar-content {
  display: flex;
  height: 100%;
  flex-direction: column;
  justify-content: space-between;
  padding: 30px 16px;
  position: relative;
}
.sidebar-content .list {
  list-style: none;
  position: relative;
}
.list .nav-link {
  display: flex;
  align-items: center;
  margin: 8px 0;
  padding: 14px 12px;
  border-radius: 8px;
  text-decoration: none;
}
.lists .nav-link:hover {
  background-color: #4070f4;
}
.nav-link .icon {
  margin-right: 14px;
  font-size: 20px;
  color: #707070;
}
.nav-link .link {
  font-size: 16px;
  color: #707070;
  font-weight: 400;
}
.lists .nav-link:hover .icon,
.lists .nav-link:hover .link {
  color: #fff;
}
.overlay {
  position: fixed;
  top: 0;
  left: -100%;
  height: 1000vh;
  width: 200%;
  opacity: 0;
  pointer-events: none;
  transition: all 0.4s ease;
  background: rgba(0, 0, 0, 0.3);
}
nav.open ~ .overlay {
  opacity: 1;
  left: 260px;
  pointer-events: auto;
}
/* parte2 */
    
.hero{
        background-image: linear-gradient(120deg, rgba(241, 147, 251, 0) 0%, rgba(0, 0, 0, 0.692) 100%), url("https://images.ecestaticos.com/m_i64QSDGHiPVEzPe0r6HyGArKM=/0x88:1695x1042/1200x900/filters:fill(white):format(jpg)/f.elconfidencial.com%2Foriginal%2F4a4%2F13d%2F245%2F4a413d2455828c65257010e7ecf8b621.jpg");
        width: 100%;
        height: 510px;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        position: center;
        overflow: hidden;
    }
    .first-img{
      padding-top: 30px;
    }

    .textos-hero{
        height: 500px;
        color: #fff;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    
    .textos-hero h1{
        font-size: 80px;
        text-align:center ;
    }
    
    .textos-hero p{
        font-size: 25px;
        margin-bottom: 20px;
    }
    
    .textos-hero a{
        display: inline-block;
        text-decoration: none;
        padding: 12px 15px;
        background: #4bb9b8;
        border-radius: 8px;
        color: #fff;
    }
    .bot:hover{
        display: inline-block;
        text-decoration: none;
        background-image: linear-gradient(1deg, #ffffff 40%, #ffffff 100%);
        padding: 12px 15px;
        border-radius: 8px;
        color: #333;
        cursor: pointer;
    }
    
    .svg-hero{
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
    }
    
    /* Estilos generales */
    
    .contenedor,
    .wave-contenedor{
        width: 90%;
        max-width: 1000px;
        overflow: hidden;
        margin: auto;
        padding: 0 0 80px 0;
    }
    .contenedor{
        padding: 80px 0;
    }
    
    .titulo{
        font-weight: 300;
        font-size: 35px;
        text-align: center;
        margin-bottom: 30px;
    }
    
    .titulo.left{
        text-align: left;
        margin-top: 50px;
    }
    .titulo.left-secb{
        text-align: left;
        font-size:60px;
        margin-top: 0px;
    }
    .titulo.right{
        text-align: right;
    }
    
    /* Section */
    
    .website{
        display: flex;
        justify-content: space-between;
    }
    
    .website img{
        width: 48%;
    }
    
    .website .contenedor-textos-main{
        width: 40%;
    }
    
    .parrafo{
        text-align: justify;
        margin-bottom: 20px;
    }
    
    .cta{
        display: inline-block;
        text-decoration: none;
        background-image: linear-gradient(1deg, #1c3762 8%, #4bb9b8 100%);
        padding: 12px 15px;
        border-radius: 8px;
        color: #fff;
    }
    .cta:hover{
        display: inline-block;
        text-decoration: none;
        background-image: linear-gradient(1deg, #4bb9b8 40%, #e7e7e7ad 100%);
        padding: 12px 15px;
        border-radius: 8px;
        color: #222;
        cursor: pointer;
    }
    .cta-conj{
        display: inline-block;
        text-decoration: none;
        background-image: linear-gradient(1deg, #fbfdcc 10%, #1c3762 40%, #4bb9b8 120%);
        padding: 12px 15px;
        border-radius: 8px;
        color: #fff;
    }
    
    .cta-last{
        display: inline-block;
        text-decoration: none;
        background-image: linear-gradient(1deg, #ff6347 40%, #fbfdcc 100%);
        padding: 12px 15px;
        border-radius: 8px;
        color: #fff;
    }
    .cta-last:hover{
        display: inline-block;
        text-decoration: none;
        background-image: linear-gradient(1deg, #6e72a0 40%, #ffffff 100%);
        padding: 12px 15px;
        border-radius: 8px;
        color: #fff;
        cursor: pointer;
    }
    
    /* Info */
    
    .info{
        background: #1c3762;
        color: #fff;
    }
    
    
    /* Cards */
    
    .content-cards{
        display: flex;
        width: 100%;
        justify-content: space-evenly;
        flex-wrap: wrap;
    }
    
    .card{
        width: 30%;
        text-align: center;
        height: 300px;
        box-shadow: 0 0 3px 0 rgba(0, 0, 0, .5);
        transform: scale(1);
        transition: transform 0.6s;
    }
    
    .card:hover{
        box-shadow: 0 0 6px 0 rgba(0, 0, 0, .5);
        transform: scale(1.03);
        cursor: pointer;
    }
    
    .card i{
        margin: 30px 0 20px 0;
        color: #4bb9b8;
        font-size: 50px;
    }
    
    .card p{
        font-weight: 300;
        font-size: 25px;
        margin-bottom: 10px;
    }
    
    /* galeria */
    
    .galeria{
        background: #fbfdcc77;
    }
    
    .galeria-cont{
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        overflow: hidden;
    }
    
    .galeria-cont>img{
        width: 30%;
        object-fit: cover;
        margin-bottom: 20px;
        display: block;
        box-shadow: 0px 0px 3px 0px rgba(0, 0, 0, 0.5);
        cursor: pointer;
        overflow: hidden;
    }
    
    /* info2 */
    
    .last-section{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding-bottom: 40px;
    }
    
    .last-section img{
        width: 48%;
    }
    
    .last-section .contenedor-textos-main{
        width: 40%;
    }
    
    
    /* footer */
    
    footer{
        background: #f0a257;
        color: #fff;
    }
    
    .form{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }
    
    .input{
        background: transparent;
        border: 0;
        color: #fff;
        outline: none;
        border: 1px  solid #fff;
        padding: 20px 10px;
    }
    
    .input::placeholder{
        color: #fff;
        font-family: 'raleway', 'sans-serif';
    }
    
    input[type="text"], 
    input[type="email"]{
        display: inline-block;
        width: 49%;
        margin-bottom: 30px;
    }
    
    .form textarea{
        width: 100%;
        margin-bottom: 15px;
    }
    
    input[type="submit"]{
        width: 120px;
        text-align: center;
        padding: 14px 0;
    }
    /* boton */
    input[type="submit"]:hover{
        cursor: pointer;
        color: #ff6347;
        background: #fff;
    }
    
    @media screen and (max-width:800px){
        .textos-hero h1{
            text-align: center;
            font-size: 50px;
        }
        /* estilos generales */
        .titulo{
            font-size: 35px;
        }
    
        .titulo.left{
            text-align: center;
        }
    
        .info p{
            text-align: center;
        }
    
        /* section */
        .website{
            flex-direction: column-reverse;
            justify-content: center;
            align-items: center;
        }
    
        .website img{
            width: 100%;
        }
    
        .website .contenedor-textos-main{
            width: 100%;
        }
    
        /* Cards */
    
        .card{
            width: 90%;
            margin-bottom: 20px;
        }
    
        /* galeria */
    
        .galeria-cont>img{
            width: 48%;
        }
    
        /* last */
    
        .last-section img{
            width: 98%;
        }
    
        .last-section .contenedor-textos-main{
            width: 98%;
            margin-bottom: 20px;
        }
    
    
    }
    
    @media screen and (max-width:400px){
        .titulo,
        .textos-hero h1{
            font-size: 30px;
        }
    
        .textos-hero p{
            font-size: 20px;
            text-align: center;
        }
    
        .card{
            height: 380px;
        }
    
        .website .contenedor-textos-main{
            margin-bottom: 30px;
        }
    
        .galeria-cont>img{
            width: 97%;
        }
    }
    /* carrusel */
    
    .carrusel{

        max-width: 1000px;
        height: 500px;
        margin: auto;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 30px 10px;
    }
    
    input[type=radio]{
        display: none;
    }
    
    .contenido{
        width: 100%;
        max-width: 800px;
        height: 100%;
        max-height: 600px;
        transform-style: preserve-3d;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .cardsito{
        position: relative;
        width: 100%;
        height: 100%;
    }
    
    .cardex{
        position: absolute;
        width: 60%;
        height: 100%;
        left: 0;
        right: 0;
        margin: auto;
        cursor: pointer;
        transition: transform 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    }
    
    img{
        width: 100%;
        height: 100%;
        border-radius: 10px;
        -o-object-fit: cover;
        object-fit: cover;
    }
    
    
    #item-2:checked ~ .cardsito #selector-1,
    #item-1:checked ~ .cardsito #selector-3,
    #item-3:checked ~ .cardsito #selector-2{
        transform: translateX(-40%) scale(0.8);
        opacity: 0.6;
        z-index: 0;
    }
    
    #item-3:checked ~ .cardsito #selector-1,
    #item-1:checked ~ .cardsito #selector-2,
    #item-2:checked ~ .cardsito #selector-3{
        transform: translateX(40%) scale(0.8);
        opacity: 0.6;
        z-index: 0;
    }
    
    #item-1:checked ~ .cardsito #selector-1,
    #item-2:checked ~ .cardsito #selector-2,
    #item-3:checked ~ .cardsito #selector-3{
        transform: translateX(0) scale(1);
        z-index: 1;
    }
      
  </style>

</body>

</html>
