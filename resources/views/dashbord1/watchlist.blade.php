@extends('dashbord1.layout.header-footer')
@section('content')

        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row mb-4">
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <p>SEGMENT</p>
                        <div class="basic-form">
                            <form>
                                <div class="form-row align-items-center">
                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                        <option selected="selected">NSEFUT</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                        </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <p>SCRIPT</p>
                        <div class="basic-form">
                            <form>
                                <div class="form-row align-items-center">
                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                        <option selected="selected">NIFTY</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                        </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <p>EXPIRY</p>
                        <div class="input-group">
                            <input type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy"> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <p>CE/PE</p>
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
                        <p>STRIKE</p>
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
                        <p>.</p>
                        <button type="submit" class="btn btn-success mb-2"> + </button>

                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="input-group icons">
                            <input type="search" class="form-control" placeholder="Search..." aria-label="Search...">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify mdicolor"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive table-dark">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>NSEFUT SYM</th>
                                                <th>BID RATE</th>
                                                <th>ASK RATE</th>
                                                <th>LTP</th>
                                                <th>CHANGE%</th>
                                                <th>NET CHANGE</th>
                                                <th>HIGH</th>
                                                <th>LOW</th>
                                                <th>OPEN</th>
                                                <th>CLOSE</th>
                                                <th>REMOVE</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>1</th>
                                                <td>22.00</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>January 22</td>
                                                <td class="color-primary">$21.56</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td><i class="mdi mdi-close"></i></td>
                                            </tr>
                                            <tr>
                                                <th>1</th>
                                                <td>22.00</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>January 22</td>
                                                <td class="color-primary">$21.56</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td><i class="mdi mdi-close"></i></td>

                                            </tr>
                                        </tbody>
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
