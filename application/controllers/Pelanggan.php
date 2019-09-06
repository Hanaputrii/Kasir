<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	 public function __construct(){

        parent ::__construct();

        //load model
        $this->load->model('model_pelanggan'); 

    }

    public function index()
    {
        $data = array(

            'title'     => 'Data Pelanggan',
            'gender' => ['Perempuan','Laki-laki'],
            'data_pelanggan' => $this->model_pelanggan->get_all(),

        );

        $this->load->view('pelanggan/data_pelanggan', $data);
    }

    public function tambah()
    {
        $data = array(

            'title'     => 'Tambah Data Pelanggan'

        );

        $this->load->view('pelanggan/tambah_pelanggan', $data);
    }

    public function simpan()
    {
        $data = array(

    		 'id'       => $this->input->post("id"),
   			 'kode'     => $this->input->post("kode"),
           	 'nama'  	=> $this->input->post("nama"),
           	 'hp'       => $this->input->post("hp"),
           	 'alamat'   => $this->input->post("alamat"),
			 'gender'   => $this->input->post("gender"),

        );

        $this->model_pelanggan->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

        //redirect
        redirect('pelanggan/');

    }

    public function edit($id_pelanggan)
    {
        $id_pelanggan = $this->uri->segment(3);

        $data = array(

            'title'     => 'Edit Data Pelanggan',
            'data_pelanggan' => $this->model_pelanggan->edit($id_pelanggan)

        );

        $this->load->view('edit_pelanggan', $data);
    }

    public function update()
    {
        $id['id_pelanggan'] = $this->input->post("id_pelanggan");
        $data = array(

             'id'       => $this->input->post("id"),
   			 'kode'     => $this->input->post("kode"),
           	 'nama'  	=> $this->input->post("nama"),
           	 'hp'       => $this->input->post("hp"),
           	 'alamat'   => $this->input->post("alamat"),
			 'gender'   => $this->input->post("gender"),

        );

        $this->model_pelanggan->update($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');

        //redirect
        redirect('pelanggan/');

    }

    public function hapus($id_pelanggan)
    {
        $id['id_pelanggan'] = $this->uri->segment(3);

        $this->model_pelanggan->hapus($id);

        //redirect
        redirect('pelanggan/');
    }
}