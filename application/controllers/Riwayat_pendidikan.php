<?php
defined ('BASEPATH') OR exit ('NO Direct Script Access Allowed');
class Riwayat_pendidikan extends CI_Controller {
		public function __construct()
        {
            parent ::__construct();
            $this->load->model(["riwayat_model"]);
            $this->load->helper("date");
            $this->load->library("form_validation");
            if ($this->session->userdata('status') !="login")
            {
                redirect(site_url("login"));
            }
        }
        public function index()
        {	
        		$data["riwayat_pendidikan"] = $this->riwayat_model->getAll();
                $this->load->view('admin/riwayat/list-riwayat',$data);
        }
    }
?>      