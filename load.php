<?php

$con = new mysqli('localhost', 'brandingpioneers_shree_sai_doctor', 'tslGg6.#F6d{', 'brandingpioneers_shree_sai_doc');
if($conn->connect_error)
{
    echo $conn->connect_error;
}



$sql1 = "SELECT * FROM doctor";

$result1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
if(mysqli_num_rows($result1) > 0){
    

    while($row = mysqli_fetch_assoc($result1)){
        
            echo "<div class='col-lg-3'><div class='single-doctors-card'>
                          <div class='doctors-image'>
                            <a href='{$row["link"]}'><img src='{$row["images"]}' alt='image'></a> 
                        </div>
                           <div class='doctors-content'>
                        <h3><a href='{$row["link"]}'>{$row["name"]}</a></h3>
                            <span>{$row["specility"]}</span>
                       <ul class='doc-info'>
                                 <li> Consultant Laparoscopy, </li>
                               <li>General Surgeon & Laser Proctologist</li>
                                  <li>MBBS (GMC, Nagpur), MS (AFMC, Pune)</li>
                           </ul>
                            <a href='{$row["link"]}' class='services-btn' data-abc='true'>View More</a>
                                  
                </div>
              </div>
              </div>";
    };

   

    mysqli_close($conn);

}else{
    echo "<span style='color:red;'><b>No Doctor Found</b></span>";
}

?>