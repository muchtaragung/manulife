<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peserta_model extends CI_Model
{
    private $table = 'peserta';
    /**
     * menyimpan data ke tabel
     *
     * @param array $object
     * @return void
     */
    public function save(array $object)
    {
        $this->db->insert($this->table, $object);
    }

    /**
     * mengambil data tabel dengan kondisi where
     *
     * @param array $where array dari data yang mau di ambil
     * @return void
     */
    public function get_where(array $where)
    {
        return $this->db->get_where($this->table, $where);
    }

    public function get()
    {
        return $this->db->get($this->table);
    }
}
