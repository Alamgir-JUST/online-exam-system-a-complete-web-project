
<?php include 'inc/header.php'; ?>
<?php 
	Session::checkSession();
	
	$question = $exm->getQuestion();
	$total       = $exm->getTotalRows();
?>
<style>
.starttest p{
	font-family: "Times New Roman", Georgia, Serif;
		font-size: 23px;
		color:#030709;
}
.starttest ul{
	font-family: "Times New Roman", Georgia, Serif;
		font-size: 23px;
		color:#2d4756;
}
.starttest h2{
	font-family: "Times New Roman", Georgia, Serif;
		font-size: 25px;
		color:#121069;
}
.starttest h3{
	font-family: "Times New Roman", Georgia, Serif;
		font-size: 23px;
		color:#2d4756;
}
</style>
<div class="main">
<h1>Welcome to Online Exam - Start Now</h1>
	<div class="starttest">
	<h2>Test your knowledge</h2>
	<p>This is multiple system choice quize to test your knowledge</p>
	<ul>
		<li><strong>Number of Questions : </strong> <?php echo $total; ?></li>
		<li><strong>Question Type : </strong> Multiple Choice</li>
	</ul>
	<h3>You will get only 60 seconds for each question.</h3>
	<a href="test.php?q=<?php echo $question['quesNo']; ?>">Start Test</a>	
	</div>
  </div>
<?php include 'inc/footer.php'; ?>