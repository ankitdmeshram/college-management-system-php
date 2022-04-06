<?php
include "includes/head.php";


if(isset($_GET['id']))
{
    $id = $_GET['id'];


    $select_query = query("SELECT * FROM users WHERE id = '{$id}' ");
    confirm($select_query);
    
    if (mysqli_num_rows($select_query) > 0) {
        while ($row = fetch_array($select_query)) {
    
            $name  = $row['name'];
            $email = $row['email'];
            $phone = $row['phone'];
            $phone2 = $row['phone2'];
        }
    }







    $select_query = query("SELECT * FROM personal_details WHERE u_id = '{$id}' ");
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
    







}







?>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>



<style>
    th,
    td {
        max-width: 300px !important;
    }
</style>

<div class="container-fluid gs-cont">
    <div class="gs-container">
        <?php include "includes/sidebar.php"; ?>
        <div class="gs-body gs-col container-fluid bg-light" id="gs-body">
            <?php include "includes/nav.php"; ?>
            <div class="gs-content card m-3 p-3 ad-head">


                <?php if (display_message()) {
                ?>
                    <div class="bg-danger text-light  head"><?php display_message(); ?></div>
                <?php
                }
                ?>


                <div class="bg-primary text-light  head ">Basic Information</div>

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
                                        <input type="text"  class="form-control" placeholder="Enter Your Father Name" value="<?php  ?>">
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
                                        <input type="text" name="lname" class="form-control" placeholder="Enter Your Father Name" value="<?php echo $lname; ?>">
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
                                        <input type="text" name="year" class="form-control" placeholder="Enter Your Passing Year" value="<?php  ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Percentage %:
                                        </label>
                                        <input type="text" name="mname" class="form-control" placeholder="Enter Your Mother Name" value="<?php  ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Grade:
                                        </label>
                                        <input type="text" name="lname" class="form-control" placeholder="Enter Your Father Name" value="<?php  ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Total Marks Obtained:
                                        </label>
                                        <input type="text" name="pphone" class="form-control" placeholder="Total Marks Obtained:." value="<?php  ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">

                                    <div class=" form-group">
                                        <label for="">
                                            Out Of
                                        </label>
                                        <input type="text" name="pphone" class="form-control" placeholder="Out Of." value="<?php  ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            School Name
                                        </label>
                                        <input type="text" name="pphone" class="form-control" placeholder="School Name." value="<?php  ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            District
                                        </label>
                                        <input type="text" name="pphone" class="form-control" placeholder="School District." value="<?php  ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            State
                                        </label>
                                        <input type="text" name="pphone" class="form-control" placeholder="School State." value="<?php  ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Country
                                        </label>
                                        <input type="text" name="pphone" class="form-control" placeholder="School Country." value="<?php  ?>">
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
                                        <input type="text" name="year" class="form-control" placeholder="Enter Your Passing Year" value="<?php  ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Percentage %:
                                        </label>
                                        <input type="text" name="mname" class="form-control" placeholder="Enter Your Mother Name" value="<?php  ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Grade:
                                        </label>
                                        <input type="text" name="lname" class="form-control" placeholder="Enter Your Father Name" value="<?php  ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Total Marks Obtained:
                                        </label>
                                        <input type="text" name="pphone" class="form-control" placeholder="Total Marks Obtained:." value="<?php  ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">

                                    <div class=" form-group">
                                        <label for="">
                                            Out Of
                                        </label>
                                        <input type="text" name="pphone" class="form-control" placeholder="Out Of." value="<?php  ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            School Name
                                        </label>
                                        <input type="text" name="pphone" class="form-control" placeholder="School Name." value="<?php  ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            District
                                        </label>
                                        <input type="text" name="pphone" class="form-control" placeholder="School District." value="<?php  ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            State
                                        </label>
                                        <input type="text" name="pphone" class="form-control" placeholder="School State." value="<?php  ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class=" form-group">
                                        <label for="">
                                            Country
                                        </label>
                                        <input type="text" name="pphone" class="form-control" placeholder="School Country." value="<?php  ?>">
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

<?php include "includes/footer.php"; ?>


<script>
    $(document).ready(function() {
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>