<nav class="navbar navbar-expand-lg bg-body-tertiary mb-3">
    <div class="container">
        <a href="{{ route('active-link.home') }}" class="navbar-brand">
            ActiveLink
        </a>

        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-collapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="{{ route('active-link.home') }}" class="nav-link {{ active_link('active-link.home', 'text-primary') }}">
                        Главная
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('active-link.orders') }}" class="nav-link {{ active_link('active-link.orders', 'text-primary') }}">
                        Заказы
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ active_link('active-link.settings*') }}" data-bs-toggle="dropdown">
                        Настройки
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('active-link.settings.profile') }}" class="dropdown-item {{ active_link('active-link.settings.profile') }}">
                                Профиль
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('active-link.settings.security') }}" class="dropdown-item {{ active_link('active-link.settings.security') }}">
                                Безопасность
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
