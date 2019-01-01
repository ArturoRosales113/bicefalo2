@extends('frontend.layouts.app')
@section('page_title') Home
@endsection
@section('content')
<!-- Inicio -->
<div class="row justify-content-center mt-5 mt-lg-0 pt-5 pt-lg-0" style="height:100vh;">

 <div class="col-10 col-lg-6 mt-5 mt-lg-0 align-self-end order-1 order-lg-0">
  <h4>
   <small class="font2 ">LO HACEMOS TODO</small><br>
   <span class="font1">BRANDING</span>&nbsp;<span class="font1 text-secondary">E-COMMERCE</span>&nbsp;<span class="font1">WEB APPS</span>
  </h4>
  <p class="text-justify line1-5">
   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam consequuntur distinctio fuga adipisci obcaecati? Est, facilis, dolorum. Quos inventore ad, reiciendis voluptatum deleniti nam dolorem impedit quo ut, cumque iure asperiores, cupiditate ea
   odio distinctio, voluptas in ipsum magni.
  </p>
 </div>
 <div class="col-8 col-lg-5 align-self-center order-0 order-lg-1">
  <div class="image text-center">
   <img src="{{url('img/bicefalo.png')}}" alt="" class="img-fluid">
  </div>
 </div>
</div>
<!-- End Inicio -->

<!-- Trabajos -->
<div class="row justify-content-center align-items-center" style="height:95vh;">
 <div class="col-12 col-lg-2 d-flex align-items-center" id="index_trabajo">
  <div class="nav flex-row flex-lg-column flex-nowrap font2 rem-5 text-left" id="v-pills-tab" role="tablist" aria-orientation="vertical">
   <a class="nav-link text-dark active" id="v-pills-sendero-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">SENDERO</a>
   <a class="nav-link text-dark" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">BERLLANO</a>
   <a class="nav-link text-dark" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">ORGÓN</a>
   <a class="nav-link text-dark" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">CERVEZA <br> JAROCHA</a>
  </div>
 </div>
 <div class="col-12 col-lg-10">
  <div class="tab-content" id="v-pills-tabContent">
   <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
    <div class="row justify-content-between align-items-center">
     <div class="col-md-7">
      <h4 class="font1">SENDERO</h4>
      <span class="font2 text-uppercase">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
      <br>
      <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <br>
      <a href="#" class="btn btn-outline-secondary font1 text-left">Ver <br> Proyecto</a>
     </div>
     <div class="col-md-4 p-0">
      <div class="image">
       <img src="{{asset('img/ejemplosendero.jpg')}}" alt="" class="img-fluid">
      </div>
     </div>
    </div>
   </div>
   <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">Berllano</div>
   <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">Orgon</div>
   <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">cerveza jarocha</div>
  </div>
 </div>
</div>
<!-- End Trabajos -->

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
