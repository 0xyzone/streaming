<?php
include "../includes/header.php";
if(!isset($_SESSION['']))

?>

<section class="signup fadeInBottom">
    <div class="text-6xl font-bold text-white mb-10">Log In</div>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" id="signup" class="w-full">
        <input type="text" name="uname" id="uname" placeholder="Username/Email Address/Phone" autofocus="on" required>
        <div class="relative w-full">
            <input type="password" name="pw" id="pw" placeholder="Password" required class="w-full z-0">
            <a href="javascript:void(0)" class="absolute right-1 bottom-1.5" id="showhide">
                <i class="fa-solid fa-eye text-white" id="eye" title="Hide/Unhide Password"></i>
            </a>
        </div>
        <div class="flex mx-auto gap-2 items-center mt-2">
            <button for="signup" type="submit" class="w-max btn-primary mx-auto">Log In</button>
            <p class="text-gray-500">or</p>
            <a href="<?php echo link; ?>signup" class="w-max btn-primary mx-auto ">Sign Up</a>
        </div>
    </form>
    <script>
        $('#showhide').click(function() {
            // alert("Handler for .click() called.");
            if ($('#pw').attr('type') == "password") {
                $('#pw').attr('type', 'text');
                $('#eye').removeClass('fa-eye');
                $('#eye').addClass('fa-eye-slash');
            } else {
                $('#pw').attr('type', 'password');
                $('#eye').removeClass('fa-eye-slash');
                $('#eye').addClass('fa-eye');
            }
        });
    </script>
</section>

<?php

?>