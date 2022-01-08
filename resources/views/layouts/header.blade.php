<section style="background: url('assets/Images/navtop.png');background-repeat: no-repeat;background-size: 100% 100px;">

    <div class="container px-xxl-5 py-2">
        <div class="row align-items-center" id="MyContact">
          <div class="col-xxl-10 col-9 text-end">
            <ul class="dis-none-style float-end align-items-center test">
                <li><a class="text-white pe-3 " href="{{url('contact')}}">CONTACT US</a></li>
                <li class="fix-mar-nav-top"><img class="w-50" src="{{asset('assets/Images/logo/facebook.png')}}" alt="" /></li>
                <li class="fix-mar-nav-top"><img class="w-50" src="{{asset('assets/Images/logo/youtube.png')}}" alt="" /></li>
                <li class="fix-mar-nav-top"><img class="w-50" src="{{asset('assets/Images/logo/twitter.png')}}" alt="" /></li>
                <li class="fix-mar-nav-top"><img class="w-50" src="{{asset('assets/Images/logo/instagram.png')}}" alt="" /></li>
              </ul>
          </div>
          <div class="col-xxl-2 col-3 text-white pe-4">
            <div class="d-flex justify-content-end">
              ENG <span class="px-2">|</span> ไทย  
            </div>
          </div>
        </div>
    </div>

</section>

<div class="sticky-top o-09" id="sticky">
  <nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-white  d-md-none d-lg-block d-none">
      <div class="container px-xxl-5">
        
        <div class="headerNavber">
          <div class="headerBrand">
            <a class="d-flex align-items-center" href="{{url('/')}}">
                <img width="150" src="{{asset('assets/Images/logo/SCGP_Logo_Full-Version_Isolated.png')}}">
            </a>
          </div>
          <div class="headerMenu">
              <ul class="menuNav">
                <li class="px-2">
                  <a class="icon-width txt-nav menu-item">About us</a>
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
                        <a href="#" class="sub-menu-item">
                          <i class="bi bi-plus"></i> Products
                        </a>
                      </li>
                      <li>
                        <a href="#" class="click-menu sub-menu-item"><i class="bi bi-plus"></i> Packaging</a>
                        <div class="sub-dropdown" style="display:none;">
                            <ul>
                              <li>
                                <a href="#" class="sub-menu-item">
                                  <i class="bi bi-plus"></i> Primary Packaging
                                </a>
                              </li>
                              <li>
                                <a href="#" class="sub-menu-item">
                                  <i class="bi bi-plus"></i> Secondary Packaging
                                </a> 
                              </li>
                              <li>
                                  <a href="#" class="sub-menu-item">
                                    <i class="bi bi-plus"></i> Tertiary Packaging
                                  </a>    
                              </li>
                            </ul>
                          </div>
                      </li>
                      <li>
                        <a href="#" class="sub-menu-item"><i class="bi bi-plus"></i> Specialty Packaging</a>
                      </li>
                      <li>
                        <a href="#" class="sub-menu-item"><i class="bi bi-plus"></i> Food Service Products</a>
                      </li>
                      <li>
                        <a href="#" class="sub-menu-item"><i class="bi bi-plus"></i> Paper and Pulp</a>
                      </li>
                      <li>
                        <a href="#" class="sub-menu-item"><i class="bi bi-plus"></i> Forestry</a>
                      </li>
                      <li>
                        <a href="#" class="sub-menu-item"><i class="bi bi-plus"></i> Services</a>
                      </li>
                    </ul>
                    </div>
                </li>
                <li class="px-2">
                  <a class="icon-width txt-nav menu-item">Solutions</a>
                </li>
                <li class="px-2">
                  <a class="icon-width txt-nav menu-item">Debenture / Investor Relations</a>
                </li>
                <li class="px-2">
                  <a class="icon-width txt-nav menu-item">Sustainable Development</a>
                </li>
                <li class="px-2">
                  <a class="icon-width txt-nav menu-item">Business Update</a>
                </li>
              </ul>
          </div>
        </div>

      </div>
  </nav>
</div>

