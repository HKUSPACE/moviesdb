<?php
$hostname = 'localhost';
$username = 'movie_lover';
$password = 'vt4UzeLUNP4mrSPJ';
$database = 'movies_db';

$moviesDb = new mysqli($hostname, $username, $password, $database);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Movie Database</title>
        
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <ul class="nav navbar-nav">
                    <li><a href="/movies/">Home</a></li>
                    <li><a href="/movies/create.php">Add New Movie</a></li>
                </ul>
            </nav>
            <h1>Movie Database</h1>