<?php
// install.php

// Verificar si ya existe un archivo .env para evitar reinstalación
if (file_exists('.env')) {
    die('El sistema ya está instalado. Elimina el archivo .env manualmente si deseas reinstalar.');
}

// Procesar el formulario si se ha enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Validar y obtener datos del formulario
        $baseUrl = isset($_POST['base_url']) ? trim($_POST['base_url']) : '';
        $appName = isset($_POST['app_name']) ? trim($_POST['app_name']) : '';

        $dbHost = isset($_POST['db_host']) ? trim($_POST['db_host']) : '';
        $dbName = isset($_POST['db_name']) ? trim($_POST['db_name']) : '';
        $dbUser = isset($_POST['db_user']) ? trim($_POST['db_user']) : '';
        $dbPassword = isset($_POST['db_password']) ? trim($_POST['db_password']) : '';
        $dbPort = isset($_POST['db_port']) ? trim($_POST['db_port']) : '';

        // Validaciones básicas
        if (empty($baseUrl) || empty($appName)) {
            throw new Exception('BASE_URL y APP_NAME son campos requeridos');
        }

        // Crear archivo .env
        $envContent = <<<ENV
BASE_URL={$baseUrl}
APP_NAME={$appName}
THEME_DEFAULT=Uno
MODULE_DEFAULT=Home
ACTION_DEFAULT=index
ENV;

        if (file_put_contents('.env', $envContent) === false) {
            throw new Exception('No se pudo crear el archivo .env');
        }

        // Crear archivo .env.db
        $envDbContent = <<<ENVDB
DB_HOST={$dbHost}
DB_NAME={$dbName}
DB_USER={$dbUser}
DB_PASSWORD={$dbPassword}
DB_PORT={$dbPort}
ENVDB;

        if (file_put_contents('.env.db', $envDbContent) === false) {
            throw new Exception('No se pudo crear el archivo .env.db');
        }

        // Crear directorios con permisos 665
        $directories = ['modules', 'plugins', 'themes'];
        foreach ($directories as $dir) {
            if (!mkdir($dir, 0765, true)) {
                throw new Exception("No se pudo crear el directorio {$dir}");
            }
        }

        if (!mkdir('modules/Home', 0765, true)) {
            throw new Exception("No se pudo crear el directorio Home");
        }

        $homeModuleContent = <<<PHP
<?php

namespace Modules\Home;

use Core\Module;

class Home extends Module
{

    public function __construct(\$params)
    {
        parent::__construct(\$params);
    }

    public function index()
    {
        \$this->view('home');
    }
}

