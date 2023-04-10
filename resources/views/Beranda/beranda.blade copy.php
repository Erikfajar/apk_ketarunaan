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
        @include('include.header-beranda')
                    
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
						<li class="breadcrumb-item active"><a href="javascript:void(0)">DASHBOARD</a>
                        </li>
						{{-- <li class="breadcrumb-item"><a href="javascript:void(0)">Carousel</a></li> --}}
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"></h4>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-pills justify-content-end mb-4">
                                    <li class=" nav-item">
                                        <a href="#navpills2-1" class="nav-link active" data-bs-toggle="tab" aria-expanded="false">DOKUMENTASI</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#navpills2-2" class="nav-link" data-bs-toggle="tab" aria-expanded="false">PENJELASAN FITUR</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="navpills2-1" class="tab-pane active">
                                        <div class="row">
                                            <div class="col-md-12"> 
                                                <p style="text-indent: 45px; font-size:20px">
                                                     Aplikasi ini peruntukan/digunakan untuk mencatat nama Taruna dan Taruni yang melanggar, Aplikasi ini juga bisa untuk mencatat Taruna dan Taruni yang berprestasi, dan yang terakhir Aplikasi ini juga bisa untuk menyusun sebuah kegiatan seperti kegiatan untuk Latdastar atau yang lainnya.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="navpills2-2" class="tab-pane">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p style=" font-size:20px">
                                                   Aplikasi ini ada banyak Fitur yaitu:
                                                </p>
                                                    <br>
                                                    <p style="font-size: 20px">
                                                        1. Data Pelanggaran
                                                    </p>
                                                    <br>
                                                    <p style="text-indent: 45px; font-size:17px">
                                                    Didalam Fitur Data Pelanggaran ini anda bisa menambahkan nama Taruna/i yang melanggar, anda juga bisa menambahkan gambar orang yang melakukan pelanggaran itu biar ada bukti yang jelas, fitur ini juga dilengkapi dengan Export ke Excel dan save PDF atau langsung Print.
                                                    
                                                    </p>
                                                    <br>
                                                    <p style="font-size: 20px">
                                                        2. Data Prestasi
                                                    </p>
                                                    <br>
                                                    <p style="text-indent: 45px; font-size:17px">
                                                        Didalam Fitur Data Prestasi ini anda bisa menambahkan nama Taruna/i yang berprestasi, anda juga bisa menambahkan gambar orang yang berprestasi, fitur ini juga dilengkapi dengan Export ke Excel dan save PDF atau langsung Print.
                                                    </p>
                                                    <br>
                                                    <p style="font-size: 20px">
                                                        3. Cetak Pertanggal
                                                    </p>
                                                    <br>
                                                    <p style="text-indent: 45px; font-size:17px">
                                                        Didalam fitur Cetak Pertanggal anda bisa mencetak data pelanggaran dan Prestasi Taruna/i dari tingkat 1 sampai tingkat 3, anda hanya tinggal memasukan tanggal awal cetak dan tanggal akhir cetak.
                                                    </p>
                                                    <br>
                                                    <p style="font-size: 20px">
                                                        4. Catatan
                                                    </p>
                                                    <br>
                                                    <p style="text-indent: 45px; font-size:17px">
                                                        Difitur catatan ini anda bisa menuliskan catatan atau susunan kegiatan untuk tanggal berapa dan jam berapa, difitur ini anda juga bisa langsung cetak atau save ke PDF.
                                                    </p>
                                                    @foreach ($catatan as $item)
                                                    {{ $item->id }}
                                                    @endforeach
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

    {{-- <script src="Template/vendor/moment/moment.min.js"></script>
    <script src="Template/vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- clockpicker -->
    <script src="Template/vendor/clockpicker/js/bootstrap-clockpicker.min.js"></script>
    <!-- asColorPicker -->
    <script src="Template/vendor/jquery-asColor/jquery-asColor.min.js"></script>
    <script src="Template/vendor/jquery-asGradient/jquery-asGradient.min.js"></script>
    <script src="Template/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js"></script>
    <!-- Material color picker -->
    <script src="Template/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- pickdate -->
    <script src="Template/vendor/pickadate/picker.js"></script>
    <script src="Template/vendor/pickadate/picker.time.js"></script>
    <script src="Template/vendor/pickadate/picker.date.js"></script>



    <!-- Daterangepicker -->
    <script src="Template/js/plugins-init/bs-daterange-picker-init.js"></script>
    <!-- Clockpicker init -->
    <script src="Template/js/plugins-init/clock-picker-init.js"></script>
    <!-- asColorPicker init -->
    <script src="Template/js/plugins-init/jquery-asColorPicker.init.js"></script>
    <!-- Material color picker init -->
    <script src="Template/js/plugins-init/material-date-picker-init.js"></script>
    <!-- Pickdate -->
    <script src="Template/js/plugins-init/pickadate-init.js"></script>

	<script src="Template/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

    <script src="Template/js/custom.min.js"></script>
	<script src="Template/js/dlabnav-init.js"></script>
	<script src="Template/js/demo.js"></script>
    <script src="Template/js/styleSwitcher.js"></script> --}}

</body>
</html>