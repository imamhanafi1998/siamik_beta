<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-1 col-md-4 bg-primary">Column</div>
            <div class="col-10 col-md-4 bg-secondary">Column</div>
            <div class="col-1 col-md-4 bg-success">Column</div>
        </div>

        <div class="row">
            <div class="col-3 bg-primary">a</div>
            <div class="w-100"></div>
            <div class="col-7 bg-secondary">b</div>
        </div>

        <div class="row">
            <div class="col bg-primary">A</div>
            <div class="col-6 bg-secondary">A</div>
            <div class="col bg-success">A</div>
        </div>

        <div class="row justify-content-md-center">
            <div class="col col-lg-2 bg-secondary">
                1 of 3
            </div>
            <div class="col-md-auto bg-success">
                Variable width contenttttttttttttttt
            </div>
            <div class="col col-lg-2 bg-primary">
                3 of 3
            </div>
        </div>

        <div class="row">
            <div class="col bg-primary">
                1 of 3
            </div>
            <div class="col-md-auto">
                Variable width sssssssssssssssssssssssssssssssscontent
            </div>
            <div class="col col-lg-2 bg-secondary">
                3 of 3
            </div>
        </div>

        <div class="row">
            <div class="col-1 col-md-4 bg-primary">1</div>
            <div class="col-10 col-md-4 bg-secondary order-1">2</div>
            <div class="col-1 col-md-4 bg-success">3</div>
        </div>

    </div>

    </body>
    </html>
<?php /**PATH D:\xampp\htdocs\siamik\resources\views\welcome.blade.php ENDPATH**/ ?>