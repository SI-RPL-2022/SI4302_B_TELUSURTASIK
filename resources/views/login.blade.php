@extends('master')
@section('home')
active
@endsection

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.csscp .env.example .env" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    <title>TelusurTasik</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/templatemo-style.css">

</head>
    <body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
	<div class="container h-100" >
    		<div class="row h-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<p> Don't have an account? <a href=""> Register </a> <p>
							<h1 class="h2">Welcome to <img src=images/logo.png></h1>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<form>
										<div class="form-group">
											<label>Email</label>
											<input class="form-control form-control-lg" type="text" name="lastname" placeholder="Enter your last name">
										</div>
										<div class="form-group">
											<label>Password</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password">
										</div>
										<div class="form-check">
</div>
										<div class="text-center mt-3">
											<a href="index.html" class="btn btn-lg btn-warning">Login</a>
											<!-- <button type="submit" class="btn btn-lg btn-primary">Sign up</button> -->
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
</body>
</html>
@endsection
