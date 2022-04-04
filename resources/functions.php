<?php


if (!$connection) {
    echo "<script>alert('Technical Error, Kindly Contact to your provider'); </script>";
}

function set_message($msg)
{
    if (!empty($msg)) {
        $_SESSION['message'] = $msg;
    } else {
        $msg = "";
    }
}

function display_message()
{
    if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}

function redirect($location)
{
    header("Location:$location");
}

function query($sql)
{
    global $connection;
    return mysqli_query($connection, $sql);
}

function last()
{
    global $connection;
    return mysqli_insert_id($connection);
}

function confirm($result)
{
    global $connection;
    if (!$result) {
        die("QUERY FAILED " . mysqli_error($connection));
    } else {
        return 1;
    }
}

function escape_string($string)
{
    global $connection;
    return mysqli_real_escape_string($connection, $string);
}

function fetch_array($result)
{
    return mysqli_fetch_array($result);
}

//////////////////////////////////////////////////////////////////


function user_register()
{
    $name =  escape_string($_POST['name']);
    $email =  escape_string($_POST['email']);
    $phone =  escape_string($_POST['phone']);
    $pass =  escape_string($_POST['password']);
    $c_password =  escape_string($_POST['c_password']);

    if ($pass != $c_password) {
        set_message("Password not matched");
        header("Location: register");
    }

    date_default_timezone_set("Asia/Calcutta");
    $date =  date("Y-m-d h:i:sa");

    $select_query = query("SELECT * FROM users WHERE email = '{$email}' ");
    confirm($select_query);

    if (mysqli_num_rows($select_query) > 0) {
        // print("hello");
        while ($row = fetch_array($select_query)) {
            $email_id = $row['email'];

            if ($email == $email_id) {
                set_message("Email ID Already Exists");
                echo "<script>alert('Email id already exist')</script>";
            }
        }
    } else {

        $rand = rand(10000, 99999);
        $mod_pass = $pass . $rand;
        $password = md5($mod_pass);

        $query = query("INSERT INTO users (name, email, phone,  password, rand, active,  created_at, updated_at) 
        VALUES ('{$name}', '{$email}', '{$phone}', '{$password}', '{$rand}', 1,   '{$date}',  '{$date}')");
        confirm($query);

        $l = last();

        $query = query("INSERT INTO personal_details (u_id, email,  created_at, updated_at) 
        VALUES ('{$l}', '{$email}', '{$date}',  '{$date}')");
        confirm($query);


        if (confirm($query) == 1) {
            //   header("Location: https://paytm.me/S6O-xqA");
            echo "<script>alert('user registered successfully')</script>";
            redirect('./login');
        } else {
            echo "<script>alert('Something went wrong')</script>";
        }
    }
}

function add_book()
{

    $name = escape_string($_POST['name']);
    $location = escape_string(($_POST['location']));
    date_default_timezone_set("Asia/Calcutta");
    $date =  date("Y-m-d h:i:sa");

    $query = query("INSERT INTO library (name, location, status, created_at) 
    VALUES ('{$name}', '{$location}', 'Available', '{$date}')");
    confirm($query);

    redirect('library');
}

function user_login()
{

    $email =  escape_string($_POST['email']);
    $pass =  escape_string($_POST['password']);

    date_default_timezone_set("Asia/Calcutta");
    $date =  date("h:i:sa d-m-Y");

    $select_query = query("SELECT * FROM users WHERE email = '{$email}' ");
    confirm($select_query);

    if (mysqli_num_rows($select_query) > 0) {
        while ($row = fetch_array($select_query)) {

            $password = $row['password'];
            $rand = $row['rand'];
            $mod_pass = $pass . $rand;
            $pass = md5($mod_pass);

            if ($password == $pass) {
                echo "<script>alert('Login Successfull')</script>";
                $_SESSION['email'] = $email;
                echo "<script>alert('Login Successfull')</script>";
                // header('location: ./');

                redirect('./');
            } else {
                echo "<script>alert('Wrong Password')</script>";
            }
        }
    } else {
        echo "<script>alert('Email not found')</script>";
    }
}




function basic_info()
{
    $name = escape_string($_POST['name']);
    $email = escape_string($_POST['email']);
    $phone = escape_string($_POST['phone']);
    $phone2 = escape_string($_POST['phone2']);

    $eemail = $_SESSION['email'];

    date_default_timezone_set("Asia/Calcutta");
    $date =  date("h:i:sa d-m-Y");


    $query = query("UPDATE users SET name = '{$name}', phone = '{$phone}', phone2 = '{$phone2}', email = '{$email}', updated_at = '{$date}' WHERE email = '{$eemail}' ");
    confirm($query);

    if (confirm($query) == 1) {
        redirect("program");
    } else {
        set_message("Update Failed");
        redirect("./");
    }
}



function personal_info_submit()
{
    $fname = escape_string($_POST['fname']);
    $mname = escape_string($_POST['mname']);
    $lname = escape_string($_POST['lname']);
    $pphone = escape_string($_POST['phone']);
    $add_1 = escape_string($_POST['add']);
    $add_2 = escape_string($_POST['add2']);
    $add_3 = escape_string($_POST['add3']);
    $city = escape_string($_POST['city']);
    $pin = escape_string($_POST['pin']);
    $state = escape_string($_POST['state']);
    $country = escape_string($_POST['country']);


    date_default_timezone_set("Asia/Calcutta");
    $date =  date("h:i:sa d-m-Y");


    // $query = query("UPDATE users SET fname = '{$fname}', name = '{$mname}', name = '{$mname}', lname = '{$lname}', pphone = '{$pphone}', phone2 = '{$phone2}', email = '{$email}', updated_at = '{$date}' WHERE email = '{$eemail}' ");
    // confirm($query);

    // if(confirm($query) == 1)
    // {
    //     redirect("program");
    // } else {
    //     set_message("Update Failed");
    //     redirect("./");
    // }


}


function students()
{
    $select_query = query("SELECT * FROM users");
    confirm($select_query);

    if (mysqli_num_rows($select_query) > 0) {
        $idd = 1;
        while ($row = fetch_array($select_query)) {

            $id = $row['id'];
            $name = $row['name'];
            $phone = $row['phone'];
            $email = $row['email'];
            $user = <<<DELIMETER
        <tr>
        <th scope="row">$idd</th>
        <td>$name</td>
        <td>$phone </td>
        <td>$email</td>
        <td>TY BSC IT</td>
     
        <td><a href="edit-student?id=$id">View </a> | <a href="?delete=$id"> Delete </a></td>
    </tr>
DELIMETER;

            echo $user;
            $idd++;
        }
    } else {
        echo "not found";
    }
}



function users()
{
    $select_query = query("SELECT * FROM users");
    confirm($select_query);

    if (mysqli_num_rows($select_query) > 0) {
        $idd = 1;
        while ($row = fetch_array($select_query)) {

            $id = $row['id'];
            $name = $row['name'];
            $phone = $row['phone'];
            $email = $row['email'];
            $user = <<<DELIMETER
        <tr>
        <th scope="row">$idd</th>
        <td>$name</td>
        <td>$phone </td>
        <td>$email</td>
        <td>Student</td>
     
        <td><a href="edit_customer.php?id=$id">View </a> | <a href="?delete=$id"> Delete </a></td>
    </tr>
DELIMETER;

            echo $user;
            $idd++;
        }
    } else {
        echo "not found";
    }
}


function library()
{
    $select_query = query("SELECT * FROM library");
    confirm($select_query);

    if (mysqli_num_rows($select_query) > 0) {
        $idd = 1;
        while ($row = fetch_array($select_query)) {

            $id = $row['id'];
            $name = $row['name'];
            $location = $row['location'];
            $status = $row['status'];
            $user = <<<DELIMETER
        <tr>
        <th scope="row">$idd</th>
        <td>$name</td>
        <td>$location </td>
        <td>$status </td>

     
        <td><a href="?edit_library=$id">Edit </a> | <a href="?delete_library=$id"> Delete </a></td>
    </tr>
DELIMETER;

            echo $user;
            $idd++;
        }
    } else {
        echo "No Books  ";
    }
}

function update_book()
{

    $name = escape_string($_POST['name']);
    $location = escape_string(($_POST['location']));
    $status = escape_string(($_POST['status']));
    $id = escape_string(($_POST['id']));

    date_default_timezone_set("Asia/Calcutta");
    $date =  date("Y-m-d h:i:sa");

    $query = query("UPDATE library SET name = '{$name}', location = '{$location}', status = '{$status}' WHERE id = '{$id}' ");
    confirm($query);

    if (confirm($query) == 1) {
        redirect("library");
    } else {
        set_message("Update Failed");
        redirect("./");
    }

    redirect('library');
}


function academics()
{

    $user = <<<DELIMETER
        <tr>
        <th scope="row">1</th>
        <td> BSC IT</td>
        <td><a href="academics.php?id=">View </a> | <a href="?delete="> Delete </a></td>
    </tr>
    <tr>
    <th scope="row">2</th>
    <td> BSC CS</td>
    <td><a href="academics.php?id=">View </a> | <a href="?delete="> Delete </a></td>
</tr>
<tr>
<th scope="row">3</th>
<td> BSC </td>
<td><a href="edit-academics?id=">View </a> | <a href="?delete="> Delete </a></td>
</tr>
<tr>
<th scope="row">4</th>
<td> BA</td>
<td><a href="academics.php?id=">View </a> | <a href="?delete="> Delete </a></td>
</tr>
DELIMETER;

    echo $user;
}

function delete_library($id)
{
    $query = query("DELETE FROM library WHERE id = '{$id}'");
    confirm($query);

    redirect('library');
}
