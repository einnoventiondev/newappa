<header class="main-nav">
    <div class="sidebar-user text-center"><a class="setting-primary" href="{{ route('edit_password') }}"><i
                data-feather="settings"></i></a>
        <a href="{{ route('user_profile') }}">
            @if (auth()->user()->profile == null)
                <img class="img-90 rounded-circle" src="{{ asset('assets1/images/dashboard/1.png') }}" alt="">
            @else
                <img class="img-90 rounded-circle" alt="" src="{{ asset('storage/' . auth()->user()->profile) }}">
            @endif
            <div class="badge-bottom"><span class="badge badge-primary">جديد</span></div>
        </a>
        <!-- <h6 class="mt-3 f-14 f-w-600">{{ auth()->user()->name }}</h6> -->
        </a>
        <h6 class="mt-3 f-14 f-w-600">{{ auth()->user()->name }}</h6>
        <p class="f-12">جائزة الأميرعبدالله الفيصل</p>
    </div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>التجربة الشعرية</h6>
                        </div>
                    </li>
                    <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i
                                data-feather="home"></i><span>جائزة الشعر المسرحي </span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{ route('institute') }}">ترشیح مؤسسي</a></li>
                            <li><a href="{{ route('individuale') }}">ترشيح فردي</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i
                                data-feather="home"></i><span>جائزة القصيدة المغناة</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{ route('institute2') }}">ترشیح مؤسسي</a></li>
                            <li><a href="{{ route('individuale2') }}">ترشيح فردي</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i
                                data-feather="home"></i><span>جائزة أفضل مبادرة في خدمةالشعر العربي </span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{ route('institute3') }}">ترشیح مؤسسي</a></li>
                            <li><a href="{{ route('individuale3') }}">ترشيح فردي</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i
                                data-feather="home"></i><span>جائزة الديوان </span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{ route('institute5') }}">ترشیح مؤسسي</a></li>
                            <li><a href="{{ route('individuale5') }}">ترشيح فردي</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i
                                data-feather="home"></i><span>الجامعات </span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{ route('institute6') }}">ترشیح مؤسسي</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i
                                data-feather="home"></i><span>الثانوية </span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{ route('institute7') }}">ترشیح مؤسسي</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i
                                data-feather="home"></i><span>جائزة
                                التجربة الشعرية </span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{ route('institute8') }}">ترشیح مؤسسي</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"  ><a class="nav-link menu-title" href="{{route('index_contact')}}"><i
                        data-feather="home"></i><span>اتصال </span></a>

                    </li>

                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
