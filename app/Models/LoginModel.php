<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'User'; // Adjust table name as needed

    public function authenticate($username, $password)
    {
        // Fetch user from database
        $user = $this->where('TenUser', $username)
                     ->first();

        // Check if user exists and password matches
        if ($user && password_verify($password, $user['MatKhau'])) {
            return $user; // Return user data
        }

        return null; 
    }
}
