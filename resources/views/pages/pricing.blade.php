@extends('layouts.app')
@section('pageTitle')
    <title>Wedding Photographers Glasgow, Scotland - Wilson McSheffrey Photography - wedding pricing</title>
    <meta name="description" content="Creative wedding photographers, Glasgow, Scotland. Scottish Wedding photographers. 
    Covering weddings in Glasgow, Edinburgh, Scottish highlands and more - wedding pricing">
@endsection
@section('content')
<div class="jumbotron text-center post m-0 p-0 rounded-0 d-none d-sm-block">        
    <img class="card-img rounded-0" src="/storage/decorative_images/wedding_details.jpg" alt="wedding details, rings, flowers, necklace, drinks">
</div>
<!--mobile banner-->
<div class="jumbotron text-center post m-0 p-0 rounded-0 d-sm-none">        
    <img class="card-img rounded-0" src="/storage/decorative_images/wedding_details_mobile.jpg" alt="wedding details, rings, flowers, necklace, drinks">
</div>
<!---->
@include('inc.navbar') 
    <div class="container">
        <h1>your investment</h1>
        <div>
            <p>Here at Wilson | McSheffrey we specialise in gorgeous natural wedding portraits, with a hint of vintage glamour, 
               complimented by relaxed and unobtrusive reportage to tell the story of your day. Dedicating in total about a
               week of our professional photographic and editing expertise to each individual wedding, you can be guaranteed 
               that your wedding will be given our full attention from start to finish…resulting in fresh, beautiful and 
               unique wedding photographs that will stand the test of time.</p>

            <h6 id="digital"><span><img class="pl-1 mr-3 pb-1 deco2" src="/storage/decorative_images/thistle.png" alt="decorative detail - thistle"></span>Digital Package</h6>

            <p>Full day coverage of your wedding from  preparations through to the first dance. This includes 
                informal reportage coverage of  preparations in the morning, the ceremony, reception drinks and 
                speeches to the evening celebrations….<br><br>As we try to keep our approach as unobtrusive as 
                possible…<br><br>… we like to give you time to mingle with your friends and family while the we 
                shoot some lovely natural candid shots. But at times we will whisk you both away to take some 
                beautiful natural portraits both together as bride and groom and individually {many couples comment
                that these are some of their favourite parts of the day, catching a breath and spending some valuable
                quite time together}.<br><br>Our alternative approach also means that we won’t make you stand on 
                ceremony for endless formal group shots, but instead we will shoot up to eight optional requested 
                small and relaxed groups.<br><br>300+ of the best photographs individually edited in our gorgeous vintage inspired 
                style. We will also edit all your photographs in classic black and white {so that's over 700 photographs 
                in total!}. Please be patient as during busy times this process can take up to four weeks.</p>

            <p>Also included, A password protected online gallery with all edited photographs in a high quality printable 
                file size with no copy or watermarks, ready to be downloaded to your own device, plus 100 miles travel for the 
                photographers.</p>
            
            <p>If you would like more information and details of how to book, we would love to hear from you. Please get in touch via our 
             <a href="/contact">contact form.</a></p>
             <br>

            <h6 id="elopements"><span><img class="pl-1 mr-3 pb-1 deco2" src="/storage/decorative_images/thistle.png" alt="decorative detail - thistle"></span>Elopements</h6>

            <p>Planning on doing something a bit different for your wedding and eloping? We would love to join you on your adventure!
                Wherever in Scotland you are planning to marry, city wedding or in the mountains {or anywhere in-between!} we can be 
                there to provide amazing photographs to show your friends and family.<br><br> Our elopement coverage includes your 
                final preparations, your ceremony, and a photo shoot in the surrounding location, wherever that may be. Also included is 200+ 
                photographs individually edited in our gorgeous vintage inspired style. We will also edit all your photographs in classic black 
                and white and upload them to a password protected online gallery with all edited photographs in a high quality printable 
                file size with no copy or watermarks, ready to be downloaded to your own device.</p>

            <p>If you would like tell us about your plans and recieve more information and details of how to book, we would love to hear from you. 
                Please get in touch via our <a href="/contact">contact form.</a></p>
                <br>

            <h6 id="couples"><span><img class="pl-1 mr-3 pb-1 deco2" src="/storage/decorative_images/thistle.png" alt="decorative detail - thistle"></span>Couples Shoots</h6>
            <p>Do you live in or are visiting Scotland and love the idea of a romantic photoshoot in the wilds of the 
                Highlands or among the cobbled streets of one of Scotlands historic cities. If you would like to discuss a couples
                shoot, please get in <a href="/contact">touch</a> and we can give you more information and talk through any ideas
                you have.
            </p><br>

            <h6 id="albums"><span><img class="pl-1 mr-3 pb-1 deco2" src="/storage/decorative_images/thistle.png" alt="decorative detail - thistle"></span>Albums</h6>
            <p>Beautiful handmade fine art wedding albums supplied by <a  title="Wedding albums" href="http://www.folioalbums.com/">Folio Albums</a>
             also available on request, please <a href="/contact">contact us</a> for pricing.</p>

            <p></p>
        </div>
    </div>
@include('inc.contact')
@include('inc.footer')
@endsection