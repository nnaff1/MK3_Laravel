@extends('layouts.admin')

@section('title', 'Data Siswa')

@section('content')
<div class="container">
  <h1 class="mb-4">Data Siswa</h1>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>NIS</th>
        <th>Nama Lengkap</th>
        <th>Jenis Kelamin</th>
        <th>NISN</th>
      </tr>
    </thead>
    <tbody>
      @forelse($students as $student)
        <tr>
          <td>{{ $student->id }}</td>
          <td>{{ $student->nis }}</td>
          <td>{{ $student->nama_lengkap }}</td>
          <td>{{ $student->jenis_kelamin }}</td>
          <td>{{ $student->nisn }}</td>
        </tr>
      @empty
        <tr>
          <td colspan="6" class="text-center">Belum ada data siswa</td>
        </tr>
      @endforelse
    </tbody>
  </table>
</div>
@endsection
