<!DOCTYPE html>
<html>
<head>
    <title>Upload File</title>
    <style>
        html, body {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container {
            max-width: 600px;
            padding: 40px;
            background-color: #f2f2f2;
            border-radius: 5px;
        }
        .container h2 {
            text-align: center;
            margin-bottom: 20px;
            font-family: Arial, sans-serif;
            font-size: 24px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            font-family: Arial, sans-serif;
            font-size: 16px;
        }
        .form-group input[type="file"] {
            display: block;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-family: Arial, sans-serif;
            font-size: 14px;
        }
        .form-group input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-family: Arial, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Upload File</h2>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="file">chose your file:</label>
                <input type="file" id="file" name="file">
            </div>
            <div class="form-group">
                <input type="submit" value="send">
            </div>
        </form>
    </div>
</body>
</html>