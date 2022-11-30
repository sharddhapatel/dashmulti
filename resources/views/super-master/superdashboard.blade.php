@extends('super-master.layout.header-footer')
@section('super-master')

<div class="main-panel">
    <div class="content-wrapper pb-0" style="background-image: url(super-master/assets/images/wallpaper.jpg); background-repeat: no-repeat; background-position: center;background-size: cover;">

        <div class="row mt-5">
            <div class="col-lg-6">
                <h4 class="orderh4 d-flex"> Executed Order <a href="index.html" class="ordera">View More</a></h4>
                <div class="row mb-4">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body1">

                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th> DATE </th>
                                                <th> TIME </th>
                                                <th> CLIENT </th>
                                                <th> SCRIPT </th>
                                                <th> TYPE </th>
                                                <th> LOT </th>
                                                <th> QTY </th>
                                                <th> RATE </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>22 june</td>
                                                <td>05:30</td>
                                                <td>YES</td>
                                                <td>1</td>
                                                <td>NONE</td>
                                                <td>2</td>
                                                <td>5</td>
                                                <td>1,000.00</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-6">
                <h4 class="orderh4 d-flex"> Pending Order <a href="index.html" class="ordera">View More</a></h4>
                <div class="row mb-4">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body1">

                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th> DATE </th>
                                                <th> TIME </th>
                                                <th> CLIENT </th>
                                                <th> SCRIPT </th>
                                                <th> TYPE </th>
                                                <th> LOT </th>
                                                <th> QTY </th>
                                                <th> RATE </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>22 june</td>
                                                <td>05:30</td>
                                                <td>YES</td>
                                                <td>1</td>
                                                <td>NONE</td>
                                                <td>2</td>
                                                <td>5</td>
                                                <td>1,000.00</td>
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
        <div class="row">
            <div class="col-lg-12">
                <h4 class="orderh4 d-flex"> Rejection Log <a href="index.html" class="ordera">View More</a></h4>
                <div class="row mb-4">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body1">

                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th> DATE </th>
                                                <th> A </th>
                                                <th> DATE </th>
                                                <th> CLIENT </th>
                                                <th> SCRIPT </th>
                                                <th> TYPE </th>
                                                <th> LOT </th>
                                                <th> QTY </th>
                                                <th> RATE </th>
                                                <th> REASON </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>22 june</td>
                                                <td>05:30</td>
                                                <td>YES</td>
                                                <td>1</td>
                                                <td>NONE</td>
                                                <td>2</td>
                                                <td>5</td>
                                                <td>5</td>
                                                <td>1,000.00</td>
                                                <td>NONE</td>
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

        <!-- image card row starts here -->


    </div>
    <!-- content-wrapper ends -->


    <!-- partial -->
</div>

@endsection