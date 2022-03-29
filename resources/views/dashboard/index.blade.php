@extends('layouts.main')

@section('container')
<br>
<br>
<h3 class="animate__animated animate__fadeIn">My Post</h3>
<table class="table animate__animated animate__fadeIn">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Judul</th>
      <th scope="col">Domain</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($kontens as $konten)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td class="col-sm-6">{{ $konten->judul }}</td>
      <td>{{ $konten->domain }}</td>
      <td>
              <a href="" class="badge bg-info"><i class="bi bi-eye"></i></a>
              <a href="" class="badge bg-warning"><i class="bi bi-pen"></i></a>
              <a href="" class="badge bg-danger"><i class="bi bi-x"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection