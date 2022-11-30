@extends('master.layout.header_footer')
@section('master')

<div class="main-panel mt-4 mainpanelmt">
<marquee behavior="" direction="" style="font-size: 16px;">WELCOME TO OUR PANEL. WELCOME TO OUR PANEL. WELCOME TO OUR PANEL.</marquee>
    <div class="content-wrapper pb-0" style="text-align: center; padding-top: 15rem;
          background-image: url(master/assets/images/wallpaper.jpg); background-repeat: no-repeat; background-position: center;background-size: cover;">
        <h2>WELCOME TO OUR WATCHLIST</h2>
        <a href="{{url('maindashboard')}}"><button type="button" class="btn btn-danger">GO TO HOME</button></a>
    </div>
</div>
</div>
</div>
@endsection