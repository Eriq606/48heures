<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo site_url('pdf/content_pdf'); ?>" method="post">
        <select name="idregime">
            <?php foreach ($regime as $reg) { ?>
                <option value="<?php echo $reg->idregime ?>"><?php echo $reg->descriregime ?></option>
            <?php } ?>
        </select>
        <input type="submit" value="mettre a jour">
    </form>
</body>
</html>