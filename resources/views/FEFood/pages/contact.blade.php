@extends('FEFood.master-frontend')

@section('NoiDung')

<script>
    var custom_page_title_style = "@media only screen and (max-width: 1200px){.gt3-page-title_wrapper .gt3-page-title{padding-top: 20px;padding-bottom: 20px;}}@media only screen and (max-width: 767px){.gt3-page-title_wrapper .gt3-page-title{padding-top: 20px;padding-bottom: 20px;}}";
    if (document.getElementById("custom_page_title_style")) {
        document.getElementById("custom_page_title_style").innerHTML += custom_page_title_style;
    } else if (custom_page_title_style !== "") {
        document.body.innerHTML += '<style id="custom_page_title_style">'+custom_page_title_style+'</style>';
    }
</script>

<div class="gt3-page-title_wrapper">
    <div class='gt3-page-title gt3-page-title_horiz_align_center gt3-page-title_vert_align_middle gt3-page-title_has_img_bg'
    style="background-color:#ffffff;height:345px;color:#ffffff;background-image:url({{asset('frontend/img/image-8.jpg')}});background-size:cover;background-repeat:no-repeat;background-attachment:scroll;background-position:center center;">
        <div class="page_title_svg_line top" style="color:rgba(255,255,255,1)">
            <svg version="1.1" width="100%" height="6.214396685655101" preserveAspectRatio="none" viewBox="0 0 400 6.214396685655101" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.000 1.417 L 0.000 2.833 1.300 2.833 C 2.015 2.833,2.671 2.898,2.758 2.977 C 3.332 3.499,10.962 3.531,11.135 3.012 C 11.217 2.764,11.790 2.787,11.875 3.042 C 11.977 3.349,18.863 3.321,19.236 3.012 C 19.447 2.836,19.550 2.834,19.750 3.000 C 19.937 3.155,20.057 3.160,20.226 3.020 C 20.529 2.769,38.312 2.746,38.563 2.996 C 38.784 3.218,42.280 3.221,42.417 3.000 C 42.473 2.908,42.961 2.833,43.500 2.833 C 44.039 2.833,44.527 2.908,44.583 3.000 C 44.710 3.205,47.372 3.223,47.592 3.021 C 47.890 2.745,52.957 2.664,53.179 2.931 C 53.396 3.194,55.086 3.266,55.238 3.019 C 55.349 2.840,56.165 2.869,56.473 3.064 C 56.604 3.146,56.772 3.128,56.881 3.019 C 57.112 2.788,58.667 2.772,58.667 3.000 C 58.667 3.220,60.051 3.216,60.272 2.995 C 60.635 2.631,63.899 2.513,68.417 2.701 C 69.975 2.766,71.381 2.822,71.542 2.826 C 71.740 2.831,71.833 2.967,71.833 3.250 C 71.833 3.600,71.912 3.667,72.323 3.667 C 72.593 3.667,72.860 3.742,72.917 3.833 C 73.043 4.038,75.206 4.056,75.425 3.854 C 75.725 3.578,81.288 3.495,81.511 3.763 C 81.736 4.035,83.092 4.089,83.250 3.833 C 83.387 3.612,86.833 3.612,86.833 3.833 C 86.833 4.050,88.216 4.050,88.433 3.833 C 88.791 3.476,91.119 3.370,96.417 3.471 C 100.882 3.557,101.337 3.536,101.227 3.251 C 101.084 2.878,101.596 2.765,102.034 3.073 C 102.452 3.368,107.710 3.285,108.101 2.977 C 108.382 2.757,111.826 2.759,112.047 2.980 C 112.289 3.222,113.545 3.222,113.787 2.979 C 114.102 2.665,116.443 2.699,116.700 3.022 C 116.874 3.241,117.468 3.327,119.744 3.463 C 121.516 3.569,122.595 3.701,122.633 3.816 C 122.725 4.092,128.864 4.069,129.143 3.792 C 129.431 3.505,132.426 3.565,132.789 3.865 C 132.998 4.037,133.069 4.039,133.124 3.875 C 133.208 3.627,133.936 3.595,134.083 3.833 C 134.212 4.041,138.610 4.059,138.738 3.852 C 138.960 3.494,146.657 3.395,160.167 3.576 C 162.688 3.610,166.430 3.570,168.484 3.487 C 170.538 3.404,172.301 3.399,172.401 3.477 C 172.601 3.632,179.150 3.567,180.750 3.394 C 182.029 3.256,184.216 3.238,187.616 3.337 C 190.086 3.410,190.323 3.392,190.393 3.125 C 190.478 2.798,191.894 2.693,192.083 3.000 C 192.218 3.217,194.949 3.217,195.083 3.000 C 195.225 2.772,196.056 2.790,196.293 3.026 C 196.428 3.161,196.551 3.167,196.701 3.046 C 197.120 2.710,202.614 2.594,203.098 2.911 C 203.431 3.129,203.574 3.146,203.761 2.991 C 203.946 2.837,204.057 2.840,204.254 3.003 C 204.642 3.325,212.167 3.382,212.167 3.063 C 212.167 2.767,213.514 2.747,213.805 3.039 C 214.062 3.296,233.043 3.303,233.376 3.046 C 233.601 2.872,234.265 2.876,234.667 3.053 C 234.804 3.114,237.279 3.202,240.167 3.250 C 243.054 3.297,246.729 3.369,248.333 3.409 C 249.938 3.450,251.911 3.410,252.720 3.322 C 253.684 3.216,254.543 3.218,255.220 3.328 C 256.735 3.574,261.768 3.665,261.983 3.451 C 262.079 3.354,262.987 3.241,263.999 3.199 C 265.012 3.158,265.881 3.058,265.930 2.978 C 265.979 2.899,266.423 2.833,266.917 2.833 C 267.410 2.833,267.856 2.764,267.908 2.680 C 268.036 2.473,273.719 2.482,278.310 2.696 C 281.233 2.833,282.120 2.826,282.424 2.663 C 282.833 2.444,283.422 2.555,283.258 2.821 C 283.059 3.143,283.631 3.216,286.803 3.272 C 288.595 3.304,290.478 3.400,290.989 3.487 C 292.214 3.695,295.784 3.598,296.417 3.340 C 296.763 3.198,297.250 3.176,298.000 3.268 C 298.596 3.341,299.440 3.395,299.875 3.388 C 300.310 3.381,301.360 3.362,302.208 3.346 C 303.056 3.330,304.961 3.392,306.441 3.485 C 308.266 3.599,309.472 3.599,310.188 3.484 C 310.822 3.382,311.264 3.375,311.295 3.467 C 311.325 3.558,312.879 3.579,315.131 3.518 C 321.308 3.353,323.836 3.436,324.219 3.819 C 324.446 4.046,325.833 4.059,325.833 3.833 C 325.833 3.611,329.446 3.611,329.583 3.833 C 329.742 4.089,331.097 4.035,331.322 3.763 C 331.545 3.495,337.109 3.578,337.408 3.854 C 337.627 4.056,339.623 4.038,339.750 3.833 C 339.884 3.616,342.282 3.616,342.417 3.833 C 342.561 4.067,345.553 4.047,345.789 3.811 C 346.077 3.523,364.113 3.582,364.464 3.872 C 364.791 4.142,372.286 4.114,372.559 3.841 C 372.800 3.600,373.722 3.622,373.975 3.875 C 374.319 4.220,380.836 4.273,381.511 3.936 C 381.871 3.757,382.788 3.642,384.474 3.564 C 386.461 3.473,386.999 3.395,387.359 3.143 C 387.865 2.789,388.834 2.734,389.141 3.041 C 389.432 3.332,392.546 3.308,392.903 3.011 C 393.086 2.860,393.231 2.845,393.375 2.962 C 393.490 3.056,394.633 3.179,395.917 3.237 C 397.200 3.295,398.644 3.383,399.125 3.433 L 400.000 3.524 400.000 1.762 L 400.000 0.000 200.000 0.000 L 0.000 0.000 0.000 1.417 " stroke="none" fill-rule="evenodd" fill="currentColor"></path>
            </svg>
        </div>
        <div class='gt3-page-title-fill' style='background-color:#5E623A;'></div>
        <div class='gt3-page-title__inner has_fill_inner'>
            <div class='container'>
                <div class='gt3-page-title__content'>
                    <div class='page_title'><h1>Contacts</h1></div>
                    <div class='gt3_breadcrumb'>
                        <div class="breadcrumbs">
                            <a href="../index.html">Home</a>
                            <span class="gt3_pagination_delimiter"></span>
                            <span class="current">Contacts</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page_title_svg_line bottom" style="color:rgba(255,255,255,1)">
            <svg version="1.1" width="100%" height="6.214396685655101" preserveAspectRatio="none" viewBox="0 0 400 6.214396685655101" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.000 1.417 L 0.000 2.833 1.300 2.833 C 2.015 2.833,2.671 2.898,2.758 2.977 C 3.332 3.499,10.962 3.531,11.135 3.012 C 11.217 2.764,11.790 2.787,11.875 3.042 C 11.977 3.349,18.863 3.321,19.236 3.012 C 19.447 2.836,19.550 2.834,19.750 3.000 C 19.937 3.155,20.057 3.160,20.226 3.020 C 20.529 2.769,38.312 2.746,38.563 2.996 C 38.784 3.218,42.280 3.221,42.417 3.000 C 42.473 2.908,42.961 2.833,43.500 2.833 C 44.039 2.833,44.527 2.908,44.583 3.000 C 44.710 3.205,47.372 3.223,47.592 3.021 C 47.890 2.745,52.957 2.664,53.179 2.931 C 53.396 3.194,55.086 3.266,55.238 3.019 C 55.349 2.840,56.165 2.869,56.473 3.064 C 56.604 3.146,56.772 3.128,56.881 3.019 C 57.112 2.788,58.667 2.772,58.667 3.000 C 58.667 3.220,60.051 3.216,60.272 2.995 C 60.635 2.631,63.899 2.513,68.417 2.701 C 69.975 2.766,71.381 2.822,71.542 2.826 C 71.740 2.831,71.833 2.967,71.833 3.250 C 71.833 3.600,71.912 3.667,72.323 3.667 C 72.593 3.667,72.860 3.742,72.917 3.833 C 73.043 4.038,75.206 4.056,75.425 3.854 C 75.725 3.578,81.288 3.495,81.511 3.763 C 81.736 4.035,83.092 4.089,83.250 3.833 C 83.387 3.612,86.833 3.612,86.833 3.833 C 86.833 4.050,88.216 4.050,88.433 3.833 C 88.791 3.476,91.119 3.370,96.417 3.471 C 100.882 3.557,101.337 3.536,101.227 3.251 C 101.084 2.878,101.596 2.765,102.034 3.073 C 102.452 3.368,107.710 3.285,108.101 2.977 C 108.382 2.757,111.826 2.759,112.047 2.980 C 112.289 3.222,113.545 3.222,113.787 2.979 C 114.102 2.665,116.443 2.699,116.700 3.022 C 116.874 3.241,117.468 3.327,119.744 3.463 C 121.516 3.569,122.595 3.701,122.633 3.816 C 122.725 4.092,128.864 4.069,129.143 3.792 C 129.431 3.505,132.426 3.565,132.789 3.865 C 132.998 4.037,133.069 4.039,133.124 3.875 C 133.208 3.627,133.936 3.595,134.083 3.833 C 134.212 4.041,138.610 4.059,138.738 3.852 C 138.960 3.494,146.657 3.395,160.167 3.576 C 162.688 3.610,166.430 3.570,168.484 3.487 C 170.538 3.404,172.301 3.399,172.401 3.477 C 172.601 3.632,179.150 3.567,180.750 3.394 C 182.029 3.256,184.216 3.238,187.616 3.337 C 190.086 3.410,190.323 3.392,190.393 3.125 C 190.478 2.798,191.894 2.693,192.083 3.000 C 192.218 3.217,194.949 3.217,195.083 3.000 C 195.225 2.772,196.056 2.790,196.293 3.026 C 196.428 3.161,196.551 3.167,196.701 3.046 C 197.120 2.710,202.614 2.594,203.098 2.911 C 203.431 3.129,203.574 3.146,203.761 2.991 C 203.946 2.837,204.057 2.840,204.254 3.003 C 204.642 3.325,212.167 3.382,212.167 3.063 C 212.167 2.767,213.514 2.747,213.805 3.039 C 214.062 3.296,233.043 3.303,233.376 3.046 C 233.601 2.872,234.265 2.876,234.667 3.053 C 234.804 3.114,237.279 3.202,240.167 3.250 C 243.054 3.297,246.729 3.369,248.333 3.409 C 249.938 3.450,251.911 3.410,252.720 3.322 C 253.684 3.216,254.543 3.218,255.220 3.328 C 256.735 3.574,261.768 3.665,261.983 3.451 C 262.079 3.354,262.987 3.241,263.999 3.199 C 265.012 3.158,265.881 3.058,265.930 2.978 C 265.979 2.899,266.423 2.833,266.917 2.833 C 267.410 2.833,267.856 2.764,267.908 2.680 C 268.036 2.473,273.719 2.482,278.310 2.696 C 281.233 2.833,282.120 2.826,282.424 2.663 C 282.833 2.444,283.422 2.555,283.258 2.821 C 283.059 3.143,283.631 3.216,286.803 3.272 C 288.595 3.304,290.478 3.400,290.989 3.487 C 292.214 3.695,295.784 3.598,296.417 3.340 C 296.763 3.198,297.250 3.176,298.000 3.268 C 298.596 3.341,299.440 3.395,299.875 3.388 C 300.310 3.381,301.360 3.362,302.208 3.346 C 303.056 3.330,304.961 3.392,306.441 3.485 C 308.266 3.599,309.472 3.599,310.188 3.484 C 310.822 3.382,311.264 3.375,311.295 3.467 C 311.325 3.558,312.879 3.579,315.131 3.518 C 321.308 3.353,323.836 3.436,324.219 3.819 C 324.446 4.046,325.833 4.059,325.833 3.833 C 325.833 3.611,329.446 3.611,329.583 3.833 C 329.742 4.089,331.097 4.035,331.322 3.763 C 331.545 3.495,337.109 3.578,337.408 3.854 C 337.627 4.056,339.623 4.038,339.750 3.833 C 339.884 3.616,342.282 3.616,342.417 3.833 C 342.561 4.067,345.553 4.047,345.789 3.811 C 346.077 3.523,364.113 3.582,364.464 3.872 C 364.791 4.142,372.286 4.114,372.559 3.841 C 372.800 3.600,373.722 3.622,373.975 3.875 C 374.319 4.220,380.836 4.273,381.511 3.936 C 381.871 3.757,382.788 3.642,384.474 3.564 C 386.461 3.473,386.999 3.395,387.359 3.143 C 387.865 2.789,388.834 2.734,389.141 3.041 C 389.432 3.332,392.546 3.308,392.903 3.011 C 393.086 2.860,393.231 2.845,393.375 2.962 C 393.490 3.056,394.633 3.179,395.917 3.237 C 397.200 3.295,398.644 3.383,399.125 3.433 L 400.000 3.524 400.000 1.762 L 400.000 0.000 200.000 0.000 L 0.000 0.000 0.000 1.417 " stroke="none" fill-rule="evenodd" fill="currentColor"></path>
            </svg>
        </div>
    </div>
