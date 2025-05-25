<!-- ==================== Start Vision Slider ==================== -->
<section class="services">
    <div class="feat-top">
        <div class="notfull bg-gray wow"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="item-sm wow fadeInUp" data-wow-delay="1s">
                        <div class="box">
                            <h6 class="mb-20"><span class="custom-font numb">01</span> {{headline('about-us-vision')->title}}</h6>
                            <p class="custom-sub-title">{{headline('about-us-vision')->subTitle}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item-sm wow fadeInUp" data-wow-delay="1.1s">
                        <div class="box">
                            <h6 class="mb-20"><span class="custom-font numb">02</span> {{headline('about-us-mission')->title}}</h6>
                            <p class="custom-sub-title">{{headline('about-us-mission')->subTitle}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item-sm wow fadeInUp" data-wow-delay="1.2s">
                        <div class="box">
                            <h6 class="mb-20"><span class="custom-font numb">03</span> {{headline('about-us-value')->title}}</h6>
                            <p class="custom-sub-title">{{headline('about-us-value')->subTitle}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==================== End Vision Slider ==================== -->

<style>
/* Fix Bootstrap 5.3.3 compatibility issues with Archo theme */
.wow.animated {
    visibility: visible !important;
}

/* Ensure content remains visible after animation */
.wow.animated h6,
.wow.animated p,
.wow.animated .box {
    visibility: visible !important;
    opacity: 1 !important;
    display: block !important;
}

/* Fix for specific text elements */
.wow.animated h6 .custom-font,
.wow.animated h6 span,
.wow.animated h6:after {
    visibility: visible !important;
    opacity: 1 !important;
    display: inline !important;
}

/* Override any Bootstrap 5.3.3 styles that might conflict */
.services .item-sm .box {
    display: block !important;
    position: relative !important;
    visibility: visible !important;
}

/* Fix for RTL compatibility */
[dir="rtl"] .wow.animated h6,
[dir="rtl"] .wow.animated p {
    visibility: visible !important;
    opacity: 1 !important;
}
/* Special handling for RTL */
[dir="rtl"] .services .item-sm .numb {
  padding-right: 0;
  padding-left: 70px;
}

[dir="rtl"] .services .item-sm .numb:after {
  right: auto;
  left: 10px;
}

</style>