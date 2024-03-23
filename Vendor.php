<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vendor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Vendor_model"); //load model vendor
    }

    //method pertama yang akan di eksekusi
    public function index()
    {

        $data["title"] = "List Data Vendor";
        //ambil fungsi getAll untuk menampilkan semua data vendor
        $data["data_vendor"] = $this->Vendor_model->getAll();
        //load view header.php pada folder views/templates
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        //load view index.php pada folder views/vendor
        $this->load->view('vendor/index', $data);
        $this->load->view('templates/footer');
    }

    //method add digunakan untuk menampilkan form tambah data vendor
    public function add()
    {
        $Vendor = $this->Vendor_model; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($Vendor->rules()); //menerapkan rules validasi pada vendor_model
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada vendor_model
        if ($validation->run()) {
            $Vendor->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Vendor berhasil disimpan. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("vendor");
        }
        $data["title"] = "Tambah Data Vendor";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('vendor/add', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('vendor');

        $Vendor = $this->Vendor_model;
        $validation = $this->form_validation;
        $validation->set_rules($Vendor->rules());

        if ($validation->run()) {
            $Vendor->update();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Vendor berhasil disimpan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("vendor");
        }
        $data["title"] = "Edit Data Vendor";
        $data["data_vendor"] = $Vendor->getById($id);
        if (!$data["data_vendor"]) show_404();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('vendor/edit', $data);
        $this->load->view('templates/footer');
    }

    public function delete()
    {
        $id = $this->input->get('id');
        if (!isset($id)) show_404();
        $this->Vendor_model->delete($id);
        $msg['success'] = true;
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Vendor berhasil dihapus.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
        $this->output->set_output(json_encode($msg));
    }
}