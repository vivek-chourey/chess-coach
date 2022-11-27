<!DOCTYPE html>

<html>

<head>

    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">chessCoach</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#train">Train</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="events.php">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact Us</a>
                </li>



            </ul>
            
        </div>
    </nav>

    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/p1.jpg" alt="">
                <div class="carousel-caption">
                    <h3>“Strategy requires thought, tactics require observation”</h3>
                    <p>- Max Euwe</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/p12.jpg" alt="">
                <div class="carousel-caption">
                    <h3>“Life is a kind of Chess, with struggle, competition, good and ill events”</h3>
                    <p>- Benjamin Franklin</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/p3.jpg" alt="">
                <div class="carousel-caption">
                    <h3>“The winner of the game is the player who makes the next-to-last mistake”</h3>
                    <p>- Savielly Tartakover</p>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <section class="my-5">

        <div class="py-5">
            <h2 class="text-center">About Us</h2>
        </div>

        <div class="container-fluid" >
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">

                    <img src="images/p4.jpg" class="img-fluid aboutimg">
                </div>

                <div class="col-lg-6 col-md-6 col-12">

                    <h3 class="display-4">Why chessCoach?</h3>
                    <p class="py-3">Chess training and practice supports the development of higher-order thinking
                        skills—like problem solving, decision making, critical thinking, planning, and even creative
                        thinking. Chess training and practice also helps improve general cognitive ability and
                        scholastic achievement—especially in mathematics.<br><br>chessCoach provides you everything you need to improve your chess at one place.  </p>

                </div>
            </div>
        </div>

    </section>

    <section class="my-4">

        <div class="py-4">
            <h2 class="text-center" id="train">Train</h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card" >
                        <img class="card-img-top" src="images/p1.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Rules for beginners</h4>
                            <p class="card-text">Learn how Pieces move and basics of chess.</p>
                            <a href="https://lichess.org/learn#/" target="_blank" class="btn btn-primary">Let's
                                Begin</a>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card">
                        <img class="card-img-top" src="images/p10.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Openings for White</h4>
                            <p class="card-text">Learn the most successful openings as White and increase your winrate.
                            </p>
                            <a href="white.php" class="btn btn-primary">Let's Begin</a>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card">
                        <img class="card-img-top" src="images/p3.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Openings for Black</h4>
                            <p class="card-text">Learn the most successful openings as Black and increase your winrate.
                            </p>
                            <a href="black.php" class="btn btn-primary">Let's Begin</a>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card">
                        <img class="card-img-top" src="images/p4.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Daily Puzzle</h4>
                            <p class="card-text">Train with chess puzzles to improve your tactical play, Solve puzzles
                                to improve your rating.
                            </p>
                            <a href="dailypuzzle.php" class="btn btn-primary">Let's Begin</a>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card">
                        <img class="card-img-top" src="images/p5.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Watch Live</h4>
                            <p class="card-text">Watch the games of strongest players on earth.
                            </p>
                            <a href="livechess.php" class="btn btn-primary">Let's Begin</a>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card">
                        <img class="card-img-top" src="images/p6.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Quick Game</h4>
                            <p class="card-text">Play a quick Blitz game.
                            </p>
                            <a href="quickgame.php" class="btn btn-primary">Let's Begin</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </section>

    <section class="my-5">

        <div class="py-5">
            <h2 class="text-center">Chess Gallery</h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">

                    <img class="img-fluid pb-4" src="images/p13.jpg" alt="">

                </div>
                <div class="col-lg-4 col-md-4 col-12">

                    <img class="img-fluid pb-4" src="images/p12.jpg" alt="">

                </div>
                <div class="col-lg-4 col-md-4 col-12">

                    <img class="img-fluid pb-4" src="images/p11.jpg" alt="">

                </div>
                <div class="col-lg-4 col-md-4 col-12">

                    <img class="img-fluid pb-4" src="images/p10.jpg" alt="">

                </div>
                <div class="col-lg-4 col-md-4 col-12">

                    <img class="img-fluid pb-4" src="images/p9.jpg" alt="">

                </div>
                <div class="col-lg-4 col-md-4 col-12">

                    <img class="img-fluid pb-4" src="images/p8.jpg" alt="">

                </div>
                <div class="col-lg-4 col-md-4 col-12">

                    <img class="img-fluid pb-4" src="images/p7.jpg" alt="">

                </div>
                <div class="col-lg-4 col-md-4 col-12">

                    <img class="img-fluid pb-4" src="images/p6.jpg" alt="">

                </div>
                <div class="col-lg-4 col-md-4 col-12">

                    <img class="img-fluid pb-4" src="images/p5.jpg" alt="">

                </div>

            </div>
        </div>

    </section>

    <section class="my-5">

        <div class="py-5">
            <h2 class="text-center" id="contact">Contact Us</h2>
        </div>

        <div class="w-50 m-auto">

            <form action="userInfo.php" method="post">

                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user" class="form-control">

                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" name="email" class="form-control">

                </div>
                <div class="form-group">
                    <label>Mobile number</label>
                    <input type="text" name="mobile" class="form-control">

                </div>
                <div class="form-group">
                    <label>Comments</label>
                    <textarea class="form-control" name="comments"></textarea>

                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>

        </div>

    </section>

    <footer>
        <p class="p-3 bg-dark text-white text-center">@chessCoach</p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>