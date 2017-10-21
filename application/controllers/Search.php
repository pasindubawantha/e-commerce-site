<?php

class Search extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Item_Model');
    }

    public function searchItem() {
        $search = $this->input->post('search');
        $category = $this->input->post('category');
        $data['items'] = $this->Item_Model->getSearchItem($search, $category);
        $this->load->view('templates/header');
        $this->load->view('pages/search', $data);
        $this->load->view('templates/footer');
    }

}