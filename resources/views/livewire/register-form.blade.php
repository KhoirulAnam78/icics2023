<div>
    <form>
        <div class="form-group">
            <label for="fullName">Full Name</label>
            <input type="text" class="form-control @error('fullName1') is-invalid @enderror" wire:model="fullName1"
                id="fullName1" name="fullName1" placeholder="Full Name (without academic title)">
            @error('fullName1')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <small id="fullName" class="form-text text-muted mb-2">Example: Muhammad Ridho</small>
            <input type="text" class="form-control @error('fullName2') is-invalid @enderror" wire:model="fullName2"
                id="fullName2" name="fullName2" placeholder="Full Name (with academic title)">
            @error('fullName2')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <small id="fullName" class="form-text text-muted">Example: Dr. Muhammad Ridho,
                M.Sc</small>
        </div>

        <div class="form-group">
            <label for="gender" class="d-block">Gender</label>
            <label class="form-text text-muted d-inline">
                <input type="radio" name="options" id="gender" autocomplete="off" value="male"> Male
            </label>
            <label class="form-text text-muted d-inline">
                <input type="radio" name="options" id="gender" autocomplete="off" value="female">
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
                name="confirmPassword" wire:model='confirmPassword' required autocomplete="current-password">
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
