<?= view('partes/header') ?>
    <!-- -------------------------------------------------------------- -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- -------------------------------------------------------------- -->
    <div class="preloader">
      <svg
        class="tea lds-ripple"
        width="37"
        height="48"
        viewbox="0 0 37 48"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M27.0819 17H3.02508C1.91076 17 1.01376 17.9059 1.0485 19.0197C1.15761 22.5177 1.49703 29.7374 2.5 34C4.07125 40.6778 7.18553 44.8868 8.44856 46.3845C8.79051 46.79 9.29799 47 9.82843 47H20.0218C20.639 47 21.2193 46.7159 21.5659 46.2052C22.6765 44.5687 25.2312 40.4282 27.5 34C28.9757 29.8188 29.084 22.4043 29.0441 18.9156C29.0319 17.8436 28.1539 17 27.0819 17Z"
          stroke="#2962FF"
          stroke-width="2"
        ></path>
        <path
          d="M29 23.5C29 23.5 34.5 20.5 35.5 25.4999C36.0986 28.4926 34.2033 31.5383 32 32.8713C29.4555 34.4108 28 34 28 34"
          stroke="#2962FF"
          stroke-width="2"
        ></path>
        <path
          id="teabag"
          fill="#2962FF"
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M16 25V17H14V25H12C10.3431 25 9 26.3431 9 28V34C9 35.6569 10.3431 37 12 37H18C19.6569 37 21 35.6569 21 34V28C21 26.3431 19.6569 25 18 25H16ZM11 28C11 27.4477 11.4477 27 12 27H18C18.5523 27 19 27.4477 19 28V34C19 34.5523 18.5523 35 18 35H12C11.4477 35 11 34.5523 11 34V28Z"
        ></path>
        <path
          id="steamL"
          d="M17 1C17 1 17 4.5 14 6.5C11 8.5 11 12 11 12"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke="#2962FF"
        ></path>
        <path
          id="steamR"
          d="M21 6C21 6 21 8.22727 19 9.5C17 10.7727 17 13 17 13"
          stroke="#2962FF"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
        ></path>
      </svg>
    </div>
    <!-- -------------------------------------------------------------- -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- -------------------------------------------------------------- -->
    <div id="main-wrapper">
      <!-- -------------------------------------------------------------- -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- -------------------------------------------------------------- -->
      <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a
              class="nav-toggler waves-effect waves-light d-block d-md-none"
              href="javascript:void(0)"
            >
              <i class="ri-close-line fs-6 ri-menu-2-line"></i>
            </a>
            <!-- -------------------------------------------------------------- -->
            <!-- Logo -->
            <!-- -------------------------------------------------------------- -->
            <a class="navbar-brand" href="index.html">
              <!-- Logo icon -->
              <b class="logo-icon">
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <img src="../../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                <!-- Light Logo icon -->
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
              <span class="logo-text">
                <!-- dark Logo text -->
             
                <!-- Light Logo text -->
              </span>
            </a>
            <!-- -------------------------------------------------------------- -->
            <!-- End Logo -->
            <!-- -------------------------------------------------------------- -->
            <!-- -------------------------------------------------------------- -->
            <!-- Toggle which is visible on mobile only -->
            <!-- -------------------------------------------------------------- -->
            <a
              class="topbartoggler d-block d-md-none waves-effect waves-light"
              href="javascript:void(0)"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
              ><i class="ri-more-line fs-6"></i
            ></a>
          </div>
          <!-- -------------------------------------------------------------- -->
          <!-- End Logo -->
          <!-- -------------------------------------------------------------- -->
          <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <!-- -------------------------------------------------------------- -->
            <!-- toggle and nav items -->
            <!-- -------------------------------------------------------------- -->
            <ul class="navbar-nav me-auto">
              <li class="nav-item d-none d-md-block">
                <a
                  class="nav-link sidebartoggler waves-effect waves-light"
                  href="javascript:void(0)"
                  data-sidebartype="mini-sidebar"
                  ><i data-feather="menu" class="feather-sm"></i
                ></a>
              </li>
              <!-- -------------------------------------------------------------- -->
              <!-- mega menu -->
              <!-- -------------------------------------------------------------- -->
              <li class="nav-item dropdown mega-dropdown">
                <a
                  class="nav-link dropdown-toggle waves-effect waves-dark"
                  role="button"
                  href="#"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span class="d-none d-md-block"
                    >Mega <i data-feather="chevron-down" class="feather-sm"></i
                  ></span>
                  <span class="d-block d-md-none"><i class="ri-keyboard-line"></i></span>
                </a>
                <div class="dropdown-menu dropdown-menu-animate-up">
                  <div class="mega-dropdown-menu row">
                    <div class="col-lg-3 col-xl-2 mb-4">
                      <h4 class="mb-3">Carousel</h4>
                      <!-- CAROUSEL -->
                      <div
                        id="carouselExampleControls"
                        class="carousel slide carousel-dark"
                        data-bs-ride="carousel"
                      >
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img
                              class="d-block img-fluid"
                              src="../../assets/images/big/img1.jpg"
                              alt="First slide"
                            />
                          </div>
                          <div class="carousel-item">
                            <img
                              class="d-block img-fluid"
                              src="../../assets/images/big/img2.jpg"
                              alt="Second slide"
                            />
                          </div>
                          <div class="carousel-item">
                            <img
                              class="d-block img-fluid"
                              src="../../assets/images/big/img3.jpg"
                              alt="Third slide"
                            />
                          </div>
                        </div>
                        <a
                          class="carousel-control-prev"
                          href="#carouselExampleControls"
                          role="button"
                          data-bs-slide="prev"
                        >
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </a>
                        <a
                          class="carousel-control-next"
                          href="#carouselExampleControls"
                          role="button"
                          data-bs-slide="next"
                        >
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </a>
                      </div>
                      <!-- End CAROUSEL -->
                    </div>
                    <div class="col-lg-3 mb-4">
                      <h4 class="mb-3">Accordian</h4>
                      <!-- Accordian -->
                      <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingOne">
                            <button
                              class="accordion-button collapsed"
                              type="button"
                              data-bs-toggle="collapse"
                              data-bs-target="#flush-collapseOne"
                              aria-expanded="false"
                              aria-controls="flush-collapseOne"
                            >
                              Accordion Item #1
                            </button>
                          </h2>
                          <div
                            id="flush-collapseOne"
                            class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne"
                            data-bs-parent="#accordionFlushExample"
                          >
                            <div class="accordion-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                              terry richardson ad squid.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingTwo">
                            <button
                              class="accordion-button collapsed"
                              type="button"
                              data-bs-toggle="collapse"
                              data-bs-target="#flush-collapseTwo"
                              aria-expanded="false"
                              aria-controls="flush-collapseTwo"
                            >
                              Accordion Item #2
                            </button>
                          </h2>
                          <div
                            id="flush-collapseTwo"
                            class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo"
                            data-bs-parent="#accordionFlushExample"
                          >
                            <div class="accordion-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                              terry richardson ad squid.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingThree">
                            <button
                              class="accordion-button collapsed"
                              type="button"
                              data-bs-toggle="collapse"
                              data-bs-target="#flush-collapseThree"
                              aria-expanded="false"
                              aria-controls="flush-collapseThree"
                            >
                              Accordion Item #3
                            </button>
                          </h2>
                          <div
                            id="flush-collapseThree"
                            class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree"
                            data-bs-parent="#accordionFlushExample"
                          >
                            <div class="accordion-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                              terry richardson ad squid.
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                      <h4 class="mb-3">Contact Us</h4>
                      <!-- Contact -->
                      <form>
                        <div class="mb-3 form-floating">
                          <input
                            type="text"
                            class="form-control"
                            id="exampleInputname1"
                            placeholder="Enter Name"
                          />
                          <label>Enter Name</label>
                        </div>
                        <div class="mb-3 form-floating">
                          <input type="email" class="form-control" placeholder="Enter email" />
                          <label>Enter Email address</label>
                        </div>
                        <div class="mb-3 form-floating">
                          <textarea
                            class="form-control"
                            id="exampleTextarea"
                            rows="3"
                            placeholder="Message"
                          ></textarea>
                          <label>Enter Message</label>
                        </div>
                        <button type="submit" class="btn px-4 rounded-pill btn-info">Submit</button>
                      </form>
                    </div>
                    <div class="col-lg-3 col-xlg-4 mb-4">
                      <h4 class="mb-3">List style</h4>
                      <!-- List style -->
                      <ul class="list-style-none">
                        <li>
                          <a href="#"
                            ><i
                              data-feather="check-circle"
                              class="feather-sm text-success me-2"
                            ></i>
                            You can give link</a
                          >
                        </li>
                        <li>
                          <a href="#"
                            ><i
                              data-feather="check-circle"
                              class="feather-sm text-success me-2"
                            ></i>
                            Give link</a
                          >
                        </li>
                        <li>
                          <a href="#"
                            ><i
                              data-feather="check-circle"
                              class="feather-sm text-success me-2"
                            ></i>
                            Another Give link</a
                          >
                        </li>
                        <li>
                          <a href="#"
                            ><i
                              data-feather="check-circle"
                              class="feather-sm text-success me-2"
                            ></i>
                            Forth link</a
                          >
                        </li>
                        <li>
                          <a href="#"
                            ><i
                              data-feather="check-circle"
                              class="feather-sm text-success me-2"
                            ></i>
                            Another fifth link</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span class="d-none d-md-block"
                    >Calendario <i data-feather="chevron-down" class="feather-sm"></i
                  ></span>
                  <span class="d-block d-md-none"
                    ><i data-feather="plus" class="feather-sm"></i
                  ></span>
                </a>
                <div
                  class="dropdown-menu dropdown-menu-animate-up"
                  aria-labelledby="navbarDropdown"
                >
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <!-- -------------------------------------------------------------- -->
              <!-- Search -->
              <!-- -------------------------------------------------------------- -->
              <li class="nav-item search-box">
                <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"
                  ><i data-feather="search" class="feather-sm"></i
                ></a>
                <form class="app-search position-absolute">
                  <input type="text" class="form-control" placeholder="Search &amp; enter" />
                  <a class="srh-btn"><i data-feather="x" class="feather-sm"></i></a>
                </form>
              </li>
            </ul>

            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown2"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="flag-icon flag-icon-us"></i>
                </a>
                <div
                  class="dropdown-menu dropdown-menu-right dropdown-menu-animate-up"
                  aria-labelledby="navbarDropdown2"
                >
                  <a class="dropdown-item" href="#"
                    ><i class="me-2 flag-icon flag-icon-us"></i> English</a
                  >
                  <a class="dropdown-item" href="#"
                    ><i class="me-2 flag-icon flag-icon-fr"></i> French</a
                  >
                  <a class="dropdown-item" href="#"
                    ><i class="me-2 flag-icon flag-icon-es"></i> Spanish</a
                  >
                  <a class="dropdown-item" href="#"
                    ><i class="me-2 flag-icon flag-icon-de"></i> German</a
                  >
                </div>
              </li>
              <!-- -------------------------------------------------------------- -->
              <!-- Comment -->
              <!-- -------------------------------------------------------------- -->
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle waves-effect waves-dark"
                  href=""
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i data-feather="bell" class="feather-sm"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end mailbox dropdown-menu-animate-up">
                  <span class="with-arrow"><span class="bg-primary"></span></span>
                  <ul class="list-style-none">
                    <li>
                      <div class="drop-title bg-primary text-white">
                        <h4 class="mb-0 mt-1">4 Nuevas</h4>
                        <span class="fw-light">Notificaciones</span>
                      </div>
                    </li>
                    <li>
                      <div class="message-center notifications">
                        <!-- Message -->
                        <a href="#" class="message-item">
                          <span class="btn btn-light-danger text-danger btn-circle">
                            <i data-feather="link" class="feather-sm fill-white"></i>
                          </span>
                          <div class="mail-contnet">
                            <h5 class="message-title">Luanch Admin</h5>
                            <span class="mail-desc">Just see the my new admin!</span>
                            <span class="time">9:30 AM</span>
                          </div>
                        </a>
                        <!-- Message -->
                        <a href="#" class="message-item">
                          <span class="btn btn-light-success text-success btn-circle">
                            <i data-feather="calendar" class="feather-sm fill-white"></i>
                          </span>
                          <div class="mail-contnet">
                            <h5 class="message-title">Event today</h5>
                            <span class="mail-desc">Just a reminder that you have event</span>
                            <span class="time">9:10 AM</span>
                          </div>
                        </a>
                        <!-- Message -->
                        <a href="#" class="message-item">
                          <span class="btn btn-light-info text-info btn-circle">
                            <i data-feather="settings" class="feather-sm fill-white"></i>
                          </span>
                          <div class="mail-contnet">
                            <h5 class="message-title">Settings</h5>
                            <span class="mail-desc"
                              >You can customize this template as you want</span
                            >
                            <span class="time">9:08 AM</span>
                          </div>
                        </a>
                        <!-- Message -->
                        <a href="#" class="message-item">
                          <span class="btn btn-light-primary text-primary btn-circle">
                            <i data-feather="users" class="feather-sm fill-white"></i>
                          </span>
                          <div class="mail-contnet">
                            <h5 class="message-title">Pavan kumar</h5>
                            <span class="mail-desc">Just see the my admin!</span>
                            <span class="time">9:02 AM</span>
                          </div>
                        </a>
                      </div>
                    </li>
                    <li>
                      <a class="nav-link text-center mb-1 text-dark" href="#">
                        <strong>Check all notifications</strong>
                        <i data-feather="chevron-right" class="feather-sm"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <!-- -------------------------------------------------------------- -->
              <!-- End Comment -->
              <!-- -------------------------------------------------------------- -->
              <!-- -------------------------------------------------------------- -->
              <!-- Messages -->
              <!-- -------------------------------------------------------------- -->
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle waves-effect waves-dark"
                  href=""
                  id="2"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i data-feather="message-square" class="feather-sm"></i>
                </a>
                <div
                  class="dropdown-menu dropdown-menu-end mailbox dropdown-menu-animate-up"
                  aria-labelledby="2"
                >
                  <span class="with-arrow"><span class="bg-danger"></span></span>
                  <ul class="list-style-none">
                    <li>
                      <div class="drop-title text-white bg-danger">
                        <h4 class="mb-0 mt-1">5 New</h4>
                        <span class="fw-light">Messages</span>
                      </div>
                    </li>
                    <li>
                      <div class="message-center message-body">
                        <!-- Message -->
                        <a href="#" class="message-item">
                          <span class="user-img">
                            <img
                              src="../../assets/images/users/1.jpg"
                              alt="user"
                              class="rounded-circle"
                            />
                            <span class="profile-status online pull-right"></span>
                          </span>
                          <div class="mail-contnet">
                            <h5 class="message-title">Pavan kumar</h5>
                            <span class="mail-desc">Just see the my admin!</span>
                            <span class="time">9:30 AM</span>
                          </div>
                        </a>
                        <!-- Message -->
                        <a href="#" class="message-item">
                          <span class="user-img">
                            <img
                              src="../../assets/images/users/2.jpg"
                              alt="user"
                              class="rounded-circle"
                            />
                            <span class="profile-status busy pull-right"></span>
                          </span>
                          <div class="mail-contnet">
                            <h5 class="message-title">Sonu Nigam</h5>
                            <span class="mail-desc">I've sung a song! See you at</span>
                            <span class="time">9:10 AM</span>
                          </div>
                        </a>
                        <!-- Message -->
                        <a href="#" class="message-item">
                          <span class="user-img">
                            <img
                              src="../../assets/images/users/3.jpg"
                              alt="user"
                              class="rounded-circle"
                            />
                            <span class="profile-status away pull-right"></span>
                          </span>
                          <div class="mail-contnet">
                            <h5 class="message-title">Arijit Sinh</h5>
                            <span class="mail-desc">I am a singer!</span>
                            <span class="time">9:08 AM</span>
                          </div>
                        </a>
                        <!-- Message -->
                        <a href="#" class="message-item">
                          <span class="user-img">
                            <img
                              src="../../assets/images/users/4.jpg"
                              alt="user"
                              class="rounded-circle"
                            />
                            <span class="profile-status offline pull-right"></span>
                          </span>
                          <div class="mail-contnet">
                            <h5 class="message-title">Pavan kumar</h5>
                            <span class="mail-desc">Just see the my admin!</span>
                            <span class="time">9:02 AM</span>
                          </div>
                        </a>
                      </div>
                    </li>
                    <li>
                      <a class="nav-link text-center link text-dark" href="#">
                        <b>See all e-Mails</b>
                        <i data-feather="chevron-right" class="feather-sm"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <!-- -------------------------------------------------------------- -->
              <!-- End Messages -->
              <!-- -------------------------------------------------------------- -->
              <!-- -------------------------------------------------------------- -->
              <!-- User profile and search -->
              <!-- -------------------------------------------------------------- -->
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic"
                  href=""
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  ><img
                    src="../../assets/images/users/1.jpg"
                    alt="user"
                    class="rounded-circle"
                    width="31"
                /></a>
                <div class="dropdown-menu dropdown-menu-end user-dd animated flipInY">
                  <span class="with-arrow"><span class="bg-primary"></span></span>
                  <div class="d-flex no-block align-items-center p-3 bg-primary text-white mb-2">
                    <div class="">
                      <img
                        src="../../assets/images/users/1.jpg"
                        alt="user"
                        class="rounded-circle"
                        width="60"
                      />
                    </div>
                    <div class="ms-2">
                      <h4 class="mb-0">John K Quezada</h4>
                      <p class="mb-0">jquezada@ube.edu.ec</p>
                    </div>
                  </div>
                  <a class="dropdown-item" href="#"
                    ><i data-feather="user" class="feather-sm text-info me-1 ms-1"></i> My
                    Perfil</a
                  >
                  <a class="dropdown-item" href="#"
                    ><i data-feather="credit-card" class="feather-sm text-primary me-1 ms-1"></i> My
                    Balance</a
                  >
                  <a class="dropdown-item" href="#"
                    ><i data-feather="mail" class="feather-sm text-success me-1 ms-1"></i> Inbox</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#"
                    ><i data-feather="settings" class="feather-sm text-warning me-1 ms-1"></i>
                    Configuración de la cuenta</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#"
                    ><i data-feather="log-out" class="feather-sm text-danger me-1 ms-1"></i>
                    Logout</a
                  >
                  <div class="dropdown-divider"></div>
                  <div class="pl-4 p-2">
                    <a href="#" class="btn d-block w-100 btn-primary rounded-pill">View Profile</a>
                  </div>
                </div>
              </li>
              <!-- -------------------------------------------------------------- -->
              <!-- User profile and search -->
              <!-- -------------------------------------------------------------- -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- -------------------------------------------------------------- -->
      <!-- End Topbar header -->
      <!-- -------------------------------------------------------------- -->
      <!-- -------------------------------------------------------------- -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- -------------------------------------------------------------- -->
      <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav">
              <!-- User Profile-->
              <li>
                <!-- User Profile-->
                <div class="user-profile d-flex no-block dropdown mt-3">
                  <div class="user-pic">
                    <img
                      src="../../assets/images/users/1.jpg"
                      alt="users"
                      class="rounded-circle"
                      width="40"
                    />
                  </div>
                  <div class="user-content hide-menu ms-2">
                    <a
                      href="#"
                      class=""
                      id="Userdd"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <h5 class="mb-0 user-name font-medium">
                        Steave Jobs
                        <i data-feather="chevron-down" class="feather-sm"></i>
                      </h5>
                      <span class="op-5 user-email">jquezada@ube.edu.ec</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Userdd">
                      <a class="dropdown-item" href="#"
                        ><i data-feather="user" class="feather-sm text-info me-1"></i> My Profile</a
                      >
                      <a class="dropdown-item" href="#"
                        ><i data-feather="credit-card" class="feather-sm text-primary me-1"></i> My
                        Balance</a
                      >
                      <a class="dropdown-item" href="#"
                        ><i data-feather="mail" class="feather-sm text-success me-1"></i> Inbox</a
                      >
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#"
                        ><i data-feather="settings" class="feather-sm text-warning me-1"></i>
                        Configuración de la cuenta</a
                      >
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#"
                        ><i data-feather="log-out" class="feather-sm text-danger me-1"></i>
                        Logout</a
                      >
                    </div>
                  </div>
                </div>
                <!-- End User Profile-->
              </li>
              <li class="p-3 mt-2">
                <a
                  href="#"
                  class="btn btn-block create-btn text-white no-block d-flex align-items-center"
                  ><i data-feather="plus-square" class="feather-sm"></i>
                  <span class="hide-menu ms-1">Calendario</span>
                </a>
              </li>
              <!-- User Profile-->
              <li class="nav-small-cap">
                <i class="mdi mdi-dots-horizontal"></i>
                <span class="hide-menu">Personal</span>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#"
                  aria-expanded="false"
                  ><i data-feather="home" class="feather-icon"></i
                  ><span class="hide-menu">Dashboard </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="index.html" class="sidebar-link"
                      ><i class="mdi mdi-adjust"></i><span class="hide-menu"> Classic </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="index2.html" class="sidebar-link"
                      ><i class="mdi mdi-adjust"></i><span class="hide-menu"> Analytical </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="index3.html" class="sidebar-link"
                      ><i class="mdi mdi-adjust"></i
                      ><span class="hide-menu"> Cryptocurrency </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="index4.html" class="sidebar-link"
                      ><i class="mdi mdi-adjust"></i><span class="hide-menu"> Overview </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="index5.html" class="sidebar-link"
                      ><i class="mdi mdi-adjust"></i><span class="hide-menu"> E-Commerce </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="index6.html" class="sidebar-link"
                      ><i class="mdi mdi-adjust"></i><span class="hide-menu"> Sales </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="index7.html" class="sidebar-link"
                      ><i class="mdi mdi-adjust"></i><span class="hide-menu"> General </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="index8.html" class="sidebar-link"
                      ><i class="mdi mdi-adjust"></i><span class="hide-menu"> Trendy </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="index9.html" class="sidebar-link"
                      ><i class="mdi mdi-adjust"></i><span class="hide-menu"> Campaign </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="index10.html" class="sidebar-link"
                      ><i class="mdi mdi-adjust"></i><span class="hide-menu"> Modern </span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#"
                  aria-expanded="false"
                  ><i data-feather="sidebar" class="feather-icon"></i
                  ><span class="hide-menu">Sidebar Type </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="sidebar-type-minisidebar.html" class="sidebar-link"
                      ><i class="mdi mdi-view-quilt"></i
                      ><span class="hide-menu"> Minisidebar </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="sidebar-type-iconsidebar.html" class="sidebar-link"
                      ><i class="mdi mdi-view-parallel"></i
                      ><span class="hide-menu"> Icon Sidebar </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="sidebar-type-overlaysidebar.html" class="sidebar-link"
                      ><i class="mdi mdi-view-day"></i
                      ><span class="hide-menu"> Overlay Sidebar </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="sidebar-type-fullsidebar.html" class="sidebar-link"
                      ><i class="mdi mdi-view-array"></i
                      ><span class="hide-menu"> Full Sidebar </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="sidebar-type-horizontalsidebar.html" class="sidebar-link"
                      ><i class="mdi mdi-view-module"></i
                      ><span class="hide-menu"> Horizontal Sidebar </span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#"
                  aria-expanded="false"
                  ><i data-feather="clipboard" class="feather-icon"></i
                  ><span class="hide-menu">Page Layouts </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="layout-inner-fixed-left-sidebar.html" class="sidebar-link"
                      ><i class="mdi mdi-format-align-left"></i
                      ><span class="hide-menu"> Inner Fixed Left Sidebar </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="layout-inner-fixed-right-sidebar.html" class="sidebar-link"
                      ><i class="mdi mdi-format-align-right"></i
                      ><span class="hide-menu"> Inner Fixed Right Sidebar </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="layout-inner-left-sidebar.html" class="sidebar-link"
                      ><i class="mdi mdi-format-float-left"></i
                      ><span class="hide-menu"> Inner Left Sidebar </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="layout-inner-right-sidebar.html" class="sidebar-link"
                      ><i class="mdi mdi-format-float-right"></i
                      ><span class="hide-menu"> Inner Right Sidebar </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="page-layout-fixed-header.html" class="sidebar-link"
                      ><i class="mdi mdi-view-quilt"></i
                      ><span class="hide-menu"> Fixed Header </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="page-layout-fixed-sidebar.html" class="sidebar-link"
                      ><i class="mdi mdi-view-parallel"></i
                      ><span class="hide-menu"> Fixed Sidebar </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="page-layout-fixed-header-sidebar.html" class="sidebar-link"
                      ><i class="mdi mdi-view-column"></i
                      ><span class="hide-menu"> Fixed Header &amp; Sidebar </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="page-layout-boxed-layout.html" class="sidebar-link"
                      ><i class="mdi mdi-view-carousel"></i
                      ><span class="hide-menu"> Box Layout </span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-small-cap">
                <i class="mdi mdi-dots-horizontal"></i>
                <span class="hide-menu">Apps</span>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="app-chats.html"
                  aria-expanded="false"
                  ><i data-feather="message-circle" class="feather-icon"></i
                  ><span class="hide-menu">Chat Apps</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="app-todo.html"
                  aria-expanded="false"
                  ><i data-feather="check-circle" class="feather-icon"></i
                  ><span class="hide-menu">Todo</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="app-calendar.html"
                  aria-expanded="false"
                  ><i data-feather="calendar" class="feather-icon"></i
                  ><span class="hide-menu">Calendar</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="app-taskboard.html"
                  aria-expanded="false"
                  ><i data-feather="layout" class="feather-icon"></i
                  ><span class="hide-menu">Taskboard</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="app-contacts.html"
                  aria-expanded="false"
                  ><i data-feather="phone" class="feather-icon"></i
                  ><span class="hide-menu">Contact</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="app-notes.html"
                  aria-expanded="false"
                  ><i data-feather="book" class="feather-icon"></i
                  ><span class="hide-menu">Notes</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="app-invoice.html"
                  aria-expanded="false"
                  ><i data-feather="file-text" class="feather-icon"></i
                  ><span class="hide-menu">Invoice</span></a
                >
              </li>

              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#"
                  aria-expanded="false"
                  ><i data-feather="mail" class="feather-icon"></i
                  ><span class="hide-menu">Inbox </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="inbox-email.html" class="sidebar-link"
                      ><i class="mdi mdi-email"></i><span class="hide-menu"> Email </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="inbox-email-detail.html" class="sidebar-link"
                      ><i class="mdi mdi-email-alert"></i
                      ><span class="hide-menu"> Email Detail </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="inbox-email-compose.html" class="sidebar-link"
                      ><i class="mdi mdi-email-secure"></i
                      ><span class="hide-menu"> Email Compose </span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#"
                  aria-expanded="false"
                  ><i data-feather="bookmark" class="feather-icon"></i
                  ><span class="hide-menu">Ticket </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="ticket-list.html" class="sidebar-link"
                      ><i class="mdi mdi-book-multiple"></i
                      ><span class="hide-menu"> Ticket List </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ticket-detail.html" class="sidebar-link"
                      ><i class="mdi mdi-book-plus"></i
                      ><span class="hide-menu"> Ticket Detail </span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-small-cap">
                <i class="mdi mdi-dots-horizontal"></i>
                <span class="hide-menu">UI</span>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#"
                  aria-expanded="false"
                  ><i data-feather="cpu" class="feather-icon"></i
                  ><span class="hide-menu">Ui Elements </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="ui-accordian.html" class="sidebar-link"
                      ><i class="mdi mdi-box-shadow"></i
                      ><span class="hide-menu"> Accordian</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-badge.html" class="sidebar-link"
                      ><i class="mdi mdi-application"></i><span class="hide-menu"> Badge</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-buttons.html" class="sidebar-link"
                      ><i class="mdi mdi-toggle-switch"></i
                      ><span class="hide-menu"> Buttons</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-dropdowns.html" class="sidebar-link"
                      ><i class="mdi mdi-arrange-bring-to-front"></i
                      ><span class="hide-menu"> Dropdowns</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-modals.html" class="sidebar-link"
                      ><i class="mdi mdi-tablet"></i><span class="hide-menu"> Modals</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-tab.html" class="sidebar-link"
                      ><i class="mdi mdi-sort-variant"></i><span class="hide-menu"> Tab</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-tooltip-popover.html" class="sidebar-link"
                      ><i class="mdi mdi-image-filter-vintage"></i
                      ><span class="hide-menu"> Tooltip &amp; Popover</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-notification.html" class="sidebar-link"
                      ><i class="mdi mdi-message-bulleted"></i
                      ><span class="hide-menu"> Notification</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-progressbar.html" class="sidebar-link"
                      ><i class="mdi mdi-poll"></i><span class="hide-menu"> Progressbar</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-pagination.html" class="sidebar-link"
                      ><i class="mdi mdi-altimeter"></i
                      ><span class="hide-menu"> Pagination</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-typography.html" class="sidebar-link"
                      ><i class="mdi mdi-format-line-spacing"></i
                      ><span class="hide-menu"> Typography</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-bootstrap.html" class="sidebar-link"
                      ><i class="mdi mdi-bootstrap"></i
                      ><span class="hide-menu"> Bootstrap Ui</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-breadcrumb.html" class="sidebar-link"
                      ><i class="mdi mdi-equal"></i><span class="hide-menu"> Breadcrumb</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-offcanvas.html" class="sidebar-link"
                      ><i class="mdi mdi-content-copy"></i
                      ><span class="hide-menu"> Offcanvas</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-lists.html" class="sidebar-link"
                      ><i class="mdi mdi-file-video"></i><span class="hide-menu"> Lists</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-grid.html" class="sidebar-link"
                      ><i class="mdi mdi-view-module"></i><span class="hide-menu"> Grid</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-carousel.html" class="sidebar-link"
                      ><i class="mdi mdi-view-carousel"></i
                      ><span class="hide-menu"> Carousel</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-scrollspy.html" class="sidebar-link"
                      ><i class="mdi mdi-application"></i
                      ><span class="hide-menu"> Scrollspy</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-toasts.html" class="sidebar-link"
                      ><i class="mdi mdi-credit-card-scan"></i
                      ><span class="hide-menu"> Toasts</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-spinner.html" class="sidebar-link"
                      ><i class="mdi mdi-apple-safari"></i
                      ><span class="hide-menu"> Spinner</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#"
                  aria-expanded="false"
                  ><i data-feather="copy" class="feather-icon"></i
                  ><span class="hide-menu">Cards</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="ui-cards.html" class="sidebar-link"
                      ><i class="mdi mdi-layers"></i><span class="hide-menu"> Basic Cards</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-card-customs.html" class="sidebar-link"
                      ><i class="mdi mdi-credit-card-scan"></i
                      ><span class="hide-menu">Custom Cards</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-card-weather.html" class="sidebar-link"
                      ><i class="mdi mdi-weather-fog"></i
                      ><span class="hide-menu">Weather Cards</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-card-draggable.html" class="sidebar-link"
                      ><i class="mdi mdi-bandcamp"></i
                      ><span class="hide-menu">Draggable Cards</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#"
                  aria-expanded="false"
                  ><i data-feather="hard-drive" class="feather-icon"></i
                  ><span class="hide-menu">Components</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="component-sweetalert.html" class="sidebar-link"
                      ><i class="mdi mdi-layers"></i><span class="hide-menu"> Sweet Alert</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="component-nestable.html" class="sidebar-link"
                      ><i class="mdi mdi-credit-card-scan"></i
                      ><span class="hide-menu">Nestable</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="component-noui-slider.html" class="sidebar-link"
                      ><i class="mdi mdi-weather-fog"></i
                      ><span class="hide-menu">Noui slider</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="component-rating.html" class="sidebar-link"
                      ><i class="mdi mdi-bandcamp"></i><span class="hide-menu">Rating</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="component-toastr.html" class="sidebar-link"
                      ><i class="mdi mdi-poll"></i><span class="hide-menu">Toastr</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#"
                  aria-expanded="false"
                  ><i data-feather="grid" class="feather-icon"></i
                  ><span class="hide-menu">Widgets </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="widgets-feeds.html" class="sidebar-link"
                      ><i class="mdi mdi-account-box"></i
                      ><span class="hide-menu"> Feed Widgets </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="widgets-apps.html" class="sidebar-link"
                      ><i class="mdi mdi-comment-processing-outline"></i
                      ><span class="hide-menu"> Apps Widgets </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="widgets-data.html" class="sidebar-link"
                      ><i class="mdi mdi-calendar"></i
                      ><span class="hide-menu"> Data Widgets </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="widgets-charts.html" class="sidebar-link"
                      ><i class="mdi mdi-bulletin-board"></i
                      ><span class="hide-menu"> Charts Widgets</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-small-cap">
                <i class="mdi mdi-dots-horizontal"></i>
                <span class="hide-menu">Forms</span>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#"
                  aria-expanded="false"
                  ><i data-feather="layers" class="feather-icon"></i
                  ><span class="hide-menu">Form Elements</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="form-inputs.html" class="sidebar-link"
                      ><i class="mdi mdi-priority-low"></i
                      ><span class="hide-menu"> Forms Input</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-input-groups.html" class="sidebar-link"
                      ><i class="mdi mdi-rounded-corner"></i
                      ><span class="hide-menu"> Input Groups</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-input-grid.html" class="sidebar-link"
                      ><i class="mdi mdi-select-all"></i
                      ><span class="hide-menu"> Input Grid</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-checkbox-radio.html" class="sidebar-link"
                      ><i class="mdi mdi-shape-plus"></i
                      ><span class="hide-menu"> Checkboxes &amp; Radios</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-bootstrap-touchspin.html" class="sidebar-link"
                      ><i class="mdi mdi-switch"></i
                      ><span class="hide-menu"> Bootstrap Touchspin</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-bootstrap-switch.html" class="sidebar-link"
                      ><i class="mdi mdi-toggle-switch-off"></i
                      ><span class="hide-menu"> Bootstrap Switch</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-select2.html" class="sidebar-link"
                      ><i class="mdi mdi-relative-scale"></i
                      ><span class="hide-menu"> Select2</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-dual-listbox.html" class="sidebar-link"
                      ><i class="mdi mdi-tab-unselected"></i
                      ><span class="hide-menu"> Dual Listbox</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#"
                  aria-expanded="false"
                  ><i data-feather="file-text" class="feather-icon"></i
                  ><span class="hide-menu">Form Layouts</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="form-basic.html" class="sidebar-link"
                      ><i class="mdi mdi-vector-difference-ba"></i
                      ><span class="hide-menu"> Basic Forms</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-horizontal.html" class="sidebar-link"
                      ><i class="mdi mdi-file-document-box"></i
                      ><span class="hide-menu"> Form Horizontal</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-actions.html" class="sidebar-link"
                      ><i class="mdi mdi-code-greater-than"></i
                      ><span class="hide-menu"> Form Actions</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-row-separator.html" class="sidebar-link"
                      ><i class="mdi mdi-code-equal"></i
                      ><span class="hide-menu"> Row Separator</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-bordered.html" class="sidebar-link"
                      ><i class="mdi mdi-flip-to-front"></i
                      ><span class="hide-menu"> Form Bordered</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-striped-row.html" class="sidebar-link"
                      ><i class="mdi mdi-content-duplicate"></i
                      ><span class="hide-menu"> Striped Rows</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-detail.html" class="sidebar-link"
                      ><i class="mdi mdi-cards-outline"></i
                      ><span class="hide-menu"> Form Detail</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#"
                  aria-expanded="false"
                  ><i data-feather="package" class="feather-icon"></i
                  ><span class="hide-menu">Form Addons</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="form-paginator.html" class="sidebar-link"
                      ><i class="mdi mdi-export"></i><span class="hide-menu"> Paginator</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-img-cropper.html" class="sidebar-link"
                      ><i class="mdi mdi-crop"></i><span class="hide-menu"> Image Cropper</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-dropzone.html" class="sidebar-link"
                      ><i class="mdi mdi-crosshairs-gps"></i
                      ><span class="hide-menu"> Dropzone</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-mask.html" class="sidebar-link"
                      ><i class="mdi mdi-box-shadow"></i
                      ><span class="hide-menu"> Form Mask</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-typeahead.html" class="sidebar-link"
                      ><i class="mdi mdi-cards-variant"></i
                      ><span class="hide-menu"> Form Typehead</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-custom-switch.html" class="sidebar-link"
                      ><i class="mdi mdi-toggle-switch-off"></i
                      ><span class="hide-menu"> Custom Switch</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#"
                  aria-expanded="false"
                  ><i data-feather="check-square" class="feather-icon"></i
                  ><span class="hide-menu">Form Validation</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="form-bootstrap-validation.html" class="sidebar-link"
                      ><i class="mdi mdi-credit-card-scan"></i
                      ><span class="hide-menu"> Bootstrap Validation</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-custom-validation.html" class="sidebar-link"
                      ><i class="mdi mdi-credit-card-plus"></i
                      ><span class="hide-menu"> Custom Validation</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#"
                  aria-expanded="false"
                  ><i data-feather="droplet" class="feather-icon"></i
                  ><span class="hide-menu">Form Pickers</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="form-picker-colorpicker.html" class="sidebar-link"
                      ><i class="mdi mdi-calendar-plus"></i
                      ><span class="hide-menu"> Form Colorpicker</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-picker-datetimepicker.html" class="sidebar-link"
                      ><i class="mdi mdi-calendar-clock"></i
                      ><span class="hide-menu"> Form Datetimepicker</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-picker-bootstrap-rangepicker.html" class="sidebar-link"
                      ><i class="mdi mdi-calendar-range"></i
                      ><span class="hide-menu"> Form Bootstrap Rangepicker</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-picker-bootstrap-datepicker.html" class="sidebar-link"
                      ><i class="mdi mdi-calendar-check"></i
                      ><span class="hide-menu"> Form Bootstrap Datepicker</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-picker-material-datepicker.html" class="sidebar-link"
                      ><i class="mdi mdi-calendar-text"></i
                      ><span class="hide-menu"> Form Material Datepicker</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#"
                  aria-expanded="false"
                  ><i data-feather="edit" class="feather-icon"></i
                  ><span class="hide-menu">Form Editor</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="form-editor-ckeditor.html" class="sidebar-link"
                      ><i class="mdi mdi-drawing"></i><span class="hide-menu">Ck Editor</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-editor-quill.html" class="sidebar-link"
                      ><i class="mdi mdi-drupal"></i><span class="hide-menu">Quill Editor</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-editor-summernote.html" class="sidebar-link"
                      ><i class="mdi mdi-brightness-6"></i
                      ><span class="hide-menu">Summernote Editor</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-editor-tinymce.html" class="sidebar-link"
                      ><i class="mdi mdi-bowling"></i
                      ><span class="hide-menu">Tinymce Edtor</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="form-wizard.html"
                  aria-expanded="false"
                  ><i data-feather="credit-card" class="feather-icon"></i
                  ><span class="hide-menu">Form Wizard</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="form-repeater.html"
                  aria-expanded="false"
                  ><i data-feather="crop" class="feather-icon"></i
                  ><span class="hide-menu">Form Repeater</span></a
                >
              </li>
              <li class="nav-small-cap">
                <i class="mdi mdi-dots-horizontal"></i>
                <span class="hide-menu">Tables</span>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#"
                  aria-expanded="false"
                  ><i data-feather="codepen" class="feather-icon"></i
                  ><span class="hide-menu">Bootstrap Tables</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="table-basic.html" class="sidebar-link"
                      ><i class="mdi mdi-border-all"></i
                      ><span class="hide-menu">Basic Table </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="table-dark-basic.html" class="sidebar-link"
                      ><i class="mdi mdi-border-left"></i
                      ><span class="hide-menu">Dark Basic Table </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="table-sizing.html" class="sidebar-link"
                      ><i class="mdi mdi-border-outside"></i
                      ><span class="hide-menu">Sizing Table </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="table-layout-coloured.html" class="sidebar-link"
                      ><i class="mdi mdi-border-bottom"></i
                      ><span class="hide-menu">Coloured Table Layout</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#"
                  aria-expanded="false"
                  ><i data-feather="hard-drive" class="feather-icon"></i
                  ><span class="hide-menu">Datatables</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="table-datatable-basic.html" class="sidebar-link"
                      ><i class="mdi mdi-border-vertical"></i
                      ><span class="hide-menu"> Basic Initialisation</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="table-datatable-api.html" class="sidebar-link"
                      ><i class="mdi mdi-blur-linear"></i><span class="hide-menu"> API</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="table-datatable-advanced.html" class="sidebar-link"
                      ><i class="mdi mdi-border-style"></i
                      ><span class="hide-menu"> Advanced Initialisation</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="table-jsgrid.html"
                  aria-expanded="false"
                  ><i data-feather="disc" class="feather-icon"></i
                  ><span class="hide-menu">Table Jsgrid</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="table-responsive.html"
                  aria-expanded="false"
                  ><i data-feather="smartphone" class="feather-icon"></i
                  ><span class="hide-menu">Table Responsive</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="table-footable.html"
                  aria-expanded="false"
                  ><i data-feather="command" class="feather-icon"></i
                  ><span class="hide-menu">Table Footable</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="table-editable.html"
                  aria-expanded="false"
                  ><i data-feather="edit-2" class="feather-icon"></i
                  ><span class="hide-menu">Table Editable</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="table-bootstrap.html"
                  aria-expanded="false"
                  ><i data-feather="target" class="feather-icon"></i
                  ><span class="hide-menu">Table Bootstrap</span></a
                >
              </li>
              <li class="nav-small-cap">
                <i class="mdi mdi-dots-horizontal"></i>
                <span class="hide-menu">Charts</span>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="chart-morris.html"
                  aria-expanded="false"
                  ><i data-feather="loader" class="feather-icon"></i
                  ><span class="hide-menu"> Morris Chart</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="chart-chart-js.html"
                  aria-expanded="false"
                  ><i data-feather="pie-chart" class="feather-icon"></i
                  ><span class="hide-menu">Chartjs</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="chart-sparkline.html"
                  aria-expanded="false"
                  ><i data-feather="radio" class="feather-icon"></i
                  ><span class="hide-menu">Sparkline Chart</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="chart-chartist.html"
                  aria-expanded="false"
                  ><i data-feather="trello" class="feather-icon"></i
                  ><span class="hide-menu">Chartist Chart</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#"
                  aria-expanded="false"
                  ><i data-feather="slack" class="feather-icon"></i
                  ><span class="hide-menu">C3 Charts</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="chart-c3-axis.html" class="sidebar-link"
                      ><i class="mdi mdi-arrange-bring-to-front"></i>
                      <span class="hide-menu">Axis Chart</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-c3-bar.html" class="sidebar-link"
                      ><i class="mdi mdi-arrange-send-to-back"></i>
                      <span class="hide-menu">Bar Chart</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-c3-data.html" class="sidebar-link"
                      ><i class="mdi mdi-backup-restore"></i>
                      <span class="hide-menu">Data Chart</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-c3-line.html" class="sidebar-link"
                      ><i class="mdi mdi-backburger"></i>
                      <span class="hide-menu">Line Chart</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="life-buoy" class="feather-icon"></i
                  ><span class="hide-menu">Apex Charts</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="chart-apex-line.html" class="sidebar-link"
                      ><i class="mdi mdi-chart-line"></i>
                      <span class="hide-menu">Line Chart</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-apex-area.html" class="sidebar-link"
                      ><i class="mdi mdi-chart-areaspline"></i>
                      <span class="hide-menu">Area Chart</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-apex-bar.html" class="sidebar-link"
                      ><i class="mdi mdi-chart-gantt"></i>
                      <span class="hide-menu">Bar Chart</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-apex-pie.html" class="sidebar-link"
                      ><i class="mdi mdi-chart-pie"></i> <span class="hide-menu">Pie Chart</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-apex-radial.html" class="sidebar-link"
                      ><i class="mdi mdi-chart-arc"></i>
                      <span class="hide-menu">Radial Chart</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-apex-radar.html" class="sidebar-link"
                      ><i class="mdi mdi-hexagon-outline"></i>
                      <span class="hide-menu">Radar Chart</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#"
                  aria-expanded="false"
                  ><i data-feather="bar-chart-2" class="feather-icon"></i
                  ><span class="hide-menu">Echarts</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="chart-echart-basic.html" class="sidebar-link"
                      ><i class="mdi mdi-chart-line"></i>
                      <span class="hide-menu">Basic Charts</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-echart-bar.html" class="sidebar-link"
                      ><i class="mdi mdi-chart-scatterplot-hexbin"></i>
                      <span class="hide-menu">Bar Chart</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-echart-pie-doughnut.html" class="sidebar-link"
                      ><i class="mdi mdi-chart-pie"></i>
                      <span class="hide-menu">Pie &amp; Doughnut Chart</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-small-cap">
                <i class="mdi mdi-dots-horizontal"></i>
                <span class="hide-menu">Sample Pages</span>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#"
                  aria-expanded="false"
                  ><i data-feather="shopping-cart" class="feather-icon"></i
                  ><span class="hide-menu">Ecommerce Pages</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="eco-products.html" class="sidebar-link"
                      ><i class="mdi mdi-cards-variant"></i>
                      <span class="hide-menu">Products</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="eco-products-cart.html" class="sidebar-link"
                      ><i class="mdi mdi-cart"></i> <span class="hide-menu">Products Cart</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="eco-products-edit.html" class="sidebar-link"
                      ><i class="mdi mdi-cart-plus"></i>
                      <span class="hide-menu">Products Edit</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="eco-products-detail.html" class="sidebar-link"
                      ><i class="mdi mdi-camera-burst"></i>
                      <span class="hide-menu">Product Details</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="eco-products-orders.html" class="sidebar-link"
                      ><i class="mdi mdi-chart-pie"></i>
                      <span class="hide-menu">Product Orders</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="eco-products-checkout.html" class="sidebar-link"
                      ><i class="mdi mdi-clipboard-check"></i>
                      <span class="hide-menu">Products Checkout</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#"
                  aria-expanded="false"
                  ><i data-feather="book-open" class="feather-icon"></i
                  ><span class="hide-menu">Sample Pages </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="starter-kit.html" class="sidebar-link"
                      ><i class="mdi mdi-crop-free"></i>
                      <span class="hide-menu">Starter Kit</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-animation.html" class="sidebar-link"
                      ><i class="mdi mdi-debug-step-over"></i>
                      <span class="hide-menu">Animation</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-search-result.html" class="sidebar-link"
                      ><i class="mdi mdi-search-web"></i>
                      <span class="hide-menu">Search Result</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-gallery.html" class="sidebar-link"
                      ><i class="mdi mdi-camera-iris"></i> <span class="hide-menu">Gallery</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-treeview.html" class="sidebar-link"
                      ><i class="mdi mdi-file-tree"></i> <span class="hide-menu">Treeview</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-block-ui.html" class="sidebar-link"
                      ><i class="mdi mdi-codepen"></i> <span class="hide-menu">Block UI</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-session-timeout.html" class="sidebar-link"
                      ><i class="mdi mdi-timer-off"></i>
                      <span class="hide-menu">Session Timeout</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-session-idle-timeout.html" class="sidebar-link"
                      ><i class="mdi mdi-timer-sand-empty"></i>
                      <span class="hide-menu">Session Idle Timeout</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-utility-classes.html" class="sidebar-link"
                      ><i class="mdi mdi-tune"></i> <span class="hide-menu">Helper Classes</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-maintenance.html" class="sidebar-link"
                      ><i class="mdi mdi-camera-iris"></i>
                      <span class="hide-menu">Maintenance Page</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#"
                  aria-expanded="false"
                  ><i data-feather="lock" class="feather-icon"></i
                  ><span class="hide-menu">Authentication</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="authentication-login1.html" class="sidebar-link"
                      ><i class="mdi mdi-account-key"></i><span class="hide-menu"> Login </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="authentication-login2.html" class="sidebar-link"
                      ><i class="mdi mdi-account-key"></i
                      ><span class="hide-menu"> Login 2 </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="authentication-login3.html" class="sidebar-link"
                      ><i class="mdi mdi-account-key"></i
                      ><span class="hide-menu"> Login 3 </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="authentication-register1.html" class="sidebar-link"
                      ><i class="mdi mdi-account-plus"></i
                      ><span class="hide-menu"> Register</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="authentication-register2.html" class="sidebar-link"
                      ><i class="mdi mdi-account-plus"></i
                      ><span class="hide-menu"> Register 2</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="authentication-lockscreen.html" class="sidebar-link"
                      ><i class="mdi mdi-account-off"></i
                      ><span class="hide-menu"> Lockscreen</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="authentication-recover-password.html" class="sidebar-link"
                      ><i class="mdi mdi-account-convert"></i
                      ><span class="hide-menu"> Recover password</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#"
                  aria-expanded="false"
                  ><i data-feather="users" class="feather-icon"></i
                  ><span class="hide-menu">Users</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="ui-user-card.html" class="sidebar-link"
                      ><i class="mdi mdi-account-box"></i>
                      <span class="hide-menu"> Tarjeta de usuario </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-profile.html" class="sidebar-link"
                      ><i class="mdi mdi-account-network"></i
                      ><span class="hide-menu"> User Profile</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-user-contacts.html" class="sidebar-link"
                      ><i class="mdi mdi-account-star-variant"></i
                      ><span class="hide-menu"> Contacto del usuario</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#"
                  aria-expanded="false"
                  ><i data-feather="paperclip" class="feather-icon"></i
                  ><span class="hide-menu">Invoice</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="pages-invoice.html" class="sidebar-link"
                      ><i class="mdi mdi-vector-triangle"></i
                      ><span class="hide-menu"> Invoice Layout </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-invoice-list.html" class="sidebar-link"
                      ><i class="mdi mdi-vector-rectangle"></i
                      ><span class="hide-menu"> Invoice List</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#"
                  aria-expanded="false"
                  ><i data-feather="map" class="feather-icon"></i
                  ><span class="hide-menu">Maps</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="map-google.html" class="sidebar-link"
                      ><i class="mdi mdi-google-maps"></i
                      ><span class="hide-menu"> Google Map </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="map-vector.html" class="sidebar-link"
                      ><i class="mdi mdi-map-marker-radius"></i
                      ><span class="hide-menu"> Vector Map</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#"
                  aria-expanded="false"
                  ><i data-feather="feather" class="feather-icon"></i
                  ><span class="hide-menu">Icons</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="icon-fontawesome.html" class="sidebar-link"
                      ><i class="mdi mdi-emoticon-cool"></i
                      ><span class="hide-menu"> Fontawesome Icons</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="icon-feather.html" class="sidebar-link"
                      ><i class="mdi mdi-feather"></i>
                      <span class="hide-menu"> Feather Icons </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="icon-bootstrap.html" class="sidebar-link"
                      ><i class="mdi mdi-emoticon"></i>
                      <span class="hide-menu"> Bootstrap Icons </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="icon-remix.html" class="sidebar-link"
                      ><i class="mdi mdi-emoticon-cool"></i
                      ><span class="hide-menu"> Remix Icons</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#"
                  aria-expanded="false"
                  ><i data-feather="activity" class="feather-icon"></i
                  ><span class="hide-menu">Timeline</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="timeline-center.html" class="sidebar-link"
                      ><i class="mdi mdi-clock-fast"></i>
                      <span class="hide-menu"> Center Timeline </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="timeline-horizontal.html" class="sidebar-link"
                      ><i class="mdi mdi-clock-end"></i
                      ><span class="hide-menu"> Horizontal Timeline</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="timeline-left.html" class="sidebar-link"
                      ><i class="mdi mdi-clock-in"></i
                      ><span class="hide-menu"> Left Timeline</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="timeline-right.html" class="sidebar-link"
                      ><i class="mdi mdi-clock-start"></i
                      ><span class="hide-menu"> Right Timeline</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#"
                  aria-expanded="false"
                  ><i data-feather="mail" class="feather-icon"></i
                  ><span class="hide-menu">Email Template</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="email-templete-alert.html" class="sidebar-link"
                      ><i class="mdi mdi-message-alert"></i>
                      <span class="hide-menu"> Alert </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="email-templete-basic.html" class="sidebar-link"
                      ><i class="mdi mdi-message-bulleted"></i
                      ><span class="hide-menu"> Basic</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="email-templete-billing.html" class="sidebar-link"
                      ><i class="mdi mdi-message-draw"></i
                      ><span class="hide-menu"> Billing</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="email-templete-password-reset.html" class="sidebar-link"
                      ><i class="mdi mdi-message-bulleted-off"></i
                      ><span class="hide-menu"> Password-Reset</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#"
                  aria-expanded="false"
                  ><i data-feather="user-x" class="feather-icon"></i
                  ><span class="hide-menu">Error Pages</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="error-400.html" class="sidebar-link"
                      ><i class="mdi mdi-alert-outline"></i>
                      <span class="hide-menu"> Error 400 </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="error-403.html" class="sidebar-link"
                      ><i class="mdi mdi-alert-outline"></i
                      ><span class="hide-menu"> Error 403</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="error-404.html" class="sidebar-link"
                      ><i class="mdi mdi-alert-outline"></i
                      ><span class="hide-menu"> Error 404</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="error-500.html" class="sidebar-link"
                      ><i class="mdi mdi-alert-outline"></i
                      ><span class="hide-menu"> Error 500</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="error-503.html" class="sidebar-link"
                      ><i class="mdi mdi-alert-outline"></i
                      ><span class="hide-menu"> Error 503</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="#"
                  aria-expanded="false"
                  ><i data-feather="git-pull-request" class="feather-icon"></i
                  ><span class="hide-menu">Multi level dd</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="#" class="sidebar-link"
                      ><i class="mdi mdi-octagram"></i><span class="hide-menu"> item 1.1</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="#" class="sidebar-link"
                      ><i class="mdi mdi-octagram"></i><span class="hide-menu"> item 1.2</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a class="has-arrow sidebar-link" href="#" aria-expanded="false"
                      ><i class="mdi mdi-playlist-plus"></i>
                      <span class="hide-menu">Menu 1.3</span></a
                    >
                    <ul aria-expanded="false" class="collapse second-level">
                      <li class="sidebar-item">
                        <a href="#" class="sidebar-link"
                          ><i class="mdi mdi-octagram"></i
                          ><span class="hide-menu"> item 1.3.1</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="#" class="sidebar-link"
                          ><i class="mdi mdi-octagram"></i
                          ><span class="hide-menu"> item 1.3.2</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="#" class="sidebar-link"
                          ><i class="mdi mdi-octagram"></i
                          ><span class="hide-menu"> item 1.3.3</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="#" class="sidebar-link"
                          ><i class="mdi mdi-octagram"></i
                          ><span class="hide-menu"> item 1.3.4</span></a
                        >
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-item">
                    <a href="#" class="sidebar-link"
                      ><i class="mdi mdi-playlist-check"></i
                      ><span class="hide-menu"> item 1.4</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-small-cap">
                <i class="mdi mdi-dots-horizontal"></i>
                <span class="hide-menu">Extra</span>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="../../../docs/document.html"
                  aria-expanded="false"
                  ><i data-feather="edit-3" class="feather-icon"></i
                  ><span class="hide-menu">Documentation</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="authentication-login1.html"
                  aria-expanded="false"
                  ><i data-feather="log-out" class="feather-icon"></i
                  ><span class="hide-menu">Log Out</span></a
                >
              </li>
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!-- -------------------------------------------------------------- -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- -------------------------------------------------------------- -->
      <!-- -------------------------------------------------------------- -->
      <!-- Page wrapper  -->
      <!-- -------------------------------------------------------------- -->
      <div class="page-wrapper">
        <!-- -------------------------------------------------------------- -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- -------------------------------------------------------------- -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-5 align-self-center">
              <h4 class="page-title">Calendar</h4>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                  </ol>
                </nav>
              </div>
            </div>
            <div class="col-7 align-self-center">
              <div class="d-flex no-block justify-content-end align-items-center">
                <div class="me-2">
                  <div class="lastmonth"></div>
                </div>
                <div class="">
                  <small>LAST MONTH</small>
                  <h4 class="text-info mb-0 font-medium">$58,256</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- -------------------------------------------------------------- -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- -------------------------------------------------------------- -->
        <!-- -------------------------------------------------------------- -->
        <!-- Container fluid  -->
        <!-- -------------------------------------------------------------- -->
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div>
                    <div class="row gx-0">
                        <div class="col-lg-12">
                            <div class="p-4 calender-sidebar app-calendar">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <!-- BEGIN MODAL -->
              <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="eventModalLabel">
                                Add / Edit Event
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="">
                                        <label class="form-label">Event Title</label>
                                        <input id="event-title" type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <div><label class="form-label">Event Color</label></div>
                                    <div class="d-flex">
                                        <div class="n-chk">
                                            <div class="form-check form-check-primary form-check-inline">
                                                <input class="form-check-input" type="radio" name="event-level" value="Danger" id="modalDanger" />
                                                <label class="form-check-label" for="modalDanger">Danger</label>
                                            </div>
                                        </div>
                                        <div class="n-chk">
                                            <div class="form-check form-check-warning form-check-inline">
                                                <input class="form-check-input" type="radio" name="event-level" value="Success" id="modalSuccess" />
                                                <label class="form-check-label" for="modalSuccess">Success</label>
                                            </div>
                                        </div>
                                        <div class="n-chk">
                                            <div class="form-check form-check-success form-check-inline">
                                                <input class="form-check-input" type="radio" name="event-level" value="Primary" id="modalPrimary" />
                                                <label class="form-check-label" for="modalPrimary">Primary</label>
                                            </div>
                                        </div>
                                        <div class="n-chk">
                                            <div class="form-check form-check-danger form-check-inline">
                                                <input class="form-check-input" type="radio" name="event-level" value="Warning" id="modalWarning" />
                                                <label class="form-check-label" for="modalWarning">Warning</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 d-none">
                                    <div class="">
                                        <label class="form-label">Enter Start Date</label>
                                        <input id="event-start-date" type="text" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-12 d-none">
                                    <div class="">
                                        <label class="form-label">Enter End Date</label>
                                        <input id="event-end-date" type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="button" class="btn btn-success btn-update-event" data-fc-event-public-id="">
                                Update changes
                            </button>
                            <button type="button" class="btn btn-primary btn-add-event">
                                Add Event
                            </button>
                        </div>
                    </div>
                </div>
              </div>
              <!-- END MODAL -->
            </div>
          </div>
        </div>
        <!-- -------------------------------------------------------------- -->
        <!-- End Container fluid  -->
        <!-- -------------------------------------------------------------- -->
        <!-- -------------------------------------------------------------- -->
        <!-- footer -->
        <!-- -------------------------------------------------------------- -->
        <footer class="footer text-center">
          All Rights Reserved by Xtreme admin. Designed and Developed by
          <a href="https://www.wrappixel.com">WrapPixel</a>.
        </footer>
        <!-- -------------------------------------------------------------- -->
        <!-- End footer -->
        <!-- -------------------------------------------------------------- -->
      </div>
      <!-- -------------------------------------------------------------- -->
      <!-- End Page wrapper  -->
      <!-- -------------------------------------------------------------- -->
    </div>
    <!-- -------------------------------------------------------------- -->
    <!-- End Wrapper -->
    <!-- -------------------------------------------------------------- -->
    <!-- -------------------------------------------------------------- -->
    <!-- customizer Panel -->
    <!-- -------------------------------------------------------------- -->
    <aside class="customizer">
      <a href="javascript:void(0)" class="service-panel-toggle"
        ><i data-feather="settings" class="feather-sm fa fa-spin"></i
      ></a>
      <div class="customizer-body">
        <ul class="nav customizer-tab" role="tablist">
          <li class="nav-item">
            <a
              class="nav-link active"
              id="pills-home-tab"
              data-bs-toggle="pill"
              href="#pills-home"
              role="tab"
              aria-controls="pills-home"
              aria-selected="true"
              ><i class="ri-tools-fill fs-6"></i
            ></a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="pills-profile-tab"
              data-bs-toggle="pill"
              href="#chat"
              role="tab"
              aria-controls="chat"
              aria-selected="false"
              ><i class="ri-message-3-line fs-6"></i
            ></a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="pills-contact-tab"
              data-bs-toggle="pill"
              href="#pills-contact"
              role="tab"
              aria-controls="pills-contact"
              aria-selected="false"
              ><i class="ri-timer-line fs-6"></i
            ></a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <!-- Tab 1 -->
          <div
            class="tab-pane fade show active"
            id="pills-home"
            role="tabpanel"
            aria-labelledby="pills-home-tab"
          >
            <div class="p-3 border-bottom">
              <!-- Sidebar -->
              <h5 class="font-medium mb-2 mt-2">Layout Settings</h5>
              <div class="form-check mt-2">
                <input type="checkbox" class="form-check-input" name="theme-view" id="theme-view" />
                <label class="form-check-label" for="theme-view">Dark Theme</label>
              </div>
              <div class="form-check mt-2">
                <input
                  type="checkbox"
                  class="form-check-input sidebartoggler"
                  name="collapssidebar"
                  id="collapssidebar"
                />
                <label class="form-check-label" for="collapssidebar">Collapse Sidebar</label>
              </div>
              <div class="form-check mt-2">
                <input
                  type="checkbox"
                  class="form-check-input"
                  name="sidebar-position"
                  id="sidebar-position"
                />
                <label class="form-check-label" for="sidebar-position">Fixed Sidebar</label>
              </div>
              <div class="form-check mt-2">
                <input
                  type="checkbox"
                  class="form-check-input"
                  name="header-position"
                  id="header-position"
                />
                <label class="form-check-label" for="header-position">Fixed Header</label>
              </div>
              <div class="form-check mt-2">
                <input
                  type="checkbox"
                  class="form-check-input"
                  name="boxed-layout"
                  id="boxed-layout"
                />
                <label class="form-check-label" for="boxed-layout">Boxed Layout</label>
              </div>
            </div>
            <div class="p-3 border-bottom">
              <!-- Logo BG -->
              <h5 class="font-medium mb-2 mt-2">Logo Backgrounds</h5>
              <ul class="theme-color">
                <li class="theme-item">
                  <a href="#" class="theme-link" data-logobg="skin1"></a>
                </li>
                <li class="theme-item">
                  <a href="#" class="theme-link" data-logobg="skin2"></a>
                </li>
                <li class="theme-item">
                  <a href="#" class="theme-link" data-logobg="skin3"></a>
                </li>
                <li class="theme-item">
                  <a href="#" class="theme-link" data-logobg="skin4"></a>
                </li>
                <li class="theme-item">
                  <a href="#" class="theme-link" data-logobg="skin5"></a>
                </li>
                <li class="theme-item">
                  <a href="#" class="theme-link" data-logobg="skin6"></a>
                </li>
              </ul>
              <!-- Logo BG -->
            </div>
            <div class="p-3 border-bottom">
              <!-- Navbar BG -->
              <h5 class="font-medium mb-2 mt-2">Navbar Backgrounds</h5>
              <ul class="theme-color">
                <li class="theme-item">
                  <a href="#" class="theme-link" data-navbarbg="skin1"></a>
                </li>
                <li class="theme-item">
                  <a href="#" class="theme-link" data-navbarbg="skin2"></a>
                </li>
                <li class="theme-item">
                  <a href="#" class="theme-link" data-navbarbg="skin3"></a>
                </li>
                <li class="theme-item">
                  <a href="#" class="theme-link" data-navbarbg="skin4"></a>
                </li>
                <li class="theme-item">
                  <a href="#" class="theme-link" data-navbarbg="skin5"></a>
                </li>
                <li class="theme-item">
                  <a href="#" class="theme-link" data-navbarbg="skin6"></a>
                </li>
              </ul>
              <!-- Navbar BG -->
            </div>
            <div class="p-3 border-bottom">
              <!-- Logo BG -->
              <h5 class="font-medium mb-2 mt-2">Sidebar Backgrounds</h5>
              <ul class="theme-color">
                <li class="theme-item">
                  <a href="#" class="theme-link" data-sidebarbg="skin1"></a>
                </li>
                <li class="theme-item">
                  <a href="#" class="theme-link" data-sidebarbg="skin2"></a>
                </li>
                <li class="theme-item">
                  <a href="#" class="theme-link" data-sidebarbg="skin3"></a>
                </li>
                <li class="theme-item">
                  <a href="#" class="theme-link" data-sidebarbg="skin4"></a>
                </li>
                <li class="theme-item">
                  <a href="#" class="theme-link" data-sidebarbg="skin5"></a>
                </li>
                <li class="theme-item">
                  <a href="#" class="theme-link" data-sidebarbg="skin6"></a>
                </li>
              </ul>
              <!-- Logo BG -->
            </div>
          </div>
          <!-- End Tab 1 -->
          <!-- Tab 2 -->
          <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="pills-profile-tab">
            <ul class="mailbox list-style-none mt-3">
              <li>
                <div class="message-center chat-scroll">
                  <a href="#" class="message-item" id="chat_user_1" data-user-id="1">
                    <span class="user-img">
                      <img
                        src="../../assets/images/users/1.jpg"
                        alt="user"
                        class="rounded-circle"
                      />
                      <span class="profile-status online pull-right"></span>
                    </span>
                    <div class="mail-contnet">
                      <h5 class="message-title">Pavan kumar</h5>
                      <span class="mail-desc">Just see the my admin!</span>
                      <span class="time">9:30 AM</span>
                    </div>
                  </a>
                  <!-- Message -->
                  <a href="#" class="message-item" id="chat_user_2" data-user-id="2">
                    <span class="user-img">
                      <img
                        src="../../assets/images/users/2.jpg"
                        alt="user"
                        class="rounded-circle"
                      />
                      <span class="profile-status busy pull-right"></span>
                    </span>
                    <div class="mail-contnet">
                      <h5 class="message-title">Sonu Nigam</h5>
                      <span class="mail-desc">I've sung a song! See you at</span>
                      <span class="time">9:10 AM</span>
                    </div>
                  </a>
                  <!-- Message -->
                  <a href="#" class="message-item" id="chat_user_3" data-user-id="3">
                    <span class="user-img">
                      <img
                        src="../../assets/images/users/3.jpg"
                        alt="user"
                        class="rounded-circle"
                      />
                      <span class="profile-status away pull-right"></span>
                    </span>
                    <div class="mail-contnet">
                      <h5 class="message-title">Arijit Sinh</h5>
                      <span class="mail-desc">I am a singer!</span>
                      <span class="time">9:08 AM</span>
                    </div>
                  </a>
                  <!-- Message -->
                  <a href="#" class="message-item" id="chat_user_4" data-user-id="4">
                    <span class="user-img">
                      <img
                        src="../../assets/images/users/4.jpg"
                        alt="user"
                        class="rounded-circle"
                      />
                      <span class="profile-status offline pull-right"></span>
                    </span>
                    <div class="mail-contnet">
                      <h5 class="message-title">Nirav Joshi</h5>
                      <span class="mail-desc">Just see the my admin!</span>
                      <span class="time">9:02 AM</span>
                    </div>
                  </a>
                  <!-- Message -->
                  <!-- Message -->
                  <a href="#" class="message-item" id="chat_user_5" data-user-id="5">
                    <span class="user-img">
                      <img
                        src="../../assets/images/users/5.jpg"
                        alt="user"
                        class="rounded-circle"
                      />
                      <span class="profile-status offline pull-right"></span>
                    </span>
                    <div class="mail-contnet">
                      <h5 class="message-title">Sunil Joshi</h5>
                      <span class="mail-desc">Just see the my admin!</span>
                      <span class="time">9:02 AM</span>
                    </div>
                  </a>
                  <!-- Message -->
                  <!-- Message -->
                  <a href="#" class="message-item" id="chat_user_6" data-user-id="6">
                    <span class="user-img">
                      <img
                        src="../../assets/images/users/6.jpg"
                        alt="user"
                        class="rounded-circle"
                      />
                      <span class="profile-status offline pull-right"></span>
                    </span>
                    <div class="mail-contnet">
                      <h5 class="message-title">Akshay Kumar</h5>
                      <span class="mail-desc">Just see the my admin!</span>
                      <span class="time">9:02 AM</span>
                    </div>
                  </a>
                  <!-- Message -->
                  <!-- Message -->
                  <a href="#" class="message-item" id="chat_user_7" data-user-id="7">
                    <span class="user-img">
                      <img
                        src="../../assets/images/users/7.jpg"
                        alt="user"
                        class="rounded-circle"
                      />
                      <span class="profile-status offline pull-right"></span>
                    </span>
                    <div class="mail-contnet">
                      <h5 class="message-title">Pavan kumar</h5>
                      <span class="mail-desc">Just see the my admin!</span>
                      <span class="time">9:02 AM</span>
                    </div>
                  </a>
                  <!-- Message -->
                  <!-- Message -->
                  <a href="#" class="message-item" id="chat_user_8" data-user-id="8">
                    <span class="user-img">
                      <img
                        src="../../assets/images/users/8.jpg"
                        alt="user"
                        class="rounded-circle"
                      />
                      <span class="profile-status offline pull-right"></span>
                    </span>
                    <div class="mail-contnet">
                      <h5 class="message-title">Varun Dhavan</h5>
                      <span class="mail-desc">Just see the my admin!</span>
                      <span class="time">9:02 AM</span>
                    </div>
                  </a>
                  <!-- Message -->
                </div>
              </li>
            </ul>
          </div>
          <!-- End Tab 2 -->
          <!-- Tab 3 -->
          <div
            class="tab-pane fade p-3"
            id="pills-contact"
            role="tabpanel"
            aria-labelledby="pills-contact-tab"
          >
            <h6 class="mt-3 mb-3">Activity Timeline</h6>
            <div class="steamline">
              <div class="sl-item">
                <div class="sl-left bg-light-success text-success">
                  <i data-feather="user" class="feather-sm fill-white"></i>
                </div>
                <div class="sl-right">
                  <div class="font-medium">Meeting today <span class="sl-date"> 5pm</span></div>
                  <div class="desc">you can write anything</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left bg-light-info text-info">
                  <i data-feather="camera" class="feather-sm fill-white"></i>
                </div>
                <div class="sl-right">
                  <div class="font-medium">Send documents to Clark</div>
                  <div class="desc">Lorem Ipsum is simply</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left">
                  <img class="rounded-circle" alt="user" src="../../assets/images/users/2.jpg" />
                </div>
                <div class="sl-right">
                  <div class="font-medium">
                    Go to the Doctor <span class="sl-date">5 minutes ago</span>
                  </div>
                  <div class="desc">Contrary to popular belief</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left">
                  <img class="rounded-circle" alt="user" src="../../assets/images/users/1.jpg" />
                </div>
                <div class="sl-right">
                  <div>
                    <a href="#">Stephen</a>
                    <span class="sl-date">5 minutes ago</span>
                  </div>
                  <div class="desc">Approve meeting with tiger</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left bg-light-primary text-primary">
                  <i data-feather="user" class="feather-sm fill-white"></i>
                </div>
                <div class="sl-right">
                  <div class="font-medium">Meeting today <span class="sl-date"> 5pm</span></div>
                  <div class="desc">you can write anything</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left bg-light-info text-info">
                  <i data-feather="send" class="feather-sm fill-white"></i>
                </div>
                <div class="sl-right">
                  <div class="font-medium">Send documents to Clark</div>
                  <div class="desc">Lorem Ipsum is simply</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left">
                  <img class="rounded-circle" alt="user" src="../../assets/images/users/4.jpg" />
                </div>
                <div class="sl-right">
                  <div class="font-medium">
                    Go to the Doctor <span class="sl-date">5 minutes ago</span>
                  </div>
                  <div class="desc">Contrary to popular belief</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left">
                  <img class="rounded-circle" alt="user" src="../../assets/images/users/6.jpg" />
                </div>
                <div class="sl-right">
                  <div>
                    <a href="#">Stephen</a>
                    <span class="sl-date">5 minutes ago</span>
                  </div>
                  <div class="desc">Approve meeting with tiger</div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Tab 3 -->
        </div>
      </div>
    </aside>
    <div class="chat-windows"></div>
    <!-- -------------------------------------------------------------- -->
    <!-- All Jquery -->
    <!-- -------------------------------------------------------------- -->
    <script src="../../dist/libs/jquery/dist/jquery.min.js"></script>
    <script src="../../assets/extra-libs/taskboard/js/jquery-ui.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../dist/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- apps -->
    <script src="../../dist/js/app.min.js"></script>
    <script src="../../dist/js/app.init.boxed.js"></script>
    <script src="../../dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../dist/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.js"></script>
    <script src="../../dist/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/feather.min.js"></script>
    <script src="../../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="../../dist/libs/moment/min/moment.min.js"></script>
    <script src="../../dist/libs/fullcalendar/index.global.min.js"></script>
    <script src="../../dist/js/pages/calendar/cal-init.js"></script>
    <script></script>
  </body>
</html>