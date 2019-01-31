<?php include 'inc/header.php'; ?>
<?php 
	Session::checkSession();
	$userid = Session::get("userid");
?>
<style>
	.profile {width:530px;margin: 0 auto;border:1px solid #ddd;padding:30px 50px 50px;}
</style>

<div class="main">
<h1>Your Profile</h1>
<div class="profile">
	<form action="" method="post">
	<?php
	$getData = $usr->getUserData($userid);
	if($getData){
		$result = $getData->fetch_assoc();
?>
		<table class="tbl">    
			 <tr>
			   <td>Name</td>
			   <td><input name="name" type="text" value="<?php echo $result['name']; ?>"/></td>
			 </tr>
			   <tr>
			   <td>Username</td>
			   <td><input name="username" type="text" value="<?php echo $result['username']; ?>"/></td>
			 </tr>
			 <tr>
			   <td>Email</td>
			   <td><input name="email" type="text" value="<?php echo $result['email']; ?>"/></td>
			 </tr>
			  <tr>
			  <td></td>
			   <td><input type="submit" value="Update"> </td>
			 </tr>
       </table>
	<?php } ?>
	   </form>
	   </div>
</div>
<?php include 'inc/footer.php'; ?>