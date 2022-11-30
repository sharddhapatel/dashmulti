@extends('dashbord1.layout.header-footer')
@section('content')




        <div class="content-body">
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="#" method="post">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">USER TYPE<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <select class="form-control" id="val-skill" name="val-skill">
                                                    <option value="">Please select...</option>
                                                    <option value="html">HTML</option>
                                                    <option value="css">CSS</option>
                                                    <option value="javascript">JavaScript</option>
                                                    <option value="angular">Angular</option>
                                                    <option value="angular">React</option>
                                                    <option value="vuejs">Vue.js</option>
                                                    <option value="ruby">Ruby</option>
                                                    <option value="php">PHP</option>
                                                    <option value="asp">ASP.NET</option>
                                                    <option value="python">Python</option>
                                                    <option value="mysql">MySQL</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">SELECT <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="val-username" name="val-username" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">DATE <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8 input-group">
                                                <input type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy"> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">TYPE <span class="text-danger">*</span>
                                            </label>
                                            <div class="">

                                            </div>
                                            <div class="col-lg-8 form-group">
                                                <label class="radio-inline mr-3 mt-2">
                                                    <input type="radio" name="optradio" class="mr-2">RECEIPT</label>
                                                <label class="radio-inline mr-3">
                                                    <input type="radio" name="optradio" class="mr-2">PAYMENT</label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">AMOUNT <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="val-username" name="val-username" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-suggestions">REMARKS <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <textarea class="form-control" id="val-suggestions" name="val-suggestions" rows="5" placeholder=""></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <div class="col-lg-4">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>


    </div>


</body>


<!-- Mirrored from demo.themefisher.com/quixlab/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Mar 2022 05:45:24 GMT -->

</html>

@endsection
