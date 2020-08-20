<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Minhaz">
        <meta name=description content=" ">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>member</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
    <style type="text/css">
      
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .total {
            text-align: center;
            padding-top: 30px;
        }
        .mtext {
            width: 200px;
       }
      table {
        border-collapse: collapse;
        width: 100%;
        color: #eb4034;
        font-family: monospace;
        font-size: 25px;
        text-align: left;
      }

      th {
        background-color: #eb4034;
        color: white;
      }

      tr:nth-child(even) {
          background-color: #ededed
      }
    </style>
        
    </head>
    <body>
        <div class="total">
            <h1><b><u>MEMBER</u></b></h1>
            <h2>ID:-
            <?php
                session_start();
                $id=$_SESSION['nid'];
                echo $id;

                ?>
            </h2><a href="log_in.php"><button>Log Out</button></a>
            <form action="mem.php" method="POST">
                <br>
                <label class="mtext">Change Password:-</label>
                <input type="password" name="passw" id="passw" placeholder="give password" required><br>
        
                <label class="mtext">Change Mobile:-</label>
                <input type="text" name="mob" id="mob" placeholder="give mobile no." required><br>
               
                <label class="mtext">Change Address:-</label>
                <input type="text" name="add" id="add" placeholder="give address" required><br><br>
                <input type="submit" value="UPDATE" ><br><br>
            </form> 
        </div>
        <div class="total2">
            
            <?php
            include_once('connectionDatabase.php');
            if(isset($_POST['passw']) && isset($_POST['mob']) && isset($_POST['add']) ){
                $passw=$_POST['passw'];
                $mob=$_POST['mob'];
                $add=$_POST['add'];
                $sql="UPDATE member SET password='$passw',mobile= $mob,address='$add' WHERE m_id= $id;";
                $result=mysqli_query($conn,$sql);
                if($result){
                    echo "Password, Mobile no, Address changed";
                }
                else{
                    echo"Error! not changed.";
                }
             }
            ?>
            
       
            <h4>Payment Status:-</h4>       
        </div>
        <div class="total3">
            <table>
                <tr>
                    <th>Month</th>
                    <th>Year</th>
                    <th>Amount</th>
                </tr>
                <?php
                include_once('connectionDatabase.php');
                $sql="SELECT month,year,amount FROM payment WHERE mem_id=$id;";
                $result=mysqli_query($conn,$sql);
                if($result->num_rows >0){
                    while($row= $result-> fetch_assoc()){
                        echo "<tr><td>".$row['month']."</td><td>".$row['year']."</td><td>".$row['amount']."</td></tr>";
                    }
                }
                else{
                    echo "<h5>No Payment Result!<h5>";
                }
                $conn->close();
                ?>
            
            
            </table>
            
        </div>
        
        
        
</body>
</html>        