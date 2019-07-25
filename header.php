<div id="banner_image">
    <nav class="navbar navbar-expand-sm bg-info navbar-dark">
       
        <div class="container">
 
            <div class="navbar-header">
   
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                       <span class="icon-bar"></span>
  
                    <span class="icon-bar"></span>
      
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>
 
                    <span class="icon-bar"></span>
 
                    <span class="icon-bar"></span>
       
                </button>
                   
                <a class="navbar-brand" href="index.php"><strong>THE BOTTOM BILLION</strong></a>
       
            </div>
           
            <div class="collapse navbar-collapse" id="myNavbar">
   
                <ul class="nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <li class="nav-item active"><a href="about.php">ABOUT</a></li>
                    <li class="nav-item active"><a href="newsroom.php">NEWSROOM</a></li>
                    <li class="nav-item active"><a href="contact.php">CONTACT</a></li>
                    <li class="nav-item active"><a href="donate.php">DONATE</a></li>
                    <li class="nav-item active"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="nav-item active"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="nav-item active"><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
                    <li class="nav-item active"><a href="buy.php">BUY</a></li>
                    ?>
                    <?php
                } else {
                    ?>
                
    <li class="nav-item active"><a href="about.php">ABOUT</a></li>
                                
                    <li class="nav-item active"><a href="signup.php">SIGN UP</a></li>

                    <li class="nav-item active"><a href="login.php">LOGIN</a></li>

                    <li class="nav-item active"><a href="newsroom.php">NEWSROOM</a></li>
                    <li class="nav-item active"><a href="contact.php">CONTACT</a></li>
                    <li class="nav-item active"><a href="donate.php">DONATE</a></li>
                    <li class="nav-item active"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="nav-item active"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="nav-item active"><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
                    <?php
                    }
                    ?>
                </ul>
    
            </div>

        </div>
    </nav>
</div>