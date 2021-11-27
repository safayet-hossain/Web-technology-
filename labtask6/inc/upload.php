<?php
session_start();
if (!$_SESSION['login']) {
    header("Location: ../login.php");
    exit();
}

// echo '<pre>';
// var_dump($_FILES);
// echo '</pre>';

// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';

if (isset($_POST['upload']) && $_FILES['profilepicfile']) {
    $errors = [];

    $directory = "../images/uploads/";
    $file = $_FILES['profilepicfile'];
    $target_file = $directory . $file['name'];
    $img_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // $json_data = file_get_contents('../db/data.json');
    // $tmp_arr = json_decode($json_data);

    if (!getimagesize($file["tmp_name"])) {
        array_push($errors, "isnotfile");
    }
    if (file_exists($target_file)) {
        array_push($errors, "fileexists");
    }
    if ($file["size"] > 4000000) {
        array_push($errors, "bigfile");
    }
    if (preg_match("/jpg|jpeg|png/", $img_type) != 1) {
        array_push($errors, "notfiletype");
    }

    if (count($errors)) {
        $url = "?errors=";
        for ($i = 0; $i < count($errors); ++$i) {
            $url = $url . $errors[$i] . ',';
        }
        header("Location:../changepp.php$url");
        // echo '<pre>';
        // var_dump($_POST);
        // echo '</pre>';
        exit();
    }

    move_uploaded_file($file["tmp_name"], $target_file);

    $img_url = preg_replace("/\.\.\//", "", $target_file);
    $_SESSION['purl'] = $img_url;
    // echo preg_replace("/\.\.\//", "", $target_file);

    // for ($i = 0; $i < count($tmp_arr); $i++) {
    //     if ($tmp_arr[$i][0]->email == $_SESSION['email']) {
    //         $tmp_arr[$i][0]->purl = $img_url;
    //         $_SESSION['purl'] = $img_url;
    //         break;
    //     }
    // }

    // $json_new_data = json_encode($tmp_arr);
    // file_put_contents('../db/data.json', $json_new_data);

    header("Location: ../changepp.php?success=true");
    exit();
} else {
    header("Location: ../changepp.php");
    exit();
}
