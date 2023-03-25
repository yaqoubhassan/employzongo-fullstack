<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <style>
        html,
        body,
        div,
        span,
        applet,
        object,
        iframe,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        blockquote,
        pre,
        a,
        abbr,
        acronym,
        address,
        big,
        cite,
        code,
        del,
        dfn,
        em,
        img,
        ins,
        kbd,
        q,
        s,
        samp,
        small,
        strike,
        strong,
        sub,
        sup,
        tt,
        var,
        b,
        u,
        i,
        center,
        dl,
        dt,
        dd,
        ol,
        ul,
        li,
        fieldset,
        form,
        label,
        legend,
        table,
        caption,
        tbody,
        tfoot,
        thead,
        tr,
        th,
        td,
        article,
        aside,
        canvas,
        details,
        embed,
        figure,
        figcaption,
        footer,
        header,
        hgroup,
        menu,
        nav,
        output,
        ruby,
        section,
        summary,
        time,
        mark,
        audio,
        video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }

        /* HTML5 display-role reset for older browsers */
        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav,
        section {
            display: block;
        }

        body {
            line-height: 1;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI",
                Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans",
                "Helvetica Neue", sans-serif;
        }

        ol,
        ul {
            list-style: none;
        }

        blockquote,
        q {
            quotes: none;
        }

        blockquote:before,
        blockquote:after,
        q:before,
        q:after {
            content: "";
            content: none;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        .content-wrapper {
            width: 100vw;
            height: 100vh;
            background-color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .box {
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .box>h2 {
            font-size: xx-large;
            color: #3a3a3a;
            margin-top: 12px;
            margin-bottom: 8px;
        }

        .box>p {
            font-size: large;
            color: #a3a3a3;
            margin-bottom: 32px;
        }

        .action-btn {
            position: relative;
            padding: 16px;
            background-color: #222222;
            /* border: 1px solid #c5c5c5; */
            width: 100%;
            font-size: 16px;
            font-weight: 600;
            color: #ffffff;
            text-transform: capitalize;
            text-decoration: none;
            border-radius: 6px;
            display: inline-block;
        }

        .action-btn:hover {
            background-color: #4caf50;
        }

        .cc {
            position: absolute;
            bottom: 10px;
            left: 30%;
            right: 30%;
            display: flex;
            align-items: center;
            flex-direction: column;
            color: #a3a3a3;
        }

        .cc img {
            width: 40px;
        }

        .cc>p {
            font-size: 12px;
            margin-top: 6px;
        }

        @media screen and (min-width: 768px) {
            .box {
                width: 380px;
            }
        }
    </style>
    @yield('custom-style')
</head>

<body>
    <div class="content-wrapper">
        <div class="box">
            @yield('content')
        </div>
    </div>
    <div class="cc">
        <a href="http://employzongo.com" target="_blank" rel="noopener noreferrer">
            <img src="https://employzongo.com/img/employzongo.png" alt="EmployZongo" />
        </a>
        <p>EmployZongo</p>
    </div>
</body>