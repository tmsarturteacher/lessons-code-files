<?php

require_once 'database/db.php';

//$pdo->exec("CREATE DATABASE testdb1");

//    $sql = "create table users (id integer auto_increment primary key, name varchar(30));";

class Index
{
    public $pdo;
    public function __construct()
    {
        $this->pdo = new Connection();
        $this->pdo->getConnection();
    }

    public function insertDataToDB(string $sql)
    {
        return $this->pdo->db->exec($sql);
    }

    public function getData(string $sql)
    {
        return $this->pdo->db->query($sql);
    }
}

?>

<html>
<head>

</head>
<body>
    <?php

    $sql = "INSERT INTO users (name) VALUES ('name 6'), ('name 7'), ('name 8')";
    $selectString = "SELECT * FROM users ";

    $index = new Index();
    //    $numRows = $index->insertDataToDB($sql);
    //    echo "Added: " . $numRows . ' rows';

    $getData = $index->getData($selectString);

    echo "<ul>";
    while ($row = $getData->fetch()) {
        echo "<li>" . $row["name"] . " <a href='/database/profile.php?id={$row['id']}'>Профиль</a> </li>";
    }
    echo "</ul";


    ?>
</body>


</html>