<section style="background: url('assets/Images/navtop.png'); background-repeat: no-repeat; background-size: 100% 100px;">
    <div class="container px-xxl-5 py-2">
        <div class="row align-items-center" id="MyContact">
            <div class="col-xxl-10 col-9 text-end">
                <ul class="dis-none-style float-end align-items-center space-contact">
                    <li><a class="text-white" href="{{url('contact')}}">CONTACT US</a></li>
                    <li class="fix-mar-nav-top"><img class="w-15" src="{{asset('assets/Images/logo/facebook.png')}}" alt="" /></li>
                    <li class="fix-mar-nav-top"><img class="w-15" src="{{asset('assets/Images/logo/youtube.png')}}" alt="" /></li>
                    <li class="fix-mar-nav-top"><img class="w-15" src="{{asset('assets/Images/logo/twitter.png')}}" alt="" /></li>
                    <li class="fix-mar-nav-top"><img class="w-15" src="{{asset('assets/Images/logo/instagram.png')}}" alt="" /></li>
                </ul>
            </div>
            <div class="col-xxl-2 col-3 text-white pe-4">
                <div class="d-flex justify-content-end">ENG <span class="px-2">|</span> ไทย</div>
            </div>
        </div>
    </div>
</section>

<div class="sticky-top o-09" id="sticky">
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-white d-md-none d-lg-block d-none">
        <div class="container px-0">
            <div class="headerNavber">
                <div class="headerBrand">
                    <a class="d-flex align-items-center" href="{{url('/')}}">
                        <img width="150" src="{{asset('assets/Images/logo/SCGP_Logo_Full-Version_Isolated.png')}}" />
                    </a>
                </div>
                <div class="headerMenu">
                    <ul class="menuNav">
                        <li class="px-2 dropdown">
                            <a class="icon-width txt-nav dropdown-toggle menu-item" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                About us
                                <svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </a>

                            <div class="dropdown-menu shadow-sm sm-menu" aria-labelledby="dropdown01">
                                <ul class="sub-menu">
                                    <li>
                                        <label href="{{url('packaging')}}" class="click-menu sub-menu-item"><i class="bi bi-plus"></i> Who are we</label>
                                        <div class="sub-dropdown" style="display: none;">
                                            <ul>
                                                <li>
                                                    <a href="#" class="sub-menu-item"> <i class="bi bi-dash"></i> Our Vision </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="sub-menu-item"> <i class="bi bi-dash"></i> Our Strategy </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="sub-menu-item"> <i class="bi bi-dash"></i> Our Opportunity </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" class="sub-menu-item"><i class="bi bi-plus"></i> Our Business</a>
                                    </li>
                                    <li>
                                        <a href="#" class="sub-menu-item"><i class="bi bi-plus"></i> Milestone</a>
                                    </li>
                                    <li>
                                        <a href="#" class="sub-menu-item"><i class="bi bi-plus"></i> Messages from the board of director</a>
                                    </li>
                                    <li>
                                        <a href="#" class="sub-menu-item"><i class="bi bi-plus"></i> Organization Chart</a>
                                    </li>
                                    <li>
                                        <lable  class="sub-menu-item"><i class="bi bi-plus"></i> Management Structure</lable>
                                         <div class="sub-dropdown" style="display: none;">
                                            <ul>
                                                <li>
                                                    <a href="#" class="sub-menu-item"> <i class="bi bi-dash"></i> Board of Directors โครงสร้างเดิม Update เนื้อหาใหม่</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="sub-menu-item"> <i class="bi bi-dash"></i> Management Team </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="sub-menu-item"> <i class="bi bi-dash"></i> Sub Committees </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="px-2 dropdown">
                            <a class="icon-width txt-nav dropdown-toggle menu-item" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Products & Services
                                <svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </a>
                            <div class="dropdown-menu shadow-sm sm-menu" aria-labelledby="dropdown01">
                                <ul class="sub-menu">
                                    <li>
                                        <a href="{{url('packaging')}}" class="sub-menu-item"> Packaging </a>
                                    </li>
                                    <li>
                                        <a href="#" class="sub-menu-item">Innovative Packaging</a>
                                    </li>
                                    <li>
                                        <a href="#" class="sub-menu-item">Foodservice Product</a>
                                    </li>
                                    <li>
                                        <a href="#" class="sub-menu-item">Paper & Pulp</a>
                                    </li>
                                    <li>
                                        <a href="#" class="sub-menu-item">Forestry Business</a>
                                    </li>
                                    <li>
                                        <a href="#" class="sub-menu-item">Design Service</a>
                                    </li>
                                     <li>
                                        <a href="#" class="sub-menu-item">Marketing & Event</a>
                                    </li>
                                    <li>
                                        <a href="#" class="sub-menu-item">SCGP reXycle</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="px-2">
                            <a class="icon-width txt-nav dropdown-toggle menu-item" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Solutions
                               <svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </a>
                            <div class="dropdown-menu shadow-sm sm-menu" aria-labelledby="dropdown03">
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#" class="sub-menu-item">  Circular Economy Solutions </a>
                                    </li>
                                    <li>
                                        <a href="#" class="sub-menu-item"> Small Lot Solutions</a>
                                    </li>
                                    <li>
                                        <a href="#" class="sub-menu-item"> Convenience Solutions</a>
                                    </li>
                                    <li>
                                        <a href="#" class="sub-menu-item"> Smart and Functional Solutions</a>
                                    </li>
                                    <li>
                                        <a href="#" class="sub-menu-item"> Marketing Event Solutions</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="px-2">
                            <a class="icon-width txt-nav dropdown-toggle menu-item" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Debenture / Investor Relations
                                <svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </a>
                           <div class="dropdown-menu shadow-sm sm-menu" aria-labelledby="dropdown01">
                                <ul class="sub-menu">
                                    <li>
                                        <label href="{{url('packaging')}}" class="click-menu sub-menu-item"><i class="bi bi-plus"></i> Debenture</label>
                                        <div class="sub-dropdown" style="display: none;">
                                            <ul>
                                                <li>
                                                    <a href="#" class="sub-menu-item"> <i class="bi bi-dash"></i> Debenture Homepge </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="sub-menu-item"> <i class="bi bi-dash"></i> Form Debenture && SCG Debenture Club</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="sub-menu-item"> <i class="bi bi-dash"></i> SCG Debenture Club </a>
                                                </li>
                                                 <li>
                                                    <a href="#" class="sub-menu-item"> <i class="bi bi-dash"></i> FAQ </a>
                                                </li>
                                                 <li>
                                                    <a href="#" class="sub-menu-item"> <i class="bi bi-dash"></i> Debenture Contact </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <label href="{{url('packaging')}}" class="click-menu sub-menu-item"><i class="bi bi-plus"></i> Investor Relations</label>
                                        <div class="sub-dropdown" style="display: none;">
                                            <ul>
                                                <li>
                                                    <a href="#" class="sub-menu-item"> <i class="bi bi-dash"></i> Investor Homepge </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="sub-menu-item"> <i class="bi bi-dash"></i> Finacial Information</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="sub-menu-item"> <i class="bi bi-dash"></i> Stock Information</a>
                                                </li>
                                                 <li>
                                                    <a href="#" class="sub-menu-item"> <i class="bi bi-dash"></i> Shareholder Information</a>
                                                </li>
                                                 <li>
                                                    <a href="#" class="sub-menu-item"> <i class="bi bi-dash"></i> Presentation and Webcast</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="px-2">
                           <a class="icon-width txt-nav dropdown-toggle menu-item" href="{{url('sustainable')}}" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sustainable Development
                               <svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </a>
                            <div class="dropdown-menu shadow-sm sm-menu" aria-labelledby="dropdown03">
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#" class="sub-menu-item"> SCGP's SD Homepage</a>
                                    </li>
                                    <li>
                                        <a href="#" class="sub-menu-item"> Approaches and SDGs</a>
                                    </li>
                                    <li>
                                        <a href="#" class="sub-menu-item"> Environmental</a>
                                    </li>
                                    <li>
                                        <a href="#" class="sub-menu-item"> Social</a>
                                    </li>
                                    <li>
                                        <a href="#" class="sub-menu-item"> Governance</a>
                                    </li>
                                    <li>
                                        <a href="#" class="sub-menu-item"> Policy and SD Report</a>
                                    </li>
                                     <li>
                                        <a href="#" class="sub-menu-item"> CSR Highlight </a>
                                    </li>
                                    <li>
                                        <a href="#" class="sub-menu-item"> Sustainability in Action</a>
                                    </li>
                                     <li>
                                        <a href="#" class="sub-menu-item"> Awards & Recogniion</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="ps-2">
                            <a class="icon-width txt-nav menu-item"></a>

                            <a class="icon-width txt-nav dropdown-toggle menu-item" href="{{url('sustainable')}}" id="dropdown0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Business Update
                               <svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </a>
                            <div class="dropdown-menu shadow-sm sm-menu" aria-labelledby="dropdown0">
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#" class="sub-menu-item"> News</a>
                                    </li>
                                    <li>
                                        <a href="#" class="sub-menu-item"> Business Spotlight</a>
                                    </li>
                                    <li>
                                        <a href="#" class="sub-menu-item"> a Lot Newsletter</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>

