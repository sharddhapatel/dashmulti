@extends('super-master.layout.header-footer')
    @section('super-master')

    <div class="main-panel">
        <div class="content-wrapper pb-0" style="background-image: url(super-master/assets/images/wallpaper.jpg); background-repeat: no-repeat; background-position: center;background-size: cover;">

            <div class="row mb-4">
                <div class="col-lg-1 col-md-3 col-sm-6 themed-grid-col">
                    <a href="dashboard.html"><button type="button" class="btn btn-dark buttonsmall" >BACK</button></a>
                </div>
                <div class="col-lg-1 col-md-3 col-sm-6 themed-grid-col">
                    <button type="button" class="btn btn-success buttonsmall">SAVE</button>
                </div>
            </div>
            <p style="text-align: center;">Trial Balance </p>
            <div class="row1 d-flex">
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body2">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th> NAME </th>
                                            <th> DEBIT </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>TOTAL:</td>
                                            <td>0.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body2">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th> NAME </th>
                                            <th> CREDIT </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>TOTAL:</td>
                                            <td>0.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td style="text-align: center;">TOTAL DIFFERENCE:0.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- content-wrapper ends -->

    </div>

    @endsection