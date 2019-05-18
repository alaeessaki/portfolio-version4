<?php
require "admin/database.php";

$db = Database::connect();
$sql = "SELECT * FROM projects WHERE favorite=1";
$stmt = $db->query($sql);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
Database::disconnect();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="favicon.ico?v=2" type="image/x-icon">
    <!--Bootstrap-->
    <link rel="stylesheet" href="lib/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <!--Main-->
    <link rel="stylesheet" href="dist/css/main.css">
    <!-- font awsome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <title>Portfolio</title>
</head>

<body>
<!-- Header section -->
<header>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="index.php">AE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mr-4">
                <li class="nav-item mr-4">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item mr-4">
                    <a class="nav-link" href="pages/about/about.html">About</a>
                </li>
                <li class="nav-item mr-4">
                    <a class="nav-link" href="pages/portfolio/portfolio.php">Portfolio</a>
                </li>
                <li class="nav-item mr-4">
                    <a class="nav-link spec" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- First section -->
    <div class="first-section d-flex flex-column flex-sm-column flex-md-row flex-lg-row flex-xl-row">
        <div class="hero ">
            <img src="assets/imgs/Fichier 6.png">
        </div>
        <div class="pres">
            <h4>HELLO MY NAME IS ALAE ES-SAKI, I’M 22 YEARS
                <br>OLD AND I’M A FULLSTACK DEVELOPER</h4>
            <div class="d-flex justify-content-center">
                <a class="p-4" href="#">GET CV</a>
                <a class="p-4" href="#">HIRE ME</a>
            </div>
        </div>
    </div>

    <!-- Background -->
    <div class="backg">
        <img src="assets/imgs/Fichier 8.png">
    </div>
    <div class="backg2">
        <img src="assets/imgs/Fichier 9.png">
    </div>

    <!-- Mouse -->
    <div class="mouse d-flex justify-content-center">
        <img src="assets/imgs/mouse.png">
    </div>
</header>

<!-- second section -->
<section class="decription-section">
    <div class="single-row">
        <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
            est
            laborum.</p>
        <a href="#">See more about Alae</a>
    </div>
</section>

<!-- cards section -->
<section class="cards-container">
    <div
            class="single-row d-flex flex-sm-column flex-md-row flex-lg-row flex-xl-row flex-sm-column flex-wrap align-items-sm-center align-items-md-stretch align-items-lg-stretch align-items-xl-stretch justify-content-center">
        <div class="card mr-sm-0 mr-md-5" style="width: 23rem;">
            <div class="card-body spec-card">
                <h5 class="card-title">Front-end</h5>
                <img src="assets/imgs/graphe.png" class="card-img-top">
            </div>
        </div>
        <div class="card" style="width: 23rem;">
            <div class="card-body">
                <h5 class="card-title">Back-end</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetuer
                    adipiscing elit, sed diam nonummy
                    nibh euismod tincidunt ut laoreet dolore
                    magna aliquam erat volutpat.
                    Ut wisi enim ad minim veniam, quis nostrud exerci
                    tation ullamcorper suscipit lobortis
                    Lorem ipsum dolor sit amet, consectetuer
                    adipiscing elit, sed diam nonummy
                    nibh euismod tincidunt ut laoreet dolore
                    magna aliquam erat volutpat.
                    Ut wisi enim ad minim veniam, quis nostrud exerci
                    tation ullamcorper suscipit lobortis

                </p>
            </div>
        </div>
        <div class="card mr-sm-0 mr-md-5" style="width: 23rem;">
            <div class="card-body">
                <h5 class="card-title">Design</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetuer
                    adipiscing elit, sed diam nonummy
                    nibh euismod tincidunt ut laoreet dolore
                    magna aliquam erat volutpat.
                    Ut wisi enim ad minim veniam, quis nostrud exerci
                    tation ullamcorper suscipit lobortis
                    Lorem ipsum dolor sit amet, consectetuer
                    adipiscing elit, sed diam nonummy
                    nibh euismod tincidunt ut laoreet dolore
                    magna aliquam erat volutpat.
                    Ut wisi enim ad minim veniam, quis nostrud exerci
                    tation ullamcorper suscipit lobortis

                </p>
            </div>
        </div>
        <div class="card" style="width: 23rem;">
            <div class="card-body">
                <h5 class="card-title">Other technologies</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetuer
                    adipiscing elit, sed diam nonummy
                    nibh euismod tincidunt ut laoreet dolore
                    magna aliquam erat volutpat.
                    Ut wisi enim ad minim veniam, quis nostrud exerci
                    tation ullamcorper suscipit lobortis
                    Lorem ipsum dolor sit amet, consectetuer
                    adipiscing elit, sed diam nonummy
                    nibh euismod tincidunt ut laoreet dolore
                    magna aliquam erat volutpat.
                    Ut wisi enim ad minim veniam, quis nostrud exerci
                    tation ullamcorper suscipit lobortis

                </p>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio section -->
