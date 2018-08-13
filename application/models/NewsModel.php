<?php
/**
 * Created by PhpStorm.
 * User: trantrinh1102
 * Date: 13/08/2018
 * Time: 11:13
 */

class NewsModel extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function getNews($slug = false)
    {
        if ($slug === false)
        {
            $query = $this->db->get('news');
            return $query->result_array();
        }

        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->row_array();

    }

    public function setNew()
    {
        $this->load->helper('url');
        $slug = url_title($this->input->post('title'), 'dash', true);
        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text')
        );

        return $this->db->insert('news', $data);
    }
}