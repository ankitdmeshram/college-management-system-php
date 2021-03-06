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
                        <div class="bg-primary text-light  head">Basic Information</div>
                        <div class="bg-light p-2 container-fluid">
                            <div class="row">

                                <div class="col-sm-6 col-xs-12">
                                    <form action="" method="post">
                                        <div class=" form-group">
                                            <label for="">
                                                Name:
                                            </label>
                                            <input type="text" name="name" class="form-control" placeholder="Enter Your Name" value="<?php echo $name; ?>">
                                        </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Email:
                                        </label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter Your Email" value="<?php echo $email; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Phone:
                                        </label>
                                        <input type="text" name="phone" class="form-control" placeholder="Enter Your Phone No." value="<?php echo $phone; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Alternative Phone No.:
                                        </label>
                                        <input type="text" name="phone2" class="form-control" placeholder="Alternative Phone No." value="<?php echo $phone2; ?>">
                                    </div>
                                </div>

                                <div class="col-12 text-right">
                                    <div class=" form-group">
                                        <button type="submit" class="btn btn-primary" name="basic_info_submit">Submit & Next</button>
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