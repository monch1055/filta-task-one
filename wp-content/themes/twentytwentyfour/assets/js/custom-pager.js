$(document).on('click', 'ul.wp-block-navigation__submenu-container', function(){
    if ($(this).hasClass('firstMenu')) {
        $(document).find('div.centerBanner img').attr('src', '/wp-content/uploads/2024/03/park-circle-300x240.jpg');
    } else if ($(this).hasClass('secondMenu')) {
        $(document).find('div.centerBanner img').attr('src', '/wp-content/uploads/2024/03/DSC_0002031055_04102009-300x200.jpg');
    }
})