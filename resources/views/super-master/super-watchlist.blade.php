@extends('super-master.layout.header-footer')
@section('super-master')

<div class="main-panel">
    <div class="content-wrapper pb-0" style="background-image:
            url(super-master/assets/images/wallpaper.jpg); background-repeat: no-repeat;
            background-position: center;background-size: cover;">

        <div class="row mb-4">
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
                <p class="card-description mt-2">EXPIRY</p>
                <select class="form-select" aria-label="Default select example">
                    <option selected>31-03-2022</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                <p class="card-description mt-2">CE/PE</p>
                <select class="form-select" aria-label="Default select example">
                    <option selected></option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-lg-1 col-md-3 col-sm-6 themed-grid-col">
                <p class="card-description mt-2">STRIKE</p>
                <select class="form-select" aria-label="Default select example">
                    <option selected>SELECT</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-lg-1 col-md-3 col-sm-6 themed-grid-col">
                <p class="card-description mt-2">.</p>
                <button type="button" class="btn btn-success">+</button>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                <p class="card-description mt-2">SEARCH</p>
                <div class="d-flex justify-content-center mt-100">
                    <div class="input-group-overlay d-none d-lg-flex"> <input class="form-control" type="text" placeholder="Search...">
                        <div class="input-group-append-overlay"><span class="input-group-text"><i class="fa-solid
                          fa-magnifying-glass"></i></span></div>
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


        <!-- content-wrapper ends -->

    </div>
    <!-- main-panel ends -->
</div>

@endsection