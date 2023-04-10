 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="{{ asset('login/style.css') }}">
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
 
     <title>Ketarunaan | Login</title>
 
 </head>
 <body>
  <form action="{{ route('postlogin') }}" method="post">
  {{ csrf_field() }}
    <div class="box">
     <div class="container">
 
         <div class="top">
             {{-- <span>Have an account?</span> --}}
             <header>Login</header>
             <p style="text-align: center">Untuk masuk ke Aplikasi Taruna</p>
         </div>
 
         <div class="input-field">
             <input type="email" class="input" name="email" id="email" placeholder="Email" required>
             <i class='bx bx-user' ></i>
         </div>
 
         <div class="input-field">
             <input type="Password" class="input" name="password" id="password" placeholder="Password" required>
             <i class='bx bx-lock-alt'></i>
         </div>
 
         <div class="input-field">
             <input type="submit" class="submit" value="Login" id="">
         </div>
 
         <div class="two-col">
             <div class="one">
                {{-- <input type="checkbox" name="" id="check"> --}}
                {{-- <label for="check"> Remember Me</label> --}}
             </div>
             {{-- <div class="two">
                 <label><a href="#">Forgot password?</a></label>
             </div> --}}
         </div>
     </div>
 </div>  
</form>
 </body>
 </html>