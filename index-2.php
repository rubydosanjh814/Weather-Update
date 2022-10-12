<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mousum App Updated</title>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    <script src="script.js"></script>
      
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <div class="weather-container">
    <h2>Weather Details </h2>
    <p class="city-name"></p>
<?php
$city ="";
if(isset($_POST['search'])){
 $city=$_POST['city'];
}
?>
 <form action="" method="POST">
               <input type="text" name="city" placeholder="Enter City Name">
               <input  type ="submit" value="Search" name ="search">
               </form>
    <p class="cityname"></p>
    <img class="icon">
    <p class="weather"></p>
    <span class="temp"> </span> °C
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
    

    $(".icon").attr("src", icon);
    $(".weather").append(weather);
    $(".temp").append(temp);
    $(".cityname").append(cityname);


  }
);

    </script>