<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}

$less = new lessc;
$less->compileFile('less/18.less', 'css/18.css');
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="author" content="UFO Themes">
    <title>18</title>
    <link href="<?php echo $url_path ?>/css/18.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" id="google-fonts-css" href="<?php echo $url_path ?>/css/css" type="text/css" media="all">
    <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/18.less', 'css/18.css');
        ?>
    </head>
    <body>
        <?php include './18-content.php'; ?>
    </body>
</html>