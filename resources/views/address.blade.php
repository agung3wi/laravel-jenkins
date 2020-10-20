@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Alamat</div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama Alamat</th>
                            <th>Isi Alamat</th>
                        </tr>
                        @foreach($addresses as $address)
                        <tr>
                            <th>Nama Alamat</th>
                            <th>Isi Alamat</th>
                        </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection