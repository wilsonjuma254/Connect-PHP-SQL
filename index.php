<?php
    include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Connect PHP SQL</title>
</head>
<body>
    
<?php
$sql = "SELECT * FROM users;";
$result = msqli_query($conn);
?>

</body>
</html>