<?php

namespace Plugins\Auth;

class Auth
{
    public function __construct()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
    }

    /**
     * Login
     * 
     * @param array $user
     * @param array $roles
     * @return void
     */
    public function login($user, $roles)
    {
        $_SESSION['user'] = $user;
        $_SESSION['user']['roles'] = $roles;
    }

    /**
     * Logout
     * 
     * @return void
     */
    public function logout()
    {
        session_unset();
        session_destroy();
    }

    /**
     * Verifica si el usuario está autenticado
     * 
     * @return bool
     */
    public function isAuthenticated()
    {
        return isset($_SESSION['user']);
    }

    /**
     * Devuelve el usuario actual
     * 
     * @return array|null
     */
    public function getUser()
    {
        return $_SESSION['user'] ?? null;
    }

    /** 
     * Verifica si el usuario tiene el rol especificado
     * 
     * @param string $role
     * @return bool
     */
    public function hasRole($role)
    {
        $user = $this->getUser();
        return isset($user['roles']) && in_array($role, $user['roles']);
    }

    /** 
     * Verifica si el usuario tiene alguno de los roles especificados
     * 
     * @param array $roles
     * @return bool
     */
    public function hasAnyRole($roles)
    {
        if (!is_array($roles)) {
            $roles = [$roles];
        }

        $user = $this->getUser();
        return isset($user['roles']) && count(array_intersect($user['roles'], $roles)) > 0;
    }

    /** 
     * Redirecciona al usuario a la página especificada
     * 
     * @param string $url
     * @return void
     */
    public function redirect($url)
    {
        header("Location: $url");
        exit();
    }

    /** 
     * Redirecciona al usuario a la página especificada si no está autenticado
     * 
     * @param string $url
     * @return void
     */
    public function requireAuth()
    {
        if (!$this->isAuthenticated()) {
            $this->redirect('/Login');
        }
    }

    /**
     * Redirecciona al usuario a la página especificada si no tiene el rol especificado
     * 
     * @param string $role
     * @return void
     */
    public function requireRole($roles)
    {
        $this->requireAuth();
        if (!$this->hasAnyRole($roles)) {
            $this->redirect('/login/Unauthorized');
        }
    }

    /**
     * Genera un token CSRF
     * 
     * @return string
     */
    public function getCsrfToken()
    {
        return $_SESSION['csrf_token'];
    }

    /**
     * Verifica si el token CSRF coincide con el token almacenado en la sesión
     * 
     * @param string $token
     * @return bool
     */
    public function verifyCsrfToken($token)
    {
        return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
    }


    /**
     * Obtener el id del usuario actual
     * 
     * @return string
     */
    public function getUserId()
    {
        return $this->getUser()['id'];
    }
}