<?php
include "includes/head.php";

if(isset($_GET['delete_academics']))
{
    delete_academics($_GET['delete_academics']);
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
                <h4>Academics</h4>
                <hr>


                <a href="add-academics" class="btn btn-primary mb-3" style="width: fit-content">Add New</a>


                <input class="form-control" id="myInput" type="text" placeholder="Search..">

                <div class="gs-scroly" style="overflow: scroll">

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Course Name</th>
                                <th scope="col">Jr/Sr </th>
                                <th scope="col">Edit / Delete</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">

                            <?php 
                            academics(); 
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