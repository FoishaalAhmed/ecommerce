

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset(auth()->user()->photo)}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{auth()->user()->name}}</p>
            </div>
        </div>
        <br>
        <!-- search form -->
        {{-- 
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
                </span>
            </div>
        </form>
        --}}
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">{{__('MAIN NAVIGATION')}}</li>

            <li class="@if(request()->is('admin/dashboard')) {{'active'}} @endif">

                <a href="{{URL::to( '/home')}}">
                <i class="fa fa-dashboard"></i> <span>{{__('Dashboard')}}</span>
                </a>

            </li>

            <li class="treeview @if(request()->is('admin/users') || request()->is('admin/users/create') || request()->is('admin/users/*') ) {{'active'}} @endif">
                <a href="#">
                <i class="fa fa-user"></i>
                <span>{{__('Users')}}</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">

                    <li class="@if(request()->is('admin/users/create')) {{'active'}} @endif">
                        <a href="{{route('users.create')}}"><i class="fa fa-plus"></i> {{__('New User')}}</a>
                    </li>

                    <li class="@if(request()->is('admin/users')) {{'active'}} @endif">
                        <a href="{{route('users.index')}}"><i class="fa fa-list"></i> {{__('Users')}}</a>
                    </li>

                </ul>
            </li>

            <li class="@if(request()->is('admin/sizes')) {{'active'}} @endif">

                <a href="{{route('sizes.index')}}">
                <i class="fa fa-asterisk"></i> <span>{{__('Sizes')}}</span>
                </a>

            </li>

            <li class="@if(request()->is('admin/colors')) {{'active'}} @endif">

                <a href="{{route('colors.index')}}">
                <i class="fa fa-pencil"></i> <span>{{__('Colors')}}</span>
                </a>

            </li>

            {{-- <li class="treeview @if(request()->is('admin/sliders') || request()->is('admin/sliders/create') || request()->is('admin/sliders/*') ) {{'active'}} @endif">
                <a href="#">
                <i class="fa fa-image"></i>
                <span>{{__('Sliders')}}</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">

                    <li class="@if(request()->is('admin/sliders/create')) {{'active'}} @endif">
                        <a href="{{route('sliders.create')}}"><i class="fa fa-plus"></i> {{__('New Slider')}}</a>
                    </li>

                    <li class="@if(request()->is('admin/sliders')) {{'active'}} @endif">
                        <a href="{{route('sliders.index')}}"><i class="fa fa-list"></i> {{__('Sliders')}}</a>
                    </li>

                </ul>
            </li>

            <li class="treeview @if(request()->is('admin/pages') || request()->is('admin/pages/create') || request()->is('admin/pages/*') ) {{'active'}} @endif">
                <a href="#">
                <i class="fa fa-file"></i>
                <span>{{__('Pages')}}</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">

                    <li class="@if(request()->is('admin/pages/create')) {{'active'}} @endif">
                        <a href="{{route('pages.create')}}"><i class="fa fa-plus"></i> {{__('New Page')}}</a>
                    </li>

                    <li class="@if(request()->is('admin/pages')) {{'active'}} @endif">
                        <a href="{{route('pages.index')}}"><i class="fa fa-list"></i> {{__('Pages')}}</a>
                    </li>

                </ul>
            </li>
            <li class="treeview @if(request()->is('admin/categories') || request()->is('admin/categories/create') || request()->is('admin/categories/*') ) {{'active'}} @endif">
                <a href="#">
                <i class="fa fa-list-alt"></i>
                <span>{{__('Categories')}}</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">

                    <li class="@if(request()->is('admin/categories/create')) {{'active'}} @endif">
                        <a href="{{route('categories.create')}}"><i class="fa fa-plus"></i> {{__('New Category')}}</a>
                    </li>

                    <li class="@if(request()->is('admin/categories')) {{'active'}} @endif">
                        <a href="{{route('categories.index')}}"><i class="fa fa-list"></i> {{__('Categories')}}</a>
                    </li>

                </ul>
            </li>

            <li class="@if(request()->is('admin/queries')) {{'active'}} @endif">

                <a href="{{route('queries.index')}}">
                <i class="fa fa-info-circle"></i> <span>{{__('Queries')}}</span>
                </a>

            </li>

            <li class="treeview @if(request()->is('admin/clients') || request()->is('admin/clients/create') || request()->is('admin/clients/*') ) {{'active'}} @endif">
                <a href="#">
                <i class="fa fa-user-secret"></i>
                <span>{{__('Clients')}}</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">

                    <li class="@if(request()->is('admin/clients/create')) {{'active'}} @endif">
                        <a href="{{route('clients.create')}}"><i class="fa fa-plus"></i> {{__('New Client')}}</a>
                    </li>

                    <li class="@if(request()->is('admin/clients')) {{'active'}} @endif">
                        <a href="{{route('clients.index')}}"><i class="fa fa-list"></i> {{__('Clients')}}</a>
                    </li>

                </ul>
            </li>

            <li class="treeview @if(request()->is('admin/services') || request()->is('admin/services/create') || request()->is('admin/services/*') ) {{'active'}} @endif">
                <a href="#">
                <i class="fa fa-cogs"></i>
                <span>{{__('Services')}}</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">

                    <li class="@if(request()->is('admin/services/create')) {{'active'}} @endif">
                        <a href="{{route('services.create')}}"><i class="fa fa-plus"></i> {{__('New Service')}}</a>
                    </li>

                    <li class="@if(request()->is('admin/services')) {{'active'}} @endif">
                        <a href="{{route('services.index')}}"><i class="fa fa-list"></i> {{__('Services')}}</a>
                    </li>

                </ul>
            </li>

            <li class="treeview @if(request()->is('admin/projects') || request()->is('admin/projects/create') || request()->is('admin/projects/*') ) {{'active'}} @endif">
                <a href="#">
                <i class="fa fa-tasks"></i>
                <span>{{__('Projects')}}</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">

                    <li class="@if(request()->is('admin/projects/create')) {{'active'}} @endif">
                        <a href="{{route('projects.create')}}"><i class="fa fa-plus"></i> {{__('New Project')}}</a>
                    </li>

                    <li class="@if(request()->is('admin/projects')) {{'active'}} @endif">
                        <a href="{{route('projects.index')}}"><i class="fa fa-list"></i> {{__('Projects')}}</a>
                    </li>

                </ul>
            </li>

            <li class="treeview @if(request()->is('admin/blogs') || request()->is('admin/blogs/create') || request()->is('admin/blogs/*') ) {{'active'}} @endif">
                <a href="#">
                <i class="fa fa-newspaper-o"></i>
                <span>{{__('Blogs')}}</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">

                    <li class="@if(request()->is('admin/blogs/create')) {{'active'}} @endif">
                        <a href="{{route('blogs.create')}}"><i class="fa fa-plus"></i> {{__('New Blog')}}</a>
                    </li>

                    <li class="@if(request()->is('admin/blogs')) {{'active'}} @endif">
                        <a href="{{route('blogs.index')}}"><i class="fa fa-list"></i> {{__('Blogs')}}</a>
                    </li>

                </ul>
            </li>

            <li class="treeview @if(request()->is('admin/teams') || request()->is('admin/teams/create') || request()->is('admin/teams/*') ) {{'active'}} @endif">
                <a href="#">
                <i class="fa fa-group"></i>
                <span>{{__('Teams')}}</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">

                    <li class="@if(request()->is('admin/teams/create')) {{'active'}} @endif">
                        <a href="{{route('teams.create')}}"><i class="fa fa-plus"></i> {{__('New Team')}}</a>
                    </li>

                    <li class="@if(request()->is('admin/teams')) {{'active'}} @endif">
                        <a href="{{route('teams.index')}}"><i class="fa fa-list"></i> {{__('Teams')}}</a>
                    </li>

                </ul>
            </li>

            <li class="treeview @if(request()->is('admin/testimonials') || request()->is('admin/testimonials/create') || request()->is('admin/testimonials/*') ) {{'active'}} @endif">
                <a href="#">
                <i class="fa fa-star"></i>
                <span>{{__('Testimonials')}}</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">

                    <li class="@if(request()->is('admin/testimonials/create')) {{'active'}} @endif">
                        <a href="{{route('testimonials.create')}}"><i class="fa fa-plus"></i> {{__('New Testimonial')}}</a>
                    </li>

                    <li class="@if(request()->is('admin/testimonials')) {{'active'}} @endif">
                        <a href="{{route('testimonials.index')}}"><i class="fa fa-list"></i> {{__('Testimonials')}}</a>
                    </li>

                </ul>
            </li>

            <li class="@if(request()->is('admin/generals')) {{'active'}} @endif">

                <a href="{{route('generals.index')}}">
                <i class="fa fa-info-circle"></i> <span>{{__('Generals')}}</span>
                </a>

            </li>

            <li class="@if(request()->is('admin/contacts')) {{'active'}} @endif">

                <a href="{{route('contact')}}">
                <i class="fa fa-envelope"></i> <span>{{__('Contact')}}</span>
                </a>

            </li> --}}
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

