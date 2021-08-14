<?php
    class dashboard extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            if ($this->session->userdata('status') !="login")
            {
                redirect(site_url("login"));
            }
        }  
        public function index()
        {
            //load view dashboard.php
            $this->load->view("dashboard");
        }
    }
?>