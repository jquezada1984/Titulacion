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
                <img src="../../assets/images/logo-icon.png" alt="homepage" class="dark-logo" style="width: 86%;"/>
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
                        <h4 class="mb-0 mt-1">4 New</h4>
                        <span class="fw-light">Notifications</span>
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
                    Profile</a
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