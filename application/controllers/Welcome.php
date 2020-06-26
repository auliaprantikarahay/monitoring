<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MSudi');
	}

	public function index()
	{
		if($this->session->userdata('Login'))
		{
			$data['content']='VBlank';
			$this->load->view('VBackend',$data);
		}
		else
		{
			 redirect(site_url('Login'));
		}

	}

	public function ListAplikasi()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$id_aplikasi=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('aplikasi','id_aplikasi',$id_aplikasi)->row();
			$data['detail']['id_aplikasi']= $tampil->id_aplikasi;
            		$data['detail']['nama']= $tampil->nama;
            		$data['detail']['url']= $tampil->url;
            		$data['detail']['user_aplikasi']= $tampil->user_aplikasi;
            		$data['detail']['date']= $tampil->date;
			$data['content']='UpdateAplikasi';
		}
		else
		{	
			$data['ListAplikasi']=$this->MSudi->GetData('aplikasi');
			$data['content']='Aplikasi';
		}


		$this->load->view('VBackend',$data);
	}


	public function FormTambahAplikasi()
	{
		$data['content']='TambahAplikasi';
		$this->load->view('VBackend',$data);
	}
	public function TambahAplikasi()
	{
		 $add['id_aplikasi']=$this->input->post('id_aplikasi');
         	 $add['nama']= $this->input->post('nama');
         	 $add['url']= $this->input->post('url');
		 $add['user_aplikasi']=$this->input->post('user_aplikasi');
         	 $add['date']= $this->input->post('date');  
        	 $this->MSudi->AddData('aplikasi',$add);
        	 redirect(site_url('Welcome/ListAplikasi'));
	}



	public function UpdateAplikasi()
	{
		 $id_aplikasi=$this->input->post('id_aplikasi');
		 $update['nama']= $this->input->post('nama');
         	 $update['url']= $this->input->post('url');
		 $user_aplikasi=$this->input->post('user_aplikasi');
		 $update['date']= $this->input->post('date');
          	 $this->MSudi->UpdateData('aplikasi','id_aplikasi',$id_aplikasi,$update);
		 redirect(site_url('Welcome/ListAplikasi'));
	}


	public function DeleteAplikasi()
	{
		 $id_aplikasi=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('aplikasi','id_aplikasi',$id_aplikasi);
        	 redirect(site_url('Welcome/ListAplikasi'));
	}


	
	public function Logout()
	{
		$this->load->library('session');
		$this->session->unset_userdata('Login');
		redirect(site_url('Login'));
	}

}