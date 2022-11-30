@extends('user.layout.header_footer')
@section('user')

<div class="content-body">
    <div class="container-fluid">
        <div class="form-row">
            <div class="form-group col-lg-2 col-md-3 col-sm-6">
                <label>SEGMENT</label>
                <select id="inputState" class="form-control">
                    <option selected>NSEFUT</option>
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                </select>
            </div>
            <div class="form-group col-lg-2 col-md-3 col-sm-6">
                <label>SCRIPT</label>
                <select id="inputState" class="form-control">
                    <option selected>NIFTY</option>
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                </select>
            </div>
            <div class="form-group col-lg-2 col-md-3 col-sm-6">
                <label>EXPIRY</label>
                <input name="datepicker" class="datepicker-default form-control" id="datepicker">
            </div>
            <div class="form-group col-lg-2 col-md-3 col-sm-6">
                <label>CE/PE</label>
                <select id="inputState" class="form-control">
                    <option selected>NIFTY</option>
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                </select>
            </div>
            <div class="form-group col-lg-1 col-md-3 col-sm-6">
                <label>STRIKE</label>
                <select id="inputState" class="form-control">
                    <option selected>SELECT..</option>
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                </select>
            </div>
            <div class="form-group col-lg-1 col-md-3 col-sm-6">
                <label>ADD</label>
                <button type="button" class="btn waves-effect waves-light btn-ft btn-success">ADD +</button>
            </div>
            <div class="form-group col-lg-2 col-md-3 col-sm-6">
                <label>SEARCH</label>
                <div class="input-group-overlay  d-lg-flex"> <input class="form-control" type="text" placeholder="Search...">
                </div>
            </div>



        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">

                    <div class="card-body">
                        <div class="table-responsive table-dark">
                            <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">NSEFUT SYM</th>
                                        <th scope="col">BID RATE</th>
                                        <th scope="col">ASK RATE</th>
                                        <th scope="col">LTP</th>
                                        <th scope="col">CHANGE%</th>
                                        <th scope="col">NET CHANGE</th>
                                        <th scope="col">HIGH</th>
                                        <th scope="col">LOW</th>
                                        <th scope="col">OPEN</th>
                                        <th scope="col">CLOSE</th>
                                        <th scope="col">REMOVE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Air Conditioner</td>
                                        <td>
                                            5.000
                                        </td>
                                        <td>Apr 20,2018</td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span><a href="javascript:void()" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Air Conditioner</td>
                                        <td>
                                            5.000
                                        </td>
                                        <td>Apr 20,2018</td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span><a href="javascript:void()" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Air Conditioner</td>
                                        <td>
                                            5.000
                                        </td>
                                        <td>Apr 20,2018</td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span><a href="javascript:void()" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">

                    <div class="card-body">
                        <div class="table-responsive table-dark">
                            <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">NSEFUT SYM</th>
                                        <th scope="col">BID RATE</th>
                                        <th scope="col">ASK RATE</th>
                                        <th scope="col">LTP</th>
                                        <th scope="col">CHANGE%</th>
                                        <th scope="col">NET CHANGE</th>
                                        <th scope="col">HIGH</th>
                                        <th scope="col">LOW</th>
                                        <th scope="col">OPEN</th>
                                        <th scope="col">CLOSE</th>
                                        <th scope="col">REMOVE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Air Conditioner</td>
                                        <td>
                                            5.000
                                        </td>
                                        <td>Apr 20,2018</td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span><a href="javascript:void()" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">

                    <div class="card-body">
                        <div class="table-responsive table-dark">
                            <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">NSEFUT SYM</th>
                                        <th scope="col">BID RATE</th>
                                        <th scope="col">ASK RATE</th>
                                        <th scope="col">LTP</th>
                                        <th scope="col">CHANGE%</th>
                                        <th scope="col">NET CHANGE</th>
                                        <th scope="col">HIGH</th>
                                        <th scope="col">LOW</th>
                                        <th scope="col">OPEN</th>
                                        <th scope="col">CLOSE</th>
                                        <th scope="col">REMOVE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Air Conditioner</td>
                                        <td>
                                            5.000
                                        </td>
                                        <td>Apr 20,2018</td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span><a href="javascript:void()" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">

                    <div class="card-body">
                        <div class="table-responsive table-dark">
                            <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">NSEFUT SYM</th>
                                        <th scope="col">BID RATE</th>
                                        <th scope="col">ASK RATE</th>
                                        <th scope="col">LTP</th>
                                        <th scope="col">CHANGE%</th>
                                        <th scope="col">NET CHANGE</th>
                                        <th scope="col">HIGH</th>
                                        <th scope="col">LOW</th>
                                        <th scope="col">OPEN</th>
                                        <th scope="col">CLOSE</th>
                                        <th scope="col">REMOVE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Air Conditioner</td>
                                        <td>
                                            5.000
                                        </td>
                                        <td>Apr 20,2018</td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span class="badge badge-primary">70%</span></td>
                                        <td><span><a href="javascript:void()" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a></span>
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