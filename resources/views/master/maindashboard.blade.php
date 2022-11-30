@extends('master.layout.header_footer')
@section('master')


    <div class="main-panel">
        <div class="content-wrapper pb-0" style="background-image: url(master/assets/images/wallpaper.jpg); background-repeat: no-repeat; background-position: center;background-size: cover;">

            <div class="row mb-4">
                <div class="col-lg-3 col-md-3 col-sm-6 themed-grid-col">
                    <p class="card-description mt-2">EXPIRY</p>
                    <div id="datepicker-popup" class="input-group date datepicker">
                        <input type="text" class="form-control">
                        <span class="input-group-addon input-group-append border-left">
                            <span class="mdi mdi-calendar input-group-text"></span>
                        </span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                    <p class="card-description mt-2">SEGMENT </p>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>NSEFUT</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                    <p class="card-description mt-2">SCRIPT</p>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>NIFTY</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>

                <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                    <p class="card-description mt-2">CE/PE</p>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>SELECT..</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                    <p class="card-description mt-2">STRIKE</p>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>SELECT</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-lg-1 col-md-3 col-sm-6 themed-grid-col ">
                    <p class="card-description mt-2">.</p>
                    <button type="button" class="btn btn-success">+</button>
                </div>

            </div>

            <div class="row mb-4">
                <div class="col-lg-3 col-md-3 col-sm-6 themed-grid-col ">
                    <p class="card-description mt-2">SEARCH</p>

                    <div class="input-group-overlay  d-lg-flex"> <input class="form-control" type="text" placeholder="Search...">
                        <!-- <div class="input-group-append-overlay"><span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span></div> -->
                    </div>

                </div>
            </div>

            <div class="row mb-4">
                <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                    <a href="dashboard.html"><button type="button" class="btn btn-light">BACK</button></a>
                </div>

            </div>

            <div class="row mb-4">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card1">
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-dark">
                                    <thead>
                                        <tr>
                                            <th> NSEFUT SYM </th>
                                            <th> BID RATE </th>
                                            <th> ASK RATE </th>
                                            <th> LTP </th>
                                            <th> CHANGE% </th>
                                            <th> NET CHANGE </th>
                                            <th> HIGH </th>
                                            <th> LOW </th>
                                            <th> OPEN </th>
                                            <th> CLOSE </th>
                                            <th> REMOVE </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> 1 </td>
                                            <td> Herman Beck </td>
                                            <td> $ 77.99 </td>
                                            <td> May 15 </td>
                                            <td> May 15 </td>
                                            <td> May 15 2022 </td>
                                            <td> May 15 </td>
                                            <td> May 15 2022</td>
                                            <td> May 15</td>
                                            <td> May 15</td>
                                            <td><i class="mdi mdi-close-box"></i></td>
                                        </tr>
                                        <tr>
                                            <td> 1 </td>
                                            <td> Herman Beck </td>
                                            <td> $ 77.99 </td>
                                            <td> May 15 </td>
                                            <td> May 15 </td>
                                            <td> May 15 2022 </td>
                                            <td> May 15 </td>
                                            <td> May 15 2022</td>
                                            <td> May 15</td>
                                            <td> May 15</td>
                                            <td><i class="mdi mdi-close-box"></i></td>
                                        </tr>
                                        <tr>
                                            <td> 1 </td>
                                            <td> Herman Beck </td>
                                            <td> $ 77.99 </td>
                                            <td> May 15 </td>
                                            <td> May 15 </td>
                                            <td> May 15 2022 </td>
                                            <td> May 15 </td>
                                            <td> May 15 2022</td>
                                            <td> May 15</td>
                                            <td> May 15</td>
                                            <td><i class="mdi mdi-close-box"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card1">
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-dark">
                                    <thead>
                                        <tr>
                                            <th> NSEFUT SYM </th>
                                            <th> BID RATE </th>
                                            <th> ASK RATE </th>
                                            <th> LTP </th>
                                            <th> CHANGE% </th>
                                            <th> NET CHANGE </th>
                                            <th> HIGH </th>
                                            <th> LOW </th>
                                            <th> OPEN </th>
                                            <th> CLOSE </th>
                                            <th> REMOVE </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> 1 </td>
                                            <td> Herman Beck </td>
                                            <td> $ 77.99 </td>
                                            <td> May 15 </td>
                                            <td> May 15 </td>
                                            <td> May 15 2022 </td>
                                            <td> May 15 </td>
                                            <td> May 15 2022</td>
                                            <td> May 15</td>
                                            <td> May 15</td>
                                            <td><i class="mdi mdi-close-box"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card1">
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-dark">
                                    <thead>
                                        <tr>
                                            <th> NSEFUT SYM </th>
                                            <th> BID RATE </th>
                                            <th> ASK RATE </th>
                                            <th> LTP </th>
                                            <th> CHANGE% </th>
                                            <th> NET CHANGE </th>
                                            <th> HIGH </th>
                                            <th> LOW </th>
                                            <th> OPEN </th>
                                            <th> CLOSE </th>
                                            <th> REMOVE </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> 1 </td>
                                            <td> Herman Beck </td>
                                            <td> $ 77.99 </td>
                                            <td> May 15 </td>
                                            <td> May 15 </td>
                                            <td> May 15 2022 </td>
                                            <td> May 15 </td>
                                            <td> May 15 2022</td>
                                            <td> May 15</td>
                                            <td> May 15</td>
                                            <td><i class="mdi mdi-close-box"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card1">
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-dark">
                                    <thead>
                                        <tr>
                                            <th> NSEFUT SYM </th>
                                            <th> BID RATE </th>
                                            <th> ASK RATE </th>
                                            <th> LTP </th>
                                            <th> CHANGE% </th>
                                            <th> NET CHANGE </th>
                                            <th> HIGH </th>
                                            <th> LOW </th>
                                            <th> OPEN </th>
                                            <th> CLOSE </th>
                                            <th> REMOVE </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> 1 </td>
                                            <td> Herman Beck </td>
                                            <td> $ 77.99 </td>
                                            <td> May 15 </td>
                                            <td> May 15 </td>
                                            <td> May 15 2022 </td>
                                            <td> May 15 </td>
                                            <td> May 15 2022</td>
                                            <td> May 15</td>
                                            <td> May 15</td>
                                            <td><i class="mdi mdi-close-box"></i></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection