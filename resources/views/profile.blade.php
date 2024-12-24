<!-- filepath: /c:/Users/user/Documents/comp sci/stud/5th/Prak PemWeb/W-10 Laravel/wildlife-harmony/resources/views/profile.blade.php -->
@extends('layouts.app')

@section('content')
<div class="profile-container">
    <h2>Profile</h2>
    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data" id="profileForm">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name', auth()->user()->name) }}" readonly required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email', auth()->user()->email) }}" readonly required>
        </div>

        <div class="form-group">
            <label for="profile_picture">Profile Photo</label>
            <input type="file" id="profile_picture" name="profile_picture" accept="image/*" readonly>
        </div>

        <div class="form-group">
            <label for="password">New Password</label>
            <input type="password" id="password" name="password" readonly>
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirm New Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" readonly>
        </div>

        <button type="button" id="editProfileBtn">Edit Profile</button>
        <button type="submit" id="saveProfileBtn" style="display: none;">Save Profile</button>
    </form>
</div>

<script>
    document.getElementById('editProfileBtn').addEventListener('click', function() {
        document.getElementById('name').removeAttribute('readonly');
        document.getElementById('email').removeAttribute('readonly');
        document.getElementById('profile_picture').removeAttribute('readonly');
        document.getElementById('password').removeAttribute('readonly');
        document.getElementById('password_confirmation').removeAttribute('readonly');
        document.getElementById('editProfileBtn').style.display = 'none';
        document.getElementById('saveProfileBtn').style.display = 'inline-block';
    });
</script>
@endsection
