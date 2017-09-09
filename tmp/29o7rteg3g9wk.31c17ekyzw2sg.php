<?php if (is_array($errors)): ?>
    <div class="row">
        <div class="columns small-12">

            <div class="alert callout" data-closable>
                <h5>You have encountered error</h5>
                <?php foreach (($errors?:[]) as $error): ?>
                    - <?= $error ?> <br>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
<?php endif; ?>