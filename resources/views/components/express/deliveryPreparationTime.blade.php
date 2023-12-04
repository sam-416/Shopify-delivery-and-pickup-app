<div class="Polaris-FormLayout">
    <div class="Polaris-FormLayout__Item">
        <p>Choose how much notice you need to prepare delivery orders</p>
    </div>
    <div class="Polaris-FormLayout__Item">
        <fieldset class="Polaris-VerticalStack Polaris-VerticalStack--fieldsetReset" aria-invalid="false" style="--pc-vertical-stack-order: column; --pc-vertical-stack-gap-xs: var(--p-space-4); --pc-vertical-stack-gap-md: var(--p-space-0);">
            <legend class="Polaris-Box Polaris-Box--visuallyHidden" style="--pc-box-padding-block-end-xs: var(--p-space-5); --pc-box-padding-block-end-md: var(--p-space-1);">Offset rules</legend>
            <ul class="Polaris-VerticalStack Polaris-VerticalStack--listReset" style="--pc-vertical-stack-order: column; --pc-vertical-stack-gap-xs: var(--p-space-4); --pc-vertical-stack-gap-md: var(--p-space-0);">
                <li>
                    <div class="Polaris-Bleed" style="--pc-bleed-margin-block-end-xs: var(--p-space-0);">
                        <label class="Polaris-Choice" for="ExpDeliveryPrepTimeEnable">
                            <span class="Polaris-Choice__Control">
                                <span class="Polaris-RadioButton">
                                    <input id="ExpDeliveryPrepTimeEnable" name="ExpDeliveryPrepTime" type="radio" class="Polaris-RadioButton__Input" value="true" @if($ExOptions->delivery_preparation_time == 'yes') checked="" @endif>
                                    <span class="Polaris-RadioButton__Backdrop"></span>
                                </span>
                            </span>
                            <span class="Polaris-Choice__Label">
                                <span>Enabled</span>
                            </span>
                        </label>
                    </div>
                </li>
                <li>
                    <div class="Polaris-Bleed" style="--pc-bleed-margin-block-end-xs: var(--p-space-0);">
                        <label class="Polaris-Choice" for="ExpDeliveryPrepTimeDisable">
                            <span class="Polaris-Choice__Control">
                                <span class="Polaris-RadioButton">
                                    <input id="ExpDeliveryPrepTimeDisable" name="ExpDeliveryPrepTime" type="radio" class="Polaris-RadioButton__Input" value="false" @if($ExOptions->delivery_preparation_time == 'no') checked="" @endif>
                                    <span class="Polaris-RadioButton__Backdrop"></span>
                                </span>
                            </span>
                            <span class="Polaris-Choice__Label">
                                <span>Disabled</span>
                            </span>
                        </label>
                    </div>
                </li>
            </ul>
        </fieldset>
    </div>
