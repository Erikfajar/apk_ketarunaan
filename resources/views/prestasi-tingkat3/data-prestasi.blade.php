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
        @include('include.headerPres3')
                    
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
						<li class="breadcrumb-item"><a href="javascript:void(0)">Table Prestasi</a></li>
					</ol>
                </div>
                <!-- row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Prestasi</h4>
                                <a href="{{ route('exportprestasi3') }}" class="btn light btn-success" style="margin-left: 27em">Export <i class="fa-sharp fa-solid fa-file-excel"></i></a>
                                <a href="{{ route('cetak-data-prestasi-form3') }}" class="btn light btn-secondary">Cetak Pertanggal <i class="fa-sharp fa-solid fa-file-excel"></i></a>
                                <a href="{{ route('create-prestasi3') }}" class="btn light btn-primary">Tambah <i class="fa-solid fa-plus"></i></i></a>
                                <a href="{{ route('cetak-prestasi3') }}" class="btn light btn-danger" target="_blank">SavePDF <i class="fa-solid fa-file-pdf"></i></a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th style="width:80px;"><strong>No</strong></th>
                                                <th><strong>Nit_Taruna/i</strong></th>
                                                <th><strong>Nama</strong></th>
                                                <th><strong>Tingkat</strong></th>
                                                <th><strong>Jurusan</strong></th>
                                                <th><strong>Lomba Yg diikuti</strong></th>
                                                <th><strong>Juara</strong></th>
                                                <th><strong>Tanggal</strong></th>
                                                <th><strong>Gambar</strong></th>
                                                <th><strong>Aksi</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($prestasi as $index => $item)
                                            <tr>
                                                <td><strong>{{ $index + $prestasi->firstItem()}}</strong></td>
                                                <td>{{ $item->nit }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->tingkat }}</td>
                                                <td>{{ $item->jurusan }}</td>
                                                <td>{{ $item->lomba }}</td>
                                                <td>{{ $item->juara }}</td>
                                                <td>{{ date('d-m-Y', strtotime($item->tgl)) }}</td>
                                                <td>
                                                    <a href="{{ asset('imgPrestasi3/'. $item->gambar) }}" target="_blank" rel="noopener noreferrer">Lihat Gambar</a>
                                                </td>
                                                <td>
													<div class="dropdown">
														<button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
															<svg width="20px" height="20px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="{{ url('edit-prestasi3',$item->id) }}">Edit</a>
															<a class="dropdown-item" href="{{ url('delete-prestasi3', $item->id) }}">Delete</a>
														</div>
													</div>
												</td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                    {{ $prestasi->links() }}
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