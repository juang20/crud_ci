<?Php
Defined('BASEPATH') OR Exit('No Direct Script Access Allowed');

Class M_Mahasiswa Extends CI_Model {

    Function getDataMahasiswa() {
        $query = $this->db->get('tb_mahasiswa');
        return $query->result();
    }

    function insertDataMahasiswa($data) {
    	$this->db->insert('tb_mahasiswa', $data);
    }

    function GetDataMahasiswaDetail($nim) {
        $this->db->where('nim', $nim);
        $query = $this->db->get('tb_mahasiswa');
        return $query->row();
    }

    function updateDataMahasiswa($nim, $data){
        $this->db->where('nim', $nim);
        $this->db->update('tb_mahasiswa', $data);
    }
}

/* End Of File M_Mahasiswa.Php */
/* Location: ./Application/Models/M_Mahasiswa.Php */