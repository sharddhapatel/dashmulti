@extends('dashbord1.layout.header-footer')
@section('content')



        <div class="content-body">

            <div class="container-fluid mt-4">
                <div class="row mb-4">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="basic-form">
                            <form>
                                <div class="form-group">
                                    <div class="form-check mb-3">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" value="" >SHOW ZERO LEDGER ACCOUNT(S)</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <button type="submit" class="btn btn-dark mb-2">SUBMIT</button>
                    </div>


                </div>



                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-lg-2 col-md-3 col-sm-6">
                                    <button type="submit" class="btn btn-secondary mb-2">CSV PDF</button>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>

                                                <th>NAME</th>
                                                <th>BALANCE</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="#">UPLINE</a></td>
                                                <td>0.00</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">UPLINE</a></td>
                                                <td>0.00</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">UPLINE</a></td>
                                                <td>0.00</td>
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

        <div class="footer">
            <div class="copyright">
                <!-- <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p> -->
            </div>
        </div>

    </div>



</body>


<!-- Mirrored from demo.themefisher.com/quixlab/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Mar 2022 05:45:24 GMT -->

</html>

@endsection
