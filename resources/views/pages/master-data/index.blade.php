@extends('layouts/master', ['title' => 'Rest - Master'])
@section('content')
  <?php
    $data = array(
      0  => array(
        'title'     => 'Data User',
        'deskripsi' => 'Data pengguna yang dapat mengakses sistem Laundry',
        'link'      => '/pages/users',
        'icon'      => 'fa fa-users',
      ),
      1  => array(
        'title'     => 'Data Items',
        'deskripsi' => 'Data item digunakan oleh pengguna untuk mendefiniskan apa saja item yang digunakan selama bertransaksi',
        'link'      => '/pages/items',
        'icon'      => 'fa fa-list',
      ),
      2  => array(
        'title'     => 'Data Class',
        'deskripsi' => 'Data yang dipergunakan untuk mengklasifikasikan produk customer',
        'link'      => '/pages/class',
        'icon'      => 'fa fa-th-large',
      ),
      3  => array(
        'title'     => 'Data Outlet',
        'deskripsi' => 'Daftar outlet laundry yang di gunakan oleh pengguna, memungkinkan pengguna dapat mengakses outlet
        secara bercabang',
        'link'      => '/pages/outlet',
        'icon'      => 'fa fa-building',
      ),
      4  => array(
        'title'     => 'Data Customer',
        'deskripsi' => 'Daftar Customer yang telah berlangganan pada setiap outlet',
        'link'      => '/pages/customer',
        'icon'      => 'fa fa-users',
      ),
    );
  ?>
  <h4 class="mt-4">Manage master data</h4>
  <hr style="padding:0px;margin:0px;">
    <!-- <img src="..." class="card-img-top" alt="..."> -->
    <div class="row">
      <?php
        foreach ($data as $key => $value) {
          ?>
          <div class="card col-sm-4" style="margin:15px;">
            <div class="card-body">
              <h5 class="card-title"><i class="<?php echo $value['icon']; ?>"></i> <?php echo $value['title']; ?></h5>
              <p class="card-text"><?php echo $value['deskripsi']; ?></p>
              <a href="<?php echo $value['link']; ?>" class="btn btn-primary">Detail</a>
            </div>
          </div>
          <?php
        }
      ?>
    </div>
@endsection
