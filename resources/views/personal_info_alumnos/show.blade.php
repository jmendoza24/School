
<style type="text/css">
  .profile-card-with-stats .btn-float {
  padding: 8px 14px 4px 14px; }

.profile-card-with-cover .card-profile-image {
  position: absolute;
  top: 130px;
  width: 100%;
  text-align: center; }
  .profile-card-with-cover .card-profile-image img.img-border {
    border: 5px solid #fff; }

.profile-card-with-cover .profile-card-with-cover-content {
  padding-top: 4rem; }

#user-profile .profile-with-cover .profil-cover-details {
  position: absolute;
  margin-top: 210px; }
  #user-profile .profile-with-cover .profil-cover-details .profile-image img.img-border {
    border: 5px solid #fff; }
  #user-profile .profile-with-cover .profil-cover-details .card-title {
    color: #FFFFFF;
    text-shadow: 1px 1px 4px #1B2942; }

#user-profile .navbar-profile {
  margin-left: 130px; }


</style>


<div style="width: 500px;" id="credencial" >
    <div class="card profile-card-with-cover" style="border: gray 0px solid">
      <img src="{{ asset('app-assets/images/header.jpg')}}" style="width: 100%; height: 72px;">
      <div class="" style="margin-top: -40px; border: 0px solid green; text-align: center; "  >
        <img src="{{ url($info->photo_alumno)}}" style="width: 120px; border-radius:57px; border: solid #B810AE 2px; " class="circular-square">
          <h3 class="card-title" style="padding-top: -40px; border: solid blue 0px; font-family: sans-serif; ">
            <b>{{ $info->name }}</b>
                <br/>
                <label style="color: #B810AE; "><span><b>-PREESCOLAR</b></span> &nbsp;&nbsp;
                 <span></i><b>-PRIMARIA</b></span>&nbsp;&nbsp;
                 <span></i><b>-SECUNDARIA</b></span></label>
          </h3><br/>
      </div>
      <div class="col-md-12" style=" text-align: center; border: 0px solid gray; margin-bottom: -5px; margin-top: -15px; ">
          <img class="brand-logo" alt="stack admin logo"  style="width: 50px;" src="{{ url('app-assets/images/logo/thumbnail_mati-talent-sin-fondo.png') }}">
      </div>
      <div style="text-align: center; padding-top: 1px; border: 0px solid red; ">
        <img src="{{ asset('app-assets/images/footer.jpg')}}" style="width: 100%; height: 35px;">
          <!--<h3 style="margin: auto;">www.matik12.com</h3>--->
      </div>      
    </div>
</div>
<br><br>
<div style="width: 500px;" id="credencial" >
    <div class="card profile-card-with-cover" style="border: gray 0px solid">
      <img src="{{ asset('app-assets/images/header.jpg')}}" style="width: 100%; height: 72px;">
      <div class="" style="margin-top: -40px; border: 0px solid green; text-align: center; "  >
        <img src="{{ url('app-assets/images/logo/mati-kinder-logo-768x515.png')}}" style="width: 100px;"  >
          <h3 class="card-title" style="padding-top: -40px; border: solid blue 0px; font-family: sans-serif; ">
            <b>{{ $info->name }}</b>
                <br/>
                <label style="color: #B810AE; font-size: 14px; ">Fecha de nacimiento: {{ substr($info->date_birth,0,10) }}</label><br/>
                <label style="color: #B810AE; font-size: 14px;">Grado: {{ $info->grado }}</label><br/>
                <label style="color: #B810AE; font-size: 14px;">Ciclo escolar: {{ $info->ciclo }}</label><br/>
                
            <label><br/>
             <span style="color: #B810AE;"> _________________________________ </span><br/>
              Directora
            </label>
          </h3>
      </div>
      
      <div style="text-align: center; padding-top: -21px; border: 0px solid red; ">
        <img src="{{ asset('app-assets/images/footer.jpg')}}" style="width: 100%; height: 35px;">
          <!--<h3 style="margin: auto;">www.matik12.com</h3>--->
      </div>      
    </div>
</div>
