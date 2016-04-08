<html>
<head>
<title>Upload Form</title>
</head>
<body>
<?php echo form_open_multipart('upload_controller/do_upload'); ?>
<input name="myFile" size="40" type="file" />
<input type="submit" value="Upload" />
</body>
</html>