<x-layouts.app> 
<div>

  {{-- <div class="card mb-4" id="addUserForm">
    <div class="card-body">
      <form class="browser-default-validation col-md-6">
        <div class="mb-4">
          <label class="form-label" for="basic-default-name">Name</label>
          <input type="text" class="form-control" id="basic-default-name" placeholder="John Doe" required />
        </div>
        <div class="mb-4">
          <label class="form-label" for="basic-default-email">Email</label>
          <input type="email" id="basic-default-email" class="form-control" placeholder="john.doe" required />
        </div>
        <div class="mb-4 form-password-toggle">
          <label class="form-label" for="basic-default-password">Password</label>
          <div class="input-group input-group-merge">
            <input type="password" id="basic-default-password" class="form-control"
              placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
              aria-describedby="basic-default-password3" required />
            <span class="input-group-text cursor-pointer" id="basic-default-password3"><i
                class="icon-base bx bx-hide"></i></span>
          </div>
        </div>
        <div class="mb-4">
          <label class="form-label" for="basic-default-country">Country</label>
          <select class="form-select" id="basic-default-country" required>
            <option value="">Select Country</option>
            <option value="usa">USA</option>
            <option value="uk">UK</option>
            <option value="france">France</option>
            <option value="australia">Australia</option>
            <option value="spain">Spain</option>
          </select>
        </div>
        <div class="mb-4">
          <label class="form-label" for="basic-default-dob">DOB</label>
          <input type="text" class="form-control flatpickr-validation" id="basic-default-dob" required />
        </div>
        <div class="mb-4">
          <label class="form-label" for="basic-default-upload-file">Profile pic</label>
          <input type="file" class="form-control" id="basic-default-upload-file" required />
        </div>
        <div class="mb-4">
          <label class="d-block form-label">Gender</label>
          <div class="form-check mb-2">
            <input type="radio" id="basic-default-radio-male" name="basic-default-radio"
              class="form-check-input" required checked />
            <label class="form-check-label" for="basic-default-radio-male">Male</label>
          </div>
          <div class="form-check">
            <input type="radio" id="basic-default-radio-female" name="basic-default-radio"
              class="form-check-input" required />
            <label class="form-check-label" for="basic-default-radio-female">Female</label>
          </div>
        </div>
        <div class="mb-4">
          <label class="form-label" for="basic-default-bio">Bio</label>
          <textarea class="form-control" id="basic-default-bio" name="basic-default-bio" rows="3"
            required></textarea>
        </div>
        <div class="mb-4">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="basic-default-checkbox" required />
            <label class="form-check-label" for="basic-default-checkbox">Agree to our terms and
              conditions</label>
          </div>
        </div>
        <div class="mb-4">
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="browserDefaultSwitch" required />
            <label class="form-check-label" for="browserDefaultSwitch">Send me related emails</label>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div> --}}

  <div class="row g-6 mb-6">
    <div class="col-sm-6 col-xl-3">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-start justify-content-between">
            <div class="content-left">
              <span class="text-heading">Users</span>
              <div class="d-flex align-items-center my-1">
                <h4 class="mb-0 me-2">5</h4>
                <p class="text-success mb-0">(100%)</p>
              </div>
              <small class="mb-0">Total Users</small>
            </div>
            <div class="avatar">
              <span class="avatar-initial rounded bg-label-primary">
                <i class="bx bx-user bx-lg"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xl-3">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-start justify-content-between">
            <div class="content-left">
              <span class="text-heading">Verified Users</span>
              <div class="d-flex align-items-center my-1">
                <h4 class="mb-0 me-2">0</h4>
                <p class="text-success mb-0">(+95%)</p>
              </div>
              <small class="mb-0">Recent analytics </small>
            </div>
            <div class="avatar">
              <span class="avatar-initial rounded bg-label-success">
                <i class="bx bx-user-check bx-lg"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xl-3">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-start justify-content-between">
            <div class="content-left">
              <span class="text-heading">Duplicate Users</span>
              <div class="d-flex align-items-center my-1">
                <h4 class="mb-0 me-2">0</h4>
                <p class="text-success mb-0">(0%)</p>
              </div>
              <small class="mb-0">Recent analytics</small>
            </div>
            <div class="avatar">
              <span class="avatar-initial rounded bg-label-danger">
                <i class="bx bx-group bx-lg"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xl-3">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-start justify-content-between">
            <div class="content-left">
              <span class="text-heading">Verification Pending</span>
              <div class="d-flex align-items-center my-1">
                <h4 class="mb-0 me-2">5</h4>
                <p class="text-danger mb-0">(+6%)</p>
              </div>
              <small class="mb-0">Recent analytics</small>
            </div>
            <div class="avatar">
              <span class="avatar-initial rounded bg-label-warning">
                <i class="bx bx-user-voice bx-lg"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  

    <div class="card mt-4">
        <div class="card-body">
            <div class="d-flex justify-content-between">
              <div class="mb-3">
                <input type="text" class="form-control" placeholder="YYYY-MM-DD to YYYY-MM-DD" id="user-flatpickr-range" />
              </div>
            </div>
            
            <div class="card-datatable pt-0">
              {{ $dataTable->table() }}
            </div> 
        </div>
    </div>
</div>
</x-layouts.app>

{{ $dataTable->scripts() }}



    

