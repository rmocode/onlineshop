<?php

class BlobDemo {

    const DB_HOST = 'localhost';
    const DB_NAME = 'store';
    const DB_USER = 'admin';
    const DB_PASSWORD = 'morelifehome2021';

    /**
     * Open the database connection
     */
    public function __construct() {
        // open database connection
        $conStr = sprintf("mysql:host=%s;dbname=%s;charset=utf8", self::DB_HOST, self::DB_NAME);

        try {
            $this->pdo = new PDO($conStr, self::DB_USER, self::DB_PASSWORD);
            //for prior PHP 5.3.6
            //$conn->exec("set names utf8");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    /**
     * close the database connection
     */
    public function __destruct() {
        // close the database connection
        $this->pdo = null;
    }


public function insertBlob($filePath, $mime) {
        $blob = fopen($filePath, 'rb');

        $sql = "INSERT INTO files(mime,data) VALUES(:mime,:data)";
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':mime', $mime);
        $stmt->bindParam(':data', $blob, PDO::PARAM_LOB);

        return $stmt->execute();
    }

    function updateBlob($id, $filePath, $mime) {

            $blob = fopen($filePath, 'rb');

            $sql = "UPDATE files
                    SET mime = :mime,
                        data = :data
                    WHERE id = :id;";

            $stmt = $this->pdo->prepare($sql);

            $stmt->bindParam(':mime', $mime);
            $stmt->bindParam(':data', $blob, PDO::PARAM_LOB);
            $stmt->bindParam(':id', $id);

            return $stmt->execute();
        }


    public function selectBlob($id) {

        $sql = "SELECT mime,
                        data
                   FROM files
                  WHERE id = :id;";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(array(":id" => $id));
        $stmt->bindColumn(1, $mime);
        $stmt->bindColumn(2, $data, PDO::PARAM_LOB);

        $stmt->fetch(PDO::FETCH_BOUND);

        return array("mime" => $mime,
            "data" => $data);
    }
  }

    $blobObj = new BlobDemo();

// test insert gif image
$blobObj->insertBlob('images/sofa.jpg',"image/jpg");
$a = $blobObj->selectBlob(1);
header("Content-Type:" . $a['mime']);
echo $a['data'];

?>
