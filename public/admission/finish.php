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
                        


<?php


// following files need to be included
require_once("../payment/paytm/lib/config_paytm.php");
require_once("../payment/paytm/lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {
	echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "<b>Transaction status is success</b>" . "<br/>";
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.

        $status = "1";
        $TXNID = $_POST['TXNID'];
        $TXNDATE = $_POST['TXNDATE'];

      echo "hello" .  $us_id = $_SESSION['email'];

        $query = query("INSERT INTO ref_fee (u_email, txnid, status, txn_date) 
            VALUES ('{$us_id}', '{$TXNID}', '{$status}', '{$TXNDATE}')
        ");



	}
	else {
		echo "<b>Transaction status is failure</b>" . "<br/>";

        $status = "0";
        $TXNID = $_POST['TXNID'];
        $TXNDATE = $_POST['TXNDATE'];

      echo "hello" .  $us_id = $_SESSION['email'];

        $query = query("INSERT INTO ref_fee (u_email, txnid, status, txn_date) 
            VALUES ('{$us_id}', '{$TXNID}', '{$status}', '{$TXNDATE}')
        ");




	}

	if (isset($_POST) && count($_POST)>0 )
	{ 
		foreach($_POST as $paramName => $paramValue) {
				echo "<br/>" . $paramName . " = " . $paramValue;
		}
	}
	

}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.





}


?>




















                    </div>
                </div>











            </div>
        </div>
    </div>
</div>
<?php include "includes/footer.php"; ?>