<div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>
        <ul class="dropdown-menu">
            <li class="header-title"> {{ __('Sidebar Style') }}</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>{{ __('Background Image') }}</p>
                    <label class="switch">
                        <input type="checkbox" data-toggle="switch" checked="" data-on-color="primary" data-off-color="primary">
                        <span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <p>Filters</p>
                    <div class="pull-right">
                        <span class="badge filter badge-black" data-color="black"></span>
                        <span class="badge filter badge-azure" data-color="azure"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-purple active" data-color="purple"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">{{ __('Sidebar Images') }}</li>
            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ asset('admin/img/sidebar-1.jpg') }}" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ asset('admin/img/sidebar-3.jpg') }}" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ asset('admin/img/sidebar-4.jpg') }}" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ asset('admin/img/sidebar-5.jpg') }}" alt="" />
                </a>
            </li>
            <li class="button-container">
                <button id="twitter" class="btn btn-social btn-outline btn-twitter btn-round sharrre twitter-sharrre"><i class="fa fa-twitter"></i>{{ __('· 256') }}</button>
                <button id="facebook" class="btn btn-social btn-outline btn-facebook btn-round sharrre facebook-sharrre"><i class="fa fa-facebook-square"></i>{{ __('· 426') }}</button>
                {{--<button id="youtube" class="btn btn-social btn-outline btn-youtube btn-round sharre youtube-sharre"><i class="fa fa-youtube"></i></button>--}}
            </li>
        </ul>
    </div>
</div>