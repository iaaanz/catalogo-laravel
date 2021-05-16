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
    <form method="POST" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-sm-12">
          <div class="white-box">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Produto</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Produto"
                  value="{{ old('name') }}">
              </div>
              <div class="form-group col-md-3">
                <label for="price_per_unit">Preço</label>
                <input type="text" class="form-control" id="price_per_unit" name="price_per_unit" placeholder="Preço"
                  value="{{ old('price_per_unit') }}">
              </div>
              <div class="form-group col-md-3">
                <label for="basic_unit">Unidade de medida</label>
                <input type="text" class="form-control" id="basic_unit" name="basic_unit" placeholder="Ex: CX, UN, CM"
                  value="{{ old('basic_unit') }}">
              </div>
            </div>
            <div class="form-group">
              <textarea class="form-control" for="description" rows="5" placeholder="Descrição"
                name="description"></textarea>
            </div>
            <div class="row">
              <div class="form-group col-md-2">
                <label for="in_stock">Em estoque</label>
                <input type="text" class="form-control" id="in_stock" name="in_stock" placeholder="Ex: 25"
                  value="{{ old('in_stock') }}">
              </div>
              <div class="form-group col-md-3">
                <label for="file">Imagem</label>
                <input type="file" name="product_image[]" class="form-control" multiple>
              </div>
              <div class="form-group col-md-2">
                <label for="limited">Limitado</label>
                <select id="limited" class="form-control" name="limited">
                  <option>Sim</option>
                  <option selected>Não</option>
                </select>
              </div>
              <div class="form-group col-md-2">
                <label for="subcategory">Subcategoria</label>
                <select id="subcategory" class="form-control" name="subcategory">
                  @foreach ($subcategories as $subcategory)
                    <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group col-md-1">
                <label>Status</label>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="active_for_sale" name="active_for_sale">
                  <label class="form-check-label" for="active_for_sale">
                    Ativo
                  </label>
                </div>
              </div>
              <div class="form-group col-md-1 d-flex align-items-end">
                <button type="submit" class="btn btn-primary">Salvar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
