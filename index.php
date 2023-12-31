<?php include 'header.php';
include 'conn.php';
if (!isset($_SESSION['logged_in'])) {
    header("location: login.php");
    ob_end_flush();
}
?>
<style>
    body {
        background-image: url("img/kh2.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        background-attachment: fixed;
    }
</style>
<?php
if(isset($_GET['view'])){ ?>
<style>
    body {
        background-image: url("img/kh.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        background-attachment: fixed;
    }
</style>
<?php
}else{ ?>

    <div class="row justify-content-center">
        <div class="col-md-5 shadow mt-5 p-3">
            <?php if (isset($_GET['msg'])) { ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>
                        <?php echo $_GET['msg'] ?>
                    </strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>

            <?php
            if (isset($_GET['edit'])) {

                $id = $_GET['id'];
                $selectData = $conn->prepare("SELECT * FROM appointment WHERE id = ?");
                $selectData->execute([$id]);

                foreach ($selectData as $data) { ?>
                <center><h3>Clients Information</h3></center>
                    <form action="process.php" method="post">
                        <div class="d-flex mt-3">
                            <input type="hidden" name="user_id" value="<?= $data['id'] ?>">
                            <div class="mt-1 ms-5 me-5">
                                <label for="fname"><b>Firstname</b></label>
                                <input type="text" class="form-control " id="fname" name="firstname" required value="<?= $data['fname'] ?>">
                            </div>
                            <div class="mt-1 ms-5 me-5">
                                <label for="lname "><b>Lastname</b></label>
                                <input type="text" class="form-control" id="lname" name="lastname" required value="<?= $data['lname'] ?>">
                            </div>
                        </div>
                        <div class="ms-5 me-5">
                            <label for="age"><b>Age</b></label>
                           <input type="text" class="form-control" id="age" name="age" required value="<?= $data['age'] ?>">
                        </div>
                        <div class="ms-5 me-5">
                            <label for="gender"><b>Gender</b></label>
                            <input type="text" class="form-control" id="gender" name="gender" required value="<?= $data['gender'] ?>">
                        </div>
                        <div class="ms-5 me-5">
                            <label for="contact"><b>Contact</b></label>
                            <input type="text" class="form-control" id="contact" name="contact" required value="<?= $data['contact'] ?>">
                        </div>
                        <div class="ms-5 me-5">
                            <label for="address"><b>Address</b></label>
                            <input type="text" class="form-control" id="address" name="address" required value="<?= $data['address'] ?>">
                        </div>
                        <div class="ms-5 me-5">
                            <label for="Date"><b>Date of Check-up</b></label>
                            <input type="date" id="Date" name="date" class="form-control" required value="<?= $data['date'] ?>">
                        </div>

                        <div class="ms-5 me-5 mb-3">
                            <label for="Time"><b>Time</b></label>
                            <input type="time" id="Time" name="time" class="form-control" required value="<?= $data['time'] ?>">
                        </div>
                        <div class="ms-5 me-5 mb-3">
                            <label for="reason"><b>Disease</b></label>
                            <input type="text" id="reason" name="reason" class="form-control" required value="<?= $data['reason'] ?>">
                        </div>
                        <div>
                            <center>
                                <button class="btn btn-success" type="submit" name="editData"
                                    style="background-color: bg-info text-dark bg-opacity-25;"><b> Update Client </b></button>
                            </center>
                        </div>
                    </form>

                <?php }
            } else { ?>
             <center><h3>Clients Information</h3></center>
                <form action="process.php" method="post">
                    <div class="d-flex mt-3">
                        <input type="hidden" name="user_id" value="<?= $_SESSION['u_id'] ?>">
                        <div class="mt-1 ms-5 me-5">
                            <label for="fname"><b>Firstname</b></label>
                            <input type="text" class="form-control " id="fname" name="firstname" required>
                        </div>
                        <div class="mt-1 ms-5 me-5">
                            <label for="lname "><b>Lastname</b></label>
                            <input type="text" class="form-control" id="lname" name="lastname" required>
                        </div>
                    </div>
                    <div class="ms-5 me-5">
                            <label for="age"><b>Age</b></label>
                           <input type="text" class="form-control" id="age" name="age" required>
                        </div>
                        <div class="ms-5 me-5">
                            <label for="gender"><b>Gender</b></label>
                            <input type="text" class="form-control" id="gender" name="gender" required>
                        </div>
                    <div class="ms-5 me-5">
                        <label for="contact"><b>Contact</b></label>
                        <input type="text" class="form-control" id="contact" name="contact" required>
                    </div>
                    <div class="ms-5 me-5">
                        <label for="address"><b>Address</b></label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                    <div class="ms-5 me-5">
                        <label for="Date"><b>Date of Check-up</b></label>
                        <input type="date" id="Date" name="date" class="form-control" required>
                    </div>

                    <div class="ms-5 me-5 mb-3">
                        <label for="Time"><b>Time</b></label>
                        <input type="time" id="Time" name="time" class="form-control" required>
                    </div>
                    <div class="ms-5 me-5 mb-3">
                        <label for="reason"><b>Disease</b></label>
                        <input type="text" id="reason" name="reason" class="form-control" required>
                    </div>
                    <div>
                        <center>
                            <button class="btn btn-success" type="submit" name=addData
                                style="background-color: bg-info text-dark bg-opacity-25;"><b> Add client </b></button>
                        </center>
                    </div>
                </form>
            <?php } ?>


        </div>
    </div>

<?php } ?>

<!--display -->
<hr>
<div class="row mt-4 justify-content-center">
    <div class="col-sm-10">
        <div class="table">
            <table class="table shadow p-2">
                <thead>
                    <th>No.</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Date of Check-up</th>
                    <th>Time</th>
                    <th>Disease</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                    $userID = $_SESSION['u_id'];
                    $cnt = 1;
                    $select = $conn->prepare("SELECT * FROM appointment WHERE user_id = ?");
                    $select->execute([$userID]);
                    foreach ($select as $value) { ?>

                        <tr>
                            <td>
                                <?= $cnt++ ?>
                            </td>
                            <td>
                                <?= $value['fname'] ?>
                            </td>
                            <td>
                                <?= $value['lname'] ?>
                            </td>
                            <td>
                                <?= $value['age'] ?>
                            </td>
                            <td>
                                <?= $value['gender'] ?>
                            </td>
                            <td>
                                <?= $value['contact'] ?>
                            </td>
                            <td>
                                <?= $value['address'] ?>
                            </td>
                            <td>
                                <?= $value['date'] ?>
                            </td>
                            <td>
                                <?= $value['time'] ?>
                            </td>
                            <td>
                                <?= $value['reason'] ?>
                            </td>
                            <td><a href="index.php?view&id=<?= $value['id'] ?>" class="text-decoration-none">👁‍🗨</a>|
                                <a href="index.php?edit&id=<?= $value['id'] ?>" class="text-decoration-none">✏️</a>
                                <a href="process.php?delete&id=<?= $value['id'] ?>" class="text-decoration-none">❌</a>
                            </td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</body>

</html>