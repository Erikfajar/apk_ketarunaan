

<!DOCTYPE html>
<html lang="en" class="h-100">

@include('include.head')

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-5">
                    <div class="form-input-content text-center error-page">
                        <h1 class="error-text fw-bold"><i class="fa-solid fa-circle-exclamation"></i></h1>
                        <h4><i class="fa fa-thumbs-down text-danger"></i> Bad Request</h4>
                        <p>Anda Memasukan Email dan Password yang salah</p>
						<div>
                            <a class="btn btn-primary" href="{{ route('login') }}">Back to Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
@include('include.script')
</body>
</html>