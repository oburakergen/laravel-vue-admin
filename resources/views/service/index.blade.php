@extends('layout.default')
@section('content')

    <x-header :image="$headerImage" :breadcrumbs="$breadcrumbs" />


    <section>
        <div class="container mt-30 mb-30 pt-30 pb-30">
            <div class="row">
                <div class="col-md-8 blog-pull-right">
                    <div class="single-service">
                        <img src="images/services/lg3.jpg" alt="">
                        <h3 class="text-theme-colored">Engine Diognostic</h3>
                        <h5><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo unde, <span class="text-theme-color-2">engine diognostic</span> corporis dolorum blanditiis ullam officia <span class="text-theme-color-2">car repairing </span>natus minima fugiat repellat! Corrupti voluptatibus aperiam voluptatem. Exercitationem, placeat, cupiditate.</em></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore suscipit, inventore aliquid incidunt, quasi error! Natus esse rem eaque asperiores eligendi dicta quidem iure, excepturi doloremque eius neque autem sint error qui tenetur, modi provident aut, maiores laudantium reiciendis expedita. Eligendi</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore voluptatem officiis quod animi possimus a, iure nam sunt quas aperiam non recusandae reprehenderit, nesciunt cumque pariatur totam repellendus delectus? Maxime quasi earum nobis, dicta, aliquam facere reiciendis, delectus voluptas, ea assumenda blanditiis placeat dignissimos quas iusto repellat cumque.</p>
                        <h4 class="line-bottom mt-20 mb-20">Price Idea</h4>
                        <ul id="myTab" class="nav nav-tabs boot-tabs">
                            <li class="active"><a href="#small" data-toggle="tab">Small Car</a></li>
                            <li><a href="#medium" data-toggle="tab">Medium Car</a></li>
                            <li><a href="#large" data-toggle="tab">Large Car</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade in active" id="small">
                                <h5><span class="text-theme-color-2">Price :</span> $350</h5>
                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh</p>
                            </div>
                            <div class="tab-pane fade" id="medium">
                                <h5><span class="text-theme-color-2">Price :</span> $420</h5>
                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh</p>
                            </div>
                            <div class="tab-pane fade" id="large">
                                <h5><span class="text-theme-color-2">Price :</span> $570</h5>
                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="sidebar sidebar-left mt-sm-30 ml-40">
                        <div class="widget">
                            <h4 class="widget-title line-bottom">Services List</h4>
                            <div class="services-list">
                                <ul class="list list-border angle-double-right">
                                    <li class="active"><a href="{{ route('service') }}">Oto Tamir/Bakım Servisi</a></li>
                                    <li><a href="{{ route('service') }}">Periyodik Bakım Servisi</a></li>
                                    <li><a href="{{ route('service') }}">Oto Kaporta Servisi</a></li>
                                    <li><a href="{{ route('service') }}">Oto Boyama Servisi</a></li>
                                    <li><a href="{{ route('service') }}">Boya Koruma</a></li>
                                    <li><a href="{{ route('service') }}">Oto Elektrik Servisi</a></li>
                                    <li><a href="{{ route('service') }}">7/24 Yol Servisi</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
