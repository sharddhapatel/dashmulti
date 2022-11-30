@extends('super-master.layout.header-footer')
@section('super-master')

<div class="main-panel">
                <div class="content-wrapper pb-0" style="background-image: url(super-master/assets/images/wallpaper.jpg); background-repeat: no-repeat; background-position: center;background-size: cover;">

                    <div class="row mb-4">
                        <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                            <div class="form-check">
                                <input class="form-check-input ml" type="checkbox" value="" id="flexCheckDefault" checked>
                                <label class="form-check-label" for="flexCheckDefault">
                    PENDING ORDERS
                  </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input ml" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                    EXECUTED ORDERS
                  </label>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                            <p class="card-description mt-2">TRADE AFTER </p>
                            <div id="datepicker-popup" class="input-group date datepicker">
                                <input type="text" class="form-control">
                                <span class="input-group-addon input-group-append border-left">
                    <span class="mdi mdi-calendar input-group-text"></span>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                            <p class="card-description mt-2">TRADE BEFORE </p>
                            <div id="datepicker-popup" class="input-group date datepicker">
                                <input type="text" class="form-control">
                                <span class="input-group-addon input-group-append border-left">
                    <span class="mdi mdi-calendar input-group-text"></span>
                                </span>
                            </div>
                        </div>
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
                            <p class="card-description mt-2">Select Script </p>
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
                    </div>

                    <div class="row mb-4">

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
                            <p class="card-description mt-2">SELECT CLIENT </p>
                            <select class="form-select" aria-label="Default select example">
                  <option selected>Select...</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                            <p class="card-description mt-2">ORDER TYPE </p>
                            <select class="form-select" aria-label="Default select example">
                  <option selected>Select order type</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                            <p class="card-description mt-2">FIND ORDER </p>
                            <button type="button" class="btn btn-dark">FIND ORDERS</button>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                            <p class="card-description mt-2">CLEAR FILTER </p>
                            <button type="button" class="btn btn-secondary">CLEAR FILTER</button>
                        </div>
                    </div>


                    <div class="row mb-4">
                        <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                            <a href="dashboard.html"><button type="button" class="btn btn-light" >BACK</button></a>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body1">
                                    <div class="row mb-4">
                                        <div class="col-sm-12 col-md-8">
                                            <div class="dataTables_length d-flex" id="example_length">
                                                <label class="d-flex">
                            <i>
                              <ion-icon name="arrow-dropdown"></ion-icon>
                            </i>
                             Show 
                          <select name="example_length" aria-controls="example" class="custom-select custom-select-sm form-control form-control-sm">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                          </select>
                           entries
                          </label>
                                            </div>
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
                                                    <th> DATE </th>
                                                    <th> TIME </th>
                                                    <th> CLIENT </th>
                                                    <th> MARKET </th>
                                                    <th> SCRIPT </th>
                                                    <th> B/S </th>
                                                    <th> ORDER TYPE </th>
                                                    <th> LOT </th>
                                                    <th> QTY </th>
                                                    <th> ORDER PRICE </th>
                                                    <th> STATUS</th>
                                                    <th> USER IP </th>
                                                    <th> O.TIME </th>
                                                    <th> MODIFY</th>
                                                    <th> CANCEL </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="py-1">
                                                        <img src="{{URL::asset('super-master/assets/images/faces-clipart/pic-1.png')}}" alt="image" />
                                                    </td>
                                                    <td> Herman </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td> $ 77.99 </td>
                                                    <td> May 15 </td>
                                                    <td> 1 </td>
                                                    <td> none </td>
                                                    <td> 0 </td>
                                                    <td> 5 </td>
                                                    <td> 10k </td>
                                                    <td> firstclass </td>
                                                    <td> 125 </td>
                                                    <td> 22h. </td>
                                                    <td><i class="mdi mdi-lead-pencil"></i></td>
                                                    <td><i class="mdi mdi-window-close"></i></td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <img src="{{URL::asset('super-master/assets/images/faces-clipart/pic-2.png')}}" alt="image" />
                                                    </td>
                                                    <td> Messsy Adam </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td> $245.30 </td>
                                                    <td> July 1, 2015 </td>
                                                    <td> 1 </td>
                                                    <td> none </td>
                                                    <td> 0 </td>
                                                    <td> 5 </td>
                                                    <td> 10k </td>
                                                    <td> firstclass </td>
                                                    <td> 125 </td>
                                                    <td> 22h. </td>
                                                    <td><i class="mdi mdi-lead-pencil"></i></td>
                                                    <td><i class="mdi mdi-window-close"></i></td>
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

                    <!-- image card row starts here -->
                    <div class="row">
                        <div class="col-sm-4 stretch-card grid-margin">
                            <div class="card">
                                <div class="card-body p-0">
                                    <img class="img-fluid w-100" src="{{URL::asset('super-master/assets/images/dashboard/img_1.jpg')}}" alt="">
                                </div>
                                <div class="card-body px-3 text-dark">
                                    <div class="d-flex justify-content-between">
                                        <p class="text-muted font-13 mb-0">ENTIRE APARTMENT</p>
                                        <i class="mdi mdi-heart-outline"></i>
                                    </div>
                                    <h5 class="font-weight-semibold">Cosy Studio flat in London</h5>
                                    <div class="d-flex justify-content-between font-weight-semibold">
                                        <p class="mb-0"><i class="mdi mdi-star star-color pe-1"></i>4.60 (35)</p>
                                        <p class="mb-0">$5,267/night</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 stretch-card grid-margin">
                            <div class="card">
                                <div class="card-body p-0">
                                    <img class="img-fluid w-100" src="{{URL::asset('super-master/assets/images/dashboard/img_2.jpg')}}" alt="">
                                </div>
                                <div class="card-body px-3 text-dark">
                                    <div class="d-flex justify-content-between">
                                        <p class="text-muted font-13 mb-0">ENTIRE APARTMENT</p>
                                        <i class="mdi mdi-heart-outline"></i>
                                    </div>
                                    <h5 class="font-weight-semibold">Victoria Bedsit Studio Ensuite</h5>
                                    <div class="d-flex justify-content-between font-weight-semibold">
                                        <p class="mb-0"><i class="mdi mdi-star star-color pe-1"></i>4.83 (12)</p>
                                        <p class="mb-0">$6,144/night</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 stretch-card grid-margin">
                            <div class="card">
                                <div class="card-body p-0">
                                    <img class="img-fluid w-100" src="{{URL::asset('super-master/assets/images/dashboard/img_3.jpg')}}" alt="">
                                </div>
                                <div class="card-body px-3 text-dark">
                                    <div class="d-flex justify-content-between">
                                        <p class="text-muted font-13 mb-0">ENTIRE APARTMENT</p>
                                        <i class="mdi mdi-heart-outline"></i>
                                    </div>
                                    <h5 class="font-weight-semibold">Fabulous Huge Room </h5>
                                    <div class="d-flex justify-content-between font-weight-semibold">
                                        <p class="mb-0"><i class="mdi mdi-star star-color pe-1"></i>3.83 (15)</p>
                                        <p class="mb-0">$5,267/night</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- content-wrapper ends -->

            </div>

@endsection