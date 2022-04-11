<?php include "includes/head.php";

$eemail = $_SESSION['email'];

$select_query = query("SELECT * FROM users WHERE email = '{$eemail}' ");
confirm($select_query);

if (mysqli_num_rows($select_query) > 0) {
    while ($row = fetch_array($select_query)) {

        $id = $row['id'];
    }
}

$select_query = query("SELECT * FROM educational_details WHERE u_id = '{$id}' ");
confirm($select_query);

if (mysqli_num_rows($select_query) > 0) {
    while ($row = fetch_array($select_query)) {

        $ssc_board = $row['ssc_board'];
        $ssc_passing_year = $row['ssc_passing_year'];
        $ssc_percentage = $row['ssc_percentage'];
        $ssc_grade = $row['ssc_grade'];
        $ssc_total = $row['ssc_total'];
        $ssc_out = $row['ssc_out'];
        $ssc_school = $row['ssc_school'];
        $ssc_destrict = $row['ssc_destrict'];
        $ssc_state = $row['ssc_state'];
        $ssc_country = $row['ssc_country'];
        $hsc_board = $row['hsc_board'];
        $hsc_passing_year = $row['hsc_passing_year'];
        $hsc_percentage = $row['hsc_percentage'];
        $hsc_grade = $row['hsc_grade'];
        $hsc_total = $row['hsc_total'];
        $hsc_out = $row['hsc_out'];
        $hsc_school = $row['hsc_school'];
        $hsc_district = $row['hsc_district'];
        $hsc_state = $row['hsc_state'];
        $hsc_country = $row['hsc_country'];
       
     
    }
}

if (isset($_POST['educational_details_submit'])) {
    educational_details_submit();
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
                        <div class="bg-primary text-light  head">Educational Details </div>
                        <div class="bg-light p-2 container-fluid">
                            <div class="row">

                                <div class="col-sm-12 col-xs-12">
                                    <form action="" method="post">
                                        <div class=" form-group">
                                            <h4 for="" class="bg-dark text-white p-2">
                                                SSC Details
                                            </h4>
                                        </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <form action="" method="post">
                                        <div class=" form-group">
                                            <label for="">
                                                SSC Board
                                            </label>
                                            <input type="text" class="form-control" name="ssc_board" value="<?php echo $ssc_board; ?>">
                                            <input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>">
                                        </div>
                                </div>


                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Passing Year:
                                        </label>
                                        <input type="text" name="ssc_passing_year" class="form-control" placeholder="Enter Your Passing Year" value="<?php echo $ssc_passing_year; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Percentage %:
                                        </label>
                                        <input type="text" name="ssc_percentage" class="form-control" placeholder="Enter Your %" value="<?php echo $ssc_percentage; ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Grade:
                                        </label>
                                        <input type="text" name="ssc_grade" class="form-control" placeholder="" value="<?php echo $ssc_grade; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Total Marks Obtained:
                                        </label>
                                        <input type="text" name="ssc_total" class="form-control" placeholder="Total Marks Obtained:." value="<?php echo $ssc_total; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">

                                    <div class=" form-group">
                                        <label for="">
                                            Out Of
                                        </label>
                                        <input type="text" name="ssc_out" class="form-control" placeholder="Out Of." value="<?php echo $ssc_out; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            School Name
                                        </label>
                                        <input type="text" name="ssc_school" class="form-control" placeholder="School Name." value="<?php echo $ssc_school; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            District
                                        </label>
                                        <input type="text" name="ssc_destrict" class="form-control" placeholder="School District." value="<?php echo $ssc_destrict; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            State
                                        </label>
                                        <input type="text" name="ssc_state" class="form-control" placeholder="School State." value="<?php echo $ssc_state; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Country
                                        </label>
                                        <input type="text" name="ssc_country" class="form-control" placeholder="School Country." value="<?php echo $ssc_country; ?>">
                                    </div>
                                </div>



                                <div class="col-sm-12 col-xs-12">
                                        <div class=" form-group">
                                            <h4 for="" class="bg-dark text-white p-2">
                                                HSC Details
                                            </h4>
                                        </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <form action="" method="post">
                                        <div class=" form-group">
                                            <label for="">
                                                HSC Board
                                            </label>
                                       
                                            <input type="tel" name="hsc_board" class="form-control" id="" value="<?php echo $hsc_board; ?>">
                                        </div>
                                </div>


                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Passing Year:
                                        </label>
                                        <input type="text" name="hsc_passing_year" class="form-control" placeholder="Enter Your Passing Year" value="<?php echo $hsc_passing_year; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Percentage %:
                                        </label>
                                        <input type="text" name="hsc_percentage" class="form-control" placeholder="" value="<?php echo $hsc_percentage; ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Grade:
                                        </label>
                                        <input type="text" name="hsc_grade" class="form-control" placeholder="" value="<?php echo $hsc_grade; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Total Marks Obtained:
                                        </label>
                                        <input type="text" name="hsc_total" class="form-control" placeholder="Total Marks Obtained:." value="<?php echo $hsc_total; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">

                                    <div class=" form-group">
                                        <label for="">
                                            Out Of
                                        </label>
                                        <input type="text" name="hsc_out" class="form-control" placeholder="Out Of." value="<?php echo $hsc_out; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            School Name
                                        </label>
                                        <input type="text" name="hsc_school" class="form-control" placeholder="School Name." value="<?php echo $hsc_school; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            District
                                        </label>
                                        <input type="text" name="hsc_district" class="form-control" placeholder="School District." value="<?php echo $hsc_district; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            State
                                        </label>
                                        <input type="text" name="hsc_state" class="form-control" placeholder="School State." value="<?php echo $hsc_state; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Country
                                        </label>
                                        <input type="text" name="hsc_country" class="form-control" placeholder="School Country." value="<?php echo $ssc_country; ?>">
                                    </div>
                                </div>



                                <div class="col-12 text-right">
                                    <div class=" form-group">
                                        <button type="submit" class="btn btn-primary" name="educational_details_submit">Submit & Next</button>
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