<?php 

if($_SESSION['role'] != 1)
{
    echo "<script> alert('You do not have permission to visit admin panel') </script>";
    redirect("../login");
}

if(isset($_GET['logout']))
{
    session_destroy();
    redirect("./");
}

?>

<nav class="
                navbar navbar-expand-lg navbar-light
                shadow-sm
                bg-white
                rounded
                gs-nav
                " id="gs-nav">
    <button onclick="gs_sidebar_close()" id="gs_sidebar_close">
        <span class="navbar-toggler-icon"></span>
    </button>
    <button onclick="gs_sidebar_open()" id="gs_sidebar_open">
        <span class="navbar-toggler-icon"></span>
    </button>
    <button onclick="gs_mob_sidebar_open()" id="gs_mob_sidebar_open">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto" id="gs-head-nav">

            <li class="nav-item">
                <a data-toggle="collapse" href="#profile" class="nav-link"><i class="fas fa-user mr-2"></i> <?php echo $_SESSION['email']; ?></a>

            </li>

            <li class="nav-item">
                <a href="?logout" class="nav-link">
                    <i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>
            </li>
        </ul>
    </div>
</nav>