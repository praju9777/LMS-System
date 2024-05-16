<html lang = "en">  
   <head>  
      <meta charset = "utf-8">  
      <meta name = "viewport" content = "width = device-width, initial-scale = 1, shrink-to-fit = no">  
      <link rel = "stylesheet"   
         href = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"  
         integrity = "sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"   
         crossorigin = "anonymous">         
      <title> LMS  </title>  
      <style>  
      body {  
      color: green; 
       
      }  
      </style>  
   </head>  
   <body>  
<section class="h-100 bg-dark">  
  <div class="container py-5 h-100">  
    <div class="row d-flex justify-content-center align-items-center h-100">  
      <div class="col">  
        <div class="card card-registration my-4">  
          <div class="row g-0">  
            <div class="col-xl-6 d-none d-xl-block">  
              <img  
                src="images/ec.webp"  
                alt="Sample photo"  
                class="img-fluid"  
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; height:750px"  
              />  
            </div>  
            <div class="col-xl-6">  
              <div class="card-body p-md-5 text-black">  
                <h3 class="mb-5 text-uppercase"> registration form </h3>  
                <form action="/register" method="POST">
                <div class="row">  
                  @csrf
                  <div class="col-md-6 mb-4">  
                    <div class="form-outline">  
                      <input type="text" id="form3Example1m" name="name" class="form-control form-control-lg" />  
                      <label class="form-label"  for="form3Example1m"> Name </label>  
                    </div>  
                  </div>  
                </div>  
                <div class="form-outline mb-4">  
                  <input type="text" id="form3Example8" name="address" class="form-control form-control-lg" />  
                  <label class="form-label" for="form3Example8"> Address </label>  
                </div>  
                  <div class="form-outline mb-4">  
                  <input type="text" id="form3Example8" name="phone" class="form-control form-control-lg" />  
                  <label class="form-label" for="form3Example8"> Phone Number </label>  
                </div>  
                <div class="form-outline mb-4">  
                  <input type="text" id="form3Example97" name="email" class="form-control form-control-lg" />  
                  <label class="form-label" for="form3Example97"> Email ID </label>  
                </div>  
                <div class="form-outline mb-4">  
                  <input type="text" id="form3Example97" name="password" class="form-control form-control-lg" />  
                  <label class="form-label" for="form3Example97">Password</label>  
                </div> 
                <div class="d-flex justify-content-end pt-3">  
                  
                  <button type="submit" class="btn btn-primary btn-lg">register</button>
                  <button class="btn btn-sucess btn-lg"><a href="/">Back To Login</a></button>
                 
                </div>  
              </div>  
            </div>  
        </form>
          </div>  
        </div>  
      </div>  
    </div>  
  </div> 
   
</section>  
</body>  
</html>  