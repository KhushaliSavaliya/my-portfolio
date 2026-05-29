<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Dashboard') — KS Admin</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500&family=JetBrains+Mono:wght@400;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body class="admin-body">

    <div class="admin-layout" id="adminLayout">

        {{-- ── Sidebar ── --}}
        <aside class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <a href="{{ route('admin.dashboard') }}" class="sidebar-logo">
                    <span class="logo-bracket">{</span>
                    <span class="logo-text">KS</span>
                    <span class="logo-bracket">}</span>
                    <span class="logo-label">Admin</span>
                </a>
                <button class="sidebar-close" id="sidebarClose" aria-label="Close sidebar">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <div class="sidebar-user">
                <div class="sidebar-avatar">{{ substr(auth()->user()->name, 0, 1) }}</div>
                <div>
                    <div class="sidebar-username">{{ auth()->user()->name }}</div>
                    <div class="sidebar-role">Administrator</div>
                </div>
            </div>

            <nav class="sidebar-nav">
                <div class="nav-group-label">Main</div>
                <a href="{{ route('admin.dashboard') }}"
                    class="sidebar-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i class="fas fa-grid-2"></i> Dashboard
                </a>

                <div class="nav-group-label">Content</div>
                <a href="{{ route('admin.projects.index') }}"
                    class="sidebar-link {{ request()->routeIs('admin.projects.*') ? 'active' : '' }}">
                    <i class="fas fa-code-branch"></i> Projects
                    <span class="nav-count">{{ \App\Models\Project::count() }}</span>
                </a>
                <a href="{{ route('admin.experiences.index') }}"
                    class="sidebar-link {{ request()->routeIs('admin.experiences.*') ? 'active' : '' }}">
                    <i class="fas fa-briefcase"></i> Experience
                </a>
                <a href="{{ route('admin.skills.index') }}"
                    class="sidebar-link {{ request()->routeIs('admin.skills.*') ? 'active' : '' }}">
                    <i class="fas fa-layer-group"></i> Skills
                </a>

                <div class="nav-group-label">Inbox</div>
                <a href="{{ route('admin.messages.index') }}"
                    class="sidebar-link {{ request()->routeIs('admin.messages.*') ? 'active' : '' }}">
                    <i class="fas fa-envelope"></i> Messages
                    @php $unread = \App\Models\ContactMessage::unread()->count(); @endphp
                    @if ($unread > 0)
                        <span class="nav-badge">{{ $unread }}</span>
                    @endif
                </a>

                <div class="nav-group-label">Portfolio</div>
                <a href="{{ route('home') }}" target="_blank" class="sidebar-link">
                    <i class="fas fa-external-link-alt"></i> View Portfolio
                </a>
            </nav>

            <div class="sidebar-footer">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="sidebar-logout">
                        <i class="fas fa-sign-out-alt"></i> Sign Out
                    </button>
                </form>
            </div>
        </aside>

        {{-- ── Main ── --}}
        <div class="admin-main" id="adminMain">

            {{-- Top Bar --}}
            <header class="admin-topbar">
                <div class="topbar-left">
                    <button class="topbar-menu-btn" id="sidebarToggle" aria-label="Toggle sidebar">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="topbar-breadcrumb">
                        <span>Admin</span>
                        <i class="fas fa-chevron-right"></i>
                        <span>@yield('breadcrumb', 'Dashboard')</span>
                    </div>
                </div>
                <div class="topbar-right">
                    <button class="theme-toggle-admin" id="themeToggleAdmin" aria-label="Toggle theme">
                        <i class="fas fa-sun sun-icon"></i>
                        <i class="fas fa-moon moon-icon"></i>
                    </button>
                    <a href="{{ route('home') }}" target="_blank" class="topbar-preview-btn">
                        <i class="fas fa-eye"></i> Preview
                    </a>
                </div>
            </header>

            {{-- Flash Messages --}}
            @if (session('success'))
                <div class="flash flash-success" id="flashMsg">
                    <i class="fas fa-check-circle"></i>
                    {{ session('success') }}
                    <button onclick="this.parentElement.remove()" class="flash-close"><i
                            class="fas fa-times"></i></button>
                </div>
            @endif
            @if (session('error'))
                <div class="flash flash-error" id="flashMsg">
                    <i class="fas fa-exclamation-circle"></i>
                    {{ session('error') }}
                    <button onclick="this.parentElement.remove()" class="flash-close"><i
                            class="fas fa-times"></i></button>
                </div>
            @endif

            {{-- Page Content --}}
            <main class="admin-content">
                @yield('content')
            </main>

        </div>{{-- /admin-main --}}
    </div>{{-- /admin-layout --}}

    {{-- Sidebar Overlay (mobile) --}}
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <script src="{{ asset('js/admin.js') }}"></script>
    @stack('scripts')
</body>

</html>
