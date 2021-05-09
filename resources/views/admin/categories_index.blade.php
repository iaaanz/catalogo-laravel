@extends('admin.layout')

@section('conteudo')
<div class="page-wrapper">
  <div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Categorias</h4>
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
      <div class="col-sm-6">
        <div class="white-box">
          <div class="d-flex justify-content-between">
            <h3 class="box-title">Categorias</h3>
            <a class="text-white">
              <button class="btn btn-success text-white me-3"
              @click="showCreateCategory">Cadastrar
              </button>
            </a>
          </div>
          <div class="table-responsive">
            <table class="table text-nowrap">
              <thead>
                <tr>
                  <th class="col">#</th>
                  <th class="col">Nome</th>
                  <th class="col-1">Ação</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($categories as $category)
                <tr>
                  <td>{{ $category->id }}</td>
                  <td>{{ $category->category_name }}</td>
                  <td>
                    <span class="d-flex justify-content-end">
                      <button type="button" class="btn btn-primary" @click="editCategory({{$category}})">
                        <i style="font-size: 1.2rem;" class="text-white fas fa-edit"></i>
                      </button>  
                      <button type="button" class="btn btn-danger ms-3" @click="confirmDelCategory({{$category->id}})">
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
      <div class="col-sm-6">
        <div class="white-box">
          <div class="d-flex justify-content-between">
            <h3 class="box-title">Subcategorias</h3>
            <a class="text-white" href="">
              <button class="btn btn-success text-white me-3">Cadastrar
              </button>
            </a>
          </div>
          <div class="table-responsive">
            <table class="table text-nowrap">
              <thead>
                <tr>
                  <th class="col">#</th>
                  <th class="col">Nome</th>
                  <th class="col-1">Ação</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td></td>
                  <td></td>
                  <td>
                    <span class="d-flex justify-content-end">
                      <a href="">
                        <button type="button" class="btn btn-primary">
                          <i style="font-size: 1.2rem;" class="text-white fas fa-edit"></i>
                        </button>  
                      </a>
                      <button type="button" class="btn btn-danger ms-3">
                        <i style="font-size: 1.2rem;" class="text-white fas fa-times fa-2x"></i>
                      </button>
                    </span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<modal-transition>
  <modal-create-category v-if="sModalRegisterCategory" :category-edit="selectedCategory" @cancel="showCreateCategory"/>
</modal-transition>
<modal-transition>
  <modal-remove v-if="sModalRemove" @confirm="deleteCategory" @cancel="showModalRemove"/>  
</modal-transition>
@endsection