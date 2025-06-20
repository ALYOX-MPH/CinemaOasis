<?php

namespace Core;

/**
 * Clase base para los módulos del sistema
 * 
 * @package Core
 */
class Module extends Plugin
{
    /**
     * @var string $moduleName Nombre del módulo
     * @var array $data Datos a pasar a la vista
     * @var array $params Parámetros pasados al módulo
     */
    protected $moduleName;
    protected $data;
    protected $params;


    public function __construct($params)
    {
        parent::__construct();
        $this->params = $params;
        $this->moduleName = basename(str_replace('\\', '/', get_class($this)));
        $this->data = [];
        $this->data['base_url'] = $_ENV['BASE_URL'];
    }

    /**
     * Carga la vista de un módulo
     * 
     * @param string $path Ruta de la vista
     * @param bool $text_plain Si es true, no se aplicará el tema
     */
    public function view($path, $text_plain = false)
    {
        $baseDir = __DIR__ . '/../';
        $viewPath = $baseDir . "modules/{$this->moduleName}/views/{$path}.php";
        
        if (!file_exists($viewPath)) {
            echo "Error: View not found ({$path}) in module {$this->moduleName}";
            return;
        }
    
        $themeDir = $baseDir . "themes/" . $_ENV['THEME_DEFAULT'];
        
        if (!is_dir($themeDir)) {
            extract($this->data);
            include $viewPath;
            return;
        }
    
        include_once $themeDir . "/manifest.php";
        
        $this->data['title_app'] = $_ENV['APP_NAME'];
        $this->data['params'] = $this->params;
        $this->data['dictionary_general'] = $this->dictionary('Contacts');
        
        foreach ($manifest['templates'] as $template) {
            if (!isset($this->data[$template])) {
                $templatePath = $themeDir . "/templates/{$template}.php";
                $this->data[$template] = $this->template($templatePath);
            }
        }
        
        extract($this->data);
        ob_start();
        include $viewPath;
        $content = ob_get_clean();
        
        include $themeDir . "/templates/main.php";
    }

    /**
     * Redirige a una URL
     * 
     * @param string $path Ruta a redirigir
     */
    public function redirect($path)
    {
        header("Location: {$path}");
        exit;
    }

    /**
     * Carga una plantilla
     * 
     * @param string $path Ruta de la plantilla
     * @return string|false Contenido de la plantilla o false si no existe
     */
    public function template($path)
    {
        extract($this->data);
        if (!file_exists($path)) {
            return false;
        }
        ob_start();

        include $path;

        return ob_get_clean();
    }

    /**
     * Carga un componente de un módulo
     * 
     * @param string $path Ruta del componente
     * @return string|false Contenido del componente o false si no existe
     */
    public function component($path)
    {
        return $this->template("modules/{$this->moduleName}/components/{$path}.php");
    }

    /**
     * Carga el diccionario de un módulo
     * 
     * @param string $moduleName Nombre del módulo
     * @return string|false Contenido del componente o false si no existe
     */
    public function dictionary($moduleName){
        if(!file_exists("modules/{$moduleName}/src/dictionary.php")){
            return false;
        }
        $dictionary = [];
        include "modules/{$moduleName}/src/dictionary.php";
        return $dictionary;
    }

    /**
     * Genera un UUID v4
     * 
     * @link https://www.ietf.org/rfc/rfc4122.txt
     * @return string|false Contenido del componente o false si no existe
     */
    public function uuid(){
        $data = random_bytes(16);

        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));

    }

    /**
     * Datos de post por default
     * 
     * @return array
     */
    public function getPostData($params = []){
        foreach ($params as $key => $value) {
            $_POST[$key] = $value;
        }

        $_POST['id'] = $this->uuid();
        $_POST['date_entered'] = $_POST['date_modified'] = date("Y-m-d H:i:s");
        $_POST['created_by'] = '1';

        return $_POST;
    }
}
