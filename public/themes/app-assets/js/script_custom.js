$(function(){

    //Sửa lỗi input select2 khi mở modal bootstrap 4
    $.fn.modal.Constructor.prototype._enforceFocus = function () {
        var that = this;
        $(document)
        .off('focusin.bs.modal')
        .on('focusin.bs.modal', function (e) {
            if ($(e.target).hasClass('select2-search__field')) {
                return true;
            }
        });
    };

    // Click checked all - '#input-ckk-all: id cha' - '.input-chk: id con'
    $("#input-chk-all").click(function () {
        $('.input-chk').not(this).prop('checked', this.checked);
    });


    $(".btn-act-toggle").click(function () {
        $(this).parents('.quick-action').toggleClass('toggle');
    });

    // Slide box
    if ($('.side-box').length > 0) {
        $(".side-box").on('click','.side-btn', function (e) {
            e.stopPropagation();
            e.preventDefault();
            $(this).parent().toggleClass('open');
        });
        $(".side-btn-close").click(function (e) {
            e.preventDefault();
            $(this).closest('.side-box').removeClass('open');
        });
    }

    // Step 4: Action Button click -> button slide (on/off)
    if ($('.collapse-group').length > 0) {
        $('.cls_ckb').each(function (index, obj) {
            var v_type_radio = $(this).closest('.c-item.radio').find('[datatable-collapse]');

            $(this).change(function () {
                $this = $(this);
                $(this).parent().next().trigger("click");
       
                $( v_type_radio ).on("shown.bs.collapse", function(e) {
                    $(e.currentTarget).parent().siblings('.c-item.radio').find('[datatable-collapse]').collapse('hide');
                    $(e.currentTarget).parent().siblings('.c-item.radio').find('.button-switch > input').prop( "checked", false );
                });


            });

        });
    }

    // Chat box
    if( $('.chat-box').length > 0 ){
        $(".chat-circle").click(function() {    
            $(".chat").toggleClass('open');
        })
        $(".cb-toggle-close").click(function() {
            $(".chat").removeClass('open');
        })
    }


    // Len dau trang
    $(".go-top").click(function () {
        $("html, body").animate({scrollTop: 0}, 500);
    });
   
});

// Hiểm thị hoặc ẩn password
var show_password = function(p_this){
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
        $(p_this).addClass('show');
    } else {
        x.type = "password";
        $(p_this).removeClass('show');
    }
}

// Phan in anh ho so boi thuong theo dinh dang list/4/6
$('.btn-print').on('click',function(){
    var data = $(this).data('print');
    if (data == 'list') {
        $("#print-claim").removeClass('view-grid4 view-grid6').addClass('view-list');
    }else if (data == 'grid4'){
        $("#print-claim").removeClass('view-list view-grid6').addClass('view-grid4');
    }else{
        $("#print-claim").removeClass('view-list view-grid4').addClass('view-grid6');
    }
    
    $("#print-claim").print({
        noPrintSelector : ".no-print",
        timeout: 1750,
    });
    
})
// Fix kich thuoc anh ho so boi thuong
var on_change_kich_thuoc_anh = function(p_this){
    if ($(p_this).is(':checked')) {
        $("#fancybox-gallery").addClass('view-fix')
    }else{
        $("#fancybox-gallery").removeClass('view-fix')
    }
}
// Click chon/bo anh ho so boi thuong can in
var on_change_print_select = function(p_this){
    if (!$(p_this).is(':checked')) {
        $(p_this).closest('li').addClass('no-print');
    }else{
        $(p_this).closest('li').removeClass('no-print');
    }
}


//Fix z-index cho modal boostrap
var modal_lv = 0;
$('.modal').on('shown.bs.modal', function (e) {
    $('.modal-backdrop:last').css('zIndex',1051+modal_lv);
    $(e.currentTarget).css('zIndex',1052+modal_lv);
    modal_lv++
});

$('.modal').on('hidden.bs.modal', function (e) {
    modal_lv--
});


//Faxcybox hien thi danh sach anh  
$('[data-fancybox="gallery"]').fancybox({
    buttons : [
        "zoom",
        "fb",
        // "share",
        "slideShow",
        "fullScreen",
        "download",
        "thumbs",
        "close"
    ],
    thumbs : {
        autoStart : true
    },
    baseClass: "",
    //div lay noi dung cho anh
    caption : function( instance, item ) {
        return $(this).find('figcaption').html();
    },
    // them xoay anh
    rotate: true,
});

//Sap xep anh
$( "#fancybox-gallery" ).sortable({
    handle: ".img-sortable",
});

//Faxcybox modal
var fancybox_modal = function(p_this, p_src){
    p_this = $(p_this);
    $.fancybox.open({
        src : p_src,
        btnTpl: {
            smallBtn:"",
        },
        baseClass: "fancybox-modal",
        afterLoad : function( instance, current ) {
            // $($.fn.dataTable.tables(true)).DataTable()
            // .columns.adjust()
            // .responsive.recalc();
            // $(".list-files").isotope('layout');
        }
    });
}

/* Script mobile nav*/
$(function(){
    var $window       = $(window);
    var lastScrollTop = 0;
    var $header       = $('.header-top');
    var $footer       = $('.mobile-bottom');
    var headerHeight  = $header.outerHeight();

    $(window).scroll(function() {
        var windowTop  = $window.scrollTop();

        if ( windowTop >= headerHeight ) {
            $header.addClass( 'sticky' );
        } else {
            $header.removeClass( 'sticky' ).removeClass( 'show' );
            $footer.removeClass( 'show' );
        }
        if ( $header.hasClass( 'sticky' ) ) {
            if ( windowTop < lastScrollTop ) {
                $header.addClass( 'show' );
                $footer.addClass( 'show' );
            } else {
                $header.removeClass( 'show' );
                $footer.removeClass( 'show' );
            }
        }
        if ( windowTop < lastScrollTop ) {
            $footer.addClass( 'show' );
        } else {
            $footer.removeClass( 'show' );
        }
        lastScrollTop = windowTop;
    } );
})
