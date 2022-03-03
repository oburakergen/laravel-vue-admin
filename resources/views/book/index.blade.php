@extends('layout.default')
@section('content')
    <x-header :image="$headerImage" :breadcrumbs="$breadcrumbs" />


    <section>
        <div class="container pt-50 pb-50">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Reservation Form Start-->
                        <form id="reservation_form" name="reservation_form" class="reservation-form" method="post" action="#">
                            <div class="row">
                                <div class="reservation-first-step">
                                    <h3 class="text-theme-colored line-bottom ml-15 mb-30 mr-15">Vehicle <span class="text-theme-color-2">Information</span></h3>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-30">
                                            <label>Car Name</label>
                                            <div class="styled-select">
                                                <select id="car_name_select" name="car_name_select" class="form-control ddslick" required="">
                                                    <option data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit.." data-imagesrc="{{ asset('images/car/audi.png') }}" value="Audi">Audi</option>
                                                    <option data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit.." data-imagesrc="{{ asset('images/car/citrion.png') }}" value="Citroen">Citroen</option>
                                                    <option data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit.." data-imagesrc="{{ asset('images/car/wolswagen.png') }}" value="Volkswagen">Volkswagen</option>
                                                    <option data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit.." data-imagesrc="{{ asset('images/car/mazda.png') }}" value="Mazda">Mazda</option>
                                                    <option data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit.." data-imagesrc="{{ asset('images/car/bmw.png') }}" value="BMW">BMW</option>
                                                    <option data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit.." data-imagesrc="{{ asset('images/car/lambo.png') }}" value="Lamborghini">Lamborghini</option>
                                                    <option data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit.." data-imagesrc="{{ asset('images/car/merso.png') }}" value="Mercedes Benz">Mercedes Benz</option>
                                                    <option data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit.." data-imagesrc="{{ asset('images/car/nissan.png') }}" value="Nissan">Nissan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-30">
                                            <label>Car Type</label>
                                            <div class="styled-select">
                                                <select id="car_type_select" name="car_type_select" class="form-control ddslick" required="">
                                                    <option data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit.." data-imagesrc="{{ asset('images/car/audi.png') }}" value="Truck">Truck</option>
                                                    <option data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit.." data-imagesrc="images/car-logos/c1.png" value="Luxury Car">Luxury Car</option>
                                                    <option data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit.." data-imagesrc="images/car-logos/c2.png" value="Suv">Suv</option>
                                                    <option data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit.." data-imagesrc="images/car-logos/c4.png" value="Van">Van</option>
                                                    <option data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit.." data-imagesrc="images/car-logos/c5.png" value="Sports">Sports</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-30">
                                            <!-- Ui-Slider-Handle Markup -->
                                            <label for="amount">Car Year:</label>
                                            <input type="text" id="amount" data-target="slider-range-max" class="no-border slider-range" name="car_year_select" required="">
                                            <div id="slider-range-max"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-30">
                                            <label>Car Model</label>
                                            <input placeholder="Type Model Here" type="text" id="car_model" name="car_model" class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-30">
                                            <label>Type Of Service</label>
                                            <div class="styled-select">
                                                <select id="car_service_select" name="car_service_select" class="form-control" required="">
                                                    <option value="">- Select Your Service Type -</option>
                                                    <option value="Engine Diagnostics">Engine Diagnostics</option>
                                                    <option value="Air Conditioning">Air Conditioning</option>
                                                    <option value="Wheel Alignment">Wheel Alignment</option>
                                                    <option value="Transmission Repair">Transmission Repair</option>
                                                    <option value="Brakes Repair">Brakes Repair</option>
                                                    <option value="Oil, Lube & Filters">Oil, Lube & Filters</option>
                                                    <option value="Engine Steam Clean">Engine Steam Clean</option>
                                                    <option value="Paint Protection">Paint Protection</option>
                                                    <option value="Dashboard Clean">Dashboard Clean</option>
                                                    <option value="Triple Coat Hand Wax">Triple Coat Hand Wax</option>
                                                    <option value="Trunk Vacuum">Trunk Vacuum</option>
                                                    <option value="Door Shuts & Plastics">Door Shuts & Plastics</option>
                                                    <option value="Triple Coat Hand Wax">Triple Coat Hand Wax</option>
                                                    <option value="More Than One">More Than One</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-20">
                                            <label class="mb-20">Number of Wheels</label><br>
                                            <label class="control control--radio">1
                                                <input value="1" type="radio" name="number_of_wheels"/>
                                                <div class="control__indicator"></div>
                                            </label>
                                            <label class="control control--radio">2
                                                <input value="2" type="radio" name="number_of_wheels"/>
                                                <div class="control__indicator"></div>
                                            </label>
                                            <label class="control control--radio">3
                                                <input value="3" type="radio" name="number_of_wheels"/>
                                                <div class="control__indicator"></div>
                                            </label>
                                            <label class="control control--radio">4
                                                <input value="4" type="radio" name="number_of_wheels" checked="checked"/>
                                                <div class="control__indicator"></div>
                                            </label>
                                            <label class="control control--radio">6
                                                <input value="6" type="radio" name="number_of_wheels"/>
                                                <div class="control__indicator"></div>
                                            </label>
                                            <label class="control control--radio">8
                                                <input value="8" type="radio" name="number_of_wheels"/>
                                                <div class="control__indicator"></div>
                                            </label>
                                            <label class="control control--radio">10
                                                <input value="10" type="radio" name="number_of_wheels"/>
                                                <div class="control__indicator"></div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-20">
                                            <label>Extra Services</label><br>
                                            <label class="control control--checkbox">Air Freshener
                                                <input value="Air Freshener" type="checkbox" checked="checked" name="extra_services[]"/>
                                                <div class="control__indicator"></div>
                                            </label>
                                            <label class="control control--checkbox">Exterior Vinyl Protectant
                                                <input value="Exterior Vinyl Protectant" type="checkbox" checked="checked" name="extra_services[]"/>
                                                <div class="control__indicator"></div>
                                            </label>
                                            <label class="control control--checkbox">Dashboard Clean
                                                <input value="Dashboard Clean" type="checkbox" name="extra_services[]"/>
                                                <div class="control__indicator"></div>
                                            </label>
                                            <label class="control control--checkbox">Triple Coat Hand Wax
                                                <input value="Triple Coat Hand Wax" type="checkbox" checked="checked" name="extra_services[]"/>
                                                <div class="control__indicator"></div>
                                            </label>
                                            <label class="control control--checkbox">Transmission Repair
                                                <input value="Transmission Repair" type="checkbox" name="extra_services[]"/>
                                                <div class="control__indicator"></div>
                                            </label>
                                            <label class="control control--checkbox">Steering & Suspension
                                                <input value="Steering & Suspension" type="checkbox" name="extra_services[]"/>
                                                <div class="control__indicator"></div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-30">
                                            <label>Preffered Date & Time Of Booking</label>
                                            <input name="reservation_date" class="form-control required datetime-picker" type="text" placeholder="Type Reservation Date" aria-required="true">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="reservation-second-step">
                                    <h3 class="text-theme-colored line-bottom mt-0 mr-15 mb-30 ml-15">Personal <span class="text-theme-color-2">Information</span></h3>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-30">
                                            <input placeholder="Enter Name" type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-30">
                                            <input placeholder="Email" type="text" id="reservation_email" name="reservation_email" class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-30">
                                            <input placeholder="Your Phone" type="text" id="reservation_phone" name="reservation_phone" class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-30">
                                            <input placeholder="Your Address" type="text" id="reservation_address" name="reservation_address" class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea placeholder="Enter Message" rows="5" class="form-control required" name="form_message" aria-required="true"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group text-center mb-0 mt-20">
                                            <input name="form_botcheck" class="form-control" type="hidden" value="">
                                            <button type="submit" class="btn btn-colored btn-theme-colored btn-lg btn-flat border-left-theme-color-2-4px" data-loading-text="Please wait...">Submit Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div >
    </section>
@endsection
