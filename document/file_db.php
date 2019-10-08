<?php 
 echo" in php";
if(isset($_POST['upload']))
{
    
    $file_name=$_FILES['file']['name'];
    $file_type=$_FILES['file']['type'];
    $file_size=$_FILES['file']['size'];
    $file_temp_loc=$_FILES['file']['tmp_name'];
    $file_store="upload/".$file_name;

    move_uploaded_file($file_temp_loc,$file_store);

    $conn = mysqli_connect("localhost","root","","file");

    $query= "insert into file_db  values(' $file_name','$file_type','$file_size','$file_temp_loc')";

    mysqli_query($conn,$query);

    echo" file upload successfully";
}

?>