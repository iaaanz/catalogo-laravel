@extends('admin.layout')

@section('conteudo')
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
  <!-- ============================================================== -->
  <!-- Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Produtos</h4>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="white-box">
          <h3 class="box-title">Produtos</h3>
          <div class="table-responsive">
            <table class="table text-nowrap">
              <thead>
                <tr>
                  <th class="col">#</th>
                  <th class="col">Item</th>
                  <th class="col">Preço</th>
                  <th class="col">Qtd</th>
                  <th class="col-3">Unidade de medida</th>
                  <th class="col-1">Status</th>
                  <th class="col-1">Ação</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $product)
                <tr>
                  <td>{{$product->id}}</td>
                  <td>{{$product->name}}</td>
                  <td>{{$product->price_per_unit}}</td>
                  <td>{{$product->in_stock}}</td>
                  <td>{{$product->basic_unit}}</td>
                  <td>{{$product->active_for_sale}}</td>
                  <td>
                    <button type="button" class="btn btn-primary">
                      <a href="{{route('admin.product.edit', ['id'=> 1])}}">
                        <i style="font-size: 1.2rem;" class="text-white fas fa-edit"></i>
                      </a>
                    </button>
                    <button type="button" class="btn btn-danger">
                      <i style="font-size: 1.2rem;" class="text-white fas fa-times fa-2x"></i>
                    </button>
                  </td> 
                </tr> 
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
  </div>
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
@endsection