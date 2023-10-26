<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['uploaded_file'])) {
    $target_dir = "/sciezka/do/katalogu/samby/demo/"; // Ustaw ścieżkę do katalogu serwera Samba
    $target_file = $target_dir . basename($_FILES['uploaded_file']['name']);

    if (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $target_file)) {
        echo "Plik został wysłany i zapisany jako " . basename($_FILES['uploaded_file']['name']);
    } else {
        echo "Wystąpił problem z przesyłaniem plikU.";
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aaaaaaaaaaaaaaaaaawwwwwwwwwwwwwwwwwaaaaaaaaaaaaaaaaaaaawaaaa</title>
     <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            max-width: 400px;
            width: 100%;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input[type="file"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .form-group input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="uploaded_file">wawwww</label>
            <input type="file" name="uploaded_file" id="uploaded_file">
        </div>
   
        <div class="form-group">
            <input type="submit" value="Wyślij plik" name="submit">
        </div>
    </form>
</div>

</body>
</html>
