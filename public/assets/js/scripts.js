$(document).ready(function() {

    $(".mobile-toggle").click(function() {
        $(".mobile-menu").toggleClass("d-block");
    });


    $(".dropdown-main-3 .aljwise").click(function() {
        $(".dropdown-div-1").toggleClass("d-block");
        $(".dropdown-main-link .rotate-arrow").toggleClass("fa-angle-down fa-angle-left");
    });
    $(".dropdown-inner-condition").click(function() {
        $(".dropdown-main-link-div").toggleClass("d-block");
        $(".dropdown-main-link .rotate-arrow-1").toggleClass("fa-angle-down fa-angle-left");
    });
    // $(".rotate-arrow-click-c").click(function () {
    //     $(".rotate-arrow-main-c").toggleClass("fa-angle-down fa-angle-left");
    // });
    // $(".rotate-arrow-click-b").click(function () {
    //     $(".rotate-arrow-main-b").toggleClass("fa-angle-down fa-angle-left");
    // });

    // $(".rotate-arrow-click-a").click(function () {
    //     $(".rotate-arrow-main-a").toggleClass("fa-angle-down fa-angle-left");
    // });

    $(".dropdown-main-2 .aljwise").click(function() {
        $(".dropdown-div-2").toggleClass("d-block");
        $(".dropdown-main-link-2 .rotate-arrow").toggleClass("fa-angle-down fa-angle-left");
    });

    $(".dropdown-main-4 .aljwise").click(function() {
        $(".dropdown-div-4").toggleClass("d-block");
        $(".dropdown-main-link-4 .rotate-arrow").toggleClass("fa-angle-down fa-angle-left");
    });

    $(".dropdown-main-5 .aljwise").click(function() {
        $(".dropdown-div-5").toggleClass("d-block");
        $(".dropdown-main-link-5 .rotate-arrow").toggleClass("fa-angle-down fa-angle-left");
    });

    //  $(".dropdown-main-link-5").click(function () {
    //     console.log("main")
    //     $(".dropdown-main-link-div ").toggleClass("d-block");
    // });

    // $(".dropdown-main-3").click(function () {
    //     console.log("3")
    //     $(".dropdown-div-1").toggleClass("d-block");
    // });

    var show = false;
    $(".hide-field").click(function() {
        $(".hide-form").removeClass("d-none");
        $(".click-hide").hide();
    });
    $(".show-field").click(function() {
        $(".hide-form").removeClass("d-none");
        $(".click-hide").show();
    });

    $("#download-file-name").change(function() {
        var i = $(this).prev("label").clone();
        var file = $("#download-file-name")[0].files[0].name;
        $(".download-file-name").text(file);
    });

    $("#authority-letter-file-name").change(function() {
        var i = $(this).prev("label").clone();
        var file = $("#authority-letter-file-name")[0].files[0].name;
        $(".authority-letter").text(file);
    });

    $("#passport-id-file-name").change(function() {
        var i = $(this).prev("label").clone();
        var file = $("#passport-id-file-name")[0].files[0].name;
        $(".passport-id").text(file);
    });

    $("#download-cv-file-name").change(function() {
        var i = $(this).prev("label").clone();
        var file = $("#download-cv-file-name")[0].files[0].name;
        $(".download-cv").text(file);
    });

    $("#download-file-name1").change(function() {
        var i = $(this).prev("label").clone();
        var file = $("#download-file-name1")[0].files[0].name;
        $(".download-file-name1-1").text(file);
    });
    $("#download-file-name2").change(function() {
        var i = $(this).prev("label").clone();
        var file = $("#download-file-name2")[0].files[0].name;
        $(".download-file-name2-2").text(file);
    });
    $("#download-file-name3").change(function() {
        var i = $(this).prev("label").clone();
        var file = $("#download-file-name3")[0].files[0].name;
        $(".download-file-name3-3").text(file);
    });
    $("#download-file-name4").change(function() {
        var i = $(this).prev("label").clone();
        var file = $("#download-file-name4")[0].files[0].name;
        $(".download-file-name4-4").text(file);
    });

    $("#download-file-name5").change(function() {
        var i = $(this).prev("label").clone();
        var file = $("#download-file-name5")[0].files[0].name;
        $(".download-file-name5-5").text(file);
    });
    //   datatable

    // end datatale

    //  mobile menu


    $('.show-letter').click(function() {
        $('.optional').toggleClass('d-none');
    })

    let count = 1;
    $(".add-more-btn").click(function() {
        var add = `<div class="row">
							<div class="col-md-6">
                            <div class="form-group">
                                <label for="title" class="form-label">العنوان</label>
                                <input type="text" class="form-control" required name="title[]" id="title">
                            </div>
                        </div>

                        <div class="col-md-6"> 
                            <div class="form-group">
                                <label for="place" class="form-label">دار النشر</label>
                                <input type="text" class="form-control" required  name="place[]" id="place">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="release" class="form-label">سنة الإصدار</label>
                                <input type="date" class="form-control" required name="release[]" id="release">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group upload-file">
                                <label for="publishedWorks" class="form-label">التحمیل</label>
                                <input class="form-control" type="file" required id="download-file-append" accept="application/pdf, application/vnd.ms-excel"  name="publishedWorks[]">
                                <span class="upload-file-img download-file-name">
                                    <img src="https://zen-boyd.161-97-115-110.plesk.page/appa/public/assets/images/file-icon.png
" class="img-fluid" alt="">
                                </span>
                            </div>
                        </div>
 						</div>`;
        $(".add-more").append(add);

    });


    $("input[type=file]").change(function() {
        var i = $(this).prev("label").clone();
        var file = $(this)[0].files[0].name;
        $(this).next().text(file);
    })

    $(document).on('change', 'input[type=file]', function() {
        var i = $(this).prev("label").clone();
        var file = $(this)[0].files[0].name;
        $(this).next().text(file);
    });
    $('.accBox').hover(function() {
        $(this).prevAll().removeClass('expand');
        $(this).nextAll().removeClass('expand');
        $(this).prevAll().toggleClass('shrink');
        $(this).nextAll().toggleClass('shrink');
        $(this).toggleClass('expand');
        $(this).find('.accBox-h2').toggleClass('accBoxToggle');
        $(this).find('.accBox-h').toggleClass('accBoxhToggle');
    });

    AOS.init({
        offset: 200,
        duration: 1000
    });

});