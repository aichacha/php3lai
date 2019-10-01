@extends('layouts')

@section('title')

long đại ca

@endsection

@section('contens')
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

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
    <!-- /.content -->




    @if(empty($posts))
    <p>ko du lieu</p>


    @else
      <table class="table">
        <thead>
       
        <th>content</th>
        </thead>

        <tbody>
          @foreach($posts as $posts)
          <tr>
            
            <td>{{ $posts['content'] }}</td>

          </tr>
          @endforeach
        </tbody>
      </table>

    @endif





  </div>
@endsection
