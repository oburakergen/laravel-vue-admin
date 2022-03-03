@extends('layout.default')
@section('content')
    <x-header :image="$headerImage" :breadcrumbs="$breadcrumbs" />
    <section class="r-faq-section">
        <div class="container">
            <div class="row v-align-center r-faq-header-wrapper">
                <div class="col-md-8 col-sm-12">
                    <div class="r-faq-header">
                        <span>Merak Ettikleriniz İçin</span>
                        <h2>Sıkça <strong>Sorulan Sorular.</strong></h2>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <a href="{{ route('contact') }}" class="icon-btn"><i class="fa fa-question-circle icon"></i> Sorunuz mu var?</a>
                </div>
            </div>

          <x-faq :faqs="$faqs" />
        </div>
    </section>

@endsection
