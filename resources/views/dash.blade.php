
@extends('dashboard')
@section('content')
<div class="container-full">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xl-8 col-12">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-6">
                        <div class="box">
                            <div class="box-body text-center">
                                <div class="bg-primary-light rounded10 p-20 mx-auto w-100 h-100">
                                    <img src="../images/svg-icon/medical/icon-1.svg" class="" alt="">
                                </div>
                                <p class="text-fade mt-15 mb-5">Total Users</p>
                                <h2 class="mt-0">{{$total_user}}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-6">
                        <div class="box">
                            <div class="box-body text-center">
                                <div class="bg-danger-light rounded10 p-20 mx-auto w-100 h-100">
                                    <img src="../images/svg-icon/medical/icon-2.svg" class="" alt="">
                                </div>
                                <p class="text-fade mt-15 mb-5">Total products</p>
                                <h2 class="mt-0">{{$total_product}}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-6">
                        <div class="box">
                            <div class="box-body text-center">
                                <div class="bg-warning-light rounded10 p-20 mx-auto w-100 h-100">
                                    <img src="../images/svg-icon/medical/icon-3.svg" class="" alt="">
                                </div>
                                <p class="text-fade mt-15 mb-5">Total Orders</p>
                                <h2 class="mt-0">{{$total_order}}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-6">
                        <div class="box">
                            <div class="box-body text-center">
                                <div class="bg-info-light rounded10 p-20 mx-auto w-100 h-100">
                                    <img src="../images/svg-icon/medical/icon-4.svg" class="" alt="">
                                </div>
                                <p class="text-fade mt-15 mb-5">Total Transactions</p>
                                <h2 class="mt-0">{{$total_transaction}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-12">
                        <div class="box">
                            <div class="box-header">
                                <h4 class="box-title">Daily Revenue Report</h4>
                            </div>
                            <div class="box-body" style="position: relative;">
                                <h3 class="text-primary mt-0">$32,485 <small class="text-muted">$12,458</small></h3>
                                <div id="recent_trend" style="min-height: 260px;"><div id="apexchartskedmyft5" class="apexcharts-canvas apexchartskedmyft5 apexcharts-theme-light" style="width: 590px; height: 260px;"><svg id="SvgjsSvg1944" width="590" height="260" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="590" height="260"><div class="apexcharts-legend apexcharts-align-center position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px 5px; position: absolute;"><div class="apexcharts-legend-series" rel="1" data:collapsed="false" style="margin: 0px 5px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(0, 208, 255); color: rgb(0, 208, 255); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 2px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="Income" data:collapsed="false" style="color: rgb(186, 192, 199); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Income</span></div><div class="apexcharts-legend-series" rel="2" data:collapsed="false" style="margin: 0px 5px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(50, 70, 211); color: rgb(50, 70, 211); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 2px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Expense" data:collapsed="false" style="color: rgb(186, 192, 199); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Expense</span></div></div><style type="text/css">

  .apexcharts-legend {
    display: flex;
    overflow: auto;
    padding: 0 10px;
  }
  .apexcharts-legend.position-bottom, .apexcharts-legend.position-top {
    flex-wrap: wrap
  }
  .apexcharts-legend.position-right, .apexcharts-legend.position-left {
    flex-direction: column;
    bottom: 0;
  }
  .apexcharts-legend.position-bottom.apexcharts-align-left, .apexcharts-legend.position-top.apexcharts-align-left, .apexcharts-legend.position-right, .apexcharts-legend.position-left {
    justify-content: flex-start;
  }
  .apexcharts-legend.position-bottom.apexcharts-align-center, .apexcharts-legend.position-top.apexcharts-align-center {
    justify-content: center;
  }
  .apexcharts-legend.position-bottom.apexcharts-align-right, .apexcharts-legend.position-top.apexcharts-align-right {
    justify-content: flex-end;
  }
  .apexcharts-legend-series {
    cursor: pointer;
    line-height: normal;
  }
  .apexcharts-legend.position-bottom .apexcharts-legend-series, .apexcharts-legend.position-top .apexcharts-legend-series{
    display: flex;
    align-items: center;
  }
  .apexcharts-legend-text {
    position: relative;
    font-size: 14px;
  }
  .apexcharts-legend-text *, .apexcharts-legend-marker * {
    pointer-events: none;
  }
  .apexcharts-legend-marker {
    position: relative;
    display: inline-block;
    cursor: pointer;
    margin-right: 3px;
    border-style: solid;
  }

  .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{
    display: inline-block;
  }
  .apexcharts-legend-series.apexcharts-no-click {
    cursor: auto;
  }
  .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
    display: none !important;
  }
  .apexcharts-inactive-legend {
    opacity: 0.45;
  }</style></foreignObject><g id="SvgjsG1946" class="apexcharts-inner apexcharts-graphical" transform="translate(45.63535118103027, 40)"><defs id="SvgjsDefs1945"><linearGradient id="SvgjsLinearGradient1950" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1951" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1952" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1953" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskkedmyft5"><rect id="SvgjsRect1955" width="540.3646488189697" height="170.99519938278198" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskkedmyft5"><rect id="SvgjsRect1956" width="538.3646488189697" height="172.99519938278198" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect1954" width="19.084451743534633" height="168.99519938278198" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1950)" class="apexcharts-xcrosshairs" y2="168.99519938278198" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1977" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1978" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1980" font-family="Helvetica, Arial, sans-serif" x="38.168903487069265" y="197.99519938278198" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#bac0c7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1981">10 May</tspan><title>10 May</title></text><text id="SvgjsText1983" font-family="Helvetica, Arial, sans-serif" x="114.5067104612078" y="197.99519938278198" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#bac0c7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1984">11 May</tspan><title>11 May</title></text><text id="SvgjsText1986" font-family="Helvetica, Arial, sans-serif" x="190.84451743534635" y="197.99519938278198" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#bac0c7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1987">12 May</tspan><title>12 May</title></text><text id="SvgjsText1989" font-family="Helvetica, Arial, sans-serif" x="267.18232440948486" y="197.99519938278198" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#bac0c7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1990">13 May</tspan><title>13 May</title></text><text id="SvgjsText1992" font-family="Helvetica, Arial, sans-serif" x="343.5201313836234" y="197.99519938278198" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#bac0c7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1993">14 May</tspan><title>14 May</title></text><text id="SvgjsText1995" font-family="Helvetica, Arial, sans-serif" x="419.8579383577619" y="197.99519938278198" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#bac0c7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1996">15 May</tspan><title>15 May</title></text><text id="SvgjsText1998" font-family="Helvetica, Arial, sans-serif" x="496.19574533190047" y="197.99519938278198" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#bac0c7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1999">16 May</tspan><title>16 May</title></text></g><line id="SvgjsLine2000" x1="0" y1="169.99519938278198" x2="534.3646488189697" y2="169.99519938278198" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"></line></g><g id="SvgjsG2013" class="apexcharts-grid"><g id="SvgjsG2014" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2024" x1="0" y1="0" x2="534.3646488189697" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2025" x1="0" y1="42.248799845695494" x2="534.3646488189697" y2="42.248799845695494" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2026" x1="0" y1="84.49759969139099" x2="534.3646488189697" y2="84.49759969139099" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2027" x1="0" y1="126.74639953708649" x2="534.3646488189697" y2="126.74639953708649" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2028" x1="0" y1="168.99519938278198" x2="534.3646488189697" y2="168.99519938278198" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG2015" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2016" x1="0" y1="169.99519938278198" x2="0" y2="175.99519938278198" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2017" x1="76.33780697413853" y1="169.99519938278198" x2="76.33780697413853" y2="175.99519938278198" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2018" x1="152.67561394827706" y1="169.99519938278198" x2="152.67561394827706" y2="175.99519938278198" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2019" x1="229.0134209224156" y1="169.99519938278198" x2="229.0134209224156" y2="175.99519938278198" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2020" x1="305.3512278965541" y1="169.99519938278198" x2="305.3512278965541" y2="175.99519938278198" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2021" x1="381.68903487069264" y1="169.99519938278198" x2="381.68903487069264" y2="175.99519938278198" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2022" x1="458.02684184483115" y1="169.99519938278198" x2="458.02684184483115" y2="175.99519938278198" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2023" x1="534.3646488189697" y1="169.99519938278198" x2="534.3646488189697" y2="175.99519938278198" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2030" x1="0" y1="168.99519938278198" x2="534.3646488189697" y2="168.99519938278198" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine2029" x1="0" y1="1" x2="0" y2="168.99519938278198" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1958" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1959" class="apexcharts-series" rel="1" seriesName="Income" data:realIndex="0"><path id="SvgjsPath1961" d="M 19.084451743534633 168.99519938278198L 19.084451743534633 65.73601937623707Q 27.62667761530195 58.19379350446975 36.168903487069265 65.73601937623707L 36.168903487069265 65.73601937623707L 36.168903487069265 168.99519938278198L 36.168903487069265 168.99519938278198z" fill="rgba(0,208,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskkedmyft5)" pathTo="M 19.084451743534633 168.99519938278198L 19.084451743534633 65.73601937623707Q 27.62667761530195 58.19379350446975 36.168903487069265 65.73601937623707L 36.168903487069265 65.73601937623707L 36.168903487069265 168.99519938278198L 36.168903487069265 168.99519938278198z" pathFrom="M 19.084451743534633 168.99519938278198L 19.084451743534633 168.99519938278198L 36.168903487069265 168.99519938278198L 36.168903487069265 168.99519938278198L 36.168903487069265 168.99519938278198L 19.084451743534633 168.99519938278198" cy="61.9649064403534" cx="94.42225871767316" j="0" val="76" barHeight="107.03029294242857" barWidth="19.084451743534633"></path><path id="SvgjsPath1962" d="M 95.42225871767316 168.99519938278198L 95.42225871767316 53.06137942252841Q 103.96448458944047 45.5191535507611 112.50671046120779 53.06137942252841L 112.50671046120779 53.06137942252841L 112.50671046120779 168.99519938278198L 112.50671046120779 168.99519938278198z" fill="rgba(0,208,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskkedmyft5)" pathTo="M 95.42225871767316 168.99519938278198L 95.42225871767316 53.06137942252841Q 103.96448458944047 45.5191535507611 112.50671046120779 53.06137942252841L 112.50671046120779 53.06137942252841L 112.50671046120779 168.99519938278198L 112.50671046120779 168.99519938278198z" pathFrom="M 95.42225871767316 168.99519938278198L 95.42225871767316 168.99519938278198L 112.50671046120779 168.99519938278198L 112.50671046120779 168.99519938278198L 112.50671046120779 168.99519938278198L 95.42225871767316 168.99519938278198" cy="49.290266486644754" cx="170.7600656918117" j="1" val="85" barHeight="119.70493289613722" barWidth="19.084451743534633"></path><path id="SvgjsPath1963" d="M 171.7600656918117 168.99519938278198L 171.7600656918117 30.528686171490826Q 180.30229156357902 22.98646029972351 188.84451743534632 30.528686171490826L 188.84451743534632 30.528686171490826L 188.84451743534632 168.99519938278198L 188.84451743534632 168.99519938278198z" fill="rgba(0,208,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskkedmyft5)" pathTo="M 171.7600656918117 168.99519938278198L 171.7600656918117 30.528686171490826Q 180.30229156357902 22.98646029972351 188.84451743534632 30.528686171490826L 188.84451743534632 30.528686171490826L 188.84451743534632 168.99519938278198L 188.84451743534632 168.99519938278198z" pathFrom="M 171.7600656918117 168.99519938278198L 171.7600656918117 168.99519938278198L 188.84451743534632 168.99519938278198L 188.84451743534632 168.99519938278198L 188.84451743534632 168.99519938278198L 171.7600656918117 168.99519938278198" cy="26.75757323560717" cx="247.0978726659502" j="2" val="101" barHeight="142.2376261471748" barWidth="19.084451743534633"></path><path id="SvgjsPath1964" d="M 248.0978726659502 168.99519938278198L 248.0978726659502 34.75356615606035Q 256.6400985377175 27.211340284293037 265.18232440948486 34.75356615606035L 265.18232440948486 34.75356615606035L 265.18232440948486 168.99519938278198L 265.18232440948486 168.99519938278198z" fill="rgba(0,208,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskkedmyft5)" pathTo="M 248.0978726659502 168.99519938278198L 248.0978726659502 34.75356615606035Q 256.6400985377175 27.211340284293037 265.18232440948486 34.75356615606035L 265.18232440948486 34.75356615606035L 265.18232440948486 168.99519938278198L 265.18232440948486 168.99519938278198z" pathFrom="M 248.0978726659502 168.99519938278198L 248.0978726659502 168.99519938278198L 265.18232440948486 168.99519938278198L 265.18232440948486 168.99519938278198L 265.18232440948486 168.99519938278198L 248.0978726659502 168.99519938278198" cy="30.982453220176694" cx="323.4356796400887" j="3" val="98" barHeight="138.01274616260528" barWidth="19.084451743534633"></path><path id="SvgjsPath1965" d="M 324.4356796400887 168.99519938278198L 324.4356796400887 50.24479276614871Q 332.977905511856 42.7025668943814 341.5201313836234 50.24479276614871L 341.5201313836234 50.24479276614871L 341.5201313836234 168.99519938278198L 341.5201313836234 168.99519938278198z" fill="rgba(0,208,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskkedmyft5)" pathTo="M 324.4356796400887 168.99519938278198L 324.4356796400887 50.24479276614871Q 332.977905511856 42.7025668943814 341.5201313836234 50.24479276614871L 341.5201313836234 50.24479276614871L 341.5201313836234 168.99519938278198L 341.5201313836234 168.99519938278198z" pathFrom="M 324.4356796400887 168.99519938278198L 324.4356796400887 168.99519938278198L 341.5201313836234 168.99519938278198L 341.5201313836234 168.99519938278198L 341.5201313836234 168.99519938278198L 324.4356796400887 168.99519938278198" cy="46.473679830265056" cx="399.77348661422724" j="4" val="87" barHeight="122.52151955251692" barWidth="19.084451743534633"></path><path id="SvgjsPath1966" d="M 400.77348661422724 168.99519938278198L 400.77348661422724 24.89551285873143Q 409.31571248599454 17.353286986964115 417.8579383577619 24.89551285873143L 417.8579383577619 24.89551285873143L 417.8579383577619 168.99519938278198L 417.8579383577619 168.99519938278198z" fill="rgba(0,208,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskkedmyft5)" pathTo="M 400.77348661422724 168.99519938278198L 400.77348661422724 24.89551285873143Q 409.31571248599454 17.353286986964115 417.8579383577619 24.89551285873143L 417.8579383577619 24.89551285873143L 417.8579383577619 168.99519938278198L 417.8579383577619 168.99519938278198z" pathFrom="M 400.77348661422724 168.99519938278198L 400.77348661422724 168.99519938278198L 417.8579383577619 168.99519938278198L 417.8579383577619 168.99519938278198L 417.8579383577619 168.99519938278198L 400.77348661422724 168.99519938278198" cy="21.124399922847772" cx="476.11129358836575" j="5" val="105" barHeight="147.8707994599342" barWidth="19.084451743534633"></path><path id="SvgjsPath1967" d="M 477.11129358836575 168.99519938278198L 477.11129358836575 44.6116194533893Q 485.65351946013305 37.06939358162199 494.1957453319004 44.6116194533893L 494.1957453319004 44.6116194533893L 494.1957453319004 168.99519938278198L 494.1957453319004 168.99519938278198z" fill="rgba(0,208,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskkedmyft5)" pathTo="M 477.11129358836575 168.99519938278198L 477.11129358836575 44.6116194533893Q 485.65351946013305 37.06939358162199 494.1957453319004 44.6116194533893L 494.1957453319004 44.6116194533893L 494.1957453319004 168.99519938278198L 494.1957453319004 168.99519938278198z" pathFrom="M 477.11129358836575 168.99519938278198L 477.11129358836575 168.99519938278198L 494.1957453319004 168.99519938278198L 494.1957453319004 168.99519938278198L 494.1957453319004 168.99519938278198L 477.11129358836575 168.99519938278198" cy="40.840506517505645" cx="552.4491005625043" j="6" val="91" barHeight="128.15469286527633" barWidth="19.084451743534633"></path></g><g id="SvgjsG1968" class="apexcharts-series" rel="2" seriesName="Expense" data:realIndex="1"><path id="SvgjsPath1970" d="M 38.168903487069265 168.99519938278198L 38.168903487069265 110.80140587831225Q 46.71112935883658 103.25918000654494 55.2533552306039 110.80140587831225L 55.2533552306039 110.80140587831225L 55.2533552306039 168.99519938278198L 55.2533552306039 168.99519938278198z" fill="rgba(50,70,211,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskkedmyft5)" pathTo="M 38.168903487069265 168.99519938278198L 38.168903487069265 110.80140587831225Q 46.71112935883658 103.25918000654494 55.2533552306039 110.80140587831225L 55.2533552306039 110.80140587831225L 55.2533552306039 168.99519938278198L 55.2533552306039 168.99519938278198z" pathFrom="M 38.168903487069265 168.99519938278198L 38.168903487069265 168.99519938278198L 55.2533552306039 168.99519938278198L 55.2533552306039 168.99519938278198L 55.2533552306039 168.99519938278198L 38.168903487069265 168.99519938278198" cy="107.03029294242859" cx="113.50671046120779" j="0" val="44" barHeight="61.96490644035339" barWidth="19.084451743534633"></path><path id="SvgjsPath1971" d="M 114.50671046120779 168.99519938278198L 114.50671046120779 95.3101792682239Q 123.0489363329751 87.76795339645659 131.59116220474243 95.3101792682239L 131.59116220474243 95.3101792682239L 131.59116220474243 168.99519938278198L 131.59116220474243 168.99519938278198z" fill="rgba(50,70,211,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskkedmyft5)" pathTo="M 114.50671046120779 168.99519938278198L 114.50671046120779 95.3101792682239Q 123.0489363329751 87.76795339645659 131.59116220474243 95.3101792682239L 131.59116220474243 95.3101792682239L 131.59116220474243 168.99519938278198L 131.59116220474243 168.99519938278198z" pathFrom="M 114.50671046120779 168.99519938278198L 114.50671046120779 168.99519938278198L 131.59116220474243 168.99519938278198L 131.59116220474243 168.99519938278198L 131.59116220474243 168.99519938278198L 114.50671046120779 168.99519938278198" cy="91.53906633234024" cx="189.84451743534632" j="1" val="55" barHeight="77.45613305044174" barWidth="19.084451743534633"></path><path id="SvgjsPath1972" d="M 190.84451743534632 168.99519938278198L 190.84451743534632 92.4935926118442Q 199.38674330711365 84.95136674007689 207.92896917888095 92.4935926118442L 207.92896917888095 92.4935926118442L 207.92896917888095 168.99519938278198L 207.92896917888095 168.99519938278198z" fill="rgba(50,70,211,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskkedmyft5)" pathTo="M 190.84451743534632 168.99519938278198L 190.84451743534632 92.4935926118442Q 199.38674330711365 84.95136674007689 207.92896917888095 92.4935926118442L 207.92896917888095 92.4935926118442L 207.92896917888095 168.99519938278198L 207.92896917888095 168.99519938278198z" pathFrom="M 190.84451743534632 168.99519938278198L 190.84451743534632 168.99519938278198L 207.92896917888095 168.99519938278198L 207.92896917888095 168.99519938278198L 207.92896917888095 168.99519938278198L 190.84451743534632 168.99519938278198" cy="88.72247967596054" cx="266.18232440948486" j="2" val="57" barHeight="80.27271970682143" barWidth="19.084451743534633"></path><path id="SvgjsPath1973" d="M 267.18232440948486 168.99519938278198L 267.18232440948486 93.90188594003406Q 275.72455028125216 86.35966006826675 284.2667761530195 93.90188594003406L 284.2667761530195 93.90188594003406L 284.2667761530195 168.99519938278198L 284.2667761530195 168.99519938278198z" fill="rgba(50,70,211,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskkedmyft5)" pathTo="M 267.18232440948486 168.99519938278198L 267.18232440948486 93.90188594003406Q 275.72455028125216 86.35966006826675 284.2667761530195 93.90188594003406L 284.2667761530195 93.90188594003406L 284.2667761530195 168.99519938278198L 284.2667761530195 168.99519938278198z" pathFrom="M 267.18232440948486 168.99519938278198L 267.18232440948486 168.99519938278198L 284.2667761530195 168.99519938278198L 284.2667761530195 168.99519938278198L 284.2667761530195 168.99519938278198L 267.18232440948486 168.99519938278198" cy="90.1307730041504" cx="342.5201313836234" j="3" val="56" barHeight="78.86442637863158" barWidth="19.084451743534633"></path><path id="SvgjsPath1974" d="M 343.5201313836234 168.99519938278198L 343.5201313836234 86.86041929908481Q 352.0623572553907 79.3181934273175 360.60458312715804 86.86041929908481L 360.60458312715804 86.86041929908481L 360.60458312715804 168.99519938278198L 360.60458312715804 168.99519938278198z" fill="rgba(50,70,211,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskkedmyft5)" pathTo="M 343.5201313836234 168.99519938278198L 343.5201313836234 86.86041929908481Q 352.0623572553907 79.3181934273175 360.60458312715804 86.86041929908481L 360.60458312715804 86.86041929908481L 360.60458312715804 168.99519938278198L 360.60458312715804 168.99519938278198z" pathFrom="M 343.5201313836234 168.99519938278198L 343.5201313836234 168.99519938278198L 360.60458312715804 168.99519938278198L 360.60458312715804 168.99519938278198L 360.60458312715804 168.99519938278198L 343.5201313836234 168.99519938278198" cy="83.08930636320115" cx="418.8579383577619" j="4" val="61" barHeight="85.90589301958083" barWidth="19.084451743534633"></path><path id="SvgjsPath1975" d="M 419.8579383577619 168.99519938278198L 419.8579383577619 91.08529928365436Q 428.4001642295292 83.54307341188705 436.94239010129655 91.08529928365436L 436.94239010129655 91.08529928365436L 436.94239010129655 168.99519938278198L 436.94239010129655 168.99519938278198z" fill="rgba(50,70,211,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskkedmyft5)" pathTo="M 419.8579383577619 168.99519938278198L 419.8579383577619 91.08529928365436Q 428.4001642295292 83.54307341188705 436.94239010129655 91.08529928365436L 436.94239010129655 91.08529928365436L 436.94239010129655 168.99519938278198L 436.94239010129655 168.99519938278198z" pathFrom="M 419.8579383577619 168.99519938278198L 419.8579383577619 168.99519938278198L 436.94239010129655 168.99519938278198L 436.94239010129655 168.99519938278198L 436.94239010129655 168.99519938278198L 419.8579383577619 168.99519938278198" cy="87.3141863477707" cx="495.1957453319004" j="5" val="58" barHeight="81.68101303501128" barWidth="19.084451743534633"></path><path id="SvgjsPath1976" d="M 496.1957453319004 168.99519938278198L 496.1957453319004 84.04383264270511Q 504.7379712036677 76.5016067709378 513.280197075435 84.04383264270511L 513.280197075435 84.04383264270511L 513.280197075435 168.99519938278198L 513.280197075435 168.99519938278198z" fill="rgba(50,70,211,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskkedmyft5)" pathTo="M 496.1957453319004 168.99519938278198L 496.1957453319004 84.04383264270511Q 504.7379712036677 76.5016067709378 513.280197075435 84.04383264270511L 513.280197075435 84.04383264270511L 513.280197075435 168.99519938278198L 513.280197075435 168.99519938278198z" pathFrom="M 496.1957453319004 168.99519938278198L 496.1957453319004 168.99519938278198L 513.280197075435 168.99519938278198L 513.280197075435 168.99519938278198L 513.280197075435 168.99519938278198L 496.1957453319004 168.99519938278198" cy="80.27271970682145" cx="571.5335523060389" j="6" val="63" barHeight="88.72247967596053" barWidth="19.084451743534633"></path><g id="SvgjsG1969" class="apexcharts-datalabels" data:realIndex="1"></g></g><g id="SvgjsG1960" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2031" x1="0" y1="0" x2="534.3646488189697" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2032" x1="0" y1="0" x2="534.3646488189697" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2033" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2034" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2035" class="apexcharts-point-annotations"></g></g><g id="SvgjsG2001" class="apexcharts-yaxis" rel="0" transform="translate(15.635351181030273, 0)"><g id="SvgjsG2002" class="apexcharts-yaxis-texts-g"><text id="SvgjsText2003" font-family="Helvetica, Arial, sans-serif" x="20" y="41.4" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#bac0c7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2004">120</tspan></text><text id="SvgjsText2005" font-family="Helvetica, Arial, sans-serif" x="20" y="83.64879984569549" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#bac0c7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2006">90</tspan></text><text id="SvgjsText2007" font-family="Helvetica, Arial, sans-serif" x="20" y="125.89759969139098" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#bac0c7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2008">60</tspan></text><text id="SvgjsText2009" font-family="Helvetica, Arial, sans-serif" x="20" y="168.14639953708647" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#bac0c7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2010">30</tspan></text><text id="SvgjsText2011" font-family="Helvetica, Arial, sans-serif" x="20" y="210.39519938278195" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#bac0c7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2012">0</tspan></text></g></g><g id="SvgjsG1947" class="apexcharts-annotations"></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 208, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(50, 70, 211);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 633px; height: 342px;"></div></div><div class="contract-trigger"></div></div></div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="box">
                            <div class="box-header">
                                <h4 class="box-title">Users history</h4>
                            </div>
                            <div class="box-body">
                                <div class="inner-user-div2">
                                    @foreach($users as $user)
                                {{-- <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 298px;"><div class="inner-user-div2" style="overflow: hidden; width: auto; height: 298px;"> --}}
                                    <div>
                                        <div class="d-flex justify-content-between align-items-end">
                                            <div>
                                                <a href="#" class="text-muted hover-primary"><i class="fa fa-link"></i> {{$user->name}}</a>
                                                <h5 class="my-5">{{$user->name}}</h5>
                                            </div>
                                            <div>
                                                {{-- <h5 class="my-5">$ 25.15</h5> --}}
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
                                            <div>
                                                <p class="mb-0 text-muted"><i class="fa fa-clock-o"></i> {{$user->created_at->format('d.m.Y')}}</p>
                                            </div>
                                            <div>
                                                {{-- <div class="dropdown">
                                                    <a data-bs-toggle="dropdown" href="#" class="base-font"><i class="ti-more-alt text-muted"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                      <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                                      <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                                      <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                                      <div class="dropdown-divider"></div>
                                                      <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    {{-- <div>
                                        <div class="d-flex justify-content-between align-items-end">
                                            <div>
                                                <a href="#" class="text-muted hover-primary"><i class="fa fa-link"></i> Dr. Michael Doe</a>
                                                <h5 class="my-5">Emergency appointment</h5>
                                            </div>
                                            <div>
                                                <h5 class="my-5">$ 99.15</h5>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
                                            <div>
                                                <p class="mb-0 text-muted"><i class="fa fa-clock-o"></i> Sunday, 16 May</p>
                                            </div>
                                            <div>
                                                <div class="dropdown">
                                                    <a data-bs-toggle="dropdown" href="#" class="base-font"><i class="ti-more-alt text-muted"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                      <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                                      <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                                      <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                                      <div class="dropdown-divider"></div>
                                                      <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    {{-- <div>
                                        <div class="d-flex justify-content-between align-items-end">
                                            <div>
                                                <a href="#" class="text-muted hover-primary"><i class="fa fa-link"></i> Dr. Bertie Maxwell</a>
                                                <h5 class="my-5">Complementation test</h5>
                                            </div>
                                            <div>
                                                <h5 class="my-5">$ 40.45</h5>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
                                            <div>
                                                <p class="mb-0 text-muted"><i class="fa fa-clock-o"></i> Sunday, 16 May</p>
                                            </div>
                                            <div>
                                                <div class="dropdown">
                                                    <a data-bs-toggle="dropdown" href="#" class="base-font"><i class="ti-more-alt text-muted"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                      <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                                      <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                                      <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                                      <div class="dropdown-divider"></div>
                                                      <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    {{-- <div>
                                        <div class="d-flex justify-content-between align-items-end">
                                            <div>
                                                <a href="#" class="text-muted hover-primary"><i class="fa fa-link"></i> Dr. Clyde Morales</a>
                                                <h5 class="my-5">USG + Consultation</h5>
                                            </div>
                                            <div>
                                                <h5 class="my-5">$ 29.90</h5>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
                                            <div>
                                                <p class="mb-0 text-muted"><i class="fa fa-clock-o"></i> Sunday, 16 May</p>
                                            </div>
                                            <div>
                                                <div class="dropdown">
                                                    <a data-bs-toggle="dropdown" href="#" class="base-font"><i class="ti-more-alt text-muted"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                      <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                                      <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                                      <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                                      <div class="dropdown-divider"></div>
                                                      <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    {{-- <div>
                                        <div class="d-flex justify-content-between align-items-end">
                                            <div>
                                                <a href="#" class="text-muted hover-primary"><i class="fa fa-link"></i> Dr. Michael Doe</a>
                                                <h5 class="my-5">Emergency appointment</h5>
                                            </div>
                                            <div>
                                                <h5 class="my-5">$ 99.15</h5>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
                                            <div>
                                                <p class="mb-0 text-muted"><i class="fa fa-clock-o"></i> Sunday, 16 May</p>
                                            </div>
                                            <div>
                                                <div class="dropdown">
                                                    <a data-bs-toggle="dropdown" href="#" class="base-font"><i class="ti-more-alt text-muted"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                      <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                                      <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                                      <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                                      <div class="dropdown-divider"></div>
                                                      <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.1; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 165.679px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="box">
                            <div class="box-header">
                                <h4 class="box-title">Products history</h4>
                            </div>
                            <div class="box-body">
                                <div class="inner-user-div2">
                                    @foreach($products as $product)
                                {{-- <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 298px;"><div class="inner-user-div2" style="overflow: hidden; width: auto; height: 298px;"> --}}
                                    <div>
                                        <div class="d-flex justify-content-between align-items-end">
                                            <div>
                                                <a href="#" class="text-muted hover-primary"><i class="fa fa-link"></i> {{$product->name}}</a>
                                                <h5 class="my-5">{{$product->name}}</h5>
                                            </div>
                                            <div>
                                                {{-- <h5 class="my-5">$ 25.15</h5> --}}
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
                                            <div>
                                                <p class="mb-0 text-muted"><i class="fa fa-clock-o"></i> {{$product->created_at->format('d.m.Y')}}</p>
                                            </div>
                                            <div>
                                                {{-- <div class="dropdown">
                                                    <a data-bs-toggle="dropdown" href="#" class="base-font"><i class="ti-more-alt text-muted"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                      <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                                      <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                                      <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                                      <div class="dropdown-divider"></div>
                                                      <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    <div class="col-xl-6 col-12">
                        <div class="box">
                            <div class="box-header">
                                <h4 class="box-title">Balance</h4>
                            </div>
                            <div class="box-body">
                                <div class="d-flex align-items-center justify-content-between" style="position: relative;">
                                    <div class="d-flex align-items-center">
                                        <div class="icon">
                                            <i class="fa fa-arrow-up text-primary me-10 fs-20 bg-primary-light rounded-circle text-center w-70 h-70 l-h-70"></i>
                                        </div>
                                        <div>
                                            <p class="text-muted mb-5">Income</p>
                                            <h4 class="my-0">$142K</h4>
                                        </div>
                                    </div>
                                    <div id="balance1" style="min-height: 100px;"><div id="apexchartsf8zjz90f" class="apexcharts-canvas apexchartsf8zjz90f apexcharts-theme-light apexcharts-zoomable" style="width: 150px; height: 100px;"><svg id="SvgjsSvg2037" width="150" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2039" class="apexcharts-inner apexcharts-graphical" transform="translate(22, 30)"><defs id="SvgjsDefs2038"><clipPath id="gridRectMaskf8zjz90f"><rect id="SvgjsRect2044" width="123" height="56" x="-2.5" y="-0.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskf8zjz90f"><rect id="SvgjsRect2045" width="122" height="59" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient2051" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2052" stop-opacity="0.65" stop-color="rgba(119,182,234,0.65)" offset="0"></stop><stop id="SvgjsStop2053" stop-opacity="0.5" stop-color="rgba(187,219,245,0.5)" offset="1"></stop><stop id="SvgjsStop2054" stop-opacity="0.5" stop-color="rgba(187,219,245,0.5)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine2043" x1="0" y1="0" x2="0" y2="55" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="55" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG2057" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2058" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g><line id="SvgjsLine2059" x1="0" y1="56" x2="118" y2="56" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"></line></g><g id="SvgjsG2062" class="apexcharts-grid"><g id="SvgjsG2063" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2065" x1="0" y1="0" x2="118" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2066" x1="0" y1="11" x2="118" y2="11" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2067" x1="0" y1="22" x2="118" y2="22" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2068" x1="0" y1="33" x2="118" y2="33" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2069" x1="0" y1="44" x2="118" y2="44" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2070" x1="0" y1="55" x2="118" y2="55" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG2064" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2072" x1="0" y1="55" x2="118" y2="55" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine2071" x1="0" y1="1" x2="0" y2="55" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG2047" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG2048" class="apexcharts-series" seriesName="Income" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2055" d="M 0 55L 0 43.266666666666666C 13.766666666666664 43.266666666666666 25.566666666666663 6.599999999999994 39.33333333333333 6.599999999999994C 53.099999999999994 6.599999999999994 64.89999999999999 35.93333333333333 78.66666666666666 35.93333333333333C 92.43333333333332 35.93333333333333 104.23333333333332 21.266666666666666 117.99999999999999 21.266666666666666C 117.99999999999999 21.266666666666666 117.99999999999999 21.266666666666666 117.99999999999999 55M 117.99999999999999 21.266666666666666z" fill="url(#SvgjsLinearGradient2051)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskf8zjz90f)" pathTo="M 0 55L 0 43.266666666666666C 13.766666666666664 43.266666666666666 25.566666666666663 6.599999999999994 39.33333333333333 6.599999999999994C 53.099999999999994 6.599999999999994 64.89999999999999 35.93333333333333 78.66666666666666 35.93333333333333C 92.43333333333332 35.93333333333333 104.23333333333332 21.266666666666666 117.99999999999999 21.266666666666666C 117.99999999999999 21.266666666666666 117.99999999999999 21.266666666666666 117.99999999999999 55M 117.99999999999999 21.266666666666666z" pathFrom="M -1 88L -1 88L 39.33333333333333 88L 78.66666666666666 88L 117.99999999999999 88"></path><path id="SvgjsPath2056" d="M 0 43.266666666666666C 13.766666666666664 43.266666666666666 25.566666666666663 6.599999999999994 39.33333333333333 6.599999999999994C 53.099999999999994 6.599999999999994 64.89999999999999 35.93333333333333 78.66666666666666 35.93333333333333C 92.43333333333332 35.93333333333333 104.23333333333332 21.266666666666666 117.99999999999999 21.266666666666666" fill="none" fill-opacity="1" stroke="#77b6ea" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskf8zjz90f)" pathTo="M 0 43.266666666666666C 13.766666666666664 43.266666666666666 25.566666666666663 6.599999999999994 39.33333333333333 6.599999999999994C 53.099999999999994 6.599999999999994 64.89999999999999 35.93333333333333 78.66666666666666 35.93333333333333C 92.43333333333332 35.93333333333333 104.23333333333332 21.266666666666666 117.99999999999999 21.266666666666666" pathFrom="M -1 88L -1 88L 39.33333333333333 88L 78.66666666666666 88L 117.99999999999999 88"></path><g id="SvgjsG2049" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle2078" r="0" cx="0" cy="0" class="apexcharts-marker wclud5vqzj no-pointer-events" stroke="#ffffff" fill="#77b6ea" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG2050" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2073" x1="0" y1="0" x2="118" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2074" x1="0" y1="0" x2="118" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2075" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2076" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2077" class="apexcharts-point-annotations"></g><rect id="SvgjsRect2079" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect2080" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><rect id="SvgjsRect2042" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG2060" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)"><g id="SvgjsG2061" class="apexcharts-yaxis-texts-g"></g></g><g id="SvgjsG2040" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(119, 182, 234);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 591px; height: 101px;"></div></div><div class="contract-trigger"></div></div></div>
                                <div class="d-flex align-items-center justify-content-between" style="position: relative;">
                                    <div class="d-flex align-items-center">
                                        <div class="icon">
                                            <i class="fa fa-arrow-down text-danger me-10 fs-20 bg-danger-light rounded-circle text-center w-70 h-70 l-h-70"></i>
                                        </div>
                                        <div>
                                            <p class="text-muted mb-5">Outcome</p>
                                            <h4 class="my-0">$43K</h4>
                                        </div>
                                    </div>
                                    <div id="balance2" style="min-height: 100px;"><div id="apexchartszyjc5wh3" class="apexcharts-canvas apexchartszyjc5wh3 apexcharts-theme-light apexcharts-zoomable" style="width: 150px; height: 100px;"><svg id="SvgjsSvg2082" width="150" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2084" class="apexcharts-inner apexcharts-graphical" transform="translate(22, 30)"><defs id="SvgjsDefs2083"><clipPath id="gridRectMaskzyjc5wh3"><rect id="SvgjsRect2089" width="123" height="56" x="-2.5" y="-0.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskzyjc5wh3"><rect id="SvgjsRect2090" width="122" height="59" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient2096" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2097" stop-opacity="0.65" stop-color="rgba(238,49,88,0.65)" offset="0"></stop><stop id="SvgjsStop2098" stop-opacity="0.5" stop-color="rgba(247,152,172,0.5)" offset="1"></stop><stop id="SvgjsStop2099" stop-opacity="0.5" stop-color="rgba(247,152,172,0.5)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine2088" x1="0" y1="0" x2="0" y2="55" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="55" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG2102" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2103" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g><line id="SvgjsLine2104" x1="0" y1="56" x2="118" y2="56" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"></line></g><g id="SvgjsG2107" class="apexcharts-grid"><g id="SvgjsG2108" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2110" x1="0" y1="0" x2="118" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2111" x1="0" y1="11" x2="118" y2="11" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2112" x1="0" y1="22" x2="118" y2="22" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2113" x1="0" y1="33" x2="118" y2="33" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2114" x1="0" y1="44" x2="118" y2="44" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2115" x1="0" y1="55" x2="118" y2="55" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG2109" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2117" x1="0" y1="55" x2="118" y2="55" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine2116" x1="0" y1="1" x2="0" y2="55" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG2092" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG2093" class="apexcharts-series" seriesName="Outcome" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2100" d="M 0 55L 0 30.799999999999997C 13.766666666666664 30.799999999999997 25.566666666666663 6.599999999999994 39.33333333333333 6.599999999999994C 53.099999999999994 6.599999999999994 64.89999999999999 41.8 78.66666666666666 41.8C 92.43333333333332 41.8 104.23333333333332 49.5 117.99999999999999 49.5C 117.99999999999999 49.5 117.99999999999999 49.5 117.99999999999999 55M 117.99999999999999 49.5z" fill="url(#SvgjsLinearGradient2096)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskzyjc5wh3)" pathTo="M 0 55L 0 30.799999999999997C 13.766666666666664 30.799999999999997 25.566666666666663 6.599999999999994 39.33333333333333 6.599999999999994C 53.099999999999994 6.599999999999994 64.89999999999999 41.8 78.66666666666666 41.8C 92.43333333333332 41.8 104.23333333333332 49.5 117.99999999999999 49.5C 117.99999999999999 49.5 117.99999999999999 49.5 117.99999999999999 55M 117.99999999999999 49.5z" pathFrom="M -1 143L -1 143L 39.33333333333333 143L 78.66666666666666 143L 117.99999999999999 143"></path><path id="SvgjsPath2101" d="M 0 30.799999999999997C 13.766666666666664 30.799999999999997 25.566666666666663 6.599999999999994 39.33333333333333 6.599999999999994C 53.099999999999994 6.599999999999994 64.89999999999999 41.8 78.66666666666666 41.8C 92.43333333333332 41.8 104.23333333333332 49.5 117.99999999999999 49.5" fill="none" fill-opacity="1" stroke="#ee3158" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskzyjc5wh3)" pathTo="M 0 30.799999999999997C 13.766666666666664 30.799999999999997 25.566666666666663 6.599999999999994 39.33333333333333 6.599999999999994C 53.099999999999994 6.599999999999994 64.89999999999999 41.8 78.66666666666666 41.8C 92.43333333333332 41.8 104.23333333333332 49.5 117.99999999999999 49.5" pathFrom="M -1 143L -1 143L 39.33333333333333 143L 78.66666666666666 143L 117.99999999999999 143"></path><g id="SvgjsG2094" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle2123" r="0" cx="0" cy="0" class="apexcharts-marker w7322ggta no-pointer-events" stroke="#ffffff" fill="#ee3158" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG2095" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2118" x1="0" y1="0" x2="118" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2119" x1="0" y1="0" x2="118" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2120" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2121" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2122" class="apexcharts-point-annotations"></g><rect id="SvgjsRect2124" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect2125" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><rect id="SvgjsRect2087" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG2105" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)"><g id="SvgjsG2106" class="apexcharts-yaxis-texts-g"></g></g><g id="SvgjsG2085" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(238, 49, 88);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 591px; height: 101px;"></div></div><div class="contract-trigger"></div></div></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="box">
                            <div class="box-header">
                                <h4 class="box-title">Patient Statistics</h4>
                            </div>
                            <div class="box-body" style="position: relative;">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center me-30">
                                        <div class="bg-gradient-success overflow-h me-10 rounded10 w-50 h-50 l-h-50 fs-18 text-center text-white"><i class="fa fa-hospital-o"></i></div>
                                        <div>
                                            <p class="fs-14 text-fade mb-0">Admit</p>
                                            <h5 class="mb-0">2158</h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="bg-gradient-primary overflow-h me-10 rounded10 w-50 h-50 l-h-50 fs-18 text-center text-white"><i class="fa fa-home"></i></div>
                                        <div>
                                            <p class="fs-14 text-fade mb-0">Discharge</p>
                                            <h5 class="mb-0">1112</h5>
                                        </div>
                                    </div>
                                </div>
                                <div id="overview_trend" style="min-height: 275px;"><div id="apexchartsgux5l8qe" class="apexcharts-canvas apexchartsgux5l8qe apexcharts-theme-light apexcharts-zoomable" style="width: 590px; height: 275px;"><svg id="SvgjsSvg2128" width="590" height="275" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2130" class="apexcharts-inner apexcharts-graphical" transform="translate(39.51767635345459, 30)"><defs id="SvgjsDefs2129"><clipPath id="gridRectMaskgux5l8qe"><rect id="SvgjsRect2136" width="549.4823236465454" height="212.99519938278198" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskgux5l8qe"><rect id="SvgjsRect2137" width="544.4823236465454" height="211.99519938278198" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><filter id="SvgjsFilter2144" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood2145" flood-color="#000000" flood-opacity="0.2" result="SvgjsFeFlood2145Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite2146" in="SvgjsFeFlood2145Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite2146Out"></feComposite><feOffset id="SvgjsFeOffset2147" dx="7" dy="18" result="SvgjsFeOffset2147Out" in="SvgjsFeComposite2146Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur2148" stdDeviation="10 " result="SvgjsFeGaussianBlur2148Out" in="SvgjsFeOffset2147Out"></feGaussianBlur><feMerge id="SvgjsFeMerge2149" result="SvgjsFeMerge2149Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode2150" in="SvgjsFeGaussianBlur2148Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode2151" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend2152" in="SourceGraphic" in2="SvgjsFeMerge2149Out" mode="normal" result="SvgjsFeBlend2152Out"></feBlend></filter><filter id="SvgjsFilter2157" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood2158" flood-color="#000000" flood-opacity="0.2" result="SvgjsFeFlood2158Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite2159" in="SvgjsFeFlood2158Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite2159Out"></feComposite><feOffset id="SvgjsFeOffset2160" dx="7" dy="18" result="SvgjsFeOffset2160Out" in="SvgjsFeComposite2159Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur2161" stdDeviation="10 " result="SvgjsFeGaussianBlur2161Out" in="SvgjsFeOffset2160Out"></feGaussianBlur><feMerge id="SvgjsFeMerge2162" result="SvgjsFeMerge2162Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode2163" in="SvgjsFeGaussianBlur2161Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode2164" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend2165" in="SourceGraphic" in2="SvgjsFeMerge2162Out" mode="normal" result="SvgjsFeBlend2165Out"></feBlend></filter></defs><line id="SvgjsLine2135" x1="0" y1="0" x2="0" y2="207.99519938278198" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="207.99519938278198" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG2166" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2167" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText2169" font-family="Helvetica, Arial, sans-serif" x="0" y="236.99519938278198" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2170">Jan</tspan><title>Jan</title></text><text id="SvgjsText2172" font-family="Helvetica, Arial, sans-serif" x="90.08038727442423" y="236.99519938278198" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2173">Feb</tspan><title>Feb</title></text><text id="SvgjsText2175" font-family="Helvetica, Arial, sans-serif" x="180.16077454884848" y="236.99519938278198" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2176">Mar</tspan><title>Mar</title></text><text id="SvgjsText2178" font-family="Helvetica, Arial, sans-serif" x="270.24116182327276" y="236.99519938278198" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2179">Apr</tspan><title>Apr</title></text><text id="SvgjsText2181" font-family="Helvetica, Arial, sans-serif" x="360.321549097697" y="236.99519938278198" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2182">May</tspan><title>May</title></text><text id="SvgjsText2184" font-family="Helvetica, Arial, sans-serif" x="450.40193637212127" y="236.99519938278198" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2185">Jun</tspan><title>Jun</title></text><text id="SvgjsText2187" font-family="Helvetica, Arial, sans-serif" x="540.4823236465454" y="236.99519938278198" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2188">Jul</tspan><title>Jul</title></text></g><line id="SvgjsLine2189" x1="0" y1="208.99519938278198" x2="540.4823236465454" y2="208.99519938278198" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"></line></g><g id="SvgjsG2204" class="apexcharts-grid"><g id="SvgjsG2205" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine2214" x1="0" y1="0" x2="540.4823236465454" y2="0" stroke="#e7e7e7" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2215" x1="0" y1="41.5990398765564" x2="540.4823236465454" y2="41.5990398765564" stroke="#e7e7e7" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2216" x1="0" y1="83.1980797531128" x2="540.4823236465454" y2="83.1980797531128" stroke="#e7e7e7" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2217" x1="0" y1="124.7971196296692" x2="540.4823236465454" y2="124.7971196296692" stroke="#e7e7e7" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2218" x1="0" y1="166.3961595062256" x2="540.4823236465454" y2="166.3961595062256" stroke="#e7e7e7" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2219" x1="0" y1="207.99519938278198" x2="540.4823236465454" y2="207.99519938278198" stroke="#e7e7e7" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG2206" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine2207" x1="0" y1="208.99519938278198" x2="0" y2="214.99519938278198" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2208" x1="90.08038727442424" y1="208.99519938278198" x2="90.08038727442424" y2="214.99519938278198" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2209" x1="180.16077454884848" y1="208.99519938278198" x2="180.16077454884848" y2="214.99519938278198" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2210" x1="270.2411618232727" y1="208.99519938278198" x2="270.2411618232727" y2="214.99519938278198" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2211" x1="360.32154909769696" y1="208.99519938278198" x2="360.32154909769696" y2="214.99519938278198" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2212" x1="450.4019363721212" y1="208.99519938278198" x2="450.4019363721212" y2="214.99519938278198" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2213" x1="540.4823236465454" y1="208.99519938278198" x2="540.4823236465454" y2="214.99519938278198" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2221" x1="0" y1="207.99519938278198" x2="540.4823236465454" y2="207.99519938278198" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine2220" x1="0" y1="1" x2="0" y2="207.99519938278198" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG2139" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG2153" class="apexcharts-series" seriesName="AdmitxPatient" data:longestSeries="true" rel="2" data:realIndex="1"><path id="SvgjsPath2156" d="M 0 120.17500408782959C 31.528135546048482 120.17500408782959 58.55225172837576 69.33173312759399 90.08038727442424 69.33173312759399C 121.60852282047273 69.33173312759399 148.6326390028 143.2855817970276 180.16077454884848 143.2855817970276C 211.68891009489695 143.2855817970276 238.71302627722423 83.19807975311278 270.2411618232727 83.19807975311278C 301.7692973693212 83.19807975311278 328.7934135516485 41.59903987655639 360.32154909769696 41.59903987655639C 391.84968464374543 41.59903987655639 418.87380082607274 101.68654192047117 450.4019363721212 101.68654192047117C 481.9300719181697 101.68654192047117 508.95418810049694 50.8432709602356 540.4823236465454 50.8432709602356" fill="none" fill-opacity="1" stroke="rgba(29,191,193,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-line" index="1" clip-path="url(#gridRectMaskgux5l8qe)" filter="url(#SvgjsFilter2157)" pathTo="M 0 120.17500408782959C 31.528135546048482 120.17500408782959 58.55225172837576 69.33173312759399 90.08038727442424 69.33173312759399C 121.60852282047273 69.33173312759399 148.6326390028 143.2855817970276 180.16077454884848 143.2855817970276C 211.68891009489695 143.2855817970276 238.71302627722423 83.19807975311278 270.2411618232727 83.19807975311278C 301.7692973693212 83.19807975311278 328.7934135516485 41.59903987655639 360.32154909769696 41.59903987655639C 391.84968464374543 41.59903987655639 418.87380082607274 101.68654192047117 450.4019363721212 101.68654192047117C 481.9300719181697 101.68654192047117 508.95418810049694 50.8432709602356 540.4823236465454 50.8432709602356" pathFrom="M -1 249.59423925933837L -1 249.59423925933837L 90.08038727442424 249.59423925933837L 180.16077454884848 249.59423925933837L 270.2411618232727 249.59423925933837L 360.32154909769696 249.59423925933837L 450.4019363721212 249.59423925933837L 540.4823236465454 249.59423925933837"></path><g id="SvgjsG2154" class="apexcharts-series-markers-wrap" data:realIndex="1"><g class="apexcharts-series-markers"><circle id="SvgjsCircle2228" r="0" cx="0" cy="0" class="apexcharts-marker w2mmxdi9p no-pointer-events" stroke="#ffffff" fill="#1dbfc1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG2140" class="apexcharts-series" seriesName="DischargexPatient" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2143" d="M 0 194.1288527572632C 31.528135546048482 194.1288527572632 58.55225172837576 147.9076973388672 90.08038727442424 147.9076973388672C 121.60852282047273 147.9076973388672 148.6326390028 184.88462167358398 180.16077454884848 184.88462167358398C 211.68891009489695 184.88462167358398 238.71302627722423 166.39615950622556 270.2411618232727 166.39615950622556C 301.7692973693212 166.39615950622556 328.7934135516485 147.9076973388672 360.32154909769696 147.9076973388672C 391.84968464374543 147.9076973388672 418.87380082607274 189.50673721542358 450.4019363721212 189.50673721542358C 481.9300719181697 189.50673721542358 508.95418810049694 171.01827504806516 540.4823236465454 171.01827504806516" fill="none" fill-opacity="1" stroke="rgba(238,49,88,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskgux5l8qe)" filter="url(#SvgjsFilter2144)" pathTo="M 0 194.1288527572632C 31.528135546048482 194.1288527572632 58.55225172837576 147.9076973388672 90.08038727442424 147.9076973388672C 121.60852282047273 147.9076973388672 148.6326390028 184.88462167358398 180.16077454884848 184.88462167358398C 211.68891009489695 184.88462167358398 238.71302627722423 166.39615950622556 270.2411618232727 166.39615950622556C 301.7692973693212 166.39615950622556 328.7934135516485 147.9076973388672 360.32154909769696 147.9076973388672C 391.84968464374543 147.9076973388672 418.87380082607274 189.50673721542358 450.4019363721212 189.50673721542358C 481.9300719181697 189.50673721542358 508.95418810049694 171.01827504806516 540.4823236465454 171.01827504806516" pathFrom="M -1 249.59423925933837L -1 249.59423925933837L 90.08038727442424 249.59423925933837L 180.16077454884848 249.59423925933837L 270.2411618232727 249.59423925933837L 360.32154909769696 249.59423925933837L 450.4019363721212 249.59423925933837L 540.4823236465454 249.59423925933837"></path><g id="SvgjsG2141" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle2227" r="0" cx="0" cy="0" class="apexcharts-marker wg0kcatgg no-pointer-events" stroke="#ffffff" fill="#ee3158" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG2142" class="apexcharts-datalabels" data:realIndex="0"></g></g><g id="SvgjsG2155" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine2222" x1="0" y1="0" x2="540.4823236465454" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2223" x1="0" y1="0" x2="540.4823236465454" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2224" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2225" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2226" class="apexcharts-point-annotations"></g><rect id="SvgjsRect2229" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect2230" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><rect id="SvgjsRect2134" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG2190" class="apexcharts-yaxis" rel="0" transform="translate(9.51767635345459, 0)"><g id="SvgjsG2191" class="apexcharts-yaxis-texts-g"><text id="SvgjsText2192" font-family="Helvetica, Arial, sans-serif" x="20" y="31.5" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2193">54</tspan></text><text id="SvgjsText2194" font-family="Helvetica, Arial, sans-serif" x="20" y="73.09903987655639" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2195">45</tspan></text><text id="SvgjsText2196" font-family="Helvetica, Arial, sans-serif" x="20" y="114.69807975311278" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2197">36</tspan></text><text id="SvgjsText2198" font-family="Helvetica, Arial, sans-serif" x="20" y="156.29711962966917" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2199">27</tspan></text><text id="SvgjsText2200" font-family="Helvetica, Arial, sans-serif" x="20" y="197.89615950622556" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2201">18</tspan></text><text id="SvgjsText2202" font-family="Helvetica, Arial, sans-serif" x="20" y="239.49519938278195" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2203">9</tspan></text></g></g><g id="SvgjsG2131" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(238, 49, 88);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(29, 191, 193);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 633px; height: 368px;"></div></div><div class="contract-trigger"></div></div></div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Patient Review</h4>
                            </div>
                            <div class="box-body p-0">
                                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 283px;"><div class="inner-user-div" style="overflow: hidden; width: auto; height: 283px;">
                                  <div class="media-list bb-1 bb-dashed border-light">
                                    <div class="media align-items-center">
                                      <a class="avatar avatar-lg status-success" href="#">
                                        <img src="../images/avatar/1.jpg" class="bg-success-light" alt="...">
                                      </a>
                                      <div class="media-body">
                                        <p class="fs-16">
                                          <a class="hover-primary" href="#">Theron Trump</a>
                                        </p>
                                          <span class="text-muted">2 day ago</span>
                                      </div>
                                      <div class="media-right">
                                          <div class="d-flex">
                                              <i class="text-warning fa fa-star"></i>
                                              <i class="text-warning fa fa-star"></i>
                                              <i class="text-warning fa fa-star"></i>
                                              <i class="text-warning fa fa-star"></i>
                                              <i class="text-warning fa fa-star-o"></i>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="media pt-0">
                                        <p class="text-fade">Vestibulum tincidunt sit amet sapien et eleifend. Fusce pretium libero enim, nec lacinia est ultrices id. Duis nibh sapien, ultrices in hendrerit ac, pulvinar ut mauris. Quisque eu condimentum justo. </p>
                                    </div>
                                  </div>
                                  <div class="media-list bb-1 bb-dashed border-light">
                                    <div class="media align-items-center">
                                      <a class="avatar avatar-lg status-success" href="#">
                                        <img src="../images/avatar/3.jpg" class="bg-success-light" alt="...">
                                      </a>
                                      <div class="media-body">
                                        <p class="fs-16">
                                          <a class="hover-primary" href="#">Johen Doe</a>
                                        </p>
                                          <span class="text-muted">5 day ago</span>
                                      </div>
                                      <div class="media-right">
                                          <div class="d-flex">
                                              <i class="text-warning fa fa-star"></i>
                                              <i class="text-warning fa fa-star"></i>
                                              <i class="text-warning fa fa-star"></i>
                                              <i class="text-warning fa fa-star"></i>
                                              <i class="text-warning fa fa-star-half-o"></i>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="media pt-0">
                                        <p class="text-fade">Praesent venenatis viverra turpis quis varius. Nullam ullamcorper congue urna, in sodales eros placerat non.</p>
                                    </div>
                                  </div>
                                  <div class="media-list">
                                    <div class="media align-items-center">
                                      <a class="avatar avatar-lg status-success" href="#">
                                        <img src="../images/avatar/4.jpg" class="bg-success-light" alt="...">
                                      </a>
                                      <div class="media-body">
                                        <p class="fs-16">
                                          <a class="hover-primary" href="#">Tyler Mark</a>
                                        </p>
                                          <span class="text-muted">7 day ago</span>
                                      </div>
                                      <div class="media-right">
                                          <div class="d-flex">
                                              <i class="text-warning fa fa-star"></i>
                                              <i class="text-warning fa fa-star"></i>
                                              <i class="text-warning fa fa-star"></i>
                                              <i class="text-warning fa fa-star"></i>
                                              <i class="text-warning fa fa-star"></i>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="media pt-0">
                                        <p class="text-fade">Pellentesque a pretium orci. In hac habitasse platea dictumst. Nulla mattis odio enim, id euismod neque bibendum non.</p>
                                    </div>
                                  </div>
                                  <div class="media-list bb-1 bb-dashed border-light">
                                    <div class="media align-items-center">
                                      <a class="avatar avatar-lg status-success" href="#">
                                        <img src="../images/avatar/5.jpg" class="bg-success-light" alt="...">
                                      </a>
                                      <div class="media-body">
                                        <p class="fs-16">
                                          <a class="hover-primary" href="#">Theron Trump</a>
                                        </p>
                                          <span class="text-muted">2 day ago</span>
                                      </div>
                                      <div class="media-right">
                                          <div class="d-flex">
                                              <i class="text-warning fa fa-star"></i>
                                              <i class="text-warning fa fa-star"></i>
                                              <i class="text-warning fa fa-star"></i>
                                              <i class="text-warning fa fa-star"></i>
                                              <i class="text-warning fa fa-star-half-o"></i>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="media pt-0">
                                        <p class="text-fade">Curabitur condimentum molestie ligula iaculis euismod. Fusce nulla lectus, tincidunt eu consequat.</p>
                                    </div>
                                  </div>
                                  <div class="media-list bb-1 bb-dashed border-light">
                                    <div class="media align-items-center">
                                      <a class="avatar avatar-lg status-success" href="#">
                                        <img src="../images/avatar/6.jpg" class="bg-success-light" alt="...">
                                      </a>
                                      <div class="media-body">
                                        <p class="fs-16">
                                          <a class="hover-primary" href="#">Johen Doe</a>
                                        </p>
                                          <span class="text-muted">5 day ago</span>
                                      </div>
                                      <div class="media-right">
                                          <div class="d-flex">
                                              <i class="text-warning fa fa-star"></i>
                                              <i class="text-warning fa fa-star"></i>
                                              <i class="text-warning fa fa-star"></i>
                                              <i class="text-warning fa fa-star"></i>
                                              <i class="text-warning fa fa-star-o"></i>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="media pt-0">
                                        <p class="text-fade">Proin lacinia eleifend nulla eu ornare. Integer commodo elit purus. Suspendisse mattis gravida interdum. In laoreet nisi eget felis ornare, tempus luctus nulla pellentesque. Donec maximus lobortis ullamcorper. </p>
                                    </div>
                                  </div>
                                </div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.1; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 98.7534px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                            </div>
                            <div class="box-footer">
                                <a href="#" class="waves-effect waves-light d-block w-p100 btn btn-primary">See More Reviews</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-12">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title">Upcoming Appointments</h4>
                    </div>
                    <div class="box-body">
                        <div id="paginator1" class="datepaginator"><ul class="pagination"><li><a href="#" class="dp-nav dp-nav-left" title="" style="width: 20px;"><i class="glyphicon glyphicon-chevron-left dp-nav-left"></i></a></li><li><a href="#" class="dp-item" data-moment="2022-03-18" title="Friday, 18th March 2022" style="width: 37px;">Fri<br>18th</a></li><li><a href="#" class="dp-item dp-off" data-moment="2022-03-19" title="Saturday, 19th March 2022" style="width: 37px;">Sat<br>19th</a></li><li><a href="#" class="dp-item dp-off" data-moment="2022-03-20" title="Sunday, 20th March 2022" style="width: 37px;">Sun<br>20th</a></li><li><a href="#" class="dp-item dp-divider" data-moment="2022-03-21" title="Monday, 21st March 2022" style="width: 37px;">Mon<br>21st</a></li><li><a href="#" class="dp-item" data-moment="2022-03-22" title="Tuesday, 22nd March 2022" style="width: 37px;">Tue<br>22nd</a></li><li><a href="#" class="dp-item" data-moment="2022-03-23" title="Wednesday, 23rd March 2022" style="width: 37px;">Wed<br>23rd</a></li><li><a href="#" class="dp-item dp-selected dp-today" data-moment="2022-03-24" title="Thursday, 24th March 2022" style="width: 140px;"><i id="dp-calendar" class="glyphicon glyphicon-calendar"></i>Thursday<br>March 24th 2022</a></li><li><a href="#" class="dp-item" data-moment="2022-03-25" title="Friday, 25th March 2022" style="width: 37px;">Fri<br>25th</a></li><li><a href="#" class="dp-item dp-off" data-moment="2022-03-26" title="Saturday, 26th March 2022" style="width: 37px;">Sat<br>26th</a></li><li><a href="#" class="dp-item dp-off" data-moment="2022-03-27" title="Sunday, 27th March 2022" style="width: 37px;">Sun<br>27th</a></li><li><a href="#" class="dp-item dp-divider" data-moment="2022-03-28" title="Monday, 28th March 2022" style="width: 37px;">Mon<br>28th</a></li><li><a href="#" class="dp-item" data-moment="2022-03-29" title="Tuesday, 29th March 2022" style="width: 37px;">Tue<br>29th</a></li><li><a href="#" class="dp-nav dp-nav-right" title="" style="width: 20px;"><i class="glyphicon glyphicon-chevron-right dp-nav-right"></i></a></li></ul></div>
                    </div>
                    <div class="box-body">
                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 432px;"><div class="inner-user-div4" style="overflow: hidden; width: auto; height: 432px;">
                            <div>
                                <div class="d-flex align-items-center mb-10">
                                    <div class="me-15">
                                        <img src="../images/avatar/avatar-1.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
                                    </div>
                                    <div class="d-flex flex-column flex-grow-1 fw-500">
                                        <p class="hover-primary text-fade mb-1 fs-14">Shawn Hampton</p>
                                        <span class="text-dark fs-16">Emergency appointment</span>
                                    </div>
                                    <div>
                                        <a href="#" class="waves-effect waves-circle btn btn-circle btn-primary-light btn-sm"><i class="fa fa-phone"></i></a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
                                    <div>
                                        <p class="mb-0 text-muted"><i class="fa fa-clock-o me-5"></i> 10:00 <span class="mx-20">$ 30</span></p>
                                    </div>
                                    <div>
                                        <div class="dropdown">
                                            <a data-bs-toggle="dropdown" href="#" class="base-font mx-10"><i class="ti-more-alt text-muted"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                              <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                              <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                              <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                              <div class="dropdown-divider"></div>
                                              <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex align-items-center mb-10">
                                    <div class="me-15">
                                        <img src="../images/avatar/avatar-2.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
                                    </div>
                                    <div class="d-flex flex-column flex-grow-1 fw-500">
                                        <p class="hover-primary text-fade mb-1 fs-14">Polly Paul</p>
                                        <span class="text-dark fs-16">USG + Consultation</span>
                                    </div>
                                    <div>
                                        <a href="#" class="waves-effect waves-circle btn btn-circle btn-primary-light btn-sm"><i class="fa fa-phone"></i></a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
                                    <div>
                                        <p class="mb-0 text-muted"><i class="fa fa-clock-o me-5"></i> 10:30 <span class="mx-20">$ 50</span></p>
                                    </div>
                                    <div>
                                        <div class="dropdown">
                                            <a data-bs-toggle="dropdown" href="#" class="base-font mx-10"><i class="ti-more-alt text-muted"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                              <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                              <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                              <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                              <div class="dropdown-divider"></div>
                                              <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex align-items-center mb-10">
                                    <div class="me-15">
                                        <img src="../images/avatar/avatar-3.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
                                    </div>
                                    <div class="d-flex flex-column flex-grow-1 fw-500">
                                        <p class="hover-primary text-fade mb-1 fs-14">Johen Doe</p>
                                        <span class="text-dark fs-16">Laboratory screening</span>
                                    </div>
                                    <div>
                                        <a href="#" class="waves-effect waves-circle btn btn-circle btn-primary-light btn-sm"><i class="fa fa-phone"></i></a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
                                    <div>
                                        <p class="mb-0 text-muted"><i class="fa fa-clock-o me-5"></i> 11:00 <span class="mx-20">$ 70</span></p>
                                    </div>
                                    <div>
                                        <div class="dropdown">
                                            <a data-bs-toggle="dropdown" href="#" class="base-font mx-10"><i class="ti-more-alt text-muted"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                              <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                              <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                              <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                              <div class="dropdown-divider"></div>
                                              <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex align-items-center mb-10">
                                    <div class="me-15">
                                        <img src="../images/avatar/avatar-4.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
                                    </div>
                                    <div class="d-flex flex-column flex-grow-1 fw-500">
                                        <p class="hover-primary text-fade mb-1 fs-14">Harmani Doe</p>
                                        <span class="text-dark fs-16">Keeping pregnant</span>
                                    </div>
                                    <div>
                                        <a href="#" class="waves-effect waves-circle btn btn-circle btn-primary-light btn-sm"><i class="fa fa-phone"></i></a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
                                    <div>
                                        <p class="mb-0 text-muted"><i class="fa fa-clock-o me-5"></i> 11:30 </p>
                                    </div>
                                    <div>
                                        <div class="dropdown">
                                            <a data-bs-toggle="dropdown" href="#" class="base-font mx-10"><i class="ti-more-alt text-muted"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                              <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                              <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                              <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                              <div class="dropdown-divider"></div>
                                              <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex align-items-center mb-10">
                                    <div class="me-15">
                                        <img src="../images/avatar/avatar-5.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
                                    </div>
                                    <div class="d-flex flex-column flex-grow-1 fw-500">
                                        <p class="hover-primary text-fade mb-1 fs-14">Mark Wood</p>
                                        <span class="text-dark fs-16">Primary doctor consultation</span>
                                    </div>
                                    <div>
                                        <a href="#" class="waves-effect waves-circle btn btn-circle btn-primary-light btn-sm"><i class="fa fa-phone"></i></a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
                                    <div>
                                        <p class="mb-0 text-muted"><i class="fa fa-clock-o me-5"></i> 12:00 <span class="mx-20">$ 30</span></p>
                                    </div>
                                    <div>
                                        <div class="dropdown">
                                            <a data-bs-toggle="dropdown" href="#" class="base-font mx-10"><i class="ti-more-alt text-muted"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                              <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                              <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                              <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                              <div class="dropdown-divider"></div>
                                              <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex align-items-center mb-10">
                                    <div class="me-15">
                                        <img src="../images/avatar/avatar-6.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
                                    </div>
                                    <div class="d-flex flex-column flex-grow-1 fw-500">
                                        <p class="hover-primary text-fade mb-1 fs-14">Shawn Marsh</p>
                                        <span class="text-dark fs-16">Emergency appointment</span>
                                    </div>
                                    <div>
                                        <a href="#" class="waves-effect waves-circle btn btn-circle btn-primary-light btn-sm"><i class="fa fa-phone"></i></a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
                                    <div>
                                        <p class="mb-0 text-muted"><i class="fa fa-clock-o me-5"></i> 13:00 <span class="mx-20">$ 90</span></p>
                                    </div>
                                    <div>
                                        <div class="dropdown">
                                            <a data-bs-toggle="dropdown" href="#" class="base-font mx-10"><i class="ti-more-alt text-muted"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                              <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                              <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                              <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                              <div class="dropdown-divider"></div>
                                              <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.1; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 269.299px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-header no-border">
                        <h4 class="box-title">Appointments Overview</h4>
                    </div>
                    <div class="box-body" style="position: relative;">
                        <div id="chart432" style="min-height: 204.75px;"><div id="apexchartsl077qsqf" class="apexcharts-canvas apexchartsl077qsqf apexcharts-theme-light" style="width: 590px; height: 204.75px;"><svg id="SvgjsSvg2231" width="590" height="204.75" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="590" height="204.75"><div class="apexcharts-legend apexcharts-align-center position-right" xmlns="http://www.w3.org/1999/xhtml" style="position: absolute; left: auto; top: 20px; right: 5px;"><div class="apexcharts-legend-series" rel="1" data:collapsed="false" style="margin: 0px 5px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(50, 70, 211); color: rgb(50, 70, 211); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="Male" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Male</span></div><div class="apexcharts-legend-series" rel="2" data:collapsed="false" style="margin: 0px 5px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(0, 208, 255); color: rgb(0, 208, 255); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Female" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Female</span></div><div class="apexcharts-legend-series" rel="3" data:collapsed="false" style="margin: 0px 5px;"><span class="apexcharts-legend-marker" rel="3" data:collapsed="false" style="background: rgb(238, 49, 88); color: rgb(238, 49, 88); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="3" i="2" data:default-text="Child" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Child</span></div><div class="apexcharts-legend-series" rel="4" data:collapsed="false" style="margin: 0px 5px;"><span class="apexcharts-legend-marker" rel="4" data:collapsed="false" style="background: rgb(255, 168, 0); color: rgb(255, 168, 0); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="4" i="3" data:default-text="Germany" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Germany</span></div></div><style type="text/css">

  .apexcharts-legend {
    display: flex;
    overflow: auto;
    padding: 0 10px;
  }
  .apexcharts-legend.position-bottom, .apexcharts-legend.position-top {
    flex-wrap: wrap
  }
  .apexcharts-legend.position-right, .apexcharts-legend.position-left {
    flex-direction: column;
    bottom: 0;
  }
  .apexcharts-legend.position-bottom.apexcharts-align-left, .apexcharts-legend.position-top.apexcharts-align-left, .apexcharts-legend.position-right, .apexcharts-legend.position-left {
    justify-content: flex-start;
  }
  .apexcharts-legend.position-bottom.apexcharts-align-center, .apexcharts-legend.position-top.apexcharts-align-center {
    justify-content: center;
  }
  .apexcharts-legend.position-bottom.apexcharts-align-right, .apexcharts-legend.position-top.apexcharts-align-right {
    justify-content: flex-end;
  }
  .apexcharts-legend-series {
    cursor: pointer;
    line-height: normal;
  }
  .apexcharts-legend.position-bottom .apexcharts-legend-series, .apexcharts-legend.position-top .apexcharts-legend-series{
    display: flex;
    align-items: center;
  }
  .apexcharts-legend-text {
    position: relative;
    font-size: 14px;
  }
  .apexcharts-legend-text *, .apexcharts-legend-marker * {
    pointer-events: none;
  }
  .apexcharts-legend-marker {
    position: relative;
    display: inline-block;
    cursor: pointer;
    margin-right: 3px;
    border-style: solid;
  }

  .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{
    display: inline-block;
  }
  .apexcharts-legend-series.apexcharts-no-click {
    cursor: auto;
  }
  .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
    display: none !important;
  }
  .apexcharts-inactive-legend {
    opacity: 0.45;
  }</style></foreignObject><g id="SvgjsG2233" class="apexcharts-inner apexcharts-graphical" transform="translate(22, 0)"><defs id="SvgjsDefs2232"><clipPath id="gridRectMaskl077qsqf"><rect id="SvgjsRect2235" width="454" height="201" x="-2.5" y="-0.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskl077qsqf"><rect id="SvgjsRect2236" width="453" height="204" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG2238" class="apexcharts-pie"><g id="SvgjsG2240"><circle id="SvgjsCircle2242" r="92.5609756097561" cx="224.5" cy="100" fill="none" stroke-width="0" stroke="#e8e8e8"></circle><circle id="SvgjsCircle2243" r="74.04878048780488" cx="224.5" cy="100" fill="none" stroke-width="0" stroke="#e8e8e8"></circle><circle id="SvgjsCircle2244" r="55.536585365853654" cx="224.5" cy="100" fill="none" stroke-width="0" stroke="#e8e8e8"></circle><circle id="SvgjsCircle2245" r="37.02439024390243" cx="224.5" cy="100" fill="none" stroke-width="0" stroke="#e8e8e8"></circle><circle id="SvgjsCircle2246" r="18.512195121951212" cx="224.5" cy="100" fill="none" stroke-width="0" stroke="#e8e8e8"></circle></g><g id="SvgjsG2241"></g><g id="SvgjsG2239" transform="translate(0, 0) scale(1)"><g id="SvgjsG2247" class="apexcharts-slices"><g id="SvgjsG2248" class="apexcharts-series apexcharts-pie-series" seriesName="Male" rel="1" data:realIndex="0"><path id="SvgjsPath2249" d="M 224.5 7.439024390243901 A 92.5609756097561 92.5609756097561 0 0 1 317.0609756097561 100 L 224.5 100 L 224.5 7.439024390243901" fill="rgba(50,70,211,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-polararea-slice-0" index="0" j="0" data:angle="90" data:startAngle="0" data:strokeWidth="1" data:value="30" data:pathOrig="M 224.5 7.439024390243901 A 92.5609756097561 92.5609756097561 0 0 1 317.0609756097561 100 L 224.5 100 L 224.5 7.439024390243901" stroke="#3246d3"></path></g><g id="SvgjsG2250" class="apexcharts-series apexcharts-pie-series" seriesName="Female" rel="2" data:realIndex="1"><path id="SvgjsPath2251" d="M 301.6341463414634 100 A 77.13414634146342 77.13414634146342 0 0 1 224.5 177.1341463414634 L 224.5 100 L 301.6341463414634 100" fill="rgba(0,208,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-polararea-slice-1" index="0" j="1" data:angle="90" data:startAngle="90" data:strokeWidth="1" data:value="25" data:pathOrig="M 301.6341463414634 100 A 77.13414634146342 77.13414634146342 0 0 1 224.5 177.1341463414634 L 224.5 100 L 301.6341463414634 100" stroke="#00d0ff"></path></g><g id="SvgjsG2252" class="apexcharts-series apexcharts-pie-series" seriesName="Child" rel="3" data:realIndex="2"><path id="SvgjsPath2253" d="M 224.5 192.5609756097561 A 92.5609756097561 92.5609756097561 0 0 1 131.9390243902439 100.00000000000001 L 224.5 100 L 224.5 192.5609756097561" fill="rgba(238,49,88,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-polararea-slice-2" index="0" j="2" data:angle="90" data:startAngle="180" data:strokeWidth="1" data:value="30" data:pathOrig="M 224.5 192.5609756097561 A 92.5609756097561 92.5609756097561 0 0 1 131.9390243902439 100.00000000000001 L 224.5 100 L 224.5 192.5609756097561" stroke="#ee3158"></path></g><g id="SvgjsG2254" class="apexcharts-series apexcharts-pie-series" seriesName="Germany" rel="4" data:realIndex="3"><path id="SvgjsPath2255" d="M 147.3658536585366 100.00000000000001 A 77.13414634146342 77.13414634146342 0 0 1 224.4865375518746 22.865854833356806 L 224.5 100 L 147.3658536585366 100.00000000000001" fill="rgba(255,168,0,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-polararea-slice-3" index="0" j="3" data:angle="90" data:startAngle="270" data:strokeWidth="1" data:value="25" data:pathOrig="M 147.3658536585366 100.00000000000001 A 77.13414634146342 77.13414634146342 0 0 1 224.4865375518746 22.865854833356806 L 224.5 100 L 147.3658536585366 100.00000000000001" stroke="#ffa800"></path></g></g></g></g><line id="SvgjsLine2256" x1="0" y1="0" x2="449" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2257" x1="0" y1="0" x2="449" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG2234" class="apexcharts-annotations"></g></svg><div class="apexcharts-tooltip apexcharts-theme-dark"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(50, 70, 211);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 208, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(238, 49, 88);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 168, 0);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 633px; height: 247px;"></div></div><div class="contract-trigger"></div></div></div>
                </div>
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title">Recovery rate</h4>
                    </div>
                    <div class="box-body">
                        <div class="mb-30">
                             <div class="d-flex align-items-center justify-content-between mb-5"><h5>80 %</h5><h5>Cold</h5></div>
                             <div class="progress  progress-xs">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                </div>
                             </div>
                        </div>
                        <div class="mb-30">
                             <div class="d-flex align-items-center justify-content-between mb-5"><h5>24 %</h5><h5>Fracture</h5></div>
                             <div class="progress  progress-xs">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100" style="width: 24%">
                                </div>
                             </div>
                        </div>
                        <div>
                             <div class="d-flex align-items-center justify-content-between mb-5"><h5>91 %</h5><h5>Ache</h5></div>
                             <div class="progress  progress-xs">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100" style="width: 91%">
                                </div>
                             </div>
                        </div>
                        <div>
                             <div class="d-flex align-items-center justify-content-between mb-5"><h5>50 %</h5><h5>Hematoma</h5></div>
                             <div class="progress  progress-xs">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                </div>
                             </div>
                        </div>
                        <div>
                             <div class="d-flex align-items-center justify-content-between mb-5"><h5>72 %</h5><h5>Caries</h5></div>
                             <div class="progress  progress-xs">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%">
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
@endsection
