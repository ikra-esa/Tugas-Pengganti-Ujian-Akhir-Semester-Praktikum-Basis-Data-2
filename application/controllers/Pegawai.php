<?php
defined ('BASEPATH') OR exit ('NO Direct Script Access Allowed');
class Pegawai extends CI_Controller {
		public function __construct()
        {
            parent ::__construct();
            $this->load->model(["pegawai_model","riwayat_model"]);
            $this->load->helper("date");
            $this->load->library("form_validation");
            if ($this->session->userdata('status') !="login")
            {
                redirect(site_url("login"));
            }
        }
        public function index()
        {	
        		$data["pegawai"] = $this->pegawai_model->getAll();
                $this->load->view('admin/pegawai/list-pegawai',$data);
        }
        public function add()
        {
             $data["agama"] = $this->db->query("SELECT * FROM agama  ")->result();
             $data["bagian"] = $this->db->query("SELECT * FROM bagian  ")->result();
            // return $query;
            
            if ($this->input->method()=='post') 
            {
                $id = $this->pegawai_model->store();
                $this->riwayat_model->store($id);
            	$this->session->set_flashdata('success', ' Pegawai Berhasil disimpan');
            }
            	return $this->load->view('admin/pegawai/form-pegawai',$data);	
        }

        public function edit($id = null)
        {
            if(!isset($id)) redirect('pegawai');

            $pegawai = $this->pegawai_model;
            $validation = $this->form_validation;
            $validation->set_rules($pegawai->rules());

            if ($validation->run())
            {
                $pegawai->update();
                $this->session->set_flashdata('success', ' Berhasil disimpan');
            }
            $data["pegawai"] = $pegawai->getById($id);
            $data["agama"] = $this->db->query("SELECT * FROM agama ")->result();
            $data["bagian"] = $this->db->query("SELECT * FROM bagian ")->result();
            // $data["jenis_product"] = $this->jenis_model->getAll();
            if (!$data["pegawai"]) show_404();

            $this->load->view("admin/pegawai/edit-pegawai", $data);

        }
        public function delete($id=null)
        {
            if (!isset($id)) show_404();
        
            if ($this->pegawai_model->delete($id)) 
            {
            redirect(site_url('pegawai'));
            }
        }
        // 	$data["product"] = $this->product_model->getAll();
        // 	$data["kode"] = "TRS-".time();
        // 	if ($this->input->method()=='post') {
        //     	$this->transaksi_model->store();
        //     	$this->session->set_flashdata('success', ' Pegawai Berhasil disimpan');
	    //     }
        // 	return $this->load->view('admin/transaksi/form-transaksi',$data);	
        // }
        
    }
?>