PHP;

        if (file_put_contents('modules/Home/Home.php', $homeModuleContent) === false) {
            throw new Exception('No se pudo crear el archivo Home.php');
        }

        if (!mkdir('modules/Home/views', 0765, true)) {
            throw new Exception("No se pudo crear el directorio Uno");
        }

        $homeViewContent = <<<HTML
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Core Framework Start</title>
    <style>
        body {
            margin: 0;
            font-family: Menlo, Monaco, Lucida Console, Liberation Mono, monospace;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #fff;
            color: #000;
        }

        .container {
            text-align: center;
            max-width: 600px;
        }

        .logo {
            font-size: 3rem;
            font-weight: 700;
            letter-spacing: 0.1rem;
        }

        .dot {
            font-weight: 400;
        }

        .instructions {
            margin-top: 1rem;
            font-size: 1rem;
            text-align: left;
            line-height: 1.6;
        }

        .instructions code {
            background: #f4f4f4;
            padding: 2px 6px;
            border-radius: 5px;
            font-size: 0.95rem;
        }

        .buttons {
            margin-top: 2rem;
        }

        .deploy {
            background: #000;
            color: #fff;
            border: none;
            padding: 0.8rem 1.5rem;
            border-radius: 1.5rem;
            font-size: 1rem;
            margin-right: 1rem;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .deploy .triangle {
            font-size: 1.2rem;
        }

        .docs {
            background: #fff;
            border: 1px solid #eee;
            padding: 0.8rem 1.5rem;
            border-radius: 1.5rem;
            font-size: 1rem;
            cursor: pointer;
        }

        .footer {
            margin-top: 3rem;
            display: flex;
            justify-content: center;
            gap: 2rem;
            font-size: 0.9rem;
            opacity: 0.6;
        }
    </style>
</head>

<body>
    <main class="container">
        <h1 class="logo">CORE <span class="dot">Framework</span></h1>
        <ol class="instructions">
            <li>Get started by editing <code>modules/Home/views/home.php</code>.</li>
            <li>Save and see your changes instantly.</li>
        </ol>
        <div class="buttons">
            <button class="deploy"> Deploy now </button>
            <button class="docs">Read our docs</button>
        </div>
        <footer class="footer">
            <span>📄 Learn</span>
            <span><a href="https://github.com/batistafull/core">🌐 Go to Core Framework →</a></span>
        </footer>
    </main>
</body>

</html>
HTML;

        if (file_put_contents('modules/Home/views/home.php', $homeViewContent) === false) {
            throw new Exception('No se pudo crear el archivo index.php');
        }


        if (!mkdir('themes/Uno', 0765, true)) {
            throw new Exception("No se pudo crear el directorio Uno");
        }


        $themeContent = <<<PHP
<?php

\$manifest = [
    'name' => 'Uno',
    'version' => '1.0',
    'author' => 'Alberto Batista',
    'description' => 'Uno Template',
    'templates' => []
];
PHP;
        if (file_put_contents('themes/Uno/manifest.php', $themeContent) === false) {
            throw new Exception('No se pudo crear el archivo manifest.php');
        }

        if (!mkdir('themes/Uno/templates', 0765, true)) {
            throw new Exception("No se pudo crear el directorio templates");
        }

        $mainTemplateContent = <<<PHP
<?= \$content; ?>
PHP;
        if (file_put_contents('themes/Uno/templates/main.php', $mainTemplateContent) === false) {
            throw new Exception('No se pudo crear el archivo main.php');
        }



        // Crear archivo .htaccess
        $htaccessContent = <<<HTACCESS
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php?url=\$1 [QSA,L]
HTACCESS;

        if (file_put_contents('.htaccess', $htaccessContent) === false) {
            throw new Exception('No se pudo crear el archivo .htaccess');
        }

        $successMessage = 'Instalación completada con éxito!';
    } catch (Exception $e) {
        $errorMessage = 'Error durante la instalación: ' . $e->getMessage();

        // Intentar limpiar en caso de error
        @unlink('.env');
        @unlink('.env.db');
        @unlink('.htaccess');
        foreach ($directories ?? [] as $dir) {
            @rmdir($dir);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instalador</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            line-height: 1.6;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 12px;
        }

        .success {
            color: green;
            padding: 10px;
            background: #e6ffe6;
            border: 1px solid green;
            margin-bottom: 20px;
        }

        .error {
            color: red;
            padding: 10px;
            background: #ffebeb;
            border: 1px solid red;
            margin-bottom: 20px;
        }

        button {
            background: #171717;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        button:hover {
            background: #4c4c4c;
        }
    </style>
</head>

<body>
    <h1>Instalador</h1>

    <?php if (isset($successMessage)): ?>
        <div class="success"><?php echo htmlspecialchars($successMessage); ?></div>
        <p>La instalación se ha completado correctamente. Puedes eliminar este archivo (install.php) por seguridad.</p>
        <p><a href="<?php echo htmlspecialchars($baseUrl); ?>">Ir a la aplicación</a></p>
    <?php else: ?>
        <?php if (isset($errorMessage)): ?>
            <div class="error"><?php echo htmlspecialchars($errorMessage); ?></div>
        <?php endif; ?>

        <form method="post">
            <h2>Configuración de la Aplicación</h2>

            <div class="form-group">
                <label for="base_url">BASE_URL:</label>
                <input type="text" id="base_url" name="base_url" required placeholder="Ej: http://localhost">
            </div>

            <div class="form-group">
                <label for="app_name">APP_NAME:</label>
                <input type="text" id="app_name" name="app_name" required placeholder="Ej: Mi Aplicación">
            </div>

            <h2>Configuración de la Base de Datos (Opcional)</h2>

            <div class="form-group">
                <label for="db_host">DB_HOST:</label>
                <input type="text" id="db_host" name="db_host" placeholder="Ej: localhost">
            </div>

            <div class="form-group">
                <label for="db_name">DB_NAME:</label>
                <input type="text" id="db_name" name="db_name" placeholder="Ej: moon-db">
            </div>

            <div class="form-group">
                <label for="db_user">DB_USER:</label>
                <input type="text" id="db_user" name="db_user" placeholder="Ej: user">
            </div>

            <div class="form-group">
                <label for="db_password">DB_PASSWORD:</label>
                <input type="password" id="db_password" name="db_password" placeholder="Ej: password">
            </div>

            <div class="form-group">
                <label for="db_port">DB_PORT:</label>
                <input type="text" id="db_port" name="db_port" placeholder="Ej: 3306">
            </div>

            <button type="submit">Instalar</button>
        </form>
    <?php endif; ?>
</body>

</html>