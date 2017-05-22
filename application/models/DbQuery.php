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
        $sql = "INSERT INTO schedule ('LogID', 'Username', 'datetime', 'DateLog', 'TimeIn') "
                . "VALUES (DEFAULT,?,?,?,?)";
        $query = $this->pdo->query($sql, array($Username, $datetime, $DateLog, $TimeIn, $TimeOut));
    }
}

?>