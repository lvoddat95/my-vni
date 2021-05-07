@extends('frontend.layouts.master')

@section('title')
Trang chủ BHHK
@endsection

@section('text-logo')
VNI
@endsection

@section('content')
    <section>
        <div class="sec-report">
            <div class="row">
                <div class="col-xl-4 col-md-4 col-sm-4 col-6">
                    <div class="card bg-white">
                        <div class="card-body">
                            <div class="card-block pt-2 pb-0">
                                <div class="media">
                                    <div class="media-body white text-left">
                                        <p class="font-size-s card-title mb-0 ">120,890,000₫</p>
                                        <span class="grey darken-1">Doanh thu hôm nay</span>
                                    </div>
                                    <div class="media-right text-right">
                                        <i class="fad fa-sack-dollar text-indigo-700" style="font-size: 26px;"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="WidgetlineChart lineChartWidget mb-2">
                                <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%"
                                    class="ct-chart-line" style="width: 100%; height: 100%;">
                                    <g class="ct-grids"></g>
                                    <g>
                                        <g class="ct-series ct-series-a">
                                            <path
                                                d="M10,95L10,95C51.499,95,51.499,60.333,92.997,60.333C134.496,60.333,134.496,79,175.994,79C217.493,79,217.493,15,258.991,15C300.49,15,300.49,47,341.989,47C383.487,47,383.487,20.333,424.986,20.333L424.986,95Z"
                                                class="ct-area"></path>
                                            <path
                                                d="M10,95C51.499,95,51.499,60.333,92.997,60.333C134.496,60.333,134.496,79,175.994,79C217.493,79,217.493,15,258.991,15C300.49,15,300.49,47,341.989,47C383.487,47,383.487,20.333,424.986,20.333"
                                                class="ct-line"></path>
                                            <circle cx="10" cy="95" r="10" class="ct-point-circle-transperent"></circle>
                                            <circle cx="92.99715576171874" cy="60.333333333333336" r="10"
                                                class="ct-point-circle-transperent"></circle>
                                            <circle cx="175.9943115234375" cy="79" r="10"
                                                class="ct-point-circle-transperent"></circle>
                                            <circle cx="258.9914672851562" cy="15" r="10" class="ct-point-circle"></circle>
                                            <circle cx="341.988623046875" cy="47" r="10"
                                                class="ct-point-circle-transperent"></circle>
                                            <circle cx="424.98577880859375" cy="20.33333333333333" r="10"
                                                class="ct-point-circle-transperent"></circle>
                                        </g>
                                    </g>
                                    <g class="ct-labels"></g>
                                    <defs>
                                        <linearGradient id="wGradient" x1="0" y1="1" x2="0" y2="0">
                                            <stop offset="0" stop-color="rgba(130,73,232, 1)"></stop>
                                            <stop offset="1" stop-color="rgba(41,123,249, 1)"></stop>
                                        </linearGradient>
                                    </defs>
                                    <line x1="341.988623046875" x2="341.988623046875" y1="95" y2="15"
                                        class="ct-target-line"></line>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-sm-4 col-6">
                    <div class="card bg-white">
                        <div class="card-body">
                            <div class="card-block pt-2 pb-0">
                                <div class="media">
                                    <div class="media-body white text-left">
                                        <p class="font-size-s card-title mb-0">$45,670,000</p>
                                        <span class="grey darken-1">Thanh toán bồi thường</span>
                                    </div>
                                    <div class="media-right text-right">
                                        <i class="fad fa-credit-card text-danger" style="font-size: 26px;"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="WidgetlineChart1 lineChartWidget mb-2">
                                <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%"
                                    class="ct-chart-line" style="width: 100%; height: 100%;">
                                    <g class="ct-grids"></g>
                                    <g>
                                        <g class="ct-series ct-series-a">
                                            <path
                                                d="M10,95L10,95C51.499,95,51.499,60.333,92.997,60.333C134.496,60.333,134.496,79,175.994,79C217.493,79,217.493,15,258.991,15C300.49,15,300.49,47,341.989,47C383.487,47,383.487,20.333,424.986,20.333L424.986,95Z"
                                                class="ct-area"></path>
                                            <path
                                                d="M10,95C51.499,95,51.499,60.333,92.997,60.333C134.496,60.333,134.496,79,175.994,79C217.493,79,217.493,15,258.991,15C300.49,15,300.49,47,341.989,47C383.487,47,383.487,20.333,424.986,20.333"
                                                class="ct-line"></path>
                                            <circle cx="10" cy="95" r="10" class="ct-point-circle-transperent"></circle>
                                            <circle cx="92.99715576171874" cy="60.333333333333336" r="10"
                                                class="ct-point-circle-transperent"></circle>
                                            <circle cx="175.9943115234375" cy="79" r="10"
                                                class="ct-point-circle-transperent"></circle>
                                            <circle cx="258.9914672851562" cy="15" r="10" class="ct-point-circle"></circle>
                                            <circle cx="341.988623046875" cy="47" r="10"
                                                class="ct-point-circle-transperent"></circle>
                                            <circle cx="424.98577880859375" cy="20.33333333333333" r="10"
                                                class="ct-point-circle-transperent"></circle>
                                        </g>
                                    </g>
                                    <g class="ct-labels"></g>
                                    <defs>
                                        <linearGradient id="wGradient1" x1="0" y1="0" x2="0" y2="1">
                                            <stop offset="0" stop-color="rgba(252,157,48, 1)"></stop>
                                            <stop offset="1" stop-color="rgba(250,91,76, 1)"></stop>
                                        </linearGradient>
                                    </defs>
                                    <line x1="341.988623046875" x2="341.988623046875" y1="95" y2="15"
                                        class="ct-target-line"></line>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-sm-4 col-6">
                    <div class="card bg-white">
                        <div class="card-body">
                            <div class="card-block pt-2 pb-0">
                                <div class="media">
                                    <div class="media-body white text-left">
                                        <p class="font-size-s card-title mb-0">1,220</p>
                                        <span class="grey darken-1">Đơn bảo hiểm mới</span>
                                    </div>
                                    <div class="media-right text-right">
                                        <i class="fad fa-layer-plus text-success" style="font-size: 26px;"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="WidgetlineChart2 lineChartWidget mb-2">
                                <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%"
                                    class="ct-chart-line" style="width: 100%; height: 100%;">
                                    <g class="ct-grids"></g>
                                    <g>
                                        <g class="ct-series ct-series-a">
                                            <path
                                                d="M10,95L10,95C51.499,95,51.499,60.333,92.997,60.333C134.496,60.333,134.496,79,175.994,79C217.493,79,217.493,15,258.991,15C300.49,15,300.49,47,341.989,47C383.487,47,383.487,20.333,424.986,20.333L424.986,95Z"
                                                class="ct-area"></path>
                                            <path
                                                d="M10,95C51.499,95,51.499,60.333,92.997,60.333C134.496,60.333,134.496,79,175.994,79C217.493,79,217.493,15,258.991,15C300.49,15,300.49,47,341.989,47C383.487,47,383.487,20.333,424.986,20.333"
                                                class="ct-line"></path>
                                            <circle cx="10" cy="95" r="10" class="ct-point-circle-transperent"></circle>
                                            <circle cx="92.99715576171874" cy="60.333333333333336" r="10"
                                                class="ct-point-circle-transperent"></circle>
                                            <circle cx="175.9943115234375" cy="79" r="10"
                                                class="ct-point-circle-transperent"></circle>
                                            <circle cx="258.9914672851562" cy="15" r="10" class="ct-point-circle"></circle>
                                            <circle cx="341.988623046875" cy="47" r="10"
                                                class="ct-point-circle-transperent"></circle>
                                            <circle cx="424.98577880859375" cy="20.33333333333333" r="10"
                                                class="ct-point-circle-transperent"></circle>
                                        </g>
                                    </g>
                                    <g class="ct-labels"></g>
                                    <defs>
                                        <linearGradient id="wGradient2" x1="0" y1="0" x2="0" y2="1">
                                            <stop offset="0" stop-color="rgba(120, 204, 55, 1)"></stop>
                                            <stop offset="1" stop-color="rgba(0, 75, 145, 1)"></stop>
                                        </linearGradient>
                                    </defs>
                                    <line x1="341.988623046875" x2="341.988623046875" y1="95" y2="15"
                                        class="ct-target-line"></line>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sec-aplication">
            <div class="card">
                <div class="card-header">
                    <p class="card-title text-center font-size-s"><i class="icon-grid5 mr-2 bg-indigo-700"
                            style="height: 30px;width: 30px;text-align: center;line-height: 30px;border-radius: 50%;"></i>Danh
                        sách ứng dụng</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-4">
                            <div class="about-box bg-theme-10">
                                <div class="about-opacity-icon">
                                    <i class="fad fa-shield" aria-hidden="true"></i>
                                </div>
                                <div class="about-main-icon">
                                    <i class="fad fa-shield" aria-hidden="true"></i>
                                </div>
                                <h5 class="mb-0 font-size-s">Bảo lãnh</h5>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-4">
                            <div class="about-box bg-theme-9">
                                <div class="about-opacity-icon">
                                    <i class="fad fa-sack-dollar" aria-hidden="true"></i>
                                </div>
                                <div class="about-main-icon">
                                    <i class="fad fa-sack-dollar" aria-hidden="true"></i>
                                </div>
                                <h5 class="mb-0 font-size-s">Bồi thường</h5>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-4">
                            <div class="about-box bg-blue-400">
                                <div class="about-opacity-icon"> <i class="fad fa-repeat" aria-hidden="true"></i> </div>
                                <div class="about-main-icon">
                                    <i class="fad fa-repeat" aria-hidden="true"></i>
                                </div>
                                <h5 class="mb-0 font-size-s">Tái bảo hiểm</h5>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 col-4">
                            <div class="about-box bg-pink-500">
                                <div class="about-opacity-icon"> <i class="fad fa-calculator" aria-hidden="true"></i> </div>
                                <div class="about-main-icon">
                                    <i class="fad fa-calculator" aria-hidden="true"></i>
                                </div>
                                <h5 class="mb-0 font-size-s">Kế toán</h5>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 col-4">
                            <div class="about-box bg-theme-11" onclick="window.location='{{ route('frontend.qlac.index') }}'">
                                <div class="about-opacity-icon"> <i class="fad fa-file-certificate" aria-hidden="true"></i>
                                </div>
                                <div class="about-main-icon">
                                    <i class="fad fa-file-certificate" aria-hidden="true"></i>
                                </div>
                                <h5 class="mb-0 font-size-s">Ấn Chỉ</h5>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-4">
                            <div class="about-box bg-teal-600">
                                <div class="about-opacity-icon"> <i class="fad fa-analytics" aria-hidden="true"></i> </div>
                                <div class="about-main-icon">
                                    <i class="fad fa-analytics" aria-hidden="true"></i>
                                </div>
                                <h5 class="mb-0 font-size-s">Báo cáo</h5>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-4">
                            <div class="about-box bg-indigo-700">
                                <div class="about-opacity-icon"> <i class="fad fa-archive" aria-hidden="true"></i> </div>
                                <div class="about-main-icon">
                                    <i class="fad fa-archive" aria-hidden="true"></i>
                                </div>
                                <h5 class="mb-0 font-size-s">Danh mục dùng chung</h5>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-4">
                            <div class="about-box bg-purple-600">
                                <div class="about-opacity-icon"> <i class="fad fa-users-cog" aria-hidden="true"></i> </div>
                                <div class="about-main-icon">
                                    <i class="fad fa-users-cog" aria-hidden="true"></i>
                                </div>
                                <h5 class="mb-0 font-size-s">Quản trị người dùng</h5>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-4">
                            <div class="about-box bg-theme-16">
                                <div class="about-opacity-icon"> <i class="fad fa-money-check-edit" aria-hidden="true"></i>
                                </div>
                                <div class="about-main-icon">
                                    <i class="fad fa-money-check-edit" aria-hidden="true"></i>
                                </div>
                                <h5 class="mb-0 font-size-s">Cấp đơn Bancassurance</h5>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
