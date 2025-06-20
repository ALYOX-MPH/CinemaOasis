<?php

namespace Core;

use Plugins\DbToolkit\DbToolkit;
use Plugins\Auth\Auth;

/**
 * Clase base para los plugins del sistema
 *
 * @package Core
 */
class Plugin{

    protected $db;
    protected $auth;
    public function __construct(){
        $this->db = new DbToolkit();
        $this->auth = new Auth();
    }
}
