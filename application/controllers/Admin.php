<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
            redirect('login');
        }
    }

    public function index()
    {
        echo '<h1>hal.admin</h1>';
    }

    public function list_manajer()
    {
        $data['page_title'] = 'List Manajer';
        $data['manajer'] = $this->Manajer_model->get_all()->result();

        $this->load->view('admin/manajer/list', $data);
    }
}
