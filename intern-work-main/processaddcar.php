<?php

include 'config.php';
if(!isset($_SESSION['id'])){
  header('Location: index.php');
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["registration_no"]) && empty($_POST["make"])  && empty($_POST["model"])  && empty($_POST["model_year"])  && empty($_POST["mileage"])  && empty($_POST["insurance_code"])  && empty($_POST["amount_per_hour"]) && empty($_POST["is_available"])  && empty($_POST["myfileupload"])) {
        $nameErr = "Required fields cannot be empty";
    } else {
        $hasError = false;
        $errorString = '';

        $registration_no = test_input($_POST["registration_no"]);

        $make = test_input($_POST["make"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $make)) {
            $hasError = true;
            $errorString .= "Only letters and white space allowed";
        }
 //echo('1');

        $model = test_input($_POST["model"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $model)) {
            $hasError = true;
            $errorString .= "Only letters and white space allowed";
        }

        //echo('2');


        $model_year = test_input($_POST["model_year"],);
        if (!preg_match("/^\d+$/", $model_year)) {
            $hasError = true;
            $errorString .= "Only numbers allowed";
        }
       // echo('3');

        $is_available = test_input($_POST["is_available"]);
        
        $mileage = test_input($_POST["mileage_1"]);
        


        $insurance_code = test_input($_POST["insurance_code"]);
        $amount_per_hour = test_input($_POST["amount_per_hour"]);
        
       // $car_images = test_input($_POST["myfileupload"]);


        

        if($hasError){
            echo $errorString;
            exit;
        }
        
       // print_r($mileage);
        $car_images=$_FILES["myfileupload"]["name"];
//exit;

        $sql = "INSERT INTO cars (registration_no,  make,  model_year, mileage, insurance_code, amount_per_hour, is_available, car_images ) VALUES (:registration_no,  :make, :model_year, :mileage, :insurance_code, :amount_per_hour,:is_available, :myfileupload )";

        $stmt = $connection->prepare($sql);
        $stmt->bindParam(':registration_no', $registration_no);
        $stmt->bindParam(':make', $make);
        $stmt->bindParam(':model_year', $model_year);
        $stmt->bindParam(':mileage', $mileage);
         $stmt->bindParam(':insurance_code', $insurance_code);
         $stmt->bindParam(':amount_per_hour', $amount_per_hour);
         $stmt->bindParam(':is_available', $is_available);

        $stmt->bindParam(':myfileupload', $car_images);

        $status  = $stmt->execute();

        $target_dir = "casset/";
        $target_file = $target_dir . basename($_FILES["myfileupload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


        $check = getimagesize($_FILES["myfileupload"]["tmp_name"]);
        if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
        } else {
          echo "File is not an image.";
          $uploadOk = 0;
        }

        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
          }
          
          // Check file size
          if ($_FILES["myfileupload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
          }
          
          // Allow certain file formats
          if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
          && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
          }
          
          // Check if $uploadOk is set to 0 by an error
          if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
          // if everything is ok, try to upload file
          } else {
            if (move_uploaded_file($_FILES["myfileupload"]["tmp_name"], $target_file)) {
              echo "The file ". htmlspecialchars( basename( $_FILES["myfileupload"]["name"])). " has been uploaded.";
            } else {
              echo "Sorry, there was an error uploading your file.";
            }
          }
          

        if ($status) {
            echo 'inserted';
             header('Location:advert.php');
        } else {
            echo 'failed';
        }
    }
}

 








  

// Check if file already exists
