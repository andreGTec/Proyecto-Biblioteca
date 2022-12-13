
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>campusMVP.es - Barra de navegación con Bootstrap</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
  <body>
   <div class="">
    <!-- BARRA NAVEGACIÓN -->
    <div class="bg-light">
		<nav class="navbar navbar-expand-md navbar-light bg-light border-3 border-bottom border-primary">
            <div class="container-fluid">
            <td><img class="im-logo" href="/" src="https://cdn.discordapp.com/attachments/946226602868625423/1050593616210432010/logotupa.png"/></td>
                <button type="button" 
                    class="navbar-toggler"
                    data-bs-toggle="collapse"
                    data-bs-target="#MenuNavegacion">
                        <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="input-group rounded">
  <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
  <span class="input-group-text border-0" id="search-addon">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
  </span>
</div>

			<div id="MenuNavegacion" class="collapse navbar-collapse">
				<ul class="navbar-nav ms-3">
					<li class="nav-item">
                        <a class="nav-link active" href="{{ url('/catalogo') }}">agregar</a>
                    </li>
          <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/') }}">Principal</a>
                    </li>          
					<li class="nav-item">
                        <a class="nav-link" href="{{ url('/catalogo') }}">Catálogo</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                          Opciones de soporte
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Manuales</a></li>
                          <li><a class="dropdown-item" href="#">Base de conocimientos</a></li>
                          <li><a class="dropdown-item" href="#">Contacta con nosotros</a></li>
                        </ul>
                    </li>
                    
                    
				</ul>
                
			</div>
		</nav>
	</div>
  
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
   <div class="row">
  <div class="col-md-4">
      <div class="cajita">
      <img width="10%" height="70" class="card-img-top mx-auto" src="https://img.freepik.com/vector-premium/personas-estan-comprando-libros-libreria-mientras-mantienen-su-distancia_209620-353.jpg?w=826"  alt="Imagen del cuadro">
  <div class="card-body">
    <h1 class="card-title">Opciones:</h1><br>
    <button type="button"  class="btn btn-primary  "><a id="boton" href="{{ url('/') }}">Cancelar Compra</a></button><br><br>
    <button type="button" class="btn btn-primary  "><a id="boton" href="{{ url('catalogo') }}">Ver otros Libros</a></button>

  </div>
</div>

  </div>
  @section('content')
  <div class="col-md-8 container-sm">
    <div class="boxito">
    <h1 class>METODO DE PAGO</h1>
    <form method="post" action="{{ route('confirmarcompraproceso') }}">
    @csrf
    <div class="row">
    <div class="col-sm-4">
    <label for="targeta">Seleccione el metodo de pago:</label>
    <select class="form-control @error('metodopago') is-invalid @enderror" id="metodopago" name="metodopago" value="{{ old('metodopago') }}" required autocomplete="metodopago" autofocus>
      <option value="Vids" selected>Visa</option>
      <option value="Mastercard" >Mastercard</option>
      <option value="PagoEfectivo">PagoEfectivo</option>
      <option value="SafetyPay">SafetyPay</option>
      <option value="bcp">Banco Credito de Perú</option>
      <option value="Payvalida">Payvalida</option>
      <option value="BBVA">BBVA</option>      
    </select>
    @error('metodopago')
      <span class ="invalid-feedback" role ="alert">
        <strong>{{$message}}</strong>
      </span>
    @enderror
    </div>
    <div class="row">
    <div class="col-sm-6">
    <label for="targeta">Introdusca numero de targeta:</label>
    <input type="targeta" class="form-control @error('numerotargeta') is-invalid @enderror" id="numerotargeta" name="numerotargeta" value="{{ old('numerotargeta') }}" required autocomplete="numerotargeta" autofocus>
    @error('numerotargeta')
      <span class ="invalid-feedback" role ="alert">
        <strong>{{$message}}</strong>
      </span>
    @enderror
    </div>
    <div class="col-sm-4">
    <label for="month-input">Fecha de caducidad:</label><br>
  <input type="date" id="fechacaducidad" name="fechacaducidad" class="form-control @error('fechacaducidad') is-invalid @enderror" value="{{ old('fechacaducidad') }}" required autocomplete="fechacaducidad" autofocus>
  @error('fechacaducidad')
      <span class ="invalid-feedback" role ="alert">
        <strong>{{$message}}</strong>
      </span>
    @enderror
    </div><br>
