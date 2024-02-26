<!DOCTYPE html> 
<html> 

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

      

        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400&display=swap" rel="stylesheet">


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Traivis</title>
        <style>

          body {font-family: 'Roboto', sans-serif !important;}


        .modal-header, h4, .close {
          background-color: #000;
          color:white !important;
          text-align: center;
          font-size: 30px;
        }

        .md3 .modal-header, h4, .close {
          background-color: #0045ed;
          color:white !important;
          text-align: center;
          font-size: 30px;
        }

        .modal-header {
    border-bottom: 0px solid #e5e5e5;}


        .modal-footer {
          background-color: #f9f9f9;
        }

        .btn-danger {

          color: #fff;
    background-color: #0045ed;
    border-color: #0045ed;
    padding: 10px 50px 10px 50px;
    border-radius: 30px;
         
}

.btn-primary {

  color: #003da7;
    background-color: #fff;
    border-color: #003da7;
    border: 2px solid;
    padding: 17px 30px 17px 30px;

    border-radius: 16px;
    font-size: 35px;
    letter-spacing: 5px;
   
}


/* Reset */
* {
  margin: 0;
  paddding: 0;
}

.wrapper {
  width: 100%;
  height: 100vh;
  overflow: hidden;
}

.wrapper .wrapper__video {
  object-fit: cover;
  width: 100%;
  height: 100%;
}


h1 {
  text-align: center;
  color: #fff;
  position: absolute;
  top: 90px;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  z-index: 3;
  max-width: 400px;
  width: 100%;
  height: 50px;
}

.overlay {
  width: 60%;
  height: 50vh;
  margin-left: 20%;
  border-radius: 20px;
  position: absolute;
  top: 30%;
  left: 0;
  /* background-image: linear-gradient(45deg, rgba(0,0,0,.3) 50%, rgba(0,0,0,.6) 50%); */
  background-size: 3px 3px;
  z-index: 2;
}

p {
  text-align: center;
  font-size: 60px;
  margin-top: 0px;
  position: absolute;
  top: -40px;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  color: #fff;
  z-index: 3;
  max-width: 800px;
  width: 100%;
  height: 50px;
}

@media (max-width: 767px) {


  .overlay {
  width: 100%;
  height: 50vh;
  margin-left:0%;
  border-radius: 20px;
  position: absolute;
  top: 30%;
  left: 0;
  background-image: linear-gradient(45deg, rgba(0,0,0,.3) 50%, rgba(0,0,0,.6) 50%);
  background-size: 3px 3px;
  z-index: 2;
  display: none;
}

p {
  text-align: center;
  font-size: 48px;
  margin-top: 0px;
  position: absolute;
  top: -40px;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  color: #fff;
  z-index: 3;
  max-width: 800px;
  width: 100%;
  height: 50px;
}

#countdown {
  width: auto !important;
  height:auto !important;
  text-align: center;
  background: #000;
  /* background-image: -webkit-linear-gradient(top, #222, #333, #333, #222);
  background-image: -moz-linear-gradient(top, #222, #333, #333, #222);
  background-image: -ms-linear-gradient(top, #222, #333, #333, #222);
  background-image: -o-linear-gradient(top, #222, #333, #333, #222); */
  border: 1px solid #000;
  border-radius: 5px;
  box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.6);
  margin: auto;
  padding: 24px 0;
  /* position: absolute;
  top: 310px;
  bottom: 0; */
  left: 0;
  right: 0;
}

#countdown #tiles > span {
  width: 60px !important;
  max-width: 60px !important;
  
  font: bold 30px "Droid Sans", Arial, sans-serif !important;
  text-align: center;
  color: #111;
  background-color: #ddd;
  background-image: -webkit-linear-gradient(top, #bbb, #eee);
  background-image: -moz-linear-gradient(top, #bbb, #eee);
  background-image: -ms-linear-gradient(top, #bbb, #eee);
  background-image: -o-linear-gradient(top, #bbb, #eee);
  border-top: 1px solid #fff;
  border-radius: 3px;
  box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.7);
  margin: 0 7px;
  padding: 18px 0;
  display: inline-block;
  position: relative;
}

#countdown .labels li {
  width: 70px !important;
  font: bold 15px "Droid Sans", Arial, sans-serif;
  color: #0045ed;
  text-shadow: 1px 1px 0px #000;
  text-align: center;
  margin-top: 10px;
  text-transform: uppercase;
  display: inline-block;
}

h1 {
    text-align: center;
    color: #fff;
    position: absolute;
    top: 25px;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
    z-index: 3;
   
}

.md2 .modal-dialog {margin-top: 4%;}

}
        </style>
      </head>


