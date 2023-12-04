@extends('layouts.default')
@section('styles')
@include('partials.polaris_skeleton_css')
@vite(['resources/js/app.js'])
<style>
  html,
  body {
    height: auto;
    font-size: var(--p-font-size-100);
  }

  html {
    font-size: 16px;
  }

  
  .main-container {
    background: #fdfdfd;
  }

  .hide {
    display: none;
  }

  .show {
    display: block;
  }

  .normal-option .col-12 {
    padding: 0;
  }

  .tom-tabs {
    padding: 8px 15px;
    overflow: hidden;
    border-bottom: 1px solid #f0ebeb;
    background-color: #fff;
    border-radius: 5px 5px 0 0;
    box-shadow: var(--p-shadow-md);
  }

  .cust-polaris {
    padding: 0 15px;
  }

  .tom-tab-content {
    border-top: none;
    background: #fff;
    box-shadow: var(--p-shadow-md);
    border-radius: 0 0 5px 5px;
    padding-bottom: 15px;
  }

  .normal-option h6 {
    font-size: 16px;
    font-weight: 700;
  }

  .zip-avial {
    width: 100%;
    display: flex;
    font-size: 15px;
    margin: 0 0 10px 0;
  }

  .included-zip {
    width: 33%;
    padding: 12px;
  }

  .excluded-zip {
    width: 33%;
    padding: 12px;
    margin: 0 8px;
  }

  .partial-zip {
    width: 33%;
    padding: 12px;
  }

  .normal-option textarea {
    margin: 4px 0 20px;
  }


  .tom-delivery-option {
    padding-top: 30px;
    padding-bottom: 40px;
  }

  .Polaris-Card__Section {
    padding: 20px;
  }

  .Polaris-Card__Section p {
    margin: 0;
  }

  .offsetContainer {
    padding-top: 1em;
  }

  span.Polaris-Button__Content {
    font-weight: 600;
  }

  .Polaris-Tabs--fitted {
    overflow-x: auto;
    overflow-y: hidden;
  }

  .Polaris-Layout{
     margin-top: 0 !important;
  }
