<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagination extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Pmodel');
        $this->load->library('pagination');
    }

    public function all_data($page = 0) {
    
        $config = array();
        $config["base_url"] = base_url('index.php/Pagination/all_data');
        $config["total_rows"] = $this->db->count_all('user_data'); 
        $config["per_page"] = 6; 
        $config["uri_segment"] = 3; // in codeigiter the segement1-> controller, segement2->method and segement3-> page number
                                       // in codeigniter it says tht the uri_segments are 
        
        $config['full_tag_open'] = '<ul class="pagination">'; // this specifies opening tag for the entire pagination block
        $config['full_tag_close'] = '</ul>';    // this specifies closing tag for the entire pagination block
        $config['first_tag_open'] = '<li>';  // this specifies open tag for the first page of pagination block
        $config['first_tag_close'] = '</li>';   // this specifies closing tag for the first page of pagination block
        $config['last_tag_open'] = '<li>';     // this specifies opening tag for last page of pagination block
        $config['last_tag_close'] = '</li>';  // this specifies closing tag for last page of pagination block
        $config['next_tag_open'] = '<li>';    // this specifies opening  tag for the next page of pagination block
        $config['next_tag_close'] = '</li>';   // this specifies closing tag for the next page of pagination block
        $config['prev_tag_open'] = '<li>';   // this specifies opening tag for the previous page of pagination block
        $config['prev_tag_close'] = '</li>';  // this specifies closing tag for the previous page of pagination block
        $config['cur_tag_open'] = '<li class="active"><a href="#">';// this specifies opening tag for current page 
        $config['cur_tag_close'] = '</a></li>';  // this specifies closing tag for current page of pagination page
        $config['num_tag_open'] = '<li>';   //  this specifies opening tag for number of pages of pagination page
        $config['num_tag_close'] = '</li>';  // this specifies closing tag for number of pages of pagination page.
       

        $this->pagination->initialize($config);

    
        $data['arr'] = $this->Pmodel->all_data_with_limit($config["per_page"], $page);

        
        $data["pagination_links"] = $this->pagination->create_links();

           $this->load->view('Pview', $data);
    }
}
?>
