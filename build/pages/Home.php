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
<title>Address Book</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style type="text/css">

h5
{
  color: red;
  
}
  
</style>

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
      <li class="active"><a href="Home.php">Home</a></li>
      <li ><a href="Addentry.php">Add Entry</a></li>
      <li><a href="Addphone.php">Add Telephone</a></li>
       <li><a href="Deleteentry.php">Delete Entry</a></li>
        <li><a href="Deletephone.php">Delete Phone</a></li>
         <li><a href="Modifyentry.php">Update</a></li>
          <li><a href="search.php">Search</a></li>
           <li><a href="Listentries.php">List</a></li>
           <li><a href="Logout.php">Logout</a></li>
           
        
          
         
   </ul>
   <a href="#"><p align="right" style="color: #05FED5" >Hello, <?php echo $_SESSION['user']; ?></p></a>

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
     
    </ul>
    <!-- ################################################################################################ -->
    <h6 class="heading">Home</h6>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div style="background-image:url('../images/demo/backgrounds/05.png'); height: 600px;>
<div class="wrapper row3"  >
<main class="hoc container clear" > 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <h6>Overview</h6><br>
    <p>The Address Book is an application that has a local database and user interface for finding and editing information about people, making it possible to query network directory servers using Lightweight Directory Access Protocol. Other applications can also use the Address Book.</p><br>
    <h6>Features</h6><br>
    <p><ul>
      <li>Add Contact</li>
      <li>Add Additional Phone Numbers</li>
      <li>Delete Contact</li>
      <li>Delete Phone Numbers</li>
      <li>Update Details</li>
      <li>Search Contacts</li>
      <li>List View</li>
    </ul></p>
    <div class="content" "> 
      <!-- ################################################################################################ -->
      <center>
       
        
          </div>
          <div>
            
           
           
          </div>
        </form>
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