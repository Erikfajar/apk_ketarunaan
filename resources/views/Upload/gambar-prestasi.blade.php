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
						<li class="breadcrumb-item"><a href="javascript:void(0)">Prestasi</a></li>
					</ol>
                </div>
                <!-- row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Gambar Prestasi</h4>
                                <a href="{{ route('create-prestasii') }}" class="btn btn-success" style="margin-left: 34em">Tambah <i class="fa-sharp fa-solid fa-file-excel"></i></a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th style="width:80px;"><strong>No</strong></th>
                                                <th><strong>Nama Yg Terlibat</strong></th>
                                                <th><strong>detail</strong></th>
                                                <th><strong>Tanggal</strong></th>
                                                <th><strong>Gambar</strong></th>
                                                <th><strong>Aksi</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach ($sii as $item)  
                                           <tr>
                                               <td><strong>{{ $loop->iteration }}</strong></td>
                                               <td>{{ $item->nama }}</td>
                                               <td>{{ $item->detail }}</td>
                                               <td>{{ date('d-m-Y', strtotime($item->tgl)) }}</td>
                                               <td>
                                                <a href="{{ asset('imgPrestasi/'. $item->gambar) }}" target="_blank" rel="noopener noreferrer">Lihat Gambar</a>
                                               </td>
                                               <td>
                                                   <div class="dropdown">
                                                       <button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
                                                           <svg width="20px" height="20px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</button>
														<div class="dropdown-menu">
                                                            <a class="dropdown-item" href="{{ url('edit-gambar-prestasi',$item->id) }}">Edit</a>
															<a class="dropdown-item" href="{{ url('delete-gambar-prestasi', $item->id) }}">Delete</a>
														</div>
													</div>
												</td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
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
    @include('sweetalert::alert')

</body>
</html>