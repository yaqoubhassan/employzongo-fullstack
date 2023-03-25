@extends('layouts.actions')

@section('custom-style')
<style>
    .error-icon {
        border-radius: 50%;
        border: 4px solid #f27474;
        box-sizing: content-box;
        height: 80px;
        width: 80px;
        padding: 0;
        position: relative;
        background-color: #fff;
        animation: animateErrorIcon 0.5s;
    }

    .error-icon:after,
    .error-icon:before {
        background: #fff;
        content: "";
        height: 120px;
        position: absolute;
        transform: rotate(45deg);
        width: 60px;
    }

    .error-icon:before {
        border-radius: 40px 0 0 40px;
        width: 26px;
        height: 80px;
        top: -17px;
        left: 5px;
        transform-origin: 60px 60px;
        transform: rotate(-45deg);
    }

    .error-icon:after {
        border-radius: 0 120px 120px 0;
        left: 30px;
        top: -11px;
        transform-origin: 0 60px;
        transform: rotate(-45deg);
        animation: rotatePlaceholder 4.25s ease-in;
    }

    .error-x {
        display: block;
        position: relative;
        z-index: 2;
    }

    .error-placeholder {
        border-radius: 50%;
        border: 4px solid rgba(200, 0, 0, 0.2);
        box-sizing: content-box;
        height: 80px;
        left: -4px;
        position: absolute;
        top: -4px;
        width: 80px;
        z-index: 2;
    }

    .error-fix {
        background-color: #fff;
        height: 90px;
        left: 28px;
        position: absolute;
        top: 8px;
        transform: rotate(-45deg);
        width: 5px;
        z-index: 1;
    }

    .error-left,
    .error-right {
        border-radius: 2px;
        display: block;
        height: 5px;
        position: absolute;
        z-index: 2;
        background-color: #f27474;
        top: 37px;
        width: 47px;
    }

    .error-left {
        left: 17px;
        transform: rotate(45deg);
        animation: animateXLeft 0.75s;
    }

    .error-right {
        right: 16px;
        transform: rotate(-45deg);
        animation: animateXRight 0.75s;
    }

    @keyframes rotatePlaceholder {

        0%,
        5% {
            transform: rotate(-45deg);
        }

        100%,
        12% {
            transform: rotate(-405deg);
        }
    }

    @keyframes animateErrorIcon {
        0% {
            transform: rotateX(100deg);
            opacity: 0;
        }

        100% {
            transform: rotateX(0deg);
            opacity: 1;
        }
    }

    @keyframes animateXLeft {

        0%,
        65% {
            left: 82px;
            top: 95px;
            width: 0;
        }

        84% {
            left: 14px;
            top: 33px;
            width: 47px;
        }

        100% {
            left: 17px;
            top: 37px;
            width: 47px;
        }
    }

    @keyframes animateXRight {

        0%,
        65% {
            right: 82px;
            top: 95px;
            width: 0;
        }

        84% {
            right: 14px;
            top: 33px;
            width: 47px;
        }

        100% {
            right: 16px;
            top: 37px;
            width: 47px;
        }
    }
</style>
@endsection


@section('content')
<div class="error-icon">
    <div class="error-x">
        <div class="error-left"></div>
        <div class="error-right"></div>
    </div>
    <div class="error-placeholder"></div>
    <div class="error-fix"></div>
</div>
@yield('sub-content')
@endsection