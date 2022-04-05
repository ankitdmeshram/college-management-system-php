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
                        <div class="bg-primary text-light  head">Payments </div>
                        <div class="bg-light p-2 container-fluid">
                            <div class="row">

                            <div class="col-sm-12 col-xs-12 pt-2">
                            <form method="post" action="../payment/paytm/pgRedirect.php">

                                        <div class=" form-group">
                                        <input id="ORDER_ID" type="hidden" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>">
                        <input type="hidden" title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="100">
                        <input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
                        <input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
                                   
                        <input id="CUST_ID" tabindex="2"   type="hidden" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo  rand(10000,99999999)?>">
                        
                        <input type="checkbox" name="" class="form-checkbox" id=""> <label for="">I hearby that i have accepted the all terms and conditions</label>

                                    </div>
                                </div>

                                


                                <div class="col-12 ">
                                    <div class=" form-group">
                                        <button type="submit" class="btn btn-primary" name="personal_info_submit">Click Here To Pay</button>
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