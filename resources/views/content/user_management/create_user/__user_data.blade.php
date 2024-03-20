<div class="input-group mb-3">
    <span class="input-group-text">First and last name</span>
    <input type="text" aria-label="First name" name="first_name" class="form-control">
    <input type="text" aria-label="Last name" name="last_name" class="form-control">
</div>
<div class="input-group mb-3">
    <span class="input-group-text" id="password">Email</span>
    <input type="email" name="email" class="form-control" placeholder="email" aria-label="email"
        aria-describedby="email">
</div>
<div class="input-group mb-3">
    <span class="input-group-text" id="password">Password</span>
    <input type="password" name="password" class="form-control" placeholder="password" aria-label="password"
        aria-describedby="password">
</div>
<div class="input-group mb-3">
    <span class="input-group-text" id="phone_number">Phone</span>
    <input type="text" name="phone_number" class="form-control" placeholder="phone_number" aria-label="phone_number"
        aria-describedby="phone_number">
</div>
<div class="input-group mb-3">
    <span class="input-group-text" id="address">Address</span>
    <input type="text" name="address" class="form-control" placeholder="address" aria-label="address"
        aria-describedby="address">
</div>
<div class="input-group mb-3">
    <span class="input-group-text" id="role_assignment">Role Assignment</span>
    <select class="form-select" name="role_assignment">
        @foreach ($roleAssignments as $roleAssignment)
            <option value="{{ $roleAssignment }}">{{ $roleAssignment }}</option>
        @endforeach
    </select>
</div>
