<?php include('inc/header.php'); ?>
<?php
    //print_r($_POST);
if (isset($_POST['name'])){   
    $name = $_POST['name'];
    $description = $_POST['description'];
    $year = $_POST['year'];
    $director = $_POST['director'];
    $country = $_POST['country'];
    $type = $_POST['type'];
    $duration = $_POST['duration'];
    
    $statement = $moviesDb->prepare("INSERT INTO movies (name, description, year, director, type, country, duration) VALUES (?, ?, ?, ?, ?, ?, ?)");
    
    $statement->bind_param('ssssssi', $name, $description, $year, $director, $country, $type, $duration);
    
    if (!$statement->execute()){
        echo '<div class="alert alert-danger" role="alert">Execute failed: (' . $statement->errno . ') ' . $statement->error.'</div>';
    }
    else{
        echo '<div class="alert alert-success" role="alert">New movie is added!</div>';
    }
}
?>
<form method="post" action="create.php">
    <div class="form-group">
        <label for="movie-name">Name</label>
        <input type="text" name="name" class="form-control" id="movie-name" />
    </div>
    <div class="form-group">
        <label for="movie-desc">Description</label>
        <input type="text" name="description" class="form-control" id="movie-desc" />
    </div>
    <div class="form-group">
        <label for="movie-year">Year</label>
        <input type="text" name="year" class="form-control" id="movie-year" />
    </div>
    <div class="form-group">
        <label for="movie-director">Director</label>
        <input type="text" name="director" class="form-control" id="movie-director" />
    </div>
    <div class="form-group">
        <label for="movie-country">Country</label>
        <input type="text" name="country" class="form-control" id="movie-country" />
    </div>
    <div class="form-group">
        <label for="movie-type">Type</label>
        <input type="text" name="type" class="form-control" id="movie-type" />
    </div>
    <div class="form-group">
        <label for="movie-duration">Duration</label>
        <input type="number" name="duration" class="form-control" id="movie-duration" />
    </div>
    <button type="submit" class="btn btn-primary">Add Movie</button>
</form>
<?php include('inc/footer.php'); ?>