</style>
@endsection
@section('content')
<main class="Polaris-Frame__Main">
  <div class="Polaris-Frame__Content">
      <div class="Polaris-Page">
        <div class="Polaris-Page Polaris-Page--fullWidth">
          <div class="Polaris-Page__Content">
            <div class="Polaris-Layout">

              <div class="Polaris-Layout__AnnotatedSection">
                <div class="Polaris-Layout__AnnotationWrapper">
                  <div class="Polaris-Layout__Annotation">
                    <div class="Polaris-TextContainer">
                      <h2 class="Polaris-Text--root Polaris-Text--headingMd" id="storeDetails">Normal</h2>
                      <div class="Polaris-Box" style="--pc-box-color:var(--p-color-text-subdued)">
                        <p>Edit normal option settings here.</p>
                      </div>
                    </div>
                  </div>
                  <div class="Polaris-Layout__AnnotationContent">
                    <div class="Polaris-Card"><div class="Polaris-Card__Section"><div class="Polaris-Stack Polaris-Stack--alignmentCenter"><div class="Polaris-Stack__Item Polaris-Stack__Item--fill">Normal Option</div><div class="Polaris-Stack__Item"><div class="Polaris-ButtonGroup"><div class="Polaris-ButtonGroup__Item"><button class="Polaris-Button normal-setting-edit" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Edit settings</span></span></button></div></div></div></div></div></div>
                    <div class="cards-container-normal normal-option delivery-option-normal delivery-options" data-type="{{$options->delivery_type}}" data-location-id="{{$options->location_id}}" data-slot-id="{{$options->delivery_slot_id}}" style="margin-top:2rem;display:none;">

                      <div class="Polaris-Card">
                        <div class="Polaris-Card__Header">
                          <div class="Polaris-LegacyStack Polaris-LegacyStack--alignmentBaseline">
                            <div class="Polaris-LegacyStack__Item Polaris-LegacyStack__Item--fill">
                              <h2 class="Polaris-Text--root Polaris-Text--headingMd">Delivery Availability</h2>
                            </div>
                          </div>
                        </div>
                        <div class="Polaris-Card__Section">
                          <!-- Delivery avialability -->
                              @include('components.normal.deliveryAvaivality')
                          <!--/Delivery avialability -->
                        </div>
                      </div>

                      <div class="Polaris-Card">
                        <div class="Polaris-Card__Header">
                          <div class="Polaris-LegacyStack Polaris-LegacyStack--alignmentBaseline">
                              <div class="Polaris-LegacyStack__Item Polaris-LegacyStack__Item--fill">
                                  <h2 class="Polaris-Text--root Polaris-Text--headingMd">Delivery Slots</h2>
                              </div>
                          </div>
                        </div>
                        <div class="Polaris-Card__Section">
                          <!-- delivery slots -->
                              @include('components.normal.deliverySlot')
                          <!-- /delivery slots -->
                        </div>
                      </div>

                      <div class="Polaris-Card">
                        <div class="Polaris-Card__Header">
                          <div class="Polaris-LegacyStack Polaris-LegacyStack--alignmentBaseline">
                              <div class="Polaris-LegacyStack__Item Polaris-LegacyStack__Item--fill">
                                  <h2 class="Polaris-Text--root Polaris-Text--headingMd">Blackout Dates</h2>
                              </div>
                          </div>
                        </div>
                        <div class="Polaris-Card__Section">
                          <!-- balckout dates -->
                              @include('components.normal.blackoutDates')
                          <!-- /balckout dates -->
                        </div>
                      </div>

                      <div class="Polaris-Card">
                        <div class="Polaris-Card__Header">
                          <div class="Polaris-LegacyStack Polaris-LegacyStack--alignmentBaseline">
                              <div class="Polaris-LegacyStack__Item Polaris-LegacyStack__Item--fill">
                                  <h2 class="Polaris-Text--root Polaris-Text--headingMd">Delivery Preparation Time</h2>
                              </div>
                          </div>
                        </div>
                        <div class="Polaris-Card__Section">
                          <!-- delivery preparation time -->
                              @include('components.normal.deliveryPreparationTime')
                          <!-- /delivery preparation time -->
                        </div>
                      </div>

                      <div class="Polaris-Card">
                        <div class="Polaris-Card__Header">
                          <div class="Polaris-LegacyStack Polaris-LegacyStack--alignmentBaseline">
                              <div class="Polaris-LegacyStack__Item Polaris-LegacyStack__Item--fill">
                                  <h2 class="Polaris-Text--root Polaris-Text--headingMd">Tags</h2>
                              </div>
                          </div>
                        </div>
                        <div class="Polaris-Card__Section">
                          <!-- tags -->
                              @include('components.normal.tags')
                          <!-- /tags -->
                        </div>
                      </div>

                      <div class="Polaris-Card">
                        <div class="Polaris-Card__Header">
                          <div class="Polaris-LegacyStack Polaris-LegacyStack--alignmentBaseline">
                              <div class="Polaris-LegacyStack__Item Polaris-LegacyStack__Item--fill">
                                  <h2 class="Polaris-Text--root Polaris-Text--headingMd">Delivery Location Id</h2>
                              </div>
                          </div>
                        </div>
                        <div class="Polaris-Card__Section">
                          <!-- delivery location id -->
                             @include('components.normal.deliveryLocationId')
                          <!-- /delivery location id -->
                        </div>
                      </div>

                      <div class="Polaris-Card">
                        <div class="Polaris-Card__Header">
                          <div class="Polaris-LegacyStack Polaris-LegacyStack--alignmentBaseline">
                              <div class="Polaris-LegacyStack__Item Polaris-LegacyStack__Item--fill">
                                  <h2 class="Polaris-Text--root Polaris-Text--headingMd">Delivery Slot Id</h2>
                              </div>
                          </div>
                        </div>
                        <div class="Polaris-Card__Section">
                          <!-- delivery slot id -->
                              @include('components.normal.deliverySlotId')
                          <!-- /delivery slot id -->
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>

              <div class="Polaris-Layout__AnnotatedSection">
                <div class="Polaris-Layout__AnnotationWrapper">
                  <div class="Polaris-Layout__Annotation">
                    <div class="Polaris-TextContainer">
                      <h2 class="Polaris-Text--root Polaris-Text--headingMd" id="storeDetails">Express</h2>
                      <div class="Polaris-Box" style="--pc-box-color:var(--p-color-text-subdued)">
                        <p>Edit express option setting here.</p>
                      </div>
                    </div>
                  </div>
                  
                  <div class="Polaris-Layout__AnnotationContent">
                    <div class="Polaris-Card"><div class="Polaris-Card__Section"><div class="Polaris-Stack Polaris-Stack--alignmentCenter"><div class="Polaris-Stack__Item Polaris-Stack__Item--fill">Express Option</div><div class="Polaris-Stack__Item"><div class="Polaris-ButtonGroup"><div class="Polaris-ButtonGroup__Item"><button class="Polaris-Button express-setting-edit" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Edit settings</span></span></button></div></div></div></div></div></div>
                    <div class="cards-container-express express-option delivery-option-express delivery-options" data-type="{{$ExOptions->delivery_type}}" data-location-id="{{$ExOptions->location_id}}" data-slot-id="{{$ExOptions->delivery_slot_id}}" style="margin-top:2rem;display:none;">

                      <div class="Polaris-Card">
                        <div class="Polaris-Card__Header">
                          <div class="Polaris-LegacyStack Polaris-LegacyStack--alignmentBaseline">
                            <div class="Polaris-LegacyStack__Item Polaris-LegacyStack__Item--fill">
                              <h2 class="Polaris-Text--root Polaris-Text--headingMd">Delivery Availability</h2>
                            </div>
                          </div>
                        </div>
                        <div class="Polaris-Card__Section">
                          <!-- Delivery avialability -->
                              @include('components.express.deliveryAvaivality')
                          <!--/Delivery avialability -->
                        </div>
                      </div>

                      <div class="Polaris-Card">
                        <div class="Polaris-Card__Header">
                          <div class="Polaris-LegacyStack Polaris-LegacyStack--alignmentBaseline">
                              <div class="Polaris-LegacyStack__Item Polaris-LegacyStack__Item--fill">
                                  <h2 class="Polaris-Text--root Polaris-Text--headingMd">Delivery Slots</h2>
                              </div>
                          </div>
                        </div>
                        <div class="Polaris-Card__Section">
                          <!-- delivery slots -->
                              @include('components.express.deliverySlot')
                          <!-- /delivery slots -->
                        </div>
                      </div>

                      <div class="Polaris-Card">
                        <div class="Polaris-Card__Header">
                          <div class="Polaris-LegacyStack Polaris-LegacyStack--alignmentBaseline">
                              <div class="Polaris-LegacyStack__Item Polaris-LegacyStack__Item--fill">
                                  <h2 class="Polaris-Text--root Polaris-Text--headingMd">Blackout Dates</h2>
                              </div>
                          </div>
                        </div>
                        <div class="Polaris-Card__Section">
                          <!-- balckout dates -->
                              @include('components.express.blackoutDates')
                          <!-- /balckout dates -->
                        </div>
                      </div>

                      <div class="Polaris-Card">
                        <div class="Polaris-Card__Header">
                          <div class="Polaris-LegacyStack Polaris-LegacyStack--alignmentBaseline">
                              <div class="Polaris-LegacyStack__Item Polaris-LegacyStack__Item--fill">
                                  <h2 class="Polaris-Text--root Polaris-Text--headingMd">Delivery Preparation Time</h2>
                              </div>
                          </div>
                        </div>
                        <div class="Polaris-Card__Section">
                          <!-- delivery preparation time -->
                              @include('components.express.deliveryPreparationTime')
                          <!-- /delivery preparation time -->
                        </div>
                      </div>

                      <div class="Polaris-Card">
                        <div class="Polaris-Card__Header">
                          <div class="Polaris-LegacyStack Polaris-LegacyStack--alignmentBaseline">
                              <div class="Polaris-LegacyStack__Item Polaris-LegacyStack__Item--fill">
                                  <h2 class="Polaris-Text--root Polaris-Text--headingMd">Tags</h2>
                              </div>
                          </div>
                        </div>
                        <div class="Polaris-Card__Section">
                          <!-- tags -->
                              @include('components.express.tags')
                          <!-- /tags -->
                        </div>
                      </div>

                      <div class="Polaris-Card">
                        <div class="Polaris-Card__Header">
                          <div class="Polaris-LegacyStack Polaris-LegacyStack--alignmentBaseline">
                              <div class="Polaris-LegacyStack__Item Polaris-LegacyStack__Item--fill">
                                  <h2 class="Polaris-Text--root Polaris-Text--headingMd">Delivery Location Id</h2>
                              </div>
                          </div>
                        </div>
                        <div class="Polaris-Card__Section">
                          <!-- delivery location id -->
                             @include('components.express.deliveryLocationId')
                          <!-- /delivery location id -->
                        </div>
                      </div>

                      <div class="Polaris-Card">
                        <div class="Polaris-Card__Header">
                          <div class="Polaris-LegacyStack Polaris-LegacyStack--alignmentBaseline">
                              <div class="Polaris-LegacyStack__Item Polaris-LegacyStack__Item--fill">
                                  <h2 class="Polaris-Text--root Polaris-Text--headingMd">Delivery Slot Id</h2>
                              </div>
                          </div>
                        </div>
                        <div class="Polaris-Card__Section">
                          <!-- delivery slot id -->
                              @include('components.express.deliverySlotId')
                          <!-- /delivery slot id -->
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
               
              <div class="Polaris-Layout__AnnotatedSection">
                <div class="Polaris-Layout__AnnotationWrapper">
                  <div class="Polaris-Layout__Annotation">
                    <div class="Polaris-TextContainer">
                      <h2 class="Polaris-Text--root Polaris-Text--headingMd" id="storeDetails">General</h2>
                      <div class="Polaris-Box" style="--pc-box-color:var(--p-color-text-subdued)">
                        <p>Separate eligible postal codes with a comma. Overlapping postal codes are not supported. Each location needs to have a unique set of postal codes.</p>
                      </div>
                    </div>
                  </div>
                  <div class="Polaris-Layout__AnnotationContent">
                    <div class="Polaris-LegacyCard">
                      <div class="Polaris-LegacyCard__Header">
                        <div class="Polaris-LegacyStack Polaris-LegacyStack--alignmentBaseline">
                          <div class="Polaris-LegacyStack__Item Polaris-LegacyStack__Item--fill">
                            <h2 class="Polaris-Text--root Polaris-Text--headingMd">Zip Code Availability</h2>
                          </div>
                        </div>
                      </div>
                      <div class="Polaris-LegacyCard__Section">
                          <div class="Polaris-Labelled__LabelWrapper">
                              <div class="Polaris-Label">
                                  <label id="PolarisTextField31Label" for="PolarisTextField31" class="Polaris-Label__Text">Eligible postal codes (partial matching)</label>
                              </div>
                          </div>
                          <div class="Polaris-Connected">
                              <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                  <div class="Polaris-TextField Polaris-TextField--hasValue Polaris-TextField--multiline">
                                      <textarea id="PolarisTextField31" placeholder="e.g. NP18, CF11" class="Polaris-TextField__Input distance-validation" type="text" rows="1" aria-describedby="PolarisTextField31HelpText" aria-labelledby="PolarisTextField31Label" aria-invalid="false" aria-multiline="true" style="height: 586px;">{{ $postCodes->postal_code}}</textarea>
                                      <div class="Polaris-TextField__Backdrop"></div>
                                      <div aria-hidden="true" class="Polaris-TextField__Resizer">
                                          <div class="Polaris-TextField__DummyInput"><br>
                                          </div>
                                          <div class="Polaris-TextField__DummyInput">
                                              <br>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="Polaris-Labelled__HelpText" id="PolarisTextField31HelpText">
                              <span class="Polaris-Text--root Polaris-Text--break Polaris-Text--subdued">Separate eligible postal codes with a comma. Overlapping postal codes are not supported. Each location needs to have a unique set of postal codes.</span>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div lass="Polaris-Layout__AnnotatedSection">
                <div class="Polaris-FooterHelp">
                  <div class="Polaris-FooterHelp__Text">
                     Tom Flowers Delivery App
                     <a class="Polaris-Link" href="#" data-polaris-unstyled="true"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</main>