<body> 

  <div class="wrapper">
    <a href="#!" id="myBtn2">
    <video autoplay loop muted class="wrapper__video hidden-xs">
      <source src="traivis.mp4">
    </video>

      <video autoplay loop muted class="wrapper__video visible-xs" id="myVideo">
        <source src="mobile.mp4">

    </video>
  </a>
  </div>

  <!-- <div class="wrapper visible-xs">
    <a href="#!" id="myBtn2">
    <video autoplay loop muted class="wrapper__video">
      <source src="mobile.mp4">
    </video>
    </a>
  </div> -->

 

  <!-- <p id="demo"></p> -->

  <h1  class="hidden">
    <!-- Coming Soon!<br><br> -->
    <button type="button" class="btn btn-primary">Register</button>
  </h1>


<!-- <div class="video-container">
    <a id="myBtn">
<video width="100%" height="auto" playsinline autoplay muted loop id="video-bg">
  <source src="traivis.mp4" type="video/mp4">
  <source src="traivis.mp4" type="video/ogg">
  Your browser does not support HTML video.
</video>
</a>
</div> -->

<!------------------>



<div class="container">
    
  
  <!-- Modal -->
  <div class="modal fade md2" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content" style=" background-color: #000;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         
        </div>
        <div class="modal-body" style="padding-bottom: 100px; padding-top: 40px;">
          <div class="row">
          <div id="countdown">
            <div id='tiles'></div>
            <div class="labels">
              <li>Days</li>
              <li>Hours</li>
              <li>Mins</li>
              <li>Secs</li>
            </div>
          </div>
        </div>
  
          </div>
        </div>
    
      </div>
      
    </div>
  </div> 


<!----------------->


<div class="container">
    
  
    <!-- Modal -->
    <div class="modal fade" id="myModal2" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content md3">
          <div class="modal-header" style="padding:35px 50px;">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4><i class="fa fa-sign-in twhite"></i> Register</h4>
          </div>
          <div class="modal-body" style="padding:40px 50px;">
            <form role="form" method="POST" action="mail.php">
                <div class="row">
              <div class="form-group col-md-6">
                <label for="usrname"><i class="fa fa-user" aria-hidden="true"></i> Name</label>
                <input type="text" class="form-control" id="usrname" name="usrname" placeholder="Enter Name" required>
              </div>
              <div class="form-group col-md-6">
                <label for="psw"><i class="fa fa-envelope" aria-hidden="true"></i> Email</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email" required>
              </div>

              <div class="form-group col-md-12">
                <label for="psw"><i class="fa fa-building" aria-hidden="true"></i> Address</label>
                <textarea rows="2" placeholder="Address" name="address" class="form-control"></textarea>
              </div>

              <div class="form-group col-md-12">
                <label for="psw"><i class="fa fa-university" aria-hidden="true"></i> Institution Name</label>
                <input type="text" class="form-control"  name="institution" id="institution" placeholder="Enter Institution Name" required>
              </div>

              <div class="form-group col-md-6">
                <label for="psw"><i class="fa fa-globe" aria-hidden="true"></i> Web</label>
                <input type="text" class="form-control" name="web" id="web" placeholder="Enter Web Address">
              </div>

              <div class="form-group col-md-6">
                <label for="psw"><i class="fa fa-map-marker" aria-hidden="true"></i> Location</label>
                <input type="text" class="form-control map-input" name="address-input" id="address-input" placeholder="Enter Location" autocomplete="off" style="width:100%;">
                <input type="hidden" name="address_latitude" id="address-latitude" value="0" />
               <input type="hidden" name="address_longitude" id="address-longitude" value="0" />
                <!-- <select class="form-control" id="sel1">
                  <option>Location 1</option>
                  <option>Location 2</option>
                  <option>Location 3</option>
                  <option>Location 4</option>
                </select> -->
              </div>



              <!-- <div class="checkbox">
                <label><input type="checkbox" value="" checked>Remember me</label>
              </div> -->
              <div class="form-group col-md-12" style="margin-top: 20px;">
                <button type="submit" name="submitbtn" class="btn btn-danger btn-block"><i class="fa fa-paper-plane" aria-hidden="true"></i> Submit</button>
            </div>
        </div>
            </form>
          </div>
      
        </div>
        
      </div>
    </div> 
  </div>
   
  <script>
  $(document).ready(function(){
    $("#myBtn2").click(function(){
      $("#myModal2").modal();
    });
  });
  </script>

