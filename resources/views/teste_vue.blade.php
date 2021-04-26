@extends('layouts.app')

@section('content')


<div id="app" class="">
  <button @click="showmodalremove = true;" >
    aaadasd
  </button>
  <example-component v-if="showmodalremove" @close="showmodalremove = false"></example-component>
</div>
@endsection