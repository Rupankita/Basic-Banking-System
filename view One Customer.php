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
                background-image: url(aimg/photo13.jpeg);
                background-size: cover;
            }
            .header
            {
                padding-top: 75px;
                padding-bottom: 40px;
            }
            form{
                padding-top: 30px;
                padding-bottom: 30px;
                color: black;
               
            }
            .container{
                 position: relative;
    padding-top: 6%;
    padding-bottom: 6%;
    overflow:hidden;
    margin-bottom: 12%;
    max-width: 660px;
    background-color:  rgba(0, 0, 0, 0.7);
            
            }
            footer{
                  background-color: black;
                  position: relative;
                  height: 50px;
                  margin-top: -50px;
                  clear: both;
                  color: white;
            }
            table{
                color: black;
                background-color: white;
                text-align: center;
                
            }
            td{
                color: black;
            }
            body{
                background-color: #f2dede;
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
                      <li><a href="Transection.php"><span class="glyphicon"></span> Transection</a></li>
                    </ul>
                </div>
                </div>
      
            <div class="header">
                <center>
                    <h1> View One Customer </h1>
                </center>
            </div>
            <div class="container">
                <center>
                <form action="" method="POST">
                    <input type="text" name="ID" placeholder="Enter user ID" />
                    <input type="submit"  name="Search" value="Search by ID" />
                           
                </form>
                    </center>
                <table class="table table-striped table-bordered table-hover">
		<tr style="background:lavenderblush; color: black; font-size: 18px; ">
			<td>ID</td>
			<td>Name</td>
			<td>Email</td>
			<td>Account No.</td>
			<td>Balance</td>
                        
                </tr>
                
                     <?php
        $con=mysqli_connect("localhost", "root", "", "customer-details","3306");
			if(isset($_POST['Search'])) {
				$ID = $_POST['ID'];
                                
                                $query = "SELECT * FROM user where ID = $ID";
                                $mysqli_result = mysqli_query($con, $query);
                                while($row = mysqli_fetch_array($mysqli_result,MYSQLI_ASSOC))
                                {
		
        ?>
                                        <td><?php echo $row['ID']; ?></td>
                                        <td><?php echo $row['Name']; ?></td>
					<td><?php echo $row['Email']; ?></td>
					<td><?php echo $row['Account No']; ?></td>
					<td><?php echo $row['Balance']; ?></td>
					
                                       
				
                                <?php
				}
			}
		?>
 
       </table>
               
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
