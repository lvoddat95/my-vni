<!-- Sidebar -->

<div id="main-nav" class="sidebar">

    <!-- Mobile Top -->
    <div class="sidebar-mobile-toggler">
        <span>Danh sách Menu</span>
        <a href="#" class="sidebar-mobile-main-close">
            <i class="icon-arrow-left8"></i>
        </a>
    </div>
    <!-- Mobile Top -->

    <!-- Sidebar content -->
    <div class="sidebar-content">
        <!-- Logo -->
        <div class="logo clearfix">
            <a href="javascript:;" class="sidebar-main-toggle">
                <i class="fal fa-toggle-on"></i>
            </a>
            <a href="{{ route('home') }}" class="logo-text float-left">
                <div class="logo-img"><img src="{{ asset('themes/app-assets/images/logo/logo2.png') }}" alt="VNI Logo">
                </div>
                <span class="text align-middle" style="font-weight: 900;">@yield('text-logo')</span>
            </a>
        </div>
        <!-- End-Logo -->

        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">
                @php
                    
                    
                @endphp

                {{-- @foreach ($data as $item)

                    <li class="nav-item {{ $item->menuChildren->count() ? 'nav-item-submenu' : '' }}">
                        <a href="" class="nav-link">
                            <i class="fad fa-home fa-fw"></i>
                            <span class="menu-title">{{ $item->name }}</span>
                        </a>

                        @if ($item->menuChildren->count())
                            @include('frontend.layouts.partials.child-menu', ['item'=> $item])
                        @endif
                    </li>

                @endforeach --}}

                {{-- <li class="nav-item">
                    <a href="{{ route('frontend.qlac.index') }}" class="nav-link active" data-menu-title="Bảng điều khiển">
                        <i class="fad fa-home fa-fw"></i>
                        <span class="menu-title">Bảng điều khiển</span>
                    </a>
                </li> --}}

                {{-- <li class="nav-item nav-item-submenu">
                    <a href="javascript:;" class="nav-link">
                        <i class="fad fa-browser fa-fw"></i>
                        <span class="menu-title"> Pages Template</span>
                    </a>
                    <ul class="nav nav-group-sub" scrollbar data-submenu-title="Pages Template">
                        <li class="nav-item nav-item-submenu">
                            <a href="" class="nav-link">
                                <span class="menu-title">Bảo hiểm</span>
                            </a>
                            <ul class="nav nav-group-sub">
                                <li><a href="http://localhost/bhhk/view/pages/danh-sach-don.php" class="nav-link"><span
                                            class="menu-title">Danh sách đơn</span></a></li>
                                <li><a href="http://localhost/bhhk/view/pages/nhap-don.php" class="nav-link"><span
                                            class="menu-title">Nhập đơn</span></a></li>
                                <li><a href="http://localhost/bhhk/view/pages/nhap-don2.php" class="nav-link"><span
                                            class="menu-title">Nhập đơn 2</span></a></li>
                                <li><a href="http://localhost/bhhk/view/pages/xem-don.php" class="nav-link"><span
                                            class="menu-title">Xem đơn</span></a></li>
                                <li><a href="http://localhost/bhhk/view/pages/ban-chao/danh-sach-ban-chao.php"
                                        class="nav-link"><span class="menu-title">Bản chào</span></a></li>
                                <li><a href="http://localhost/bhhk/view/pages/don-cho-duyet.php" class="nav-link"><span
                                            class="menu-title">Đơn chờ duyệt</span></a></li>
                                <li><a href="http://localhost/bhhk/view/pages/xin-cap-so-hop-dong.php"
                                        class="nav-link"><span class="menu-title">Xin cấp số hợp đồng</span></a>
                                </li>
                                <li><a href="http://localhost/bhhk/view/pages/danh-sach-khach-hang.php"
                                        class="nav-link"><span class="menu-title">Danh sách khách
                                            hàng</span></a></li>
                                <li><a href="http://localhost/bhhk/view/pages/sdbs/gxx.php" class="nav-link"><span
                                            class="menu-title">Sửa đổi bổ sung Gxx</span></a>
                                </li>
                                <li><a href="http://localhost/bhhk/view/pages/sdbs/bxx.php" class="nav-link"><span
                                            class="menu-title">Sửa đổi bổ sung Bxx</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="" class="nav-link">
                                <span class="menu-title">Bồi thường</span>
                            </a>
                            <ul class="nav nav-group-sub">
                                <li><a href="http://localhost/bhhk/view/claim/danh-sach-ho-so.php"
                                        class="nav-link"><span class="menu-title">Danh sách hồ sơ</span></a>
                                </li>
                                <li><a href="http://localhost/bhhk/view/claim/xem-ho-so.php" class="nav-link"><span
                                            class="menu-title">Xem hồ sơ</span></a></li>
                                <li><a href="http://localhost/bhhk/view/claim/nhap-ho-so.php" class="nav-link"><span
                                            class="menu-title">Nhập hồ sơ</span></a></li>
                                <li><a href="http://localhost/bhhk/view/claim/danh-sach-ton-that.php"
                                        class="nav-link"><span class="menu-title">Danh sách tổn thất</span></a>
                                </li>
                                <li><a href="http://localhost/bhhk/view/claim/nhap-thong-bao-ton-that.php"
                                        class="nav-link"><span class="menu-title">Nhập tổn thất</span></a></li>
                                <li><a href="http://localhost/bhhk/view/claim/lap-pasc.php" class="nav-link"><span
                                            class="menu-title">Lập PASC</span></a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="" class="nav-link">
                                <span class="menu-title">Địa điểm</span>
                            </a>
                            <ul class="nav nav-group-sub">
                                <li><a href="http://localhost/bhhk/view/pages/danh-sach-dia-diem.php"
                                        class="nav-link"><span class="menu-title">Danh sách địa điểm</span></a>
                                </li>
                                <li><a href="http://localhost/bhhk/view/pages/nhap-dia-diem.php" class="nav-link"><span
                                            class="menu-title">Nhập địa điểm</span></a></li>

                            </ul>
                        </li>

                        <li><a href="http://localhost/bhhk/view/pages/login.php" class="nav-link"><span
                                    class="menu-title">Trang Login</span></a></li>
                        <li><a href="http://localhost/bhhk/view/pages/404.php" class="nav-link"><span
                                    class="menu-title">Trang 404</span></a></li>
                    </ul>
                </li>

                <li class="nav-item nav-item-submenu">
                    <a href="javascript:;" class="nav-link">
                        <i class="fad fa-car-side fa-fw"></i>
                        <span class="menu-title"> Bảo hiểm xe cơ giới</span>
                    </a>

                    <ul class="nav nav-group-sub" scrollbar data-submenu-title="Bảo hiểm xe cơ giới">
                        <li><a href="http://localhost/bhhk/view/insurance/MVP/f01.php" class="nav-link"><span
                                    class="menu-title">F01 - Bảo hiểm xe máy</span></a></li>
                        <li class="active"><a href="http://localhost/bhhk/view/insurance/MVP/f02.php"
                                class="nav-link"><span class="menu-title">F02 - Bảo hiểm ô tô</span></a></li>
                    </ul>
                </li>

                <li class="nav-item nav-item-submenu">
                    <a href="javascript:;" class="nav-link">
                        <i class="fad fa-user-shield fa-fw"></i>
                        <span class="menu-title"> Bảo hiểm con người</span>
                    </a>
                    <ul class="nav nav-group-sub" scrollbar data-submenu-title="Bảo hiểm con người">
                        <li><a href="http://localhost/bhhk/view/insurance/PER/g01.php" class="nav-link"><span
                                    class="menu-title">G01 - Bảo hiểm sức khỏe toàn diện</span></a></li>
                        <li><a href="http://localhost/bhhk/view/insurance/PER/g02.php" class="nav-link"><span
                                    class="menu-title">G02 - Bảo hiểm con người mức trách nhiệm cao (VNI
                                    Care)</span></a></li>
                        <li><a href="http://localhost/bhhk/view/insurance/PER/g03.php" class="nav-link"><span
                                    class="menu-title">G03 - Bảo hiểm tai nạn con người</span></a></li>
                        <li><a href="http://localhost/bhhk/view/insurance/PER/g04.php" class="nav-link"><span
                                    class="menu-title">G04 - Bảo hiểm tai nạn con người của Cologne
                                    Re</span></a></li>
                        <li><a href="http://localhost/bhhk/view/insurance/PER/g05.php" class="nav-link"><span
                                    class="menu-title">G05 - Bảo hiểm toàn diện học sinh</span></a></li>
                        <li><a href="http://localhost/bhhk/view/insurance/PER/g06.php" class="nav-link"><span
                                    class="menu-title">G06 - Bảo hiểm du lịch trong nước</span></a></li>
                        <li class="nav-item nav-item-submenu">
                            <a href="" class="nav-link"><span class="menu-title">G07 - Bảo hiểm du lịch quốc
                                    tế</span></a>
                            <ul class="nav nav-group-sub">
                                <li><a href="http://localhost/bhhk/view/insurance/PER/g07.php" class="nav-link"><span
                                            class="menu-title">G07.1 - Du lịch quốc
                                            tế</span></a></li>
                                <li><a href="http://localhost/bhhk/view/insurance/PER/g072.php" class="nav-link"><span
                                            class="menu-title">G07.2 - Người Việt Nam du lịch
                                            nước ngoài</span></a></li>
                                <li><a href="http://localhost/bhhk/view/insurance/PER/g073.php" class="nav-link"><span
                                            class="menu-title">G07.3 - Người nước ngoài du
                                            lịch Việt Nam</span></a></li>
                            </ul>
                        </li>

                        <li><a href="http://localhost/bhhk/view/insurance/PER/g08.php" class="nav-link"><span
                                    class="menu-title">G08 - Bảo hiểm sức khỏe giáo viên</span></a></li>
                        <li><a href="http://localhost/bhhk/view/insurance/PER/g09.php" class="nav-link"><span
                                    class="menu-title">G09 - Bảo hiểm tai nạn đối với người lao động</span></a>
                        </li>
                        <li><a href="http://localhost/bhhk/view/insurance/PER/g12.php" class="nav-link"><span
                                    class="menu-title">G12 - Bảo hiểm chăm sóc sức khỏe cá nhân White
                                    Lotus</span></a></li>
                        <li><a href="http://localhost/bhhk/view/insurance/PER/g13.php" class="nav-link"><span
                                    class="menu-title">G13 - Bảo hiểm tai nạn hộ sử dụng điện</span></a></li>
                        <li><a href="http://localhost/bhhk/view/insurance/PER/g16.php" class="nav-link"><span
                                    class="menu-title">G16 - Bảo hiểm sức khỏe người vay vốn</span></a></li>
                    </ul>
                </li>

                <li class="nav-item nav-item-submenu">
                    <a href="javascript:;" class="nav-link">
                        <i class="fad fa-sack-dollar fa-fw"></i>
                        <span class="menu-title"> Bảo hiểm xe tài sản</span>
                    </a>
                    <ul class="nav nav-group-sub" scrollbar data-submenu-title="Bảo hiểm xe tài sản">
                        <li><a href="http://localhost/bhhk/view/insurance/PRO/b01.php" class="nav-link"><span
                                    class="menu-title">B01 - Bảo hiểm hỏa hoạn và các rủi ro đặc biệt</span></a>
                        </li>
                        <li><a href="http://localhost/bhhk/view/insurance/PRO/b02.php" class="nav-link"><span
                                    class="menu-title">B02 - Bảo hiểm mọi rủi ro tài sản</span></a></li>
                        <li><a href="http://localhost/bhhk/view/insurance/PRO/b04.php" class="nav-link"><span
                                    class="menu-title">B04 - Bảo hiểm mọi rủi ro văn phòng</span></a></li>
                        <li><a href="http://localhost/bhhk/view/insurance/PRO/b05.php" class="nav-link"><span
                                    class="menu-title">B05 - Bảo hiểm mọi rủi ro nhà ở</span></a></li>
                        <li><a href="http://localhost/bhhk/view/insurance/PRO/b06.php" class="nav-link"><span
                                    class="menu-title">B06 - Bảo hiểm tiền</span></a></li>
                        <li><a href="http://localhost/bhhk/view/insurance/PRO/b07.php" class="nav-link"><span
                                    class="menu-title">B07 - Bảo hiểm hư hỏng hàng hóa trong kho lạnh</span></a>
                        </li>
                        <li><a href="http://localhost/bhhk/view/insurance/PRO/b08.php" class="nav-link"><span
                                    class="menu-title">B08 - Bảo hiểm lòng trung thành</span></a></li>
                        <li><a href="http://localhost/bhhk/view/insurance/PRO/b09.php" class="nav-link"><span
                                    class="menu-title">B09 - Chứng thư bảo lãnh</span></a></li>
                        <li><a href="http://localhost/bhhk/view/insurance/PRO/b12.php" class="nav-link"><span
                                    class="menu-title">B12 - Bảo hiểm bảng hiệu đèn quảng cáo</span></a></li>
                        <li><a href="http://localhost/bhhk/view/insurance/PRO/b17.php" class="nav-link"><span
                                    class="menu-title">B17 - Bảo hiểm vườn cây cao su</span></a></li>
                        <li><a href="http://localhost/bhhk/view/insurance/PRO/b18.php" class="nav-link"><span
                                    class="menu-title">B18 - Bảo hiểm mọi rủi ro trong công nghiệp</span></a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item nav-item-submenu">
                    <a href="javascript:;" class="nav-link">
                        <i class="fad fa-construction fa-fw"></i>
                        <span class="menu-title"> Bảo hiểm kĩ thuật</span>
                    </a>
                    <ul class="nav nav-group-sub" scrollbar data-submenu-title="Bảo hiểm kĩ thuật">
                        <li><a href="http://localhost/bhhk/view/insurance/BI/c01.php" class="nav-link"><span
                                    class="menu-title">C01 - Bảo hiểm mọi rủi ro trong xây dựng</span></a></li>
                        <li><a href="http://localhost/bhhk/view/insurance/BI/c02.php" class="nav-link"><span
                                    class="menu-title">C02 - Bảo hiểm mọi rủi ro trong lắp đặt</span></a></li>
                        <li><a href="http://localhost/bhhk/view/insurance/BI/c03.php" class="nav-link"><span
                                    class="menu-title">C03 - Bảo hiểm máy móc thiết bị của chủ thầu</span></a>
                        </li>
                        <li><a href="http://localhost/bhhk/view/insurance/BI/c04.php" class="nav-link"><span
                                    class="menu-title">C04 - Bảo hiểm đổ vỡ máy móc</span></a></li>
                        <li><a href="http://localhost/bhhk/view/insurance/BI/c06.php" class="nav-link"><span
                                    class="menu-title">C06 - Bảo hiểm thiết bị điện tử</span></a></li>
                        <li><a href="http://localhost/bhhk/view/insurance/BI/c07.php" class="nav-link"><span
                                    class="menu-title">C07 - Bảo hiểm mọi rủi ro máy móc thiết bị cho
                                    thuê</span></a></li>
                        <li><a href="http://localhost/bhhk/view/insurance/BI/c08.php" class="nav-link"><span
                                    class="menu-title">C08 - Bảo hiểm nồi hơi</span></a></li>
                        <li><a href="http://localhost/bhhk/view/insurance/BI/c09.php" class="nav-link"><span
                                    class="menu-title">C09 - Bảo hiểm toàn diện đối với máy móc thiết
                                    bị</span></a></li>
                        <li><a href="http://localhost/bhhk/view/insurance/BI/c10.php" class="nav-link"><span
                                    class="menu-title">C10 - Bảo hiểm công trình kĩ thuật dân dụng hoàn
                                    thành</span></a></li>
                    </ul>
                </li>

                <li class="nav-item nav-item-submenu">
                    <a href="javascript:;" class="nav-link">
                        <i class="fad fa-box-open fa-fw"></i>
                        <span class="menu-title"> Bảo hiểm hàng hóa</span>
                    </a>
                    <ul class="nav nav-group-sub" scrollbar data-submenu-title="Bảo hiểm hàng hóa">
                        <li class="nav-item nav-item-submenu">
                            <a href="" class="nav-link"><span class="menu-title">E01 - Bảo hiểm hàng hoá xuất
                                    nhập khẩu</span></a>
                            <ul class="nav nav-group-sub">
                                <li><a href="http://localhost/bhhk/view/insurance/COM/e011.php" class="nav-link"><span
                                            class="menu-title">E01.1 - Bảo hiểm hàng hoá xuất
                                            khẩu</span></a></li>
                                <li><a href="http://localhost/bhhk/view/insurance/COM/e012.php" class="nav-link"><span
                                            class="menu-title">E01.2 - Bảo hiểm hàng hoá nhập
                                            khẩu</span></a></li>
                            </ul>
                        </li>
                        <li><a href="http://localhost/bhhk/view/insurance/COM/e02.php" class="nav-link"><span
                                    class="menu-title">E02 - Bảo hiểm hàng hoá vận chuyển nội địa</span></a>
                        </li>
                        <li><a href="http://localhost/bhhk/view/insurance/COM/e06.php" class="nav-link"><span
                                    class="menu-title">E06 - Bảo hiểm trách nhiệm giao nhận tổng hợp</span></a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item nav-item-submenu">
                    <a href="javascript:;" class="nav-link">
                        <i class="fad fa-anchor fa-fw"></i>
                        <span class="menu-title"> Bảo hiểm tàu thuyền</span>
                    </a>
                    <ul class="nav nav-group-sub" scrollbar data-submenu-title="Bảo hiểm tàu thuyền">
                        <li><a href="http://localhost/bhhk/view/insurance/BFSB/d01.php" class="nav-link"><span
                                    class="menu-title">D01 - Bảo hiểm tàu biển</span></a></li>
                        <li><a href="http://localhost/bhhk/view/insurance/BFSB/d02.php" class="nav-link"><span
                                    class="menu-title">D02 - Bảo hiểm tàu sông, tàu ven biển</span></a></li>
                        <li><a href="http://localhost/bhhk/view/insurance/BFSB/d03.php" class="nav-link"><span
                                    class="menu-title">D03 - Bảo hiểm tàu cá</span></a></li>
                        <li><a href="http://localhost/bhhk/view/insurance/BFSB/d04.php" class="nav-link"><span
                                    class="menu-title">D04 - Bảo hiểm du thuyền</span></a></li>
                        <li><a href="http://localhost/bhhk/view/insurance/BFSB/d05.php" class="nav-link"><span
                                    class="menu-title">D05 - Bảo hiểm rủi ro đóng tàu</span></a></li>
                        <li><a href="http://localhost/bhhk/view/insurance/BFSB/d06.php" class="nav-link"><span
                                    class="menu-title">D06 - Bảo hiểm trách nhiệm người sửa chữa tàu</span></a>
                        </li>
                        <li><a href="http://localhost/bhhk/view/insurance/BFSB/d07.php" class="nav-link"><span
                                    class="menu-title">D07 - Bảo hiểm trách nhiệm dân sự chủ tầu viễn dương
                                    (P&amp;I mutual)</span></a></li>
                        <li><a href="http://localhost/bhhk/view/insurance/BFSB/d08.php" class="nav-link"><span
                                    class="menu-title">D08 - Bảo hiểm bắt cóc và đòi tiền chuộc</span></a></li>
                        <li><a href="http://localhost/bhhk/view/insurance/BFSB/d09.php" class="nav-link"><span
                                    class="menu-title">D09 - Bảo hiểm trang thiết bị hàng hải</span></a></li>
                    </ul>
                </li>

                <li class="nav-item nav-item-submenu">
                    <a href="javascript:;" class="nav-link">
                        <i class="fad fa-shield fa-fw"></i>
                        <span class="menu-title"> Bảo hiểm trách nhiệm</span>
                    </a>
                    <ul class="nav nav-group-sub" scrollbar data-submenu-title="Bảo hiểm trách nhiệm">
                        <li><a href="http://localhost/bhhk/view/insurance/CRL/h01.php" class="nav-link"><span
                                    class="menu-title">H01 - Bảo hiểm trách nhiệm nghề nghiệp</span></a></li>
                        <li><a href="http://localhost/bhhk/view/insurance/CRL/h02.php" class="nav-link"><span
                                    class="menu-title">H02 - Bảo hiểm trách nhiệm sản phẩm</span></a></li>
                        <li><a href="http://localhost/bhhk/view/insurance/CRL/h03.php" class="nav-link"><span
                                    class="menu-title">H03 - Bảo hiểm trách nhiệm công cộng</span></a></li>
                        <li><a href="http://localhost/bhhk/view/insurance/CRL/h04.php" class="nav-link"><span
                                    class="menu-title">H04 - Bảo hiểm trách nhiệm giải thưởng (Hole in
                                    one)</span></a></li>
                        <li><a href="http://localhost/bhhk/view/insurance/CRL/h08.php" class="nav-link"><span
                                    class="menu-title">H08 - Bảo hiểm trách nhiệm hoạt động cảng</span></a></li>
                        <li><a href="http://localhost/bhhk/view/insurance/CRL/h09.php" class="nav-link"><span
                                    class="menu-title">H09 - Bảo hiểm trách nhiệm nghề nghiệp tư vấn trong đầu
                                    tư xây dựng (bắt buộc)</span></a></li>
                    </ul>
                </li>

                <li class="nav-item nav-item-submenu">
                    <a href="javascript:;" class="nav-link">
                        <i class="fad fa-plane fa-fw"></i>
                        <span class="menu-title">Bảo hiểm hàng không</span>
                    </a>
                    <ul class="nav nav-group-sub" scrollbar data-submenu-title="Bảo hiểm hàng không">
                        <li class="nav-item nav-item-submenu">
                            <a href="a01.html" class="nav-link">
                                <span class="menu-title"> A01 - Bảo hiểm thân, phụ tùng máy bay và trách nhiệm
                                    hàng không</span>
                            </a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item nav-item-submenu">
                                    <a href="" class="nav-link">
                                        <span class="menu-title">Bảo hiểm thân máy bay</span>
                                    </a>
                                    <ul class="nav nav-group-sub">
                                        <li>
                                            <a href="" class="nav-link">
                                                <span class="menu-title">Bảo hiểm phụ tùng máy bay</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="nav-link">
                                                <span class="menu-title">Trách nhiệm hàng không</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="a02.html" class="nav-link"><span class="menu-title"> A02 - Bảo hiểm thân
                                    máy bay dưới mức miễn thường </span></a></li>
                        <li><a href="a03.html" class="nav-link"><span class="menu-title">A03 - Bảo hiểm thân,
                                    phụ tùng máy bay đối với rủi ro chiến tranh</span></a></li>
                        <li><a href="a04.html" class="nav-link"><span class="menu-title">A04 - Bảo hiểm trách
                                    nhiệm đối với rủi ro chiến tranh</span></a></li>
                        <li><a href="a05.html" class="nav-link"><span class="menu-title">A05 - Bảo hiểm mất khả
                                    năng sử dụng máy bay</span></a></li>
                        <li><a href="a06.html" class="nav-link"><span class="menu-title">A06 - Bảo hiểm tai nạn
                                    nhân viên tổ bay</span></a></li>
                        <li><a href="a07.html" class="nav-link"><span class="menu-title">A07 - Phí Cty BH
                                    gốc</span></a></li>
                    </ul>
                </li>

                <li class="nav-item nav-item-submenu">
                    <a href="javascript:;" class="nav-link">
                        <i class="fad fa-gas-pump fa-fw"></i>
                        <span class="menu-title"> Bảo hiểm dầu khí</span>
                    </a>
                    <ul class="nav nav-group-sub" scrollbar data-submenu-title="Bảo hiểm dầu khí">
                        <li><a href="" class="nav-link">
                                <div class="menu-title">I01 - Bảo hiểm dầu khí</div>
                            </a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="javascript:;" class="nav-link">
                        <i class="fad fa-repeat fa-fw"></i>
                        <span class="menu-title"> Nhận tái cố định</span>
                    </a>

                    <ul class="nav nav-group-sub" scrollbar data-submenu-title="Nhận tái cố định">
                        <li><a href="j01.html" class="nav-link"><span class="menu-title">J01 - Nhận tái cố định
                                    nhóm bảo hiểm hàng hóa</span></a></li>
                        <li><a href="j04.html" class="nav-link"><span class="menu-title">J04 - Nhận tái cố định
                                    nhóm bảo hiểm hàng không</span></a></li>
                        <li><a href="j05.html" class="nav-link"><span class="menu-title">J05 - Nhận tái cố định
                                    nhóm bảo hiểm tài sản</span></a></li>
                        <li><a href="j06.html" class="nav-link"><span class="menu-title">J06 - Nhận tái cố định
                                    nhóm bảo hiểm kỹ thuật</span></a></li>
                        <li><a href="j07.html" class="nav-link"><span class="menu-title">J07 - Nhận tái cố định
                                    nhóm bảo hiểm tàu thuyền</span></a></li>
                        <li><a href="j08.html" class="nav-link"><span class="menu-title">J08 - Nhận tái cố định
                                    nhóm bảo hiểm xe cơ giới</span></a></li>
                        <li><a href="j09.html" class="nav-link"><span class="menu-title">J09 - Nhận tái cố định
                                    nhóm bảo hiểm con người</span></a></li>
                        <li><a href="j10.html" class="nav-link"><span class="menu-title">J10 - Nhận tái cố định
                                    nhóm bảo hiểm trách nhiệm</span></a></li>
                        <li><a href="j11.html" class="nav-link"><span class="menu-title">J11 - Nhận tái cố định
                                    nhóm bảo hiểm dầu khí</span></a></li>
                    </ul>
                </li> --}}

            </ul>
        </div>
        <!-- End-Main navigation -->

        <!-- BOX -->
        <div class="sup-box mt-5 d-none">
            <div class="sup-up">
                <h3>Hỗ trợ khẩn cấp</h3>
                <p>Liên hệ ngay cho tôi !</p>
            </div>
            <img class="img" src="http://localhost/bhhk/app-assets/images/sidebar-bg/chat.png" alt="">
            <div class="sup-down">
                <p><a href=""><i class="fad fa-comment-lines mr-1"></i> <span>Chat</span></a></p>
                <p><a href=""><i class="fad fa-phone-rotary mr-1"></i> <span>Call</span></a></p>
            </div>
        </div>
        <!-- End-BOX -->
    </div>
    <!-- End-Sidebar content -->

</div>

<!-- /Sidebar -->