@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Sliders
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" href="{{ asset('vendors/ion_rangeslider/css/ion.rangeSlider.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/ion_rangeslider/css/ion.rangeSlider.skinFlat.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap-slider/css/bootstrap-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/pages/ion.css') }}" />
    <style>
        .tooltip.tooltip-main {
            margin-top: -40px;
        }
        .slider-handle:hover .tooltip{
            opacity: 1;
        }
        .slider-horizontal .slider-handle:hover .slider-horizontal .tooltip.show{
            opacity:1;
        }
        .slider_tooltip .tooltip.tooltip-main.tooltip-top {
            opacity: .9!important;
        }
    </style>
@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <!--section starts-->
        <h1>Sliders</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#">UI Components</a>
            </li>
            <li class="active">Sliders</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content">
        <!--main content-->
        <div class="row">
            <div class="col-md-12">
                <div class="card panel-primary">
                    <div class="card-heading">
                        <h3 class="card-title">
                            <i class="livicon" data-name="download" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Ion Range Sliders
                        </h3>
                        <span class="pull-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                    </div>
                    <div class="card-body" id="slim1">
                        <!--ion-->
                        <!--<div class="row">-->
                        <form role="form" class="form-horizontal form-bordered">
                            <div class="form-body">
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Basic Slider</label>
                                        <div class="col-md-10">
                                            <input id="example_1" class="form-control" type="text" name="" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Money Range</label>
                                        <div class="col-md-10">
                                            <input id="example_2" type="text" name="" value=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Gold Range</label>
                                        <div class="col-md-10">
                                            <input id="example_3" type="text" name="" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Temperature Slider</label>
                                        <div class="col-md-10">
                                            <input id="example_4" type="text" name="" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Month Slider</label>
                                        <div class="col-md-10">
                                            <input id="example_5" type="text" name="" value="" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-2 control-label">Year Range</label>
                                            <div class="col-md-10">
                                                <input id="example_6" type="text" name="" value="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Year Slider</label>
                                        <div class="col-md-10">
                                            <input id="example_7" type="text" name="" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group last">
                                    <div class="row">
                                        <label class="col-md-2 control-label">Ion range Slider</label>
                                        <div class="col-md-10">
                                            <input id="example_8" type="text" name="" value="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--ion ends-->
                </div>
            </div>

            <div class="col-md-12 my-2">
                <div class="card panel-success">
                    <div class="card-heading">
                        <h3 class="card-title">
                            <i class="livicon" data-name="globe" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Bootstrap Sliders
                        </h3>
                        <span class="pull-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                    </div>
                    <div class="card-body" id="slim2">
                        <!--slider-->
                        <div class="row">
                            <div class="col-12">
                                <form role="form" class="form-horizontal form-bordered">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <div class="row my-2">
                                                <label class="col-md-2 control-label">Basic Slider</label>
                                                <div class="col-md-10">
                                                    {{--<input id="ex6" type="text" data-slider-min="-5" data-slider-max="20" data-slider-step="1" data-slider-value="3"/>--}}
                                                    {{--<span id="ex6CurrentSliderValLabel">Current Slider Value: <span id="ex6SliderVal">3</span></span>--}}
                                                    <input id="ex1" data-slider-id='ex1Slider' type="text" class="slider form-control" data-slider-handle="square" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row my-5">
                                                <label class="col-md-2 control-label">Money Range</label>
                                                <div class="col-md-10"> <b style="margin-right: 15px;">€ 10</b>
                                                    <input id="ex2" type="text" data-slider-id='ex2' class="slider form-control" data-slider-handle="square" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[250,450]"/> <b style="margin-left: 15px;">€ 1000</b>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row my-3">
                                                <label class="col-md-2 control-label">Color Range</label>
                                                <div class="col-md-10">
                                                    <div class="well">
                                                        <p>
                                                            <b  style="margin-right: 15px;">R</b>
                                                            <input type="text" class="slider form-control" value="" data-slider-min="0" data-slider-max="255" data-slider-step="1" data-slider-value="128" data-slider-id="RC" id="R" data-slider-tooltip="hide" data-slider-handle="square" />
                                                        </p>
                                                        <p>
                                                            <b style="margin-right: 15px;">G</b>
                                                            <input type="text" class="slider form-control" value="" data-slider-min="0" data-slider-max="255" data-slider-step="1" data-slider-value="128" data-slider-id="GC" id="G" data-slider-tooltip="hide" data-slider-handle="round" />
                                                        </p>
                                                        <p>
                                                            <b style="margin-right: 15px;">B</b>
                                                            <input type="text" class="slider form-control" value="" data-slider-min="0" data-slider-max="255" data-slider-step="1" data-slider-value="128" data-slider-id="BC" id="B" data-slider-tooltip="hide" data-slider-handle="triangle" />
                                                        </p>
                                                        <div id="RGB"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <div class="row my-2">
                                                    <label class="col-md-2 control-label">Vertical Slider</label>
                                                    <div class="col-md-10">
                                                        <input id="ex4" type="text" class="slider form-control" data-slider-id='ex4' data-slider-handle="square" data-slider-min="-5" data-slider-max="20" data-slider-step="1" data-slider-value="-3" data-slider-orientation="vertical" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group destroy-margt">
                                                <div class="row my-5">
                                                    <label class="col-md-2 control-label">Destroy</label>
                                                    <div class="col-md-10">
                                                        <input id="ex5"  type="text" data-slider-min="-5" data-slider-max="20" data-slider-step="1" data-slider-handle="square" data-slider-value="0" />
                                                        <button type="button" id="destroyEx5Slider" class='btn btn-danger'>Click to Destroy</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row my-5">
                                                    <label class="col-md-2 control-label">Current Range</label>
                                                    <div class="col-md-10">
                                                        <input id="bootstrap_slider6" type="text" class="form-control" data-slider-id='bootstrap_slider6' data-slider-min="-5" data-slider-handle="square" data-slider-max="20" data-slider-step="1" data-slider-value="3"/>
                                                        <span id="ex6CurrentSliderValLabel" style="margin-left: 10px;">
                                                                Current Slider Value:
                                                                <span id="ex6SliderVal">3</span>
                                                            </span>
                                                    </div>
                                                </div>



                                            </div>
                                            <div class="form-group">
                                                <div class="row my-5">
                                                    <label class="col-md-2 control-label">Enable Slider</label>
                                                    <div class="col-md-10">
                                                        <input id="ex7" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="5" data-slider-enabled="false" data-slider-handle="square" data-slider-id="RED"/>
                                                        <input id="ex7-enabled" type="checkbox" style="margin-left: 10px;"/> Enabled
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group slider_tooltip">
                                                <div class="row my-5">
                                                    <label class="col-md-2 control-label">Tooltip Slider</label>
                                                    <div class="col-md-10">
                                                        <input id="ex8" class="slider form-control" data-slider-id='ex8' type="text" data-slider-min="0" data-slider-handle="square" data-slider-max="20" data-slider-step="1" data-slider-value="14" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group last">
                                                <div class="row my-5">
                                                    <label class="col-md-2 control-label">Precision Slider</label>
                                                    <div class="col-md-10">
                                                        <input id="ex9" class="slider form-control" data-slider-id='ex9' data-slider-handle="square" type="text" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <!--slider ends-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--main content ends-->
    </section>
    <!-- content -->

@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script src="{{ asset('vendors/ion_rangeslider/js/ion.rangeSlider.js') }}" ></script>
    <script src="{{ asset('vendors/bootstrap-slider/js/bootstrap-slider.js') }}" ></script>
    <script src="{{ asset('vendors/ion_rangeslider/js/ion.rangeSlider.js') }}" ></script>
    <script src="{{ asset('vendors/bootstrap-slider/js/bootstrap-slider.js') }}" ></script>
    <script src="{{ asset('js/pages/sliders.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(".tooltip").addClass('tooltip-top').removeClass('top');
            $(".slider").on("mouseenter mouseleave", function() {
                $(this).find(".tooltip.tooltip-main").toggleClass("show").removeClass("in");
            });
//        $(".slider-track + .tooltip").toggleClass('show').toggleClass('in');
//

        });
    </script>
@stop
