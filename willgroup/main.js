window.addEventListener('DOMContentLoaded', () => {
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    const anchorLinksArr = Array.prototype.slice.call(anchorLinks);

    //ボタン
    const scroll_to_top_btn = document.querySelector('#page_top');

    //クリックイベントを追加
    scroll_to_top_btn.addEventListener('click', scroll_to_top);

    function scroll_to_top() {
        window.scroll({ top: 0, behavior: 'smooth' });
    };


    //スクロール時のイベントを追加
    window.addEventListener('scroll', scroll_event);

    function scroll_event() {

        if (window.pageYOffset > 400) {
            scroll_to_top_btn.style.opacity = '1';
        } else if (window.pageYOffset < 400) {
            scroll_to_top_btn.style.opacity = '0';
        }

    };
});


$(function() {
    $('.Toggle').click(function() {
       $(this).toggleClass('active');
      $('.navmenu').toggleClass('open');
     });
    });