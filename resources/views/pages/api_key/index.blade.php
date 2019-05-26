@extends('layouts/master', ['title' => 'Rest - API KEY'])
@section('content')
  <h4 class="mt-4">Setup API KEY</h4>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">API KEY</li>
    </ol>
  </nav>
  <hr>
  Rest Client Laundry tidak di peruntukkan untuk public, hanya pengguna-pengguna yang telah bekerja sama
  yang dapat mengakses dan mengoperasikan baik dari segi frontEnd maupun backEnd.
  Oleh karena itu Goyang Pensil merancang API ini dengan pengaturan keamanan API KEY managemen, dengan adanya
  fitur ini API dapat dengan mudah mengenal pengguna yang telah terdaftar dalam sistem Laundry Goyang Pensil.
  <br>
  <br>
  <table width="100%" border="1" cellpadding="3">
    <tr>
      <th width="20%">Parameter</th>
      <th width="30%">Key</th>
      <th width="50%">Description</th>
    </tr>
    <tr>
      <td>API_KEY</td>
      <td>: 123xx</td>
      <td>Setiap customer memiliki kunci yang unik</td>
    </tr>
    <tr>
      <td>APP_TOKEN</td>
      <td>: xxxxxxxxxxxxxxxxxx</td>
      <td>Berfungsi untuk mendeskripsikan aplikasi apa yang aktif untuk kunci tersebut</td>
    </tr>
  </table>
@endsection
