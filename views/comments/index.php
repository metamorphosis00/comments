<!DOCTYPE html>
<html>
<head>
    <title>Comments</title>
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <script src="/public/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <?php foreach ($comments as $comment): ?>
        <dt class="col-sm-3">Name</dt>
        <dd class="col-sm-9"><?= $comment['name'] ?></dd>

        <dt class="col-sm-3">Email</dt>
        <dd class="col-sm-9"><?= $comment['email'] ?></dd>

        <dt class="col-sm-3">Comment</dt>
        <dd class="col-sm-9"><?= $comment['text'] ?></dd>

        <dt class="col-sm-3">Image</dt>
        <dd class="col-sm-9"><img class="img-fluid" src="<?= $comment['image'] ?>"></img></dd>
    <?php endforeach; ?>
</div>
</body>
</html>
