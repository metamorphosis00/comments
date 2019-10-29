<div class="comments">
    <div class="text-right">
        <a class="btn btn-primary" href="<?= url('comments.index') ?>" role="button">Add comment</a>
    </div>
    <?php foreach ($comments as $comment): ?>
        <dl class="row">
            <dt class="col-sm-3">Name</dt>
            <dd class="col-sm-9"><?= $comment['name'] ?></dd>

            <dt class="col-sm-3">Email</dt>
            <dd class="col-sm-9"><?= $comment['email'] ?></dd>

            <dt class="col-sm-3">Comment</dt>
            <dd class="col-sm-9"><?= $comment['text'] ?></dd>

            <dt class="col-sm-3">Image</dt>
            <dd class="col-sm-9"><img class="img-fluid" src="<?= $comment['image'] ?>"></dd>
        </dl>
    <?php endforeach; ?>
</div>
