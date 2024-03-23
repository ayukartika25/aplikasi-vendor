
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vendor_model extends CI_Model
{
    private $table = 'vendor';

    //validasi form, method ini akan mengembailkan data berupa rules validasi form       
    public function rules()
    {
        return [
            [
                'field' => 'KodeVendor',  //samakan dengan atribute name pada tags input
                'label' => 'Kode Vendor',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required|is_unique[vendor.kodevendor]' //rules validasi
            ],
            [
                'field' => 'NamaVendor',
                'label' => 'Nama Vendor',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'Deskripsi',
                'label' => 'Deskripsi',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'Alamat',
                'label' => 'Alamat',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'Kota',
                'label' => 'Kota',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'Provinsi',
                'label' => 'Provinsi',
                'rules' => 'trim|required'
            ]
        ];
    }

    //menampilkan data mahasiswa berdasarkan id mahasiswa
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["Id" => $id])->row();
        //query diatas seperti halnya query pada mysql 
        //select * from mahasiswa where IdMhsw='$id'
    }

    //menampilkan semua data mahasiswa
    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("Id", "desc");
        $query = $this->db->get();
        return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from mahasiswa order by IdMhsw desc
    }

    //menyimpan data mahasiswa
    public function save()
    {
        $data = array(
            "KodeVendor" => $this->input->post('KodeVendor'),
            "NamaVendor" => $this->input->post('NamaVendor'),
            "Deskripsi" => $this->input->post('Deskripsi'),
            "Alamat" => $this->input->post('Alamat'),
            "Kota" => $this->input->post('Kota'),
            "Provinsi" => $this->input->post('Provinsi')
        );
        return $this->db->insert($this->table, $data);
    }

    //edit data mahasiswa
    public function update()
    {
        $data = array(
            "KodeVendor" => $this->input->post('KodeVendor'),
            "NamaVendor" => $this->input->post('NamaVendor'),
            "Deskripsi" => $this->input->post('Deskripsi'),
            "Alamat" => $this->input->post('Alamat'),
            "Kota" => $this->input->post('Kota'),
            "Provinsi" => $this->input->post('Provinsi')
        );
        return $this->db->update($this->table, $data, array('Id' => $this->input->post('Id')));
    }

    //hapus data mahasiswa
    public function delete($id)
    {
        return $this->db->delete($this->table, array("Id" => $id));
    }
}