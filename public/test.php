<?php

require('vendor/autoload.php');

include "../resources/config.php";

?>

<?php

$emaill = $_SESSION['email'];
$query = query("SELECT * FROM users WHERE email = '{$emaill}'");
confirm($query);


if (mysqli_num_rows($query) > 0) {
    // print("hello");
    while ($row = fetch_array($query)) {
        $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $phone2 = $row['phone2'];
        $html = <<<DELIMETER
        <table class="table" style="border: 1px solid black">
        <tr>
            <td style="width: 50%">Name</td>
            <td style="width: 50%">$name</td>
        </tr>
        <tr>
            <td style="width: 50%">Email</td>
            <td style="width: 50%">$email</td>
        </tr> 
        <tr>
            <td style="width: 50%">Phone</td>
            <td style="width: 50%">$phone</td>
        </tr>   
        <tr>
        <td style="width: 50%">Phone 2</td>
        <td style="width: 50%">$phone2</td>
    </tr>   
      
        </table>
DELIMETER;

        echo $html;

        $mpdf = new \Mpdf\Mpdf();
        $mpdf -> WriteHTML($html);

        $file = time() . '.pdf';

        $mpdf -> output($file, 'D');

    }
}



?>
