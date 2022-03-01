<div class="container-fluid">
  <div class="row">
<?php
// checks from post form if there is search results. if not, sends you to search.php (which doesnt exist? maybe set to home/index.php)
  if(!isset($_POST['search'])) {
    header("Location: search.php");
  }
  // assigns contents of the search into a variable
  $search = $_POST['search'];

  // makes a query based off the search
  $result_sql = "SELECT * FROM student WHERE firstname LIKE '%$search%' OR lastname LIKE '%$search%'";

  // put query results into variable
  $result_qry = mysqli_query($dbconnect, $result_sql);

  if(mysqli_num_rows($result_qry)==0) {
      // if no results... print no results found
      echo "<h1>No results found</h1>";
    } else {
      // if yes results... put results into associative array
      $result_aa = mysqli_fetch_assoc($result_qry);

      do {
        // for each entry in the associative array, assign these variables
        $firstname = $result_aa['firstname'];
        $lastname = $result_aa['lastname'];
        $photo = $result_aa['photo'];
        ?>
        <div class="col-12 col-md-4 mt-4">
          <div class="card p-3 bg-mint">
          <!-- and then put them into the page with html -->
          <img src="images/<?php echo $photo; ?>" class="card-img-top" alt="">
          <p><?php echo "$firstname $lastname"; ?></p>
          </div>
        </div>
      <?php
        } while ($result_aa = mysqli_fetch_assoc($result_qry));


  }

 ?>
  </div>
</div>