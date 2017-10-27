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
        $query = "SELECT * FROM Item WHERE name LIKE '%$search%' OR description LIKE '%$search%' OR price LIKE '%$search%' ";
        if ($category != NULL) {
            $query = $query . "HAVING category_id = '$category'";
        }
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result->result();
        }
        else {
            return false;
        }

    }

    public function getSingleItem($id) {
        $query = $this->db->get_where('Item', array('id' => $id));
        if ($query->num_rows() > 0) {
            return $query->row();
        }
        else {
            return 0;
        }
    }

    public function getSingleItemImg($id) {
        return 1;
    }
}