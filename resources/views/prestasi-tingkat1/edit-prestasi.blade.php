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
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Data Prestasi</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Edit Data Prestasi </a></li>
					</ol>
                </div>
                <!-- row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit Prestasi</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('update-prestasi',$pres->id) }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="text" id="nit" name="nit" class="form-control" placeholder="Nit Taruna/i" value="{{ $pres->nit }}">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Taruna/i" value="{{ $pres->nama }}">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <select name="tingkat" id="tingkat" class="form-control">
                                            <option value="X">{{ $pres->tingkat }}</option>
                                        </select>
                                    </div>
                                    <br>
                                      <div class="form-group">
                                        <select name="jurusan" id="jurusan" class="form-control">
                                         <option selected>{{ $pres->jurusan }}</option>
                                         <option value="ATPH">ATPH</option>
                                         <option value="APHP">APHP</option>
                                         <option value="ATU">ATU</option>
                                         <option value="TLOG">TLOG</option>
                                         <option value="TITL">TITL</option>
                                         <option value="TAB">TAB</option>
                                         <option value="TPM">TPM</option>
                                         <option value="TSM">TSM</option>
                                         <option value="TKN">TKN</option>
                                         <option value="NKN">NKN</option>
                                         <option value="NKPI">NKPI</option>
                                         <option value="APAT">APAT</option>
                                         <option value="KULINER">KULINER</option>
                                         <option value="DPB">DPB</option>
                                         <option value="ULW">ULW</option>
                                         <option value="RPL">RPL</option>
                                       
                                        </select>
                                         
                                     </div>
                                    <br>
                                    <div class="form-group">
                                        <input type="text" id="lomba" name="lomba" class="form-control" placeholder="Lomba Yang Diikuti" value="{{ $pres->lomba }}">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <input type="text" id="juara" name="juara" class="form-control" placeholder="Dapat Juara Berapa" value="{{ $pres->juara }}">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <input type="date" id="tgl" name="tgl" class="form-control" value="{{ $pres->tgl }}">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <p>Harap gambar dimasukan ulang!</p>
                                    </div>
                                    <div class="form-group">
                                        <input type="file" id="gambar" name="gambar" required>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <img src="{{ asset('imgPrestasi1/'.$pres->gambar) }}" height="10%" width="50%" alt="" srcset="">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <input type="date" id="tgl" name="tgl" class="form-control" value="{{ $pres->tgl }}">
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