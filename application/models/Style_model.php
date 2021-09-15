<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Style_model extends CI_Model
{
    /**
     * menyimpan data ke tabel
     *
     * @param array $object
     * @return void
     */
    public function save(array $object)
    {
        $this->db->insert('leadership_style', $object);
    }

    /**
     * mengambil data leadership style dengan kondisi where
     *
     * @param array $where array dari data yang mau di ambil
     * @return void
     */
    public function get_where(array $where)
    {
        return $this->db->get_where('leadership_style', $where);
    }
}