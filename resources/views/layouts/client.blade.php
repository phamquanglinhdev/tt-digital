<!DOCTYPE html>
<!--[if IE 9]>
<html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en"> <!--<![endif]-->

<!-- Mirrored from cnvdigital.com/blogs/tin-tuc by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Dec 2021 03:19:46 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="RhjfpBP7dKIqxABajX8kVQwZRaie4g6SSUJv0Zj5">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Tin tức</title>
    <meta name="description" content="{{$title ?? "TT DIGITAL"}}">

    <meta name="keywords" content="{{$title ?? "TT DIGITAL"}}">
    <meta name="robots" content="index,follow,noodp">
    <meta property="og:type" content="website"/>
    <meta property="og:description"
          content="Cung cấp dịch vụ digital marketing facebook ads, google adwords, google shopping, native ads, zalo ads, youtube ads, google display network"/>
    <meta property="og:image" content="themes/default/images/share_cnv_digital.png"/>
    <meta property="og:url" content="{{route("index")}}"/>
    <meta property="og:site_name" content="{{route("index")}}"/>


    <base>
    <link rel="stylesheet" href="{{asset("themes/default/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("backend/css/plugins.css")}}">

    <style>
        .slick-slider {
            position: relative;
            display: block;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-touch-callout: none;
            -khtml-user-select: none;
            -ms-touch-action: pan-y;
            touch-action: pan-y;
            -webkit-tap-highlight-color: transparent
        }

        .slick-list {
            position: relative;
            display: block;
            overflow: hidden;
            margin: 0;
            padding: 0
        }

        .slick-list:focus {
            outline: 0
        }

        .slick-list.dragging {
            cursor: pointer;
            cursor: hand
        }

        .slick-slider .slick-list, .slick-slider .slick-track {
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }

        .slick-track {
            position: relative;
            top: 0;
            left: 0;
            display: block
        }

        .slick-track:after, .slick-track:before {
            display: table;
            content: ''
        }

        .slick-track:after {
            clear: both
        }

        .slick-loading .slick-track {
            visibility: hidden
        }

        .slick-slide {
            display: none;
            float: left;
            /*height: 100%;*/
            min-height: 1px
        }

        [dir=rtl] .slick-slide {
            float: right
        }

        .slick-slide img {
            display: block
        }

        .slick-slide.slick-loading img {
            display: none
        }

        .slick-slide.dragging img {
            pointer-events: none
        }

        .slick-initialized .slick-slide {
            display: block
        }

        .slick-loading .slick-slide {
            visibility: hidden
        }

        .slick-vertical .slick-slide {
            display: block;
            height: auto;
            border: 1px solid transparent
        }

        .slick-arrow.slick-hidden {
            display: none
        }

        .slick-slide, .slick-slide a, .slick-slide img, .slick-slide:active, .slick-slide:focus {
            outline: 0
        }
    </style>

    <style>
        .toast-title {
            font-weight: 700
        }

        .toast-message {
            -ms-word-wrap: break-word;
            word-wrap: break-word
        }

        .toast-message a, .toast-message label {
            color: #FFF
        }

        .toast-message a:hover {
            color: #CCC;
            text-decoration: none
        }

        .toast-close-button {
            position: relative;
            right: -.3em;
            top: -.3em;
            float: right;
            font-size: 20px;
            font-weight: 700;
            color: #FFF;
            -webkit-text-shadow: 0 1px 0 #fff;
            text-shadow: 0 1px 0 #fff;
            opacity: .8;
            -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=80);
            filter: alpha(opacity=80);
            line-height: 1
        }

        .toast-close-button:focus, .toast-close-button:hover {
            color: #000;
            text-decoration: none;
            cursor: pointer;
            opacity: .4;
            -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=40);
            filter: alpha(opacity=40)
        }

        .rtl .toast-close-button {
            left: -.3em;
            float: left;
            right: .3em
        }

        button.toast-close-button {
            padding: 0;
            cursor: pointer;
            background: 0 0;
            border: 0;
            -webkit-appearance: none
        }

        .toast-top-center {
            top: 0;
            right: 0;
            width: 100%
        }

        .toast-bottom-center {
            bottom: 0;
            right: 0;
            width: 100%
        }

        .toast-top-full-width {
            top: 0;
            right: 0;
            width: 100%
        }

        .toast-bottom-full-width {
            bottom: 0;
            right: 0;
            width: 100%
        }

        .toast-top-left {
            top: 12px;
            left: 12px
        }

        .toast-top-right {
            top: 12px;
            right: 12px
        }

        .toast-bottom-right {
            right: 12px;
            bottom: 12px
        }

        .toast-bottom-left {
            bottom: 12px;
            left: 12px
        }

        #toast-container {
            position: fixed;
            z-index: 999999;
            pointer-events: none
        }

        #toast-container * {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box
        }

        #toast-container > div {
            position: relative;
            pointer-events: auto;
            overflow: hidden;
            margin: 0 0 6px;
            padding: 15px 15px 15px 50px;
            width: 300px;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
            background-position: 15px center;
            background-repeat: no-repeat;
            -moz-box-shadow: 0 0 12px #999;
            -webkit-box-shadow: 0 0 12px #999;
            box-shadow: 0 0 12px #999;
            color: #FFF;
            opacity: .8;
            -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=80);
            filter: alpha(opacity=80)
        }

        #toast-container > div.rtl {
            direction: rtl;
            padding: 15px 50px 15px 15px;
            background-position: right 15px center
        }

        #toast-container > div:hover {
            -moz-box-shadow: 0 0 12px #000;
            -webkit-box-shadow: 0 0 12px #000;
            box-shadow: 0 0 12px #000;
            opacity: 1;
            -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
            filter: alpha(opacity=100);
            cursor: pointer
        }

        #toast-container > .toast-info {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGwSURBVEhLtZa9SgNBEMc9sUxxRcoUKSzSWIhXpFMhhYWFhaBg4yPYiWCXZxBLERsLRS3EQkEfwCKdjWJAwSKCgoKCcudv4O5YLrt7EzgXhiU3/4+b2ckmwVjJSpKkQ6wAi4gwhT+z3wRBcEz0yjSseUTrcRyfsHsXmD0AmbHOC9Ii8VImnuXBPglHpQ5wwSVM7sNnTG7Za4JwDdCjxyAiH3nyA2mtaTJufiDZ5dCaqlItILh1NHatfN5skvjx9Z38m69CgzuXmZgVrPIGE763Jx9qKsRozWYw6xOHdER+nn2KkO+Bb+UV5CBN6WC6QtBgbRVozrahAbmm6HtUsgtPC19tFdxXZYBOfkbmFJ1VaHA1VAHjd0pp70oTZzvR+EVrx2Ygfdsq6eu55BHYR8hlcki+n+kERUFG8BrA0BwjeAv2M8WLQBtcy+SD6fNsmnB3AlBLrgTtVW1c2QN4bVWLATaIS60J2Du5y1TiJgjSBvFVZgTmwCU+dAZFoPxGEEs8nyHC9Bwe2GvEJv2WXZb0vjdyFT4Cxk3e/kIqlOGoVLwwPevpYHT+00T+hWwXDf4AJAOUqWcDhbwAAAAASUVORK5CYII=) !important
        }

        #toast-container > .toast-error {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHOSURBVEhLrZa/SgNBEMZzh0WKCClSCKaIYOED+AAKeQQLG8HWztLCImBrYadgIdY+gIKNYkBFSwu7CAoqCgkkoGBI/E28PdbLZmeDLgzZzcx83/zZ2SSXC1j9fr+I1Hq93g2yxH4iwM1vkoBWAdxCmpzTxfkN2RcyZNaHFIkSo10+8kgxkXIURV5HGxTmFuc75B2RfQkpxHG8aAgaAFa0tAHqYFfQ7Iwe2yhODk8+J4C7yAoRTWI3w/4klGRgR4lO7Rpn9+gvMyWp+uxFh8+H+ARlgN1nJuJuQAYvNkEnwGFck18Er4q3egEc/oO+mhLdKgRyhdNFiacC0rlOCbhNVz4H9FnAYgDBvU3QIioZlJFLJtsoHYRDfiZoUyIxqCtRpVlANq0EU4dApjrtgezPFad5S19Wgjkc0hNVnuF4HjVA6C7QrSIbylB+oZe3aHgBsqlNqKYH48jXyJKMuAbiyVJ8KzaB3eRc0pg9VwQ4niFryI68qiOi3AbjwdsfnAtk0bCjTLJKr6mrD9g8iq/S/B81hguOMlQTnVyG40wAcjnmgsCNESDrjme7wfftP4P7SP4N3CJZdvzoNyGq2c/HWOXJGsvVg+RA/k2MC/wN6I2YA2Pt8GkAAAAASUVORK5CYII=) !important
        }

        #toast-container > .toast-success {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADsSURBVEhLY2AYBfQMgf///3P8+/evAIgvA/FsIF+BavYDDWMBGroaSMMBiE8VC7AZDrIFaMFnii3AZTjUgsUUWUDA8OdAH6iQbQEhw4HyGsPEcKBXBIC4ARhex4G4BsjmweU1soIFaGg/WtoFZRIZdEvIMhxkCCjXIVsATV6gFGACs4Rsw0EGgIIH3QJYJgHSARQZDrWAB+jawzgs+Q2UO49D7jnRSRGoEFRILcdmEMWGI0cm0JJ2QpYA1RDvcmzJEWhABhD/pqrL0S0CWuABKgnRki9lLseS7g2AlqwHWQSKH4oKLrILpRGhEQCw2LiRUIa4lwAAAABJRU5ErkJggg==) !important
        }

        #toast-container > .toast-warning {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGYSURBVEhL5ZSvTsNQFMbXZGICMYGYmJhAQIJAICYQPAACiSDB8AiICQQJT4CqQEwgJvYASAQCiZiYmJhAIBATCARJy+9rTsldd8sKu1M0+dLb057v6/lbq/2rK0mS/TRNj9cWNAKPYIJII7gIxCcQ51cvqID+GIEX8ASG4B1bK5gIZFeQfoJdEXOfgX4QAQg7kH2A65yQ87lyxb27sggkAzAuFhbbg1K2kgCkB1bVwyIR9m2L7PRPIhDUIXgGtyKw575yz3lTNs6X4JXnjV+LKM/m3MydnTbtOKIjtz6VhCBq4vSm3ncdrD2lk0VgUXSVKjVDJXJzijW1RQdsU7F77He8u68koNZTz8Oz5yGa6J3H3lZ0xYgXBK2QymlWWA+RWnYhskLBv2vmE+hBMCtbA7KX5drWyRT/2JsqZ2IvfB9Y4bWDNMFbJRFmC9E74SoS0CqulwjkC0+5bpcV1CZ8NMej4pjy0U+doDQsGyo1hzVJttIjhQ7GnBtRFN1UarUlH8F3xict+HY07rEzoUGPlWcjRFRr4/gChZgc3ZL2d8oAAAAASUVORK5CYII=) !important
        }

        #toast-container.toast-bottom-center > div, #toast-container.toast-top-center > div {
            width: 300px;
            margin-left: auto;
            margin-right: auto
        }

        #toast-container.toast-bottom-full-width > div, #toast-container.toast-top-full-width > div {
            width: 96%;
            margin-left: auto;
            margin-right: auto
        }

        .toast {
            background-color: #030303
        }

        .toast-success {
            background-color: #51A351
        }

        .toast-error {
            background-color: #BD362F
        }

        .toast-info {
            background-color: #2F96B4
        }

        .toast-warning {
            background-color: #F89406
        }

        .toast-progress {
            position: absolute;
            left: 0;
            bottom: 0;
            height: 4px;
            background-color: #000;
            opacity: .4;
            -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=40);
            filter: alpha(opacity=40)
        }

        @media all and (max-width: 240px) {
            #toast-container > div {
                padding: 8px 8px 8px 50px;
                width: 11em
            }

            #toast-container > div.rtl {
                padding: 8px 50px 8px 8px
            }

            #toast-container .toast-close-button {
                right: -.2em;
                top: -.2em
            }

            #toast-container .rtl .toast-close-button {
                left: -.2em;
                right: .2em
            }
        }

        @media all and (min-width: 241px) and (max-width: 480px) {
            #toast-container > div {
                padding: 8px 8px 8px 50px;
                width: 18em
            }

            #toast-container > div.rtl {
                padding: 8px 50px 8px 8px
            }

            #toast-container .toast-close-button {
                right: -.2em;
                top: -.2em
            }

            #toast-container .rtl .toast-close-button {
                left: -.2em;
                right: .2em
            }
        }

        @media all and (min-width: 481px) and (max-width: 768px) {
            #toast-container > div {
                padding: 15px 15px 15px 50px;
                width: 25em
            }

            #toast-container > div.rtl {
                padding: 15px 50px 15px 15px
            }
        }
    </style>

    <style>
        body.swal2-shown {
            overflow-y: hidden
        }

        body.swal2-iosfix {
            position: fixed;
            left: 0;
            right: 0
        }

        .swal2-container {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            padding: 10px;
            background-color: transparent;
            z-index: 1060
        }

        .swal2-container.swal2-fade {
            -webkit-transition: background-color .1s;
            transition: background-color .1s
        }

        .swal2-container.swal2-shown {
            background-color: rgba(0, 0, 0, .4)
        }

        .swal2-modal {
            background-color: #fff;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            border-radius: 5px;
            box-sizing: border-box;
            text-align: center;
            margin: auto;
            overflow-x: hidden;
            overflow-y: auto;
            display: none;
            position: relative
        }

        .swal2-modal:focus {
            outline: 0
        }

        .swal2-modal.swal2-loading {
            overflow-y: hidden
        }

        .swal2-modal .swal2-title {
            color: #595959;
            font-size: 30px;
            text-align: center;
            font-weight: 600;
            text-transform: none;
            position: relative;
            margin: 0 0 .4em;
            padding: 0;
            display: block
        }

        .swal2-modal .swal2-spacer {
            height: 10px;
            color: transparent;
            border: 0
        }

        .swal2-modal .swal2-styled {
            border: 0;
            border-radius: 3px;
            box-shadow: none;
            color: #fff;
            cursor: pointer;
            font-size: 17px;
            font-weight: 500;
            margin: 0 5px;
            padding: 10px 32px
        }

        .swal2-modal .swal2-styled:not(.swal2-loading)[disabled] {
            opacity: .4;
            cursor: no-drop
        }

        .swal2-modal .swal2-styled.swal2-loading {
            box-sizing: border-box;
            border: 4px solid transparent;
            border-color: transparent;
            width: 40px;
            height: 40px;
            padding: 0;
            margin: -2px 30px;
            vertical-align: top;
            background-color: transparent !important;
            color: transparent;
            cursor: default;
            border-radius: 100%;
            -webkit-animation: rotate-loading 1.5s linear 0s infinite normal;
            animation: rotate-loading 1.5s linear 0s infinite normal;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .swal2-modal .swal2-styled + .swal2-styled {
            margin-top: 15px
        }

        .swal2-modal :not(.swal2-styled).swal2-loading::after {
            display: inline-block;
            content: '';
            margin-left: 5px;
            vertical-align: -1px;
            height: 6px;
            width: 6px;
            border: 3px solid #999;
            border-right-color: transparent;
            border-radius: 50%;
            -webkit-animation: rotate-loading 1.5s linear 0s infinite normal;
            animation: rotate-loading 1.5s linear 0s infinite normal
        }

        .swal2-modal .swal2-image {
            margin: 20px auto;
            max-width: 100%
        }

        .swal2-modal .swal2-close {
            font-size: 36px;
            line-height: 36px;
            font-family: serif;
            position: absolute;
            top: 5px;
            right: 13px;
            cursor: pointer;
            color: #ccc;
            -webkit-transition: color .1s ease;
            transition: color .1s ease
        }

        .swal2-modal .swal2-close:hover {
            color: #d55
        }

        .swal2-modal > .swal2-checkbox, .swal2-modal > .swal2-file, .swal2-modal > .swal2-input, .swal2-modal > .swal2-radio, .swal2-modal > .swal2-select, .swal2-modal > .swal2-textarea {
            display: none
        }

        .swal2-modal .swal2-content {
            font-size: 18px;
            text-align: center;
            font-weight: 300;
            position: relative;
            float: none;
            margin: 0;
            padding: 0;
            line-height: normal;
            color: #545454
        }

        .swal2-modal .swal2-checkbox, .swal2-modal .swal2-file, .swal2-modal .swal2-input, .swal2-modal .swal2-radio, .swal2-modal .swal2-select, .swal2-modal .swal2-textarea {
            margin: 20px auto
        }

        .swal2-modal .swal2-file, .swal2-modal .swal2-input, .swal2-modal .swal2-textarea {
            width: 100%;
            box-sizing: border-box;
            border-radius: 3px;
            border: 1px solid #d9d9d9;
            font-size: 18px;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06);
            -webkit-transition: border-color box-shadow .3s;
            transition: border-color box-shadow .3s
        }

        .swal2-modal .swal2-file.swal2-inputerror, .swal2-modal .swal2-input.swal2-inputerror, .swal2-modal .swal2-textarea.swal2-inputerror {
            border-color: #f06e57 !important
        }

        .swal2-modal .swal2-file:focus, .swal2-modal .swal2-input:focus, .swal2-modal .swal2-textarea:focus {
            outline: 0;
            box-shadow: 0 0 3px #c4e6f5;
            border: 1px solid #b4dbed
        }

        .swal2-modal .swal2-file:focus::-webkit-input-placeholder, .swal2-modal .swal2-input:focus::-webkit-input-placeholder, .swal2-modal .swal2-textarea:focus::-webkit-input-placeholder {
            -webkit-transition: opacity .3s .03s ease;
            transition: opacity .3s .03s ease;
            opacity: .8
        }

        .swal2-modal .swal2-file:focus::-moz-placeholder, .swal2-modal .swal2-input:focus::-moz-placeholder, .swal2-modal .swal2-textarea:focus::-moz-placeholder {
            -webkit-transition: opacity .3s .03s ease;
            transition: opacity .3s .03s ease;
            opacity: .8
        }

        .swal2-modal .swal2-file:focus:-ms-input-placeholder, .swal2-modal .swal2-input:focus:-ms-input-placeholder, .swal2-modal .swal2-textarea:focus:-ms-input-placeholder {
            -webkit-transition: opacity .3s .03s ease;
            transition: opacity .3s .03s ease;
            opacity: .8
        }

        .swal2-modal .swal2-file:focus::placeholder, .swal2-modal .swal2-input:focus::placeholder, .swal2-modal .swal2-textarea:focus::placeholder {
            -webkit-transition: opacity .3s .03s ease;
            transition: opacity .3s .03s ease;
            opacity: .8
        }

        .swal2-modal .swal2-file::-webkit-input-placeholder, .swal2-modal .swal2-input::-webkit-input-placeholder, .swal2-modal .swal2-textarea::-webkit-input-placeholder {
            color: #e6e6e6
        }

        .swal2-modal .swal2-file::-moz-placeholder, .swal2-modal .swal2-input::-moz-placeholder, .swal2-modal .swal2-textarea::-moz-placeholder {
            color: #e6e6e6
        }

        .swal2-modal .swal2-file:-ms-input-placeholder, .swal2-modal .swal2-input:-ms-input-placeholder, .swal2-modal .swal2-textarea:-ms-input-placeholder {
            color: #e6e6e6
        }

        .swal2-modal .swal2-file::placeholder, .swal2-modal .swal2-input::placeholder, .swal2-modal .swal2-textarea::placeholder {
            color: #e6e6e6
        }

        .swal2-modal .swal2-range input {
            float: left;
            width: 80%
        }

        .swal2-modal .swal2-range output {
            float: right;
            width: 20%;
            font-size: 20px;
            font-weight: 600;
            text-align: center
        }

        .swal2-modal .swal2-range input, .swal2-modal .swal2-range output {
            height: 43px;
            line-height: 43px;
            vertical-align: middle;
            margin: 20px auto;
            padding: 0
        }

        .swal2-modal .swal2-input {
            height: 43px;
            padding: 0 12px
        }

        .swal2-modal .swal2-input[type=number] {
            max-width: 150px
        }

        .swal2-modal .swal2-file {
            font-size: 20px
        }

        .swal2-modal .swal2-textarea {
            height: 108px;
            padding: 12px
        }

        .swal2-modal .swal2-select {
            color: #545454;
            font-size: inherit;
            padding: 5px 10px;
            min-width: 40%;
            max-width: 100%
        }

        .swal2-modal .swal2-radio {
            border: 0
        }

        .swal2-modal .swal2-radio label:not(:first-child) {
            margin-left: 20px
        }

        .swal2-modal .swal2-radio input, .swal2-modal .swal2-radio span {
            vertical-align: middle
        }

        .swal2-modal .swal2-radio input {
            margin: 0 3px 0 0
        }

        .swal2-modal .swal2-checkbox {
            color: #545454
        }

        .swal2-modal .swal2-checkbox input, .swal2-modal .swal2-checkbox span {
            vertical-align: middle
        }

        .swal2-modal .swal2-validationerror {
            background-color: #f0f0f0;
            margin: 0 -20px;
            overflow: hidden;
            padding: 10px;
            color: gray;
            font-size: 16px;
            font-weight: 300;
            display: none
        }

        .swal2-modal .swal2-validationerror::before {
            content: '!';
            display: inline-block;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background-color: #ea7d7d;
            color: #fff;
            line-height: 24px;
            text-align: center;
            margin-right: 10px
        }

        @supports (-ms-accelerator:true) {
            .swal2-range input {
                width: 100% !important
            }

            .swal2-range output {
                display: none
            }
        }

        @media all and (-ms-high-contrast: none),(-ms-high-contrast: active) {
            .swal2-range input {
                width: 100% !important
            }

            .swal2-range output {
                display: none
            }
        }

        .swal2-icon {
            width: 80px;
            height: 80px;
            border: 4px solid transparent;
            border-radius: 50%;
            margin: 20px auto 30px;
            padding: 0;
            position: relative;
            box-sizing: content-box;
            cursor: default;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .swal2-icon.swal2-error {
            border-color: #f27474
        }

        .swal2-icon.swal2-error .x-mark {
            position: relative;
            display: block
        }

        .swal2-icon.swal2-error .line {
            position: absolute;
            height: 5px;
            width: 47px;
            background-color: #f27474;
            display: block;
            top: 37px;
            border-radius: 2px
        }

        .swal2-icon.swal2-error .line.left {
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            left: 17px
        }

        .swal2-icon.swal2-error .line.right {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            right: 16px
        }

        .swal2-icon.swal2-warning {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #f8bb86;
            border-color: #facea8;
            font-size: 60px;
            line-height: 80px;
            text-align: center
        }

        .swal2-icon.swal2-info {
            font-family: 'Open Sans', sans-serif;
            color: #3fc3ee;
            border-color: #9de0f6;
            font-size: 60px;
            line-height: 80px;
            text-align: center
        }

        .swal2-icon.swal2-question {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #87adbd;
            border-color: #c9dae1;
            font-size: 60px;
            line-height: 80px;
            text-align: center
        }

        .swal2-icon.swal2-success {
            border-color: #a5dc86
        }

        .swal2-icon.swal2-success::after, .swal2-icon.swal2-success::before {
            content: '';
            border-radius: 50%;
            position: absolute;
            width: 60px;
            height: 120px;
            background: #fff;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg)
        }

        .swal2-icon.swal2-success::before {
            border-radius: 120px 0 0 120px;
            top: -7px;
            left: -33px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 60px 60px;
            transform-origin: 60px 60px
        }

        .swal2-icon.swal2-success::after {
            border-radius: 0 120px 120px 0;
            top: -11px;
            left: 30px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 0 60px;
            transform-origin: 0 60px
        }

        .swal2-icon.swal2-success .placeholder {
            width: 80px;
            height: 80px;
            border: 4px solid rgba(165, 220, 134, .2);
            border-radius: 50%;
            box-sizing: content-box;
            position: absolute;
            left: -4px;
            top: -4px;
            z-index: 2
        }

        .swal2-icon.swal2-success .fix {
            width: 7px;
            height: 90px;
            background-color: #fff;
            position: absolute;
            left: 28px;
            top: 8px;
            z-index: 1;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        .swal2-icon.swal2-success .line {
            height: 5px;
            background-color: #a5dc86;
            display: block;
            border-radius: 2px;
            position: absolute;
            z-index: 2
        }

        .swal2-icon.swal2-success .line.tip {
            width: 25px;
            left: 14px;
            top: 46px;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg)
        }

        .swal2-icon.swal2-success .line.long {
            width: 47px;
            right: 8px;
            top: 38px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        .swal2-progresssteps {
            font-weight: 600;
            margin: 0 0 20px;
            padding: 0
        }

        .swal2-progresssteps li {
            display: inline-block;
            position: relative
        }

        .swal2-progresssteps .swal2-progresscircle {
            background: #3085d6;
            border-radius: 2em;
            color: #fff;
            height: 2em;
            line-height: 2em;
            text-align: center;
            width: 2em;
            z-index: 20
        }

        .swal2-progresssteps .swal2-progresscircle:first-child {
            margin-left: 0
        }

        .swal2-progresssteps .swal2-progresscircle:last-child {
            margin-right: 0
        }

        .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep {
            background: #3085d6
        }

        .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep ~ .swal2-progresscircle {
            background: #add8e6
        }

        .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep ~ .swal2-progressline {
            background: #add8e6
        }

        .swal2-progresssteps .swal2-progressline {
            background: #3085d6;
            height: .4em;
            margin: 0 -1px;
            z-index: 10
        }

        [class^=swal2] {
            -webkit-tap-highlight-color: transparent
        }

        @-webkit-keyframes showSweetAlert {
            0% {
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }
            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05)
            }
            80% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            100% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @keyframes showSweetAlert {
            0% {
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }
            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05)
            }
            80% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            100% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @-webkit-keyframes hideSweetAlert {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1
            }
            100% {
                -webkit-transform: scale(.5);
                transform: scale(.5);
                opacity: 0
            }
        }

        @keyframes hideSweetAlert {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1
            }
            100% {
                -webkit-transform: scale(.5);
                transform: scale(.5);
                opacity: 0
            }
        }

        .swal2-show {
            -webkit-animation: showSweetAlert .3s;
            animation: showSweetAlert .3s
        }

        .swal2-show.swal2-noanimation {
            -webkit-animation: none;
            animation: none
        }

        .swal2-hide {
            -webkit-animation: hideSweetAlert .15s forwards;
            animation: hideSweetAlert .15s forwards
        }

        .swal2-hide.swal2-noanimation {
            -webkit-animation: none;
            animation: none
        }

        @-webkit-keyframes animate-success-tip {
            0% {
                width: 0;
                left: 1px;
                top: 19px
            }
            54% {
                width: 0;
                left: 1px;
                top: 19px
            }
            70% {
                width: 50px;
                left: -8px;
                top: 37px
            }
            84% {
                width: 17px;
                left: 21px;
                top: 48px
            }
            100% {
                width: 25px;
                left: 14px;
                top: 45px
            }
        }

        @keyframes animate-success-tip {
            0% {
                width: 0;
                left: 1px;
                top: 19px
            }
            54% {
                width: 0;
                left: 1px;
                top: 19px
            }
            70% {
                width: 50px;
                left: -8px;
                top: 37px
            }
            84% {
                width: 17px;
                left: 21px;
                top: 48px
            }
            100% {
                width: 25px;
                left: 14px;
                top: 45px
            }
        }

        @-webkit-keyframes animate-success-long {
            0% {
                width: 0;
                right: 46px;
                top: 54px
            }
            65% {
                width: 0;
                right: 46px;
                top: 54px
            }
            84% {
                width: 55px;
                right: 0;
                top: 35px
            }
            100% {
                width: 47px;
                right: 8px;
                top: 38px
            }
        }

        @keyframes animate-success-long {
            0% {
                width: 0;
                right: 46px;
                top: 54px
            }
            65% {
                width: 0;
                right: 46px;
                top: 54px
            }
            84% {
                width: 55px;
                right: 0;
                top: 35px
            }
            100% {
                width: 47px;
                right: 8px;
                top: 38px
            }
        }

        @-webkit-keyframes rotatePlaceholder {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }
            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }
            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
            100% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
        }

        @keyframes rotatePlaceholder {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }
            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }
            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
            100% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
        }

        .animate-success-tip {
            -webkit-animation: animate-success-tip .75s;
            animation: animate-success-tip .75s
        }

        .animate-success-long {
            -webkit-animation: animate-success-long .75s;
            animation: animate-success-long .75s
        }

        .swal2-success.animate::after {
            -webkit-animation: rotatePlaceholder 4.25s ease-in;
            animation: rotatePlaceholder 4.25s ease-in
        }

        @-webkit-keyframes animate-error-icon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0
            }
            100% {
                -webkit-transform: rotateX(0);
                transform: rotateX(0);
                opacity: 1
            }
        }

        @keyframes animate-error-icon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0
            }
            100% {
                -webkit-transform: rotateX(0);
                transform: rotateX(0);
                opacity: 1
            }
        }

        .animate-error-icon {
            -webkit-animation: animate-error-icon .5s;
            animation: animate-error-icon .5s
        }

        @-webkit-keyframes animate-x-mark {
            0% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }
            50% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }
            80% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15);
                margin-top: -6px
            }
            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
                margin-top: 0;
                opacity: 1
            }
        }

        @keyframes animate-x-mark {
            0% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }
            50% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }
            80% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15);
                margin-top: -6px
            }
            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
                margin-top: 0;
                opacity: 1
            }
        }

        .animate-x-mark {
            -webkit-animation: animate-x-mark .5s;
            animation: animate-x-mark .5s
        }

        @-webkit-keyframes pulse-warning {
            0% {
                border-color: #f8d486
            }
            100% {
                border-color: #f8bb86
            }
        }

        @keyframes pulse-warning {
            0% {
                border-color: #f8d486
            }
            100% {
                border-color: #f8bb86
            }
        }

        .pulse-warning {
            -webkit-animation: pulse-warning .75s infinite alternate;
            animation: pulse-warning .75s infinite alternate
        }

        @-webkit-keyframes rotate-loading {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @keyframes rotate-loading {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }
    </style>

    <style>
        .flag-icon, .flag-icon-background {
            background-size: contain;
            background-position: 50%;
            background-repeat: no-repeat
        }

        .flag-icon {
            position: relative;
            display: inline-block;
            width: 1.33333333em;
            line-height: 1em
        }

        .flag-icon:before {
            content: "\00a0"
        }

        .flag-icon.flag-icon-squared {
            width: 1em
        }

        .flag-icon-ad {
            background-image: url(index.html)
        }

        .flag-icon-ad.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-ae {
            background-image: url(index.html)
        }

        .flag-icon-ae.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-af {
            background-image: url(index.html)
        }

        .flag-icon-af.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-ag {
            background-image: url(index.html)
        }

        .flag-icon-ag.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-ai {
            background-image: url(index.html)
        }

        .flag-icon-ai.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-al {
            background-image: url(index.html)
        }

        .flag-icon-al.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-am {
            background-image: url(index.html)
        }

        .flag-icon-am.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-ao {
            background-image: url(index.html)
        }

        .flag-icon-ao.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-aq {
            background-image: url(index.html)
        }

        .flag-icon-aq.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-ar {
            background-image: url(index.html)
        }

        .flag-icon-ar.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-as {
            background-image: url(index.html)
        }

        .flag-icon-as.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-at {
            background-image: url(index.html)
        }

        .flag-icon-at.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-au {
            background-image: url(index.html)
        }

        .flag-icon-au.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-aw {
            background-image: url(index.html)
        }

        .flag-icon-aw.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-ax {
            background-image: url(index.html)
        }

        .flag-icon-ax.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-az {
            background-image: url(index.html)
        }

        .flag-icon-az.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-ba {
            background-image: url(index.html)
        }

        .flag-icon-ba.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-bb {
            background-image: url(index.html)
        }

        .flag-icon-bb.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-bd {
            background-image: url(index.html)
        }

        .flag-icon-bd.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-be {
            background-image: url(index.html)
        }

        .flag-icon-be.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-bf {
            background-image: url(index.html)
        }

        .flag-icon-bf.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-bg {
            background-image: url(index.html)
        }

        .flag-icon-bg.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-bh {
            background-image: url(index.html)
        }

        .flag-icon-bh.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-bi {
            background-image: url(index.html)
        }

        .flag-icon-bi.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-bj {
            background-image: url(index.html)
        }

        .flag-icon-bj.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-bl {
            background-image: url(index.html)
        }

        .flag-icon-bl.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-bm {
            background-image: url(index.html)
        }

        .flag-icon-bm.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-bn {
            background-image: url(index.html)
        }

        .flag-icon-bn.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-bo {
            background-image: url(index.html)
        }

        .flag-icon-bo.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-bq {
            background-image: url(index.html)
        }

        .flag-icon-bq.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-br {
            background-image: url(index.html)
        }

        .flag-icon-br.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-bs {
            background-image: url(index.html)
        }

        .flag-icon-bs.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-bt {
            background-image: url(index.html)
        }

        .flag-icon-bt.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-bv {
            background-image: url(index.html)
        }

        .flag-icon-bv.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-bw {
            background-image: url(index.html)
        }

        .flag-icon-bw.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-by {
            background-image: url(index.html)
        }

        .flag-icon-by.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-bz {
            background-image: url(index.html)
        }

        .flag-icon-bz.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-ca {
            background-image: url(index.html)
        }

        .flag-icon-ca.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-cc {
            background-image: url(index.html)
        }

        .flag-icon-cc.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-cd {
            background-image: url(index.html)
        }

        .flag-icon-cd.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-cf {
            background-image: url(index.html)
        }

        .flag-icon-cf.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-cg {
            background-image: url(index.html)
        }

        .flag-icon-cg.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-ch {
            background-image: url(index.html)
        }

        .flag-icon-ch.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-ci {
            background-image: url(index.html)
        }

        .flag-icon-ci.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-ck {
            background-image: url(index.html)
        }

        .flag-icon-ck.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-cl {
            background-image: url(index.html)
        }

        .flag-icon-cl.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-cm {
            background-image: url(index.html)
        }

        .flag-icon-cm.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-cn {
            background-image: url(index.html)
        }

        .flag-icon-cn.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-co {
            background-image: url(index.html)
        }

        .flag-icon-co.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-cr {
            background-image: url(index.html)
        }

        .flag-icon-cr.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-cu {
            background-image: url(index.html)
        }

        .flag-icon-cu.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-cv {
            background-image: url(index.html)
        }

        .flag-icon-cv.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-cw {
            background-image: url(index.html)
        }

        .flag-icon-cw.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-cx {
            background-image: url(index.html)
        }

        .flag-icon-cx.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-cy {
            background-image: url(index.html)
        }

        .flag-icon-cy.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-cz {
            background-image: url(index.html)
        }

        .flag-icon-cz.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-de {
            background-image: url(index.html)
        }

        .flag-icon-de.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-dj {
            background-image: url(index.html)
        }

        .flag-icon-dj.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-dk {
            background-image: url(index.html)
        }

        .flag-icon-dk.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-dm {
            background-image: url(index.html)
        }

        .flag-icon-dm.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-do {
            background-image: url(index.html)
        }

        .flag-icon-do.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-dz {
            background-image: url(index.html)
        }

        .flag-icon-dz.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-ec {
            background-image: url(index.html)
        }

        .flag-icon-ec.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-ee {
            background-image: url(index.html)
        }

        .flag-icon-ee.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-eg {
            background-image: url(index.html)
        }

        .flag-icon-eg.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-eh {
            background-image: url(index.html)
        }

        .flag-icon-eh.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-er {
            background-image: url(index.html)
        }

        .flag-icon-er.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-es {
            background-image: url(index.html)
        }

        .flag-icon-es.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-et {
            background-image: url(index.html)
        }

        .flag-icon-et.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-fi {
            background-image: url(index.html)
        }

        .flag-icon-fi.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-fj {
            background-image: url(index.html)
        }

        .flag-icon-fj.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-fk {
            background-image: url(index.html)
        }

        .flag-icon-fk.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-fm {
            background-image: url(index.html)
        }

        .flag-icon-fm.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-fo {
            background-image: url(index.html)
        }

        .flag-icon-fo.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-fr {
            background-image: url(index.html)
        }

        .flag-icon-fr.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-ga {
            background-image: url(index.html)
        }

        .flag-icon-ga.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-gb {
            background-image: url(index.html)
        }

        .flag-icon-gb.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-gd {
            background-image: url(index.html)
        }

        .flag-icon-gd.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-ge {
            background-image: url(index.html)
        }

        .flag-icon-ge.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-gf {
            background-image: url(index.html)
        }

        .flag-icon-gf.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-gg {
            background-image: url(index.html)
        }

        .flag-icon-gg.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-gh {
            background-image: url(index.html)
        }

        .flag-icon-gh.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-gi {
            background-image: url(index.html)
        }

        .flag-icon-gi.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-gl {
            background-image: url(index.html)
        }

        .flag-icon-gl.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-gm {
            background-image: url(index.html)
        }

        .flag-icon-gm.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-gn {
            background-image: url(index.html)
        }

        .flag-icon-gn.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-gp {
            background-image: url(index.html)
        }

        .flag-icon-gp.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-gq {
            background-image: url(index.html)
        }

        .flag-icon-gq.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-gr {
            background-image: url(index.html)
        }

        .flag-icon-gr.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-gs {
            background-image: url(index.html)
        }

        .flag-icon-gs.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-gt {
            background-image: url(index.html)
        }

        .flag-icon-gt.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-gu {
            background-image: url(index.html)
        }

        .flag-icon-gu.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-gw {
            background-image: url(index.html)
        }

        .flag-icon-gw.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-gy {
            background-image: url(index.html)
        }

        .flag-icon-gy.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-hk {
            background-image: url(index.html)
        }

        .flag-icon-hk.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-hm {
            background-image: url(index.html)
        }

        .flag-icon-hm.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-hn {
            background-image: url(index.html)
        }

        .flag-icon-hn.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-hr {
            background-image: url(index.html)
        }

        .flag-icon-hr.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-ht {
            background-image: url(index.html)
        }

        .flag-icon-ht.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-hu {
            background-image: url(index.html)
        }

        .flag-icon-hu.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-id {
            background-image: url(index.html)
        }

        .flag-icon-id.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-ie {
            background-image: url(index.html)
        }

        .flag-icon-ie.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-il {
            background-image: url(index.html)
        }

        .flag-icon-il.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-im {
            background-image: url(index.html)
        }

        .flag-icon-im.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-in {
            background-image: url(index.html)
        }

        .flag-icon-in.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-io {
            background-image: url(index.html)
        }

        .flag-icon-io.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-iq {
            background-image: url(index.html)
        }

        .flag-icon-iq.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-ir {
            background-image: url(index.html)
        }

        .flag-icon-ir.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-is {
            background-image: url(index.html)
        }

        .flag-icon-is.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-it {
            background-image: url(index.html)
        }

        .flag-icon-it.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-je {
            background-image: url(index.html)
        }

        .flag-icon-je.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-jm {
            background-image: url(index.html)
        }

        .flag-icon-jm.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-jo {
            background-image: url(index.html)
        }

        .flag-icon-jo.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-jp {
            background-image: url(index.html)
        }

        .flag-icon-jp.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-ke {
            background-image: url(index.html)
        }

        .flag-icon-ke.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-kg {
            background-image: url(index.html)
        }

        .flag-icon-kg.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-kh {
            background-image: url(index.html)
        }

        .flag-icon-kh.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-ki {
            background-image: url(index.html)
        }

        .flag-icon-ki.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-km {
            background-image: url(index.html)
        }

        .flag-icon-km.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-kn {
            background-image: url(index.html)
        }

        .flag-icon-kn.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-kp {
            background-image: url(index.html)
        }

        .flag-icon-kp.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-kr {
            background-image: url(index.html)
        }

        .flag-icon-kr.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-kw {
            background-image: url(index.html)
        }

        .flag-icon-kw.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-ky {
            background-image: url(index.html)
        }

        .flag-icon-ky.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-kz {
            background-image: url(index.html)
        }

        .flag-icon-kz.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-la {
            background-image: url(index.html)
        }

        .flag-icon-la.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-lb {
            background-image: url(index.html)
        }

        .flag-icon-lb.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-lc {
            background-image: url(index.html)
        }

        .flag-icon-lc.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-li {
            background-image: url(index.html)
        }

        .flag-icon-li.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-lk {
            background-image: url(index.html)
        }

        .flag-icon-lk.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-lr {
            background-image: url(index.html)
        }

        .flag-icon-lr.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-ls {
            background-image: url(index.html)
        }

        .flag-icon-ls.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-lt {
            background-image: url(index.html)
        }

        .flag-icon-lt.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-lu {
            background-image: url(index.html)
        }

        .flag-icon-lu.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-lv {
            background-image: url(index.html)
        }

        .flag-icon-lv.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-ly {
            background-image: url(index.html)
        }

        .flag-icon-ly.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-ma {
            background-image: url(index.html)
        }

        .flag-icon-ma.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-mc {
            background-image: url(index.html)
        }

        .flag-icon-mc.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-md {
            background-image: url(index.html)
        }

        .flag-icon-md.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-me {
            background-image: url(index.html)
        }

        .flag-icon-me.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-mf {
            background-image: url(index.html)
        }

        .flag-icon-mf.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-mg {
            background-image: url(index.html)
        }

        .flag-icon-mg.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-mh {
            background-image: url(index.html)
        }

        .flag-icon-mh.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-mk {
            background-image: url(index.html)
        }

        .flag-icon-mk.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-ml {
            background-image: url(index.html)
        }

        .flag-icon-ml.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-mm {
            background-image: url(index.html)
        }

        .flag-icon-mm.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-mn {
            background-image: url(index.html)
        }

        .flag-icon-mn.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-mo {
            background-image: url(index.html)
        }

        .flag-icon-mo.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-mp {
            background-image: url(index.html)
        }

        .flag-icon-mp.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-mq {
            background-image: url(index.html)
        }

        .flag-icon-mq.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-mr {
            background-image: url(index.html)
        }

        .flag-icon-mr.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-ms {
            background-image: url(index.html)
        }

        .flag-icon-ms.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-mt {
            background-image: url(index.html)
        }

        .flag-icon-mt.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-mu {
            background-image: url(index.html)
        }

        .flag-icon-mu.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-mv {
            background-image: url(index.html)
        }

        .flag-icon-mv.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-mw {
            background-image: url(index.html)
        }

        .flag-icon-mw.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-mx {
            background-image: url(index.html)
        }

        .flag-icon-mx.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-my {
            background-image: url(index.html)
        }

        .flag-icon-my.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-mz {
            background-image: url(index.html)
        }

        .flag-icon-mz.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-na {
            background-image: url(index.html)
        }

        .flag-icon-na.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-nc {
            background-image: url(index.html)
        }

        .flag-icon-nc.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-ne {
            background-image: url(index.html)
        }

        .flag-icon-ne.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-nf {
            background-image: url(index.html)
        }

        .flag-icon-nf.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-ng {
            background-image: url(index.html)
        }

        .flag-icon-ng.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-ni {
            background-image: url(index.html)
        }

        .flag-icon-ni.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-nl {
            background-image: url(index.html)
        }

        .flag-icon-nl.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-no {
            background-image: url(index.html)
        }

        .flag-icon-no.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-np {
            background-image: url(index.html)
        }

        .flag-icon-np.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-nr {
            background-image: url(index.html)
        }

        .flag-icon-nr.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-nu {
            background-image: url(index.html)
        }

        .flag-icon-nu.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-nz {
            background-image: url(index.html)
        }

        .flag-icon-nz.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-om {
            background-image: url(index.html)
        }

        .flag-icon-om.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-pa {
            background-image: url(index.html)
        }

        .flag-icon-pa.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-pe {
            background-image: url(index.html)
        }

        .flag-icon-pe.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-pf {
            background-image: url(index.html)
        }

        .flag-icon-pf.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-pg {
            background-image: url(index.html)
        }

        .flag-icon-pg.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-ph {
            background-image: url(index.html)
        }

        .flag-icon-ph.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-pk {
            background-image: url(index.html)
        }

        .flag-icon-pk.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-pl {
            background-image: url(index.html)
        }

        .flag-icon-pl.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-pm {
            background-image: url(index.html)
        }

        .flag-icon-pm.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-pn {
            background-image: url(index.html)
        }

        .flag-icon-pn.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-pr {
            background-image: url(index.html)
        }

        .flag-icon-pr.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-ps {
            background-image: url(index.html)
        }

        .flag-icon-ps.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-pt {
            background-image: url(index.html)
        }

        .flag-icon-pt.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-pw {
            background-image: url(index.html)
        }

        .flag-icon-pw.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-py {
            background-image: url(index.html)
        }

        .flag-icon-py.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-qa {
            background-image: url(index.html)
        }

        .flag-icon-qa.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-re {
            background-image: url(index.html)
        }

        .flag-icon-re.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-ro {
            background-image: url(index.html)
        }

        .flag-icon-ro.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-rs {
            background-image: url(index.html)
        }

        .flag-icon-rs.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-ru {
            background-image: url(index.html)
        }

        .flag-icon-ru.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-rw {
            background-image: url(index.html)
        }

        .flag-icon-rw.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-sa {
            background-image: url(index.html)
        }

        .flag-icon-sa.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-sb {
            background-image: url(index.html)
        }

        .flag-icon-sb.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-sc {
            background-image: url(index.html)
        }

        .flag-icon-sc.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-sd {
            background-image: url(index.html)
        }

        .flag-icon-sd.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-se {
            background-image: url(index.html)
        }

        .flag-icon-se.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-sg {
            background-image: url(index.html)
        }

        .flag-icon-sg.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-sh {
            background-image: url(index.html)
        }

        .flag-icon-sh.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-si {
            background-image: url(index.html)
        }

        .flag-icon-si.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-sj {
            background-image: url(index.html)
        }

        .flag-icon-sj.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-sk {
            background-image: url(index.html)
        }

        .flag-icon-sk.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-sl {
            background-image: url(index.html)
        }

        .flag-icon-sl.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-sm {
            background-image: url(index.html)
        }

        .flag-icon-sm.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-sn {
            background-image: url(index.html)
        }

        .flag-icon-sn.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-so {
            background-image: url(index.html)
        }

        .flag-icon-so.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-sr {
            background-image: url(index.html)
        }

        .flag-icon-sr.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-ss {
            background-image: url(index.html)
        }

        .flag-icon-ss.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-st {
            background-image: url(index.html)
        }

        .flag-icon-st.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-sv {
            background-image: url(index.html)
        }

        .flag-icon-sv.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-sx {
            background-image: url(index.html)
        }

        .flag-icon-sx.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-sy {
            background-image: url(index.html)
        }

        .flag-icon-sy.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-sz {
            background-image: url(index.html)
        }

        .flag-icon-sz.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-tc {
            background-image: url(index.html)
        }

        .flag-icon-tc.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-td {
            background-image: url(index.html)
        }

        .flag-icon-td.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-tf {
            background-image: url(index.html)
        }

        .flag-icon-tf.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-tg {
            background-image: url(index.html)
        }

        .flag-icon-tg.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-th {
            background-image: url(index.html)
        }

        .flag-icon-th.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-tj {
            background-image: url(index.html)
        }

        .flag-icon-tj.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-tk {
            background-image: url(index.html)
        }

        .flag-icon-tk.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-tl {
            background-image: url(index.html)
        }

        .flag-icon-tl.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-tm {
            background-image: url(index.html)
        }

        .flag-icon-tm.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-tn {
            background-image: url(index.html)
        }

        .flag-icon-tn.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-to {
            background-image: url(index.html)
        }

        .flag-icon-to.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-tr {
            background-image: url(index.html)
        }

        .flag-icon-tr.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-tt {
            background-image: url(index.html)
        }

        .flag-icon-tt.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-tv {
            background-image: url(index.html)
        }

        .flag-icon-tv.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-tw {
            background-image: url(index.html)
        }

        .flag-icon-tw.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-tz {
            background-image: url(index.html)
        }

        .flag-icon-tz.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-ua {
            background-image: url(index.html)
        }

        .flag-icon-ua.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-ug {
            background-image: url(index.html)
        }

        .flag-icon-ug.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-um {
            background-image: url(index.html)
        }

        .flag-icon-um.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-us {
            background-image: url(index.html)
        }

        .flag-icon-us.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-uy {
            background-image: url(index.html)
        }

        .flag-icon-uy.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-uz {
            background-image: url(index.html)
        }

        .flag-icon-uz.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-va {
            background-image: url(index.html)
        }

        .flag-icon-va.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-vc {
            background-image: url(index.html)
        }

        .flag-icon-vc.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-ve {
            background-image: url(index.html)
        }

        .flag-icon-ve.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-vg {
            background-image: url(index.html)
        }

        .flag-icon-vg.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-en {
            background-image: url(index.html)
        }

        .flag-icon-en.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-vi {
            background-image: url(index.html)
        }

        .flag-icon-vi.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-vn {
            background-image: url(index.html)
        }

        .flag-icon-vn.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-vu {
            background-image: url(index.html)
        }

        .flag-icon-vu.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-wf {
            background-image: url(index.html)
        }

        .flag-icon-wf.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-ws {
            background-image: url(index.html)
        }

        .flag-icon-ws.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-ye {
            background-image: url(index.html)
        }

        .flag-icon-ye.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-yt {
            background-image: url(index.html)
        }

        .flag-icon-yt.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-za {
            background-image: url(index.html)
        }

        .flag-icon-za.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-zm {
            background-image: url(index.html)
        }

        .flag-icon-zm.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-zw {
            background-image: url(index.html)
        }

        .flag-icon-zw.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-eu {
            background-image: url(index.html)
        }

        .flag-icon-eu.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-gb-eng {
            background-image: url(index.html)
        }

        .flag-icon-gb-eng.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-gb-nir {
            background-image: url(index.html)
        }

        .flag-icon-gb-nir.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-gb-sct {
            background-image: url(index.html)
        }

        .flag-icon-gb-sct.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-gb-wls {
            background-image: url(index.html)
        }

        .flag-icon-gb-wls.flag-icon-squared {
            background-image: url(index.html)
        }

        .flag-icon-un {
            background-image: url(index.html)
        }

        .flag-icon-un.flag-icon-squared {
            background-image: url(index.html)
        }
    </style>

    <link rel="icon" href="{{asset("storage/logos/favicon-cnv.png")}}">
    <link rel="stylesheet" href="{{asset("code.jquery.com/ui/1.12.1/themes/base/jquery-ui.min.css")}}">
    <link href="{{asset("themes/default/css/animate.css")}}" type="text/css" rel="stylesheet">
    <link href="{{asset("themes/default/fonts/font-awesome/css/font-awesome.min.css")}}" type="text/css"
          rel="stylesheet">
    <!-- Stylesheets -->
    <link href="{{asset("themes/default/css/main.min.css")}}" type="text/css" rel="stylesheet">
    <!-- END Stylesheets -->

    <link rel="stylesheet" href="{{asset("themes/default/css/custom.min.css")}}">
    <link rel="stylesheet" href="{{asset("themes/default/css/cnv.min.css")}}">
{{--    <!-- Google Tag Manager -->--}}
{{--    <script>(function (w, d, s, l, i) {--}}
{{--            w[l] = w[l] || [];--}}
{{--            w[l].push({--}}
{{--                'gtm.start':--}}
{{--                    new Date().getTime(), event: 'gtm.js'--}}
{{--            });--}}
{{--            var f = d.getElementsByTagName(s)[0],--}}
{{--                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';--}}
{{--            j.async = true;--}}
{{--            j.src =--}}
{{--                'www.googletagmanager.com/gtm5445.html?id=' + i + dl;--}}
{{--            f.parentNode.insertBefore(j, f);--}}
{{--        })(window, document, 'script', 'dataLayer', 'GTM-KHRWSFK');</script>--}}
{{--    <!-- End Google Tag Manager -->--}}


{{--    <!-- Facebook Pixel Code -->--}}
{{--    <script>--}}
{{--        !function (f, b, e, v, n, t, s) {--}}
{{--            if (f.fbq) return;--}}
{{--            n = f.fbq = function () {--}}
{{--                n.callMethod ?--}}
{{--                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)--}}
{{--            };--}}
{{--            if (!f._fbq) f._fbq = n;--}}
{{--            n.push = n;--}}
{{--            n.loaded = !0;--}}
{{--            n.version = '2.0';--}}
{{--            n.queue = [];--}}
{{--            t = b.createElement(e);--}}
{{--            t.async = !0;--}}
{{--            t.src = v;--}}
{{--            s = b.getElementsByTagName(e)[0];--}}
{{--            s.parentNode.insertBefore(t, s)--}}
{{--        }(window, document, 'script',--}}
{{--            'connect.facebook.net/en_US/fbevents.js');--}}
{{--        fbq('init', '564650284049177');--}}
{{--        fbq('track', 'PageView');--}}
{{--    </script>--}}
{{--    <noscript><img height="1" width="1" style="display:none"--}}
{{--                   src="https://www.facebook.com/tr?id=564650284049177&amp;ev=PageView&amp;noscript=1"--}}
{{--        /></noscript>--}}
{{--    <!-- End Facebook Pixel Code -->--}}
{{--    <!--Start of Zopim Live Chat Script-->--}}

{{--    <!--End of Zopim Live Chat Script-->--}}

{{--    <!-- Google Tag Manager 14/01/2020-->--}}
{{--    <script>(function (w, d, s, l, i) {--}}
{{--            w[l] = w[l] || [];--}}
{{--            w[l].push({--}}
{{--                'gtm.start':--}}
{{--                    new Date().getTime(), event: 'gtm.js'--}}
{{--            });--}}
{{--            var f = d.getElementsByTagName(s)[0],--}}
{{--                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';--}}
{{--            j.async = true;--}}
{{--            j.src =--}}
{{--                'www.googletagmanager.com/gtm5445.html?id=' + i + dl;--}}
{{--            f.parentNode.insertBefore(j, f);--}}
{{--        })(window, document, 'script', 'dataLayer', 'GTM-KQK3JGL');</script>--}}
{{--    <!-- End Google Tag Manager -->--}}

<!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/61cda7c2c82c976b71c41e3a/1fo5leku4';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

</head>
<body class="p-0">

{{--<!-- Google Tag Manager (noscript) -->--}}
{{--<noscript>--}}
{{--    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KHRWSFK"--}}
{{--            height="0" width="0" style="display:none;visibility:hidden"></iframe>--}}
{{--</noscript>--}}
{{--<!-- End Google Tag Manager (noscript) -->--}}

{{--<!-- Google Tag Manager (noscript) 14/01/2020 -->--}}
{{--<noscript>--}}
{{--    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQK3JGL"--}}
{{--            height="0" width="0" style="display:none;visibility:hidden"></iframe>--}}
{{--</noscript>--}}
{{--<!-- End Google Tag Manager (noscript) -->--}}
@php
    $main_url =\App\Models\Config::where("type","=","main_url")->first();
    $features =\App\Models\Config::where("type","=","feature")->get();
@endphp
<div class="sub-header" id="subHeader">
    <div class="container v2">
        <div class="row align-items-center col-mar-0 xs-pad-5">
            <div class="col-lg-2 col-5">
                <a class="logo" href="{{$main_url->value}}" title="">
                    <img src="{{asset("cnv.vn/images/logo.png")}}" alt="" title="">
                </a>
            </div>
            <div class="col-lg-10 col-7 static">
                <div class="position-relative d-flex align-items-center">
                    <nav class="main-nav">
                        <ul>
                            <li><a class="smooth" target="_blank" href="{{$main_url->value}}">Trang chủ</a></li>
                            <li><a class="smooth" target="_blank" href="#">Giới thiệu</a></li>
                            <li><a class="smooth" target="_blank" href="#" title="">Giải pháp</a>
                                <ul>
                                    @foreach($features as $feature)
                                        <li><a class="smooth" href="{{$feature->value}}" title="" target="_blank">
                                                <div class="img"><img
                                                        src="{{$feature->media}}"
                                                        alt="" title=""/></div>
                                                <span><strong>{{$feature->name}} </strong>{{$feature->optional}}</span>
                                            </a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a class="smooth" target="_blank" href="#" title="">Khách
                                    hàng</a></li>
                            <li>
                                <a class="smooth" href="#" target="_blank" title="">Trung
                                    tâm hỗ trợ</a>
                                <ul class="v2">
                                    <li><a class="smooth" href="#" title="">Khuyến mãi</a></li>
                                    <li><a class="smooth" href="#" title="">Hình thức thanh toán</a></li>
                                    <li><a class="smooth" href="#" title="">Kết nối đối tác</a></li>
                                    <li><a class="smooth" href="#" title="">Tài liệu API</a></li>
                                    <li><a class="smooth" href="http://tuyendung.cnv.vn/" target="_blank" title="">Tuyển
                                            dụng</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <a class="smooth scrollToFormContact trial-btn" target="_blank" href="#"
                       title="" rel="nofollow,noindex">Liên hệ</a>
                    <button class="menu-btn v2 m-nav-open" type="button"><i></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<header>
    <div class="container v2">
        <div class="row align-items-center col-mar-0">
            <div class="col-md-2 col-3">
                <a class="logo" href="{{route("index")}}" title="">
                    <img src="{{asset("storage/logos/logo2.png")}}" alt="" title=""/>
                </a>
            </div>
            <div class="col-md-10 col-9 text-right static">
                <nav class="main-nav psy-pane">
                    <ul>
                        <li>
                            <a class="smooth" href="{{route("index")}}" title="">Giới thiệu</a>
                        </li>
                        <li>
                            <a class="smooth" href="{{route("index")}}#khach-hang" title="">Khách hàng</a>
                        </li>
                        <li>
                            <a class="smooth" href="{{route("index")}}#dich-vu" title="">Dịch vụ</a>
                        </li>
                        <li>
                            <a class="smooth" href="{{route("index")}}#dang-ky-tu-van" title="">Đăng ký tư vấn</a>
                        </li>
                        <li>
                            <a class="smooth" href="{{route("blogs")}}" title="">Blog</a>
                        </li>
                    </ul>
                </nav>
                <a class="smooth h-hotline" href="tel:0902244586" title="" rel="nofollow,noindex">Hotline:
                    0902244586</a>
                <button class="menu-btn v2 m-nav-open" type="button"><i></i></button>
            </div>
        </div>
    </div>
</header>

<div class="slider-cas bg psy-section" id="gioi-thieu"
     style="background-image: url('{{asset("themes/default/images/slide.png")}}');">
    <div class="caption">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="title wow fadeInUp" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">Digital <br/>
                        Marketing</h1>
                    <p class="wow fadeInUp" data-wow-delay="0.4s"
                       style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">T&T MEDIA giúp
                        doanh
                        nghiệp có cơ hội tăng lượng khách hàng tiềm năng, tăng doanh thu, quảng bá rộng thương hiệu đến
                        người tiêu dùng.</p>
                    <a class="smooth phone wow fadeInUp" data-wow-delay="0.5s" data-toggle="modal"
                       data-target="#trial-md" title="" rel="nofollow,noindex"
                       style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">Đăng ký tư vấn</a>
                </div>
                <div class="col-lg-6">
                    <div class="caption-img wow fadeInRight" data-wow-delay="0.6s"
                         style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInRight;"><img
                            src="{{asset("themes/default/images/index_05.png")}}" alt="" title=""/></div>
                </div>
            </div>
        </div>
    </div>
</div>


@yield("content")

<footer>
    <div class="container">
        <div class="row col-mar-0">
            <div class="col-lg-5 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <a class="logo" href="{{route("index")}}" title="">
                    <img src="{{asset("storage/logos/logo2.png")}}" alt="" title="" style="width: 170px;">
                </a>
                {{--                <h2 class="f-title">Trung tâm kinh doanh Hồ Chí Minh</h2>--}}
                {{--                <div class="f-line">Tầng 4 - Toà nhà Mhome, 102 Nguyễn Đình Chính<br/>Phường 15, Q. Phú Nhuận, TP.HCM--}}
                {{--                </div>--}}
                {{--                <div class="f-line">Tel: 028-73000 118 - Hotline: 1900 63 64 00</div>--}}
                {{--                <div class="f-line">Số điện thoại tiếp nhận phàn nàn, khiếu nại: 0936.10.13.15</div>--}}
                <h2 class="f-title">CÔNG TY TNHH GIẢI PHÁP TRUYỀN THÔNG<br> T&T VIỆT NAM</h2>
                <div class="f-line">Mã số thuế: 0106569935</div>
                <div class="f-line">Số 15/88, phố Thái Thịnh 2, Phường Thịnh Quang, Quận Đống Đa,<br> Thành phố Hà Nội,
                    Việt Nam
                </div>
                <div class="f-line">Kỹ thuật: 0902.289.115, Hotline: 0902244586</div>

            </div>
            <div class="col-lg-7">
                <div class="row justify-content-between">
                    <div class="col-xl-auto col-md-4 wow fadeInUp" data-wow-delay="0.1s"
                         style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <h3 class="f-title">T&T Media HOLDINGS</h3>
                        <ul>
                            <li><a class="smooth" href="#">Về chúng tôi</a></li>
                            <li><a class="smooth" href="#" title="">T&T Media là gì</a></li>
                            <li><a class="smooth" href="#" title="">Bảng giá</a></li>
                            <li><a class="smooth" href="https://cnv.vn/mau-giao-dien/mau-giao-dien-420">Kho giao
                                    diện</a></li>
                            <li><a class="smooth" href="#" title="">Khách hàng</a></li>
                            <li><a class="smooth" href="#" title="">Dịch vụ</a></li>

                        </ul>
                    </div>
                    <div class="col-xl-auto col-md-4 wow fadeInUp" data-wow-delay="0.2s"
                         style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <h3 class="f-title">Giải pháp</h3>
                        <ul>
                            <li><a class="smooth" href="#" title="">Website doanh nghiệp</a></li>
                            <li><a class="smooth" href="#" title="">Website bán hàng</a></li>
                            <li><a class="smooth" href="#" title="">Website Thương mại điện tử</a></li>
                            <li><a class="smooth" href="#" title="">Website Omnichannel</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-auto col-md-4 wow fadeInUp" data-wow-delay="0.3s"
                         style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <h3 class="f-title">T&T Media HOLDINGS</h3>
                        <ul>
                            <li><a class="smooth" href="#">Quy định sử dụng</a></li>
                            <li><a class="smooth" href="#">Hình thức
                                    thanh toán</a></li>
                            <li><a class="smooth" href="#" title="">Khuyến mãi</a></li>
                            <li><a class="smooth" href="https://cnv.vn/">Trung tâm hỗ trợ</a></li>
                            <li><a class="smooth" href="#" title="">Tài liệu nhà phát triển</a></li>
                            <li><a class="smooth" href="https://blog.cnv.vn/category/tin-cnv/tuyen-dung/">Tuyển dụng</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="gg-partner">
                    <img src="{{asset("themes/default/images/gg-partner.png")}}" alt="" title="">
                    <div class="text">
                        <h2 class="title">T&T MEDIA</h2>
                        <p>là đối tác cao cấp của <strong>Google Partner</strong></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="row">
                <div class="col-lg-6 text-lg-left text-center">
                    Copyright © 2022 T&T Media Software. All rights reserved.
                </div>
                <div class="col-lg-6 text-lg-right text-center">
                    <p><a class="smooth" href="#" title="">Quy định sử dụng</a> <a class="smooth" href="#" title="">Chính
                            sách bảo mật</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<div id="trial-md" class="modal p-0 fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content trial-md-ct">
            <button type="button" class="md-close" data-dismiss="modal"><i class="ic ic-close"></i></button>
            <h3 class="title">Đăng ký <span>Tư vấn</span></h3>
            <form action="https://cnvdigital.com/form/tu-van" class="form-validate" method="POST">
                <div class="row col-mar-13">
                    <div class="col-sm-6">
                        <p>Họ và tên của bạn</p>
                        <div class="input">
                            <i class="ic ic-user"></i>
                            <input type="text" required="" name="name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <p>Số điện thoại</p>
                        <div class="input">
                            <i class="ic ic-phone"></i>
                            <input type="text" class="numberic" required="" name="phone">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <p>Ngành nghề</p>
                        <div class="input">
                            <i class="ic ic-career" aria-hidden="true"></i>
                            <input type="text" required="" name="career">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <p>Website</p>
                        <div class="input">
                            <i class="ic ic-web"></i>
                            <input type="text" class="numberic" required="" name="website">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <p>Nội dung</p>
                        <div class="input textarea">
                            <i class="ic ic-content"></i>
                            <textarea class="ui-widget-content" required="" id="resizable" rows="7"
                                      name="content"></textarea>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button class="smooth">Đăng ký tư vấn</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{--<div class="sale-off"><a href="https://cnv.vn/googleshopping/"><img src="{{asset("storage/images/popup.jpg")}}" width="249"--}}
{{--                                                                    height="231" caption="false"/></a>--}}
{{--    <button type="button"><i class="ic ic-close"></i></button>--}}
{{--</div>--}}

<a href="tel:0902244586" title="" class="btn-call">
    <strong>0902244586</strong>
    <span><i class="fa fa-phone"></i></span>
</a>

<div class="back-to-top" style="display: block;"><i class="ic ic-backtop"></i></div>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-136220710-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-136220710-1');
</script>


<script src="{{asset("themes/default/js/jquery-2.2.1.min.js")}}"></script>
<script src="{{asset("themes/default/js/bootstrap.min.js")}}"></script>
<script src="{{"themes/default/js/wow.min.js"}}"></script>
<!-- <script src="js/slick.min.js"></script> -->
<script src="{{asset("themes/default/js/slick.min.js")}}"></script>
<script src="{{asset("themes/default/js/script.js")}}"></script>
<script src="{{asset("assets/vendor/plugins.js")}}"></script>
<script src="{{asset("assets/vendor/toastr/toastr.min.js")}}"></script>
<script src="{{asset("assets/vendor/sweetalert2/sweetalert2.min.js")}}"></script>
<script src="{{asset("assets/vendor/ajaxform/jquery.form.min.js")}}"></script>
<script src="{{asset("assets/js/language/vi.js")}}"></script>
<script src="{{asset("assets/js/main.js")}}"></script>
<script src="{{asset("code.jquery.com/ui/1.12.1/jquery-ui.js")}}"></script>
<script>
    $("#resizable").resizable({
        minHeight: 160,
    });

    $('.ui-wrapper').css('width', 0);
    $('.ui-wrapper').css('height', 160);
    $('.ui-widget-content').css('height', 160);
</script>

<script>
    $(document).ready(function () {
        var win = $(window);

        win.scroll(function () {
            $('.main-nav > ul > li > a').each(function () {
                $(this).removeClass('active');
                if ($(this).attr('href') === CNV.categoryActive) {
                    $(this).addClass('active');
                }
            });
        });
    })
</script>
<script>
    $(document).ready(function () {
        $('.cate-box > ul > li span.dropdown-arrow').each(function () {
            $(this).click(function () {
                $(this).parent().children('.sub-cate').slideToggle();
            });
        });
    });
</script>

</body>
</html>
