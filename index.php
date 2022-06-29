
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css"/>
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
                <li class="nav-item active">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link">About Us</a>
                </li>
                <!-- <li class="nav-item">
                    <a href="services.php" class="nav-link">Services</a>
                </li> -->
                <li class="nav-item">
                    <a href="universities.php" class="nav-link">Universities</a>
                </li>
                <!-- <li class="nav-item">
                    <a href="contact.php" class="nav-link">Contact</a>
                </li> -->
                <li class="nav-item">
                    <div class="search-box">
                        <input type="text" autocomplete="off" placeholder="Search University..." />
                        <div class="result"></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- SHOWCASE SLIDER -->
<section id="showcase">
    <div class="carousel slide" id="myCarousel" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item carousel-image-1 active">
                <div class="container">
                    <div class="carousel-caption d-none d-sm-block text-right mb-5">
                        <h1 style="font-weight: bold;" class="display-3">Welcome</h1>
                        <!-- <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat reprehenderit
                            inventore eum sequi dolorum distinctio adipisci modi a dolores asperiores.</p> -->
                        <!-- <a href="#" class="btn btn-danger btn-lg">Sign Up Now</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- HOME ICON SECTOIN -->
<!-- <section id="home-icons" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4 text-center">
                <i class="fab fa-amazon fa-3x mb-2"></i>
                <h3>Turning Gears</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, autem.</p>
            </div>
            <div class="col-md-4 mb-4 text-center">
                <i class="fab fa-amazon fa-3x mb-2"></i>
                <h3>Sending Data</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, autem.</p>
            </div>
            <div class="col-md-4 mb-4 text-center">
                <i class="fab fa-amazon fa-3x mb-2"></i>
                <h3>Making Money</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, autem.</p>
            </div>
        </div>
    </div>
</section> -->

<!-- HOME HEADING SECTION -->
<section id="home-heading" class="p-5">
    <div class="dark-overlay">
        <div class="row">
            <div class="col">
                <div class="container pt-5">
                    <h1>Are You Ready To Get Started?</h1>
                    <p class="d-none d-md-block">
                        Let's find out which university is best for your career!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- INFO SECTION -->
<!-- <section id="info" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6 align-self-center">
                <h3>Lorem Ipsum</h3>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti nam voluptatum optio
                    blanditiis tempora maiores cum sequi ducimus unde dolorum!</p>
                <a href="about.html" class="btn btn-outline-danger btn-lg">Learn More</a>
            </div>
            <div class="col-md-6">
                <img src="img/laptop.png" alt="laptop" class="img-fluid thumbnail">
            </div>
        </div>
    </div>
</section> -->

<!-- From Miz template -->

<!-- ABOUT / WHY SECTION -->
<section id="about" class="py-5 text-center bg-light">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="info-header mb-5">
                    <h1 class="text-primary pb-3">
                        Why Us?
                    </h1>
                    <p class="lead pb-3">
                        To Find you the best of the best universities in Bangladesh. Here you can find your desire 
                        university, you wish to get information.
                    </p>
                </div>

                <!-- ACCORDION -->
                <div id="accordion">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">
                                <a href="#collapse1" data-toggle="collapse" data-parent="#accordion">
                                    <i class="fas fa-arrow-circle-down"></i> Get Inspired
                                </a>
                            </h5>
                        </div>

                        <div id="collapse1" class="collapse show">
                            <div class="card-body">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit odit laborum qui,
                                debitis, sequi dolores nobis mollitia
                                labore quasi earum laboriosam nihil cupiditate magnam iusto nostrum doloremque
                                accusantium repudiandae
                                expedita autem et, repellendus suscipit consequatur! Alias, maiores amet sunt ab
                                inventore illo, deleniti
                                facilis consequatur tenetur nam pariatur fuga nisi!
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">
                                <a href="#collapse2" data-toggle="collapse" data-parent="#accordion">
                                    <i class="fas fa-arrow-circle-down"></i> Gain The Knowledge
                                </a>
                            </h5>
                        </div>

                        <div id="collapse2" class="collapse">
                            <div class="card-body">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit odit laborum qui,
                                debitis, sequi dolores nobis mollitia
                                labore quasi earum laboriosam nihil cupiditate magnam iusto nostrum doloremque
                                accusantium repudiandae
                                expedita autem et, repellendus suscipit consequatur! Alias, maiores amet sunt ab
                                inventore illo, deleniti
                                facilis consequatur tenetur nam pariatur fuga nisi!
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">
                                <a href="#collapse3" data-toggle="collapse" data-parent="#accordion">
                                    <i class="fas fa-arrow-circle-down"></i> Open Your Mind
                                </a>
                            </h5>
                        </div>

                        <div id="collapse3" class="collapse">
                            <div class="card-body">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit odit laborum qui,
                                debitis, sequi dolores nobis mollitia
                                labore quasi earum laboriosam nihil cupiditate magnam iusto nostrum doloremque
                                accusantium repudiandae
                                expedita autem et, repellendus suscipit consequatur! Alias, maiores amet sunt ab
                                inventore illo, deleniti
                                facilis consequatur tenetur nam pariatur fuga nisi!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Ending Mizz -->



