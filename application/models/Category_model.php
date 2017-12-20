<?php

class Category_model extends CI_Model
{
    // Get all categories in DB
    public function get_categories()
    {
        $this->db->select('id, name');
        $query = $this->db->get('item_categories');
        return $query->result_array();
    }
}