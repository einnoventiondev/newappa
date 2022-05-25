<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid nav-container">

        <a class="navbar-brand" href="{{route('/')}}">
            <img src="{{asset('/assets/icons/logo.svg')}}"
                class="logo animate__animated animate__zoomInRight animate_6s" alt="logo">
        </a>
        <button class="navbar-toggler mobile-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('Prince.AboutPrinceCompetition')}}">عن
                        الأمير
                        عبدالله الفيصل</a>
                </li>
              <!--  <li class="nav-item">
                    <a class="nav-link" href="{{route('Prince.PoeticExperience')}}">عن الجائزة</a>
                </li> -->
                <li class="nav-item dropdown">
                    <a class="nav-link rotate-arrow-click" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        الجوائز
                        <!-- <img src="{{asset('/assets/icons/arrow-down.png')}}" alt=""> -->
                        <i class="rotate-arrow-main fa-solid fa-angle-left"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('Prince.PoeticExperience')}}">جائزة الأمير عبدالله الفيصل للتجربة الشعرية</a></li>
						<li><a class="dropdown-item" href="{{route('Prince.diwan')}}">جائزة الأمير عبدالله الفيصل للديوان</a></li>
                        <li><a class="dropdown-item" href="{{route('Prince.Theatricalpoetry')}}">جائزة الأمير عبدالله الفيصل للشعر المسرحي</a>
                        </li>
                        <li><a class="dropdown-item" href="{{route('Prince.singingpoem')}}">جائزة الأمير عبدالله الفيصل للقصيدة المغناة</a>
                        </li>
                        <li><a class="dropdown-item" href="{{route('Prince.ArabicPoetry')}}">جائزة الأمير عبدالله الفيصل لأفضل مشروع  في خدمة الشعر العربي</a></li>
						 <li><a class="dropdown-item" href="{{route('award')}}">جائزة الأمير عبدالله الفيصل للشاعر الواعد</a></li>
{{--
                        <li class="dropdown-submenu dropdown-award ">
                            <a class="dropdown-item dropdown-award-txt" href="{{route('award')}}" id=" navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="true">
                                جائزة الشاعر الواعد
                            </a>

                            <ul class="dropdown-award-inner">
                                <li><a class="dropdown-item" href="{{ route('university.students') }}">مسابقة طلبة
                                        الجامعات</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ route('Prince.Abdullah.Al.Faisal.Competition') }}">مسابقة طلبة
                                        الثانوية</a>
                                </li>
                            </ul>

                        </li>
						--}}

                    </ul>

                </li>

                <li  class="nav-item dropdown">
                    <a class="nav-link"href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">مواسم الجائزة</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('user.season019')}}"> الموسم الأول ٢٠١٩</a></li>
                        <li><a class="dropdown-item" href="{{route('user.season020')}}">  الموسم الثاني ٢٠٢٠</a></li>
                        <li><a class="dropdown-item" href="{{route('user.season021')}}"> الموسم الثالث ٢٠٢١</a></li>
				
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('Prince.awardwinners')}}">الفائزون</a>
                </li>
               
				
              <li class="nav-item dropdown">
                    <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        الشروط والأحكام</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="https://hopeful-khorana.161-97-115-110.plesk.page/appa/public/terms-and-conditions">الأحكام العامة</a>
                        <li><a class="dropdown-item" href="https://hopeful-khorana.161-97-115-110.plesk.page/appa/public/legal-policy"> المسؤولية القانونية</a>
                        <li><a class="dropdown-item" href="https://hopeful-khorana.161-97-115-110.plesk.page/appa/public/privacy-policy">الملكية الفكرية</a>
							<li><a class="dropdown-item" href="https://hopeful-khorana.161-97-115-110.plesk.page/appa/public/faqs">أسئلة شائعة</a></li>
                        </li>
				
                    </ul>
			  <li class="nav-item">
                    <a class="nav-link" href="{{route('Prince.contactus')}}">اتصل بنا</a>
                </li>
                </li> 

            </ul>
        </div>

    </div>
