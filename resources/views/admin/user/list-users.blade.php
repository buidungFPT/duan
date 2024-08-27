@extends('admin.layouts.defaul')



@section('title')
@parent

@endsection

@push('style')
@endpush

@section('content')



<div class="breadcomb-ctn text-center">
    <h2>Chào Mừng TDD</h2>
    <p>DANH SACH NGUOI DUNG  <span class="bread-ntd"></span></p>
    <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#addUser">Thêm Mới</a>
</div>

<div class="card-body pt-2">

    @if (session('message'))
    <div class="alert alert-primary" role="alert">

        {{session('message')}}
    </div>
    @endif
    <div class="tab-content">
        <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1">
            <div class="table-responsive">
                <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                    <thead>
                        <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                            <th class="p-0 pb-3 min-w-100px">
                                STT
                            </th>
                            <th class="p-0 pb-3 min-w-100px pe-13">
                                Name
                            </th>
                            <th class="p-0 pb-3 w-150px pe-7">
                                Email
                            </th>
                            <th class="p-0 pb-3 w-150px pe-7">
                                Role
                            </th>
                            <th class="p-0 pb-3 w-100px">ACTIONS</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listUser as $key => $value )
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{ $value -> name  }}</td>
                            <td> {{ $value -> email }}</td>
                            <td> @if ($value->role == '1' )
                                Admin

                                @elseif($value->role == '2')
                                User

                                @endif
                            </td>
                            <td>
                                <button class=" btn btn-danger " data-id="{{$value->id}}" data-bs-toggle="modal"
                                    data-bs-target="#modalDelete">Xoa</button>

                                <button class=" btn btn-light p-2" data-id="{{$value->id}}" data-bs-toggle="modal"
                                    data-bs-target="#modalEdit">Sua</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{--ADDD--}}
    <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="addUserLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title bg-info btn btn-danger" id="addUserLabel">Them Moi USER</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('admin.users.addUsers')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class=" mt-3">
                            <label for="name">name </label>
                            <input type="text" name="name" id="name" class="form-control btn-light">
                        </div>
                        <div class=" mt-3">
                            <label for="email">Email </label>
                            <input type="email" name="email" id="email" class="form-control btn-light">
                        </div>
                        <div class=" mt-3">
                            <label for="password">password </label>
                            <input type="text" name="password" id="password" class="form-control btn-light">
                        </div>
                        <div class=" mt-3">
                            <label for="role">role </label>
                            <select class="form-control" id="role" name="role">
                                <option value="1">Admin</option>
                                <option value="2">User</option>
                            </select>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Them moi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{--DELET--}}
    <div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="modalDeleteLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5  btn btn-danger" id="modalDeleteLabel">THONG BAO </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Bạn có chắc muốn xóa người dùng này?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                    <form action="" id="confirmDelete" method="post">

                        @method('delete')
                        @csrf
                        <button class="btn btn-danger">XAC NHAN </button>
                    </form>

                </div>
            </div>
        </div>
    </div>




    {{--EDIT--}}
    <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 bg-info btn btn-success" id="modalEditLabel">Chinh sua </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('admin.users.updateUsers')}}" method="post">
                    @method('PATCH')

                    @csrf

                    <div class="modal-body">
                        <input type="hidden" value="" id="idUserupdate" name="idUser">
                        <div class=" mt-3">
                            <label for="nameupdate">name </label>
                            <input type="text" name="name" id="nameupdate" class="form-control btn-light">
                        </div>
                        <div class=" mt-3">
                            <label for="emailupdate">Email </label>
                            <input type="email" name="email" id="emailupdate" class="form-control btn-light">
                        </div>
                        <!-- <div class=" mt-3">
                        <label for="passwordUP">password </label>
                        <input type="text" name="passwordUP" id="passwordUP" class="form-control btn-light">
                    </div> -->
                        <div class=" mt-3">
                            <label for="roleupdate">role </label>
                            <select class="form-control" id="roleupdate" name="role">
                                <option value="1">Admin</option>
                                <option value="2">User</option>
                            </select>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">UPDATE</button>
                    </div>?--
                </form>
            </div>
        </div>
       
    </div>
    @endsection
    @push('script')
    <Script>
    var modalDelete = document.getElementById('modalDelete')
    modalDelete.addEventListener('show.bs.modal', function(event) {

        var button = event.relatedTarget

        var idUser = button.getAttribute('data-id')

        let confirmDelete = document.querySelector('#confirmDelete')
        confirmDelete.setAttribute('action', '{{route("admin.users.deleteUsers")}}?id=' + idUser)
    })


    var modalEdit = document.getElementById('modalEdit')
    modalEdit.addEventListener('show.bs.modal', function(event) {

        var button = event.relatedTarget

        var idUser = button.getAttribute('data-id')
        // APi
        let url = "{{route('admin.users.detailUsers')}}?id=" + idUser;
        fetch(url, {
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                },
            })
            .then(response => response.json())
            .then((data) => {
                document.querySelector('#idUserupdate').value = data.id
                document.querySelector('#nameupdate').value = data.name
                document.querySelector('#emailupdate').value = data.email
                document.querySelector('#roleupdate').value = data.role

            })


    })
    </Script>
    @endpush