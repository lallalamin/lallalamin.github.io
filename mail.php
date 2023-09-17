<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From: ".$name."<".$email.">\r\n"

$recipient = "mari.hirota97@gmail.com"

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo'

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Mari Hirota Portfolio</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/logo.ico" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100 bg-light">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class = "navbar-brand" href="index.html"><img class="logo-img" src="assets/logo.png" alt="..." width = "90" height = "90"/></a>
                    <a class = "navbar-brand" href="index.html"><span class="fw-bolder text-primary">Mari Hirota</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="index.html">🚀 Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="resume.html">🌠 Resume</a></li>
                            <li class="nav-item"><a class="nav-link" href="projects.html">👾 Projects</a></li>
                            <li class="nav-item"><a class="nav-link" href="activities.html">🔭 Activity</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">🌎 Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- About Section-->
            <section class="bg-light py-5">
                <div class="container px-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-xxl-8">
                            <div class="text-center my-5">
                                <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                                <p class="lead fw-light mb-4">My name is Mari and welcome to my portfolio web.</p>
                                <p class="text-muted">I am a Junior at Northwestern College from Japan and Thailand. I am passionate in expressing my creativity into technology. I am interested in Machine Learning and Full Stack Development</p>
                                <div class="d-flex justify-content-center fs-2 gap-4">
                                    <a class="text-gradient" href="https://www.instagram.com/i_am_m.a.r.i/"><i class="bi bi-instagram"></i></a>
                                    <a class="text-gradient" href="https://www.linkedin.com/in/mari-hirota-9a5b85230/"><i class="bi bi-linkedin"></i></a>
                                    <a class="text-gradient" href="https://github.com/lallalamin"><i class="bi bi-github"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer-->
        <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0">Copyright &copy; Your Website 2023</div></div>
                    <div class="col-auto">
                        <a class="small" href="#!">Privacy</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Terms</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

';

?>