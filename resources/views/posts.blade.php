<!DOCTYPE html>
<title>My Blog</title>
<link rel="stylesheet" href="/public/app.css">

<body>
    <?php $posts =;foreach ($posts as $post) : ?>
        <article>
            <?= $post; ?>
        </article>
    <?php endforeach; ?>
</body>
