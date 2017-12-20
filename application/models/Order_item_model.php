<?php

class Order_item_model extends CI_Model
{
    // Add item to given order
    public function create_order_item($order_id, $item_id)
    {
        $data = array(
            'order_id' => $order_id,
            'item_id' => $item_id,
            'created_at' => date('Y-m-d H:i:s')
        );
        $this->db->insert('order_items', $data);
        $id = $this->db->insert_id();
        return $id;
    }
}