<script>
  var target_date = new Date().getTime() + 12500 * 3600 * 48; // set the countdown date
var days, hours, minutes, seconds; // variables for time units

var countdown = document.getElementById("tiles"); // get tag element

getCountdown();

setInterval(function () {
  getCountdown();
}, 1000);

function getCountdown() {
  // find the amount of "seconds" between now and target
  var current_date = new Date().getTime();
  var seconds_left = (target_date - current_date) / 1000;

  days = pad(parseInt(seconds_left / 86400));
  seconds_left = seconds_left % 86400;

  hours = pad(parseInt(seconds_left / 3600));
  seconds_left = seconds_left % 3600;

  minutes = pad(parseInt(seconds_left / 60));
  seconds = pad(parseInt(seconds_left % 60));

  // format countdown string + set tag value
  countdown.innerHTML =
    "<span>" +
    days +
    "</span><span>" +
    hours +
    "</span><span>" +
    minutes +
    "</span><span>" +
    seconds +
    "</span>";
}

function pad(n) {
  return (n < 10 ? "0" : "") + n;
}

  </script>

<script type="text/javascript">
  $(window).on('load', function() {
      $('#myModal').modal('show');
  });
</script>

<style>
   body {
  /* font: normal 13px/20px Arial, Helvetica, sans-serif; */
  word-wrap: break-word;

} 
#countdown {
  width: 465px;
  height: 170px;
  text-align: center;
  background: #000;
  /* background-image: -webkit-linear-gradient(top, #222, #333, #333, #222);
  background-image: -moz-linear-gradient(top, #222, #333, #333, #222);
  background-image: -ms-linear-gradient(top, #222, #333, #333, #222);
  background-image: -o-linear-gradient(top, #222, #333, #333, #222); */
  border: 1px solid #000;
  border-radius: 5px;
  box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.6);
  margin: auto;
  padding: 24px 0;
  /* position: absolute;
  top: 310px;
  bottom: 0; */
  left: 0;
  right: 0;
}

#countdown:before {
  content: "";
  width: 8px;
  height: 65px;
  background: #000;
  /* background-image: -webkit-linear-gradient(top, #555, #444, #444, #555);
  background-image: -moz-linear-gradient(top, #555, #444, #444, #555);
  background-image: -ms-linear-gradient(top, #555, #444, #444, #555);
  background-image: -o-linear-gradient(top, #555, #444, #444, #555); */
  border: 1px solid #111;
  border-top-left-radius: 6px;
  border-bottom-left-radius: 6px;
  display: block;
  position: absolute;
  top: 48px;
  left: -10px;
}

#countdown:after {
  content: "";
  width: 8px;
  height: 65px;
  background: #000;
  /* background-image: -webkit-linear-gradient(top, #555, #444, #444, #555);
  background-image: -moz-linear-gradient(top, #555, #444, #444, #555);
  background-image: -ms-linear-gradient(top, #555, #444, #444, #555);
  background-image: -o-linear-gradient(top, #555, #444, #444, #555); */
  border: 1px solid #111;
  border-top-right-radius: 6px;
  border-bottom-right-radius: 6px;
  display: block;
  position: absolute;
  top: 48px;
  right: -10px;
}

#countdown #tiles {
  position: relative;
  z-index: 1;
}

