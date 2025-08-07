<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('app/views/includes/link.php'); ?>
</head>

<body>
    <div class="container-fluid d-none d-lg-flex align-items-center justify-content-center" style="height: 100vh;">
        <div class="col-3 px-5 py-4 rounded-4 shadow-lg">
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
                <button class="btn btn-primary w-100">Sign Up</button>
                <p class="text-center mt-2">Don't have account <a href="index.php">SignIn</a> </p>
            </form>
        </div>
    </div>

    <!-- no responsive on phone screen -->
    <div class="container-fluid d-flex justify-content-center align-items-center d-lg-none" style="height: 100vh">
        <img class="object-fit-cover" src="app/assets/images/page_not_found.png" alt="only use for laptop"
            style="width: 400px" />
    </div>
</body>

</html>