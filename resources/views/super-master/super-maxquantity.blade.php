    @extends('super-master.layout.header-footer')
    @section('super-master')

<div class="main-panel">
                <div class="content-wrapper pb-0" style="background-image: url(super-master/assets/images/wallpaper.jpg); background-repeat: no-repeat; background-position: center;background-size: cover;">

                    <div class="page-header1">
                        <h3 class="page-title">Max Quantity Details </h3>

                    </div>

                    <div class="row mb-4">

                        <div class="col-lg-3 col-md-3 col-sm-6 themed-grid-col">
                            <p class="card-description mt-2">LEVEL </p>
                            <select class="form-select" aria-label="Default select example">
                  <option selected>Select Level</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 themed-grid-col">
                            <p class="card-description mt-2">FIND </p>
                            <button type="button" onclick="showDiv()" class="btn btn-info buttonsmall">+ FIND </button>
                        </div>
                    </div>


                    <div class="row mb-4">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">

                                    <div class="table-responsive" id="welcomeDiv" style="display: none;">
                                        <table class="table table-bordered table-dark">
                                            <thead>
                                                <tr>
                                                    <th> LEVEL </th>
                                                    <th> MARKET </th>
                                                    <th> SCRIPT </th>
                                                    <th> POSITION LIMIT</th>
                                                    <th>MAX ORDER </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> 1 </td>
                                                    <td> YES </td>
                                                    <td> YES </td>
                                                    <td>5 </td>
                                                    <td>789 </td>
                                                </tr>
                                                <tr>
                                                    <td> 1 </td>
                                                    <td> YES </td>
                                                    <td> YES </td>
                                                    <td>5 </td>
                                                    <td>789 </td>
                                                </tr>
                                                <tr>
                                                    <td> 1 </td>
                                                    <td> YES </td>
                                                    <td> YES </td>
                                                    <td>5 </td>
                                                    <td>789 </td>
                                                </tr>
                                                <tr>
                                                    <td> 1 </td>
                                                    <td> YES </td>
                                                    <td> YES </td>
                                                    <td>5 </td>
                                                    <td>789 </td>
                                                </tr>
                                                <tr>
                                                    <td> 1 </td>
                                                    <td> YES </td>
                                                    <td> YES </td>
                                                    <td>5 </td>
                                                    <td>789 </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="table-responsive" id="hideDiv" style="display: block;">
                                        <table class="table table-bordered table-dark">
                                            <thead>
                                                <tr>
                                                    <th> LEVEL </th>
                                                    <th> MARKET </th>
                                                    <th> SCRIPT </th>
                                                    <th> POSITION LIMIT</th>
                                                    <th>MAX ORDER </th>
                                                </tr>
                                            </thead>
                                            <tbody>

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