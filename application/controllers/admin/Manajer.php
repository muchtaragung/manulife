<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manajer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // loading model
        $this->load->model('Goal_model');
        $this->load->model('Competence_model');
        $this->load->model('Motivation_model');
        $this->load->model('Level_model');
        $this->load->model('Style_model');
        $this->load->model('Peserta_model');
        $this->load->model('Manajer_model');

        if ($this->session->userdata('login') != 'admin') {
            $this->session->set_flashdata('auth', 'Silahkan Login Dahulu');
            redirect('admin/login');
        }
    }

    /**
     * menampilkan list
     *
     * @return void
     */
    public function list()
    {
        $data['page_title'] = 'List Manajer';
        $data['manajer'] = $this->Manajer_model->get_all()->result();

        $this->load->view('admin/manajer/list', $data);
    }

    /**
     * menyimpan data manajer baru
     *
     * @return void
     */
    public function save()
    {
        $manajer['nama_manajer']     = $this->input->post('nama');
        $manajer['email_manajer']    = $this->input->post('email');
        $manajer['password_manajer'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

        $this->Manajer_model->save($manajer);
        $this->session->set_flashdata('manajer', 'Berhasil Menambahkan Manajer Baru');
        redirect('admin/manajer/list');
    }

    /**
     * menampilkan data manajer di form edit
     * , untuk di ubah datanya
     * 
     * mengambil data sesuai manajer id
     * 
     * @param int $manajer_id
     * @return void
     */
    public function edit($manajer_id)
    {
        $where = ['id' => $manajer_id];

        $data['manajer'] = $this->Manajer_model->get_where($where)->row();
        $data['page_title'] = 'Edit Manajer';

        $this->load->view('admin/manajer/edit', $data);
    }

    /**
     * memperbarui data manajer dari form edit
     *
     * @return void
     */
    public function update()
    {
        // mengambil data  inputan
        $manajer['id']               = $this->input->post('id');
        $manajer['nama_manajer']     = $this->input->post('nama');
        $manajer['email_manajer']    = $this->input->post('email');

        // mengecek apakah memasukan password baru
        $password = $this->input->post('password');
        if (isset($password)) {
            $manajer['password_manajer'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        } else {
            $manajer['password_manajer'] = $this->input->post('password_lama');
        }

        // mengupdate
        $this->Manajer_model->update($manajer);
        $this->session->set_flashdata('manajer', 'Berhasil Mengupdate Manajer ' . $manajer['nama_manajer']);
        redirect('admin/manajer/list');
    }

    /**
     * menghapus data sesuai id param pertama
     *
     * @param int $manajer_id
     * @return void
     */
    public function delete($manajer_id)
    {
        $manajer['id'] = $manajer_id;

        $this->Manajer_model->delete($manajer);
        $this->session->set_flashdata('manajer', 'Berhasil Menghapus Manajer');
        redirect('admin/manajer/list');
    }
}