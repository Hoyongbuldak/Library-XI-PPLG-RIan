<?php
$title = "Book";
include "template/header.php";
?>

<div class="container mt-5 shadow p-3">
    <div class="d-flex justify-content-between">
        <a href="/">Back To Home</a>
        <p>List Book</p>
        <?php if ($isLogin) : ?>
            <a href="/logout">Logout</a>
        <?php endif; ?>
    </div>
    <div class="row">
        <div class="col-12 col-md-4">
            <div class="input-group input-group-sm mb-3">
                <input
                    type="text" class="form-control"
                    aria-label="Sizing example input"
                    placeholder="Search book title here..."
                    aria-describedby="inputGroup-sizing-sm">
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="input-group input-group-sm mb-3">
                <select class="form-control">
                    <option value="">-- Choose Category --</option>
                    <?php foreach ($data as $book) : ?>
                        <option value="<?= $book['id'] ?>">
                            <?= $book['category_name'] ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="d-grid gap-1">
                <button class="rounded btn-success">Submit</button>
            </div>
        </div>
    </div>
</div>

<?php include "template/footer.php" ?>