<?php echo $this->render('views/partials/_header.html',NULL,get_defined_vars(),0); ?>

<div class="row">
    <div class="columns small-12">
        <h2 class="h3 headline"><?= $task->name ?></h2>
    </div>
</div>

<div class="row">
    <div class="columns small-12">
        <p><?= nl2br($task->description) ?></p>

        <hr>
        <a href="<?= $BASE ?>/tasks/<?= $task->id ?>/edit" class="button">Edit this task</a>
    </div>
</div>

<?php echo $this->render('views/partials/_footer.html',NULL,get_defined_vars(),0); ?>