@extends('layouts.default')

@section('styles')
    @include('partials.polaris_skeleton_css') 
    @vite(['resources/js/app.js'])
    <style>
        .tom-welcome h4 {
            font-size: 24px;
        }
        .tom-welcome p {
            font-size: 16px;
        }
        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 100%;
            color: #000;
            font-size: 16px;
            text-decoration: none;
        }
        .card-body {
            text-decoration: none !important;
            padding: 60px 20px 60px;
            letter-spacing: 2px;
            font-size: 18px;
        }
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }
        .tom-welcome a
        {
            text-decoration:none;
            text-align:center;
            font-weight:500;
        }
    </style>
@endsection

@section('content')
  

    <div class="container tom-welcome">
        <div class="row">
             <div class="col-2"></div>
             <div class="col-8 text-center mt-3">
                <h4>Welcome</h4>
                <p>Select Delivery Area</p>
            </div>
             <div class="col-2"></div>
        </div>
        <div class="row">

           @foreach($locations as $location)
           <div class="col-6">
            <a href="{{ URL::tokenRoute('options', ['id' => $location['location_id'] ]) }}">
              <div class="card">
                  <div class="card-body">
                  {{ $location['location_name'] }}
                  </div>
              </div>
            </a>
            </div>
            @endforeach

        </div>
    </div>

@endsection

@section('scripts')
    @parent

    @if(config('shopify-app.appbridge_enabled'))
        <script>
             actions.TitleBar.create(app, { title: 'Delivery Areas' });
            // create side navigation
            const itemsLink = actions.AppLink.create(app, {
                label: 'Delivery Areas',
                destination: '/',
            });

            const channelMenu = actions.NavigationMenu.create(app, {
                items: [itemsLink],
            });
        </script>
    @endif
@endsection
