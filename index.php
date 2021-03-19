<?php
	session_start();
  $connect = mysqli_connect("localhost", "root", "", "user");
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Basic Banking System</title>
	<style type="text/css">
	 body{
			
	background-image: url("index.jpg");
    background-repeat: no-repeat;
  	background-size: cover;
    margin: 0;
        
		}
    h1{
      font-size: 80px;
      text-align: center;
      color: black;
      text-shadow: 2px 2px #262626;
      font-family: 'candal',serif;
      width: 1250px;
      /* border: 2px solid black; */
      background-color: rgba(255, 255, 255, 0.096);     
      padding: 30px;
      margin: 20px;
    }
    	button{
      font-size: 30px;
      padding: 10px 40px;
      justify-content: center;
      background-color: #11367a;
      color: rgba(19, 135, 243, 0.74);
      text-decoration: none;
      float:center;
      margin-right: 50px;

    }

    h5{
      text-align: center;
      font-size: 40px;
      color: black;
      text-shadow: 1px 1px #f7f8f8;
    }

    	div{
      
      margin-left: auto;
      margin-right: auto;

    }

    .container{
      padding-left: 530px;
      
    }


  h3{
    	text-align: center;
    	font-size: 25px;
    	color: black;
        text-shadow: 1px 1px #3b5278;

    }
    a{
      color: white;
      font-size:24px;
      font-family: 'candal',serif;
      
    }
    button:hover{
      background-color: rgba(255,255,255,.2);        /* transparent */
      text-align: center;
      
    }	  
    

  </style>
  <link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<body>
	

  <?php include 'connection.php' ?>


  <div id="navbar">
  <a class="home" href="index.php"><i class="fa fa-home"></i> Home</a>
  <a class="US" href="table.php"><i class="fa fa-list"></i> User List</a>
  <a class="trans" href="transaction_history.php"><i class="fa fa-history"></i> Transaction History</a>
  
  </div>


	 <h1><u>SWADESHI BANK</u></h1>
   <h5><i><u>A tradition of trust</u></i></h5>
  
  <div class="container">
    <button><a href="send_money.php"><b>Send Money</b></a></button>
  </div>


  <div class="footer">
  <marquee behavior="scroll" direction="left">
  <p>Made By|Nivedita Mishra|The Sparks Foundation|</p></marquee>
</div>

</body>

</body>
</html>