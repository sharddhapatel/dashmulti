@extends('super-master.layout.header-footer')
@section('super-master')

<div class="main-panel  mt-4">
                <div class="content-wrapper pb-0" style="background-image: url(super-master/assets/images/wallpaper.jpg); background-repeat: no-repeat; background-position: center;background-size: cover;">

                    <div class="row mb-4">
                        <div class="col-lg-6  col-sm-6 grid-margin">
                            <div class="card">
                                <div class="card-body">

                                    <form class="form-sample">
                                        <p class="card-description"> CASH ENTRY </p>
                                        <div class="row">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">USER TYPE</label>
                                                <div class="col-sm-9">
                                                    <select class="form-select" aria-label="Default select example">
                                            <option selected>Select...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                          </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">SELECT</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">DATE</label>
                                                <div class="col-sm-9">
                                                    <div id="datepicker-popup" class="input-group date datepicker">
                                                        <input type="text" class="form-control">
                                                        <span class="input-group-addon input-group-append border-left">
                                          <span class="mdi mdi-calendar input-group-text"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">TYPE</label>
                                                <div class="col-sm-4">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                      <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked> RECEIPT </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                      <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2"> PAYMENT </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">AMOUNT</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">REMARKS</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <button type="submit" class="btn btn-primary mb-2">SUBMIT</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- content-wrapper ends -->

            </div>

@endsection