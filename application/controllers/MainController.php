<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MainController extends CI_Controller
{
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
	public $Inscriptiondata = [];
    public function __construct()
    {
		parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('EventMembers');
		$this->load->library('session');
		$this->Inscriptiondata['page'] = null;
    }

    private function getVersion()
    {
        // $cssVersion = 1.01;
        return 1.01;
    }
    public function index()
    {
        $data['cssVersion'] = $this->getVersion();
        $this->load->view('index', $data);
    }
    public function inscription($page = NULL)
    {
		if(isset($page)){
			$data['page'] = "pages/inscription-layouts/".$page.".php";
		}else{
			$data['page'] = "pages/inscription-layouts/form.php";
		}
        $data['cssVersion'] = $this->getVersion();
        $this->load->view('pages/inscription', $data);
    }

    public function addEventMember()
    {
        $this->form_validation->set_rules('firstName', 'prénom', 'required', 'test');
        $this->form_validation->set_rules('lastName', 'nom', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('age', 'age', '');
        $this->form_validation->set_rules('phone', 'telephone');
        $this->form_validation->set_rules('gender', 'genre');
        if ($this->form_validation->run() == FALSE) {
            $this->inscription();
        } else {
            $member = new EventMembers;
            $member->set(
                $this->input->post('firstName'),
                $this->input->post('lastName'),
                $this->input->post('email'),
                $this->input->post('age'),
                $this->input->post('phone'),
                $this->input->post('gender')
            );
            $member->insert();
			$this->session->set_userdata('member',$member);
			redirect(base_url("inscription/thankyou"));
        }
    }
}
