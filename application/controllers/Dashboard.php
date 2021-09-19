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
        $this->load->model('Supporting_model');
        $this->load->model('Directing_model');
        $this->load->model('Peserta_model');

        if ($this->session->userdata('login') != 'true') {
            $this->session->set_flashdata('auth', 'Silahkan Login Dahulu');
            redirect('login');
        }
    }

    public function list_peserta()
    {
        $where = array('user_id' => $this->session->userdata('id'));

        $data['page_title'] = 'List Peserta';
        $data['peserta'] = $this->Peserta_model->get_where($where)->result();

        $this->load->view('list_peserta', $data);
    }

    public function save_peserta()
    {
        $peserta['nama']    = $this->input->post('nama');
        $peserta['email']   = $this->input->post('email');
        $peserta['user_id'] = $this->session->userdata('id');

        $this->session->set_flashdata('peserta', 'Berhasil Menambahkan Peserta');
        $this->Peserta_model->save($peserta);
        redirect('peserta');
    }

    public function list_goal($peserta_id)
    {
        $data['page_title'] = 'List Peserta';
        $data['goals']      = $this->Goal_model->get_where(['peserta_id' => $peserta_id])->result();
        $data['peserta_id'] = $peserta_id;
        $this->load->view('list_goal', $data);
    }
}
