<!DOCTYPE html>
<html lang="en">
  
<head>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your Description here"/>
    <title>Rabban</title>

<!----Bootstrap CDN Links---->

<link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<!---Connecting CSS---->
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./css/responsive-style.css">
<style>
    .footer {
    background: #DDDDDD;
     #f4623a;     
}

.footer .footer-link{
    font-size: 1rem;
    color: #f4623a; 
    padding: 0 1.875rem;

}

.footer a i {
    font-size: 2 rem !important;
    color: #f4623a !important;
    padding: 0 1rem !important;
    padding-top: 20px !important;
}

.text-light{
    color: black !important;
}

.navigation-wrap{
    background-color: white !important;
}

.formsection{
    padding-top: 100px;

}

.h1{
   color:#f4623a !important ; 
}

.formsection {
    background-color: #f4623a;
    padding-bottom: 10px;

}

.btns{
    
    padding: 0.625rem 1.875rem;
    line-height: 25px;
    background-color: var(--white-color);
    border: 0.14rem solid var(--white-color);
    color: var(--text-color);
    font-size: 0.9375rem;
    font-weight: 600;
    text-transform: capitalize;
    box-shadow: 0px 2px 10px -1px rgb(0 0 0 / 19%);
    -webkit-transition: all .4s ease-out 0s;
    -o-transition: all .4s ease-out 0s;
    -moz-transition: all .4s ease-out 0s;
    transition: all .4s ease-out 0s;


}

.bts:hover {
    background-color: transparent;
    color: #f4623a;
}

</style>
</head>

  
<body>
    <header>
        <nav class="navbar navbar-expand-lg navigation-wrap">
            <div class="container">
                <a  class="navbar" href="/food-cataring"><img src="./images/rabaan.png" alt="logo"></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" 
                aria-controls="navbarText" aria-expanded="false" aria-label="Toogle navigation"> 
                <i class="fas fa-stream navbar-toggler-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/food-cataring/index.html">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="menu.html">Menu</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>

                        <li><button class="main-btn">+88-017-123-123-11</button></li>

                    </ul>
                </div>
            </div>

        </nav>

    </header>
    <section>
        <div class="container formsection">
        <h1>Contact Us For More Information</h1>
  
        <form action="query_form.php" method="post">
              
              
            <p>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required="">
            </p>              
              
              
            <p>
                <label for="contact_no">Contact No:</label>
                <input type="number" name="contact_no" id="contact_no" required="">
            </p>
              
              
            <p>
                <label for="email">Email Address:</label>
                <input type="email" name="email" id="email" required="">
            </p>
              
              
            <p>
                <label for="subscription">Subscription:</label>
                <input type="text" name="subscription" id="subscription" required="">
            </p>
              
              
            <p>
                <label for="order_date">Order date:</label>
                <input type="text" name="order_date" id="order_date" required="">
            </p>
  
  
              
            <input class="btns" type="submit" value="Submit">
        </form>
        </div>
    </section>



    <section id="faq">
        <div class="faq wrapper">
            <div class = "container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center pb-4">
                            <h2>Frequently Asked Questions</h2>
                        </div>
                        
                    </div>
                    
                </div>                
                <div class="row pt-5">
                    <div class="col-sm-6 mb-4">
                        <h4><span>~</span>
                            Is The Food Made In A Clena Environment?
                        </h4>
                        <p>ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <h4><span>~</span>
                            Do You cater outside Dhaka?
                        </h4>
                        <p>ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
                    </div>  
                    <div class="col-sm-6 mb-4">
                        <h4><span>~</span>
                            Are The Chef Experienced?
                        </h4>
                        <p>ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
                    </div>    

                    <div class="col-sm-6 mb-4">
                        <h4><span>~</span>
                            Are You collaborated with BICC?
                        </h4>
                        <p>ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
                    </div>  
                    


                </div>
            </div>
            
        </div>
        
    </section>
    <footer id="footer">
    <div class="footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <a class="footer-link" href="#">Register</a>
                    <a class="footer-link" href="#">Forum</a>
                    <a class="footer-link" href="#">Affiliate</a>
                    <a class="footer-link" href="#">FAQ</a>
                    <div id="icons">
                        <a href="#"><i class="fab fa-facebook-f"> </i></a>
                        <a href="#"><i class="fab fa-twitter"> </i></a>
                        <a href="#"><i class="fab fa-youtube"> </i></a>
                        <a href="#"><i class="fab fa-dribbble"> </i></a>
                        <a href="#"><i class="fab fa-linkedin"> </i></a>
                        <a href="#"><i class="fab fa-instagram"> </i></a>
                    </div>
                </div>
            
                <div class="col-sm-12">
                    <div class="footer-copy">
                        <div class="copy-right text-center pt-5">
                            <p class="text-light"> © 2021. Rabaan. All rights reserved.</p>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            
        </div>
        
    </div>
    
</footer>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>    

<script src="./js/index.js"></script> 
</body>
  
</html>