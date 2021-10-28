@extends('layouts.base')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <table class="table table-success table-striped table-hover table-bordered text-center">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Email verified at</th>
                        <th>password </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id}}</td>
                        <td>{{ $user->name}}name</td>
                        <td>{{ $user->email}}</td>
                        <td>{{ $user->email_verified_at}}</td>
                        <td>{{ $user->password}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </div>
</div>