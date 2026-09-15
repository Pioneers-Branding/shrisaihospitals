<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Shri Sai Hospital</title>
        
        <?php include('header-link.php');?>
    </head>

    <body>
       <?php include('header.php');?>
         <!-- Start Page Banner Area -->
        <div class="page-banner-area">
            <div class="container">
                <div class="page-banner-content" data-speed="0.06" data-revert="true">
                    <h2 data-aos="fade-right" data-aos-delay="30" data-aos-duration="300">Contact</h2>

                    <ul data-aos="fade-right" data-aos-delay="70" data-aos-duration="700">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Contact</li>
                    </ul>
                </div>

                <div class="page-banner-image" data-speed="0.08" data-revert="true">
                    <img src="assets/images/page-banner/banner-5.png" data-aos="fade-left" data-aos-delay="80" data-aos-duration="800" alt="image">
                </div>
            </div>
        </div>
        <!-- End Page Banner Area -->
        <!-- Start Contact Area -->
        <div class="contact-area ptb-100" style="background-image: url(assets/images/testimonials/testimonials-bg-1.jpg)!important;">
            <div class="container">
                <div class="contact-form-wrap">
                    <h3 class="text-center">Contact Us</h3>
<!--id="contactForm"-->
                    <form  id="book-appointment"  method="post" name="google-sheet" action="">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Your Name</label>
                                    <input type="text" name="name" class="form-control" required data-error="Please enter your name" placeholder="Enter your name" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode == 32)" >
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                 <div class="form-group">
                                    <label>Your Email</label>
                                    <input type="email" name="email" class="form-control"  placeholder="Enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="hidden" name="date" class="form-control" value="<?php date_default_timezone_set('Asia/Kolkata'); echo date('d-m-y h:i:s');?>" required>
								    <input type="hidden" name="page" value="Contact Page">
                                    <input type="tel" name="phone"  class="form-control" required data-error="Please enter your phone number" placeholder="Phone Number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..?)\../g, '$1');" maxlength="10" pattern="[0-9]{4}[0-9]{3}[0-9]{3}">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                               <div class="form-group">
                                   <label> Select Service</label>
                                    <select class="form-control" name="services"> 
                                        <option value=""> Select Service</option>
                                        <option value="Urology"> Urology </option>
                                        <option value="General Surgery"> General Surgery </option>
                                        <option value="Pathology"> Pathology </option>
                                        <option value="Cosmetic surgery"> Cosmetic surgery </option>
                                        <option value="Gastroenterology"> Gastroenterology </option>
                                        <option value="Orthopaedics"> Orthopaedics </option>
                                        <option value="Neurosurgery"> Neurosurgery </option>
                                        <option value="Pain clinic"> Pain clinic </option>
                                        <option value="Obstetrics Gynaecology Surgical"> Obstetrics Gynaecology Surgical </option>
                                        <option value="General medicine"> General medicine </option>
                                         
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                 <div class="form-group">
                                    <label>Your Message</label>
                                    <textarea name="message" class="form-control" cols="30" rows="6" data-error="Write your message" placeholder="Type your message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                
                                <button type="submit" name="submit" class="default-btn">Send Message</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                            
                        </div>
                     </form>
                </div>
            </div>
        </div>
        <!-- End Contact Area -->
        
        <!-- Start Contact Info Area -->
        <div class="contact-info-area ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="contact-info-box">
                                    <div class="icon">
                                        <i class="ri-phone-fill"></i>
                                    </div>
                                    <h3>
                                        <a href="tel:+91 7498984537">+91 7498984537,+91 9209320992</a>
                                    </h3>
        
                                    <span>Call Now</span>
                                </div>
                            </div>
        
                            <div class="col-lg-6 col-md-6">
                                <div class="contact-info-box">
                                    <div class="icon">
                                        <i class="ri-mail-send-fill"></i>
                                    </div>
                                    <h3><a href="mailto:info@shrisaihospitals.co.in">info@shrisaihospitals.co.in</a></h3>
                                    <span>Email</span>
                                </div>
                            </div>
                            
                            <div class="col-lg-12 col-md-6">
                            <div class="contact-info-box">
                                <div class="icon">
                                    <i class="ri-map-pin-line"></i>
                                </div>
                                <h3>NH6, opposite to Her Honda showroom, near patidar bhavan , Bhandara-441904</h3>
                                <span>Address</span>
                            </div>
                        </div>
                        </div>
    
                        
                    </div>
                    <div class="col-lg-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14882.629478853121!2d79.63472917583194!3d21.166029523680063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a2b398785122fbb%3A0x433c62d9cddec822!2sShri%20Sai%20Hospital!5e0!3m2!1sen!2sin!4v1679385362953!5m2!1sen!2sin" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="contact-social-information">
                        <!--<span>-->
                        <!--    <a href="mailto:info@.com">info@.com</a>-->
                        <!--</span>-->
                        
                        <ul class="social">
                            <li>
                                <a href="#" target="_blank">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="ri-twitter-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="ri-instagram-line"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="ri-linkedin-line"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Info Area -->

            
     
        
        <?php include('footer.php');?>
      
          
        
          