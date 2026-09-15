<?php
$con = new mysqli('localhost', 'brandingpioneers_shree_sai_doctor', 'tslGg6.#F6d{', 'brandingpioneers_shree_sai_doc');
if($conn1->connect_error)
{
    echo $conn1->connect_error;
}

$speci = $_POST['specility'];

$doc = $_POST['doctor'];



$sql2 = "SELECT * FROM doctor where specility LIKE '%{$speci}%' and name LIKE '%{$doc}%' ";

$result2 = mysqli_query($conn1, $sql2) or die(mysqli_error($conn1));
if(mysqli_num_rows($result2) > 0){
    

    while($row1 = mysqli_fetch_assoc($result2)){
        
        
            echo "<div class='col-lg-3'>
                      <div class='single-doctors-card'>
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

   

    mysqli_close($conn1);

}else{
    echo "<span style='color:red;'><b>No Doctor Found</b></span>";
}

?>