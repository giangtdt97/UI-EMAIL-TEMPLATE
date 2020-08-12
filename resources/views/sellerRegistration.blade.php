@extends('layout.master')
@section('content')
    <html>
    <head>
        <style>
            p {
                position: absolute;
                width: 536px;
                height: 357px;
                left: 32px;
                top: 181px;
            }
            html,body{
                /* Body 14 */
                font-family: Inter;
                font-style: normal;
                font-weight: normal;
                font-size: 14px;
                line-height: 150%;

                /* or 21px */
                letter-spacing: -0.01em;

                /* Shukshuk Black */
                color: #222831;
            }
        </style>
    </head>
     <body>
<p>Your Shukshuk seller account has been registered and is pending verification.</p>
     <p> We are working to verify your account and will contact you if we need additional information. We do this to ensure the highest level of security standards for both the merchant and the customer.</p>
     </body>
    </html>
@endsection
