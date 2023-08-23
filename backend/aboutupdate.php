<?php
include('header.php');
?>
<?php
include 'config1.php';
//echo "hihhhhihihihihihihi";

$id = $_GET['updateid'];

$sql = "select * from about where id =$id ";

$result = mysqli_query($connection, $sql);

$row = mysqli_fetch_assoc($result);
//  print_r($row);

$dob = $row['dob'];
$website = $row['website'];
$phone = $row['phone'];
$city = $row['city'];
$age = $row['age'];
$degree = $row['degree'];
$email = $row['email'];
// Changed to 'user_address'
$freelance = $row['freelance'];
if (isset($_POST['submit'])) {
    // print_r($_POST);
    // die();
    $dob = $_POST['dob'];
    $website = $_POST['website'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $age = $_POST['age'];

    $degree = $_POST['degree'];
    $email = $_POST['email'];
    $freelance = $_POST['freelance'];
}
$sql = "update about set dob = '$dob' , website='$website', phone='$phone', city='$city' , age='$age',
    degree ='$degree',email ='$email', freelance ='$freelance' where id=$id";
// echo $sql;
// die();
print_r($sql);

if (mysqli_query($connection, $sql)) {
    echo " record Updated successfully";
    header('location:tables-data.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1> Update About Details</h1>
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
                                    <input type="date" id="validationCustom01" value=<?= $dob; ?> name="dob" required class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Website</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value=<?= $website; ?> id="validationCustom02" name="website" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-10">
                                    <input type="text" name="phone" class="form-control" id="validationCustomUsername" value=<?= $phone; ?> aria-describedby="inputGroupPrepend" required>

                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">City</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="validationCustom01" value=<?= $city; ?> name="city" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Age</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="validationCustom02" value=<?= $age; ?> name="age" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputDate" class="col-sm-2 col-form-label">Degree</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="validationCustomUsername" value=<?= $degree; ?> name="degree" aria-describedby="inputGroupPrepend" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputTime" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="validationCustom01" value=<?= $email; ?> name="email" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputColor" class="col-sm-2 col-form-label">Freelance</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="validationCustom02" value=<?= $freelance; ?> name="freelance" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-10">
                                    <button type="submit" name="submit" class="btn btn-primary">Update Form</button>
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