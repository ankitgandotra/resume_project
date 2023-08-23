<?php
include('header.php');
?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>About Section</h1>
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
                    <div class="card-body">
                        <h5 class="card-title">ALL Records</h5>
                        <div class="container">
                            <div class="text-right">
                                <a href="about1.php" class="btn btn-dark mt-2">Add New Record</a>
                            </div>
                            <!-- Table with stripped rows -->


                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">S.No</th>
                                        <th scope="col">Dob</th>;</th>
                                        <th scope="col">Website</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">City </th>
                                        <th scope="col">Age </th>
                                        <th scope="col">Degree</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Freelance</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    include 'config1.php';
                                    //   $sql = "SELECT demo.*, addresses.user_address FROM demo JOIN addresses ON demo.id = addresses.user_id";
                                    $sql = "select * from about";
                                    $result = mysqli_query($connection, $sql);

                                    if ($result) {
                                        $count = 1;
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $id = $row['id'];
                                            $idx = $count++;

                                            $dob = $row['dob'];
                                            $website = $row['website'];
                                            $phone = $row['phone'];
                                            $city = $row['city'];
                                            $age = $row['age'];
                                            $degree = $row['degree'];
                                            $email = $row['email']; // Changed to 'user_address'
                                            $freelance = $row['freelance'];

                                            echo '<tr>
                                <th scope="row">' . $idx . '</th>
                                <td>' . $dob . '</td>
                                <td>' . $website . '</td>
                                <td>' . $phone . '</td>
                                <td>' . $city . '</td>
                                <td>' . $age . '</td>
                                <td>' . $degree . '</td>
                                <td>' . $email . '</td>
                                <td>' . $freelance . '</td>
                              
                                <td>
                                    <button class="btn btn-primary"><a href="aboutupdate.php?updateid=' . $id . '" class="text-light">Update</a></button>
                                    <button class="btn btn-danger"><a href="delete.php?deleteid=' . $id . '" class="text-light">Delete</a></button>
                                </td>
                            </tr>';
                                        }
                                    } else {
                                        echo "Error in fetching records: " . mysqli_error($con);
                                    }
                                    mysqli_close($connection);
                                    ?>

                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
    </section>

</main><!-- End #main -->

<?php
include('footer.php');
?>