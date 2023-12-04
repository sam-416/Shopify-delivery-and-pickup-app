<div class="Polaris-FormLayout">
    <div class="Polaris-FormLayout__Item">
        <fieldset class="Polaris-VerticalStack Polaris-VerticalStack--fieldsetReset" aria-invalid="false"
            style="--pc-vertical-stack-order: column; --pc-vertical-stack-gap-xs: var(--p-space-4); --pc-vertical-stack-gap-md: var(--p-space-0);">
            <ul class="Polaris-VerticalStack Polaris-VerticalStack--listReset"
                style="--pc-vertical-stack-order: column; --pc-vertical-stack-gap-xs: var(--p-space-4); --pc-vertical-stack-gap-md: var(--p-space-0);">
                <li>
                    <div class="Polaris-Bleed" style="--pc-bleed-margin-block-end-xs: var(--p-space-0);">
                        <label class="Polaris-Choice" for="ExpEveryDayOfWeek">
                            <span class="Polaris-Choice__Control">
                                <span class="Polaris-RadioButton">
                                    <input id="ExpEveryDayOfWeek" name="ExpWeekDay" type="radio"
                                        class="Polaris-RadioButton__Input" value="all_week"
                                        @if ($ExOptions->delivery_every_day_of_week == 'yes') checked @endif>
                                    <span class="Polaris-RadioButton__Backdrop"></span>
                                </span>
                            </span>
                            <span class="Polaris-Choice__Label">
                                <span>Every day of the week</span>
                            </span>
                        </label>
                    </div>
                </li>
                <li>
                    <div class="Polaris-Bleed" style="--pc-bleed-margin-block-end-xs: var(--p-space-0);">
                        <label class="Polaris-Choice" for="ExpSpecificDayOfWeek">
                            <span class="Polaris-Choice__Control">
                                <span class="Polaris-RadioButton">
                                    <input id="ExpSpecificDayOfWeek" name="ExpWeekDay" type="radio"
                                        class="Polaris-RadioButton__Input" value="specific_week"
                                        @if ($ExOptions->delivery_specific_days_of_the_week == 'yes') checked @endif>
                                    <span class="Polaris-RadioButton__Backdrop"></span>
                                </span>
                            </span>
                            <span class="Polaris-Choice__Label">
                                <span>Specific days of the week</span>
                            </span>
                        </label>
                    </div>
                </li>
            </ul>
        </fieldset>
    </div>
    <div class="Polaris-FormLayout__Item specific-week @if ($ExOptions->delivery_specific_days_of_the_week == 'yes') @else hide @endif">
        <fieldset class="Polaris-VerticalStack Polaris-VerticalStack--fieldsetReset" aria-invalid="false"
            style="--pc-vertical-stack-order: column; --pc-vertical-stack-gap-xs: var(--p-space-4); --pc-vertical-stack-gap-md: var(--p-space-0);">
            <legend class="Polaris-Box"
                style="--pc-box-padding-block-end-xs: var(--p-space-5); --pc-box-padding-block-end-md: var(--p-space-1);">
                Select delivery days:</legend>
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
                Please select Atleast one delivery day (required).
            </div>
            <ul class="Polaris-VerticalStack Polaris-VerticalStack--listReset"
                style="--pc-vertical-stack-order: column; --pc-vertical-stack-gap-xs: var(--p-space-4); --pc-vertical-stack-gap-md: var(--p-space-0);">
                <li>
                    <div class="Polaris-Bleed" style="--pc-bleed-margin-block-end-xs: var(--p-space-0);">
                        <label class="Polaris-Choice" for="ExpMonday">
                            <span class="Polaris-Choice__Control">
                                <span class="Polaris-Checkbox">
                                    <input id="ExpMonday" name="ExpMonday[]" type="checkbox"
                                        class="Polaris-Checkbox__Input" aria-invalid="false" role="checkbox"
                                        aria-checked="true" value="monday"
                                        @foreach ($ExpDeliveryAvl as $day) @if ($day->week_day_id == 1) checked="checked" @endif @endforeach>
                                    <span class="Polaris-Checkbox__Backdrop"></span>
                                    <span class="Polaris-Checkbox__Icon">
                                        <span class="Polaris-Icon">
                                            <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false"
                                                aria-hidden="true">
                                                <path
                                                    d="M14.723 6.237a.94.94 0 0 1 .053 1.277l-5.366 6.193a.834.834 0 0 1-.611.293.83.83 0 0 1-.622-.264l-2.927-3.097a.94.94 0 0 1 0-1.278.82.82 0 0 1 1.207 0l2.297 2.43 4.763-5.498a.821.821 0 0 1 1.206-.056Z">
                                                </path>
                                            </svg>
                                        </span>
                                    </span>
                                </span>
                            </span>
                            <span class="Polaris-Choice__Label">
                                <span>Monday</span>
                            </span>
                        </label>
                    </div>
                </li>
                <li>
                    <div class="Polaris-Bleed" style="--pc-bleed-margin-block-end-xs: var(--p-space-0);">
                        <label class="Polaris-Choice" for="ExpTuesday">
                            <span class="Polaris-Choice__Control">
                                <span class="Polaris-Checkbox">
                                    <input id="ExpTuesday" name="ExpTuesday[]" type="checkbox"
                                        class="Polaris-Checkbox__Input" aria-invalid="false" role="checkbox"
                                        aria-checked="true" value="tuesday"
                                        @foreach ($ExpDeliveryAvl as $day) @if ($day->week_day_id == 2) checked="checked" @endif @endforeach>
                                    <span class="Polaris-Checkbox__Backdrop"></span>
                                    <span class="Polaris-Checkbox__Icon">
                                        <span class="Polaris-Icon">
                                            <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false"
                                                aria-hidden="true">
                                                <path
                                                    d="M14.723 6.237a.94.94 0 0 1 .053 1.277l-5.366 6.193a.834.834 0 0 1-.611.293.83.83 0 0 1-.622-.264l-2.927-3.097a.94.94 0 0 1 0-1.278.82.82 0 0 1 1.207 0l2.297 2.43 4.763-5.498a.821.821 0 0 1 1.206-.056Z">
                                                </path>
                                            </svg>
                                        </span>
                                    </span>
                                </span>
                            </span>
                            <span class="Polaris-Choice__Label">
                                <span>Tuesday</span>
                            </span>
                        </label>
                    </div>
                </li>
                <li>
                    <div class="Polaris-Bleed" style="--pc-bleed-margin-block-end-xs: var(--p-space-0);">
                        <label class="Polaris-Choice" for="ExpWednesday">
                            <span class="Polaris-Choice__Control">
                                <span class="Polaris-Checkbox">
                                    <input id="ExpWednesday" name="ExpWednesday[]" type="checkbox"
                                        class="Polaris-Checkbox__Input" aria-invalid="false" role="checkbox"
                                        aria-checked="true" value="wednesday"
                                        @foreach ($ExpDeliveryAvl as $day) @if ($day->week_day_id == 3) checked="checked" @endif @endforeach>
                                    <span class="Polaris-Checkbox__Backdrop"></span>
                                    <span class="Polaris-Checkbox__Icon">
                                        <span class="Polaris-Icon">
                                            <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false"
                                                aria-hidden="true">
                                                <path
                                                    d="M14.723 6.237a.94.94 0 0 1 .053 1.277l-5.366 6.193a.834.834 0 0 1-.611.293.83.83 0 0 1-.622-.264l-2.927-3.097a.94.94 0 0 1 0-1.278.82.82 0 0 1 1.207 0l2.297 2.43 4.763-5.498a.821.821 0 0 1 1.206-.056Z">
                                                </path>
                                            </svg>
                                        </span>
                                    </span>
                                </span>
                            </span>
                            <span class="Polaris-Choice__Label">
                                <span>Wednesday</span>
                            </span>
                        </label>
                    </div>
                </li>
                <li>
                    <div class="Polaris-Bleed" style="--pc-bleed-margin-block-end-xs: var(--p-space-0);">
                        <label class="Polaris-Choice" for="ExpThursday">
                            <span class="Polaris-Choice__Control">
                                <span class="Polaris-Checkbox">
                                    <input id="ExpThursday" name="ExpThursday[]" type="checkbox"
                                        class="Polaris-Checkbox__Input" aria-invalid="false" role="checkbox"
                                        aria-checked="true" value="thursday"
                                        @foreach ($ExpDeliveryAvl as $day) @if ($day->week_day_id == 4) checked="checked" @endif @endforeach>
                                    <span class="Polaris-Checkbox__Backdrop"></span>
                                    <span class="Polaris-Checkbox__Icon">
                                        <span class="Polaris-Icon">
                                            <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false"
                                                aria-hidden="true">
                                                <path
                                                    d="M14.723 6.237a.94.94 0 0 1 .053 1.277l-5.366 6.193a.834.834 0 0 1-.611.293.83.83 0 0 1-.622-.264l-2.927-3.097a.94.94 0 0 1 0-1.278.82.82 0 0 1 1.207 0l2.297 2.43 4.763-5.498a.821.821 0 0 1 1.206-.056Z">
                                                </path>
                                            </svg>
                                        </span>
                                    </span>
                                </span>
                            </span>
                            <span class="Polaris-Choice__Label">
                                <span>Thursday</span>
                            </span>
                        </label>
                    </div>
                </li>
                <li>
                    <div class="Polaris-Bleed" style="--pc-bleed-margin-block-end-xs: var(--p-space-0);">
                        <label class="Polaris-Choice" for="ExpFriday">
                            <span class="Polaris-Choice__Control">
                                <span class="Polaris-Checkbox">
                                    <input id="ExpFriday" name="ExpFriday[]" type="checkbox"
                                        class="Polaris-Checkbox__Input" aria-invalid="false" role="checkbox"
                                        aria-checked="true" value="friday"
                                        @foreach ($ExpDeliveryAvl as $day) @if ($day->week_day_id == 5) checked="checked" @endif @endforeach>
                                    <span class="Polaris-Checkbox__Backdrop"></span>
                                    <span class="Polaris-Checkbox__Icon">
                                        <span class="Polaris-Icon">
                                            <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false"
                                                aria-hidden="true">
                                                <path
                                                    d="M14.723 6.237a.94.94 0 0 1 .053 1.277l-5.366 6.193a.834.834 0 0 1-.611.293.83.83 0 0 1-.622-.264l-2.927-3.097a.94.94 0 0 1 0-1.278.82.82 0 0 1 1.207 0l2.297 2.43 4.763-5.498a.821.821 0 0 1 1.206-.056Z">
                                                </path>
                                            </svg>
                                        </span>
                                    </span>
                                </span>
                            </span>
                            <span class="Polaris-Choice__Label">
                                <span>Friday</span>
                            </span>
                        </label>
                    </div>
                </li>
                <li>
                    <div class="Polaris-Bleed" style="--pc-bleed-margin-block-end-xs: var(--p-space-0);">
                        <label class="Polaris-Choice" for="ExpSaturday">
                            <span class="Polaris-Choice__Control">
                                <span class="Polaris-Checkbox">
                                    <input id="ExpSaturday" name="ExpSaturday[]" type="checkbox"
                                        class="Polaris-Checkbox__Input" aria-invalid="false" role="checkbox"
                                        aria-checked="true" value="saturday"
                                        @foreach ($ExpDeliveryAvl as $day) @if ($day->week_day_id == 6) checked="checked" @endif @endforeach>
                                    <span class="Polaris-Checkbox__Backdrop"></span>
                                    <span class="Polaris-Checkbox__Icon">
                                        <span class="Polaris-Icon">
                                            <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false"
                                                aria-hidden="true">
                                                <path
                                                    d="M14.723 6.237a.94.94 0 0 1 .053 1.277l-5.366 6.193a.834.834 0 0 1-.611.293.83.83 0 0 1-.622-.264l-2.927-3.097a.94.94 0 0 1 0-1.278.82.82 0 0 1 1.207 0l2.297 2.43 4.763-5.498a.821.821 0 0 1 1.206-.056Z">
                                                </path>
                                            </svg>
                                        </span>
                                    </span>
                                </span>
                            </span>
                            <span class="Polaris-Choice__Label">
                                <span>Saturday</span>
                            </span>
                        </label>
                    </div>
                </li>
                <li>
                    <div class="Polaris-Bleed" style="--pc-bleed-margin-block-end-xs: var(--p-space-0);">
                        <label class="Polaris-Choice" for="ExpSunday">
                            <span class="Polaris-Choice__Control">
                                <span class="Polaris-Checkbox">
                                    <input id="ExpSunday" name="ExpSunday[]" type="checkbox"
                                        class="Polaris-Checkbox__Input" aria-invalid="false" role="checkbox"
                                        aria-checked="false" value="sunday"
                                        @foreach ($ExpDeliveryAvl as $day) @if ($day->week_day_id == 7) checked="checked" @endif @endforeach>
                                    <span class="Polaris-Checkbox__Backdrop"></span>
                                    <span class="Polaris-Checkbox__Icon">
                                        <span class="Polaris-Icon">
                                            <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false"
                                                aria-hidden="true">
                                                <path
                                                    d="M14.723 6.237a.94.94 0 0 1 .053 1.277l-5.366 6.193a.834.834 0 0 1-.611.293.83.83 0 0 1-.622-.264l-2.927-3.097a.94.94 0 0 1 0-1.278.82.82 0 0 1 1.207 0l2.297 2.43 4.763-5.498a.821.821 0 0 1 1.206-.056Z">
                                                </path>
                                            </svg>
                                        </span>
                                    </span>
                                </span>
                            </span>
                            <span class="Polaris-Choice__Label">
                                <span>Sunday</span>
                            </span>
                        </label>
                    </div>
                </li>
            </ul>

        </fieldset>
    </div>
</div>
