<!DOCTYPE html>
<html>
  <head>
     <!--metadata-->
    <meta charset="utf-8">
    <meta name="description" content="Volume of Right Triangular Prism, with JavaScript">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Ms Raffin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--For favicon on this page-->
     <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
    <link rel="manifest" href="./fav_index/site.webmanifest" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-purple.min.css" />
    <link rel="stylesheet" href="./css/style.css" />
    
    <title>Calculate Sphere Volume</title>
  </head>
  <body>
    <h1>Calculate Sphere Volume</h1>
    <!--enter radius-->
    <form method="post" action="">
      <label for="radius">Enter the radius of the sphere:(cm) </label>
      <input type="number" id="radius" name="radius" step = "any" placeholder="Enter radius here">
      <br>
      <!--calculate button-->
      <button type="submit">Calculate</button>
      <br><br>
      <!--calculate volume-->
      <?php
       if ($_POST) {
          $radius = (float) $_POST['radius'];
          $volume = (4/3) * M_PI * pow($radius, 3);
          $result = round($volume, 2);
          echo "<label for='result'>Result:</label>";
          echo "<input type='text' id='result' name='result' value='$result' placeholder='Volume rounded to the nearest hundredth'>";
        }
      ?>
    </form>
    <!--For image-->
   <br>
	<img src="./images/sphere.jpg" alt="sphere" width="249" height="249"/>
  </body>
</html>
