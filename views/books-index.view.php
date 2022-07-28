<?php require 'partials/header.view.php' ?>

<div class="container" style="margin-top:20px">

    <div style="margin-bottom: 20px;">
        <a href="#" class="btn btn-primary "> Insert new book</a>
    </div>
<table class="table table-stripped">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Year</th>
        <th></th>
    </tr>

    <?php foreach ($books as $book): ?>
    <tr>
        <td><?= $book->id ?></td>
        <td><?= $book->title ?></td>
        <td><?= $book->name ?> <?= $book->lastname ?></td>
        <td><?= $book->year ?></td>
        <td><a href="#" class="btn btn-primary btn-sm">Edit</a> | <a href="/book/delete?id=<?= $book->id ?>" class="btn btn-danger btn-sm">Delete</a></td>
    </tr>
    <?php endforeach; ?>
</table>
</div>
<?php require 'partials/footer.view.php' ?>
