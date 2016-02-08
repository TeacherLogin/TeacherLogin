<?php
	$_SESSION["SubjectID"]="";
	$_SESSION["ExamID"]="";
	session_destroy();
	header('Location: ExaminationResults.php');
?>