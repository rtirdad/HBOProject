<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <b><a class="navbar-brand fs-1 " href="#">
                    <img src="img/Logo.png" alt="" width="120"> nformation
                </a>
            </b>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Information</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12 text-center">
                <h1>Goede Morgen allemaal dit is onze <b>informatie</b> pagina</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 p-5">
                <div class="card border-0">
                    <a href="onderzoek.php">
                        <img class="card-img-top img-fluid max-width: 20%" style="height:400px" src="img/onderzoek1.jpg" alt="Card image cap">
                    </a>
                </div>
                <div class="card-body">
                    <h2 class="card-title text-center">Wat we gevonden heeft bij onze onderzoek</h2>
                </div>
            </div>
            <div class="col-md-6 p-5">
                <div class="card border-0">
                    <a href="hoofdvraag.php">
                        <img class="card-img-top img-fluid max-width: 20%" style="height:400px" src="img/Vraag.jpg" alt="Card image cap">
                    </a>
                </div>
                <div class="card-body">
                    <h2 class="card-title text-center">
                        meest gestelde vragen</h2>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center text-lg-start bg-light text-muted">

        <section class="d-flex justify-content-center justify-content-lg-between p-2 border-bottom">
            <div class="container text-center text-md-start mt-5">
                <div class="row text-center">
                    <div class="col-md-4">
                        <a class="text-decoration-none text-secondary" href="about.php"><h5>About</h5></a>

                    </div>
                    <div class="col-md-4">
                        <a class="text-decoration-none text-secondary" href="about.php"><h5>Contact</h5></a>

                    </div>
                    <div class="col-md-4">
                        <a class="text-decoration-none text-secondary" href="about.php"><h5>Information</h5></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center">@2022 HBO Voorbereiding All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </section>

    </footer>

</div>


</body>
</html>