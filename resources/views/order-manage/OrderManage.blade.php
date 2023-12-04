@extends('layouts.default')
@section('styles')
@include('partials.polaris_skeleton_css')
@vite(['resources/js/app.js'])
@section('content')

<main class="Polaris-Frame__Main">
    <div class="Polaris-Frame__Content">
        <div class="Polaris-Page">
            <input type="hidden" class="deliveryLocationId" value="">
            <div class="Polaris-Box" style="--pc-box-padding-block-end-xs:var(--p-space-4);--pc-box-padding-block-end-md:var(--p-space-5);--pc-box-padding-block-start-xs:var(--p-space-4);--pc-box-padding-block-start-md:var(--p-space-5);--pc-box-padding-inline-start-xs:var(--p-space-4);--pc-box-padding-inline-start-sm:var(--p-space-0);--pc-box-padding-inline-end-xs:var(--p-space-4);--pc-box-padding-inline-end-sm:var(--p-space-0);position:relative">
                <div class="Polaris-Page-Header--mediumTitle">
                    <div class="Polaris-Page-Header__Row">
                        <div class="Polaris-Page-Header__BreadcrumbWrapper">
                        <div class="Polaris-Box Polaris-Box--printHidden" style="--pc-box-max-width:100%;--pc-box-padding-inline-end-xs:var(--p-space-4)">
                            <nav role="navigation">
                            <a class="Polaris-Breadcrumbs__Breadcrumb order-back-btn" href="#" data-polaris-unstyled="true">
                                <span class="Polaris-Breadcrumbs__Icon">
                                <span class="Polaris-Icon">
                                    <span class="Polaris-Text--root Polaris-Text--visuallyHidden">
                                    </span>
                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                    <path d="M17 9h-11.586l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414l-3.293-3.293h11.586a1 1 0 1 0 0-2z">
                                    </path>
                                    </svg>
                                </span>
                                </span>
                                <span class="Polaris-Text--root Polaris-Text--visuallyHidden">Settings</span>
                            </a>
                            </nav>
                        </div>
                        </div>
                        <div class="Polaris-Page-Header__TitleWrapper">
                        <h1 class="Polaris-Header-Title">Order Manage</h1>
                        </div>
                        <div class="Polaris-Page-Header__RightAlign">
                        <div class="Polaris-Page-Header__PrimaryActionWrapper">
                            <div class="Polaris-Box Polaris-Box--printHidden">
                            <button class="Polaris-Button Polaris-Button--primary  Polaris-Button--disabled order-manage-save" type="button">
                                <span class="Polaris-Button__Content">
                                <span class="Polaris-Button__Text">Save</span>
                                </span>
                            </button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Polaris-Layout">
                <div class="Polaris-Layout__Section">
                    <div class="Polaris-Box" style="--pc-box-background:var(--p-color-bg);--pc-box-border-radius:var(--p-border-radius-2);--pc-box-overflow-x:hidden;--pc-box-overflow-y:hidden;--pc-box-padding-block-end-xs:var(--p-space-4);--pc-box-padding-block-end-sm:var(--p-space-5);--pc-box-padding-block-start-xs:var(--p-space-4);--pc-box-padding-block-start-sm:var(--p-space-5);--pc-box-padding-inline-start-xs:var(--p-space-4);--pc-box-padding-inline-start-sm:var(--p-space-5);--pc-box-padding-inline-end-xs:var(--p-space-4);--pc-box-padding-inline-end-sm:var(--p-space-5);--pc-box-shadow:var(--p-shadow-md)">
                        
                        <div class="Polaris-LegacyStack Polaris-LegacyStack--vertical">
                            <div class="Polaris-LegacyStack__Item">
                                <h2 class="Polaris-Text--root Polaris-Text--headingMd">Products</h2>
                            </div>
                            @foreach($line_items as $item)
                            <div class="Polaris-LegacyStack__Item">
                                <div class="Polaris-HorizontalGrid" style="--pc-horizontal-grid-grid-template-columns-xs:1fr auto">
                                    <div class="Polaris-HorizontalGrid" style="--pc-horizontal-grid-grid-template-columns-xs:auto 1fr;--pc-horizontal-grid-gap-xs:var(--p-space-5)">
                                            <div class="Polaris-HorizontalStack" style="--pc-horizontal-stack-block-align:start;--pc-horizontal-stack-wrap:wrap;--pc-horizontal-stack-gap-xs:var(--p-space-4);position: relative;">
                                                <span class="Polaris-Thumbnail Polaris-Thumbnail--sizeMedium">
                                                    <img alt="" src="{{$item['node']['image']['url']}}">
                                                </span>
                                                <span class="Polaris-Badge" style="position: absolute;right: -15px;top: -13px;background: gray;color: #fff;">
                                                    <span class="Polaris-Text--root Polaris-Text--bodySm">{{$item['node']['quantity']}}</span>
                                                </span>
                                            </div>
                                            <div class="Polaris-HorizontalStack" style="--pc-horizontal-stack-block-align:start;--pc-horizontal-stack-wrap:wrap;--pc-horizontal-stack-gap-xs:var(--p-space-4)">
                                                <div class="Polaris-Box" style="--pc-box-padding-block-end-xs:var(--p-space-0);--pc-box-padding-block-start-xs:var(--p-space-0);--pc-box-padding-inline-start-xs:var(--p-space-0);--pc-box-padding-inline-end-xs:var(--p-space-0);--pc-box-width:100%">
                                                <h3 class="Polaris-Text--root Polaris-Text--bodyMd Polaris-Text--headingXl">
                                                    <a href="#" class="product-redirect" data-vid="{{$item['node']['variant']['id']}}" data-id="{{$item['node']['product']['id']}}">
                                                        {{$item['node']['title']}}
                                                    </a>
                                                </h3>
                                                <div>{{$item['node']['variantTitle']}}</div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="Polaris-Layout__Section Polaris-Layout__Section--secondary">
                    <div class="Polaris-LegacyCard">
                        <div class="Polaris-LegacyCard__Header">
                            <div class="Polaris-LegacyStack Polaris-LegacyStack--alignmentBaseline">
                            <div class="Polaris-LegacyStack__Item Polaris-LegacyStack__Item--fill">
                                <h2 class="Polaris-Text--root Polaris-Text--headingMd">Additional Details</h2>
                            </div>
                            <div class="Polaris-LegacyStack__Item">
                                <div class="Polaris-ButtonGroup">
                                <div class="Polaris-ButtonGroup__Item Polaris-ButtonGroup__Item--plain">
                                    <button class="Polaris-Button Polaris-Button--plain edit-order-triger"  type="button">
                                    <span class="Polaris-Button__Content">
                                        <span class="Polaris-Button__Text">Edit</span>
                                    </span>
                                    </button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="Polaris-LegacyCard__Section">
                            <div class="Polaris-LegacyStack Polaris-LegacyStack--vertical edit-order-details">
                                @if($customAttributes)
                                @foreach($customAttributes as $customAttribute)
                                @if( $customAttribute['key'] == 'Checkout-Method')
                                <div class="Polaris-LegacyStack__Item">
                                    <p class="Polaris-Text--root Polaris-Text--bold">{{$customAttribute['key']}}</p>
                                    <p class="Polaris-Text--root Polaris-Text--regular">{{$customAttribute['value']}}</p>
                                </div>
                                @elseif($customAttribute['key'] == 'Delivery-Location-Id')
                                <div class="Polaris-LegacyStack__Item">
                                    <p class="Polaris-Text--root Polaris-Text--bold">{{$customAttribute['key']}}</p>
                                    <p class="Polaris-Text--root Polaris-Text--regular">{{$customAttribute['value']}}</p>
                                </div>
                                @elseif($customAttribute['key'] == 'Delivery-Date')
                                <div class="Polaris-LegacyStack__Item">
                                    <p class="Polaris-Text--root Polaris-Text--bold">{{$customAttribute['key']}}</p>
                                    <p class="Polaris-Text--root Polaris-Text--regular">{{$customAttribute['value']}}</p>
                                </div>
                                @elseif($customAttribute['key'] == 'Delivery-Time')
                                <div class="Polaris-LegacyStack__Item">
                                    <p class="Polaris-Text--root Polaris-Text--bold">{{$customAttribute['key']}}</p>
                                    <p class="Polaris-Text--root Polaris-Text--regular">{{$customAttribute['value']}}</p>
                                </div>
                                @endif
                                @endforeach
                                @else
                                <p>No Additional Details</p>
                                
                                @endif
                            </div>
                        </div>
                        </div>
                        @if($customer != '')
                        <div class="Polaris-LegacyCard">
                            <div class="Polaris-LegacyCard__Header">
                                <div class="Polaris-LegacyStack Polaris-LegacyStack--alignmentCenter">
                                <div class="Polaris-LegacyStack__Item Polaris-LegacyStack__Item--fill">
                                    <h2 class="Polaris-Text--root Polaris-Text--headingMd">Customer</h2>
                                </div>
                                <div class="Polaris-LegacyStack__Item">
                                    <div class="Polaris-ButtonGroup">
                                    <div class="Polaris-ButtonGroup__Item Polaris-ButtonGroup__Item--plain">
                                        <span aria-label="Farrah" role="img" class="Polaris-Avatar Polaris-Avatar--sizeMedium Polaris-Avatar--shapeRound">
                                            <span class="Polaris-Avatar__Initials">
                                                <svg class="Polaris-Avatar__Svg" viewBox="0 0 40 40">
                                                <path fill="currentColor" d="M8.28 27.5A14.95 14.95 0 0120 21.8c4.76 0 8.97 2.24 11.72 5.7a14.02 14.02 0 01-8.25 5.91 14.82 14.82 0 01-6.94 0 14.02 14.02 0 01-8.25-5.9zM13.99 12.78a6.02 6.02 0 1112.03 0 6.02 6.02 0 01-12.03 0z">
                                                </path>
                                                </svg>
                                            </span>
                                        </span>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="Polaris-LegacyCard__Section">
                                <h6 class="Polaris-Text--root Polaris-Text--headingMd">{{ $customer['firstName']}} {{$customer['lastName']}}</h6>
                                <a target="_blank" class="Polaris-Link" href="#" rel="noopener noreferrer" data-polaris-unstyled="true">{{$customer['email']}}</a>
                            </div>
                        </div>
                        @endif
                    </div>
            </div>
        </div>
    </div>
    <div id="PolarisPortalsContainer" class="edit-order-modal">
        <div data-portal-id="modal-:Rln6:">
            <div>
                <div class="Polaris-Modal-Dialog__Container" data-polaris-layer="true" data-polaris-overlay="true">
                    <div>
                        <div role="dialog" aria-modal="true" aria-label=":R1n6:" aria-labelledby=":R1n6:" tabindex="-1" class="Polaris-Modal-Dialog">
                            <div class="Polaris-Modal-Dialog__Modal">
                                <div class="Polaris-Box" style="--pc-box-border-color: var(--p-color-border-subdued); --pc-box-border-style: solid; --pc-box-border-block-end-width: var(--p-border-width-1); --pc-box-padding-block-end-xs: var(--p-space-4); --pc-box-padding-block-start-xs: var(--p-space-4); --pc-box-padding-inline-start-xs: var(--p-space-5); --pc-box-padding-inline-end-xs: var(--p-space-5);">
                                <div class="Polaris-HorizontalGrid" style="--pc-horizontal-grid-grid-template-columns-xs: 1fr auto; --pc-horizontal-grid-gap-xs: var(--p-space-4);">
                                <div class="Polaris-HorizontalStack" style="--pc-horizontal-stack-block-align: center; --pc-horizontal-stack-wrap: wrap; --pc-horizontal-stack-gap-xs: var(--p-space-4);">
                                <h2 class="Polaris-Text--root Polaris-Text--headingLg Polaris-Text--break" id=":R1n6:">
                                    Edit Order
                                </h2>
                            </div>
                            <button class="Polaris-Modal-CloseButton" aria-label="Close">
                                <span class="Polaris-Icon Polaris-Icon--colorBase Polaris-Icon--applyColor">
                                    <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true"><path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414l-6.293 6.293-6.293-6.293a1 1 0 0 0-1.414 1.414l6.293 6.293-6.293 6.293a1 1 0 1 0 1.414 1.414l6.293-6.293 6.293 6.293a.998.998 0 0 0 1.707-.707.999.999 0 0 0-.293-.707l-6.293-6.293z"></path></svg>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="Polaris-Modal__Body Polaris-Scrollable Polaris-Scrollable--vertical Polaris-Scrollable--horizontal" data-polaris-scrollable="true">
                        <div class="Polaris-Modal-Section">
                            <section class="Polaris-Box" style="--pc-box-padding-block-end-xs: var(--p-space-5); --pc-box-padding-block-start-xs: var(--p-space-5); --pc-box-padding-inline-start-xs: var(--p-space-5); --pc-box-padding-inline-end-xs: var(--p-space-5);">
                            <div class="Polaris-TextContainer">

                                <div class="delivy-location">
                                    <div class="Polaris-Labelled__LabelWrapper">
                                        <div class="Polaris-Label">
                                        <label id=":R1n6:Label" for=":R1n6:" class="Polaris-Label__Text">Delivery Location</label>
                                        </div>
                                    </div>
                                    <div class="Polaris-Select">
                                        <select id=":R1n6:" class="Polaris-Select__Input edit-order-selector" aria-invalid="false">
                                         <option value="241789" data-type="normal" selected="">ZRH Normal</option>
                                         <option value="241789" data-type="express">ZRH Express</option>
                                         <option value="2457895" data-type="normal">CH Normal</option>
                                         <option value="2457895" data-type="express">CH Express</option>  
                                        </select>
                                        <div class="Polaris-Select__Content" aria-hidden="true">
                                        <span class="Polaris-Select__SelectedOption">ZRH Normal</span>
                                        <span class="Polaris-Select__Icon">
                                            <span class="Polaris-Icon">
                                            <span class="Polaris-Text--root Polaris-Text--visuallyHidden">
                                            </span>
                                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                <path d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                </path>
                                            </svg>
                                            </span>
                                        </span>
                                        </div>
                                        <div class="Polaris-Select__Backdrop">
                                        </div>
                                    </div>
                                </div>
                                <div class="delivy-date">
                                    <div class="Polaris-Labelled__LabelWrapper">
                                        <div class="Polaris-Label">
                                        <label id=":R1n6:Label" for=":R1n6:" class="Polaris-Label__Text">Delivery Date</label>
                                        </div>
                                    </div>
                                    <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                        <div class="Polaris-TextField">
                                            <div class="Polaris-TextField__Prefix" id="PolarisTextField29-Prefix">
                                                <span class="Polaris-Icon Polaris-Icon--applyColor">
                                                    <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                        <path fill-rule="evenodd" d="M17.5 2h-2.5v-1a1 1 0 1 0-2 0v1h-7v-1a1 1 0 0 0-2 0v1h-1.5c-.8 0-1.5.7-1.5 1.5v15c0 .8.7 1.5 1.5 1.5h15c.8 0 1.5-.7 1.5-1.5v-15c0-.8-.7-1.5-1.5-1.5zm-14.5 16h14v-10h-14v10z"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                            <input id="PolarisTextField29" placeholder="Select a date ..." autocomplete="off" class="Polaris-TextField__Input delivery_date" type="date" aria-labelledby="PolarisTextField29Label PolarisTextField29-Prefix" aria-invalid="false" value="" tabindex="0" aria-controls="Polarispopover6" aria-owns="Polarispopover6" aria-expanded="false">
                                            <div class="Polaris-TextField__Backdrop"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="delivy-time">
                                    <div class="Polaris-Labelled__LabelWrapper">
                                        <div class="Polaris-Label">
                                        <label id=":R1n6:Label" for=":R1n6:" class="Polaris-Label__Text">Delivery Time</label>
                                        </div>
                                    </div>
                                    <div class="Polaris-Select slotEditorDiv">
                                        <select id=":R1n6:" class="Polaris-Select__Input edit-slot-selector" aria-invalid="false">
                                       
                                        </select>
                                        <div class="Polaris-Select__Content" aria-hidden="true">
                                        <span class="Polaris-Select__SelectedOption selectedSlot"></span>
                                        <span class="Polaris-Select__Icon">
                                            <span class="Polaris-Icon">
                                            <span class="Polaris-Text--root Polaris-Text--visuallyHidden">
                                            </span>
                                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                <path d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                </path>
                                            </svg>
                                            </span>
                                        </span>
                                        </div>
                                        <div class="Polaris-Select__Backdrop">
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </section>
                    </div>
                </div>
                
                <div class="Polaris-HorizontalStack" style="--pc-horizontal-stack-block-align: center; --pc-horizontal-stack-wrap: wrap; --pc-horizontal-stack-gap-xs: var(--p-space-4);">
                <div class="Polaris-Box" style="--pc-box-border-color: var(--p-color-border-subdued); --pc-box-border-style: solid; --pc-box-border-block-start-width: var(--p-border-width-1); --pc-box-min-height: var(--p-space-16); --pc-box-padding-block-end-xs: var(--p-space-4); --pc-box-padding-block-start-xs: var(--p-space-4); --pc-box-padding-inline-start-xs: var(--p-space-5); --pc-box-padding-inline-end-xs: var(--p-space-5); --pc-box-width: 100%;">
                <div class="Polaris-HorizontalStack" style="--pc-horizontal-stack-align: space-between; --pc-horizontal-stack-block-align: center; --pc-horizontal-stack-wrap: wrap; --pc-horizontal-stack-gap-xs: var(--p-space-4);">
                <div class="Polaris-Box"></div>
                <div class="Polaris-HorizontalStack" style="--pc-horizontal-stack-wrap: wrap; --pc-horizontal-stack-gap-xs: var(--p-space-2);">
                    <button class="Polaris-Button edit-order-close" type="button">
                        <span class="Polaris-Button__Content">
                            <span class="Polaris-Button__Text">
                                Cancel
                            </span>
                        </span>
                    </button>
                    <button class="Polaris-Button Polaris-Button--primary save-edit-order" type="button">
                        <span class="Polaris-Button__Content">
                            <span class="Polaris-Button__Text">
                                Save
                            </span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
