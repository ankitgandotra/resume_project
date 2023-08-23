<?php
include('header.php');
?>
<?php

include 'config1.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $dob = $_REQUEST['dob'];

    $website = $_REQUEST['website'];

    $phone = $_REQUEST['phone'];

    $city = $_REQUEST['city'];

    $age = $_REQUEST['age'];

    $degree = $_REQUEST['degree'];

    $email = $_REQUEST['email'];

    $freelance = $_REQUEST['freelance'];

    $sql = "INSERT INTO about (dob,website,phone,city,age,degree,email,freelance) VALUES ('$dob' ,'$website', '$phone', '$city' , '$age', '$degree' , '$email' ,'$freelance')";

    if (mysqli_query($connection, $sql)) {
        echo "New record created successfully";
        header("location:tables-data.php");
    } else {

        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }
}
?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1> Add About Details</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->


    <section class="section">
        <div class="row">
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">General Form Elements</h5>

                        <!-- General Form Elements -->
                        <form method="post" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">DOB</label>
                                <div class="col-sm-10">
                                    <input type="date" id="validationCustom01" placeholder=" EnterDOB" name="dob" required class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Website</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="validationCustom02" placeholder="Enter Website" name="website" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-10">
                                    <input type="text" name="phone" class="form-control" id="validationCustomUsername" placeholder="phone" aria-describedby="inputGroupPrepend" required>

                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">City</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="validationCustom01" placeholder="Enter city" name="city" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Age</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="validationCustom02" placeholder="Enter Age" name="age" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputDate" class="col-sm-2 col-form-label">Degree</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="validationCustomUsername" placeholder="Enter Degree" name="degree" aria-describedby="inputGroupPrepend" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputTime" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="validationCustom01" placeholder="Enter email" name="email" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputColor" class="col-sm-2 col-form-label">Freelance</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="validationCustom02" placeholder="Enter Freelance" name="freelance" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-10">
                                    <button type="submit" name="submit" class="btn btn-primary">Submit Form</button>
                                    <a href="tables-data.php" class="btn btn-warning">Back</a>
                                </div>
                            </div>

                        </form><!-- End General Form Elements -->
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

<?php
include('footer.php');
?>