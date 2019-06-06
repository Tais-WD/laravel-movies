<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie database</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

    <div id="page">

        <header>

            <h1>The<br>Movie<br>Database</h1>
            
            <nav>

                <a href="#">Home</a>

                <a href="#">List of movies</a>

                <a href="#">Movie of the week</a>

            </nav>

        </header>

        <main>

            <?php if (is_array($content)) : ?>
                
                <?php foreach ($content as $content_part) : ?>
                    <?= $content_part ?>
                <?php endforeach ?>

                <?php // join('', $content) // alternative ?>

            <?php else : ?>
                <?= $content ?>
            <?php endif; ?>

        </main>

        <footer>
            &copy; 2018 The Movie Database
        </footer>


    </div>
    
</body>
</html>