<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
	include_once ($filepath.'/../classes/Exam.php');
	$exm = new Exam();
?>
<?php 
	if(isset($_GET['delque'])){
		$quesNo = (int)$_GET['delque'];
		 $delQue = $exm->delQuestion($quesNo);
	}
?>
<style>
	.main h1{
		
		font-family: "Times New Roman", Georgia, Serif;
		font-size: 30px;
		color:#5e0c17;
	}
</style>
<div class="main">
	<h1>Admin Panel - Question List</h1>
	<?php 
		if(isset($delQue)){
			echo $delQue;
		}
	?>
		<div class = "quelist">
			<table class = "tblone">
			<tr>
				<th width = "10%">No</th>
				<th width = " 70%">Questions</th>
				<th width = "20%">Action</th>
			</tr>
	<?php 
	
	$getData = $exm->getQueByOrder();
	 
	if($getData){
		$i = 0;
		while($result = $getData->fetch_assoc()){
			$i++;
	?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $result['ques']; ?></td>
				<td>
					<a onclick = "return confirm('Are you sure to Remove')" href = "?delque=<?php echo $result['quesNo']; ?>">Remove</a>
				</td>
			</tr>
	<?php } } ?>
			</table>
		<div/>
</div>
<?php include 'inc/footer.php'; ?>