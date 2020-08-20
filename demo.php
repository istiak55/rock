<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Minhaz">
        <meta name=description content=" ">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYM WEBSITE</title>
        <link rel="stylesheet" type="text/css" href="hog.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
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
            
        
    <div class="container2">
        <div id="carimage" class="carousel slide" data-ride="carousel">

            <ul class="carousel-indicators">
                <li data-target="#carimage" data-slide-to="1"></li>
                <li data-target="#carimage" data-slide-to="2"></li>
            </ul>
            
            <div class="carousel-inner">
                <div class="carousel-item active"><img class="rounded img-fluid" src="slide2.jpg"></div>
                <div class="carousel-item"><img class="rounded img-fluid"  src="slide3.jpg"></div>
                <div class="carousel-item"><img class="rounded img-fluid"  src="slide4.jpg"></div>
            </div>
        <a class="carousel-control-prev" href="#carimage" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
        <a class="carousel-control-next" href="#carimage" data-slide="next"><span class="carousel-control-next-icon"></span></a>

        </div>
    </div>
        
        <div class="container3">
            <a href="member_join.php"><button class="butt b1">MEMBER JOIN</button></a>
            <a href="log_in.php"><button class="butt b2">LOG IN</button></a>
        </div>
        
        <div class="container4">
            <div class="news1">

            <h1 class="ntext" align=center>News</h1>
                    <?php
                        include('connectionDatabase.php');
                        $sql11 = "SELECT n_news FROM news ORDER BY n_no DESC LIMIT 5;";
                        $result11 = mysqli_query($conn, $sql11);
                        $p=1;
                        
                        while($row11 = mysqli_fetch_row($result11)){
                          
                              echo '<h3 style="color: white;">'.$p.'. '.$row11[0].'</h3></br>';
                            $p++;
                    
                        
                        }
                   
                      ?>
                

                </div>
            <div class="vertiL"></div>
            <div class="social">
                <img height="40px" width="40px" src="phone.png">
                <h4 class="ntext" color=white>+8801666777888</h4><br><br>
                
                <img height="40px" width="40px" src="fb.png">
                <a href="https://www.facebook.com/7StarGymBD" target="_blank"><h4 class="ntext" color=white>fb page</h4></a>
                
            </div>
        </div>
        
        <div class="container5">
            <div class="plan" id="p1"><h3 class="plantext"><b>Morning Shift</b></h3><br><p class="ntext">=>6days(Except Friday)<br><br>=>7AM-12PM<br><br>=>Admisson 800TK<br><br>=>Monthly 500TK<br><br>=>Yearly 5500TK</p></div>
            
            <div class="plan" id="p2"><h3 class="plantext"><b>Night Shift</b></h3><br><p class="ntext">=>6days(Except Friday)<br><br>=>5PM-11PM<br><br>=>Admisson 1500TK<br><br>=>Monthly 600TK<br><br>=>Yearly 6500TK</p></div>
        
        
        
        </div>
        
        <div class="container6"><h2 class="famitext">We have family of
            <?php
                 include('connectionDatabase.php');
                 $sql5= "SELECT COUNT(m_id) FROM member;";
                 $result5= mysqli_query($conn, $sql5);
                 while($row5= mysqli_fetch_row($result5)){
                 echo "  #".$row5[0]."  ";        
                 }
            ?>
            
            members</h2></div>

        
        <div class="container7">
                <h3 class="branchtext">branches</h3>
          
            <div class="branch1"><p class="plantext"><b>#1 Gandaria<br>Near High School<br>Dhaka-1204</b></p></div>
            <div class="branch1"><p class="plantext"><b>#2 Keraniganj<br>25 Ghatpar<br>Dhaka-1310</b></p></div>
            <div class="branch1"><p class="plantext"><b>#3 Wari<br>10 Rankin Street<br>Dhaka-1203</b></p></div>
            <div class="branch1"><p class="plantext"><b>#4 Zinzira<br>5 Bazar Road<br>Dhaka-1310</b></p></div>
        </div>
        
        
        
        
         <footer class="py-1 bg-light fixed">
        <p class="m-4 text-center text-dark">all right reserved by DBMS Lab 182-15-11654 & 182-15-11450 </p>
        
        </footer>
        
   
   
        
         
    
    
              
    
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


</div>
</body>
</html>
