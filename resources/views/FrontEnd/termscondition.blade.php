@extends('FrontEnd\layout')
@section('content')
<style>
     p
    {
        text-align: justify;
        
        
    }

    </style>
<div class="container-xxl pt-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" >
            <h1 class="my-4 py-4"> Terms & Conditions</h1>
            <h6 class="text-primary text-start">1. General Terms</h6>
            <p >
            A cordial welcome to our website. This website is operated by {{$data->companyname}}  and it is a prominent diamond manufacturers in Surat. Throughout the site, “we”, “us” or “our” refer to the {{$data->companyname}} . Our terms of use refer to the purchases done by you from our website and website orders shipping to the USA and India. You are requested to go through our terms and conditions before using our website. By using this website or any other website affiliated to {{$data->companyname}}, you acknowledge and agree to be bound by all the points in the Terms & Conditions.
            </p>
            <p>
            These terms and conditions keep a watch on the use of the website or any purchase transaction done by the customer on the website. It constitutes an agreement between the customer and the company. <span class="text-primary">{{$data->companyname}} </span>  has the right to modify the terms and conditions at any given point of time. The modifications will be effective immediately. Thus it is suggested that you review the terms and conditions on regular basis.
            </p>
  


          
            <h6 class="text-primary text-start pt-3">2. Trademark and Copyright</h6>
            <p>
            This is created and claimed by {{$data->companyname}}. All the structure and substance present on the website that includes content, images, videos, wallpapers, themes, illustrations, logos, symbols, programming, and any other relevant information is the property of the {{$data->companyname}} and is ensured by worldwide copyright laws.
            </p>
            <p>
            {{$data->companyname}}, The Expression Of Love, and different imprints indicated on the {{$data->companyname}} site(s) are trademarks as well as administration characteristics of the company. All the illustrations, logos, symbols, headers, contents, demonstrations, and administration names are additional trademarks of {{$data->companyname}}. Every single trademark concerning the items sold on this site is the sole property of {{$data->companyname}}. Nothing mentioned on the site or in the terms and conditions are compulsory to be understood as a permit or authority to utilize any trademarks or administrative imprints showed on the site without the permission of the company.
            </p>


            <h6 class="text-primary text-start pt-3">3. Utilization of website</h6>
            <p>
            {{$data->companyname}} website(s) content and substance are exclusively for the individual and non-business use by the guest visitor and online customers. Any utilization of the sites other than the above-mentioned uses is strictly prohibited. You agree to not imitate, share, transmit, modify, do subordinate works from or financially misuse in any capacity any of the substance or element of the website. But, you may download, electronically duplicate, and print any of the substance of the website for your non-business utilization as it is. This is a revocable permit, not an exchange of title, and is liable to the limitations that you may not (a) adjust the substance or use it for any business reason, or any open presentation, execution, deal or rental, (b) decompile, figure out, or dismantle the substance, or (c) expel any copyright, trademark enrolment, or other exclusive notification from the substance. You commit not to utilize the site in any way that can be harmful or defeats the purpose of the website.
            </p>
 
            <h6 class="text-primary text-start pt-3">4. Obligation</h6>
            <p>
            The Site might allow the collection, sharing, and distribution of the content (names, story, and paragraphs) submitted by you. This is also known as user substance. You can comprehend that user substances are distributed. You will be responsible for your submissions and after the results of posting, distributing, or transferring them. We have a complete eye on the distribution of the user substance. We hold the privilege in our sole prudence and we can erase and evacuate any substance posted on the website under any conditions without providing any notice.
            </p>
            
            <p>
            Licensed innovation Rights’ signifies any rights, titles, and interests, regardless of whether outside or residential, in and to any copyrights, administration imprints, trademarks, or comparable protected innovation rights, just as any ethical rights, privileges of security, exposure and comparable privileges of any kind under the laws or guidelines of any legislative, administrative, or legal expert, remote or household. You have the authority over the majority of the possession rights in and to your user submissions.
            </p>


            <h6 class="text-primary text-start pt-3">5. Products and Availability</h6>
            <p>
            There might be instances when the order has been confirmed but it gets canceled after confirmation due to the unavailability of the product. We make every possible effort to ensure that the displayed products are in stock, but some items might have high demand and get sold immediately, there might be a short period after the submission of an order and the order is no longer available. Thus, you agree that we can cancel your order after you have received a notification of “order confirmation” without penalty.
            </p>
            <p>
            There might be rare instances when you receive a shipping confirmation from us due to the unavailability of the products in our inventory in later days, we may rescind our acceptance and cancel your order without any penalty. You agree to that.
            </p>
            <p>
            If you’re interested in a piece of {{$data->companyname}} diamonds that is currently on backorder, you can contact us and we will tell you when the item will be back in stock. Due to the volume of orders we receive, sometimes an item may go out of stock before we can post a notification on the site because of the volume of orders we receive at a particular point of time. In case this situation arises, we will contact you directly to discuss possible options.
            </p>

            <h6 class="text-primary text-start pt-3">6. Pricing</h6>
            <p>
            We hold the right to change the prices of the products listed on our website without any prior notice. There might be instances of typographical errors and wrong prices might get displayed on the website. We make every possible effort to avoid any errors or inaccuracies on the website but they may occur. If there is an instance of any kind of error, we hold the right to change the information and we do not promote inaccurate prices.
            </p>
            <p>
            If the product’s price is lower than the actual price, we will notify by either contacting you before shipping the order or cancel the order and notify you of such cancellation. If the order has been shipped already, you are required to pay the difference between the actual and charged prices. We apologize for the inconvenience that this might cause. In case of any queries, you can get in touch with us at Contact <span class="text-primary">({{$data->mobile}})</span> or Email Id  <span class="text-primary">({{$data->email}})</span>.
            </p>

            <h6 class="text-primary text-start pt-3">7. Payment Information</h6>
            <p>
            Once, you chose {{$data->companyname}}, you will be asked to provide the shipping information. When we have the shipping details, you are required to do the payment. You are required to pay for the orders only via bank wire.
            </p>

            <h6 class="text-primary text-start pt-3">8. Sales and Prices Reductions</h6>
            <p>
            We at {{$data->companyname}} strive to provide the best and affordable price to the customers without compromising on the quality. The price negotiation will depend on the size of the order and does not apply to all the orders.
            </p>


            <h6 class="text-primary text-start pt-3">9. Payments Methods</h6>
            <p>
            We accept the payment only via Bank Wire. Your jewelry will be sent only after the receipt of the payment to our bank.
            </p>


            <h6 class="text-primary text-start pt-3">10. Delivery Insurance</h6>
            <p>
            We understand that diamonds are valuable products so the {{$data->companyname}} shipments are fully insured during the transit until they reach your door. For added security, we take your signature upon the delivery of the order. So make sure you or someone you know is there to sign for it.
            </p>

            <h6 class="text-primary text-start pt-3">11. Diamond certificates</h6>
            <p>
            When you order certified diamonds, it will be sent to you with a relevant grading report or diamond certificate. In case you return the order, these grading reports need to be submitted along with the order. These grading reports are detailed documents that are compiled carefully by our diamond grading experts. These reports are expensive to replace so it is our sincere request to return them with the order. The failure to do so will cause you to pay the replacement fee.
            </p>


            <h6 class="text-primary text-start pt-3 py-1">(Failure to abide by the aforementioned regulations may lead to legal action.)</h6>
        </div>

    </div>
</div>




@stop