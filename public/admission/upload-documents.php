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
                        <div class="bg-primary text-light  head">Upload Documents </div>
                        <div class="bg-light p-2 container-fluid">
                            <div class="row">


                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            SSC Marksheet
                                        </label>
                                        <input type="file" name="pphone" class="form-control" placeholder="School Country." value="<?php echo $fname; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            HSC Marksheet
                                        </label>
                                        <input type="file" name="pphone" class="form-control" placeholder="School Country." value="<?php echo $fname; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Adhar Card
                                        </label>
                                        <input type="file" name="pphone" class="form-control" placeholder="School Country." value="<?php echo $fname; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Pan Card
                                        </label>
                                        <input type="file" name="pphone" class="form-control" placeholder="School Country." value="<?php echo $fname; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Leaving Certificate
                                        </label>
                                        <input type="file" name="pphone" class="form-control" placeholder="School Country." value="<?php echo $fname; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Caste Certificate
                                        </label>
                                        <input type="file" name="pphone" class="form-control" placeholder="School Country." value="<?php echo $fname; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Domaciel Certificate
                                        </label>
                                        <input type="file" name="pphone" class="form-control" placeholder="School Country." value="<?php echo $fname; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Photo
                                        </label>
                                        <input type="file" name="pphone" class="form-control" placeholder="School Country." value="<?php echo $fname; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Signature
                                        </label>
                                        <input type="file" name="pphone" class="form-control" placeholder="School Country." value="<?php echo $fname; ?>">
                                    </div>
                                </div>



                                <div class="col-12 text-right">
                                    <div class=" form-group">
                                        <!-- <button type="submit" class="btn btn-primary" name="personal_info_submit">Submit & Next</button> -->
                                        <a href="payments" class="btn btn-primary">Submit & Next</a>
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