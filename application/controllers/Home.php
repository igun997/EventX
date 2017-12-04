<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->model("home/Event");
        $this->load->model("home/Category");
        $this->load->model("home/Users");
    }

    public function index() {
        $data["event"] = $this->Event->find();
        $data["category"] = $this->Category->find();
        $this->load->view('theme/head_home', $data);
        $this->load->view('isi_home', $data);
        $this->load->view('theme/footer_home');
    }

    function category($cat = "") {
        if ($cat != "") {
            $data["event"] = $this->Event->find("id_category", $cat);
            $data["category"] = $this->Category->find();
            $this->load->view('theme/head_home', $data);
            $this->load->view('isi_home', $data);
            $this->load->view('theme/footer_home');
        } else {
            show_404();
        }
    }

    public function detail($id = "") {
        if ($id != "") {
            $this->load->view('theme/head_home');
            $this->load->view('detail_event');
            $this->load->view('theme/footer_home');
        } else {
            show_404();
        }
    }

    function register() {
        $data = array();
        if (isset($_POST["signup"])) {
            $post = $this->input->post(null, true);
            $users = $this->Users;
            if ($post["username"] != "" && $post["email"] != "" && $post["password"] != "") {
                $users->setUsername($post["username"]);
                $users->setEmail($post["email"]);
                $users->setPassword(md5($post["password"]));
                $ins = $users->save();
                if ($ins) {
                    $data["msg"] = "Data Sukses Di Simpan";
                } else {
                    $data["msg"] = "Data Gagal Di Simpan";
                }
            } else {
                $data["msg"] = "Oops Fill All Field";
            }
        }
        $this->load->view("register", $data);
    }

    public function login() {
        $data = array();
        if(isset($_POST["login"])){
            $post  = $this->input->post(null,true);
            $users = $this->Users;
            if($post["username"] != "" && $post["password"]){
                if($users->find("username",$post["username"])->num_rows() > 0){
                    if($users->find("password",md5($post["password"]))->num_rows() > 0){
                        $this->session->set_userdata("nama",$post["username"]);
                        $data["msg"] = "Login Berhasil";
                        redirect(base_url());
                    }else{
                        $data["msg"] = "Password Salah";
                    }
                }else{
                    $data["msg"] = "Username Salah";
                }
            }else{
                $data["msg"] = "Oops Fill All Field";
            }
        }
        $this->load->view("login_user",$data);
    }
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }

}
