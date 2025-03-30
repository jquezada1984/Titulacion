<?= $this->extend('layouts/master') ?>

<?= $this->section('title') ?>Usuario<?= $this->endSection() ?>

<?= $this->section('PageTitleBreadCrumb') ?>Usuario<?= $this->endSection() ?>

<?= $this->section('breadcrumb') ?>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Principal</a></li>
        <li class="breadcrumb-item active" aria-current="page">Usuario</li>
    </ol>
<?= $this->endSection() ?>   


<?= $this->section('content') ?>

<div class="card">
                <div class="card-body">
                  <h4 class="card-title">Sample Form with the Icons</h4>
                  <h5 class="card-subtitle mb-3 pb-3 border-bottom">
                    made with bootstrap elements
                  </h5>
                  <form class="">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" placeholder="Username" />
                      <label
                        ><i data-feather="user" class="feather-sm text-dark fill-white me-2"></i
                        >Username</label
                      >
                    </div>
                    <div class="form-floating mb-3">
                      <input type="email" class="form-control" placeholder="Email" />
                      <label
                        ><i data-feather="mail" class="feather-sm text-dark fill-white me-2"></i
                        >Email address</label
                      >
                    </div>
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control" placeholder="Password" />
                      <label
                        ><i data-feather="lock" class="feather-sm text-dark fill-white me-2"></i
                        >Password</label
                      >
                    </div>
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control" placeholder="CPassword" />
                      <label
                        ><i data-feather="lock" class="feather-sm text-dark fill-white me-2"></i
                        >Confirm Password</label
                      >
                    </div>

                    <div class="d-md-flex align-items-center">
                      <div class="form-check me-sm-2">
                        <input type="checkbox" class="form-check-input" id="sf1" value="check" />
                        <label class="form-check-label" for="sf1">Remember Me</label>
                      </div>
                      <div class="mt-3 mt-md-0 ms-auto">
                        <button type="submit" class="btn btn-primary font-medium rounded-pill px-4">
                          <div class="d-flex align-items-center">
                            <i data-feather="send" class="feather-sm fill-white me-2"></i>
                            Submit
                          </div>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
<?= $this->endSection() ?>