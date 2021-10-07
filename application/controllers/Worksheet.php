<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Csv;

class Worksheet extends CI_Controller
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
            $this->session->set_flashdata('auth', 'Login Sebelum Mengisi Worksheet');
            redirect('login');
        }
    }

    /**
     * menampilkan form untuk mengisi competence dan motivation
     *
     * @return void
     */
    public function worksheet($staff_id)
    {
        $data['page_title'] = "Worksheet";
        $data['staff_id'] = $staff_id;
        $this->load->view('worksheet', $data);
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
        $goal['staff_id'] = $this->input->post('staff_id');
        $this->Goal_model->save($goal);

        // mengambil data insert terakhir
        $goal_id = $this->db->insert_id();

        // mengambil data untuk competence
        $competence['knowledge'] = $this->input->post('knowledge');
        $competence['skill']     = $this->input->post('skill');
        $competence['goal_id']   = $goal_id;
        // menyimpan data competence
        $this->Competence_model->save($competence);

        // mengambil data untuk motivation
        $motivation['comitment']  = $this->input->post('comitment');
        $motivation['confidence'] = $this->input->post('confidence');
        $motivation['goal_id']   = $goal_id;
        // menyimpan data motivation
        $this->Motivation_model->save($motivation);

        // menentukan level dan style dan menyimpannya
        $this->save_level($competence, $motivation, $goal_id);
        $this->save_style($competence, $motivation, $goal_id);

        redirect('worksheet/result/' . $goal_id);
    }

    /**
     * menampilkan hasil
     *
     * @param [type] $goal_id
     * @return void
     */
    public function result($goal_id)
    {
        $data['page_title'] = 'Worksheet Result';

        $where = ['goal_id' => $goal_id];

        $data['goal']       = $this->Goal_model->get_where(['id' => $goal_id])->row();
        $data['competence'] = $this->Competence_model->get_where($where)->row();
        $data['motivation'] = $this->Motivation_model->get_where($where)->row();
        $data['learning_level'] = $this->Level_model->get_where($where)->row();
        $data['leadership_style'] = $this->Style_model->get_where($where)->row();
        $data['staff']    = $this->Staff_model->get_where(['id' => $data['goal']->staff_id])->row();

        // var_dump($data);
        $this->load->view('result', $data);
    }

    public function result_print($goal_id)
    {


        $where = ['goal_id' => $goal_id];

        $data['goal']       = $this->Goal_model->get_where(['id' => $goal_id])->row();
        $data['competence'] = $this->Competence_model->get_where($where)->row();
        $data['motivation'] = $this->Motivation_model->get_where($where)->row();
        $data['learning_level'] = $this->Level_model->get_where($where)->row();
        $data['leadership_style'] = $this->Style_model->get_where($where)->row();
        $data['staff']    = $this->Staff_model->get_where(['id' => $data['goal']->staff_id])->row();

        $data['page_title'] = 'Worksheet Result - ' . $data['staff']->nama_staff;
        // var_dump($data);
        $this->load->view('result_print', $data);
    }

    public function pdf($goal_id)
    {
        $this->load->library('pdf');

        $where = ['goal_id' => $goal_id];

        $data['goal']       = $this->Goal_model->get_where(['id' => $goal_id])->row();
        $data['competence'] = $this->Competence_model->get_where($where)->row();
        $data['motivation'] = $this->Motivation_model->get_where($where)->row();
        $data['level'] = $this->Level_model->get_where($where)->row();
        $data['style'] = $this->Style_model->get_where($where)->row();
        $data['staff']    = $this->Staff_model->get_where(['id' => $data['goal']->staff_id])->row();

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-" . $data['staff']->nama_staff . "-" . date('d M Y') . ".pdf";

        $this->pdf->load_view('pdf/worksheet', $data);
    }

    // public function csv($id_user)
    // {

    //     $data = $this->user_

    //     // var_dump($data);
    //     // die();

    //     // buat object spreadseet
    //     $spreadsheet = new Spreadsheet();
    //     $sheet = $spreadsheet->getActiveSheet();

    //     // bagian nama coachee
    //     $sheet->setCellValue('A2', 'Nama Coachee');


    //     // set locale untuk filename dan waktu
    //     setlocale(LC_TIME, 'id_ID');
    //     date_default_timezone_set("Asia/Jakarta");

    //     // $filename = $coachee['name'] . '-' . 'Sesi ' . $session['session'] . '-' . date('d M Y H:i:s') . '.csv';
    //     // $foldername = 'csv' . DIRECTORY_SEPARATOR . $coach['name'] . DIRECTORY_SEPARATOR . $company['name'];

    //     // mkdir(FCPATH . $foldername, 0755, true);
    //     // $writer = new Csv($spreadsheet);
    //     // $writer->save(FCPATH . $foldername . DIRECTORY_SEPARATOR . $filename);
    //     // redirect($foldername . DIRECTORY_SEPARATOR . $filename);
    // }

    /**
     * menentukan level dan menyimpan ke database
     *
     * @param array $competence
     * @param array $motivation
     * @param int $goal_id
     * @return void
     */
    private function save_level(array $competence, array $motivation, $goal_id)
    {
        $skill      = $competence['skill'];
        $knowledge  = $competence['knowledge'];
        $comitment  = $motivation['comitment'];
        $confidence = $motivation['confidence'];

        if ($skill == 'low' && $knowledge == 'low' && $comitment == 'low' && $confidence == 'low') {
            $level['level'] = 'L0';
        } else if ($skill == 'low' && $knowledge == 'low' && $comitment == 'low' && $confidence == 'high') {
            $level['level'] = 'L2/1';
        } else if ($skill == 'low' && $knowledge == 'low' && $comitment == 'high' && $confidence == 'low') {
            $level['level'] = 'L1/2';
        } else if ($skill == 'low' && $knowledge == 'low' && $comitment == 'high' && $confidence == 'high') {
            $level['level'] = 'L1';
        } else if ($skill == 'low' && $knowledge == 'high' && $comitment == 'low' && $confidence == 'low') {
            $level['level'] = 'L2';
        } else if ($skill == 'low' && $knowledge == 'high' && $comitment == 'low' && $confidence == 'high') {
            $level['level'] = 'L2';
        } else if ($skill == 'low' && $knowledge == 'high' && $comitment == 'high' && $confidence == 'low') {
            $level['level'] = 'L1/2';
        } else if ($skill == 'low' && $knowledge == 'high' && $comitment == 'high' && $confidence == 'high') {
            $level['level'] = 'L1';
        } else if ($skill == 'high' && $knowledge == 'low' && $comitment == 'low' && $confidence == 'low') {
            $level['level'] = 'L2/3';
        } else if ($skill == 'high' && $knowledge == 'low' && $comitment == 'low' && $confidence == 'high') {
            $level['level'] = 'L2/3';
        } else if ($skill == 'high' && $knowledge == 'low' && $comitment == 'high' && $confidence == 'low') {
            $level['level'] = 'L3/2';
        } else if ($skill == 'high' && $knowledge == 'low' && $comitment == 'high' && $confidence == 'high') {
            $level['level'] = 'L3';
        } else if ($skill == 'high' && $knowledge == 'high' && $comitment == 'low' && $confidence == 'low') {
            $level['level'] = 'L3';
        } else if ($skill == 'high' && $knowledge == 'high' && $comitment == 'low' && $confidence == 'high') {
            $level['level'] = 'L3/4';
        } else if ($skill == 'high' && $knowledge == 'high' && $comitment == 'high' && $confidence == 'low') {
            $level['Level'] = 'L4/3';
        } else if ($skill == 'high' && $knowledge == 'high' && $comitment == 'high' && $confidence == 'high') {
            $level['level'] = 'L4';
        } else {
            $level['level'] = 'ERROR';
        }

        $level['goal_id'] = $goal_id;
        $this->Level_model->save($level);
    }

    /**
     * menentukan style dan menyimpan ke database
     *
     * @param array $competence
     * @param array $motivation
     * @param int $goal_id
     * @return void
     */
    private function save_style(array $competence, array $motivation, $goal_id)
    {
        $skill      = $competence['skill'];
        $knowledge  = $competence['knowledge'];
        $comitment  = $motivation['comitment'];
        $confidence = $motivation['confidence'];

        if ($skill == 'low' && $knowledge == 'low' && $comitment == 'low' && $confidence == 'low') {
            $style['style'] = 'S0';
        } else if ($skill == 'low' && $knowledge == 'low' && $comitment == 'low' && $confidence == 'high') {
            $style['style'] = 'S2/1';
        } else if ($skill == 'low' && $knowledge == 'low' && $comitment == 'high' && $confidence == 'low') {
            $style['style'] = 'S1/2';
        } else if ($skill == 'low' && $knowledge == 'low' && $comitment == 'high' && $confidence == 'high') {
            $style['style'] = 'S1';
        } else if ($skill == 'low' && $knowledge == 'high' && $comitment == 'low' && $confidence == 'low') {
            $style['style'] = 'S2';
        } else if ($skill == 'low' && $knowledge == 'high' && $comitment == 'low' && $confidence == 'high') {
            $style['style'] = 'S2';
        } else if ($skill == 'low' && $knowledge == 'high' && $comitment == 'high' && $confidence == 'low') {
            $style['style'] = 'S1/2';
        } else if ($skill == 'low' && $knowledge == 'high' && $comitment == 'high' && $confidence == 'high') {
            $style['style'] = 'S1';
        } else if ($skill == 'high' && $knowledge == 'low' && $comitment == 'low' && $confidence == 'low') {
            $style['style'] = 'S2/3';
        } else if ($skill == 'high' && $knowledge == 'low' && $comitment == 'low' && $confidence == 'high') {
            $style['style'] = 'S2/3';
        } else if ($skill == 'high' && $knowledge == 'low' && $comitment == 'high' && $confidence == 'low') {
            $style['style'] = 'S3/2';
        } else if ($skill == 'high' && $knowledge == 'low' && $comitment == 'high' && $confidence == 'high') {
            $style['style'] = 'S3';
        } else if ($skill == 'high' && $knowledge == 'high' && $comitment == 'low' && $confidence == 'low') {
            $style['style'] = 'S3';
        } else if ($skill == 'high' && $knowledge == 'high' && $comitment == 'low' && $confidence == 'high') {
            $style['style'] = 'S3/4';
        } else if ($skill == 'high' && $knowledge == 'high' && $comitment == 'high' && $confidence == 'low') {
            $style['style'] = 'S4/3';
        } else if ($skill == 'high' && $knowledge == 'high' && $comitment == 'high' && $confidence == 'high') {
            $style['style'] = 'S4';
        } else {
            $level['level'] = 'ERROR';
        }

        $style['goal_id'] = $goal_id;
        $this->Style_model->save($style);
    }
}
