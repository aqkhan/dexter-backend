<?php
/*
Template Name: Portfolio Uploader
*/
$view = false;
if (isset($_REQUEST['mode']) && $_REQUEST['mode'] == 'view') {
    $view = true;
}
get_header();
?>
<body>
    <div class="container">
        <div class="col-lg-12">
            <?php if ($view == false) {
                require_once('views/projects-submission-form.php');
            } else {
                require_once('views/projects-table-list.php');
            } ?>
        </div>
    </div>
    <!-- Google maps start here -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwcpA0J1gspv1tvG2Oi60ZkuQKvyd5Lq8&libraries=places&callback=initAutocomplete" async defer></script>
    <script type="text/javascript">
        (function($){
            $('input').each(function(){
                if ($(this).attr('type') !== 'checkbox') {
                    $(this).attr('required', true);
                }
            });
            $('textarea').focus(function(){
                $(this).text('');
            });
            // Website Preview
            $('#newTab').click(function(){
                window.open($('#pLink').val());
            });
            // Link validation
            $(document).on('blur', '#pLink', function(){
                var link = $(this).val();
                var ye = $(this);
                $.ajax({
                    url: '<?php echo admin_url( 'admin-ajax.php' ); ?>',
                    data: {
                        action: 'checkProjectLinkAJAX',
                        link: link
                    },
                    success: function(d) {
                        console.log(d);
                        if (d === 'exists') {
                            ye.next().show();
                            $('#pUpload').attr('disabled', true);
                        }
                        else {
                            ye.next().hide();
                            $('#pUpload').attr('disabled', false);
                        }
                    },
                    error: function(e) {
                        console.log(e);
                    }
                });
            });
        })(jQuery);
    </script>
    <!-- Google maps end here -->

    <!-- Uploadcare scripts start here -->
    <script>
        UPLOADCARE_LOCALE = "en";
        UPLOADCARE_TABS = "file url facebook gdrive dropbox instagram box";
        UPLOADCARE_PUBLIC_KEY = "1ee8444993195fd733af";
    </script>
    <script charset="utf-8" src="//ucarecdn.com/widget/2.10.0/uploadcare/uploadcare.full.min.js"></script>
    <!-- Uploadcare scripts start here -->
</body>
<?php
get_footer();