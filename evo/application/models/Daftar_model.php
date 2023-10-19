<?php

class Daftar_model extends CI_Model{
   private $table = 'daftar';

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
        //INSERT INTO `jenis_kegiatan` VALUES (3,'2022-06-12','ingin kuliah di luar negeri',2,1,2,'S-2022-VI-001')
        $sql = "INSERT INTO daftar (tanggal_daftar, alasan, users_id, kegiatan_id, kategori_peserta_id, nosertifikat)VALUES (?,?,?,?,?,?)";
        $this->db->query($sql, $data);
    }

    public function update($data){
        //update `jenis_kegiatan` VALUES (1,'Seminar'),(2,'Workshop'),(3,'Event Olah Raga'),(4,'Bazaar'),(5,'Pelatihan'); where id= '1';
        $sql = "UPDATE daftar SET tanggal_daftar=?, alasan=?, users_id=?, kegiatan_id=?, kategori_peserta_id=?, nosertifikat=?  WHERE id=?";
        $this->db->query($sql, $data);
    }

    public function delete($id){
        //delete from kegiatan where id = '1';
        $sql = "DELETE FROM daftar WHERE id=?";
        $this->db->query($sql, array($id));
    }

    public function lastId(){
        $this->db->limit(1);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function saves($data){
        //insert into kegiatan (id, nama) 
        //INSERT INTO `jenis_kegiatan` VALUES (3,'2022-06-12','ingin kuliah di luar negeri',2,1,2,'S-2022-VI-001')
        $sql = "INSERT INTO daftar (tanggal_daftar, alasan, users_id, kegiatan_id, kategori_peserta_id, nosertifikat)VALUES (now(),?,?,?,?,?)";
        $this->db->query($sql, $data);
    }

}

?>