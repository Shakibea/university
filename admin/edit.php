<?php
session_start([
    'cookie_lifetime' => 300,
]);

$_user_id = $_SESSION['id'] ?? 0;
$_user_name = $_SESSION['name'] ?? '';
if (!$_user_id) {
    header("Location: index.php");
    die();
}

include_once "inc/functions.php";
include_once 'inc/validation.php';

//Storing Image in File, $_Files['photo']
photoChecking('photo');



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="panel">
<div class="sidebar">
    <h4>Menu</h4>
    <ul class="menu">
        <li><a href="#" class="menu-item">Profile <?php echo "(".$_user_name.")"; ?></a></li>
        <br>
        <li><a href="admin.php" class="menu-item">All University</a></li>
        <li><a href="add_product.php" class="menu-item">Add New University</a></li>
        <li><a href="admin_user.php" class="menu-item">All Users</a></li>
        <!-- <li><a href="#" class="menu-item">Order List</a></li> -->
        <br>
        <li><a href="index.php">Logout</a></li>
    </ul>
</div>
<div class="container" id="main">

    <h1 class="maintitle">
        <i class="fas fa-store"></i> <br> Admin Dashboard
    </h1>

    <?php 
    $idFromView = $_GET['id'];
    //fetching university data;
    $data = getSingleUniversity($idFromView);

    ?>

    <div class="wordsc helement" id="words">
        <div class="formc">
            <form name="myForm" onsubmit="return validateForm()" id="form01" method="post" action="tasks.php" enctype="multipart/form-data">
                <h3>Add University</h3>
                <fieldset>
                    <label for="name" >Name <span style="color: red;" id="valname">*</span></label>
                    <input type="text" placeholder="Full Name" id="name" name="name" value="<?php echo $data['name']; ?>">
                    <label for="definition">Description <span style="color: red;" id="valdefinition">*</span></label>
                    <input type="text" placeholder="Definition" id="definition" name="definition" value="<?php echo $data['description']; ?>">
                    <label for="url">Url <span style="color: red;" id="valurl">*</span></label>
                    <input type="text" placeholder="url" id="url" name="url" value="<?php echo $data['url']; ?>">
                    <!-- <label for="price">Price <span id="valprice" style="color: red;">*</span></label>
                    <input type="number" placeholder="Price" id="price" name="price" value="<?php echo $_POST['price']; ?>">
                    <label for="quantity">Quantity <span id="valquantity" style="color: red;">*</span></label>
                    <input type="number" placeholder="Quantity" id="quantity" name="quantity" value="<?php echo $_POST['quantity']; ?>"> -->
                    <!-- <div class="row">
                        <input type="radio" id="e" name="isavailable" value="electronics">
                        <label for="e" style="margin-right: 10px;">Electronics</label>
                        <input type="radio" id="g" name="isavailable" value="groceries">
                        <label for="g" style="margin-right: 10px;">Groceries</label>
                        <input type="radio" id="h" name="isavailable" value="health & Beauty">
                        <label for="h">Health & Beauty</label>
                    </div> -->
                    <label style="color: red;" id="valisavailable"></label>

                    <img src="../<?php echo $data['logo']; ?>" height="200" width="200">

                    <?php var_dump(substr($data['logo'], 20)); ?>

                    <label for="photo"></label>
                    <input type="file" name="photo" id="photo"> <br>
                    <input class="button-primary" type="submit" value="Submit">
                    <input type="hidden" name="getId" id="getId" value=<?php echo $idFromView; ?>>
                    <input type="hidden" name="getLogo" id="getLogo" value=<?php echo substr($data['logo'], 20); ?>>
                    <input type="hidden" name="action" id="action" value="update_university">

                    <hr>
                    <hr>
                    <br>
                    <div class="card mt-4">
                    <div class="card-header">
                        <h4>How to Insert Multiple Data into Database in PHP MySQL
                            <a href="javascript:void(0)" class="add-more-form float-end btn btn-primary">ADD MORE</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <form action="code.php" method="POST">
                        
                            <div class="main-form mt-3 border-bottom">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <label for="">Name</label>
                                            <input type="text" name="name[]" class="form-control" required placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <label for="">Phone Number</label>
                                            <input type="text" name="phone[]" class="form-control" required placeholder="Enter Phone Number">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="paste-new-forms"></div>

                            <button type="submit" name="save_multiple_data" class="btn btn-primary">Save Multiple Data</button>
                        </form>

                    </div>
                </div>
    <!-- testing with multiple add -->


                </fieldset>
            </form>
        </div>

    </div>
    <hr>
</div>


<!-- <script src="//code.jquery.com/jquery-3.4.1.slim.min.js"></script> -->
<script src="assets/js/script.js?1"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" ></script>

    <script>
        $(document).ready(function () {

            $(document).on('click', '.remove-btn', function () {
                $(this).closest('.main-form').remove();
            });
            
            $(document).on('click', '.add-more-form', function () {
                $('.paste-new-forms').append('<div class="main-form mt-3 border-bottom">\
                                <div class="row">\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <label for="">Name</label>\
                                            <input type="text" name="name[]" class="form-control" required placeholder="Enter Name">\
                                        </div>\
                                    </div>\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <label for="">Phone Number</label>\
                                            <input type="text" name="phone[]" class="form-control" required placeholder="Enter Phone Number">\
                                        </div>\
                                    </div>\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <br>\
                                            <button type="button" class="remove-btn btn btn-danger">Remove</button>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>');
            });

        });
    </script>

</body>
</html>