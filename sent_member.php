<?php
        include('connectionDatabase.php');
        if(isset($_POST['name']) && isset($_POST['pass']) && isset($_POST['age']) && isset($_POST['sex']) && isset($_POST['mobile']) && isset($_POST['guard']) && isset($_POST['address']) && isset($_POST['service']) && isset($_POST['shift']) && isset($_POST['branch'])){
        
        $name= $_POST['name'];
        $pass= $_POST['pass'];
        $age= $_POST['age'];
        $sex= $_POST['sex'];
        $mobile= $_POST['mobile'];
        $guard= $_POST['guard'];
        $address= $_POST['address'];
        $j_date= date('Y/m/d');
        $service= $_POST['service'];
        $shift= $_POST['shift'];
        $branch= $_POST['branch'];
        
        $sql="INSERT INTO `member`(`name`, `password`, `age`, `sex`, `mobile`, `guardian_name`, `address`, `joint_day`, `service`, `shift`, `branch_number`) VALUES ('$name','$pass','$age','$sex','$mobile','$guard','$address','$j_date','$service','$shift','$branch');";
        $result=mysqli_query($conn,$sql);
        
        if($result){
            echo '<h1>Welcome to 7 Star GYM!!</h1>';
        }
        else{
            echo 'Something went wrong,TRY AGAIN!!';
        }
         
        header( "refresh:2;url=demo.php" );
        
        
        }
        ?>