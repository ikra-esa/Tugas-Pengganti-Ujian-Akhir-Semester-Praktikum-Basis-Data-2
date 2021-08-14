<?php defined ('BASEPATH') or exit ('NO Direct Script Access Allowed');
    class Pegawai_model extends CI_Model {
        private $_table ="pegawai";
        

        public $nama;
        public $Tgl_Lahir;
        public $telp;

        public function rules () 
        {
            return [
                [
                 'field' => 'nama',
                 'labels' => 'Nama',
                 'rules' => 'required' 
                ],
                [
                 'field' => 'tgl_lahir',
                 'labels' => 'Tgl_Lahir',
                 'rules' => 'required'
                ],
                [
                    'field' => 'jenis_kelamin',
                    'labels' => 'Jenis_Kelmin',
                    'rules' => 'required'
                ],
                [
                 'field' => 'telp',
                 'labels' => 'Telp',
                 'rules' => 'required'
                ]
            ];
        }

        public function getAll()
        {
            $this->db->select(array('bagian.bagian','pegawai.*','agama.agama','bagian.gaji'));
            $this->db->from('pegawai');
            $this->db->join('bagian', 'bagian.id_bagian = pegawai.id_bagian');
            $this->db->join('agama','agama.id_agama = pegawai.id_agama');

            $query = $this->db->get();
            // var_dump($query->result());
            return $query->result();
        }
        public function getById($id)
        {
            return $this->db->get_where($this->_table, ["id_pegawai" => $id] )->row();
        }
        public function store()
        {
            $nama  = $this->input->post('nama');
            $tgl_lahir = date('Y/m/d');
            $telp        =  $this->input->post('telp');
            $Jenis_Kelamin     =     $this->input->post('jenis_kelamin');
            $agama     = $this->input->post('agama');
            // $jenjang     = $this->input->post('jenjang');
            // $nama_jenjang     = $this->input->post('nama_jenjang');
            // $tahun_lulus     = $this->input->post('tahun');
            $bagian     = $this->input->post('bagian');
            // $gaji     = $this->input->post('gaji');
            
            
            $id_pegawai = $this->input->post('id_pegawai');
            // $iduser    = $this->session->userdata('id');
            $data = [
                    'nama' =>$nama,
                    'Tgl_Lahir'=>$tgl_lahir,
                    'telp'=>$telp,
                    'jenis_kelamin'=>$Jenis_Kelamin,
                    'id_agama' => $agama,
                    // 'jenjang' => $jenjang,
                    // 'nama_jenjang' => $nama_jenjang,
                    // 'tahun_lulus'=>$tahun_lulus,
                    'id_bagian'  =>$bagian,
                    // 'gaji' => $gaji,
                    
                    
                    'id_pegawai'      =>$id_pegawai
                    ];
            $this->db->insert($this->_table,$data);
            return $this->db->insert_id();
        }

        
        public function update()
        {
            $post = $this->input->post();
            $this->id_pegawai = $post["id"];
            $this->nama = $post["nama"];
            $this->Tgl_Lahir = $post["tgl_lahir"];
            $this->telp = $post["telp"];
            $this->Jenis_Kelamin = $post["jenis_kelamin"];
            $this->id_agama = $post["agama"];
            $this->id_bagian = $post["bagian"];
            return $this->db->update($this->_table, $this, array('id_pegawai' => $post['id']));
 
        }
        public function delete($id)
        {
            return $this->db->delete($this->_table, array("id_pegawai" => $id));
        }

        // public $tgl;
        // public $jumlah;
        // public $price;

//         public function getAll()
//         {
//             $this->db->select(array('product.name','transaksi.*'));
//             $this->db->from('transaksi');
//             $this->db->join('product','product.product_id = transaksi.product_id');
//             $query = $this->db->get();

//             return $query->result();
//         }
//         public function store(){
//             $kode  = $this->input->post('kode');
//             $product     = $this->input->post('product');

//             $qty          = $this->input->post('jumlah');
//             $tgl          = date('Y/m/d');
//             $iduser    = $this->session->userdata('id');
//             $price = $this->input->post('total') / $qty;
//             $data = [
//                     'kode_transaksi' =>$kode,
//                     'product_id'    =>$product,
//                     'tgl'=>$tgl,
//                     'jumlah'         =>$qty,
//                     'price' => $price,
//                     'user_id'      =>$iduser
//                 ];
//             $this->db->insert($this->_table,$data);
//             $this->session->set_flashdata('success', 'Transaksi Berhasil disimpan');
//         }
    }
?>