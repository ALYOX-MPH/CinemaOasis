<?php

namespace Modules\Invoices;

use Core\Module;

class Invoices extends Module
{

    public function __construct($params)
    {
        parent::__construct($params);
    }

    public function index()
    {
        $this->view('View_Invoices');
    }
}
