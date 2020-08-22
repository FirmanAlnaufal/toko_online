<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_barang');
	}

	public function index()
	{
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('dashboard', $data);
		$this->load->view('template/footer');
	}

	public function tambah_ke_keranjang($id)
	{
		$barang = $this->model_barang->find($id);

		$data = array(
			'id' => $barang->id_barang,
			'qty' => 1,
			'price' => $barang->harga,
			'name' => $barang->nama_brg
		);
		$this->cart->insert($data);
		redirect('dashboard');
	}

	public function detail_keranjang()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('keranjang');
		$this->load->view('template/footer');
	}

	public function hapus_keranjang()
	{
		$this->cart->destroy();
		redirect('dashboard/index');
	}

	public function pembayaran()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pembayaran');
		$this->load->view('template/footer');
		
	}

	public function proses_pesanan()
	{
		$is_processed = $this->model_invoice->index();
		if($is_processed){
		$this->cart->destroy();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('proses_pesanan');
		$this->load->view('template/footer');
		}else{
			echo "maaf,	pesanan anda gagal di proses!";
		}
	}

	public function detail($id_brg)
	{
		$data['barang'] = $this->model_barang->detail_brg($id_brg);
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('detail_barang',$data);
		$this->load->view('template/footer');
	}
}
