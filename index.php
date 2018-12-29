<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kiso buregdzinica</title>
    <meta name="author" content="anes karic">
    <meta name="description" content="buregdzinica">
    <meta name="keywords" content="burek, anes, karic, kiso, soki">
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-primary bg-dark fixed-top">
        <a class="navbar-brand" href="index.php"><img src="images/logo.jpg" alt="logo" class="img-fluid" height=75 width=75></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#jumbotron">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#aboutus" id="aboutClick">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#menu">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#images">Images</a>
                </li>
            </ul>
        </div>
    </nav>

    <section id="jumbotron" class="jumbotron jumbotron-fluid text-white d-flex justify-content-center align-items-center">
        <div class="container text-left hidden">
            <h1 class="display-1 text-primary text-uppercase">KISO</h1>
            <p class="display-4 d-none d-sm-block text-primary">Best buregdzinica!!!</p>
            <p class="lead text-dark">Best offers and price!</p>
            <p class="lead text-dark">The best offers and price!</p>
        </div>
        <div class="container text-center hidden">
            <p class="text-success h5 mb-3">Visit us on:</p>
            <a href="https://www.instagram.com/" target="_blank" class="btn btn-lg btn-dark mb-1">Instagram</a>
            <a href="https://www.facebook.com" target="_blank" class="btn btn-lg btn-dark mb-1">Facebook</a>
        </div>
    </section>

    <script>
        $('.nav-link').click(function() {
            event.preventDefault();
            var sectionTo = $(this).attr('href');
            $('html').animate({
                scrollTop: $(sectionTo).offset().top -60
            }, 1000);
        });
    </script>

    <article>
        <div class="col-12">
            <h1 id="aboutus">About us</h1>
        </div>
        <div class="col-11 ml-5 mb-5 mt-4">
            <?php
            require 'connection.php';
            $sql = "SELECT * FROM aboutus";
            $result = $dbc->query($sql);
            $count = $result->num_rows;
            if ($count > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div>' . $row["text"] . '</div>';
                }
            }
            ?>
        </div>
    </article>
        <div class="col-12">
            <h1 id="menu">Menu</h1>
        </div>

        <div class="row">
            <?php

            $sql = "SELECT * FROM menu";
            $result = $dbc->query($sql);
            $count = $result->num_rows;
            if ($count > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div id="card" class="card col-3 my-3 ml-3" style="width: 18rem;margin-left:80px !important;">
                            <div class="card-body">
                                <h5 class="card-title">' . $row["name"] . '</h5>
                            </div>
                            <div class="card-footer">' . $row["price"] . '</div>
                        </div>';
                }
            }
            ?>
        </div>
    </article>

    <article>
        <div class="col-12">
            <h1 id="images">Images</h1>
        </div>

        <div class="row">
            <div class="col-4 ml-5">
                <img src="images/slika1.jpg" alt="slika1" class="img-thumbnail" height=400 width=400>
            </div>

            <div class="col-3">
                <img src="images/slika2.jpg" alt="slika2" class="img-thumbnail" height=400 width=400>
            </div>

            <div class="col-4 ">
                <img src="images/slika3.jpg" alt="slika3" class="img-thumbnail" height=400 width=400>
            </div>

            <div class="col-4 ml-5 mt-5">
                <img src="images/slika4.jpeg" alt="slika4" class="img-thumbnail" height=400 width=400>
            </div>

            <div class="col-3 mt-5">
                <img src="images/slika 5.jpg" alt="slika5" class="img-thumbnail" height=400 width=400>
            </div>

            <div class="col-4 mt-5">
                <img src="images/slika 6.jpg" alt="slika6" class="img-thumbnail" height=400 width=400>
            </div>
        </div>
    </article>

  
    
    
</div>

</body>

</html>