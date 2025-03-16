<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Siswa_model'); // Load model sekali di constructor
        $this->load->helper('url'); // Load helper URL untuk redirect & site_url()
        $this->load->library('form_validation'); // Load library form validation
    }

    // Menampilkan daftar siswa
    public function index() {
        $data['siswa'] = $this->Siswa_model->get_all_siswa();
        $this->load->view('siswa_list', $data); // Pastikan ada file siswa_list.php di views
    }

    public function tambah(){
        $this->load->view('tambah_siswa');
    }
    // Menampilkan form edit berdasarkan ID
    public function edit($id) {
        $data['siswa'] = $this->Siswa_model->get_siswa_by_id($id);

        if (!$data['siswa']) {
            show_404(); // Jika data tidak ditemukan, tampilkan halaman 404
        }

        $this->load->view('edit_siswa', $data);
    }

    public function simpan() {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_hp', 'No HP', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->tambah(); // Jika validasi gagal, kembali ke form tambah
        } else {
            $data = [
                'nama'   => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'no_hp'  => $this->input->post('no_hp')
            ];
            $this->Siswa_model->insert_siswa($data); // Simpan ke database
            redirect('siswa'); // Redirect ke halaman utama siswa
        }
    }

    // Proses update data siswa
    public function update($id) {
        // Validasi form sebelum update
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_hp', 'No HP', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->edit($id); // Jika validasi gagal, kembali ke form edit
        } else {
            $data = [
                'nama'   => $this->input->post('nama', TRUE), // TRUE untuk mencegah XSS
                'alamat' => $this->input->post('alamat', TRUE),
                'no_hp'  => $this->input->post('no_hp', TRUE)
            ];
            
            $this->Siswa_model->update_siswa($id, $data);
            redirect('siswa'); // Redirect ke halaman siswa
        }
    }

    // Menghapus data siswa berdasarkan ID
    public function hapus($id) {
        if ($this->Siswa_model->delete_siswa($id)) {
            redirect('siswa');
        } else {
            show_404();
        }
    }
}
?>
