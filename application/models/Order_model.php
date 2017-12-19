<?php
class Order_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    // Get order by given order_id
    public function get_order($order_id = FALSE)
    {

    }

    // Create a new order with the given phone_number and pickup_time.
    // All other order values are default.
    public function create_order($phone_number, $pickup_time)
    {
        $pickup = date('Y-m-d', time()).' '.$pickup_time;
        $data = array(
                'payment_types_id' => '1',
                'phone_number' => $phone_number,
                'order_status_id' => '',
                'pickup_datetime' => $pickup,
                'total' => '',
                'is_paid' => '0',
                'created_at' => date('Y-m-d H:i:s')
        );
        $this->db->insert('orders', $data);
        $id = $this->db->insert_id();
        return $id;
    }
}