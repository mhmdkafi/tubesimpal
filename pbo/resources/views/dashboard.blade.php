<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <title>Dashboard Sidebar Menu | Dark-Light </title>
    </head>

    <body>
        <aside class="sidebar">
            <header class="sidebar-header">
                <a href="#" class="header-logo">
                    <img src="logo.png" alt="Lapangin">
                </a>
                <button class="toggler sidebar-toggler">
                    <span class="material-symbols-rounded">chevron_left</span>
                </button>
            </header>
        
            <nav class="sidebar-nav">
                <ul class="nav-list primary-nav">
                    <li class="nav-item">
                        <a href="dashboard.html" class="nav-link">
                            <span class="nav-icon material-symbols-rounded">dashboard</span>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="calendar.html" class="nav-link">
                            <span class="nav-icon material-symbols-rounded">today</span>
                            <span class="nav-label">Calendar</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="notifications.html" class="nav-link">
                            <span class="nav-icon material-symbols-rounded">notifications</span>
                            <span class="nav-label">Notifications</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="history.html" class="nav-link">
                            <span class="nav-icon material-symbols-rounded">history</span>
                            <span class="nav-label">History</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="settings.html" class="nav-link">
                            <span class="nav-icon material-symbols-rounded">settings</span>
                            <span class="nav-label">Settings</span>
                        </a>
                    </li>
                </ul>
        
                <ul class="nav-list secondary-nav">
                    <li class="nav-item">
                        <a href="profile.html" class="nav-link">
                            <span class="nav-icon material-symbols-rounded">account_circle</span>
                            <span class="nav-label">Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.html" class="nav-link">
                            <span class="nav-icon material-symbols-rounded">logout</span>
                            <span class="nav-label">Logout</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>
        

        <header class="header2">
        <h1>Informasi Beasiswa Kuliah</h1>
    </header>

    <section class="news-section">
        <h2>Berita Pembukaan Beasiswa</h2>
        @foreach ($news as $item)
            <article class="news-item">
                <h3>{{ $item->title }}</h3>
                <p>{{ Str::limit($item->content, 150) }}</p>
                <a href="#">Baca Selengkapnya</a>
            </article>
        @endforeach
    </section>

    <section class="articles-section">
        <h2>Artikel Beasiswa</h2>
        @foreach ($articles as $item)
            <article class="article-item">
                <h3>{{ $item->title }}</h3>
                <p>{{ Str::limit($item->content, 150) }}</p>
                <a href="#">Baca Selengkapnya</a>
            </article>
        @endforeach
    </section>

    <footer>
        <p>&copy; 2024 BeasiswaKita</p>
    </footer>
        <script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>