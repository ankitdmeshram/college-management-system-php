<?php include "includes/head.php";

$eemail = $_SESSION['email'];

$select_query = query("SELECT * FROM users WHERE email = '{$eemail}' ");
confirm($select_query);

if (mysqli_num_rows($select_query) > 0) {
    while ($row = fetch_array($select_query)) {

        $name  = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $phone2 = $row['phone2'];
    }
}

if (isset($_POST['basic_info_submit'])) {
    basic_info();
}

?>


<div class="container-fluid gs-cont">
    <div class="gs-container">
        <?php include "includes/sidebar.php"; ?>
        <div class="gs-body gs-col container-fluid bg-light" id="gs-body">
            <?php include "includes/nav.php"; ?>
            <div class="gs-content card m-3 p-3">



                <div class="row pt-2 ad-head">
                    <div class="col m-1">



                        <?php if (display_message()) {
                        ?>
                            <div class="bg-danger text-light  head"><?php display_message(); ?></div>
                        <?php
                        }
                        ?>
                        <div class="bg-primary text-light  head">Select Program And Campus  </div>
                        <div class="bg-light p-2 container-fluid">
                            <div class="row">

                            <div class="col-sm-6 col-xs-12">
                                    <form action="" method="post">
                                        <div class=" form-group">
                                            <label for="">
                                            PROGRAM APPLYING FOR :
                                            </label>
                                            <select name="program" id="clg_type" class="form-control">
                                                <option>Jr. College</option>
                                                <option>Sr. College</option>
                                            </select>

                                        </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <form action="" method="post">
                                        <div class=" form-group">
                                            <label for="">
                                            Stream :
                                            </label>

                                            <script>

                                                    typ = document.getElementById("clg_type").value
                                                    // alert(typ);

                                            </script>

                                            <select name="program" id="clg_type" class="form-control">
                                            <?php
                                                    $query = query("SELECT * FROM academics");
                                                    confirm($query);

                                                    while($row = fetch_array($query))
                                                    {
                                                        echo "<option> " . $row['course_name'] . "</option>";
                                                    }
?>
                                            
                                            </select>

                                        </div>
                                </div>

                                

                                <div class="col-12 text-right">
                                    <div class=" form-group">
                                        <!-- <button type="submit" class="btn btn-primary" name="basic_info_submit">Submit & Next</button> -->
                                        <a href="personal-details" class="btn btn-primary">Submit & Next</a>
                                    </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>









            </div>
        </div>
    </div>
</div>
<?php include "includes/footer.php"; ?>