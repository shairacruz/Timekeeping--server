<?php

class DbQuery extends CI_Model {

    private $pdo;

    public function __construct() {
        parent:: __construct();
        $this->pdo = $this->load->database('pdo', true);
    }
    
    public function login($data){
        extract($data);
        $sql = "SELECT * FROM accounts WHERE Username = ? AND Password = ?";
        $query = $this->pdo->query($sql, array($Username, $Password));

        if($query -> num_rows() == 1)
        {
          return $query->result();
        }
        else
        {
          return false;
        }
    }
    
    public function timein($data){
        extract($data);
        $sql = "INSERT INTO logs (LogID, Username, TimeLog, Status) "
                . "VALUES (DEFAULT,?,?,1)";
        $query = $this->pdo->query($sql, array($Username, $TimeLog));
    }
    
    public function timeout($data){
        extract($data);
        $sql = "INSERT INTO logs (LogID, Username, TimeLog, Status) "
                . "VALUES (DEFAULT,?,?,0)";
        $query = $this->pdo->query($sql, array($Username, $TimeLog));
    }
    
    public function getTimeIn($data){
        extract($data);
        $sql = "SELECT TIME(TimeLog) AS TimeLog FROM logs WHERE Username = '$Username' AND TimeLog LIKE '$DateNow%' AND Status = 1";
        $stmt = $this->pdo->query($sql);
        return $stmt->result();
    }
    
    public function getTimeOut($data){
        extract($data);
        $sql = "SELECT TIME(TimeLog) AS TimeLog FROM logs WHERE Username = '$Username' AND TimeLog LIKE '$DateNow%' AND Status = 0";
        $stmt = $this->pdo->query($sql);
        return $stmt->result();
    }
    
    public function checkIn($data){
        extract($data);
        $sql = "SELECT * FROM logs WHERE Username = '$Username' AND TimeLog LIKE '$TimeLog%' AND Status = 1";
        $stmt = $this->pdo->query($sql);

        if($stmt -> num_rows() == 0)
        {
          return $stmt->result();
        }
        else
        {
          return false;
        }
    }
    
    public function checkOut($data){
        extract($data);
        $sql = "SELECT * FROM logs WHERE Username = '$Username' AND TimeLog LIKE '$TimeLog%' AND Status = 0";
        $stmt = $this->pdo->query($sql);

        if($stmt -> num_rows() == 0)
        {
          return $stmt->result();
        }
        else
        {
          return false;
        }
    }
}
//select DATE(TimeLog) as Date, TIME(TimeLog) as Time FROM logs
?>