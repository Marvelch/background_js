<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color</title>

    <!-- CDN Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>

    <!-- Javascript Path -->
    <script src="app.js"></script>

    <!-- Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

    <!-- CSS Path -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <h1>Color Background</h1>
                </div>

                <div class="form-group">
                    <div class="form-group">
                        <label for="">Pilih Warna</label>
                        <input type="color" name="clr" id="clr" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Pilih Ukuran</label>
                        <input type="range" class="form-control-range" id="ctrange" name="ctrange" min="0" max="100" onchange="change_color(this.value)" onclick="change_color()">
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>