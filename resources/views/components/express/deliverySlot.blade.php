<div class="Polaris-FormLayout">
    <div class="Polaris-FormLayout__Item">
        <fieldset class="Polaris-VerticalStack Polaris-VerticalStack--fieldsetReset" aria-invalid="false"
            style="--pc-vertical-stack-order: column; --pc-vertical-stack-gap-xs: var(--p-space-4); --pc-vertical-stack-gap-md: var(--p-space-0);">
            <legend class="Polaris-Box Polaris-Box--visuallyHidden"
                style="--pc-box-padding-block-end-xs: var(--p-space-5); --pc-box-padding-block-end-md: var(--p-space-1);">
                Delivery slots</legend>
            <ul class="Polaris-VerticalStack Polaris-VerticalStack--listReset"
                style="--pc-vertical-stack-order: column; --pc-vertical-stack-gap-xs: var(--p-space-4); --pc-vertical-stack-gap-md: var(--p-space-0);">
                <li>
                    <div class="Polaris-Bleed" style="--pc-bleed-margin-block-end-xs: var(--p-space-0);">
                        <label class="Polaris-Choice" for="ExpSameEveryDaySlot">
                            <span class="Polaris-Choice__Control">
                                <span class="Polaris-RadioButton">
                                    <input id="ExpSameEveryDaySlot" name="ExpSlot" type="radio"
                                        class="Polaris-RadioButton__Input" value="true"
                                        @if ($ExOptions->delivery_slot_same_every_day_of_week == 'yes') checked @endif>
                                    <span class="Polaris-RadioButton__Backdrop"></span>
                                </span>
                            </span>
                            <span class="Polaris-Choice__Label">
                                <span>Same every day of the week</span>
                            </span>
                        </label>
                    </div>
                </li>
                <li>
                    <div class="Polaris-Bleed" style="--pc-bleed-margin-block-end-xs: var(--p-space-0);">
                        <label class="Polaris-Choice" for="ExpDiffrentEachDaySlot">
                            <span class="Polaris-Choice__Control">
                                <span class="Polaris-RadioButton">
                                    <input id="ExpDiffrentEachDaySlot" name="ExpSlot" type="radio"
                                        class="Polaris-RadioButton__Input" value="false"
                                        @if ($ExOptions->delivery_slot_diffrent_each_days_of_the_week == 'yes') checked @endif>
                                    <span class="Polaris-RadioButton__Backdrop"></span>
                                </span>
                            </span>
                            <span class="Polaris-Choice__Label">
                                <span>Different each day of the week</span>
                            </span>
                        </label>
                    </div>
                </li>
            </ul>
        </fieldset>
    </div>
