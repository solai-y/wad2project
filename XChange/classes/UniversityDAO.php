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
        if($row = $stmt->fetch()){
            $listOfUniversities[] = new University()
        }
    }

}

?>