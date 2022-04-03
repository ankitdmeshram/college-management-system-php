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
                        <div class="bg-primary text-light  head">Academics Details </div>

                        <div class="row pt-2">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Course Name</label>
                                    <input type="text" name="course_name" class="form-control" id="" value="Course Name" placeholder="Course Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Duration</label>
                                    <input type="text" name="duration" class="form-control" value="duration" placeholder="Course Duration">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Total Semester</label>
                                    <input type="text" name="semester" class="form-control" value="semester" placeholder="Semester">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Total Fees</label>
                                    <input type="text" name="fees" placeholder="Total Fees" class="form-control" id="">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Total Fees (For Caste)</label>
                                    <input type="text" name="cfees" placeholder="Total Fees" class="form-control" id="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label> &nbsp; </label>
                                    <input type="submit" name="submit" placeholder="Total Fees" class="btn btn-primary form-control" id="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="bg-primary text-light  p-3 bold"> Subjects </div>

                            </div>


                            <div class="col-12 mt-4">

                                <form action="">

                                    <div class="row">
                                        <div class="col-xl-6 col-12">
                                            <div class="form-group">
                                                <label for="">Subject Name:</label>
                                                <input type="text" name="" id="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-12">
                                            <div class="form-group">
                                                <label for=""> &nbsp;</label>
                                                <button type="submit" class="btn btn-primary form-control">Add</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>


                                <table class="table">
                                    <thead>
                                        <th>Sr. No.</th>
                                        <th>Subjects</th>
                                        <th>Edit / Delete</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Marathi</td>
                                            <td>Edit / Delete</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Marathi</td>
                                            <td>Edit / Delete</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Marathi</td>
                                            <td>Edit / Delete</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Marathi</td>
                                            <td>Edit / Delete</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>





                        </div>



                    </div>
                </div>









            </div>
        </div>
    </div>
</div>
<?php include "includes/footer.php"; ?>