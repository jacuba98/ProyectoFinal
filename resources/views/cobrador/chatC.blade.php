@extends('plantillas.plantilla_cobrador')
@section('content')
<div class="container">
  @livewire("chat-form")
  @livewire("chat-list")
</div>

@endsection
