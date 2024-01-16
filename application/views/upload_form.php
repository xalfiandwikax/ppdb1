<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>File Upload</title>
</head>
<body>
    <?php echo form_open_multipart('upload/do_upload');?>

    <input type="file" name="userfile" size="20" />

    <br /><br />

    <input type="submit" value="Upload" />

    </form>
</body>
</html>