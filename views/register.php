<?php
$title = "AUTH";
include "template/header.php";
session_start();
?>

<div class="container m-5">
    <div class="d-flex justify-content-center">
        <div class="card p-3" style="width: 20rem;">

            <?php if (isset($_SESSION["ERROR"])) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= $_SESSION["ERROR"] ?>
                </div>
            <?php session_unset();
            endif ?>

            <?php if (isset($_SESSION["success"])) : ?>
                <div class="alert alert-success" role="alert">
                    <?= $_SESSION["success"] ?>
                </div>
            <?php session_unset();
            endif ?>

            <form method="post" action="/create-member">
                <div class="mb-3">
                    <label for="full_name" class="form-label">Full Name</label>
                    <input
                        type="text" class="form-control"
                        placeholder="fill your full name here.."
                        id="full_name"
                        name="full_name" />
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input
                        placeholder="fill your email here.."
                        type="email" class="form-control"
                        name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input
                        placeholder="fill your password here.."
                        type="password" class="form-control"
                        name="password">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">phone</label>
                    <input
                        type="number" class="form-control"
                        placeholder="fill your phone number here.."
                        id="phone"
                        name="phone">
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select name="role" id="role" class="form-control">
                        <option value="">Select Role</option>
                        <?php foreach ($data as $role) : ?>
                            <option value="<?= $role['id'] ?>"><?= $role['role_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>


</div>

<?php include "template/footer.php" ?>