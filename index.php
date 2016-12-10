<?php include('inc/header.php'); ?>
<?php
function convertDuration($duratin){
    return floor($duratin/60)." h ".($duratin % 60)." min";
}

$query = "SELECT * FROM movies";

$results = $moviesDb->query($query);

?>
        <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>Name</th>
            <th>Decription</th>
            <th>Year</th>
            <th>Director</th>
            <th>Country</th>
            <th>Type</th>
            <th>Duration</th>
            <th colspan="2">Action</th>
        </tr>
<?php
while ($movie = $results->fetch_assoc()){
    echo "<tr>
        <td>".$movie['name']."</td>
        <td>".$movie['description']."</td>
        <td>".$movie['year']."</td>
        <td>".$movie['director']."</td>
        <td>".$movie['country']."</td>
        <td>".$movie['type']."</td>
        <td>".convertDuration($movie['duration'])."</td>
        <td><a class=\"btn btn-info\" href=\"/movies/edit.php?id=".$movie['id']."\">Edit</a></td>
        <td><a class=\"btn btn-danger\" href=\"/movies/delete.php?id=".$movie['id']."\" onclick=\"return confirm('Are you sure?');\">Delete</a></td>
    </tr>";
}
?>
        </table>
        
<?php include('inc/footer.php'); ?>








