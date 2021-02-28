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

<div class="site_wrapper fadeOnLoad">
    <div class="main_wrapper">
        <div class="container container-sidebar_none">
            <div class="row sidebar_none">
                <div class="content-container span12">
                    <section id='main_content'>
                        <div data-elementor-type="wp-post" data-elementor-id="8" class="elementor elementor-8" data-elementor-settings="[]">
                            <div class="elementor-inner">
                                <div class="elementor-section-wrap">
                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-4ea32c8 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="4ea32c8" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b5f6a41" data-id="b5f6a41" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-19c4413 absolute elementor-widget elementor-widget-image" data-id="19c4413" data-element_type="widget" data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image">
                                                                        <img width="1920" height="20" src="wp-content/uploads/sites/55/2019/01/shape-top.png" class="attachment-full size-full" alt="" loading="lazy" srcset="https://livewp.site/wp/md/agrosector/wp-content/uploads/sites/55/2019/01/shape-top.png 1920w, https://livewp.site/wp/md/agrosector/wp-content/uploads/sites/55/2019/01/shape-top-300x3.png 300w, https://livewp.site/wp/md/agrosector/wp-content/uploads/sites/55/2019/01/shape-top-768x8.png 768w, https://livewp.site/wp/md/agrosector/wp-content/uploads/sites/55/2019/01/shape-top-1024x11.png 1024w, https://livewp.site/wp/md/agrosector/wp-content/uploads/sites/55/2019/01/shape-top-1366x14.png 1366w" sizes="(max-width: 1920px) 100vw, 1920px" title="shape-top" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-655d1f3 elementor-widget elementor-widget-gt3-core-revolutionslider" data-id="655d1f3" data-element_type="widget" data-widget_type="gt3-core-revolutionslider.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="gt3_revolution-slider-elementor">

                                                                        <!-- START Home REVOLUTION SLIDER 6.3.3 -->
                                                                        <p class="rs-p-wp-fix"></p>
                                                                        <rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery" style="background:linear-gradient(60deg, rgba(109,121,39,1) 0%, rgba(146,189,172,1) 47%, rgba(119,132,123,1) 100%);padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                                                                            <rs-module id="rev_slider_1_1" style="" data-version="6.3.3">
                                                                                <rs-slides>
                                                                                    <rs-slide data-key="rs-1" data-title="Slide" data-thumb="{{asset('FEFood/img/slider-1.jpg')}}" data-anim="ei:d;eo:d;s:600;r:0;t:fade;sl:d;">
                                                                                        <img src="wp-content/plugins/revslider/public/assets/assets/dummy.png" title="Home" data-lazyload="{{asset('FEFood/img/slider-1.jpg')}}" data-parallax="off" class="rev-slidebg" data-no-retina>
                                                                                        <!--
                                                                                    -->
                                                                                        <rs-layer id="slider-1-slide-1-layer-1" data-type="image" data-rsp_ch="on" data-xy="x:l,c,c,c;xo:286px,-258px,-208px,-208px;yo:212px,62px,62px,62px;" data-text="l:22;a:inherit;" data-dim="w:['154px','154px','154px','154px'];h:['18px','18px','18px','18px'];" data-vbility="t,t,t,f" data-frame_0="tp:600;" data-frame_1="tp:600;sR:10;" data-frame_999="o:0;tp:600;st:w;sR:4690;" style="z-index:7;"><img loading="lazy" src="wp-content/plugins/revslider/public/assets/assets/dummy.png" width="308" height="36" data-lazyload="//livewp.site/wp/md/agrosector/wp-content/uploads/sites/55/2019/01/shape.png" data-no-retina>
                                                                                        </rs-layer>
                                                                                        <!--

                                                                                    -->
                                                                                        <rs-layer id="slider-1-slide-1-layer-2" data-type="image" data-rsp_ch="on" data-xy="x:l,c,c,c;xo:801px,258px,208px,208px;yo:212px,62px,62px,62px;" data-text="l:22;a:inherit;" data-dim="w:['154px','154px','154px','154px'];h:['18px','18px','18px','18px'];" data-vbility="t,t,t,f" data-frame_0="tp:600;" data-frame_1="tp:600;sR:10;" data-frame_999="o:0;tp:600;st:w;sR:4690;" style="z-index:8;"><img loading="lazy" src="wp-content/plugins/revslider/public/assets/assets/dummy.png" width="308" height="36" data-lazyload="//livewp.site/wp/md/agrosector/wp-content/uploads/sites/55/2019/01/shape.png" data-no-retina>
                                                                                        </rs-layer>
                                                                                        <!--

                                                                                    -->
                                                                                        <rs-layer id="slider-1-slide-1-layer-3" data-type="text" data-rsp_ch="on" data-xy="x:c;yo:209px,59px,59px,59px;" data-text="s:30,30,20,20;l:30;fw:700;a:inherit;" data-frame_0="tp:600;" data-frame_1="tp:600;sR:10;" data-frame_999="o:0;tp:600;st:w;sR:4690;" style="z-index:9;font-family:BenchNine;text-transform:uppercase;">Grow naturally, Live natural
                                                                                        </rs-layer>
                                                                                        <!--

                                                                                    -->
                                                                                        <rs-layer id="slider-1-slide-1-layer-4" data-type="text" data-rsp_ch="on" data-xy="x:c;yo:247px,130px,110px,150px;" data-text="s:298,228,170,120;l:298,228,200,120;ls:-7px;fw:700;a:inherit;" data-frame_0="o:1;tp:600;" data-frame_0_chars="d:10;x:-105%;o:0;rX:0deg;rY:0deg;rZ:-90deg;" data-frame_1="tp:600;e:power4.inOut;sp:2000;sR:10;" data-frame_1_chars="d:10;" data-frame_999="x:50px;o:0;tp:600;st:w;sp:1000;sR:2390;" style="z-index:10;font-family:BenchNine;">FARMING
                                                                                        </rs-layer>
                                                                                        <!--

                                                                                    --><a id="slider-1-slide-1-layer-6" class="rs-layer rev-btn" href="about/index.html" target="_self" rel="nofollow" data-type="button" data-color="#5d564f" data-xy="x:c;xo:-68px,-66px,-93px,-77px;y:m,m,m,b;yo:175px,90px,60px,50px;" data-text="s:16;l:18;ls:0px,0,0,0;fw:700;a:inherit;" data-rsp_o="off" data-rsp_bd="off" data-padding="t:16;r:30;b:16;l:30;" data-frame_0="tp:600;" data-frame_1="tp:600;e:power2.inOut;st:900;sp:700;sR:900;" data-frame_999="o:0;tp:600;st:w;sp:700;sR:3400;" data-frame_hover="c:#fff;bgc:#b2b74a;boc:#000;bor:0px,0px,0px,0px;bos:solid;oX:50;oY:50;" style="z-index:11;background-color:#ffffff;font-family:BenchNine;text-transform:uppercase;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">Who We Are
                                                                                        </a>
                                                                                        <!--

                                                                                    -->
                                                                                        <rs-layer id="slider-1-slide-1-layer-7" class="rev-btn" data-type="button" data-xy="x:c;xo:72px,73px,98px,75px;y:m,m,m,b;yo:175px,90px,60px,50px;" data-text="s:16;l:18;ls:0px,0,0,0;fw:700;a:inherit;" data-rsp_o="off" data-rsp_bd="off" data-padding="t:16;r:30;b:16;l:30;" data-frame_0="tp:600;" data-frame_1="tp:600;st:900;sp:700;sR:900;" data-frame_999="o:0;tp:600;st:w;sp:700;sR:3400;" data-frame_hover="c:#5d564f;bgc:#fff;boc:#000;bor:0px,0px,0px,0px;bos:solid;oX:50;oY:50;" style="z-index:12;background-color:#b2b74a;font-family:BenchNine;text-transform:uppercase;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">Get in Touch

                                                                                        </rs-layer>
                                                                                        <!--

                                                                                    -->
                                                                                        <rs-layer id="slider-1-slide-1-layer-8" data-type="image" data-rsp_ch="on" data-xy="x:c;" data-text="l:22;a:inherit;" data-dim="w:['100%','100%','100%','100%'];" data-vbility="f,t,t,t" data-basealign="slide" data-frame_0="tp:600;" data-frame_1="tp:600;sR:10;" data-frame_999="o:0;tp:600;st:w;sR:4690;" style="z-index:5;"><img loading="lazy" src="wp-content/plugins/revslider/public/assets/assets/dummy.png" width="1920" height="20" data-lazyload="//livewp.site/wp/md/agrosector/wp-content/uploads/sites/55/2019/01/shape-top.png" data-no-retina>
                                                                                        </rs-layer>
                                                                                        <!--

                                                                                    -->
                                                                                        <rs-layer id="slider-1-slide-1-layer-9" class="test444" data-type="image" data-rsp_ch="on" data-xy="x:c;y:b;" data-text="l:22;a:inherit;" data-dim="w:['100%','100%','100%','100%'];" data-basealign="slide" data-frame_0="tp:600;" data-frame_1="tp:600;sR:10;" data-frame_999="o:0;tp:600;st:w;sR:4690;" style="z-index:6;.test444{ line-height:0;"><img loading="lazy" src="wp-content/plugins/revslider/public/assets/assets/dummy.png" width="1920" height="10" data-lazyload="//livewp.site/wp/md/agrosector/wp-content/uploads/sites/55/2019/01/shape-bottom.png" data-no-retina>
                                                                                        </rs-layer>
                                                                                    </rs-slide>
                                                                                    <rs-slide data-key="rs-2" data-title="Slide" data-thumb="{{asset('FEFood/img/slider-2.jpg')}}" data-anim="ei:d;eo:d;s:600;t:fade;sl:d;">
                                                                                        <img src="wp-content/plugins/revslider/public/assets/assets/dummy.png" title="Home" data-lazyload="{{asset('FEFood/img/slider-2.jpg')}}" data-parallax="off" class="rev-slidebg" data-no-retina>
                                                                                        <!--
                                                                                    -->
                                                                                        <rs-layer id="slider-1-slide-2-layer-8" data-type="image" data-rsp_ch="on" data-xy="x:c;" data-text="l:22;a:inherit;" data-dim="w:['100%','100%','100%','100%'];" data-basealign="slide" data-frame_0="tp:600;" data-frame_1="tp:600;sR:10;" data-frame_999="o:0;tp:600;st:w;sR:4690;" style="z-index:5;"><img loading="lazy" src="wp-content/plugins/revslider/public/assets/assets/dummy.png" width="1920" height="20" data-lazyload="//livewp.site/wp/md/agrosector/wp-content/uploads/sites/55/2019/01/shape-top.png" data-no-retina>
                                                                                        </rs-layer>
                                                                                        <!--

                                                                                    -->
                                                                                        <rs-layer id="slider-1-slide-2-layer-9" data-type="image" data-rsp_ch="on" data-xy="x:c;y:b;" data-text="l:22;a:inherit;" data-dim="w:['100%','100%','100%','100%'];" data-basealign="slide" data-frame_0="tp:600;" data-frame_1="tp:600;sR:10;" data-frame_999="o:0;tp:600;st:w;sR:4690;" style="z-index:6;"><img loading="lazy" src="wp-content/plugins/revslider/public/assets/assets/dummy.png" width="1920" height="10" data-lazyload="//livewp.site/wp/md/agrosector/wp-content/uploads/sites/55/2019/01/shape-bottom.png" data-no-retina>
                                                                                        </rs-layer>
                                                                                        <!--

                                                                                    -->
                                                                                        <rs-layer id="slider-1-slide-2-layer-1" data-type="image" data-rsp_ch="on" data-xy="x:l,c,c,c;xo:252px,-290px,-230px,-230px;yo:212px,62px,61px,61px;" data-text="l:22;a:inherit;" data-dim="w:['154px','154px','154px','154px'];h:['18px','18px','18px','18px'];" data-vbility="t,t,t,f" data-frame_0="tp:600;" data-frame_1="tp:600;sR:10;" data-frame_999="o:0;tp:600;st:w;sR:4690;" style="z-index:7;"><img loading="lazy" src="wp-content/plugins/revslider/public/assets/assets/dummy.png" width="308" height="36" data-lazyload="//livewp.site/wp/md/agrosector/wp-content/uploads/sites/55/2019/01/shape.png" data-no-retina>
                                                                                        </rs-layer>
                                                                                        <!--

                                                                                    -->
                                                                                        <rs-layer id="slider-1-slide-2-layer-2" data-type="image" data-rsp_ch="on" data-xy="x:l,c,c,c;xo:833px,290px,230px,230px;yo:212px,62px,62px,62px;" data-text="l:22;a:inherit;" data-dim="w:['154px','154px','154px','154px'];h:['18px','18px','18px','18px'];" data-vbility="t,t,t,f" data-frame_0="tp:600;" data-frame_1="tp:600;sR:10;" data-frame_999="o:0;tp:600;st:w;sR:4690;" style="z-index:8;"><img loading="lazy" src="wp-content/plugins/revslider/public/assets/assets/dummy.png" width="308" height="36" data-lazyload="//livewp.site/wp/md/agrosector/wp-content/uploads/sites/55/2019/01/shape.png" data-no-retina>
                                                                                        </rs-layer>
                                                                                        <!--

                                                                                    -->
                                                                                        <rs-layer id="slider-1-slide-2-layer-3" data-type="text" data-rsp_ch="on" data-xy="x:c;yo:209px,59px,59px,59px;" data-text="s:30,30,20,20;l:30;fw:700;a:inherit;" data-frame_0="tp:600;" data-frame_1="tp:600;sR:10;" data-frame_999="o:0;tp:600;st:w;sR:4690;" style="z-index:9;font-family:BenchNine;text-transform:uppercase;">High quality, Excellent cooperation
                                                                                        </rs-layer>
                                                                                        <!--

                                                                                    -->
                                                                                        <rs-layer id="slider-1-slide-2-layer-4" data-type="text" data-rsp_ch="on" data-xy="x:c;yo:247px,130px,110px,150px;" data-text="s:298,228,170,120;l:298,228,200,120;ls:-7px;fw:700;a:inherit;" data-frame_0="y:bottom;sX:0.4;sY:0.4;o:1;rX:-20deg;rY:-20deg;tp:600;" data-frame_1="tp:600;e:power2.out;sp:2000;sR:10;" data-frame_999="x:50px;o:0;tp:600;st:w;sp:1000;sR:2990;" style="z-index:10;font-family:BenchNine;text-transform:uppercase;">Agriculture
                                                                                        </rs-layer>
                                                                                        <!--

                                                                                    -->
                                                                                        <rs-layer id="slider-1-slide-2-layer-6" class="rev-btn" data-type="button" data-color="#5d564f" data-xy="x:c;xo:-68px,-68px,-93px,-77px;y:m,m,m,b;yo:175px,90px,60px,50px;" data-text="s:16;l:18;ls:0px,0,0,0;fw:700;a:inherit;" data-rsp_o="off" data-rsp_bd="off" data-padding="t:16;r:30;b:16;l:30;" data-frame_0="tp:600;" data-frame_1="tp:600;e:power2.inOut;st:900;sp:700;sR:900;" data-frame_999="o:0;tp:600;st:w;sp:700;sR:3400;" data-frame_hover="c:#fff;bgc:#b2b74a;boc:#000;bor:0px,0px,0px,0px;bos:solid;oX:50;oY:50;" style="z-index:11;background-color:#ffffff;font-family:BenchNine;text-transform:uppercase;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">Who We Are
                                                                                        </rs-layer>
                                                                                        <!--

                                                                                    -->
                                                                                        <rs-layer id="slider-1-slide-2-layer-7" class="rev-btn" data-type="button" data-xy="x:c;xo:72px,72px,98px,75px;y:m,m,m,b;yo:175px,90px,60px,50px;" data-text="s:16;l:18;ls:0px,0,0,0;fw:700;a:inherit;" data-rsp_o="off" data-rsp_bd="off" data-padding="t:16;r:30;b:16;l:30;" data-frame_0="tp:600;" data-frame_1="tp:600;st:900;sp:700;sR:900;" data-frame_999="o:0;tp:600;st:w;sp:700;sR:3400;" data-frame_hover="c:#5d564f;bgc:#fff;boc:#000;bor:0px,0px,0px,0px;bos:solid;oX:50;oY:50;" style="z-index:12;background-color:#b2b74a;font-family:BenchNine;text-transform:uppercase;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">Get in Touch

                                                                                        </rs-layer>
                                                                                        <!--
                                                        -->
                                                                                    </rs-slide>
                                                                                    <rs-slide data-key="rs-3" data-title="Slide" data-thumb="{{asset('FEFood/img/slider-3.jpg')}}" data-anim="ei:d;eo:d;s:600;t:fade;sl:d;">
                                                                                        <img src="wp-content/plugins/revslider/public/assets/assets/dummy.png" title="Home" data-lazyload="{{asset('FEFood/img/slider-3.jpg')}}" data-parallax="off" class="rev-slidebg" data-no-retina>
                                                                                        <!--
                                                                                    -->
                                                                                        <rs-layer id="slider-1-slide-3-layer-8" data-type="image" data-rsp_ch="on" data-xy="x:c;" data-text="l:22;a:inherit;" data-dim="w:['100%','100%','100%','100%'];" data-basealign="slide" data-frame_0="tp:600;" data-frame_1="tp:600;sR:10;" data-frame_999="o:0;tp:600;st:w;sR:4690;" style="z-index:5;"><img loading="lazy" src="wp-content/plugins/revslider/public/assets/assets/dummy.png" width="1920" height="20" data-lazyload="//livewp.site/wp/md/agrosector/wp-content/uploads/sites/55/2019/01/shape-top.png" data-no-retina>
                                                                                        </rs-layer>
                                                                                        <!--

                                                                                    -->
                                                                                        <rs-layer id="slider-1-slide-3-layer-9" data-type="image" data-rsp_ch="on" data-xy="x:c;y:b;" data-text="l:22;a:inherit;" data-dim="w:['100%','100%','100%','100%'];" data-basealign="slide" data-frame_0="tp:600;" data-frame_1="tp:600;sR:10;" data-frame_999="o:0;tp:600;st:w;sR:4690;" style="z-index:6;"><img loading="lazy" src="wp-content/plugins/revslider/public/assets/assets/dummy.png" width="1920" height="10" data-lazyload="//livewp.site/wp/md/agrosector/wp-content/uploads/sites/55/2019/01/shape-bottom.png" data-no-retina>
                                                                                        </rs-layer>
                                                                                        <!--

                                                                                    -->
                                                                                        <rs-layer id="slider-1-slide-3-layer-1" data-type="image" data-rsp_ch="on" data-xy="x:l,c,c,c;xo:340px,-203px,-171px,-171px;yo:212px,62px,62px,62px;" data-text="l:22;a:inherit;" data-dim="w:['154px','154px','154px','154px'];h:['18px','18px','18px','18px'];" data-vbility="t,t,t,f" data-frame_0="tp:600;" data-frame_1="tp:600;sR:10;" data-frame_999="o:0;tp:600;st:w;sR:4690;" style="z-index:7;"><img loading="lazy" src="wp-content/plugins/revslider/public/assets/assets/dummy.png" width="308" height="36" data-lazyload="//livewp.site/wp/md/agrosector/wp-content/uploads/sites/55/2019/01/shape.png" data-no-retina>
                                                                                        </rs-layer>
                                                                                        <!--

                                                                                    -->
                                                                                        <rs-layer id="slider-1-slide-3-layer-2" data-type="image" data-rsp_ch="on" data-xy="x:l,c,c,c;xo:746px,203px,171px,171px;yo:212px,62px,62px,62px;" data-text="l:22;a:inherit;" data-dim="w:['154px','154px','154px','154px'];h:['18px','18px','18px','18px'];" data-vbility="t,t,t,f" data-frame_0="tp:600;" data-frame_1="tp:600;sR:10;" data-frame_999="o:0;tp:600;st:w;sR:4690;" style="z-index:8;"><img loading="lazy" src="wp-content/plugins/revslider/public/assets/assets/dummy.png" width="308" height="36" data-lazyload="//livewp.site/wp/md/agrosector/wp-content/uploads/sites/55/2019/01/shape.png" data-no-retina>
                                                                                        </rs-layer>

                                                                                        <rs-layer id="slider-1-slide-3-layer-3" data-type="text" data-rsp_ch="on" data-xy="x:c;yo:209px,59px,59px,59px;" data-text="s:30,30,20,20;l:30;fw:700;a:inherit;" data-frame_0="tp:600;" data-frame_1="tp:600;sR:10;" data-frame_999="o:0;tp:600;st:w;sR:4690;" style="z-index:9;font-family:BenchNine;text-transform:uppercase;"
                                                                                        >Organic & Natural
                                                                                        </rs-layer>

                                                                                        <rs-layer id="slider-1-slide-3-layer-4" data-type="text" data-rsp_ch="on" data-xy="x:c;yo:247px,130px,110px,150px;" data-text="s:298,228,170,120;l:298,228,200,120;ls:-7px;fw:700;a:inherit;" data-frame_0="x:175%;o:1;tp:600;" data-frame_0_mask="u:t;x:-100%;" data-frame_1="tp:600;e:power2.out;sp:2000;sR:10;" data-frame_1_mask="u:t;" data-frame_999="x:50px;o:0;tp:600;st:w;sp:1000;sR:2990;" style="z-index:10;font-family:BenchNine;text-transform:uppercase;">
                                                                                        Products
                                                                                        </rs-layer>

                                                                                        <rs-layer id="slider-1-slide-3-layer-6" class="rev-btn" data-type="button" data-color="#5d564f" data-xy="x:c;xo:-68px,-68px,-93px,-77px;y:m,m,m,b;yo:175px,90px,60px,50px;" data-text="s:16;l:18;ls:0px,0,0,0;fw:700;a:inherit;" data-rsp_o="off" data-rsp_bd="off" data-padding="t:16;r:30;b:16;l:30;" data-frame_0="tp:600;" data-frame_1="tp:600;e:power2.inOut;st:900;sp:700;sR:900;" data-frame_999="o:0;tp:600;st:w;sp:700;sR:3400;" data-frame_hover="c:#fff;bgc:#b2b74a;boc:#000;bor:0px,0px,0px,0px;bos:solid;oX:50;oY:50;" style="z-index:11;background-color:#ffffff;font-family:BenchNine;text-transform:uppercase;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                                                                                        Who We Are
                                                                                        </rs-layer>

                                                                                        <rs-layer id="slider-1-slide-3-layer-7" class="rev-btn" data-type="button" data-xy="x:c;xo:72px,72px,98px,75px;y:m,m,m,b;yo:175px,90px,60px,50px;" data-text="s:16;l:18;ls:0px,0,0,0;fw:700;a:inherit;" data-rsp_o="off" data-rsp_bd="off" data-padding="t:16;r:30;b:16;l:30;" data-frame_0="tp:600;" data-frame_1="tp:600;st:900;sp:700;sR:900;" data-frame_999="o:0;tp:600;st:w;sp:700;sR:3400;" data-frame_hover="c:#5d564f;bgc:#fff;boc:#000;bor:0px,0px,0px,0px;bos:solid;oX:50;oY:50;" style="z-index:12;background-color:#b2b74a;font-family:BenchNine;text-transform:uppercase;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                                                                                        Get in Touch
                                                                                        </rs-layer>

                                                                                    </rs-slide>
                                                                                </rs-slides>
                                                                            </rs-module>
                                                                            <script type="text/javascript">
                                                                                setREVStartSize({
                                                                                    c: 'rev_slider_1_1',
                                                                                    rl: [1240, 1024, 768, 480],
                                                                                    el: [813, 600, 500, 450],
                                                                                    gw: [1240, 1024, 778, 480],
                                                                                    gh: [813, 600, 500, 450],
                                                                                    type: 'standard',
                                                                                    justify: '',
                                                                                    layout: 'fullwidth',
                                                                                    mh: "0"
                                                                                });
                                                                                var revapi1,
                                                                                    tpj;

                                                                                function revinit_revslider11() {
                                                                                    jQuery(function() {
                                                                                        tpj = jQuery;
                                                                                        revapi1 = tpj("#rev_slider_1_1");
                                                                                        if (revapi1 == undefined || revapi1.revolution == undefined) {
                                                                                            revslider_showDoubleJqueryError("rev_slider_1_1");
                                                                                        } else {
                                                                                            revapi1.revolution({
                                                                                                sliderLayout: "fullwidth",
                                                                                                duration: 5000,
                                                                                                visibilityLevels: "1240,1024,768,480",
                                                                                                gridwidth: "1240,1024,778,480",
                                                                                                gridheight: "813,600,500,450",
                                                                                                lazyType: "smart",
                                                                                                spinner: "spinner3",
                                                                                                perspectiveType: "local",
                                                                                                editorheight: "813,600,500,450",
                                                                                                responsiveLevels: "1240,1024,768,480",
                                                                                                progressBar: {
                                                                                                    disableProgressBar: true
                                                                                                },
                                                                                                navigation: {
                                                                                                    mouseScrollNavigation: false,
                                                                                                    onHoverStop: false,
                                                                                                    touch: {
                                                                                                        touchenabled: true,
                                                                                                        touchOnDesktop: true,
                                                                                                        swipe_min_touches: 50
                                                                                                    },
                                                                                                    thumbnails: {
                                                                                                        enable: true,
                                                                                                        tmp: "<span class=\"tp-thumb-image\"></span><span class=\"tp-thumb-title\">{{$title}}</span>",
                                                                                                        style: "hesperiden",
                                                                                                        hide_onmobile: true,
                                                                                                        hide_under: 790,
                                                                                                        v_offset: -42,
                                                                                                        space: 42,
                                                                                                        width: 280,
                                                                                                        height: 150,
                                                                                                        min_width: 50,
                                                                                                        wrapper_padding: 0,
                                                                                                        wrapper_color: "rgba(155,155,155,0)",
                                                                                                        visibleAmount: 3,
                                                                                                        span: true,
                                                                                                        container: "layergrid"
                                                                                                    }
                                                                                                },
                                                                                                parallax: {
                                                                                                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
                                                                                                    type: "mouse",
                                                                                                    origo: "slidercenter",
                                                                                                    speed: 2000
                                                                                                },
                                                                                                fallbacks: {
                                                                                                    allowHTML5AutoPlayOnAndroid: true
                                                                                                },
                                                                                            });
                                                                                        }

                                                                                    });
                                                                                } // End of RevInitScript
                                                                                var once_revslider11 = false;
                                                                                if (document.readyState === "loading") {
                                                                                    document.addEventListener('readystatechange', function() {
                                                                                        if ((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider11) {
                                                                                            once_revslider11 = true;
                                                                                            revinit_revslider11();
                                                                                        }
                                                                                    });
                                                                                } else {
                                                                                    once_revslider11 = true;
                                                                                    revinit_revslider11();
                                                                                }
                                                                            </script>
                                                                            <script>
                                                                                var htmlDivCss = '	#rev_slider_1_1_wrapper rs-loader.spinner3 div { background-color: #FFFFFF !important; } ';
                                                                                var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                                                                                if (htmlDiv) {
                                                                                    htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                                                                } else {
                                                                                    var htmlDiv = document.createElement('div');
                                                                                    htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                                                                    document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                                                                                }
                                                                            </script>
                                                                            <script>
                                                                                var htmlDivCss = unescape("%23rev_slider_1_1_wrapper%20.hesperiden%20.tp-thumb%20%7B%0A%20%20opacity%3A1%3B%0A%20%20-webkit-perspective%3A%20600px%3B%0A%20%20perspective%3A%20600px%3B%0A%7D%0A%23rev_slider_1_1_wrapper%20.hesperiden%20.tp-thumb%20.tp-thumb-title%20%7B%0A%20%20%20%20font-size%3A12px%3B%0A%20%20%20%20position%3Aabsolute%3B%0A%20%20%20%20margin-top%3A-10px%3B%0A%20%20%20%20color%3A%23ffffff%3B%0A%20%20%20%20display%3Ablock%3B%0A%20%20%20%20z-index%3A1000%3B%0A%20%20%20%20background-color%3Argba%280%2C0%2C0%2C0.85%29%3B%0A%20%20%20%20padding%3A5px%2010px%3B%20%0A%20%20%20%20bottom%3A0px%3B%0A%20%20%20%20left%3A0px%3B%0A%20%20%20%20width%3A100%25%3B%0A%20%20box-sizing%3Aborder-box%3B%0A%20%20%20%20text-align%3Acenter%3B%0A%20%20%20%20overflow%3Ahidden%3B%0A%20%20%20%20white-space%3Anowrap%3B%0A%20%20%20%20transition%3Aall%200.3s%3B%0A%20%20%20%20-webkit-transition%3Aall%200.3s%3B%0A%20%20%20%20transform%3Arotatex%2890deg%29%20translatez%280.001px%29%3B%0A%20%20%20%20transform-origin%3A50%25%20100%25%3B%0A%20%20%20%20-webkit-transform%3Arotatex%2890deg%29%20translatez%280.001px%29%3B%0A%20%20%20%20-webkit-transform-origin%3A50%25%20100%25%3B%0A%20%20%20%20opacity%3A0%3B%0A%20%7D%0A%23rev_slider_1_1_wrapper%20.hesperiden%20.tp-thumb%3Ahover%20.tp-thumb-title%20%7B%0A%20%20%09%20transform%3Arotatex%280deg%29%3B%0A%20%20%20%20-webkit-transform%3Arotatex%280deg%29%3B%0A%20%20%20%20opacity%3A1%3B%0A%7D%0A");
                                                                                var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                                                                                if (htmlDiv) {
                                                                                    htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                                                                } else {
                                                                                    var htmlDiv = document.createElement('div');
                                                                                    htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                                                                    document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                                                                                }
                                                                            </script>
                                                                            <script>
                                                                                var htmlDivCss = unescape("%0A%0A%0A");
                                                                                var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                                                                                if (htmlDiv) {
                                                                                    htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                                                                } else {
                                                                                    var htmlDiv = document.createElement('div');
                                                                                    htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                                                                    document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                                                                                }
                                                                            </script>
                                                                        </rs-module-wrap>
                                                                        <!-- END REVOLUTION SLIDER -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-5279ba21 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5279ba21" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-3b106dee" data-id="3b106dee" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-2e8519b elementor-widget elementor-widget-gt3-core-emptyspace" data-id="2e8519b" data-element_type="widget" data-widget_type="gt3-core-emptyspace.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="gt3_emptyspace_block" data-block-title="EmptySpace Widget">
                                                                        <div class="gt3_es gt3_es_default"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-177856ce margin_auto elementor-widget elementor-widget-gt3-core-piechart" data-id="177856ce" data-element_type="widget" data-widget_type="gt3-core-piechart.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="gt3_pie_chart_wrapper ">
                                                                        <div class="gt3_elementor_pie_chart" data-value="1" data-label-value="87" data-units="" data-size="146" data-thickness="13" data-line-cap="round" data-fill="{
                                &quot;color&quot;: &quot;#f1f3cb&quot;
                            }" data-empty-fill="#b2b74a">
                                                                            <strong class="element_typography">87</strong>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-3c49278 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="3c49278" data-element_type="widget" data-widget_type="image-box.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image-box-wrapper">
                                                                        <div class="elementor-image-box-content">
                                                                            <h3 class="elementor-image-box-title">Awards Won</h3>
                                                                            <p class="elementor-image-box-description">Cu ubique timeam tibique mel, autem tibique cu nec.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-a7413ed elementor-widget elementor-widget-gt3-core-emptyspace" data-id="a7413ed" data-element_type="widget" data-widget_type="gt3-core-emptyspace.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="gt3_emptyspace_block  gt3_es_sm_desktop-on  gt3_es_tablet-on  gt3_es_mobile-on" data-block-title="EmptySpace Widget">
                                                                        <div class="gt3_es gt3_es_default"></div>
                                                                        <div class="gt3_es gt3_es_sm_desktop"></div>
                                                                        <div class="gt3_es gt3_es_tablet"></div>
                                                                        <div class="gt3_es gt3_es_mobile"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-997383b" data-id="997383b" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-505d66e elementor-widget elementor-widget-gt3-core-emptyspace" data-id="505d66e" data-element_type="widget" data-widget_type="gt3-core-emptyspace.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="gt3_emptyspace_block  gt3_es_sm_desktop-on  gt3_es_tablet-on  gt3_es_mobile-on" data-block-title="EmptySpace Widget">
                                                                        <div class="gt3_es gt3_es_default"></div>
                                                                        <div class="gt3_es gt3_es_sm_desktop"></div>
                                                                        <div class="gt3_es gt3_es_tablet"></div>
                                                                        <div class="gt3_es gt3_es_mobile"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-75ba5f6 margin_auto elementor-widget elementor-widget-gt3-core-piechart" data-id="75ba5f6" data-element_type="widget" data-widget_type="gt3-core-piechart.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="gt3_pie_chart_wrapper ">
                                                                        <div class="gt3_elementor_pie_chart" data-value="1" data-label-value="108" data-units="" data-size="146" data-thickness="13" data-line-cap="round" data-fill="{
                                &quot;color&quot;: &quot;#f1f3cb&quot;
                            }" data-empty-fill="#b2b74a">
                                                                            <strong class="element_typography">108</strong>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-a4a6aee elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="a4a6aee" data-element_type="widget" data-widget_type="image-box.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image-box-wrapper">
                                                                        <div class="elementor-image-box-content">
                                                                            <h3 class="elementor-image-box-title">Regular Customers</h3>
                                                                            <p class="elementor-image-box-description">Aperiri discere hendrerit in duo, amet reprehendunt ut sit.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-c976b81 elementor-widget elementor-widget-gt3-core-emptyspace" data-id="c976b81" data-element_type="widget" data-widget_type="gt3-core-emptyspace.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="gt3_emptyspace_block  gt3_es_sm_desktop-on  gt3_es_tablet-on  gt3_es_mobile-on" data-block-title="EmptySpace Widget">
                                                                        <div class="gt3_es gt3_es_default"></div>
                                                                        <div class="gt3_es gt3_es_sm_desktop"></div>
                                                                        <div class="gt3_es gt3_es_tablet"></div>
                                                                        <div class="gt3_es gt3_es_mobile"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-fb6163e" data-id="fb6163e" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-1b4e8e3 elementor-widget elementor-widget-gt3-core-emptyspace" data-id="1b4e8e3" data-element_type="widget" data-widget_type="gt3-core-emptyspace.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="gt3_emptyspace_block  gt3_es_sm_desktop-on  gt3_es_tablet-on  gt3_es_mobile-on" data-block-title="EmptySpace Widget">
                                                                        <div class="gt3_es gt3_es_default"></div>
                                                                        <div class="gt3_es gt3_es_sm_desktop"></div>
                                                                        <div class="gt3_es gt3_es_tablet"></div>
                                                                        <div class="gt3_es gt3_es_mobile"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-754f30c margin_auto elementor-widget elementor-widget-gt3-core-piechart" data-id="754f30c" data-element_type="widget" data-widget_type="gt3-core-piechart.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="gt3_pie_chart_wrapper ">
                                                                        <div class="gt3_elementor_pie_chart" data-value="1" data-label-value="86" data-units="" data-size="146" data-thickness="13" data-line-cap="round" data-fill="{
                                &quot;color&quot;: &quot;#f1f3cb&quot;
                            }" data-empty-fill="#b2b74a">
                                                                            <strong class="element_typography">86</strong>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-a994804 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="a994804" data-element_type="widget" data-widget_type="image-box.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image-box-wrapper">
                                                                        <div class="elementor-image-box-content">
                                                                            <h3 class="elementor-image-box-title">Points of Sale of Goods</h3>
                                                                            <p class="elementor-image-box-description">Enim meliore intellegebat ut duo, fastidii gloriatur usu ei.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-fbfd0dd elementor-widget elementor-widget-gt3-core-emptyspace" data-id="fbfd0dd" data-element_type="widget" data-widget_type="gt3-core-emptyspace.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="gt3_emptyspace_block  gt3_es_sm_desktop-on  gt3_es_tablet-on  gt3_es_mobile-on" data-block-title="EmptySpace Widget">
                                                                        <div class="gt3_es gt3_es_default"></div>
                                                                        <div class="gt3_es gt3_es_sm_desktop"></div>
                                                                        <div class="gt3_es gt3_es_tablet"></div>
                                                                        <div class="gt3_es gt3_es_mobile"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-91290ac" data-id="91290ac" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-bbe5d22 elementor-widget elementor-widget-gt3-core-emptyspace" data-id="bbe5d22" data-element_type="widget" data-widget_type="gt3-core-emptyspace.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="gt3_emptyspace_block  gt3_es_sm_desktop-on  gt3_es_tablet-on  gt3_es_mobile-on" data-block-title="EmptySpace Widget">
                                                                        <div class="gt3_es gt3_es_default"></div>
                                                                        <div class="gt3_es gt3_es_sm_desktop"></div>
                                                                        <div class="gt3_es gt3_es_tablet"></div>
                                                                        <div class="gt3_es gt3_es_mobile"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-7848cbf margin_auto elementor-widget elementor-widget-gt3-core-piechart" data-id="7848cbf" data-element_type="widget" data-widget_type="gt3-core-piechart.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="gt3_pie_chart_wrapper ">
                                                                        <div class="gt3_elementor_pie_chart" data-value="1" data-label-value="54" data-units="" data-size="146" data-thickness="13" data-line-cap="round" data-fill="{
                                &quot;color&quot;: &quot;#f1f3cb&quot;
                            }" data-empty-fill="#b2b74a">
                                                                            <strong class="element_typography">54</strong>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-3387e15 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="3387e15" data-element_type="widget" data-widget_type="image-box.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image-box-wrapper">
                                                                        <div class="elementor-image-box-content">
                                                                            <h3 class="elementor-image-box-title">Professional Engineering</h3>
                                                                            <p class="elementor-image-box-description">Legere prodesset mea ei, no illud dicam conclusionemque est.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-8277181 elementor-widget elementor-widget-gt3-core-emptyspace" data-id="8277181" data-element_type="widget" data-widget_type="gt3-core-emptyspace.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="gt3_emptyspace_block  gt3_es_sm_desktop-on  gt3_es_tablet-on  gt3_es_mobile-on" data-block-title="EmptySpace Widget">
                                                                        <div class="gt3_es gt3_es_default"></div>
                                                                        <div class="gt3_es gt3_es_sm_desktop"></div>
                                                                        <div class="gt3_es gt3_es_tablet"></div>
                                                                        <div class="gt3_es gt3_es_mobile"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-71285b2 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="71285b2" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-39d92d9" data-id="39d92d9" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-716026e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="716026e" data-element_type="section">
                                                                <div class="elementor-container elementor-column-gap-default">
                                                                    <div class="elementor-row">
                                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-dd75389" data-id="dd75389" data-element_type="column">
                                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                                <div class="elementor-widget-wrap">
                                                                                    <div class="elementor-element elementor-element-89983fc elementor-widget elementor-widget-gt3-core-emptyspace" data-id="89983fc" data-element_type="widget" data-widget_type="gt3-core-emptyspace.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="gt3_emptyspace_block  gt3_es_sm_desktop-on  gt3_es_tablet-on  gt3_es_mobile-on" data-block-title="EmptySpace Widget">
                                                                                                <div class="gt3_es gt3_es_default"></div>
                                                                                                <div class="gt3_es gt3_es_sm_desktop"></div>
                                                                                                <div class="gt3_es gt3_es_tablet"></div>
                                                                                                <div class="gt3_es gt3_es_mobile"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_line_height_tablet elementor-element elementor-element-d1b096c elementor-widget elementor-widget-text-editor" data-id="d1b096c" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                                                <h2>Latest News</h2>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-d07e600 elementor-widget elementor-widget-gt3-core-emptyspace" data-id="d07e600" data-element_type="widget" data-widget_type="gt3-core-emptyspace.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="gt3_emptyspace_block  gt3_es_sm_desktop-on  gt3_es_tablet-on  gt3_es_mobile-on" data-block-title="EmptySpace Widget">
                                                                                                <div class="gt3_es gt3_es_default"></div>
                                                                                                <div class="gt3_es gt3_es_sm_desktop"></div>
                                                                                                <div class="gt3_es gt3_es_tablet"></div>
                                                                                                <div class="gt3_es gt3_es_mobile"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2707251" data-id="2707251" data-element_type="column">
                                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                                <div class="elementor-widget-wrap">
                                                                                    <div class="elementor-element elementor-element-228e72f elementor-widget elementor-widget-gt3-core-emptyspace" data-id="228e72f" data-element_type="widget" data-widget_type="gt3-core-emptyspace.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="gt3_emptyspace_block  gt3_es_sm_desktop-on  gt3_es_tablet-on  gt3_es_mobile-on" data-block-title="EmptySpace Widget">
                                                                                                <div class="gt3_es gt3_es_default"></div>
                                                                                                <div class="gt3_es gt3_es_sm_desktop"></div>
                                                                                                <div class="gt3_es gt3_es_tablet"></div>
                                                                                                <div class="gt3_es gt3_es_mobile"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element elementor-element-59fab8f elementor-widget elementor-widget-text-editor" data-id="59fab8f" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                                                <p>Nec justo equidem insolens te, cu iuvaret iracundia duo. Cu pro vitae labitur labores, per no iudico omittantur. Ea error detracto vis, viris accusamus dignissim eos ex.</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-282087a elementor-widget elementor-widget-gt3-core-emptyspace" data-id="282087a" data-element_type="widget" data-widget_type="gt3-core-emptyspace.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="gt3_emptyspace_block" data-block-title="EmptySpace Widget">
                                                                                                <div class="gt3_es gt3_es_default"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                            <div class="elementor-element elementor-element-80decf8 post_has_media_content-yes elementor-widget elementor-widget-gt3-core-blog" data-id="80decf8" data-element_type="widget" data-widget_type="gt3-core-blog.default">
                                                                <div class="elementor-widget-container">
                                                                    <script type="application/json" id="settings--80decf8">
                                                                        {
                                                                            "packery": false
                                                                        }
                                                                    </script>
                                                                    <div class="gt3_module_blog items3  items_type1">
                                                                        <div class="spacing_beetween_items_30 isotope_blog_items isotope">

                                                                            @foreach($listpost as $post)
                                                                            <div class="blog_post_preview isotope_item isotope-item loading element format-standard-image organic-farming packery_blog_item_1  ">
                                                                                <div class="item_wrapper">
                                                                                    <div class="blog_content">
                                                                                        <div class="blog_post_media">
                                                                                            <div class="blog_post_media-wrapper_img">
                                                                                                <img src="{{ asset('upload/' . $post->thumbnail_post) }}" alt="{{ $post->name_post }}" />
                                                                                            </div>
                                                                                        </div>
                                                                                        <h2 class="blogpost_title">
                                                                                            <a href="{{route('post', $post->url_post)}}">{{ $post->name_post }}</a></h2>
                                                                                        <div class="listing_meta_wrap"></div>
                                                                                        <div class="blog_item_description">
                                                                                            It is based on grain farming. About half of the world&#8217;s land is occupied by cereals. Grain along with potatoes is...
                                                                                        </div>
                                                                                        <div class="clear post_clear"></div>
                                                                                        <div class="gt3_post_footer">
                                                                                            <div class="gt3_module_button_list">
                                                                                                <a href="{{route('post', $post->url_post)}}">Read More</a>
                                                                                            </div>
                                                                                            <div class="clear"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            @endforeach

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-6010534 elementor-widget elementor-widget-gt3-core-emptyspace" data-id="6010534" data-element_type="widget" data-widget_type="gt3-core-emptyspace.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="gt3_emptyspace_block" data-block-title="EmptySpace Widget">
                                                                        <div class="gt3_es gt3_es_default"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-38fc6273 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="38fc6273" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-49a2b879" data-id="49a2b879" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-30cd6939 elementor-widget elementor-widget-gt3-core-emptyspace" data-id="30cd6939" data-element_type="widget" data-widget_type="gt3-core-emptyspace.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="gt3_emptyspace_block  gt3_es_sm_desktop-on  gt3_es_tablet-on  gt3_es_mobile-on" data-block-title="EmptySpace Widget">
                                                                        <div class="gt3_es gt3_es_default"></div>
                                                                        <div class="gt3_es gt3_es_sm_desktop"></div>
                                                                        <div class="gt3_es gt3_es_tablet"></div>
                                                                        <div class="gt3_es gt3_es_mobile"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element-custom_font_size elementor-element-custom_font_size_tablet elementor-element-custom_line_height elementor-element-custom_color elementor-element elementor-element-24cf7ed3 elementor-widget elementor-widget-text-editor" data-id="24cf7ed3" data-element_type="widget" data-widget_type="text-editor.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-text-editor elementor-clearfix">
                                                                        <h2>{{$intro1->name_introduce}}</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-2bf5da0" data-id="2bf5da0" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-707a4c85 elementor-widget elementor-widget-gt3-core-emptyspace" data-id="707a4c85" data-element_type="widget" data-widget_type="gt3-core-emptyspace.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="gt3_emptyspace_block  gt3_es_sm_desktop-on  gt3_es_tablet-on  gt3_es_mobile-on" data-block-title="EmptySpace Widget">
                                                                        <div class="gt3_es gt3_es_default"></div>
                                                                        <div class="gt3_es gt3_es_sm_desktop"></div>
                                                                        <div class="gt3_es gt3_es_tablet"></div>
                                                                        <div class="gt3_es gt3_es_mobile"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_weight elementor-element-custom_color elementor-element elementor-element-71fe355 elementor-widget elementor-widget-text-editor" data-id="71fe355" data-element_type="widget" data-widget_type="text-editor.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-text-editor elementor-clearfix">
                                                                        {!! $intro1->content1_introduce !!}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-4ecb3ef8 elementor-widget elementor-widget-gt3-core-emptyspace" data-id="4ecb3ef8" data-element_type="widget" data-widget_type="gt3-core-emptyspace.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="gt3_emptyspace_block  gt3_es_sm_desktop-on  gt3_es_tablet-on  gt3_es_mobile-on" data-block-title="EmptySpace Widget">
                                                                        <div class="gt3_es gt3_es_default"></div>
                                                                        <div class="gt3_es gt3_es_sm_desktop"></div>
                                                                        <div class="gt3_es gt3_es_tablet"></div>
                                                                        <div class="gt3_es gt3_es_mobile"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-28475285" data-id="28475285" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-7b5ef439 elementor-widget elementor-widget-gt3-core-emptyspace" data-id="7b5ef439" data-element_type="widget" data-widget_type="gt3-core-emptyspace.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="gt3_emptyspace_block  gt3_es_sm_desktop-on  gt3_es_tablet-on  gt3_es_mobile-on" data-block-title="EmptySpace Widget">
                                                                        <div class="gt3_es gt3_es_default"></div>
                                                                        <div class="gt3_es gt3_es_sm_desktop"></div>
                                                                        <div class="gt3_es gt3_es_tablet"></div>
                                                                        <div class="gt3_es gt3_es_mobile"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_weight elementor-element-custom_color elementor-element elementor-element-433b3c8c elementor-widget elementor-widget-text-editor" data-id="433b3c8c" data-element_type="widget" data-widget_type="text-editor.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-text-editor elementor-clearfix">
                                                                        {!! $intro1->content2_introduce !!}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="gt3-core-button--alignment_left elementor-element elementor-element-0dcbbc0 elementor-widget elementor-widget-gt3-core-button" data-id="0dcbbc0" data-element_type="widget" data-widget_type="gt3-core-button.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="gt3_module_button_elementor size_custom alignment_left button_icon_default hover_none ">
                                                                        <a class="button_size_elementor_custom alignment_left border_icon_default hover_none btn_icon_position_right" href="#">
                                                                            <span class="gt3_module_button__container">
                                                                                <span class="gt3_module_button__cover front">
                                                                                    <span class="elementor_gt3_btn_text">Read More</span>
                                                                                    <span class="elementor_btn_icon_container">
                                                                                        <span class="elementor_gt3_btn_icon gt3_icon_default"></span>
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <script type="application/json" id="settings--0dcbbc0">
                                                                        []
                                                                    </script>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-0b10db3 elementor-widget elementor-widget-gt3-core-emptyspace" data-id="0b10db3" data-element_type="widget" data-widget_type="gt3-core-emptyspace.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="gt3_emptyspace_block  gt3_es_sm_desktop-on  gt3_es_tablet-on  gt3_es_mobile-on" data-block-title="EmptySpace Widget">
                                                                        <div class="gt3_es gt3_es_default"></div>
                                                                        <div class="gt3_es gt3_es_sm_desktop"></div>
                                                                        <div class="gt3_es gt3_es_tablet"></div>
                                                                        <div class="gt3_es gt3_es_mobile"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-6be2bef0 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6be2bef0" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-668a41df" data-id="668a41df" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-216b9887 elementor-widget elementor-widget-image" data-id="216b9887" data-element_type="widget" data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image">
                                                                        <img width="497" height="764" src="wp-content/uploads/sites/55/2019/01/home_img_01.png" class="attachment-full size-full" alt="" loading="lazy" srcset="https://livewp.site/wp/md/agrosector/wp-content/uploads/sites/55/2019/01/home_img_01.png 497w, https://livewp.site/wp/md/agrosector/wp-content/uploads/sites/55/2019/01/home_img_01-195x300.png 195w" sizes="(max-width: 497px) 100vw, 497px" title="home_img_01" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-1bd78c12 elementor-widget elementor-widget-gt3-core-emptyspace" data-id="1bd78c12" data-element_type="widget" data-widget_type="gt3-core-emptyspace.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="gt3_emptyspace_block  gt3_es_sm_desktop-on  gt3_es_tablet-on  gt3_es_mobile-on" data-block-title="EmptySpace Widget">
                                                                        <div class="gt3_es gt3_es_default"></div>
                                                                        <div class="gt3_es gt3_es_sm_desktop"></div>
                                                                        <div class="gt3_es gt3_es_tablet"></div>
                                                                        <div class="gt3_es gt3_es_mobile"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-759b73c3" data-id="759b73c3" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-3683f19f elementor-widget elementor-widget-gt3-core-emptyspace" data-id="3683f19f" data-element_type="widget" data-widget_type="gt3-core-emptyspace.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="gt3_emptyspace_block  gt3_es_sm_desktop-on  gt3_es_tablet-on  gt3_es_mobile-on" data-block-title="EmptySpace Widget">
                                                                        <div class="gt3_es gt3_es_default"></div>
                                                                        <div class="gt3_es gt3_es_sm_desktop"></div>
                                                                        <div class="gt3_es gt3_es_tablet"></div>
                                                                        <div class="gt3_es gt3_es_mobile"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_line_height_tablet elementor-element elementor-element-3923129c elementor-widget elementor-widget-text-editor" data-id="3923129c" data-element_type="widget" data-widget_type="text-editor.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-text-editor elementor-clearfix">
                                                                        <h2>Our Main Services</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_weight elementor-element-custom_color elementor-element elementor-element-2a1fae5f elementor-widget elementor-widget-text-editor" data-id="2a1fae5f" data-element_type="widget" data-widget_type="text-editor.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-text-editor elementor-clearfix">
                                                                        <p>Quo cibo eius cu, mel at magna quaeque apeirian, augue homero consectetuer in nam. Eu quo laoreet propriae, malis exerci habemus te has, vocent persius eum ea.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-570a9848 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="570a9848" data-element_type="section">
                                                                <div class="elementor-container elementor-column-gap-default">
                                                                    <div class="elementor-row">
                                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-bf991f3" data-id="bf991f3" data-element_type="column">
                                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                                <div class="elementor-widget-wrap">
                                                                                    <div class="elementor-element elementor-element-1f3a8d39 elementor-position-left elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="1f3a8d39" data-element_type="widget" data-widget_type="image-box.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-image-box-wrapper">
                                                                                                <figure class="elementor-image-box-img">
                                                                                                    <a href="#">
                                                                                                        <img width="84" height="94" src="wp-content/uploads/sites/55/2019/01/icon_01.png" class="attachment-full size-full" alt="" loading="lazy" title="icon_01" />
                                                                                                    </a>
                                                                                                </figure>
                                                                                                <div class="elementor-image-box-content">
                                                                                                    <h4 class="elementor-image-box-title"><a href="#">Excellent Service</a></h4>
                                                                                                    <p class="elementor-image-box-description">Mei in delenit denique disen tiunt, ne quodsi repudiare duo terg frame.</p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-7fc6d594 elementor-position-left elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="7fc6d594" data-element_type="widget" data-widget_type="image-box.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-image-box-wrapper">
                                                                                                <figure class="elementor-image-box-img">
                                                                                                    <a href="#">
                                                                                                        <img width="84" height="84" src="wp-content/uploads/sites/55/2019/01/icon_02.png" class="attachment-full size-full" alt="" loading="lazy" title="icon_02" />
                                                                                                    </a>
                                                                                                </figure>
                                                                                                <div class="elementor-image-box-content">
                                                                                                    <h4 class="elementor-image-box-title"><a href="#">Quality And Reliability</a></h4>
                                                                                                    <p class="elementor-image-box-description">An qualisque constituam cum. Agam unum disputando ius et, mel id luptua.</p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4a866974" data-id="4a866974" data-element_type="column">
                                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                                <div class="elementor-widget-wrap">
                                                                                    <div class="elementor-element elementor-element-2287f326 elementor-position-left elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="2287f326" data-element_type="widget" data-widget_type="image-box.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-image-box-wrapper">
                                                                                                <figure class="elementor-image-box-img">
                                                                                                    <a href="#">
                                                                                                        <img width="84" height="84" src="wp-content/uploads/sites/55/2019/01/icon_03.png" class="attachment-full size-full" alt="" loading="lazy" title="icon_03" />
                                                                                                    </a>
                                                                                                </figure>
                                                                                                <div class="elementor-image-box-content">
                                                                                                    <h4 class="elementor-image-box-title"><a href="#">Clean Working</a></h4>
                                                                                                    <p class="elementor-image-box-description">Ex voluptaria intellegebat usu, mea ut discere perciitur aperiri cotidiequ.</p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-43c80639 elementor-position-left elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="43c80639" data-element_type="widget" data-widget_type="image-box.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-image-box-wrapper">
                                                                                                <figure class="elementor-image-box-img">
                                                                                                    <a href="#">
                                                                                                        <img width="84" height="84" src="wp-content/uploads/sites/55/2019/01/icon_04.png" class="attachment-full size-full" alt="" loading="lazy" title="icon_04" />
                                                                                                    </a>
                                                                                                </figure>
                                                                                                <div class="elementor-image-box-content">
                                                                                                    <h4 class="elementor-image-box-title"><a href="#">Expert Farmer</a></h4>
                                                                                                    <p class="elementor-image-box-description">Id quidam detraxit erroribus eam, qui aliquip patrioque accommodare ex, ex vix.</p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-a649beb elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a649beb" data-element_type="section">
                                                                <div class="elementor-container elementor-column-gap-default">
                                                                    <div class="elementor-row">
                                                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-c4d63dd" data-id="c4d63dd" data-element_type="column">
                                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                                <div class="elementor-widget-wrap">
                                                                                    <div class="gt3-core-button--alignment_left elementor-element elementor-element-69472fbd elementor-widget elementor-widget-gt3-core-button" data-id="69472fbd" data-element_type="widget" data-widget_type="gt3-core-button.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="gt3_module_button_elementor size_custom alignment_left button_icon_none hover_none rounded">
                                                                                                <a class="button_size_elementor_custom alignment_left border_icon_none hover_none btn_icon_position_left" href="#">
                                                                                                    <span class="gt3_module_button__container">
                                                                                                        <span class="gt3_module_button__cover front">
                                                                                                            <span class="elementor_gt3_btn_text">Get in Touch</span>
                                                                                                        </span>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </div>
                                                                                            <script type="application/json" id="settings--69472fbd">
                                                                                                []
                                                                                            </script>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                            <div class="elementor-element elementor-element-30d59b3d elementor-widget elementor-widget-gt3-core-emptyspace" data-id="30d59b3d" data-element_type="widget" data-widget_type="gt3-core-emptyspace.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="gt3_emptyspace_block  gt3_es_sm_desktop-on  gt3_es_tablet-on  gt3_es_mobile-on" data-block-title="EmptySpace Widget">
                                                                        <div class="gt3_es gt3_es_default"></div>
                                                                        <div class="gt3_es gt3_es_sm_desktop"></div>
                                                                        <div class="gt3_es gt3_es_tablet"></div>
                                                                        <div class="gt3_es gt3_es_mobile"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-4c6d753 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4c6d753" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8205f33" data-id="8205f33" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-a729fc9 elementor-widget elementor-widget-gt3-core-emptyspace" data-id="a729fc9" data-element_type="widget" data-widget_type="gt3-core-emptyspace.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="gt3_emptyspace_block" data-block-title="EmptySpace Widget">
                                                                        <div class="gt3_es gt3_es_default"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_color elementor-element elementor-element-e6e5f39 elementor-widget elementor-widget-text-editor" data-id="e6e5f39" data-element_type="widget" data-widget_type="text-editor.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-text-editor elementor-clearfix">
                                                                        <h2 style="text-align: center">What People Say</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-91fa879 elementor-widget elementor-widget-gt3-core-testimonials" data-id="91fa879" data-element_type="widget" data-widget_type="gt3-core-testimonials.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="module_testimonial active-carousel items_per_line-1 style1 text_align-center author_align-center image_align-center nav-arrows" data-settings="{&quot;fade&quot;:false,&quot;autoplay&quot;:false,&quot;items_per_line&quot;:1,&quot;autoplaySpeed&quot;:4000,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;l10n&quot;:{&quot;prev&quot;:&quot;Prev&quot;,&quot;next&quot;:&quot;Next&quot;}}">
                                                                        <span class='testimonials-photo-wrapper'></span>
                                                                        <div class="module_content testimonials_list">
                                                                            <div class="testimonials_rotator">
                                                                                <div class="testimonials_item" style="">
                                                                                    <div class="testimonial_item_wrapper">
                                                                                        <div class="testimonials_content">
                                                                                            <div class="testimonials_photo"><img class="rounded" src="wp-content/uploads/sites/55/2019/01/Dan-Balan-272x272.jpg" alt="" /></div>
                                                                                            <div class="testimonials-text">
                                                                                                <p>Quo cibo eius cu, mel at magna quaeque apeirian, augue homero consectetuer in nam. Eu quo laoreet propriae, malis exerci habemus te has, vocent persius eum ea.</p>
                                                                                            </div>
                                                                                            <div class="testimonials_title">Dan Balan</div>
                                                                                            <div class="testimonials-sub_name">Customer</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="testimonials_item" style="display: none;">
                                                                                    <div class="testimonial_item_wrapper">
                                                                                        <div class="testimonials_content">
                                                                                            <div class="testimonials_photo"><img class="rounded" src="wp-content/uploads/sites/55/2019/01/Sarah-Miller-272x272.jpg" alt="" /></div>
                                                                                            <div class="testimonials-text">
                                                                                                <p>His accommodare delicatissimi cu, novum simul nominavi ut mea.Et cum deseruisse definitionem, cu mel cetero dolores. Usu habeo maluisset constituto id. Eam no summo euismod suavitate.</p>
                                                                                            </div>
                                                                                            <div class="testimonials_title">Sarah-Miller</div>
                                                                                            <div class="testimonials-sub_name">Customer</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="clear"></div>
                                                                        </div>
                                                                    </div>

                                                                    <script type="application/json" id="settings--91fa879">
                                                                        {
                                                                            "fade": false,
                                                                            "autoplay": false,
                                                                            "items_per_line": 1,
                                                                            "autoplaySpeed": 4000,
                                                                            "dots": false,
                                                                            "arrows": true,
                                                                            "l10n": {
                                                                                "prev": "Prev",
                                                                                "next": "Next"
                                                                            }
                                                                        }
                                                                    </script>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-b08396d gt3_img_brands elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b08396d" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-891059f" data-id="891059f" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-b8d6029 elementor-widget elementor-widget-gt3-core-emptyspace" data-id="b8d6029" data-element_type="widget" data-widget_type="gt3-core-emptyspace.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="gt3_emptyspace_block  gt3_es_sm_desktop-on  gt3_es_tablet-on  gt3_es_mobile-on" data-block-title="EmptySpace Widget">
                                                                        <div class="gt3_es gt3_es_default"></div>
                                                                        <div class="gt3_es gt3_es_sm_desktop"></div>
                                                                        <div class="gt3_es gt3_es_tablet"></div>
                                                                        <div class="gt3_es gt3_es_mobile"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-fcd8458 elementor-widget elementor-widget-text-editor" data-id="fcd8458" data-element_type="widget" data-widget_type="text-editor.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-text-editor elementor-clearfix">
                                                                        <img loading="lazy" class="elementor-image size-full wp-image-309 aligncenter" src="wp-content/uploads/sites/55/2019/01/partner_01.png" alt="" width="152" height="51" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-38dae1b elementor-widget elementor-widget-gt3-core-emptyspace" data-id="38dae1b" data-element_type="widget" data-widget_type="gt3-core-emptyspace.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="gt3_emptyspace_block  gt3_es_sm_desktop-on  gt3_es_tablet-on  gt3_es_mobile-on" data-block-title="EmptySpace Widget">
                                                                        <div class="gt3_es gt3_es_default"></div>
                                                                        <div class="gt3_es gt3_es_sm_desktop"></div>
                                                                        <div class="gt3_es gt3_es_tablet"></div>
                                                                        <div class="gt3_es gt3_es_mobile"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-042c88f" data-id="042c88f" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-fad4b5c elementor-widget elementor-widget-gt3-core-emptyspace" data-id="fad4b5c" data-element_type="widget" data-widget_type="gt3-core-emptyspace.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="gt3_emptyspace_block  gt3_es_sm_desktop-on  gt3_es_tablet-on  gt3_es_mobile-on" data-block-title="EmptySpace Widget">
                                                                        <div class="gt3_es gt3_es_default"></div>
                                                                        <div class="gt3_es gt3_es_sm_desktop"></div>
                                                                        <div class="gt3_es gt3_es_tablet"></div>
                                                                        <div class="gt3_es gt3_es_mobile"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-bea8818 elementor-widget elementor-widget-text-editor" data-id="bea8818" data-element_type="widget" data-widget_type="text-editor.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-text-editor elementor-clearfix">
                                                                        <img loading="lazy" class="elementor-image size-full wp-image-310 aligncenter" src="wp-content/uploads/sites/55/2019/01/partner_02.png" alt="" width="161" height="53" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-533f87c elementor-widget elementor-widget-gt3-core-emptyspace" data-id="533f87c" data-element_type="widget" data-widget_type="gt3-core-emptyspace.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="gt3_emptyspace_block  gt3_es_sm_desktop-on  gt3_es_tablet-on  gt3_es_mobile-on" data-block-title="EmptySpace Widget">
                                                                        <div class="gt3_es gt3_es_default"></div>
                                                                        <div class="gt3_es gt3_es_sm_desktop"></div>
                                                                        <div class="gt3_es gt3_es_tablet"></div>
                                                                        <div class="gt3_es gt3_es_mobile"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-bcc1fa6" data-id="bcc1fa6" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-e00722f elementor-widget elementor-widget-gt3-core-emptyspace" data-id="e00722f" data-element_type="widget" data-widget_type="gt3-core-emptyspace.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="gt3_emptyspace_block  gt3_es_sm_desktop-on  gt3_es_tablet-on  gt3_es_mobile-on" data-block-title="EmptySpace Widget">
                                                                        <div class="gt3_es gt3_es_default"></div>
                                                                        <div class="gt3_es gt3_es_sm_desktop"></div>
                                                                        <div class="gt3_es gt3_es_tablet"></div>
                                                                        <div class="gt3_es gt3_es_mobile"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-9478084 elementor-widget elementor-widget-text-editor" data-id="9478084" data-element_type="widget" data-widget_type="text-editor.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-text-editor elementor-clearfix">
                                                                        <img loading="lazy" class="elementor-image size-full wp-image-151 aligncenter" src="wp-content/uploads/sites/55/2019/01/partner_03.png" alt="" width="148" height="48" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-3af8f23 elementor-widget elementor-widget-gt3-core-emptyspace" data-id="3af8f23" data-element_type="widget" data-widget_type="gt3-core-emptyspace.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="gt3_emptyspace_block  gt3_es_sm_desktop-on  gt3_es_tablet-on  gt3_es_mobile-on" data-block-title="EmptySpace Widget">
                                                                        <div class="gt3_es gt3_es_default"></div>
                                                                        <div class="gt3_es gt3_es_sm_desktop"></div>
                                                                        <div class="gt3_es gt3_es_tablet"></div>
                                                                        <div class="gt3_es gt3_es_mobile"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-60d389b" data-id="60d389b" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-5851e89 elementor-widget elementor-widget-gt3-core-emptyspace" data-id="5851e89" data-element_type="widget" data-widget_type="gt3-core-emptyspace.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="gt3_emptyspace_block  gt3_es_sm_desktop-on  gt3_es_tablet-on  gt3_es_mobile-on" data-block-title="EmptySpace Widget">
                                                                        <div class="gt3_es gt3_es_default"></div>
                                                                        <div class="gt3_es gt3_es_sm_desktop"></div>
                                                                        <div class="gt3_es gt3_es_tablet"></div>
                                                                        <div class="gt3_es gt3_es_mobile"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-f9023d3 elementor-widget elementor-widget-text-editor" data-id="f9023d3" data-element_type="widget" data-widget_type="text-editor.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-text-editor elementor-clearfix">
                                                                        <img loading="lazy" class="elementor-image size-full wp-image-149 aligncenter" src="wp-content/uploads/sites/55/2019/01/partner_04.png" alt="" width="114" height="47" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-064918b elementor-widget elementor-widget-gt3-core-emptyspace" data-id="064918b" data-element_type="widget" data-widget_type="gt3-core-emptyspace.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="gt3_emptyspace_block  gt3_es_sm_desktop-on  gt3_es_tablet-on  gt3_es_mobile-on" data-block-title="EmptySpace Widget">
                                                                        <div class="gt3_es gt3_es_default"></div>
                                                                        <div class="gt3_es gt3_es_sm_desktop"></div>
                                                                        <div class="gt3_es gt3_es_tablet"></div>
                                                                        <div class="gt3_es gt3_es_mobile"></div>
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
