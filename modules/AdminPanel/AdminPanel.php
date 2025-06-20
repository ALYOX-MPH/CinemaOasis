<?php

namespace Modules\AdminPanel;

use Core\Module;

class AdminPanel extends Module
{

    public function __construct($params)
    {
        parent::__construct($params);
    }

    public function index()
    {
        $this->view('View_AdminPanel');
    }
}
