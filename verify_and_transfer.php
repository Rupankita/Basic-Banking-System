<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        <title>Money Transfer</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <style>
            .table-responsive{
                padding-left: 50px;
                padding-right: 30px;
                border-color: black;
                   
                
               
                
            }
            tr{
                color: black;
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
              position: relative;
    padding-top: 7%;
    padding-bottom: 7%;
    overflow:hidden;
    margin-bottom: 12%;
    
    max-width: 660px;
           
            }
            body{
                background-image: url(aimg/image1.jpg);
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
                      
                    </ul>
                </div>
                </div>
        </div>
        <?php
                $s_id=$_REQUEST["s_id"];
                $s_name=$_REQUEST["s_name"];
                $s_bal=$_REQUEST["s_bal"];
                $s_account=$_REQUEST["s_account"];
                $amount=$_REQUEST["amount"];
                $r_id=$_REQUEST["r_id"];

                if($amount>$s_bal)
                {
                    echo "Transaction denied due to insufficient amount!";
                }
                else 
                {
                    $con=mysqli_connect("localhost", "root", "","customes-details","3306");
                    $query="select * from user where ID='$r_id'";
    
                    $result=mysqli_query($con,$query);
			if($result) 
                        {
                                
				while ($row=mysqli_fetch_array($result))
				{
                                        $r_name = $row['Name'];
					$r_account=$row['Account_no'];
					$r_bal=$row['Balance'];
                                   
                                
                $s_bal = $s_bal - $amount;
                $r_bal = $r_bal + $amount;
    
                $up_query1="update user set Balance = '$s_bal' where ID = '$s_id'";
                $up_query2="update user set Balance = '$r_bal' where ID = '$r_id'";
                date_default_timezone_set("Asia/Kolkata");
                $t = date("Y-m-d H:i:s");
    
                $in_query1 = "insert into  transaction (sender_id, sender_account, receiver_id, receiver_account, amount, transfer_time)
                values ('$s_id','$s_account','$r_id', '$r_account', '$amount', '$t')";

    if (mysqli_query($con,$up_query1)) 
    {
	if(mysqli_query($con,$up_query2))
        {
            if(mysqli_query($con,$in_query1))
            {
                ?>
                <center>
                <div class="display_table">
                <div class="center_div">
                <div class="table-responsive">
                
                
                <h2>Transaction is successful!</h2>
                <center>
                <table style="background: wheat;color: blue;padding: 10px;margin-bottom: 20px; text-align: center" border="1">
                    <tr style="padding: 5px">
                        <td>Sender Name</td>
                        <td><?php echo "$s_name";?></td>
                    </tr>
                    <tr style="padding: 5px">
                        <td>Sender Account No.</td>
                        <td><?php echo "$s_account";?></td>
                    </tr>
                    <tr style="padding: 5px">
                        <td>Receiver Name</td>
                        <td><?php echo "$r_name";?></td>
                    </tr>
                    <tr style="padding: 5px">
                        <td>Receiver Account No.</td>
                        <td><?php echo "$r_account";?></td>
                    </tr>
                    <tr style="padding: 5px">
                        <td>Transfer Amount</td>
                        <td><?php echo "$amount";?></td>
                    </tr>
                    <tr style="padding: 5px">
                        <td>Transfer Time</td>
                        <td><?php echo "$t";?></td>
                    </tr>
                    
                </table>
                </center>
                
                </div>
                </a>
                </div>
                </div>
                </div>
                </center>
                
                <?php
            }
            else 
            {
                echo "Transaction denied!";
            }
        }
        else 
        {
            echo "Transaction denied!";
        }
    }
    else 
    {
	echo "Transaction denied!";
    }
                                }
                        }
		
}

?>
    </body>
</html>
