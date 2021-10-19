<template>
  <Head :title="title" />
  <jet-banner />
  <div
    class="hold-transition sidebar-mini layout-fixed"
    :class="[hideSidebarMini?'sidebar-collapse':'' ,darkMode?'dark-mode':'']"
  >
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <inertia-link
              class="nav-link"
              data-widget="pushmenu"
              href="#"
              role="button"
              @click="hideSidebarMini?hideSidebarMini=false:hideSidebarMini=true"
            >
              <i class="fas fa-bars" />
            </inertia-link>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <inertia-link
              href="index3.html"
              class="nav-link"
            >
              Home
            </inertia-link>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <inertia-link
              href="#"
              class="nav-link"
            >
              Contact
            </inertia-link>
          </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Navbar Search -->
          <li class="nav-item">
            <inertia-link
              class="nav-link"
              data-widget="navbar-search"
              href="#"
              role="button"
            >
              <i class="fas fa-search" />
            </inertia-link>
            <div class="navbar-search-block">
              <form class="form-inline">
                <div class="input-group input-group-sm">
                  <input
                    class="form-control form-control-navbar"
                    type="search"
                    placeholder="Search"
                    aria-label="Search"
                  >
                  <div class="input-group-append">
                    <button
                      class="btn btn-navbar"
                      type="submit"
                    >
                      <i class="fas fa-search" />
                    </button>
                    <button
                      class="btn btn-navbar"
                      type="button"
                      data-widget="navbar-search"
                    >
                      <i class="fas fa-times" />
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </li>

          <!-- Messages Dropdown Menu -->
          <li class="nav-item dropdown">
            <inertia-link
              class="nav-link"
              data-toggle="dropdown"
              href="#"
            >
              <i class="far fa-comments" />
              <span class="badge badge-danger navbar-badge">3</span>
            </inertia-link>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <inertia-link
                href="#"
                class="dropdown-item"
              >
                <!-- Message Start -->
                <div class="media">
                  <img
                    src="/dist/img/user1-128x128.jpg"
                    alt="User Avatar"
                    class="img-size-50 mr-3 img-circle"
                  >
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      Brad Diesel
                      <span class="float-right text-sm text-danger"><i class="fas fa-star" /></span>
                    </h3>
                    <p class="text-sm">
                      Call me whenever you can...
                    </p>
                    <p class="text-sm text-muted">
                      <i class="far fa-clock mr-1" /> 4 Hours Ago
                    </p>
                  </div>
                </div>
                <!-- Message End -->
              </inertia-link>
              <div class="dropdown-divider" />
              <inertia-link
                href="#"
                class="dropdown-item"
              >
                <!-- Message Start -->
                <div class="media">
                  <img
                    src="/dist/img/user8-128x128.jpg"
                    alt="User Avatar"
                    class="img-size-50 img-circle mr-3"
                  >
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      John Pierce
                      <span class="float-right text-sm text-muted"><i class="fas fa-star" /></span>
                    </h3>
                    <p class="text-sm">
                      I got your message bro
                    </p>
                    <p class="text-sm text-muted">
                      <i class="far fa-clock mr-1" /> 4 Hours Ago
                    </p>
                  </div>
                </div>
                <!-- Message End -->
              </inertia-link>
              <div class="dropdown-divider" />
              <inertia-link
                href="#"
                class="dropdown-item"
              >
                <!-- Message Start -->
                <div class="media">
                  <img
                    src="/dist/img/user3-128x128.jpg"
                    alt="User Avatar"
                    class="img-size-50 img-circle mr-3"
                  >
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      Nora Silvester
                      <span class="float-right text-sm text-warning"><i class="fas fa-star" /></span>
                    </h3>
                    <p class="text-sm">
                      The subject goes here
                    </p>
                    <p class="text-sm text-muted">
                      <i class="far fa-clock mr-1" /> 4 Hours Ago
                    </p>
                  </div>
                </div>
                <!-- Message End -->
              </inertia-link>
              <div class="dropdown-divider" />
              <inertia-link
                href="#"
                class="dropdown-item dropdown-footer"
              >
                See All Messages
              </inertia-link>
            </div>
          </li>
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
            <inertia-link
              class="nav-link"
              data-toggle="dropdown"
              href="#"
            >
              <i class="far fa-bell" />
              <span class="badge badge-warning navbar-badge">15</span>
            </inertia-link>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <span class="dropdown-item dropdown-header">15 Notifications</span>
              <div class="dropdown-divider" />
              <inertia-link
                href="#"
                class="dropdown-item"
              >
                <i class="fas fa-envelope mr-2" /> 4 new messages
                <span class="float-right text-muted text-sm">3 mins</span>
              </inertia-link>
              <div class="dropdown-divider" />
              <inertia-link
                href="#"
                class="dropdown-item"
              >
                <i class="fas fa-users mr-2" /> 8 friend requests
                <span class="float-right text-muted text-sm">12 hours</span>
              </inertia-link>
              <div class="dropdown-divider" />
              <inertia-link
                href="#"
                class="dropdown-item"
              >
                <i class="fas fa-file mr-2" /> 3 new reports
                <span class="float-right text-muted text-sm">2 days</span>
              </inertia-link>
              <div class="dropdown-divider" />
              <inertia-link
                href="#"
                class="dropdown-item dropdown-footer"
              >
                See All Notifications
              </inertia-link>
            </div>
          </li>
          <li class="nav-item">
            <inertia-link
              class="nav-link"
              data-widget="fullscreen"
              href="#"
              role="button"
            >
              <i class="fas fa-expand-arrows-alt" />
            </inertia-link>
          </li>
          <li class="nav-item">
            <inertia-link
              class="nav-link"
              data-widget="control-sidebar"
              data-controlsidebar-slide="true"
              href="#"
              role="button"
            >
              <i class="fas fa-th-large" />
            </inertia-link>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <inertia-link
          href="index3.html"
          class="brand-link"
        >
          <img
            src="/dist/img/AdminLTELogo.png"
            alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3"
            style="opacity: .8"
          >
          <span class="brand-text font-weight-light">AdminLTE 3</span>
        </inertia-link>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img
                src="/dist/img/user2-160x160.jpg"
                class="img-circle elevation-2"
                alt="User Image"
              >
            </div>
            <div class="info">
              <inertia-link
                href="#"
                class="d-block"
              >
                Alexander Pierce
              </inertia-link>
            </div>
          </div>

          <!-- SidebarSearch Form -->
          <div class="form-inline">
            <div
              class="input-group"
              data-widget="sidebar-search"
            >
              <input
                class="form-control form-control-sidebar"
                type="search"
                placeholder="Search"
                aria-label="Search"
              >
              <div class="input-group-append">
                <button class="btn btn-sidebar">
                  <i class="fas fa-search fa-fw" />
                </button>
              </div>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul
              class="nav nav-pills nav-sidebar flex-column"
              data-widget="treeview"
              role="menu"
              data-accordion="false"
            >
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li
                class="nav-item"
                :class="isOpen && isMenuOpen==0 ? 'menu-is-opening menu-open' :''"
                @click="openMenu(0)"
              >
                <inertia-link
                  class="nav-link active"
                >
                  <i class="nav-icon fas fa-tachometer-alt" />
                  <p>
                    Dashboard
                    <i class="right fas fa-angle-left" />
                  </p>
                </inertia-link>
                <ul class="nav nav-treeview">
                  <li
                    class="nav-item"
                    @click="darkMode?darkMode =false:darkMode=true"
                  >
                    <inertia-link
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>Dashboard  Dark Mode</p>
                    </inertia-link>
                  </li>
                  <li class="nav-item">
                    <inertia-link
                      :href="route('dashboard')"
                      class="nav-link active"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>Dashboard </p>
                    </inertia-link>
                  </li>
                </ul>
              </li>
              <li
                class="nav-item"
                :class="isOpen && isMenuOpen==1 ? 'menu-is-opening menu-open' :''"
                @click="openMenu(1)"
              >
                <inertia-link
                  class="nav-link"
                >
                  <i class="nav-icon fas fa-tree" />
                  <p>
                    UI Elements
                    <i class="fas fa-angle-left right" />
                  </p>
                </inertia-link>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <inertia-link
                      :href="route('ui.general')"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>General</p>
                    </inertia-link>
                  </li>
                  <li class="nav-item">
                    <inertia-link
                      href="pages/UI/buttons.html"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>Buttons</p>
                    </inertia-link>
                  </li>
                  <li class="nav-item">
                    <inertia-link
                      href="pages/UI/sliders.html"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>Sliders</p>
                    </inertia-link>
                  </li>
                  <li class="nav-item">
                    <inertia-link
                      href="pages/UI/modals.html"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>Modals & Alerts</p>
                    </inertia-link>
                  </li>
                  <li class="nav-item">
                    <inertia-link
                      href="pages/UI/navbar.html"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>Navbar & Tabs</p>
                    </inertia-link>
                  </li>
                  <li class="nav-item">
                    <inertia-link
                      href="pages/UI/timeline.html"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>Timeline</p>
                    </inertia-link>
                  </li>
                  <li class="nav-item">
                    <inertia-link
                      href="pages/UI/ribbons.html"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>Ribbons</p>
                    </inertia-link>
                  </li>
                </ul>
              </li>
              <li
                class="nav-item"
                :class="isOpen && isMenuOpen==2 ? 'menu-is-opening menu-open' :''"
                @click="openMenu(2)"
              >
                <inertia-link
                  href="#"
                  class="nav-link"
                >
                  <i class="nav-icon fas fa-edit" />
                  <p>
                    Forms
                    <i class="fas fa-angle-left right" />
                  </p>
                </inertia-link>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <inertia-link
                      href="pages/forms/general.html"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>General Elements</p>
                    </inertia-link>
                  </li>
                  <li class="nav-item">
                    <inertia-link
                      href="pages/forms/advanced.html"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>Advanced Elements</p>
                    </inertia-link>
                  </li>
                  <li class="nav-item">
                    <inertia-link
                      href="pages/forms/editors.html"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>Editors</p>
                    </inertia-link>
                  </li>
                  <li class="nav-item">
                    <inertia-link
                      href="pages/forms/validation.html"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>Validation</p>
                    </inertia-link>
                  </li>
                </ul>
              </li>
              <li
                class="nav-item"
                :class="isOpen && isMenuOpen==3 ? 'menu-is-opening menu-open' :''"
                @click="openMenu(3)"
              >
                <inertia-link
                  href="#"
                  class="nav-link"
                >
                  <i class="nav-icon fas fa-table" />
                  <p>
                    Tables
                    <i class="fas fa-angle-left right" />
                  </p>
                </inertia-link>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <inertia-link
                      href="pages/tables/simple.html"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>Simple Tables</p>
                    </inertia-link>
                  </li>
                  <li class="nav-item">
                    <inertia-link
                      href="pages/tables/data.html"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>DataTables</p>
                    </inertia-link>
                  </li>
                  <li class="nav-item">
                    <inertia-link
                      href="pages/tables/jsgrid.html"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>jsGrid</p>
                    </inertia-link>
                  </li>
                </ul>
              </li>
              <li class="nav-header">
                EXAMPLES
              </li>
              <li class="nav-item">
                <inertia-link
                  href="pages/kanban.html"
                  class="nav-link"
                >
                  <i class="nav-icon fas fa-columns" />
                  <p>
                    Kanban Board
                  </p>
                </inertia-link>
              </li>
              <li
                class="nav-item"
                :class="isOpen && isMenuOpen==4 ? 'menu-is-opening menu-open' :''"
                @click="openMenu(4)"
              >
                <inertia-link
                  href="#"
                  class="nav-link"
                >
                  <i class="nav-icon far fa-envelope" />
                  <p>
                    Mailbox
                    <i class="fas fa-angle-left right" />
                  </p>
                </inertia-link>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <inertia-link
                      href="pages/mailbox/mailbox.html"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>Inbox</p>
                    </inertia-link>
                  </li>
                  <li class="nav-item">
                    <inertia-link
                      href="pages/mailbox/compose.html"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>Compose</p>
                    </inertia-link>
                  </li>
                  <li class="nav-item">
                    <inertia-link
                      href="pages/mailbox/read-mail.html"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>Read</p>
                    </inertia-link>
                  </li>
                </ul>
              </li>
              <li
                class="nav-item"
                :class="isOpen && isMenuOpen==5 ? 'menu-is-opening menu-open' :''"
                @click="openMenu(5)"
              >
                <inertia-link
                  href="#"
                  class="nav-link"
                >
                  <i class="nav-icon fas fa-book" />
                  <p>
                    Pages
                    <i class="fas fa-angle-left right" />
                  </p>
                </inertia-link>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <inertia-link
                      href="pages/examples/invoice.html"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>Invoice</p>
                    </inertia-link>
                  </li>
                  <li class="nav-item">
                    <inertia-link
                      href="pages/examples/profile.html"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>Profile</p>
                    </inertia-link>
                  </li>
                  <li class="nav-item">
                    <inertia-link
                      href="pages/examples/e-commerce.html"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>E-commerce</p>
                    </inertia-link>
                  </li>
                  <li class="nav-item">
                    <inertia-link
                      href="pages/examples/projects.html"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>Projects</p>
                    </inertia-link>
                  </li>
                  <li class="nav-item">
                    <inertia-link
                      href="pages/examples/project-add.html"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>Project Add</p>
                    </inertia-link>
                  </li>
                  <li class="nav-item">
                    <inertia-link
                      href="pages/examples/project-edit.html"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>Project Edit</p>
                    </inertia-link>
                  </li>
                  <li class="nav-item">
                    <inertia-link
                      href="pages/examples/project-detail.html"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>Project Detail</p>
                    </inertia-link>
                  </li>
                  <li class="nav-item">
                    <inertia-link
                      href="pages/examples/contacts.html"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>Contacts</p>
                    </inertia-link>
                  </li>
                  <li class="nav-item">
                    <inertia-link
                      href="pages/examples/faq.html"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>FAQ</p>
                    </inertia-link>
                  </li>
                  <li class="nav-item">
                    <inertia-link
                      href="pages/examples/contact-us.html"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>Contact us</p>
                    </inertia-link>
                  </li>
                </ul>
              </li>
              <li
                class="nav-item"
                :class="isOpen && isMenuOpen==6 ? 'menu-is-opening menu-open' :''"
                @click="openMenu(6)"
              >
                <inertia-link
                  href="#"
                  class="nav-link"
                >
                  <i class="nav-icon far fa-plus-square" />
                  <p>
                    Extras
                    <i class="fas fa-angle-left right" />
                  </p>
                </inertia-link>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <inertia-link
                      href="#"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>
                        Login & Register v1
                        <i class="fas fa-angle-left right" />
                      </p>
                    </inertia-link>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <inertia-link
                          href="pages/examples/login.html"
                          class="nav-link"
                        >
                          <i class="far fa-circle nav-icon" />
                          <p>Login v1</p>
                        </inertia-link>
                      </li>
                      <li class="nav-item">
                        <inertia-link
                          href="pages/examples/register.html"
                          class="nav-link"
                        >
                          <i class="far fa-circle nav-icon" />
                          <p>Register v1</p>
                        </inertia-link>
                      </li>
                      <li class="nav-item">
                        <inertia-link
                          href="pages/examples/forgot-password.html"
                          class="nav-link"
                        >
                          <i class="far fa-circle nav-icon" />
                          <p>Forgot Password v1</p>
                        </inertia-link>
                      </li>
                      <li class="nav-item">
                        <inertia-link
                          href="pages/examples/recover-password.html"
                          class="nav-link"
                        >
                          <i class="far fa-circle nav-icon" />
                          <p>Recover Password v1</p>
                        </inertia-link>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <inertia-link
                      href="#"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>
                        Login & Register v2
                        <i class="fas fa-angle-left right" />
                      </p>
                    </inertia-link>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <inertia-link
                          href="pages/examples/login-v2.html"
                          class="nav-link"
                        >
                          <i class="far fa-circle nav-icon" />
                          <p>Login v2</p>
                        </inertia-link>
                      </li>
                      <li class="nav-item">
                        <inertia-link
                          href="pages/examples/register-v2.html"
                          class="nav-link"
                        >
                          <i class="far fa-circle nav-icon" />
                          <p>Register v2</p>
                        </inertia-link>
                      </li>
                      <li class="nav-item">
                        <inertia-link
                          href="pages/examples/forgot-password-v2.html"
                          class="nav-link"
                        >
                          <i class="far fa-circle nav-icon" />
                          <p>Forgot Password v2</p>
                        </inertia-link>
                      </li>
                      <li class="nav-item">
                        <inertia-link
                          href="pages/examples/recover-password-v2.html"
                          class="nav-link"
                        >
                          <i class="far fa-circle nav-icon" />
                          <p>Recover Password v2</p>
                        </inertia-link>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <inertia-link
                      href="pages/examples/lockscreen.html"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>Lockscreen</p>
                    </inertia-link>
                  </li>
                  <li class="nav-item">
                    <inertia-link
                      href="pages/examples/legacy-user-menu.html"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>Legacy User Menu</p>
                    </inertia-link>
                  </li>
                  <li class="nav-item">
                    <inertia-link
                      href="pages/examples/language-menu.html"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>Language Menu</p>
                    </inertia-link>
                  </li>
                  <li class="nav-item">
                    <inertia-link
                      href="pages/examples/404.html"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>Error 404</p>
                    </inertia-link>
                  </li>
                  <li class="nav-item">
                    <inertia-link
                      href="pages/examples/500.html"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>Error 500</p>
                    </inertia-link>
                  </li>
                  <li class="nav-item">
                    <inertia-link
                      href="pages/examples/pace.html"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>Pace</p>
                    </inertia-link>
                  </li>
                  <li class="nav-item">
                    <inertia-link
                      href="pages/examples/blank.html"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>Blank Page</p>
                    </inertia-link>
                  </li>
                  <li class="nav-item">
                    <inertia-link
                      href="starter.html"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>Starter Page</p>
                    </inertia-link>
                  </li>
                </ul>
              </li>
              <li
                class="nav-item"
                :class="isOpen && isMenuOpen==7 ? 'menu-is-opening menu-open' :''"
                @click="openMenu(7)"
              >
                <inertia-link
                  href="#"
                  class="nav-link"
                >
                  <i class="nav-icon fas fa-search" />
                  <p>
                    Search
                    <i class="fas fa-angle-left right" />
                  </p>
                </inertia-link>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <inertia-link
                      href="pages/search/enhanced.html"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon" />
                      <p>Enhanced</p>
                    </inertia-link>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <slot />
      </div>

      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <inertia-link href="https://adminlte.io">AdminLTE.io  </inertia-link>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 3.2.0-rc
        </div>
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
  </div>
</template>

<script>
import JetBanner from '@/Jetstream/Banner.vue'

export default {

  components: {
    JetBanner
  },
  props: {
    title: String
  },
  data () {
    return {
      hideSidebarMini: false,
      darkMode: false,
      isOpen: false,
      isMenuOpen: 0
    }
  },
  mounted () {

  },
  methods: {
    switchToTeam (team) {
      this.$inertia.put(route('current-team.update'), {
        team_id: team.id
      }, {
        preserveState: false
      })
    },
    logout () {
      this.$inertia.post(route('logout'))
    },
    openMenu (key) {
      this.isOpen ? this.isOpen = false && (this.isMenuOpen = 0) : this.isOpen = true && (this.isMenuOpen = key)
    }
  }
}
</script>
