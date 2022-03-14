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
    private function getPrice(){
        return "250 000";
    }
    private function getVersion()
    {
        // $cssVersion
        return 2.12;
    }
    public function index()
    {
        $data['cssVersion'] = $this->getVersion();
        $data['price'] = $this->getPrice();
        $this->load->view('index', $data);
    }
    public function inscription($page = NULL)
    {
		if(isset($page)){
			$data['page'] = "pages/inscription-layouts/".$page.".php";
		}else{
			$data['page'] = "pages/inscription-layouts/form.php";
		}
        $data['price'] = $this->getPrice();
        $data['cssVersion'] = $this->getVersion();
        $this->load->view('pages/inscription', $data);
    }

    public function addEventMember()
    {
        $age = [10, 90];
        $this->form_validation->set_rules('firstName', 'prénom', 'required', array('required' => 'Veuillez saisir votre prénom'));
        $this->form_validation->set_rules('lastName', 'nom', 'required', array('required' => 'Veuillez saisir votre nom'));
        $this->form_validation->set_rules('email', 'email', 'required|callback_check_email', array('required' => 'Veuillez saisir votre email'));
        $this->form_validation->set_rules(
            'age',
            'age',
            'required|greater_than[' . $age[0] . ']|less_than[' . $age[1] . ']',
            array('required' => 'Veuillez saisir votre age', 'greater_than' => 'age invalide', 'less_than' => 'age invalide')
        );
        $this->form_validation->set_rules('phone', 'telephone', 'required', array('required' => 'Veuillez saisir votre numéro de téléphone'));
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
            $id = $member->insert();
            $result = $member->setId($id);
			$this->session->set_userdata('member',$result);
			redirect(base_url("inscription/thankyou"));
        }
    }

    public function check_email($field_value)
    {
        if (!filter_var($field_value, FILTER_VALIDATE_EMAIL)) {
            $this->form_validation->set_message('check_email', '{field} non valide');
            return FALSE;
        } else {
            return TRUE;
        }
    }
}
