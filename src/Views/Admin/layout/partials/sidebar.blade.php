<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar"
            src="{{asset(session('user')['img'])}}" width="50px" alt="User Image">
        <div>
            <p class="app-sidebar__user-name"><b>
                    Xin chào: {{session('user')['name']}}
                </b></p>
            <p class="app-sidebar__user-designation">
                {{session('user')['email']}}
            </p>

        </div>
    </div>
    <hr>
    <ul class="app-menu">
        <li>
            <a class="app-menu__item @yield('active')"
                href="{{url('admin/users')}}"><i class='app-menu__icon bx bx-id-card'>

                </i>
                <span class="app-menu__label">
                    Quản lý khách hàng</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item @yield('active2')"
                href="{{url('admin/products')}}"><i class='app-menu__icon bx bx-purchase-tag-alt'>
                </i>
                <span class="app-menu__label">
                    Quản lý sản phẩm</span>
            </a>
        </li>
        <li><a class="app-menu__item @yield('active3')"
                href="{{url('admin/order')}}"><i class='app-menu__icon bx bx-task'></i><span
                    class="app-menu__label">Quản lý đơn hàng</span></a></li>
        <li><a class="app-menu__item @yield('active4')"
                href="{{url('admin/over')}}"><i class='app-menu__icon bx bx-pie-chart-alt-2'></i><span
                    class="app-menu__label">Báo cáo doanh
                    thu</span></a>
        </li>
        <li><a class="app-menu__item @yield('active5')"
                href="{{url('admin/posts')}}"><i class='app-menu__icon bx bx-pie-chart-alt-2'></i><span
                    class="app-menu__label">Quản lý Tin Tức</span></a>
        </li>
        <li><a class="app-menu__item @yield('active6')"
                href="{{url('admin/setting')}}"><i class='app-menu__icon bx bx-cog'></i><span
                    class="app-menu__label">Setting</span></a></li>
    </ul>
</aside>