<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?= $this->siteTitle(); ?></title>
        <link rel="stylesheet" href="<?=PROOT?>css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
        <link rel="stylesheet" href="<?=PROOT?>css/costum.css" media="screen" title="no title" charset="utf-8">
        
        <?= $this->content('head'); ?>
    </head>
    <body>
        <?= $this->content('body'); ?>
        <script src="<?=PROOT?>js/jQuery-2.2.4.min.js"></script>
        <script src="<?=PROOT?>js/bootstrap.min.js"></script>
    </body>
</html>