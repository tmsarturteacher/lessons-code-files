<?php


?>

<html>
<head>

</head>
<body>
<?php

use Database\Index;

function autoloadFiles($className): void
{
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

    require $fileName;
}

spl_autoload_register('autoloadFiles');

$sql = "INSERT INTO users (name) VALUES ('name 6'), ('name 7'), ('name 8')";
$selectString = "SELECT * FROM users ";

$index = new Index();
//    $numRows = $index->insertDataToDB($sql);
//    echo "Added: " . $numRows . ' rows';

$getData = $index->getData($selectString);

echo "<ul>";
while ($row = $getData->fetch()) {
    echo "<li>" . $row["name"] . " <a href='/database/news.php?id={$row['id']}'>Профиль</a> </li>";
}
echo "</ul";


?>
</body>


</html>