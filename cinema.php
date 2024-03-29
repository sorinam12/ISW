<?php
session_start();

if ( isset( $_SESSION['username'] ) ) {

} else {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:description" content="Watch free 2022 newest Releases movies & series on LookMovie in HD Quality without Ads." />
    <link rel="icon" href="https://lookmovie.la/favicon.ico" type="image/icon" />
    <link rel="stylesheet" href="styleCinem.css" />
    <script src="https://kit.fontawesome.com/4e948b40f1.js" crossorigin="anonymous"></script>
    <title>LookMovie | Watch Any Latest Movie for Free</title>
</head>

<body>
    <header>
        <img class="logo" src="logo.png" alt="Logo" />
        <a href="map.php" class="button">Map</a>
        <a href="index.php" class="button">Log out</a>
        <form id="form">
            <input type="text" placeholder="Search Any Movie" autocomplete="off" id="search" class="search" /><i class="fas fa-search"></i>
        </form>
 
    </header>

    <div id="tags"></div>
    <div id="myNav" class="overlay">
        <!-- Button to close the overlay navigation -->
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

      <!-- Overlay content -->
      <div class="overlay-content" id="overlay-content"></div>

      <a href="javascript:void(0)" class="arrow left-arrow" id="left-arrow"
        ><i class="fas fa-arrow-left"></i
      ></a>

        <a href="javascript:void(0)" class="arrow right-arrow" id="right-arrow"><i class="fas fa-arrow-right"></i
      ></a>
    </div>
    <main id="main"></main>
    <div class="pagination">
        <div class="page" id="prev">Previous Page</div>
        <div class="current" id="current">1</div>
        <div class="TotalPages" id="TotalPages">  100</div>
        <div class="page" id="next">Next Page</div>
    </div>
    <script src="script_Cinema.js"></script>
</body>

</html>