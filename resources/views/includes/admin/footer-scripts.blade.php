<!-- jquery -->
<script src="{{ URL::asset('assets/Admin/js/jquery-3.3.1.min.js') }}"></script>
<!-- plugins-jquery -->
<script src="{{ URL::asset('assets/Admin/js/plugins-jquery.js') }}"></script>
<!-- plugin_path -->
<script src="https://cdn.jsdelivr.net/gh/ka215/jquery.timeline@master/dist/jquery.timeline.min.js"></script>

<!-- <script src="Assets/Admin/js/jquery.timeline.min.js"></script> -->
<script>
    var plugin_path = 'js/';



    // Tabs

    $(document).ready(function() {

        // start blag page 
        $('#cycle').click(function(e) {
            e.preventDefault(e);
            // $(this).load();
        });
        $('#Device_on_map').click(function(e) {
            e.preventDefault(e);
            // alert(2);
        });
        $('#All_Devices_on_map').click(function(e) {
            e.preventDefault(e);
            // alert(3);
        });


        jQuery('.timeline').Timeline();
















        //Tabs

        // start blag page 
        $('#blag_submit').click(function(e) {
            e.preventDefault(e);

            var form_blag = $('#new_blag_Form').serialize();
            // alert(form_blag);
            $.ajax({
                url: "{{ route('admin.Blag.store') }}",
                type: "post",
                data: {
                    "data": form_blag
                },
                success: function(data) {
                    alert(data);
                },
            });






            $('.has_done').click(function(e) {

                e.preventDefault();
                var n = $(this).attr("blag_id");
                // alert(n);
                $.ajax({
                    url: "{{ route('admin.Blag.done') }}",
                    type: "POST",
                    data: {
                        'id': n
                    },
                    success: function(data) {

                        alert('لقد تمت صيانة الجهاز بنجاح ');
                    },
                    error: function(data) {
                        // alert(data);
                    }
                });

            });
            $('.editt').click(function(e) {
                e.preventDefault();
                var n = $(this).attr('id');

                $.ajax({

                    url: "",
                    method: "POST",
                    data: "",
                    success: function() {

                    }

                });

            });
            $('.dele').click(function(e) {
                e.preventDefault();
                var n = $(this).attr('id');

                $.ajax({

                    url: "",
                    method: "POST",
                    data: "",
                    success: function() {

                    }

                });
            });

        }); // end blag page 
    }) // end document page 
</script>

<!-- sweetalert2 -->
<script src="{{ URL::asset('assets/Admin/js/sweetalert2.js') }}"></script>
<!-- toastr -->
@yield('js')
<script src="{{ URL::asset('assets/Admin/js/toastr.js') }}"></script>
<!-- validation -->
<script src="{{ URL::asset('assets/Admin/js/validation.js') }}"></script>
<!-- lobilist -->
<script src="{{ URL::asset('assets/Admin/js/lobilist.js') }}"></script>
<!-- custom -->
<script src="{{ URL::asset('assets/Admin/js/custom.js') }}"></script>
<script src="{{ URL::asset('assets/Admin/js/jquery.timeline.min.js') }}"></script>