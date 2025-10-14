<?php
$title = "Update BOOK";
require_once "views/template/header.php";
?>

<div class="container mt-5 shadow p-3">
    <div class="d-flex justify-content-between">
        <a href="/dashboard">Back To Dashboard</a>
        <p>Update Book</p>
    </div>
    <form>
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="form-group mb-3">
                    <label for="category_id">Choose Category</label>
                    <select class="form-control" name="category_id">
                        <option value="">-- Choose Category --</option>
                        <?php foreach ($data as $book) : ?>
                            <option value="<?= $book['id'] ?>">
                                <?= $book['category_name'] ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="form-group mb-3">
                    <label for="title">Title</label>
                    <input
                        class="form-control"
                        name="title"
                        placeholder="Title" />
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="form-group mb-3">
                    <label for="Author">Author</label>
                    <input
                        class="form-control"
                        name="author"
                        placeholder="Author" />
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="form-group mb-3">
                    <label for="year">Year</label>
                    <input
                        type="number"
                        class="form-control"
                        name="year"
                        placeholder="Year" />
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="form-group mb-3">
                    <label for="Qty">Qty</label>
                    <input
                        type="number"
                        class="form-control"
                        name="qty"
                        placeholder="Qty" />
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
        </div>
    </form>
</div>

<?php require_once "views/template/footer.php" ?>