<?php

namespace Modules\Home;

use Core\Module;

class Home extends Module
{

    public function __construct($params)
    {
        parent::__construct($params);
        $this->db->initConnection();
    }

    public function index()
    {
         $this->auth->requireAuth();
        $this->view('View_Home');

        // $user_list = $this->db->query("SELECT * FROM ds_users where deleted = 0 and user_type = 'super_admin'");

        // $this->data['user_list'] = $user_list;

        // $this->db->close();

        // $this->view('home');
    }


    public function add_user(){

    }
}
