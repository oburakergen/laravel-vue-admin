<div>
    <div class="owl-carousel-2col owl-carousel owl-theme">
        @foreach($sliders[0]["data"] as $slider)
            <div class="item">
                <div class="box-hover-effect effect1 mb-sm-30">
                    <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="{{ asset($slider['image']) }}" alt="..."></a> </div>
                    <div class="caption">
                        <h4 class="text-uppercase letter-space-1 mt-0 ">{{ $slider['title'] }}</h4>
                        <p> {{ Str::limit($slider['description'],150, ' ...') }}</p>
                        @isset($slider['url'])
                            <p><a href="{{ route($slider['url']) }}" class="btn btn-danger btn-flat bg-theme-maximum btn-sm" role="button">Devamını Oku</a></p>
                        @endisset
                    </div>
                </div>
            </div>

        @endforeach
    </div>
</div>