<!-- starting mi -->

<!-- AUTHORS -->
<!-- <section id="authors" class="my-5 text-center">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="info-header mb-5">
                    <h1 class="text-primary pb-3">
                        Any Help From Us?
                    </h1>
                    <p class="lead">
                        Meet our Team
                    </p>
                </div>
            </div>
        </div>

        <div style="justify-content: center;" class="row">

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <img src="img/person2.png" alt="" class="img-fluid rounded-circle w-50 mb-3">
                        <h3>My Name</h3>
                        <h5 class="text-muted">Lead</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed commodi nostrum, ab libero
                            voluptas officia.</p>
                        <div class="d-flex justify-content-center">
                            <div class="p-4">
                                <a href="http://facebook.com">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </div>
                            <div class="p-4">
                                <a href="http://twitter.com">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                            <div class="p-4">
                                <a href="http://instagram.com">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <img src="img/person3.png" alt="" class="img-fluid rounded-circle w-50 mb-3">
                        <h3>My Name</h3>
                        <h5 class="text-muted">Asst. Lead</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed commodi nostrum, ab libero
                            voluptas officia.</p>
                        <div class="d-flex justify-content-center">
                            <div class="p-4">
                                <a href="http://facebook.com">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </div>
                            <div class="p-4">
                                <a href="http://twitter.com">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                            <div class="p-4">
                                <a href="http://instagram.com">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->


<!-- ending mi -->


<!-- PHOTO GALLERY -->
<section id="gallery" class="py-5">
    <div class="container">
        <h1 class="text-center">Photo Gallery</h1>
        <p class="text-center">Check out Universities Gallery</p>
        <div class="row mb-4">
            <div class="col-md-4">
                <a href="https://source.unsplash.com/random/560x560" data-toggle="lightbox" data-gallery="img-gallery"
                   data-height="560"
                   data-width="560">
                    <img src="https://source.unsplash.com/random/560x560" alt="" class="img-fluid">
                </a>
            </div>

            <div class="col-md-4">
                <a href="https://source.unsplash.com/random/561x561" data-toggle="lightbox" data-gallery="img-gallery"
                   data-height="561"
                   data-width="561">
                    <img src="https://source.unsplash.com/random/561x561" alt="" class="img-fluid">
                </a>
            </div>

            <div class="col-md-4">
                <a href="https://source.unsplash.com/random/562x562" data-toggle="lightbox" data-gallery="img-gallery"
                   data-height="562"
                   data-width="562">
                    <img src="https://source.unsplash.com/random/562x562" alt="" class="img-fluid">
                </a>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-4">
                <a href="https://source.unsplash.com/random/563x563" data-toggle="lightbox" data-gallery="img-gallery"
                   data-height="563"
                   data-width="563">
                    <img src="https://source.unsplash.com/random/563x563" alt="" class="img-fluid">
                </a>
            </div>

            <div class="col-md-4">
                <a href="https://source.unsplash.com/random/564x564" data-toggle="lightbox" data-gallery="img-gallery"
                   data-height="564"
                   data-width="564">
                    <img src="https://source.unsplash.com/random/564x564" alt="" class="img-fluid">
                </a>
            </div>

            <div class="col-md-4">
                <a href="https://source.unsplash.com/random/565x565" data-toggle="lightbox" data-gallery="img-gallery"
                   data-height="565"
                   data-width="565">
                    <img src="https://source.unsplash.com/random/565x565" alt="" class="img-fluid">
                </a>
            </div>
        </div>
    </div>
