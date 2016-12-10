<?php include('inc/header.php'); ?>
<?php

//
// retrieve the row from specific id
//
$movie = array();

if (isset($_GET['id'])){
    $query = "SELECT * FROM movies WHERE id = ?";
    $statement = $moviesDb->prepare($query);
    $statement->bind_param('i', $_GET['id']);
    if (!$statement->execute()){
        echo '<div class="alert alert-danger" role="alert">Execute failed: (' . $statement->errno . ') ' . $statement->error.'</div>';
    }
    else{
        $results = $statement->get_result();
        $movie = $results->fetch_assoc();
        //print_r($movie);
    }
}
//
// retrieve the row from specific id
//


if (isset($_POST['id'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $year = $_POST['year'];
    $director = $_POST['director'];
    $country = $_POST['country'];
    $type = $_POST['type'];
    $duration = $_POST['duration'];
    
    
    $query = "UPDATE movies SET name=?, description=?, year=?, director=?, country=?, type=?, duration=? WHERE id=?";
    $statement = $moviesDb->prepare($query);
    
    $statement->bind_param('ssssssii', $name, $description, $year, $director, $country, $type, $duration, $id);
    
    if (!$statement->execute()){
        echo '<div class="alert alert-danger" role="alert">Execute failed: (' . $statement->errno . ') ' . $statement->error.'</div>';
    }
    else{
        echo '<div class="alert alert-success" role="alert">Movie is saved!</div>';
        
        $movie['id'] = $id;
        $movie['name'] = $name;
        $movie['description'] = $description;
        $movie['year'] = $year;
        $movie['director'] = $director;
        $movie['country'] = $country;
        $movie['type'] = $type;
        $movie['duration'] = $duration;
        
    }
}
?>
<form method="post" action="edit.php">
    <input type="hidden" name="id" value="<?php echo $movie['id']; ?>" />
    <div class="form-group">
        <label for="movie-name">Name</label>
        <input type="text" name="name" class="form-control" id="movie-name" value="<?php echo $movie['name']; ?>"/>
    </div>
    <div class="form-group">
        <label for="movie-desc">Description</label>
        <input type="text" name="description" class="form-control" id="movie-desc" value="<?php echo $movie['description']; ?> "/>
    </div>
    <div class="form-group">
        <label for="movie-year">Year</label>
        <input type="text" name="year" class="form-control" id="movie-year" value="<?php echo $movie['year']; ?> "/>
    </div>
    <div class="form-group">
        <label for="movie-director">Director</label>
        <input type="text" name="director" class="form-control" id="movie-director" value="<?php echo $movie['director']; ?> "/>
    </div>
    <div class="form-group">
        <label for="movie-country">Country</label>
        <input type="text" name="country" class="form-control" id="movie-country" value="<?php echo $movie['country']; ?>"/>
    </div>
    <div class="form-group">
        <label for="movie-type">Type</label>
        <input type="text" name="type" class="form-control" id="movie-type" value="<?php echo $movie['type']; ?> "/>
    </div>
    <div class="form-group">
        <label for="movie-duration">Duration</label>
        <input type="number" name="duration" class="form-control" id="movie-duration" value="<?php echo $movie['duration']; ?>" />
    </div>
    <button type="submit" class="btn btn-primary">Save Movie</button>
</form>
<?php include('inc/footer.php'); ?>