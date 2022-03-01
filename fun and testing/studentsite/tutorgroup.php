<div class="container-fluid">
  <div class="row">
<?php
// checks from post form if there is search results. if not, sends you to index.php
if(!isset($_GET['tutorgroupID'])) {
  header("Location: index.php");
} else {
  // grabs the tutor code and id
  $tutorcode = $_GET['tutorcode'];
  $tutorgroupID = $_GET['tutorgroupID'];
  // makes a query from the student table using the id, only grabbing students with a tutor group id that matches
  $tutor_sql = "SELECT * FROM student WHERE tutorgroupID=$tutorgroupID";
  $tutor_qry = mysqli_query($dbconnect, $tutor_sql);

  if(mysqli_num_rows($tutor_qry)==0) {
    // if no results, display this
    echo "<p class='display-1'>No students in $tutorcode</p>";
  } else {
    // if yes results, add to assiciative array and add a header for the tutorcode
    $tutor_aa = mysqli_fetch_assoc($tutor_qry);
    echo "<h1 class='display-1'>$tutorcode</h1>";

    do {
      // print each student's name and photo
      $firstname = $tutor_aa['firstname'];
      $lastname = $tutor_aa['lastname'];
      $photo = $tutor_aa['photo'];
      ?>
      <div class="col-12 col-md-4 mt-4">
        <div class="card p-3 bg-mint">
          <?php
          echo "<img src='images/$photo' class='card-img-top'>";
          echo "<p>$firstname $lastname</p>";
          ?>
        </div>
      </div>
      <?php

    } while ($tutor_aa = mysqli_fetch_assoc($tutor_qry));
  }
}

?>
  </div>
</div>