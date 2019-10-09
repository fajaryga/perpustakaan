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
     $this->db->join('sys_file','bnn_banner.sys_file_id=sys_file.id');
     $this->db->order_by('order', 'ASC');
     $this->db->where('is_active', 1);
     $query = $this->db->get();
     return $query->result();
    }

    public function gallery(){
     $this->db->select('*');
     $this->db->from('gll_gallery');
     $this->db->join('gll_category','gll_gallery.gll_category_id=gll_category.id');
     $this->db->join('gll_image','gll_image.gll_gallery_id=gll_image.id');
     $this->db->join('sys_file','gll_image.sys_file_id=sys_file.id');
     $this->db->where('is_active', 1);
     $this->db->limit(6);
     $query = $this->db->get();
     return $query->result();
    }

    public function event(){
        $query = $this->db->query("select SUBSTRING(description,1,100) as content,DATE_FORMAT(start_date, '%d') as tanggal,DATE_FORMAT(start_date, '%M,%Y') as blnthn,permalink,title from evn_event ORDER BY id desc LIMIT 3");
        return $query->result();
    }

    public function koleksi(){
     $this->db->select('title, auth_name, file_name');
     $this->db->from('cll_book_collection');
     $this->db->join('sys_file','cll_book_collection.sys_file_id=sys_file.id');
     $this->db->where('is_active', 1);
     $this->db->order_by('cll_book_collection.id', 'DESC');
     $this->db->limit(6);
     $query = $this->db->get();
     return $query->result();
    }

    public function berita(){
     $this->db->select('SUBSTRING(description,1,25) as content,DATE_FORMAT(nws_news.created_at, "%d %M %Y") as tanggal,DATE_FORMAT(nws_news.created_at, "%T") as jam,permalink, SUBSTRING(title,1,25) as judul, file_name');
     $this->db->from('nws_news');
     $this->db->join('sys_file','nws_news.sys_file_id=sys_file.id');
     $this->db->where('is_active', 1);
     $this->db->order_by('nws_news.id', 'DESC');
     $this->db->limit(4);
     $query = $this->db->get();
     return $query->result();
    }

    public function slider(){
     $this->db->select('*');
     $this->db->from('sld_slider');
     $this->db->join('sys_file','sld_slider.sys_file_id=sys_file.id');
     $this->db->order_by('is_active','DESC');
     $query = $this->db->get();
     return $query->result();
    } //note order & active
    
    public function profil(){
     $this->db->select("permalink,LEFT(contents,900) as content");
     $this->db->from('pag_page');
     $this->db->where('id=1');
     $query = $this->db->get();
     return $query->result();
    }


}