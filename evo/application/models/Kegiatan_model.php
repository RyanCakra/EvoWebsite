<?php

class Kegiatan_model extends CI_Model{
   private $table = 'kegiatan';

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
        //insert into kegiatan (id, judul, gender, kapasitas, harga_tiket, tanggal, narasumber, tempat, pic, foto_flyer, jenis_id) 
        //values (1,'Seminar Sukses Kuliah di Luar Negeri',100,25000,'2022-06-30','Dr. Seto Waluyo, Dr. Annisa PhD, Misna Azqia M.Kom','Aula Kampus B2 STT-NF','ahmad fathan','seminar1.jpg',1);
        $sql = "INSERT INTO kegiatan ( judul, kapasitas, harga_tiket, tanggal, narasumber, tempat, pic, foto_flyer, jenis_id) VALUES (?,?,?,?,?,?,?,?,?)";
        $this->db->query($sql, $data);
    }

    public function update($data){
        //update kegiatan set judul= Seminar Sukses Kuliah di Luar Negeri where id= '1';
        $sql = "UPDATE kegiatan SET judul=?, kapasitas=?, harga_tiket=?, tanggal=?, narasumber=?, tempat=?, pic=?, foto_flyer=?, jenis_id=? WHERE id=?";
        $this->db->query($sql, $data);
    }

    public function delete($id){
        //delete from kegiatan where id = '1';
        $sql = "DELETE FROM kegiatan WHERE id=?";
        $this->db->query($sql, array($id));
    }

    public function upload_foto($array){
        $sql = "UPDATE kegiatan SET foto_flyer=? WHERE id=?";
        $this->db->query($sql, $array);
    }

    public function lastId(){
        $this->db->limit(1);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get($this->table);
        return $query->row();
    }
}
?>