<?php
  //we include the dbconnect.php code
  include("dbconnect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php
      $navbar_sql = "SELECT firstname, lastname, tutorgroupID FROM student";

      $navbar_qry = mysqli_query($dbconnect, $navbar_sql);

      $navbar_num = mysqli_num_rows($navbar_qry);

      if($navbar_num==0) {
        //if no results are found print a message
        echo "<h1>No results found</h1>";
      } else {

            //3. We organize our results into an associative array
            //Basically we can use the column headings from the database table
            //We use the mysqli_fetch_assoc() function
            $navbar_aa = mysqli_fetch_assoc($navbar_qry);


            //display info
            //this repeats once every time there is a result in my associative array
            ?><div class="container">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Tutor</th>
                        <th scope="col">IQ</th>
                    </tr>
                </thead>
                <tbody><?php
            do {
              $navbar_firstname = $navbar_aa['firstname'];
              $navbar_lastname = $navbar_aa['lastname'];
              $navbar_tutorid = $navbar_aa['tutorgroupID'];
              echo ("<tr><td>$navbar_firstname</td><td>$navbar_lastname</td><td>$navbar_tutorid</td><td>5</td></tr>");

            } while ($navbar_aa = mysqli_fetch_assoc($navbar_qry));
            ?></div><?php
      }
      ?>
    

            </tbody>
        </table>
    </div>
</body>
</html>