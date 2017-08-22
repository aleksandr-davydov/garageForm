<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<div class = "container">
<form action="car.php" method="POST">
    <div class="form-group">
        <label for="name"> Name Car:</label>
        <input type="text" class="form-control" name="name" placeholder="Car Name" id="name" required><br/><br/>
    </div>
    <div class="form-group">
    <label for="model">Model:</label>
    <input type="text" class="form-control" name="model" placeholder="Model" id="model" required><br/><br/>
    </div>
    <input type="submit" class="btn btn-alert" value="ADD">
</form>

</div>


</body>
</html>