<header id="header">
   <div class="gtranslate_wrapper" style="display: none"></div>
   <div class="top" style="background-color: #323232;">
      <!-- Large screen open -->
      <div class="d-none d-lg-block d-xl-block">
         <div class="container text-center">
            <ul class="list-unstyled align-items-center justify-content-center inline-block" style="display: inline-block;">
               <li class="list-inline-item p-3">
                  <a style="font-size:24px;" class="font-weight-bold text-decoration-none text-white p-3" href="index.php">
                  INTENSE
                  </a>
               </li>
               <li class="hover-brown list-inline-item p-3">
                  <a class="font-weight-bold text-decoration-none text-white p-3" href="men.php">
                  MEN
                  </a>
               </li>
               <li class="hover-brown list-inline-item p-3">
                  <a class="font-weight-bold text-decoration-none text-white p-3" href="women.php">
                  WOMEN
                  </a>
               </li>
            </ul>
            <div class="inline-block me-3" style="display: inline-block;">
                <form action="search.php" method="GET"> 
                    <div class="input-group position-relative" style="width: 350px;">
                       <input id="main-seach-input" name="search" style="border-radius: 12px;" class="form-control form-rounded border-0" type="text" placeholder="Search..">
                       <div class="input-group-append border-0" style="border-radius: 12px;">
                          <span id="main-search-icon" class="input-group-text bg-white border-0 position-absolute h-100" style="border-radius: 12px; left:90%;">
                          <i class="fa fa-search" aria-hidden="true"></i>
                          </span>
                       </div>
                    </div>
                </form>
            </div>
            <div class="inline-block" style="display: inline-block;">
               <div class="ml-2">
                  <ul class="list-unstyled m-0 mt-2 inline-block" style="display: inline-block;">
                     <li class="list-inline-item pl-2">
                         <button type="button" class="bg-transparent border-0" data-bs-toggle="dropdown" aria-expanded="false">
                             <i class="fa fa-user cursor-pointer text-white" style="font-size:33px;" aria-hidden="true"></i>
                         </button>
                         <ul class="dropdown-menu">
                             <?php
                             if(!isset($_SESSION["user"])){
                                 echo '
                                     <li><a class="dropdown-item" href="register.php">Register</a></li>
                                     <li><a class="dropdown-item" href="login.php">Sign in</a></li>
                                 ';
                             }
                             else{
                                 echo '
                                     <li><a class="dropdown-item" href="register.php">My profile</a></li>
                                     <li><a class="dropdown-item" href="register.php">Sign out</a></li>
                                 ';
                             }
                             ?>
                         </ul>
                     </li>
                     <li class="list-inline-item pl-2">
                        <a href="">
                        <i class="fa fa-heart text-white" style="font-size:33px;" aria-hidden="true"></i>
                        </a>
                     </li>
                     <li class="list-inline-item pl-2">
                        <a href="">
                        <i class="fa fa-shopping-bag text-white" style="font-size:33px;" aria-hidden="true"></i>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- Large screen close -->
      <!-- Small screen open -->
      <div class="d-lg-none d-xl-none">
         <div class="container">
            <div class="p-3">
               <i class="fa fa-bars text-white cursor-pointer" style="font-size:26px;" aria-hidden="true"></i>
               <a style="font-size:24px;" class="font-weight-bold text-decoration-none text-white mr-3 ml-3" href="">
               INTENSE
               </a>
               <div class="inline-block" style="display: inline-block; float: right;">
                  <div class="ml-4">
                     <ul class="list-unstyled m-0 mt-2 inline-block" style="display: inline-block;">
                        <li class="list-inline-item">
                           <i class="pointer search-bar-icon fa fa-search text-white" style="font-size:23px;" aria-hidden="true"></i>
                        </li>
                        <li class="list-inline-item pl-2">
                            <button type="button" class="bg-transparent border-0" data-bs-toggle="dropdown" aria-expanded="false">
                               <i class="fa fa-user cursor-pointer text-white" style="font-size:23px;" aria-hidden="true"></i>
                            </button>
                            <ul class="dropdown-menu">
                             <?php
                             if(!isset($_SESSION["user"])){
                                 echo '
                                     <li><a class="dropdown-item" href="register.php">Register</a></li>
                                     <li><a class="dropdown-item" href="login.php">Sign in</a></li>
                                 ';
                             }
                             else{
                                 echo '
                                     <li><a class="dropdown-item" href="register.php">My profile</a></li>
                                     <li><a class="dropdown-item" href="register.php">Sign out</a></li>
                                 ';
                             }
                             ?>
                         </ul>
                        </li>
                        <li class="list-inline-item">
                           <a href="">
                           <i class="fa fa-heart text-white" style="font-size:23px;" aria-hidden="true"></i>
                           </a>
                        </li>
                        <li class="list-inline-item">
                           <a href="">
                           <i class="fa fa-shopping-bag text-white" style="font-size:23px;" aria-hidden="true"></i>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Small screen close -->
   </div>
   <div class="bottom d-none d-lg-block d-xl-block" style="background-color: black;">
      <div class="container">
         <div class="row">
            <div class="col pt-4">
                <?php
                if($siteCategory == 1)
                {
                echo
                 '
                    <a class="font-weight-bold text-decoration-none text-white p-2 pr-4 pl-4 border border-white current-category" href="men.php">MEN</a>
                 ';
                }
                else
                {
                    echo
                 '
                    <a class="font-weight-bold text-decoration-none text-white p-2 pr-4 pl-4 border border-white" href="men.php">MEN</a>
                 ';
                }
                ?>
            </div>
            <div class="col text-center">
               <div id="freeCodeText" class="text-white pt-3 pb-3 font-weight-bold blue-border-hover cursor-pointer">
                  <p style="font-size:14px;" class="m-0">NEW HERE? Get 20% off everything *</p>
                  <p style="font-size:14px;" class="m-0">With code: HELLO</p>
               </div>
            </div>
            <div class="col text-end pt-4">
               <?php
                if($siteCategory == 2)
                {
                echo
                 '
                    <a class="font-weight-bold text-decoration-none text-white p-2 pr-4 pl-4 border border-white current-category" href="women.php">WOMEN</a>
                 ';
                }
                else
                {
                    echo
                 '
                    <a class="font-weight-bold text-decoration-none text-white p-2 pr-4 pl-4 border border-white" href="women.php">WOMEN</a>
                 ';
                }
                ?>
            </div>
         </div>
      </div>
   </div>
   <!-- Drop open -->
   <div class="container">
      <div id="freeCodeMsg" class="text-center shadow-lg p-3 mb-5 bg-white rounded">
         <div class="mt-3">
            <p>Enter code HELLO for 20% discound for first three products you buy</p>
         </div>
      </div>
   </div>
   <!-- Drop close -->
   <div class="bottom-mobile d-lg-none d-xl-none">
      <div class="text-center p-3 border-top" style="background-color: black;">
         <div class="container">
            <p style="font-size:18px;" class="m-0 text-white font-weight-bold">DISCOVER OVER 850 BRANDS</p>
         </div>
      </div>
   </div>
</header>

<!-- search area -->
<div class="search-area">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <span class="close-btn"><i class="fa fa-window-close"></i></span>
            <div class="search-bar">
               <div class="search-bar-tablecell">
                  <h3>Search For:</h3>
                  <form action="search.php" method="post"> 
                    <input type="text" name="search" placeholder="Keywords">
                    <button type="submit">Search <i class="fa fa-search"></i></button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- end search area -->
