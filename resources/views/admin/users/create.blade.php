@extends('layouts.admin')

@section('content')
    <h2>Add New User</h2>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required>
        <label>Email:</label>
        <input type="email" name="email" required>
        <label>Password:</label>
        <input type="password" name="password" required>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
@endsection
