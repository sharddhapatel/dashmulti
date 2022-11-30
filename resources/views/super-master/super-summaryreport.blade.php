@extends('super-master.layout.header-footer')
@section('super-master')

<div class="main-panel">
                <div class="content-wrapper pb-0" style="background-image: url(super-master/assets/images/wallpaper.jpg); background-repeat: no-repeat; background-position: center;background-size: cover;">

                    <div class="row mb-4">
                        <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                            <p class="card-description mt-2">SELECT MARKET </p>
                            <select class="form-select" aria-label="Default select example">
                      <option selected>Select...</option>
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

                        <div class="col-lg-1 col-md-3 col-sm-6 themed-grid-col">
                            <p class="card-description mt-2">SUBMIT </p>
                            <button type="button" class="btn btn-dark ">SUBMIT</button>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                            <p class="card-description mt-2">CLEAR FILTER </p>
                            <button type="button" class="btn btn-secondary ">CLEAR FILTER</button>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 themed-grid-col">
                            <p class="card-description mt-2">SUMMARY </p>
                            <button type="button" class="btn btn-info">SCRIPT WISE SUMMARY</button>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body1">
                                    <div class="row mb-4">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_length d-flex" id="example_length"><label class="d-flex"> Show 
                          <select name="example_length" aria-controls="example" class="custom-select custom-select-sm form-control form-control-sm">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                          </select> entries</label></div>
                                        </div>
                                        <div class="col-sm-12 col-md-3">
                                            <!-- <p class="card-description mt-2">Summary </p> -->
                                            <button type="button" class="btn btn-secondary">CSV    PDF</button>
                                        </div>
                                        <div class="col-sm-12 col-md-4">
                                            <form class="d-flex ">
                                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                                <button class="btn btn btn-primary" type="submit">Search</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th> SR NO. </th>
                                                    <th> NAME </th>
                                                    <th> ALL </th>
                                                    <th> OUTSTANDING </th>
                                                    <th> NET MTM </th>
                                                    <th> TOTAL MTM </th>
                                                    <th> DOWNLINE MTM </th>
                                                    <th> UPLINE MTM </th>
                                                    <th> SELF MTM </th>
                                                    <th> NET POSITION</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> 1 </td>
                                                    <td> ZZZ-Total</td>
                                                    <td> yes </td>
                                                    <td> yes </td>
                                                    <td> 0.00 </td>
                                                    <td> 0.00 </td>
                                                    <td> 0.00 </td>
                                                    <td> 0.00 </td>
                                                    <td> 0.00 </td>
                                                    <td> 1 </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row mb-2 m-lg-2">
                                        <div class="col-lg-12 ">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination">
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Previous">
                                                            <span aria-hidden="true">&laquo;</span>
                                                        </a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Next">
                                                            <span aria-hidden="true">&raquo;</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- content-wrapper ends -->

            </div>

@endsection