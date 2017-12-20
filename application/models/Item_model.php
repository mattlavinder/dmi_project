<?php

class Item_model extends CI_Model
{
    // Get all items with the given category
    public function get_items($category = FALSE)
    {
        if ($category === FALSE)
        {
            $query = $this->db->get('items');
            return $query->result_array();
        }

        $query = $this->db->get_where('items', array('item_category_id' => $category));
        return $query->result_array();
    }
}