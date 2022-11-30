@extends('super-master.layout.header-footer')
@section('super-master')

<div class="main-panel">
                <div class="content-wrapper pb-0" style="background-image: url(super-master/assets/images/wallpaper.jpg); background-repeat: no-repeat; background-position: center;background-size: cover;">

                    <div class="row mb-4">
                        <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                            <div class="form-check">
                                <input class="form-check-input ml" type="checkbox" value="" id="flexCheckDefault" checked>
                                <label class="form-check-label" for="flexCheckDefault">
                    ALL
                  </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input ml" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                    OUTSTANDING
                  </label>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                            <div class="form-check">
                                <input class="form-check-input ml" type="checkbox" value="" id="flexCheckDefault" checked>
                                <label class="form-check-label" for="flexCheckDefault">
                   CLIENT WISE
                  </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input ml" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                    SCRIPT WISE
                  </label>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                            <p class="card-description mt-2"> MARKET </p>
                            <select class="form-select" aria-label="Default select example">
                  <option selected>Select Market</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                            <p class="card-description mt-2"> SCRIPT </p>
                            <select class="form-select" aria-label="Default select example">
                  <option selected>Select Script</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                            <p class="card-description mt-2"> MASTER </p>
                            <select class="form-select" aria-label="Default select example">
                  <option selected>Select Master</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                            <p class="card-description mt-2">CLIENT </p>
                            <select class="form-select" aria-label="Default select example">
                  <option selected>Select Client</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                        </div>
                    </div>

                    <div class="row mb-4">

                        <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                            <p class="card-description mt-2">BROKER </p>
                            <select class="form-select" aria-label="Default select example">
                  <option selected>Select Broker</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                            <p class="card-description mt-2">EXPIRY DATE </p>
                            <div id="datepicker-popup" class="input-group date datepicker">
                                <input type="text" class="form-control">
                                <span class="input-group-addon input-group-append border-left">
                    <span class="mdi mdi-calendar input-group-text"></span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col ">
                            <!-- <p class="card-description mt-2">Find Order </p> -->
                            <a href="#position"><button type="button" class="btn btn-primary buttonsmall" >GET POSITION</button></a>
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                            <!-- <p class="card-description mt-2">Clear Filter </p> -->
                            <button type="button" class="btn btn-success buttonsmall" onclick="showSwal('custom-html')">ROLL OVER ALL</button>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                            <!-- <p class="card-description mt-2">Clear Filter </p> -->
                            <button type="button" class="btn btn-danger buttonsmall" onclick="showSwal('custom-html1')">CLOSE POSITION</button>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                            <!-- <p class="card-description mt-2">Clear Filter </p> -->
                            <a href="#position"> <button type="button" class="btn btn-secondary buttonsmall">CLEAR FILTER</button></a>
                        </div>
                    </div>

                    <div class="row mb-4" id="position">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-4">
                                        <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col col-xsm ">
                                            <p class="card-description mt-2">TOTAL MTM </p>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col col-xsm">
                                            <p class="card-description mt-2">SELF MTM </p>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col col-xsm">
                                            <p class="card-description mt-2">DOWNLINE MTM </p>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col col-xsm">
                                            <p class="card-description mt-2">UPLINE MTM </p>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col col-xsm">
                                            <p class="card-description mt-2">TOTAL QTY </p>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-dark">
                                            <thead>
                                                <tr>
                                                    <th> MARKET </th>
                                                    <th> CLIENT </th>
                                                    <th> SCRIPT </th>
                                                    <th> T.BUY Q. </th>
                                                    <th> BUY A.P. </th>
                                                    <th> T.SELL Q. </th>
                                                    <th> SELL A.P. </th>
                                                    <th> NET Q. </th>
                                                    <th> A/B P. </th>
                                                    <th> MTM </th>
                                                    <th> AUTO CLOSE </th>
                                                    <th> CLOSE </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> 1 </td>
                                                    <td> Herman Beck </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td> $ 77.99 </td>
                                                    <td> May 15, 2015 </td>
                                                    <td> 77 </td>
                                                    <td> 77 </td>
                                                    <td> 77 </td>
                                                    <td> 77 </td>
                                                    <td> 77 </td>
                                                    <td> 77 </td>
                                                    <td><i class="mdi mdi-window-close"></i></td>
                                                </tr>
                                                <tr>
                                                    <td> 2 </td>
                                                    <td> Messsy Adam </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td> $245.30 </td>
                                                    <td> July 1, 2015 </td>
                                                    <td> 77 </td>
                                                    <td> 77 </td>
                                                    <td> 77 </td>
                                                    <td> 77 </td>
                                                    <td> 77 </td>
                                                    <td> 77 </td>
                                                    <td><i class="mdi mdi-window-close"></i></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- content-wrapper ends -->

            </div>

@endsection