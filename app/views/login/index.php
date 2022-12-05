<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./login.css" />
    <title>Login</title>

    <style>
       
        .paralax_login {


  /* Set a specific height */
  min-height: 300px;

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  border-radius: 10px;

}

.login {
  max-width: 500px; 
  border: 1px solid rgba(255, 255, 255, 0.18);
  backdrop-filter: blur(8px);
  border-radius: 20px;
  opacity: 0.8;
  transition-duration: 500ms;
  transition-property: opacity;
  margin-bottom: 3rem;
}

    </style>
  </head>
  <body>
  <div class="container mt-5">
        
        <div class="row mt-3">
          <div class="paralax_login shadow-lg">
          <div class="row">
        <div class="col-md-6 col-lg-6 col-sm-6 mt-5 text-center">
          <img src="<?= BASEURL; ?>/img/rafiki.png" class="pt-3" alt="" style="max-width: 370px" />
          <h3 class="pt-5">Temukan Tempat Futsalmu Sekarang</h3>
        </div>
        <!-- akhir main bagian kiri -->

        <!-- awal main form login -->
        <div class="col-md-5 col-lg-5 col-sm-5 login mt-5 mx-auto">
          <h2 class="text-center col-md-12 pt-5" style="color: black; font-family: poppins, sans-serif; font-style: normal; font-weight: bold">Sign In</h2>
          <form method="post" target="_self" class="col-md-8 col-lg-8 col-sm-8 mx-auto" id="form">
          <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username / Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
  </div>
  <button type="submit" class="btn btn-primary mb-5">Login</button>
            </div>
          </form>
        </div>
        <!-- akhir main form login -->
      </div>
          </div>
        </div>
      </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   
  </body>
</html>