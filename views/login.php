<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="bg-light">

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <div class="card p-4 shadow text-center">
                    <img src="../assets/image/logo.png" alt="Logo" class="mb-3 d-block mx-auto" style="width:80px; height:auto;">
                    <h4 class="mb-3">Login Ujikom</h4>

                    <form action="../process/login.php" method="POST" onsubmit="return validasiLogin()">
                        <div class="mb-3">
                            <!-- <input type="email" name="email" class="form-control" placeholder="Email" required> -->
                            <input type="text" id="email" name="email" class="form-control" placeholder="Email" required>
                        </div>

                        <div class="mb-3">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                        </div>

                        <button class="btn btn-primary w-100">Login</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <script src="../assets/js/script.js"></script>
</body>

</html>