<br>

  <H1>INFORMACION DE FACTURA</H1>
  <div class="row">
    <div class="col-sm-4">
      <label for="Nombre">Nombre:</label>
      <input type="text" id="Nombre" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>
      @error('nombre')
      <span class ="invalid-feedback" role ="alert">
        <strong>{{$message}}</strong>
      </span>
    @enderror
    </div>
    <div class="col-sm-4">
      <label for="Apellidos">Apellidos:</label>
      <input type="text" id="Apellidos" class="form-control @error('apellidos') is-invalid @enderror" id="apellidos" name="apellidos" value="{{ old('apellidos') }}" required autocomplete="apellidos" autofocus>
      @error('apellidos')
      <span class ="invalid-feedback" role ="alert">
        <strong>{{$message}}</strong>
      </span>
    @enderror
    </div>
    <div class="col-sm-4">
      <label for="Localidad">Localidad:</label>
      <input type="text" id="Localidad" class="form-control @error('localidad') is-invalid @enderror" id="localidad" name="localidad" value="{{ old('localidad') }}" required autocomplete="localidad" autofocus>
      @error('localidad')
      <span class ="invalid-feedback" role ="alert">
        <strong>{{$message}}</strong>
      </span>
    @enderror
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <label for="factura">Direccion de factura:</label>
      <input type="text" id="factura" class="form-control @error('factura') is-invalid @enderror" id="factura" name="factura" value="{{ old('factura') }}" required autocomplete="factura" autofocus>
      @error('factura')
      <span class ="invalid-feedback" role ="alert">
        <strong>{{$message}}</strong>
      </span>
    @enderror
    </div>
    <div class="col-sm-4">
      <label for="codigopostal">codigo postal:</label>
      <input type="text" id="codigopostal" class="form-control @error('codigopostal') is-invalid @enderror" id="codigopostal" name="codigopostal" value="{{ old('codigopostal') }}" required autocomplete="codigopostal" autofocus>
      @error('codigopostal')
      <span class ="invalid-feedback" role ="alert">
        <strong>{{$message}}</strong>
      </span>
    @enderror
    </div>
  </div>
 
  <div class="row">
    <div class="col-sm-6">
      <label for="Pais">Pais:</label>
      <input type="text" id="Pais" class="form-control @error('pais') is-invalid @enderror" id="pais" name="pais" value="{{ old('pais') }}" required autocomplete="pais" autofocus>
      @error('pais')
      <span class ="invalid-feedback" role ="alert">
        <strong>{{$message}}</strong>
      </span>
    @enderror
    </div>
    <div class="col-sm-4">
      <label for="Telefono">Telefono:</label>
      <input type="text" id="Telefono" class="form-control @error('telefono') is-invalid @enderror" id="telefono" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono" autofocus>
      @error('telefono')
      <span class ="invalid-feedback" role ="alert">
        <strong>{{$message}}</strong>
      </span>
    @enderror
    </div>
  </div>
  <div class="row">
  </div>
  <br><div class="row">
    <div class="col-sm-3">
    <button type="submit" class="btn btn-primary"><a id="boton">Confirmar Compra</a></button>
  </div>
</form>


  </div>
</div>
</div>
</div>
</div>
<div class="svg-wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
          style="height: 100%; width: 100%;">
          <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
              style="stroke: none; fill: #f0a257;margin:0px;"></path>
      </svg></div>

<style>
body {
  min-height: 100%;
  background: #1C3762;
}
/* .col-md-8.container-sm{
  margin:auto;
  background-color: #fff;
} */
.card-img-top.mx-auto{
  display:flex;
  margin-top: 40px;
  border-radius: 19px;
  width: 250px;
  height: 340px;

}
.im-logo{
  width: 580px;
  height: 60px;
}
.boxito{
  padding-left:20px;
  padding-bottom:30px;
  padding-top:30px;
  margin-top: 40px;
  margin-right: 30px;
  background-color: #fff;
  box-shadow: 8px 11px 9px 0px rgba(0,0,0,0.57);
  border-radius: 9px;
}
.col-md-4{
  background:#99b5e1;
  width:540px;
  height: 600px;
  border-radius: 15px;
  margin-top:30px;
  margin-left: 30px;
  box-shadow: 8px 11px 9px 0px rgba(0,0,0,0.57);
}

/* .cajita{
padding-right:-10px;
  padding-left:30px;
  padding-top:20px;
} */
.col-md-8.container-sm{
  margin-left:33px;
}
#boton{
  color: #e0e0e0;
}
</style>
</body>

   </html>