<?php
/* Smarty version 3.1.29, created on 2021-07-31 13:39:05
  from "C:\xampp\htdocs\NV-FeedBack\templates\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_6105365995bea9_51641852',
  'file_dependency' => 
  array (
    '60771c9d404baa0f4ef21b1fe94be3ea2e94ba00' => 
    array (
      0 => 'C:\\xampp\\htdocs\\NV-FeedBack\\templates\\index.html',
      1 => 1627731488,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6105365995bea9_51641852 ($_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i|Roboto+Mono" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/all.min.css">
	<link rel="shortcut icon" href="images/1.png" type="image/x-icon">
	</head>
	<body>

	<div id="page">
	
	<div id="gtco-main">
		<div class="container">
			<div class="row row-pb-md">
				<div id="results" class="col-md-12">
					<?php echo $_smarty_tpl->tpl_vars['content']->value;?>
	
				</div>
				  <form method="POST" id="formx" action="javascript:void(null);" onsubmit="call();">
					  <ul class="ks-cboxtags">
					    <li><input type="checkbox" id="1" value="1" name="1"><label for="1">Физика</label></li>
					    <li><input type="checkbox" id="2" value="2"  name="2"><label for="2">Математика</label></li>
					    <li><input type="checkbox" id="3" value="3" name="3"><label for="3">Искусство</label></li>
					    <li><input type="checkbox" id="4" value="4" name="4"><label for="4">Астрономия</label></li>
					  </ul>
					  <center><button type="submit" class="btn btn-default btn-sm btncast">Показать новый факт</button></center>
					</form>
			</div>
		</div>
	</div>
	</div>
	<div id="myModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
			<!-- Заголовок модального окна -->
			<div class="modal-header">
			<h4 class="modal-title">Ошибка</h4>
			</div>
			<!-- Основное содержимое модального окна -->
			<div class="modal-body">
				Для выбранных категорий в базе отсутсвуют данные:(
			</div>
			<!-- Футер модального окна -->
			<div class="modal-footer">
			<button type="button" class="btn btn-default btncast" data-dismiss="modal">Закрыть</button>
			</div>
			</div>
		</div>
	</div>

	<div id="myModal2" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
			<!-- Заголовок модального окна -->
			<div class="modal-header">
			<h4 class="modal-title">Ошибка</h4>
			</div>
			<!-- Основное содержимое модального окна -->
			<div class="modal-body">
				При загрузке данных произошла ошибка:(
			</div>
			<!-- Футер модального окна -->
			<div class="modal-footer">
			<button type="button" class="btn btn-default btncast" data-dismiss="modal">Закрыть</button>
			</div>
			</div>
		</div>
	</div>

	<div id="myModal3" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
				<!-- Заголовок модального окна -->
				<div class="modal-header">
				<h4 class="modal-title">Ошибка</h4>
				</div>
				<!-- Основное содержимое модального окна -->
				<div class="modal-body">
					Необходимо выбрать хотя бы одну категорию
				</div>
				<!-- Футер модального окна -->
				<div class="modal-footer">
				<button type="button" class="btn btn-default btncast" data-dismiss="modal">Закрыть</button>
				</div>
				</div>
			</div>
		</div>
	<?php echo '<script'; ?>
 src="js/modernizr-2.6.2.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/jquery.easing.1.3.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/jquery.waypoints.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/jquery.stellar.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/main.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/ajax.js"><?php echo '</script'; ?>
>
	</body>
</html>

<?php }
}
