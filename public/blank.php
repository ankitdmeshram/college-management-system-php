<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Brokod Admin Panel</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous" />

    <style>
        body {
            overflow: hidden;
        }

        .gs-cont {
            padding: 0;
        }

        .gs-container .gs-col {
            float: left;
        }

        .gs-container #gs-sidebar {
            width: 15%;
            min-width: 150px;
            color: white;
            height: 100vh;
        }

        .gs-container #gs-body {
            width: 85%;
            padding-right: 0;
            padding-left: 0;
            height: 100vh;
            overflow-y: scroll;
        }

        .gs-sidebar .gs-scroll {
            overflow-y: scroll;
            height: 90%;
        }

        .gs-nav button {
            background: white;
            border: 1px solid grey;
            padding: 5px 10px;
        }

        .gs-dropdown {
            position: absolute;
            background: white;
            width: 200px;
            padding-inline-start: 0px;
            border: 1px solid rgba(128, 128, 128, 0.185);
        }

        .gs-dropdown li {
            padding: 5px;
            list-style-type: none;
            border-bottom: 1px solid rgba(128, 128, 128, 0.089);
            padding-left: 20px;
        }

        .gs-sidebar ul {
            padding-inline-start: 0px;
        }

        .gs-sidebar ul li {
            padding: 10px 20px;
            list-style: none;
            position: relative;
        }

        .gs-sidebar ul a {
            color: white;
            text-decoration: none;
        }

        .gs-sidebar ul li:hover {
            background-color: #25292e;
        }

        .gs-sidebar ul li svg {
            margin-right: 10px;
        }

        .gs-body #gs-nav {
            width: 85%;
            position: fixed;
            z-index: 1;
            padding-right: 20px;
        }

        .gs-body .gs-content {
            top: 60px;
            margin-bottom: 70px;
        }

        #gs_sidebar_open,
        #gs_sidebar_close {
            display: none;
        }

        #gs_mob_sidebar_close,
        #gs_mob_sidebar_open {
            display: none;
        }

        .gs-footer {
            margin-top: 60px;
        }

        @media (max-width: 1000px) {

            #gs_sidebar_close,
            #gs_sidebar_open,
            #gs_mob_sidebar_close {
                display: none;
            }

            #gs-sidebar {
                width: 50%;
                min-width: 225px !important;
            }

            #gs-body {
                position: fixed;
                z-index: 0;
            }

            #gs_mob_sidebar_open {
                display: block;
            }

            #gs-body,
            #gs-nav {
                width: 100% !important;
            }
        }

        /* ////////scroll  */
        .gs-scroll::-webkit-scrollbar {
            width: 5px;
        }

        /* Track */
        .gs-scroll:hover::-webkit-scrollbar-track {
            background: white;
        }

        /* Handle */
        .gs-scroll:hover::-webkit-scrollbar-thumb {
            background: #8e8f8f;
        }

        /* Handle on hover */
        .gs-scroll::-webkit-scrollbar-thumb:hover {
            background: #636464;
        }

        /* ///// */
        .gs-body::-webkit-scrollbar {
            width: 5px;
        }

        /* Track */
        .gs-body:hover::-webkit-scrollbar-track {
            background: white;
        }

        /* Handle */
        .gs-body:hover::-webkit-scrollbar-thumb {
            background: #8e8f8f;
        }

        /* Handle on hover */
        .gs-body::-webkit-scrollbar-thumb:hover {
            background: #636464;
        }
    </style>

    <script>
        const gs_sidebar_close = () => {
            // alert(" gs_sidebar_close function called")
            document.getElementById("gs-sidebar").style.transform =
                "translateX(-100%)";
            document.getElementById("gs-sidebar").style.height = "0";
            document.getElementById("gs-sidebar").style.transition = ".2s";
            document.getElementById("gs-body").style.width = "100%";
            document.getElementById("gs-nav").style.width = "100%";
            document.getElementById("gs-body").style.transition = ".1s";
            document.getElementById("gs-nav").style.transition = ".1s";
            document.getElementById("gs_sidebar_close").style.display = "none";
            document.getElementById("gs_sidebar_open").style.display = "block";
        };
        const gs_sidebar_open = () => {
            // alert("gs_sidebar_open function called")
            document.getElementById("gs-sidebar").style.transform =
                "translateX(0%)";
            document.getElementById("gs-sidebar").style.height = "100vh";
            document.getElementById("gs-sidebar").style.transition = ".2s";
            document.getElementById("gs-body").style.width = "85%";
            document.getElementById("gs-nav").style.width = "85%";
            document.getElementById("gs-body").style.transition = ".1s";
            document.getElementById("gs-nav").style.transition = ".1s";
            document.getElementById("gs_sidebar_close").style.display = "block";
            document.getElementById("gs_sidebar_open").style.display = "none";
        };

        const gs_mob_sidebar_open = () => {
            // alert(" gs_mob_sidebar_open function called")
            document.getElementById("gs-sidebar").style.transform =
                "translateX(0%)";
            document.getElementById("gs-sidebar").style.height = "100vh";
            document.getElementById("gs-sidebar").style.position = "fixed";
            document.getElementById("gs-sidebar").style.zIndex = 1;
            document.getElementById("gs-sidebar").style.marginTop = "55px";
            document.getElementById("gs-sidebar").style.transition = ".2s";
            document.getElementById("gs-body").style.width = "85%";
            document.getElementById("gs-nav").style.width = "85%";
            document.getElementById("gs-body").style.transition = ".1s";
            document.getElementById("gs-nav").style.transition = ".1s";
            document.getElementById("gs_sidebar_close").style.display = "block";
            document.getElementById("gs_mob_sidebar_open").style.display = "none";
        };
    </script>
</head>

<body>
    <div class="container-fluid gs-cont">
        <div class="gs-container">
            <div class="gs-sidebar gs-col bg-dark" id="gs-sidebar">
                <h1 class="pl-3 p-1">Admin</h1>
                <ul class="gs-scroll pt-2">
                    <a href="/">
                        <li to="/"><i class="fa fa-home" aria-hidden="true"></i> Home</li>
                    </a>
                    <a href="/admission">
                        <li>
                            <i class="fa fa-sign-in" aria-hidden="true"></i> Admission
                        </li>
                    </a>
                    <a href="/blank">
                        <li>
                            <i class="fa fa-sign-in" aria-hidden="true"></i> Blank Page
                        </li>
                    </a>

                    <a data-toggle="collapse" href="#userinterface">
                        <li><i class="fab fa-buffer"></i> User Interface</li>
                    </a>
                    <ul class="collapse" id="userinterface">
                        <a href="/buttons">
                            <li>Buttons</li>
                        </a>
                    </ul>
                </ul>
            </div>

            <div class="gs-body gs-col container-fluid bg-light" id="gs-body">
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
                    <a class="navbar-brand" href="#">Body Part</a>
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

                <div class="gs-content card m-3 p-3">
                    <h1>Home</h1>

                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Distinctio eaque maxime pariatur atque! Similique recusandae
                        expedita exercitationem nam in sed, ex consequatur, quo iusto vel
                        doloremque sint tempore unde debitis!
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script defer src="https://pro.fontawesome.com/releases/v5.10.0/js/all.js" integrity="sha384-G/ZR3ntz68JZrH4pfPJyRbjW+c0+ojii5f+GYiYwldYU69A+Ejat6yIfLSxljXxD" crossorigin="anonymous"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>