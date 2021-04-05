<?php
class M_Siswa extends CI_Model {
    function data_siswa(){
        $query = $this->db->query("select * from siswa");
        return $query;
    }

    function simpan(){
        $data = array('nisn' => $this->input->post('nisn'),
                'nis' => ($this->input->post('nis')),
                'nama' => ($this->input->post('nama')),
                'id_kelas' => ($this->input->post('id_kelas')),
                'alamat' => ($this->input->post('alamat')),
                'no_telp' => ($this->input->post('no_telp')),
                'id_spp' => $this->input->post('id_spp'));
        $insert = $this->db->insert('siswa',$data);
    }

    function hapus_data_siswa($id){
$query = $this->db->query("delete from siswa where nisn = '$id'");
if ($query > 0) {
$this->session->set_flashdata('suksessimpan','Data siswa Berhasil
Dihapus');
}else{
$this->session->set_flashdata('gagalsimpan','Data siswa Gagal
Dihapus');
    }
}
}
