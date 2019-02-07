<?php
  class Record {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    public function getRecords() {
      $this->db->query('SELECT * FROM baptism');

      /*return $this->db->resultSet();*/

      $results = $this->db->resultSet();

      return $results;
    }

    public function getRecordById($b_id){
      $this->db->query('SELECT * FROM baptism WHERE b_id = :b_id');
      $this->db->bind(':b_id', $b_id);

      $row = $this->db->single();

      return $row;
    }

    public function getRecordsBySearch() {
      $this->db->query("SELECT * FROM baptism WHERE b_cname3 = :b_cname3 ORDER BY b_cname1");
      $this->db->bind(':b_cname3', $data['Hughes']);

      //$row = $this->db->single();
      $results = $this->db->resultSet();

      return $results;
    }

    public function sortRecords($surname, $firstname){
      $this->db->query("SELECT *
                        FROM baptism
                        WHERE (b_cname3 = $surname AND b_cname1 = $firstname)
                        OR (b_cname3 = $surname)
                        ORDER BY b_cname1");

      $results = $this->db->resultSet();

      return $results;
    }

    public function getEmployeeRecords(){
      $this->db->query('SELECT * FROM tbl_employee');

      /*return $this->db->resultSet();*/

      $results = $this->db->resultSet();

      return $results;
    }

  }
  // public function sortRecords(){
  //   $this->db->query("SELECT * FROM baptism WHERE b_cname3= 'Hughes' ORDER BY b_cname1");
  //
  //   //$this->db->bind(':surname', '%'.$surname.'%');
  //
  //   $results = $this->db->resultSet();
  //
  //   return $results;
  // }
