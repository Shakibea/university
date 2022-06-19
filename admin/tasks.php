<?php
session_start();

include_once "config_db.php";
include_once "inc/functions.php";
include_once "inc/validation.php";

$statusCode = 0;
$action = $_POST['action'] ?? '';

//db connection
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
mysqli_set_charset($connection, "utf8");
if (!$connection) {
    throw new Exception("Cannot connect to database");
} else {
    if ('register' == $action) {

        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        if ($email && $password) {
            $hash = password_hash($password, PASSWORD_BCRYPT);
            $query = "INSERT INTO users(name, email, password, phone, address) VALUES('{$name}','{$email}','{$hash}','{$phone}','{$address}')";
            mysqli_query($connection, $query);
            if (mysqli_error($connection)) {
                echo $statusCode = 1;
            } else {
                echo $statusCode = 3;
            }
        } else {
            $statusCode = 2;
        }
        header("Location: registration.php?status={$statusCode}");
    } elseif ('login' == $action) {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        if ($email && $password) {
            $query = "SELECT id, name, password FROM users WHERE email='{$email}'";
            $result = mysqli_query($connection, $query);
            if (mysqli_num_rows($result) > 0) {
                $data = mysqli_fetch_assoc($result);
                $_password = $data['password'];
                $_id = $data['id'];
                $_name = $data['name'];
                if (password_verify($password, $_password)) {
                    $_SESSION['id'] = $_id;
                    $_SESSION['name'] = $_name;
                    header("Location: admin.php");
                    die();
                } else {
                    echo $statusCode = 4;
                }
            } else {
                echo $statusCode = 5;
            }
        } else {
            $statusCode = 2;
        }
        header("Location: index.php?status={$statusCode}");
    } elseif ('addproduct' == $action) {
        $uni_name = $_REQUEST['name'] ?? '';
        $uni_description = $_REQUEST['definition'] ?? '';
        $uni_url = $_REQUEST['url'] ?? '';
        // $pro_price = $_REQUEST['price'] ?? 0;
        // $pro_quantity = $_REQUEST['quantity'] ?? 0;
        // $pro_status = $_REQUEST['isavailable'] ?? '';
        $uni_image = $_REQUEST['photo'] ?? '';

        $_user_id = $_SESSION['id'];

        $photoPath = "admin/assets/images/" . $_FILES['photo']['name'];

        photoChecking('photo');


        $_user_id = $_SESSION['id'] ?? 0;
        if ($uni_name && $uni_description && $uni_url && $_user_id) {
            $query = "INSERT INTO universities(name, description, logo, url) VALUES ('{$uni_name}','{$uni_description}','{$photoPath}','{$uni_url}')";
//           echo $query;
            mysqli_query($connection, $query);
        }
        header("Location: admin.php");
    } elseif ('update_university' == $action) {
        $uni_name = $_REQUEST['name'] ?? '';
        $uni_description = $_REQUEST['definition'] ?? '';
        $uni_url = $_REQUEST['url'] ?? '';
        // $pro_price = $_REQUEST['price'] ?? 0;
        // $pro_quantity = $_REQUEST['quantity'] ?? 0;
        // $pro_status = $_REQUEST['isavailable'] ?? '';
        $uni_image = $_REQUEST['getLogo'] ?? '';
        $uni_id = $_REQUEST['getId'] ?? 0;

        $_user_id = $_SESSION['id'];

        // var_dump($uni_image);

        // if($uni_image == ""){
            $photoPath = "admin/assets/images/" . $_FILES['photo']['name'];   
        // }else{
        //     $photoPath = "admin/assets/images/" . $uni_image;
        // }

        photoChecking('photo');


        $_user_id = $_SESSION['id'] ?? 0;
        if ($uni_name && $uni_description && $uni_url && $_user_id) {
            $query = "UPDATE universities SET name='$uni_name',description='{$uni_description}',logo='{$photoPath}',url='{$uni_url}' WHERE id = $uni_id;";
// //           echo $query;
            mysqli_query($connection, $query);
        }
        header("Location: admin.php");
    }
}

