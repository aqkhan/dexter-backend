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


                    <!-- File Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="pThumb">Thumbnail (Square)</label>
                        <div class="col-md-4">
                            <input id="pThumb" name="pThumb" class="input-file" type="file">
                        </div>
                    </div>

                    <!-- File Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="pLogo">Project Logo</label>
                        <div class="col-md-4">
                            <input id="pLogo" name="pLogo" class="input-file" type="file">
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
</body>
<script type="text/javascript">
    (function($){
        $('input').each(function(){
            $(this).attr('required', true);
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
<?php
get_footer();