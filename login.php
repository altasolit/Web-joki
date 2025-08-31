<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="main.css">
        <meta name="viewport" content="width=device-width , initial-scale=1.0">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    
    <body>
      <video id="bg-video" poster="cyberpunk.jpg" autoplay muted loop>
        <source src="cyber.mp4" type="video/mp4" />
      </video>
        <div class="filter">
        </div>
            <div class="container">
                <h1 class="Login">Login</h1>
                  <form>
                    <div>
                      <label>Email</label><br>
                      <input type="text"
                      placeholder="Enter Email"name="confirm_Email" required />
                    </div>
                    <div>
                      <label type="password">Password</label><br>
                      <input type="password"
                      style="-webkit-text-security: square"
                      placeholder="Enter Password"name="confirm_password" required />
                    </div>
                    <div class="forget">
                      <label for=""><input type="checkbox">Remember Me</label>
                    <a href="lupapw.php">Forget Password</a>
                  </div>
                    <div class="button">
                      <button class="btn-hover color-9"type="submit"><a href="index.php">Log in</a></button>
                    </div>  
                    <div class="fluid"><br>
                      <p>don't have an account?<a href="daftar.php"> Register</a></p>
                    </div>
                  </form>
            </div>      
    </body>
</html>