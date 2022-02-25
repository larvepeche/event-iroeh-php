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
    private function getVersion()
    {
        // $cssVersion = 1.01;
        return 1.01;
    }
    public function index()
    {
        $data['cssVersion'] = $this->getVersion();
        $this->load->helper('url');
        $this->load->view('index', $data);
    }
    public function inscription()
    {
        $data['cssVersion'] = $this->getVersion();
        $this->load->helper('url');
        $this->load->view('pages/inscription', $data);
    }

    public function addEventMember()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('firstName', 'firstName', 'required');
        $this->form_validation->set_rules('lastName', 'lastName', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $data['cssVersion'] = $this->getVersion();
        $data['state'] = "ok";
        if ($this->form_validation->run() == FALSE) {
            $data['state'] = "nope";
            $this->load->view('pages/inscription', $data);
        } else {
            $this->load->view('pages/inscription', $data);
        }
    }
}
