<?php
session_start();
include_once "globalvars.php";
include_once "dbconnection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo link ?>dist/output.css">
    <link rel="stylesheet" href="<?php echo link ?>assets/css/all.css">
    <script src="<?php echo link ?>assets/js/jquery-3.6.0.min.js"></script>
    <title id="title"></title>
</head>

<body class="bg-neutral-800 w-full h-screen relative overflow-hidden">
    <?php
    if (isset($_SESSION['error'])) :
    ?>
        <div class="absolute z-20 w-max py-2 px-4 font-bold bottom-8 right-8 bg-red-200 text-red-800 border border-current fadeInLeft text-xl shadow-main rounded" id="err">
            <?php echo $_SESSION['error']; ?>
        </div>
        <script>
            setTimeout(function() {
                $('#err').fadeOut('slow');
                <?php unset($_SESSION['error']); ?>
            }, 3000); // <-- time in milliseconds
        </script>
    <?php endif;  ?>
    <?php
    if (isset($_SESSION['success'])) :
    ?>
        <div class="absolute z-20 w-max py-2 px-4 bottom-8 right-8 bg-lime-200 text-lime-800 border border-current fadeInLeft text-xl shadow-main rounded" id="success">
            <?php echo $_SESSION['success']; ?>
        </div>
        <script>
            setTimeout(function() {
                $('#success').fadeOut('slow');
                <?php unset($_SESSION['success']); ?>
            }, 3000); // <-- time in milliseconds
        </script>
    <?php endif;  ?>