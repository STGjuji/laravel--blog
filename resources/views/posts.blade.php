<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="/app.css" />
    <title>Document</title>
</head>

<body>
    <?php foreach ($posts as $post) : ?>
        <article>
            <h1><?php $post ->title; ?></h1>
        </article>
    <?php endforeach; ?>
</body>
