<?php require 'partials/header.view.php' ?>

<div class="container" style="margin-top:20px">

    <div style="margin-bottom: 20px;">
        <a href="/book" class="btn btn-success">Back</a>
    </div>

    <table class="table">
        <tr>
            <td>Title</td>
            <td><?= $book[0]->title ?></td>
        </tr>

        <tr>
            <td>Year</td>
            <td><?= $book[0]->year ?></td>
        </tr>


        <tr>
            <td>Author</td>
            <td><?= $book[0]->name ?> <?= $book[0]->lastname ?></td>
        </tr>
    </table>
</div>

<?php require 'partials/footer.view.php' ?>

