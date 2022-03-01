<nav class="navbar navbar-expand-lg navbar-light bg-stac p-3">
  <div class="container-fluid text-light">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php
        // query database
        $tutor_sql = "SELECT * FROM tutorgroup";
        $tutor_qry = mysqli_query($dbconnect, $tutor_sql);
        $tutor_aa = mysqli_fetch_assoc($tutor_qry);
        ?>
        <li class="nav-item p-0" style="width: auto;">
          <a href="index.php" class="btn link-light"><h5>St Andrew's College</h5></a>
        </li>

        <li class="nav-item p-0" style="width: auto;">
          <div class="dropdown">
            <button class="btn dropdown-toggle text-light text-start" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Tutor Groups
            </button>

            <ul class="dropdown-menu bg-stac" aria-labelledby="dropdownMenuButton1">
              <?php
                do {
                  //  assign variables from query results
                  $tutorgroupID = $tutor_aa['tutorgroupID'];
                  $tutorcode = $tutor_aa['tutorcode'];

                  //  adds links for each tutor group it detects
                  echo "<li><a class='dropdown-item text-light' href='index.php?page=tutorgroup&tutorgroupID=$tutorgroupID&tutorcode=$tutorcode'>$tutorcode</a></li>";

                  } while ($tutor_aa = mysqli_fetch_assoc($tutor_qry))
              ?>
            </ul>
          </div>
        </li>
      </ul>
        <form class="d-flex" action="index.php?page=searchresults" method="post">
          <div class="input-group">
            <input class="form-control" required type="text" name="search" placeholder="Student search">
            <button class="btn btn-secondary" type="submit" id="button-addon2"><i class="bi bi-search"></i></button>
          </div>
        </form>
    </div>
  </div>
</nav>