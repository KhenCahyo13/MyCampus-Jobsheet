<main>
    <div class="container">
        <div class="row align-items-center justify-content-center" style="height: 100vh;">
            <div class="col-10 col-md-6 col-lg-4">
                <div class="d-flex flex-column gap-1">
                    <p class="my-0 fs-5" style="font-weight: 500;">Hierarchy Hotel - Login</p>
                    <p class="my-0 fs-7 text-secondary">Please login to continue</p>
                </div>
                <form id="loginForm" method="POST" class="mt-4">
                    <div class="d-flex flex-column gap-3">
                        <div class="d-flex flex-column gap-1">
                            <label for="username" class="fs-7">Username</label>
                            <input type="text" class="form-control form-control-sm fs-7" name="username" id="username" placeholder="Username">
                            <span class="text-danger fs-8" id="usernameError"></span>
                        </div>
                        <div class="d-flex flex-column gap-1">
                            <label for="password" class="fs-7">Password</label>
                            <input type="password" class="form-control form-control-sm fs-7" name="password" id="password" placeholder="Password">
                            <span class="text-danger fs-8" id="passwordError"></span>
                        </div>
                        <button type="submit" class="btn btn-sm btn-dark fs-7">Login</button>
                    </div>
                </form>
                <p class="my-0 fs-7 mt-4 text-center">Don't have an account? <a href="?page=register" class="text-primary">Register</a></p>
            </div>
            <div class="col-8 d-none d-lg-block">
                <div class="p-5" style="height: 100vh; box-sizing: border-box;">
                    <div class="h-100 px-4 py-4 bg-login d-flex flex-column justify-content-between">
                        <div>
                            <h1 class="my-0 fs-5 text-white">Hierarchy Hotel</h1>
                        </div>
                        <div>
                            <p class="my-0 fs-6 text-white text-center">Discover exclusive offers and enjoy a premium stay experience at Hierarchy Hotel. Login now to access personalized services and more!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>