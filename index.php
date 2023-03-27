<?php
?>

<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title></title>
</head>
<body>
<form action="index.php" method="post">
    <label for="title">Title</label>
    <br>
    <select id="title" name="title" class="form-control">
        <option value="">Select title</option>
        <option value="Mr">Mr</option>
        <option value="Mrs">Mrs</option>
        <option value="Miss">Miss</option>
        <option value="Ms">Ms</option>
        <option value="Dr">Dr</option>
    </select>
    <label for="firstName">First Name</label>
    <br>
    <input type="text" id="firstName" name="firstName" class="form-control">
    <br>
    <input type="submit" name="submit" value="submit">








</form>
</body>
</html>
