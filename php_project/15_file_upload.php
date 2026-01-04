<?php

$allowed = ['png', 'jpg', 'jpeg', 'gif'];
$msg = '';

if (isset($_POST['uploadBtn'])) {
    if (!empty($_FILES['file']['name'])) {
        $filename = $_FILES['file']['name'];
        $filesize = $_FILES['file']['size'];
        $filetmp = $_FILES['file']['tmp_name'];
        $target = "images/$filename";

        $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

        if (in_array($ext, $allowed)) {
            if ($filesize <= 2000000) {
                move_uploaded_file($filetmp, $target);
                $msg = '<p style="color:green;">Image uploaded successfully!</p>';
            } else {
                $msg = '<p style="color:red;">File is too large!</p>';
            }
        } else {
            $msg = '<p style="color:red;">Invalid file type!</p>';
        }
    } else {
        $msg = '<p style="color:red;">Please select a file!</p>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Upload Image</title>
</head>
<body>

<?php echo $msg; ?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
    Choose image: <input type="file" name="file">
    <input type="submit" name="uploadBtn" value="Upload">
</form>

</body>
</html>
