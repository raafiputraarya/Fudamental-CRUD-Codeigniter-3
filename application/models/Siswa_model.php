<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); // Memastikan database diload
    }

    // Mengambil semua data siswa
    public function get_all_siswa() {
        return $this->db->get('siswa')->result_array(); // Mengembalikan array asosiatif
    }

    // Mengambil data siswa berdasarkan ID
    public function get_siswa_by_id($id) {
        $query = $this->db->get_where('siswa', ['id' => $id]);
        return ($query->num_rows() > 0) ? $query->row_array() : null; // Jika tidak ada, kembalikan NULL
    }

    // Menambahkan siswa baru ke database
    public function insert_siswa($data) {
        $data = [
            'nama'   => htmlspecialchars($data['nama']),
            'alamat' => htmlspecialchars($data['alamat']),
            'no_hp'  => htmlspecialchars($data['no_hp'])
        ];
        $this->db->insert('siswa', $data);
        return $this->db->insert_id(); // Mengembalikan ID siswa yang baru ditambahkan
    }

    // Mengupdate data siswa berdasarkan ID
    public function update_siswa($id, $data) {
        $data = [
            'nama'   => htmlspecialchars($data['nama']),
            'alamat' => htmlspecialchars($data['alamat']),
            'no_hp'  => htmlspecialchars($data['no_hp'])
        ];
        $this->db->where('id', $id);
        $this->db->update('siswa', $data);
        return $this->db->affected_rows(); // Mengembalikan jumlah baris yang berubah
    }

    // Menghapus siswa berdasarkan ID
    public function delete_siswa($id) {
        $this->db->where('id', $id);
        $this->db->delete('siswa');
        return $this->db->affected_rows(); // Mengembalikan jumlah baris yang terhapus
    }
}
?>
