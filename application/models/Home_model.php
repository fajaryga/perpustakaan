<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model
{

    public function stats(){
        $this->db->select('*');
        $this->db->from('sts_library_statistic');
        $this->db->where('id IN (SELECT MAX(id) FROM `sts_library_statistic`)');
        $query = $this->db->get();
        return $query->result();
    }

    public function testi() {
     $this->db->select('*');
     $this->db->from('testimony');
     $this->db->join('sys_file','testimony.sys_file_id=sys_file.id');
     $query = $this->db->get();
     return $query->result();
    }

    public function banner(){
     $this->db->select('*');
     $this->db->from('bnn_banner');
     $this->db->join('sys_file','bnn_banner.sys_file_id=sys_file.id','orderby order');
     $query = $this->db->get();
     return $query->result();
    }

    public function gallery(){
     $this->db->select('*');
     $this->db->from('gll_gallery');
     $this->db->join('gll_category','gll_gallery.gll_category_id=gll_category.id');
     $this->db->join('gll_image','gll_image.gll_gallery_id=gll_image.id');
     $this->db->join('sys_file','gll_image.sys_file_id=sys_file.id');
     $this->db->limit(6);
     $query = $this->db->get();
     return $query->result();
    }

    public function event(){
        $query = $this->db->query("select SUBSTRING(description,1,100) as content,DATE_FORMAT(start_date, '%d') as tanggal,DATE_FORMAT(start_date, '%M,%Y') as blnthn,permalink,title from evn_event ORDER BY id desc LIMIT 3");
        return $query->result();
    }


}