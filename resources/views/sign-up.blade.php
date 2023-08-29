
@extends('components.header')
@section('content')


<head>

<link rel="stylesheet" href="assets/css/sign.css">

</head>

<body>
	<section class="page-title centred">
        <div class="outer-container">
            <div class="bg-layer" style="background-image: url(assets/images/background/signup.jpg);"></div>
            <div class="large-container">
                <div class="title-box">
                    <h2>Register Here</h2>
                </div>
            </div>
        </div>
    </section>


{{--
 <form action="/sign" method="POST">
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
											<h4 class="mb-3 pb-3">Sign Up</h4>
											<div class="form-group">
												<input type="text" class="form-style" placeholder="User Name" name="name">
												<i class="input-icon uil uil-user"></i>
											</div>

                      <div class="form-group mt-2">
												<input type="email" class="form-style" placeholder="Email" name="email">
												<i class="input-icon uil uil-at"></i>
											</div>
											<div class="form-group mt-2">
												<input type="password" class="form-style" placeholder="Password" name="password">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<button class="btn mt-4">Register</button>
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
 </form> --}}

 <section class="contact-page-section">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-6.png);"></div>
    <div class="large-container">
        <div class="row align-items-center">
            <div class="col-lg-12 col-md-12 col-sm-12 form-column">
                <div class="form-inner">
                    <div class="sec-title">
                        <span class="sub-title">Contact Us</span>
                        <h3>Do you need any help?</h3>
                    </div>
                    <form action="/sign" method="POST" id="contact-form" class="default-form">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <input type="text" name="name" placeholder="User Name" required="">
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                <input type="email" placeholder="Email" name="email" required="">
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                <input type="password" placeholder="Password" name="password" required="">
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn text-center">
                                <button class="theme-btn btn-one" type="submit" name="submit-form">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
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
