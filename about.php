<?php include 'header.php';
include 'conn.php';

?>
<style>
    body {
        background-image: url("img/pic4.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        background-attachment: fixed;
    }

    .main {
        height: 100%;
        width: 100%;
        display: flex;
        justify-content: center;
    }

    .right {
        height: 90%;
        width: 90%;
        font-family: Tahoma;
        padding: 40px;
    }

    .right p {
        color:black;
    }

    .img {
        height: 200px;
        width: 200px;
        border-radius: 50%;
        overflow: hidden;
        margin-top: 50px;

    }

    h4 {
        text-align: center;
    }

    .left {
        height: 90%;
        width: 60%;
        font-family: Tahoma;
        padding: 40px;
        font-size: 20px;
    }

    .left p {
        margin-top: 50px;
    }
</style>

<body>
    <div class="main">
        <div class="left">
            <h4>ABOUT US</h4>
            <p>Welcome to the High School Form System could refer to the registration or enrollment system used by
                high schools to collect and manage student information. This system typically includes forms for student
                registration, emergency contacts, health information, and other essential details. It streamlines the
                administrative process for schools, ensuring accurate record-keeping and efficient communication with
                students and parents.</p>
        </div>
        <div class="right">
            <h4>PROFILE</h4>
            <p></p>
            <center>
                <div class="img">
                    <img src="img/pic6.jpg" width="100%" height="100%">
                </div>

                <h5>JIMCEL D. LAGINE</h5><br>
                <p>Email : hef@gmail.com <br>
                    Contact Number : 0987654321</p>
            </center>

        </div>
    </div>
    <center>
        <a href="index.php"> <button class="btn btn-primary"><b>Back</b> </button></a>
    </center>

</body>