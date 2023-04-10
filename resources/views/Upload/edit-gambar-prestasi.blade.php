<!DOCTYPE html>
<html lang="en">

@include('include.head')

<body>

    <!--*******************
        Preloader start
    ********************-->
    @include('include.loading')
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
       @include('include.navheader')
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Chat box start
        ***********************************-->
		@include('include.chatbox')
		<!--**********************************
            Chat box End
        ***********************************-->


		
		
        <!--**********************************
            Header start
        ***********************************-->
        @include('include.header')
                    
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
       @include('include.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Data Gambar</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Edit Gambar Prestasi</a></li>
					</ol>
                </div>
                <!-- row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit Gambar Prestasi</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('update-gambar-prestasi',$dtprestasi->id) }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Gambar" value="{{ $dtprestasi->nama }}">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <input type="text" id="detail" name="detail" class="form-control" placeholder="detail" value="{{ $dtprestasi->detail }}">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <input type="date" id="tgl" name="tgl" class="form-control" value="{{ $dtprestasi->tgl }}">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <input type="file" id="gambar" name="gambar">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <img src="{{ asset('imgPrestasi/'. $dtprestasi->gambar) }}" height="10%" width="50%" alt="" srcset="">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                                    </div>
                                  </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        @include('include.footer')
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    @include('include.script')
</body>
</html>