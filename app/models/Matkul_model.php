<?php
class Matkul_model {
    private $table = 'matkul';
    private $db;

    public function __construct ()
    {
        $this->db = new Database();

    }

    public function getAllMatkul()
    {
        $this->db->query('SELECT * FROM '.$this->table);
        return $this->db->resultSet();
    }

    public function getMatkulById($id)
    {
        $this->db->query('SELECT * FROM '.$this->table.' WHERE id=:id');
        $this->db->bind('id', $id); 
        return $this->db->single();
    }
    public function tambahDataMatkul($data)
    {
        // $query = "INSERT INTO $this->table (nama, nim, email, jurusan)
        //             VALUES
        //             ( :nama, :nim, :email, :jurusan)";
        // $query = "INSERT INTO $this->table
        //             VALUES
        //             ( '', :nama, :nim, :email, :jurusan)";
        $query = "INSERT INTO $this->table
                    VALUES
                    ( null, :kode_mk, :nama_mk, :jns_mk, :sks)";

        $this->db->query($query);
        $this->db->bind('kode_mk', $data['kode_mk']);
        $this->db->bind('nama_mk', $data['nama_mk']);
        $this->db->bind('jns_mk', $data['jns_mk']);
        $this->db->bind('sks', $data['sks']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}