<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <main>
        <h1 style="text-align: center">ABOUT US</h1>

        <div class="page-preview">
            <div class="page-preview-header">
                <a class="hidden-sm hidden-xs" href="#" id="previewDesktopBtn" data-preview-size="100%"><img alt="Responsive Desktop Mode" src="//csite.nicepage.com/Images/Site/responsive-desktop.png"></a>
                <a class="hidden-sm hidden-xs" href="#" id="previewLaptopBtn" data-preview-size="1040px"><img alt="Responsive Laptop Mode" src="//csite.nicepage.com/Images/Site/responsive-laptop.png"></a>
                <a class="hidden-xs" href="#" id="previewTabletBtn" data-preview-size="820px"><img alt="Responsive Tablet Mode" src="//csite.nicepage.com/Images/Site/responsive-tablet.png"></a>
                <a class="hidden-xs" href="#" id="previewPhoneHorizontalBtn" data-preview-size="640px"><img alt="Responsive Phone Horizontal Mode" src="//csite.nicepage.com/Images/Site/responsive-phone-horizontal.png"></a>
                <a class="hidden-xs" href="#" id="previewPhoneBtn" data-preview-size="440px"><img alt="Responsive Phone Mode" src="//csite.nicepage.com/Images/Site/responsive-phone.png"></a>
                <a class="close" href="/ht/896905/about-our-creative-union-html-template"><img alt="Close" src="//csite.nicepage.com/Images/Site/icon-close.png"></a>
            </div>
            <div class="page-preview-body">
                <iframe id="livePreviewFrame" src="https://website890810.nicepage.io/Page-8.html?version=8feba18f-3105-4ed1-80ba-b8e4845d1a79" width="1057" height="640" style="width:100%;"></iframe>
            </div>
        </div>
        <a style="position:absolute;top:17px;left:10px;" href="/"><img alt="NicePage.com" src="//csite.nicepage.com/Images/logo-w.png"></a>

        <script>
            if (window.parent) {
                var _w = 0, _h = 0;
                var updateFormSize = function () {
                    var form = $('form.shaped-form-extended,form.shaped-form');
                    var w = form.outerWidth(true);
                    var h = form.outerHeight(true);
                    if (Math.abs(_w - w) > 5 || Math.abs(_h - h) > 5) {
                        _w = w;
                        _h = h;
                        var msg = { key: 'login-frame-size', width: w, height: h };
                        window.parent.postMessage(msg, "*");
                    }
                    setTimeout(updateFormSize, 300);
                }
                updateFormSize();
            }
        </script>

        {{-- WINDY --}}
        <div id="windy"></div>
    </main>
</body>
</html>
