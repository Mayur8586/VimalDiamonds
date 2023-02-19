@extends('FrontEnd\layout')
@section('content')
<style>
    p {
        text-align: justify;


    }
</style>
<div class="container-xxl pt-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="my-4 py-4"> Return Policy</h1>
            <h6 class="text-primary text-start">Buyback guarantee</h6>
            <p>
                We provide a buyback guarantee to our customers for a maximum period of 7 days from the order date.
            </p>

            <h6 class="text-primary text-start">Non Refundable items</h6>
            <ul class="text-start">
                <li class="">Return of Customized and engraved products are not allowed.</li>
                <li class="">Special orders are not eligible for return or exchange. They are final sale that cannot be returned.</li>
                <li class="">Shipping fees are not eligible for a refund.</li>
                <li class="">Returns without the return id will be refused immediately on the receipt. If there is any missing paperwork or product, the request won’t be processed. It is advised that you double-check everything before you return the items to us.</li>
                <li class="">Please make sure to pick the correct jewelry size at the time of purchase because they are non-refundable once customized or altered.</li>
            </ul>

            <h6 class="text-primary text-start pt-3">Damaged items</h6>
            <p>
            We make every possible effort to deliver all your orders in perfect condition. If you receive the order in a damaged condition, you can call us at {{$data->mobile}}. You need to share the unboxing video with us to confirm the same. Keep all the packaging unless instructed by {{$data->companyname}}. If you want to claim for damaged or missing items, it must be reported immediately or within 7 days from the date you received your order. Please note, {{$data->companyname}} is not responsible for lost or damaged returned orders.
            </p>

            <h6 class="text-primary text-start pt-3">Exchange an order</h6>
            <p>You are eligible to exchange the order within 7 days of the date when the order was shipped to you. First, you need to return the item for a refund. We will check whether the returned item is in the original and unused condition or not. After we confirm positively, your {{$data->companyname}} account will be credited. It should take around 7 days for the refund to be processed and the credit to reflect in your account. For any queries, <a href="/contact">Get In Touch</a></p>


            <h6 class="text-primary text-start pt-3">Return items in unused condition</h6>
            <p>
            If you are returning the order, you need to make sure the jewelry is in the same condition as it was sent to you. That is it should be in the original packaging and tags. There should be no damage done to the order, otherwise, the return request would be canceled.
            </p>

            <h6 class="text-primary text-start pt-3">Get your return request number</h6>
            <p>
            Call {{$data->mobile}} to get in touch with a member of our customer care team. After the call, you will receive an email on your registered email id with all the instructions you need to follow while returning the order. Also, you will receive your unique return request number.
            </p>

            <h6 class="text-primary text-start pt-3">Get you shipping and insurance sorted</h6>
            <p>
            You can take assistance regarding courier services from our service team. Alternatively, you can arrange the return. Make sure that your local carrier will insure your jewelry to the value that was paid.
            </p>

            <h6 class="text-primary text-start pt-3">Pack your items securely and with care</h6>
            <p>
            Return the order in the same box and packaging you received it. Write the unique return request number on the shipping box to be returned. If your return is for refund or exchange and it is certified diamonds, please include received diamond certificate or all grading reports. Diamond grading reports and certificates are not required for repairs and resizing. If your return is without the diamond certificate, you will be charged for the replacement cost. Mention the address of {{$data->companyname}} office on the box.
            </p>

            <h6 class="text-primary text-start pt-3">Quality check on the receipt of the returned order</h6>
            <p>
            We make every effort to quickly process your returns. Once we receive your shipment, you will get an email regarding the same. We will update the information on our return portal within 24 hours of the receipt. The order is sent to our quality assurance team. A thorough quality check will be conducted before processing your request. It takes 5 to 15 days to complete the process. Once your return request is approved, you will get an email for the confirmation and the credit will reflect in your bank account within 7 business working days.
            </p>

            <h6 class="text-primary text-start pt-3">Refund period</h6>
            <p>
            The refund will be credited in your account within 7 business working days after the return request has been accepted.
            </p>

            <h6 class="text-primary text-start pt-3">Returns tracking</h6>
            <p>
            Check the status of your returned order through the emails we will send on your registered email id.
            </p>

            <h6 class="text-primary text-start pt-3">Cancel or change order</h6>
            <p>
            If you decide to cancel or modify the order, get in touch at ({{$data->mobile}}). We will make every effort to make the best possible action provided the order hasn’t been processed through our system. But, we cannot accommodate exchanges or cancellation on special order requests and the orders that have already been shipped. The rerouting of packages to alternate addresses is not possible once the order is in transit. You can contact us if you want the package to be held for collection. If you want to cancel the order that has already been shipped, please get in touch to set up a merchandised return once you receive the order.
            </p>

        </div>

    </div>
</div>




@stop