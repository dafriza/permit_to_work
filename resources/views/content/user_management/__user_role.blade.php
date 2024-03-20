<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Permission</th>
            <th scope="col">Create</th>
            <th scope="col">Read</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
            <th scope="col">Select All</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rolesAndPermissions::accesses as $permission)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $rolesAndPermissions->getFullAccessesName($loop->index) }}</td>
                <td><input type="checkbox" name="permission[]" data-access="{{ $permission }}"
                        value="create {{ $permission }}"></td>
                <td><input type="checkbox" name="permission[]" data-access="{{ $permission }}"
                        value="read {{ $permission }}"></td>
                <td><input type="checkbox" name="permission[]" data-access="{{ $permission }}"
                        value="update {{ $permission }}"></td>
                <td><input type="checkbox" name="permission[]" data-access="{{ $permission }}"
                        value="delete {{ $permission }}"></td>
                <td><input type="checkbox" onclick="selectAll('{{$permission}}')"></td>
            </tr>
        @endforeach
    </tbody>
</table>
