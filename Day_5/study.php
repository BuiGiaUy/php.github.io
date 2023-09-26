<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>PHP File Upload</title>
</head>
<body>
<form enctype="multipart/form-data" action="upload.php" method="post">
    <div>
        <label for="file">Select a file:</label>
        <input type="file" id="file" name="file"/>
    </div>
    <div>
        <button type="submit">Upload</button>
    </div>
</form>
</body>
</html>