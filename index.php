<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>

<body>
    <h1>Some of the books released between 2005 and 2019</h1>
    <?php
    $books = [ 
      [
        'name' => 'Do Androids Dream of Electric Sheep',
       'author' => 'James Smith',
       'releaseYear' => 2015,
       'PurchaseUrl' => 'http://example.com',
      ], 
      [
        'name' => 'The Langoliers',
        'author'=> 'Mike willington',
        'releaseYear' => 2005,
        'PurchaseUrl' => 'http://example.com',
      ],
       [
        'name' => 'Hail Mary',
        'author' => 'Maranda Vper',
        'releaseYear' => 2019,
        'PurchaseUrl' => 'http://example.com',
       ],

    ];

   

     $filteredBooks   = array_filter($books, function ($book){
      return $book['author'] >= '2000';
     });

  ?>
<ul>
    <?php foreach($filteredBooks as $book) : ?>
    <li>
        <a href="<?= $book['PurchaseUrl'] ?>">
            <?= $book['name'];  ?>(<?= $book['releaseYear'] ?>) - By <?= $book['author']; ?>
        </a>
    </li>
    <?php endforeach; ?>

</ul>
