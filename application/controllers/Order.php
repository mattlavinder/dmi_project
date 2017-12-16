<?php

class Order extends CI_Controller
{
    public function start()
    {
        $this->load->view('includes/header_view');
        $this->load->view('order/start_view');
        $this->load->view('includes/footer_view');
    }

    public function shop()
    {
        $this->load->view('includes/header_view');
        $this->load->view('order/add_items_view');
        $this->load->view('includes/footer_view');
    }
}