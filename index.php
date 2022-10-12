<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
       <script src="script.js"></script>
       <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
    <title>Weather </title>
</head>
<body>
    <section class="vh-100" style="background-color: #C1CFEA;">
  <div class="container py-5 h-100">

    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-8 col-lg-6 col-xl-4">
      <h2>Wheather</h2>
        <h3 class="mb-4 pb-2 fw-normal">Check the weather forecast</h3>
        <?php
$city ="";
if(isset($_POST['search'])){
 $city=$_POST['city'];
}
?>
        <div style="display:inline-block;" class="input-group rounded mb-3">
            <form action="" method="POST">
          <input style="width:75%;float:left;" type="text" name="city" class="form-control rounded" placeholder="City" aria-label="Search"
            aria-describedby="search-addon"/>
          <a style="float:right;" href="#!" type="button"><span class="input-group-text border-0 fw-bold" id="search-addon"><input style="border-style: none;" type ="submit" value="Search" name ="search"></span></a>
          <!--<a href="#!" type="button">
            <span class="input-group-text border-0 fw-bold" id="search-addon">
              Check!
            </span>
          </a>-->
            </form>
        </div>

        <!--<div class="mb-4 pb-2">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
              value="option1" checked />
            <label class="form-check-label" for="inlineRadio1">Celsius</label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
              value="option2" />
            <label class="form-check-label" for="inlineRadio2">Farenheit</label>
          </div>
        </div>-->
        <div  style="background-image: url('img/clouds.gif'" class="card shadow-0 border">
          <div class="card-body p-4">
            <h4 style="font-size: 2.5rem;" class="mb-1 sfw-normal"><?php echo"  $city  " ?></h4>
            <p style="font-size: 60px;"><span class="mb-2"><strong></strong></span>°C</p>
            <p>Feels like: <span class="feels_like"><strong></strong></span>°C</p>
            <p>Max:<span class="temp_max"><strong></strong></span> °C, Min:<span class="temp_min"><strong></strong></span>°C</p>
            <div class="flex-row align-items-center">
              <p class="mb-0 me-4"><span class="weather"></span></p>
              <img class="icon">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
 </div>
</body>
</html>
<script>
    var city = "<?php echo" + $city + " ?>";

$.getJSON(
  "https://api.openweathermap.org/data/2.5/weather?q=" +
    city +
    "&units=metric&appid=e2b4ce727eb0ad0c2ade569f786357c9",
  function (data) {
    console.log(data);
    var icon =
      "https://api.openweathermap.org/img/w/" + data.weather[0].icon + ".png";

    var temp = Math.floor(data.main.temp);
    var weather = data.weather[0].main;
    var feels = Math.floor(data.main.feels_like);
    var temp_max = Math.floor(data.main.temp_max);
    var temp_min = Math.floor(data.main.temp_min);

    $(".icon").attr("src", icon);
    $(".weather").append(weather);
    $(".mb-2").append(temp);
    $(".feels_like").append(feels);
    $(".temp_max").append(temp_max);
    $(".temp_min").append(temp_min);
    
  }
);
</script>