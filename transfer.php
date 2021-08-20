<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Money Transfer</title>
              <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <style>
        body{
            background-image: url(aimg/photo6.jpeg);
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
            padding-top: 150px;
            padding-bottom: 310px;
            padding-left: 400px;
            padding-right: 400px;
        }
    </style>
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
                      
                      
                      <li><a href="view One Customer.php"><span class="glyphicon"></span>View One Customer</a></li>
                    </ul>
                </div>
                </div>
        <center>
                        <div class="banner_content">
                            <form action="verify_and_transfer.php" method="POST">
	<?php
	$id=$_REQUEST["h"];
	$con=mysqli_connect("localhost", "root", "","customers-details","3306");
	$query="select * from user where ID='$id'";
	$result=mysqli_query($con,$query);
	if($result) {
		while($row=mysqli_fetch_array($result))
		{
                                        $dbid=$row['ID'];
					$dbname=$row['Name'];
					$dbcur_balance=$row['Balance'];
                                        $dbaccount = $row['Account No'];
	?>
        <center>
            <h1 style="padding-bottom:10px;">Transfer Money</h1>
            <table class="table table-bordered table-hover " style="background-color: darksalmon;border: 2px #000 solid">
		<input type="hidden" name="s_id" value="<?php echo $dbid ?>">
                <input type="hidden" name="s_name" value="<?php echo $dbname ?>">
                <input type="hidden" name="s_bal" value="<?php echo $dbcur_balance ?>">
                <input type="hidden" name="s_account" value="<?php echo $dbaccount ?>">
                <tr class="table_size">
                    <td class="table_size">Enter Amount:</td>
                    <td class="table_size"><input type="number" name="amount"></td>
		</tr>
                <tr>
                    <td>Select Customer</td>
                    <td><select name="r_id" style="width: 100%">
                            <option value="">Select Recipient</option>
                        <?php 
                        
                        $query1="select * from user where not ID='$id'";
                        $result1=mysqli_query($con,$query1);
                        if($result1) {
                        while($row=mysqli_fetch_array($result1))
                        {
                                        $dbid1=$row['ID'];
					$dbname1=$row['Name'];
                        ?>
                        
                            <option value="<?php echo $dbid1 ?>"><?php echo $dbname1; ?></option>
                        <?php
                        }
                        ?>
                        </select></td>
                    
                        <?php

                     
                        }
                    ?>
                </tr>
		<?php
                }
                     
                    }
                ?>
	</table>
            <div>
            <input type="submit" value="Transfer Money" class="button">
            </div>
        </center>
                                </form>
                            
                        </div>
                    </center>
                    
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
