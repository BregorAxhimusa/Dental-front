<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <link href="Views/dist/css/login.css" rel="stylesheet">
      <link href="Views/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="Views/dist/css/responsive.css" rel="stylesheet">
   </head>
   <body class="bg-light">
      <div class="container">
         <div class="row login-row justify-content-center align-items-center mt-5">
            <div class="col-12 col-md-6 col-xl-5 mt-3">
               <div class="p-2 text-center">
                  <h4 class="page-info-title text-center text-secondary"></h4>
                  <h4 class="text-center text-primary">
                  Autorizohuni si admin</h4>
               </div>
               <form action="" method="POST" class="form-section">
                  <div class="card px-4 log-box">
                     <div class="card-body">
                        <div class="form-group row">
                           <label for="username" class="col-form-label">Username ose Email</label>
                           <input type="text" name="username" class="form-control" id="username" required>
                        </div>
                        <div class="form-group row">
                           <label for="password" class="col-form-label">Password</label>
                           <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <div class="form-group row justify-content-end buttons">
                           <button type="input" name="submit" class="btn btn-primary col-6">Kyçu</button>
                        </div>
                     </div>
                  </div>
                  <a href="../index.php" class="mt-3 nav-link text-primary"> <i class="fas fa-long-arrow-alt-left"></i>Kthehu
                  mbrapa</a>
               </form>
            </div>
         </div>
      </div>
      <script src="Views/dist/js/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="Views/dist/js/bootstrap.min.js"></script>
      <script src="Views/dist/js/main.js"></script>
   </body>
</html>