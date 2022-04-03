<?php
include "includes/head.php";

if (isset($_POST['submit'])) {
    add_book();
}

if (isset($_GET['delete_library'])) {
    delete_library($_GET['delete_library']);
}

if (isset($_POST['update'])) {
    update_book();
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
            <div class="gs-content card m-3 p-3">
                <h4>Library</h4>
                <hr>



                <form action="" method="post">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="">Book Name</label>
                                <input type="text" name="name" class="form-control" id="">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="">Book Location</label>
                                <input type="text" name="location" class="form-control" id="">
                            </div>
                        </div>
                        <div class="col-12 text-right">
                            <button type="submit" class="btn btn-primary pl-5 pr-5" name="submit">Add</button>
                        </div>
                    </div>
                </form>



                <?php

                if (isset($_GET['edit_library'])) {
                    $id = escape_string(($_GET['edit_library']));

                    $select_query = query("SELECT * FROM library WHERE id = '{$id}'");
                    confirm($select_query);

                    if (mysqli_num_rows($select_query) > 0) {
                        $idd = 1;
                        while ($row = fetch_array($select_query)) {

                            $name = $row['name'];
                            $location = $row['location'];
                            $status = $row['status'];


                ?>

                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="">Book Name</label>
                                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="">Book Location</label>
                                            <input type="text" name="location" class="form-control" value="<?php echo $location; ?>">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <input type="text" name="location" class="form-control" value="<?php echo $status; ?>">
                                            <input type="hidden" name="id" class="form-control" value="<?php echo $id; ?>">
                                        </div>
                                    </div>
                                    <div class="col-12 text-right">
                                        <button type="submit" class="btn btn-primary pl-5 pr-5" name="update">Update</button>
                                    </div>
                                </div>
                            </form>


                <?php
                        }
                    }
                }

                ?>




                <input class="form-control mt-3" id="myInput" type="text" placeholder="Search..">

                <div class="gs-scroly" style="overflow: scroll">

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col-3">Location</th>
                                <th scope="col-3">Status</th>
                                <th scope="col">Edit / Delete</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">

                            <?php
                            library();
                            ?>

                        </tbody>
                    </table>
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