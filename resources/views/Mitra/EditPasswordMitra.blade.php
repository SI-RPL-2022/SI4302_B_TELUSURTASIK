<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Dashboard Mitra</title>


  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



  <!-- Custom styles for this template -->
  <link href="/css/dashboard.css" rel="stylesheet">
</head>
<body>

  <header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow" style="background-color:#f7f7f7;">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><img class="logo" src="https://drive.google.com/uc?export=view&id=1zsX29peLxMzYsdWqq9zcYBtmUTwXIv8n" width="140"></a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="nav-item dropdown">
      <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
        <img class="rounded-circle me-lg-2" src="/images/{{$user->photo_user}}" alt="" style="width: 40px; height: 40px;">
        <span class="d-none d-lg-inline-flex">{{ Auth::user()->name }}</span>
      </a>  
      <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
          <a href="{{url('/showProfileMitra/'.Auth::user()->id)}}" class="dropdown-item">My Profile</a>
          <form action="logout" method="post">
              @csrf
              <button type="submit" class="nav-link px-3 border-0" style="background-color:#f7f7f7;color:#7AC678;">Logout <span data-feather="log-out"></span></button>

          </form>
      </div>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background-color:#f7f7f7;">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/dashboard">
                <span data-feather="home"></span>
                Data Wisata
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="database"></span>
                Data Ulasan
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="help-circle"></span>
                Customer Service
              </a>
            </li>
          </ul>

        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

      <div class="container bootstrap snippets bootdey align-self-center">
        <h1 class="">Edit Profile</h1>
        <hr>
	    <div class="row">
      <!-- left column -->
      
      
   
      <!-- edit form column -->
            <div class="col-md-9 personal-info">
                @if(session('error'))
                <div class="alert alert-danger" role="alert">
                {{ session('error') }}
                </div>
                @endif
                @if(session('message'))
                <div class="alert alert-success" role="alert">
                    <a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a>
                    <strong>SUCCESS:</strong>&nbsp;{{ session('message') }}
                </div>
                @endif

                
                <h3 class="">Edit Password</h3>
                
                <form class="form-horizontal" role="form" method="post" action="/passwordsubmit" enctype="multipart/form-data">
                @method('put')
                @csrf 
                <div class="form-group">
                    <label class="col-lg-3 control-label" for="current_password">Current Password</label>
                    <div class="col-lg-8">
                    <input class="form-control" id="current_password" type="password" name="current_password" >
                    </div>
                </div>
                

                <div class="form-group">
                    <label class="col-lg-3 control-label" for="password">New Password</label>
                    <div class="col-lg-8">
                    <input class="form-control" id="password" type="password" name="password"  required>
                    </div>
                </div>
                    
                    
                <div class="form-group">
                    <label class="col-lg-3 control-label" for="password_confirm">Confirm Password</label>
                    <div class="col-lg-8">
                    <input class="form-control" id="password_confirm" type="password" name="password_confirm" required>
                    </div>
                </div>
                
                <br>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-warning col-8 btn-sm">Submit</button>
                </div>  
                </form>
                
                
            </div>
        
        </div>
      </div>
      <hr>

      </main>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  <script src="/js/dashboard.js"></script>
</body>
</html>