<div class="Polaris-Backdrop">

</div>
</div>
</div>
</main>
@endsection

@section('scripts')
@parent

@if(config('shopify-app.appbridge_enabled'))
<script>
     const redirect = actions.Redirect.create(app);
     const loading = actions.Loading.create(app);
     const toastOptions = {
      message: 'draft order Saved',
      duration: 5000,
     };

     const toastNotice = actions.Toast.create(app, toastOptions);

     $(".order-back-btn").on("click",function(e){
        e.preventDefault();
        redirect.dispatch(actions.Redirect.Action.ADMIN_PATH, '/draft_orders/'+{{$id}});
     });

     $(".product-redirect").on("click",function(e){
        e.preventDefault();
        let vid = $(this).attr("data-vid").replace("gid://shopify/ProductVariant/","");
        let id = $(this).attr("data-id").replace("gid://shopify/Product/","");
        redirect.dispatch(actions.Redirect.Action.ADMIN_SECTION, {
            section: {
                name: actions.Redirect.ResourceType.Product,
                resource: {
                    id: id,
                    variant: {
                    id: vid,
                    },
                },
            },
            newContext: true,
        });
     });

     function convertTo12HourFormat(time24) {
        // Split the time into hours and minutes
        var timeParts = time24.split(":");
        var hours = parseInt(timeParts[0]);
        var minutes = parseInt(timeParts[1]);

        // Determine AM or PM
        var meridiem = hours >= 12 ? "PM" : "AM";

        // Convert hours to 12-hour format
        hours = hours % 12;
        hours = hours === 0 ? 12 : hours;

        // Create the 12-hour formatted time string
        var time12 = hours.toString().padStart(2, "0") + ":" + minutes.toString().padStart(2, "0") + " " + meridiem;

        return time12;
    }

    function formatDateToYYYYMMDD(inputDate) {
        // Create a Date object from the inputDate string or timestamp
        const dateObj = new Date(inputDate);

        // Extract year, month, and day
        const year = dateObj.getFullYear();
        const month = String(dateObj.getMonth() + 1).padStart(2, '0'); // Months are zero-based, so add 1
        const day = String(dateObj.getDate()).padStart(2, '0');

        // Format the date to "yyyy/mm/dd"
        const formattedDate = `${year}/${month}/${day}`;

        return formattedDate;
    }

    var today = new Date();
    var month = String(today.getMonth() + 1).padStart(2, '0');
    var day = String(today.getDate()).padStart(2, '0');
    var year = today.getFullYear();
    var formattedDate = year + '-' + month + '-' + day;
    document.getElementById('PolarisTextField29').value = formattedDate;

     $(".delivery_date").on('change', function(){
        loading.dispatch(actions.Loading.Action.START);
        var locationId = $(".delivy-location").find("option:selected").val();
        var deliveryType = $(".delivy-location").find("option:selected").data('type');
        var selectedDate = $(".delivery_date").val();
        var selectedSlot = $(".selectedSlot");
        var dateObject = new Date(selectedDate);
        var day = dateObject.getDay();
        window.axios.post('/slots', { 
            location_id: locationId,
            delivery_type: deliveryType,
            week_day_id : day,
        }).then(function (response) {
            console.log(response.data);
            var slots = response.data;
            var html = '';
            if(slots){
                $.each(slots, function(key, val){
                    if(key == 0){
                        $('.deliveryLocationId').val(val.delivery_location_id);
                        html += `<option value="`+val.from+` - `+ val.until + `" selected="">`+ convertTo12HourFormat(val.from) + ` - `+ convertTo12HourFormat(val.until) +`</option>`;
                        selectedSlot.text(convertTo12HourFormat(val.from) + ' - ' + convertTo12HourFormat(val.until));
                    }else{
                        html += `<option value="`+val.from+` - `+ val.until + `" >`+ convertTo12HourFormat(val.from) + ` - `+ convertTo12HourFormat(val.until) +`</option>`;
                    }
                    
                });

                $('.edit-slot-selector').html(html);
            }
            
            loading.dispatch(actions.Loading.Action.STOP);
            
        })
        .catch(function (error) {
            console.log(error);
        });
        
     });

    $(".order-manage-save").on("click",function(){
        loading.dispatch(actions.Loading.Action.START);
        let locationId = $(".delivy-location").find("select").val();
        let locationDate = $(".delivy-date").find("input").val();
        let locationTime = $(".delivy-time").find("select").val();
        let deliveryLocationId = $('.deliveryLocationId').val();
        window.axios.put('/update-draft', { 
            delivery_location_id : deliveryLocationId,
            delivery_date : locationDate,
            delivery_time : locationTime,
            id:{{$id}}

        }).then(function (response) {
            console.log(response);
            loading.dispatch(actions.Loading.Action.STOP);
            //saveButton.set({disabled: true});
            toastNotice.dispatch(actions.Toast.Action.SHOW);
            $(".order-manage-save").addClass('Polaris-Button--disabled');
        })
        .catch(function (error) {
            console.log(error);
        });
        
    });

    $(".Polaris-Modal-CloseButton,.edit-order-close").on("click",function(){
        $(this).parents(".edit-order-modal").hide();
    });

    $(".edit-order-triger").on("click",function(){
        $(".edit-order-modal").show();
    });

    $(".save-edit-order").on("click",function(){
        $(".order-manage-save").removeClass('Polaris-Button--disabled');
        $(this).parents(".edit-order-modal").hide();
        let locationId = $(".delivy-location").find("select").val();
        let locationDate = $(".delivy-date").find("input").val();
        let locationTime = $(".delivy-time").find("select").val();
        let deliveryLocationId = $('.deliveryLocationId').val();
        let additionalHtml = `<div class="Polaris-LegacyStack__Item">
                                    <p class="Polaris-Text--root Polaris-Text--bold">Delivery Location Id</p>
                                    <p class="Polaris-Text--root Polaris-Text--regular">${deliveryLocationId}</p>
                                </div>
                                <div class="Polaris-LegacyStack__Item">
                                    <p class="Polaris-Text--root Polaris-Text--bold">Delivery Date</p>
                                    <p class="Polaris-Text--root Polaris-Text--regular">${formatDateToYYYYMMDD(locationDate)}</p>
                                </div>
                                 <div class="Polaris-LegacyStack__Item">
                                    <p class="Polaris-Text--root Polaris-Text--bold">Delivery Time</p>
                                    <p class="Polaris-Text--root Polaris-Text--regular">${locationTime}</p>
                                </div>
                                 <div class="Polaris-LegacyStack__Item">
                                    <p class="Polaris-Text--root Polaris-Text--bold">Checkout Method</p>
                                    <p class="Polaris-Text--root Polaris-Text--regular">delivery</p>
                                </div>`;
        $(".edit-order-details").html(additionalHtml);
    });

    $(".edit-order-selector").on("change",function(){
        let vl = $(this).find("option:selected").text();
        $(this).siblings().find(".Polaris-Select__SelectedOption").text(vl);
        $(".delivery_date").trigger('change');
    });
    
    $(".edit-slot-selector").on("change",function(){
        let vl = $(this).find("option:selected").text();
        $(this).siblings().find(".Polaris-Select__SelectedOption").text(vl);
    });
    setTimeout(() => {
        $(".delivery_date").trigger('change');
    }, 1000);
    
</script>
@endif
@endsection