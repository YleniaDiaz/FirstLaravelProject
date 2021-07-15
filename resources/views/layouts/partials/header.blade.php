<header>
    <h1>Cursos</h1>
    <nav>
        <ul>
            <li>
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            </li>
            <li>
                <a href="{{ route('course.index') }}"
                    class="{{ request()->routeIs('course.*') ? 'active' : '' }}">Cursos</a>
            </li>
            <li>
                <a href="{{ route('aboutUs') }}"
                    class="{{ request()->routeIs('aboutUs') ? 'active' : '' }}">Nosotros</a>
            </li>
            <li>
                <a href="{{ route('contact.index') }}"
                    class="{{ request()->routeIs('contact.*') ? 'active' : '' }}">Contacto</a>
            </li>
        </ul>
    </nav>
</header>
