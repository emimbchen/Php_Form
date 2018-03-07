<html>
<body>
Welcome <?php
$prefix = '';
if ($_POST["gender"] === "female"){
    $prefix = "Ms.";
} if ($_POST["gender"] === "male") {
    $prefix = "Mr.";
}
echo $prefix. " " . $_POST["firstname"]." ". $_POST["lastname"];
?><br>

</body>
</html>