@extends('layouts.app')

@section('content')
    <div>
        <div style=" background: linear-gradient(to top, #13352F, #093E25); ">
            @include('layouts/navbar')
            <div class="bg-white" style="margin-top:10%; border-top-left-radius: 70px; border-top-right-radius:70px;">
            <div class="container" style="padding-top:7%; ">
                
                <h1  class="text-decoration-underline display-4 text-center" style="font-weight:900;">FINAL AQL REPORT</h1>            
                <div style="background-color:#E3EFE4; border-radius:30px; border:4px solid #BDDEC0;" class="p-5 mt-5 text-center" >
                    <h1 class="fw-bolder display-6 text-uppercase">REPORT NO :  <span style="color:#0C8F60;">ahsl-2023/01/01</span></h1>
                </div>
                <div style="padding-top:7%;">
                    <div class="mb-5">
                        <label for="date" class="form-label-custom">DATE</label>
                        <input type="date" class="custom-form-input" id="date" placeholder="name@example.com">
                    </div>
                    <div class="mb-5">
                        <label for="factory" class="form-label-custom">FACTORY</label>
                        <select class="form-select" id="factory" style="padding: 25px;  font-size: 30px;">
                            <option value="">Select Factory</option>
                        </select>
                    </div>
                    <div class="mb-5">
                        <label for="customer" class="form-label-custom">CUSTOMER</label>
                        <input type="text" class="custom-form-input" id="customer" placeholder="name@example.com">
                    </div>
                    <div class="mb-5">
                        <label for="category" class="form-label-custom">CATEGORY</label>
                        <input type="text" class="custom-form-input" id="category" placeholder="name@example.com">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-5">
                                <label for="ah_style_no" class="form-label-custom">AH STYLE NO</label>
                                <input type="text" class="custom-form-input" id="ah_style_no" placeholder="name@example.com">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-5">
                                <label for="customer_style_no" class="form-label-custom">CUSTOMER STYLE NO</label>
                                <input type="text" class="custom-form-input" id="customer_style_no" placeholder="name@example.com">
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <label for="retail_country" class="form-label-custom">RETAIL COUNTRY</label>
                        <select class="form-select" id="retail_country" style="padding: 25px;  font-size: 30px;">
                            <option value="">Select RETAIL COUNTRY</option>
                        </select>
                    </div>
                    <div class="mb-5">
                        <label for="po_number" class="form-label-custom">PO NUMBER</label>
                        <input type="text" class="custom-form-input" id="po_number" placeholder="name@example.com">
                    </div>
                    <div class="mb-5">
                        <label for="po_number" class="form-label-custom">PRODUCTION DESCRIPTION</label>
                        <textarea name="content" id="production_des"></textarea>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-5">
                                <label for="color" class="form-label-custom">COLOR</label>
                                <input type="text" class="custom-form-input" id="color" placeholder="name@example.com">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-5">
                                <label for="order_qty" class="form-label-custom">ORDER QUANTITY</label>
                                <input type="number" class="custom-form-input" id="order_qty" placeholder="name@example.com">
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <label for="packed_qty" class="form-label-custom">PACKED QUANTITY</label>
                        <input type="number" class="custom-form-input" id="packed_qty" placeholder="name@example.com">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-5">
                                <label for="delivery_method" class="form-label-custom">DELIVERY METHOD</label>
                                <input type="text" class="custom-form-input" id="delivery_method" placeholder="name@example.com">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-5">
                                <label for="delivery_type" class="form-label-custom">DELIVERY TYPE</label>
                                <select class="form-select" id="delivery_type" style="padding: 25px;  font-size: 30px;">
                                    <option value="">DELIVERY TYPE</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <label for="delivery_type" class="form-label-custom">GENAREL DESCRIPTION</label>
                        <textarea name="content" id="general_des"></textarea>
                    </div>
                    <div style="padding-bottom:20%;" class="text-end">
                        <input type="button" class="custom_btn btn-success-custom" value="CLEAR"/>
                        <a href="{{ url('aqlreport/secondstep') }}">
                            <input type="button" class="custom_btn btn-danger-custom" value="NEXT"/>
                        </a>
                    </div>
                <div>
            </div>
        </div>
        </div>
        @include('layouts/manubar')
    </div>
    <script>
        ClassicEditor
                .create(document.querySelector('#production_des'),{
                    height: '400px'
                })
                .catch(error => {
                    console.error(error);
                });

        ClassicEditor
                .create(document.querySelector('#general_des'),{
                    height: '400px'
                })
                .catch(error => {
                    console.error(error);
                });
    </script>
@endsection