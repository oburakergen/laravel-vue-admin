@extends('layout.default')
@section('content')

    <x-header :image="$headerImage" :breadcrumbs="$breadcrumbs" />

    <section id="about">
        <div class="container mt-40 pt-0">
            <div class="section-content">
                <div class="row mt-10">
                    <div class="col-sm-12 col-md-6 mb-sm-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h3 class="text-uppercase mt-0 ">Biz <span class="color-theme-maximum">  Kimiz </span></h3>

                        <p class="lead">Oto tamir ve bakım sektöründe yılların verdiği tecrübeyle sektörün en çok tanınan firmalarından birisi olmaktan gurur duyuyoruz. Bize olan güveniniz sayesinde her geçen gün sizlere daha iyi hizmet vermek için kendimizi geliştiriyoruz.</p>
                        <p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sunt ut dolorem laboriosam culpa excepturi sed distinctio eius! Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.</p>
                        <p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sunt ut dolorem laboriosam culpa excepturi sed distinctio eius! Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.</p>
                        <p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sunt ut dolorem laboriosam culpa excepturi sed distinctio eius! Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.</p>
                        <p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sunt ut dolorem laboriosam culpa excepturi sed distinctio eius! Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.</p>
                        <p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sunt ut dolorem laboriosam culpa excepturi sed distinctio eius! Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.</p>
                    </div>
                    <div class="col-sm-12 col-md-6 mt-10 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                       <x-owlslider :sliders="$sliders" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-pricing-table />
    <x-parallax-happy-client />
@endsection
