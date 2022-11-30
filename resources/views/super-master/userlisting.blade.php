@extends('super-master.layout.header-footer')
@section('super-master')

<div class="main-panel">
@if(Session::has('message'))
                        <div class="alert alert-success">
                            <i class="fa-lg fa fa-warning"></i>
                            {!! session('message') !!}
                        </div>
                        @elseif(Session::has('error'))
                        <div class="alert alert-danger">
                            <i class="fa-lg fa fa-warning"></i>
                            {!! session('error') !!}
                        </div>
                        @endif
    <form action="{{url('userstore')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
                <div class="content-wrapper pb-0" style="background-image: url(super-master/assets/images/wallpaper.jpg); background-repeat: no-repeat; background-position: center;background-size: cover;">
                    <div class="page-header1">
                        <h3 class="page-title">USER LISTING</h3>

                    </div>
                    <div class="row mb-4">

                        <div class="col-lg-3 col-md-3 col-sm-6 themed-grid-col">
                            <p class="card-description mt-2">BROKER </p>
                            <select class="form-select" aria-label="Default select example" name="txtbroker">
                                <option selected>Select...</option>
                                <option value="Master">Master</option>
                                <option value="Broker">Broker</option>
                                <option value="User">User</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 themed-grid-col">
                            <p class="card-description mt-2">MASTER</p>
                            <select class="form-select" aria-label="Default select example" name="txtmaster" >
                                <option selected>Select...</option>
                                <option value="Master">Master</option>
                                <option value="Broker">Broker</option>
                                <option value="User">User</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 themed-grid-col">
                            <p class="card-description mt-2">STATUS </p>
                            <select class="form-select" aria-label="Default select example" name="txtstatus">
                                <option selected>Select status</option>

                                <option value="inactive">inactive</option>
                                <option value="active">active</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 themed-grid-col">
                            <p class="card-description mt-2">CLIENT </p>
                            <select class="form-select" aria-label="Default select example" name="txtclient">
                                <option selected>Select...</option>
                                <option value="Master">Master</option>
                                <option value="Broker">Broker</option>
                                <option value="User">User</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-4">

                        <div class="col-lg-3 col-md-3 col-sm-6 themed-grid-col">
                            <p class="card-description mt-2">LOGIN AFTER </p>
                            <div id="datepicker-popup" class="input-group date datepicker">
                                <input type="text" class="form-control" name="txtloginafter">
                                <span class="input-group-addon input-group-append border-left">
                                    <span class="mdi mdi-calendar input-group-text"></span>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 themed-grid-col">
                            <p class="card-description mt-2">LOGIN BEFORE </p>
                            <div id="datepicker-popup" class="input-group date datepicker">
                                <input type="text" class="form-control" name="txtloginbefore">
                                <span class="input-group-addon input-group-append border-left">
                                    <span class="mdi mdi-calendar input-group-text"></span>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 themed-grid-col">
                            <p class="card-description mt-2">JOIN AFTER </p>
                            <div id="datepicker-popup" class="input-group date datepicker" >
                                <input type="text" class="form-control" name="txtjoinafter">
                                <span class="input-group-addon input-group-append border-left">
                                    <span class="mdi mdi-calendar input-group-text"></span>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 themed-grid-col">
                            <p class="card-description mt-2">JOIN BEFORE </p>
                            <div id="datepicker-popup" class="input-group date datepicker">
                                <input type="text" class="form-control" name="txtjoinbefore">
                                <span class="input-group-addon input-group-append border-left">
                                    <span class="mdi mdi-calendar input-group-text"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                            <!-- <p class="card-description mt-2"> </p> -->
                            <button type="submit" class="btn btn-dark buttonsmall">SUBMIT</button>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                            <!-- <p class="card-description mt-2">Clear Filter </p> -->
                            <button type="button" class="btn btn-secondary buttonsmall">CLEAR FILTER</button>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body1">
                                    <div class="row mb-4">
                                        <div class="col-sm-12 col-md-8">
                                            <div class="dataTables_length d-flex" id="example_length"><label class="d-flex"> Show
                                                    <select name="example_length" aria-controls="example"
                                                        class="custom-select custom-select-sm form-control form-control-sm">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select> entries</label></div>
                                        </div>
                                        <div class="col-sm-12 col-md-4">
                                            <!-- <form class="d-flex "> -->
                                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                                <button class="btn btn btn-primary" type="submit">Search</button>
                                            <!-- </form> -->
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th> NAME </th>
                                                    <th> LOGIN ID </th>
                                                    <th> BROKER </th>
                                                    <th> MASTER </th>
                                                    <th> ACTION </th>
                                                    <th> LOGIN TIME </th>
                                                    <th> LOGIN IP </th>
                                                    <th> JOIN DATE </th>


                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="py-1">
                                                        <img src="{{URL::asset('super-master/assets/images/faces-clipart/pic-1.png')}}" alt="image" />
                                                    </td>
                                                    <td> Herman Beck </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td> $ 77.99 </td>
                                                    <td> May 15, 2015 </td>
                                                    <td> 1 </td>
                                                    <td> none </td>
                                                    <td> 0 </td>

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
                </form>
            </div>

@endsection
