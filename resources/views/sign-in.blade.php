
@extends('components.header')
@section('content')


<head>

<link rel="stylesheet" href="assets/css/sign.css">
</head>

<body>
 <form action="/signin" method="POST">
    @csrf
	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						
			          	
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
                                   
                                    <div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Sign In</h4>
											<div class="form-group">
												<input type="email" class="form-style" placeholder="Email" name="email">
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" class="form-style" placeholder="Password" name="password">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<button class="btn mt-4">SignIn</button>
                      <p class="mb-0 mt-4 text-center"><a href="#" class="link">Forgot your password?</a></p>
				      					</div>
			      					</div>
			      				</div>
								
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>
 </form>
@endsection
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>