@extends('super-master.layout.header-footer')
@section('super-master')

<div class="main-panel">
                <div class="content-wrapper pb-0" style="background-image: url(super-master/assets/images/wallpaper.jpg); background-repeat: no-repeat; background-position: center;background-size: cover;">

                    <div class="row mb-4">

                        <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                            <p class="card-description mt-2">SELECT MARKET </p>
                            <select class="form-select" aria-label="Default select example">
                  <option selected>Select Market</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                            <p class="card-description mt-2">SELECT SCRIPT </p>
                            <select class="form-select" aria-label="Default select example">
                  <option selected>Select...</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                            <p class="card-description mt-2">SELECT VALAN </p>
                            <select class="form-select" aria-label="Default select example">
                  <option selected>Select...</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                            <p class="card-description mt-2">SELECT MASTER </p>
                            <select class="form-select" aria-label="Default select example">
                  <option selected>Select...</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                            <p class="card-description mt-2">SELECT BROKER </p>
                            <select class="form-select" aria-label="Default select example">
                  <option selected>Select...</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                            <p class="card-description mt-2">SELECT CLIENT </p>
                            <!-- <input type="text" class="form-control" id="exampleInputName1"> -->
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                    </div>

                    <div class="row mb-4">

                        <div class="col-lg-3 col-md-3 col-sm-6 themed-grid-col">
                            <p class="card-description mt-2">START DATE </p>
                            <div id="datepicker-popup" class="input-group date datepicker">
                                <input type="text" class="form-control">
                                <span class="input-group-addon input-group-append border-left">
                        <span class="mdi mdi-calendar input-group-text"></span>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 themed-grid-col">
                            <p class="card-description mt-2">END DATE </p>
                            <div id="datepicker-popup" class="input-group date datepicker">
                                <input type="text" class="form-control">
                                <span class="input-group-addon input-group-append border-left">
                        <span class="mdi mdi-calendar input-group-text"></span>
                                </span>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                            <p class="card-description mt-2">GET CSV</p>
                            <button type="button" class="btn btn-dark">GET CSV</button>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                            <p class="card-description mt-2">CLEAR FILTER </p>
                            <button type="button" class="btn btn-secondary">CLEAR FILTER</button>
                        </div>
                    </div>

                </div>
                <!-- content-wrapper ends -->

            </div>


@endsection