<?php require_once("./inc/deps.php"); ?>
<?php header_section("Forget Password"); ?>
<?php
$error_message = "";
$success_message = "";

if (isset($_GET['errors'])) {
    if ($_GET['errors'] == 'notfoundemail')
        $error_message = "Can't find your email";
}

if (isset($_GET['success']) && !empty($_GET['success'])) {
    $success_message = $_GET['success'];
}

?>
<main class="clearfix">
    <?php if (isset($_GET['errors']) && !empty($error_message)) : ?>

        <div class="errors-list">
            <table>
                <tbody>
                    <tr>
                        <td>!! <?php echo $error_message; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

    <?php endif; ?>
    <?php if (!empty($success_message)) : ?>

        <div class="success">
            <table>
                <tbody>
                    <tr>
                        <td><?php echo "Your temporary Password is: $success_message"; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

    <?php endif; ?>
    <form action="inc/forgetpass.inc.php" method="post">
        <table>
            <tbody>
                <tr>
                    <td><label for="email">Enter Email</label></td>
                    <td><input class="inp" id="email" type="email" name="email" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="btn" id="changepassword" type="submit" name="changepass">Submit</button></td>
                </tr>
            </tbody>
        </table>
    </form>
</main>
<?php footer_section(); ?>