<?= $this->extend('layouts/master') ?>

<?= $this->section('title') ?>Calendario<?= $this->endSection() ?>


<?= $this->section('PageTitleBreadCrumb') ?>Calendario<?= $this->endSection() ?>

<?= $this->section('breadcrumb') ?>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Principal</a></li>
        <li class="breadcrumb-item active" aria-current="page">Calendario</li>
    </ol>
<?= $this->endSection() ?>                 

<?= $this->section('content') ?>
   
<div class="mb-3 text-end">
    <button id="btnLlamarServicios" class="btn btn-primary">
            Asignador automático de fechas para tesis
    </button>
</div>


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
                                Actualizar
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="">
                                        <label class="form-label">Profesor</label>
                                        <select id="id_profesor" name="id_profesor" class="form-control">
                                            <option value="">Seleccione un profesor</option>
                                            <?php foreach ($profesores as $profesor): ?>
                                                <option value="<?= $profesor->id_tribunal ?>">
                                                    <?= $profesor->miembros_tribunal ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="">
                                        <label class="form-label">Tesis</label>
                                        <input id="event-title" type="text" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-12 mt-4">
                                    <div><label class="form-label">Estado</label></div>
                                    <div class="d-flex">
                                        <div class="n-chk">
                                            <div class="form-check form-check-primary form-check-inline">
                                                <input class="form-check-input" type="radio" name="event-level" value="Danger" id="modalDanger" />
                                                <label class="form-check-label" for="modalDanger">Inactivo</label>
                                            </div>
                                        </div>
                                        <div class="n-chk">
                                            <div class="form-check form-check-warning form-check-inline">
                                                <input class="form-check-input" type="radio" name="event-level" value="Success" id="modalSuccess" />
                                                <label class="form-check-label" for="modalSuccess">Activo</label>
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

                            <div class="modal-footer">
                                <button type="button" class="btn" data-bs-dismiss="modal">
                                    Cerrar
                                </button>
                                <button type="button" class="btn btn-success btn-update-event" data-fc-event-public-id="">
                                    Actualizar
                                </button>
                                <button type="button" class="btn btn-primary btn-add-event">
                                    Agregar
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
              </div>
              <!-- END MODAL -->
            </div>
          </div>
        </div>


<?= $this->endSection() ?>


<?= $this->section('javascript') ?>
    <script src="<?=  base_url('dist/libs/moment/min/moment.min.js') ?>"></script>
    <script src="<?=  base_url('dist/libs/fullcalendar/index.global.min.js') ?>"></script>
    <script src="<?=  base_url('dist/js/pages/calendar/cal-init.js') ?>"></script>
<?= $this->endSection() ?>