<div class="header">
    <div class="container">
        <div class="logo">
            <a href="{{'/'}}"><span>Book</span>Store</a>
        </div>
        <div class="header-right">
                <!-- Authentication Links -->
                @guest
            <a class="account" href="{{'/login'}}">My Account</a>
                @else
                    <li class="dropdown" style="list-style: none">
                                <a href="#" class="account" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endguest
            {{--<a class="account" href="{{'/login'}}">My Account</a>--}}
            <!-- Large modal -->
        </div>
    </div>
</div>