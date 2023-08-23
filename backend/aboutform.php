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
        header("location:dashboard.php");
    } else {

        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }
}
?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Tables</h1>
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
            <div class="col-lg-12">

                <div class="card">

                    <form class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01">DOB</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder=" EnterDOB" name="dob" required>

                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom02">Website</label>
                                <input type="text" class="form-control" id="validationCustom02" placeholder="Enter Website" name="website" required>

                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustomUsername">Phone</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    </div>
                                    <input type="text" name="phone" class="form-control" id="validationCustomUsername" placeholder="phone" aria-describedby="inputGroupPrepend" required>

                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01">City</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="Enter city" name="city" required>

                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom02">Age</label>
                                <input type="text" class="form-control" id="validationCustom02" placeholder="Enter Age" name="age" required>

                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustomUsername">Degree</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    </div>
                                    <input type="text" class="form-control" id="validationCustomUsername" placeholder="Enter Degree" name="degree" aria-describedby="inputGroupPrepend" required>

                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01">Email</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="Enter email" name="email" required>

                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom02">Freelance</label>
                                <input type="text" class="form-control" id="validationCustom02" placeholder="Enter Freelance" name="freelance" required>

                            </div>

                        </div>


                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                    Agree to terms and conditions
                                </label>
                                <div class="invalid-feedback">
                                    You must agree before submitting.
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
include('footer.php');
?>