<section class="recent-work mt-5 mb-5">
    <div class="single-row">
        <div class="title text-center mb-5">
            <h4>MY RECENT WORK</h4>
        </div>

        <!-- cards -->
        <div class="work-cont d-flex justify-content-center align-items-start flex-row flex-wrap position-relative">
            <?php foreach ($rows as $row): ?>
            <div class="card mr-sm-0 mr-md-5 mr-lg-5 mr-xl-5 mb-5 position-relative" style="width: 18rem;">
                <img class="card-img-top" src="assets/projects-imgs/<?= $row['image'] ?>" data-toggle="modal"
                     data-target="#exampleModal" onclick="getrow('<?=$row['name']?>','<?=$row['image']?>','<?=$row['description']?>','<?=$row['technologies']?>','<?=$row['github']?>')">
                <p class="vplus position-absolute" data-toggle="modal"
                     data-target="#exampleModal" onclick="getrow('<?=$row['name']?>','<?=$row['image']?>','<?=$row['description']?>','<?=$row['technologies']?>','<?=$row['github']?>')">See More</p>
                <a class="text-decoration-none p-1 d-flex align-items-center justify-content-center" href="<?=$row['github']?>"><p class="m-0">github source <i class="fab fa-github-square"></i> </p></a>
            </div>
            <?php endforeach;?>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="body">
                        <h3 class="text-center mb-5" id="mtitle"></h3>
                        <img class="mb-5" src="#" id="mimg">
                        <p class="mb-5" id="mdesc"></p>
                        <h5>technologies used :</h5>
                        <h6 id="mtech"></h6> 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-dismiss="modal">Close</button>
                        <a href="" id="mlink">
                            <button type="button" class="btn">Go to github page<i
                                    class="fab fa-github-square" style="padding-left: .6rem;"></i></button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Error Modal -->

        <div class="modal fade" id="testModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body d-flex justify-content-center align-items-center flex-column" id="body">
                        <h3 class="errortitle">Sorry but this project is not linked yet</h3>
                        <img class="errorImg" src="assets/imgs/error.png" style="width:60%">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="border:none">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- See more button -->
        <div class="af-suite text-center mb-5 mt-5">
            <a href="#">See More</a>
        </div>
    </div>
</section>

<!-- What i can do section -->
<section class="what-i-can-do-sec">
    <div class="single-row d-flex flex-sm-column flex-md-row flex-lg-row flex-xl-row flex-column">

        <div class="red-sec ml-md-5 ml-lg-5 ml-xl-5 pl-md-5 pl-lg-5 pl-xl-5">
            <h5 class="text-center mb-md-5 mb-lg-5 mb-xl-5">WHAT I CAN DO?</h5>
            <ul>
                <li>Create responsive websites that work on a wide range of devices</li>
                <li>Assist with production of clean and functional design</li>
                <li>Bridge communication gap between designers and developers</li>
                <li>I’m a full-stack developer which means I can bring your project from concept to completion.</li>
            </ul>
            <div class="button">
                <a href="#">Contact me</a>
            </div>
        </div>

        <div class="illust-sec">
            <img class="ill-img" src="assets/imgs/A Human-Standing.png">
        </div>

    </div>

    <div class="bac-img">
        <img src="assets/imgs/Fichier 8.png">
    </div>
    <div class="bac-sec-img">
        <img src="assets/imgs/Fichier 9.png">
    </div>
</section>

<!-- footer section -->

<footer>
    <div class="single-row d-flex justify-content-center align-items-center flex-column">
        <div class="logo">
            <a href="#">AE</a>
        </div>
        <div class="redaction mt-4">
            <p class="text-center">Lorem ipsum dolor sit amet, consectetuer<br>
                adipiscing elit, sed diam nonummy.</p>
        </div>

        <div class="reseaux d-flex flex-row flex-sm-wrap flex-md-wrap mt-4">
            <a href="#"><i class="fab fa-facebook-square"></i></a>
            <a href="#"><i class="fab fa-github-square"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-twitter-square"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>

        <!-- Copyright -->
        <div class="copyrights mt-5">
            <p>copyrights &copy; 2019: <a href="#">Alae ES-SAKI</a></p>
        </div>
    </div>
</footer>



<!--other Libraries-->
<script src="lib/jQuery-3-4-1/jquery-3.4.1.min.js"></script>
<script src="lib/popper/popper.min.js"></script>
<script src="lib/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>

<!--Main Js-->
<script src="dist/js/main.js"></script>
</body>

</html>