<div class="sticky-top">
    <div class="demo-container d-lg-none d-md-block d-block">
        <!-- nav -->
        <header class="header">
            <nav class="primary">
                <div class="header__container">
                    <ul>
                        <li class="logo text-end">
                            <img width="150" src="{{asset('assets/Images/logo/SCGP_Logo_Full-Version_Isolated.png')}}" />
                        </li>
                        <li class="mobile-nav">
                            <button id="nav-toggle" onclick="openNav()">
                                <span class="menu"></span>
                            </button>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- /nav -->
        <!-- mobile nav menu -->

        <div id="mySidenav" class="sidenav">
            <div class="pt-2" style="background: #fff;">
                <div class="d-flex align-items-center">
                    <div class="w-25 text-center">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fas fa-times"></i></a>
                    </div>
                    <div class="w-75">
                        <hr class="w-100" />
                    </div>
                </div>

                <ul class="navMenuMb">
                    <li class="navMenuMb-item">
                        <a href="#">About us</a>
                    </li>
                    <li class="navMenuMb-item">
                        <div role="button" data-bs-toggle="collapse" data-bs-target="#collapseProducts" aria-expanded="false" aria-controls="collapseProducts">
                            <a href="javascript:void(0)">Products & Services</a> <i class="fas fa-chevron-down float-end mt-1"></i>
                        </div>

                        <div class="collapse" id="collapseProducts">
                            <ul class="sub-menu-mb">
                                <li class="sub-menu-mb-item"><i class="bi bi-plus"></i> Products</li>
                                <li class="sub-menu-mb-item">
                                    <a href="{{url('packaging')}}" role="button" data-bs-toggle="collapse" data-bs-target="#collapsePackaging" aria-expanded="false" aria-controls="collapsePackaging">
                                        <i class="bi bi-plus"></i> Packaging
                                    </a>

                                    <div class="collapse" id="collapsePackaging">
                                        <ul class="sub-menu-mb">
                                            <li class="sub-menu-mb-item2">
                                                <a href="javascript:void(0)"><i class="bi bi-dash"></i> Primary Packaging</a>
                                            </li>
                                            <li class="sub-menu-mb-item2">
                                                <a href="javascript:void(0)"><i class="bi bi-dash"></i> Secondary Packaging</a>
                                            </li>
                                            <li class="sub-menu-mb-item2">
                                                <a href="javascript:void(0)"><i class="bi bi-dash"></i> Tertiary Packaging</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="sub-menu-mb-item">
                                    <a href="#"><i class="bi bi-plus"></i> Specialty Packaging</a>
                                </li>
                                <li class="sub-menu-mb-item">
                                    <a href="#"><i class="bi bi-plus"></i> Food Service Products</a>
                                </li>
                                <li class="sub-menu-mb-item">
                                    <a href="#"><i class="bi bi-plus"></i> Paper and Pulp</a>
                                </li>
                                <li class="sub-menu-mb-item">
                                    <a href="#"><i class="bi bi-plus"></i> Forestry</a>
                                </li>
                                <li class="sub-menu-mb-item">
                                    <a href="#"><i class="bi bi-plus"></i> Services</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="navMenuMb-item">
                        <a href="#">Solutions</a>
                    </li>
                    <li class="navMenuMb-item">
                        <a href="#">Debenture / Investor Relations</a>
                    </li>
                    <li class="navMenuMb-item">
                        <a href="#">Sustainable Development</a>
                    </li>
                    <li class="navMenuMb-item">
                        <a href="#">Business Update</a>
                    </li>
                </ul>
            </div>

            <div class="pt-4 px-2" style="">
                <div class="d-flex justify-content-evenly">
                    <div class="text-center"><img class="w-75" src="{{asset('assets/Images/logo/facebook.png')}}" alt="" /></div>
                    <div class="text-center"><img class="w-75" src="{{asset('assets/Images/logo/youtube.png')}}" alt="" /></div>
                    <div class="text-center"><img class="w-75" src="{{asset('assets/Images/logo/twitter.png')}}" alt="" /></div>
                    <div class="text-center"><img class="w-75" src="{{asset('assets/Images/logo/instagram.png')}}" alt="" /></div>
                </div>

                <div class="row">
                    <div class="col-12 mt-4 text-center font-white">ENG <span class="px-2">|</span> ไทย</div>
                </div>
            </div>
        </div>
        <div class="backdrop" id="backdrop"></div>
        <!-- /mobile nav menu -->
    </div>
</div>

