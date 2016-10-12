<?php
/*
Template Name: Portfolio Uploader
*/
get_header();
?>
<body>
    <div class="container">
        <div class="col-lg-12">
            <form class="form-horizontal" method="post" action="<?php echo home_url() ?>/php-processor">
                <input type="hidden" name="aqk-action" value="pUploader">
                <fieldset>

                    <!-- Form Name -->
                    <legend>Project Uploader</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="pName">Project Name</label>
                        <div class="col-md-8">
                            <input id="pName" name="pName" type="text" placeholder="" class="form-control input-md">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="pLink">Project Link</label>
                        <div class="col-md-6">
                            <input id="pLink" name="pLink" type="text" placeholder="" class="form-control input-md">
                        </div>
                        <div class="cold-md-2">
                            <button class="btn btn-primary" id="newTab">Open in new tab</button>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="pType">Project Type</label>
                        <div class="col-md-8">
                                <input id="pType" name="pType" type="text" placeholder="" class="form-control input-md">
                            <span class="help-block">Nature of project / business / company</span>
                        </div>
                    </div>

                    <!-- Google API-->
                     <div class="form-group">
                        <label class="col-md-4 control-label" for="pLocation">Project Location</label>
                        <div class="col-md-8">
                                <input id="autocomplete"  name="pLocation" type="text" placeholder="" class="form-control input-md" onFocus="geolocate()" >
                        </div>
                     </div>

                    <!-- Project Rating-->
                     <div class="form-group">
                        <label class="col-md-4 control-label" for="pRating">Project Rating</label>
                        <div class="col-md-8">
                                <input id="pRating"  name="pRating" type="text" placeholder="" class="form-control input-md">
                        </div>
                    </div>

                    <!-- Multiple Checkboxes -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="checkboxes">Select Multiple Tags ( If applicable )</label>
                        <div class="col-md-4">
                            <div class="checkbox">
                                <label for="checkboxes-0">
                                    <input type="checkbox" name="pTags[]" id="checkboxes-0" value="1">
                                    UI/UX
                                </label>
                            </div>
                            <div class="checkbox">
                                <label for="checkboxes-1">
                                    <input type="checkbox" name="pTags[]" id="checkboxes-1" value="2">
                                    Design
                                </label>
                            </div>
                            <div class="checkbox">
                                <label for="checkboxes-2">
                                    <input type="checkbox" name="pTags[]" id="checkboxes-2" value="3">
                                    Back-end
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textarea">Description</label>
                        <div class="col-md-4">
                            <textarea class="form-control" id="textarea" name="pDescription">2 - 3 small paragraphs about the project. Can be about what we do or what the client was about.</textarea>
                        </div>
                    </div>
                     <!-- Clent Name-->
                     <div class="form-group">
                        <label class="col-md-4 control-label" for="cName">Client Name</label>
                        <div class="col-md-8">
                                <input id="cName"  name="cName" type="text" placeholder="" class="form-control input-md">
                        </div>
                    </div>

                    <!-- Project FeedBack-->
                     <div class="form-group">
                        <label class="col-md-4 control-label" for="pFeedback">Project FeedBack</label>
                        <div class="col-md-8">
                                <input id="pFeedback"  name="pFeedback" type="text" placeholder="" class="form-control input-md">
                        </div>
                    </div>

                     <!-- Services We Provide-->
                     <div class="form-group">
                        <label class="col-md-4 control-label" for="services">Services We Provided</label>
                        <div class="col-md-8">
                                <input id="services"  name="services" type="text" placeholder="" class="form-control input-md">
                        </div>
                    </div>    


                    <!-- File Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="pThumb">Thumbnail (Square)</label>
                        <div class="col-md-4">
                            <input type="hidden" role="uploadcare-uploader" data-images-only data-crop="free" name="pThumb" />
                        </div>
                    </div>

                    <!-- File Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="pLogo">Project Logo</label>
                        <div class="col-md-4">
                            <input type="hidden" role="uploadcare-uploader" data-public-key="be48fe89f3beb6acc42e" name="pLogo" data-crop="free" data-images-only />
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="pUpload">Double check before uploading</label>
                        <div class="col-md-4">
                            <input type="submit" id="pUpload" class="btn btn-success" value="Upload Project">
                        </div>
                    </div>

                </fieldset>
            </form>
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