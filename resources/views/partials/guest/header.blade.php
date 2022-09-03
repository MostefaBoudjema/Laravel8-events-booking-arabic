<header class="main-header">
    <a href="{{ route('guest.home') }}" class="logo">
        <span class="logo-mini"> @lang('quickadmin.quickadmin_title')</span>
        <span class="logo-lg"> @lang('quickadmin.quickadmin_title')</span>
    </a>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">

            <ul class="nav navbar-nav navbar-right" style="margin-right: 50px;">
                @guest
                <li><a href="{{ url('/login') }}">@lang('quickadmin.qa_login')</a></li>
                @else
                <li><a href="{{ url('/admin/dashboard') }}">@lang('quickadmin.qa_admin')</a></li>
                <li>
                    <a href="#logout" onclick="$('#logout').submit();">
                        <i class="fa fa-arrow-left"></i>
                        <span class="title">@lang('quickadmin.qa_logout')</span>
                    </a>
                </li>
                @endguest
            </ul>
        </div>
    </nav>
</header>
{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">@lang('quickadmin.logout')</button>
{!! Form::close() !!}