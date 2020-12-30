<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/top.css">
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo $title; ?></title>
</head>

<body>

    <!-- Header -->
    <header>
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-dark border-bottom shadow-sm">
            <h5 class="my-0 mr-md-auto font-weight-normal text-white">Tech Circle.</h5>
            <nav class="my-2 my-md-0 mr-md-3">
                <a class="p-2 text-white" href="index.php">Home</a>
                <a class="p-2 text-white" href="about.php">About</a>
                <a class="p-2 text-white" href="contact.php">Support</a>
            </nav>
            <a class="btn btn-primary" href="login.php">MyPage</a>
        </div>
    </header>

    <!-- Main -->
    <?php include $content; ?>

    <!-- Footer -->
    <footer class="footer fixed-bottom mt-auto py-3 bg-dark">
        <div class="container center-block text-center">
            <span class="text-white ">Copyright</span>
        </div>
    </footer>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>