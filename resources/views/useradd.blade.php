<!-- Modal Add New User -->
<div class="modal fade" id="addUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="addUserLabel">Add User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('users.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            aria-describedby="" placeholder="Name" required>
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email"
                            aria-describedby="emailHelp" placeholder="Email Address" required>
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Password" required>
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password"
                            placeholder="Confirm Password" required>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>