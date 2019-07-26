{{!$banner = App\Banner::whereNotNull('description')->orderBy('created_at','desc')->first() }}
<div class="top-banners">
    <div class="banner"> <a href="{{$banner->link != '' ? url($banner->link) : url('/')}}">{{ $banner->description }}</a> </div>
</div>