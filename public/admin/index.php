<?php include "includes/head.php";

$eemail = $_SESSION['email'];



?>


<div class="container-fluid gs-cont">
    <div class="gs-container">
        <?php include "includes/sidebar.php"; ?>
        <div class="gs-body gs-col container-fluid bg-light" id="gs-body">
            <?php include "includes/nav.php"; ?>
            <div class="gs-content card m-3 p-3">


                <div class="row pt-4 pb-3 justify-content-center">
                    <div class="col-md-3-sm col-4 ">
                        <div class="card shadow pt-5 pb-5 m-1 text-white" style="background-color: #343A40;">
                            <div class="text-center">
                                <?php
                                $result = query("SELECT * FROM users WHERE role = 2");
                                $drows = mysqli_num_rows($result);
                                echo "<h1>" . $drows . "</h1>";
                                ?>
                                <h5>New Admission</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3-sm col-4 ">
                        <div class="card shadow pt-5 pb-5 m-1 text-white" style="background-color: #343A40;">
                            <div class="text-center">
                                <?php
                                $result = query("SELECT * FROM users WHERE role = 3");
                                $drows = mysqli_num_rows($result);
                                echo "<h1>" . $drows . "</h1>";
                                ?>
                                <h5>Students</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3-sm col-4 ">
                        <div class="card shadow pt-5 pb-5 m-1 text-white" style="background-color: #343A40;">
                            <div class="text-center">
                                <?php
                                $result = query("SELECT * FROM users");
                                $drows = mysqli_num_rows($result);
                                echo "<h1>" . $drows . "</h1>";
                                ?>
                                <h5>Users</h5>
                            </div>
                        </div>
                    </div>
                </div>












            </div>
        </div>
    </div>
</div>
<?php include "includes/footer.php"; ?>