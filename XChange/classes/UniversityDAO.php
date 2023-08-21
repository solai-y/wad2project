<?php
class UniversityDAO {

    public function get() {
        $conn_manager = new ConnectionManager();
        $pdo = $conn_manager->getConnection();

        $sql = "select * from universities";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        $listOfUniversities = array();

        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        while($row = $stmt->fetch()){
            // name, exchange_slots, country, city, picture_url
            $listOfUniversities[] = new University($row['name'], $row['exchange_slots'], $row['country'], $row['city'], $row['picture_url']);
        }

        $stmt = null;
        $pdo = null;
        return $listOfUniversities;
    }

}

?>