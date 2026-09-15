                       <div class="sidebar_new" style="box-shadow: 5px 12px 50px 0px #e9ecef;background-color: #fff;">
                            <aside class="widget-area">
                            <div class="widget widget_top-services">
                                <h3 class="widget-title">Top Services</h3>

                                <ul>
                                    <li><a href="urology.php" data-abc="true">Urology</a></li>
                                    <li><a href="general-surgery.php" data-abc="true">General Surgery </a></li>
                                    <li><a href="pathology.php" data-abc="true">Pathology </a></li>
                                    <li><a href="cosmetic-surgery.php" data-abc="true">Cosmetic surgery</a></li>
                                    <li><a href="gastroenterology.php" data-abc="true">Gastroenterology</a></li>
                                    <li><a href="orthopaedics.php" data-abc="true">Orthopaedics</a></li>
                                    <li><a href="neurosurgery.php" data-abc="true">Neurosurgery</a></li>
                                    <li><a href="pain-clinic.php" data-abc="true">Pain clinic</a></li>
                                    <li><a href="obstetrics-gynaecology-surgical-care.php" data-abc="true">Obstetrics Gynaecology Surgical</a></li>
                                     <li><a href="general-medicine.php" data-abc="true">General medicine</a></li>
                                </ul>
                            </div>
                        
                        </aside>
                        <div class="appointment-form-wrap" data-speed="0.05" data-revert="true" style="padding: 30px 30px 30px 30px;">
                            <div class="wrap-title">
                                <h4>Make an Appointment</h4>
                            </div>   

                             <form  id="book-appointment"  method="post" name="google-sheet" action="">
                                <div class="form-group">
                            <input type="text" name="name" class="form-control" required data-error="Please enter your name" placeholder="Enter your name" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode == 32)" >
                                    
                        </div>
                        <div class="form-group">
                           <input type="hidden" name="date" class="form-control" value="<?php date_default_timezone_set('Asia/Kolkata'); echo date('d-m-y h:i:s');?>" required>
								    <input type="hidden" name="page" value="Service Page">
                                    <input type="tel" name="phone"  class="form-control" required data-error="Please enter your phone number" placeholder="Phone Number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..?)\../g, '$1');" maxlength="10" pattern="[0-9]{4}[0-9]{3}[0-9]{3}">
                                    
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="form-control" placeholder="Type your message"></textarea>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        <button type="submit" name="submit" class="default-btn">Submit Now</button>
                        </form>
                        </div>
                       </div>
                       