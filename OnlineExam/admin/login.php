<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/loginheader.php');
	include_once ($filepath.'/../classes/Admin.php');
	$ad = new Admin();
?>
<?php 
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$adminData = $ad->getAdminData($_POST);
	}
?>
<style>
.main h1{
	font-family: "Times New Roman", Georgia, Serif;
		font-size: 35px;
		color:#5e0c17;
}
.adminlogin{
	font-family: "Times New Roman", Georgia, Serif;
		font-size: 20px;
		color:#040303;
}
</style>
<div class="main">
<h1>Admin Login</h1>
<div class="adminlogin">
	<form action="" method="post">
		<table>
			<tr> 
				<td>Username</td>
				<td><input type="text" name="adminUser" required/></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="adminPass" required/></td>
			</tr>
			<tr>
				<td></td>
				<td style="text-align: center;font-size: 25px;"><input type="submit" name="login" value="Login Now"/></td>
			</tr>
			<tr>
				<td colspan="2">
				<?php
				if(isset($adminData)){
					echo $adminData;
				}
				?>
				</td>
			</tr>
		</table>
	</from>
</div>
</div>
<?php include 'inc/footer.php'; ?>