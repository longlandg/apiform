<?php

$errors = array("firstName" => "", "title" => "");
$firstName = '';
$title = '';

if (isset($_POST["submit"])) {
    $title = $_POST["title"];
    $firstName = $_POST["firstName"];

    //form validation title field
    if ($_POST["title"] == "") {
        $errors["title"] = "A title must be selected";
    }

    //form validation firstName field
    if (strlen($_POST["firstName"]) <2) {
        $errors["firstName"] = "A first name must be at least 2 characters long";
    } else if ( preg_match("/[0-9]+/", $_POST["firstName"])) {
        $errors["firstName"] = "A first name must only contain letters";
    }
}
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
        <option <?php if ($title == "") echo "selected"; ?> value="">Select title</option>
        <option <?php if ($title == "Mr") echo "selected"; ?> value="Mr">Mr</option>
        <option <?php if ($title == "Mrs") echo "selected"; ?> value="Mrs">Mrs</option>
        <option <?php if ($title == "Miss") echo "selected"; ?> value="Miss">Miss</option>
        <option <?php if ($title == "Ms") echo "selected"; ?> value="Ms">Ms</option>
        <option <?php if ($title == "Dr") echo "selected"; ?> value="Dr">Dr</option>
    </select>
    <div><?php echo $errors["title"]?></div>
    <label for="firstName">First Name</label>
    <br>
    <input type="text" id="firstName" name="firstName" class="form-control" value="<?php echo htmlspecialchars($firstName)?>">
    <div><?php echo $errors["firstName"]?></div>
    <br>
    <input type="submit" name="submit" value="submit">
</form>
</body>
</html>
