@extends('layouts')

<!-- 1//////////////////////////// -->
@section('title')
User
@endsection
<!-- 1//////////////////////////// -->



<!-- 2//////////////////////////// -->

<!-- /// -->
<!-- 2//////////////////////////// -->


@section('contents')
<!-- code -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

@if(empty($users))
<p>No Date</p>
@else
<table class="table">
  <thead>
    <tr>
      <a href="{{ route('users.create') }}" class="btn btn-primary">Create</a>
    </tr>
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Birthday</th>
    <th>Posts</th>
  </tr>
  </thead>
  <tbody>

    @foreach($users as $user)
    <tr>
      <td>{{ $user['id'] }}</td>
      <td>{{ $user['name'] }}</a></td>
      <td>{{ $user['email'] }}</td>
      <td>{{ $user['birthday'] }}</td>
      <td>{{ count($user['posts']) }}</td>
      <td><a href="/users/edit/{{ $user['id'] }}" class="btn btn-success">Update</a></td>
      <td>
        <form action="{{route('users.destroy' , $user['id'] )}}" method="POST">
          @csrf
          <input class="btn btn-danger" type="submit" value="Delete">
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endif

    </section>
    <!-- /.content -->
  </div>
@endsection