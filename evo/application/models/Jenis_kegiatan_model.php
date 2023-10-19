<?php

class Jenis_Kegiatan_model extends CI_Model{
   private $table = 'jenis_kegiatan';

    public function getAll(){
       //select * from jenis_kegiatan;
       $query = $this->db->get($this->table);
       return $query->result();
    }

    public function findById($id){
        //select * from jenis_kegiatan where id = $id;
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function save ($data){
        //INSERT INTO `jenis_kegiatan` VALUES (1,'Seminar'),(2,'Workshop'),(3,'Event Olah Raga'),(4,'Bazaar'),(5,'Pelatihan');
        $sql = "INSERT INTO jenis_kegiatan (id, nama) VALUES (?,?)";
        $this->db->query($sql, $data);
    }

    public function update($data){
        //update `jenis_kegiatan` VALUES (1,'Seminar'),(2,'Workshop'),(3,'Event Olah Raga'),(4,'Bazaar'),(5,'Pelatihan'); where id= '1';
        $sql = "UPDATE jenis_kegiatan SET id=?, nama=? WHERE id=?";
        $this->db->query($sql, $data);
    }

    public function delete($id){
        //delete from kegiatan where id = '1';
        $sql = "DELETE FROM jenis_kegiatan WHERE id=?";
        $this->db->query($sql, array($id));
    }

}

?>