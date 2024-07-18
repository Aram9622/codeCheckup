<div class="social-links text-right m-auto ml-sm-auto">
    @foreach($data as $item)
        <a href="javascript:void(0)" class="link"><i class="{{$item->icon_class}}"></i></a>    
    @endforeach
    {{-- <a href="javascript:void(0)" class="link"><i class="ti-facebook"></i></a>
    <a href="javascript:void(0)" class="link"><i class="ti-twitter-alt"></i></a>
    <a href="javascript:void(0)" class="link"><i class="ti-google"></i></a>
    <a href="javascript:void(0)" class="link"><i class="ti-pinterest-alt"></i></a>
    <a href="javascript:void(0)" class="link"><i class="ti-instagram"></i></a>
    <a href="javascript:void(0)" class="link"><i class="ti-rss"></i></a> --}}
</div>