</div>
</div>
<div class="Polaris-Card__Section Polaris-Card__Section--subdued expDeliveryPrepTime_Container @if($ExOptions->delivery_preparation_time == 'yes') @else hide @endif">
<div>
    <div class="Polaris-Box" style="--pc-box-border-color: var(--p-color-border-subdued); --pc-box-border-style: solid; --pc-box-border-block-end-width: var(--p-border-width-1); --pc-box-padding-inline-start-xs: var(--p-space-2); --pc-box-padding-inline-end-xs: var(--p-space-2);">
        <div class="Polaris-Tabs Polaris-Tabs__TabMeasurer">
            <li class="Polaris-Tabs__TabContainer" role="presentation">
                <button id="Monday-delivery-offsetMeasurer" role="tab" type="button" tabindex="-1" class="Polaris-Tabs__Tab Polaris-Tabs__Tab--selected" aria-selected="true">
                    <span class="Polaris-Tabs__Title">Mon</span>
                </button>
            </li>
            <li class="Polaris-Tabs__TabContainer" role="presentation">
                <button id="Tuesday-delivery-offsetMeasurer" role="tab" type="button" tabindex="-1" class="Polaris-Tabs__Tab" aria-selected="false">
                    <span class="Polaris-Tabs__Title">Tue</span>
                </button>
            </li>
            <li class="Polaris-Tabs__TabContainer" role="presentation">
                <button id="Wednesday-delivery-offsetMeasurer" role="tab" type="button" tabindex="-1" class="Polaris-Tabs__Tab" aria-selected="false">
                    <span class="Polaris-Tabs__Title">Wed</span>
                </button>
            </li>
            <li class="Polaris-Tabs__TabContainer" role="presentation">
                <button id="Thursday-delivery-offsetMeasurer" role="tab" type="button" tabindex="-1" class="Polaris-Tabs__Tab" aria-selected="false">
                    <span class="Polaris-Tabs__Title">Thu</span>
                </button>
            </li>
            <li class="Polaris-Tabs__TabContainer" role="presentation">
                <button id="Friday-delivery-offsetMeasurer" role="tab" type="button" tabindex="-1" class="Polaris-Tabs__Tab" aria-selected="false">
                    <span class="Polaris-Tabs__Title">Fri</span>
                </button>
            </li>
            <li class="Polaris-Tabs__TabContainer" role="presentation">
                <button id="Saturday-delivery-offsetMeasurer" role="tab" type="button" tabindex="-1" class="Polaris-Tabs__Tab" aria-selected="false">
                    <span class="Polaris-Tabs__Title">Sat</span>
                </button>
            </li>
            <li class="Polaris-Tabs__TabContainer" role="presentation">
                <button id="Sunday-delivery-offsetMeasurer" role="tab" type="button" tabindex="-1" class="Polaris-Tabs__Tab" aria-selected="false">
                    <span class="Polaris-Tabs__Title">Sun</span>
                </button>
            </li>
            <button type="button" class="Polaris-Tabs__DisclosureActivator" aria-label="More views">
                <span class="Polaris-Tabs__Title">
                    <span class="Polaris-Icon Polaris-Icon--colorSubdued Polaris-Icon--applyColor">
                        <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                            <path d="M6 10a2 2 0 1 1-4.001-.001 2 2 0 0 1 4.001.001zm6 0a2 2 0 1 1-4.001-.001 2 2 0 0 1 4.001.001zm6 0a2 2 0 1 1-4.001-.001 2 2 0 0 1 4.001.001z"></path>
                        </svg>
                    </span>
                </span>
            </button>
        </div>
        <ul role="tablist" class="Polaris-Tabs Polaris-Tabs--fitted">
            <li class="Polaris-Tabs__TabContainer" role="presentation">
                <button id="Monday-delivery-offset" role="tab" type="button" tabindex="1" class="Polaris-Tabs__Tab Polaris-Tabs__Tab--selected expprepTimeTab" aria-selected="true" aria-label="Monday delivery offsets">
                    <span class="Polaris-Tabs__Title">Mon</span>
                </button>
            </li>
            <li class="Polaris-Tabs__TabContainer" role="presentation">
                <button id="Tuesday-delivery-offset" role="tab" type="button" tabindex="2" class="Polaris-Tabs__Tab expprepTimeTab" aria-selected="false" aria-label="Tuesday delivery offsets">
                    <span class="Polaris-Tabs__Title">Tue</span>
                </button>
            </li>
            <li class="Polaris-Tabs__TabContainer" role="presentation">
                <button id="Wednesday-delivery-offset" role="tab" type="button" tabindex="3" class="Polaris-Tabs__Tab expprepTimeTab" aria-selected="false" aria-label="Wednesday delivery offsets">
                    <span class="Polaris-Tabs__Title">Wed</span>
                </button>
            </li>
            <li class="Polaris-Tabs__TabContainer" role="presentation">
                <button id="Thursday-delivery-offset" role="tab" type="button" tabindex="4" class="Polaris-Tabs__Tab expprepTimeTab" aria-selected="false" aria-label="Thursday delivery offsets">
                    <span class="Polaris-Tabs__Title">Thu</span>
                </button>
            </li>
            <li class="Polaris-Tabs__TabContainer" role="presentation">
                <button id="Friday-delivery-offset" role="tab" type="button" tabindex="5" class="Polaris-Tabs__Tab expprepTimeTab" aria-selected="false" aria-label="Friday delivery offsets">
                    <span class="Polaris-Tabs__Title">Fri</span>
                </button>
            </li>
            <li class="Polaris-Tabs__TabContainer" role="presentation">
                <button id="Saturday-delivery-offset" role="tab" type="button" tabindex="6" class="Polaris-Tabs__Tab expprepTimeTab" aria-selected="false" aria-label="Saturday delivery offsets">
                    <span class="Polaris-Tabs__Title">Sat</span>
                </button>
            </li>
            <li class="Polaris-Tabs__TabContainer" role="presentation">
                <button id="Sunday-delivery-offset" role="tab" type="button" tabindex="7" class="Polaris-Tabs__Tab expprepTimeTab" aria-selected="false" aria-label="Sunday delivery offsets">
                    <span class="Polaris-Tabs__Title">Sun</span>
                </button>
            </li>
            <li class="Polaris-Tabs__DisclosureTab" role="presentation">
                <div>
                    <button type="button" class="Polaris-Tabs__DisclosureActivator" aria-label="More views" tabindex="0" aria-controls="Polarispopover7" aria-owns="Polarispopover7" aria-expanded="false">
                        <span class="Polaris-Tabs__Title">
                            <span class="Polaris-Icon Polaris-Icon--colorSubdued Polaris-Icon--applyColor">
                                <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                    <path d="M6 10a2 2 0 1 1-4.001-.001 2 2 0 0 1 4.001.001zm6 0a2 2 0 1 1-4.001-.001 2 2 0 0 1 4.001.001zm6 0a2 2 0 1 1-4.001-.001 2 2 0 0 1 4.001.001z"></path>
                                </svg>
                            </span>
                        </span>
                    </button>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="offsetContainer expoffsetContainer expoffsetContainer-1">
    <div class="Polaris-Stack Polaris-Stack--vertical" style="display:block">
        <div class="Polaris-Stack__Item">
            <div class="Polaris-FormLayout">
                <div role="group" class="Polaris-FormLayout--grouped">
                    <div class="Polaris-FormLayout__Items">
                        <div class="Polaris-FormLayout__Item">
                            <div class="Polaris-Stack Polaris-Stack--vertical Polaris-Stack--spacingTight">
                                <div class="Polaris-Stack__Item">
                                    <p>Preparation time required for orders placed on Monday</p>
                                </div>
                                <div class="Polaris-Stack__Item">
                                    <div class="Polaris-Labelled--hidden">
                                        <div class="Polaris-Labelled__LabelWrapper">
                                            <div class="Polaris-Label">
                                                <label id="PolarisTextField30Label" for="PolarisTextField30" class="Polaris-Label__Text">Offset format</label>
                                            </div>
                                        </div>
                                        <div class="Polaris-Connected">
                                            <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                <div class="Polaris-TextField Polaris-TextField--hasValue">
                                                    <input id="PolarisTextField30" placeholder="0" autocomplete="off" class="Polaris-TextField__Input prepTimeInput" min="0" type="number" aria-labelledby="PolarisTextField30Label" aria-invalid="false" value="@foreach($ExPrepTime['monday'] as $xprep){{ $xprep->preparation_time}}@endforeach">
                                                    <div class="Polaris-TextField__Spinner" aria-hidden="true">
                                                        <div role="button" class="Polaris-TextField__Segment plus-btn" tabindex="1">
                                                            <div class="Polaris-TextField__SpinnerIcon">
                                                                <span class="Polaris-Icon">
                                                                    <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                        <path d="M6.902 12h6.196c.751 0 1.172-.754.708-1.268l-3.098-3.432c-.36-.399-1.055-.399-1.416 0l-3.098 3.433c-.464.513-.043 1.267.708 1.267Z"></path>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div role="button" class="Polaris-TextField__Segment minus-btn" tabindex="1">
                                                            <div class="Polaris-TextField__SpinnerIcon">
                                                                <span class="Polaris-Icon">
                                                                    <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                        <path d="M13.098 8h-6.196c-.751 0-1.172.754-.708 1.268l3.098 3.432c.36.399 1.055.399 1.416 0l3.098-3.433c.464-.513.043-1.267-.708-1.267Z"></path>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-TextField__Backdrop"></div>
                                                </div>
                                            </div>
                                            <div class="Polaris-Connected__Item">
                                                <div class="Polaris-Labelled--hidden">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label">
                                                            <label id="PolarisSelect4Label" for="PolarisSelect4" class="Polaris-Label__Text">Offset format</label>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-Select">
                                                        <select id="PolarisSelect4" class="Polaris-Select__Input expprepTimeType" aria-invalid="false">
                                                    
                                                            <option value="days" @foreach($ExPrepTime['monday'] as $xprep) @if($xprep->preparation_time_type === 'days') selected @endif @endforeach>Days</option>
                                                        </select>
                                                        <div class="Polaris-Select__Content" aria-hidden="true">
                                                            <span class="Polaris-Select__SelectedOption">@foreach($ExPrepTime['monday'] as $xprep){{$xprep->preparation_time_type}}@endforeach</span>
                                                            <span class="Polaris-Select__Icon">
                                                                <span class="Polaris-Icon">
                                                                    <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                        <path d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z"></path>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="Polaris-Select__Backdrop"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Polaris-FormLayout__Item">
                    <label class="Polaris-Choice" for="expPolarisCheckbox25_0">
                        <span class="Polaris-Choice__Control">
                            <span class="Polaris-Checkbox">
                                <input id="expPolarisCheckbox25_0" type="checkbox" class="Polaris-Checkbox__Input cutoff-selector" aria-invalid="false" role="checkbox" aria-checked="false" value="" @foreach($ExPrepTime['monday'] as $xprep) @if($xprep->cutoff_enable == 'true') checked="" @endif @endforeach>
                                <span class="Polaris-Checkbox__Backdrop"></span>
                                <span class="Polaris-Checkbox__Icon">
                                    <span class="Polaris-Icon">
                                        <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                            <path d="M14.723 6.237a.94.94 0 0 1 .053 1.277l-5.366 6.193a.834.834 0 0 1-.611.293.83.83 0 0 1-.622-.264l-2.927-3.097a.94.94 0 0 1 0-1.278.82.82 0 0 1 1.207 0l2.297 2.43 4.763-5.498a.821.821 0 0 1 1.206-.056Z"></path>
                                        </svg>
                                    </span>
                                </span>
                            </span>
                        </span>
                        <span class="Polaris-Choice__Label">
                            <span>Add a cutoff time</span>
                        </span>
                    </label>
                    <div class="cutoff-time" @foreach($ExPrepTime['monday'] as $xprep) @if($xprep->cutoff_enable == 'true') style="display:block;" @else style="display:none;" @endif @endforeach>
                        <div class="Polaris-FormLayout__Items">
                                <div class="cutoff-time-field Polaris-FormLayout__Item">
                                    <div class="Polaris-Labelled__LabelWrapper">
                                        <div class="Polaris-Label">
                                            <label for="cutoff-time">Cut Off Time:</label>
                                        </div>
                                    </div>
                                    <div class="Polaris-TextField Polaris-TextField--hasValue">
                                        <input type="time" class="cutoff-time Polaris-TextField__Input" value="@foreach($ExPrepTime['monday'] as $xprep){{$xprep->cuttoff_time}}@endforeach">
                                        <div class="Polaris-TextField__Backdrop"></div>
                                    </div>
                                </div>
                                <div class="cutoff-days Polaris-FormLayout__Item">
                                    <div class="Polaris-Labelled__LabelWrapper">
                                        <div class="Polaris-Label">
                                            <label for="cutoff-time">Preparation Days:</label>
                                        </div>
                                    </div>
                                    <div class="Polaris-TextField Polaris-TextField--hasValue">
                                        <input type="text" class="cutoff-prep-day Polaris-TextField__Input" value="@foreach($ExPrepTime['monday'] as $xprep){{$xprep->cuttoff_preparation_day}}@endforeach">
                                        <div class="Polaris-TextField__Backdrop"></div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offsetContainer expoffsetContainer expoffsetContainer-2 hide">
    <div class="Polaris-Stack Polaris-Stack--vertical" style="display:block">
        <div class="Polaris-Stack__Item">
            <div class="Polaris-FormLayout">
                <div role="group" class="Polaris-FormLayout--grouped">
                    <div class="Polaris-FormLayout__Items">
                        <div class="Polaris-FormLayout__Item">
                            <div class="Polaris-Stack Polaris-Stack--vertical Polaris-Stack--spacingTight">
                                <div class="Polaris-Stack__Item">
                                    <p>Preparation time required for orders placed on Tuesday</p>
                                </div>
                                <div class="Polaris-Stack__Item">
                                    <div class="Polaris-Labelled--hidden">
                                        <div class="Polaris-Labelled__LabelWrapper">
                                            <div class="Polaris-Label">
                                                <label id="PolarisTextField30Label" for="PolarisTextField30" class="Polaris-Label__Text">Offset format</label>
                                            </div>
                                        </div>
                                        <div class="Polaris-Connected">
                                            <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                <div class="Polaris-TextField Polaris-TextField--hasValue">
                                                    <input id="PolarisTextField30" placeholder="0" autocomplete="off" class="Polaris-TextField__Input prepTimeInput" min="0" type="number" aria-labelledby="PolarisTextField30Label" aria-invalid="false" value="@foreach($ExPrepTime['tuesday'] as $xprep){{ $xprep->preparation_time}}@endforeach">
                                                    <div class="Polaris-TextField__Spinner" aria-hidden="true">
                                                        <div role="button" class="Polaris-TextField__Segment plus-btn" tabindex="-1">
                                                            <div class="Polaris-TextField__SpinnerIcon">
                                                                <span class="Polaris-Icon">
                                                                    <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                        <path d="M6.902 12h6.196c.751 0 1.172-.754.708-1.268l-3.098-3.432c-.36-.399-1.055-.399-1.416 0l-3.098 3.433c-.464.513-.043 1.267.708 1.267Z"></path>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div role="button" class="Polaris-TextField__Segment minus-btn" tabindex="-1">
                                                            <div class="Polaris-TextField__SpinnerIcon">
                                                                <span class="Polaris-Icon">
                                                                    <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                        <path d="M13.098 8h-6.196c-.751 0-1.172.754-.708 1.268l3.098 3.432c.36.399 1.055.399 1.416 0l3.098-3.433c.464-.513.043-1.267-.708-1.267Z"></path>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-TextField__Backdrop"></div>
                                                </div>
                                            </div>
                                            <div class="Polaris-Connected__Item">
                                                <div class="Polaris-Labelled--hidden">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label">
                                                            <label id="PolarisSelect4Label" for="PolarisSelect4" class="Polaris-Label__Text">Offset format</label>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-Select">
                                                        <select id="PolarisSelect4" class="Polaris-Select__Input expprepTimeType" aria-invalid="false">
                                                            
                                                            <option value="days" @foreach($ExPrepTime['tuesday'] as $xprep) @if($xprep->preparation_time_type === 'days') selected @endif @endforeach>Days</option>
                                                        </select>
                                                        <div class="Polaris-Select__Content" aria-hidden="true">
                                                            <span class="Polaris-Select__SelectedOption">@foreach($ExPrepTime['tuesday'] as $xprep){{$xprep->preparation_time_type}}@endforeach</span>
                                                            <span class="Polaris-Select__Icon">
                                                                <span class="Polaris-Icon">
                                                                    <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                        <path d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z"></path>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="Polaris-Select__Backdrop"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Polaris-FormLayout__Item">
                    <label class="Polaris-Choice" for="expPolarisCheckbox25_1">
                        <span class="Polaris-Choice__Control">
                            <span class="Polaris-Checkbox">
                                <input id="expPolarisCheckbox25_1" type="checkbox" class="Polaris-Checkbox__Input cutoff-selector" aria-invalid="false" role="checkbox" aria-checked="false" value="" @foreach($ExPrepTime['tuesday'] as $xprep) @if($xprep->cutoff_enable == 'true') checked="" @endif @endforeach>
                                <span class="Polaris-Checkbox__Backdrop"></span>
                                <span class="Polaris-Checkbox__Icon">
                                    <span class="Polaris-Icon">
                                        <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                            <path d="M14.723 6.237a.94.94 0 0 1 .053 1.277l-5.366 6.193a.834.834 0 0 1-.611.293.83.83 0 0 1-.622-.264l-2.927-3.097a.94.94 0 0 1 0-1.278.82.82 0 0 1 1.207 0l2.297 2.43 4.763-5.498a.821.821 0 0 1 1.206-.056Z"></path>
                                        </svg>
                                    </span>
                                </span>
                            </span>
                        </span>
                        <span class="Polaris-Choice__Label">
                            <span>Add a cutoff time</span>
                        </span>
                    </label>
                    <div class="cutoff-time" @foreach($ExPrepTime['tuesday'] as $xprep) @if($xprep->cutoff_enable == 'true') style="display:block;" @else style="display:none;" @endif @endforeach>
                        <div class="Polaris-FormLayout__Items">
                                <div class="cutoff-time-field Polaris-FormLayout__Item">
                                    <div class="Polaris-Labelled__LabelWrapper">
                                        <div class="Polaris-Label">
                                            <label for="cutoff-time">Cut Off Time:</label>
                                        </div>
                                    </div>
                                    <div class="Polaris-TextField Polaris-TextField--hasValue">
                                        <input type="time" class="cutoff-time Polaris-TextField__Input" value="@foreach($ExPrepTime['tuesday'] as $xprep){{$xprep->cuttoff_time}}@endforeach">
                                        <div class="Polaris-TextField__Backdrop"></div>
                                    </div>
                                </div>
                                <div class="cutoff-days Polaris-FormLayout__Item">
                                    <div class="Polaris-Labelled__LabelWrapper">
                                        <div class="Polaris-Label">
                                            <label for="cutoff-time">Preparation Days:</label>
                                        </div>
                                    </div>
                                    <div class="Polaris-TextField Polaris-TextField--hasValue">
                                        <input type="text" class="cutoff-prep-day Polaris-TextField__Input" value="@foreach($ExPrepTime['tuesday'] as $xprep){{$xprep->cuttoff_preparation_day}}@endforeach">
                                        <div class="Polaris-TextField__Backdrop"></div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offsetContainer expoffsetContainer expoffsetContainer-3 hide">
    <div class="Polaris-Stack Polaris-Stack--vertical" style="display:block">
        <div class="Polaris-Stack__Item">
            <div class="Polaris-FormLayout">
                <div role="group" class="Polaris-FormLayout--grouped">
                    <div class="Polaris-FormLayout__Items">
                        <div class="Polaris-FormLayout__Item">
                            <div class="Polaris-Stack Polaris-Stack--vertical Polaris-Stack--spacingTight">
                                <div class="Polaris-Stack__Item">
                                    <p>Preparation time required for orders placed on Wednesday</p>
                                </div>
                                <div class="Polaris-Stack__Item">
                                    <div class="Polaris-Labelled--hidden">
                                        <div class="Polaris-Labelled__LabelWrapper">
                                            <div class="Polaris-Label">
                                                <label id="PolarisTextField30Label" for="PolarisTextField30" class="Polaris-Label__Text">Offset format</label>
                                            </div>
                                        </div>
                                        <div class="Polaris-Connected">
                                            <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                <div class="Polaris-TextField Polaris-TextField--hasValue">
                                                    <input id="PolarisTextField30" placeholder="0" autocomplete="off" class="Polaris-TextField__Input prepTimeInput" min="0" type="number" aria-labelledby="PolarisTextField30Label" aria-invalid="false" value="@foreach($ExPrepTime['wednesday'] as $xprep){{ $xprep->preparation_time}}@endforeach">
                                                    <div class="Polaris-TextField__Spinner" aria-hidden="true">
                                                        <div role="button" class="Polaris-TextField__Segment plus-btn" tabindex="-1">
                                                            <div class="Polaris-TextField__SpinnerIcon">
                                                                <span class="Polaris-Icon">
                                                                    <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                        <path d="M6.902 12h6.196c.751 0 1.172-.754.708-1.268l-3.098-3.432c-.36-.399-1.055-.399-1.416 0l-3.098 3.433c-.464.513-.043 1.267.708 1.267Z"></path>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div role="button" class="Polaris-TextField__Segment minus-btn" tabindex="-1">
                                                            <div class="Polaris-TextField__SpinnerIcon">
                                                                <span class="Polaris-Icon">
                                                                    <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                        <path d="M13.098 8h-6.196c-.751 0-1.172.754-.708 1.268l3.098 3.432c.36.399 1.055.399 1.416 0l3.098-3.433c.464-.513.043-1.267-.708-1.267Z"></path>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-TextField__Backdrop"></div>
                                                </div>
                                            </div>
                                            <div class="Polaris-Connected__Item">
                                                <div class="Polaris-Labelled--hidden">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label">
                                                            <label id="PolarisSelect4Label" for="PolarisSelect4" class="Polaris-Label__Text">Offset format</label>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-Select">
                                                        <select id="PolarisSelect4" class="Polaris-Select__Input expprepTimeType" aria-invalid="false">
                                                        
                                                            <option value="days" @foreach($ExPrepTime['wednesday'] as $xprep) @if($xprep->preparation_time_type === 'days') selected @endif @endforeach>Days</option>
                                                        </select>
                                                        <div class="Polaris-Select__Content" aria-hidden="true">
                                                            <span class="Polaris-Select__SelectedOption">@foreach($ExPrepTime['wednesday'] as $xprep){{$xprep->preparation_time_type}}@endforeach</span>
                                                            <span class="Polaris-Select__Icon">
                                                                <span class="Polaris-Icon">
                                                                    <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                        <path d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z"></path>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="Polaris-Select__Backdrop"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Polaris-FormLayout__Item">
                    <label class="Polaris-Choice" for="expPolarisCheckbox25_2">
                        <span class="Polaris-Choice__Control">
                            <span class="Polaris-Checkbox">
                                <input id="expPolarisCheckbox25_2" type="checkbox" class="Polaris-Checkbox__Input cutoff-selector" aria-invalid="false" role="checkbox" aria-checked="false" value="" @foreach($ExPrepTime['wednesday'] as $xprep) @if($xprep->cutoff_enable == 'true') checked="" @endif @endforeach>
                                <span class="Polaris-Checkbox__Backdrop"></span>
                                <span class="Polaris-Checkbox__Icon">
                                    <span class="Polaris-Icon">
                                        <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                            <path d="M14.723 6.237a.94.94 0 0 1 .053 1.277l-5.366 6.193a.834.834 0 0 1-.611.293.83.83 0 0 1-.622-.264l-2.927-3.097a.94.94 0 0 1 0-1.278.82.82 0 0 1 1.207 0l2.297 2.43 4.763-5.498a.821.821 0 0 1 1.206-.056Z"></path>
                                        </svg>
                                    </span>
                                </span>
                            </span>
                        </span>
                        <span class="Polaris-Choice__Label">
                            <span>Add a cutoff time</span>
                        </span>
                    </label>
                    <div class="cutoff-time" @foreach($ExPrepTime['wednesday'] as $xprep) @if($xprep->cutoff_enable == 'true') style="display:block;" @else style="display:none;" @endif @endforeach>
                        <div class="Polaris-FormLayout__Items">
                                <div class="cutoff-time-field Polaris-FormLayout__Item">
                                    <div class="Polaris-Labelled__LabelWrapper">
                                        <div class="Polaris-Label">
                                            <label for="cutoff-time">Cut Off Time:</label>
                                        </div>
                                    </div>
                                    <div class="Polaris-TextField Polaris-TextField--hasValue">
                                        <input type="time" class="cutoff-time Polaris-TextField__Input" value="@foreach($ExPrepTime['wednesday'] as $xprep){{$xprep->cuttoff_time}}@endforeach">
                                        <div class="Polaris-TextField__Backdrop"></div>
                                    </div>
                                </div>
                                <div class="cutoff-days Polaris-FormLayout__Item">
                                    <div class="Polaris-Labelled__LabelWrapper">
                                        <div class="Polaris-Label">
                                            <label for="cutoff-time">Preparation Days:</label>
                                        </div>
                                    </div>
                                    <div class="Polaris-TextField Polaris-TextField--hasValue">
                                        <input type="text" class="cutoff-prep-day Polaris-TextField__Input" value="@foreach($ExPrepTime['wednesday'] as $xprep){{$xprep->cuttoff_preparation_day}}@endforeach">
                                        <div class="Polaris-TextField__Backdrop"></div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offsetContainer expoffsetContainer expoffsetContainer-4 hide">
    <div class="Polaris-Stack Polaris-Stack--vertical" style="display:block">
        <div class="Polaris-Stack__Item">
            <div class="Polaris-FormLayout">
                <div role="group" class="Polaris-FormLayout--grouped">
                    <div class="Polaris-FormLayout__Items">
                        <div class="Polaris-FormLayout__Item">
                            <div class="Polaris-Stack Polaris-Stack--vertical Polaris-Stack--spacingTight">
                                <div class="Polaris-Stack__Item">
                                    <p>Preparation time required for orders placed on Thursday</p>
                                </div>
                                <div class="Polaris-Stack__Item">
                                    <div class="Polaris-Labelled--hidden">
                                        <div class="Polaris-Labelled__LabelWrapper">
                                            <div class="Polaris-Label">
                                                <label id="PolarisTextField30Label" for="PolarisTextField30" class="Polaris-Label__Text">Offset format</label>
                                            </div>
                                        </div>
                                        <div class="Polaris-Connected">
                                            <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                <div class="Polaris-TextField Polaris-TextField--hasValue">
                                                    <input id="PolarisTextField30" placeholder="0" autocomplete="off" class="Polaris-TextField__Input prepTimeInput" min="0" type="number" aria-labelledby="PolarisTextField30Label" aria-invalid="false" value="@foreach($ExPrepTime['thursday'] as $xprep){{ $xprep->preparation_time}}@endforeach">
                                                    <div class="Polaris-TextField__Spinner" aria-hidden="true">
                                                        <div role="button" class="Polaris-TextField__Segment plus-btn" tabindex="-1">
                                                            <div class="Polaris-TextField__SpinnerIcon">
                                                                <span class="Polaris-Icon">
                                                                    <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                        <path d="M6.902 12h6.196c.751 0 1.172-.754.708-1.268l-3.098-3.432c-.36-.399-1.055-.399-1.416 0l-3.098 3.433c-.464.513-.043 1.267.708 1.267Z"></path>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div role="button" class="Polaris-TextField__Segment minus-btn" tabindex="-1">
                                                            <div class="Polaris-TextField__SpinnerIcon">
                                                                <span class="Polaris-Icon">
                                                                    <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                        <path d="M13.098 8h-6.196c-.751 0-1.172.754-.708 1.268l3.098 3.432c.36.399 1.055.399 1.416 0l3.098-3.433c.464-.513.043-1.267-.708-1.267Z"></path>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-TextField__Backdrop"></div>
                                                </div>
                                            </div>
                                            <div class="Polaris-Connected__Item">
                                                <div class="Polaris-Labelled--hidden">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label">
                                                            <label id="PolarisSelect4Label" for="PolarisSelect4" class="Polaris-Label__Text">Offset format</label>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-Select">
                                                        <select id="PolarisSelect4" class="Polaris-Select__Input expprepTimeType" aria-invalid="false">
                                                        
                                                            <option value="days" @foreach($ExPrepTime['thursday'] as $xprep) @if($xprep->preparation_time_type === 'days') selected @endif @endforeach>Days</option>
                                                        </select>
                                                        <div class="Polaris-Select__Content" aria-hidden="true">
                                                            <span class="Polaris-Select__SelectedOption">@foreach($ExPrepTime['thursday'] as $xprep){{$xprep->preparation_time_type}}@endforeach</span>
                                                            <span class="Polaris-Select__Icon">
                                                                <span class="Polaris-Icon">
                                                                    <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                        <path d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z"></path>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="Polaris-Select__Backdrop"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Polaris-FormLayout__Item">
                    <label class="Polaris-Choice" for="expPolarisCheckbox25_3">
                        <span class="Polaris-Choice__Control">
                            <span class="Polaris-Checkbox">
                                <input id="expPolarisCheckbox25_3" type="checkbox" class="Polaris-Checkbox__Input cutoff-selector" aria-invalid="false" role="checkbox" aria-checked="false" value="" @foreach($ExPrepTime['thursday'] as $xprep) @if($xprep->cutoff_enable == 'true') checked="" @endif @endforeach>
                                <span class="Polaris-Checkbox__Backdrop"></span>
                                <span class="Polaris-Checkbox__Icon">
                                    <span class="Polaris-Icon">
                                        <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                            <path d="M14.723 6.237a.94.94 0 0 1 .053 1.277l-5.366 6.193a.834.834 0 0 1-.611.293.83.83 0 0 1-.622-.264l-2.927-3.097a.94.94 0 0 1 0-1.278.82.82 0 0 1 1.207 0l2.297 2.43 4.763-5.498a.821.821 0 0 1 1.206-.056Z"></path>
                                        </svg>
                                    </span>
                                </span>
                            </span>
                        </span>
                        <span class="Polaris-Choice__Label">
                            <span>Add a cutoff time</span>
                        </span>
                    </label>
                    <div class="cutoff-time" @foreach($ExPrepTime['thursday'] as $xprep) @if($xprep->cutoff_enable == 'true') style="display:block;" @else style="display:none;" @endif @endforeach>
                        <div class="Polaris-FormLayout__Items">
                                <div class="cutoff-time-field Polaris-FormLayout__Item">
                                    <div class="Polaris-Labelled__LabelWrapper">
                                        <div class="Polaris-Label">
                                            <label for="cutoff-time">Cut Off Time:</label>
                                        </div>
                                    </div>
                                    <div class="Polaris-TextField Polaris-TextField--hasValue">
                                        <input type="time" class="cutoff-time Polaris-TextField__Input" value="@foreach($ExPrepTime['thursday'] as $xprep){{$xprep->cuttoff_time}}@endforeach">
                                        <div class="Polaris-TextField__Backdrop"></div>
                                    </div>
                                </div>
                                <div class="cutoff-days Polaris-FormLayout__Item">
                                    <div class="Polaris-Labelled__LabelWrapper">
                                        <div class="Polaris-Label">
                                            <label for="cutoff-time">Preparation Days:</label>
                                        </div>
                                    </div>
                                    <div class="Polaris-TextField Polaris-TextField--hasValue">
                                        <input type="text" class="cutoff-prep-day Polaris-TextField__Input" value="@foreach($ExPrepTime['thursday'] as $xprep){{$xprep->cuttoff_preparation_day}}@endforeach">
                                        <div class="Polaris-TextField__Backdrop"></div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offsetContainer expoffsetContainer expoffsetContainer-5 hide">
    <div class="Polaris-Stack Polaris-Stack--vertical" style="display:block">
        <div class="Polaris-Stack__Item">
            <div class="Polaris-FormLayout">
                <div role="group" class="Polaris-FormLayout--grouped">
                    <div class="Polaris-FormLayout__Items">
                        <div class="Polaris-FormLayout__Item">
                            <div class="Polaris-Stack Polaris-Stack--vertical Polaris-Stack--spacingTight">
                                <div class="Polaris-Stack__Item">
                                    <p>Preparation time required for orders placed on Friday</p>
                                </div>
                                <div class="Polaris-Stack__Item">
                                    <div class="Polaris-Labelled--hidden">
                                        <div class="Polaris-Labelled__LabelWrapper">
                                            <div class="Polaris-Label">
                                                <label id="PolarisTextField30Label" for="PolarisTextField30" class="Polaris-Label__Text">Offset format</label>
                                            </div>
                                        </div>
                                        <div class="Polaris-Connected">
                                            <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                <div class="Polaris-TextField Polaris-TextField--hasValue">
                                                    <input id="PolarisTextField30" placeholder="0" autocomplete="off" class="Polaris-TextField__Input prepTimeInput" min="0" type="number" aria-labelledby="PolarisTextField30Label" aria-invalid="false" value="@foreach($ExPrepTime['friday'] as $xprep){{ $xprep->preparation_time}}@endforeach">
                                                    <div class="Polaris-TextField__Spinner" aria-hidden="true">
                                                        <div role="button" class="Polaris-TextField__Segment plus-btn" tabindex="-1">
                                                            <div class="Polaris-TextField__SpinnerIcon">
                                                                <span class="Polaris-Icon">
                                                                    <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                        <path d="M6.902 12h6.196c.751 0 1.172-.754.708-1.268l-3.098-3.432c-.36-.399-1.055-.399-1.416 0l-3.098 3.433c-.464.513-.043 1.267.708 1.267Z"></path>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div role="button" class="Polaris-TextField__Segment minus-btn" tabindex="-1">
                                                            <div class="Polaris-TextField__SpinnerIcon">
                                                                <span class="Polaris-Icon">
                                                                    <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                        <path d="M13.098 8h-6.196c-.751 0-1.172.754-.708 1.268l3.098 3.432c.36.399 1.055.399 1.416 0l3.098-3.433c.464-.513.043-1.267-.708-1.267Z"></path>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-TextField__Backdrop"></div>
                                                </div>
                                            </div>
                                            <div class="Polaris-Connected__Item">
                                                <div class="Polaris-Labelled--hidden">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label">
                                                            <label id="PolarisSelect4Label" for="PolarisSelect4" class="Polaris-Label__Text">Offset format</label>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-Select">
                                                        <select id="PolarisSelect4" class="Polaris-Select__Input expprepTimeType" aria-invalid="false">
                                                            
                                                            <option value="days" @foreach($ExPrepTime['friday'] as $xprep) @if($xprep->preparation_time_type === 'days') selected @endif @endforeach>Days</option>
                                                        </select>
                                                        <div class="Polaris-Select__Content" aria-hidden="true">
                                                            <span class="Polaris-Select__SelectedOption">@foreach($ExPrepTime['friday'] as $xprep){{$xprep->preparation_time_type}}@endforeach</span>
                                                            <span class="Polaris-Select__Icon">
                                                                <span class="Polaris-Icon">
                                                                    <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                        <path d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z"></path>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="Polaris-Select__Backdrop"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Polaris-FormLayout__Item">
                    <label class="Polaris-Choice" for="expPolarisCheckbox25_4">
                        <span class="Polaris-Choice__Control">
                            <span class="Polaris-Checkbox">
                                <input id="expPolarisCheckbox25_4" type="checkbox" class="Polaris-Checkbox__Input cutoff-selector" aria-invalid="false" role="checkbox" aria-checked="false" value="" @foreach($ExPrepTime['friday'] as $xprep) @if($xprep->cutoff_enable == 'true') checked="" @endif @endforeach>
                                <span class="Polaris-Checkbox__Backdrop"></span>
                                <span class="Polaris-Checkbox__Icon">
                                    <span class="Polaris-Icon">
                                        <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                            <path d="M14.723 6.237a.94.94 0 0 1 .053 1.277l-5.366 6.193a.834.834 0 0 1-.611.293.83.83 0 0 1-.622-.264l-2.927-3.097a.94.94 0 0 1 0-1.278.82.82 0 0 1 1.207 0l2.297 2.43 4.763-5.498a.821.821 0 0 1 1.206-.056Z"></path>
                                        </svg>
                                    </span>
                                </span>
                            </span>
                        </span>
                        <span class="Polaris-Choice__Label">
                            <span>Add a cutoff time</span>
                        </span>
                    </label>
                    <div class="cutoff-time" @foreach($ExPrepTime['friday'] as $xprep) @if($xprep->cutoff_enable == 'true') style="display:block;" @else style="display:none;" @endif @endforeach>
                        <div class="Polaris-FormLayout__Items">
                                <div class="cutoff-time-field Polaris-FormLayout__Item">
                                    <div class="Polaris-Labelled__LabelWrapper">
                                        <div class="Polaris-Label">
                                            <label for="cutoff-time">Cut Off Time:</label>
                                        </div>
                                    </div>
                                    <div class="Polaris-TextField Polaris-TextField--hasValue">
                                        <input type="time" class="cutoff-time Polaris-TextField__Input" value="@foreach($ExPrepTime['friday'] as $xprep){{$xprep->cuttoff_time}}@endforeach">
                                        <div class="Polaris-TextField__Backdrop"></div>
                                    </div>
                                </div>
                                <div class="cutoff-days Polaris-FormLayout__Item">
                                    <div class="Polaris-Labelled__LabelWrapper">
                                        <div class="Polaris-Label">
                                            <label for="cutoff-time">Preparation Days:</label>
                                        </div>
                                    </div>
                                    <div class="Polaris-TextField Polaris-TextField--hasValue">
                                        <input type="text" class="cutoff-prep-day Polaris-TextField__Input" value="@foreach($ExPrepTime['friday'] as $xprep){{$xprep->cuttoff_preparation_day}}@endforeach">
                                        <div class="Polaris-TextField__Backdrop"></div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offsetContainer expoffsetContainer expoffsetContainer-6 hide">
    <div class="Polaris-Stack Polaris-Stack--vertical" style="display:block">
        <div class="Polaris-Stack__Item">
            <div class="Polaris-FormLayout">
                <div role="group" class="Polaris-FormLayout--grouped">
                    <div class="Polaris-FormLayout__Items">
                        <div class="Polaris-FormLayout__Item">
                            <div class="Polaris-Stack Polaris-Stack--vertical Polaris-Stack--spacingTight">
                                <div class="Polaris-Stack__Item">
                                    <p>Preparation time required for orders placed on Saturday</p>
                                </div>
                                <div class="Polaris-Stack__Item">
                                    <div class="Polaris-Labelled--hidden">
                                        <div class="Polaris-Labelled__LabelWrapper">
                                            <div class="Polaris-Label">
                                                <label id="PolarisTextField30Label" for="PolarisTextField30" class="Polaris-Label__Text">Offset format</label>
                                            </div>
                                        </div>
                                        <div class="Polaris-Connected">
                                            <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                <div class="Polaris-TextField Polaris-TextField--hasValue">
                                                    <input id="PolarisTextField30" placeholder="0" autocomplete="off" class="Polaris-TextField__Input prepTimeInput" min="0" type="number" aria-labelledby="PolarisTextField30Label" aria-invalid="false" value="@foreach($ExPrepTime['saturday'] as $xprep){{ $xprep->preparation_time}}@endforeach">
                                                    <div class="Polaris-TextField__Spinner" aria-hidden="true">
                                                        <div role="button" class="Polaris-TextField__Segment plus-btn" tabindex="-1">
                                                            <div class="Polaris-TextField__SpinnerIcon">
                                                                <span class="Polaris-Icon">
                                                                    <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                        <path d="M6.902 12h6.196c.751 0 1.172-.754.708-1.268l-3.098-3.432c-.36-.399-1.055-.399-1.416 0l-3.098 3.433c-.464.513-.043 1.267.708 1.267Z"></path>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div role="button" class="Polaris-TextField__Segment minus-btn" tabindex="-1">
                                                            <div class="Polaris-TextField__SpinnerIcon">
                                                                <span class="Polaris-Icon">
                                                                    <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                        <path d="M13.098 8h-6.196c-.751 0-1.172.754-.708 1.268l3.098 3.432c.36.399 1.055.399 1.416 0l3.098-3.433c.464-.513.043-1.267-.708-1.267Z"></path>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-TextField__Backdrop"></div>
                                                </div>
                                            </div>
                                            <div class="Polaris-Connected__Item">
                                                <div class="Polaris-Labelled--hidden">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label">
                                                            <label id="PolarisSelect4Label" for="PolarisSelect4" class="Polaris-Label__Text">Offset format</label>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-Select">
                                                        <select id="PolarisSelect4" class="Polaris-Select__Input expprepTimeType" aria-invalid="false">
                                                            
                                                            <option value="days" @foreach($ExPrepTime['saturday'] as $xprep) @if($xprep->preparation_time_type === 'days') selected @endif @endforeach>Days</option>
                                                        </select>
                                                        <div class="Polaris-Select__Content" aria-hidden="true">
                                                            <span class="Polaris-Select__SelectedOption">@foreach($ExPrepTime['saturday'] as $xprep){{$xprep->preparation_time_type}}@endforeach</span>
                                                            <span class="Polaris-Select__Icon">
                                                                <span class="Polaris-Icon">
                                                                    <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                        <path d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z"></path>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="Polaris-Select__Backdrop"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Polaris-FormLayout__Item">
                    <label class="Polaris-Choice" for="expPolarisCheckbox25_5">
                        <span class="Polaris-Choice__Control">
                            <span class="Polaris-Checkbox">
                                <input id="expPolarisCheckbox25_5" type="checkbox" class="Polaris-Checkbox__Input cutoff-selector" aria-invalid="false" role="checkbox" aria-checked="false" value="" @foreach($ExPrepTime['saturday'] as $xprep) @if($xprep->cutoff_enable == 'true') checked="" @endif @endforeach>
                                <span class="Polaris-Checkbox__Backdrop"></span>
                                <span class="Polaris-Checkbox__Icon">
                                    <span class="Polaris-Icon">
                                        <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                            <path d="M14.723 6.237a.94.94 0 0 1 .053 1.277l-5.366 6.193a.834.834 0 0 1-.611.293.83.83 0 0 1-.622-.264l-2.927-3.097a.94.94 0 0 1 0-1.278.82.82 0 0 1 1.207 0l2.297 2.43 4.763-5.498a.821.821 0 0 1 1.206-.056Z"></path>
                                        </svg>
                                    </span>
                                </span>
                            </span>
                        </span>
                        <span class="Polaris-Choice__Label">
                            <span>Add a cutoff time</span>
                        </span>
                    </label>
                    <div class="cutoff-time" @foreach($ExPrepTime['saturday'] as $xprep) @if($xprep->cutoff_enable == 'true') style="display:block;" @else style="display:none;" @endif @endforeach>
                        <div class="Polaris-FormLayout__Items">
                                <div class="cutoff-time-field Polaris-FormLayout__Item">
                                    <div class="Polaris-Labelled__LabelWrapper">
                                        <div class="Polaris-Label">
                                            <label for="cutoff-time">Cut Off Time:</label>
                                        </div>
                                    </div>
                                    <div class="Polaris-TextField Polaris-TextField--hasValue">
                                        <input type="time" class="cutoff-time Polaris-TextField__Input" value="@foreach($ExPrepTime['saturday'] as $xprep){{$xprep->cuttoff_time}}@endforeach">
                                        <div class="Polaris-TextField__Backdrop"></div>
                                    </div>
                                </div>
                                <div class="cutoff-days Polaris-FormLayout__Item">
                                    <div class="Polaris-Labelled__LabelWrapper">
                                        <div class="Polaris-Label">
                                            <label for="cutoff-time">Preparation Days:</label>
                                        </div>
                                    </div>
                                    <div class="Polaris-TextField Polaris-TextField--hasValue">
                                        <input type="text" class="cutoff-prep-day Polaris-TextField__Input" value="@foreach($ExPrepTime['saturday'] as $xprep){{$xprep->cuttoff_preparation_day}}@endforeach">
                                        <div class="Polaris-TextField__Backdrop"></div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offsetContainer expoffsetContainer expoffsetContainer-7 hide">
    <div class="Polaris-Stack Polaris-Stack--vertical" style="display:block">
        <div class="Polaris-Stack__Item">
            <div class="Polaris-FormLayout">
                <div role="group" class="Polaris-FormLayout--grouped">
                    <div class="Polaris-FormLayout__Items">
                        <div class="Polaris-FormLayout__Item">
                            <div class="Polaris-Stack Polaris-Stack--vertical Polaris-Stack--spacingTight">
                                <div class="Polaris-Stack__Item">
                                    <p>Preparation time required for orders placed on Sunday</p>
                                </div>
                                <div class="Polaris-Stack__Item">
                                    <div class="Polaris-Labelled--hidden">
                                        <div class="Polaris-Labelled__LabelWrapper">
                                            <div class="Polaris-Label">
                                                <label id="PolarisTextField30Label" for="PolarisTextField30" class="Polaris-Label__Text">Offset format</label>
                                            </div>
                                        </div>
                                        <div class="Polaris-Connected">
                                            <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                <div class="Polaris-TextField Polaris-TextField--hasValue">
                                                    <input id="PolarisTextField30" placeholder="0" autocomplete="off" class="Polaris-TextField__Input prepTimeInput" min="0" type="number" aria-labelledby="PolarisTextField30Label" aria-invalid="false" value="@foreach($ExPrepTime['sunday'] as $xprep){{ $xprep->preparation_time}}@endforeach">
                                                    <div class="Polaris-TextField__Spinner" aria-hidden="true">
                                                        <div role="button" class="Polaris-TextField__Segment plus-btn" tabindex="-1">
                                                            <div class="Polaris-TextField__SpinnerIcon">
                                                                <span class="Polaris-Icon">
                                                                    <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                        <path d="M6.902 12h6.196c.751 0 1.172-.754.708-1.268l-3.098-3.432c-.36-.399-1.055-.399-1.416 0l-3.098 3.433c-.464.513-.043 1.267.708 1.267Z"></path>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div role="button" class="Polaris-TextField__Segment minus-btn" tabindex="-1">
                                                            <div class="Polaris-TextField__SpinnerIcon">
                                                                <span class="Polaris-Icon">
                                                                    <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                        <path d="M13.098 8h-6.196c-.751 0-1.172.754-.708 1.268l3.098 3.432c.36.399 1.055.399 1.416 0l3.098-3.433c.464-.513.043-1.267-.708-1.267Z"></path>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-TextField__Backdrop"></div>
                                                </div>
                                            </div>
                                            <div class="Polaris-Connected__Item">
                                                <div class="Polaris-Labelled--hidden">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label">
                                                            <label id="PolarisSelect4Label" for="PolarisSelect4" class="Polaris-Label__Text">Offset format</label>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-Select">
                                                        <select id="PolarisSelect4" class="Polaris-Select__Input  expprepTimeType" aria-invalid="false">
                                                        
                                                            <option value="days" @foreach($ExPrepTime['sunday'] as $xprep) @if($xprep->preparation_time_type === 'days') selected @endif @endforeach>Days</option>
                                                        </select>
                                                        <div class="Polaris-Select__Content" aria-hidden="true">
                                                            <span class="Polaris-Select__SelectedOption">@foreach($ExPrepTime['sunday'] as $xprep){{$xprep->preparation_time_type}}@endforeach</span>
                                                            <span class="Polaris-Select__Icon">
                                                                <span class="Polaris-Icon">
                                                                    <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                        <path d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z"></path>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="Polaris-Select__Backdrop"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Polaris-FormLayout__Item">
                    <label class="Polaris-Choice" for="expPolarisCheckbox25_6">
                        <span class="Polaris-Choice__Control">
                            <span class="Polaris-Checkbox">
                                <input id="expPolarisCheckbox25_6" type="checkbox" class="Polaris-Checkbox__Input cutoff-selector" aria-invalid="false" role="checkbox" aria-checked="false" value="" @foreach($ExPrepTime['sunday'] as $xprep) @if($xprep->cutoff_enable == 'true') checked="" @endif @endforeach>
                                <span class="Polaris-Checkbox__Backdrop"></span>
                                <span class="Polaris-Checkbox__Icon">
                                    <span class="Polaris-Icon">
                                        <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                            <path d="M14.723 6.237a.94.94 0 0 1 .053 1.277l-5.366 6.193a.834.834 0 0 1-.611.293.83.83 0 0 1-.622-.264l-2.927-3.097a.94.94 0 0 1 0-1.278.82.82 0 0 1 1.207 0l2.297 2.43 4.763-5.498a.821.821 0 0 1 1.206-.056Z"></path>
                                        </svg>
                                    </span>
                                </span>
                            </span>
                        </span>
                        <span class="Polaris-Choice__Label">
                            <span>Add a cutoff time</span>
                        </span>
                    </label>
                    <div class="cutoff-time" @foreach($ExPrepTime['sunday'] as $xprep) @if($xprep->cutoff_enable == 'true') style="display:block;" @else style="display:none;" @endif @endforeach>
                        <div class="Polaris-FormLayout__Items">
                                <div class="cutoff-time-field Polaris-FormLayout__Item">
                                    <div class="Polaris-Labelled__LabelWrapper">
                                        <div class="Polaris-Label">
                                            <label for="cutoff-time">Cut Off Time:</label>
                                        </div>
                                    </div>
                                    <div class="Polaris-TextField Polaris-TextField--hasValue">
                                        <input type="time" class="cutoff-time Polaris-TextField__Input" value="@foreach($ExPrepTime['sunday'] as $xprep){{$xprep->cuttoff_time}}@endforeach">
                                        <div class="Polaris-TextField__Backdrop"></div>
                                    </div>
                                </div>
                                <div class="cutoff-days Polaris-FormLayout__Item">
                                    <div class="Polaris-Labelled__LabelWrapper">
                                        <div class="Polaris-Label">
                                            <label for="cutoff-time">Preparation Days:</label>
                                        </div>
                                    </div>
                                    <div class="Polaris-TextField Polaris-TextField--hasValue">
                                        <input type="text" class="cutoff-prep-day Polaris-TextField__Input" value="@foreach($ExPrepTime['sunday'] as $xprep){{$xprep->cuttoff_preparation_day}}@endforeach">
                                        <div class="Polaris-TextField__Backdrop"></div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
