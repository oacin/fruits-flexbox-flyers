<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fruits</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div class="container">
    <?php foreach($fruits as $fruit): ?>
      <div class="item">
        <img src=<?= 'src/img/' . $fruit . '.png'; ?>>
        <h1><?= $fruit ?></h1>
        <p><?= "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."; ?></p>
        <button>Button</button>
      </div>
    <?php endforeach; ?>
  </div>
</body>
</html>