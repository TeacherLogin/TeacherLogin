 <?php
 	 
	  $FLAG=false;
      $conn=mysqli_connect("localhost","root","mysql","TeacherLogin");
	  
	  $sql="Select * From login";
	  $result=mysqli_query($conn,$sql);
	       if(mysqli_num_rows($result) > 0 )
		       while($row=mysqli_fetch_assoc($result))
			   {
				   if($_POST['ExamID']=="{$row['ExamID']}" && $_POST['SubjectID']=="{$row['SubjectID']}" && $_POST['PIN']=="{$row['PIN']}")
				     { 
					 	global $FLAG;
				   		$FLAG=true;  
						break;
					 }
			   }
			   if(!$FLAG)
				   echo "Unknown User..!!";
			   else
			   {
				   $status=array("true","true","true","true");
				   if($row['UE']=="0")
				   {
					   $status[0]='disabled="disabled"';
				   }
				   if($row['UEP']=="0")
				   {
					   $status[1]='disabled="disabled"';
				   }
				   if($row['IA']=="0")
				   {
					   $status[2]='disabled="disabled"';
				   }
				   if($row['IAP']=="0")
				   {
					   $status[3]='disabled="disabled"';
				   }
				      echo 'University Exam : '.'<input type="radio" name="categroy"'.$status[0].'/>'; echo '<br/>';
					  echo 'University Exam Practical : '.'<input type="radio" name="categroy"'.$status[1].'/>'; echo '<br/>';
					  echo 'Internal Assessment : '.'<input type="radio" name="categroy"'.$status[2].'/>';  echo '<br/>';	
					  echo 'Internal Assessment Practical : '.'<input type="radio" name="categroy"'.$status[3].'/>'; echo '<br/>';
			   }
?> 