<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AbsensiSAKTI</title>
    <link rel="stylesheet" href="{{ asset('asset/css/boostrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <style>
        .wrapper {
            padding: 56px 0 0;
            margin-left: 30px;
            margin-right: 30px;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="header-left active">
            <a href="index.html" class="logo logo-normal">
                <img src="{{ asset('asset/img/logo.png') }}" alt="Logo">
            </a>
            <a href="index.html" class="logo-small">
                <img src="{{ asset('asset/img/logo-icon.png') }}" alt="Logo">
            </a>
            <a href="index.html" class="dark-logo">
                <img src="{{ asset('asset/img/logo-white.png') }}" alt="Logo">
            </a>
            <a id="toggle_btn" href="javascript:void(0);">
                <i class="ti ti-layout-align-left"></i>
            </a>
        </div>
        <div class="header-user">
            <div class="nav user-menu">
                <div class="nav-item  me-auto">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="javascript:void(0);">Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>

                </div>
                {{-- Night Mode --}}
                <div class="pe-1">
                    <a href="#" id="dark-mode-toggle"
                        class="dark-mode-toggle activate btn btn-outline-light bg-white btn-icon me-1">
                        <i class="ti ti-moon"></i>
                    </a>
                    <a href="#" id="light-mode-toggle"
                        class="dark-mode-toggle btn btn-outline-light bg-white btn-icon me-1">
                        <i class="ti ti-brightness-up"></i>
                    </a>
                </div>
                {{-- notification --}}
                <div class="pe-1 notification-item" id="notification_item">
                    <a href="#" class="btn btn-outline-light bg-white btn-icon position-relative me-1"
                        id="notification_popup">
                        <i class="ti ti-bell"></i>
                        <span class="notification-status-dot"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end notification-dropdown p-4">
                        <div class="d-flex align-items-center justify-content-between border-bottom p-0 pb-3 mb-3">
                            <h4 class="notification-title">Notifications (2)</h4>
                            <div class="d-flex align-items-center">
                                <a href="#" class="text-primary fs-15 me-3 lh-1">Mark all as read</a>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="bg-white dropdown-toggle"
                                        data-bs-toggle="dropdown"><i class="ti ti-calendar-due me-1"></i>Today
                                    </a>
                                    <ul class="dropdown-menu mt-2 p-3">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">
                                                This Week
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">
                                                Last Week
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">
                                                Last Week
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="noti-content">
                            <div class="d-flex flex-column">
                                <div class="border-bottom mb-3 pb-3">
                                    <a href="https://preskool.dreamstechnologies.com/html/template/activities.html">
                                        <div class="d-flex">
                                            <span class="avatar avatar-lg me-2 flex-shrink-0">
                                                <img src="https://preskool.dreamstechnologies.com/html/template/assets/img/profiles/avatar-27.jpg"
                                                    alt="Profile">
                                            </span>
                                            <div class="flex-grow-1">
                                                <p class="mb-1"><span class="text-dark fw-semibold">Shawn</span>
                                                    performance in Math is
                                                    below the threshold.</p>
                                                <span>Just Now</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="border-bottom mb-3 pb-3">
                                    <a href="https://preskool.dreamstechnologies.com/html/template/activities.html"
                                        class="pb-0">
                                        <div class="d-flex">
                                            <span class="avatar avatar-lg me-2 flex-shrink-0">
                                                <img src="https://preskool.dreamstechnologies.com/html/template/assets/img/profiles/avatar-23.jpg"
                                                    alt="Profile">
                                            </span>
                                            <div class="flex-grow-1">
                                                <p class="mb-1"><span class="text-dark fw-semibold">Sylvia</span> added
                                                    appointment on
                                                    02:00 PM</p>
                                                <span>10 mins ago</span>
                                                <div class="d-flex justify-content-start align-items-center mt-1">
                                                    <span class="btn btn-light btn-sm me-2">Deny</span>
                                                    <span class="btn btn-primary btn-sm">Approve</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="border-bottom mb-3 pb-3">
                                    <a href="https://preskool.dreamstechnologies.com/html/template/activities.html">
                                        <div class="d-flex">
                                            <span class="avatar avatar-lg me-2 flex-shrink-0">
                                                <img src="https://preskool.dreamstechnologies.com/html/template/assets/img/profiles/avatar-25.jpg"
                                                    alt="Profile">
                                            </span>
                                            <div class="flex-grow-1">
                                                <p class="mb-1">New student record <span class="text-dark fw-semibold">
                                                        George</span> is
                                                    created by <span class="text-dark fw-semibold">
                                                        Teressa</span></p>
                                                <span>2 hrs ago</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="border-0 mb-3 pb-0">
                                    <a href="https://preskool.dreamstechnologies.com/html/template/activities.html">
                                        <div class="d-flex">
                                            <span class="avatar avatar-lg me-2 flex-shrink-0">
                                                <img src="https://preskool.dreamstechnologies.com/html/template/assets/img/profiles/avatar-01.jpg"
                                                    alt="Profile">
                                            </span>
                                            <div class="flex-grow-1">
                                                <p class="mb-1">A new teacher record for <span
                                                        class="text-dark fw-semibold">Elisa</span>
                                                </p>
                                                <span>09:45 AM</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex p-0">
                            <a href="#" class="btn btn-light w-100 me-2">Cancel</a>
                            <a href="https://preskool.dreamstechnologies.com/html/template/activities.html"
                                class="btn btn-primary w-100">View All</a>
                        </div>
                    </div>
                </div>
                {{-- message --}}
                <div class="pe-1">

                    <a href="https://preskool.dreamstechnologies.com/html/template/chat.html"
                        class="btn btn-outline-light bg-white btn-icon position-relative me-1">
                        <i class="ti ti-brand-hipchat"></i>
                        <span class="chat-status-dot"></span>
                    </a>
                </div>
                <div class="pe-1">
                    <a href="" class="btn btn-outline-light bg-white  position-relative "><span
                            class="ti ti-key"></span> Ubah Password</a>
                </div>
                {{-- user --}}

                {{-- @foreach ( auth()->user()->load('gtk') as $item) --}}
                <div class="d-flex align-items-center">
                    <div class="dropdown ms-1">
                        <a href="javascript:void(0);" class="dropdown-toggle d-flex align-items-center"
                            data-bs-toggle="dropdown">
                            @if(Auth()->user())
                            <span class="avatar avatar-md rounded">
                                {{-- default --}}

                                {{-- user siswa --}}
                                @if(auth()->user()->role == "siswa")
                                @if(Auth::user()->student == NULL)
                                <img src='{{ asset(' asset/img/user-default.jpg') }}' alt='Img' class='img-fluid'>
                                @else
                                @if(Auth::user()->student->foto == "" )
                                <img src='{{ asset(' asset/img/user-default.jpg') }}' alt='Img' class='img-fluid'>
                                @else
                                <img src="/storage/{{ Auth::user()->student->foto }}" alt='Img' class='img-fluid'>
                                @endif
                                @endif
                                @endif

                                @if(auth()->user()->role == "guru")
                                @if(Auth::user()->gtk == NULL)
                                <img src='{{ asset(' asset/img/user-default.jpg') }}' alt='Img' class='img-fluid'>
                                @else
                                @if(Auth::user()->gtk->gambar == "" )
                                <img src='{{ asset(' asset/img/user-default.jpg') }}' alt='Img' class='img-fluid'>
                                @else
                                <img src="/storage/{{ Auth::user()->gtk->gambar }}" alt='Img' class='img-fluid'>
                                @endif
                                @endif
                                @endif

                                @if( auth()->user()->role == "walikelas")
                                @if(Auth::user()->gtk == NULL)
                                <img src='{{ asset(' asset/img/user-default.jpg') }}' alt='Img' class='img-fluid'>
                                @else
                                @if(Auth::user()->gtk->gambar == "" )
                                <img src='{{ asset(' asset/img/user-default.jpg') }}' alt='Img' class='img-fluid'>
                                @else
                                <img src="/storage/{{ Auth::user()->gtk->gambar }}" alt='Img' class='img-fluid'>
                                @endif
                                @endif
                                @endif

                                @if(auth()->user()->role == "admin" || auth()->user()->role == "superadmin" )
                                <img src='{{ asset(' asset/img/user-default.jpg') }}' alt='Img' class='img-fluid'>
                                @endif

                            </span>
                            @endif
                        </a>
                        <div class="dropdown-menu">
                            <div class="d-block">
                                <div class="d-flex align-items-center p-2">
                                    <span class="avatar avatar-md me-2 online avatar-rounded">
                                    @if(Auth()->user())
                                        @if(auth()->user()->role == "siswa")
                                        @if(Auth::user()->student == NULL)
                                        <img src='{{ asset(' asset/img/user-default.jpg') }}' alt='Img'
                                            class='img-fluid'>
                                        @else
                                        @if(Auth::user()->student->foto == "" )
                                        <img src='{{ asset(' asset/img/user-default.jpg') }}' alt='Img'
                                            class='img-fluid'>
                                        @else
                                        <img src="/storage/{{ Auth::user()->student->foto }}" alt='Img'
                                            class='img-fluid'>
                                        @endif
                                        @endif
                                        @endif

                                        @if(auth()->user()->role == "guru")
                                        @if(Auth::user()->gtk == NULL)
                                        <img src='{{ asset(' asset/img/user-default.jpg') }}' alt='Img'
                                            class='img-fluid'>
                                        @else
                                        @if(Auth::user()->gtk->gambar == "" )
                                        <img src='{{ asset(' asset/img/user-default.jpg') }}' alt='Img'
                                            class='img-fluid'>
                                        @else
                                        <img src="/storage/{{ Auth::user()->gtk->gambar }}" alt='Img' class='img-fluid'>
                                        @endif
                                        @endif
                                        @endif

                                        @if( auth()->user()->role == "walikelas")
                                        @if(Auth::user()->gtk == NULL)
                                        <img src='{{ asset(' asset/img/user-default.jpg') }}' alt='Img'
                                            class='img-fluid'>
                                        @else
                                        @if(Auth::user()->gtk->gambar == "" )
                                        <img src='{{ asset(' asset/img/user-default.jpg') }}' alt='Img'
                                            class='img-fluid'>
                                        @else
                                        <img src="/storage/{{ Auth::user()->gtk->gambar }}" alt='Img' class='img-fluid'>
                                        @endif
                                        @endif
                                        @endif

                                        @if(auth()->user()->role == "admin" || auth()->user()->role == "superadmin" )
                                        <img src='{{ asset(' asset/img/user-default.jpg') }}' alt='Img'
                                            class='img-fluid'>
                                        @endif

                                    </span>
                                    <div>
                                        <h6 class>{{ auth()->user()->nama }}</h6>
                                        <p class="text-primary mb-0">{{ auth()->user()->email }}</p>
                                    </div>
                                </div>
                                <hr class="m-0">
                                @if (auth()->user()->role != "superadmin")
                                <a class="dropdown-item d-inline-flex align-items-center p-2"
                                    href="{{ route('profileIndex',auth()->user()->nomor) }}">
                                    <i class="ti ti-user-circle me-2"></i>Profile Saya</a>
                                @endif
                                <a class="dropdown-item d-inline-flex align-items-center p-2"
                                    href="profile-settings.html"><i class="ti ti-settings me-2"></i>Setelan</a>
                                <hr class="m-0">
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="sumbit" class="dropdown-item d-inline-flex align-items-center p-2"> <i
                                            class="ti ti-login me-2"></i> Keluar</button>
                                </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>
