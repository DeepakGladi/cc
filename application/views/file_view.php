<html>
<head>
<title>Upload Form</title>
</head>
<body>

<form enctype="multipart/form-data" action="<?php echo base_url('index.php/upload_controller/do_upload');?>" method="post">

name:<input type ='text' name="name[]"><br>
pass:<input type="text" name="password[]"><br>
<input type='file' name='userfile[]' size='20' />
<input type='submit' name='submit' value='upload' /> 
<?php echo "</form>"?>
</body>
</html>