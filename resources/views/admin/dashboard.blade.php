@extends('admin.layout')

@section('conteudo')
<div class="page-wrapper">
  <div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Dashboard</h4>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-12">
        <div class="white-box analytics-info">
          <h3 class="box-title">Total de visitas</h3>
          <ul class="list-inline two-part d-flex align-items-center mb-0">
            <li>
              <div id="sparklinedash"><canvas width="67" height="30" style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
              </div>
            </li>
            <li class="ms-auto"><span class="counter text-success">659</span></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-12">
        <div class="white-box analytics-info">
          <h3 class="box-title">Total de visualizações</h3>
          <ul class="list-inline two-part d-flex align-items-center mb-0">
            <li>
              <div id="sparklinedash2"><canvas width="67" height="30" style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
              </div>
            </li>
            <li class="ms-auto"><span class="counter text-purple">869</span></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-12">
        <div class="white-box analytics-info">
          <h3 class="box-title">Visitantes únicos</h3>
          <ul class="list-inline two-part d-flex align-items-center mb-0">
            <li>
              <div id="sparklinedash3"><canvas width="67" height="30" style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
              </div>
            </li>
            <li class="ms-auto"><span class="counter text-info">911</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection