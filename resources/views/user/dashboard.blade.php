@extends('user.layout.header_footer')
@section('user')

<div class="content-body">
<marquee behavior="" direction="" style="font-size: 16px;">WELCOME TO OUR PANEL. WELCOME TO OUR PANEL. WELCOME TO OUR PANEL.</marquee>
    <div class="container-fluid mt-5">
        <div class="row page-titles mx-0 contanierpadding justify-content-center">
        
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
               
                    <h2>WELCOME TO OUR WATCHLIST</h2>
                    <a href="{{url('userdashboard')}}"><button type="button" class="btn btn-danger mt-10">GO TO HOME</button></a>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection