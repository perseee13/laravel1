<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center" style="height: 100vh;">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="text-center mb-4">Create an Account</h3>

                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- First Name -->
                        <div class="mb-3">
                            <label for="fname" class="form-label">First Name</label>
                            <input type="text" id="fname" name="fname" class="form-control" required autofocus>
                        </div>

                        <!-- Last Name -->
                        <div class="mb-3">
                            <label for="lname" class="form-label">Last Name</label>
                            <input type="text" id="lname" name="lname" class="form-control" required>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>

                        <!-- Contact Number -->
                        <div class="mb-3">
                            <label for="contact_no" class="form-label">Contact Number</label>
                            <input type="text" id="contact_no" name="contact_no" class="form-control" required>
                        </div>

                        <!-- Address -->
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" id="address" name="address" class="form-control" required>
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" name="password" class="form-control" required>
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
                        </div>

                        <!-- Profile Picture -->
                        <div class="mb-3">
                            <label for="profile_picture" class="form-label">Profile Picture</label>
                            <input type="file" id="profile_picture" name="profile_picture" class="form-control" accept="image/*">
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Sign Up</button>

                        <div class="text-center mt-3">
                            Already have an account?
                            <a href="{{ route('login') }}">Log In</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
