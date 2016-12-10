<?php include('inc/header.php'); ?>
<?php
if (isset($_GET['id'])){
    $query = "DELETE FROM movies WHERE id = ?";
    $statement = $moviesDb->prepare($query);
    $statement->bind_param('i', $_GET['id']);
    if ($statement->execute()){
        header('Location: http://kwun.aplstudent.com/movies/');
    }
}
?>
<?php include('inc/footer.php'); ?>