<div class="fixed-top bg-white">

   <div class="collapse" id="navbarToggleExternalContent">
    <div class="row justify-content-end bg-white">
     <div class="col-md-6">
      <ul class="nav flex-column text-right  font1 mayuscula mt-5 py-5 rem2">
        <li class="nav-item">
          <a class="nav-link text-dark active" href="{{route('front.index')}}">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="{{route('front.servicios')}}">SERVICIOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="{{ route('front.nosotros') }}">NOSOTROS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="{{ route('front.contacto')}}">CONTACTO</a>
        </li>
      </ul>
     </div>
    </div>
    <div class="row justify-content-start bg-white py-3">
     <div class="col-md-6">
      <div class="row rem2  justify-content-between  px-5">
        <a href="#" class="text-dark"><i class="fab fa-facebook"></i></a>
        <a href="#" class="text-dark"><i class="fab fa-twitter-square"></i></a>
        <a href="#" class="text-dark"><i class="fab fa-instagram"></i></a>
        <a href="#" class="text-dark"><i class="fab fa-behance-square"></i></a>
        <a href="#" class="text-dark"><i class="fab fa-github-square"></i></a>
      </div>
     </div>
    </div>
   </div>


 <nav class="navbar navbar-light fixed-top p-4 bg-white">
   <a class="navbar-brand" href="{{ route('front.index') }}">
     <img src="{{url('img/letras_logo.png')}}" width="auto" height="40" class="d-inline-block align-top" alt="">
   </a>
   <button class="border-0 font1 bg-white" style="outline-color: #fff;" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent " aria-expanded="false" aria-label="Toggle navigation">
     <i class="fas fa-bars"></i>
    </button>
 </nav>
</div>
