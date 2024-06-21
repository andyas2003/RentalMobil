<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo site_url('admin/dashboard'); ?>">Home</a></li>
          </ol>
        </div>
      </div>
      <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success alert-transparent">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
      <?php endif; ?>
      <?php if ($this->session->flashdata('success_changed')): ?>
        <div class="alert alert-success alert-transparent">
          <?php echo $this->session->flashdata('success_changed'); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
  <section class="content">
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6">
              <div class="card bg-primary-gradient">
                <div class="card-header border-0">
                  <h3 class="card-title">
                    <i class="fas fa-map-marker-alt mr-1"></i>
                    Rental Locations
                  </h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-primary btn-sm daterange" title="Date range">
                      <i class="far fa-calendar-alt"></i>
                    </button>
                    <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div id="mapid" style="height: 250px; width: 100%;"></div>
                </div>
              </div>
            </div>
      </section>
    </div>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        var mymap = L.map('mapid').setView([-7.7956, 110.3695], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(mymap);
        L.marker([-7.7956, 110.3695]).addTo(mymap)
          .bindPopup('Yogyakarta')
          .openPopup();
      });
    </script>