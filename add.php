<?php
require 'config.php';
if ($_POST) {
    $title = $_POST['title'];
    $desc = $_POST['description'];

    $sql = "INSERT INTO todo(title,description) VALUES (:title,:description)";
    $pdostatement = $pdo->prepare($sql);
    $result = $pdostatement -> execute(
        array(
            ':title'=>$title,
            ':description'=>$desc
        )
    );
    if ($result) {
        echo "<script>alert('New Todo is Added'); window.location.href='index.php'</script> ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="card">
    <div class="card-body">
    <h2>Create New Todo</h2>
    <form class="" action="add.php" method="post">
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" class="form-control" name="title" value="" required>
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" name="" value="Submit">
            <a href="index.php" class="btn btn-default">Back</a>
        </div>
    </form>
    </div>
    </div>
</body>
</html>