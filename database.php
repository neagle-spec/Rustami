<?php
class Database{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dbname = "rustamiautomaintenance";
    private $connection;

    public $errormessage;

    public function __construct(){
        $this->connection= mysqli_connect($this->host, $this->user, $this->password, $this->dbname);

        if(!$this->connection){
            $this->errormessage(mysqli_error($this->connect_error));
        }
    }

    /*
    * Save plan into the datbase
    */
    public function savePlan($token, $notes, $y1s_year, $y1s_data, $y1f_year, $y1f_data, $y1w_year, $y1w_data, $y1sp_year, $y1sp_data, $y2s_year, $y2s_data, $y2f_year, $y2f_data, $y2w_year, $y2w_data, $y2sp_year, $y2sp_data){
        $stmt = $this->connection->prepare("INSERT INTO plans (token, notes, y1s_year, y1s_data, y1f_year, y1f_data, y1w_year, y1w_data, y1sp_year, y1sp_data, y2s_year, y2s_data, y2f_year, y2f_data, y2w_year, y2w_data, y2sp_year, y2sp_data) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssssssssssss", $token, $notes, $y1s_year, $y1s_data, $y1f_year, $y1f_data, $y1w_year, $y1w_data, $y1sp_year, $y1sp_data, $y2s_year, $y2s_data, $y2f_year, $y2f_data, $y2w_year, $y2w_data, $y2sp_year, $y2sp_data);

        if($stmt->execute()){
            return true;
        }

        return false;
    }

    /*
    * Get all the plan in the datbase
    */
    public function getAllPlans(){
        $sql = "SELECT * from plans";
        $result = $this->connection->query($sql);

        $data = [];

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                array_push($data,$row);
            }
        } 

        $data = array_reverse($data);
        return $data;
    }


    /*
    * Get all the plan in the datbase
    */
    public function getPlan($token){
        $sql = "SELECT * from plans where token = '$token'";
        $result = $this->connection->query($sql);

        $row = $result->fetch_assoc();
        return $row;
    }

}
?>
