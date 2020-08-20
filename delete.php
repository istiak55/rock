<?php
        include('connectionDatabase.php');
        if(isset($_POST['del'])){
            $del=$_POST['del'];
            
            $sql="DELETE FROM member WHERE m_id=$del";
            $result=mysqli_query($conn,$sql);
            if($result){
            echo "<h1>GOODBYE</h1>";
        }
            
            header( "refresh:1;url=trainer.php" );
        }




?>