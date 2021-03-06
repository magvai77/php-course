<?php
require_once __DIR__ . '/../src/library/index.php';
$pageCode = 'index';
$pageParameters = [];
$urlChunks = [];
	if (!empty($_GET['path'])) {
		$urlChunks = explode('/', $_GET['path']);
		if (!empty($urlChunks[0])) {
		$pageCode = $urlChunks[0];		
		}	
		if (!empty($urlChunks[1])) {
		$pageParameters = explode('-', $urlChunks[1]);		
		}
	}
// var_dump($urlChunks);
// print_r(sprintf('Page code: %s, Page Parameters: %s', $pageCode,  var_export($pageParameters, true)));

switch ($pageCode) {
	case 'tasks':
		$section = (!empty($pageParameters[0])) ? $pageParameters[0] : '';
		$taskNumber = (!empty($pageParameters[1])) ? $pageParameters[1] : 0;
		$pageData = getTask($section, $taskNumber);
		break;
	default:
		$pageData = [];
		break;
}

$pathToView = __DIR__ . '/../src/view/pages/' . $pageCode . '.php';
if (!file_exists($pathToView)) {
	$pageCode = '404';
	$pathToView = __DIR__ . '/../src/view/pages/' . $pageCode . '.php';
}
?>


<?php require '../src/view/header.php';
require '../src/view/menu.php'; ?>
<div class="workplace">
	<?php require $pathToView; ?>
<?php require '../src/view/footer.php'; ?>
