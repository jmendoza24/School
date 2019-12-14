<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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

.circular--square {
  border-top-left-radius: 50% 50%;
  border-top-right-radius: 50% 50%;
  border-bottom-right-radius: 50% 50%;
  border-bottom-left-radius: 50% 50%;
}
</style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


<div class="" style="width: 500px;" id="credencial" >
    <div class="card profile-card-with-cover" style="border: gray 1px solid">
      <img src="{{ asset('app-assets/images/header.jpg')}}" style="width: 100%; height: 72px;">
      <div class="card-img-top img-fluid bg-cover height-100" style=" border: 0px solid red;"></div>
      <div class="card-profile-image" style="margin-top: -120px; border: 0px solid green; z-index: 1000;"  >
        <img src="{{ url('app-assets/images/portrait/small/avatar-s-4.png')}}" style="" class="rounded-circle img-border box-shadow-1"
        alt="Card image">
        <h4 class="card-title" style="padding-top: 10px; border: solid green 0px; "><b>Jacob Mendoza Contreras</b></h4>
          <ul class="list-inline" style="color: #D54ACF; border: 0px solid red; margin-top: -18px; ">
            <li><i class="fa fa-circle" style="color: #656EF1;"></i><b>PREESCOLAR</b></li>
            <li><i class="fa fa-circle" style="color: #656EF1;"></i><b>PRIMARIA</b></li>
            <li><i class="fa fa-circle" style="color: #656EF1;"></i><b>SECUNDARIA</b></li>
          </ul>
      </div>
      <div class="col-md-12" style=" text-align: center; border: 1px solid blue; margin-bottom: -5px; ">
        <br>
          <img class="brand-logo" alt="stack admin logo"  style="width: 50px;" src="{{ url('app-assets/images/logo/thumbnail_mati-talent-sin-fondo.png') }}">
          <br>
      </div>
      <div style="text-align: center; padding-top: -100px; border: 0px solid red; background: url('{{ url('app-assets/images/carousel/18.jpg')}}'); ">
          <h3 style="margin: auto;">www.matik12.com</h3>
      </div>      
    </div>
</div>