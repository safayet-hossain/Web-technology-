<?php require_once("./inc/deps.php"); ?>
<?php header_section("Registration"); ?>
<?php

$errors_message = [];
$success_message = "";

if (isset($_GET['successfull'])) {
    if ($_GET['successfull'] == "true") {
        // var_dump($_GET);
        $success_message = "Successfully registered";
    }
}

if (isset($_GET['errors'])) {
    $errors_code = explode(",", $_GET['errors']);


    foreach ($errors_code as $error) {
        if ($error == "name") {
            array_push($errors_message, "Name must be larger than 2 character, alphanumeric");
        }
        if ($error == "password") {
            array_push($errors_message, "Password must be larger than 8 character, include at least one of them (@, #, $, %)");
        }
        if ($error == "cpassword") {
            array_push($errors_message, "Confirm Password didn't match your Password");
        }
        if ($error == "email") {
            array_push($errors_message, "Invalid Email");
        }
        if ($error == "duplicate") {
            array_push($errors_message, "Duplicate Email address");
        }
        // if ($error == "gender") {
        //     array_push($errors_message, "Invalid Gender");
        // }
        if ($error == "type") {
            array_push($errors_message, "Invalid Type");
        }
        // if ($error == "dob") {
        //     array_push($errors_message, "Invalid Date Of Birth");
        // }
    }
}
?>

<main class="clearfix">
    <?php if (count($errors_message)) : ?>

        <div class="errors-list">
            <table>
                <tbody>

                    <?php foreach ($errors_message as $err_msg) : ?>

                        <tr>
                            <td>!! <?php echo $err_msg; ?></td>
                        </tr>

                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>

    <?php endif; ?>
    <?php if (!empty($success_message)) : ?>

        <div class="success">
            <table>
                <tbody>
                    <tr>
                        <td><?php echo $success_message; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

    <?php endif; ?>
    <form action="./inc/registration.inc.php" method="post">

        <!-- <input type="hidden" name="usertype" value="employee"> -->
        <input type="hidden" name="type" value="restaurantadmin">
        <table>
            <tbody>
                <tr>
                    <td><label for="name">Name</label></td>
                    <td><input class="inp" id="name" type="text" name="name" required></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td><input class="inp" id="email" type="email" name="email" required></td>
                </tr>
                <tr>
                    <td><label for="adminid">Select Admin</label></td>
                    <td>
                        <input id="admin1" type="radio" name="adminid" value="1" required>
                        <label for="admin1">shafayet</label>

                        <input id="admin2" type="radio" name="adminid" value="2" required>
                        <label for="admin2">Hossain</label>

                        <input id="admin3" type="radio" name="adminid" value="3" required>
                        <label for="admin3">Shehab</label>

                        <input id="admin4" type="radio" name="adminid" value="4" required>
                        <label for="admin4">jubayer</label>
                    </td>
                </tr>
                <tr>
                    <td><label for="location">Location</label></td>
                    <td><input class="inp" id="location" type="text" name="location" required></td>
                </tr>
                <!-- <tr>
                    <td><label for="phone">Phone</label></td>
                    <td><input class="inp" id="phone" type="text" name="phone" required></td>
                </tr> -->
                <tr>
                    <td><label for="nid">NID</label></td>
                    <td><input class="inp" id="nid" type="text" name="nid" required></td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td><input class="inp" id="password" type="password" name="password" required></td>
                </tr>
                <tr>
                    <td><label for="cpassword">Confirm Password</label></td>
                    <td><input class="inp" id="cpassword" type="password" name="cpassword" required></td>
                </tr>
                <!-- <tr>
                    <td><label>Gender</label></td>
                    <td>
                        <input id="male" type="radio" name="gender" value="male" required>
                        <label for="male">Male</label>

                        <input id="female" type="radio" name="gender" value="female" required>
                        <label for="female">Female</label>

                        <input id="others" type="radio" name="gender" value="others" required>
                        <label for="others">Others</label>
                    </td>
                </tr> -->
                <!-- <tr>
                    <td><label>Type</label></td>
                    <td>

                        <input id="restaurant" type="radio" name="type" value="restaurantadmin" required>
                        <label for="restaurant">Restaurant Admin</label>

                        <input id="management" type="radio" name="type" value="management" required>
                        <label for="management">Management</label>

                        <input id="user" type="radio" name="type" value="user" required>
                        <label for="user">User</label>
                    </td>
                </tr> -->
                <!-- <tr>
                    <td><label for="dob">Date Of Birth</label></td>
                    <td><input class="inp" id="dob" type="date" name="dob" required></td>
                </tr> -->
                <tr>
                    <td><button class="btn" type="reset">Reset</button></td>
                    <td><button class="btn" id="submit" type="submit" name="registration">Registration</button></td>
                </tr>
            </tbody>
        </table>
    </form>
</main>
<?php footer_section(); ?>