@extends('dashbord1.layout.header-footer')
@section('content')


<div class="content-body">

    <div class="container-fluid mt-3">
        <h2 class="h2border">ADD ACCOUNT</h2>

        <div class="row mb-4 mt-4">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <p>USER TYPE</p>
                <div class="basic-form">
                    <form>
                        <div class="form-row align-items-center">
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                <option selected="selected">SELECT...</option>
                                <option value="master">Master</option>
                                <option value="broker">Broker</option>
                                <option value="user">User</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <p>NAME</p>
                <div class="form-group">
                    <input type="text" class="form-control input-default" placeholder="">
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <p>PASSWORD</p>
                <div class="form-group">
                    <input type="password" class="form-control input-default" placeholder="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="basic-form">
                            <form>
                                <div class="form-group">
                                    <label>REMARKS</label>
                                    <textarea class="form-control h-150px" rows="4" id="comment" placeholder="Reamarks"></textarea>
                                </div>
                            </form>
                        </div>
                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                        <button type="submit" class="btn btn-light">CENCEL</button>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- #/ container -->
</div>

@endsection
