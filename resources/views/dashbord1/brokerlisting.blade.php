@extends('dashbord1.layout.header-footer')
@section('content')





        <div class="content-body">

            <div class="container-fluid mt-3">
                <h2 class="h2border">BROKER LISTING</h2>

                <div class="row mb-4 mt-4">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <p>LOGIN AFTER</p>
                        <div class="input-group">
                            <input type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy"> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <p>LOGIN BEFORE</p>
                        <div class="input-group">
                            <input type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy"> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <p>JOIN AFTER</p>
                        <div class="input-group">
                            <input type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy"> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <p>JOIN BEFORE</p>
                        <div class="input-group">
                            <input type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy"> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                        </div>
                    </div>
                </div>


                <div class="row mb-4 ">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <p>SELECT STATUS</p>
                        <div class="basic-form">
                            <form>
                                <div class="form-row align-items-center">
                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                        <option selected="selected">SELECT...</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                        </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-3 col-sm-6">
                        <p>SUBMIT</p>
                        <button type="submit" class="btn btn-dark mb-2">SUBMIT</button>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <p>CLEAR FILTER</p>
                        <button type="submit" class="btn btn-secondary mb-2">CLEAR FILTER</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>NAME</th>
                                                <th>LOGIN ID</th>
                                                <th>MASTER</th>
                                                <th>TOTAL USERS </th>
                                                <th>OUTSTANDING</th>
                                                <th>LIVE BROKERAGE</th>
                                                <th>ACTION</th>
                                                <th>LOGIN TIME</th>
                                                <th>LOGIN IP</th>
                                                <th>JOIN DATE</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>61</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                                <td>61</td>
                                                <td>61</td>
                                            </tr>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>61</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>61</td>
                                                <td>$320,800</td>
                                                <td>61</td>
                                                <td>61</td>
                                            </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- #/ container -->
        </div>



    </div>


</body>


<!-- Mirrored from demo.themefisher.com/quixlab/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Mar 2022 05:45:24 GMT -->

</html>

@endsection
