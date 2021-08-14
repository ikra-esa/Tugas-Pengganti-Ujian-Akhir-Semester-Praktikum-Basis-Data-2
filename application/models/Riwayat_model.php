<?php defined ('BASEPATH') or exit ('NO Direct Script Access Allowed');
    class Riwayat_model extends CI_Model {
        private $_table ="riwayat_pendidikan";

        public $id_rp;
        public $id_pegawai;
        public $jenjang;
        public $nama_jenjang;
        public $tahun_lulus;
        
        public function rules () 
        {
            return [
                [
                    'field' => 'id_pegawai',
                    'labels' => 'id_pegawai',
                    'rules' => 'required' 
                ],
                [
                 'field' => 'jenjang',
                 'labels' => 'Jenjang',
                 'rules' => 'required' 
                ],
                [
                 'field' => 'nama_jenjang',
                 'labels' => 'Nama_jenjang',
                 'rules' => 'required'
                ],
                [
                 'field' => 'tahun_lulus',
                 'labels' => 'Tahun_lulus',
                 'rules' => 'required'
                ]
            ];
        }
        public function getAll()
        {
            $query = $this->db->query("SELECT riwayat_pendidikan.*,pegawai.* FROM riwayat_pendidikan,pegawai  WHERE riwayat_pendidikan.id_pegawai = pegawai.id_pegawai")->result();
            return $query;
        }
        public function store($id)
        {
            $id_pegawai = $id;
            $jenjang     = $this->input->post('jenjang');
            $nama_jenjang     = $this->input->post('nama_jenjang');
            $tahun_lulus     = $this->input->post('tahun');
            $data = [
                    'id_pegawai' => $id,
                    'jenjang' => $jenjang,
                    'nama_jenjang' => $nama_jenjang,
                    'tahun_lulus'=>$tahun_lulus
                    ];
            $this->db->insert($this->_table,$data);
        }
    }
?>