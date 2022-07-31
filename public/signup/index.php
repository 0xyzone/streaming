<?php
include_once "../includes/header.php";
include_once "../includes/dbconnection.php";

if ($_POST) {
    $uname = $_POST['uname'];
    $pw = $_POST['pw'];
    date_default_timezone_set("Asia/Kathmandu");
    $createdon = date('Y-m-d H:i:s');

    $unamequery = mysqli_query($db, "SELECT * FROM vcas_users WHERE uname='$uname'");

    if (mysqli_num_rows($unamequery) >= 1) {
        $_SESSION['error'] = "Username already exists.";
    } else {
        $stmt = $db->prepare("INSERT INTO vcas_users (uname, pw, created_on) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $uname, $pw, $createdon);
        $uname = $_POST['uname'];
        $pw = $_POST['pw'];
        $stmt->execute();
        $stmt->close();
        $db->close();

        $_SESSION['success'] = 'User added successfully';
    }
}

?>

<div class="flex flex-col gap-2 w-full h-full justify-center items-center">
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" class="flex flex-col gap-2">
        <input type="text" name="uname" id="uname" placeholder="Username" autofocus required>
        <div class="relative w-full">
            <input type="password" name="pw" id="pw" placeholder="Password" required>
            <a href="javascript:void(0)" class="absolute right-1 bottom-1.5" id="showhide">
                <i class="fa-solid fa-eye text-white" id="eye" title="Hide/Unhide Password"></i>
            </a>
        </div>
        <button type="submit" class="btn-primary mt-2">Sign Up!</button>
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
</div>

<?php
include_once "../includes/footer.php"
?>