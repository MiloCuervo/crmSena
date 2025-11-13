
<style>
:root {
    --nav-primary: #2e7d00;
    --nav-secondary: #2f8e2a;
    --nav-accent: #2f9e54;
}

.navbar-custom {
    background: linear-gradient(135deg, var(--nav-primary), var(--nav-secondary), var(--nav-accent));
    padding: 0.8rem 0;
    box-shadow: 0 4px 12px rgba(46, 125, 0, 0.15);
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
}

.navbar-brand-custom {
    display: flex;
    align-items: center;
    gap: 0.6rem;
    font-size: 1.5rem;
    font-weight: 700;
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 12px;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    transition: all 0.3s ease;
}

.navbar-brand-custom:hover {
    background: rgba(255, 255, 255, 0.2);
}

.navbar-brand-custom i {
    font-size: 1.8rem;
}

.navbar-content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
}

.navbar-nav-custom {
    display: flex;
    list-style: none;
    gap: 0.5rem;
    margin: 0;
    padding: 0;
    align-items: center;
}

.nav-item-custom {
    position: relative;
}

.nav-link-custom {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.7rem 1.3rem;
    color: rgba(255, 255, 255, 0.85);
    text-decoration: none;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.95rem;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.nav-link-custom::before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    width: 0;
    height: 3px;
    background: white;
    transform: translateX(-50%);
    transition: width 0.3s ease;
}

.nav-link-custom:hover {
    color: white;
    background: rgba(255, 255, 255, 0.15);
    transform: translateY(-2px);
}

.nav-link-custom:hover::before {
    width: 60%;
}

.nav-link-custom.active {
    color: white;
    background: rgba(255, 255, 255, 0.2);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.nav-link-custom.active::before {
    width: 60%;
}

.nav-link-custom i {
    font-size: 1.1rem;
}

body {
    padding-top: 70px;
}
</style>

<nav class="navbar-custom">
  <div class="container-fluid">
    <div class="navbar-content">
      <div class="navbar-brand-custom">
        <i class="bi bi-shield-check"></i>
        <span>SCG</span>
      </div>
      <!-- Debemos de incorporar el condicional para resaltar la página activa -->
      <ul class="navbar-nav-custom">
        <li class="nav-item-custom">
          <a class="nav-link-custom " href="/">
            <i class="bi bi-house-door-fill"></i>
            <span>Inicio</span>
          </a>
        </li>
        <li class="nav-item-custom">
          <a class="nav-link-custom active" href="/casos">
            <i class="bi bi-folder-fill"></i>
            <span>Casos</span>
          </a>
        </li>
        <li class="nav-item-custom">
          <a class="nav-link-custom" href="/informes">
            <i class="bi bi-file-earmark-text-fill"></i>
            <span>Informes</span>
          </a>
        </li>
        <li class="nav-item-custom">
          <a class="nav-link-custom" href="/usuario">
            <i class="bi bi-person-circle"></i>
            <span>Usuario</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>