<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function getUserRole()
    {
        $query = "SELECT `user`.*, `user_role`.`role`
                  FROM `user` JOIN `user_role`
                  ON `user`.`role_id` = `user_role`.`id`
                ";
        return $this->db->query($query)->result_array();
    }

    function deleteUser($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function editUser($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('user_role', $data);
        return TRUE;
    }
}
