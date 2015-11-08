<nav class="#ffcdd2 red lighten-1" role="navigation">
    <div class="nav-wrapper ">
        <a id="logo-container" href="#" class="brand-logo">&nbsp;&nbsp;Laravel-Tipuesearch</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/posts') }}">Posts</a></li>
            <li><a href="{{ url('/about') }}">About</a></li>
            <li>
                <div class="nav-wrapper">
                    <form action="{{ url('search-content') }}">
                        <div class="input-field">
                            <input type="search" name="q" id="tipue_search_input" required>
                            <label for="search"><i class="material-icons">search</i></label>
                            <i class="material-icons">close</i>
                        </div>
                    </form>
                </div>
            </li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/posts') }}">Posts</a></li>
            <li><a href="{{ url('/about') }}">About</a></li>
            <li>
                <div class="nav-wrapper" style="height: 7%;">
                    <form action="{{ url('search-content') }}">
                        <div class="input-field search-wrapper">
                            <input type="search" name="q" id="tipue_search_input" required>
                            <label for="search" ><i class="material-icons text-black" >search</i></label>
                            <i class="material-icons">close</i>
                        </div>
                    </form>
                </div>
            </li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>

</nav>