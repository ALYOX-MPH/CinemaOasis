<?php

namespace Core;

/**
 * Clase base para iniciar la aplicación
 * 
 * @package Core
 */
class App
{
    /**
     * @var string $module Nombre del módulo
     * @var string $action Nombre de la acción
     * @var array $params Parámetros pasados al módulo
     */
    protected $module;
    protected $action;
    protected $params;

    public function __construct()
    {
        $this->loadEnv('env');
        $this->getEnv();
        $this->module = $_ENV['MODULE_DEFAULT'];
        $this->action = $_ENV['ACTION_DEFAULT'];
    }

    /**
     * Ejecuta la aplicación
     */
    public function run()
    {
        $this->dispatch();
        $this->route();
    }

    /**
     * Carga el módulo y ejecuta la acción correspondiente
     */
    protected function route()
    {
        $moduleClass = ucfirst($this->module);

        try {
            $fullyQualifiedClassName = "Modules\\{$moduleClass}\\{$moduleClass}";

            if (class_exists($fullyQualifiedClassName)) {
                $moduleInstance = new $fullyQualifiedClassName($this->params);

                if (method_exists($moduleInstance, $this->action)) {
                    $moduleInstance->{$this->action}();
                } else {
                    echo "Método no encontrado: {$this->action}";
                }
            } else {
                echo "Clase no encontrada: {$moduleClass}";
            }
        } catch (\Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    /**
     * Descompone la URL y asigna el módulo, acción y parámetros
     */
    public function dispatch()
    {
        $request_uri = $_SERVER['REQUEST_URI'];

        $request_uri = trim($request_uri, '/');
        $request_uri = explode('?', $request_uri)[0];

        $parts = explode('/', $request_uri);

        if (!empty($parts[0])) {
            $this->module = $parts[0];
        }

        if (!empty($parts[1])) {
            $this->action = $parts[1];
        }

        $this->params = $parts;
    }

    /**
     * Carga el archivo .env y lo convierte en variables de entorno
     *
     * @param string $file_name Nombre del archivo .env
     */
    protected function loadEnv($file_name)
    {
        $path = __DIR__ . '/../.' . $file_name;
        if (!file_exists($path)) {
            header('Location: install.php');
        }

        $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            if (strpos(trim($line), '#') === 0) {
                continue;
            }

            list($name, $value) = explode('=', $line, 2);

            $name = trim($name);
            $value = trim($value);

            $_ENV[$name] = $value;
            $_SERVER[$name] = $value;
        }
    }

    /**
     * Carga los archivos .env.* y los convierte en variables de entorno
     */
    protected function getEnv()
    {
        $envFiles = glob(__DIR__ . '/../.env.*');

        if ($envFiles) {
            foreach ($envFiles as $filePath) {
                $fileName = basename($filePath);
                $envName = substr($fileName, strlen('.env.'));
                $this->loadEnv('env.'.$envName);
            }
        }
    }
}
