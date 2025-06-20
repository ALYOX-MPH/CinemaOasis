<?php

namespace Modules\Payroll;

use Core\Module;

class Payroll extends Module
{

    public function __construct($params)
    {
        parent::__construct($params);
    }

    public function index()
    {
        $this->view('View_Payroll');
    }
}
