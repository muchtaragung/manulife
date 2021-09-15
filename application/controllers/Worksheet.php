<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Worksheet extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Competence_model');
        $this->load->model('Motivation_model');
    }

    /**
     * menampilkan form untuk mengisi competence dan motivation
     *
     * @return void
     */
    public function competence_dan_motivation()
    {
        $data['page_title'] = "Worksheet";

        $this->load->view('worksheet');
    }

    /**
     * mengambil data inputan user di worksheet dan di save
     *
     * @return void
     */
    public function save_competence_dan_motivation()
    {
        // mengambil data untuk competence
        $competence['knowledge'] = $this->input->post('knowledge');
        $competence['skill']     = $this->input->post('skill');

        // mengambil data untuk motivation
        $motivation['comitment']  = $this->input->post('comitment');
        $motivation['confidence'] = $this->input->post('confidence');

        // menyimpan data
        $this->Competence_model->save($competence);
        $this->Motivation_model->save($motivation);
    }
}
