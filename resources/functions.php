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
        header("Location: login");
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

        $query = query("INSERT INTO educational_details (u_id,  created_at, updated_at) 
        VALUES ('{$l}',  '{$date}',  '{$date}')");
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

    $select_query = query("SELECT * FROM users WHERE email = '{$email}'  ");
    confirm($select_query);

    if (mysqli_num_rows($select_query) > 0) {
        while ($row = fetch_array($select_query)) {

            $password = $row['password'];
            $rand = $row['rand'];
            $mod_pass = $pass . $rand;
            $pass = md5($mod_pass);
            $role = $row['role'];


            if ($password == $pass) {
                $_SESSION['email'] = $email;
                $_SESSION['role'] = $role;
                // header('location: ./');
                if($role == 2) 
                {
                    redirect('admission');
                } else if ($role == 1)
                {
                    redirect('admin');
                } else {
                    redirect('./');
                }

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
    $eemail = escape_string($_POST['email']);
    $fname = escape_string($_POST['fname']);
    $mname = escape_string($_POST['mname']);
    $lname = escape_string($_POST['lname']);
    $pphone = escape_string($_POST['pphone']);
    $add_1 = escape_string($_POST['add']);
    $add_2 = escape_string($_POST['add2']);
    $add_3 = escape_string($_POST['add3']);
    $city = escape_string($_POST['city']);
    $pin = escape_string($_POST['pin']);
    $state = escape_string($_POST['state']);
    $country = escape_string($_POST['country']);


    date_default_timezone_set("Asia/Calcutta");
    $date =  date("h:i:sa d-m-Y");


    $query = query("UPDATE personal_details SET fname = '{$fname}', mname = '{$mname}', lname = '{$lname}', pphone = '{$pphone}',  add_1 = '{$add_1}', add_2 = '{$add_2}',add_3 = '{$add_3}',city = '{$city}', pin_code = '{$pin}',state = '{$state}',country = '{$country}', updated_at = '{$date}' WHERE email = '{$eemail}' ");
    confirm($query);

    if(confirm($query) == 1)
    {
        redirect("education-details");
    } else {
        set_message("Update Failed");
        redirect("./");
    }
}


function educational_submit()
{
    $eemail = escape_string($_POST['email']);
    $fname = escape_string($_POST['fname']);
    $mname = escape_string($_POST['mname']);
    $lname = escape_string($_POST['lname']);
    $pphone = escape_string($_POST['pphone']);
    $add_1 = escape_string($_POST['add']);
    $add_2 = escape_string($_POST['add2']);
    $add_3 = escape_string($_POST['add3']);
    $city = escape_string($_POST['city']);
    $pin = escape_string($_POST['pin']);
    $state = escape_string($_POST['state']);
    $country = escape_string($_POST['country']);


    date_default_timezone_set("Asia/Calcutta");
    $date =  date("h:i:sa d-m-Y");


    $query = query("UPDATE personal_details SET fname = '{$fname}', mname = '{$mname}', lname = '{$lname}', pphone = '{$pphone}',  add_1 = '{$add_1}', add_2 = '{$add_2}',add_3 = '{$add_3}',city = '{$city}', pin_code = '{$pin}',state = '{$state}',country = '{$country}', updated_at = '{$date}' WHERE email = '{$eemail}' ");
    confirm($query);

    if(confirm($query) == 1)
    {
        redirect("program");
    } else {
        set_message("Update Failed");
        redirect("./");
    }
}




function students()
{
    $select_query = query("SELECT * FROM users WHERE role = 2");
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
     
        <td><a href="edit-user?id=$id">View </a> | <a href="?delete=$id"> Delete </a></td>
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
            $role = $row['role'];
            if($role == 1)
            {
                $role = 'Admin';
            } else if($role == 2)
            {
                $role = 'Admission';
            } else if($role == 3)
            {
                $role = 'Student';
            } else {
                $role = 'User';
            }
            $user = <<<DELIMETER
        <tr>
        <th scope="row">$idd</th>
        <td>$name</td>
        <td>$phone </td>
        <td>$email</td>
        <td>$role</td>
     
        <td><a href="edit-user?id=$id">View </a> | <a href="?delete=$id"> Delete </a></td>
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


    $select_query = query("SELECT * FROM academics");
    confirm($select_query);

    if (mysqli_num_rows($select_query) > 0) {
        $idd = 1;
        while ($row = fetch_array($select_query)) {

            $course_name = $row['course_name'];
            $fees = $row['fees'];
            $id = $row['id'];
            $c_fees = $row['c_fees'];
            $duration = $row['duration'];
            $semester = $row['semester'];
            $type = $row['type'];


    $user = <<<DELIMETER
        <tr>
        <th scope="row">$id</th>
        <td> $course_name </td>
        <td> $type </td>
        <td><a href="edit-academics?id=$id">View </a> | <a href="?delete_academics=$id"> Delete </a></td>
    </tr>
    
DELIMETER;



    echo $user;

}}

}

function delete_library($id)
{
    $query = query("DELETE FROM library WHERE id = '{$id}'");
    confirm($query);

    redirect('library');
}

function delete_user($id, $link)
{
    $query = query("DELETE FROM users WHERE id = '{$id}'");
    confirm($query);

    redirect($link);
}

function add_academics()
{
    $course_name = escape_string($_POST['course_name']);
    $duration = escape_string($_POST['duration']);
    $semester = escape_string($_POST['semester']);
    $fees = escape_string($_POST['fees']);
    $c_fees = escape_string($_POST['c_fees']);
    $type = escape_string($_POST['type']);

    date_default_timezone_set("Asia/Calcutta");
    $date =  date("Y-m-d h:i:sa");


    $query = query("INSERT INTO academics (	course_name, fees, c_fees, duration, semester, type, created_at, updated_at) 
    VALUES ('{$course_name}', '{$fees}', '{$c_fees}', '{$duration}', '{$semester}', '{$type}', '{$date}', '{$date}' )");
    confirm($query);



}

function update_academics()
{
    $id = escape_string($_POST['id']);
    $course_name = escape_string($_POST['course_name']);
    $duration = escape_string($_POST['duration']);
    $semester = escape_string($_POST['semester']);
    $fees = escape_string($_POST['fees']);
    $c_fees = escape_string($_POST['c_fees']);
    $type = escape_string($_POST['type']);

    date_default_timezone_set("Asia/Calcutta");
    $date =  date("Y-m-d h:i:sa");

    $query = query("UPDATE academics SET course_name = '{$course_name}', duration = '{$duration}', semester = '{$semester}', fees = '{$fees}', c_fees = '{$c_fees}', type = '{$type}' WHERE id = '{$id}' ");
    confirm($query);

    if (confirm($query) == 1) {
        redirect("academics");
    } else {
        set_message("Update Failed");
        redirect("./");
    }


}


function delete_academics($id)
{
    $query = query("DELETE FROM academics WHERE id = '{$id}'");
    confirm($query);

    redirect('academics');
}


function educational_details_submit()
{
    $id = escape_string($_POST['id']);
    $ssc_board = escape_string($_POST['ssc_board']);
    $ssc_passing_year = escape_string($_POST['ssc_passing_year']);
    $ssc_percentage = escape_string($_POST['ssc_percentage']);
    $ssc_grade = escape_string($_POST['ssc_grade']);
    $ssc_total = escape_string($_POST['ssc_total']);
    $ssc_out = escape_string($_POST['ssc_out']);
    $ssc_school = escape_string($_POST['ssc_school']);
    $ssc_destrict = escape_string($_POST['ssc_destrict']);
    $ssc_state = escape_string($_POST['ssc_state']);
    $ssc_country = escape_string($_POST['ssc_country']);
    $hsc_board = escape_string($_POST['hsc_board']);
    $hsc_passing_year = escape_string($_POST['hsc_passing_year']);
    $hsc_percentage = escape_string($_POST['hsc_percentage']);
    $hsc_grade = escape_string($_POST['hsc_grade']);
    $hsc_total = escape_string($_POST['hsc_total']);
    $hsc_out = escape_string($_POST['hsc_out']);
    $hsc_school = escape_string($_POST['hsc_school']);
    $hsc_district = escape_string($_POST['hsc_district']);
    $hsc_state = escape_string($_POST['hsc_state']);
    $hsc_country = escape_string($_POST['hsc_country']);


    $query = query("UPDATE educational_details SET 

    ssc_board = '{$ssc_board}',
    ssc_passing_year = '{$ssc_passing_year}',
    ssc_percentage = '{$ssc_percentage}',
    ssc_grade = '{$ssc_grade}',
    ssc_total = '{$ssc_total}',
    ssc_out = '{$ssc_out}',
    ssc_school = '{$ssc_school}',
    ssc_destrict = '{$ssc_destrict}',
    ssc_state = '{$ssc_state}',
    ssc_country = '{$ssc_country}',
    hsc_board = '{$hsc_board}',
    hsc_passing_year = '{$hsc_passing_year}',
    hsc_percentage = '{$hsc_percentage}',
    hsc_grade = '{$hsc_grade}',
    hsc_total = '{$hsc_total}',
    hsc_out = '{$hsc_out}',
    hsc_school = '{$hsc_school}',
    hsc_district = '{$hsc_district}',
    hsc_state = '{$hsc_state}',
    hsc_country = '{$hsc_country}'

    
    WHERE u_id = '{$id}' ");

    confirm($query);


    if (confirm($query) == 1) {
        redirect("upload-documentsw");
        echo "<script>alert('working fine')</script>";
    } else {
        set_message("Update Failed");
        redirect("./");
    }


   
}