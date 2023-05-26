<?php 
/**
 * 
 */
class Home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Mahasiswa');
	}

	public function index(){
		$queryAllMahasiswa = $this->M_Mahasiswa->getDataMahasiswa();
		$data = array('queryAllMhs' => $queryAllMahasiswa);
		$this->load->view('home', $data);
	}

	public function halaman_tambah()
	{
		$this->load->view('halaman_tambah_mhs');
	}

	public function fungsi_tambah(){
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$jurusan = $this->input->post('jurusan');

		$arrInsert = array (
			'nim' => $nim,
			'nama' => $nama,
			'jurusan' => $jurusan,
		);

		$this->M_Mahasiswa->insertDataMahasiswa($arrInsert);
		redirect(base_url(''));
	}


	public function halaman_edit($nim)
	{
		$queryMahasiswaDetail = $this->M_Mahasiswa->getDataMahasiswaDetail($nim);
		$data = array('queryMhsDetail' => $queryMahasiswaDetail);
		$this->load->view('halaman_edit_mhs', $data);
	}

	public function fungsiEdit()
	{
		$nim = $this->input->post('nim');
	    $nama = $this->input->post('nama');
	    $jurusan = $this->input->post('jurusan');
	    $arrUpdate = array(
	        'nama' => $nama,
	        'jurusan' => $jurusan
	    );
	    $this->M_Mahasiswa->updateDataMahasiswa($nim, $arrUpdate);
	    redirect(base_url(''));
	}

}

 ?>