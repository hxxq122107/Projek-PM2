@extends('layout.dasar')
    <!-- START DATA -->
    @section('konten')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="{{url('pengguna_1')}}" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>
                
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='{{route('pengguna_1.create')}}' class="btn btn-primary">+ Tambah Data</a>
                </div>
          
                <table class="table">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-1">email</th>
                            <th class="col-md-1">Nama</th>
                            <th class="col-md-1">password</th>
                            <th class="col-md-1">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>1</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->password}}</td>
                            <td>
                                <a href='{{url('pengguna_1/'.$item->id.'/edit')}}' class="btn btn-warning btn-sm">Edit</a>
                                <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' 
                                action="{{ route('pengguna_1.destroy', $item->id) }}" method="post">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger btn-sm">Del</button>
                          </form>
                          
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
               
          </div>
          <!-- AKHIR DATA -->
          @endsection
