<?php 
include "dbConfig.php";
include "admin/inc/functions.php";

?>

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
    <link rel="stylesheet" href="css/style.css">
    <title>University</title>
</head>

<body>
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
                <li class="nav-item">
                    <a href="about.php" class="nav-link">About Us</a>
                </li>
                <li class="nav-item active">
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
<header id="page-header">
    <div class="container services">
        <div class="row">
            <div class="col-md-6 m-auto text-center">
                <h1 class="mt-5">Our Services</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, temporibus?</p>
            </div>
        </div>
    </div>
</header>

<!-- SERVICES SECTION -->
<section id="services" class="py-5">
    <div class="container">
        <div class="row">
            <?php
            // Fetching all university

                $universities = getUniversity();
                if (count($universities) > 0) {
                    $length = count($universities);
                    for ($i = 0; $i < $length; $i++) {

                  ?>

                <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-header bg-dark text-white">
                        <!-- <h3><?php echo $row["name"] ?></h3> -->
                        <h3><?php echo $universities[$i]['name']; ?></h3>
                    </div>
                    <div class="card-body">
                        <!-- <p class="card-text"><?php echo $row["description"] ?></p> -->
                        <p class="card-text"><?php echo $universities[$i]['description']; ?></p>
                        <ul class="list-group">

                            <?php    

                            $uni_id = $universities[$i]['id'];;

                            $sql2 = "SELECT courses.*
                                FROM courses WHERE courses.uni_id = $uni_id;";

                            $result2 = mysqli_query($conn, $sql2);   
                            if (mysqli_num_rows($result2) > 0) {
                                // output data of each row
                                while($row2 = mysqli_fetch_assoc($result2)) { 
                            ?>
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0">
                                            <a href="#collapse<?php echo $row2["id"]; ?>" data-toggle="collapse" data-parent="#accordion">
                                                <i class="fas fa-arrow-circle-down">
                                                <?php echo $row2["p_name"]; ?>
                                                </i>
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="collapse<?php echo $row2["id"]; ?>" class="collapse">
                                        <div class="card-body">
                                            Undergraduate Fees:
                                            <?php echo $row2["under_fees"]; ?>
                                            <br>
                                            Postgraduate Fees:
                                            <?php echo $row2["post_fees"]; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                                }
                                    } else {
                                        echo "0 results";
                                    }
                            ?>

                        </ul>
                        <a href="#" class="btn btn-danger btn-block mt-2">Get It</a>
                    </div>
                </div>
            </div>

            <?php
              }
            } 
            ?>

        </div>
    </div>
</section>

<!-- FAQ -->
<section id="faq" class="p-5 bg-dark text-white">
    <div class="container">
        <h1 class="text-center">Frequently Asked Questions</h1>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <div id="accordion">
                    <div class="card">
                        <a href="#collapseOne" class="stretched-link" data-toggle="collapse" data-parent="accordion">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    Question One
                                </h5>
                            </div>
                        </a>

                        <div id="collapseOne" class="collapse">
                            <div class="card-body">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt ea officiis
                                distinctio exercitationem dolor minus placeat
                                amet commodi, ab a perspiciatis officia nobis reiciendis numquam totam repudiandae
                                molestias nulla, quod
                                voluptatibus modi rerum laboriosam tenetur. Nihil, soluta eaque? Minima, deserunt.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <a href="#collapseTwo" class="stretched-link" data-toggle="collapse" data-parent="accordion">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    Question Two
                                </h5>
                            </div>
                        </a>

                        <div id="collapseTwo" class="collapse">
                            <div class="card-body">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt ea officiis
                                distinctio exercitationem dolor minus placeat
                                amet commodi, ab a perspiciatis officia nobis reiciendis numquam totam repudiandae
                                molestias nulla, quod
                                voluptatibus modi rerum laboriosam tenetur. Nihil, soluta eaque? Minima, deserunt.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <a href="#collapseThree" class="stretched-link" data-toggle="collapse" data-parent="accordion">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    Question Three
                                </h5>
                            </div>
                        </a>

                        <div id="collapseThree" class="collapse">
                            <div class="card-body">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt ea officiis
                                distinctio exercitationem dolor minus placeat
                                amet commodi, ab a perspiciatis officia nobis reiciendis numquam totam repudiandae
                                molestias nulla, quod
                                voluptatibus modi rerum laboriosam tenetur. Nihil, soluta eaque? Minima, deserunt.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="accordion1">
                    <div class="card">
                        <a href="#collapseFour" class="stretched-link" data-toggle="collapse" data-parent="accordion1">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    Question Four
                                </h5>
                            </div>
                        </a>

                        <div id="collapseFour" class="collapse">
                            <div class="card-body">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt ea officiis
                                distinctio exercitationem dolor minus placeat
                                amet commodi, ab a perspiciatis officia nobis reiciendis numquam totam repudiandae
                                molestias nulla, quod
                                voluptatibus modi rerum laboriosam tenetur. Nihil, soluta eaque? Minima, deserunt.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <a href="#collapseFive" class="stretched-link" data-toggle="collapse" data-parent="accordion1">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    Question Five
                                </h5>
                            </div>
                        </a>

                        <div id="collapseFive" class="collapse">
                            <div class="card-body">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt ea officiis
                                distinctio exercitationem dolor minus placeat
                                amet commodi, ab a perspiciatis officia nobis reiciendis numquam totam repudiandae
                                molestias nulla, quod
                                voluptatibus modi rerum laboriosam tenetur. Nihil, soluta eaque? Minima, deserunt.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <a href="#collapseSix" class="stretched-link" data-toggle="collapse" data-parent="accordion1">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    Question Six
                                </h5>
                            </div>
                        </a>

                        <div id="collapseSix" class="collapse">
                            <div class="card-body">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt ea officiis
                                distinctio exercitationem dolor minus placeat
                                amet commodi, ab a perspiciatis officia nobis reiciendis numquam totam repudiandae
                                molestias nulla, quod
                                voluptatibus modi rerum laboriosam tenetur. Nihil, soluta eaque? Minima, deserunt.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>

<script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());

</script>
</body>

</html>