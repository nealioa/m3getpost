<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Demo of $_POST</title>

    <meta name="description" content="A demonstration of PHP's $_POST">
    <meta name="author" content="iO Academy">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">

    <link rel="icon" href="images/favicon.png" sizes="192x192">
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/favicon.png">

    <!-- <script defer src="js/index.js"></script> -->
</head>

<body>

<h1>$_POST</h1>

<form action="test_post.php" method="post">
    <label for="password">Password</label>
    <input id="password" name="password" type="password" />
    <button type="submit">Submit</button>
</form>

<!--
Notice method on form to specify post.
If omitted, the method would default to get.
-->

</body>
</html>
