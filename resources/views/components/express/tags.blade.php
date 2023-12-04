
        <div class="Polaris-Stack Polaris-Stack--vertical">
            <div class="Polaris-Stack__Item">
                <div class="">
                    <div class="Polaris-Labelled__LabelWrapper">
                        <div class="Polaris-Label">
                            <label id="PolarisTextField23Label" for="PolarisTextField23" class="Polaris-Label__Text">Add tags to delivery orders from this location</label>
                        </div>
                    </div>
                    <div class="Polaris-Connected">
                        <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                            <div class="Polaris-TextField">
                                <input id="exp-PolarisTextField23" placeholder="Local Delivery, Doorstep Delivery" class="Polaris-TextField__Input" type="text" aria-labelledby="PolarisTextField23Label" aria-invalid="false" value="">
                                <div class="Polaris-TextField__Backdrop"></div>
                            </div>
                        </div>
                        <div class="Polaris-Connected__Item">
                            <button class="Polaris-Button exp-tags-add" type="button">
                                <span class="Polaris-Button__Content">
                                    <span class="Polaris-Button__Icon">
                                        <span class="Polaris-Icon">
                                            <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                <path d="M10 4a1 1 0 0 0-1 1v4h-4a1 1 0 1 0 0 2h4v4a1 1 0 1 0 2 0v-4h4a1 1 0 1 0 0-2h-4v-4a1 1 0 0 0-1-1Z"></path>
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="Polaris-Button__Text">Add tag</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Polaris-Stack__Item">
                <div class="chips-container exp-tags-selected-conatiner">
                @if($ExOptions->tags)
                    @php
                       $tags = json_decode($ExOptions->tags, TRUE);
                    @endphp

                    @foreach($tags['tags'] as $tag)
                    <span class="Polaris-Tag Polaris-Tag--removable" data-tag="{{$tag}}">
                        <span title="{{$tag}}" class="Polaris-Tag__TagText">{{$tag}}</span>
                        <button type="button" aria-label="Remove" class="Polaris-Tag__Button exp-tag-remove">
                            <span class="Polaris-Icon">
                                <span class="Polaris-Text--root Polaris-Text--visuallyHidden"></span>
                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                    <path d="M6.707 5.293a1 1 0 0 0-1.414 1.414l3.293 3.293-3.293 3.293a1 1 0 1 0 1.414 1.414l3.293-3.293 3.293 3.293a1 1 0 0 0 1.414-1.414l-3.293-3.293 3.293-3.293a1 1 0 0 0-1.414-1.414l-3.293 3.293-3.293-3.293Z"></path>
                                </svg>
                            </span>
                        </button>
                    </span>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
   