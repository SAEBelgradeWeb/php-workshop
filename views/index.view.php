<?php require 'partials/header.view.php' ?>

<div>
    <form action="/create-task" method="post">

        <div><label for="description">Task</label></div>
        <div><input type="text" name="description" id="description"></div>

        <div><label for="completed">Completed</label></div>
        <div><input type="checkbox" name="completed" id="completed" value="1"></div>


        <button>Add new</button>
    </form>
</div>


<ul>
    <?php foreach ($tasks as $task) : ?>
        <?php if ($task->completed): ?>
            <li><strike><?= $task->description ?></strike></li>
        <?php else: ?>
            <li><?= $task->description ?></li>
        <?php endif; ?>


    <?php endforeach; ?>
</ul>

<?php require 'partials/footer.view.php' ?>
