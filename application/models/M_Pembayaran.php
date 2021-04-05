<?php
class M_Pembayaran extends CI_Model {
    function data_pembayaran(){
        $query = $this->db->query("select * from pembayaran");
        return $query;
    }

    function simpan(){
        $data = array('id_pembayaran' => $this->input->post('id_pembayaran'),
                'id_petugas' => $this->input->post('id_petugas'),
                'nisn' => $this->input->post('nisn'),
                'tgl_bayar' => $this->input->post('tgl_bayar'),
                 'bulan_dibayar' => $this->input->post('bulan_dibayar'),
                 'tahun_dibayar' => $this->input->post('tahun_dibayar'),
                'id_spp' => $this->input->post('id_spp'),
                'nominal' => $this->input->post('nominal'));
        $insert = $this->db->insert('pembayaran',$data);
    }

    function data_pembayaran_by_id($id){
        $query = $this->db->query("select * from pembayaran where id_pembayaran = '$id'"); 
      return $query;
    }

     function update(){
        $where = array('id_spp'=> $this->input->post('id_spp'));
         $data1 = array('id_spp' => $this->input->post('id_spp'),
                        'tahun' => $this->input->post('tahun'),
                       'nominal' => $this->input->post('nominal'));
        $data2 = array('id_spp' => $this->input->post('id_spp'),
                         'tahun' => $this->input->post('tahun'),
                         'nominal' => $this->input->post('nominal'));
         if (empty($this->input->post('nominal'))) {
         $this->db->where($where);
         $query = $this->db->update('spp',$data2);
         }else{
        $this->db->where($where);
         $query = $this->db->update('spp',$data1);
         }
        if ($query > 0) {
         $this->session->set_flashdata('suksessimpan','Data SPP Berhasil Diperbaharui');
         }
     }

    function hapus_data_pembayaran($id){
        $query = $this->db->query("delete from pembayaran where id_spp = '$id'");
         if ($query > 0) {
         $this->session->set_flashdata('suksessimpan','Data SPP Berhasil Dihapus');
     }else{
         $this->session->set_flashdata('gagalsimpan','Data SPP Gagal Dihapus');
         }
    
 }
}