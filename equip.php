<?php
        include('connectionDatabase.php');
        if(isset($_POST['eq_name']) && isset($_POST['qua']) && isset($_POST['cos']) && isset($_POST['bra'])){
           $eq= $_POST['eq_name'];
           $qua= $_POST['qua'];
           $cos= $_POST['cos'];
           $bra= $_POST['bra'];
            
            $sql4="INSERT INTO `equipment`(`name`, `quantity`, `cost`, `branch_no`) VALUES ('$eq','$qua','$cos','$bra');";
            $result4=mysqli_query($conn,$sql4);
            
            if($result4){
                echo'<h1>NEW Equipments Added!!</h1>';
            }
            else{
                echo'<h1>there is some complications</h1>';
            }
            header( "refresh:1;url=owner.php" );
            
            
        }
?>