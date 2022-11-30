@extends('dashbord1.layout.header-footer')
@section('content')




        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row mb-4">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <p>MASTER</p>
                        <div class="basic-form">
                            <form>
                                <div class="form-row
                                            align-items-center">
                                    <select class="custom-select
                                                mr-sm-2" id="inlineFormCustomSelect">
                                                <option selected="selected">SELECT
                                                    MASTER...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <p>CLIENT</p>
                        <div class="basic-form">
                            <form>
                                <div class="form-row
                                            align-items-center">
                                    <select class="custom-select
                                                mr-sm-2" id="inlineFormCustomSelect">
                                                <option selected="selected">SELECT
                                                    CLIENT...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <p>BROKER</p>
                        <div class="basic-form">
                            <form>
                                <div class="form-row
                                            align-items-center">
                                    <select class="custom-select
                                                mr-sm-2" id="inlineFormCustomSelect">
                                                <option selected="selected">SELECT
                                                    BROKER...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <button type="submit" class="btn btn-dark mb-2">SUBMIT</button>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <button type="submit" class="btn btn-secondary mb-2">CLEAR FILTER</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive
                                            table-dark">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>NAME</th>
                                                <th>NSEFUT</th>
                                                <th>MCXFUT</th>
                                                <th>NSEOPT</th>
                                                <th>GLOBAL</th>
                                                <th>NSEEQT</th>
                                                <th>TOTAL</th>
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
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <th>1</th>
                                                <td>22.00</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
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
                <!-- <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018
                </p> -->
            </div>
        </div>

    </div>



</body>


<!-- Mirrored from demo.themefisher.com/quixlab/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Mar 2022 05:45:24 GMT -->

</html>

@endsection
