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
                                <input type="checkbox" class="form-check-input" value="" checked>PENDING ORDERS</label>
                        </div>
                        <div class="form-check mb-3">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="">EXECUTED ORDERS</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
            <p>TRADE AFTER</p>
            <div class="input-group">
                <input type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy"> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
            <p>TRADE BEFORE</p>
            <div class="input-group">
                <input type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy"> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
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
    </div>

    <div class="row mb-4">
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
            <p>ORDER TYPE</p>
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
            <p>FIND ORDER</p>
            <button type="submit" class="btn btn-dark mb-2">FIND ORDERS</button>
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
                                    <th>DATE</th>
                                    <th>TIME</th>
                                    <th>CLIENT</th>
                                    <th>MARKET</th>
                                    <th>SCRIPT</th>
                                    <th>B/S</th>
                                    <th>ORDER TYPE</th>
                                    <th>LOT</th>
                                    <th>QTY</th>
                                    <th>ORDER PRICE</th>
                                    <th>STATUS</th>
                                    <th>USER IP</th>
                                    <th>O.TIME</th>
                                    <th>MODIFY</th>
                                    <th>CANCEL</th>
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
                                    <td>61</td>
                                    <td>61</td>
                                    <td>61</td>
                                    <td>61</td>
                                    <td>61</td>
                                    <td>61</td>
                                    <td>61</td>
                                    <td><i class="mdi mdi-pencil"></i></td>
                                    <td><i class="mdi mdi-close"></i></td>
                                </tr>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                    <td>61</td>
                                    <td>61</td>
                                    <td>61</td>
                                    <td>61</td>
                                    <td>61</td>
                                    <td>61</td>
                                    <td>61</td>
                                    <td><i class="mdi mdi-pencil"></i></td>
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


<!-- Mirrored from demo.themefisher.com/quixlab/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Mar 2022 05:45:24 GMT -->

</html>


@endsection
