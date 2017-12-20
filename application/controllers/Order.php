<?php

class Order extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('item_model');
        $this->load->model('order_model');
        $this->load->model('category_model');
        $this->load->model('order_item_model');
    }

    // Add given item to given order
    public function add_item_to_order($order_id, $item_id)
    {
        // Check if order exists and isn't pending
        $order = $this->db->get_where('orders', array('id' => $order_id))->row_array();
        if (!isset($order) || $order['order_status_id'] == 1)
        {
            // 404 if order not found
            // TODO Custom error page for order that is not pending
            show_404();
            return;
        }

        // Check if item exists
        $item = $this->db->get_where('items', array('id' => $item_id))->row_array();
        if (!isset($item))
        {
            // 404 if order not found
            // TODO Custom error for item that is not found and redirect to order page
            show_404();
            return;
        }

        $this->order_item_model->create_order_item($order_id, $item_id);
        redirect('/order/shop/'.$order_id);
    }

    public function shop($order_id)
    {
        // TODO Check if order is not pending


        // Check if category has been set
        if (null === $this->input->get('category'))
        {
            // If not get all items
            $data['items'] = $this->item_model->get_items();
        }
        else
        {
            // Else get items in selected category
            $data['items'] = $this->item_model->get_items($this->input->get('category'));
        }

        $data['categories'] = $this->category_model->get_categories();
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