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
                                            <input type="checkbox" class="form-check-input" value="" checked>ALL</label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" value="">OUTSTANDING</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="basic-form">
                            <form>
                                <div class="form-group">
                                    <div class="form-check mb-3">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" value="" checked>CLIENT WISE</label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" value="">SCRIPT WISE</label>
                                    </div>
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
                </div>

                <div class="row mb-4">
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <p>SELECT BROKER</p>
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
                        <p>EXPIRY DATE</p>
                        <div class="input-group">
                            <input type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy"> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <a href="#position"><button type="submit" class="btn btn-primary mb-2">GET POSITION</button></a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <a data-toggle="modal" data-target="#rolloverallmodel" data-whatever="@mdo"><button type="submit" class="btn btn-success mb-2">ROLL OVERALL</button></a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <a data-toggle="modal" data-target="#closepositionmodel" data-whatever="@mdo"><button type="submit" class="btn btn-danger mb-2">CLOSE POSITION</button></a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <a href="#position"><button type="submit" class="btn btn-secondary mb-2">CLEAR FILTER</button></a>
                    </div>
                </div>

                <!-- ROLL OVERALL -->

                <div class="modal fade" id="rolloverallmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">ROLL OVERALL POSITION</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">PASSWORD:</label>
                                        <input type="password" class="form-control" id="recipient-name">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">SUBMIT</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CLOSE POSITION -->

                <div class="modal fade" id="closepositionmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">CLOSE ALL POSITION</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">PASSWORD:</label>
                                        <input type="password" class="form-control" id="recipient-name">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">SUBMIT</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row" id="position">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-4">
                                    <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col col-xsm ">
                                        <p class="card-description mt-2">TOTAL MTM </p>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col col-xsm">
                                        <p class="card-description mt-2">SELF MTM </p>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col col-xsm">
                                        <p class="card-description mt-2">DOWNLINE MTM </p>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col col-xsm">
                                        <p class="card-description mt-2">UPLINE MTM </p>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col col-xsm">
                                        <p class="card-description mt-2">TOTAL QTY </p>
                                    </div>
                                </div>
                                <div class="table-responsive table-dark">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>MARKET</th>
                                                <th>CLIENT</th>
                                                <th>SCRIPT</th>
                                                <th>T.BUY Q.</th>
                                                <th>BUY A.P.</th>
                                                <th>T.SELL Q.</th>
                                                <th>SELL A.P.</th>
                                                <th>NET Q.</th>
                                                <th>A/B P.</th>
                                                <th>MTM</th>
                                                <th>AUTO CLOSE</th>
                                                <th>CLOSE</th>
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