</nav>

<div class="mobile-menu">
    <ul class="menu-main">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('Prince.AboutPrinceCompetition')}}">عن
                الأمير
                عبدالله الفيصل</a>
        </li>
      <!--  <li>
            <a href="{{route('Prince.PoeticExperience')}}">عن الجائزة</a>
        </li> -->

        <li class="dropdown-main-3 drop-main">
            <a class="dropdown-main-link aljwise" href='javascript:void(0);'>
                الجوائز
               
                <i class="rotate-arrow fa-solid fa-angle-left"></i>
                <!-- <img src="{{asset('/assets/icons/arrow-white.png')}}" alt=""> -->
            </a>
            <!-- <a class="dropdown-main-link" href='javascript:void(0);'>dropdown عن الجائزة</a> -->

            <div class="dropdown-div-1">
                <ul class="dropdown-3">
                    <li><a class="dropdown-items" href="{{route('Prince.PoeticExperience')}}">جائزة الأمير عبدالله الفيصل للتجربة الشعرية</a>
                    </li>
				    <li><a class="dropdown-items" href="{{route('Prince.diwan')}}"> جائزة الأمير عبدالله الفيصل للديوان</a></li>
                    <li><a class="dropdown-items" href="{{route('Prince.Theatricalpoetry')}}">جائزة الأمير عبدالله الفيصل للشعر المسرحي</a>
                    </li>
                    <li><a class="dropdown-items" href="{{route('Prince.singingpoem')}}">جائزة الأمير عبدالله الفيصل للقصيدة المغناة</a>
                    </li>
                    <li><a class="dropdown-items" href="{{route('Prince.ArabicPoetry')}}">جائزة الأمير عبدالله الفيصل لأفضل مشروع  في خدمة الشعر العربي</a></li>
                    <li class="drop-main">
                        <a class="dropdown-item" href="{{route('award')}}">جائزة الأمير عبدالله الفيصل للشاعر الواعد 
                            <!-- <img src="{{asset('/assets/icons/arrow-white.png')}}" alt=""> -->
                            <!--<i class="rotate-arrow-1 fa-solid fa-angle-left"></i> -->
                        </a>

                        <div class="dropdown-main-link-div">
                            <ul class="">
                                <li><a class="dropdown-items" href="{{ route('university.students') }}">- مسابقة طلبة
                                        الجامعات</a></li>
                                <li><a class="dropdown-items"
                                        href="{{ route('Prince.Abdullah.Al.Faisal.Competition') }}"> - مسابقة طلبة
                                        الثانوية</a>
                                </li>
                                <ul>
                        </div> 
                    </li>

                <ul>
            </div>
        </li>
        <!-- <li>
            <a href="{{route('Prince.AboutPrinceCompetition')}}">عن
                الأمير
                عبدالله الفيصل
            </a>
        </li> -->


        <!-- <li><a class="dropdown-items"> 
                      جائزة الشاعر الواعد     
					 	<img src="{{asset('/assets/icons/arrow-white.png')}}" alt=""></a></li>
				
            <li><a class="dropdown-items" href="{{ route('university.students') }}">- مسابقة طلبة 
                            الجامعات</a></li>
                    <li><a class="dropdown-items" href="{{ route('Prince.Abdullah.Al.Faisal.Competition') }}"> - مسابقة طلبة  
                            الثانوية</a>
                    </li> -->
        <li>
            <a class="nav-link" href="{{route('Prince.videocontent')}}">مواسم الجائزة</a>
        </li>
        <li>
            <a class="nav-link" href="{{route('Prince.awardwinners')}}">الفائزون</a>
        </li>
        <li>
            <a class="nav-link" href="{{route('Prince.contactus')}}">اتصل بنا</a>
        </li>


        <ul>
</div>