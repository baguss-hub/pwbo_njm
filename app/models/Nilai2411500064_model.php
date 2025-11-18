<?php
class Nilai2411500064_model {
    private $table = 'nilai_2411500064';
    private $db;

    public function __construct ()
    {
        $this->db = new Database();

    }

    public function getAllNilai()
    {
        $this->db->query('SELECT * FROM '.$this->table);
        return $this->db->resultSet();
    }

    public function getNilaiById($id)
    {
        $this->db->query('SELECT * FROM '.$this->table.' WHERE id=:id');
        $this->db->bind('id', $id); 
        return $this->db->single();
    }
    public function tambahDataNilai($data)
    {
        // $query = "INSERT INTO `nilai_2411500064` (`nim064`, `nm_lengkap064`, `nm_mk064`, `nilai_akhir064`, `grade064`, `ket064`)
        //             VALUES
        //             ('', :nim064, :nm_lengkap064, :nm_mk064, :nilai_akhir064, :grade064, :ket064)";
    
        $query = "INSERT INTO `nilai_2411500064` (`id`, `nim064`, `nm_lengkap064`, `nm_mk064`, `nilai_akhir064`, `grade064`, `ket064`) VALUES (NULL, :nim064, :nm_lengkap064, :nm_mk064, :nilai_akhir064, :grade064, :ket064)";

        $this->db->query($query);
        $this->db->bind('nim064', $data['nim064']);
        $this->db->bind('nm_lengkap064', $data['nm_lengkap064']);
        $this->db->bind('nm_mk064', $data['nm_mk064']);
        $this->db->bind('nilai_akhir064', $data['nilai_akhir064']);
        $this->db->bind('grade064', $data['grade064']);
        $this->db->bind('ket064', $data['ket064']); 

        $this->db->execute();

        return $this->db->rowCount();
    }
    
    public function hapusDataNilai($id)
    {
        $query = "DELETE FROM $this->table WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}