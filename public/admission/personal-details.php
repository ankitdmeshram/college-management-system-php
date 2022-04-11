<?php include "includes/head.php";

$eemail = $_SESSION['email'];

$select_query = query("SELECT * FROM personal_details WHERE email = '{$eemail}' ");
confirm($select_query);

if (mysqli_num_rows($select_query) > 0) {
    while ($row = fetch_array($select_query)) {

        $email = $row['email'];
        $fname = $row['fname'];
        $mname = $row['mname'];
        $lname = $row['lname'];
        $pphone = $row['pphone'];
        $add_1 = $row['add_1'];
        $add_2 = $row['add_2'];
        $add_3 = $row['add_3'];
        $city = $row['city'];
        $pin_code = $row['pin_code'];
        $state = $row['state'];
        $country = $row['country'];
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
    personal_info_submit();
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
                        <div class="bg-primary text-light  head">Personal Details </div>
                        <div class="bg-light p-2 container-fluid">
                            <div class="row">

                                <div class="col-sm-6 col-xs-12">
                                    <form action="" method="post">
                                        <div class=" form-group">
                                            <label for="">
                                                Name:
                                            </label>
                                            <input type="text" name="name" class="form-control" placeholder="Enter Your Name" value="<?php echo $name; ?>" disabled>
                                        </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <form action="" method="post">
                                        <div class=" form-group">
                                            <label for="">
                                                Email:
                                            </label>
                                            <input type="email" class="form-control" placeholder="Enter Your Email" value="<?php echo $email; ?>" disabled>
                                            <input type="hidden" name="email" class="form-control" value="<?php echo $email; ?>">
                                        </div>
                                </div>


                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Father Name:
                                        </label>
                                        <input type="text" name="fname" class="form-control" placeholder="Enter Your Father Name" value="<?php echo $fname; ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Mother Name:
                                        </label>
                                        <input type="text" name="mname" class="form-control" placeholder="Enter Your Mother Name" value="<?php echo $mname; ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Last Name:
                                        </label>
                                        <input type="text" name="lname" class="form-control" placeholder="Enter Your Last Name" value="<?php echo $lname; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Parents Phone No.:
                                        </label>
                                        <input type="text" name="pphone" class="form-control" placeholder="Enter Your Parent Phone No." value="<?php echo $pphone; ?>">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Address
                                        </label>
                                        <textarea name="add" id="" class="form-control"><?php echo $add_1; ?></textarea>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Address 2
                                        </label>
                                        <textarea name="add2" id="" class="form-control"><?php echo $add_2; ?></textarea>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Address 3
                                        </label>
                                        <textarea name="add3" id="" class="form-control"><?php echo $add_3; ?></textarea>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            City
                                        </label>
                                        <input type="text" name="city" class="form-control" placeholder="Enter Your City" value="<?php echo $city; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            PIN
                                        </label>
                                        <input type="text" name="pin" class="form-control" placeholder="Enter Your Pin" value="<?php echo $pin_code; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            State
                                        </label>
                                        <input type="text" name="state" class="form-control" placeholder="Enter Your State" value="<?php echo $state; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Country
                                        </label>
                                        <input type="text" name="country" class="form-control" placeholder="Enter Your Country" value="<?php echo $country; ?>">
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