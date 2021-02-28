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
    <div class='gt3-page-title gt3-page-title_horiz_align_left gt3-page-title_vert_align_middle gt3-page-title_has_img_bg'
    style="background-color:#ffffff;height:345px;color:#ffffff;margin-bottom:90px;background-image:url({{asset('frontend/img/image-5.jpg')}});background-size:cover;background-repeat:no-repeat;background-attachment:scroll;background-position:center center;">
        <div class="page_title_svg_line top" style="color:rgba(255,255,255,1)">
            <svg version="1.1" width="100%" height="6.214396685655101" preserveAspectRatio="none" viewBox="0 0 400 6.214396685655101" xmlns="http://www.w3.org/2000/svg"><path d="M0.000 1.417 L 0.000 2.833 1.300 2.833 C 2.015 2.833,2.671 2.898,2.758 2.977 C 3.332 3.499,10.962 3.531,11.135 3.012 C 11.217 2.764,11.790 2.787,11.875 3.042 C 11.977 3.349,18.863 3.321,19.236 3.012 C 19.447 2.836,19.550 2.834,19.750 3.000 C 19.937 3.155,20.057 3.160,20.226 3.020 C 20.529 2.769,38.312 2.746,38.563 2.996 C 38.784 3.218,42.280 3.221,42.417 3.000 C 42.473 2.908,42.961 2.833,43.500 2.833 C 44.039 2.833,44.527 2.908,44.583 3.000 C 44.710 3.205,47.372 3.223,47.592 3.021 C 47.890 2.745,52.957 2.664,53.179 2.931 C 53.396 3.194,55.086 3.266,55.238 3.019 C 55.349 2.840,56.165 2.869,56.473 3.064 C 56.604 3.146,56.772 3.128,56.881 3.019 C 57.112 2.788,58.667 2.772,58.667 3.000 C 58.667 3.220,60.051 3.216,60.272 2.995 C 60.635 2.631,63.899 2.513,68.417 2.701 C 69.975 2.766,71.381 2.822,71.542 2.826 C 71.740 2.831,71.833 2.967,71.833 3.250 C 71.833 3.600,71.912 3.667,72.323 3.667 C 72.593 3.667,72.860 3.742,72.917 3.833 C 73.043 4.038,75.206 4.056,75.425 3.854 C 75.725 3.578,81.288 3.495,81.511 3.763 C 81.736 4.035,83.092 4.089,83.250 3.833 C 83.387 3.612,86.833 3.612,86.833 3.833 C 86.833 4.050,88.216 4.050,88.433 3.833 C 88.791 3.476,91.119 3.370,96.417 3.471 C 100.882 3.557,101.337 3.536,101.227 3.251 C 101.084 2.878,101.596 2.765,102.034 3.073 C 102.452 3.368,107.710 3.285,108.101 2.977 C 108.382 2.757,111.826 2.759,112.047 2.980 C 112.289 3.222,113.545 3.222,113.787 2.979 C 114.102 2.665,116.443 2.699,116.700 3.022 C 116.874 3.241,117.468 3.327,119.744 3.463 C 121.516 3.569,122.595 3.701,122.633 3.816 C 122.725 4.092,128.864 4.069,129.143 3.792 C 129.431 3.505,132.426 3.565,132.789 3.865 C 132.998 4.037,133.069 4.039,133.124 3.875 C 133.208 3.627,133.936 3.595,134.083 3.833 C 134.212 4.041,138.610 4.059,138.738 3.852 C 138.960 3.494,146.657 3.395,160.167 3.576 C 162.688 3.610,166.430 3.570,168.484 3.487 C 170.538 3.404,172.301 3.399,172.401 3.477 C 172.601 3.632,179.150 3.567,180.750 3.394 C 182.029 3.256,184.216 3.238,187.616 3.337 C 190.086 3.410,190.323 3.392,190.393 3.125 C 190.478 2.798,191.894 2.693,192.083 3.000 C 192.218 3.217,194.949 3.217,195.083 3.000 C 195.225 2.772,196.056 2.790,196.293 3.026 C 196.428 3.161,196.551 3.167,196.701 3.046 C 197.120 2.710,202.614 2.594,203.098 2.911 C 203.431 3.129,203.574 3.146,203.761 2.991 C 203.946 2.837,204.057 2.840,204.254 3.003 C 204.642 3.325,212.167 3.382,212.167 3.063 C 212.167 2.767,213.514 2.747,213.805 3.039 C 214.062 3.296,233.043 3.303,233.376 3.046 C 233.601 2.872,234.265 2.876,234.667 3.053 C 234.804 3.114,237.279 3.202,240.167 3.250 C 243.054 3.297,246.729 3.369,248.333 3.409 C 249.938 3.450,251.911 3.410,252.720 3.322 C 253.684 3.216,254.543 3.218,255.220 3.328 C 256.735 3.574,261.768 3.665,261.983 3.451 C 262.079 3.354,262.987 3.241,263.999 3.199 C 265.012 3.158,265.881 3.058,265.930 2.978 C 265.979 2.899,266.423 2.833,266.917 2.833 C 267.410 2.833,267.856 2.764,267.908 2.680 C 268.036 2.473,273.719 2.482,278.310 2.696 C 281.233 2.833,282.120 2.826,282.424 2.663 C 282.833 2.444,283.422 2.555,283.258 2.821 C 283.059 3.143,283.631 3.216,286.803 3.272 C 288.595 3.304,290.478 3.400,290.989 3.487 C 292.214 3.695,295.784 3.598,296.417 3.340 C 296.763 3.198,297.250 3.176,298.000 3.268 C 298.596 3.341,299.440 3.395,299.875 3.388 C 300.310 3.381,301.360 3.362,302.208 3.346 C 303.056 3.330,304.961 3.392,306.441 3.485 C 308.266 3.599,309.472 3.599,310.188 3.484 C 310.822 3.382,311.264 3.375,311.295 3.467 C 311.325 3.558,312.879 3.579,315.131 3.518 C 321.308 3.353,323.836 3.436,324.219 3.819 C 324.446 4.046,325.833 4.059,325.833 3.833 C 325.833 3.611,329.446 3.611,329.583 3.833 C 329.742 4.089,331.097 4.035,331.322 3.763 C 331.545 3.495,337.109 3.578,337.408 3.854 C 337.627 4.056,339.623 4.038,339.750 3.833 C 339.884 3.616,342.282 3.616,342.417 3.833 C 342.561 4.067,345.553 4.047,345.789 3.811 C 346.077 3.523,364.113 3.582,364.464 3.872 C 364.791 4.142,372.286 4.114,372.559 3.841 C 372.800 3.600,373.722 3.622,373.975 3.875 C 374.319 4.220,380.836 4.273,381.511 3.936 C 381.871 3.757,382.788 3.642,384.474 3.564 C 386.461 3.473,386.999 3.395,387.359 3.143 C 387.865 2.789,388.834 2.734,389.141 3.041 C 389.432 3.332,392.546 3.308,392.903 3.011 C 393.086 2.860,393.231 2.845,393.375 2.962 C 393.490 3.056,394.633 3.179,395.917 3.237 C 397.200 3.295,398.644 3.383,399.125 3.433 L 400.000 3.524 400.000 1.762 L 400.000 0.000 200.000 0.000 L 0.000 0.000 0.000 1.417 " stroke="none" fill-rule="evenodd" fill="currentColor"></path></svg>
        </div>
        <div class='gt3-page-title__inner '>
            <div class='container'>
                <div class='gt3-page-title__content'>
                    <div class='page_title'><h1>{{ $detailpost->name_post }}</h1></div>
                    <div class='page_title_meta'>
                        <span class='post_date'>Jan 29 19</span>
                        <span class='post_author'>by <a href="#">John</a></span>
                        <span class='post_cats'>
                            <a href="#" rel="category tag">Genetic Engineering</a>
                        </span>
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
        <div class="container">
            <div class="row sidebar_right">
                <div class="content-container span9">
                    <section id='main_content'>
                        <div class="blog_post_preview format-standard-image">
                            <div class="single_meta post-761 post type-post status-publish format-standard has-post-thumbnail hentry category-genetic-engineering">
                                <div class="item_wrapper">
                                    <div class="blog_content">
                                        <div class="blog_post_media">
                                            <div class="blog_post_media-wrapper_img"><img src="../../../../wp-content/uploads/sites/55/2019/01/image-24-1170x695.jpg" alt="" /></div>
                                        </div>
                                        <div data-elementor-type="wp-post" data-elementor-id="761" class="elementor elementor-761 elementor-bc-flex-widget" data-elementor-settings="[]">
                                            <div class="elementor-inner">
                                                <div class="elementor-section-wrap">
                                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-2c050d5 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2c050d5" data-element_type="section">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-row">
                                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-566c86a3" data-id="566c86a3" data-element_type="column">
                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div class="elementor-element elementor-element-1110b1f8 elementor-widget elementor-widget-text-editor" data-id="1110b1f8" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <div class="elementor-text-editor elementor-clearfix">
                                                                                    {!! $detailpost->content_post !!}
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
                                        <div class="dn"></div>
                                        <div class="clear post_clear"></div>

                                        <div class="post_block_info">
                                            <div class="single_post_tags">
                                            </div>
                                            <div class="blog_post_info">
                                                <!-- post share block -->
                                                <div class="post_share_block">
                                                    <a href="javascript:void(0)"><span class="sharing_title">Share</span></a>
                                                    <div class="post_share_wrap">
                                                        <ul>
                                                            <li class="post_share-facebook"><a target="_blank" href="https://www.facebook.com/share.php?u=https://livewp.site/wp/md/agrosector/2019/01/29/15-best-vegetables-for-your-healthy-hair-skin/"><span class="fa fa-facebook"></span></a></li>
                                                            <li class="post_share-twitter"><a target="_blank" href="https://twitter.com/intent/tweet?text=15%20Best%20vegetables%20for%20your%20healthy%20%20hair&amp;url=https://livewp.site/wp/md/agrosector/2019/01/29/15-best-vegetables-for-your-healthy-hair-skin/"><span class="fa fa-twitter"></span></a></li>
                                                            <li class="post_share-pinterest"><a target="_blank" href="../../../../../../../../pinterest.com/pin/create/button/indexacce.html?url=https://livewp.site/wp/md/agrosector/2019/01/29/15-best-vegetables-for-your-healthy-hair-skin/&amp;media=https://livewp.site/wp/md/agrosector/wp-content/uploads/sites/55/2019/01/image-24.jpg"><span class="fa fa-pinterest"></span></a></li>
                                                            <li class="post_share-linkedin"><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://livewp.site/wp/md/agrosector/2019/01/29/15-best-vegetables-for-your-healthy-hair-skin/&amp;title=15%20Best%20vegetables%20for%20your%20healthy%20%20hair&amp;source=Agrosector"><span class="fa fa-linkedin"></span></a></li>
                                                            <li class="post_share-mail"><a target="_blank" href="mailto:?subject=15 Best vegetables for your healthy  hair&body=https://livewp.site/wp/md/agrosector/2019/01/29/15-best-vegetables-for-your-healthy-hair-skin/"><span class="fa fa-envelope"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- //post share block -->
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="gt3_author_box">
                                            <div class="gt3_author_box__avatar">
                                                <img alt='' src='https://secure.gravatar.com/avatar/a964731100a62b3188ed81d5814c6687?s=200&amp;d=mm&amp;r=g' srcset='https://secure.gravatar.com/avatar/a964731100a62b3188ed81d5814c6687?s=400&#038;d=mm&#038;r=g 2x' class='avatar avatar-200 photo' height='200' width='200' loading='lazy' /> </div>
                                            <h3 class="gt3_author_box__name">John</h3>
                                            <div class="gt3_author_box__desc">Sed vitae ante aliquet, vehicula lorem ac, vulputate odio. Pellentesque sit amet augue quis ipsum finibus facilisis eget vitae sem.</div>
                                        </div>

                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="comments">
                            <div id="respond" class="comment-respond">
                                <h2 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="index.html#respond" style="display:none;">Cancel reply</a></small></h2>You must be logged in to post a comment.
                            </div><!-- #respond -->
                        </div>
                    </section>
                </div>
                <div class="sidebar-container span3">
                    <aside class='sidebar'>
                        <div id="custom_html-2" class="widget_text widget gt3_widget open widget_custom_html">
                            <div class="textwidget custom-html-widget">
                                <p><img class="rounded aligncenter size-full" src="../../../../wp-content/uploads/sites/55/2019/02/user.jpg" alt="user_logo" width="172" height="172"></p>
                                <p style="text-align: center">We do great work in our business so that you can always see the quality of our work.</p>
                            </div>
                        </div>
                        <div id="text-8" class="widget gt3_widget open widget_text">
                            <div class="textwidget">
                                <div class="gt3_social" style="font-size: 15px;margin-top: -9px;text-align: center">
                                    <a class="gt3_icon_link gt3_custom_color" style="margin-right: 18px" href="#" target="_blank" rel="noopener" data-color="#d1d1d1" data-hover-color="#b2b74a"><i class="fa fa-twitter"> </i></a><a class="gt3_icon_link gt3_custom_color" style="margin-right: 18px" href="#" target="_blank" rel="noopener" data-color="#d1d1d1" data-hover-color="#b2b74a"><i class="fa fa-facebook"> </i></a><a class="gt3_icon_link gt3_custom_color" style="margin-right: 18px" href="#" target="_blank" rel="noopener" data-color="#d1d1d1" data-hover-color="#b2b74a"><i class="fa fa-instagram"> </i></a><a class="gt3_icon_link gt3_custom_color" href="#" target="_blank" rel="noopener" data-color="#d1d1d1" data-hover-color="#b2b74a"><i class="fa fa-youtube-play"> </i></a>
                                </div>
                            </div>
                        </div>
                        <div id="search-2" class="widget gt3_widget open widget_search">

                            <form role="search" method="get" class="search_form gt3_search_form" action="https://livewp.site/wp/md/agrosector/">
                                <label for="search-form-5fe0607e1a901">Search</label>
                                <input class="search_text" id="search-form-5fe0607e1a901" type="text" name="s">
                                <input class="search_submit" type="submit" value="Search">
                            </form>
                        </div>
                        <div id="categories-2" class="widget gt3_widget open widget_categories">
                            <h3 class="widget-title">Categories</h3>
                            <ul>
                                <li class="cat-item cat-item-10"><a href="../../../../category/conservation-agriculture/index.html">Conservation Agriculture</a>
                                </li>
                                <li class="cat-item cat-item-8"><a href="../../../../category/genetic-engineering/index.html">Genetic Engineering</a>
                                </li>
                                <li class="cat-item cat-item-12"><a href="../../../../category/homobiotic-turnover/index.html">Homobiotic Turnover</a>
                                </li>
                                <li class="cat-item cat-item-4"><a href="../../../../category/organic-farming/index.html">Organic farming</a>
                                </li>
                                <li class="cat-item cat-item-6"><a href="../../../../category/permaculture/index.html">Permaculture</a>
                                </li>
                                <li class="cat-item cat-item-5"><a href="../../../../category/precision-farming/index.html">Precision Farming</a>
                                </li>
                            </ul>

                        </div>
                        <div id="posts-3" class="widget gt3_widget open widget_posts">
                            <h3 class="widget-title">Recent Posts</h3>
                            <ul class="recent_posts">

                                <li class="with_img">
                                    <div class="recent_posts_content no_content">
                                        <a href="../../30/post-with-image/index.html"><img src="../../../../wp-content/uploads/sites/55/2019/01/image-10-150x150-140x140.jpg" alt="Post With Image"></a>
                                        <div class="recent_posts_wrapinner">
                                            <div class="listing_meta">
                                                <span>Jan 30 19</span>
                                            </div>
                                            <div class="post_title"><a href="../../30/post-with-image/index.html">Post With Image</a></div>

                                        </div>
                                    </div>
                                </li>

                                <li class="with_img">
                                    <div class="recent_posts_content no_content">
                                        <a href="../../30/the-amount-of-freak-bread-or-other-fruits-plants/index.html"><img src="../../../../wp-content/uploads/sites/55/2019/01/image-25-150x150-140x140.jpg" alt="The amount of freak bread or other  fruits"></a>
                                        <div class="recent_posts_wrapinner">
                                            <div class="listing_meta">
                                                <span>Jan 30 19</span>
                                            </div>
                                            <div class="post_title"><a href="../../30/the-amount-of-freak-bread-or-other-fruits-plants/index.html">The amount of freak bread or other fruits</a></div>

                                        </div>
                                    </div>
                                </li>

                                <li class="with_img">
                                    <div class="recent_posts_content no_content">
                                        <a href="../../30/post-with-video/index.html"><img src="../../../../wp-content/uploads/sites/55/2019/01/image-21-150x150-140x140.jpg" alt="Post With Video"></a>
                                        <div class="recent_posts_wrapinner">
                                            <div class="listing_meta">
                                                <span>Jan 30 19</span>
                                            </div>
                                            <div class="post_title"><a href="../../30/post-with-video/index.html">Post With Video</a></div>

                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div id="tag_cloud-2" class="widget gt3_widget open widget_tag_cloud">
                            <h3 class="widget-title">Tags</h3>
                            <div class="tagcloud">
                                <a href="../../../../tag/animal/index.html" class="tag-cloud-link tag-link-17 tag-link-position-1" style="font-size: 22pt;" aria-label="animal (3 items)">animal</a>
                                <a href="../../../../tag/animal-breeding/index.html" class="tag-cloud-link tag-link-18 tag-link-position-2" style="font-size: 22pt;" aria-label="animal breeding (3 items)">animal breeding</a>
                                <a href="../../../../tag/cow/index.html" class="tag-cloud-link tag-link-15 tag-link-position-3" style="font-size: 22pt;" aria-label="cow (3 items)">cow</a>
                                <a href="../../../../tag/horns/index.html" class="tag-cloud-link tag-link-19 tag-link-position-4" style="font-size: 8pt;" aria-label="horns (2 items)">horns</a>
                                <a href="../../../../tag/sheep/index.html" class="tag-cloud-link tag-link-16 tag-link-position-5" style="font-size: 8pt;" aria-label="sheep (2 items)">sheep</a></div>
                        </div>
                        <div id="custom_html-3" class="widget_text widget gt3_widget open widget_custom_html">
                            <h3 class="widget-title">Advertizing Spot</h3>
                            <div class="textwidget custom-html-widget"><img class="size-full" src="../../../../wp-content/uploads/sites/55/2019/01/image-22.jpg" alt="Banner"></div>
                        </div>
                    </aside>
                </div>
            </div>

        </div>

    </div><!-- .main_wrapper -->
</div><!-- .site_wrapper -->

@endsection
