<?php
 // checks from post form if there is search results. if not, sends you to search.php (which doesnt exist? maybe set to home/index.php)
  if((!isset($_POST['tutorname'])) || (!isset($_POST['tutorcode']))) {
    header("Location: index.php?page=home");
  }
  // assigns contents of the search into a variable
  $tutorname = $_POST['tutorname'];
  $tutorcode = $_POST['tutorcode'];

  // makes a query based off the search
  $insert_sql = "INSERT INTO tutorgroup (tutor, tutorcode) VALUES ('$tutorname', '$tutorcode')";

  $insert_qry = mysqli_query($dbconnect, $insert_sql);
?>

SUCCESS