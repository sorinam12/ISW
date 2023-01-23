
<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>

    <link rel="stylesheet" type="text/css" href="map2.css" />
    <script src="map1.js"></script>
  </head>

  <body>
    <header>
      <h1>Bine ai venit, <?php echo $_SESSION['username']?>! </h1>
      <h3>Viața bate filmul, dar că să te convingi, vezi cele mai apropiate cinematografe pentru a te bucură de experiență la maxim</h3>
      <br>
      </button> 
    <a class="button" href="cinema.php" role="button">Back</a>
     <!-- <button>  
        <a href = "index.php" class="btn">
        <span class="glyphicon glyphicon-log-out button"></span> LOG OUT 
      </a>
    </button> --> 
    <a class="button" href="index.php" role="button">Log out</a>
    <br><br>
    </header>
    <div id="map"></div>
    <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdhIibhgD14684u3hdnJtLwBW0sZ8M14k&callback=initMap">
  </script>

  </body>
</html>
