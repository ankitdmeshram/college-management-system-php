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
    <a class="navbar-brand" href="#">College Management System  </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto" id="gs-head-nav">
            <li class="nav-item">
                <a data-toggle="collapse" href="#notification" class="nav-link"><i class="fas fa-bell"></i></a>
                <ul class="gs-dropdown collapse" id="notification" data-parent="#gs-head-nav">
                    <p class="p-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Dolores animi vero non consectetur illo laborum
                        exercitationem nihil mollitia delectus veniam ipsam,
                        repellendus voluptates est velit aliquam hic soluta
                        voluptas debitis.
                    </p>
                </ul>
            </li>
            <li class="nav-item">
                <a data-toggle="collapse" href="#profile" class="nav-link"><i class="fas fa-user"></i></a>
                <ul class="gs-dropdown collapse" id="profile" data-parent="#gs-head-nav">
                    <li class="nav-item">
                        <a href="/signin" class="nav-link">
                            <i class="fa fa-sign-in" aria-hidden="true"></i>
                            Signin</a>
                    </li>
                    <li class="nav-item">
                        <a href="/signup" class="nav-link">
                            <i class="fa fa-user-plus" aria-hidden="true"></i>
                            Signup</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="/signin" class="nav-link">
                    <i class="fa fa-sign-in" aria-hidden="true"></i> Signin</a>
            </li>
            <li class="nav-item">
                <a href="/signup" class="nav-link">
                    <i class="fa fa-user-plus" aria-hidden="true"></i> Signup</a>
            </li>
        </ul>
    </div>
</nav>