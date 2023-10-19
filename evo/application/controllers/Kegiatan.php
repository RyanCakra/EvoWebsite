<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {
    
    public function index(){
        $this->load->model('kegiatan_model','kegiatan');

        $data['list_kegiatan']=$this->kegiatan->getAll();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kegiatan/index',$data);
        $this->load->view('layout/footer');
    }

    public function view(){
        $id = $this->input->get('id');
        $this->load->model('kegiatan_model','kegiatan');
        $data['kegiatan']=$this->kegiatan->findById($id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kegiatan/view',$data);
        $this->load->view('layout/footer');
        //die("NIM ".$_nim);
    }

    public function create(){
        $data['judul']='Form Kelola Kegiatan';
        $this->load->model('jenis_kegiatan_model','jenis_kegiatan');
        $data['list_jenis_kegiatan']=$this->jenis_kegiatan->getAll();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kegiatan/create',$data);
        $this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model('kegiatan_model', 'jenis_kegiatan');

        $_judul = $this->input->post('judul');
        $_kapasitas = $this->input->post('kapasitas');
        $_harga_tiket = $this->input->post('harga_tiket');
        $_tanggal = $this->input->post('tanggal');
        $_narasumber = $this->input->post('narasumber');
        $_tempat = $this->input->post('tempat');
        $_pic = $this->input->post('pic');
        $_foto_flyer = $this->input->post('foto_flyer');
        $_jenis_id = $this->input->post('jenis_id');
        $_kegiatan_edit = $this->input->post('kegiatan_edit'); //hidden field kalau form nya update

        // membuat array yang nantinya akan di masukkan ke dalam $data_kegiatan.
        $data_kegiatan[] = $_judul; // ? 2
        $data_kegiatan[] = $_kapasitas; // ? 3
        $data_kegiatan[] = $_harga_tiket; // ? 4
        $data_kegiatan[] = $_tanggal; // ? 5
        $data_kegiatan[] = $_narasumber; // ? 6
        $data_kegiatan[] = $_tempat; // ? 7
        $data_kegiatan[] = $_pic; // ? 8
        $data_kegiatan[] = $_foto_flyer; // ? 9
        $data_kegiatan[] = $_jenis_id; // ? 10

        if (isset($_kegiatan_edit)){
            //update data lama
            $data_kegiatan[] = $_kegiatan_edit; //? 10
            $this->jenis_kegiatan->update($data_kegiatan);
            $_id = $_kegiatan_edit;
        }else{
            //save data baru
            // untuk memanggil fungsi save di model
            $this->jenis_kegiatan->save($data_kegiatan);
            $row = $this->jenis_kegiatan->lastId();
            $_id = $row->id;
        }
        
        redirect(base_url(). 'index.php/kegiatan/view?id='. $_id , 'refresh');
        //redirect digunakan untuk membelokkan halaman, base_url dari redirect ini ada dari confignya, 
    }

    public function edit(){

        $_id = $this->input->get('id');
        $this->load->model('kegiatan_model', 'kegiatan');
        $kegiatan_edit = $this->kegiatan->findById($_id);
        
        $this->load->model('jenis_kegiatan_model','jenis_kegiatan');
        $data['list_jenis_kegiatan']=$this->jenis_kegiatan->getAll();
        $data['juduls']='Form Update Kegiatan';
        $data['kegiatan_edit'] = $kegiatan_edit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kegiatan/update',$data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $id = $this->input->get('id');
        $this->load->model('kegiatan_model', 'kegiatan');
        $this->kegiatan->delete($id);
        redirect(base_url(). 'index.php/kegiatan', 'refresh');
    }

    public function upload(){
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = '100000';
        $config['max_width']            = '2800';
        $config['max_height']           = '3000';
        
        $_id = $this->input->post('id');

        $array = explode('.', $_FILES["foto_flyer"]['name']);
        $extension = end($array);

        $new_name = $_id.'.'.$extension;
        $config['file_name'] = $new_name;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('foto_flyer'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_form', $error);
        }
        else
        {
            //panggil model
            $this->load->model('kegiatan_model', 'kegiatan');
            $array_data[] = $new_name; //? ke 1
            $array_data[] = $_id; // ? ke 2
            //upload foto ditable kegiatan
            $this->kegiatan->upload_foto($array_data);

            $data = [$new_name, $_id];
            $this->kegiatan->upload_foto($data);
            // $data = array('upload_data' => $this->upload->data());
            // $this->load->view('upload_success', $data);
        }
        redirect(base_url(). 'index.php/kegiatan/view?id='. $_id);
    }
}
?>