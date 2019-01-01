@extends('frontend.layouts.app')
@section('page_name')
 Contacto
@endsection
@section('content')

 <!-- Formulario -->
 <div class="row d-flex justify-content-end align-items-center py-5" style="min-height:95vh;">
  <div class="col-md-7 order-1 order-md-0 mt-5 mt-md-0">
   <h3 class="py-5">
    <span class="font1">QUEREMOS ESCUCHAR TUS IDEAS</span><br>
    <small class="font2">ESCRÍBENOS</small>
   </h3>
   <form class="" action="index.html" method="post">
    <div class="row">
     <div class="col-12">
      <div class="form-group">
       <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
          <option selected>Me interesa</option>
          <option value="1">Branding</option>
          <option value="2">Landing Page</option>
          <option value="3">Diseño UX</option>
          <option value="4">Web App</option>
        </select>
      </div>
     </div>
    </div>
    <div class="row">
     <div class="col-12">
      <div class="form-group">
       <input type="text" class="form-control" id="form_nombre" aria-describedby="emailHelp" placeholder="Nombre">

      </div>
     </div>
    </div>
    <div class="row">
     <div class="col-md-6">
      <div class="form-group">
       <input type="text" class="form-control" id="form_email" aria-describedby="emailHelp" placeholder="e-mail">
      </div>
     </div>
     <div class="col-md-6">
      <div class="form-group">
       <input type="text" class="form-control" id="form_phone" aria-describedby="emailHelp" placeholder="Teléfono">
      </div>
     </div>
    </div>
    <div class="row">
     <div class="col-12">
      <div class="form-group">
       <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Describe tu proyecto (opcional)"></textarea>
      </div>
     </div>
    </div>
    <div class="row">
     <div class="col-12">
      <input type="submit" name="Enviar" class="btn btn-outline-secondary font1" value="ENVIAR">
     </div>
    </div>
   </form>
  </div>
  <div class="col-md-5 order-0 order-md-1">
   <div class="image">
    <img src="{{asset('img/espacio.jpg')}}" alt="" class="img-fluid">
   </div>
  </div>
 </div>
 <!-- End Formulario -->
 <div class="row justify-content-center align-items-center bg1 shadow" style="height:25vh;">
  <div class="col-md-10 text-center">
   <small class="font2 text-white rem-5">CONTACTO</small><br>
   <span class="font1 rem1"><a class="text-dark" href="mailto:contacto@bicefalo.com.mx">ENVÍANOS UN MAIL</a></span>
  </div>
 </div>
 <div class="row justify-content-center align-items-center" style="height:50vh;">
  <div class="col-md-6">
   <h3 class="text-center">
    <small class="font1 text-dark">VERACRUZ</small><br>
    <span class="font2 rem1">
     Ebano #9 <br>
     <small>Fracc</small>. Campestre 3 Pasos <br>
     Tel: 01(228)-290-3658


    </span>
   </h3>
  </div>
 </div>
@endsection
