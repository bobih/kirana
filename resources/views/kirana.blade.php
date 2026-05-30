@php
    $catchcopy_line1 = $catchcopy_line1 ?? 'Hello';
    $catchcopy_line2 = $catchcopy_line2 ?? 'World!';
    $profile_title = $profile_title ?? 'Profil';
    $profile_subtitle = $profile_subtitle ?? 'Siapa Gue!';
    $disco_title = $disco_title ?? 'Discography';
    $disco_title_1 = $disco_title_1 ?? 'Disco';
    $disco_title_2 = $disco_title_2 ?? 'Graphy';
    $disco_subtitle = $disco_subtitle ?? 'Terbaru!';
@endphp
<!DOCTYPE html>
<html lang="ja" class="__variable_7073ab" style="--vh: 3.02px; --theme-color: #1ccaff; scroll-behavior: smooth;">
<script>
    window.CATCHCOPY_LINE1 = "{{ $catchcopy_line1 }}";
    window.CATCHCOPY_LINE2 = "{{ $catchcopy_line2 }}";
    window.PROFILE_TITLE = "{{ $profile_title }}";
    window.PROFILE_SUBTITLE = "{{ $profile_subtitle }}";
    window.DISCO_TITLE = "{{ $disco_title }}";
    window.DISCO_TITLE_1 = "{{ $disco_title_1 }}";
    window.DISCO_TITLE_2 = "{{ $disco_title_2 }}";
    window.DISCO_SUBTITLE = "{{ $disco_subtitle }}";
</script>
<style>
    /* Force catchcopy visibility to bypass intro/animation delays */
    .top_keyvisual__catchcopy__inner {
        display: flex !important;
        flex-direction: column !important;
        align-items: flex-start !important;
        white-space: normal !important;
    }

    .top_keyvisual__catchcopy__line__EXQFd {
        opacity: 1 !important;
        visibility: visible !important;
        display: block !important;
        /* Ensure lines stack vertically without occupying full width if possible */
    }

    .top_keyvisual__catchcopy__text__SJo6t,
    .c-splitText {
        opacity: 1 !important;
        visibility: visible !important;
        display: inline-block !important;
    }

    /* Restore clickability to the hero section and navigation */
    .top_keyvisual__TJ2oe {
        pointer-events: auto !important;
    }

    .top_keyvisual__navwarp__8D9Re {
        z-index: 1000 !important;
        position: absolute !important;
        /* Restore to absolute as per original CSS */
        pointer-events: auto !important;
    }

    .top_keyvisual__nav__PuypP,
    .top_keyvisual__nav__item__6y3hf,
    .top_keyvisual__nav__PuypP a {
        pointer-events: auto !important;
    }

    /* Keep background elements from blocking clicks if they overlap */
    .top_keyvisual__ph__J5qRC,
    .l-pagebg {
        pointer-events: none !important;
    }

    /* Ensure no transparent overlays are blocking the view */
    [data-intro="0"] .top_keyvisual__TJ2oe {
        pointer-events: auto !important;
    }
</style>
<script>
    window.addEventListener('load', function () {
        // Wake up the animation engine
        document.body.setAttribute('data-intro', '1');
        document.body.setAttribute('data-pagestart', '1');
        window.dispatchEvent(new Event('resize'));

        // Optional: simulate a click to satisfy any "user gesture" requirements
        document.documentElement.click();
    });
</script>
<link type="text/css" id="dark-mode" rel="stylesheet" href="">
<style type="text/css" id="dark-mode-сustom-style"></style>
<style type="text/css" id="dark-mode-theme-changer-style"></style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preload" href="{{ url('_next/static/media/24f6ebe2756575bd-s.p.woff2') }}" as="font" crossorigin=""
        type="font/woff2">
    <link rel="stylesheet" href="{{ url('_next/static/css/b6b44f72ca5c5733.css') }}" data-precedence="next">
    <link rel="stylesheet" href="{{ url('_next/static/css/fecc8777f444e7d0.css') }}" data-precedence="next">
    <link rel="stylesheet" href="{{ url('_next/static/css/4f9a7f5030628621.css') }}" data-precedence="next">
    <link rel="stylesheet" href="{{ url('_next/static/css/07a098635536dd3e.css') }}" data-precedence="next">
    <link rel="preload" as="script" fetchpriority="low"
        href="{{ url('_next/static/chunks/webpack-77e271fbdb558673.js') }}">
    <script src="{{ url('_next/static/chunks/fd9d1056-d0146858c6309456.js') }}" async=""></script>
    <script src="{{ url('_next/static/chunks/117-adc68baa41f925a8.js') }}" async=""></script>
    <script src="{{ url('_next/static/chunks/main-app-d78d9de6600d23f1.js') }}" async=""></script>
    <script src="{{ url('_next/static/chunks/576-2f9e916491a2fab7.js') }}" async=""></script>
    <script src="{{ url('_next/static/chunks/498-510f20c2d0cc1f30.js') }}" async=""></script>
    <script src="{{ url('_next/static/chunks/378-2ebfb60ab2115a2d.js') }}" async=""></script>
    <link rel="preload" href="{{ url('_next/static/css/07a098635536dd3e.css') }}" as="style">
    <link rel="preload" href="https://www.googletagmanager.com/gtm.js?id=GTM-5BFVV632" as="script">
    <title>VOLTACTION</title>
    <meta name="description"
        content="にじさんじ所属VTuberユニット『VOLTACTION』（風楽奏斗/渡会雲雀/四季凪アキラ/セラフ・ダズルガーデン）No.1ダンスボーカルユニットを目指して活動中！">
    <meta property="og:title" content="VOLTACTION">
    <meta property="og:description"
        content="にじさんじ所属VTuberユニット『VOLTACTION』（風楽奏斗/渡会雲雀/四季凪アキラ/セラフ・ダズルガーデン）No.1ダンスボーカルユニットを目指して活動中！">
    <meta property="og:url" content="https://www.voltaction-official.com/">
    <meta property="og:site_name" content="VOLTACTION">
    <meta property="og:image" content="https://www.voltaction-official.com/assets/ogp.jpg">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="VOLTACTION">
    <meta name="twitter:description"
        content="にじさんじ所属VTuberユニット『VOLTACTION』（風楽奏斗/渡会雲雀/四季凪アキラ/セラフ・ダズルガーデン）No.1ダンスボーカルユニットを目指して活動中！">
    <meta name="twitter:image" content="https://www.voltaction-official.com/assets/ogp.jpg">
    <link rel="icon" href="{{ url('assets/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ url('assets/apple-icon.png') }}">
    <meta name="next-size-adjust">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yakuhanjp@4.1.1/dist/css/yakuhanjp.css">
    <link rel="stylesheet" href="https://use.typekit.net/ahv0fda.css">
    <script src="{{ url('_next/static/chunks/polyfills-42372ed130431b0a.js') }}" nomodule=""></script>
    <link rel="preload" href="{{ url('assets/img/top/keyvisual/ph_chara1_shadow.png') }}" as="image"
        fetchpriority="high">
    <link rel="preload" href="{{ url('assets/img/top/keyvisual/ph_chara4_shadow.png') }}" as="image"
        fetchpriority="high">
    <link rel="preload" href="{{ url('assets/img/top/keyvisual/ph_chara3_shadow.png') }}" as="image"
        fetchpriority="high">
    <link rel="preload" href="{{ url('assets/img/top/keyvisual/ph_chara2_shadow.png') }}" as="image"
        fetchpriority="high">
    <link rel="preload" href="{{ url('assets/img/top/keyvisual/ph_chara1.png') }}" as="image" fetchpriority="high">
    <link rel="preload" href="{{ url('assets/img/top/keyvisual/ph_chara4.png') }}" as="image" fetchpriority="high">
    <link rel="preload" href="{{ url('assets/img/top/keyvisual/ph_chara3.png') }}" as="image" fetchpriority="high">
    <link rel="preload" href="{{ url('assets/img/top/keyvisual/ph_chara2.png') }}" as="image" fetchpriority="high">
    <style>
        /* Force catchcopy visibility to bypass intro/animation delays */
        .top_keyvisual__catchcopy__inner {
            display: flex !important;
            flex-direction: column !important;
            align-items: flex-start !important;
            white-space: normal !important;
        }

        .top_keyvisual__catchcopy__line__EXQFd {
            opacity: 1 !important;
            visibility: visible !important;
            display: block !important;
        }

        .top_keyvisual__catchcopy__text__SJo6t,
        .c-splitText {
            opacity: 1 !important;
            visibility: visible !important;
            display: inline-block !important;
        }

        /* Restore clickability to the hero section and navigation */
        .top_keyvisual__TJ2oe,
        .top_keyvisual__navwarp__8D9Re,
        .top_keyvisual__navwarp__8D9Re *,
        .top_keyvisual__nav__PuypP,
        .top_keyvisual__nav__item__6y3hf,
        .top_keyvisual__nav__PuypP a {
            pointer-events: auto !important;
            visibility: visible !important;
        }

        .top_keyvisual__navwarp__8D9Re {
            z-index: 99999 !important;
            position: absolute !important;
        }

        /* Keep background elements from blocking clicks if they overlap */
        .top_keyvisual__ph__J5qRC,
        .l-pagebg,
        .top_keyvisual__catchcopy___U4t4 {
            pointer-events: none !important;
        }

        /* Hide the site logo */
        .top_topHeader__title__9uhJ2 {
            display: none !important;
        }

        /* Hide the VOLTACTION logo in profile section */
        .top_profile__members__team__Ocaca {
            display: none !important;
        }

        /* Ensure no transparent overlays are blocking the view */
        [data-intro="0"] .top_keyvisual__TJ2oe {
            pointer-events: auto !important;
        }
    </style>
</head>

