

<form wire:submit.prevent="submit" class="mb-3">
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" wire:model="email" placeholder="@gmail.com" autofocus />
        @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3 form-password-toggle">
        <div class="d-flex justify-content-between">
            <label class="form-label" for="password">Password</label>
            <a href="/forgot-password">
                <small>Forgot Password?</small>
            </a>
        </div>
        <div class="input-group input-group-merge">
            <input
                type="password"
                id="password"
                class="form-control"
                wire:model="password"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                aria-describedby="password" />
            {{-- <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span> --}}
            @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

    </div>
    <button type="submit" class="btn btn-primary d-grid w-100">Sign in</button>
</form>


