<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Customer Details</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <style>
                
            footer{
                  background-color: black;
                  position: relative;
                  height: 50px;
                  margin-top: -50px;
                  clear: both;
                  color: white;
            }
            .inner-header{
                padding-top: 50px;
                padding-bottom: 20px;
            }
            
            .display_table{
                padding-bottom:90px;
                padding-left: 200px;
                padding-right: 200px;
            }
            body{
                background-color: darkblue;
                background-size: cover;
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
                      
                      
                      <li><a href="view One Customer.php"><span class="glyphicon"></span>View One Customer</a></li>
                    </ul>
                </div>
                </div>
            <div class="inner-header">
        <center>
            <h1 style="color: #e4b9c0;" >
                Customer Details
            </h1>
        </center>
            </div> 
    <div class="display_table">
            
            <div class="center_div">
                <div class="table-responsive">
        <center>
        <form>
            
            <table class="table table-bordered table-hover "style="background-color: #faebcc; border: 2px #000 solid;">
		<tr style="background:lavenderblush; color: black; font-size: 18px; ">
			<td>ID</td>
			<td>Name</td>
			<td>Email</td>
			<td>Account No.</td>
			<td>Balance</td>
                        <td>View Detail</td>
                </tr>
        <tr>
        <?php
        $con=mysqli_connect("localhost", "root", "","customers-details","3306");
			$query="select * from user";
			$result=mysqli_query($con,$query);
			if($result) {
				while ($row=mysqli_fetch_array($result))
				 {
					$dbid=$row['ID'];
					$dbname=$row['Name'];
					$dbemail=$row['Email'];
					$dbaccount=$row['Account No'];
					$dbcur_balance=$row['Balance'];
		
        ?>
                                        <td><?php echo $dbid; ?></td>
					<td><?php echo $dbname; ?></td>
					<td><?php echo $dbemail; ?></td>
					<td><?php echo $dbaccount; ?></td>
					<td><?php echo $dbcur_balance; ?></td>
					
                                        <td><a href="view.php?id=<?php echo $dbid; ?>" style="color: blue ">
                                                view
                                            </a> </td>
				</tr>
                                <?php
				}
			}
		?>
        </table>
        </form>
        </center>
                </div>
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
</html></td>
