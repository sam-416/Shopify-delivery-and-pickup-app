<p>Prevent customers from selecting delivery on specific dates of the year</p>
<br>
<div>
    <div data-polaris-layer="true" style="position: relative; z-index: 1;">
        <div>
            <div class="Polaris-Labelled--hidden">
                <div class="Polaris-Labelled__LabelWrapper">
                    <div class="Polaris-Label">
                        <label id="PolarisTextField29Label" for="PolarisTextField29" class="Polaris-Label__Text">Add your
                            delivery blackout dates below:</label>
                    </div>
                </div>
                <div class="Polaris-Connected">
                    <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                        <div class="Polaris-TextField">
                            <div class="Polaris-TextField__Prefix" id="PolarisTextField29-Prefix">
                                <span class="Polaris-Icon Polaris-Icon--applyColor">
                                    <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M17.5 2h-2.5v-1a1 1 0 1 0-2 0v1h-7v-1a1 1 0 0 0-2 0v1h-1.5c-.8 0-1.5.7-1.5 1.5v15c0 .8.7 1.5 1.5 1.5h15c.8 0 1.5-.7 1.5-1.5v-15c0-.8-.7-1.5-1.5-1.5zm-14.5 16h14v-10h-14v10z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                            <input id="PolarisTextField29" placeholder="Select a date ..." autocomplete="off"
                                class="Polaris-TextField__Input" type="date"
                                aria-labelledby="PolarisTextField29Label PolarisTextField29-Prefix" aria-invalid="false"
                                value="" tabindex="0" aria-controls="Polarispopover6"
                                aria-owns="Polarispopover6" aria-expanded="false">
                            <div class="Polaris-TextField__Backdrop"></div>
                        </div>
                    </div>
                    <div class="Polaris-Connected__Item">
                        <button class="Polaris-Button date-picker-add" type="button">
                            <span class="Polaris-Button__Content">
                                <span class="Polaris-Button__Icon">
                                    <span class="Polaris-Icon">
                                        <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false"
                                            aria-hidden="true">
                                            <path
                                                d="M10 4a1 1 0 0 0-1 1v4h-4a1 1 0 1 0 0 2h4v4a1 1 0 1 0 2 0v-4h4a1 1 0 1 0 0-2h-4v-4a1 1 0 0 0-1-1Z">
                                            </path>
                                        </svg>
                                    </span>
                                </span>
                                <span class="Polaris-Button__Text">Add date</span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="reverseBlackoutDatesContainer">
        <div class="Polaris-ResourceList__ResourceListWrapper">
            <ul class="Polaris-ResourceList" aria-live="polite">
                <div class="Polaris-Stack Polaris-Stack--vertical">
                    <div class="Polaris-Stack__Item">
                        <div class="Zapiet-CollapseMonth date-picker-target">
                            @if ($options->blackout_dates)
                                @php
                                    $blackoutDates = json_decode($options->blackout_dates, true);
                                @endphp
                                @foreach ($blackoutDates['blackout'] as $blackoutDate)
                                    <button class="Polaris-Button" type="button" data-date="{{ $blackoutDate }}">
                                        <span class="Polaris-Button__Content">
                                            <span
                                                class="Polaris-Button__Text">{{ date('F(d)', strtotime($blackoutDate)) }}</span>
                                            <span class="Polaris-Button__close nor-close-0">x</span>
                                        </span>
                                    </button>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </ul>
        </div>
        <div></div>
    </div>
</div>