<div class="demo-container d-lg-none d-md-block d-block">
  
 <!-- nav -->
  <header class="header">
    <nav class="primary">
        <div class="header__container">
          <ul>
            <li class="logo text-end">
                <img width="150" src="{{asset('assets/Images/logo/SCGP_Logo_Full-Version_Isolated.png')}}">
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
   <!-- <nav class="mobile">
     <ul>
       <li class="link">
         <a class="text-uppercase" href="">About us</a>
       </li>

       <li class="link">
         <a class="text-uppercase" href="">Products & Services</a>
       </li>

       <li class="link link--selected">
         <a class="text-uppercase" href="">Solutions</a>
       </li>

       <li class="link">
         <a class="text-uppercase" href="">Debenture / Investor Relations </a>
       </li>
       <li class="link">
         <a class="text-uppercase" href="">Sustainable Development </a>
       </li>
       <li class="link">
         <a class="text-uppercase" href="">Business Update</a>
       </li>
     </ul>
   </nav> -->

  <div id="mySidenav" class="sidenav">

  <div class="pt-2" style="background: #FFF;">
  <div class="d-flex align-items-center">
        <div class="w-25 text-center">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fas fa-times"></i></a>
        </div>
        <div class="w-75">
            <hr class="w-100">
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
              <div role="button" data-bs-toggle="collapse" data-bs-target="#collapsePackaging" aria-expanded="false" aria-controls="collapsePackaging">
                <i class="bi bi-plus"></i> Packaging
              </div>
              
              <div class="collapse" id="collapsePackaging">
                  <ul class="sub-menu-mb">
                    <li class="sub-menu-mb-item2"><i class="bi bi-plus"></i> Primary Packaging</li>
                    <li class="sub-menu-mb-item2"><i class="bi bi-plus"></i> Secondary Packaging</li>
                    <li class="sub-menu-mb-item2"><i class="bi bi-plus"></i> Tertiary Packaging</li>
                  </ul>
              </div>
            
            </li>
            <li class="sub-menu-mb-item"><i class="bi bi-plus"></i> Specialty Packaging</li>
            <li class="sub-menu-mb-item"><i class="bi bi-plus"></i> Food Service Products</li>
            <li class="sub-menu-mb-item"><i class="bi bi-plus"></i> Paper and Pulp</li>
            <li class="sub-menu-mb-item"><i class="bi bi-plus"></i> Forestry</li>
            <li class="sub-menu-mb-item"><i class="bi bi-plus"></i> Services</li>
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
        <div class="text-center"><img  class="w-100" src="{{asset('assets/Images/logo/facebook.png')}}" alt="" /></div>
        <div class="text-center"><img  class="w-100" src="{{asset('assets/Images/logo/youtube.png')}}" alt="" /></div>
        <div class="text-center"><img  class="w-100" src="{{asset('assets/Images/logo/twitter.png')}}" alt="" /></div>
        <div class="text-center"><img  class="w-100" src="{{asset('assets/Images/logo/instagram.png')}}" alt="" /></div>
      </div>

      <div class="row">
        <div class="col-12 mt-4 text-center font-white">
            ENG <span class="px-2">|</span> ไทย
        </div>
      </div>

    </div>


  </div>
  <div class="backdrop" id="backdrop"></div>
 <!-- /mobile nav menu -->
  
</div>




<style type="text/css">
.font-white {
  color: #FFF;
}
.sidenav {
  height: 100%;
  width: 0px;
  position: fixed;
  z-index: 999;
  top: 0;
  left: 0;
  background: #1c1666;
  /* background-color: #fff; */
  overflow-y: auto;
  overflow-x: hidden;
  transition: 0.5s;
  /* padding: 15px 0px 0px 0px; */
  padding: 0px;
  font-size: 1rem;
}

.backdrop {
  display: none;
  background-color: rgba(0,0,0,0.7);
  width: 100%;
  height: 100%;
  z-index: 998;
  top: 0;
  position: fixed;
}

.closebtn {
  color: red;
  font-size: 1.5rem;
}

.navMenuMb {
  list-style: none;
  padding: 0px;
  margin: 0px;
}

.navMenuMb-item {
  display: block;
  width: 100%;
  padding: 10px 15px;
  font-size: 1rem;
  border-bottom: 1px solid #c4c4c4;
  /* color: #294661; */
}

.navMenuMb-item a {
  color: #0061ad;
}

.navMenuMb-item a:focus {
  color: #1c1666;
}


.sub-menu-mb {
  list-style:none;
  padding:0px;
  margin:0px;
}

.sub-menu-mb-item {
  display: block;
  width: 100%;
  padding: 3px 8px;
  color: #0061ad;
}

.sub-menu-mb-item2 {
  display: block;
  width: 100%;
  padding: 3px 10px;
  color: #0061ad;
}

