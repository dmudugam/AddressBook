<?php

session_start();
if(isset($_SESSION["sess_user"])){
  header("location:Home.php");
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
    select 
    {
        width:200px;
        color: black;
    }
    span 
    {
      color: red;
    }
    input
    {
      color: black;
    }
</style>
</head>
<body id="top">
<!-- ################################################################################################ -->

<?php
if(isset($_POST['submit']))
{
  $a = $_POST['fname'];
  $b = $_POST['name'];
  $c = md5($_POST['pw']);

  $sql = "INSERT INTO signup(Name,Username,Password) VALUES('$a','$b','$c')";
  ?>
 <p style="color: gold;"><?php echo("Successfully Signed Up"); ?> </p><?php

  $link = mysqli_connect('localhost','root','','dineth');
  $done = mysqli_query($link,$sql);
  echo mysqli_error($link);
}
?>

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
      <li><a href="../index.php">Home</a></li>
      <li><a href="Login.php">Login</a>
        
      </li>
      <li class="active"><a href="Signup.php">Signup</a>
        
          </li>
         
    </ul>
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
      <li><a href="../index.php">Home</a></li>
      <li><a href="Signup.php">Signup</a></li>
    </ul>
    <!-- ################################################################################################ -->
    <h6 class="heading">Signup</h6>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div style="background-image:url('../images/demo/backgrounds/05.png'); height: 500px;>
<div class="wrapper row3"  >
<main class="hoc container clear" > 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content" "> 
      <!-- ################################################################################################ -->
      <center>
      <h2>Signup</h2>
      <form action="#" method="post">
      <table>
      <tr>
        <td><label for="name">Name<span>*</span></label></td>
        <td><input type="text" name="fname" id="fname" value="" size="22" required></td>
      </tr>
      <tr>
        <td><label for="name">Userame <span>*</span></label></td>
        <td><input type="text" name="name" id="name" value="" size="22" required></td>
      </tr>
      <tr>
        <td> <label for="email">Password <span>*</span></label></td>
        <td><input type="password" name="pw" id="pw" value="" size="22" required></td>
      </tr>
      <tr>
        <td><input type="submit" name="submit" value="Signup"></td>
        <td> <input type="reset" name="reset" value="Reset"></td>
      </tr>
        
      </table>
      </form>
      
</center>             
             
        
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