                    <form  id="book-appointment"  method="post" name="google-sheet" action="">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" required data-error="Please enter your name" placeholder="Enter your name" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode == 32)" >
                                    
                        </div>
                        <div class="form-group">
                           <input type="hidden" name="date" class="form-control" value="<?php date_default_timezone_set('Asia/Kolkata'); echo date('d-m-y h:i:s');?>" required>
								    <input type="hidden" name="page" value="Doctor Page">
                                    <input type="tel" name="phone"  class="form-control" required data-error="Please enter your phone number" placeholder="Phone Number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..?)\../g, '$1');" maxlength="10" pattern="[0-9]{4}[0-9]{3}[0-9]{3}">
                                    
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="form-control" placeholder="Type your message"></textarea>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        <button type="submit" name="submit" class="default-btn">Submit Now</button>
                        </form>