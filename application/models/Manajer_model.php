<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manajer_model extends CI_Model
{
    private $table = 'manajer';

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
        $this->db->select("*");
        $this->db->from($this->table);
        $this->db->where($where);
        $query = $this->db->get();
        return $query;
    }

    /**
     * mengambil semua data tabel
     *
     * @return void
     */
    public function get_all()
    {
        $this->db->select("*");
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query;
    }

    /**
     * mengupdate data.
     * arr data ada id nya
     * idnya yang di pake untuk where
     *
     * data yang di update juga ada arr data
     * @param array $data
     * @return void
     */
    public function update(array $data)
    {
        $where['id'] = $data['id'];

        return $this->db->where($where)->update($this->table, $data);
    }

    /**
     * mengupdate data
     * menggunakan where khusus
     *
     * @param [type] $where adalah data yang mana
     * @param [type] $data adalah data yang akan di update
     *
     * @return void
     */
    public function update_where($where, $data)
    {
        return $this->db->where($where)->update($this->table, $data);
    }

    /**
     * menghapus data
     * arr where adalah id dari kolom yang akan di hapus
     *
     * @param array $where
     * @return void
     */
    public function delete(array $where)
    {
        return $this->db->delete($this->table, $where);
    }

    /**
     * mengambil data dengan join
     *
     * @param array $join array dari join
     * @param string $select
     *
     * @return void
     */
    public function get_join($join, $select = '*')
    {
        $this->db->select($select);
        $this->db->from($this->table);
        foreach ($join as $data) {
            $this->db->join($data[0], $data[1], 'left');
        }
        return $this->db->get();
    }

    /**
     * mengambil dengan join
     * dan dengan kondisi where
     *
     * @param array $join
     * @param array $where
     * @param string $select
     *
     * @return void
     */
    public function get_join_where($join, $where, $select = '*')
    {
        $this->db->select($select);
        $this->db->from($this->table);
        foreach ($join as $data) {
            $this->db->join($data[0], $data[1], 'left');
        }
        $this->db->where($where);
        return $this->db->get();
    }
}
