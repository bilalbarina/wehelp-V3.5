<?php

class Home extends CIF_Controller {

    public $layout = 'full';
    public $module = 'home';
    public $model = 'Faqs_model';

    public function __construct() {
        parent::__construct();
        $this->load->model($this->model);
        $this->_primary_key = $this->{$this->model}->_primary_keys[0];
    }

    public function index() {
        $data['categories'] = $this->db
                ->get('categories')
                ->result();

        $data['faqs'] = $this->db
                ->order_by('faq_id', 'desc')
                ->where('faqs.status !=', '1')
                ->limit('16')
                ->get('faqs')
                ->result();


        $this->load->view($this->module, $data);
    }

    public function search($offset = 0) {
        $count = $this->db
                        ->select("COUNT(*) AS count")
                        ->like('question', $this->input->get('question'), 'both')
                        ->where('faqs.status !=', '1')
                        ->get('faqs')
                        ->row()->count;
        $this->data['count'] = $count;
        // PAGINATION
        config('pagination_limit', 12);
        $this->load->library('pagination');
        $config['base_url'] = site_url('home/search/');
        $config['total_rows'] = $count;
        $config['per_page'] = config('pagination_limit');
        $config['reuse_query_string'] = TRUE;
        if ($this->uri->segment(2))
            $this->db->offset = $offset;
        $this->pagination->initialize($config);
        $this->data['pagination'] = $this->pagination->create_links();
        $this->db->limit($config['per_page'], $offset);
        $this->data['items'] = $this->db
                ->like('question', $this->input->get('question'), 'both')
                ->where('faqs.status !=', '1')
                ->get('faqs')
                ->result();
        $this->load->view('search', $this->data);
    }

    public function contact() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'lang:global_Full_Name', 'trim|required');
        $this->form_validation->set_rules('email', 'lang:global_Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('subject', 'lang:global_Subject', 'trim|required');
        $this->form_validation->set_rules('message', 'lang:global_Message', 'trim|required');
        $this->form_validation->set_rules('g-recaptcha-response', 'lang:Captcha', 'trim|required|callback_recaptcha');
        $data['success'] = false;
        if ($this->form_validation->run() === TRUE) {
            @mail(config('webmaster_email'), config('title'), ""
                            . "Full Name: $_POST[name]\n"
                            . "Email: $_POST[email]\n"
                            . "Subject: $_POST[subject]\n"
                            . "Message: $_POST[message]\n"
                            . "");
            $data['success'] = true;
        }
        $this->load->view('contact', $data);
    }

    public function recaptcha($str = '') {
//        $recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
        $google_url = "https://www.google.com/recaptcha/api/siteverify";
        $secret = config("google_secret_key");
        $ip = $_SERVER['REMOTE_ADDR'];
        $url = $google_url . "?secret=" . $secret . "&response=" . $str . "&remoteip=" . $ip;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_TIMEOUT, 10);
        curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
        $output = curl_exec($curl);
        curl_close($curl);
        $status = json_decode($output, true);

        //reCaptcha success check
//        if ($status['success']) {
//            return TRUE;
//        } else {
//           $this->form_validation->set_message('recaptcha', 'The reCAPTCHA field is telling me that you are a robot. Shall we give it another try?');
//      return FALSE;
//        }
    }

}
