@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Carousel Template · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
  

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@1,300&display=swap');
        /* GLOBAL STYLES
-------------------------------------------------- */
/* Padding below the footer and lighter body text */




/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */



/* MARKETING CONTENT
-------------------------------------------------- */

/* Center align the text within the three columns below the carousel */

/* rtl:end:ignore */


/* Featurettes
------------------------- */



/* rtl:end:remove */

/* RESPONSIVE CSS
-------------------------------------------------- */

  /* Bump up size of carousel content */
  

  .featurette-heading {
    font-size: 50px;
  }

@media (min-width: 62em) {
  .featurette-heading {
    margin-top: 7rem;
  }
}

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

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->



  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->




    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Guarda tu informacion personal <span class="text-muted">Tus datos dependen de ello!</span></h2>
        <p class="lead">No des ninguna informacion sobre tus datos personales a personal no autorizado, salvo ordenes de los lideres </p>
      </div>
      <div class="col-md-5">
      <img src="https://st3.depositphotos.com/32772600/37265/v/950/depositphotos_372655850-stock-illustration-businessman-office-worker-manager-letter.jpg"  width="150" height="150" class="img-fluid" alt="Responsive image">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">No preste tu cuenta a las personas <span class="text-muted">Puede ocurrir un riesgo de datos</span></h2>
        <p class="lead">Su cuenta esta vinculada a una base de datos de la empresa, cualquier informacion filtrada sera completa responsabilidad del administrador a cargo</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="https://peritojudicial.com/content/images/2022/07/P172-Robo-de-informaci-n-en-la-red.jpg" class="img-fluid" alt="Responsive image">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Todo en su lugar!!!<span class="text-muted">No cambie los datos sin utorizacion!</span></h2>
        <p class="lead">Cada registro es completamente importante para la empresa, en el caso de agregar registros, hacerlo cuidadosamente,cualquier error sera responsabilidad del encargado administrativo</p>
      </div>
      <div class="col-md-5">
      <img src="https://media-exp1.licdn.com/dms/image/C4D12AQHiqCZPpMqLIA/article-cover_image-shrink_423_752/0/1520228403773?e=1674086400&v=beta&t=XPqum9T-W5dvDVIQAKXMtFv5tOokJdY_5P-aMXcXCNk" class="img-fluid" alt="Responsive image">


      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->
<!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2017–2022 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>   
  </body>
</html>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop