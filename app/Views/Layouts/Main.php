<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url( 'assets/css/bootstrap.min.css' )?>">
    <link rel="stylesheet" href="<?= base_url( 'assets/FontAwesome/all.min.css' )?>">
    <title><?= isset( $title ) ? esc( $title ) : "Document"; ?></title>
</head>
<body>

<?= $this->renderSection( 'content' );?>

</body>
</html>