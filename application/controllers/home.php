<?php

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('includes/header_view');
        $this->load->view('home_view');
        $this->load->view('includes/footer_view');
    }
}
