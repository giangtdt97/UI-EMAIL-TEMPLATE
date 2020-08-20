<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">

        body, body *:not(html):not(style):not(br):not(tr):not(code) {
            font-family: Avenir, Helvetica, sans-serif;
            box-sizing: border-box;
        }
        /* Shukshuk */
        #shukshuk{
            font-family: "Times New Roman", Times, serif;
            font-size: 24px;
            font-weight: 500;
            letter-spacing: -0.456px;
            color: rgb(34, 40, 49);
            vertical-align: middle;
            justify-content: flex-start;
            transform: translate(0px);
            line-height: 28.125px;
            left: 13.8614%;
            right: 33.1683%;
            text-align: center;
            text-transform: lowercase;
        }

        /* Seller */
        #seller{
            font-family: "Times New Roman", Times, serif;
            font-size: 24px;
            font-weight: 500;
            letter-spacing: -0.456px;
            color: #30B6A4;
            vertical-align: middle;
            justify-content: flex-start;
            transform: translate(0px);
            line-height: 28.125px;
            left: 68.8119%;
            text-transform: capitalize;
        }
        #address {
            font-family: "Times New Roman", Times, serif;
            font-size: 12px;
            font-weight: 400;
            letter-spacing: -0.12px;
            color: rgb(78, 86, 97);
            vertical-align: middle;
            text-align: center;
            justify-content: center;
            width: 536px;
            transform: translate(0px, -0.656px);
            line-height: 15.6px;
            height: 48px;
            left: calc(50% - 268px);
            bottom: 63px;
        }
        #shukshuk2020 {
            font-family: "Times New Roman", Times, serif;
            font-size: 12px;
            font-weight: 400;
            letter-spacing: -0.12px;
            color: rgb(172, 180, 180);
            vertical-align: middle;
            text-align: center;
            justify-content: center;
            transform: translate(0px, -0.656px);
            line-height: 15.6px;
            height: 16px;
            left: 41.3333%;
            right: 41.3333%;
            bottom: 23px;
        }
        body {
            position: absolute;
            width: 536px;
            height: 357px;
            left: 32px;
            top: 181px;

            /* Body 14 */
            font-family: "Times New Roman", Times, serif;
            font-style: normal;
            font-weight: normal;
            font-size: 14px;
            line-height: 150%;

            /* or 21px */
            letter-spacing: -0.01em;
            /* Shukshuk Black */
            color: #222831;
        }
        a {
            color: rgb(48, 182, 164);
            font-weight: bold;
        }
        p,
        ul,
        ol,
        blockquote {
            line-height: 1.4;
            text-align: left;
        }
        #notrely {
            align-items: normal;
            color: rgb(0, 0, 0);
            vertical-align: middle;
            justify-content: flex-start;
            width: 536px;
            transform: translate(0px, -1.96px);
            line-height: 21px;
            height: 42px;
            left: 32px;
            top: 570px;
        }

        /* Please do not reply to this email. If you have any questions, reach us out at admin@shukshuk.com Subset */
        #notrely01 {
            font-family: "Times New Roman", Times, serif;
            font-size: 14px;
            font-weight: 400;
            line-height: 21px;
            letter-spacing: -0.14px;
            align-items: normal;
            color: rgb(175, 180, 185);
        }

        /* Please do not reply to this email. If you have any questions, reach us out at admin@shukshuk.com Subset */
        #notrely02 {
            font-family: "Times New Roman", Times, serif;
            font-size: 14px;
            font-weight: 400;
            line-height: 21px;
            letter-spacing: -0.14px;
            align-items: normal;
            color: rgb(48, 182, 164);
        }
        table, th, td {
            border: 1px solid black;
            box-sizing: border-box;
        }

    </style>
</head>
<body>
@include('layout.header')
<hr>
@section('content') @show
<hr>
@include('layout.footer')
</body>

