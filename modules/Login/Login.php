<?php

namespace Modules\Login;

use Core\Module;

class Login extends Module
{
    public function __construct($params)
    {
        parent::__construct($params);
        $this->db->initConnection();
    }
    
    public function index()
    {
        $this->view('login');
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
        
            $user = $this->db->query("SELECT * FROM ds_users WHERE user_name = ?", [$username]);
        
            if ($user && password_verify($password, $user[0]['user_hash'])) {
                $roles = [];
                foreach($this->db->query("SELECT * FROM ds_user_roles WHERE user_id = ?", [$user[0]['id']]) as $role) {
                    $roles[] = $role['role_name'];
                }
                $roles[] = $user[0]['user_type'];
                $this->auth->login($user[0], $roles);
                $this->auth->redirect('/');
            } else {
                echo "Credenciales incorrectas";
            }
        }
    }

    public function unauthorized()
    {
        $this->view('unauthorized');
    }

    public function logout()
    {
        $this->auth->logout();
        $this->auth->redirect('/');
    }
}
