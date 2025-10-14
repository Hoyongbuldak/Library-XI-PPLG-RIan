<?php
$title = "DASHBOARD";
require_once "views/template/header.php";
?>

<div class="container rounded shadow mt-4 p-4 text-center">
    <h2>Dashboard Page</h2>
    <h1>WELCOME, <?= $data["full_name"] ?>!</h1>
    <h1>ROLE, <?= $data["role"] ?></h1>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <a href="/create-book">
                <div class="card bg-success text-light m-2">
                    <h1>CREATE BOOK</h1>
                </div>
            </a>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <a href="/create-member">
                <div class="card bg-primary text-light m-2">
                    <h1>CREATE MEMBER</h1>
                </div>
            </a>
        </div>
    </div>
</div>

<?php require_once "views/template/footer.php" ?>