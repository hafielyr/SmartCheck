<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checker extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function socialMediaCheck()
	{
		$this->load->view('admin/socialmedia_checker');
	}
  public function twitterCheck()
	{
		$this->load->view('admin/twitter_checker');
	}
  public function facebookCheck()
	{
		$this->load->view('admin/facebook_checker');
	}
	public function ltcriminalCheck()
	{
		$this->load->view('admin/ltcriminal_checker');
	}
	public function eduCheck($userid)
	{
		$userid = 'bahrulhikmi';
		$params = array(
			'name' => 'bahrul hikmi',
			'university' => 'Universitas Andalas',
			'degree' => 'S1',
			'prodi' => 'Teknik Industri'
		);

		$url = service_url."/checkdikti?" . http_build_query($params);
		$file = service_file_dir."/edu_$userid.json";
		$data['data'] = $this->getData($file, $url, false);

		$this->load->view('admin/edu_checker', $data);
	}

	public function getData($file, $url, $refresh)
	{
		if(file_exists($file) and !$refresh)
		{
			$json = file_get_contents($file);	
		}
		else{			
			$json = file_get_contents($url);
			$fp = fopen($file, 'w');
			fwrite($fp, $json);
			fclose($fp);
			$json = file_get_contents($file);	
		}

		return json_decode($json,true);	
	}
}