<body class="top" data-pagestart="1" data-intro="1" data-theme="water">
    <script src="{{ url('_next/static/chunks/webpack-77e271fbdb558673.js') }}" async=""></script>
    <script>
        (self.__next_f = self.__next_f || []).push([0]);
        self.__next_f.push([2, null])
    </script>
    <script>
        self.__next_f.push([1,
            "1:HL[\"/_next/static/media/24f6ebe2756575bd-s.p.woff2\",\"font\",{\"crossOrigin\":\"\",\"type\":\"font/woff2\"}]\n2:HL[\"/_next/static/css/b6b44f72ca5c5733.css\",\"style\"]\n3:HL[\"/_next/static/css/fecc8777f444e7d0.css\",\"style\"]\n4:HL[\"/_next/static/css/4f9a7f5030628621.css\",\"style\"]\n5:HL[\"/_next/static/css/07a098635536dd3e.css\",\"style\"]\n"
        ])
    </script>
    <script>
        self.__next_f.push([1,
            "6:I[2846,[],\"\"]\n9:\"$Sreact.suspense\"\na:I[9813,[\"922\",\"static/chunks/c15bf2b0-3fa3c123f635ab8d.js\",\"576\",\"static/chunks/576-2f9e916491a2fab7.js\",\"498\",\"static/chunks/498-510f20c2d0cc1f30.js\",\"378\",\"static/chunks/378-2ebfb60ab2115a2d.js\",\"185\",\"static/chunks/app/layout-90f2fc98d1fb4037.js\"],\"default\"]\nb:I[4707,[],\"\"]\nc:I[6423,[],\"\"]\nd:I[8087,[\"922\",\"static/chunks/c15bf2b0-3fa3c123f635ab8d.js\",\"576\",\"static/chunks/576-2f9e916491a2fab7.js\",\"498\",\"static/chunks/498-510f20c2d0cc1f30.js\",\"378\",\"static/chunks/378-2ebfb60ab2115a2d.js\",\"185\",\"static/chunks/app/layout-90f2fc98d1fb4037.js\"],\"GoogleTagManager\"]\nf:I[1060,[],\"\"]\n10:[]\n"
        ])
    </script>
    <script>
        self.__next_f.push([1,
            "0:[\"$\",\"$L6\",null,{\"buildId\":\"FEUkID-r-m5J9PKORzL58\",\"assetPrefix\":\"\",\"urlParts\":[\"\",\"\"],\"initialTree\":[\"\",{\"children\":[\"__PAGE__\",{}]},\"$undefined\",\"$undefined\",true],\"initialSeedData\":[\"\",{\"children\":[\"__PAGE__\",{},[[\"$L7\",\"$L8\",[[\"$\",\"link\",\"0\",{\"rel\":\"stylesheet\",\"href\":\"/_next/static/css/07a098635536dd3e.css\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\"}]]],null],null]},[[[[\"$\",\"link\",\"0\",{\"rel\":\"stylesheet\",\"href\":\"/_next/static/css/b6b44f72ca5c5733.css\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\"}],[\"$\",\"link\",\"1\",{\"rel\":\"stylesheet\",\"href\":\"/_next/static/css/fecc8777f444e7d0.css\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\"}],[\"$\",\"link\",\"2\",{\"rel\":\"stylesheet\",\"href\":\"/_next/static/css/4f9a7f5030628621.css\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\"}]],[\"$\",\"html\",null,{\"lang\":\"ja\",\"className\":\"__variable_7073ab\",\"children\":[[\"$\",\"head\",null,{\"children\":[[\"$\",\"link\",null,{\"rel\":\"stylesheet\",\"href\":\"https://cdn.jsdelivr.net/npm/yakuhanjp@4.1.1/dist/css/yakuhanjp.css\"}],[\"$\",\"link\",null,{\"rel\":\"stylesheet\",\"href\":\"https://use.typekit.net/ahv0fda.css\"}]]}],[\"$\",\"body\",null,{\"children\":[[\"$\",\"$9\",null,{\"fallback\":null,\"children\":[\"$\",\"$La\",null,{\"children\":[\"$\",\"$Lb\",null,{\"parallelRouterKey\":\"children\",\"segmentPath\":[\"children\"],\"error\":\"$undefined\",\"errorStyles\":\"$undefined\",\"errorScripts\":\"$undefined\",\"template\":[\"$\",\"$Lc\",null,{}],\"templateStyles\":\"$undefined\",\"templateScripts\":\"$undefined\",\"notFound\":[[\"$\",\"title\",null,{\"children\":\"404: This page could not be found.\"}],[\"$\",\"div\",null,{\"style\":{\"fontFamily\":\"system-ui,\\\"Segoe UI\\\",Roboto,Helvetica,Arial,sans-serif,\\\"Apple Color Emoji\\\",\\\"Segoe UI Emoji\\\"\",\"height\":\"100vh\",\"textAlign\":\"center\",\"display\":\"flex\",\"flexDirection\":\"column\",\"alignItems\":\"center\",\"justifyContent\":\"center\"},\"children\":[\"$\",\"div\",null,{\"children\":[[\"$\",\"style\",null,{\"dangerouslySetInnerHTML\":{\"__html\":\"body{color:#000;background:#fff;margin:0}.next-error-h1{border-right:1px solid rgba(0,0,0,.3)}@media (prefers-color-scheme:dark){body{color:#fff;background:#000}.next-error-h1{border-right:1px solid rgba(255,255,255,.3)}}\"}}],[\"$\",\"h1\",null,{\"className\":\"next-error-h1\",\"style\":{\"display\":\"inline-block\",\"margin\":\"0 20px 0 0\",\"padding\":\"0 23px 0 0\",\"fontSize\":24,\"fontWeight\":500,\"verticalAlign\":\"top\",\"lineHeight\":\"49px\"},\"children\":\"404\"}],[\"$\",\"div\",null,{\"style\":{\"display\":\"inline-block\"},\"children\":[\"$\",\"h2\",null,{\"style\":{\"fontSize\":14,\"fontWeight\":400,\"lineHeight\":\"49px\",\"margin\":0},\"children\":\"This page could not be found.\"}]}]]}]}]],\"notFoundStyles\":[]}]}]}],[\"$\",\"$Ld\",null,{\"gtmId\":\"GTM-5BFVV632\"}]]}]]}]],null],null],\"couldBeIntercepted\":false,\"initialHead\":[null,\"$Le\"],\"globalErrorComponent\":\"$f\",\"missingSlots\":\"$W10\"}]\n"
        ])
    </script>
    <script>
        self.__next_f.push([1,
            "e:[[\"$\",\"meta\",\"0\",{\"name\":\"viewport\",\"content\":\"width=device-width, initial-scale=1\"}],[\"$\",\"meta\",\"1\",{\"charSet\":\"utf-8\"}],[\"$\",\"title\",\"2\",{\"children\":\"VOLTACTION\"}],[\"$\",\"meta\",\"3\",{\"name\":\"description\",\"content\":\"にじさんじ所属VTuberユニット『VOLTACTION』（風楽奏斗/渡会雲雀/四季凪アキラ/セラフ・ダズルガーデン）No.1ダンスボーカルユニットを目指して活動中！\"}],[\"$\",\"meta\",\"4\",{\"property\":\"og:title\",\"content\":\"VOLTACTION\"}],[\"$\",\"meta\",\"5\",{\"property\":\"og:description\",\"content\":\"にじさんじ所属VTuberユニット『VOLTACTION』（風楽奏斗/渡会雲雀/四季凪アキラ/セラフ・ダズルガーデン）No.1ダンスボーカルユニットを目指して活動中！\"}],[\"$\",\"meta\",\"6\",{\"property\":\"og:url\",\"content\":\"https://www.voltaction-official.com/\"}],[\"$\",\"meta\",\"7\",{\"property\":\"og:site_name\",\"content\":\"VOLTACTION\"}],[\"$\",\"meta\",\"8\",{\"property\":\"og:image\",\"content\":\"https://www.voltaction-official.com/assets/ogp.jpg\"}],[\"$\",\"meta\",\"9\",{\"property\":\"og:type\",\"content\":\"website\"}],[\"$\",\"meta\",\"10\",{\"name\":\"twitter:card\",\"content\":\"summary_large_image\"}],[\"$\",\"meta\",\"11\",{\"name\":\"twitter:title\",\"content\":\"VOLTACTION\"}],[\"$\",\"meta\",\"12\",{\"name\":\"twitter:description\",\"content\":\"にじさんじ所属VTuberユニット『VOLTACTION』（風楽奏斗/渡会雲雀/四季凪アキラ/セラフ・ダズルガーデン）No.1ダンスボーカルユニットを目指して活動中！\"}],[\"$\",\"meta\",\"13\",{\"name\":\"twitter:image\",\"content\":\"https://www.voltaction-official.com/assets/ogp.jpg\"}],[\"$\",\"link\",\"14\",{\"rel\":\"icon\",\"href\":\"/assets/favicon.ico\"}],[\"$\",\"link\",\"15\",{\"rel\":\"apple-touch-icon\",\"href\":\"/assets/apple-icon.png\"}],[\"$\",\"meta\",\"16\",{\"name\":\"next-size-adjust\"}]]\n7:null\n"
        ])
    </script>
    <script>
        self.__next_f.push([1,
            "11:I[3275,[\"922\",\"static/chunks/c15bf2b0-3fa3c123f635ab8d.js\",\"576\",\"static/chunks/576-2f9e916491a2fab7.js\",\"498\",\"static/chunks/498-510f20c2d0cc1f30.js\",\"899\",\"static/chunks/899-bbb4daf4a94b5aa9.js\",\"931\",\"static/chunks/app/page-132a7e325bbe5c7f.js\"],\"default\"]\n12:T36fb,"
        ])
    </script>
    <script>
        self.__next_f.push([1,
            "\u003ch2 id=\"ha1a962b8a3\"\u003e西武渋谷店にて「にじさんじ New Life POPUP ～せめよん＆VOLTACTION～」開催決定！\u003c/h2\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e「にじさんじ New Life POPUP ～せめよん＆VOLTACTION～」は、2026年4月7日(火)から西武渋谷店 B館3階にて開催いたします。\u003c/p\u003e\u003cp\u003e開催期間は2026年4月7日(火)から2026年5月10日(日)まで。グッズ販売や、ご購入金額に応じたノベルティ配布を行います。また、会場限定の展示やパシャスナップエリアもございます。入場無料(整理券制)ですので、ぜひお越しください。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003ch2 id=\"h648c2d5d0d\"\u003eポップアップストア「にじさんじ New Life POPUP ～せめよん＆VOLTACTION～」 情報\u003c/h2\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003eにじさんじ New Life POPUP ～せめよん＆VOLTACTION～\u003cbr\u003e開催期間：2026年4月7日(火)～2026年5月10日(日)\u003cbr\u003e開催場所：西武渋谷店 B館3階\u003cbr\u003e　　　　　〒150-8330 東京都渋谷区宇田川町21-1\u003cbr\u003e営業時間：10:00〜20:00 ※最終入場19:30\u003cbr\u003e特設サイト：\u003ca href=\"https://estream-store.com/lp/New-Life-POPUP\"\u003ehttps://estream-store.com/lp/New-Life-POPUP\u003c/a\u003e\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003cstrong\u003e\u003cu\u003e■整理券のお申し込みについて\u003c/u\u003e\u003c/strong\u003e\u003cbr\u003e抽選対象期間：2026年4月7日(火)～2026年5月10日(日)\u003cbr\u003e抽選応募期間：2026年3月30日(月)18:30～2026年4月2日(木)23:59\u003cbr\u003e抽選結果連絡：2026年4月4日(土)18:00予定\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003cstrong\u003e\u003cu\u003e■注意事項\u003c/u\u003e\u003c/strong\u003e\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cfigure\u003e\u003cimg src=\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/abef2241993842afbd8905de1d29ea6c/%E5%85%A5%E5%A0%B4%E6%96%B9%E6%B3%95.jpg?w=716\u0026amp;h=896\" alt=\"\" width=\"716\" height=\"896\"\u003e\u003c/figure\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e【入場方法について】\u003cbr\u003e入場は事前予約制です。 エリアごとに「せめ4入場整理券」または「VOLTACTION入場整理券」が必要です。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e・「せめ4入場整理券」をお持ちの場合\u003cbr\u003e「せめ4」「VOLTACTION」両方の展示エリア・パシャスナップエリアへ入場いただけます。\u003cbr\u003e「せめ4」物販エリアへ入場いただけます。\u003cbr\u003e※VOLTACTION物販エリアへの入場および「学園ゔぉるたくしょん」グッズの購入はできません。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e・「VOLTACTION入場整理券」をお持ちの場合\u003cbr\u003e「せめ4」「VOLTACTION」両方の展示エリア・パシャスナップエリアへ入場いただけます。\u003cbr\u003e「VOLTACTION」物販エリアへ入場いただけます。\u003cbr\u003e※せめ4の物販エリアへの入場および「VSせめよん」グッズの購入はできません。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e【抽選応募方法について】\u003cbr\u003e・入場整理券のお申し込みは、にじさんじ New Life POPUP ～せめよん＆VOLTACTION～の公式LINE(\u003ca href=\"https://lin.ee/8TlpTAU\"\u003ehttps://lin.ee/8TlpTAU\u003c/a\u003e)にて受け付けております。\u003cbr\u003e・チケット予約サービスでは公式LINEの友達追加が必要となります。\u003cbr\u003e・おひとり様につき、3候補までお申し込みが可能です。\u003cbr\u003e・当選は各ユニットにつき最大2回となります。\u003cbr\u003e・1枠に対して最大2名までのお申込みが可能です。\u003cbr\u003e・ 2名でのご参加の場合、応募された当選者様のみにQRコードが配布されます。同伴者様へのチケット分配ができないため、必ずご一緒に会場までお越しください。\u003cbr\u003e・QRコードのスクリーンショット / 画面キャプチャではご入場いただけません。\u003cbr\u003e・入場の際には、お申し込みいただいたLINEアカウントにログインしている端末を必ずお持ち下さい。\u003cbr\u003e・入場 / 会場においての注意事項は、当選者様に表示される整理券に記載させていただきます。\u003cbr\u003e・小学生以下のお子様は同伴可としますので人数限りなくご来場いただけます。その際、購入制限商品において同伴者の方の購入権限はございませんので予めご了承ください。\u003cbr\u003e・この整理券は入場整理券となり、商品のご購入を確約するものではございません。\u003cbr\u003e・転売目的でのご応募は固く禁じられております。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e【当日券について】\u003cbr\u003e・当日の予約状況次第では、当日整理券を配布いたします。当日の朝8:00に抽選ページにて先着で応募を受け付けいたします。\u003cbr\u003e・来場可能回数は、会期中最大4回(せめ4 2回、VOLTACTION 2回)となります。\u003cbr\u003e　(例)せめ4抽選に当選し、来場が1回決定している方 ⇒残りせめ4当日券を最大1回取得可能、VOLTACTION当日券を最大2回取得可能\u003cbr\u003e・お申し込み時、1枠につき最大2名分の応募が可能です。\u003cbr\u003e・当日整理券を取得後のキャンセルはできませんので、来場可能な日程・人数を選択してご応募ください。　\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003ch2 id=\"h2d6fe15b8c\"\u003e「VSせめよん」「学園ゔぉるたくしょん」グッズ 情報\u003c/h2\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e「VSせめよん」と「学園ゔぉるたくしょん」のグッズをメインで販売いたします！\u003cbr\u003eグッズの詳細は、各プレスリリースをご確認ください。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e▼詳細はこちら\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cfigure\u003e\u003cimg src=\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/f8f3c2ff9fbd48739c92faea5a36b738/VS%E3%81%9B%E3%82%81%E3%82%88%E3%82%93.png?w=896\u0026amp;h=504\" alt=\"\" width=\"896\" height=\"504\"\u003e\u003c/figure\u003e\u003cp\u003e\u003ca href=\"https://prtimes.jp/main/html/rd/p/000001448.000030865.html\"\u003ehttps://prtimes.jp/main/html/rd/p/000001448.000030865.html\u003c/a\u003e\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cfigure\u003e\u003cimg src=\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/314655c160274ba1adb31c5e94c67d85/896x504_%E5%AD%A6%E5%9C%92%E3%82%94%E3%81%89%E3%82%8B%E3%81%9F%E3%81%8F%E3%81%97%E3%82%87%E3%82%93_%E3%82%B5%E3%83%A0%E3%83%8D%E3%82%A4%E3%83%AB.png\" alt=\"\" width=\"896\" height=\"504\"\u003e\u003c/figure\u003e\u003cp\u003e\u003ca href=\"https://prtimes.jp/main/html/rd/p/000001458.000030865.html\"\u003ehttps://prtimes.jp/main/html/rd/p/000001458.000030865.html\u003c/a\u003e\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e他にも、これまでに発売されたせめ4(葛葉/不破湊/ローレン・イロアス/イブラヒム)の4名と、VOLTACTIONの商品の販売も予定しております。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003ch2 id=\"heb72ed47d7\"\u003e【会場限定】グッズ購入特典\u003c/h2\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e「にじさんじ New Life POPUP ～せめよん＆VOLTACTION～」で販売されているグッズをご購入3,000円(税込)毎に、会場限定ノベルティ「チケット風カード(全4種)」を1枚ランダムでプレゼントいたします。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cfigure\u003e\u003cimg src=\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/718b70fcd3d043c4b67d7e12b25a85e1/%E3%83%81%E3%82%B1%E3%83%83%E3%83%88%E9%A2%A8%E3%82%AB%E3%83%BC%E3%83%89(%E5%85%A84%E7%A8%AE)_1.jpg?w=896\u0026amp;h=504\" alt=\"\" width=\"896\" height=\"504\"\u003e\u003c/figure\u003e\u003cfigure\u003e\u003cimg src=\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/6acaa17b99ab436c8ce0603e65e5e624/%E3%83%81%E3%82%B1%E3%83%83%E3%83%88%E9%A2%A8%E3%82%AB%E3%83%BC%E3%83%89(%E5%85%A84%E7%A8%AE)_2.jpg\" alt=\"\" width=\"1920\" height=\"1080\"\u003e\u003c/figure\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e※特典はお選びいただけません。\u003cbr\u003e※せめ4(葛葉/不破湊/ローレン・イロアス/イブラヒム)グッズをご購入の方には3,000円(税込)毎に「チケット風カード せめよん ver.(全4種)」を、VOLTACTIONグッズをご購入の方には3,000円(税込)毎に「チケット風カード VOLTACTION ver.(全4種)」をお渡しいたします。\u003cbr\u003e※会場にて販売している「VSせめよん」「学園ゔぉるたくしょん」グッズおよびこれまでに発売した商品ともに本特典プレゼント対象です。\u003cbr\u003e※パシャスナップは特典プレゼントの対象外となります。\u003cbr\u003e※なくなり次第終了となりますので、あらかじめご了承ください。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003ch2 id=\"h3944b4d5e6\"\u003e【会場限定】グッズ情報\u003c/h2\u003e\u003cp\u003e\u003c/p\u003e\u003cfigure\u003e\u003cimg src=\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/2701919c6c0340859ea6338882f90ea2/%E3%82%AA%E3%83%AA%E3%82%B8%E3%83%8A%E3%83%AB%E3%82%B7%E3%83%A7%E3%83%83%E3%83%91%E3%83%BC_%E9%BB%92.jpg?w=896\u0026amp;h=504\" alt=\"\" width=\"896\" height=\"504\"\u003e\u003c/figure\u003e\u003cfigure\u003e\u003cimg src=\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/c3ac128aaf964b3aba7e3f394d5e57ab/%E3%82%AA%E3%83%AA%E3%82%B8%E3%83%8A%E3%83%AB%E3%82%B7%E3%83%A7%E3%83%83%E3%83%91%E3%83%BC_%E7%99%BD.jpg?w=896\u0026amp;h=504\" alt=\"\" width=\"896\" height=\"504\"\u003e\u003c/figure\u003e\u003cfigure\u003e\u003cimg src=\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/55fe8af3bf9e4bf1833fd7440607b17a/%E3%82%AA%E3%83%AA%E3%82%B8%E3%83%8A%E3%83%AB%E3%82%AD%E3%83%A3%E3%83%A9%E3%83%A1%E3%83%AB%E7%BC%B6.jpg\" alt=\"\" width=\"1920\" height=\"1080\"\u003e\u003c/figure\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e会場限定でオリジナルショッパー550円(税込)とオリジナルキャラメル缶990円(税込)を販売いたします。\u003cbr\u003e会場にお越しの際は、ぜひお買い求めください。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003ch2 id=\"h9f8c0ff19e\"\u003eパシャスナップについて\u003c/h2\u003e\u003cp\u003e\u003c/p\u003e\u003cfigure\u003e\u003cimg src=\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/cd9fc536b94b4e91b5c3aff30146f749/%E3%83%91%E3%82%B7%E3%83%A3%E3%82%B9%E3%83%8A%E3%83%83%E3%83%97.jpg?w=896\u0026amp;h=504\" alt=\"\" width=\"896\" height=\"504\"\u003e\u003c/figure\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e撮影した写真がその場で印刷できる、パシャスナップが登場！\u003cbr\u003eせめ4・VOLTACTIONのいずれかからお好きなフレームをお選びいただけます。\u003c/p\u003e\u003cp\u003e※撮影券は1回のご入場につき1枚ご購入いただけます。\u003cbr\u003e※撮影券は1枚500円(税込)となります。\u003cbr\u003e※パシャスナップはグッズ購入特典のプレゼント対象外となります。\u003cbr\u003e※パシャスナップはPOPUP会場内にございますので、POPUP入場整理券が必要となります。\u003cbr\u003e※撮影チケットはパシャスナップエリア受付/物販レジで購入可能です。\u003c/p\u003e\u003cp\u003e詳細は、特設サイトをご確認ください。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003ch2 id=\"h1ee5a018c3\"\u003e展示内容\u003c/h2\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e会場では下記展示をいたします。展示エリアは全て撮影、録画が可能です。\u003cbr\u003eまた、SNS等での発信も可能です。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e※通行のためのスペース確保にご協力ください。また待機や座り込み、会場内に長時間留まるなどの行為は禁止とさせていただきます。\u003cbr\u003e※混雑状況により変更・中止となる場合がございます。\u003cbr\u003e※SNS投稿の際は他のお客様へのご配慮をお願いいたします。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003cstrong\u003e\u003cu\u003e■せめ4：プリントシール機再現展示\u003c/u\u003e\u003c/strong\u003e\u003cbr\u003e入口から「VSせめよん」の世界観に入れる！？\u003cbr\u003eプリントシール機の中をイメージした展示を設置！\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003cstrong\u003e\u003cu\u003e■せめ4：クレーンゲーム機再現展示\u003c/u\u003e\u003c/strong\u003e\u003cbr\u003eクレーンゲーム機をパネルで再現した展示です。\u003cbr\u003e中にはせめ4の4名がそれぞれのクレーンゲーム機に...！\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003cstrong\u003e\u003cu\u003e■せめ4：質問コーナー\u003c/u\u003e\u003c/strong\u003e\u003cbr\u003e質問に対してせめ4が手書きで回答したものを複製パネルとして展示！\u003cbr\u003eどのような回答をしたのかぜひご覧ください。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003cstrong\u003e\u003cu\u003e■せめ4：等身大パネル展示\u003c/u\u003e\u003c/strong\u003e\u003cbr\u003e「VSせめよん」の撮りおろしビジュアルを使用したフチなしのパネルが登場！\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003cstrong\u003e\u003cu\u003e■VOLTACTION：教室再現展示\u003c/u\u003e\u003c/strong\u003e\u003cbr\u003e黒板や机などを設置し、教室を再現しました！\u003cbr\u003e今日の日直は…？\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003cstrong\u003e\u003cu\u003e■VOLTACTION：ゲーム画面風パネル展示\u003c/u\u003e\u003c/strong\u003e\u003cbr\u003eゲーム画面をイメージしたパネルを展示します！\u003cbr\u003eVOLTACTIONの放課後の様子をお楽しみください。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003cstrong\u003e\u003cu\u003e■VOLTACTION：時間割表の展示\u003c/u\u003e\u003c/strong\u003e\u003cbr\u003eVOLTACTIONが考えたオリジナルの時間割表を展示！\u003cbr\u003e今日の時間割は誰の考案か、ぜひご覧ください！\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003cstrong\u003e\u003cu\u003e■VOLTACTION：等身大パネル展示\u003c/u\u003e\u003c/strong\u003e\u003cbr\u003e「学園ゔぉるたくしょん」の撮りおろしビジュアルを使用したフチなしのパネルが登場！\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003ch2 id=\"h43c1c8e435\"\u003e広告\u003c/h2\u003e\u003cp\u003e\u003c/p\u003e\u003cfigure\u003e\u003cimg src=\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/b9ed4527a0ab4fa3984e04493c77b0ad/A%E9%A4%A81%E9%9A%8E%E3%82%B5%E3%82%A4%E3%83%8D%E3%83%BC%E3%82%B8_%E3%82%A4%E3%83%A1%E3%83%BC%E3%82%B8.png?w=896\u0026amp;h=672\" alt=\"\" width=\"896\" height=\"672\"\u003e\u003cfigcaption\u003e※画像はイメージです\u003c/figcaption\u003e\u003c/figure\u003e\u003cp\u003e\u003c/p\u003e\u003cfigure\u003e\u003cimg src=\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/8d280badcf244682a13cf694a727b07e/A%E9%A4%A8%E4%BA%95%E3%81%AE%E9%A0%AD%E9%80%9A%E3%82%8A%E6%B2%BF%E3%81%84%E3%83%90%E3%83%8A%E3%83%BC_%E3%82%A4%E3%83%A1%E3%83%BC%E3%82%B8.jpg?w=896\u0026amp;h=504\" alt=\"\" width=\"896\" height=\"504\"\u003e\u003cfigcaption\u003e※画像はイメージです\u003c/figcaption\u003e\u003c/figure\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e西武渋谷店ではせめ4、VOLTACTIONのビジュアルを用いた広告を掲出いたします。\u003cbr\u003e渋谷周辺にお立ち寄りの際には、ぜひご覧ください。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e①A館1階サイネージ\u003cbr\u003e期間：2026年4月6日(月)～2026年5月10日(日)\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e②A館井の頭通り沿いバナー\u003cbr\u003e期間：2026年4月7日(火)～2026年5月10日(日)\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e新たな情報に関しては、下記の公式SNS等にて随時更新いたします。\u003cbr\u003e・にじさんじ公式X：\u003ca href=\"https://x.com/nijisanji_app\"\u003ehttps://x.com/nijisanji_app\u003c/a\u003e\u003cbr\u003e・にじさんじPOPUP公式X：\u003ca href=\"https://x.com/NIJI_dps\"\u003ehttps://x.com/NIJI_dps\u003c/a\u003e\u003cbr\u003e・ハッシュタグ：#にじさんじNewLifePOPUP\u003c/p\u003e"
        ])
    </script>
    <script>
        self.__next_f.push([1, "13:T4108,"])
    </script>
    <script>
        self.__next_f.push([1,
            "\u003ch2 id=\"h8f99b1c0c0\"\u003e2026年4月3日(金)18時から「学園ゔぉるたくしょん」グッズの販売を開始！\u003c/h2\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e「VOLTACTION」から、ゲームの中の学園生活をテーマとした新グッズが登場！\u003c/p\u003e\u003cp\u003eグッズラインナップは、ランダムフォト風カード、ボイスアクリルスタンド、ランダム箔押し缶バッジ、セーラーマスコット、アクリルブロック、好感度？？アクリルキーホルダー、ヘアクリップセット、ハンサム付箋ブック、コレクトブック、生徒手帳風ノート＆ボールペンセット、カーディガン、ダイカットアクリルパネルの全12種類。\u003c/p\u003e\u003cp\u003eさらに、「にじいろクローゼット」から、にじぱぺっと、ポージングぬいぐるみが着用可能なセーラー服も登場。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cfigure\u003e\u003cimg src=\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/5422e1c55b464077b283320275b63957/896x504_%E5%AD%A6%E5%9C%92%E3%82%94%E3%81%89%E3%82%8B%E3%81%9F%E3%81%8F%E3%81%97%E3%82%87%E3%82%93_%E3%81%8A%E5%93%81%E6%9B%B8%E3%81%8D.jpg\" alt=\"\" width=\"896\" height=\"504\"\u003e\u003c/figure\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e「学園ゔぉるたくしょん」グッズは、にじさんじオフィシャルストア(\u003ca href=\"https://shop.nijisanji.jp\"\u003ehttps://shop.nijisanji.jp\u003c/a\u003e)にて2026年4月3日(金)18時から販売を開始いたします。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003ch2 id=\"h6cc9b7e0f2\"\u003e「学園ゔぉるたくしょん」グッズ紹介\u003c/h2\u003e\u003cp\u003e\u003c/p\u003e\u003cfigure\u003e\u003cimg src=\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/0716fa0dbbb044c79deca8342e6f3f46/896_%E5%AD%A6%E5%9C%92%E3%82%94%E3%81%89%E3%82%8B%E3%81%9F%E3%81%8F%E3%81%97%E3%82%87%E3%82%93_%E3%83%95%E3%82%A9%E3%83%88%E9%A2%A8%E3%82%AB%E3%83%BC%E3%83%89.png\" alt=\"\" width=\"896\" height=\"896\"\u003e\u003c/figure\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003cstrong\u003e\u003cu\u003e■ランダムフォト風カード\u003c/u\u003e\u003c/strong\u003e\u003cbr\u003e・価格：350円(税込)\u003cbr\u003e・種類：全16種ランダム\u003cbr\u003e・サイズ(約)：W54mm×H86mm\u003cbr\u003e・素材：紙、PP\u003cbr\u003e※本商品はお1人様1会計につき、40点までのご購入とさせていただきます。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cfigure\u003e\u003cimg src=\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/f6a609fe48d94a598cdb7aa4a0ee3670/896_%E5%AD%A6%E5%9C%92%E3%82%94%E3%81%89%E3%82%8B%E3%81%9F%E3%81%8F%E3%81%97%E3%82%87%E3%82%93_%E3%83%9C%E3%82%A4%E3%82%B9%E3%82%A2%E3%82%AF%E3%83%AA%E3%83%AB%E3%82%B9%E3%82%BF%E3%83%B3%E3%83%89.png\" alt=\"\" width=\"896\" height=\"896\"\u003e\u003c/figure\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003cstrong\u003e\u003cu\u003e■ボイスアクリルスタンド\u003c/u\u003e\u003c/strong\u003e\u003cbr\u003e・価格：各3,300円(税込)\u003cbr\u003e・種類：全4種\u003cbr\u003e・サイズ(約)\u003cbr\u003e　本体：W57mm×H147mm以内\u003cbr\u003e　ボイス台座：直径62mm×H15mm\u003cbr\u003e　アクリル台座：W50mm×H50mm\u003cbr\u003e　※本体はバリエーションによってサイズが異なります\u003cbr\u003e・ボイス：各5種入り\u003cbr\u003e　※ライバーによって、ボイスの長さや内容が異なります\u003cbr\u003e・素材：アクリル、ABS\u003cbr\u003e・電池：LR44　2個\u003cbr\u003e※本商品はお1人様1会計につき、各5点までのご購入とさせていただきます。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cfigure\u003e\u003cimg src=\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/46aa4a29c8b84014a418219ed3a948a0/896_%E5%AD%A6%E5%9C%92%E3%82%94%E3%81%89%E3%82%8B%E3%81%9F%E3%81%8F%E3%81%97%E3%82%87%E3%82%93_%E7%BC%B6%E3%83%90%E3%83%83%E3%82%B8.png\" alt=\"\" width=\"896\" height=\"896\"\u003e\u003c/figure\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003cstrong\u003e\u003cu\u003e■ランダム箔押し缶バッジ\u003c/u\u003e\u003c/strong\u003e\u003cbr\u003e・価格：650円(税込)\u003cbr\u003e・種類：全12種ランダム\u003cbr\u003e・サイズ(約)：直径57mm\u003cbr\u003e・素材：紙、PP\u003cbr\u003e※本商品はお1人様1会計につき、40点までのご購入とさせていただきます。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cfigure\u003e\u003cimg src=\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/4c007f95afc34b0faceda83d550fa9f8/896_%E5%AD%A6%E5%9C%92%E3%82%94%E3%81%89%E3%82%8B%E3%81%9F%E3%81%8F%E3%81%97%E3%82%87%E3%82%93_%E3%83%9E%E3%82%B9%E3%82%B3%E3%83%83%E3%83%88.png\" alt=\"\" width=\"896\" height=\"896\"\u003e\u003c/figure\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003cstrong\u003e\u003cu\u003e■セーラーマスコット\u003c/u\u003e\u003c/strong\u003e\u003cbr\u003e・価格：各3,000円(税込)\u003cbr\u003e・種類：全4種\u003cbr\u003e・サイズ(約)：W100mm×H125mm×D50mm\u003cbr\u003e・素材：ポリエステル、真鍮\u003cbr\u003e※本商品はお1人様1会計につき、各5点までのご購入とさせていただきます。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cfigure\u003e\u003cimg src=\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/79416e0de13f4cb6b79a8be3ab4eec0e/896_%E5%AD%A6%E5%9C%92%E3%82%94%E3%81%89%E3%82%8B%E3%81%9F%E3%81%8F%E3%81%97%E3%82%87_%E3%82%A2%E3%82%AF%E3%83%AA%E3%83%AB%E3%83%96%E3%83%AD%E3%83%83%E3%82%AF.png\" alt=\"\" width=\"896\" height=\"896\"\u003e\u003c/figure\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003cstrong\u003e\u003cu\u003e■アクリルブロック\u003c/u\u003e\u003c/strong\u003e\u003cbr\u003e・価格：各2,500円(税込)\u003cbr\u003e・種類：全4種\u003cbr\u003e・サイズ(約)：W120mm×H80mm×D20mm\u003cbr\u003e・素材：アクリル\u003cbr\u003e※本商品はお1人様1会計につき、各5点までのご購入とさせていただきます。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cfigure\u003e\u003cimg src=\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/98c3948eba5e4cf08ec2e71ff051dfa3/thumbnail_acrylickeychain_1-01.png?w=896\u0026amp;h=896\" alt=\"\" width=\"896\" height=\"896\"\u003e\u003c/figure\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003cstrong\u003e\u003cu\u003e■好感度？？アクリルキーホルダー\u003c/u\u003e\u003c/strong\u003e\u003cbr\u003e・価格：各1,400円(税込)\u003cbr\u003e・種類：全4種\u003cbr\u003e・サイズ(約)\u003cbr\u003e　本体：W80mm×H50mm\u003cbr\u003e　カラビナ：W61mm×H75mm\u003cbr\u003e　ビーズチャーム：W120mm×H5mm\u003c/p\u003e\u003cp\u003e・素材：アクリル、ガラス、鉄\u003cbr\u003e※本商品はお1人様1会計につき、各5点までのご購入とさせていただきます。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cfigure\u003e\u003cimg src=\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/51dc6ad65ff6402083915b7e8629c348/896_%E5%AD%A6%E5%9C%92%E3%82%94%E3%81%89%E3%82%8B%E3%81%9F%E3%81%8F%E3%81%97%E3%82%87%E3%82%93_%E3%83%98%E3%82%A2%E3%82%AF%E3%83%AA%E3%83%83%E3%83%97.png\" alt=\"\" width=\"896\" height=\"896\"\u003e\u003c/figure\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003cstrong\u003e\u003cu\u003e■ヘアクリップセット\u003c/u\u003e\u003c/strong\u003e\u003cbr\u003e・価格：各1,500円(税込)\u003cbr\u003e・種類：全4種\u003cbr\u003e・サイズ(約)：W58mm×H59mm\u003cbr\u003e　※バリエーションによってサイズが異なります\u003cbr\u003e・素材：PVC、鉄\u003cbr\u003e※本商品はお1人様1会計につき、各5点までのご購入とさせていただきます。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cfigure\u003e\u003cimg src=\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/183e43198dff496a84ad078f80059611/896_%E5%AD%A6%E5%9C%92%E3%82%94%E3%81%89%E3%82%8B%E3%81%9F%E3%81%8F%E3%81%97%E3%82%87%E3%82%93_%E4%BB%98%E7%AE%8B.png\" alt=\"\" width=\"896\" height=\"896\"\u003e\u003c/figure\u003e\u003cfigure\u003e\u003cimg src=\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/fd9670d48b474716b5806d0ff10badbc/896_%E5%AD%A6%E5%9C%92%E3%82%94%E3%81%89%E3%82%8B%E3%81%9F%E3%81%8F%E3%81%97%E3%82%87%E3%82%93_%E4%BB%98%E7%AE%8B_%E7%8F%BE%E7%89%A9.png\" alt=\"\" width=\"896\" height=\"896\"\u003e\u003c/figure\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003cstrong\u003e\u003cu\u003e■ハンサム付箋ブック\u003c/u\u003e\u003c/strong\u003e\u003cbr\u003e・価格：各2,200円(税込)\u003cbr\u003e・種類：全4種\u003cbr\u003e・サイズ(約)\u003cbr\u003e　ブック台紙：W100mm×H100mm×D8mm\u003cbr\u003e　付箋：W70mm×H70mm以内（30枚綴り各2セット）　\u003cbr\u003e　※バリエーションによってサイズが異なります\u003c/p\u003e\u003cp\u003e・素材：紙\u003cbr\u003e※本商品はお1人様1会計につき、各5点までのご購入とさせていただきます。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cfigure\u003e\u003cimg src=\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/47bf3f362e7d42c996ee600318e05c27/896_%E5%AD%A6%E5%9C%92%E3%82%94%E3%81%89%E3%82%8B%E3%81%9F%E3%81%8F%E3%81%97%E3%82%87_%E3%82%B3%E3%83%AC%E3%82%AF%E3%83%88%E3%83%96%E3%83%83%E3%82%AF.png\" alt=\"\" width=\"896\" height=\"896\"\u003e\u003c/figure\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003cstrong\u003e\u003cu\u003e■コレクトブック\u003c/u\u003e\u003c/strong\u003e\u003cbr\u003e・価格：各2,000円(税込)\u003cbr\u003e・種類：全4種\u003cbr\u003e・サイズ(約)：W90mm×H116mm×D25mm\u003cbr\u003e・素材：PVC、PP\u003cbr\u003e※本商品はお1人様1会計につき、各5点までのご購入とさせていただきます。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cfigure\u003e\u003cimg src=\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/ac99a3a5b50d4cb9bbbafd1f6f29b42f/896_%E5%AD%A6%E5%9C%92%E3%82%94%E3%81%89%E3%82%8B%E3%81%9F%E3%81%8F%E3%81%97%E3%82%87%E3%82%93_%E7%94%9F%E5%BE%92%E6%89%8B%E5%B8%B3.png\" alt=\"\" width=\"896\" height=\"896\"\u003e\u003c/figure\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003cstrong\u003e\u003cu\u003e■生徒手帳風ノート＆ボールペンセット\u003c/u\u003e\u003c/strong\u003e\u003cbr\u003e・価格：各3,000円(税込)\u003cbr\u003e・種類：全4種\u003cbr\u003e・サイズ(約)：\u003cbr\u003e　ボールペン：W37mm×H144mm　\u003cbr\u003e　※バリエーションによってサイズが異なります\u003cbr\u003e　手帳：W95mm×H135mm（80P）\u003c/p\u003e\u003cp\u003e・素材：PVC、紙、ABS\u003cbr\u003e※本商品はお1人様1会計につき、各5点までのご購入とさせていただきます。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cfigure\u003e\u003cimg src=\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/8ea0db779e964ea988602cf7da64222a/896_%E5%AD%A6%E5%9C%92%E3%82%94%E3%81%89%E3%82%8B%E3%81%9F%E3%81%8F%E3%81%97%E3%82%87%E3%82%93_%E3%82%AB%E3%83%BC%E3%83%87%E3%82%A3%E3%82%AC%E3%83%B3.png\" alt=\"\" width=\"896\" height=\"896\"\u003e\u003c/figure\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003cstrong\u003e\u003cu\u003e■カーディガン\u003c/u\u003e\u003c/strong\u003e\u003cbr\u003e・価格：8,000円(税込)\u003cbr\u003e・種類：全1種\u003cbr\u003e・サイズ(約)：身丈 66cm / 身幅 58.5cm / 肩幅 61cm / 袖丈 47cm\u003cbr\u003e・素材：ポリエステル、レーヨン、綿、ナイロン\u003cbr\u003e※本商品はお1人様1会計につき、5点までのご購入とさせていただきます。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cfigure\u003e\u003cimg src=\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/81802aa81438453d94c2778b37c5ce77/896_%E5%AD%A6%E5%9C%92%E3%82%94%E3%81%89%E3%82%8B%E3%81%9F%E3%81%8F%E3%81%97%E3%82%87%E3%82%93_%E3%82%A2%E3%82%AF%E3%83%AA%E3%83%AB%E3%83%91%E3%83%8D%E3%83%AB.png\" alt=\"\" width=\"896\" height=\"896\"\u003e\u003c/figure\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003cstrong\u003e\u003cu\u003e■ダイカットアクリルパネル\u003c/u\u003e\u003c/strong\u003e\u003cbr\u003e・価格：各2,400円(税込)\u003cbr\u003e・種類：全4種\u003cbr\u003e・サイズ(約)：W153mm×H165mm\u003cbr\u003e　※バリエーションによってサイズが異なります\u003cbr\u003e・素材：アクリル、鉄\u003cbr\u003e※本商品はお1人様1会計につき、各5点までのご購入とさせていただきます。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cfigure\u003e\u003cimg src=\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/f8b6011a6ff24ff9829932392d7978f9/896_%E5%AD%A6%E5%9C%92%E3%82%94%E3%81%89%E3%82%8B%E3%81%9F%E3%81%8F%E3%81%97%E3%82%87%E3%82%93_%E3%81%AB%E3%81%98%E3%82%AF%E3%83%AD%E3%83%BC%E3%82%BC%E3%83%83%E3%83%88.png\" alt=\"\" width=\"896\" height=\"896\"\u003e\u003c/figure\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003cstrong\u003e\u003cu\u003e■セーラー服 みずいろ / ベージュ 【にじいろクローゼット】\u003c/u\u003e\u003c/strong\u003e\u003cbr\u003e・価格：各2,300円(税込)\u003cbr\u003e・種類：全2種\u003cbr\u003e・サイズ(約)\u003cbr\u003e　帽子：直径90mm×D15mm\u003cbr\u003e　トップス：W80mm×H50mm×D10mm\u003cbr\u003e　パンツ：W70mm×H25mm×D8mm\u003cbr\u003e　スカート：W75mm×H26mm×D10mm\u003c/p\u003e\u003cp\u003e・素材：ポリエステル、合成ゴム\u003cbr\u003e※本商品はお1人様1会計につき、各5点までのご購入とさせていただきます。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003ch2 id=\"hd3672a4607\"\u003eにじさんじオフィシャルストア特典\u003c/h2\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003eにじさんじオフィシャルストアにて「学園ゔぉるたくしょん」グッズを購入すると、お買い上げ3,000円(税込)ごとに「ホログラムステッカー(全16種)」をランダムで1点プレゼントいたします。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cfigure\u003e\u003cimg src=\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/81cee8a80c0049a7b1d902db54b12b3c/%E5%AD%A6%E5%9C%92%E3%82%94%E3%81%89%E3%82%8B%E3%81%9F%E3%81%8F%E3%81%97%E3%82%87%E3%82%93_%E7%89%B9%E5%85%B8_%E3%82%B9%E3%83%86%E3%83%83%E3%82%AB%E3%83%BC.png?w=896\u0026amp;h=896\" alt=\"\" width=\"896\" height=\"896\"\u003e\u003c/figure\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e・サイズ(約)：W60mm×H59mm以内\u003cbr\u003e　※バリエーションによりサイズが異なります\u003cbr\u003e・素材：紙、PP\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e※デザインはお選びいただけません。\u003cbr\u003e※1会計 商品合計3,000円(税込)ごとに1枚プレゼントいたします。\u003cbr\u003e※1会計でプレゼントされる特典の最大数は20点までとなります。\u003cbr\u003e※特典の数には限りがございます。特典の在庫がある場合、付与条件を達成時にショッピングカート内に特典が付与されます。また、ご注文完了後はご注文履歴にて付与状況のご確認が可能です。商品のご購入時に特典の在庫が無くなっていた場合には、商品に特典は付与されませんのでご留意ください。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003ch2 id=\"h4d56477edb\"\u003e発売を記念した3Dコラボ配信も実施！\u003c/h2\u003e\u003cp\u003e\u003c/p\u003e\u003cfigure\u003e\u003cimg src=\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/6d13ce5334c747cc93d97963679c6a0f/896_%E3%83%B4%E3%82%A9%E3%83%AB%E3%82%BF%E3%81%A8%E3%82%A2%E3%82%AA%E3%83%8F%E3%83%AB%E3%81%97%E3%81%A6%E3%81%BF%E3%81%AA%E3%81%84_%E9%85%8D%E4%BF%A1%E3%82%B5%E3%83%A0%E3%83%8D%E3%82%A4%E3%83%AB.jpg\" alt=\"\" width=\"896\" height=\"504\"\u003e\u003c/figure\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e2026年4月8日(水)19時よりVOLTACTION公式YouTubeチャンネルにて、VOLTACTIONの4名による「【ヴォルタとアオハル】もしも #VOLTACTION と⼀緒のクラスだったら・・・？」の配信も決定！\u003c/p\u003e\u003cp\u003e詳細は後日VOLTACTION公式X(旧Twitter)にてお知らせいたします！\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003ch2 id=\"hb7d5969e95\"\u003eイラストレーター、グッズデザイン\u003c/h2\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003cstrong\u003e\u003cu\u003e■等身、バストアップビジュアル\u003c/u\u003e\u003c/strong\u003e\u003cbr\u003eWAGO 様(\u003ca href=\"https://x.com/WAGO_00\"\u003ehttps://x.com/WAGO_00\u003c/a\u003e)\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003cstrong\u003e\u003cu\u003e■一枚絵ビジュアル（風楽奏斗、渡会雲雀）\u003c/u\u003e\u003c/strong\u003e\u003cbr\u003eイサム 様(\u003ca href=\"https://x.com/ISUMI_136\"\u003ehttps://x.com/ISUMI_136\u003c/a\u003e)\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003cstrong\u003e\u003cu\u003e■一枚絵ビジュアル（四季凪アキラ、セラフ・ダズルガーデン）\u003c/u\u003e\u003c/strong\u003e\u003cbr\u003ekawa 様(\u003ca href=\"https://x.com/_kawausoman_\"\u003ehttps://x.com/_kawausoman_\u003c/a\u003e)\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003cstrong\u003e\u003cu\u003e■わんにゃくしょん！ビジュアル\u003c/u\u003e\u003c/strong\u003e\u003cbr\u003e西田ユウ 様(\u003ca href=\"https://x.com/nishida_yuu\"\u003ehttps://x.com/nishida_yuu\u003c/a\u003e)\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003cstrong\u003e■グッズデザイン\u003c/strong\u003e\u003cbr\u003e草野剛デザイン事務所 様 (\u003ca href=\"https://x.com/kusano_design\"\u003ehttps://x.com/kusano_design\u003c/a\u003e)\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003ch2 id=\"hde4d530b8c\"\u003e販売概要\u003c/h2\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e・販売開始日時：2026年4月3日(金)18時～\u003cbr\u003e・発送予定\u003cbr\u003e『セーラーマスコット』『セーラー服』：2026年5月中旬以降\u003cbr\u003e『セーラーマスコット』『セーラー服』以外の商品：2026年4月上旬以降\u003cbr\u003e※「好感度？？アクリルキーホルダー」「ヘアクリップセット」のみ2026年4月発送予定と2026年5月発送予定がございます。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e・販売サイト：にじさんじオフィシャルストア\u003cbr\u003e・販売ページ：\u003ca href=\"https://shop.nijisanji.jp/TAG_914\"\u003ehttps://shop.nijisanji.jp/TAG_914\u003c/a\u003e\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e※それぞれの画像はイメージ図です。実際と異なる場合がございます。\u003cbr\u003e※倉庫状況によって、発送が前後する場合がございます。\u003cbr\u003e※複数商品をご注文の場合、すべての商品が揃い次第のお届けとなりますのでご注意ください。\u003cbr\u003e※発送時期に関するお問い合わせに対してはお答えできません。\u003cbr\u003e 「出荷完了のお知らせ」メールが届くまでお待ちください。\u003cbr\u003e※本商品は今後再販売を行う可能性がございます。\u003cbr\u003e※各商品は今後の状況により価格を改定させていただく可能性がございます。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003eまた、新たな情報に関しては下記の公式SNS等にて随時更新いたします。\u003cbr\u003e・にじさんじ公式X：\u003ca href=\"https://x.com/nijisanji_app\"\u003ehttps://x.com/nijisanji_app\u003c/a\u003e\u003cbr\u003e・Xハッシュタグ：#学園ゔぉるたくしょん\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003ch2 id=\"hde742f6bb6\"\u003eStart With NIJISANJIも開催中！\u003c/h2\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e2026年3月23日(月)9時よりあなたの新しい毎日を、にじさんじライバーたちが応援するキャンペーンを開催しています。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cfigure\u003e\u003cimg src=\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/5d85c40c348b4b24b750bac441e4b1e6/896_Start%20With%20NIJISANJI.png\" alt=\"\" width=\"896\" height=\"504\"\u003e\u003c/figure\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e詳細は、Start With NIJISANJI特設サイト(\u003ca href=\"https://lp.shop.nijisanji.jp/StartWithNIJISANJI/\"\u003ehttps://lp.shop.nijisanji.jp/StartWithNIJISANJI/\u003c/a\u003e)をご確認ください。\u003c/p\u003e"
        ])
    </script>
    <script>
        self.__next_f.push([1, "14:T133b,"])
    </script>
    <script>
        self.__next_f.push([1,
            "\u003ch2 id=\"hc6f34c384d\"\u003e「2026台北國際動漫節」に「VOLTACTION」「3SKM」が出展決定！\u003c/h2\u003e\u003cp\u003e\u003c/p\u003e\u003cfigure\u003e\u003cimg src=\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/41d700f277ce4e1f90a254f6a0b6ac47/%E5%8F%B0%E5%8C%97%E5%9C%8B%E9%9A%9B%E5%8B%95%E6%BC%AB%E7%AF%80_press.png\" alt=\"\" width=\"1000\" height=\"563\"\u003e\u003c/figure\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e2026年2月5日(木)から2026年2月9日(月)に台湾・台北南港展覧館1館にて開催される「2026台北國際動漫節」へ出展いたします。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e▼「2026台北國際動漫節」公式サイト\u003c/p\u003e\u003cp\u003e\u003ca href=\"https://www.ccpa.org.tw/tica/index.php?tpl=11\"\u003ehttps://www.ccpa.org.tw/tica/index.php?tpl=11\u003c/a\u003e\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e期間中には既存グッズの販売の他、台湾限定の購入者特典を配布いたします。\u003c/p\u003e\u003cp\u003eまた、2026年2月8日(日)13:00(現地時間)から「VOLTACTION」「3SKM」のステージ出演も決定いたしました。\u003c/p\u003e\u003cp\u003e詳細は記事後半をご覧ください。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003ch2 id=\"h7bca8f8f12\"\u003e\u003cstrong\u003eブース出展情報\u003c/strong\u003e\u003c/h2\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e「2026台北國際動漫節」では、ステージ出演の実施に伴いにじさんじブースを出展いたします。\u003c/p\u003e\u003cp\u003eにじさんじブースではステージ出演者のグッズの再販売を行うほか、本イベント限定の撮り下ろし動画の放映を実施予定です。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e・VOLTACTIONからのメッセージ動画\u003c/p\u003e\u003cp\u003e・3SKMからのメッセージ動画\u003c/p\u003e\u003cp\u003e・VOLTACTION×3SKMからのメッセージ動画\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e※販売グッズ及び種類はイベント当日の状況で変動する場合がございますので、予めご了承ください。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cfigure\u003e\u003cimg src=\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/3bd8b7abef664f3f8d77de5919e22761/menu_b1_ol.png\" alt=\"\" width=\"896\" height=\"1265\"\u003e\u003c/figure\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e■【販売特典】\u003c/p\u003e\u003cp\u003eイベント期間中、にじさんじブースにてグッズを購入いただくと、お買い上げ税込600NTD(ニュー台湾ドル)ごとに「ランダムクリアブロマイド(全7種)」を１枚プレゼント！\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e※特典はなくなり次第終了となります。\u003c/p\u003e\u003cp\u003e※本特典は第三者への譲渡・オークション等の転売は一切禁止しております。\u003c/p\u003e\u003cp\u003e※特典はお選びいただけません。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cfigure\u003e\u003cimg src=\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/4bb46fa8005c4b06ad6b474e897f337d/%E5%8F%B0%E5%8C%97%E5%9C%8B%E9%9A%9B%E5%8B%95%E6%BC%AB%E7%AF%80_02.png\" alt=\"\" width=\"896\" height=\"672\"\u003e\u003c/figure\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e■グッズ販売場所\u003c/p\u003e\u003cp\u003e・会場：台湾・台北南港展覧館1館 日本館にじさんじブース\u003c/p\u003e\u003cp\u003e・期間：2026年2月5日(木)〜2026年2月9日(月)\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e「2026台北國際動漫節」ステージ出演情報\u003c/p\u003e\u003cp\u003e・日時：2026年2月8日(日)13:00〜(現地時間)\u003c/p\u003e\u003cp\u003e・会場：台湾・台北南港展覧館1館 ICHIBAN JAPAN日本館ステージ\u003c/p\u003e\u003cp\u003e・出演者：VOLTACTION(風楽奏斗/渡会雲雀/四季凪アキラ/セラフ・ダズルガーデン)、3SKM(北見遊征/魁星/榊ネス)\u003c/p\u003e\u003cp\u003eステージに関する詳細は今後公開される続報をお待ちください。\u003c/p\u003e\u003cp\u003e※リモートでの出演となります。\u003c/p\u003e\u003cp\u003e※当公演につきまして配信の予定はございません\u003c/p\u003e\u003cp\u003e※本ステージ出演はイベント当日の状況で変動する場合がございますので、予めご了承ください。\u003c/p\u003e\u003cp\u003e本ステージでは入場券を用いたご案内を予定しております。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003eブース出展日の2026年2月5日(木)から2026年2月8日(日)に、出演会場の日本館にじさんじブースにて税込700NTD(ニュー台湾ドル)以上ご購入いただいたお客様へ「VOLTACTION」「3SKM」出演ステージ観覧入場券を先着300名様へ配布いたします。\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e■配布予定枚数\u003c/p\u003e\u003cp\u003e・2026年2月5日(木)〜2026年2月7日(土)：各日60枚\u003c/p\u003e\u003cp\u003e・2026年2月8日(日／ステージ出演日)：120枚\u003c/p\u003e\u003cp\u003e\u003c/p\u003e\u003cp\u003e※入場券をお持ちでないお客様につきましては、本ステージを観覧いただけません。\u003c/p\u003e\u003cp\u003e※入場券はお一人様1枚までとなります。\u003c/p\u003e\u003cp\u003e※入場時は券面に記載の整列番号に従ってお並びください。\u003c/p\u003e\u003cp\u003e※整列番号はランダムです。入場券の銀色スクラッチ部分を削って、整列番号をご確認ください。\u003c/p\u003e\u003cp\u003e※日ごとに配布枚数が異なります。あらかじめご了承ください。\u003c/p\u003e\u003cp\u003e新たな情報に関しては、下記の公式SNS等にて随時更新いたします。\u003c/p\u003e\u003cp\u003e・にじさんじ公式X：\u003ca href=\"https://x.com/nijisanji_app\"\u003ehttps://x.com/nijisanji_app\u003c/a\u003e\u003c/p\u003e\u003cp\u003e・ハッシュタグ：#VOLTACTIONx3SKM台北國際動漫節\u003c/p\u003e"
        ])
    </script>
    <script>
        self.__next_f.push([1,
            "8:[\"$\",\"$L11\",null,{\"newsItems\":[{\"id\":\"lddxr3gahvd9\",\"createdAt\":\"2026-03-30T08:47:05.877Z\",\"updatedAt\":\"2026-03-30T09:57:18.792Z\",\"publishedAt\":\"2026-03-30T09:30:05.250Z\",\"revisedAt\":\"2026-03-30T09:57:18.792Z\",\"publishedAtForUser\":\"2026-03-29T15:00:00.000Z\",\"title\":\"2026年4月7日(火)から西武渋谷店にてポップアップストア「にじさんじ New Life POPUP ～せめよん＆VOLTACTION～」開催！\",\"category\":[{\"id\":\"4enhgcs77a\",\"createdAt\":\"2025-07-07T11:27:29.020Z\",\"updatedAt\":\"2025-07-07T11:28:05.514Z\",\"publishedAt\":\"2025-07-07T11:27:29.020Z\",\"revisedAt\":\"2025-07-07T11:28:05.514Z\",\"name\":\"Info\",\"slug\":\"info\"}],\"thumbnail\":{\"url\":\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/9e526f8b76b644359805e7418c1de318/896_KV.jpg\",\"height\":504,\"width\":896},\"content\":\"$12\"},{\"id\":\"mkpurwnfw\",\"createdAt\":\"2026-03-30T07:54:32.389Z\",\"updatedAt\":\"2026-03-30T09:11:08.507Z\",\"publishedAt\":\"2026-03-30T09:11:08.507Z\",\"revisedAt\":\"2026-03-30T09:11:08.507Z\",\"publishedAtForUser\":\"2026-03-29T15:00:00.000Z\",\"title\":\"「学園ゔぉるたくしょん」グッズが登場！2026年4月3日(金)18時から販売開始！\",\"category\":[{\"id\":\"waukevoasl1\",\"createdAt\":\"2025-05-28T07:09:29.898Z\",\"updatedAt\":\"2025-07-14T09:59:46.402Z\",\"publishedAt\":\"2025-07-14T09:59:46.402Z\",\"revisedAt\":\"2025-07-14T09:59:46.402Z\",\"name\":\"Goods\",\"slug\":\"goods\"}],\"thumbnail\":{\"url\":\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/314655c160274ba1adb31c5e94c67d85/896x504_%E5%AD%A6%E5%9C%92%E3%82%94%E3%81%89%E3%82%8B%E3%81%9F%E3%81%8F%E3%81%97%E3%82%87%E3%82%93_%E3%82%B5%E3%83%A0%E3%83%8D%E3%82%A4%E3%83%AB.png\",\"height\":504,\"width\":896},\"content\":\"$13\"},{\"id\":\"yd0t9ea42g\",\"createdAt\":\"2026-01-16T12:53:31.050Z\",\"updatedAt\":\"2026-01-16T13:09:02.829Z\",\"publishedAt\":\"2026-01-16T13:09:02.829Z\",\"revisedAt\":\"2026-01-16T13:09:02.829Z\",\"publishedAtForUser\":\"2026-01-14T15:00:00.000Z\",\"title\":\"「VOLTACTION」「3SKM」が2026年2月5日(木)から開催される「2026 第14屆 台北國際動漫節」に出展決定！さらにステージ出演も決定！\",\"category\":[{\"id\":\"6olz5p4j6y7i\",\"createdAt\":\"2025-05-28T07:09:06.975Z\",\"updatedAt\":\"2026-01-16T12:53:52.204Z\",\"publishedAt\":\"2026-01-16T12:53:52.204Z\",\"revisedAt\":\"2026-01-16T12:53:52.204Z\",\"name\":\"Live/Event\",\"slug\":\"live-event\"}],\"thumbnail\":{\"url\":\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/41d700f277ce4e1f90a254f6a0b6ac47/%E5%8F%B0%E5%8C%97%E5%9C%8B%E9%9A%9B%E5%8B%95%E6%BC%AB%E7%AF%80_press.png\",\"height\":563,\"width\":1000},\"content\":\"$14\"}],\"bannerItems\":[{\"fieldId\":\"banner\",\"title\":\"「学園ゔぉるたくしょん」グッズが登場！2026年4月3日(金)18時から販売開始！\",\"thumbnail\":{\"url\":\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/df5cc24cf7184157b18cac9179ff2222/704_%E5%AD%A6%E5%9C%92%E3%82%94%E3%81%89%E3%82%8B%E3%81%9F%E3%81%8F%E3%81%97%E3%82%87%E3%82%93_%E3%82%B5%E3%83%A0%E3%83%8D%E3%82%A4%E3%83%AB.png\",\"height\":396,\"width\":704},\"url\":\"https://voltaction-official.com/news/mkpurwnfw/\"},{\"fieldId\":\"banner\",\"title\":\"2026年4月7日(火)から西武渋谷店にてポップアップストア「にじさんじ New Life POPUP ～せめよん＆VOLTACTION～」開催！\",\"thumbnail\":{\"url\":\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/f55219eae33d4edc889c6dd718caeee0/704_KV.jpg\",\"height\":396,\"width\":704},\"url\":\"https://voltaction-official.com/news/lddxr3gahvd9/\"},{\"fieldId\":\"banner\",\"title\":\"「VOLTACTION」「3SKM」が2026年2月5日(木)から開催される「2026 第14屆 台北國際動漫節」に出展決定！さらにステージ出演も決定！\",\"thumbnail\":{\"url\":\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/41d700f277ce4e1f90a254f6a0b6ac47/%E5%8F%B0%E5%8C%97%E5%9C%8B%E9%9A%9B%E5%8B%95%E6%BC%AB%E7%AF%80_press.png\",\"height\":563,\"width\":1000},\"url\":\"https://voltaction-official.com/news/yd0t9ea42g/\"},{\"fieldId\":\"banner\",\"title\":\"VOLTACTIONと3SKMによるスペシャルユニットのオリジナル楽曲『Crashing Winners』が2026年1月5日(月)0時よりデジタルリリース！\",\"thumbnail\":{\"url\":\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/2207a8c90729483d94f221c153175be4/Crashing%20Winners_MV.jpg\",\"height\":1080,\"width\":1920},\"url\":\"https://voltaction-official.com/news/d7i4_js_tx/\"}],\"profileItems\":{\"id\":\"dummy-profile\",\"createdAt\":\"2024-05-14T12:00:00.000Z\",\"updatedAt\":\"2024-05-14T12:00:00.000Z\",\"publishedAt\":\"2024-05-14T12:00:00.000Z\",\"revisedAt\":\"2024-05-14T12:00:00.000Z\",\"keyvisual\":{\"fieldId\":\"keyvisual\",\"wide\":{\"url\":\"/assets/img/profile/ph_keyvisual.jpg\",\"width\":2436,\"height\":1409,\"alt\":\"VOLTACTION\"},\"narrow\":{\"url\":\"/assets/img/profile/ph_keyvisual_nrw.jpg\",\"width\":786,\"height\":520,\"alt\":\"VOLTACTION\"}},\"catchcopy\":{\"fieldId\":\"catchcopy\",\"black\":{\"url\":\"/assets/img/profile/ttl_catch_bk.svg\",\"width\":null,\"height\":null,\"alt\":\"狙うはNo.1ダンスボーカルユニット！\"},\"white\":{\"url\":\"/assets/img/profile/ttl_catch_wh.svg\",\"width\":null,\"height\":null,\"alt\":\"狙うはNo.1ダンスボーカルユニット！\"}},\"text\":\"「風楽奏斗」「渡会雲雀」「四季凪アキラ」「セラフ・ダズルガーデン」の4人で結成されたにじさんじバーチャルライバーユニット「VOLTACTION」。\u003cbr class=\\\"c-visible_nrw\\\"\u003e\u003cstrong\u003e「歌・ダンス・配信を通じて人々の日常を幸せにする」\u003c/strong\u003eという共通の思想のもと、日々活動している。\",\"members\":[{\"fieldId\":\"member\",\"name\":\"kanato\",\"thumbnail\":{\"url\":\"/assets/img/profile/th_kanato.png\",\"width\":592,\"height\":1532,\"alt\":\"風楽奏斗\"},\"large\":{\"url\":\"/assets/img/profile/ph_kanato.png\"},\"fullNameEn\":\"Fura\u003cbr\u003eKanato\",\"fullName\":[{\"url\":\"/assets/img/profile/txt_kanato.svg\",\"width\":null,\"height\":null,\"alt\":\"風楽奏斗\"}],\"sns\":[{\"fieldId\":\"sns\",\"name\":\"YouTube\",\"url\":\"https://www.youtube.com/@FuraKanato\"},{\"fieldId\":\"sns\",\"name\":\"X\",\"url\":\"https://x.com/KNTFR2434\"},{\"fieldId\":\"sns\",\"name\":\"TikTok\",\"url\":\"https://www.tiktok.com/@zeffiro_knt_hbr\"}]},{\"fieldId\":\"member\",\"name\":\"hibari\",\"thumbnail\":{\"url\":\"/assets/img/profile/th_hibari.png\",\"width\":592,\"height\":1588,\"alt\":\"渡会雲雀\"},\"large\":{\"url\":\"/assets/img/profile/ph_hibari.png\"},\"fullNameEn\":\"Watarai\u003cbr\u003eHibari\",\"fullName\":[{\"url\":\"/assets/img/profile/txt_hibari.svg\",\"width\":null,\"height\":null,\"alt\":\"渡会雲雀\"}],\"sns\":[{\"fieldId\":\"sns\",\"name\":\"YouTube\",\"url\":\"https://www.youtube.com/@WataraiHibari\"},{\"fieldId\":\"sns\",\"name\":\"X\",\"url\":\"https://x.com/watarai_hibari\"},{\"fieldId\":\"sns\",\"name\":\"TikTok\",\"url\":\"https://www.tiktok.com/@zeffiro_knt_hbr\"}]},{\"fieldId\":\"member\",\"name\":\"akira\",\"thumbnail\":{\"url\":\"/assets/img/profile/th_akira.png\",\"width\":592,\"height\":1618,\"alt\":\"四季凪アキラ\"},\"large\":{\"url\":\"/assets/img/profile/ph_akira.png\"},\"fullNameEn\":\"Shikinagi\u003cbr\u003eAkira\",\"fullName\":[{\"url\":\"/assets/img/profile/txt_akira.svg\",\"width\":null,\"height\":null,\"alt\":\"四季凪アキラ\"}],\"sns\":[{\"fieldId\":\"sns\",\"name\":\"YouTube\",\"url\":\"https://www.youtube.com/@ShikinagiAkira\"},{\"fieldId\":\"sns\",\"name\":\"X\",\"url\":\"https://x.com/Shikinagi_2434\"}]},{\"fieldId\":\"member\",\"name\":\"seraph\",\"thumbnail\":{\"url\":\"/assets/img/profile/th_seraph.png\",\"width\":592,\"height\":1686,\"alt\":\"セラフ・ダズルガーデン\"},\"large\":{\"url\":\"/assets/img/profile/ph_seraph.png\"},\"fullNameEn\":\"Seraph\u003cbr\u003eDazzlegarden\",\"fullName\":[{\"url\":\"/assets/img/profile/txt_seraph_01.svg\",\"width\":null,\"height\":null,\"alt\":\"セラフ・\"},{\"url\":\"/assets/img/profile/txt_seraph_02.svg\",\"width\":null,\"height\":null,\"alt\":\"ダズルガーデン\"}],\"sns\":[{\"fieldId\":\"sns\",\"name\":\"YouTube\",\"url\":\"https://www.youtube.com/@SeraphDazzlegarden\"},{\"fieldId\":\"sns\",\"name\":\"X\",\"url\":\"https://x.com/SerAph_DazZ\"},{\"fieldId\":\"sns\",\"name\":\"TikTok\",\"url\":\"https://www.tiktok.com/@seraph_dazz\"}]}]},\"discographyItems\":[{\"id\":\"xxty-i-q487v\",\"createdAt\":\"2026-01-16T13:13:07.544Z\",\"updatedAt\":\"2026-01-16T13:13:07.544Z\",\"publishedAt\":\"2026-01-16T13:13:07.544Z\",\"revisedAt\":\"2026-01-16T13:13:07.544Z\",\"releasedAt\":\"2026-01-04T15:00:00.000Z\",\"title\":\"Crashing Winners\",\"category\":[{\"id\":\"hu2917e4b9ep\",\"createdAt\":\"2025-05-28T07:10:44.246Z\",\"updatedAt\":\"2025-07-08T12:20:17.917Z\",\"publishedAt\":\"2025-05-28T07:10:44.246Z\",\"revisedAt\":\"2025-07-08T12:20:17.917Z\",\"name\":\"Single\",\"slug\":\"single\"}],\"thumbnail\":{\"url\":\"https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/792944d3e2b6400085307bdbbd23a8ae/CrashingWinners.jpg\",\"height\":3000,\"width\":3000},\"links\":[{\"fieldId\":\"link\",\"label\":\"各種配信サイト\",\"url\":\"https://accelnotes.lnk.to/voltaction_3skm_crashingwinners\"}],\"content\":[{\"fieldId\":\"trackList\",\"tracks\":[{\"fieldId\":\"track\",\"name\":\"Crashing Winners\",\"description\":\"Lyrics: 青柳諒（Arte Refact）　Music: 青柳諒（Arte Refact）　Arrangement: 青柳諒（Arte Refact）\"}]}]}]}]\n"
        ])
    </script>
    <script id="_next-gtm-init" data-nscript="afterInteractive">
            (function (w, l) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });

            })(window, 'dataLayer');
    </script>
    <script src="https://www.googletagmanager.com/gtm.js?id=GTM-5BFVV632" id="_next-gtm" data-ntpc="GTM"
        data-nscript="afterInteractive"></script><next-route-announcer
        style="position: absolute;"></next-route-announcer>
    <div class="l-wrapper">
        <div class="l-pagebg" data-in="1">
            <div class="l-pagebg__layer">
                <div class="l-pagebg__strip -black"></div>
                <div class="l-pagebg__strip -black"></div>
                <div class="l-pagebg__strip -black"></div>
            </div>
            <div class="l-pagebg__layer">
                <div class="l-pagebg__strip -color"></div>
                <div class="l-pagebg__strip -color"></div>
                <div class="l-pagebg__strip -color"></div>
            </div>
        </div>
        <div class="c-theme-switcher" data-view="1">
            <div class="c-theme-switcher__main">
                <div class="c-theme-switcher__inner"><span></span></div>
            </div>
            <div class="c-theme-switcher__att c-font_aqva">
                <div class="c-theme-switcher__att__inner">
                    <p class="c-theme-switcher__att__skew"><span class="c-theme-switcher__att__char">C</span><span
                            class="c-theme-switcher__att__char">h</span><span
                            class="c-theme-switcher__att__char">a</span><span
                            class="c-theme-switcher__att__char">n</span><span
                            class="c-theme-switcher__att__char">g</span><span
                            class="c-theme-switcher__att__char">e</span><span
                            class="c-theme-switcher__att__char">!</span></p>
                </div>
            </div>
        </div>
        <main class="l-main">
            <div class="top_keyvisual__TJ2oe">
                <div class="top_keyvisual__catchcopy___U4t4 c-font_aqva c-skew_rotate">
                    <div class="top_keyvisual__catchcopy__inner">
                        <div class="top_keyvisual__catchcopy__line__EXQFd">
                            <p data-text="dance" aria-label="{{ $catchcopy_line1 }}"
                                style="opacity: 1; translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                                <span class="top_keyvisual__catchcopy__text__SJo6t">
                                    @foreach(explode(' ', $catchcopy_line1) as $word)
                                        <span aria-hidden="true" style="opacity: 1;">
                                            @foreach(mb_str_split($word) as $char)
                                                <span class="c-splitText" aria-hidden="true"
                                                    style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">{{ $char }}</span>
                                            @endforeach
                                        </span>
                                        @if(!$loop->last) &nbsp; @endif
                                    @endforeach
                                </span>
                            </p>
                        </div>
                        <div class="top_keyvisual__catchcopy__line__EXQFd">
                            <p data-text="vocal" aria-label="{{ $catchcopy_line2 }}"
                                style="opacity: 1; translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                                <span class="top_keyvisual__catchcopy__text__SJo6t">
                                    @foreach(explode(' ', $catchcopy_line2) as $word)
                                        <span aria-hidden="true" style="opacity: 1;">
                                            @foreach(mb_str_split($word) as $char)
                                                <span class="c-splitText" aria-hidden="true"
                                                    style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">{{ $char }}</span>
                                            @endforeach
                                        </span>
                                        @if(!$loop->last) &nbsp; @endif
                                    @endforeach
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="top_keyvisual__ph__J5qRC">
                    <div class="top_keyvisual__ph__inner__RWnMR">
                        <div class="top_keyvisual__ph__shadow__j4xMW">
                            <div class="top_keyvisual__ph__item__5626N" data-charaid="1">
                                <div><span><img alt="" fetchpriority="high" loading="eager" width="1897" height="1547"
                                            decoding="async" data-nimg="1" class=""
                                            src="{{ url('assets/img/top/keyvisual/ph_chara1_shadow.png') }}"
                                            style="color: transparent; object-fit: cover;"></span></div>
                            </div>
                            <div class="top_keyvisual__ph__item__5626N" data-charaid="4">
                                <div><span><img alt="" fetchpriority="high" loading="eager" width="1897" height="1547"
                                            decoding="async" data-nimg="1" class=""
                                            src="{{ url('assets/img/top/keyvisual/ph_chara4_shadow.png') }}"
                                            style="color: transparent; object-fit: cover;"></span></div>
                            </div>
                            <div class="top_keyvisual__ph__item__5626N" data-charaid="3">
                                <div><span><img alt="" fetchpriority="high" loading="eager" width="1897" height="1547"
                                            decoding="async" data-nimg="1" class=""
                                            src="{{ url('assets/img/top/keyvisual/ph_chara3_shadow.png') }}"
                                            style="color: transparent; object-fit: cover;"></span></div>
                            </div>
                            <div class="top_keyvisual__ph__item__5626N" data-charaid="2">
                                <div><span><img alt="" fetchpriority="high" loading="eager" width="1897" height="1547"
                                            decoding="async" data-nimg="1" class=""
                                            src="{{ url('assets/img/top/keyvisual/ph_chara2_shadow.png') }}"
                                            style="color: transparent; object-fit: cover;"></span></div>
                            </div>
                        </div>
                        <div class="top_keyvisual__ph__chara__HeWiZ">
                            <div class="top_keyvisual__ph__item__5626N" data-charaid="1">
                                <div><span class="top_keyvisual__ph__gray__N4kq_"><img alt="" fetchpriority="high"
                                            loading="eager" width="1897" height="1547" decoding="async" data-nimg="1"
                                            class="" src="{{ url('assets/img/top/keyvisual/ph_chara1.png') }}"
                                            style="color: transparent; object-fit: cover;"></span><span
                                        class="top_keyvisual__ph__normal__QX7Wv"><img alt="" fetchpriority="high"
                                            loading="eager" width="1897" height="1547" decoding="async" data-nimg="1"
                                            class="" src="{{ url('assets/img/top/keyvisual/ph_chara1.png') }}"
                                            style="color: transparent; object-fit: cover;"></span></div>
                            </div>
                            <div class="top_keyvisual__ph__item__5626N" data-charaid="4">
                                <div><span class="top_keyvisual__ph__gray__N4kq_"><img alt="" fetchpriority="high"
                                            loading="eager" width="1897" height="1547" decoding="async" data-nimg="1"
                                            class="" src="{{ url('assets/img/top/keyvisual/ph_chara4.png') }}"
                                            style="color: transparent; object-fit: cover;"></span><span
                                        class="top_keyvisual__ph__normal__QX7Wv"><img alt="" fetchpriority="high"
                                            loading="eager" width="1897" height="1547" decoding="async" data-nimg="1"
                                            class="" src="{{ url('assets/img/top/keyvisual/ph_chara4.png') }}"
                                            style="color: transparent; object-fit: cover;"></span></div>
                            </div>
                            <div class="top_keyvisual__ph__item__5626N" data-charaid="3">
                                <div><span class="top_keyvisual__ph__gray__N4kq_"><img alt="" fetchpriority="high"
                                            loading="eager" width="1897" height="1547" decoding="async" data-nimg="1"
                                            class="" src="{{ url('assets/img/top/keyvisual/ph_chara3.png') }}"
                                            style="color: transparent; object-fit: cover;"></span><span
                                        class="top_keyvisual__ph__normal__QX7Wv"><img alt="" fetchpriority="high"
                                            loading="eager" width="1897" height="1547" decoding="async" data-nimg="1"
                                            class="" src="{{ url('assets/img/top/keyvisual/ph_chara3.png') }}"
                                            style="color: transparent; object-fit: cover;"></span></div>
                            </div>
                            <div class="top_keyvisual__ph__item__5626N" data-charaid="2">
                                <div><span class="top_keyvisual__ph__gray__N4kq_"><img alt="" fetchpriority="high"
                                            loading="eager" width="1897" height="1547" decoding="async" data-nimg="1"
                                            class="" src="{{ url('assets/img/top/keyvisual/ph_chara2.png') }}"
                                            style="color: transparent; object-fit: cover;"></span><span
                                        class="top_keyvisual__ph__normal__QX7Wv"><img alt="" fetchpriority="high"
                                            loading="eager" width="1897" height="1547" decoding="async" data-nimg="1"
                                            class="" src="{{ url('assets/img/top/keyvisual/ph_chara2.png') }}"
                                            style="color: transparent; object-fit: cover;"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top_keyvisual__line__mYec5"></div>
                <div class="top_keyvisual__navwarp__8D9Re">
                    <ul class="top_keyvisual__nav__PuypP c-font_aqva">
                        <li class="top_keyvisual__nav__item__6y3hf"><a href="{{ url('news/') }}" aria-label="News"><span
                                    class="top_keyvisual__nav__item__inner__vyQFK c-hover_underline"><span
                                        aria-hidden="true"><span class="c-splitText" aria-hidden="true"
                                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">N</span><span
                                            class="c-splitText" aria-hidden="true"
                                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">e</span><span
                                            class="c-splitText" aria-hidden="true"
                                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">w</span><span
                                            class="c-splitText" aria-hidden="true"
                                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">s</span></span></span></a>
                        </li>
                        <li class="top_keyvisual__nav__item__6y3hf"><a href="{{ url('profile/') }}"
                                aria-label="{{ $profile_title }}"><span
                                    class="top_keyvisual__nav__item__inner__vyQFK c-hover_underline"><span
                                        aria-hidden="true">
                                        @foreach(mb_str_split($profile_title) as $char)
                                            <span class="c-splitText" aria-hidden="true"
                                                style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">{{ $char }}</span>
                                        @endforeach
                                    </span></span></a>
                        </li>
                        <li class="top_keyvisual__nav__item__6y3hf"><a href="{{ url('discography/') }}"
                                aria-label="{{ $disco_title }}"><span
                                    class="top_keyvisual__nav__item__inner__vyQFK c-hover_underline"><span
                                        aria-hidden="true"><span class="c-splitText" aria-hidden="true"
                                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">D</span><span
                                            class="c-splitText" aria-hidden="true"
                                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">i</span><span
                                            class="c-splitText" aria-hidden="true"
                                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">s</span><span
                                            class="c-splitText" aria-hidden="true"
                                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">c</span><span
                                            class="c-splitText" aria-hidden="true"
                                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">o</span><span
                                            class="c-splitText" aria-hidden="true"
                                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">g</span><span
                                            class="c-splitText" aria-hidden="true"
                                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">r</span><span
                                            class="c-splitText" aria-hidden="true"
                                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">a</span><span
                                            class="c-splitText" aria-hidden="true"
                                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">p</span><span
                                            class="c-splitText" aria-hidden="true"
                                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">h</span><span
                                            class="c-splitText" aria-hidden="true"
                                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">y</span></span></span></a>
                        </li>
                        <li class="top_keyvisual__nav__item__6y3hf"><a href="https://shop.nijisanji.jp/DIG_TAG_74"
                                target="_blank" rel="noopener noreferrer" class="top_externalLink__9KYUk"
                                aria-label="Goods"><span
                                    class="top_keyvisual__nav__item__inner__vyQFK c-hover_underline"><span
                                        aria-hidden="true"><span class="c-splitText" aria-hidden="true"
                                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">G</span><span
                                            class="c-splitText" aria-hidden="true"
                                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">o</span><span
                                            class="c-splitText" aria-hidden="true"
                                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">o</span><span
                                            class="c-splitText" aria-hidden="true"
                                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">d</span><span
                                            class="c-splitText" aria-hidden="true"
                                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">s</span></span></span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="top_top_mainbox__HKC4T">
                <section class="top_latestnews__qe6X2 js-scroll_reveal">
                    <div></div>
                    <div class="c-toptitle -latestnews c-font_aqva">
                        <div class="c-toptitle__main">
                            <h2 class="c-toptitle__inner js-splittext"><span class="c-toptitle__line">News</span></h2>
                        </div>
                        <div class="c-toptitle__sholder c-skew_rotate">
                            <p class="c-toptitle__inner js-splittext"><span class="c-toptitle__line">What’s
                                    New?</span></p>
                        </div>
                        <div class="top_latestnews__more__w_GHm c-hover_op c-visible_nrw"><a
                                href="{{ url('news/') }}"><img alt="Read more" loading="lazy" width="185" height="34"
                                    decoding="async" data-nimg="1" class=""
                                    src="{{ url('assets/img/common/ui/btn_more.svg') }}"
                                    style="color: transparent; object-fit: cover;"></a></div>
                    </div>
                    <div class="top_latestnews__main__Wn6UW">
                        <div class="top_latestnews__le__nJ065">
                            <div class="top_info_banner__e4baM" data-animated="1">
                                <div class="swiper swiper-initialized swiper-horizontal swiper-backface-hidden">
                                    <div class="swiper-wrapper"
                                        style="transform: translate3d(-1890px, 0px, 0px); transition-duration: 0ms; transition-delay: 0ms;">
                                        <div class="swiper-slide swiper-slide-next" style="width: 630px;"
                                            data-swiper-slide-index="1">
                                            <div data-current="0">
                                                <div class="top_info_banner__image__2KmOY">
                                                    <div
                                                        class="top_info_banner__image__inner__vywVU top_info_banner__image__link__puBAx">
                                                        <a href="https://voltaction-official.com/news/lddxr3gahvd9/"
                                                            target="_blank" rel="noopener noreferrer"><span><img
                                                                    alt="2026年4月7日(火)から西武渋谷店にてポップアップストア「にじさんじ New Life POPUP ～せめよん＆VOLTACTION～」開催！"
                                                                    loading="lazy" width="720" height="405"
                                                                    decoding="async" data-nimg="1" class=""
                                                                    src="https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/f55219eae33d4edc889c6dd718caeee0/704_KV.jpg?w=720&amp;format=webp"
                                                                    style="color: transparent; object-fit: cover;"></span></a>
                                                    </div>
                                                </div>
                                                <div class="top_info_banner__slide__header__8VXDB">
                                                    <p class="top_info_banner__slide__title__NfdRP">
                                                        2026年4月7日(火)から西武渋谷店にてポップアップストア「にじさんじ New Life POPUP
                                                        ～せめよん＆VOLTACTION～」開催！</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="width: 630px;" data-swiper-slide-index="2">
                                            <div data-current="0">
                                                <div class="top_info_banner__image__2KmOY">
                                                    <div
                                                        class="top_info_banner__image__inner__vywVU top_info_banner__image__link__puBAx">
                                                        <a href="https://voltaction-official.com/news/yd0t9ea42g/"
                                                            target="_blank" rel="noopener noreferrer"><span><img
                                                                    alt="「VOLTACTION」「3SKM」が2026年2月5日(木)から開催される「2026 第14屆 台北國際動漫節」に出展決定！さらにステージ出演も決定！"
                                                                    loading="lazy" width="720" height="405"
                                                                    decoding="async" data-nimg="1" class=""
                                                                    src="https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/41d700f277ce4e1f90a254f6a0b6ac47/%E5%8F%B0%E5%8C%97%E5%9C%8B%E9%9A%9B%E5%8B%95%E6%BC%AB%E7%AF%80_press.png?w=720&amp;format=webp"
                                                                    style="color: transparent; object-fit: cover;"></span></a>
                                                    </div>
                                                </div>
                                                <div class="top_info_banner__slide__header__8VXDB">
                                                    <p class="top_info_banner__slide__title__NfdRP">
                                                        「VOLTACTION」「3SKM」が2026年2月5日(木)から開催される「2026 第14屆
                                                        台北國際動漫節」に出展決定！さらにステージ出演も決定！</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="3"
                                            style="width: 630px;">
                                            <div data-current="0">
                                                <div class="top_info_banner__image__2KmOY">
                                                    <div
                                                        class="top_info_banner__image__inner__vywVU top_info_banner__image__link__puBAx">
                                                        <a href="https://voltaction-official.com/news/d7i4_js_tx/"
                                                            target="_blank" rel="noopener noreferrer"><span><img
                                                                    alt="VOLTACTIONと3SKMによるスペシャルユニットのオリジナル楽曲『Crashing Winners』が2026年1月5日(月)0時よりデジタルリリース！"
                                                                    loading="lazy" width="720" height="405"
                                                                    decoding="async" data-nimg="1" class=""
                                                                    src="https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/2207a8c90729483d94f221c153175be4/Crashing%20Winners_MV.jpg?w=720&amp;format=webp"
                                                                    style="color: transparent; object-fit: cover;"></span></a>
                                                    </div>
                                                </div>
                                                <div class="top_info_banner__slide__header__8VXDB">
                                                    <p class="top_info_banner__slide__title__NfdRP">
                                                        VOLTACTIONと3SKMによるスペシャルユニットのオリジナル楽曲『Crashing
                                                        Winners』が2026年1月5日(月)0時よりデジタルリリース！</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-active" style="width: 630px;"
                                            data-swiper-slide-index="0">
                                            <div data-current="1">
                                                <div class="top_info_banner__image__2KmOY">
                                                    <div
                                                        class="top_info_banner__image__inner__vywVU top_info_banner__image__link__puBAx">
                                                        <a href="https://voltaction-official.com/news/mkpurwnfw/"
                                                            target="_blank" rel="noopener noreferrer"><span><img
                                                                    alt="「学園ゔぉるたくしょん」グッズが登場！2026年4月3日(金)18時から販売開始！"
                                                                    loading="lazy" width="720" height="405"
                                                                    decoding="async" data-nimg="1" class=""
                                                                    src="https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/df5cc24cf7184157b18cac9179ff2222/704_%E5%AD%A6%E5%9C%92%E3%82%94%E3%81%89%E3%82%8B%E3%81%9F%E3%81%8F%E3%81%97%E3%82%87%E3%82%93_%E3%82%B5%E3%83%A0%E3%83%8D%E3%82%A4%E3%83%AB.png?w=720&amp;format=webp"
                                                                    style="color: transparent; object-fit: cover;"></span></a>
                                                    </div>
                                                </div>
                                                <div class="top_info_banner__slide__header__8VXDB">
                                                    <p class="top_info_banner__slide__title__NfdRP">
                                                        「学園ゔぉるたくしょん」グッズが登場！2026年4月3日(金)18時から販売開始！</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="top_info_banner__pagenation__Sc8_F swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                                    <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span
                                        class="swiper-pagination-bullet"></span><span
                                        class="swiper-pagination-bullet"></span><span
                                        class="swiper-pagination-bullet"></span>
                                </div>
                            </div>
                            <section class="c-modal" data-active="0">
                                <div class="c-modal__inner"></div>
                                <div class="c-modal__close c-hover_op"><span class="c-modal__close__bar"></span><span
                                        class="c-modal__close__bar"></span></div>
                            </section>
                            <div class="top_latestnews__more__w_GHm c-hover_op c-visible_wide"><a
                                    href="{{ url('news/') }}"><img alt="Read more" loading="lazy" width="185"
                                        height="34" decoding="async" data-nimg="1" class=""
                                        src="{{ url('assets/img/common/ui/btn_more.svg') }}"
                                        style="color: transparent; object-fit: cover;"></a></div>
                        </div>
                        <div class="top_latestnews__ri__OD2DW">
                            <div class="top_latestnews__item__RmS44"><a class="c-hover_op"
                                    href="{{ url('news/lddxr3gahvd9/') }}">
                                    <div class="top_latestnews__item__header__3KVYt"><time datetime="2026-03-29"
                                            class="top_latestnews__item__header__date__e2_nD c-font_aqva"><span
                                                class="c-skew_rotate">03.29</span></time>
                                        <p class="top_latestnews__item__header__cat__jddBV">#Info</p>
                                    </div>
                                    <div class="top_latestnews__item__body__1KrCc">
                                        <p class="top_latestnews__item__text__1YKeq">
                                            <span>2026年4月7日(火)から西武渋谷店にてポップアップストア「にじさんじ New Life POPUP
                                                ～せめよん＆VOLTACTION～」開催！</span><span>2026年4月7日(火)から西武渋谷店にてポップアップストア「にじさんじ
                                                New Life POPUP ～せめよん＆VOLTACTION～」開催！</span>
                                        </p>
                                    </div>
                                </a></div>
                            <div class="top_latestnews__item__RmS44"><a class="c-hover_op"
                                    href="{{ url('news/mkpurwnfw/') }}">
                                    <div class="top_latestnews__item__header__3KVYt"><time datetime="2026-03-29"
                                            class="top_latestnews__item__header__date__e2_nD c-font_aqva"><span
                                                class="c-skew_rotate">03.29</span></time>
                                        <p class="top_latestnews__item__header__cat__jddBV">#Goods</p>
                                    </div>
                                    <div class="top_latestnews__item__body__1KrCc">
                                        <p class="top_latestnews__item__text__1YKeq">
                                            <span>「学園ゔぉるたくしょん」グッズが登場！2026年4月3日(金)18時から販売開始！</span><span>「学園ゔぉるたくしょん」グッズが登場！2026年4月3日(金)18時から販売開始！</span>
                                        </p>
                                    </div>
                                </a></div>
                            <div class="top_latestnews__item__RmS44"><a class="c-hover_op"
                                    href="{{ url('news/yd0t9ea42g/') }}">
                                    <div class="top_latestnews__item__header__3KVYt"><time datetime="2026-01-14"
                                            class="top_latestnews__item__header__date__e2_nD c-font_aqva"><span
                                                class="c-skew_rotate">01.14</span></time>
                                        <p class="top_latestnews__item__header__cat__jddBV">#Live/Event</p>
                                    </div>
                                    <div class="top_latestnews__item__body__1KrCc">
                                        <p class="top_latestnews__item__text__1YKeq">
                                            <span>「VOLTACTION」「3SKM」が2026年2月5日(木)から開催される「2026 第14屆
                                                台北國際動漫節」に出展決定！さらにステージ出演も決定！</span><span>「VOLTACTION」「3SKM」が2026年2月5日(木)から開催される「2026
                                                第14屆 台北國際動漫節」に出展決定！さらにステージ出演も決定！</span>
                                        </p>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                </section>
                <section class="top_profile__Gv8TZ js-scroll_reveal">
                    <div class="top_profile__line__Dht6R"></div>
                    <div class="top_profile__main__PT_xB">
                        <div class="c-toptitle -profile c-font_aqva">
                            <div class="c-toptitle__main">
                                <h2 class="c-toptitle__inner js-splittext"><span
                                        class="c-toptitle__line">{{ $profile_title }}</span>
                                </h2>
                            </div>
                            <div class="c-toptitle__sholder c-skew_rotate">
                                <p class="c-toptitle__inner js-splittext"><span
                                        class="c-toptitle__line">{{ $profile_subtitle }}</span></p>
                            </div>
                        </div>
                        <div class="top_profile__more__e1410 c-hover_op"><a href="{{ url('profile/') }}"><img
                                    alt="Read more" loading="lazy" width="185" height="34" decoding="async"
                                    data-nimg="1" class="" src="{{ url('assets/img/common/ui/btn_more.svg') }}"
                                    style="color: transparent; object-fit: cover;"></a></div>
                        <p class="top_profile__catchcopy__9RgiF">
                            <span>狙うはNo.1ダンスボーカルユニット!</span><span>狙うはNo.1ダンスボーカルユニット!</span>
                        </p>
                        <p class="top_profile__text__P5AZX">「風楽奏斗」「渡会雲雀」「四季凪アキラ」「セラフ・ダズルガーデン」の4人で結成されたにじさんじバーチャルライバーユ
                            ニット「VOLTACTION」。 <br>「歌・ダンス・配信を通じて人々の日常を幸せにする」という共通の思想のもと、日々活動している。</p>
                    </div>
                    <div class="top_profile__members__OX3Hj">
                        <div class="top_profile__members__chara__HJeW2" data-charaid="1"><a
                                href="{{ url('profile/#hibari') }}">
                                <div class="top_profile__members__charaimg__hg8je"><span><img alt="" loading="lazy"
                                            width="193" height="532" decoding="async" data-nimg="1" class=""
                                            src="{{ url('assets/img/top/profile/chara1.png') }}"
                                            style="color: transparent; object-fit: cover;"></span></div>
                                <p class="top_profile__members__charaname__l5lOW"><span><img alt="渡会雲雀 Watarai Hibari"
                                            loading="lazy" width="145" height="52" decoding="async" data-nimg="1"
                                            class="" src="{{ url('assets/img/top/profile/chara1_name.svg') }}"
                                            style="color: transparent; object-fit: cover;"></span></p>
                            </a></div>
                        <div class="top_profile__members__chara__HJeW2" data-charaid="3"><a
                                href="{{ url('profile/#akira') }}">
                                <div class="top_profile__members__charaimg__hg8je"><span><img alt="" loading="lazy"
                                            width="234" height="529" decoding="async" data-nimg="1" class=""
                                            src="{{ url('assets/img/top/profile/chara3.png') }}"
                                            style="color: transparent; object-fit: cover;"></span></div>
                                <p class="top_profile__members__charaname__l5lOW"><span><img
                                            alt="四季凪アキラ Shikinagi Akira" loading="lazy" width="164" height="54"
                                            decoding="async" data-nimg="1" class=""
                                            src="{{ url('assets/img/top/profile/chara3_name.svg') }}"
                                            style="color: transparent; object-fit: cover;"></span></p>
                            </a></div>
                        <div class="top_profile__members__chara__HJeW2" data-charaid="2"><a
                                href="{{ url('profile/#kanato') }}">
                                <div class="top_profile__members__charaimg__hg8je"><span><img alt="" loading="lazy"
                                            width="200" height="552" decoding="async" data-nimg="1" class=""
                                            src="{{ url('assets/img/top/profile/chara2.png') }}"
                                            style="color: transparent; object-fit: cover;"></span></div>
                                <p class="top_profile__members__charaname__l5lOW"><span><img alt="風楽奏斗 Fura Kanato"
                                            loading="lazy" width="125" height="52" decoding="async" data-nimg="1"
                                            class="" src="{{ url('assets/img/top/profile/chara2_name.svg') }}"
                                            style="color: transparent; object-fit: cover;"></span></p>
                            </a></div>
                        <div class="top_profile__members__chara__HJeW2" data-charaid="4"><a
                                href="{{ url('profile/#seraph') }}">
                                <div class="top_profile__members__charaimg__hg8je"><span><img alt="" loading="lazy"
                                            width="220" height="557" decoding="async" data-nimg="1" class=""
                                            src="{{ url('assets/img/top/profile/chara4.png') }}"
                                            style="color: transparent; object-fit: cover;"></span></div>
                                <p class="top_profile__members__charaname__l5lOW"><span><img
                                            alt="セラフ・ダズルガーデン Seraph Dazzlegarden" loading="lazy" width="220" height="87"
                                            decoding="async" data-nimg="1" class=""
                                            src="{{ url('assets/img/top/profile/chara4_name.svg') }}"
                                            style="color: transparent; object-fit: cover;"></span></p>
                            </a></div>
                    </div>
                </section>
                <section class="top_discography__o1qfY js-scroll_reveal">
                    <div class="top_discography__line1__x86_B"></div>
                    <div class="top_discography__line2__tCtG7"></div>
                    <div class="top_discography__header__nK_S5">
                        <div class="c-toptitle -discography c-font_aqva">
                            <div class="c-toptitle__main">
                                <h2 class="c-toptitle__inner js-splittext"><span
                                        class="c-toptitle__line">{{ $disco_title_1 }}<br>{{ $disco_title_2 }}</span>
                                </h2>
                            </div>
                            <div class="c-toptitle__sholder c-skew_rotate">
                                <p class="c-toptitle__inner js-splittext"><span
                                        class="c-toptitle__line">{{ $disco_subtitle }}</span></p>
                            </div>
                        </div>
                        <div class="top_discography__more__fExMM c-hover_op c-visible_wide"><a
                                href="{{ url('discography/') }}"><img alt="Read more" loading="lazy" width="185"
                                    height="34" decoding="async" data-nimg="1" class=""
                                    src="{{ url('assets/img/common/ui/btn_more.svg') }}"
                                    style="color: transparent; object-fit: cover;"></a></div>
                    </div>
                    <div class="top_discography__body__coM3Y">
                        <div class="top_discography__ph__4lPdP">
                            <div class="top_discography__ph__inner__HAxgN"><a
                                    href="{{ url('discography/xxty-i-q487v/') }}"><span><img alt="" loading="lazy"
                                            width="720" height="720" decoding="async" data-nimg="1" class=""
                                            src="https://images.microcms-assets.io/assets/42675a2dd37a4f2695ef745dd11e3bb7/792944d3e2b6400085307bdbbd23a8ae/CrashingWinners.jpg?w=720&amp;format=webp"
                                            style="color: transparent; object-fit: cover;"></span></a></div>
                        </div>
                        <div class="top_discography__info__t70um">
                            <div class="top_discography__info__head__nG2EM"><time datetime="2026-01-04">26.01.04
                                    Release</time>
                                <p class="top_discography__info__cat__XjMnd">#Single</p>
                            </div>
                            <p class="top_discography__info__name__Ooqur">Crashing Winners</p>
                            <div class="top_discography__more__fExMM c-hover_op c-visible_nrw"><a
                                    href="{{ url('discography/') }}"><img alt="Read more" loading="lazy" width="185"
                                        height="34" decoding="async" data-nimg="1" class=""
                                        src="{{ url('assets/img/common/ui/btn_more.svg') }}"
                                        style="color: transparent; object-fit: cover;"></a></div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        <ul class="top_topHeader__sns___KWza c-font_aqva">
            <li class="top_topHeader__sns__item__0OrXo"><a
                    href="https://www.youtube.com/channel/UCNRh9kkByBTYLo0IJupnAug" target="_blank"
                    rel="noopener noreferrer" class="c-hover_underline" aria-label="YouTube"><span
                        aria-hidden="true"><span class="c-splitText" aria-hidden="true"
                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">Y</span><span
                            class="c-splitText" aria-hidden="true"
                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">o</span><span
                            class="c-splitText" aria-hidden="true"
                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">u</span><span
                            class="c-splitText" aria-hidden="true"
                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">T</span><span
                            class="c-splitText" aria-hidden="true"
                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">u</span><span
                            class="c-splitText" aria-hidden="true"
                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">b</span><span
                            class="c-splitText" aria-hidden="true"
                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">e</span></span></a>
            </li>
            <li class="top_topHeader__sns__item__0OrXo"><a href="https://x.com/VOLTACTION_info" target="_blank"
                    rel="noopener noreferrer" class="c-hover_underline" aria-label="X"><span aria-hidden="true"><span
                            class="c-splitText" aria-hidden="true"
                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">X</span></span></a>
            </li>
            <li class="top_topHeader__sns__item__0OrXo"><a href="https://www.tiktok.com/@voltaction" target="_blank"
                    rel="noopener noreferrer" class="c-hover_underline" aria-label="TikTok"><span
                        aria-hidden="true"><span class="c-splitText" aria-hidden="true"
                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">T</span><span
                            class="c-splitText" aria-hidden="true"
                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">i</span><span
                            class="c-splitText" aria-hidden="true"
                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">k</span><span
                            class="c-splitText" aria-hidden="true"
                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">T</span><span
                            class="c-splitText" aria-hidden="true"
                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">o</span><span
                            class="c-splitText" aria-hidden="true"
                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">k</span></span></a>
            </li>
            <li class="top_topHeader__sns__item__0OrXo"><a href="https://www.instagram.com/voltaction_official/"
                    target="_blank" rel="noopener noreferrer" class="c-hover_underline" aria-label="Instagram"><span
                        aria-hidden="true"><span class="c-splitText" aria-hidden="true"
                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">I</span><span
                            class="c-splitText" aria-hidden="true"
                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">n</span><span
                            class="c-splitText" aria-hidden="true"
                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">s</span><span
                            class="c-splitText" aria-hidden="true"
                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">t</span><span
                            class="c-splitText" aria-hidden="true"
                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">a</span><span
                            class="c-splitText" aria-hidden="true"
                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">g</span><span
                            class="c-splitText" aria-hidden="true"
                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">r</span><span
                            class="c-splitText" aria-hidden="true"
                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">a</span><span
                            class="c-splitText" aria-hidden="true"
                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">m</span></span></a>
            </li>
        </ul>
        <footer class="l-footer">
            <div class="l-footer__le">
                <ul class="l-footer__nav c-font_aqva">
                    <li class="l-footer__nav__item"><a href="{{ url('/') }}"><span
                                class="c-hover_underline">Home</span></a>
                    </li>
                    <li class="l-footer__nav__item"><a href="{{ url('news/') }}"><span
                                class="c-hover_underline">News</span></a>
                    </li>
                    <li class="l-footer__nav__item"><a href="{{ url('profile/') }}"><span
                                class="c-hover_underline">{{ $profile_title }}</span></a></li>
                    <li class="l-footer__nav__item"><a href="{{ url('discography/') }}"><span
                                class="c-hover_underline">{{ $disco_title }}</span></a></li>
                    <li class="l-footer__nav__item"><a href="https://shop.nijisanji.jp/DIG_TAG_74" target="_blank"
                            rel="noopener noreferrer" class="l-footer__nav__external"><span
                                class="c-hover_underline">Goods</span></a></li>
                </ul>
                <ul class="l-footer__sns c-font_aqva">
                    <li class="l-footer__sns__item"><a href="https://www.youtube.com/channel/UCNRh9kkByBTYLo0IJupnAug"
                            target="_blank" rel="noopener noreferrer" class="c-hover_underline">YouTube</a></li>
                    <li class="l-footer__sns__item"><a href="https://x.com/VOLTACTION_info" target="_blank"
                            rel="noopener noreferrer" class="c-hover_underline">X</a></li>
                    <li class="l-footer__sns__item"><a href="https://www.tiktok.com/@voltaction" target="_blank"
                            rel="noopener noreferrer" class="c-hover_underline">TikTok</a></li>
                    <li class="l-footer__sns__item"><a href="https://www.instagram.com/voltaction_official/"
                            target="_blank" rel="noopener noreferrer" class="c-hover_underline">Instagram</a></li>
                </ul>
            </div>
            <div class="l-footer__ri">
                <ul class="l-footer__logo">
                    <li class="l-footer__logo__nijisanji c-hover_op"><a href="https://www.nijisanji.jp/" target="_blank"
                            rel="noopener noreferrer"><img alt="" loading="lazy" width="138" height="35"
                                decoding="async" data-nimg="1" class=""
                                src="{{ url('assets/img/common/footer/logo_nijisanji.svg') }}"
                                style="color: transparent; object-fit: cover;"></a></li>
                    <li class="l-footer__logo__anycolor c-hover_op"><a href="https://www.anycolor.co.jp/"
                            target="_blank" rel="noopener noreferrer"><img alt="" loading="lazy" width="58" height="44"
                                decoding="async" data-nimg="1" class=""
                                src="{{ url('assets/img/common/footer/logo_anycolor.svg') }}"
                                style="color: transparent; object-fit: cover;"></a></li>
                </ul>
                <p class="l-footer__copyright c-font_aqva">©ANYCOLOR, Inc.</p>
            </div>
        </footer>
        <p class="l-footer__pageup"><img alt="" loading="lazy" width="72" height="42" decoding="async" data-nimg="1"
                class="" src="{{ url('assets/img/common/ui/btn_pageup.svg') }}"
                style="color: transparent; object-fit: cover;"></p>
    </div>
</body>

</html>