<?php
session_start();
$con = mysqli_connect("localhost","root","","university");

if(isset($_POST['save_multiple_data']))
{
    $name = $_POST['name'];
    $underfee = $_POST['underfee'];
    $postfee = $_POST['postfee'];
    $underorpost = $_POST['underorpost'];
    // $action = $_POST['action'];

    foreach($name as $index => $names)
    {
        $s_name = $names;
        $s_underfee = $underfee[$index];
        $s_postfee = $postfee[$index];
        $s_underorpost = $underorpost[$index];
        // $s_action = $action[$index];
        // $s_otherfiled = $empid[$index];

        $query = "INSERT INTO courses (uni_id,p_name,under_fees,post_fees,under_post) VALUES (1,'$s_name','$s_underfee','$s_postfee','$s_underorpost')";
        $query_run = mysqli_query($con, $query);
    }

    if($query_run)
    {
        $_SESSION['status'] = "Multiple Data Inserted Successfully";
        header("Location: add_department.php?id=1");
        exit(0);
    }
    else
    {
        $_SESSION['status'] = "Data Not Inserted";
        header("Location: add_department.php?id=1");
        exit(0);
    }
}
?>