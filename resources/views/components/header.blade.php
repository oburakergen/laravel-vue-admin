<section class="inner-header divider parallax layer-overlay overlay-dark" data-parallax="scroll" data-bg-img="{{ asset($image) }}">
    <div class="container pt-70 pb-70">
        <!-- Section Content -->
        <div class="section-content">
            <div class="row">
                <div class="col-sm-8 xs-text-center">
                    <h2 class="text-white mt-10">{{ end($breadcrumbs)['name'] }}</h2>
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb white mt-10 text-right xs-text-center">
                        @foreach ($breadcrumbs as $breadcrumb)
                            <li {{ end($breadcrumbs)['url'] == $breadcrumb['url'] ? 'class="active"' : '' }}><a href="{{ route($breadcrumb['url']) }}">{{ $breadcrumb['name'] }}</a></li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
