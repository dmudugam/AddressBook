<?php

session_start();
if(!isset($_SESSION["sess_user"])){
  header("location:Login.php");
}else{

?>

<!DOCTYPE html>
<!--
Template Name: Edgpress
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->

<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left; background-color: black; font-size: 14px;}
</style>
<title>Address Book</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->


<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <h1><a href="../index.php">Address Book</a></h1>
    <p>Never been easier to save Contacts</p>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <nav id="mainav" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul class="clear">
      <li><a href="Home.php">Home</a></li>
      <li><a href="Addentry.php">Add Entry</a></li>
      <li ><a href="Addphone.php">Add Telephone</a></li>
       <li ><a href="Deleteentry.php">Delete Entry</a></li>
        <li > <a href="Deletephone.php">Delete Phone</a></li>
         <li ><a href="Modifyentry.php">Update</a></li>
         <li><a href="search.php">Search</a></li>
           <li class="active"><a href="Listentries">List</a></li>
           <li><a href="Logout.php">Logout</a></li>
        
          
         
    </ul>
    <a href="#"><p align="right" style="color: #05FED5">Hello, <?php echo $_SESSION['user']; ?></p></a>
    <!-- ################################################################################################ -->
  </nav>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div style="background-image:url('../images/demo/backgrounds/05.png');">
  <section id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul>
      <li><a href="Home.php">Home</a></li>
      <li><a href="Listentries.php">List</a></li>
    </ul>
    <!-- ################################################################################################ -->
    <h6 class="heading">List</h6>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div style="background-image:url('../images/demo/backgrounds/05.png'); height: 100%;>
<div class="wrapper row3"  >
<main class="hoc container clear" > 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content" "> 
      <!-- ################################################################################################ -->
        
        
          </div>
          <div>
         <?php
    $sql = "SELECT * FROM addressbook";
    $link = mysqli_connect('localhost','root','','dineth');
    $data = mysqli_query($link,$sql);
    echo mysqli_error($link);
    echo '<table>';

    
      
    ?>
    <table>
    <tr>
      <th>First Name</th>
      <th>Last  Name</th>
      <th>Address</th>
      <th>Mobile Number</th>
      <th>Land Number</th>
      <th>Additional Mobile Number</th>
      <th>Additional Land Number</th>
    </tr>
   <?php while ($output = mysqli_fetch_array($data)) { ?>
    <tr>
        <td><?php echo $output['fname']; ?> </td>
        <td> <?php echo $output['lname']; ?> </td>
        <td> <?php echo $output['address']; ?> </td>
        <td> <?php echo $output['mobilenumber']; ?> </td>
        <td> <?php echo $output['landnumber']; ?> </td>
        <td> <?php echo $output['addmobile']; ?> </td>
        <td> <?php echo $output['addland']; ?> </td>
      
      <?php
    }
    ?>
    </table>
       
           
           
          </div>
       
      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="#">Dineth</a></p>
    <p class="fl_right">Powered by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">NIBM</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>

</html>
<?php
}
?>