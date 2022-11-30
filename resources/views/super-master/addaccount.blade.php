@extends('super-master.layout.header-footer')
@section('super-master')
    <div class="main-panel">
        <div class="content-wrapper pb-0"
            style="background-image: url(super-master/assets/images/wallpaper.jpg); background-repeat: no-repeat; background-position: center;background-size: cover;">
            <div class="page-header1">
                <h3 class="page-title">ADD ACCOUNT</h3>

            </div>
            @if (Session::has('message'))
                <div class="alert alert-success">
                    <i class="fa-lg fa fa-warning"></i>
                    {!! session('message') !!}
                </div>
            @elseif(Session::has('error'))
                <div class="alert alert-danger">
                    <i class="fa-lg fa fa-warning"></i>
                    {!! session('error') !!}
                </div>
            @endif
            <form class="forms-sample" action="{{ url('createAccount') }}" method="post">
                {{ csrf_field() }}
                <div class="row mb-4">

                    <h4>BASIC DETAILS</h4>
                    <div class="col-lg-4 col-md-3 col-sm-6 themed-grid-col">
                        <p class="card-description mt-2">USER TYPE </p>
                        <select class="form-select" aria-label="Default select example" name="usertype" id="usertype">
                            <option selected>Select Type</option>
                            <option value="master">Master</option>
                            <option value="user">User</option>

                        </select>
                    </div>
                    <div class="col-lg-4 col-md-3 col-sm-6 themed-grid-col">
                        <div class="form-group">
                            <p class="card-description mt-2">NAME</p>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-3 col-sm-6 themed-grid-col">
                        <div class="form-group">
                            <p class="card-description mt-2">PASSWORD</p>
                            <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password"
                                name="password">
                        </div>
                    </div>

                </div>


                <div class="col-12 grid-margin stretch-card" id="user" style="display: none">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">ADDITIONAL DETAILS</h4>

                            <div class="form-group" id="accounttype">
                                <p class="card-description mt-2">ACCOUNT TYPES </p>

                                <input type="checkbox" name="accounttype[]" id="accounttype" value="EXTRA SMALL" >EXTRA SMALL <br>
                                <input type="checkbox" name="accounttype[]" id="accounttype" value="SMALL" >SMALL <br>
                                <input type="checkbox" name="accounttype[]" id="accounttype" value="MEDIUM" >MEDIUM<br>
                                <input type="checkbox" name="accounttype[]" id="accounttype" value="LARGE">LARGE <br>
                                <input type="checkbox" name="accounttype[]" id="accounttype" value="5 LOT">5 LOT<br>
                                <input type="checkbox" name="accounttype[]" id="accounttype" value="2 LOT">2 LOT<br>
                                <input type="checkbox" name="accounttype[]" id="accounttype" value="1 LOT">1 LOT<br>
                                <input type="checkbox" name="accounttype[]" id="accounttype" value="3 LOT">3 LOT<br>
                                <input type="checkbox" name="accounttype[]" id="accounttype" value="4 LOT">4 LOT
                            </div>

                            <div class="form-group" id="markettype">
                                <p class="card-description mt-2">MARKET TYPES </p>
                                <input type="checkbox" name="markettype[]" id="mrttype" value="NSEOPT">NSEOPT<br>
                                <input type="checkbox" name="markettype[]" id="mrtype" value="NSEFUT">NSEFUT<br>
                                <input type="checkbox" name="markettype[]" id="mrtype" value="MCXFUT">MCXFUT
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12 grid-margin stretch-card" id="master" style="display: none">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">ADDITIONAL DETAILS</h4>

                            <div class="form-group" id="freshlimit">
                                <p class="card-description mt-2">FRESH LIMIT ALLOWED</p>
                                <input type="radio" name="limit" id="limit" value="YES">YES
                                <input type="radio" name="limit" id="limit" value="NO">NO
                            </div>


                            <div class="form-group" id="accounttype1">
                                <p class="card-description mt-2">ACCOUNT TYPES </p>
                                <input type="checkbox" name="accounttype[]" id="accounttype" value="EXTRA SMALL" >EXTRA SMALL <br>
                                <input type="checkbox" name="accounttype[]" id="accounttype" value="SMALL" >SMALL <br>
                                <input type="checkbox" name="accounttype[]" id="accounttype" value="MEDIUM" >MEDIUM<br>
                                <input type="checkbox" name="accounttype[]" id="accounttype" value="LARGE">LARGE <br>
                                <input type="checkbox" name="accounttype[]" id="accounttype" value="5 LOT">5 LOT<br>
                                <input type="checkbox" name="accounttype[]" id="accounttype" value="2 LOT">2 LOT<br>
                                <input type="checkbox" name="accounttype[]" id="accounttype" value="1 LOT">1 LOT<br>
                                <input type="checkbox" name="accounttype[]" id="accounttype" value="3 LOT">3 LOT<br>
                                <input type="checkbox" name="accounttype[]" id="accounttype" value="4 LOT">4 LOT

                            </div>

                            <div class="form-group" id="markettype">
                                <p class="card-description mt-2">MARKET TYPES </p>
                                <input type="checkbox" name="markettype[]" id="mrttype" value="NSEOPT">NSEOPT<br>
                                <input type="checkbox" name="markettype[]" id="mrtype" value="NSEFUT">NSEFUT<br>
                                <input type="checkbox" name="markettype[]" id="mrtype" value="MCXFUT">MCXFUT
                            </div>
                        </div>
                    </div>
                </div>

    
            <div class="col-12 grid-margin stretch-card">
                <div class="card"> 
                    <div class="card-body">
                        <h4 class="card-title">REMARKS</h4>
                            <div class="form-group">
                                <textarea class="form-control" id="exampleTextarea1" rows="4" placeholder="Remarks"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                    </div>
                </div>
            </div>
        </form>

        </div>
        <!-- content-wrapper ends -->

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $('#usertype').change(function() {
            var data = $(this).val();
            // alert(data);
            if (data == 'master') {
                $("#user").hide();
                $('#master').show();
            } else if (data == "user") {
                $("#user").show();
                $('#master').hide();
            }
        });
    </script>
@endsection
