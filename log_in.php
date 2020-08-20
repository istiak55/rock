<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Minhaz">
        <meta name=description content=" ">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in-GYM</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
                        body{
                    margin: 0;
                    padding: 0;
                    background: url(log.jpg);
                    background-size: cover;
                }
                .log1 {
                    text-align: center;
                    margin-top: 200px;
                }

                .ltext {
                    color: white;
                }
                .ltext2 {
                    color: white;
                    width:100px;
                }
            
        </style>
    </head>
    <body>
    <div class="whole">
       
            <nav class="navbar bg-light navbar-light navbar-expand-lg fixed-top">
                <div class="container">
                    <a href="demo.php" class="navbar-brand"><h3><i>7 Star Gym</i></h3></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aris-expand="false" aria-label="Toggle navigation" >
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive"> 
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="demo.php">Home</a></li>
                        <li class="nav-item "><a class="nav-link" href="gallery.php">Gallery</a></li>
                        <li class="nav-item "><a class="nav-link" href="supplement.php">Supplements</a></li>
                        <li class="nav-item "><a class="nav-link" href="contact.php">Contact</a></li>
                    
                    </ul>
                    </div>
                </div>
            </nav>
        
        
        <div class="log1">
            
        <form action="log_in.php" method="POST">
            <form action="mem_in.php" method="POST">
        
            <label class="ltext2">ID:-</label>
            <input type="text" name="nid" id="nid" placeholder="enter id" required><br><br>
            
            <label class="ltext2">Password:-</label>
            <input type="password" name="pass" id="pass" placeholder="enter password" required><br><br>
        
            
            <input type="submit" name="log" value="Log in" style="align-center">
            </form></form>
        </div>
        <p class="ltext">
        <?php
        session_start();
        include('connectionDatabase.php');
    if(isset($_POST['log'])){
        $user= $_POST['nid'];
        $pass= $_POST['pass'];
        $_SESSION['nid']=$user;
        echo "<br />";
        
        if($user<9900){
                $sql="SELECT * FROM member WHERE m_id='$user'";
                $result=mysqli_query($conn,$sql);
                
                if($row=mysqli_fetch_assoc($result)){
                    $db_pass=$row['password'];
                    if($pass==$db_pass){
                        header("location:mem.php");
                    }
                    else{
                        echo "INCORRECT PASSWORD!";
                    }
                }
                else{
                    echo "Insert correctly";
                }
        }
        
        else if($user>=9900 && $user<10000){
            
                $sql="SELECT * FROM trainer WHERE t_id='$user'";
                $result=mysqli_query($conn,$sql);
                
                if($row=mysqli_fetch_assoc($result)){
                    $db_pass=$row['t_password'];
                    if($pass==$db_pass){
                        header("location:trainer.php");
                    }
                    else{
                        echo "INCORRECT PASSWORD!";
                    }
                }
                else{
                    echo "wrong query";
                }

        }
        else if($user>100000 && $user<100002){
             $sql="SELECT * FROM owner WHERE o_password='$pass' ";
                $result=mysqli_query($conn,$sql);
                
                if($row=mysqli_fetch_assoc($result)){
                    $db_pass=$row['o_password'];
                    if($pass==$db_pass && $user="100001"){
                        header("location:owner.php");
                    }
                    else{
                        echo "ACCESS DENIED!";
                    }
                }
                else{
                    echo "ACCESS DENIED!";
                }
        }
        else{
            echo"Not Registered yet";
        }
        
    }
        ?>
        </p>
        
        
        
        
        
       
        
        
 <footer class="py-1 bg-light fixed-bottom">
        <p class="m-4 text-center text-dark">all right reserved by CSE311(RAH1)</p>
        
        </footer>
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


</div>
</body>
</html>        