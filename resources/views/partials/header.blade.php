<header class=" bg-light ">
    <div class="header-top ">
        <div class="container d-flex justify-content-end text-white py-2">
            <span class="pe-2">DC POWER VISA</span>
            <span>ADDITIONAL DC SITES &#11206;</span>
        </div>

    </div>
    <div class="container">


        <nav class="navbar-expand-sm  d-flex justify-content-between align-items-center">
            <div class="logo py-2">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="" style="width: 80px;">
            </div>
            <div class="pages">
                <ul class="list-unstyled d-flex h-100 align-items-center m-0">
                    <li
                        class="d-flex align-items-center
                {{ Route::currentRouteName() === 'guest.characters' ? 'border_active' : '' }}">
                        <a href="{{ route('guest.characters') }}"
                            class="text-decoration-none px-2
                    {{ Route::currentRouteName() === 'guest.characters' ? 'active' : 'text-dark' }}">
                            <h6>CHARACTERS</h6>
                        </a>
                    </li>
                    <li
                        class="d-flex align-items-center
                    {{ Route::currentRouteName() === 'posts.index' ? 'border_active' : '' }}">
                        <a href="{{ route('posts.index') }}"
                            class="text-decoration-none px-2 
                        {{ Route::currentRouteName() === 'posts.index' ? 'active' : 'text-dark' }}">
                            <h6>HOME</h6>
                        </a>
                    </li>
                    <li
                        class="d-flex align-items-center
                    {{ Route::currentRouteName() === 'comics.index' ? 'border_active' : '' }}">
                        <a href="{{ route('comics.index') }}"
                            class="text-decoration-none px-2
                     {{ Route::currentRouteName() === 'comics.index' ? 'active' : 'text-dark' }}">
                            <h6>COMICS</h6>
                        </a>
                    </li>
                    <li
                        class="d-flex align-items-center
                {{ Route::currentRouteName() === 'guest.tv' ? 'border_active' : '' }}">
                        <a href="{{ route('guest.tv') }}"
                            class="text-decoration-none px-2
                    {{ Route::currentRouteName() === 'guest.tv' ? 'active' : 'text-dark' }}">
                            <h6>TV</h6>
                        </a>
                    </li>
                    <li
                        class="d-flex align-items-center
                {{ Route::currentRouteName() === 'guest.games' ? 'border_active' : '' }}">
                        <a href="{{ route('guest.games') }}"
                            class="text-decoration-none px-2
                    {{ Route::currentRouteName() === 'guest.games' ? 'active' : 'text-dark' }}">
                            <h6>GAMES</h6>
                        </a>
                    </li>
                    <li
                        class="d-flex align-items-center
                {{ Route::currentRouteName() === 'guest.collectibles' ? 'border_active' : '' }}">
                        <a href="{{ route('guest.collectibles') }}"
                            class="text-decoration-none px-2
                    {{ Route::currentRouteName() === 'guest.collectibles' ? 'active' : 'text-dark' }}">
                            <h6>COLLECTIBLES</h6>
                        </a>
                    </li>
                    <li
                        class="d-flex align-items-center
                {{ Route::currentRouteName() === 'guest.video' ? 'border_active' : '' }}">
                        <a href="{{ route('guest.video') }}"
                            class="text-decoration-none px-2
                    {{ Route::currentRouteName() === 'guest.video' ? 'active' : 'text-dark' }}">
                            <h6>VIDEOS</h6>
                        </a>
                    </li>
                    <li
                        class="d-flex align-items-center
                {{ Route::currentRouteName() === 'guest.fans' ? 'border_active' : '' }}">
                        <a href="{{ route('guest.fans') }}"
                            class="text-decoration-none px-2
                    {{ Route::currentRouteName() === 'guest.fans' ? 'active' : 'text-dark' }}">
                            <h6>FANS</h6>
                        </a>
                    </li>
                    <li
                        class="d-flex align-items-center
                {{ Route::currentRouteName() === 'guest.news' ? 'border_active' : '' }}">
                        <a href="{{ route('guest.news') }}"
                            class="text-decoration-none px-2
                    {{ Route::currentRouteName() === 'guest.news' ? 'active' : 'text-dark' }}">
                            <h6>NEWS</h6>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-dark text-decoration-none px-2">
                            <h6>SHOP
                                <span style="color: #0282F9;">&#11206;</span>
                            </h6>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="search">
                <div class="mb-3 d-flex align-items-center search_border">
                    <input type="search" class="form-control border-0" name="search" id="search"
                        aria-describedby="searchHelper" placeholder="Search" />
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>

            </div>
        </nav>
    </div>


</header>
