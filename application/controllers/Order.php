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
    public function add_item($order_id, $item_id)
    {
        // Check if order exists and isn't pending
        $order = $this->db->get_where('orders', array('id' => $order_id))->row_array();
        if (!isset($order) || $order['order_status_id'] != 1)
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
        $url = $_SERVER['HTTP_REFERER'];
        redirect($url);
    }

    // Removes a given item from the given order
    public function remove_item($order_id, $order_item_id)
    {
        // Check if order exists and isn't pending
        $order = $this->db->get_where('orders', array('id' => $order_id))->row_array();
        if (!isset($order) || $order['order_status_id'] != 1)
        {
            // 404 if order not found
            // TODO Custom error page for order that is not pending
            show_404();
            return;
        }

        $this->order_item_model->remove_order_item($order_item_id);
        $url = $_SERVER['HTTP_REFERER'];
        redirect($url);
    }

    // Displays form to input phone number and pickup time
    public function new_order()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        // Validate form
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'required|min_length[10]|max_length[12]|numeric');
        // TODO Validate pickup time is between open hours
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

    // Displays products and cart
    public function shop($order_id)
    {
        // TODO Check if order is not pending

        // Check if category has been set
        if (null === $this->input->get('category'))
        {
            // If not, get all items
            $data['items'] = $this->item_model->get_items();
        }
        else
        {
            // Else get items in selected category
            $data['items'] = $this->item_model->get_items($this->input->get('category'));
        }

        // Get the items already in this order.
        $sql = $this->db->query('SELECT OI.id, name, cost FROM items I, order_items OI WHERE I.id = OI.item_id AND OI.order_id = '.$order_id.';');
        $order_items = $sql->result_array();

        $data['categories'] = $this->category_model->get_categories();
        $data['order_id'] = $order_id;
        $data['order_items'] = $order_items;

        $this->load->view('includes/header_view');
        $this->load->view('order/add_items_view', $data);
        $this->load->view('includes/footer_view');
    }

    // Display view to enter payment option.
    public function pay_order()
    {
        //TODO
    }

    // Display view to confirm order and add notes to items.
    public function confirm_order()
    {
        //TODO
    }

    // Display view of completed order
    public function order_complete()
    {
        //TODO
    }
}