@extends('layout.master')
@section('content')
    <p>Dear  (First Name) (Last Name),</p>
    <p>A customer has placed an order for your product(s). Invoice (Invoice Number)</p>
    <table>
        <tr>
            <th>Reference</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
        </tr>
        <tr>
            <td>ID-123456</td>
            <td>Soy Milk Signature: Chocolate</td>
            <td>2</td>
            <td>27.000</td>
            <td>54.000</td>
        </tr>
    </table>
    <p> If you are unable to fulfil this order, please cancel the order immediately here <a href="#">(Hyperlink to my sales page - order cancellation page)</a>. The order will be automatically cancelled if you do not accept the order within 3 working days.</p>
    <p>Otherwise, to accept the order, please click here <a href="#">(Hyperlink to my sales page - order accept)</a>. Please click this link <a href="#">(Hyperlink to API by 3PL partner)</a> to liaise with our delivery partner to arrange the delivery.</p>
    <p>Click this link <a href="#">(Hyperlink to Shukshuk website)</a> to return to our website.</p>
    <p></p>
    <p>Thanks for being a part of our family!</p>
    <p>Loads of love,</p>
    <p>The Shukshuk Team</p>
    <p></p>
    <div class="subsets left top text" id="n3059_13">
        <span id="n3059_13-6">Please do not reply to this email. If you have any questions, reach us out at </span>
        <span id="n3059_13-8">admin@shukshuk.com</span>
    </div>
@endsection

