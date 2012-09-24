
<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=projeksjon', "root","", array(
    PDO::ATTR_PERSISTENT => true
));

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
