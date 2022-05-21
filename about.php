<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"/>
    <link rel="stylesheet" href="css/style.css">
    <title>University</title>
</head>

<body>
<!-- START HERE -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
    <div class="container">
        <a href="index.php" class="navbar-brand">University</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item active">
                    <a href="about.php" class="nav-link">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="services.php" class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                    <a href="blog.php" class="nav-link">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- PAGE HEADER -->
<header id="page-header" class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto text-center">
                <h1 class="mt-5">About Us</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, temporibus?</p>
            </div>
        </div>
    </div>
</header>

<!-- ABOUT SECTION -->
<section id="about" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>What We Do</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, fuga eaque. Amet, assumenda aliquid
                    tempore dolorum
                    error eveniet doloribus sed repellat quod, dolores fuga ipsam soluta. Aliquam accusantium pariatur
                    aut sint deleniti
                    laborum ducimus voluptatem? Architecto cumque quod suscipit officiis soluta, voluptate dicta
                    blanditiis similique
                    praesentium temporibus adipisci debitis labore!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, fuga eaque. Amet, assumenda aliquid
                    tempore dolorum
                    error eveniet doloribus sed repellat quod, dolores fuga ipsam soluta. Aliquam accusantium pariatur
                    aut sint deleniti
                    laborum ducimus voluptatem? Architecto cumque quod suscipit officiis soluta, voluptate dicta
                    blanditiis similique
                    praesentium temporibus adipisci debitis labore!</p>
            </div>
            <div class="col-md-6">
                <img src="https://source.unsplash.com/random/700x700/?technology" alt=""
                     class="img-fluid rounded-circle d-none d-md-block about-img">
            </div>
        </div>
    </div>
</section>

<!-- ICON BOXES -->
<section id="icon-boxes" class="p-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card bg-warning text-white text-center">
                    <div class="card-body">
                        <i class="fas fa-building fa-3x"></i>
                        <h3>Sample Heading</h3>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, adipisci.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-dark text-white text-center">
                    <div class="card-body">
                        <i class="fas fa-bullhorn fa-3x"></i>
                        <h3>Sample Heading</h3>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, adipisci.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-warning text-white text-center">
                    <div class="card-body">
                        <i class="fas fa-comments fa-3x"></i>
                        <h3>Sample Heading</h3>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, adipisci.
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card bg-success text-white text-center">
                    <div class="card-body">
                        <i class="fas fa-box fa-3x"></i>
                        <h3>Sample Heading</h3>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, adipisci.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-danger text-white text-center">
                    <div class="card-body">
                        <i class="fas fa-credit-card fa-3x"></i>
                        <h3>Sample Heading</h3>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, adipisci.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-success text-white text-center">
                    <div class="card-body">
                        <i class="fas fa-coffee fa-3x"></i>
                        <h3>Sample Heading</h3>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, adipisci.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section id="testimonials" class="p-4 bg-dark text-white">
    <div class="container">
        <h2 class="text-center">testimonials</h2>
        <div class="row text-center">
            <div class="col">
                <div class="slider">
                    <div>
                        <blockquote class="blockquote">
                            <p class="mb-0">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, quaerat.
                            </p>
                            <footer class="blockquote-footer">John Doe From
                                <cite title="Company 1">Company 1</cite>
                            </footer>
                        </blockquote>
                    </div>
                    <div>
                        <blockquote class="blockquote">
                            <p class="mb-0">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, quaerat.
                            </p>
                            <footer class="blockquote-footer">Sam Smith From
                                <cite title="Company 2">Company 2</cite>
                            </footer>
                        </blockquote>
                    </div>
                    <div>
                        <blockquote class="blockquote">
                            <p class="mb-0">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, quaerat.
                            </p>
                            <footer class="blockquote-footer">Meghan Williams From
                                <cite title="Company 3">Company 3</cite>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer id="main-footer" class="text-center p-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <p>Copyright &copy;
                    <span id="year"></span> Glozzom</p>
            </div>
        </div>
    </div>
</footer>


<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>

<script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());

    $('.slider').slick({
        infinite: true,
        slideToShow: 1,
        slideToScroll: 1
    });

    $(document).ready(function () {
        // executes when HTML-Document is loaded and DOM is ready
        console.log("document is ready");


        $(".card").hover(
            function () {
                $(this).addClass('shadow-lg').css('cursor', 'pointer');
            }, function () {
                $(this).removeClass('shadow-lg');
            }
        );

// document ready  
    });
</script>
</body>

</html>