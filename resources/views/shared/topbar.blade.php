<div class="header-top bg-theme-maroon sm-text-center p-0">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="widget no-border m-0">
                    <ul class="list-inline font-13 sm-text-center mt-5">
                        <li class="list-inline-item">
                            <a href="{{ route('faq') }}" >S.S.S.</a>
                        </li>
                        <li class="list-inline-item">|</li>
                        <li class="list-inline-item">
                            <a href="{{ route('contact') }}">İletişim</a>
                        </li>

                        <li class="list-inline-item">|</li>
                        <li class="list-inline-item">
                            <a href="#">Giriş Yap</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="widget m-0 pull-right sm-pull-none sm-text-center">
                    <ul class="list-inline float-right">
                        <li class="mb-0 pb-0 list-inline-item pl-5 pr-5">
                            <div class="top-dropdown-outer pt-5 pb-10">
                                <a class="top-search-box has-dropdown">
                                    <i class="fa fa-search font-13"></i> &nbsp;</a>
                                <ul class="dropdown">
                                    <li>
                                        <div class="search-form-wrapper">
                                            <form method="get" class="mt-10">
                                                <input type="text" onfocus="if(this.value ==`Aramak İçin Enter'a Basınız`) { this.value = ''; }" onblur="if(this.value == '') { this.value =`Aramak İçin Enter'a Basınız`; }" value="Aramak İçin Enter'a Basınız" id="searchinput" name="s" class="">
                                                <label><input type="submit" name="submit" value=""></label>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>


                <div class="widget no-border m-0 mr-15 pull-right flip sm-pull-none sm-text-center">
                    <ul class="styled-icons icon-circled icon-sm pull-right flip sm-pull-none sm-text-center">
                        <li data-toggle="tooltip" data-placement="bottom" title="Facebook">
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li data-toggle="tooltip" data-placement="bottom" title="Twitter">
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li  data-toggle="tooltip" data-placement="bottom" title="Google Plus">
                            <a href="#">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                        <li  data-toggle="tooltip" data-placement="bottom" title="Instagram">
                            <a href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                        <li data-toggle="tooltip" data-placement="bottom" title="Twitter">
                            <a href="#">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
