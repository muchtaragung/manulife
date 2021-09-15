<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supporting_model extends CI_Model
{
    /**
     * menyimpan data ke tabel
     *
     * @param array $object
     * @return void
     */
    public function save(array $object)
    {
        $this->db->insert('supporting_behaviour', $object);
    }
}
