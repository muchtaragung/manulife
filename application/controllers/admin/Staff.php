<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Staff extends CI_Controller
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
    public function list($manajer_id)
    {
        $data['page_title'] = 'List Staf';

        $data['staff'] = $this->Staff_model->get_where(['manajer_id' => $manajer_id])->result();
        $data['manajer_id'] = $manajer_id;

        $this->load->view('admin/staff/list', $data);
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
     * menampilkan data manajer di form edit
     * , untuk di ubah datanya
     * 
     * mengambil data sesuai manajer id
     * 
     * @param int $manajer_id
     * @return void
     */
    public function edit($staff_id)
    {
        $where = ['id' => $staff_id];

        $data['staff'] = $this->Staff_model->get_where($where)->row();
        $data['page_title'] = 'Edit Staff';

        $this->load->view('admin/staff/edit', $data);
    }

    /**
     * memperbarui data manajer dari form edit
     *
     * @return void
     */
    public function update()
    {
        // mengambil data  inputan
        $staff['id']               = $this->input->post('id');
        $staff['nama_staff']     = $this->input->post('nama');
        $staff['email_staff']    = $this->input->post('email');

        $manajer_id = $this->input->post('manajer_id');

        // mengupdate
        $this->Staff_model->update($staff);
        $this->session->set_flashdata('staff', 'Berhasil Mengupdate staff ' . $staff['nama_staff']);
        redirect('admin/staff/list/' . $manajer_id);
    }

    /**
     * menghapus data sesuai id param pertama
     *
     * @param int $manajer_id
     * @return void
     */
    public function delete($staff_id)
    {
        $staff = $this->Staff_model->get_where(['id' => $staff_id])->row_array();

        // mengambil data goal
        $goal = $this->Goal_model->get_where(['staff_id' => $staff['id']])->result();

        // menghapus data goal
        foreach ($goal as $data_goal) {
            // menghapus data competence motivation style level
            $this->Competence_model->delete(['goal_id' => $data_goal->id]);
            $this->Motivation_model->delete(['goal_id' => $data_goal->id]);
            $this->Style_model->delete(['goal_id' => $data_goal->id]);
            $this->Level_model->delete(['goal_id' => $data_goal->id]);

            // menghapus data goal
            $this->Goal_model->delete(['id' => $data_goal->id]);
        }

        // menhapus staff
        $this->Staff_model->delete(['id' => $staff['id']]);
        $this->session->set_flashdata('staff', 'Berhasil Menghapus staff ' . $staff['nama_staff']);
        redirect('admin/staff/list/ ' . $staff['manajer_id']);
    }
}
