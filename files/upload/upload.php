<?php
include "../config/config.php";
$msgError = null;
$msgSuccess = null;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['send']) && $_POST['send'] == "send") {
        if (isset($_FILES['file']) && !empty($_FILES['file']) && $_FILES['file']['error'] == 0) {
            $uploadOK = 1;
            $fileName = $_FILES['file']['name'];
            $fileType = $_FILES['file']['type'];
            $fileSize = $_FILES['file']['size'];
            $fileTmpPath = $_FILES['file']['tmp_name'];
            $fileSeparateName = explode(".", $fileName);
            $fileLowerType = strtolower(end($fileSeparateName));
            $fileNewName = md5($fileName) . time() . "." . $fileLowerType;

            $maxFileSize = 500 * 1024;

            $allowFileType = ["jpg", "jpeg", "png"];
            if (!in_array($fileLowerType, $allowFileType)) {
                $uploadOK = 0;
                $msgError = "the file format is incorrect";
            }

            if ($fileSize > $maxFileSize) {
                $uploadOK = 0;
                $msgError = "maximum of file size is 500KB";
            }
            if ($uploadOK == 1) {
                $uploadFileDest = "files/";
                $fileDest = $uploadFileDest . $fileNewName;
                if (move_uploaded_file($fileTmpPath, $fileDest)) {
                    $msgSuccess = "your file has been uploaded";
                } else {
                    $msgError = "error to uploaded file";
                    $uploadOK = 0;
                }
            }
        }
    }
}

$_SESSION['msgError'] = $msgError;
$_SESSION['msgSuccess'] = $msgSuccess;
header("location:form.php");
