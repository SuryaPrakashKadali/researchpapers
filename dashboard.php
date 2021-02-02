<?php
include("auth_session.php");
include("db.php");
if(isset($_GET['did'])) {
	$did = $_GET['did'];
	//delete query
	//header same file
	$query_delete = "DELETE FROM `publications` WHERE pid='$did';";
	$result_delete   = mysqli_query($con, $query_delete);
	header("Location: dashboard.php");
}		
?>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
	<?php include("includes/header.php") ?>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are now in user dashboard page.</p>
    
	<div>
	<table>
	<tr> 
		<td>Title </td>
		<td>View</td>
		<td>Delete</td>
		
		</tr>
	<?php 
	
		if(isset($_SESSION['username'])) {
		$username = $_SESSION['username'];
        $query    = "SELECT * FROM `publications` WHERE emp_id='$username'";
		$res  = mysqli_query($con,$query);
		if(mysqli_num_rows($res)==0)
		{
			$message= "No Publictions";
			
			
		}else { while($row = mysqli_fetch_assoc($res)) { 

		?>
		
		<tr> 
		<td><?php  echo $row['paper_title'];?> </td>
		<td><a href="publishdataentry.php?pid=<?php echo $row['pid'];?>">Update</a><td>
		<td><a href="dashboard.php?did=<?php echo $row['pid'];?>">Delete</td>
		</tr>
		
		<?php }} }	?>
		
		</table>
	</div>
	</div>
</body>