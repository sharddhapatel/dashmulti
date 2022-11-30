@extends('master.layout.header_footer')
@section('master')

<div class="main-panel">
                <div class="content-wrapper pb-0" style="background-image: url(../assets/images/wallpaper.jpg); background-repeat: no-repeat; background-position: center;background-size: cover;">

                    <div class="page-header1">
                        <h3 class="page-title">Max Quantity Details </h3>

                    </div>


                    <div class="row mb-4">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body1">
                                    <div class="row mb-4">
                                        <div class="col-sm-12 col-md-8">
                                            <div class="dataTables_length d-flex" id="example_length"><label class="d-flex"> Show 
                            <select name="example_length" aria-controls="example" class="custom-select custom-select-sm form-control form-control-sm">
                              <option value="10">10</option>
                              <option value="25">25</option>
                              <option value="50">50</option>
                              <option value="100">100</option>
                            </select> entries</label></div>
                                        </div>
                                        <div class="col-sm-12 col-md-4">
                                            <form class="d-flex ">
                                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                                <button class="btn btn btn-primary" type="submit">Search</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-dark">
                                            <thead>
                                                <tr>
                                                    <th> MARKET </th>
                                                    <th> SCRIPT </th>
                                                    <th> POSITION LIMIT</th>
                                                    <th> MAX ORDER </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>NSEEQT</td>
                                                    <td>KIRINDUS </td>
                                                    <td>2,000.00</td>
                                                    <td>1,000.00</td>
                                                </tr>
                                                <tr>
                                                    <td>NSEEQT</td>
                                                    <td>UTIAMC </td>
                                                    <td>2,000.00</td>
                                                    <td>1,000.00</td>
                                                </tr>
                                                <tr>
                                                    <td>NSEEQT</td>
                                                    <td>DIXON </td>
                                                    <td>2,000.00</td>
                                                    <td>1,000.00</td>
                                                </tr>
                                                <tr>
                                                    <td>NSEEQT</td>
                                                    <td>FDC </td>
                                                    <td>2,000.00</td>
                                                    <td>1,000.00</td>
                                                </tr>
                                                <tr>
                                                    <td>NSEEQT</td>
                                                    <td>MCX </td>
                                                    <td>2,000.00</td>
                                                    <td>1,000.00</td>
                                                </tr>
                                                <tr>
                                                    <td>NSEEQT</td>
                                                    <td>IRB </td>
                                                    <td>2,000.00</td>
                                                    <td>1,000.00</td>
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