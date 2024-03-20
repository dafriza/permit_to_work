<input type="hidden" name="id" value="{{ $user->id }}">
<div class="input-group mb-3">
    <span class="input-group-text">First and last name</span>
    <input type="text" aria-label="First name" name="first_name" class="form-control" value="{{ $user->first_name }}">
    <input type="text" aria-label="Last name" name="last_name" class="form-control" value="{{ $user->last_name }}">
</div>
<div class="input-group mb-3">
    <span class="input-group-text" id="email">Email</span>
    <input type="email" name="email" class="form-control" placeholder="email" aria-label="email"
        aria-describedby="email" value="{{ $user->email }}">
</div>
<div class="input-group mb-3">
    <span class="input-group-text" id="password">Password</span>
    <input type="password" name="password" class="form-control" placeholder="password" aria-label="password"
        aria-describedby="password" value="{{ $user->password }}">
</div>
<div class="input-group mb-3">
    <span class="input-group-text" id="phone_number">Phone</span>
    <input type="text" name="phone_number" class="form-control" placeholder="phone_number" aria-label="phone_number"
        aria-describedby="phone_number" value="{{ $user->phone_number }}">
</div>
<div class="input-group mb-3">
    <span class="input-group-text" id="address">Address</span>
    <input type="text" name="address" class="form-control" placeholder="address" aria-label="address"
        aria-describedby="address" value="{{ $user->address }}">
</div>
<div class="input-group mb-3">
    <span class="input-group-text" id="role_assignment">Role Assignment</span>
    <select class="form-select" name="role_assignment">
        <option value="{{ $user->role_assignment }}" selected>{{ $user->role_assignment }}</option>
        @foreach ($user->get_all_role_assignment as $role_assignment)
            <option value="{{ $role_assignment }}">{{ $role_assignment }}</option>
        @endforeach
    </select>
</div>
