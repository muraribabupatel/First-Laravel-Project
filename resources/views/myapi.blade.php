<html>
<head>
    <title>My First Project</title>
    <h1> <center>Code With Babu</center></h1>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        .carousel-item img{
            width: 100%;
            height:80vh;
        }
        @import url('https://fonts.googleapis.com/css?family=Roboto:300,400');


a,a:hover{
  text-decoration: none;
}
.myform-area{
  overflow: hidden;
  padding: 60px 0;
  background: #f4fffe;
  position: relative;
  padding-top: 100px;
  padding-bottom: 100px;
}
.myform-area .form-area{
  position: relative;
  background: rgba(103,58,183,0.7);
  width: 100%;
  height: 400px;
  overflow: hidden;
  box-shadow: 0 0 40px 0 #e1e1e1;
}

.myform-area .form-area .form-content,
.myform-area .form-area .form-input{
    position: relative;
    width: 50%;
    height: 100%;
    float: left;
    box-sizing: border-box;
}

.myform-area .form-area .form-content{
  width: 50%;
  padding: 40px 30px;
}

.myform-area .form-area .form-content h2{
  color: #fff;
}
.myform-area .form-area .form-content p{
  color: #fff;
}
.myform-area .form-area .form-content ul{
  margin-top: 50px;
}

.myform-area .form-area .form-content ul li{
  display: inline-block;
  margin-right: 10px;
}
.myform-area .form-area .form-content a i{
    margin-right: 10px;
}

.myform-area .form-area .form-content .facebook{
  display: block;
  padding: 10px 20px;
  background: #3B579D;
  color: #fff;
  font-size: 15px;
  text-transform: capitalize;
  border-radius: 4px;
  border: 1px solid #3B579D;
  -webkit-transition: all .5s;
  -o-transition: all .5s;
  transition: all .5s;
}

.myform-area .form-area .form-content .facebook:hover,
.myform-area .form-area .form-content .facebook:focus{
    background: transparent;
}

.myform-area .form-area .form-content .twitter{
  display: block;
   padding: 10px 20px;
   background: #00ACED;
   color: #fff;
   font-size: 15px;
   text-transform: capitalize;
   border-radius: 4px;
   border: 1px solid #00ACED;
   -webkit-transition: all .5s;
   -o-transition: all .5s;
   transition: all .5s;
}

.myform-area .form-area .form-content .twitter:hover,
.myform-area .form-area .form-content .twitter:focus{
    background: transparent;
}
.myform-area .form-area .form-input{
  background-color: white;
  position: relative;
  overflow: hidden;
  box-shadow: 0 0 40px 0 #e1e1e1;
}
.myform-area .form-area .form-input{
    width: 50%;
    background: #fff;
    padding: 40px 30px;
}

.myform-area .form-area .form-input h2{
  margin-bottom: 20px;
    color: #07315B;
}

.myform-area .form-area .form-input input{
    position: relative;
    height: 60px;
    padding: 20px 0;
}
.myform-area .form-area .form-input textarea{
    height: 120px;
    padding: 20px 0;
}

.myform-area .form-area .form-input input,
.myform-area .form-area .form-input textarea{
    text-transform: capitalize;
    width: 100%;
    box-sizing: border-box;
    outline: none;
    border: none;
    border-bottom: 2px solid #e1e1e1;
    color: #07315B;
}
.myform-area .form-area .form-input form .form-group{
    position: relative;
}
.myform-area .form-area .form-input form .form-group label{
    position: absolute;
    text-transform: capitalize;
    top: 20px;
    left: 0;
    pointer-events: none;
    font-size: 14px;
    color: #595959;
    margin-bottom: 0;
    transition: all .6s;
}
.myform-area .form-area .form-input input:focus ~ label,
.myform-area .form-area .form-input textarea:focus ~ label,
.myform-area .form-area .form-input input:valid ~ label,
.myform-area .form-area .form-input textarea:valid ~ label{
    top: -5px;
    opacity: 0;
    left: 0;
    color: rgba(103,58,183);
    font-size: 12px;
    color: #07315B;
    font-weight: bold;
}
.myform-area .form-area .form-input input:focus,
.myform-area .form-area .form-input textarea:focus,
.myform-area .form-area .form-input input:valid,
.myform-area .form-area .form-input textarea:valid{
    border-bottom: 2px solid rgba(103,58,183);
}
.myform-area .form-area .form-text{
    margin-top: 30px;
}
.myform-area .form-area .form-text span a{
    color: rgba(103,58,183);
}
.myform-area .form-area .myform-button{
    margin-top: 30px;
}
.myform-area .form-area .myform-button .myform-btn{
    width: 100%;
    height: 50px;
    font-size: 17px;
    background: rgba(103,58,183);
    border: none;
    border-radius: 50px;
    color: #fff;
    cursor: pointer;
    -webkit-transition: all .5s;
    -o-transition: all .5s;
    transition: all .5s;
}
.myform-area .form-area .myform-button .myform-btn:hover{
    background: #07315B;
}
        </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Code With Babu</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://cdn.pixabay.com/photo/2018/05/15/22/33/mixer-3404462_1280.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://cdn.pixabay.com/photo/2017/08/19/12/28/rock-2658355_1280.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://cdn.pixabay.com/photo/2021/03/10/06/32/wave-6083655_1280.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<section class="myform-area">
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-lg-8">
                          <div class="form-area login-form">
                              <div class="form-content">
                                  <h2>Login</h2>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nonea non aperiam cum quas quod reprehenderit.</p>
                                  <ul>
                                      <li><a href="#" class="facebook"><i class="fa fa-facebook-f"></i><span>facebook</span></a></li>
                                      <li><a href="#" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a></li>
                                  </ul>
                              </div>
                              <div class="form-input">
                                  <h2>Login Form</h2>
                                  <form>
                                      <div class="form-group">
                                          <input type="text"  id="" name="name" required>
                                          <label>User Name</label>
                                      </div>
                                      <div class="form-group">
                                          <input type="password" id="" name="password" required>
                                          <label>password</label>
                                      </div>
                                      <div class="myform-button">
                                          <button class="myform-btn">Login</button>
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
