@extends('super-master.layout.header-footer')
@section('super-master')

<div class="main-panel">
                <div class="content-wrapper pb-0" style="background-image: url(super-master/assets/images/wallpaper.jpg); background-repeat: no-repeat; background-position: center;background-size: cover;">

                    <div class="row mb-4">

                        <div class="col-lg-4 col-md-3 col-sm-6 themed-grid-col">
                            <p class="card-description mt-2">MASTER </p>
                            <select class="form-select" aria-label="Default select example">
                  <option selected>Select Master</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-6 themed-grid-col">
                            <p class="card-description mt-2">CLIENT </p>
                            <select class="form-select" aria-label="Default select example">
                  <option selected>Select Client</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-6 themed-grid-col">
                            <p class="card-description mt-2">BROKER </p>
                            <select class="form-select" aria-label="Default select example">
                  <option selected>Select Broker</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                            <!-- <p class="card-description mt-2">.</p> -->
                            <button type="button" class="btn btn-dark buttonsmall">SUBMIT</button>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                            <!-- <p class="card-description mt-2">. </p> -->
                            <button type="button" class="btn btn-secondary buttonsmall">CLEAR FILTER</button>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-dark">
                                            <thead>
                                                <tr>
                                                    <th> NAME </th>
                                                    <th> NSEFUT </th>
                                                    <th> MCXFUT </th>
                                                    <th> NSEOPT </th>
                                                    <th> GLOBAL </th>
                                                    <th> NSEEQT </th>
                                                    <th> TOTAL </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> Total </td>
                                                    <td> 0/1,000 </td>
                                                    <td> 0/1,000 </td>
                                                    <td> 0/1,000 </td>
                                                    <td> 0/1,000 </td>
                                                    <td> 0/ </td>
                                                    <td> 0/4,000 </td>
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