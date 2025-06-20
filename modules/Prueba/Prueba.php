<?php

namespace Modules\Prueba;

use Core\Module;

class Prueba extends Module
{

    public function __construct($params)
    {
        parent::__construct($params);
    }

    public function index()
    {
        $this->view('View_Prueba');
    }
}