#countdown #tiles > span {
  width: 92px;
  max-width: 92px;
  font: bold 48px "Droid Sans", Arial, sans-serif;
  text-align: center;
  color: #111;
  background-color: #ddd;
  background-image: -webkit-linear-gradient(top, #bbb, #eee);
  background-image: -moz-linear-gradient(top, #bbb, #eee);
  background-image: -ms-linear-gradient(top, #bbb, #eee);
  background-image: -o-linear-gradient(top, #bbb, #eee);
  border-top: 1px solid #fff;
  border-radius: 3px;
  box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.7);
  margin: 0 7px;
  padding: 18px 0;
  display: inline-block;
  position: relative;
}

#countdown #tiles > span:before {
  content: "";
  width: 100%;
  height: 13px;
  background: #111;
  display: block;
  padding: 0 3px;
  position: absolute;
  top: 41%;
  left: -3px;
  z-index: -1;
}

#countdown #tiles > span:after {
  content: "";
  width: 100%;
  height: 1px;
  background: #eee;
  border-top: 1px solid #333;
  display: block;
  position: absolute;
  top: 48%;
  left: 0;
}

#countdown .labels {
  width: 100%;
  height: 25px;
  text-align: center;
  /* position: absolute;
  bottom: 10px; */
}

#countdown .labels li {
  width: 102px;
  font: bold 15px "Droid Sans", Arial, sans-serif;
  color: #0045ed;
  text-shadow: 1px 1px 0px #000;
  text-align: center;
  text-transform: uppercase;
  display: inline-block;
  margin-top: 10px;
}

@media (min-width: 768px)

{
.md2 .modal-dialog {
    width: 700px;
    margin: 30px auto;
    margin-top: 109px;
}
}

.map-input {z-index: 99999999 !important;}

.pac-container {
    background-color: #FFF;
    z-index: 20;
    position: fixed;
    display: inline-block;
    float: left;
}
.modal{
    z-index: 20;   
}
.modal-backdrop{
    z-index: 10;        
}​

</style>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->

<script src="https://maps.google.com/maps/api/js?key=AIzaSyBCclo8cSdTwyFlbfTLT_u8y8_5F9bPuus&libraries=places&callback=initialize"
async
defer
></script>

<script>

function initialize() {
 
 const locationInputs = document.getElementsByClassName("map-input");
 const autocompletes = [];
 const geocoder = new google.maps.Geocoder();
 for (let i = 0; i < locationInputs.length; i++) {
 const input = locationInputs[i];
 const fieldKey = input.id.replace("-input", "");
 
 const isEdit =
 document.getElementById(fieldKey + "-latitude").value != "" &&
 document.getElementById(fieldKey + "-longitude").value != "";
 
 const latitude =
 parseFloat(
 document.getElementById(fieldKey + "-latitude").value
 ) || -33.8688;
 const longitude =
 parseFloat(
 document.getElementById(fieldKey + "-longitude").value
 ) || 151.2195;
 
 const autocomplete = new google.maps.places.Autocomplete(input);
 autocomplete.key = fieldKey;
 autocompletes.push({ input: input, autocomplete: autocomplete });
 }
 
 for (let i = 0; i < autocompletes.length; i++) {
 const input = autocompletes[i].input;
 const autocomplete = autocompletes[i].autocomplete;
 
 google.maps.event.addListener(autocomplete,"place_changed",function () {
     $("#rangeSlide").attr("disabled", false);
 const place = autocomplete.getPlace();
 console.log(place);
 geocoder.geocode({ placeId: place.place_id }, function (
     results,
     status
 ) {
     if (status === google.maps.GeocoderStatus.OK) {
         const lat = results[0].geometry.location.lat();
         const lng = results[0].geometry.location.lng();
         setLocationCoordinates(autocomplete.key, lat, lng);
         $("#statusLoc").val(1);
     }
 });
 
 if (!place.geometry) {
     window.alert(
         "No details available for input: '" +
             place.name +
             "'"
     );
     input.value = "";
     return;
 }
 }
 );
 }
 }
 
 
 function setLocationCoordinates(key, lat, lng) {
 const latitudeField = document.getElementById(key + "-" + "latitude");
 const longitudeField = document.getElementById(key + "-" + "longitude");
 latitudeField.value = lat;
 longitudeField.value = lng;
 }

</script>

<script>
  function myFunction() {
    document.getElementById("myVideo").controls = false;
  }
  </script>


</body> 
</html>

