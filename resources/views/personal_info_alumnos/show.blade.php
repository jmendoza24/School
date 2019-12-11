@extends('layouts.app')

@section('content')
   <section id="user-profile-cards-with-cover-image" class="row mt-2">
        <div class="col-md-6 col-12" >
            <div class="card profile-card-with-cover" style="border: gray 1px solid">
              <!--<img class="card-img-top img-fluid" src="../../../app-assets/images/carousel/18.jpg" alt="Card cover image">-->
              <div class="card-img-top img-fluid bg-cover height-100" style=" border: 0px solid red; background: url('{{ url('app-assets/images/header.png')}}');"></div>
              <div class="card-profile-image" style="margin-top: -120px; border: 0px solid green; z-index: 1000;"  >
                <img src="{{ url('app-assets/images/portrait/small/avatar-s-4.png')}}" class="rounded-circle img-border box-shadow-1"
                alt="Card image">
                <h4 class="card-title" style="padding-top: 10px; border: solid green 0px; "><b>Jacob Mendoza Contreras</b></h4>
                  <ul class="list-inline" style="color: #D54ACF; border: 0px solid red; margin-top: -18px; ">
                    <li><i class="fa fa-circle" style="color: #656EF1;"></i><b>PREESCOLAR</b></li>
                    <li><i class="fa fa-circle" style="color: #656EF1;"></i><b>PRIMARIA</b></li>
                    <li><i class="fa fa-circle" style="color: #656EF1;"></i><b>SECUNDARIA</b></li>
                  </ul>
              </div>
              <div class="profile-card-with-cover-content text-center" style=" border: 0px solid blue; margin-bottom: -25px; ">
                <div class="card-body"><br>
                  <img class="brand-logo" alt="stack admin logo"  style="width: 80px;" src="{{ url('app-assets/images/logo/thumbnail_mati-talent-sin-fondo.png') }}">
                </div>
              </div>
              <div style="text-align: center; padding-top: -100px; border: 0px solid red; background: url('{{ url('app-assets/images/carousel/18.jpg')}}'); ">
                  <h3 style="margin: auto;">www.matik12.com</h3>
              </div>

            </div>
          </div>
</section>
@endsection
