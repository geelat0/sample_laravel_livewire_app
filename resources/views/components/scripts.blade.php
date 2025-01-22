<!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src={{asset('assets/vendor/libs/jquery/jquery.js')}}></script>
    <script src={{asset('assets/vendor/libs/popper/popper.js')}}></script>
    <script src={{asset('assets/vendor/js/bootstrap.js')}}></script>
    <script src={{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}></script>
    <script src={{asset('assets/vendor/libs/hammer/hammer.js')}}></script>
    <script src={{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}></script>
    <script src={{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}></script>
    <script src={{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}></script>
    <script src={{asset('assets/vendor/js/menu.js')}}></script>
    <script src={{asset('assets/vendor/libs/select2/select2.js')}}></script>
    <script src={{asset('assets/vendor/libs/dropzone/dropzone.js')}}></script>


    <!-- CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>



    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src={{asset('assets/js/main.js')}}></script>

    {{-- START SCRIPT --}}
    <script>
         const user = @json(Auth::user());

        function showLoader() {
            document.getElementById('loader').style.display = 'flex';
        }

            // Hide loader
        function hideLoader() {
            document.getElementById('loader').style.display = 'none';
        }

        hideLoader()


        $(document).ready(function() {
            $('#profile_image').on('change', function() {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#profileImageShow').attr('src', e.target.result);
                        $('#profileImageShow2').attr('src', e.target.result);
                    };
                    reader.readAsDataURL(this.files[0]);
            });
        })

    </script>

{{-- SCRIPT END --}}



{{-- BACK NAVIGATION BUTTON START --}}
<script>
    $(document).ready(function() {
        
        $('#navigatePrevious').on('click', function() {
            window.history.back();
        });
    });
</script>
{{-- BACK NAVIGATION BUTTON START --}}



{{-- DASHBOARD SCRIPT --}}
<script>
    $(document).ready(function() {
        // Display current date and time
        var dateTime = document.getElementById('dateTime');
        var date = new Date();
        var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        dateTime.innerHTML = date.toLocaleDateString('en-US', options) + ' ' + date.toLocaleTimeString('en-US');
    });

</script>

{{-- DASHBOARD SCRIPT END --}}


{{-- USER MANAGEMENT SCRIPT --}}
<script>
    $(function() {
        
        flatpickr("#user-flatpickr-range", {
            mode: "range",
            dateFormat: "Y-m-d",
            onClose: function(selectedDates, dateStr, instance) {
                // Trigger DataTables filtering
                $('#usermanagement-table').DataTable().draw();
            }
        });
      
    });
  </script>

{{-- USER MANAGEMENT SCRIPT END --}}




