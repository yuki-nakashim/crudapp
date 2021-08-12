<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <link href="{{ url('css/style.css') }}" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="{{ url('css/tabulator.min.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ url('js/tabulator.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/jquery_wrapper.min.js') }}"></script>
</head>

<body>
    <div class="inner">
        <header>
            <div class="header-left">
                <h1>Backend Test</h1>
                <i class="fas fa-bars"></i>
            </div>
            <div class="header-right">
                <i class="fas fa-sign-out-alt"></i>
            </div>
        </header>

        <main>
            <aside>
                <div class="user-icon">
                    <div class="user-icon-left">
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <div class="user-icon-right">
                        <h3>Admin</h3>
                        <div class="user-icon-right-content">
                            <i class="fas fa-circle"></i>
                            <span>Online</span>
                        </div>
                    </div>
                </div>

                <div class="nav">
                    <h3>MAIN NAVIGATION</h3>
                    <div class="nav-list">
                        <i class="fas fa-user"></i>
                        <span class="nav-list-content">User</span>
                    </div>
                    <a href="{{ route('posts.index') }}" class="nav-list-menu">
                        <i class="far fa-building"></i>
                        <span class="nav-list-content">Companies</span>
                    </a>
                    <a href="{{ route('posts.create') }}" class="nav-list-menu">
                        <i class="far fa-circle"></i>
                        <span class="nav-list-content">Add/Edit</span>
                    </a>
                    <a href="{{ route('posts.index') }}" class="nav-list-menu">
                        <i class="far fa-circle"></i>
                        <span class="nav-list-content">List</span>
                    </a>
                </div>
            </aside>

            <div class="companies">
                {{ $slot }}
            </div>
        </main>
    </div>
</body>
</html>
