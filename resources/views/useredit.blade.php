<!-- Modal Edit User -->
<div class="modal fade" id="editUser{{ $user->id }}" role="dialogdata-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="addUserLabel">Edit User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('users.update', $user->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ $user->name }}" aria-describedby="" placeholder="Name" required>
                        @error('name')
                            <div class="alert alert-danger">
                                {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email
                            address</label>
                        <input type="email" class="form-control" id="email" name="email"
                            value="{{ $user->email }}" placeholder="Email Address" required>
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-warning btn-block"><i class="fas fa-save"></i>
                            Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
