<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
    <!-- link css -->
    <link rel="stylesheet" href="app\assets\styles\style.css" />
    <!-- link icons bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
    <!-- link jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="container-fluid d-flex align-items-center justify-content-center" style="height: 100vh;">
        <div class="col-4 px-5 py-4 rounded-4 shadow-lg">
            <div class="text-center">
                <img src="app/assets/images/logo.png" alt="" width="120px">
                <h2 class="mb-0">PIZZA. <span class="text-warning">Khmer</span></h2>
                <p class="text-secondary">please find the form create account</p>
            </div>
            <form action="">
                <input type="text" class="form-control my-3 shadow-none border" name="name_email" id="name_email"
                    required placeholder="Name or Email">
                <input type="password" class="form-control my-3 shadow-none border" name="password" id="password"
                    required placeholder="Password">
                <hr>
                <button class="btn btn-primary w-100">Sign IN</button>
                <p class="text-center mt-2">Don't have account <a href="index.php">SignIn</a> </p>
            </form>
        </div>
    </div>
</body>

</html>