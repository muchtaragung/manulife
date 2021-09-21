<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
        $this->load->model('Staff_model');

        if ($this->session->userdata('login') != 'manajer') {
            $this->session->set_flashdata('auth', 'Silahkan Login Dahulu');
            redirect('login');
        }
    }

    /**
     * menampilkan list staff.
     * menampilkan sesuai manajer.
     * id manajer di ambil dari session.
     * 
     * @return void
     */
    public function list_staff()
    {
        $where = array('manajer_id' => $this->session->userdata('id'));

        $data['page_title'] = 'List Staff';
        $data['staff'] = $this->Staff_model->get_where($where)->result();

        $this->load->view('list_staff', $data);
    }

    /**
     * menyimpan data staff.
     * 
     * @return void
     */
    public function save_staff()
    {
        $peserta['nama_staff']    = $this->input->post('nama');
        $peserta['email_staff']   = $this->input->post('email');
        $peserta['manajer_id']    = $this->session->userdata('id');

        $this->session->set_flashdata('peserta', 'Berhasil Menambahkan Peserta');
        $this->Staff_model->save($peserta);
        redirect('staff');
    }

    public function list_goal($staff_id)
    {
        $data['page_title'] = 'List Peserta';
        $data['goals']      = $this->Goal_model->get_where(['staff_id' => $staff_id])->result();
        $data['staff_id']   = $staff_id;
        $this->load->view('list_goal', $data);
    }
}
