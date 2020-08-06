@extends('layouts.user_side.default')
@section('content')
    <div class="tt-breadcrumb">
        @include('includes.user_side.breedCrumb')

	</div>
    <style>
        img {
            margin: 10px;
            width: 200px;
            height: 150px;
        }
    </style>
    <div class="wrapper">
    <div class="container">
        <div id="middle-wizard">
            <div class="row">
                <div class="col-lg-12" style="text-align:center">
                    <h2 class="st_title"><i class="uil uil-analysis"></i> Add New Product</h2>
                </div>
            </div>
            <form id="wrapped" method="POST" action="#">
                <div class="step">

                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="ui search focus mt-30 lbel25">
                                <label style="text-align: left;"> Product Title*</label>
                                <div class="ui left icon input swdh19">
                                    <input class="prompt srch_explore" type="text" placeholder="Insert your Product title." name="title" data-purpose="edit-Product-title" maxlength="60" style="text-align: left;">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="ui search focus mt-30 lbel25">
                                <label style="text-align: left;"> Product Details*</label>
                            </div>


                            <div id="editor">

                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6" style="text-align:left">
                            <div class="mt-30 lbel25">
                                <label style="text-align: left;">Product Category*</label>
                            </div>
                            <select class="ui hj145 dropdown cntry152 prompt srch_explore" style="text-align: left;">
                                <option value="">Select Category</option>
                                <option value="1">Development</option>
                                <option value="2">Business</option>
                                <option value="3">Finance & Accounting</option>
                                <option value="4">IT & Software</option>
                                <option value="5">Office Productivity</option>
                                <option value="6">Personal Development</option>
                                <option value="7">Design</option>
                                <option value="8">Marketing</option>
                                <option value="9">Lifestyle</option>
                                <option value="10">Photography</option>
                                <option value="11">Health & Fitness</option>
                                <option value="12">Music</option>
                                <option value="13">Teaching & Academics</option>
                                </select>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="ui search focus mt-30 lbel25">
                                <label style="text-align: left;">Product Price*</label>
                                <div class="ui left icon input swdh19">
                                    <input style="text-align: left;" class="prompt srch_explore" type="text" placeholder="Insert your Product Price." name="price" data-purpose="edit-Product-title" maxlength="60" value="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="ui search focus mt-30 lbel25">
                                <label style="text-align: left;">Product Quantity*</label>
                                <div class="ui left icon input swdh19">
                                    <input style="text-align: left;" class="prompt srch_explore" type="text" placeholder="Insert your Product Quantity." name="quantity" data-purpose="edit-Product-title" maxlength="60" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="submit step mt-30">
                    <label style="text-align: left;">Product images*</label>

                    <input type="file" id="upload_file" name="upload_file[]" onchange="preview_image();" multiple/>
                    <div id="image_preview"></div>

                </div>
                <div id="bottom-wizard">
                    <button type="submit" name="process" class="submit">Submit</button>

                </div>

            </form>




        </div>
    </div>
</div>
<script src="{{ asset('user_side/js/vertical-responsive-menu.min.js') }}"></script>
		<script src="{{ asset('user_side/js/jquery-3.3.1.min.js') }}"></script>
		<script src="{{ asset('user_side/vendor/bootstrap-rtl/dist/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('user_side/vendor/OwlCarousel/owl.carousel.js') }}"></script>
		<script src="{{ asset('user_side/vendor/semantic/semantic.min.js') }}"></script>
		<script src="{{ asset('user_side/js/custom.js') }}"></script>
		<script src="{{ asset('user_side/js/night-mode.js') }}"></script>
		<script src="{{ asset('user_side/js/jquery-steps.min.js') }}"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/21.0.0/classic/ckeditor.js"></script>
        <script src="{{ asset('user_side/js/vertical-responsive-menu.min.js') }}"></script>
        <script src="{{ asset('user_side/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('user_side/js/vendor/bootstrap-rtl/dist/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('user_side/js/vendor/OwlCarousel/owl.carousel.js') }}"></script>
        <script src="{{ asset('user_side/js/vendor/semantic/semantic.min.js') }}"></script>
        <script src="{{ asset('user_side/js/custom.js') }}"></script>
        <script src="{{ asset('user_side/js/night-mode.js') }}"></script>
        <script src="{{ asset('user_side/js/jquery-steps.min.js') }}"></script>
        <script src="{{ asset('user_side/js/ckeditor.js') }}"></script>
        <script src="{{ asset('user_side/js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('user_side/js/common_scripts_min.js') }}"></script>
        <script src="{{ asset('user_side/js/functions.js') }}"></script>
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        <script src="{{ asset('user_side/js/mapmarker.jquery.js') }}"></script>
        <script src="{{ asset('user_side/js/jquery.form.js') }}"></script>
        <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                // toolbar: ['heading', '|', 'bold', 'italic', 'link']
            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(err => {
                console.error(err.stack);
            });
    </script>
        <script src="{{ asset('user_side/js/jquery.js') }}"></script>
        <script src="{{ asset('user_side/js/mapmarker_func.jquery.js') }}"></script>
        <script>
        function preview_image() {
            var total_file = document.getElementById("upload_file").files.length;
            for (var i = 0; i < total_file; i++) {
                $('#image_preview').append("<img src='" + URL.createObjectURL(event.target.files[i]) + "'>");
            }
        }
    </script>