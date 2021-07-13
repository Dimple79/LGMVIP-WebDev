<?php
session_start();
				
				if(isset($_SESSION['uid']))
				{
					echo "";					
				}
				else
				{
					header('location: ../login.php');
				}
				
?>
<html>
<head>
    <title>Admin Dashboard</title>
<link rel="stylesheet" href="../csss/admindash.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
          
            <ul class="main-nav" animate slideInDown>
                <li><a href="../index.php">HOME</a></li>
                <li><a href="aboutus.php">ABOUT</a></li>
                <li><a href="contactus.php">CONTACT</a></li>
                <li class="logout"><a href="logout.php">LOGOUT</a></li>
                
          </ul>
        </div>
      </nav>
      <div class="main-content-header">
        <h1>Admin Dashboard</h1>
       <h3><a href="addmark.php">-> Add Marks of Student </a></h3>
       <h3><a href="updatemark.php">-> Update Student Marks </a></h3>
       <h3><a href="deleteform.php">-> Delete the Marks of Student </a></h3>
       <h3><a href="allstudentdata.php">-> Data of all Students </a></h3>
       <h3><a href="usermassage.php">-> Messages by Student</a></h3>
      </div>
    </header>
    
</body>
</html>