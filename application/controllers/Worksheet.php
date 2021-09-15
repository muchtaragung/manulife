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
    public function worksheet()
    {
        $data['page_title'] = "Worksheet";

        $this->load->view('worksheet');
    }

    /**
     * mengambil data inputan user di worksheet dan di save
     *
     * @return void
     */
    public function save_worksheet()
    {
        // mengambil lalu menyimpan data goal
        $goal['goal'] = $this->input->post('goal');
        $this->save_goal($goal);
        $goal_id = $this->db->insert_id();

        // mengambil data untuk competence
        $competence['knowledge'] = $this->input->post('knowledge');
        $competence['skill']     = $this->input->post('skill');
        $competence['goal_id']   = $goal_id;
        $this->save_competence($competence);

        // mengambil data untuk motivation
        $motivation['comitment']  = $this->input->post('comitment');
        $motivation['confidence'] = $this->input->post('confidence');
        $motivation['goal_id']   = $goal_id;
        $this->save_motivation($competence);

        $this->get_level($competence, $motivation);
        $this->get_style($competence, $motivation);
    }

    /**
     * menyimpan goal
     *
     * @param array $goal
     * @return void
     */
    private function save_goal(array $goal)
    {
        $this->Goal_model->save($goal);
    }

    /**
     * menyimpan competence
     *
     * @param array $competence
     * @return void
     */
    private function save_competence(array $competence)
    {
        $this->Competence_model->save($competence);
    }

    /**
     * menyimpan motivation
     *
     * @param array $motivation
     * @return void
     */
    private function save_motivation(array $motivation)
    {
        $this->Motivation_model->save($motivation);
    }
}
