<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Paste a link to the video</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>Paste a link to the video</h2>
        <div>
            <form method="post" action="form.php?action=add">
                <label>

                    <b>Link to video</b><br>
                    <input type="text" name="title" value="" size="45" class="form-item" autofocus required>

                </label><br>
                <label>
                    <input type="submit" value="Сохранить" class="btn">
                </label>
            </form>
        </div>
        <footer>
            <p>Copyright&copy; tavintavan</p>
        </footer>
    </div>
</body>
</html>