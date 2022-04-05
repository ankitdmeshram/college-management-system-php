<?php include "includes/head.php";

$eemail = $_SESSION['email'];

$select_query = query("SELECT * FROM personal_details WHERE email = '{$eemail}' ");
confirm($select_query);

if (mysqli_num_rows($select_query) > 0) {
    while ($row = fetch_array($select_query)) {

        $email = $row['email'];
        $fname = $row['fname'];
    }
}

$select_query = query("SELECT * FROM users WHERE email = '{$eemail}' ");
confirm($select_query);

if (mysqli_num_rows($select_query) > 0) {
    while ($row = fetch_array($select_query)) {

        $name = $row['name'];
        $email = $row['email'];
        $phone2 = $row['phone2'];
    }
}

if (isset($_POST['personal_info_submit'])) {
    educational_submit();
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
                                            <input type="text" class="form-control" name="ssc_board">
                                        </div>
                                </div>


                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Passing Year:
                                        </label>
                                        <input type="text" name="year" class="form-control" placeholder="Enter Your Passing Year" value="<?php ; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Percentage %:
                                        </label>
                                        <input type="text" name="mname" class="form-control" placeholder="Enter Your Mother Name" value="<?php ; ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Grade:
                                        </label>
                                        <input type="text" name="lname" class="form-control" placeholder="Enter Your Father Name" value="<?php ; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Total Marks Obtained:
                                        </label>
                                        <input type="text" name="pphone" class="form-control" placeholder="Total Marks Obtained:." value="<?php ; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">

                                    <div class=" form-group">
                                        <label for="">
                                            Out Of
                                        </label>
                                        <input type="text" name="pphone" class="form-control" placeholder="Out Of." value="<?php ; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            School Name
                                        </label>
                                        <input type="text" name="pphone" class="form-control" placeholder="School Name." value="<?php ; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            District
                                        </label>
                                        <input type="text" name="pphone" class="form-control" placeholder="School District." value="<?php ; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            State
                                        </label>
                                        <input type="text" name="pphone" class="form-control" placeholder="School State." value="<?php ; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Country
                                        </label>
                                        <input type="text" name="pphone" class="form-control" placeholder="School Country." value="<?php ; ?>">
                                    </div>
                                </div>



                                <div class="col-sm-12 col-xs-12">
                                    <form action="" method="post">
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
                                            <select name="" id="" class="form-control">
                                                <option value="">Maharashtra</option>
                                                <option value="">Maharashtra</option>
                                                <option value="">Maharashtra</option>
                                                <option value="">Maharashtra</option>
                                                <option value="">Maharashtra</option>
                                            </select>
                                        </div>
                                </div>


                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Passing Year:
                                        </label>
                                        <input type="text" name="year" class="form-control" placeholder="Enter Your Passing Year" value="<?php ; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Percentage %:
                                        </label>
                                        <input type="text" name="mname" class="form-control" placeholder="Enter Your Mother Name" value="<?php ; ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Grade:
                                        </label>
                                        <input type="text" name="lname" class="form-control" placeholder="Enter Your Father Name" value="<?php ; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Total Marks Obtained:
                                        </label>
                                        <input type="text" name="pphone" class="form-control" placeholder="Total Marks Obtained:." value="<?php ; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">

                                    <div class=" form-group">
                                        <label for="">
                                            Out Of
                                        </label>
                                        <input type="text" name="pphone" class="form-control" placeholder="Out Of." value="<?php ; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            School Name
                                        </label>
                                        <input type="text" name="pphone" class="form-control" placeholder="School Name." value="<?php ; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            District
                                        </label>
                                        <input type="text" name="pphone" class="form-control" placeholder="School District." value="<?php ; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            State
                                        </label>
                                        <input type="text" name="pphone" class="form-control" placeholder="School State." value="<?php ; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Country
                                        </label>
                                        <input type="text" name="pphone" class="form-control" placeholder="School Country." value="<?php ; ?>">
                                    </div>
                                </div>



                                <div class="col-12 text-right">
                                    <div class=" form-group">
                                        <button type="submit" class="btn btn-primary" name="personal_info_submit">Submit & Next</button>
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