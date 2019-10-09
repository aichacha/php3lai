@extends('layouts')

<!-- 1//////////////////////////// -->
@section('title')
post
@endsection
<!-- 1//////////////////////////// -->


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

@if(empty($posts))
<p>No Data</p>
@else
<table class="table">
  <thead>
    <th>User ID</th>
    <th>Content</th>
    <th>User name</th>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>      
      <td>{{ $post['user_id'] }}</td>
      <td>{{ $post['content'] }}</td>
      <td>{{ $post['user']['name'] }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endif

    </section>
    <!-- /.content -->
  </div>
@endsection