<?php
	
		$conn = mysqli_connect("localhost", "root", "", "user");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>User List</title>
    <style type="text/css">

        table, th,tr,td{
            border: 2px solid black;
        }
        .center{
            margin-left: auto;
            margin-right: auto;
            border-collapse: collapse;
            
        }

        /* text in table */
        table{
            width: 1000px;
            height: 420px;
            color: black;
            font-size: 30px;
            border-color: white;
            font-family: sans-serif;
            

        }

        h1{
            text-align: center;
            color: black;
            font-size: 40px;
            margin-top:10px;

        }
        body{
            background-image: url("https://static4.depositphotos.com/1004899/385/i/600/depositphotos_3858305-stock-photo-peach-feather-abstract-on-paper.jpg");
            background-repeat: no-repeat;
            background-size: 1500px 600px;
            margin: 0;
        }
        th, td{
            text-align: center;
            /* border: 2px solid black; */
            
        }
        th{
            background-color: red ;
            color: white;
            border: 2px solid black;

        }
        a{
            font-size:20px;
        }
        tr{
            font-size:25px;
            border: 2px solid black;    
            background-color: rgba(255,255,255,.2);           
        }
        tr:hover{
            background-color: #2a6ac9;
        }
        

    </style>
    <link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<body>
    <div id="navbar">
  <a class="home" href="index.php"><i class="fa fa-home"></i> Home</a>
  <a class="US" href="table.php"><i class="fa fa-list"></i> User List</a>
  <a class="trans" href="transaction_history.php"><i class="fa fa-history"></i> Transaction History</a>
  </div>
    
    <h1><u>User List</u></h1>
    <table class="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Balance</th>
        </tr>
    </thead>
    <tbody>
        <!--Use a while loop to make a table row for every DB row-->
        <?php $sql = "SELECT id, name, email, balance FROM user_list";
        $result = mysqli_query($conn, $sql);?>
        <?php while( $row = mysqli_fetch_array($result)) : ?>
        
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['balance']; ?></td>
        </tr>
        <?php endwhile ?>
    </tbody>
</table>

<div class="footer">
  <marquee behavior="scroll" direction="left">
  <p>Made By|Nivedita Mishra|The Sparks Foundation|</p></marquee>
</div>

</body>
</html>