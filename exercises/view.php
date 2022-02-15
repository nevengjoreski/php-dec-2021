<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <p class="<?= $style ?>">
                <?= $response ?>
            </p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="POST" class="form-control">
                <div class="form-group my-2">
                    <label for="number">Enter a number</label>
                    <input type="number" class="form-control" id="number" name="number" placeholder="e.g. 123">
                </div>
                <button type="submit" class="btn btn-primary my-2">count plastic sets</button>
            </form>
        </div>
    </div>
</body>
</html>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">