</section>


<!--  -->

<!-- CONTACT -->
<!-- <section id="contact" class="bg-dark text-white py-5">
    <div class="dark-overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h3 class="mt-5">Get In Touch</h3>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, temporibus!</p>
                    <form>
                        <div class="input-group input-group-lg mb-3">
                            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fas fa-user"></i>
              </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Name">
                        </div>

                        <div class="input-group input-group-lg mb-4">
                            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fas fa-envelope"></i>
              </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Email">
                        </div>

                        <div class="input-group input-group-lg mb-3">
                            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fas fa-pencil-alt"></i>
              </span>
                            </div>
                            <textarea class="form-control" placeholder="Message" rows="5"></textarea>
                        </div>

                        <input type="submit" value="Submit" class="btn btn-primary btn-block btn-lg">
                    </form>
                </div>

                <div class="col-lg-3 align-self-center"> -->
                    <!-- <img src="img/lights.jpg" alt="" class="img-fluid"> -->
                    <!-- <h1>MyBrand</h1>
                </div>
            </div>
        </div>
    </div>
</section> -->


<!--  -->

<!-- NEWSLETTER -->
<!-- <section id="newsletter" class="text-center bg-dark text-white">
  <div class="dark-overlay">
    <div class="container mt-5">
      <div class="row">
        <div class="col">
          <h1 class="mt-5 mb-2">Sign Up For Our Newsletter</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut ullam quam dolor fugiat, <br> assumenda perspiciatis cum molestias nisi nam suscipit?</p>
          <form class="form-inline justify-content-center">
            <input type="text" class="form-control mb-2 mr-2" placeholder="Enter Name">
            <input type="text" class="form-control mb-2 mr-2" placeholder="Enter your Email">
            <button class="btn btn-primary mb-2">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!-- FOOTER -->
<section id="main-footer" class="text-center p-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <p>copyright&copy; <span id="year">MyBrand</span></p>
            </div>
        </div>
    </div>
</section>

<!-- VIDEO MODEL -->
<div class="modal fade" id="videoModal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body">
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
                <iframe src="" frameborder="0" height="350" width="100%" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"
        integrity="sha256-Y1rRlwTzT5K5hhCBfAFWABD4cU13QGuRN6P5apfWzVs=" crossorigin="anonymous"></script>

<script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());

    //Configure Slider
    $('.carousel').carousel({
        interval: 5000,
        pause: "hover",
    })

    // Lightbox Init
    $(document).on('click', '[data-toggle="lightbox"]', function (event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });

    // Video Play
    $(function () {
        // Auto play modal video
        $(".video").click(function () {
            var theModal = $(this).data("target"),
                videoSRC = $(this).attr("data-video"),
                videoSRCauto = videoSRC + "?modestbranding=1&rel=0&controls=0&showinfo=0&html5=1&autoplay=1";
            $(theModal + ' iframe').attr('src', videoSRCauto);
            $(theModal + ' button.close').click(function () {
                $(theModal + ' iframe').attr('src', videoSRC);
            });
        });
    });


    // SearchForm JavaScript
    $(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>

</body>

</html>