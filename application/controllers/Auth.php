<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');

        if ($this->session->userdata('login') == 'true') {
            redirect('');
        }
    }

    /**
     * menampilkan halaman login
     *
     * @return void
     */
    public function user_login()
    {
        $data['page_title'] = 'Login';

        $this->load->view('login/user', $data);
    }

    /**
     * mengautentikasi data login user
     *
     * @return void
     */
    public function user_auth()
    {
        // mengambil data hasil inputan user
        $email    = $this->input->post('email');
        $password = $this->input->post('password');

        // mengecek apakah akun user ada?
        $user =  $this->Auth_model->get_user(['email' => $email])->num_rows();

        if ($user > 0) {
            $data_user = $this->Auth_model->get_user(['email' => $email])->row();

            // mengecek apakah password benar
            if (password_verify($password, $data_user->password)) {

                // set data user yang akan di masukan ke session
                $session_data = array(
                    'login'    => true,
                    'id'       => $data_user->id,
                    'name'     => $data_user->name,
                    'email'    => $data_user->email,
                    'password' => $data_user->password,
                );

                $this->session->set_userdata($session_data);
                redirect('', 'refresh');
            } else {
                $this->session->set_flashdata('auth', 'Password Salah');
                redirect('login', 'refresh');
            }
        } else {
            $this->session->set_flashdata('auth', 'Akun Tidak Terdaftar');
            redirect('login', 'refresh');
        }
    }
}