@php
  if($options->location_id == 241789){
    $loc = "ZRH";
  }else{
    $loc = "CH";
  }
@endphp
@endsection

@section('scripts')
@parent

@if(config('shopify-app.appbridge_enabled'))
<script>
  const saveButton = actions.Button.create(app, { label: 'Save' });
  const breadcrumb = actions.Button.create(app, { label: 'Delivery Areas' });
  const loading = actions.Loading.create(app);
  const redirect = actions.Redirect.create(app);
  const history = actions.History.create(app);
  let toastOptions = {
      message: 'Normal Option Saved',
      duration: 5000,
  };
  
  
  // subscribe breadcrumb hook
  breadcrumb.subscribe(actions.Button.Action.CLICK, () => {
    
      history.dispatch(actions.History.Action.PUSH, '/apps/tom-flower-delivery-app');

      redirect.dispatch(actions.Redirect.Action.ADMIN_PATH, '/apps/tom-flower-delivery-app-2');
      //app.dispatch(actions.Redirect.toApp({ path: '/' }));
  });

  // title bar options
  const titleBarOptions = {
    title: "{{$loc}}",
    buttons: {
      primary: saveButton,
    },
    breadcrumbs: breadcrumb,
  };

  const mytitlebar = actions.TitleBar.create(app, titleBarOptions);
  //let toastNotice = actions.Toast.create(app, toastOptions);
</script>
@endif
<script>
  (function() {
   
  })();
</script>
<script src="{{ asset('assets/js/tom.js') }}"></script>
@endsection