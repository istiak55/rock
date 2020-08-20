<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Minhaz">
        <meta name=description content=" ">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>member join-GYM</title>
        <link rel="stylesheet" type="text/css" href="memberDesign.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script>
        
    window.onload = function() {
        document.getElementById('amount1').style.display = 'none';
        document.getElementById('amount2').style.display = 'none';
        document.getElementById('amount3').style.display = 'none';
        document.getElementById('amount4').style.display = 'none';
    }    
        function amountInfo(){
            
            if(document.getElementById('mor').checked && document.getElementById('mon').checked){
                document.getElementById('amount1').style.display='block';
                document.getElementById('amount2').style.display='none';
                document.getElementById('amount3').style.display='none';
                document.getElementById('amount4').style.display='none';
            }
            else if(document.getElementById('mor').checked && document.getElementById('year').checked  ){
                document.getElementById('amount1').style.display='none';
                document.getElementById('amount2').style.display='block';
                document.getElementById('amount3').style.display='none';
                document.getElementById('amount4').style.display='none';
            }
            else if(document.getElementById('day').checked && document.getElementById('mon').checked  ){
                document.getElementById('amount1').style.display='none';
                document.getElementById('amount2').style.display='none';
                document.getElementById('amount3').style.display='block';
                document.getElementById('amount4').style.display='none';
            }
            else if(document.getElementById('day').checked && document.getElementById('year').checked  ){
                document.getElementById('amount1').style.display='none';
                document.getElementById('amount2').style.display='none';
                document.getElementById('amount3').style.display='none';
                document.getElementById('amount4').style.display='block';
            }
         }    
    </script>
    </head>
    <body>
    <div class="whole_join">
       
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
        <h1 class="jtext2">Member Join</h1><br>
        
        <h3 class="jtextID">ID:-  
        <?php
        include_once('connectionDatabase.php');
        $sql="SELECT m_id FROM member ORDER BY m_id DESC LIMIT 1;";
        $result=mysqli_query($conn,$sql);
        $print=mysqli_fetch_row($result);
        echo $print[0]+1;
        ?>
        </h3><br>
        
    <form action="sent_member.php" method="POST">
        
        <label class="jtext">Name:-</label>
            <input type="text" name="name" id="name" placeholder="enter name" required><br><br>
        <label class="jtext">Password:-</label>
            <input type="password" name="pass" id="pass" placeholder="enter password" required><br><br>
        <label class="jtext">Age:-</label>
            <input type="text" name="age" id="age" placeholder="enter age" required><br><br>
        
        <label class="jtext">Sex:-</label>
            <input type="radio" name="sex" value="male"><label class="jtext">Male</label>
            <input type="radio" name="sex" value="female"><label class="jtext"> Female</label><br><br>
        
        <label class="jtext">Mobile:-</label>
            <input type="text" name="mobile" id="mobile" placeholder="enter mobile number" required><br><br>
        
        <label class="jtext">Guardian Name:-</label>
            <input type="text" name="guard" id="guard" placeholder="enter guardian name" required><br><br>
        
        <label class="jtext">Address:-</label>
            <input type="text" name="address" id="address" placeholder="enter address" required><br><br>
        
        <label class="jtext">Shift:-</label>
            <input type="radio" name="shift" id="mor" value="morning" onclick="amountInfo()"><label class="jtext">Morning</label>
            <input type="radio" name="shift" id="day" value="day" onclick="amountInfo()"><label class="jtext"> Night</label><br><br>
        
        <label class="jtext">Service:-</label>
            <input type="radio" name="service" id="mon" value="monthly" onclick="amountInfo()"><label class="jtext">Monthly</label>
            <input type="radio" name="service" id="year" value="yearly" onclick="amountInfo()"><label class="jtext">Yearly</label><br><br>
        
        <label class="jtext">Branch:-</label>
            <select id="branch" name="branch">
                <?php
                include_once('connectionDatabase.php');
                $sql="SELECT branch_no FROM gym";
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_row($result)){
                    ?>
                <option value="<?php echo $row[0];?>"> <?php echo $row[0];?></option>
                <?php
                }
                ?>
            </select><br><br>
        
        <h5 class="jtext2" id="amount1" >Total amount=1300TK </h5>
        <h5 class="jtext2" id="amount2" >Total amount=5500TK </h5>
        <h5 class="jtext2" id="amount3" >Total amount=2100TK </h5>
        <h5 class="jtext2" id="amount4" >Total amount=6500TK </h5>
        
        <br><button type="submit" name="submit" >Confirm</button>
    </form>
        <p class="jtext2">
         </p>
        
        
        
           
 
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


         <footer class="py-1 bg-light fixed">
        <p class="m-4 text-center text-dark">all right reserved by DBMS Lab 182-15-11654 & 182-15-11450 </p>
        
        </footer>
        
   

</div>
</body>
</html>        