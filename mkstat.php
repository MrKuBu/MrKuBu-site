<!-- 
  ____          __  __      _  __     ____        
 |  _ \        |  \/  |    | |/ /    |  _ \       
 | |_) |_   _  | \  / |_ __| ' /_   _| |_) |_   _ 
 |  _ <| | | | | |\/| | '__|  <| | | |  _ <| | | |
 | |_) | |_| | | |  | | |  | . \ |_| | |_) | |_| |
 |____/ \__, | |_|  |_|_|  |_|\_\__,_|____/ \__,_|
         __/ |                                    
        |___/            
		

-->
<!-- CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<title>��� ����� By MrKuBu</title>

<style>
	.label-check {
		display: inline-block;width: 200px
	}
</style>
			<style>
				body {
					background: url("http://p1.pichost.me/i/11/1344899.jpg") no-repeat center center fixed;
					-webkit-background-size: cover;
					-moz-background-size: cover;
					-o-background-size: cover;
					background-size: cover;
				}
			</style>
<div class=
"modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="text-center">�������� ���������� ����� By MrKuBu</h1>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<center><?php
$source = ini_get_all();

$check_list = array(
	'sourceguardian'=>'Sourceguardian',
	'mysqli'=>'MySQLi',
	'mbstring'=>'Mbstring',
	'bcmath'=>'bcmath',
	'bz2'=>'bz2',
	'sockets'=>'Sockets',
	'simplexml'=>'SimpleXML',
	'openssl'=>'OpenSSL',
	'json'=>'JSON',
	'xml'=>'Xml',
);

foreach ($check_list as $name => $label) {
	echo "<div style='margin-bottom: 5px'><span class='label-check'>$label: </span>" . (extension_loaded($name) ? "<span class='btn btn-success btn-sm'>����\��������</span>" : '<span class="btn btn-danger btn-sm">����\���������</span>') . '</div>';
}

echo "<div style='margin-bottom: 5px'><span class='label-check'>allow_url_fopen: </span>" . ((ini_get('allow_url_fopen')) ? "<span class='btn btn-success btn-sm'>����\��������</span>" : '<span class="btn btn-danger btn-sm">����\���������</span>') . '</div>';
?></center>

				</div>
			</div>
		</div>
