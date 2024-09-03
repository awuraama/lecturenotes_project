<?php 
include 'config.php';
if(!isset($_SESSION['id'])){
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hannah Osae | Rental System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    </style>
</head>

<body>
    <form action="">
        <div class="container text-center">
            <label for="bookee_id" class="form-label"><b>Your bookee ID is :</b> <?php echo $_SESSION['bookee_id'] ?> </label>
        </div>

        <button type="button" id="back" value="back" name="back"
            class="p-2 px-5 mt-3 rounded bg-danger float-end text-light m-5"><a href="advert.php"
                style="text-decoration: none; color:white;">Close</a></button>

    </form>
</body>

</html>