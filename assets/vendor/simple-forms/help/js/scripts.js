(function($){
    "use strict";

    $(document).on("click tap", ".js_tab li", function (e) {
        e.preventDefault();
        var target = $(this).parent().data("target"),
            index = $(this).index() + 1;

        $(this).parent().find("li").removeClass("active");
        $(this).addClass("active");

        $(target).find("li").removeClass("active");
        $(target).find('li:nth-child('+index+')').addClass("active");
    });

    $(document).on("click tap", ".js_next_tab", function (e) {
        e.preventDefault();
        var target = $(this).data("target");

        $(target).find("li.active").next().trigger('click');
    });

    const copyToClipboard = str => {
        const el = document.createElement('textarea');
        el.value = str;
        el.setAttribute('readonly', '');
        //el.style.position = 'absolute';
        //el.style.left = '-9999px';
        document.body.appendChild(el);
        el.select();
        document.execCommand('copy');
        document.body.removeChild(el);
    };


    var copy_btn = document.querySelectorAll(".copy-btn");

    if(copy_btn){
        for (var j=0; j<copy_btn.length; j++){
            copy_btn[j].onclick = function(e){
                e.preventDefault();
            }
        }
    }

    var pre = document.querySelectorAll("pre");

    if(pre){
        for (var p=0; p<pre.length; p++){
            var cb = document.createElement("span");
            cb.classList.add("copy-btn");
            cb.innerHTML = "Copy";

            pre[p].appendChild(cb);
        }
    }


    var click_target, parent_pre, parent_code;
    document.body.onclick = function (e) {
        click_target = e.target;
        if( click_target.classList.contains("copy-btn") ){
            parent_pre  = click_target.closest("pre");
            parent_code = parent_pre.querySelector("code");

            copyToClipboard(parent_code.textContent);
        }
    }

})(jQuery);