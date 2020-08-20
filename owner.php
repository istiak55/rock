<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Minhaz">
        <meta name=description content=" ">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$OWNER$</title>
        <link rel="stylesheet" type="text/css" href="ownerDesign.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
    
        
    </head>
    <body>
    <div class="total">
        <div class="head">
            <h1><b><u>OWNER</u></b></h1>
            <a href="log_in.php"><button>Log Out</button></a>
        </div>
        <div class="total2">
            <div class="total3">
                <h3>News:-</h3>
            <form action="owner.php" method="POST">
                <textarea name="news" placeholder="post for HOMEPAGE" rows="6" cols="50" required></textarea><br>
                <input type="submit" value="UPDATE" >
                </form>
            <?php
                include('connectionDatabase.php');
                if(isset($_POST['news'])){
                    $news= $_POST['news'];
               
                $sql3="INSERT INTO `news`(`n_news`) VALUES ('$news')";
                $result3=mysqli_query($conn,$sql3);
            
                if($result3){
                echo'posted to HomePage';
                }
                else{
                echo'try again';
                }}?>
                

                <br><br>
            <form action="equip.php" method="POST">
                <label class="mtext">Equipment Name:-</label>
                <input type="text" name="eq_name" id="eq_name" placeholder="put name" required><br>
        
                <label class="mtext">Quantity:-</label>
                <input type="text" name="qua" id="qua" placeholder="put quantity" required><br>
                    
                <label class="mtext">Cost:-</label>
                <input type="text" name="cos" id="cos" placeholder="put cost" required><br>
                    
                <label class="mtext">Which Branch:-</label>
                <input type="text" name="bra" id="bra" placeholder="put branch no" required><br>
                <input type="submit" value="Enter" style="margin-left:330px;">
                
                </form>
            
            
            </div>
            
            <div class="total4">
                
            <h3>Contact:-</h3><br>
                <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
                    <?php
                        include('connectionDatabase.php');
                        $sql = "SELECT * FROM contact";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_row($result)){
                    ?>
                <tr>
                    <th> <?php echo $row[0];?> </th>
                    <th> <?php echo $row[1];?> </th>
                    <th> <?php echo $row[2];?> </th>
                 </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
        
        <div class="total5">
             <h4>
                 <?php
                 include('connectionDatabase.php');
                 $sql8= "SELECT SUM(amount) FROM payment;";
                 $result8= mysqli_query($conn, $sql8);
                 while($row8= mysqli_fetch_row($result8)){
                 echo 'Total Earning='.$row8[0].'Tk';        
                 }
                 echo "<br />";
                 echo "<br />";    
                 $sql9= "SELECT (SUM(salary)+SUM(cost)) FROM trainer,equipment;";
                 $result9= mysqli_query($conn, $sql9);
                 while($row9= mysqli_fetch_row($result9)){
                 echo 'Total Cost='.$row9[0].'Tk';
                 }
                 
                 ?>
            </h4><br><br>
        </div>
        
        
           
        
</div>        
</body>
</html>             