<?php
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/Session.php');
	include_once ($filepath.'/../lib/Database.php');
	include_once ($filepath.'/../helpers/Format.php');
class User{
	private $db;
	private $fm;
	public function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}

	public function userRegistration($name,$username,$password,$email){
		$name      = $this->fm->validation($name);
		$username = $this->fm->validation($username);
		$password = $this->fm->validation($password);
		$email    = $this->fm->validation($email);
		
		$name        = mysqli_real_escape_string($this->db->link, $name);
		$username = mysqli_real_escape_string($this->db->link, $username);
		//$password = mysqli_real_escape_string($this->db->link, md5($password));
		$email       = mysqli_real_escape_string($this->db->link, $email);
		if(($name == "" )|| ($username == "") || ($password== "") || ($email== "")){
			echo "<span class='error'>Fields Must Not be Empty!!</span>";
			exit();
		}else if(filter_var($email,FILTER_VALIDATE_EMAIL) === false){
			echo "<span class='error'>Invalid Email Address</span>";
			exit();
			
		}else{
			$chkquery = "select * from tbl_user where email = '$email'";
			$chkresult = $this->db->select($chkquery);
			if($chkresult != false){
				echo "<span class='error'>Email Address Already Exist!!</span>";
				exit();
			}else{
				$password = mysqli_real_escape_string($this->db->link, md5($password));
				$query = "insert into tbl_user(name, username,password,email) values('$name','$username','$password','$email')";
				$inserted_row = $this->db->insert($query);
				if($inserted_row){
					echo "<span class='success'>Registration Successfully Complete</span>";
					exit();
				}else{
					echo "<span class='error'>Error..Not Registered!!!</span>";
					exit();
				}
			}
		}

		}
		
			public function userLogin($email,$password){
			$email = $this->fm->validation($email);
			$password = $this->fm->validation($password);
			$email = mysqli_real_escape_string($this->db->link, $email);
			if($email== "" || $password== ""){
				echo "empty";
				exit();
		}else{
			$password = mysqli_real_escape_string($this->db->link, md5($password));
			$query = "select * from tbl_user where email='$email' and password='$password'";
			$result = $this->db->select($query);
			if($result != false){
				$value = $result->fetch_assoc();
				if($value['status'] =='1'){
					echo "disable";
				exit();
				}else{
					session::init();
					Session::set("login", true);
					Session::init("userid", $value['userid']);
					Session::init("username", $value['username']);
					Session::init("name", $value['name']);
				}
			}else{
				echo "error";
				exit();
			}
		}
		}
		public function getUserData($userid){
			$query = "select * from tbl_user where userid = '$userid'";
			$result = $this->db->select($query);
			return $result;
		}
		public function getAlluser(){
			$query = "select * from tbl_user order by userid desc";
			$result = $this->db->select($query);
			return $result;
		}
		
		public function updateUserData($userid, $data){
		$name        = $this->fm->validation($data['name']);
		$username = $this->fm->validation($data['username']);
		$email       = $this->fm->validation($data['email']);
		
		$name        = mysqli_real_escape_string($this->db->link, $name);
		$username = mysqli_real_escape_string($this->db->link, $username);
		$email       = mysqli_real_escape_string($this->db->link, $email);
		
		$query = "update tbl_user set name = '$name ', username = '$username', email = '$email' where userid = '$userid'";
			$updated_row = $this->db->update($query );
			if($updated_row){
				$msg = "<span class = 'success'>User Data Updated!!!</span>";
				return $msg;
			}
			else{
				$msg = "<span class = 'error'>User Data Not Updated!</span>";
				return $msg;
			}
		}
		public function disableUser($userid){
			$query = "update tbl_user set status = '1' where userid = '$userid'";
			$updated_row = $this->db->update($query );
			if($updated_row){
				$msg = "<span class = 'success'>User Disabled!!!</span>";
				return $msg;
			}
			else{
				$msg = "<span class = 'error'>User Not Disabled</span>";
				return $msg;
			}
		}
		public function enableUser($userid){
			$query = "update tbl_user set status = '0' where userid = '$userid'";
			$updated_row = $this->db->update($query );
			if($updated_row){
				$msg = "<span class = 'success'>User Enabled!!!</span>";
				return $msg;
			}
			else{
				$msg = "<span class = 'error'>User Not Enabled</span>";
				return $msg;
			}
		}
		public function deleteUser($userid){
			$query = "delete from tbl_user where userid = '$userid'";
			$deldata = $this->db->delete($query);
			if($deldata){
				$msg = "<span class = 'success'>User Removed!!!</span>";
				return $msg;
			}
			else{
				$msg = "<span class = 'error'>Error....User Not Removed</span>";
				return $msg;
			}
			
		}
}
?>