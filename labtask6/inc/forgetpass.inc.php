<?php
if (isset($_POST['changepass'])) {
    $notFound = true;
    $randPass;

    $email = (isset($_POST['email'])) ? htmlentities(htmlspecialchars($_POST['email'])) : '';

    // $json_data = file_get_contents('../db/data.json');
    // $tmp_arr = json_decode($json_data);

    // foreach ($tmp_arr as $e) {
    //     if ($e[0]->email == $email) {
    //         $notFound = false;
    //         $randPass = random_int(99999999, 999999999999);
    //         $e[0]->password = $randPass;
    //         break;
    //     }
    // }

    if ($notFound) {
        header("Location: ../forgetpassword.php?errors=notfoundemail");
        exit();
    }

    // $json_data = json_encode($tmp_arr);
    // file_put_contents('../db/data.json', $json_data);
    header("Location: ../forgetpassword.php?success=$randPass");
    exit();
} else {
    header("Location: ../login.php");
    exit();
}
