<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Series</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="../assets/css/all.css"/>
    <link rel="stylesheet" href="../assets/css/style.css"/>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand font-weight-bolder">LOGO</a>
            <ul class="navbar-nav">
                <li><a href="" class="nav-link text-white">Series</a></li>
            </ul>
        </div>
    </nav>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-success text-white text-center font-weight-bolder">
                            My Series
                        </div>
                        <div class="card-body">
                            <form action="../pages/action.php" method="post">
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label">Starting Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="starting_number"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label">Ending Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="ending_number"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label">Select(Odd/Even)</label>
                                    <div class="col-md-9">
                                        <label for=""><input type="radio" class="" name="odd_even" value="odd"/> Odd Number</label>
                                        <label for=""><input type="radio" class="" name="odd_even" value="even"/> Even Number</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label">Result</label>
                                    <div class="col-md-9">
                                        <textarea name="" id="" cols="10" readonly rows="4" class="form-control"><?php echo isset($data) ? $data :' '?> </textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success" name="btn" value="Submit" />
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<script src="../assets/js/jquery-3.6.0.min.js"></script>
<script src="../assets/js/bootstrap.js"></script>
</body>
</html>