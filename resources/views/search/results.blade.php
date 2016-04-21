@extends('templates.content')

@section('content')
<h3>Your search for "{{ Request::input('query') }}"</h3>
 @if (!$entries->count())
  <p>No results found. <div class="row">
  <a class="btn btn-success btn-xs" href="{{ route('entry.index')}}" role="button"><span class="glyphicon glyphicon-list-alt"></span> Back to list</a>
</div></p>
 @else
  <div class="row">
    <div class="col-lg-12">
       @foreach ($entries as $entry)
        @include('entry/partials/entryblock')
        @endforeach
    </div>
  </div>
  @endif
@stop






