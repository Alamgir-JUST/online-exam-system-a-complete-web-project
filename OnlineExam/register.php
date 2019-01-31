<?php
	include 'inc/header.php';
?>
<style>
.segment img{
 height: 150px;
margin-left: 6px;
padding-top: 20px;
width: 350px;
}
</style>
<div class="main">
<h1>Online Exam System - User Registration</h1>
	<div class="segment" style="margin-right:30px;">
		<img src="img/regi.png"/>
	</div>
	<div class="segment">
	<form action="" method="post">
		<table>
		<tr>
           <td>Name</td>
           <td><input type="text" name="name" id = "name"></td>
         </tr>
		<tr>
           <td>Username</td>
           <td><input name="username" type="text" id="username"></td>
         </tr>
         <tr>
           <td>Password</td>
           <td><input type="password" name="password" id = "password"></td>
         </tr>
         
         <tr>
           <td>E-mail</td>
           <td><input name="email" type="text" id = "email"></td>
         </tr>
         <tr>
           <td></td>
           <td style="text-align: center;font-size: 25px;"><input type="submit" id="regsubmit" value="Signup Now"></td>
         </tr>
       </table>
	   </form>
	   <p>Already Registered ? <a href="index.php">Login</a> Here</p>
	   <span id = "state"></span>
	</div>
</div>
<?php include 'inc/footer.php'; ?>