<?php

 if (isset($_POST['submit'])) {
    $file_name = $_FILES['video']['tmp_name'];
    $cut = $_POST['cut'];
    $duration = $_POST['duration'];

     $output_file = 'output_' . time() . '_' . uniqid() . '.mp4';

    $command = "ffmpeg -ss " . escapeshellarg($cut) . " -i " . escapeshellarg($file_name) . " -t " . escapeshellarg($duration) . " -c:v libx264 -c:a aac " . escapeshellarg($output_file);
    system($command);

    //echo "Video saved as: " . $output_file;
} 
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ffmpeg</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container" style="margin-top: 200px;">
      <div class="row">
        <div class="offset-md-4   col-md-6  ">
          <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="">Video</label>
              <input type="file" name="video" id="video" class="form-control" />
            </div>
            <div class="form-group">
              <label for="">Cut From</label>
              <input type="text" name="cut" id="cut" class="form-control" />
            </div>
            <div class="form-group">
              <label for="">Duration</label>
              <input type="text" name="duration" id="duration" class="form-control"/>
            </div>

            <div>
              <input type="submit" value="Split"  name="submit" class="btn btn-success float-end" style="margin-top: 20px;"/>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
