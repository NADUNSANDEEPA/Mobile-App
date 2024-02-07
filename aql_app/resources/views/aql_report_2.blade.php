@extends('layouts.app')

@section('content')
    <div>
        <div style=" background: linear-gradient(to top, #13352F, #093E25); ">
            @include('layouts/navbar')
            <div class="bg-white" style="margin-top:10%; border-top-left-radius: 70px; border-top-right-radius:70px;">
                <div class="container" style="padding-top:7%; ">
                    <h1  class="text-decoration-underline display-4 text-center" style="font-weight:900;">MAKE COMMENTS</h1>
                    <div style="background-color:#E3EFE4; border-radius:30px; border:4px solid #BDDEC0;" class="p-5 mt-5 text-center" >
                        <h1 class="fw-bolder display-6 text-uppercase">REPORT NO :  <span style="color:#0C8F60;">ahsl-2023/01/01</span></h1>
                    </div>
                    <div style="padding-top:7%;">
                        <div class="mb-5">
                            <label for="date" class="form-label-custom">GENERAL COMMENTS</label>
                            <textarea name="content" id="general_comments"></textarea>
                        </div>
                        <div class="mb-5">
                            <label for="date" class="form-label-custom">GOLD SEAL DATE</label>
                            <input type="date" class="custom-form-input" id="date" placeholder="">
                        </div>
                        <div style="margin-top:10%;">
                            <h2  class="text-left" style="font-weight:700;">COMMENTS</h2>            
                            <hr/>
                            <div class="pt-3">
                                <label for="date" class="form-label-custom mb-3">Press "ADD +" button to write comments.</label>
                                <div id="comment-div-container">
                                <div>
                                <div style="padding-bottom:2%;" class="text-start">
                                   <input type="button" class="custom_btn btn-success-custom" value="ADD +" onclick="addInputGroup()"/>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top:10%;">
                            <h2  class="text-left" style="font-weight:700;">RESULT</h2>            
                            <hr/>
                            <div class="pt-3 ps-5">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="shipment_released">
                                    <label class="form-label-custom" for="flexRadioDefault1">
                                        Shipment released
                                    </label>
                                </div>

                                <div class="form-check pt-3">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="quality_measurements_passed">
                                    <label class="form-label-custom" for="flexRadioDefault2">
                                        Quality & Measurements passed
                                    </label>
                                </div>

                                <div class="form-check pt-3">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" value="short_shipment_approval_required">
                                    <label class="form-label-custom" for="flexRadioDefault3">
                                        Short shipment approval required
                                    </label>
                                </div>

                                <div class="form-check pt-3">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" value="shipment_on_hold">
                                    <label class="form-label-custom" for="flexRadioDefault4">
                                        Shipment on hold
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div style="padding-bottom:10%; padding-top:15%;" class="text-end">
                            <a href="{{ url('aqlreport/firststep') }}">
                                <input type="button" class="custom_btn btn-danger-custom" value="BACK"/>
                            </a>
                            <input type="button" class="custom_btn btn-success-custom" value="SAVE"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts/manubar')
    </div>
    <script>
        ClassicEditor
                .create(document.querySelector('#general_comments'))
                .catch(error => {
                    console.error(error);
                });
               
        function addInputGroup() {
            var container = document.getElementById("comment-div-container");

            var newInputGroup = document.createElement("div");
            newInputGroup.classList.add("input-group", "mb-5");

            var input = document.createElement("input");
            input.type = "text";
            input.classList.add("custom-form-input");
            input.style.width = "75%";
            input.setAttribute("aria-label", "Text input with dropdown button");

            var select = document.createElement("select");
            select.classList.add("form-select");
            select.style.width = "25%";
            select.style.fontSize = "30px";
            select.style.backgroundColor = "#E6E9E7";
            select.setAttribute("aria-label", "Select input with dropdown button");

            var option1 = document.createElement("option");
            option1.text = "Choose...";
            option1.selected = true;

            var option2 = document.createElement("option");
            option2.value = "Critical";
            option2.text = "Critical";

            var option3 = document.createElement("option");
            option3.value = "Major";
            option3.text = "Major";

            var option4 = document.createElement("option");
            option4.value = "Minor";
            option4.text = "Minor";

            select.add(option1);
            select.add(option2);
            select.add(option3);
            select.add(option4);

            newInputGroup.appendChild(input);
            newInputGroup.appendChild(select);

            container.appendChild(newInputGroup);
        }
    </script>

@endsection