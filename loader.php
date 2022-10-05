<link rel="stylesheet" href="loader.css">
<div id="resultLoading" style="display: none; width: 100%; height: 100%; position: fixed; z-index: 10000; top: 0px; left: 0px; right: 0px; bottom: 0px; margin: auto;">
                            <div style="width: 340px; height: 200px; text-align: center; position: fixed; top: 0px; left: 0px; right: 0px; bottom: 0px; margin: auto; z-index: 10; color: rgb(255, 255, 255);">
                                <div class="uil-default-css">
                                    <div class="loader">Loading...</div>

                                </div>
                                <div class="resultLoading" style="display: block; font-size: 18px; font-weight: 300;">&nbsp;</div>
                            </div>
                            <div style="background: rgb(0, 0, 0); opacity: 0.6; width: 100%; height: 100%; position: absolute; top: 0px;"></div>
                        </div>
                        <!-- Content -->
                        <div id="loader"> </div>

                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        var showLoader = function (text) {
            $('#resultLoading').show();
            $('#resultLoading').find('.loader-text').html(text);
        };

        jQuery(document).ready(function () {
            jQuery(window).on("beforeunload ", function () {
                showLoader('Loading, please wait...');
            });
        });

        $("#loader").fadeOut(1000);
    </script>