<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h1>Kindly fill in the feedback form!</h1>
    <div class="row">
        <div class="col-md-6">
            <form method="post" route="{{contact.store}}">
            {{ csrf_feild() }}
                <div class = "form-group">
                    <label>Full Name: </label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class = "form-group">
                    <label>Email: </label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class = "form-group">
                    <label>Feedback: </label>
                    <textarea name ="feedback" class="form-control" name="feedback"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>