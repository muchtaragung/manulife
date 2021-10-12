<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
        $this->load->model('Manajer_model', 'manajer');
        $this->load->library('form_validation');
    }

    /**
     * menampilkan halaman login
     *
     * @return void
     */
    public function login()
    {
        $data['page_title'] = 'Login';

        $this->load->view('login', $data);
    }

    /**
     * mengautentikasi data login user
     *
     * @return void
     */
    public function auth()
    {
        // mengambil data hasil inputan user
        $email    = $this->input->post('email');
        $password = $this->input->post('password');

        // mengecek apakah akun manajer ada?
        $manajer =  $this->Auth_model->get_manajer(['email_manajer' => $email])->num_rows();

        if ($manajer > 0) {
            $data_manajer = $this->Auth_model->get_manajer(['email_manajer' => $email])->row();

            // mengecek apakah password benar
            if (password_verify($password, $data_manajer->password_manajer)) {

                // set data manajer yang akan di masukan ke session
                $session_data = array(
                    'login'    => 'manajer',
                    'id'       => $data_manajer->id,
                    'name'     => $data_manajer->nama_manajer,
                    'email'    => $data_manajer->email_manajer,
                    'password' => $data_manajer->password_manajer,
                );

                $this->session->set_userdata($session_data);
                redirect('welcome', 'refresh');
            } else {
                $this->session->set_flashdata('auth', 'Password Salah');
                redirect('login', 'refresh');
            }
        } else {
            $this->session->set_flashdata('auth', 'Akun Tidak Terdaftar');
            redirect('login', 'refresh');
        }
    }

    public function admin_login()
    {
        $data['page_title'] = 'Login';

        $this->load->view('admin/login');
    }

    /**
     * mengautentikasi data login user
     *
     * @return void
     */
    public function admin_auth()
    {
        // mengambil data hasil inputan user
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // mengecek apakah akun admin ada?
        $admin =  $this->Auth_model->get_admin(['username' => $username])->num_rows();

        if ($admin > 0) {
            $data_admin = $this->Auth_model->get_admin(['username' => $username])->row();

            // mengecek apakah password benar
            if (password_verify($password, $data_admin->password)) {

                // set data user yang akan di masukan ke session
                $session_data = array(
                    'login'    => 'admin',
                    'id'       => $data_admin->id,
                    'username' => $data_admin->username,
                    'password' => $data_admin->password,
                );

                $this->session->set_userdata($session_data);
                redirect('admin', 'refresh');
            } else {
                $this->session->set_flashdata('auth', 'Password Salah');
                redirect('admin/login', 'refresh');
            }
        } else {
            $this->session->set_flashdata('auth', 'Akun Tidak Terdaftar');
            redirect('admin/login', 'refresh');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

    public function registration()
    {
        $this->load->view('registration');
    }

    public function register()
    {
        // mengambil data inputan user
        $nama             = $this->input->post('nama');
        $email            = $this->input->post('email');
        $password         = $this->input->post('password');

        // mengatur form validation
        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required',
            array(
                'required' => 'Nama tidak boleh kosong!'
            )
        );
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|is_unique[manajer.email_manajer]',
            array(
                'required' => 'Email tidak boleh kosong!'
            )
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required',
            array(
                'required' => 'Password tidak boleh kosong!'
            )
        );
        $this->form_validation->set_rules(
            'password_confirm',
            'Konfirmasi Password',
            'required|matches[password]',
            array(
                'required' => 'Password Konfirmasi tidak boleh kosong!',
                'matches' => 'Password Tidak Sama'
            )
        );

        if ($this->form_validation->run() == FALSE) {
            $this->registration();
        } else {
            $manajer['nama_manajer'] = $nama;
            $manajer['email_manajer'] = $email;
            $manajer['password_manajer'] = password_hash($password, PASSWORD_DEFAULT);

            $this->manajer->save($manajer);
            $this->session->set_flashdata('msg', 'Registrasi Berhasil Silahkan Login');
            redirect('login');
        }
    }
}
