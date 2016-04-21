@extends('templates.content')

@section('content')
<div class="row">
 @can('overall_control')
<a class="btn btn-success btn-xs" href="{{ route('reg.data')}}" role="button"><span class="glyphicon glyphicon-plus"></span>Add body</a>
@endcan
<form class="navbar-form navbar-right" role="search">
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Find deceased">
    </div>
    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-search"></span></button>
</form>
</div>

<table class="table table-striped">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Surname</th> 
    <td>Sex</td>
    <td>Age</td>
    <td>Registered</td>
    <td>illness</td> 
    <td>Death Id</td>
    <td>Action</td>
  </tr>

  @if ($entries->count())
@foreach ($entries as $entry)

  <tr>
    <td>{{ $entry->id }}</td>
    <td><a href="/entry/{{ $entry->id }}">{{ $entry->first_name }}</a></td>
    <td><a href="/entry/{{ $entry->id }}">{{ $entry->last_name }}</a></td> 
    <td>{{ $entry->sex }}</td>
    <td>{{ $entry->age }}</td>
    <td> {{ $entry->created_at->diffForHumans() }}</td>
    <td>{{ $entry->illness }}</td> 
    <td>{{ $entry->death_id }}</td>
    <td><a class="btn btn-primary btn-xs" href="/entry/{{ $entry->id }}" role="button">View</a> 
     @can('overall_control')
    <a class="btn btn-success btn-xs" href="{{ route('profile.edit') }}" role="button">Edit</a> <a class="btn btn-danger btn-xs" href="" role="button">Delete</a>
     <a class="btn btn-warning btn-xs" href="{{ route('profile.edit') }}" role="button">Print</a></td>
    @endcan
  </tr>
  @endforeach


  @else
    <p>No entries</p>
  @endif

  
</table>
{!! $entries->render() !!}


@stop






