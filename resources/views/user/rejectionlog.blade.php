@extends('user.layout.header_footer')
@section('user')

<div class="content-body">
    <div class="container-fluid">
        <div class="form-row">
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
                <label>FROM DATE</label>
                <input name="datepicker" class="datepicker-default form-control" id="datepicker">
            </div>
            <div class="form-group col-lg-2 col-md-3 col-sm-6">
                <label>TO DATE</label>
                <input name="datepicker" class="datepicker-default form-control" id="datepicker">
            </div>
        </div>

        <div class="form-row mb-4">
            <div class="col-lg-2 col-md-3 col-sm-6 themed-grid-col">
                <a href="#"><button type="button" class="btn btn-dark  buttonsmall">FIND LOGS</button></a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-sm-12 col-md-8">
                                <div class="dataTables_length d-flex" id="example_length"><label class="d-flex"> Show
                                        <select name="example_length" aria-controls="example" class="custom-select custom-select-sm form-control form-control-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries</label></div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <form class="d-flex ">
                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn btn-primary" type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th> ACTION </th>
                                        <th>DATE</th>
                                        <th> CLIENT </th>
                                        <th> SCRIPT </th>
                                        <th> TYPE </th>
                                        <th> LOT </th>
                                        <th> QTY </th>
                                        <th> RATE </th>
                                        <th>REJECTION REASON </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="py-1">
                                            15,march
                                        </td>
                                        <td> Herman Beck </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td> $ 77.99 </td>
                                        <td> 1 </td>
                                        <td> none </td>
                                        <td> 0 </td>
                                        <td> 5 </td>
                                        <td> 10k </td>
                                    </tr>
                                    <tr>
                                        <td class="py-1">
                                            28,march
                                        </td>
                                        <td> Herman Beck </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td> $ 77.99 </td>
                                        <!-- <td> May 15, 2015 </td> -->
                                        <td> 1 </td>
                                        <td> none </td>
                                        <td> 0 </td>
                                        <td> 5 </td>
                                        <td> 10k </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="row mb-2 mt-4">
                            <div class="col-lg-12 ">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection