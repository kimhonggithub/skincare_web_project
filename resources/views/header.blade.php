<?php
    use App\Http\Controllers\ProductController;
    $total=0;
    if(Session::has('user')){
        $total= ProductController::cartItem();
    }
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<nav class="navbar" style="background-color:pink;">
  <!-- Navbar content -->
  <nav class="navbar navbar-expand-sm ">
    <div class="container-fluid">
        <a class="navbar-brand ps-5" href="/">Store_Name</a>
        <button class="navbar-toggler" type="button"  data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
            <div id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item px-4">
                    <a class="nav-link" aria-current="page" href="#">&nbsp;Home&nbsp;</a>
                    </li>
                    <li class="nav-item pe-4">
                    <a class="nav-link" href="#">&nbsp;SkinCare&nbsp;</a>
                    </li>
                    <li class="nav-item pe-4">
                    <a class="nav-link" href="#">&nbsp;About&nbsp;</a>
                    </li>
                    <li class="nav-item pe-5">
                    <a class="nav-link">Contact</a>
                    </li>
                    
                    <li class="nav-item pe-4">
                        <a href="#" class="nav-link">Cart({{$total}})</a>
                    </li>
                    <li class="nav-item px-5">
                        <form action="/search" class="d-flex" role="search">
                            <input class="form-control ms-5 me-3" type="search" placeholder="Search" aria-label="Search" name="query">
                            <button class="btn btn-outline-light " type="submit"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill-rule="evenodd" d="M14.53 15.59a8.25 8.25 0 111.06-1.06l5.69 5.69a.75.75 0 11-1.06 1.06l-5.69-5.69zM2.5 9.25a6.75 6.75 0 1111.74 4.547.746.746 0 00-.443.442A6.75 6.75 0 012.5 9.25z"></path></svg></button>
                        </form>
                    </li>
                    <li class="nav-item px-5">
                     
                         
                            @if(Session::has('user'))
                                <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                <a href="#"><i class="fa-solid fa-circle-user fa-2x text-secondary"></i></a>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                               
                                <li><a class="dropdown-item active" href="#"> {{Session::get('user')['name']}}</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="/logout">Log out</a></li>
                            </ul>
                            
                            @else
                                
                            <div class="dropdown">
                            <a href="/login" >
                                <button class="btn btn-secondary mt-2" type="button" id="dropdownMenuButton2" aria-expanded="false">
                              Login
                            </button></a>
                          
                           @endif
                        </div>
                    </li>
                </ul> 
            </div>
          
            
            <!-- user -->
            <!-- <div class="dropdown">
            
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown button
                </button>
                
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                    <li><a class="dropdown-item active" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
            </div> -->
                
            
    </div>  
    
</nav>

</nav>
