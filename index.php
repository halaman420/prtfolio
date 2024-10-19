<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <style>
        .card {
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        .card-body {
            flex-grow: 1;
        }
        .card-img-top {
            object-fit: cover; /* Ensures the image covers the area without distortion */
            height: 200px; /* Set a fixed height for the images */
        }
    </style>
    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php 
                require_once("topbar.php");
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
<div class="text-center my-4">
    <h1 style="color: black;">HELLO I'M DYNO OLILA</h1>
</div>

<div class="text-center my-4">
 <div style="margin-left: 20px; margin-right: 20px;">
    <h4>Hi everyone! My name is Dyno Olila, and I’m currently a Bachelor of Science in Information Technology student at Colegio De Sta.terresa de Avila. I have always been deeply passionate about technology and its incredible ability to transform our lives, from the way we communicate to how we solve complex problems. I love diving into topics that challenge my thinking, whether it’s exploring the latest advancements in software development, understanding the intricacies of cybersecurity, or discovering how data can be harnessed to make informed decisions. My journey in this field has not only expanded my technical knowledge but also fueled my desire to innovate and contribute to meaningful projects that can have a positive impact on society.</h4>
</div>
<br>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="img/dyno.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"><h3 style="color: black;">Age: 15</h3>I started learning the basics of coding through online tutorials and YouTube videos. I began with HTML and CSS, fascinated by how I could create simple web pages.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="img/dyno2.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"><h3 style="color: black;">Age: 17</h3>Built a small game using Python, which improved my problem-solving skills and introduced me to programming concepts like loops and conditionals.</p>
                </div> 
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="img/dyno3.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"><h3 style="color: black;">Age: 19</h3>I began learning about backend development with Node.js and Express, complementing my frontend knowledge.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="img/images4.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"><h3 style="color: black;">Age: 20</h3> Secured an internship where I applied my coding skills in a professional environment, further enhancing my knowledge and understanding of industry practices.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="text-center my-4">
    <h2 style="color: black;">Skills</h2>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card" style="background-color: black; color: white; border-radius: 15px;">
                <div class="card-body">
                    <h4 class="card-title">Programming Languages</h4>
                    <ul>
                        <li>Python</li>
                        <li>JavaScript</li>
                        <li>HTML & CSS</li>
                        <li>Java</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card" style="background-color: black; color: white; border-radius: 15px;">
                <div class="card-body">
                    <h4 class="card-title">Frameworks & Tools</h4>
                    <ul>
                        <li>React</li>
                        <li>MySQL</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card" style="background-color: black; color: white; border-radius: 15px;">
                <div class="card-body">
                    <h4 class="card-title">Soft Skills</h4>
                    <ul>
                        <li>Problem Solving</li>
                        <li>Team Collaboration</li>
                        <li>Effective Communication</li>
                        <li>Time Management</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
    <div class="card" style="background-color: black; color: white; border-radius: 15px;">
        <div class="card-body">
            <h4 class="card-title">Certifications</h4>
            <ul>
                <li>Certified Python Programmer</li>
                <li>Web Development Bootcamp</li>
                <li>Cybersecurity Fundamentals</li>
            </ul>
        </div>
    </div>
</div>

    </div>
</div>

    </div>
</div>



                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php 
            require_once("footer.php");
            ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
