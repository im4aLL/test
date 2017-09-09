<?php echo $this->render('views/partials/_header.html',NULL,get_defined_vars(),0); ?>

<div class="row">
    <div class="columns small-12">
        <h2 class="h3 headline">Tasks</h2>
    </div>
</div>

<div class="row">
    <div class="columns small-12">
        <table>
            <thead>
            <tr>
                <th>Name</th>
                <th width="200">Created</th>
                <th width="200">Last updated</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach (($tasks?:[]) as $task): ?>
                <tr>
                    <td><a href="<?= $BASE ?>/tasks/<?= $task->id ?>"><?= $task->name ?></a></td>
                    <td><?= $Helper::formatDateTime($task->created_at) ?></td>
                    <td><?= $Helper::formatDateTime($task->updated_at) ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php echo $this->render('views/partials/_footer.html',NULL,get_defined_vars(),0); ?>