<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Motivation_model extends CI_Model
{
    /**
     * menyimpan data ke tabel
     *
     * @param array $object
     * @return void
     */
    public function save(array $object)
    {
        $this->db->insert('motivation', $object);
    }
}
