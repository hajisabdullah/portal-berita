<header
    class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <div class="col-md-3 mb-2 mb-md-0">
        <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
            <svg width="50" height="42" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_429_11031)">
                    <path d="M3 4V18C3 19.1046 3.89543 20 5 20H17H19C20.1046 20 21 19.1046 21 18V8H17" stroke="#292929"
                        stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M3 4H17V18C17 19.1046 17.8954 20 19 20V20" stroke="#292929" stroke-width="2.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M13 8L7 8" stroke="#292929" stroke-width="2.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M13 12L9 12" stroke="#292929" stroke-width="2.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </g>
                <defs>
                    <clipPath id="clip0_429_11031">
                        <rect width="24" height="24" fill="white" />
                    </clipPath>
                </defs>
            </svg>
            <h3 class="ms-2">News-Ku</h3>
        </a>
    </div>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="#" class="nav-link px-2">Features</a></li>
        <li><a href="#" class="nav-link px-2">Pricing</a></li>
        <li><a href="#" class="nav-link px-2">FAQs</a></li>
        <li><a href="#" class="nav-link px-2">About</a></li>
    </ul>

    <div class="col-md-3 text-end">
        @guest
            <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">Login</a>
            <a href="{{ route('register') }}" class="btn btn-primary">Sign-up</a>
        @else
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Dropdown button
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="{{ route('index') }}">
                            <svg width="50" height="42" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_429_11031)">
                                    <path d="M3 4V18C3 19.1046 3.89543 20 5 20H17H19C20.1046 20 21 19.1046 21 18V8H17"
                                        stroke="#292929" stroke-width="2.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M3 4H17V18C17 19.1046 17.8954 20 19 20V20" stroke="#292929" stroke-width="2.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M13 8L7 8" stroke="#292929" stroke-width="2.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M13 12L9 12" stroke="#292929" stroke-width="2.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_429_11031">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>My News
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}">
                            <svg fill="#000000" width="50"
                                height="42" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                <title>logout</title>
                                <path
                                    d="M0 9.875v12.219c0 1.125 0.469 2.125 1.219 2.906 0.75 0.75 1.719 1.156 2.844 1.156h6.125v-2.531h-6.125c-0.844 0-1.5-0.688-1.5-1.531v-12.219c0-0.844 0.656-1.5 1.5-1.5h6.125v-2.563h-6.125c-1.125 0-2.094 0.438-2.844 1.188-0.75 0.781-1.219 1.75-1.219 2.875zM6.719 13.563v4.875c0 0.563 0.5 1.031 1.063 1.031h5.656v3.844c0 0.344 0.188 0.625 0.5 0.781 0.125 0.031 0.25 0.031 0.313 0.031 0.219 0 0.406-0.063 0.563-0.219l7.344-7.344c0.344-0.281 0.313-0.844 0-1.156l-7.344-7.313c-0.438-0.469-1.375-0.188-1.375 0.563v3.875h-5.656c-0.563 0-1.063 0.469-1.063 1.031z">
                                </path>
                            </svg>Logout
                        </a>
                    </li>
                    {{--  <li><a class="dropdown-item" href="">
                            <form method="POST" class="d-flex justify-content-center" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-dark">Logout</button>
                            </form>
                        </a>
                    </li>  --}}
                </ul>
            </div>
        @endguest
    </div>
</header>
