<?php include "partials/header.php" ?>
<?php include_once "partials/header.php" ?> <!-- with include_once it will only load it if its never been loaded yet,
 if it was included already before it wont duplicate. tho if i change "_once" to first line and I include again normally it will duplicate too--> 
<h3>Georgia, Tbilisi 5&#8451;</h3>
<h1>Welcome to my cool website</h1>

<?php include_once "partials/footer.php" ?>