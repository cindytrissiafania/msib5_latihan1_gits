<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cindy's Portofolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <style>
        .jumbotron {
            padding-top: 2rem;
            background-color: plum;
        }
        .projects {
            padding-top: 2rem;
            background-color: plum;
        }
    </style>
</head>
<body>
    <!--navbar-->
    <nav class="navbar navbar-expand-lg bg-body-primary">
        <div class="container">
            <a class="navbar-brand" href="#">My Portofolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Dropdown link </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- akhir navbar-->

    <!--jumbotron-->
    <section class="jumbotron text-center">
        <img src="img/cindy.jpeg" alt="Cindy Trissia Fania" width="200" class="rounded-circle img-thumbnail" />
        <h1 class="display-4">Cindy Trissia Fania</h1>
        <p class="lead">Selamat datang di web portofolio saya.</p>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path
                fill="#ffffff"
                fill-opacity="0.35"
                d="M0,128L18.5,154.7C36.9,181,74,235,111,229.3C147.7,224,185,160,222,117.3C258.5,75,295,53,332,74.7C369.2,96,406,160,443,170.7C480,181,517,139,554,122.7C590.8,107,628,117,665,138.7C701.5,160,738,192,775,186.7C812.3,181,849,139,886,133.3C923.1,128,960,160,997,149.3C1033.8,139,1071,85,1108,101.3C1144.6,117,1182,203,1218,245.3C1255.4,288,1292,288,1329,277.3C1366.2,267,1403,245,1422,234.7L1440,224L1440,0L1421.5,0C1403.1,0,1366,0,1329,0C1292.3,0,1255,0,1218,0C1181.5,0,1145,0,1108,0C1070.8,0,1034,0,997,0C960,0,923,0,886,0C849.2,0,812,0,775,0C738.5,0,702,0,665,0C627.7,0,591,0,554,0C516.9,0,480,0,443,0C406.2,0,369,0,332,0C295.4,0,258,0,222,0C184.6,0,148,0,111,0C73.8,0,37,0,18,0L0,0Z"
            ></path>
        </svg>
    </section>
    <!--akhir jumbotron-->

    <!--about-->
    <section id="about">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2>About Me</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p>Saya adalah mahasiswa di Politeknik Negeri Sriwijaya, jurusan Manajemen Informatika, saat ini saya berada di semester tujuh dan sedang mengikuti kegiatan MBKM.</p>
                </div>
                <div class="col-6">
                    <p>Saat ini saya mengikuti program Kampus Merdeka yaitu MBKM, dan saya memilih mengikuti Studi Independen dan mitranya adalah GITS.ID</p>
                </div>
            </div>
        </div>
    </section>
    <!--About-->

    <section>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#5000ca" fill-opacity="0.35" d="M0,160L48,149.3C96,139,192,117,288,117.3C384,117,480,139,576,154.7C672,171,768,181,864,160C960,139,1056,85,1152,74.7C1248,64,1344,96,1392,112L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
    <!--Akhir About-->

    <!--Project-->
    <section id="projects">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2>Passion</h2>
                </div>
            </div>
            <div class="container"></div>
            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <img src="project/1.jpg" class="card-img-top" alt="coding">
                        <div class="card-body">
                            <p class="card-text">Saya sangat tertarik belajar tentang web development maka dari itu saya mengikuti beberapa bootcamp yang mempelajari tentang web.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img src="project/2.jpg" class="card-img-top" alt="coding">
                        <div class="card-body">
                            <p class="card-text">Selain tertarik dengan web, saya mempelajari tentang Machine Learning dan juga Artificial Intelligence.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Akhir Project-->

    <section id="contact">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2>Contact Me</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <?php
                    // Menampilkan tanggal dan waktu saat ini
                    echo "Tanggal dan Waktu saat ini: " . date("Y-m-d H:i:s");
                    ?>
                </div>
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Full-name</label>
                        <input type="text" class="form-control" id="name" aria-describedby="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="email">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </section>

    <!--Akhir Contact-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

     <?php
                    // Menampilkan tanggal dan waktu saat ini
                    echo "Tanggal dan Waktu saat ini: " . date("Y-m-d H:i:s");
                   
                   ?>
  </body>
</html>
