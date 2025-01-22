<x-layouts.app>

<div>
    <div class="card mb-4">
        <div class="d-flex align-items-start row">
            <div class="col-sm-7">
              <div class="card-body">
                <h5 class="card-title text-primary mb-3">Welcome {{Auth::user()->first_name}}! 🎉</h5>
                <p class="mb-6">Check your pending transactions today<br><p id="dateTime" class="mt-3 text-muted"></p></p>
    
                <a href="javascript:;" class="btn btn-sm btn-label-primary">Trnsactions</a>
              </div>
            </div>
            <div class="col-sm-5 text-center text-sm-left">
              <div class="card-body pb-0 px-0 px-md-6">
                <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/illustrations/man-with-laptop.png" height="175" class="scaleX-n1-rtl" alt="View Badge User">
              </div>
            </div>
        </div>
    </div>

    <div class="card">
        
    </div>
</div>

</x-layouts.app>