.dropdown-toggle::after {
  display: none;
}
.text-decoration-none{
  text-decoration: none!important;
}
/* Font Awesome Icons have variable width. Added fixed width to fix that.*/
.icon-width { width: 2rem;}


/***** demo styles *****/

body {
  background-color: #e9ecef;
  margin: 0;
  padding: 0;
}
.demo-container {
  max-width: 100%;
  display: block;
  margin: 0 auto;
  position: relative;
  overflow: hidden;
}

/***** Base header & nav styles *****/

.header {
  position: relative;
  padding-bottom: 0;
  width: 100%;
  max-width: 1600px;
  background-color: #fff;
  z-index: 4;
}
.header__container {
  max-width: 1170px;
  margin: 0 auto;
  padding-left: 1rem;
  padding-right: 1rem;
}
.header ul {
  margin: 0;
  padding: 0;
}
.header ul li {
  list-style: none;
  margin-bottom: 0;
}
.header ul li a:hover {
  color: #1a82e2;
}
nav.secondary {
  height: 2rem;
  width: 100%;
  border-bottom: 1px solid #e9ecef;
}
nav.primary {
  background-color: #fff;
  box-shadow: 0px 1px 3px -1px rgba(41, 70, 97, 0.2);
  position: relative;
  border-bottom: 1px solid #e9ecef;
}
nav.primary ul {
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  align-items: center;
  box-sizing: border-box;
}
nav.primary ul li {
  flex: 1;
}
nav.primary ul li.logo {
  flex: 3;
  text-align: left;
}
nav.primary ul li.logo a {
  height: 72px;
  min-width: 150px;
  background-image: url("//sendgrid.com/brand/sg-logo-300.png");
  background-position: left 22px;
  background-repeat: no-repeat;
  background-size: 150px auto;
  display: block;
  margin-left: 0;
}

/***** Mobile nav toggle container *****/

li.mobile-nav {
  position: relative;
  text-align: right;
  display: block;
  height: 4.5rem;
  vertical-align: middle;
}

/***** hamburger menu *****/

#nav-toggle {
  font-size: 1.875rem;
  position: absolute;
  width: 32px;
  right: 0;
  height: 73px;
  background: transparent;
  border: none;
  display: block;
  z-index: 1000;
  line-height: 1;
  padding: 0;
  cursor: pointer;
}

/* #nav-toggle:hover,
#nav-toggle:focus {
  color: #1a82e2;
  outline: none;
} */
#nav-toggle .menu {
  position: absolute;
  display: block;
  width: 1.875rem;
  height: 2px;
  background: #1a82e2;
  overflow: visible;
  transition: background-color 0.3s ease-out;
  transition-delay: 0.1s;
}
#nav-toggle .menu:before,
#nav-toggle .menu:after {
  content: "";
  position: absolute;
  left: 0;
  width: 1.875rem;
  height: 2px;
  background: #1a82e2;
  transition: transform 0.2s;
}
#nav-toggle .menu:before {
  top: -8px;
}
#nav-toggle .menu:after {
  top: 8px;
}
#nav-toggle.open .menu {
  /* background-color: transparent; */
  transition: background-color 0s;
  transition-delay: 0s;
}
#nav-toggle.open .menu:before,
#nav-toggle.open .menu:after {
  transition: transform 0.3s;
}
/* #nav-toggle.open .menu:before {
  top: 0;
  box-shadow: none;
  transform: rotate(45deg);
}
#nav-toggle.open .menu:after {
  transform: rotate(-45deg);
  top: 0;
} */

/***** Mobile nav menu styles *****/

/* nav.mobile {
  display: block;
  position: fixed;
  top: 6.5rem;
  width: 100%;
  background-color: #fff;
  z-index: 3;
  box-shadow: 0px 1px 3px -1px rgba(41, 70, 97, 0.2);
  transform: translate(0, -360px);
  transition: all 0.3s ease-out;
  padding-bottom: 1rem;
  opacity: 0;
  //added this for demo only. On a mobile device max width is not necessary.
  max-width: 450px;
}
nav.mobile--open {
  transform: translate(0, 0);
  opacity: 1;
}
nav.mobile ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}
nav.mobile li.link {
  font-weight: 400;
  font-size: 1rem;
  padding: 1.5rem 0 0.5rem 1.5rem;
}
nav.mobile li.link a {
  color: #294661;
  display: block;
  text-decoration: none;
} */

</style>




