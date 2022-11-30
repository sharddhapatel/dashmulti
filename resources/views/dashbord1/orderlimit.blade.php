@extends('dashbord1.layout.header-footer')
@section('content')

        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row mb-4">
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="basic-form">
                            <form>
                                <div class="form-group">
                                    <div class="form-check mb-3">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" value="" checked>PRICE</label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" value="">PERCENT</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <p>SELECT MASTER</p>
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
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <p>SELECT CLIENT</p>
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
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <p>SELECT MARKET</p>
                        <div class="basic-form">
                            <form>
                                <div class="form-row align-items-center">
                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                        <option selected="selected">SELECT MARKET...</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                        </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <p>SELECT SCRIPT</p>
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
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <p>VALUE</p>
                        <div class="form-group">
                            <input type="text" class="form-control input-default" placeholder="">
                        </div>
                    </div>

                </div>

                <div class="row mb-4">

                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <button type="submit" class="btn btn-success mb-2">SUBMIT</button>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <button type="submit" class="btn btn-danger mb-2">DELETE</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive table-dark">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>CLIENT NAME</th>
                                                <th>MARKET</th>
                                                <th>SCRIPT</th>
                                                <th>PRICE/PERCENT</th>
                                                <th>VALUE</th>
                                                <th>TIME</th>
                                                <th>DELETE</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                                <td><i class="mdi mdi-close"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                                <td><i class="mdi mdi-close"></i></td>
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
