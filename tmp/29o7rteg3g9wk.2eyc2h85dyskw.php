<?php echo $this->render('views/partials/_header.html',NULL,get_defined_vars(),0); ?>

<div class="row">
    <div class="columns small-12">
        <h2 class="h3 headline">Add new task</h2>
    </div>
</div>

<?php echo $this->render('views/partials/_errors.html',NULL,get_defined_vars(),0); ?>

<form action="<?= $BASE ?>/tasks" method="post">
    <div class="row">
        <div class="columns small-12">
            <label for="name">Task name
                <input type="text" name="name" id="name" placeholder="Enter task name">
            </label>
        </div>
        <div class="columns small-12">
            <label for="description">Task description
                <textarea name="description" id="description" placeholder="Enter small brief of tasks" rows="7"></textarea>
            </label>
        </div>
        <div class="columns small-12">
            <button type="submit" class="button">Save</button>
        </div>
    </div>
</form>

<?php echo $this->render('views/partials/_footer.html',NULL,get_defined_vars(),0); ?>