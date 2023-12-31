<?php include 'header.php'; 
if(isset($_SESSION['logged_in'])){
    header("location: index.php");
    ob_end_flush();
}
?>
<style>
    body {
        background-image: url("img/kh.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        background-attachment: fixed;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-6 shadow p-4  mt-4">
            <?php if (isset($_GET['msg'])) { ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong><?= $_GET['msg']; ?></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>
            <form method="POST" action="process.php">
            <center><p><h5>Register</h5></p></center>
                <div class="row mb-3">
                    <label for="fname" class="col-sm-4 col-form-label"><b>First Name</b></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="fname" name="f_name" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="lname" class="col-sm-4 col-form-label"><b>Last Name</b></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="lname" name="l_name" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="email" class="col-sm-4 col-form-label"><b>Email</b></label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="password" class="col-sm-4 col-form-label"><b>Password</b></label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" id="password" name="password1" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="pass2" class="col-sm-4 col-form-label"><b>Confirm Password</b></label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" id="pass2" name="password2" required>
                    </div>
                </div> 
             <center>
                <button type="submit" class="btn btn-primary" name="register"><b>Sign up</b></button></center>
            </form>
        </div>
    </div>
</div>
</body>

</html>