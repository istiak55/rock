<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Minhaz">
        <meta name=description content=" ">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trainer</title>
        
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
        .mtext2 {
            width: 300px;
            color: blue;
            font-size:22px;
       }
        .l_p{
            padding-right: 180px;
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
        
        <script>
        function box(){
            alert("Are you sure wanna delete?");
        }
        </script>
        
    </head>
    <body>
        <div class="total">
            <h1><b><u>TRAINER</u></b></h1>
            <h2>Trainer_ID:-
            <?php
                session_start();
                $id=$_SESSION['nid'];
                echo $id;
                

                ?>
            </h2><a href="log_in.php"><button>Log Out</button></a>
            <br><br><h5 class="l_p">Payment-</h5>
            <form action="trainer.php" method="POST">
                
                <label class="mtext">Member Id:-</label>
                <input type="text" name="idm" id="idm" placeholder="enter ID" required><br>
        
                <label class="mtext">Month:-</label>
                <input type="text" type="text" name="mon" id="mon" placeholder="enter month" required><br>
                
                <label class="mtext">Year:-</label>
                <input type="text" name="year" id="year" placeholder="enter year" required><br>
               
                <label class="mtext">Amount:-</label>
                <input type="text" name="amount" id="amount" placeholder="enter amount" required><br>
                <input type="submit" value="Enter" ><br><br>
            </form> 
        </div>
        <div class="total2">
            
            <?php
            include('connectionDatabase.php');
            if(isset($_POST['idm']) && isset($_POST['mon']) && isset($_POST['year']) && isset($_POST['amount'])){
                $mid=$_POST['idm'];
                $mon=$_POST['mon'];
                $ye=$_POST['year'];
                $amo=$_POST['amount'];
                $sql2="INSERT INTO `payment`(`mem_id`, `month`, `year`, `amount`) VALUES ('$mid','$mon','$ye','$amo');";
                $result2=mysqli_query($conn,$sql2);
                if($result2){
                    echo "Successfully Updated;";
                }
                else{
                    echo"Try Again!!";
                }
             }
            ?>     
        </div>
        <div class="total3">
            <form action="delete.php" method="POST">
                
                <label class="mtext2">Membership Deletation Id:-</label>
                <input type="text" name="del" id="del" placeholder="enter ID" required>
                <input type="submit" value="DELETE" onclick="box()" ><br><br>
            </form>
        
        
        <h4>Members:-</h4>   
        </div>
        
        <div class="total4">
            <table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Sex</th>
                    <th>Mobile</th>
                    <th>Guardian</th>
                    <th>Address</th>
                    <th>Joint day</th>
                    <th>Service</th>
                    <th>Shift</th>
                    <th>Branch No</th>
                </tr>
                <?php
                include_once('connectionDatabase.php');
                $sql="SELECT * FROM member;";
                $result=mysqli_query($conn,$sql);
                if($result->num_rows >0){
                    while($row= $result-> fetch_assoc()){
                        echo "<tr><td>".$row['m_id']."</td><td>".$row['name']."</td><td>".$row['age']."</td><td>".$row['sex']."</td><td>".$row['mobile']."</td><td>".$row['guardian_name']."</td><td>".$row['address']."</td><td>".$row['joint_day']."</td><td>".$row['service']."</td><td>".$row['shift']."</td><td>".$row['branch_number']."</td></tr>";
                    }
                }
                else{
                    echo "<h5>No Members<h5>";
                }
                $conn->close();
                ?>
            
            
            </table>
            
        </div>
        
        
        
</body>
</html>        