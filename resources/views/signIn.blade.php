<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SignIn</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="{{asset("assets1/css/styles.min.css")}}" />
</head>

<body>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <div class="text-center">
                    <h3 class="text-nowrap d-block pt-3"><b>POCKETPILL</b></h3>
                    <h5>Sign In</h5>
                </div>
                <form>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                    </div>
                    <div class="mb-4">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <a href="{{ route('catalog')}}" class="btn btn-primary w-100 py-8 fs-4 mb-3 rounded-2">Sign In</a>
                    <div class="d-flex align-items-center justify-content-between mb-2">
                    <a class="tprimary ext-fw-bold" href="">Forgot Password ?</a>
                    </div>
                    <div class="justify-content-center">
                        <p>Don't Have An Account?<a class="text-primary fw-bold ms-1" href="{{route("register")}}"> Create Account</a></p>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{asset("assets1/libs/jquery/dist/jquery.min.js")}}"></script>
  <script src="{{asset("assets1/libs/bootstrap/dist/js/bootstrap.bundle.min.js")}}"></script>
</body>

</html>