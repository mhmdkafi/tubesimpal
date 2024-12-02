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
        

        <section class="home">
            <section class="container2 forms">
                <!-- Login Form -->
                <div class="grat" >
                    <img src="image/graduation-hat.jpg" alt="BeasiswaKita Logo">
                </div>
            </div>
                <div class="form login">
                    <div class="form-content">
                        <h1 class="head">Login</h1>
                        <form id="signup-form" method='post' action='/register'>
                            @csrf
                            <div class="field input-field">
                                <input type="text" name="name" placeholder="Username" class="input" required>
                            </div>
                            <div class="field input-field">
                                <input type="email" name="email" placeholder="Email" class="input" required>
                            </div>
                            <div class="field input-field">
                                <input type="text" name="phone" placeholder="Phone Number" class="input" required>
                            </div>
                            <div class="field input-field">
                                <input type="password" name="password" placeholder="Create password" class="password" required>
                            </div>
                            <div class="field button-field">
                                <button type="submit">Signup</button>
                            </div>
                        </form>
                        <div class="form-link">
                            <span>Already have an account? <a href="/login" class="link login-link">Login</a></span>
                        </div>
                    </div>
                </div>
            </section>    
        </section>

    <script src="js/script.js"></script>

</body>
</html>
