<?php

class Admin_model extends CI_Model
{

    function deleteRole($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function editRole($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('user_role', $data);
        return TRUE;
    }
}
