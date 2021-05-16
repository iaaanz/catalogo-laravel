@extends('admin.layout')

@section('conteudo')
<div class="page-wrapper">
  <div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Produtos</h4>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    @if (session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
    @endif
    <div class="row">
      <div class="col-sm-12">
        <div class="white-box">
          <div class="d-flex justify-content-between">
            <h3 class="box-title">Produtos</h3>
            <a class="text-white" href="{{ route('admin.product.create') }}">
              <button class="btn btn-success text-white me-3">Cadastrar
              </button>
            </a>
          </div>
          <div class="table-responsive">
            <table class="table text-nowrap">
              <thead>
                <tr>
                  <th class="col-1">#</th>
                  <th class="col">Item</th>
                  <th class="col-1">Preço</th>
                  <th class="col-1">Qtd</th>
                  <th class="col-1">Unidade de medida</th>
                  <th class="col-2">Subcategoria</th>
                  <th class="col-1">Status</th>
                  <th class="col-1">Ação</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $product)
                <tr>
                  <td>{{$product->id}}</td>
                  <td>{{$product->name}}</td>
                  <td>R$ {{$product->price_per_unit}}</td>
                  <td>{{$product->in_stock}}</td>
                  <td>{{$product->basic_unit}}</td>
                  <td>{{$product->subcatName}}</td>
                  <td>{{$product->active_for_sale}}</td>
                  <td>
                    <span class="d-flex justify-content-around">
                      <a href="{{ route('admin.product.edit', ['id'=> $product->id]) }}">
                        <button type="button" class="btn btn-primary">
                          <i style="font-size: 1.2rem;" class="text-white fas fa-edit"></i>
                        </button>  
                      </a>
                      <button type="button" class="btn btn-danger" @click="deleteId({{$product->id}}, 'prod')">
                        <i style="font-size: 1.2rem;" class="text-white fas fa-times fa-2x"></i>
                      </button>
                    </span>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      {{ $products->links() }}
    </div>
  </div>
</div>
<modal-transition>
  <modal-remove v-if="sModalRemove" :del-item="delObj" @cancel="showModalRemove"/>  
<modal-transition>
@endsection