@extends('layouts.admin')
@section('title','Artikel')
@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="dashboard_wrap">
            
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 mb-4">
                    <h6 class="m-0">Artikel <a href="/admin/artikel/create" class="badge badge-primary">Tambah Data</a></h6>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 mb-2">
                    <div class="table-responsive">
                        <table class="table dash_list">
                            <thead>
                                <tr>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Diperbarui</th>
                                    <th scope="col">Dibuat</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($articles as $artikel)
                                <tr>
                                    <td><a href="/assets/img/artikel/{{ $artikel->picture }}" data-fancybox><img src="/assets/img/artikel/{{ $artikel->picture }}" class="img-fluid" width="80" alt="" /></a></td>
                                    <td><div class="smalls lg">{{ $artikel->title }}</div></td>
                                    <td><span class="smalls lg">{{ $artikel->updated_at }}</span></td>
                                    <td><span class="smalls lg">{{ $artikel->created_at }}</span></td>
                                    <td>
                                        <div class="dropdown show">
                                            <a class="btn btn-action" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </a>
                                            <div class="drp-select dropdown-menu">
                                                <a class="dropdown-item" href="/admin/artikel/{{ $artikel->id }}/edit">Edit</a>
                                                <form action="/admin/artikel/{{ $artikel->id }}" method="POST">@csrf @method('delete')
                                                    <button class="dropdown-item" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{ $articles->links() }}
    </div>
</div>
@endsection