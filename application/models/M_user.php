<?php
class M_user extends CI_Model {
    
    function getUser() {
		return $this->db->query("SELECT * FROM user")->result_array();
    }

    function addUser($username, $name, $password, $role) {
        $data = array(
            'username' => $username,
            'nama' => $name,
            'password' => $password,
            'role' => $role
        );
        $this->db->insert('user', $data);
    }

    function updateUser($id, $username, $name, $password, $role) {
        $this->db->query("UPDATE user SET username = '$username', nama = '$name', password = '$password', role = '$role'  WHERE id = '$id'");
    }

    function deleteUser($id) {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }
    
}