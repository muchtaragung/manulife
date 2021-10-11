<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
        $this->load->model('Manajer_model');
        $this->load->model('Staff_model');

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
    public function list($staff_id)
    {
        $data['page_title'] = 'List Worksheet';

        $join = [
            ['competence', 'competence.goal_id = goal.id'],
            ['motivation', 'motivation.goal_id = goal.id'],
            ['learning_level', 'learning_level.goal_id = goal.id'],
            ['leadership_style', 'leadership_style.goal_id = goal.id'],
        ];

        $where = ['goal.staff_id' => $staff_id];

        $data['goals']      = $this->Goal_model->get_join_where($join, $where)->result();
        $data['staff_id'] = $staff_id;

        $this->load->view('admin/worksheet/list', $data);
    }

    /**
     * menyimpan data manajer baru
     *
     * @return void
     */
    public function save()
    {
        $staff['nama_staff']     = $this->input->post('nama');
        $staff['email_staff']    = $this->input->post('email');
        $staff['manajer_id']     = $this->input->post('manajer_id');

        $this->Staff_model->save($staff);
        $this->session->set_flashdata('staff', 'Berhasil Menambahkan Manajer Baru');
        redirect('admin/staff/list/' . $staff['manajer_id']);
    }

    /**
     * menghapus data sesuai id param pertama
     *
     * @param int $manajer_id
     * @return void
     */
    public function delete($staff_id)
    {
        $goal = $this->Goal_model->get_where(['id' => $staff_id])->row_array();

        $where_delete = ['goal_id' => $goal['id']];

        $this->Goal_model->delete($goal);
        $this->Competence_model->delete($where_delete);
        $this->Motivation_model->delete($where_delete);
        $this->Level_model->delete($where_delete);
        $this->Style_model->delete($where_delete);

        $this->session->set_flashdata('staff', 'Berhasil Mengdelete staff ' . $goal['nama_staff']);
        redirect('admin/worksheet/list/' . $goal['staff_id']);
    }
}
