<?php

class Admin_model extends CI_Model
{

    function deleteRole($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function editRole($role, $role_id)
    {
        $this->db->where('id', $role_id);
        $this->db->update('user_role', $role);
        return TRUE;
    }
}
