<?php

class Kategori_peserta_model extends CI_Model{
   private $table = 'kategori_peserta';

    public function getAll(){
       //select * from dosen;
       $query = $this->db->get($this->table);
       return $query->result();
    }

    public function findById($id){
        //select * from dosen where nidn = $id;
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function save ($data){
        //insert into kegiatan (id, nama) 
        //INSERT INTO `jenis_kegiatan` VALUES (1,'Seminar'),(2,'Workshop'),(3,'Event Olah Raga'),(4,'Bazaar'),(5,'Pelatihan');
        $sql = "INSERT INTO kategori_peserta (id, nama) VALUES (?,?)";
        $this->db->query($sql, $data);
    }

    public function update($data){
        //update `jenis_kegiatan` VALUES (1,'Seminar'),(2,'Workshop'),(3,'Event Olah Raga'),(4,'Bazaar'),(5,'Pelatihan'); where id= '1';
        $sql = "UPDATE kategori_peserta SET id=?, nama=? WHERE id=?";
        $this->db->query($sql, $data);
    }

    public function delete($id){
        //delete from kegiatan where id = '1';
        $sql = "DELETE FROM kategori_peserta WHERE id=?";
        $this->db->query($sql, array($id));
    }

}

?>