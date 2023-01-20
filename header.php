<script>
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
  </script>

<div class="header">
<img src="afbeeldingen/jansma.JPG" alt="jansma" style="width: 100%;">
  <div class="topnav" id="myTopnav">
  <a class="active" href="index.php"><i class="material-icons">home</i></a>
  <a href="diensten.php">diensten</a>
  <a href="producten.php">producten</a>
  <a href="contactpagina.php">contactpagina</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>