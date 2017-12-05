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
                        $id_users = $users->find("username",$post["username"]);
                        $this->session->set_userdata("nama",$post["username"]);
                        $this->session->set_userdata("id_users",$id_users->row()->id_users);
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
    function exampleCRUD(){
        /**
         * Insert Into Database
         */
        $event = $this->Event;
        $event->setName("Indra");
        $event->setLocation("Indonesia");
        $event->setTime(date("Y-m-d"));
        $event->setDescription("Test");
        $event->setImg("img.jpg");
        $event->setId_category(3);
        $event->setId_users("12");
        $event->save();
        /**
         * Update Into Database 
         * Kudu di Isiken Kabeh Ulah Hiji2 
         */
        $event = $this->Event;
        $event->setName("Indra");
        $event->setLocation("Indonesia");
        $event->setTime(date("Y-m-d"));
        $event->setDescription("Test");
        $event->setImg("img.jpg");
        $event->setId_category(3);
        $event->setId_users("12");
        $event->setID("12"); // Default na update na Ngarujuk Param ID 
        $event->update();
        
        /**
         * Kecuali Ai update() na bogaen param
         */
        $event = $this->Event;
        $event->setName("Indra");
        $event->setLocation("Indonesia");
        $event->setTime(date("Y-m-d"));
        $event->setDescription("Test");
        $event->setImg("img.jpg");
        $event->setId_category(3);
        $event->setId_users("12");
        $event->setID("12"); 
        $event->update("id_category",3); //Eta Artina Updatena Acuana Pake id_category = 3
        /**
         * Delete Database
         */
        $event = $this->Event;
        $event->setID("12");
        $event->delete();//Default na Parameter na pakai ID Event
        /**
         * Kecuali ai delete() bogaen Parameter
         */
        $event = $this->Event;
        $event->delete("id_users",1); // Artina Delete Kabeh Data Anu di Cicingan ku ID User 1 
        /**
         * Select Into DB 
         * 
         */
        $event = $this->event();
        $event->find();//Cari Semua Data
        $event->find("id_category",1);//Cari Semua Data Yang ID Category nya 1 
        
    }

}
