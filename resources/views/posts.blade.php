<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="/app.css" />
    <title>Document</title>
</head>

<body>
    <?php foreach ($posts as $post) : ?>
        <article>
            <?= $post; ?>
        </article>
    <?php endforeach; ?>
</body>
