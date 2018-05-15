@extends('dashboard.dashboard_utama')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">

            <div class="x_content">
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Email Adress</th>
                    <th>Rules</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                  </tr>
                </thead>


                <tbody>
                        @foreach($data as $datas)
                             <tr>
                                <td>{{ $datas->name }}</td>
                                <td>{{ $datas->username }}</td>
                                <td>{{ $datas->email }}</td>
                                <td>{{ $datas->role_id }}</td>
                                <td><img src="/uploads/avatars/{{ $datas->avatar }}" style="width:50px; height:50px;"></td>
                                <td>
                                        <form action="{{ route('admin.destroy', $datas->id) }}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <a href="{{ route('admin.edit',$datas->id) }}" class=" btn btn-sm btn-primary">Ubah</a>
                                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</button>
                                            </form>
                                </td>
                              </tr>
                              @endforeach
                </tbody>
              </table>
              <a href="{{ route('admin.create') }}"><button type="submit" class="btn btn-success">Tambah User</button></a>
            </div>
          </div>
    </div>
@stop