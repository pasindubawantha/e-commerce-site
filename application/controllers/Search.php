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
        $data['site'] = $this->Site_model->getAllSiteData();
        $this->load->view('templates/header',$data);
        $this->load->view('pages/search', $data);
        $this->load->view('templates/footer');
    }

}
