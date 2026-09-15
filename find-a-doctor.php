<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Shree Sai Hospital</title>
        
        <?php include('header-link.php');?>
        
    </head>

    <body>
       <?php include('header.php');?>
         <!-- Start Page Banner Area -->
        <div class="page-banner-area">
            <div class="container">
                <div class="page-banner-content" data-speed="0.06" data-revert="true">
                    <h2 data-aos="fade-right" data-aos-delay="30" data-aos-duration="300">Doctors</h2>

                    <ul data-aos="fade-right" data-aos-delay="70" data-aos-duration="700">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Find a Doctor</li>
                    </ul>
                </div>

                <div class="page-banner-image" data-speed="0.08" data-revert="true">
                    <img src="assets/images/page-banner/banner-1.png" data-aos="fade-left" data-aos-delay="80" data-aos-duration="800" alt="image">
                </div>
            </div>
        </div>
        <!-- End Page Banner Area -->
  
        <div class="doctors-area bg-f5f6fb ptb-50">
            <div class="container">
                <!--<div class="book-appointment-inner-box mb-20" style="padding:20px;">-->
                <!--    <div class="row align-items-center">-->
                <!--        <div class="col-lg-5 col-md-12">-->
                <!--            <div class="book-appointment-title">-->
                <!--                <h3>Search a Doctors</h3>-->
                <!--            </div>-->
                <!--        </div>-->

                <!--        <div class="col-lg-7 col-md-12">-->
                <!--            <form class="book-appointment-form" method="post" name="google-sheet" id="book-appointment">-->
                <!--                <div class="row justify-content-center">-->
                <!--                    <div class="col-lg-6 col-md-6">-->
                <!--                        <div class="form-group">-->
                <!--                              <select class="doctor-name-filter total-select" tabindex="-1" id="first-select">-->
                <!--                                <option value="" data-select2-id="6">Search by Speciality</option>-->
                <!--                                <option value="General Surgery">General Surgery</option>-->
                <!--                                <option value="Obstetrics and Gynecology">Obstetrics & Gynecology</option>-->
                <!--                                <option value="Pathology">Pathology</option>-->
                <!--                                <option value="Cosmetic surgery">Cosmetic surgery</option>-->
                <!--                                <option value="Gastroenterology">Gastroenterology</option>-->
                <!--                                <option value="Orthopedics">Orthopedics</option>-->
                <!--                                <option value="Urology">Urology</option>-->
                <!--                                <option value="Neurosurgery">Neurosurgery</option>-->
                                                
                <!--                            </select>-->
                                
                <!--                        </div>-->
                <!--                    </div>-->
                                    
                <!--                    <div class="col-lg-6 col-md-6">-->
                <!--                        <div class="form-group">-->
                <!--                            <select class="doctor-name-filter selectized" tabindex="-1" >-->
                <!--                                <option value="" data-select2-id="6">Search by Doctor</option>-->
                                  <?php
                                   //                $con = new mysqli('localhost', 'brandingpioneers_shree_sai_doctor', 'tslGg6.#F6d{', 'brandingpioneers_shree_sai_doc');
                                     //               if($con -> connect_error){
                                   //                    echo $con -> connect_error;
                                            //       }   
                                                    
                                              //      $sql1 = "SELECT * FROM doctor";
                                                    
                                              //      $result = mysqli_query($con, $sql1) or die(mysqli_error($con));
                                               //     if(mysqli_num_rows($result) >0){
                                               //     while($row= mysqli_fetch_assoc($esult)){
                                                //       echo "<option value='{$row['name']}'>{$row['name']}</option>";
                                                //       };
                                                         
                                                //      mysqli_close($con);
                                                //    }
                                               //    
                                             //   ?>
                <!--                            </select>-->
                <!--                        </div>-->
                <!--                    </div>-->

                <!--                </div>-->
                <!--            </form>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                
                <div class="row justify-content-center" id="load-table">
                    
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="professional-doctors-card">
                            <div class="doctors-image bg-f7f7f7">
                                <a href="#">
                                    <img src="webimg/doctor/Shrikant Girepunje.jpg" alt="image">
                                </a>
                            </div>
                            <div class="doctors-content">
                                <h5> <a href="dr-shrikant-dilip-girepunje.php">Dr. Shrikant Girepunje </h5>
                                <p><a href="#">Director, Consultant Laparoscopy General Surgeon & Laser Proctologist</a></p>
                                
                            <a href="dr-shrikant-dilip-girepunje.php" class="services-btn" data-abc="true">View More</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="professional-doctors-card">
                            <div class="doctors-image bg-f7f7f7">
                                <a href="#">
                                    <img src="webimg/doctor/Dr Prakash Jambhulkar1.jpg" alt="image">
                                </a>
                            </div>
                            <div class="doctors-content">
                                <h5><a href="dr-prakash-k-jambhulkar.php">Dr. Prakash Jambhulkar</h5>
                                <p>General medicine</a></p>
                                
                            <a href="dr-prakash-k-jambhulkar.php" class="services-btn" data-abc="true">View More</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="professional-doctors-card">
                            <div class="doctors-image bg-f7f7f7">
                                <a href="dr-saurabh-chahande.php">
                                    <img src="webimg/doctor/Dr. Saurabh Chahande-new.jpg" alt="image">
                                </a>
                            </div>
                            <div class="doctors-content">
                                <h5><a href="dr-saurabh-chahande.php">Dr. Saurabh Chahande</h5>
                                <p>Consultant Rheumatologist</a></p>
                                
                            <a href="dr-saurabh-chahande.php" class="services-btn" data-abc="true">View More</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="professional-doctors-card">
                            <div class="doctors-image bg-f7f7f7">
                                <a href="dr-yogesh-pralhad-shende.php">
                                    <img src="webimg/doctor/dr-yogesh-pralhad-shende.webp" alt="image">
                                </a>
                            </div>
                            <div class="doctors-content">
                                <h5> <a href="dr-yogesh-pralhad-shende.php">Dr. Yogesh Shende</h5>
                                <p>Neurosurgeon</a></p>
                                
                            <a href="dr-yogesh-pralhad-shende.php" class="services-btn" data-abc="true">View More</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="professional-doctors-card">
                            <div class="doctors-image bg-f7f7f7">
                                <a href="#">
                                    <img src="webimg/doctor/dr profile_11zon.webp" alt="image">
                                </a>
                            </div>
                            <div class="doctors-content">
                                <h5><a href="dr-jeshnu-tople.php">Dr. Jeshnu Tople</h5>
                                <p>Consultant Pain & Spine Specialist</a></p>
                                
                            <a href="dr-jeshnu-tople.php" class="services-btn" data-abc="true">View More</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="professional-doctors-card">
                            <div class="doctors-image bg-f7f7f7">
                                <a href="#">
                                    <img src="webimg/doctor/Dr Pranjali Girepunjenew.jpg" alt="image">
                                </a>
                            </div>
                            <div class="doctors-content">
                                <h5><a href="dr-pranjali-girepunje.php">Dr. Pranjali Girepunje</h5>
                                <p>Director, Consultant Pathologist</a></p>
                                
                            <a href="dr-pranjali-girepunje.php" class="services-btn" data-abc="true">View More</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="professional-doctors-card">
                            <div class="doctors-image bg-f7f7f7">
                                <a href="#">
                                    <img src="webimg/doctor/doc vector.jpg" alt="image">
                                </a>
                            </div>
                            <div class="doctors-content">
                                <h5><a href="dr-neelam-jambhulkar.php">Dr. Neelam Jambhulkar</h5>
                                <p>Gynaecologist</a></p>
                                
                            <a href="dr-neelam-jambhulkar.php" class="services-btn" data-abc="true">View More</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="professional-doctors-card">
                            <div class="doctors-image bg-f7f7f7">
                                <a href="dr-bhupendra-gaidahne.php">
                                    <img src="webimg/doctor/Dr. BHUPENDRA R GAIDHANE.jpg" alt="image">
                                </a>
                            </div>
                            <div class="doctors-content">
                                <h5><a href="dr-bhupendra-gaidahne.php">Dr. Bhupendra Gaidahne</h5>
                                <p>Consultant Plastic And Cosmetic Surgeon</a></p>
                                
                            <a href="dr-bhupendra-gaidahne.php" class="services-btn" data-abc="true">View More</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6">
                        <div class="professional-doctors-card">
                            <div class="doctors-image bg-f7f7f7">
                                <a href="dr-atul-gawande.php">
                                    <img src="webimg/doctor/Dr. Atul Gawand.jpg" alt="image">
                                </a>
                            </div>
                            <div class="doctors-content">
                                <h5><a href="dr-atul-gawande.php">Dr. Atul Gawande</h5>
                                <p>Consultant Gastroenterology</a></p>
                                
                            <a href="dr-atul-gawande.php" class="services-btn" data-abc="true">View More</a>
                            </div>
                        </div>
                    </div>  
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="professional-doctors-card">
                            <div class="doctors-image bg-f7f7f7">
                                <a href="#">
                                    <img src="webimg/doctor/Dr. Sushant Deole.jpg" alt="image">
                                </a>
                            </div>
                            <div class="doctors-content">
                                <h5><a href="dr-sushant-deole.php">Dr. Sushant Deole</h5>
                                <p>Consultant Urologist</a></p>
                                
                            <a href="dr-sushant-deole.php" class="services-btn" data-abc="true">View More</a>
                            </div>
                        </div>
                    </div>  

  
                        
                    </div>  








                </div>
            </div>
        </div>
	

<?php include('footer.php'); ?>