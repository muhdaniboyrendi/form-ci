<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Auth extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->library('form_validation');
        }
        public function index(){
            $this->form_validation->set_rules('nama', 'Name', 'required|trim');
            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
            $this->form_validation->set_rules('gender', 'Gender', 'required');
            $this->form_validation->set_rules('city', 'City', 'required');
            $this->form_validation->set_rules('status', 'Status', 'required');

            if ($this->form_validation->run() == false){
                $data['title'] = ' User Registration';
                $this->load->view('templates/auth_header', $data);
                $this->load->view('auth/registration.php');
                $this->load->view('templates/auth_footer');
            }else{
                $data = [
                    'nama' => $this->input->post('nama'),
                    'email' => $this->input->post('email'),
                    'gender' => $this->input->post('gender'),
                    'city' => $this->input->post('city'),
                    'status' => $this->input->post('status'),
                ];
                $this->db->insert('users', $data);
                $this->session->set_flashdata('messege', '');
                redirect('auth');
            }
        }
    }
?>