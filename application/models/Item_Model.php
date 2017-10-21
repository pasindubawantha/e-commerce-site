<?php

class Item_Model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function getLatestDesigns()
    {
        $this->db->select('id, name, description, price');
        $query = $this->db->get('Item');
        if ($query) {
            return $query->result();
        }

    }

    public function getSpecialOffers()
    {
        $this->db->select('id, name, description, price');
        $query = $this->db->get('Item');
        if ($query) {
            return $query->result();
        }

    }

    public function getCollections()
    {
        $this->db->select('id, name, description, price');
        $query = $this->db->get('Item');
        if ($query) {
            return $query->result();
        }

    }

    public function getSearchItem($search, $category) {
        //search query goes here
        //dummy query
        $this->db->select('id, name, description, price');
        $query = $this->db->get('Item');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        else {
            return 0;
        }
    }
}