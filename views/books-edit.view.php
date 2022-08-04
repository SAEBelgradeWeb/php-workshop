<?php require 'partials/header.view.php' ?>

<div class="container" style="margin-top:20px">
    <h1>Insert new book</h1>
    <div style="width: 50%; margin: 0 auto;">
        <form action="/book/edit" method="post">
            <input type="hidden" value="<?= $book[0]->id ?>" name="id">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?= $book[0]->title ?>">
            </div>

            <div class="form-group">
                <label for="year">Year</label>
                <input type="text" class="form-control" id="year" name="year"
                value="<?= $book[0]->year ?>">
            </div>

            <div class="form-group">
                <label for="author_id">Author</label>
                <select name="author_id" id="author_id" class="form-control">
                    <?php foreach ($authors as $author): ?>

                    <option value="<?= $author->id ?>" <?= ($author->id == $book[0]->author_id) ? "selected" : "" ?>><?= $author->name . " " . $author->lastname ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div>
                <button class="btn btn-primary">Save</button>
                <button type="reset" class="btn btn-warning">Reset</button>
            </div>
        </form>
    </div>
</div>

<?php require 'partials/footer.view.php' ?>
