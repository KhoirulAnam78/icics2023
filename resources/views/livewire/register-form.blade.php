<div>
    <form wire:submit.prevent="save">
        <div class="form-group">
            <label for="full_name1">Full Name</label>
            <input type="text" class="form-control @error('full_name1') is-invalid @enderror" wire:model="full_name1"
                id="full_name1" name="full_name1" placeholder="Full Name (without academic title) Ex: Muhammad Ridho">
            @error('full_name1')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <small id="fullName" class="form-text text-muted"></small>
            <input type="text" class="form-control @error('full_name2') is-invalid @enderror" wire:model="full_name2"
                id="full_name2" name="full_name2"
                placeholder="Full Name (with academic title) Ex: Dr. Muhammad Ridho, M.Sc">
            @error('full_name2')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="gender" class="d-block">Gender</label>
            <label class="form-text text-muted d-inline">
                <input type="radio" name="options" wire:model='gender' id="gender" autocomplete="off"
                    value="male"> Male
            </label>
            <label class="form-text text-muted d-inline">
                <input type="radio" name="options" wire:model='gender' id="gender" autocomplete="off"
                    value="female">
                Female
            </label>
            @error('gender')
                <span class="invalid-feedback d-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="participant">
                Participant
            </label>
            <select class="custom-select @error('participant_type') is-invalid @enderror" id="participant_type"
                name="participant_type" wire:model='participant_type'>
                <option value="">Choose One</option>
                <option value="professional presenter">Professional presenter</option>
                <option value="student presenter">Student presenter</option>
                <option value="student participant">Student participant</option>
            </select>
            @error('participant_type')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="institution">Institution</label>
            <textarea class="form-control @error('institution') is-invalid @enderror" id="institution" rows="3"
                placeholder="Institution Name" name="institution" wire:model='institution'></textarea>
            @error('institution')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <textarea class="form-control @error('address') is-invalid @enderror" id="address" rows="3"
                placeholder="Full Address" name="address" wire:model='address'></textarea>
            @error('address')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" class="form-control @error('address') is-invalid @enderror" id="phone"
                placeholder="Phone Number" name="phone" wire:model='phone'>
            @error('phone')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="hki_id">HKI ID Member</label>
            <input type="text" class="form-control" id="hki_id" aria-describedby="emailHelp"
                placeholder="Enter HKI Number ID" wire:model='hki_id' name="hki_id">
            <small id="emailHelp" class="form-text text-muted">Not required, if you are HKI member,
                you will get 25% discount.</small>
        </div>
        <div class="form-group">
            <label for="fax">Fax Number</label>
            <input type="text" class="form-control" id="fax" placeholder="Fax Number" wire:model='fax'
                name="fax">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                aria-describedby="emailHelp" placeholder="Enter email" name="email" wire:model='email'>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                anyone
                else.</small>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" wire:model='password' autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">Confirm Password</label>
            <input id="password" type="password" class="form-control @error('confirmPassword') is-invalid @enderror"
                name="confirmPassword" wire:model='confirmPassword' autocomplete="current-password">
            @error('confirmPassword')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        {{-- <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="retypePw">Retype Password</label>
            <input type="password" class="form-control" id="retypePw" placeholder="Confirmation Password">
        </div> --}}
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
