<?php

use Illuminate\Support\Facades\Auth;
?>

<!-- start nav -->
<nav class="navbar navbar-dark navbar-expand-lg bg-dark">
    <div class="container-fluid d-flex justify-content-md-between justify-content-end offset-md-1">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link menu-item active" aria-current="page" href="{{route('homepage')}}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link menu-item dropdown-toggle" id="ourshoptoggle" data-bs-toggle="dropdown" aria-expanded="false" href="#">Our Shop</a>
                    <div class="dropdown-menu" aria-labelledby="ourshoptoggle">
                        <ul class="sub-menu-list">
                            @foreach($categories as $category)
                            <li class="sub-menu-item"><a class="dropdown-item" href="{{route('category', $category->id)}}">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-item" href="#">On Sale</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-item" href="#">Our Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-item" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-item" href="#">Contact</a>
                </li>
                @if(!Auth::check())
                <li class="nav-item">
                    <a class="nav-link menu-item" href="{{route('sign-in')}}">Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-item" href="{{route('sign-up')}}">Sign Up</a>
                </li>
                @else
                <li class="nav-item dropdown">
                    <a class="nav-link menu-item dropdown-toggle" id="usertoggle" data-bs-toggle="dropdown" aria-expanded="false" href="#">
                        <i class="far fa-user"></i> {{Auth::user()->name}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="usertoggle">
                        <ul class="sub-menu-list h-auto">
                            <li class="sub-menu-item">
                                <a class="dropdown-item" href="{{route('category', $category->id)}}">
                                    Th??ng tin t??i kho???n
                                </a>
                            </li>
                            <li class="sub-menu-item">
                                <a class="dropdown-item" href="{{route('logout', Auth::user()->id)}}">
                                    ????ng xu???t
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endif
            </ul>

        </div>
    </div>
</nav>
<!-- end nav  -->