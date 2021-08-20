<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>View Details</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <style>
            body{
                background-image:url(aimg/image5.jpg) ;
                background-size: cover;   
            }
             footer{
                  background-color: black;
                  position: relative;
                  height: 50px;
                  margin-top: -50px;
                  clear: both;
                  color: white;
                 
            }
            .banner_content{
                padding-top: 110px;
                padding-bottom: 300px;
                padding-left: 300px;
                padding-right: 300px;
                
            }
        
        </style>
    </head>
    <body>
        <div>
                <div class="navbar navbar-inverse navbar-fixed-top">
                    <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="customer.html">TSF bank</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                      <li><a href="customer.html"><span class="glyphicon"></span> Home</a></li>
                      <li><a href="index.php"><span class="glyphicon"></span> Customer Details</a></li>
                      
                    </ul>
                </div>
                </div>
            
            <div class="banner_content">
                <center>
                    <h2>Customer Details</h2>
                </center>
                    <form action="transfer.php" method="POST">
                        
	<?php
	$id=$_GET['id'];
	$con=mysqli_connect("localhost", "root", "","customers-details","3306");
	$query="select * from user where ID='$id'";
	$result=mysqli_query($con,$query);
	if($result) {
		while($row=mysqli_fetch_array($result))
		{
                                        $dbid=$row['ID'];
					$dbname=$row['Name'];
					$dbemail=$row['Email'];
					$dbaccount=$row['Account No'];
					$dbcur_balance=$row['Balance'];
	?>
        <center>
            
            <table class="table table-bordered table-hover " style="background-color: plum;border: 2px #000 solid;">
		
		<tr>
			<td>Customer Name</td>
			<td><?php echo $dbname; ?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><?php echo $dbemail; ?></td>
		</tr>
		<tr>
			<td>Account No.</td>
			<td><?php echo $dbaccount; ?></td>
		</tr>
                <tr>
			<td>Current Balance</td>
			<td><?php echo $dbcur_balance; ?></td>
		</tr>
		<?php

                }
                    }
                ?>
                </table>
            <div>
            
                <input type="submit" value="Transfer Money" class="button">
                <input type="hidden" name="h" value="<?php echo $id ?>">
            
            </div>
                </center>
                    </form>   
                        
                    </div>
                    
                </div>
           
           
        
                <footer>
            <div>
                <center>
                    <p> @ GRIPAUG21 | Rupankita Sarma | Contact Us: +91 90000 00000<br> The Spark Foundation</p>	
                </center>
            </div>
        </footer>
    </body>
</html>
