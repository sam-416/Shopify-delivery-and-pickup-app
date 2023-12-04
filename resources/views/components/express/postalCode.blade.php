<div class="Polaris-Card">
    <div class="Polaris-Card__Header">
        <div class="Polaris-LegacyStack Polaris-LegacyStack--alignmentBaseline">
            <div class="Polaris-LegacyStack__Item Polaris-LegacyStack__Item--fill">
                <h2 class="Polaris-Text--root Polaris-Text--headingMd">Distance validation</h2>
            </div>
        </div>
    </div>
    <div class="Polaris-Card__Section">
        <div class="">
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
                            <div class="Polaris-TextField__DummyInput"> <br>
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