</div>

<div class="site_wrapper fadeOnLoad">
    <div class="main_wrapper">
        <div class="container container-sidebar_none">
            <div class="row sidebar_none">
                <div class="content-container span12">
                    <section id='main_content'>
                        <div data-elementor-type="wp-post" data-elementor-id="636" class="elementor elementor-636" data-elementor-settings="[]">
                            <div class="elementor-inner">
                                <div class="elementor-section-wrap">
                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-4042a5c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4042a5c" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6b7ae2b" data-id="6b7ae2b" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-6f34910 elementor-widget elementor-widget-spacer" data-id="6f34910" data-element_type="widget" data-widget_type="spacer.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-spacer">
                                                                        <div class="elementor-spacer-inner"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-b566693 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b566693" data-element_type="section">
                                                                <div class="elementor-container elementor-column-gap-default">
                                                                    <div class="elementor-row">
                                                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-341b274" data-id="341b274" data-element_type="column">
                                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                                <div class="elementor-widget-wrap">
                                                                                    <div class="elementor-element-custom_font_size elementor-element-custom_font_size_tablet elementor-element-custom_line_height elementor-element-custom_font_family elementor-element-custom_font_weight elementor-element-custom_color elementor-element elementor-element-751e4ee elementor-widget elementor-widget-text-editor" data-id="751e4ee" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                                                <img loading="lazy" class="alignnone size-full wp-image-673" style="width: 27px;margin-right: 20px;margin-top: 15px" src="wp-content/uploads/sites/55/2019/02/placeholder.png" alt="" width="54" height="76" />Chicago
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-aecc6d5 elementor-widget elementor-widget-spacer" data-id="aecc6d5" data-element_type="widget" data-widget_type="spacer.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-spacer">
                                                                                                <div class="elementor-spacer-inner"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_family elementor-element-custom_font_weight elementor-element-custom_color elementor-element elementor-element-ec93783 elementor-widget elementor-widget-text-editor" data-id="ec93783" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-text-editor elementor-clearfix"><p>Address:</p></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_weight elementor-element elementor-element-fb40e38 elementor-widget elementor-widget-text-editor" data-id="fb40e38" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-text-editor elementor-clearfix"><p>8500, Lorem Street, Chicago, IL, 55030</p></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_family elementor-element-custom_font_weight elementor-element-custom_color elementor-element elementor-element-2059a7f elementor-widget elementor-widget-text-editor" data-id="2059a7f" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-text-editor elementor-clearfix"><p>Phone:</p></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_weight elementor-element elementor-element-8e51518 elementor-widget elementor-widget-text-editor" data-id="8e51518" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-text-editor elementor-clearfix"><p>800 853 2538</p></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_family elementor-element-custom_font_weight elementor-element-custom_color elementor-element elementor-element-4237c8a elementor-widget elementor-widget-text-editor" data-id="4237c8a" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-text-editor elementor-clearfix"><p>Email:</p></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_weight elementor-element elementor-element-c84398c elementor-widget elementor-widget-text-editor" data-id="c84398c" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-text-editor elementor-clearfix"><p>email@example.com</p></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_family elementor-element-custom_font_weight elementor-element-custom_color elementor-element elementor-element-7d7245b elementor-widget elementor-widget-text-editor" data-id="7d7245b" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-text-editor elementor-clearfix"><p>Opening Hours:</p></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_weight elementor-element elementor-element-27b9363 elementor-widget elementor-widget-text-editor" data-id="27b9363" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-text-editor elementor-clearfix"><p>Mon &#8211; Thu: 10.00 am &#8211; 6.00 pm<br />Sat &#8211; Sun: 10.00 am &#8211; 5.00 pm</p></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-8652387" data-id="8652387" data-element_type="column">
                                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                                <div class="elementor-widget-wrap">
                                                                                    <div class="elementor-element-custom_font_size elementor-element-custom_font_size_tablet elementor-element-custom_line_height elementor-element-custom_font_family elementor-element-custom_font_weight elementor-element-custom_color elementor-element elementor-element-c416115 elementor-widget elementor-widget-text-editor" data-id="c416115" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-text-editor elementor-clearfix"><img loading="lazy" class="alignnone size-full wp-image-673" style="width: 27px;margin-right: 20px;margin-top: 15px" src="wp-content/uploads/sites/55/2019/02/placeholder.png" alt="" width="54" height="76" />Madrid</div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-04d4e48 elementor-widget elementor-widget-spacer" data-id="04d4e48" data-element_type="widget" data-widget_type="spacer.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-spacer">
                                                                                                <div class="elementor-spacer-inner"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_family elementor-element-custom_font_weight elementor-element-custom_color elementor-element elementor-element-a0d8f8c elementor-widget elementor-widget-text-editor" data-id="a0d8f8c" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-text-editor elementor-clearfix"><p>Address:</p></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_weight elementor-element elementor-element-9eff887 elementor-widget elementor-widget-text-editor" data-id="9eff887" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-text-editor elementor-clearfix"><p>Ronda de Valencia, 13, 60015 Madrid, Spain</p></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_family elementor-element-custom_font_weight elementor-element-custom_color elementor-element elementor-element-f577159 elementor-widget elementor-widget-text-editor" data-id="f577159" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-text-editor elementor-clearfix"><p>Phone:</p></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_weight elementor-element elementor-element-76dff03 elementor-widget elementor-widget-text-editor" data-id="76dff03" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-text-editor elementor-clearfix"><p>800 853 2538</p></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_family elementor-element-custom_font_weight elementor-element-custom_color elementor-element elementor-element-144b212 elementor-widget elementor-widget-text-editor" data-id="144b212" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-text-editor elementor-clearfix"><p>Email:</p></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_weight elementor-element elementor-element-a9608f9 elementor-widget elementor-widget-text-editor" data-id="a9608f9" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-text-editor elementor-clearfix"><p>email@example.com</p></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_family elementor-element-custom_font_weight elementor-element-custom_color elementor-element elementor-element-f58b8a9 elementor-widget elementor-widget-text-editor" data-id="f58b8a9" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-text-editor elementor-clearfix"><p>Opening Hours:</p></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_weight elementor-element elementor-element-34ab1cd elementor-widget elementor-widget-text-editor" data-id="34ab1cd" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-text-editor elementor-clearfix"><p>Mon &#8211; Thu: 10.00 am &#8211; 6.00 pm<br />Sat &#8211; Sun: 10.00 am &#8211; 5.00 pm</p></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-f0154d6" data-id="f0154d6" data-element_type="column">
                                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                                <div class="elementor-widget-wrap">
                                                                                    <div class="elementor-element-custom_font_size elementor-element-custom_font_size_tablet elementor-element-custom_line_height elementor-element-custom_font_family elementor-element-custom_font_weight elementor-element-custom_color elementor-element elementor-element-8b2ec81 elementor-widget elementor-widget-text-editor" data-id="8b2ec81" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-text-editor elementor-clearfix"><img loading="lazy" class="alignnone size-full wp-image-673" style="width: 27px;margin-right: 20px;margin-top: 15px" src="wp-content/uploads/sites/55/2019/02/placeholder.png" alt="" width="54" height="76" />Melbourne</div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-c17ee77 elementor-widget elementor-widget-spacer" data-id="c17ee77" data-element_type="widget" data-widget_type="spacer.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-spacer">
                                                                                                <div class="elementor-spacer-inner"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_family elementor-element-custom_font_weight elementor-element-custom_color elementor-element elementor-element-9b127da elementor-widget elementor-widget-text-editor" data-id="9b127da" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-text-editor elementor-clearfix"><p>Address:</p></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_weight elementor-element elementor-element-833d61b elementor-widget elementor-widget-text-editor" data-id="833d61b" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-text-editor elementor-clearfix"><p>123 6Th St.Melbourne, Fl 32904</p></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_family elementor-element-custom_font_weight elementor-element-custom_color elementor-element elementor-element-2ef2d46 elementor-widget elementor-widget-text-editor" data-id="2ef2d46" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-text-editor elementor-clearfix"><p>Phone:</p></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_weight elementor-element elementor-element-076b675 elementor-widget elementor-widget-text-editor" data-id="076b675" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-text-editor elementor-clearfix"><p>800 863 1229</p></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_family elementor-element-custom_font_weight elementor-element-custom_color elementor-element elementor-element-0f27764 elementor-widget elementor-widget-text-editor" data-id="0f27764" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-text-editor elementor-clearfix"><p>Email:</p></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_weight elementor-element elementor-element-a3d0215 elementor-widget elementor-widget-text-editor" data-id="a3d0215" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-text-editor elementor-clearfix"><p>email@example.com</p></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_family elementor-element-custom_font_weight elementor-element-custom_color elementor-element elementor-element-d21432f elementor-widget elementor-widget-text-editor" data-id="d21432f" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-text-editor elementor-clearfix"><p>Opening Hours:</p></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_weight elementor-element elementor-element-82e4f5e elementor-widget elementor-widget-text-editor" data-id="82e4f5e" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-text-editor elementor-clearfix"><p>Mon &#8211; Thu: 10.00 am &#8211; 6.00 pm<br />Sat &#8211; Sun: 10.00 am &#8211; 5.00 pm</p></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                            <div class="elementor-element elementor-element-bc23287 elementor-widget elementor-widget-spacer" data-id="bc23287" data-element_type="widget" data-widget_type="spacer.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-spacer">
                                                                        <div class="elementor-spacer-inner"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-840a467 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="840a467" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7edcf70" data-id="7edcf70" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-4535af7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4535af7" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div class="elementor-container elementor-column-gap-default">
                                                                    <div class="elementor-row">
                                                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2991ee2" data-id="2991ee2" data-element_type="column">
                                                                            <div class="elementor-column-wrap">
                                                                                <div class="elementor-widget-wrap"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-26e7e2e" data-id="26e7e2e" data-element_type="column">
                                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                                <div class="elementor-widget-wrap">
                                                                                    <div class="elementor-element elementor-element-bb75a39 elementor-widget elementor-widget-spacer" data-id="bb75a39" data-element_type="widget" data-widget_type="spacer.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-spacer">
                                                                                                <div class="elementor-spacer-inner"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-ade17d5 elementor-widget elementor-widget-heading" data-id="ade17d5" data-element_type="widget" data-widget_type="heading.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <h2 class="elementor-heading-title elementor-size-default">Contact Us</h2>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element elementor-element-5ba867c elementor-widget elementor-widget-text-editor" data-id="5ba867c" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-text-editor elementor-clearfix"><p>We respect your privacy and do not to tolerate spam and will never sell, rent, lease or give away your information. We are here to answer any questions you may have.</p></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-cc8e679 elementor-widget elementor-widget-spacer" data-id="cc8e679" data-element_type="widget" data-widget_type="spacer.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-spacer">
                                                                                                <div class="elementor-spacer-inner"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-b744077 elementor-widget elementor-widget-text-editor" data-id="b744077" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-text-editor elementor-clearfix"><div role="form" class="wpcf7" id="wpcf7-f644-p636-o1" lang="en-US" dir="ltr">
                                                                                                <div class="screen-reader-response">
                                                                                                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                                                                    <ul></ul>
                                                                                                </div>
                                                                                                <form action="https://livewp.site/wp/md/agrosector/contacts/#wpcf7-f644-p636-o1" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
                                                                                                    <div style="display: none;">
                                                                                                        <input type="hidden" name="_wpcf7" value="644" />
                                                                                                        <input type="hidden" name="_wpcf7_version" value="5.3.2" />
                                                                                                        <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                                                                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f644-p636-o1" />
                                                                                                        <input type="hidden" name="_wpcf7_container_post" value="636" />
                                                                                                        <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                                                                                                    </div>
                                                                                                    <div class="row contacts_form">
                                                                                                        <div class="span6"><span class="wpcf7-form-control-wrap Name"><input type="text" name="Name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Name *" /></span></div>
                                                                                                        <div class="span6"><span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="E-Mail *" /></span></div>
                                                                                                        <div class="span12"><span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message"></textarea></span><input type="submit" value="Send Message" class="wpcf7-form-control wpcf7-submit" /></div>
                                                                                                    </div>
                                                                                                    <div class="wpcf7-response-output" aria-hidden="true"></div>
                                                                                                </form>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-d20f55f elementor-widget elementor-widget-spacer" data-id="d20f55f" data-element_type="widget" data-widget_type="spacer.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-spacer">
                                                                                            <div class="elementor-spacer-inner"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-a3cec6a" data-id="a3cec6a" data-element_type="column">
                                                                        <div class="elementor-column-wrap">
                                                                            <div class="elementor-widget-wrap"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </section>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-71defc4 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="71defc4" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f78f5a3" data-id="f78f5a3" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-ed9648d elementor-widget elementor-widget-gt3-core-googlemap" data-id="ed9648d" data-element_type="widget" data-widget_type="gt3-core-googlemap.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="gt3_core_elementor_map ">
                                                                        <div class="map-core-canvas map-id-6100b5b6"></div>
                                                                        <script>
                                                                            function gt3_core_initialize_map_6100b5b6() {
                                                                                                    var styleArray = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];

                                                                                definePopupClass();

                                                                                var myLatlng = new google.maps.LatLng(37.2653201, -91.0489118);

                                                                                var mapOptions = {
                                                                                    zoom: 11,
                                                                                    scrollwheel: false,
                                                                                    center: myLatlng,
                                                                                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                                                                                    styles: styleArray
                                                                                };

                                                                                var map = new google.maps.Map(document.getElementsByClassName('map-id-6100b5b6')[0], mapOptions);

                                                                                var marker = new google.maps.Marker({
                                                                                    position: myLatlng,
                                                                                    map: map,
                                                                                    icon: 'https://s3.amazonaws.com/gt3themes/gmap/agrosector.png'
                                                                                });


                                                                            }

                                                                            function definePopupClass() {
                                                                                Popup = function(position, content) {
                                                                                    this.position = position;

                                                                                    content.classList.add('popup-bubble-content');

                                                                                    var pixelOffset = document.createElement('div');
                                                                                    pixelOffset.classList.add('popup-bubble-anchor');
                                                                                    pixelOffset.appendChild(content);

                                                                                    this.anchor = document.createElement('div');
                                                                                    this.anchor.classList.add('popup-tip-anchor');
                                                                                    this.anchor.appendChild(pixelOffset);

                                                                                    this.stopEventPropagation();
                                                                                };
                                                                                Popup.prototype = Object.create(google.maps.OverlayView.prototype);

                                                                                Popup.prototype.onAdd = function() {
                                                                                    this.getPanes().floatPane.appendChild(this.anchor);
                                                                                };

                                                                                Popup.prototype.onRemove = function() {
                                                                                    if (this.anchor.parentElement) {
                                                                                        this.anchor.parentElement.removeChild(this.anchor);
                                                                                    }
                                                                                };

                                                                                Popup.prototype.draw = function() {
                                                                                    var divPosition = this.getProjection().fromLatLngToDivPixel(this.position);
                                                                                    var display =
                                                                                        Math.abs(divPosition.x) < 4000 && Math.abs(divPosition.y) < 4000 ?
                                                                                                    'block' :
                                                                                                    'none';

                                                                                    if (display === 'block') {
                                                                                    this.anchor.style.left = divPosition.x + 'px';
                                                                                    this.anchor.style.top = divPosition.y + 'px';
                                                                                }
                                                                                if (this.anchor.style.display !== display) {
                                                                                    this.anchor.style.display = display;
                                                                                }
                                                                            };

                                                                            Popup.prototype.stopEventPropagation = function() {
                                                                                var anchor = this.anchor;
                                                                                anchor.style.cursor = 'auto';
                                                                                    ['click', 'dblclick', 'contextmenu', 'wheel', 'mousedown', 'touchstart', 'pointerdown'].forEach(function(event) {
                                                                                        anchor.addEventListener(event, function(e) {
                                                                                            e.stopPropagation();
                                                                                        });
                                                                                    });
                                                                            };
                                                                            }
                                                                            jQuery(document).ready(function(){
                                                                                if ('google' in window) {
                                                                                    gt3_core_initialize_map_6100b5b6();
                                                                                } else {
                                                                                    setTimeout(function () {
                                                                                        if ('google' in window) {
                                                                                            gt3_core_initialize_map_6100b5b6();
                                                                                        }
                                                                                    }, 3000);
                                                                                }
                                                                            });
                                                                        </script>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div id="comments"></div>
                    </section>
                </div>
            </div>
        </div>
    </div><!-- .main_wrapper -->
</div><!-- .site_wrapper -->

@endsection
