@extends('dashbord1.layout.header-footer')
@section('content')


<div class="content-body">
        <div class="container-fluid containermt ml-2">

            <div class="row mb-4 ">
                <div class="col-lg-1 col-md-3 col-sm-6 themed-grid-col">
                    <a href="dashboard.html"><button type="button" class="btn btn-dark buttonsmall" >BACK</button></a>
                </div>
                <div class="col-lg-1 col-md-3 col-sm-6 themed-grid-col">
                    <button type="button" class="btn btn-success buttonsmall">SAVE</button>
                </div>
            </div>
            <p style="text-align: center;">Trial Balance </p>
            <div class="row1 d-flex">
                <div class="col-lg-6 grid-margin stretch-card containerpadding">
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
                <div class="col-lg-6 grid-margin stretch-card containerpadding">
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
    </div>


    @endsection