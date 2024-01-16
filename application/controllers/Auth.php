<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'User Login';
            $this->load->view('templates/header', $data);
            $this->load->view('web/login');
            $this->load->view('templates/footer');

        } else {

            // validasi berhasil
            $this->_login();

        }
    }


    private function _login()
    {

        $email = $this->input->post('email');
        $Password = $this->input->post('password');

        $user = $this->db->get_where('tabel_user', ['email' => $email])->row_array();

        // jika user ada
        if ($user) {

            if ($user['is_aktif'] == 1) {
                // cek password

                if (password_verify($Password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    
                    $this->session->set_userdata($data);
                    if($user['role_id']== 1){

                        redirect('Web/admin');
                    }else{
 
                        
                        redirect('Web/user');
                    }

                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Password salah
            </div>');
                    redirect('Auth');
                }

            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email Belum Terdaftar
            </div>');
                redirect('Auth');
            }
        } else {

            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email Belum Terdaftar
            </div>');
            redirect('Auth');
        }
    }


    public function register()
    {
        // Validasi form ambil dari name register.php
        $this->form_validation->set_rules('nama', 'Name', 'required|trim');
        $this->form_validation->set_rules('no_telp', 'Nomor-Telfon', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tabel_user.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]', [
            'matches' => 'password tidak sesuai',
            'min_length' => 'password terlalu pendek'

        ]);
        $this->form_validation->set_rules('password_confirm', 'Password', 'required|trim|matches[password]');

        // set_message validation
        // $this->form_validation->set_message('matches','Password tidak cocok');
        $this->form_validation->set_message('is_unique', 'Email anda sudah terdaftar');
        // $this->form_validation->set_message('min_length','Password minimal 8 karakter');
        $this->form_validation->set_message('required', 'Field harus di isi');
        $this->form_validation->set_message('valid_email', 'Email Tidak Valid');



        if ($this->form_validation->run() == false) {


            $data['title'] = 'User Registration';
            $this->load->view('templates/header', $data);
            $this->load->view('web/register');
            $this->load->view('templates/footer');
        } else {

            $data = [

                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'no_telp' => htmlspecialchars($this->input->post('no_telp', true)),
                'email' => $this->input->post('email', true),
                'password' => password_hash($this->input->post("password"),
                PASSWORD_DEFAULT),              
                'gambar' => 'default.jpg',
                'role_id' => 2,
                'is_aktif' => 1,
                'tanggal_dibuat' => time()

            ];

            $this->db->insert('tabel_user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berhasil Registrasi, silahkan login
            </div>');
            redirect('Auth'); 

        }
    }


    public function logout(){


        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      berhasil Logout
        </div>');
        redirect('Auth');
    }



}