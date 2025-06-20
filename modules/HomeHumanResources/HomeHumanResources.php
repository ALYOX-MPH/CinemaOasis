<?php

namespace Modules\HomeHumanResources;

use Core\Module;

class HomeHumanResources extends Module
{

    public function __construct($params)
    {
        parent::__construct($params);
    }

    public function index()
    {
        $this->view('View_HomeHumanResources');
    }
}
