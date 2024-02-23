<!doctype html>
<html lang="en">
<style>
        .card {
            margin-top: 100px;
        }
        
    </style>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.min.js"></script>


</head>

<body>
    <style>
        body {
            background-color: #2D9596;
        }
    </style>
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-4 offset-4">
                <div class="card">
                    <div class="card-header">
                        Login to dashboard
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Aplikasi Penilaian</h5>
                        <p class="card-text text-muted">Version 1.0</p>

                        <hr>
                        <form method="POST" action="aksilogin.php">
                            <div class="mb-3">
                                <label for="inputUsername" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" id="inputUsername">
                            </div>
                            <div class="mb-3">
                                <label for="inputPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="inputPassword">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success">Login</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>