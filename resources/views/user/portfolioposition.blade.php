@extends('user.layout.header_footer')
@section('user')

<div class="content-body">
            <div class="container-fluid">
                <div class="form-row">
                    <div class="form-group col-lg-2 col-md-3 col-sm-6">
                        <div class="form-group">
                            <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" id="check1" value="" checked>
                                <label class="form-check-label" for="check1">ALL</label>
                            </div>
                            <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" id="check2" value="">
                                <label class="form-check-label" for="check2">OUTSTANDING</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-lg-2 col-md-3 col-sm-6">
                        <div class="form-group">
                            <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" id="check1" value="" checked>
                                <label class="form-check-label" for="check1">CLIENT WISE</label>
                            </div>
                            <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" id="check2" value="">
                                <label class="form-check-label" for="check2">SCRIPT WISE</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-lg-2 col-md-3 col-sm-6">
                        <label>SELECT MARKET</label>
                        <select id="inputState" class="form-control">
                                <option selected>SELECT..</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                    </div>
                    <div class="form-group col-lg-2 col-md-3 col-sm-6">
                        <label>SELECT SCRIPT</label>
                        <select id="inputState" class="form-control">
                                <option selected>SELECT..</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-2 col-md-3 col-sm-6">
                        <label>EXPIRY DATE</label>
                        <input name="datepicker" class="datepicker-default form-control" id="datepicker">
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                        <!-- <p class="card-description mt-2">Find Order </p> -->
                        <a href="#position"><button type="button" class="btn btn-primary buttonsmall" >GET POSITION</button></a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                        <div class="bootstrap-modal">
                            <button type="button" class="btn btn-success buttonsmall" data-toggle="modal" data-target="#basicModal">ROLL OVER ALL</button>
                            <div class="modal fade" id="basicModal">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">ROLL OVERALL POSITION</h5>
                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">PASSWORD</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                                </div>

                                                <button type="submit" class="btn btn-primary">SUBMIT</button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col ">
                        <div class="bootstrap-modal">
                            <button type="button" class="btn btn-danger buttonsmall" data-toggle="modal" data-target="#basicModal">CLOSE POSITION</button>
                            <div class="modal fade" id="basicModal">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">CLOSE ALL POSITION</h5>
                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">PASSWORD</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                                </div>

                                                <button type="submit" class="btn btn-primary">SUBMIT</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col ">
                        <!-- <p class="card-description mt-2 ">Clear Filter </p> -->
                        <a href="#position "> <button type="button " class="btn btn-secondary buttonsmall ">CLEAR FILTER</button></a>
                    </div>

                </div>

                <div class="row " id="position">
                    <div class="col-lg-12 ">
                        <div class="card ">

                            <div class="card-body ">
                                <div class="row mb-4 ">
                                    <div class="col-2 themed-grid-col ">
                                        <p class="card-description mt-2 ">TOTAL MTM </p>
                                    </div>
                                    <div class="col-2 themed-grid-col ">
                                        <p class="card-description mt-2 ">TOTAL QTY </p>
                                    </div>
                                </div>
                                <div class="table-responsive table-dark ">
                                    <table class="table table-bordered table-striped verticle-middle table-responsive-sm ">
                                        <thead>
                                            <tr>
                                                <th scope="col ">MARKET</th>
                                                <th scope="col ">SCRIPT</th>
                                                <th scope="col ">T.BUY Q.</th>
                                                <th scope="col ">BUY A.P.</th>
                                                <th scope="col ">T.SELL Q.</th>
                                                <th scope="col ">SELL A.P.</th>
                                                <th scope="col ">NET Q.</th>
                                                <th scope="col ">A/B P.</th>
                                                <th scope="col ">MTM</th>
                                                <th scope="col ">AUTO CLOSE</th>
                                                <th scope="col ">CLOSE</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Air Conditioner</td>
                                                <td>
                                                    5.000
                                                </td>
                                                <td>Apr 20,2018</td>
                                                <td><span class="badge badge-primary ">70%</span></td>
                                                <td><span class="badge badge-primary ">70%</span></td>
                                                <td><span class="badge badge-primary ">70%</span></td>
                                                <td><span class="badge badge-primary ">70%</span></td>
                                                <td><span class="badge badge-primary ">70%</span></td>
                                                <td><span class="badge badge-primary ">70%</span></td>
                                                <td><span class="badge badge-primary ">70%</span></td>
                                                <td><span><a href="javascript:void() " data-toggle="tooltip "
                                                            data-placement="top " title="Close "><i
                                                                class="fa fa-close color-danger "></i></a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Air Conditioner</td>
                                                <td>
                                                    5.000
                                                </td>
                                                <td>Apr 20,2018</td>
                                                <td><span class="badge badge-primary ">70%</span></td>
                                                <td><span class="badge badge-primary ">70%</span></td>
                                                <td><span class="badge badge-primary ">70%</span></td>
                                                <td><span class="badge badge-primary ">70%</span></td>
                                                <td><span class="badge badge-primary ">70%</span></td>
                                                <td><span class="badge badge-primary ">70%</span></td>
                                                <td><span class="badge badge-primary ">70%</span></td>
                                                <td><span><a href="javascript:void() " data-toggle="tooltip "
                                                            data-placement="top " title="Close "><i
                                                                class="fa fa-close color-danger "></i></a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Air Conditioner</td>
                                                <td>
                                                    5.000
                                                </td>
                                                <td>Apr 20,2018</td>
                                                <td><span class="badge badge-primary ">70%</span></td>
                                                <td><span class="badge badge-primary ">70%</span></td>
                                                <td><span class="badge badge-primary ">70%</span></td>
                                                <td><span class="badge badge-primary ">70%</span></td>
                                                <td><span class="badge badge-primary ">70%</span></td>
                                                <td><span class="badge badge-primary ">70%</span></td>
                                                <td><span class="badge badge-primary ">70%</span></td>
                                                <td><span><a href="javascript:void() " data-toggle="tooltip "
                                                            data-placement="top " title="Close "><i
                                                                class="fa fa-close color-danger "></i></a></span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection