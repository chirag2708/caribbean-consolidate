<?php
include_once "header.php";

if(isset($_POST['name'])){
    $server="localhost";
    $username="root";
    $password="";
  
    $con =mysqli_connect($server,$username,$password);
  
    if(!$con)
    {
      die("connection failed " . mysqli_connect_error());
    }
  
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phno = $_POST['phno'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
  
    $sql= "INSERT INTO `caribbean_consolidate`.`contact_us` (`name`, `email`, `phno`,`subject`,`message`) VALUES ('$name', '$email', '$phno','$subject','$message');";
    
    if($con->query($sql) == true){
      
  
      $to=$email;
      $subject="Thanks for contacting Caribbean Consolidate";
      $message="We got your message";
      $from="chirag.tester@gmail.com";
      $headers="From: $from";
  
      if(mail($to,$subject,$message,$headers)){
        echo "Mail Sent";
      }
      else{
        echo "Email Failed";
      }
  
  
    }
    else{
      echo "ERROR: $sql <br> $con->error";
    }
  
    $con->close();
  
  }
  
  
  
  
  
  
  

?>
    <div class="page-banner-wrap text-center bg-cover" style="background-image: url('assets/img/contact-banner.jpg')">
        <div class="container">
            <div class="page-heading text-white">
                <h1>contact us</h1>
            </div>
        </div>
    </div>
    <div class="breadcrumb-wrapper">
        <div class="container">
            <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">contact Us</li>
                </ol>
            </nav>
        </div>
    </div>

    <section class="contact-page-wrap section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-contact-card card1">
                        <div class="top-part">
                            <div class="icon">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="title">
                                <h4>Email Address</h4>
                                <span>Send mail anytime</span>
                            </div>
                        </div>
                        <div class="bottom-part">                            
                            <div class="info">
                                <p>info@caribcons.com</p>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-contact-card card2">
                        <div class="top-part">
                            <div class="icon">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="title">
                                <h4>Phone Number</h4>
                                <span>call us anytime</span>
                            </div>
                        </div>
                        <div class="bottom-part">                            
                            <div class="info">
                                <p>+1 (786) 703-8199</p>
                             
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-contact-card card3">
                        <div class="top-part">
                            <div class="icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="title">
                                <h4>Office Address</h4>
                                <span>Send mail anytime</span>
                            </div>
                        </div>
                        <div class="bottom-part">                            
                            <div class="info">
                                <p>1769 NW 79 Ave,</p>
                                <p> Miami, USA</p>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pt-5">
                <div class="block-contents mb-30 pt-60">
                    <div class="section-title text-center">
                        <h5 class="text-center">contact</h5>
                        <span>fil the form</span>
                        <h2>get <span>in touch</span></h2>
                    </div>
                </div>

                <div class="col-12 col-lg-12">
                    <div class="contact-form">                                                        
                        <form action="contact.php" class="row" id="contact-form" method="POST">
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <label for="fname">Full Name</label>
                                    <input type="text" name="name" id="fname" placeholder="Enter Name" >                                         
                                </div>
                            </div>                            
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <label for="email">Email Address</label>
                                    <input type="email" name="email" id="email" placeholder="Enter Email Address" >                                         
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" name="phno" id="phone" placeholder="Enter Number">                                         
                                </div>
                            </div>                                      
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <label for="subject">Subject</label>
                                    <input type="text" name="subject" id="subject" placeholder="Enter Subject">                                         
                                </div>
                            </div>                                      
                            <div class="col-md-12 col-12">
                                <div class="single-personal-info">
                                    <label for="message">Enter Message</label>
                                    <textarea id="message" name="message" placeholder="Enter message"></textarea>                                        
                                </div>
                            </div>                                      
                            <div class="col-md-12 col-12 text-center">
                                <input class="submit-btn" type="submit" value="Submit">
                            </div>                                      
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-branch-wrapper section-padding pt-0">
        <div class="container">
            <div class="col-lg-8 offset-lg-2 text-center col-12">
                <div class="section-title-2">
                  
                    <h1>Contact Us</h1>
                </div>
</div>
        </div>
        <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3590.9569083589763!2d-80.25837498578758!3d25.83796521174748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b974766e2273%3A0xc378a5bcd2b93801!2sCaribbean%20Consolidate!5e0!3m2!1sen!2sin!4v1676115057762!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

  <?php
  include_once "footer.php";
  ?>