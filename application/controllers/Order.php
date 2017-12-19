<?php

class Order extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('items_model');
        $this->load->model('order_model');
        $this->load->model('categories_model');
//        $this->load->model('order_items_model');
    }

    public function shop($order_id)
    {
        // TODO Check if order is completed


        // Check if category has been set
        if (null === $this->input->get('category'))
        {
            // If not get all items
            $data['items'] = $this->items_model->get_items();
        }
        else
        {
            // Else get items in selected category
            $data['items'] = $this->items_model->get_items($this->input->get('category'));
        }

        $data['categories'] = $this->categories_model->get_categories();
        $data['order_id'] = $order_id;

        $this->load->view('includes/header_view');
        $this->load->view('order/add_items_view', $data);
        $this->load->view('includes/footer_view');
    }

    public function new_order()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        // Validate form
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'required|min_length[10]|max_length[12]|numeric');
        $this->form_validation->set_rules('pickup_time', 'Pickup Time', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('includes/header_view');
            $this->load->view('order/new_order_view');
            $this->load->view('includes/footer_view');
        }
        else
        {
            $phone_number = $this->input->post('phone_number');
            $pickup_time = $this->input->post('pickup_time');
            $order_id = $this->order_model->create_order($phone_number, $pickup_time);
            redirect('order/shop/'.$order_id);
        }
    }

    public function order_complete()
    {

    }
}