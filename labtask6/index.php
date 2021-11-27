<?php require_once("./inc/deps.php"); ?>
<?php header_section("Home"); ?>
<?php
if (isset($_SESSION['login']) && $_SESSION['login']) {
    header("Location: dashboard.php");
    exit();
}
?>
<main class="clearfix">
    <h1 class="main-title">Welcome to our company</h1>
</main>
<?php footer_section(); ?>