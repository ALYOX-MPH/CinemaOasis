<link rel="stylesheet" href="/modules/Login/src/css/style-login.css">
<div class="login-card">
    <!-- <h5 class="card-title text-center"><img src="themes\Uno\assets\img\Brand\Icon.png" style="width: 35%"></h5> -->
    <h5 class="card-title text-center"><img src="themes\Uno\assets\img\Brand\logo.png" style="width: 60%"></h5>
    <form action="/Login/login" method="post">
        <div class="mb-3">
            <!--label for="username" class="form-label">Username</label-->
            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required >
        </div>
        <div class="mb-3">
            <!--label for="password" class="form-label">Password</label-->
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <button class="btn nav-color text-white w-100 bg-blue">Login</button>
    </form>
</div>
