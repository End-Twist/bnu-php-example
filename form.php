<?php

include("_includes/config.inc");
include("_includes/dbconnect.inc");
include("_includes/functions.inc");


// check logged in
if (isset($_SESSION['id'])) {

   echo template("templates/partials/header.php");
   echo template("templates/partials/nav.php");

   // if the form has been submitted
   if (isset($_POST['submit'])) {


      $password = password_hash($_POST['txtpasswrd'],PASSWORD_DEFAULT);

      
      $sql = "INSERT INTO `student` (`studentid`, `password`, `dob`, `firstname`, `lastname`, `house`, `town`, `county`, `country`, `postcode`,`image`) VALUES 
         ('{$_POST['txtID']}', '$password', '{$_POST['txtDOB']}','{$_POST['txtfirstname']}','{$_POST['txtlastname']}', '{$_POST['txthouse']}', '{$_POST['txttown']}', '{$_POST['txtcounty']}', '{$_POST['txtcountry']}', '{$_POST['txtpostcode']}','{$_POST['img']}')";
      //posts data inputted by the user into the database using a SQL query.
      $result = mysqli_query($conn,$sql);
      //displays the data through a sql query.

      $data['content'] = "<p>Your details have been updated</p>";

   }
   else {
      $data['content'] = <<<EOD

   <h2>Student Details</h2>
   <form class="form-inline" name="frmdetails" action="" method="post" >
   Student ID :
   <input name="txtID" type="text"/><br/>
   Password :
   <input name="txtpasswrd" type="password" type ="text"/><br/>
   Date of Birth :
   <input type = 'date' name="txtDOB" type="text"/><br/>
   First Name :
   <input name="txtfirstname" type="text"/><br/>
   Surname :
   <input name="txtlastname" type="text"/><br/>
   Number and Street :
   <input name="txthouse" type="text"/><br/>
   Town :
   <input name="txttown" type="text"/><br/>
   County :
   <input name="txtcounty" type="text"/><br/>
   Country :
   <input name="txtcountry" type="text" /><br/>
   Postcode :
   <input name="txtpostcode" type="text"/><br/>
   Image:
   <input name='img' type='file' accept='image/jpeg' class='form-control'/>
   <input type="submit" class="btn btn-success" value="Submit" name="submit"/>
   </form>

EOD;

   }
   // render the template
   echo template("templates/default.php", $data);

} else {
   header("Location: index.php");
}

echo template("templates/partials/footer.php");

?>