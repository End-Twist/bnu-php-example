<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");


   // check logged in
   if (isset($_SESSION['id'])) {

      echo template("templates/partials/header.php");
      echo template("templates/partials/nav.php");

      // Build SQL statment that selects the student
      $sql = "select * from student";

      $result = mysqli_query($conn,$sql);

      $data['content'] .= "<form method='POST' action='delete.php'>";//used for a delete function on a seperate php file. also wraps table in a form

      // prepare page content
      $data['content'] .= "<table border='1'>";//table border
      $data['content'] .= "<tr><th colspan='12' align='center'>Students</th></tr>";//table column span
      $data['content'] .= "<tr><th>Student iD</th><th>DOB</th><th>First Name</th><th>Last Name</th><th>House</th><th>Town</th><th>County</th><th>Country</th><th>Postcode</th><th>Image</th><th>Delete</th>";
      //table headings
      // Display the students within the html table
      while($row = mysqli_fetch_array($result)) {
         //$data['content'] .= "<td></td>";
         $data['content'] .= "<tr><td> $row[studentid]</td>  <td> $row[dob] </td> <td>$row[firstname]</td> <td>$row[lastname]</td> <td>$row[house]</td> <td>$row[town]</td><td>$row[county]</td><td>$row[country]</td> <td>$row[postcode]</td><td><img src='$row[image]'</td>";
         $data['content'] .= "<td> <input type='checkbox' name = 'delete[]' value = '$row[studentid]</td>'>";//used for a checkbox in the table which can be checked to delete data.

      }

      $data['content'] .= "</table>";
      $data['content'] .= "<input type='submit' name='delete' value='Delete'/>";//confirms the input type and name of the button and what it does in the value.
      $data['content'] .= "</form>";//wraps the table in form 



      // render the template
      echo template("templates/default.php", $data);

   } else {
      header("Location: index.php");
   }

   echo template("templates/partials/footer.php");
?>