<?php require ("script.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">

    <title>Web</title>
</head>

<body>
    <form action="" method="post">
        <h3>Add Tenders</h3>
        <label>Enter your Subject</label>
        <input type="title" name="title" value="">

        <label>Enter a Date</label>
        <input type="date" name="date" value="">

        <label for="formFileMultiple" class="form-label"></label>
        <input class="form-control" type="file_name" id="formFileMultiple" name="f1" multiple>

        <input type="submit" name="submit" value="Send message">

        <p class="error"><?php echo @$error; ?></p>
        <p class="success"><?php echo @$success; ?></p>
    </form>

</body>

</html>