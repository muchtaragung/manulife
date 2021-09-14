<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public function get_user($where)
    {
        return $this->db->where($where)->get('user');
    }
}
