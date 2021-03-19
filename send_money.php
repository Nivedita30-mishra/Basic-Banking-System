<?php
	session_start();
  $connect = mysqli_connect("localhost", "root", "", "user");
?> 

<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>send money</title>

	<style type="text/css">

		/* Font of headings*/
		form{
			font-size: 35px;
			font-weight:40px;
			text-align: center;
			margin: auto;
			padding-top: 80px;
			font-family:Verdana, Geneva, Tahoma, sans-serif;
			color: black;		
		}

		label{
			padding-top: 20px;
			justify-content: left;
			font-weight: 70px;
			
		}

		/* size of container */
		.container{
			width: 500px;
			padding-left: 400px;
			
		}

		/* input size of container */
		.container input{
			width: 90%;
			clear: both;
			height: 35px;
			border: 50px;
			color: rgb(0, 0, 0);
		}

		/* Enter amount here color of text */
		button{
			font-size: 30px;
      		padding: 50px 10px;
      		background-color: #071a3d; 
			color: rgb(255, 255, 255);
			margin-left: 700px;
		}
		
		.press{
			padding-top: 50px;
			padding-left: 750px;
			margin-left: 700px;
		}
		body{
			background-image: url("index.jpg");
			margin: 0;
			background-repeat: no-repeat;
			background-size: cover;
		}

		/* Send Money button*/
		.click{
			width: 300px;
			background-color: #11367a;
			color: rgb(255, 255, 255);
			font-size: 25px;
			margin-left: 500px;
			margin-top:30px;
			height:40px;
			min-height: 2cm;
		}

		/* Send Money hover Color */
		.click:hover{
			background-color: rgba(255,255,255,.2);	
		}
		a{
      color: #11367a;
      font-size:20px;
    	}
	</style>
  <link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<body>


<!-- <script type="text/javascript" src="user.php"></script> -->



<div id="navbar">
  <a class="home" href="index.php"><i class="fa fa-home"></i> Home</a>
  <a class="US" href="table.php"><i class="fa fa-list"></i> User List</a>
  <a class="trans" href="transaction_history.php"><i class="fa fa-history"></i> Transaction History</a>
  </div>

	<div class="container">
		<form action="transfer_money.php" method="post">
			<label><b>SENDER:</b></label>
			<input list="names" id="sender_name" type="text" name="sender_name", placeholder="Enter name here" required>
			<datalist id="names">
				<option value="Nivedita Mishra"></option>
				<option value="Tannu Mishra"></option>
				<option value="Deep Mishra"></option>
				<option value="Shailaja Mishra"></option>
				<option value="Vedhashree Naik"></option>
				<option value="Tanushree Poojary"></option>
				<option value="Kirti Moily"></option>
				<option value="Anita Uniyal"></option>
				<option value="Laxmi Yadav"></option>
				<option value="Shalini Mishra"></option>
				<option value="Pragati Mishra"></option>
				
			</datalist>
		</br>
			<label><b>RECIEVER:</b></label>
			<input list="names" type="" id="receiver_name" name="receiver_name" placeholder="Enter name here"  required>
			<datalist id="names">
				<option value="Nivedita Mishra"></option>
				<option value="Tannu Mishra"></option>
				<option value="Deep Mishra"></option>
				<option value="Shailaja Mishra"></option>
				<option value="Vedhashree Naik"></option>
				<option value="Tanushree Poojary"></option>
				<option value="Kirti Moily"></option>
				<option value="Anita Uniyal"></option>
				<option value="Laxmi Yadav"></option>
				<option value="Shalini Mishra"></option>
				<option value="Pragati Mishra"></option>
			</datalist>
		</br>
			<label><b>AMOUNT: </b></label>
			<input type="number" id="amount" name="amount" placeholder="Enter amount here" required></div>
			<input class="click" type="submit" name="" value="Send Money">
		</form>
	
	</div>



	<!-- javascript -->
		<!-- <button  class="click", onclick="func()"> Send Money </button> -->


		
	</div>

	<div class="footer">
  <marquee behavior="scroll" direction="left">
  <p>Made By|Nivedita Mishra|The Sparks Foundation|</p></marquee>

</div>
</body>
</html>