</div>
</div>
<div
    class="Polaris-Card__Section Polaris-Card__Section--subdued ExpDeliverySlot__Container @if ($ExOptions->delivery_slot_diffrent_each_days_of_the_week == 'yes') @else hide @endif">
    <div id="myFieldIDError" class="Polaris-InlineError" style="display:none;">
        <div class="Polaris-InlineError__Icon">
            <span class="Polaris-Icon">
                <span class="Polaris-Text--root Polaris-Text--visuallyHidden">
                </span>
                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M11.42 2.588a2.007 2.007 0 0 0-2.84 0l-5.992 5.993a2.007 2.007 0 0 0 0 2.838l5.993 5.993a2.007 2.007 0 0 0 2.838 0l5.993-5.993a2.007 2.007 0 0 0 0-2.838l-5.993-5.993Zm-2.223 4.2a.803.803 0 1 1 1.606 0v3.212a.803.803 0 1 1-1.606 0v-3.211Zm1.606 6.423a.803.803 0 1 1-1.606 0 .803.803 0 0 1 1.606 0Z">
                    </path>
                </svg>
            </span>
        </div>
        Please add Atleast one slot in all specific days (required).
    </div>
    <div>
        <div class="Polaris-Box"
            style="--pc-box-border-color: var(--p-color-border-subdued); --pc-box-border-style: solid; --pc-box-border-block-end-width: var(--p-border-width-1); --pc-box-padding-inline-start-xs: var(--p-space-2); --pc-box-padding-inline-end-xs: var(--p-space-2);">

            <ul role="tablist" class="Polaris-Tabs Polaris-Tabs--fitted">
                <li class="Polaris-Tabs__TabContainer" role="presentation">
                    <button id="sunday-delivery-slots" role="tab" type="button" tabindex="7"
                        class="Polaris-Tabs__Tab ExpSpecificDaySlotTab Polaris-Tabs__Tab--selected"
                        aria-selected="true">
                        <span class="Polaris-Tabs__Title">Sun</span>
                    </button>
                </li>
                <li class="Polaris-Tabs__TabContainer" role="presentation">
                    <button id="monday-delivery-slots" role="tab" type="button" tabindex="1"
                        class="Polaris-Tabs__Tab ExpSpecificDaySlotTab" aria-selected="false">
                        <span class="Polaris-Tabs__Title">Mon</span>
                    </button>
                </li>
                <li class="Polaris-Tabs__TabContainer" role="presentation">
                    <button id="tuesday-delivery-slots" role="tab" type="button" tabindex="2"
                        class="Polaris-Tabs__Tab ExpSpecificDaySlotTab" aria-selected="false">
                        <span class="Polaris-Tabs__Title">Tue</span>
                    </button>
                </li>
                <li class="Polaris-Tabs__TabContainer" role="presentation">
                    <button id="wednesday-delivery-slots" role="tab" type="button" tabindex="3"
                        class="Polaris-Tabs__Tab ExpSpecificDaySlotTab" aria-selected="false">
                        <span class="Polaris-Tabs__Title">Wed</span>
                    </button>
                </li>
                <li class="Polaris-Tabs__TabContainer" role="presentation">
                    <button id="thursday-delivery-slots" role="tab" type="button" tabindex="4"
                        class="Polaris-Tabs__Tab ExpSpecificDaySlotTab" aria-selected="false">
                        <span class="Polaris-Tabs__Title">Thu</span>
                    </button>
                </li>
                <li class="Polaris-Tabs__TabContainer" role="presentation">
                    <button id="friday-delivery-slots" role="tab" type="button" tabindex="5"
                        class="Polaris-Tabs__Tab ExpSpecificDaySlotTab" aria-selected="false">
                        <span class="Polaris-Tabs__Title">Fri</span>
                    </button>
                </li>
                <li class="Polaris-Tabs__TabContainer" role="presentation">
                    <button id="saturday-delivery-slots" role="tab" type="button" tabindex="6"
                        class="Polaris-Tabs__Tab ExpSpecificDaySlotTab" aria-selected="false">
                        <span class="Polaris-Tabs__Title">Sat</span>
                    </button>
                </li>

            </ul>
        </div>
    </div>
    <div class="Polaris-FormLayout ExpSlotContainer ExpSlotContainer_1 hide">
        <div class="Polaris-FormLayout__Item">
            <div class="deliveryTimesContainer">
                <div class="Polaris-Stack Polaris-Stack--vertical ExpSlotData">
                    @foreach ($ExspecificDaySlots['monday'] as $slot)
                        <div class="Polaris-Stack__Item">
                            <table class="table slotTable">
                                <thead>
                                    <tr>
                                        <td>From</td>
                                        <td>Until</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="Polaris-Labelled--hidden">
                                                <div class="Polaris-Labelled__LabelWrapper">
                                                    <div class="Polaris-Label">
                                                        <label id="PolarisSelect40Label" for="PolarisSelect40"
                                                            class="Polaris-Label__Text">From</label>
                                                    </div>
                                                </div>
                                                <div class="Polaris-Select">
                                                    <select id="PolarisSelect40"
                                                        class="Polaris-Select__Input slot-selector"
                                                        aria-invalid="false">
                                                        <option value="" disabled="">Select</option>
                                                        @foreach ($timeSlots as $timeSlot)
                                                            <option value="{{ $timeSlot->from }}"
                                                                @if ($timeSlot->from == $slot->from) selected @endif>
                                                                {{ $timeSlot->from_12hrs_format }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">
                                                            @foreach ($timeSlots as $timeSlot)
                                                                @if ($timeSlot->from == $slot->from)
                                                                    {{ $timeSlot->from_12hrs_format }}
                                                                @endif
                                                            @endforeach
                                                        </span>
                                                        <span class="Polaris-Select__Icon">
                                                            <span class="Polaris-Icon">
                                                                <span
                                                                    class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg"
                                                                    focusable="false" aria-hidden="true">
                                                                    <path
                                                                        d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="Polaris-Select__Backdrop"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="Polaris-Labelled--hidden">
                                                <div class="Polaris-Labelled__LabelWrapper">
                                                    <div class="Polaris-Label">
                                                        <label id="PolarisSelect41Label" for="PolarisSelect41"
                                                            class="Polaris-Label__Text">Delivery until</label>
                                                    </div>
                                                </div>
                                                <div class="Polaris-Select">
                                                    <select id="PolarisSelect41"
                                                        class="Polaris-Select__Input slot-selector"
                                                        aria-invalid="false">
                                                        <option value="" disabled="">Select</option>
                                                        @foreach ($timeSlots as $timeSlot)
                                                            <option value="{{ $timeSlot->until }}"
                                                                @if ($timeSlot->until == $slot->until) selected @endif>
                                                                {{ $timeSlot->until_12hrs_format }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">
                                                            @foreach ($timeSlots as $timeSlot)
                                                                @if ($timeSlot->until == $slot->until)
                                                                    {{ $timeSlot->until_12hrs_format }}
                                                                @endif
                                                            @endforeach
                                                        </span>
                                                        <span class="Polaris-Select__Icon">
                                                            <span class="Polaris-Icon">
                                                                <span
                                                                    class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg"
                                                                    focusable="false" aria-hidden="true">
                                                                    <path
                                                                        d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="Polaris-Select__Backdrop"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="Polaris-Button Polaris-Button--iconOnly removeSlot">
                                                <span class="Polaris-Button__Content">
                                                    <span class="Polaris-Button__Icon">
                                                        <span class="Polaris-Icon">
                                                            <span
                                                                class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg"
                                                                focusable="false" aria-hidden="true">
                                                                <path
                                                                    d="M8 3.994c0-1.101.895-1.994 2-1.994s2 .893 2 1.994h4c.552 0 1 .446 1 .997a1 1 0 0 1-1 .997h-12c-.552 0-1-.447-1-.997s.448-.997 1-.997h4zm-3 10.514v-6.508h2v6.508a.5.5 0 0 0 .5.498h1.5v-7.006h2v7.006h1.5a.5.5 0 0 0 .5-.498v-6.508h2v6.508a2.496 2.496 0 0 1-2.5 2.492h-5c-1.38 0-2.5-1.116-2.5-2.492z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                </span>
                                            </button>
                                        </td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @endforeach
                </div>
                <div class="Polaris-Stack">
                    <div class="Polaris-Stack__Item">
                        <div class="addSlotButton">
                            <button class="Polaris-Button ExpAddSlot" type="button">
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
                                    <span class="Polaris-Button__Text">Add slot</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Polaris-FormLayout ExpSlotContainer ExpSlotContainer_2 hide">
        <div class="Polaris-FormLayout__Item">
            <div class="deliveryTimesContainer">
                <div class="Polaris-Stack Polaris-Stack--vertical ExpSlotData">
                    @foreach ($ExspecificDaySlots['tuesday'] as $slot)
                        <div class="Polaris-Stack__Item">
                            <table class="table slotTable">
                                <thead>
                                    <tr>
                                        <td>From</td>
                                        <td>Until</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="Polaris-Labelled--hidden">
                                                <div class="Polaris-Labelled__LabelWrapper">
                                                    <div class="Polaris-Label">
                                                        <label id="PolarisSelect40Label" for="PolarisSelect40"
                                                            class="Polaris-Label__Text">From</label>
                                                    </div>
                                                </div>
                                                <div class="Polaris-Select">
                                                    <select id="PolarisSelect40"
                                                        class="Polaris-Select__Input slot-selector"
                                                        aria-invalid="false">
                                                        <option value="" disabled="">Select</option>
                                                        @foreach ($timeSlots as $timeSlot)
                                                            <option value="{{ $timeSlot->from }}"
                                                                @if ($timeSlot->from == $slot->from) selected @endif>
                                                                {{ $timeSlot->from_12hrs_format }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">
                                                            @foreach ($timeSlots as $timeSlot)
                                                                @if ($timeSlot->from == $slot->from)
                                                                    {{ $timeSlot->from_12hrs_format }}
                                                                @endif
                                                            @endforeach
                                                        </span>
                                                        <span class="Polaris-Select__Icon">
                                                            <span class="Polaris-Icon">
                                                                <span
                                                                    class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg"
                                                                    focusable="false" aria-hidden="true">
                                                                    <path
                                                                        d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="Polaris-Select__Backdrop"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="Polaris-Labelled--hidden">
                                                <div class="Polaris-Labelled__LabelWrapper">
                                                    <div class="Polaris-Label">
                                                        <label id="PolarisSelect41Label" for="PolarisSelect41"
                                                            class="Polaris-Label__Text">Delivery until</label>
                                                    </div>
                                                </div>
                                                <div class="Polaris-Select">
                                                    <select id="PolarisSelect41"
                                                        class="Polaris-Select__Input slot-selector"
                                                        aria-invalid="false">
                                                        <option value="" disabled="">Select</option>
                                                        @foreach ($timeSlots as $timeSlot)
                                                            <option value="{{ $timeSlot->until }}"
                                                                @if ($timeSlot->until == $slot->until) selected @endif>
                                                                {{ $timeSlot->until_12hrs_format }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">
                                                            @foreach ($timeSlots as $timeSlot)
                                                                @if ($timeSlot->until == $slot->until)
                                                                    {{ $timeSlot->until_12hrs_format }}
                                                                @endif
                                                            @endforeach
                                                        </span>
                                                        <span class="Polaris-Select__Icon">
                                                            <span class="Polaris-Icon">
                                                                <span
                                                                    class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg"
                                                                    focusable="false" aria-hidden="true">
                                                                    <path
                                                                        d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="Polaris-Select__Backdrop"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="Polaris-Button Polaris-Button--iconOnly removeSlot">
                                                <span class="Polaris-Button__Content">
                                                    <span class="Polaris-Button__Icon">
                                                        <span class="Polaris-Icon">
                                                            <span
                                                                class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg"
                                                                focusable="false" aria-hidden="true">
                                                                <path
                                                                    d="M8 3.994c0-1.101.895-1.994 2-1.994s2 .893 2 1.994h4c.552 0 1 .446 1 .997a1 1 0 0 1-1 .997h-12c-.552 0-1-.447-1-.997s.448-.997 1-.997h4zm-3 10.514v-6.508h2v6.508a.5.5 0 0 0 .5.498h1.5v-7.006h2v7.006h1.5a.5.5 0 0 0 .5-.498v-6.508h2v6.508a2.496 2.496 0 0 1-2.5 2.492h-5c-1.38 0-2.5-1.116-2.5-2.492z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                </span>
                                            </button>
                                        </td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @endforeach
                </div>
                <div class="Polaris-Stack">
                    <div class="Polaris-Stack__Item">
                        <div class="addSlotButton">
                            <button class="Polaris-Button ExpAddSlot" type="button">
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
                                    <span class="Polaris-Button__Text">Add slot</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Polaris-FormLayout ExpSlotContainer ExpSlotContainer_3 hide">
        <div class="Polaris-FormLayout__Item">
            <div class="deliveryTimesContainer">
                <div class="Polaris-Stack Polaris-Stack--vertical ExpSlotData">
                    @foreach ($ExspecificDaySlots['wednesday'] as $slot)
                        <div class="Polaris-Stack__Item">
                            <table class="table slotTable">
                                <thead>
                                    <tr>
                                        <td>From</td>
                                        <td>Until</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="Polaris-Labelled--hidden">
                                                <div class="Polaris-Labelled__LabelWrapper">
                                                    <div class="Polaris-Label">
                                                        <label id="PolarisSelect40Label" for="PolarisSelect40"
                                                            class="Polaris-Label__Text">From</label>
                                                    </div>
                                                </div>
                                                <div class="Polaris-Select">
                                                    <select id="PolarisSelect40"
                                                        class="Polaris-Select__Input slot-selector"
                                                        aria-invalid="false">
                                                        <option value="" disabled="">Select</option>
                                                        @foreach ($timeSlots as $timeSlot)
                                                            <option value="{{ $timeSlot->from }}"
                                                                @if ($timeSlot->from == $slot->from) selected @endif>
                                                                {{ $timeSlot->from_12hrs_format }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">
                                                            @foreach ($timeSlots as $timeSlot)
                                                                @if ($timeSlot->from == $slot->from)
                                                                    {{ $timeSlot->from_12hrs_format }}
                                                                @endif
                                                            @endforeach
                                                        </span>
                                                        <span class="Polaris-Select__Icon">
                                                            <span class="Polaris-Icon">
                                                                <span
                                                                    class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg"
                                                                    focusable="false" aria-hidden="true">
                                                                    <path
                                                                        d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="Polaris-Select__Backdrop"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="Polaris-Labelled--hidden">
                                                <div class="Polaris-Labelled__LabelWrapper">
                                                    <div class="Polaris-Label">
                                                        <label id="PolarisSelect41Label" for="PolarisSelect41"
                                                            class="Polaris-Label__Text">Delivery until</label>
                                                    </div>
                                                </div>
                                                <div class="Polaris-Select">
                                                    <select id="PolarisSelect41"
                                                        class="Polaris-Select__Input slot-selector"
                                                        aria-invalid="false">
                                                        <option value="" disabled="">Select</option>
                                                        @foreach ($timeSlots as $timeSlot)
                                                            <option value="{{ $timeSlot->until }}"
                                                                @if ($timeSlot->until == $slot->until) selected @endif>
                                                                {{ $timeSlot->until_12hrs_format }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">
                                                            @foreach ($timeSlots as $timeSlot)
                                                                @if ($timeSlot->until == $slot->until)
                                                                    {{ $timeSlot->until_12hrs_format }}
                                                                @endif
                                                            @endforeach
                                                        </span>
                                                        <span class="Polaris-Select__Icon">
                                                            <span class="Polaris-Icon">
                                                                <span
                                                                    class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg"
                                                                    focusable="false" aria-hidden="true">
                                                                    <path
                                                                        d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="Polaris-Select__Backdrop"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="Polaris-Button Polaris-Button--iconOnly removeSlot">
                                                <span class="Polaris-Button__Content">
                                                    <span class="Polaris-Button__Icon">
                                                        <span class="Polaris-Icon">
                                                            <span
                                                                class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg"
                                                                focusable="false" aria-hidden="true">
                                                                <path
                                                                    d="M8 3.994c0-1.101.895-1.994 2-1.994s2 .893 2 1.994h4c.552 0 1 .446 1 .997a1 1 0 0 1-1 .997h-12c-.552 0-1-.447-1-.997s.448-.997 1-.997h4zm-3 10.514v-6.508h2v6.508a.5.5 0 0 0 .5.498h1.5v-7.006h2v7.006h1.5a.5.5 0 0 0 .5-.498v-6.508h2v6.508a2.496 2.496 0 0 1-2.5 2.492h-5c-1.38 0-2.5-1.116-2.5-2.492z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                </span>
                                            </button>
                                        </td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @endforeach
                </div>
                <div class="Polaris-Stack">
                    <div class="Polaris-Stack__Item">
                        <div class="addSlotButton">
                            <button class="Polaris-Button ExpAddSlot" type="button">
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
                                    <span class="Polaris-Button__Text">Add slot</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Polaris-FormLayout ExpSlotContainer ExpSlotContainer_4 hide">
        <div class="Polaris-FormLayout__Item">
            <div class="deliveryTimesContainer">
                <div class="Polaris-Stack Polaris-Stack--vertical ExpSlotData">
                    @foreach ($ExspecificDaySlots['thursday'] as $slot)
                        <div class="Polaris-Stack__Item">
                            <table class="table slotTable">
                                <thead>
                                    <tr>
                                        <td>From</td>
                                        <td>Until</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="Polaris-Labelled--hidden">
                                                <div class="Polaris-Labelled__LabelWrapper">
                                                    <div class="Polaris-Label">
                                                        <label id="PolarisSelect40Label" for="PolarisSelect40"
                                                            class="Polaris-Label__Text">From</label>
                                                    </div>
                                                </div>
                                                <div class="Polaris-Select">
                                                    <select id="PolarisSelect40"
                                                        class="Polaris-Select__Input slot-selector"
                                                        aria-invalid="false">
                                                        <option value="" disabled="">Select</option>
                                                        @foreach ($timeSlots as $timeSlot)
                                                            <option value="{{ $timeSlot->from }}"
                                                                @if ($timeSlot->from == $slot->from) selected @endif>
                                                                {{ $timeSlot->from_12hrs_format }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">
                                                            @foreach ($timeSlots as $timeSlot)
                                                                @if ($timeSlot->from == $slot->from)
                                                                    {{ $timeSlot->from_12hrs_format }}
                                                                @endif
                                                            @endforeach
                                                        </span>
                                                        <span class="Polaris-Select__Icon">
                                                            <span class="Polaris-Icon">
                                                                <span
                                                                    class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg"
                                                                    focusable="false" aria-hidden="true">
                                                                    <path
                                                                        d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="Polaris-Select__Backdrop"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="Polaris-Labelled--hidden">
                                                <div class="Polaris-Labelled__LabelWrapper">
                                                    <div class="Polaris-Label">
                                                        <label id="PolarisSelect41Label" for="PolarisSelect41"
                                                            class="Polaris-Label__Text">Delivery until</label>
                                                    </div>
                                                </div>
                                                <div class="Polaris-Select">
                                                    <select id="PolarisSelect41"
                                                        class="Polaris-Select__Input slot-selector"
                                                        aria-invalid="false">
                                                        <option value="" disabled="">Select</option>
                                                        @foreach ($timeSlots as $timeSlot)
                                                            <option value="{{ $timeSlot->until }}"
                                                                @if ($timeSlot->until == $slot->until) selected @endif>
                                                                {{ $timeSlot->until_12hrs_format }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">
                                                            @foreach ($timeSlots as $timeSlot)
                                                                @if ($timeSlot->until == $slot->until)
                                                                    {{ $timeSlot->until_12hrs_format }}
                                                                @endif
                                                            @endforeach
                                                        </span>
                                                        <span class="Polaris-Select__Icon">
                                                            <span class="Polaris-Icon">
                                                                <span
                                                                    class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg"
                                                                    focusable="false" aria-hidden="true">
                                                                    <path
                                                                        d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="Polaris-Select__Backdrop"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="Polaris-Button Polaris-Button--iconOnly removeSlot">
                                                <span class="Polaris-Button__Content">
                                                    <span class="Polaris-Button__Icon">
                                                        <span class="Polaris-Icon">
                                                            <span
                                                                class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg"
                                                                focusable="false" aria-hidden="true">
                                                                <path
                                                                    d="M8 3.994c0-1.101.895-1.994 2-1.994s2 .893 2 1.994h4c.552 0 1 .446 1 .997a1 1 0 0 1-1 .997h-12c-.552 0-1-.447-1-.997s.448-.997 1-.997h4zm-3 10.514v-6.508h2v6.508a.5.5 0 0 0 .5.498h1.5v-7.006h2v7.006h1.5a.5.5 0 0 0 .5-.498v-6.508h2v6.508a2.496 2.496 0 0 1-2.5 2.492h-5c-1.38 0-2.5-1.116-2.5-2.492z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                </span>
                                            </button>
                                        </td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @endforeach
                </div>
                <div class="Polaris-Stack">
                    <div class="Polaris-Stack__Item">
                        <div class="addSlotButton">
                            <button class="Polaris-Button ExpAddSlot" type="button">
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
                                    <span class="Polaris-Button__Text">Add slot</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Polaris-FormLayout ExpSlotContainer ExpSlotContainer_5 hide">
        <div class="Polaris-FormLayout__Item">
            <div class="deliveryTimesContainer">
                <div class="Polaris-Stack Polaris-Stack--vertical ExpSlotData">
                    @foreach ($ExspecificDaySlots['friday'] as $slot)
                        <div class="Polaris-Stack__Item">
                            <table class="table slotTable">
                                <thead>
                                    <tr>
                                        <td>From</td>
                                        <td>Until</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="Polaris-Labelled--hidden">
                                                <div class="Polaris-Labelled__LabelWrapper">
                                                    <div class="Polaris-Label">
                                                        <label id="PolarisSelect40Label" for="PolarisSelect40"
                                                            class="Polaris-Label__Text">From</label>
                                                    </div>
                                                </div>
                                                <div class="Polaris-Select">
                                                    <select id="PolarisSelect40"
                                                        class="Polaris-Select__Input slot-selector"
                                                        aria-invalid="false">
                                                        <option value="" disabled="">Select</option>
                                                        @foreach ($timeSlots as $timeSlot)
                                                            <option value="{{ $timeSlot->from }}"
                                                                @if ($timeSlot->from == $slot->from) selected @endif>
                                                                {{ $timeSlot->from_12hrs_format }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">
                                                            @foreach ($timeSlots as $timeSlot)
                                                                @if ($timeSlot->from == $slot->from)
                                                                    {{ $timeSlot->from_12hrs_format }}
                                                                @endif
                                                            @endforeach
                                                        </span>
                                                        <span class="Polaris-Select__Icon">
                                                            <span class="Polaris-Icon">
                                                                <span
                                                                    class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg"
                                                                    focusable="false" aria-hidden="true">
                                                                    <path
                                                                        d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="Polaris-Select__Backdrop"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="Polaris-Labelled--hidden">
                                                <div class="Polaris-Labelled__LabelWrapper">
                                                    <div class="Polaris-Label">
                                                        <label id="PolarisSelect41Label" for="PolarisSelect41"
                                                            class="Polaris-Label__Text">Delivery until</label>
                                                    </div>
                                                </div>
                                                <div class="Polaris-Select">
                                                    <select id="PolarisSelect41"
                                                        class="Polaris-Select__Input slot-selector"
                                                        aria-invalid="false">
                                                        <option value="" disabled="">Select</option>
                                                        @foreach ($timeSlots as $timeSlot)
                                                            <option value="{{ $timeSlot->until }}"
                                                                @if ($timeSlot->until == $slot->until) selected @endif>
                                                                {{ $timeSlot->until_12hrs_format }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">
                                                            @foreach ($timeSlots as $timeSlot)
                                                                @if ($timeSlot->until == $slot->until)
                                                                    {{ $timeSlot->until_12hrs_format }}
                                                                @endif
                                                            @endforeach
                                                        </span>
                                                        <span class="Polaris-Select__Icon">
                                                            <span class="Polaris-Icon">
                                                                <span
                                                                    class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg"
                                                                    focusable="false" aria-hidden="true">
                                                                    <path
                                                                        d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="Polaris-Select__Backdrop"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="Polaris-Button Polaris-Button--iconOnly removeSlot">
                                                <span class="Polaris-Button__Content">
                                                    <span class="Polaris-Button__Icon">
                                                        <span class="Polaris-Icon">
                                                            <span
                                                                class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg"
                                                                focusable="false" aria-hidden="true">
                                                                <path
                                                                    d="M8 3.994c0-1.101.895-1.994 2-1.994s2 .893 2 1.994h4c.552 0 1 .446 1 .997a1 1 0 0 1-1 .997h-12c-.552 0-1-.447-1-.997s.448-.997 1-.997h4zm-3 10.514v-6.508h2v6.508a.5.5 0 0 0 .5.498h1.5v-7.006h2v7.006h1.5a.5.5 0 0 0 .5-.498v-6.508h2v6.508a2.496 2.496 0 0 1-2.5 2.492h-5c-1.38 0-2.5-1.116-2.5-2.492z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                </span>
                                            </button>
                                        </td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @endforeach
                </div>
                <div class="Polaris-Stack">
                    <div class="Polaris-Stack__Item">
                        <div class="addSlotButton">
                            <button class="Polaris-Button ExpAddSlot" type="button">
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
                                    <span class="Polaris-Button__Text">Add slot</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Polaris-FormLayout ExpSlotContainer ExpSlotContainer_6 hide">
        <div class="Polaris-FormLayout__Item">
            <div class="deliveryTimesContainer">
                <div class="Polaris-Stack Polaris-Stack--vertical ExpSlotData">
                    @foreach ($ExspecificDaySlots['saturday'] as $slot)
                        <div class="Polaris-Stack__Item">
                            <table class="table slotTable">
                                <thead>
                                    <tr>
                                        <td>From</td>
                                        <td>Until</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="Polaris-Labelled--hidden">
                                                <div class="Polaris-Labelled__LabelWrapper">
                                                    <div class="Polaris-Label">
                                                        <label id="PolarisSelect40Label" for="PolarisSelect40"
                                                            class="Polaris-Label__Text">From</label>
                                                    </div>
                                                </div>
                                                <div class="Polaris-Select">
                                                    <select id="PolarisSelect40"
                                                        class="Polaris-Select__Input slot-selector"
                                                        aria-invalid="false">
                                                        <option value="" disabled="">Select</option>
                                                        @foreach ($timeSlots as $timeSlot)
                                                            <option value="{{ $timeSlot->from }}"
                                                                @if ($timeSlot->from == $slot->from) selected @endif>
                                                                {{ $timeSlot->from_12hrs_format }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">
                                                            @foreach ($timeSlots as $timeSlot)
                                                                @if ($timeSlot->from == $slot->from)
                                                                    {{ $timeSlot->from_12hrs_format }}
                                                                @endif
                                                            @endforeach
                                                        </span>
                                                        <span class="Polaris-Select__Icon">
                                                            <span class="Polaris-Icon">
                                                                <span
                                                                    class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg"
                                                                    focusable="false" aria-hidden="true">
                                                                    <path
                                                                        d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="Polaris-Select__Backdrop"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="Polaris-Labelled--hidden">
                                                <div class="Polaris-Labelled__LabelWrapper">
                                                    <div class="Polaris-Label">
                                                        <label id="PolarisSelect41Label" for="PolarisSelect41"
                                                            class="Polaris-Label__Text">Delivery until</label>
                                                    </div>
                                                </div>
                                                <div class="Polaris-Select">
                                                    <select id="PolarisSelect41"
                                                        class="Polaris-Select__Input slot-selector"
                                                        aria-invalid="false">
                                                        <option value="" disabled="">Select</option>
                                                        @foreach ($timeSlots as $timeSlot)
                                                            <option value="{{ $timeSlot->until }}"
                                                                @if ($timeSlot->until == $slot->until) selected @endif>
                                                                {{ $timeSlot->until_12hrs_format }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">
                                                            @foreach ($timeSlots as $timeSlot)
                                                                @if ($timeSlot->until == $slot->until)
                                                                    {{ $timeSlot->until_12hrs_format }}
                                                                @endif
                                                            @endforeach
                                                        </span>
                                                        <span class="Polaris-Select__Icon">
                                                            <span class="Polaris-Icon">
                                                                <span
                                                                    class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg"
                                                                    focusable="false" aria-hidden="true">
                                                                    <path
                                                                        d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="Polaris-Select__Backdrop"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="Polaris-Button Polaris-Button--iconOnly removeSlot">
                                                <span class="Polaris-Button__Content">
                                                    <span class="Polaris-Button__Icon">
                                                        <span class="Polaris-Icon">
                                                            <span
                                                                class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg"
                                                                focusable="false" aria-hidden="true">
                                                                <path
                                                                    d="M8 3.994c0-1.101.895-1.994 2-1.994s2 .893 2 1.994h4c.552 0 1 .446 1 .997a1 1 0 0 1-1 .997h-12c-.552 0-1-.447-1-.997s.448-.997 1-.997h4zm-3 10.514v-6.508h2v6.508a.5.5 0 0 0 .5.498h1.5v-7.006h2v7.006h1.5a.5.5 0 0 0 .5-.498v-6.508h2v6.508a2.496 2.496 0 0 1-2.5 2.492h-5c-1.38 0-2.5-1.116-2.5-2.492z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                </span>
                                            </button>
                                        </td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @endforeach
                </div>
                <div class="Polaris-Stack">
                    <div class="Polaris-Stack__Item">
                        <div class="addSlotButton">
                            <button class="Polaris-Button ExpAddSlot" type="button">
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
                                    <span class="Polaris-Button__Text">Add slot</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Polaris-FormLayout ExpSlotContainer ExpSlotContainer_7">
        <div class="Polaris-FormLayout__Item">
            <div class="deliveryTimesContainer">
                <div class="Polaris-Stack Polaris-Stack--vertical ExpSlotData">
                    @foreach ($ExspecificDaySlots['sunday'] as $slot)
                        <div class="Polaris-Stack__Item">
                            <table class="table slotTable">
                                <thead>
                                    <tr>
                                        <td>From</td>
                                        <td>Until</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="Polaris-Labelled--hidden">
                                                <div class="Polaris-Labelled__LabelWrapper">
                                                    <div class="Polaris-Label">
                                                        <label id="PolarisSelect40Label" for="PolarisSelect40"
                                                            class="Polaris-Label__Text">From</label>
                                                    </div>
                                                </div>
                                                <div class="Polaris-Select">
                                                    <select id="PolarisSelect40"
                                                        class="Polaris-Select__Input slot-selector"
                                                        aria-invalid="false">
                                                        <option value="" disabled="">Select</option>
                                                        @foreach ($timeSlots as $timeSlot)
                                                            <option value="{{ $timeSlot->from }}"
                                                                @if ($timeSlot->from == $slot->from) selected @endif>
                                                                {{ $timeSlot->from_12hrs_format }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">
                                                            @foreach ($timeSlots as $timeSlot)
                                                                @if ($timeSlot->until == $slot->from)
                                                                    {{ $timeSlot->from_12hrs_format }}
                                                                @endif
                                                            @endforeach
                                                        </span>
                                                        <span class="Polaris-Select__Icon">
                                                            <span class="Polaris-Icon">
                                                                <span
                                                                    class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg"
                                                                    focusable="false" aria-hidden="true">
                                                                    <path
                                                                        d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="Polaris-Select__Backdrop"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="Polaris-Labelled--hidden">
                                                <div class="Polaris-Labelled__LabelWrapper">
                                                    <div class="Polaris-Label">
                                                        <label id="PolarisSelect41Label" for="PolarisSelect41"
                                                            class="Polaris-Label__Text">Delivery until</label>
                                                    </div>
                                                </div>
                                                <div class="Polaris-Select">
                                                    <select id="PolarisSelect41"
                                                        class="Polaris-Select__Input slot-selector"
                                                        aria-invalid="false">
                                                        <option value="" disabled="">Select</option>
                                                        @foreach ($timeSlots as $timeSlot)
                                                            <option value="{{ $timeSlot->until }}"
                                                                @if ($timeSlot->until == $slot->until) selected @endif>
                                                                {{ $timeSlot->until_12hrs_format }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">
                                                            @foreach ($timeSlots as $timeSlot)
                                                                @if ($timeSlot->until == $slot->until)
                                                                    {{ $timeSlot->until_12hrs_format }}
                                                                @endif
                                                            @endforeach
                                                        </span>
                                                        <span class="Polaris-Select__Icon">
                                                            <span class="Polaris-Icon">
                                                                <span
                                                                    class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg"
                                                                    focusable="false" aria-hidden="true">
                                                                    <path
                                                                        d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="Polaris-Select__Backdrop"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="Polaris-Button Polaris-Button--iconOnly removeSlot">
                                                <span class="Polaris-Button__Content">
                                                    <span class="Polaris-Button__Icon">
                                                        <span class="Polaris-Icon">
                                                            <span
                                                                class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg"
                                                                focusable="false" aria-hidden="true">
                                                                <path
                                                                    d="M8 3.994c0-1.101.895-1.994 2-1.994s2 .893 2 1.994h4c.552 0 1 .446 1 .997a1 1 0 0 1-1 .997h-12c-.552 0-1-.447-1-.997s.448-.997 1-.997h4zm-3 10.514v-6.508h2v6.508a.5.5 0 0 0 .5.498h1.5v-7.006h2v7.006h1.5a.5.5 0 0 0 .5-.498v-6.508h2v6.508a2.496 2.496 0 0 1-2.5 2.492h-5c-1.38 0-2.5-1.116-2.5-2.492z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                </span>
                                            </button>
                                        </td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @endforeach
                </div>
                <div class="Polaris-Stack">
                    <div class="Polaris-Stack__Item">
                        <div class="addSlotButton">
                            <button class="Polaris-Button ExpAddSlot" type="button">
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
                                    <span class="Polaris-Button__Text">Add slot</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div
    class="Polaris-Card__Section Polaris-Card__Section--subdued ExpDeliverySlot__Container_same @if ($ExOptions->delivery_slot_same_every_day_of_week == 'yes') @else hide @endif">
    <div class="Polaris-FormLayout ExpSlotContainerSame ExpSlotContainer_0">
        <div class="Polaris-FormLayout__Item">
            <div class="deliveryTimesContainer">
                <div id="myFieldIDError" class="Polaris-InlineError" style="display:none;">
                    <div class="Polaris-InlineError__Icon">
                        <span class="Polaris-Icon">
                            <span class="Polaris-Text--root Polaris-Text--visuallyHidden">
                            </span>
                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M11.42 2.588a2.007 2.007 0 0 0-2.84 0l-5.992 5.993a2.007 2.007 0 0 0 0 2.838l5.993 5.993a2.007 2.007 0 0 0 2.838 0l5.993-5.993a2.007 2.007 0 0 0 0-2.838l-5.993-5.993Zm-2.223 4.2a.803.803 0 1 1 1.606 0v3.212a.803.803 0 1 1-1.606 0v-3.211Zm1.606 6.423a.803.803 0 1 1-1.606 0 .803.803 0 0 1 1.606 0Z">
                                </path>
                            </svg>
                        </span>
                    </div>
                    Please add Atleast one slot (required).
                </div>
                <div class="Polaris-Stack Polaris-Stack--vertical ExpSlotData">
                    @foreach ($Exslots as $slot)
                        <div class="Polaris-Stack__Item">
                            <table class="table slotTable">
                                <thead>
                                    <tr>
                                        <td>From</td>
                                        <td>Until</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="Polaris-Labelled--hidden">
                                                <div class="Polaris-Labelled__LabelWrapper">
                                                    <div class="Polaris-Label">
                                                        <label id="PolarisSelect40Label" for="PolarisSelect40"
                                                            class="Polaris-Label__Text">From</label>
                                                    </div>
                                                </div>
                                                <div class="Polaris-Select">
                                                    <select id="PolarisSelect40"
                                                        class="Polaris-Select__Input slot-selector"
                                                        aria-invalid="false">
                                                        <option value="" disabled="">Select</option>
                                                        @foreach ($timeSlots as $timeSlot)
                                                            <option value="{{ $timeSlot->from }}"
                                                                @if ($timeSlot->from == $slot->from) selected @endif>
                                                                {{ $timeSlot->from_12hrs_format }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">
                                                            @foreach ($timeSlots as $timeSlot)
                                                                @if ($timeSlot->from == $slot->from)
                                                                    {{ $timeSlot->from_12hrs_format }}
                                                                @endif
                                                            @endforeach
                                                        </span>
                                                        <span class="Polaris-Select__Icon">
                                                            <span class="Polaris-Icon">
                                                                <span
                                                                    class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg"
                                                                    focusable="false" aria-hidden="true">
                                                                    <path
                                                                        d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="Polaris-Select__Backdrop"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="Polaris-Labelled--hidden">
                                                <div class="Polaris-Labelled__LabelWrapper">
                                                    <div class="Polaris-Label">
                                                        <label id="PolarisSelect41Label" for="PolarisSelect41"
                                                            class="Polaris-Label__Text">Delivery until</label>
                                                    </div>
                                                </div>
                                                <div class="Polaris-Select">
                                                    <select id="PolarisSelect41"
                                                        class="Polaris-Select__Input slot-selector"
                                                        aria-invalid="false">
                                                        <option value="" disabled="">Select</option>
                                                        @foreach ($timeSlots as $timeSlot)
                                                            <option value="{{ $timeSlot->until }}"
                                                                @if ($timeSlot->until == $slot->until) selected @endif>
                                                                {{ $timeSlot->until_12hrs_format }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">
                                                            @foreach ($timeSlots as $timeSlot)
                                                                @if ($timeSlot->until == $slot->until)
                                                                    {{ $timeSlot->until_12hrs_format }}
                                                                @endif
                                                            @endforeach
                                                        </span>
                                                        <span class="Polaris-Select__Icon">
                                                            <span class="Polaris-Icon">
                                                                <span
                                                                    class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg"
                                                                    focusable="false" aria-hidden="true">
                                                                    <path
                                                                        d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="Polaris-Select__Backdrop"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="Polaris-Button Polaris-Button--iconOnly removeSlot">
                                                <span class="Polaris-Button__Content">
                                                    <span class="Polaris-Button__Icon">
                                                        <span class="Polaris-Icon">
                                                            <span
                                                                class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg"
                                                                focusable="false" aria-hidden="true">
                                                                <path
                                                                    d="M8 3.994c0-1.101.895-1.994 2-1.994s2 .893 2 1.994h4c.552 0 1 .446 1 .997a1 1 0 0 1-1 .997h-12c-.552 0-1-.447-1-.997s.448-.997 1-.997h4zm-3 10.514v-6.508h2v6.508a.5.5 0 0 0 .5.498h1.5v-7.006h2v7.006h1.5a.5.5 0 0 0 .5-.498v-6.508h2v6.508a2.496 2.496 0 0 1-2.5 2.492h-5c-1.38 0-2.5-1.116-2.5-2.492z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                </span>
                                            </button>
                                        </td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @endforeach

                </div>
                <div class="Polaris-Stack">
                    <div class="Polaris-Stack__Item">
                        <div class="addSlotButton">
                            <button class="Polaris-Button ExpAddSlot" type="button">
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
                                    <span class="Polaris-Button__Text">Add slot</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
