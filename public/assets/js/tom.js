/**
 * *******************************
 *  TOM Flower Delivery App Js 
 * *******************************
 */


$(document).ready(function () {

    // normal option card container toggle
    $(".normal-setting-edit").on('click', function(){
        
        $(".cards-container-normal").toggle();
        $(".cards-container-normal").toggleClass('active');
        if($(".cards-container-normal").hasClass('active')){
            $(this).html('<span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Hide settings</span></span>');
        }else{
            $(this).html('<span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Edit settings</span></span>');
        }
        $(".cards-container-express").removeClass('active');
    });
    
    // express option card container toggle
    $(".express-setting-edit").on('click', function(){
        $(".cards-container-express").toggle();
        $(".cards-container-express").toggleClass('active');
        if($(".cards-container-express").hasClass('active')){
            $(this).html('<span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Hide settings</span></span>');
        }else{
            $(this).html('<span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Edit settings</span></span>');
        }
        $(".cards-container-normal").removeClass('active');
    });
    

    $(".cutoff-selector").on("change", function () {
        saveButton.set({ disabled: false });
        if ($(this).is(":checked")) {
            $(this).parents(".Polaris-FormLayout__Item").find(".cutoff-time").show();
        }
        else {
            $(this).parents(".Polaris-FormLayout__Item").find(".cutoff-time").hide();
        }
        saveButton.set({ disabled: false });
    });

    // Normal tab functions
    $(".normal-option [name='NorWeekDay']").on("change", function () {
        let norVal = $(this).val();
        if (norVal == 'all_week') {
            $(this).parents(".Polaris-FormLayout").find(".NorWeekDays__container").addClass("hide");
        }
        else {
            $(this).parents(".Polaris-FormLayout").find(".NorWeekDays__container").removeClass("hide");
        }
        saveButton.set({ disabled: false });
    });

    $(".normal-option [name='NorSlot']").on("change", function () {
        let norSlotVal = $(this).val();
        if (norSlotVal == 'true') {
            $(".NorDeliverySlot__Container").addClass("hide");
            $(".NorDeliverySlot__Container_same").removeClass("hide");
        }
        else {
            $(".NorDeliverySlot__Container").removeClass("hide");
            $(".NorDeliverySlot__Container_same").addClass("hide");
        }
        saveButton.set({ disabled: false });
    });

    $(".NorSpecificDaySlotTab").on("click", function () {
        let tabIndex = $(this).attr("tabindex");
        $(".NorSpecificDaySlotTab").removeClass("Polaris-Tabs__Tab--selected");
        $(this).addClass("Polaris-Tabs__Tab--selected");
        $(".NorSlotContainer").addClass("hide");
        $(".NorSlotContainer_" + tabIndex).removeClass("hide");
        saveButton.set({ disabled: false });
    });

    $(".NorAddSlot").on("click", function () {
        $(this).parents(".deliveryTimesContainer").find(".NorSlotData").append(ExpSlotHtml);
        $(this).parents(".NorDeliverySlot__Container_same").find(".Polaris-InlineError").hide();
        $(this).parents(".NorDeliverySlot__Container").find(".Polaris-InlineError").hide();
        saveButton.set({ disabled: false });
    });


    $(".normal-option .date-picker-add").on("click", function () {
        let nordateVal = $(this).parents(".Polaris-Connected").find("input").val();
        if (nordateVal != '') {
            var nordateValinit = nordateVal;
            nordateVal = nordateVal.split("-");
            let norMonths = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
            let norMonth = norMonths[parseInt(nordateVal[1]) - 1];
            let norHtml = `<button class="Polaris-Button" type="button" data-date="${nordateValinit}">
                        <span class="Polaris-Button__Content">
                            <span class="Polaris-Button__Text">${norMonth} (${nordateVal[2]})</span>
                            <span class="Polaris-Button__close nor-close-0">x</span>
                        </span>
                    </button>`;
            var hasdate = $(".normal-option .Polaris-Button[data-date='" + nordateValinit + "']").length;
            if (hasdate == 0) {
                $(".date-picker-target").append(norHtml);
            }

            $(this).parents(".Polaris-Connected").find("input").val('');
            saveButton.set({ disabled: false });
        }

    });

    $(document).on("click", ".nor-close-0", function () {
        $(this).parents(".Polaris-Button").remove();
        saveButton.set({ disabled: false });
    });

    $(".normal-option [name='NorDeliveryPrepTime']").on("click", function () {
        let norprepVal = $(this).val();
        if (norprepVal == 'true') {
            $(".norDeliveryPrepTime_Container").removeClass("hide");
        }
        else {
            $(".norDeliveryPrepTime_Container").addClass("hide");
        }
        saveButton.set({ disabled: false });
    });

    $(".prepTimeTab").on("click", function () {
        let norprepIndex = $(this).attr("target");
        $(".prepTimeTab").removeClass("Polaris-Tabs__Tab--selected");
        $(this).addClass("Polaris-Tabs__Tab--selected");
        $(".normal-option .noroffsetContainer").addClass("hide");
        $(".offsetContainer-" + norprepIndex).removeClass("hide");
        saveButton.set({ disabled: false });
    });

    $(".prepTimeType").on("change", function () {
        let timeType = $(this).find("option:selected").text();
        $(this).siblings(".Polaris-Select__Content").find(".Polaris-Select__SelectedOption").html(timeType);
        saveButton.set({ disabled: false });
    });

    $(".tags-add").on("click", function () {
        let norTag = $("#PolarisTextField23").val();
        if (norTag != '') {
            let nortg = norTag.split(",");
            for (let i = 0; i < nortg.length; i++) {
                let nortagHtml = `<span class="Polaris-Tag Polaris-Tag--removable" data-tag="${nortg[i]}">
                        <span title="${nortg[i]}" class="Polaris-Tag__TagText">${nortg[i]}</span>
                        <button type="button" aria-label="Remove" class="Polaris-Tag__Button tag-remove">
                            <span class="Polaris-Icon">
                                <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                    <path d="M6.707 5.293a1 1 0 0 0-1.414 1.414l3.293 3.293-3.293 3.293a1 1 0 1 0 1.414 1.414l3.293-3.293 3.293 3.293a1 1 0 0 0 1.414-1.414l-3.293-3.293 3.293-3.293a1 1 0 0 0-1.414-1.414l-3.293 3.293-3.293-3.293Z"></path>
                                </svg>
                            </span>
                        </button>
                    </span>`;
                var hastg = $(".Polaris-Tag--removable[data-tag='" + nortg[i] + "']").length;
                if (hastg == 0) {
                    $(".tags-selected-conatiner").append(nortagHtml);
                }

            }
            $("#PolarisTextField23").val('');
            saveButton.set({ disabled: false });

        }
    });

    $(document).on("click", ".tag-remove", function () {
        $(this).parents(".Polaris-Tag--removable").remove();
        saveButton.set({ disabled: false });
    });

    $(".distance-validation").on("change", function () {
        saveButton.set({ disabled: false });
    });

    // express tab functions

    $(".express-option [name='ExpWeekDay']").on("change", function () {
        let exVal = $(this).val();
        if (exVal == 'all_week') {
            $(this).parents(".Polaris-FormLayout").find(".specific-week").addClass("hide");
        }
        else {
            $(this).parents(".Polaris-FormLayout").find(".specific-week").removeClass("hide");
        }
        saveButton.set({ disabled: false });
    });

    $(".express-option [name='ExpSlot']").on("change", function () {
        let exSlotVal = $(this).val();
        if (exSlotVal == 'true') {
            $(".ExpDeliverySlot__Container").addClass("hide");
            $(".ExpDeliverySlot__Container_same").removeClass("hide");
        }
        else {
            $(".ExpDeliverySlot__Container").removeClass("hide");
            $(".ExpDeliverySlot__Container_same").addClass("hide");
        }
        saveButton.set({ disabled: false });
    });

    $(".ExpSpecificDaySlotTab").on("click", function () {
        let tabIndex = $(this).attr("tabindex");
        $(".ExpSpecificDaySlotTab").removeClass("Polaris-Tabs__Tab--selected");
        $(this).addClass("Polaris-Tabs__Tab--selected");
        $(".ExpSlotContainer").addClass("hide");
        $(".ExpSlotContainer_" + tabIndex).removeClass("hide");
        saveButton.set({ disabled: false });
    });

    const ExpSlotHtml = `<div class="Polaris-Stack__Item"><table class="table slotTable"><thead><tr><td>From</td><td>Until</td><td></td><td></td></tr></thead><tbody><tr><td>
                <div class="Polaris-Labelled--hidden">
                    <div class="Polaris-Labelled__LabelWrapper">
                        <div class="Polaris-Label">
                            <label id="PolarisSelect40Label" for="PolarisSelect40" class="Polaris-Label__Text">From</label>
                        </div>
                    </div>
                    <div class="Polaris-Select">
                        <select id="PolarisSelect40" class="Polaris-Select__Input slot-selector" aria-invalid="false">
                            <option value="" disabled="">Select</option>
                            <option value="00:00">12:00 AM</option>
                            <option value="00:15">12:15 AM</option>
                            <option value="00:30">12:30 AM</option>
                            <option value="00:45">12:45 AM</option>
                            <option value="01:00">1:00 AM</option>
                            <option value="01:15">1:15 AM</option>
                            <option value="01:30">1:30 AM</option>
                            <option value="01:45">1:45 AM</option>
                            <option value="02:00">2:00 AM</option>
                            <option value="02:15">2:15 AM</option>
                            <option value="02:30">2:30 AM</option>
                            <option value="02:45">2:45 AM</option>
                            <option value="03:00">3:00 AM</option>
                            <option value="03:15">3:15 AM</option>
                            <option value="03:30">3:30 AM</option>
                            <option value="03:45">3:45 AM</option>
                            <option value="04:00">4:00 AM</option>
                            <option value="04:15">4:15 AM</option>
                            <option value="04:30">4:30 AM</option>
                            <option value="04:45">4:45 AM</option>
                            <option value="05:00">5:00 AM</option>
                            <option value="05:15">5:15 AM</option>
                            <option value="05:30">5:30 AM</option>
                            <option value="05:45">5:45 AM</option>
                            <option value="06:00">6:00 AM</option>
                            <option value="06:15">6:15 AM</option>
                            <option value="06:30">6:30 AM</option>
                            <option value="06:45">6:45 AM</option>
                            <option value="07:00">7:00 AM</option>
                            <option value="07:15">7:15 AM</option>
                            <option value="07:30">7:30 AM</option>
                            <option value="07:45">7:45 AM</option>
                            <option value="08:00">8:00 AM</option>
                            <option value="08:15">8:15 AM</option>
                            <option value="08:30">8:30 AM</option>
                            <option value="08:45">8:45 AM</option>
                            <option value="09:00">9:00 AM</option>
                            <option value="09:15">9:15 AM</option>
                            <option value="09:30">9:30 AM</option>
                            <option value="09:45">9:45 AM</option>
                            <option value="10:00">10:00 AM</option>
                            <option value="10:15">10:15 AM</option>
                            <option value="10:30">10:30 AM</option>
                            <option value="10:45">10:45 AM</option>
                            <option value="11:00">11:00 AM</option>
                            <option value="11:15">11:15 AM</option>
                            <option value="11:30">11:30 AM</option>
                            <option value="11:45">11:45 AM</option>
                            <option value="12:00">12:00 PM</option>
                            <option value="12:15">12:15 PM</option>
                            <option value="12:30">12:30 PM</option>
                            <option value="12:45">12:45 PM</option>
                            <option value="13:00">1:00 PM</option>
                            <option value="13:15">1:15 PM</option>
                            <option value="13:30">1:30 PM</option>
                            <option value="13:45">1:45 PM</option>
                            <option value="14:00">2:00 PM</option>
                            <option value="14:15">2:15 PM</option>
                            <option value="14:30">2:30 PM</option>
                            <option value="14:45">2:45 PM</option>
                            <option value="15:00">3:00 PM</option>
                            <option value="15:15">3:15 PM</option>
                            <option value="15:30">3:30 PM</option>
                            <option value="15:45">3:45 PM</option>
                            <option value="16:00">4:00 PM</option>
                            <option value="16:15">4:15 PM</option>
                            <option value="16:30">4:30 PM</option>
                            <option value="16:45">4:45 PM</option>
                            <option value="17:00">5:00 PM</option>
                            <option value="17:15">5:15 PM</option>
                            <option value="17:30">5:30 PM</option>
                            <option value="17:45">5:45 PM</option>
                            <option value="18:00">6:00 PM</option>
                            <option value="18:15">6:15 PM</option>
                            <option value="18:30">6:30 PM</option>
                            <option value="18:45">6:45 PM</option>
                            <option value="19:00">7:00 PM</option>
                            <option value="19:15">7:15 PM</option>
                            <option value="19:30">7:30 PM</option>
                            <option value="19:45">7:45 PM</option>
                            <option value="20:00">8:00 PM</option>
                            <option value="20:15">8:15 PM</option>
                            <option value="20:30">8:30 PM</option>
                            <option value="20:45">8:45 PM</option>
                            <option value="21:00">9:00 PM</option>
                            <option value="21:15">9:15 PM</option>
                            <option value="21:30">9:30 PM</option>
                            <option value="21:45">9:45 PM</option>
                            <option value="22:00">10:00 PM</option>
                            <option value="22:15">10:15 PM</option>
                            <option value="22:30">10:30 PM</option>
                            <option value="22:45">10:45 PM</option>
                            <option value="23:00">11:00 PM</option>
                            <option value="23:15">11:15 PM</option>
                            <option value="23:30">11:30 PM</option>
                            <option value="23:45">11:45 PM</option>
                        </select>
                        <div class="Polaris-Select__Content" aria-hidden="true">
                            <span class="Polaris-Select__SelectedOption">12:00 AM</span>
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
            </td><td>
            <div class="Polaris-Labelled--hidden">
                <div class="Polaris-Labelled__LabelWrapper">
                    <div class="Polaris-Label">
                        <label id="PolarisSelect41Label" for="PolarisSelect41" class="Polaris-Label__Text">Delivery until</label>
                    </div>
                </div>
                <div class="Polaris-Select">
                    <select id="PolarisSelect41" class="Polaris-Select__Input slot-selector" aria-invalid="false">
                        <option value="" disabled="">Select</option>
                        <option value="11:00">11:00 AM</option>
                        <option value="11:15">11:15 AM</option>
                        <option value="11:30">11:30 AM</option>
                        <option value="11:45">11:45 AM</option>
                        <option value="12:00">12:00 PM</option>
                        <option value="12:15">12:15 PM</option>
                        <option value="12:30">12:30 PM</option>
                        <option value="12:45">12:45 PM</option>
                        <option value="13:00">1:00 PM</option>
                        <option value="13:15">1:15 PM</option>
                        <option value="13:30">1:30 PM</option>
                        <option value="13:45">1:45 PM</option>
                        <option value="14:00">2:00 PM</option>
                        <option value="14:15">2:15 PM</option>
                        <option value="14:30">2:30 PM</option>
                        <option value="14:45">2:45 PM</option>
                        <option value="15:00">3:00 PM</option>
                        <option value="15:15">3:15 PM</option>
                        <option value="15:30">3:30 PM</option>
                        <option value="15:45">3:45 PM</option>
                        <option value="16:00">4:00 PM</option>
                        <option value="16:15">4:15 PM</option>
                        <option value="16:30">4:30 PM</option>
                        <option value="16:45">4:45 PM</option>
                        <option value="17:00">5:00 PM</option>
                        <option value="17:15">5:15 PM</option>
                        <option value="17:30">5:30 PM</option>
                        <option value="17:45">5:45 PM</option>
                        <option value="18:00">6:00 PM</option>
                        <option value="18:15">6:15 PM</option>
                        <option value="18:30">6:30 PM</option>
                        <option value="18:45">6:45 PM</option>
                        <option value="19:00">7:00 PM</option>
                        <option value="19:15">7:15 PM</option>
                        <option value="19:30">7:30 PM</option>
                        <option value="19:45">7:45 PM</option>
                        <option value="20:00">8:00 PM</option>
                        <option value="20:15">8:15 PM</option>
                        <option value="20:30">8:30 PM</option>
                        <option value="20:45">8:45 PM</option>
                        <option value="21:00">9:00 PM</option>
                        <option value="21:15">9:15 PM</option>
                        <option value="21:30">9:30 PM</option>
                        <option value="21:45">9:45 PM</option>
                        <option value="22:00">10:00 PM</option>
                        <option value="22:15">10:15 PM</option>
                        <option value="22:30">10:30 PM</option>
                        <option value="22:45">10:45 PM</option>
                        <option value="23:00">11:00 PM</option>
                        <option value="23:15">11:15 PM</option>
                        <option value="23:30">11:30 PM</option>
                        <option value="23:45">11:45 PM</option>
                    </select>
                    <div class="Polaris-Select__Content" aria-hidden="true">
                        <span class="Polaris-Select__SelectedOption">11:00 AM</span>
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
        </td><td><button class="Polaris-Button Polaris-Button--iconOnly removeSlot"><span class="Polaris-Button__Content">
                                <span class="Polaris-Button__Icon">
                                    <span class="Polaris-Icon">
                                        <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                            <path d="M8 3.994c0-1.101.895-1.994 2-1.994s2 .893 2 1.994h4c.552 0 1 .446 1 .997a1 1 0 0 1-1 .997h-12c-.552 0-1-.447-1-.997s.448-.997 1-.997h4zm-3 10.514v-6.508h2v6.508a.5.5 0 0 0 .5.498h1.5v-7.006h2v7.006h1.5a.5.5 0 0 0 .5-.498v-6.508h2v6.508a2.496 2.496 0 0 1-2.5 2.492h-5c-1.38 0-2.5-1.116-2.5-2.492z"></path>
                                        </svg>
                                    </span>
                                </span>
                            </span></button></td><td></td></tr></tbody></table></div>`;

    $(".ExpAddSlot").on("click", function () {
        $(this).parents(".deliveryTimesContainer").find(".ExpSlotData").append(ExpSlotHtml);
        $(this).parents(".ExpDeliverySlot__Container_same").find(".Polaris-InlineError").hide();
        $(this).parents(".ExpDeliverySlot__Container").find(".Polaris-InlineError").hide();
        saveButton.set({ disabled: false });
    });

    $(document).on("change", ".slot-selector", function () {
        let slottext = $(this).find("option:selected").text();
        $(this).siblings(".Polaris-Select__Content").find(".Polaris-Select__SelectedOption").html(slottext);
        saveButton.set({ disabled: false });
    });

    $(document).on("click", ".removeSlot", function () {
        $(this).parents(".Polaris-Stack__Item").remove();
        saveButton.set({ disabled: false });
    });

    $(".express-option .date-picker-add").on("click", function () {
        let dateVal = $(this).parents(".Polaris-Connected").find("input").val();
        if (dateVal != '') {
            var dateValinit = dateVal;
            dateVal = dateVal.split("-");
            let expMonths = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
            let expMonth = expMonths[parseInt(dateVal[1]) - 1];
            let expHtml = `<button class="Polaris-Button" type="button" data-date="${dateValinit}">
                        <span class="Polaris-Button__Content">
                            <span class="Polaris-Button__Text">${expMonth} (${dateVal[2]})</span>
                            <span class="Polaris-Button__close exp-close-0">x</span>
                        </span>
                    </button>`;
            var hasdate = $(".express-option .Polaris-Button[data-date='" + dateValinit + "']").length;
            if (hasdate == 0) {
                $(".exp-date-picker-target").append(expHtml);
            }

            $(this).parents(".Polaris-Connected").find("input").val('');
            saveButton.set({ disabled: false });
        }

    });

    $(document).on("click", ".exp-close-0", function () {
        $(this).parents(".Polaris-Button").remove();
        saveButton.set({ disabled: false });
    });

    $(".express-option [name='ExpDeliveryPrepTime']").on("click", function () {
        let prepVal = $(this).val();
        if (prepVal == 'true') {
            $(".expDeliveryPrepTime_Container").removeClass("hide");
        }
        else {
            $(".expDeliveryPrepTime_Container").addClass("hide");
        }
        saveButton.set({ disabled: false });
    });

    $(".expprepTimeTab").on("click", function () {
        let prepIndex = $(this).attr("tabindex");
        $(".expprepTimeTab").removeClass("Polaris-Tabs__Tab--selected");
        $(this).addClass("Polaris-Tabs__Tab--selected");
        $(".express-option .expoffsetContainer").addClass("hide");
        $(".expoffsetContainer-" + prepIndex).removeClass("hide");
        saveButton.set({ disabled: false });
    });

    $(".expprepTimeType").on("change", function () {
        let timeType = $(this).find("option:selected").text();
        $(this).siblings(".Polaris-Select__Content").find(".Polaris-Select__SelectedOption").html(timeType);
        saveButton.set({ disabled: false });
    });

    $(".plus-btn").on("click", function () {
        let plusVal = $(this).parents(".Polaris-TextField__Spinner").siblings("input").val();
        plusVal = parseInt(plusVal) + 1;
        $(this).parents(".Polaris-TextField__Spinner").siblings("input").val(plusVal);
        saveButton.set({ disabled: false });
    });

    $(".minus-btn").on("click", function () {
        let minusVal = $(this).parents(".Polaris-TextField__Spinner").siblings("input").val();
        if (minusVal != 0) {
            minusVal = parseInt(minusVal) - 1;
            $(this).parents(".Polaris-TextField__Spinner").siblings("input").val(minusVal);
            saveButton.set({ disabled: false });
        }

    });

    $(".prepTimeInput").on('change', function(){
        saveButton.set({ disabled: false });
    });

    $(".exp-tags-add").on("click", function () {
        let expTag = $("#exp-PolarisTextField23").val();
        if (expTag != '') {
            let exptg = expTag.split(",");
            for (let i = 0; i < exptg.length; i++) {
                let exptagHtml = `<span class="Polaris-Tag Polaris-Tag--removable" data-tag="${exptg[i]}">
                        <span title="${exptg[i]}" class="Polaris-Tag__TagText">${exptg[i]}</span>
                        <button type="button" aria-label="Remove" class="Polaris-Tag__Button exp-tag-remove">
                            <span class="Polaris-Icon">
                                <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                    <path d="M6.707 5.293a1 1 0 0 0-1.414 1.414l3.293 3.293-3.293 3.293a1 1 0 1 0 1.414 1.414l3.293-3.293 3.293 3.293a1 1 0 0 0 1.414-1.414l-3.293-3.293 3.293-3.293a1 1 0 0 0-1.414-1.414l-3.293 3.293-3.293-3.293Z"></path>
                                </svg>
                            </span>
                        </button>
                    </span>`;
                var hastg = $(".Polaris-Tag--removable[data-tag='" + exptg[i] + "']").length;
                if (hastg == 0) {
                    $(".exp-tags-selected-conatiner").append(exptagHtml);
                }

            }
            $("#exp-PolarisTextField23").val('');
            saveButton.set({ disabled: false });

        }
    });

    $(document).on("click", ".exp-tag-remove", function () {
        $(this).parents(".Polaris-Tag--removable").remove();
        saveButton.set({ disabled: false });
    });

    // express tab functions



    // delivery slot event change
    $('.NorDeliveryLocationId').on('change', function(){
        saveButton.set({ disabled: false });
    });

    $('.NorDeliverySlotId').on('change', function(){
        saveButton.set({ disabled: false });
    });

    $('.ExpDeliveryLocationId').on('change', function(){
        saveButton.set({ disabled: false });
    });

    $('.ExpDeliverySlotId').on('change', function(){
        saveButton.set({ disabled: false });
    });


    // normal/express tab 


    //var initExpress = $('.express-option').clone(true);
    //var initNormal = $('.normal-option').clone(true);


    /**
     * click event on normal delivery option 
     */

    // $(".delivery-option-normal").on("click", function () {
    //     if (saveButton.disabled == false) {
    //         Swal.fire({
    //             title: 'Are you sure?',
    //             text: "You won't be able to revert this!",
    //             icon: 'warning',
    //             showCancelButton: true,
    //             confirmButtonColor: '#007a5c',
    //             cancelButtonColor: '#d33',
    //             confirmButtonText: 'Yes, delete changes!'
    //         }).then((result) => {
    //             if (result.isConfirmed) {
    //                 initExpress.replaceAll($(".express-option"));
    //                 initExpress = $('.express-option').clone(true);
    //                 saveButton.set({ disabled: true });
    //                 $(this).addClass("active");
    //                 $(".delivery-option-express").removeClass("active");
    //                 $('.express-option').addClass("hide").removeClass("show");
    //                 $('.normal-option').addClass("show").removeClass("hide");
    //             }
    //             else
    //             { 
    //                 return;
    //             }
    //         })
    //     }
    //     else
    //     {
    //         $(this).addClass("active");
    //         $(".delivery-option-express").removeClass("active");
    //         $('.express-option').addClass("hide").removeClass("show");
    //         $('.normal-option').addClass("show").removeClass("hide");
    //     }
        

    // });

    // $(".delivery-option-express").on("click", function () {
    //     if (saveButton.disabled == false) {
    //         Swal.fire({
    //             title: 'Are you sure?',
    //             text: "You won't be able to revert this!",
    //             icon: 'warning',
    //             showCancelButton: true,
    //             confirmButtonColor: '#007a5c',
    //             cancelButtonColor: '#d33',
    //             confirmButtonText: 'Yes, delete changes!'
    //         }).then((result) => {
    //             if (result.isConfirmed) {
    //                 initNormal.replaceAll($(".normal-option"));
    //                 initNormal = $('.normal-option').clone(true);
    //                 saveButton.set({ disabled: true });
    //                 $(this).addClass("active");
    //                 $(".delivery-option-normal").removeClass("active");
    //                 $('.express-option').addClass("show").removeClass("hide");
    //                 $('.normal-option').addClass("hide").removeClass("show");
    //             }
    //             else {
    //                 return;
    //             }
    //         })

    //     }
    //     else
    //     {
    //         $(this).addClass("active");
    //         $(".delivery-option-normal").removeClass("active");
    //         $('.express-option').addClass("show").removeClass("hide");
    //         $('.normal-option').addClass("hide").removeClass("show");
    //     }
        

    // });

    

    // normal/express tab


    saveButton.set({ disabled: true });
    DeliveryData = [];

    // save button
    saveButton.subscribe('click', () => {
         var type = $(".delivery-options.active").attr("data-type");
        // let norSpecificDay = $("." + type +"-option #NorSpecificDayOfWeek").is(":checked");
        // if(norSpecificDay == true)
        // {
        //     let checkLength = $("." + type +"-option .NorWeekDays__container").find("input[type='checkbox']:checked").length;
        //     if(checkLength == 0)
        //     {
        //         $("." + type +"-option .NorWeekDays__container").find(".Polaris-InlineError").show();
        //         $('html,body').animate({
        //             scrollTop: $("." + type + "-option #NorSpecificDayOfWeek").offset().top
        //         });
        //         return;
        //     }
        // }
        // let exSpecificDay = $("." + type +"-option #ExpSpecificDayOfWeek").is(":checked");
        // if (exSpecificDay == true) {
        //     let exCheckLength = $("." + type +"-option .specific-week").find("input[type='checkbox']:checked").length;
        //     if (exCheckLength == 0) {
        //         $("." + type +"-option .specific-week").find(".Polaris-InlineError").show();
        //         $('html,body').animate({
        //             scrollTop: $("." + type + "-option #ExpSpecificDayOfWeek").offset().top
        //         });
        //         return;
        //     }
        // }
        // let norSlotChecked = $("." + type +"-option #NorSameEveryDaySlot").is(":checked");
        // if (norSlotChecked == true)
        // {
        //     let slotLength = $("." + type +"-option .NorDeliverySlot__Container_same").find(".NorSlotData .Polaris-Stack__Item").length;
        //     if(slotLength == 0)
        //     {
        //         $("." + type +"-option .NorDeliverySlot__Container_same").find(".Polaris-InlineError").show();
        //         $('html,body').animate({
        //             scrollTop: $("." + type + "-option #NorSameEveryDaySlot").offset().top
        //         });
        //         return;
        //     }
        // }
        // let exSlotChecked = $("." + type +"-option #ExpSameEveryDaySlot").is(":checked");
        // if (exSlotChecked == true) {
        //     let exslotLength = $("." + type +"-option .ExpDeliverySlot__Container_same").find(".ExpSlotData .Polaris-Stack__Item").length;
        //     if (exslotLength == 0) {
        //         $("." + type +"-option .ExpDeliverySlot__Container_same").find(".Polaris-InlineError").show();
        //         $('html,body').animate({
        //             scrollTop: $("." + type + "-option #ExpSameEveryDaySlot").offset().top
        //         });
        //         return;
        //     }
        // }
        // let norSpcSlotCheck = $("." + type + "-option #NorDiffrentEachDaySlot").is(":checked");
        // if (norSpcSlotCheck == true)
        // {
        //     let hasnorSlot = true;
        //     $("." + type + "-option .NorSlotContainer").each(function(){
        //         let norslotCheck = $(this).find(".NorSlotData .Polaris-Stack__Item").length;
        //         if(norslotCheck == 0)
        //         {
        //             hasnorSlot = false;
        //             return;
        //         }
        //     });
        //     if(hasnorSlot == false)
        //     {
        //         $("." + type + "-option .NorDeliverySlot__Container").find(".Polaris-InlineError").show();
        //         $('html,body').animate({
        //             scrollTop: $("." + type + "-option #NorDiffrentEachDaySlot").offset().top
        //         });
        //         return;
        //     }

        // }
        // let exSpcSlotCheck = $("." + type + "-option #ExpDiffrentEachDaySlot").is(":checked");
        // if (exSpcSlotCheck == true) {
        //     let hasexSlot = true;
        //     $("." + type + "-option .ExpSlotContainer").each(function () {
        //         let exslotCheck = $(this).find(".ExpSlotData .Polaris-Stack__Item").length;
        //         if (exslotCheck == 0) {
        //             hasexSlot = false;
        //             return;
        //         }
        //     });
        //     if (hasexSlot == false) {
        //         $("." + type + "-option .ExpDeliverySlot__Container").find(".Polaris-InlineError").show();
        //         $('html,body').animate({
        //             scrollTop: $("." + type + "-option #ExpDiffrentEachDaySlot").offset().top
        //         });
        //         return;
        //     }

        // }
        loading.dispatch(actions.Loading.Action.START);
        const deliveryData = {
            delivery: {
                delivery_availability_specific_day_of_week: [],
                delivery_slot_every_day_of_week: [],
                delivery_slot_diffrent_each_day_of_week: [],
                delivery_preparation_time: {
                    preparation_time: [],
                    cutoff_time: []
                },
                blackout_dates: {
                    blackout: []
                },
                postalcodes: [],
                tags: {
                    tags: []
                },
                delivery_location_id: '',
                delivery_slot_id: ''
            }
        };
        console.log('working save');
        var id = $(".delivery-options.active").attr("data-location-id");
        var slot_id = $(".delivery-options.active").attr("data-slot-id");
        deliveryData.delivery.delivery_slot_id = slot_id;
        deliveryData.location_id = id;
        deliveryData.delivery_type = type;
        if (type == 'normal') {
            var deliverylocationId = $("." + type + "-option .NorDeliveryLocationId").val();
            var deliverySlotId = $("." + type + "-option .NorDeliverySlotId").val();
            deliveryData.delivery.delivery_location_id = deliverylocationId;
            deliveryData.delivery.delivery_slot_id = deliverySlotId;
            var norAvailability = $("." + type + "-option [name='NorWeekDay']:checked").val();
            if (norAvailability == "all_week") {
                deliveryData.delivery.delivery_availability_every_day_of_week_enabled = true;
                deliveryData.delivery.delivery_availability_specific_day_of_week_enabled = false;
                deliveryData.delivery.delivery_availability_specific_day_of_week = [];
            }
            else {
                deliveryData.delivery.delivery_availability_every_day_of_week_enabled = false;
                deliveryData.delivery.delivery_availability_specific_day_of_week_enabled = true;
                $("." + type + "-option .NorWeekDays__container").find("input[type='checkbox']").each(function () {
                    if ($(this).is(":checked")) {
                        deliveryData.delivery.delivery_availability_specific_day_of_week.push($(this).val());
                    }
                });
            }
            var norSlot = $("." + type + "-option [name='NorSlot']:checked").val();
            if (norSlot == 'true') {
                deliveryData.delivery.delivery_slot_every_day_of_week_enabled = true;
                deliveryData.delivery.delivery_slot_diffrent_each_day_of_week_enabled = false;
                deliveryData.delivery.delivery_slot_diffrent_each_day_of_week = [];
                $("." + type + "-option .NorSlotContainer_0 .NorSlotData").find(".Polaris-Stack__Item").each(function () {
                    var slot = {
                        from: '',
                        until: '',
                        is_available_every_day: true
                    };
                    // $(this).find(".slot-selector").each(function(){
                    slot.from = $(this).find(".slot-selector").first().val();
                    slot.until = $(this).find(".slot-selector").last().val();
                    // });
                    deliveryData.delivery.delivery_slot_every_day_of_week.push(slot);
                });
            }
            else {
                deliveryData.delivery.delivery_slot_every_day_of_week_enabled = false;
                deliveryData.delivery.delivery_slot_diffrent_each_day_of_week_enabled = true;
                deliveryData.delivery.delivery_slot_every_day_of_week = [];
                $("." + type + "-option .NorSlotContainer").each(function (index) {
                    var indx = parseInt(index) + 1;
                    $(this).find(".Polaris-Stack__Item").each(function () {
                        var slot = {
                            id: indx,
                            from: '',
                            until: '',
                            is_available_every_day: false
                        };
                        // $(this).find(".slot-selector").each(function(){
                        slot.from = $(this).find(".slot-selector").first().val();
                        slot.until = $(this).find(".slot-selector").last().val();
                        // });
                        if (slot.from != undefined && slot.until != undefined) {
                            deliveryData.delivery.delivery_slot_diffrent_each_day_of_week.push(slot);
                        }

                    });
                });
            }

            $("." + type + "-option .date-picker-target").find(".Polaris-Button").each(function () {
                var blackdate = $(this).attr("data-date");
                deliveryData.delivery.blackout_dates.blackout.push(blackdate);
            });


            var postcode = $(".distance-validation").val();
            if (postcode != '') {
                postcode = postcode.split(",");
                for (var i = 0; i < postcode.length; i++) {
                    var pcode = $.trim(postcode[i]);
                    deliveryData.delivery.postalcodes.push(pcode);
                }
            }
            $("." + type + "-option .Polaris-Tag--removable").each(function () {
                var valTags = $(this).find(".Polaris-Tag__TagText").text();
                deliveryData.delivery.tags.tags.push(valTags);
            });
            var norDeliveryPrep = $("." + type + "-option  [name='NorDeliveryPrepTime']:checked").val();
            if (norDeliveryPrep == 'true') {
                deliveryData.delivery.delivery_preparation_enabled = true;
                deliveryData.delivery.delivery_preparation_time.preparation_time = [];
                $("." + type + "-option .noroffsetContainer").each(function (indx) {
                    var prepVl = $(this).find("input[type='number']").val();
                    var inx = parseInt(indx) + 1;
                    if (prepVl != '') {
                        var prepType = $(this).find("select.Polaris-Select__Input").val();
                        var prep = {
                            id: inx,
                            time: prepVl,
                            type: prepType
                        }
                        deliveryData.delivery.delivery_preparation_time.preparation_time.push(prep);
                        var prepCut = $(this).find("input[type='checkbox']").is(":checked");
                        if (prepCut) {
                            deliveryData.delivery.delivery_preparation_time.preparation_time[indx].cutoff_enable = true;
                            var cutTime = $(this).find("input.cutoff-time").val();
                            var cutDay = $(this).find("input.cutoff-prep-day").val();
                            var cut = {
                                id: inx,
                                time: cutTime,
                                day: cutDay
                            }
                            deliveryData.delivery.delivery_preparation_time.cutoff_time.push(cut);
                        }else{
                            deliveryData.delivery.delivery_preparation_time.preparation_time[indx].cutoff_enable = false;
                        }
                    }

                });
            }
            else {
                deliveryData.delivery.delivery_preparation_enabled = false;
                deliveryData.delivery.delivery_preparation_time.preparation_time = [];
                deliveryData.delivery.delivery_preparation_time.cutoff_enable = false;
            }
            console.log(deliveryData);
            initNormal = $('.normal-option').clone(true);
        }
        else 
        {
            var expAvailability = $("." + type + "-option [name='ExpWeekDay']:checked").val();
            var deliverylocationId = $("." + type + "-option .ExpDeliveryLocationId").val();
            var deliverySlotId = $("." + type + "-option .ExpDeliverySlotId").val();
            deliveryData.delivery.delivery_location_id = deliverylocationId;
            deliveryData.delivery.delivery_slot_id = deliverySlotId;
            if (expAvailability == "all_week") {
                deliveryData.delivery.delivery_availability_every_day_of_week_enabled = true;
                deliveryData.delivery.delivery_availability_specific_day_of_week_enabled = false;
                deliveryData.delivery.delivery_availability_specific_day_of_week = [];
            }
            else {
                deliveryData.delivery.delivery_availability_every_day_of_week_enabled = false;
                deliveryData.delivery.delivery_availability_specific_day_of_week_enabled = true;
                $("." + type + "-option .specific-week").find("input[type='checkbox']").each(function () {
                    if ($(this).is(":checked")) {
                        deliveryData.delivery.delivery_availability_specific_day_of_week.push($(this).val());
                    }
                });
            }
            var expSlot = $("." + type + "-option [name='ExpSlot']:checked").val();
            if (expSlot == 'true') {
                deliveryData.delivery.delivery_slot_every_day_of_week_enabled = true;
                deliveryData.delivery.delivery_slot_diffrent_each_day_of_week_enabled = false;
                deliveryData.delivery.delivery_slot_diffrent_each_day_of_week = [];
                $("." + type + "-option .ExpSlotContainer_0 .ExpSlotData").find(".Polaris-Stack__Item").each(function () {
                    var slot = {
                        from: '',
                        until: '',
                        is_available_every_day: true
                    };
                    // $(this).find(".slot-selector").each(function(){
                    slot.from = $(this).find(".slot-selector").first().val();
                    slot.until = $(this).find(".slot-selector").last().val();
                    // });
                    deliveryData.delivery.delivery_slot_every_day_of_week.push(slot);
                });
            }
            else {
                deliveryData.delivery.delivery_slot_every_day_of_week_enabled = false;
                deliveryData.delivery.delivery_slot_diffrent_each_day_of_week_enabled = true;
                deliveryData.delivery.delivery_slot_every_day_of_week = [];
                $("." + type + "-option .ExpSlotContainer").each(function (index) {
                    var indx = parseInt(index) + 1;
                    $(this).find(".Polaris-Stack__Item").each(function () {
                        var slot = {
                            id: indx,
                            from: '',
                            until: '',
                            is_available_every_day: false
                        };
                        // $(this).find(".slot-selector").each(function(){
                        slot.from = $(this).find(".slot-selector").first().val();
                        slot.until = $(this).find(".slot-selector").last().val();
                        // });
                        if (slot.from != undefined && slot.until != undefined) {
                            deliveryData.delivery.delivery_slot_diffrent_each_day_of_week.push(slot);
                        }

                    });
                });
            }
            $("." + type + "-option .exp-date-picker-target").find(".Polaris-Button").each(function () {
                var blackdate = $(this).attr("data-date");
                deliveryData.delivery.blackout_dates.blackout.push(blackdate);
            });
            var postcode = $(".distance-validation").val();
            if (postcode != '') {
                postcode = postcode.split(",");
                for (var i = 0; i < postcode.length; i++) {
                    var pcode = $.trim(postcode[i]);
                    deliveryData.delivery.postalcodes.push(pcode);
                }
            }
            $("." + type + "-option .Polaris-Tag--removable").each(function () {
                var valTags = $(this).find(".Polaris-Tag__TagText").text();
                deliveryData.delivery.tags.tags.push(valTags);
            });
            var expDeliveryPrep = $("." + type + "-option  [name='ExpDeliveryPrepTime']:checked").val();
            if (expDeliveryPrep == 'true') {
                deliveryData.delivery.delivery_preparation_enabled = true;
                deliveryData.delivery.delivery_preparation_time.preparation_time = [];
                $("." + type + "-option .expoffsetContainer").each(function (indx) {
                    var prepVl = $(this).find("input[type='number']").val();
                    var inx = parseInt(indx) + 1;
                    if (prepVl != '') {
                        var prepType = $(this).find("select.Polaris-Select__Input").val();
                        var prep = {
                            id: inx,
                            time: prepVl,
                            type: prepType
                        }
                        deliveryData.delivery.delivery_preparation_time.preparation_time.push(prep);
                        var prepCut = $(this).find("input[type='checkbox']").is(":checked");
                        if (prepCut) {
                            deliveryData.delivery.delivery_preparation_time.preparation_time[indx].cutoff_enable = true;
                            var cutTime = $(this).find("input.cutoff-time").val();
                            var cutDay = $(this).find("input.cutoff-prep-day").val();
                            var cut = {
                                id: inx,
                                time: cutTime,
                                day: cutDay
                            }
                            deliveryData.delivery.delivery_preparation_time.cutoff_time.push(cut);
                        }else{
                            deliveryData.delivery.delivery_preparation_time.preparation_time[indx].cutoff_enable = false;
                        }
                    }

                });
            }
            else {
                deliveryData.delivery.delivery_preparation_enabled = false;
                deliveryData.delivery.delivery_preparation_time.preparation_time = [];
                deliveryData.delivery.delivery_preparation_time.cutoff_enable = false;
            }
            console.log(deliveryData);
            initExpress = $('.express-option').clone(true);
        }
        saveButton.set({ disabled: true });

        if(deliveryData){
            window.axios.put('/update-option', deliveryData).then(function (response) {
        
                loading.dispatch(actions.Loading.Action.STOP);
                //saveButton.set({disabled: true});
                toastOptions = {
                    message: type.charAt(0).toUpperCase() + type.slice(1) +' Option Saved',
                    duration: 5000,
                };
                toastNotice = actions.Toast.create(app, toastOptions);
                toastNotice.dispatch(actions.Toast.Action.SHOW);
                console.log(response);
            })
            .catch(function (error) {
                console.log(error);
            });

            var postcode = $(".distance-validation").val();
            if (postcode != '') {
                postcode = postcode.split(",");
                for (var i = 0; i < postcode.length; i++) {
                    var pcode = $.trim(postcode[i]);
                    deliveryData.delivery.postalcodes.push(pcode);
                }
            }
            var id = $(".delivery-options").attr("data-location-id");
            window.axios.put('/save-postcode', {'postcode':postcode, 'id':id}).then(function (response) {
        
                loading.dispatch(actions.Loading.Action.STOP);
                //saveButton.set({disabled: true});
                toastOptions = {
                    message: 'Post Code Saved',
                    duration: 5000,
                };
                toastNotice = actions.Toast.create(app, toastOptions);
                toastNotice.dispatch(actions.Toast.Action.SHOW);
                console.log(response);
            })
            .catch(function (error) {
                console.log(error);
            });
        }
    });
    // save button


    var date = new Date();
    var mnth = date.getMonth() + 1;
    mnth = (mnth < 10) ? "0" + mnth : mnth
    var year = date.getFullYear();
    var dt = date.getDate();
    $(".Polaris-TextField__Input[type='date']").attr("min", year + "-" + mnth + "-" + dt);

    $(".NorWeekDays__container [type='checkbox']").on("change", function () {
        $('.NorWeekDays__container').find(".Polaris-InlineError").hide();
        saveButton.set({ disabled: false });
    });

    $(".specific-week [type='checkbox']").on("change", function () {
        $('.specific-week').find(".Polaris-InlineError").hide();
        saveButton.set({ disabled: false });
    });

    

});