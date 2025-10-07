<?php
$title = "DASHBOARD";
require_once "views/template/header.php";
?>

<div class="container rounded shadow mt-4 p-4">
    <h2>Dashboard Page</h2>
    <h1>WELCOME, <?= $data["full_name"] ?>!</h1>
    <h1>ROLE, <?= $data["role"] ?></h1>
</div>

<?php require_once "views/template/footer.php" ?>