<?php require_once 'Ruberoid.php';
$rubik = new Ruberoid(); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Ruberoid</title>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="span6 offset-3">
            <form action="/" method="post">
                <div class="form-row offset-3">
                    <div class="col-sm-7 my-1">
                        <h1 class="text-center">Рабочие расходы</h1>
                        <label for="salary">Зарплата рабочего</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="salary" name="salary">
                            <div class="input-group-append">
                                <div class="input-group-text">грн</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 my-1">
                        <h1 class="text-center col-sm-12">Расходы на материалы</h1>
                        <label for="polymer">Полимерная пленка</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="polymer" name="polymer">
                            <div class="input-group-append">
                                <div class="input-group-text">баксы</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 my-1">
                        <label for="card-board">Кровельный картон</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="card-board" name="card-board">
                            <div class="input-group-append">
                                <div class="input-group-text">баксы</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 my-1">
                        <label for="bitumen">Битум</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="bitumen" name="bitumen">
                            <div class="input-group-append">
                                <div class="input-group-text">евро</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 my-1">
                        <label for="sand">Песок</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="sand" name="sand">
                            <div class="input-group-append">
                                <div class="input-group-text">грн</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <?php
                        if (isset($_POST['salary']) && isset($_POST['polymer'])
                            && isset($_POST['card-board']) && isset($_POST['bitumen']) && isset($_POST['sand'])) {

                            $rubik->init();
                        }

                        ?>
                    </div>

                    <div class="col-sm-12 my-1">
                        <button type="submit" class="btn btn-primary">Отправить</button>
                    </div>

                </div>

            </form>
        </div>
    </div>
</div>

</body>
</html>
