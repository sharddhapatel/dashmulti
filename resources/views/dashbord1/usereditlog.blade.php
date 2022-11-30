@extends('dashbord1.layout.header-footer')
@section('content')

        <div class="content-body">
            <div class="container-fluid mt-3">
                <div class="row mb-4 mt-4">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <p>FROM DATE</p>
                        <div class="input-group">
                            <input type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy"> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <p>TO DATE</p>
                        <div class="input-group">
                            <input type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy"> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <p>FIND LOGS</p>
                        <button type="submit" class="btn btn-dark mb-2">FIND LOGS</button>
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
                                                <th>CLIENT</th>
                                                <th>ACTION</th>
                                                <th>TIME</th>
                                                <th>IP ADDRESS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                            </tr>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>61</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
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
