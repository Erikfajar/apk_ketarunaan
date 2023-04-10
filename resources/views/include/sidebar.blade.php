<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="dropdown header-profile">
                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                    <img src="{{ asset('logo.png') }}" width="20" alt="">
                    <div class="header-info ms-3">
                        <span class="font-w600 ">Hi,<b>Selamat Datang</b></span>
                        {{-- <small class="text-end font-w400"></small> --}}
                    </div>
                </a>
                {{-- <div class="dropdown-menu dropdown-menu-end">
                    <a href="app-profile.html" class="dropdown-item ai-icon">
                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        <span class="ms-2">Profile </span>
                    </a>
                    <a href="email-inbox.html" class="dropdown-item ai-icon">
                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        <span class="ms-2">Inbox </span>
                    </a>
                    <a href="page-error-404.html" class="dropdown-item ai-icon">
                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                        <span class="ms-2">Logout </span>
                    </a>
                </div> --}}
            </li>
            {{-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-025-dashboard"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('beranda') }}">Dashboard</a></li>
                    
                </ul>

            </li> --}}
            <li><a href="{{ route('beranda') }}" class="ai-icon" aria-expanded="false">
                <i class="flaticon-025-dashboard"></i>
                <span class="nav-text">Dashboard</span>
            </a>
            {{-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-050-info"></i>
                    <span class="nav-text">Apps</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="app-profile.html">Profile</a></li>
                    <li><a href="post-details.html">Post Details</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                        <ul aria-expanded="false">
                            <li><a href="email-compose.html">Compose</a></li>
                            <li><a href="email-inbox.html">Inbox</a></li>
                            <li><a href="email-read.html">Read</a></li>
                        </ul>
                    </li>
                    <li><a href="app-calender.html">Calendar</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                        <ul aria-expanded="false">
                            <li><a href="ecom-product-grid.html">Product Grid</a></li>
                            <li><a href="ecom-product-list.html">Product List</a></li>
                            <li><a href="ecom-product-detail.html">Product Details</a></li>
                            <li><a href="ecom-product-order.html">Order</a></li>
                            <li><a href="ecom-checkout.html">Checkout</a></li>
                            <li><a href="ecom-invoice.html">Invoice</a></li>
                            <li><a href="ecom-customers.html">Customers</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-041-graph"></i>
                    <span class="nav-text">Charts</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="chart-flot.html">Flot</a></li>
                    <li><a href="chart-morris.html">Morris</a></li>
                    <li><a href="chart-chartjs.html">Chartjs</a></li>
                    <li><a href="chart-chartist.html">Chartist</a></li>
                    <li><a href="chart-sparkline.html">Sparkline</a></li>
                    <li><a href="chart-peity.html">Peity</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-086-star"></i>
                    <span class="nav-text">Bootstrap</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="ui-accordion.html">Accordion</a></li>
                    <li><a href="ui-alert.html">Alert</a></li>
                    <li><a href="ui-badge.html">Badge</a></li>
                    <li><a href="ui-button.html">Button</a></li>
                    <li><a href="ui-modal.html">Modal</a></li>
                    <li><a href="ui-button-group.html">Button Group</a></li>
                    <li><a href="ui-list-group.html">List Group</a></li>
                    <li><a href="ui-card.html">Cards</a></li>
                    <li><a href="ui-carousel.html">Carousel</a></li>
                    <li><a href="ui-dropdown.html">Dropdown</a></li>
                    <li><a href="ui-popover.html">Popover</a></li>
                    <li><a href="ui-progressbar.html">Progressbar</a></li>
                    <li><a href="ui-tab.html">Tab</a></li>
                    <li><a href="ui-typography.html">Typography</a></li>
                    <li><a href="ui-pagination.html">Pagination</a></li>
                    <li><a href="ui-grid.html">Grid</a></li>

                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-045-heart"></i>
                    <span class="nav-text">Plugins</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="uc-select2.html">Select 2</a></li>
                    <li><a href="uc-nestable.html">Nestedable</a></li>
                    <li><a href="uc-noui-slider.html">Noui Slider</a></li>
                    <li><a href="uc-sweetalert.html">Sweet Alert</a></li>
                    <li><a href="uc-toastr.html">Toastr</a></li>
                    <li><a href="map-jqvmap.html">Jqv Map</a></li>
                    <li><a href="uc-lightgallery.html">Light Gallery</a></li>
                </ul>
            </li>
            <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-013-checkmark"></i>
                    <span class="nav-text">Widget</span>
                </a>
            </li> --}}
            {{-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-072-printer"></i>
                    <span class="nav-text">Data Gambar</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('gambar-pelanggar') }}">Pelanggaran</a></li>
                    <li><a href="{{ route('gambar-prestasi') }}">Prestasi</a></li>
                </ul>
            </li> --}}
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-043-menu"></i>
                    <span class="nav-text">Data Pelanggaran</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('data-melanggar') }}">TINGKAT X</a></li>
                    <li><a href="{{ route('data-melanggar2') }}">TINGKAT XI</a></li>
                    <li><a href="{{ route('data-melanggar3') }}">TINGKAT XII</a></li>
                    {{-- <li><a href="{{ route('cetak-data-taruna-form') }}">Cetak Pertanggal</a></li> --}}
                </ul>
            </li>
           
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-022-copy"></i>
                    <span class="nav-text">Data Prestasi</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('data-prestasi') }}">TINGKAT X</a></li>
                    <li><a href="{{ route('data-prestasi2') }}">TINGKAT XI</a></li>
                    <li><a href="{{ route('data-prestasi3') }}">TINGKAT XII</a></li>
                    {{-- <li><a href="{{ route('cetak-data-prestasi-form') }}">Cetak Pertanggal X</a></li>
                    <li><a href="{{ route('cetak-data-prestasi-form') }}">Cetak Pertanggal XI</a></li>
                    <li><a href="{{ route('cetak-data-prestasi-form') }}">Cetak Pertanggal XII</a></li> --}}
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-072-printer"></i>
                <span class="nav-text">Cetak Pertanggal</span>
            </a>
            <ul aria-expanded="false">
                {{-- <li><a href="{{ route('cetak-pertanggal') }}">CETAK PELANGGARAN</a></li>
                <li><a href="{{ route('cetak-pertanggal-prestasi') }}">CETAK PRESTASI</a></li> --}}
                <li><a href="{{ route('cetak-data-taruna-form') }}">PELANGGARAN X</a></li>
                <li><a href="{{ route('cetak-data-taruna-form2') }}">PELANGGARAN XI</a></li>
                <li><a href="{{ route('cetak-data-taruna-form3') }}">PELANGGARAN XII</a></li>
                <li><a href="{{ route('cetak-data-prestasi-form') }}">PRESTASI X</a></li>
                <li><a href="{{ route('cetak-data-prestasi-form2') }}">PRESTASI XI</a></li>
                <li><a href="{{ route('cetak-data-prestasi-form3') }}">PRESTASI XII</a></li>
            </ul>
        </li>
        <li><a href="{{ route('logout') }}" class="ai-icon" aria-expanded="false">
            <i class="fa-solid fa-right-from-bracket fa-lg"></i>
            <span class="nav-text">Logout</span>
        </a>
    </li>
            {{-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
            
                <i class="flaticon-022-copy"></i>
                    <span class="nav-text">Catatan</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('catatan') }}">Catatan Kegiatan</a></li>
                </ul>
            </li> --}}
            {{-- <div class="copyright">
                <p><strong style="text-align: center">Kirim tanggapan atau saran anda ke</strong>
                    <a href="https://instagram.com/riksz13?igshid=ZDdkNTZiNTM= " target="_blank" class="btn btn-primary">Instagram <i class="fa-brands fa-instagram"></i></a></p>
                    <a href="https://wa.link/0lu2tn" target="_blank" class="btn btn-primary">Whats App <i class="fa-brands fa-whatsapp"></i></a></p>
                
            </div> --}}
           {{-- <p class="fs-12">Made with <span class="heart"></span> by DexignLab</p> --}}
        </ul>
    </div>
</div>