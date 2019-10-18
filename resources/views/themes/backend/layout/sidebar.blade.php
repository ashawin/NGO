<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    
    <ul class="side-menu">
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon si si-screen-desktop"></i><span class="side-menu__label">News & Events</span><i class="angle fas fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="/eficor/administrator/projects/add">Add New News & Project</a></li>
                <li><a class="slide-item" href="/eficor/administrator/projects/manage">Manage Projects & News</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon si si-screen-desktop"></i><span class="side-menu__label">CMS Manage</span><i class="angle fas fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="/eficor/administrator/cms/about-histroy">About-Histroy</a></li>
                <li><a class="slide-item" href="/eficor/administrator/cms/about-team">About-Team</a></li>
                <li><a class="slide-item" href="/eficor/administrator/cms/about-strategy">About-Strategy</a></li>
                <li><a class="slide-item" href="{{route('viewquality')}}">About-Quality</a></li>
                <li><a class="slide-item" href="/eficor/administrator/cms/about-financials">About-Financials</a></li>
                <li><a class="slide-item" href="/eficor/administrator/cms/about-awards">About-Awards</a></li>
                <li><a class="slide-item" href="/eficor/administrator/cms/about-where">OurWorks-Where</a></li>
                <li><a class="slide-item" href={{route('getinvest')}}>Invest &Project</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon si si-screen-desktop"></i><span class="side-menu__label">Common Pages</span><i class="angle fas fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="/eficor/administrator/cms/common-pages">Manage Common Page</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#Volunteeers"><i class="side-menu__icon si si-screen-layers"></i><span class="side-menu__label">Volunteers</span><i class="angle fas fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="/eficor/administrator/cms/volunteeers">Manage Volunteers</a></li>
            </ul>
        </li>        
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#Partner&InterShip"><i class="side-menu__icon si si-screen-desktop"></i><span class="side-menu__label">Partner&Inter Ship</span><i class="angle fas fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="/eficor/administrator/cms/partner-inter">Manage Partner&Inter Ship</a></li>
            </ul>
        </li>                
        

        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon si si-rocket"></i><span class="side-menu__label">Slider Manage</span><i class="angle fas fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li>
                    <a href="/eficor/administrator/slider/add-new" class="slide-item">Add New Slider</a>
                </li>
                <li>
                    <a href="/eficor/administrator/slider/manage-slider" class="slide-item">Manage Slider</a>
                </li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon si si-chart"></i><span class="side-menu__label">Donation Manage</span><i class="angle fas fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li>
                    <a href="/eficor/administrator/donation/add" class="slide-item">Add New Donation</a>
                </li>
                <li>
                    <a href="/eficor/administrator/donation" class="slide-item">Manage Donation</a>
                </li>
                <li>
                    <a href="{{route('getdonaters')}}" class="slide-item">Manage Donater</a>
                </li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon si si-chart"></i><span class="side-menu__label">Job Manage</span><i class="angle fas fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li>
                    <a href="{{route('get_job')}}" class="slide-item">Add New Job</a>
                </li>
                <li>
                    <a href="{{route('joblist')}}" class="slide-item">Manage Job</a>
                </li>
                <li>
                    <a href="{{route('view_apply_job')}}" class="slide-item">Job Applied</a>
                </li>

            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon si si-chart"></i><span class="side-menu__label">Qick Link footer</span><i class="angle fas fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li>
                    <a href="{{route('quick_lin_policy')}}" class="slide-item">Add New </a>
                </li>
                <li>
                    <a href="/eficor/administrator/cms/common-pages" class="slide-item">Manage </a>
                </li>

{{--                <li>--}}
{{--                    <a href="{{route('joblist')}}" class="slide-item">Manage Job</a>--}}
{{--                </li>--}}

            </ul>
        </li>
{{--        <li class="slide">--}}
{{--            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon si si-screen-desktop"></i><span class="side-menu__label">Team</span><i class="angle fas fa-angle-right"></i></a>--}}
{{--            <ul class="slide-menu">--}}
{{--                <li><a class="slide-item" href="{{route('add_team')}}">Add New Team</a></li>--}}
{{--                <li><a class="slide-item" href="{{route('get_team')}}">Manage Team</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon si si-calendar"></i><span class="side-menu__label">Site Config</span><i class="angle fas fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li>
                    <a href="/eficor/administrator/site-config" class="slide-item">Configuration</a>
                </li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon si si-calendar"></i><span class="side-menu__label">Work Location</span><i class="angle fas fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li>
                    <a href="{{route('work_location_add')}}" class="slide-item">Add Location</a>
                </li>
                <li>
                    <a href="{{route('work_location')}}" class="slide-item">Manage Location</a>
                </li>
            </ul>
        </li>

        <li>
            <a class="side-menu__item" href="/eficor/administrator/logout"><i class="side-menu__icon si si-power"></i><span class="side-menu__label">Logout</span></a>
        </li>
    </ul>
</aside>
<!--side-menu-->
