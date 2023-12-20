<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Order</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        @import url("https://fonts.googleapis.com/css?family=Roboto");

        body {
            font-family: "Roboto", sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
        }

        i {
            margin-right: 10px;
        }

        /*------------------------*/
        input:focus,
        button:focus,
        .form-control:focus {
            outline: none;
            box-shadow: none;
        }

        .form-control:disabled,
        .form-control[readonly] {
            background-color: #fff;
        }

        /*----------step-wizard------------*/
        .d-flex {
            display: flex;
        }

        .justify-content-center {
            justify-content: center;
        }

        .align-items-center {
            align-items: center;
        }

        /*---------signup-step-------------*/
        .bg-color {
            background-color: #333;
        }

        .signup-step-container {
            padding: 150px 0px;
            padding-bottom: 60px;
        }

        .wizard .nav-tabs {
            position: relative;
            margin-bottom: 0;
            border-bottom-color: transparent;
        }

        .wizard > div.wizard-inner {
            position: relative;
            margin-bottom: 50px;
            text-align: center;
        }

        .connecting-line {
            height: 2px;
            background: #e0e0e0;
            position: absolute;
            width: 75%;
            margin: 0 auto;
            left: 0;
            right: 0;
            top: 15px;
            z-index: 1;
        }

        .wizard .nav-tabs > li.active > a,
        .wizard .nav-tabs > li.active > a:hover,
        .wizard .nav-tabs > li.active > a:focus {
            color: #555555;
            cursor: default;
            border: 0;
            border-bottom-color: transparent;
        }

        span.round-tab {
            width: 80px;
            height: 40px;
            line-height: 40px;
            display: inline-block;
            border-radius: 10%;
            background: #fff;
            z-index: 2;
            position: absolute;
            left: 0;
            text-align: center;
            font-size: 16px;
            color: #0e214b;
            font-weight: 500;
            border: 1px solid #ddd;
        }

        span.round-tab i {
            color: #555555;
        }

        .wizard li.active span.round-tab {
            background: #0db02b;
            color: #fff;
            border-color: #0db02b;
        }

        .wizard li.active span.round-tab i {
            color: #5bc0de;
        }

        .wizard .nav-tabs > li.active > a i {
            color: #0db02b;
        }

        .wizard .nav-tabs > li {
            width: 25%;
        }

        .wizard li:after {
            content: " ";
            position: absolute;
            left: 46%;
            opacity: 0;
            margin: 0 auto;
            bottom: 0px;
            border: 5px solid transparent;
            border-bottom-color: red;
            transition: 0.1s ease-in-out;
        }

        .wizard .nav-tabs > li a {
            width: 30px;
            height: 30px;
            margin: 20px auto;
            border-radius: 100%;
            padding: 0;
            background-color: transparent;
            position: relative;
            top: 0;
        }

        .wizard .nav-tabs > li a i {
            position: absolute;
            top: -15px;
            font-style: normal;
            font-weight: 400;
            white-space: nowrap;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 12px;
            font-weight: 700;
            color: #000;
        }

        .wizard .nav-tabs > li a:hover {
            background: transparent;
        }

        .wizard .tab-pane {
            position: relative;
            padding-top: 20px;
        }

        .wizard h3 {
            margin-top: 0;
        }

        .prev-step,
        .next-step {
            font-size: 13px;
            padding: 8px 24px;
            border: none;
            border-radius: 4px;
            margin-top: 30px;
        }

        .next-step {
            background-color: #0db02b;
        }

        /*.skip-btn {*/
        /*    background-color: #cec12d;*/
        /*}*/
        .step-head {
            font-size: 20px;
            text-align: center;
            font-weight: 500;
            margin-bottom: 20px;
        }

        .term-check {
            font-size: 14px;
            font-weight: 400;
        }

        .custom-file {
            position: relative;
            display: inline-block;
            width: 100%;
            height: 40px;
            margin-bottom: 0;
        }

        .custom-file-input {
            position: relative;
            z-index: 2;
            width: 100%;
            height: 40px;
            margin: 0;
            opacity: 0;
        }

        .custom-file-label {
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1;
            height: 40px;
            padding: 0.375rem 0.75rem;
            font-weight: 400;
            line-height: 2;
            color: #495057;
            background-color: #fff;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
        }

        .custom-file-label::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            z-index: 3;
            display: block;
            height: 38px;
            padding: 0.375rem 0.75rem;
            line-height: 2;
            color: #495057;
            content: "Browse";
            background-color: #e9ecef;
            border-left: inherit;
            border-radius: 0 0.25rem 0.25rem 0;
        }

        .footer-link {
            margin-top: 30px;
        }

        .all-info-container {
        }

        .list-content {
            margin-bottom: 10px;
        }

        .list-content a {
            padding: 10px 15px;
            width: 100%;
            display: inline-block;
            background-color: #f5f5f5;
            position: relative;
            color: #565656;
            font-weight: 400;
            border-radius: 4px;
        }

        .list-content a[aria-expanded="true"] i {
            transform: rotate(180deg);
        }

        .list-content a i {
            text-align: right;
            position: absolute;
            top: 15px;
            right: 10px;
            transition: 0.5s;
        }

        .form-control[disabled],
        .form-control[readonly],
        fieldset[disabled] .form-control {
            background-color: #fdfdfd;
        }

        .list-box {
            padding: 10px;
        }

        .signup-logo-header .logo_area {
            width: 200px;
        }

        .signup-logo-header .nav > li {
            padding: 0;
        }

        .signup-logo-header .header-flex {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .list-inline li {
            display: inline-block;
        }

        .pull-right {
            float: right;
        }

        /*-----------custom-checkbox-----------*/
        /*----------Custom-Checkbox---------*/
        input[type="checkbox"] {
            position: relative;
            display: inline-block;
            margin-right: 5px;
        }

        input[type="checkbox"]::before,
        input[type="checkbox"]::after {
            position: absolute;
            content: "";
            display: inline-block;
        }

        input[type="checkbox"]::before {
            height: 16px;
            width: 16px;
            border: 1px solid #999;
            left: 0px;
            top: 0px;
            background-color: #fff;
            border-radius: 2px;
        }

        input[type="checkbox"]::after {
            height: 5px;
            width: 9px;
            left: 4px;
            top: 4px;
        }

        input[type="checkbox"]:checked::after {
            content: "";
            border-left: 1px solid #fff;
            border-bottom: 1px solid #fff;
            transform: rotate(-45deg);
        }

        input[type="checkbox"]:checked::before {
            background-color: #18ba60;
            border-color: #18ba60;
        }

        @media (max-width: 767px) {
            .sign-content h3 {
                font-size: 40px;
            }

            .wizard .nav-tabs > li a i {
                display: none;
            }

            .signup-logo-header .navbar-toggle {
                margin: 0;
                margin-top: 8px;
            }

            .signup-logo-header .logo_area {
                margin-top: 0;
            }

            .signup-logo-header .header-flex {
                display: block;
            }
        }

    </style>
</head>
<body>
<section class="signup-step-container">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="wizard">
                    <div class="wizard-inner">
                        <div class="connecting-line"></div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="step-class" id="step-1">
                                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab"
                                   aria-expanded="true"><span class="round-tab" data-step="1">Step 1</span></a>
                            </li>
                            <li role="presentation" class="disabled step-class" id="step-2">
                                <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab"
                                   aria-expanded="false"><span class="round-tab" data-step="2">Step 2</span></a>
                            </li>
                            <li role="presentation" class="disabled step-class" id="step-3">
                                <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"><span
                                        class="round-tab" data-step="3">Step 3</span></a>
                            </li>
                            <li role="presentation" class="disabled step-class" id="step-4">
                                <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab"><span
                                        class="round-tab" data-step="4">Review</span> </a>
                            </li>
                        </ul>
                    </div>

                    <div class="login-box">

                        <div class="tab-content" id="main_form">
                            {{-- form step 1  --}}
                            <form data-step="2" class="tab-pane step-1" role="tabpanel" id="formStep-1">
                                <h4 class="text-center">Step 1</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Please Select a meal </label>
                                            <select id="category" name="category" class="form-control">
                                                <option value="" selected="selected">- - -</option>
                                                <option value="Bữa sáng">Bữa sáng</option>
                                                <option value="Bữa trưa">Bữa trưa</option>
                                                <option value="Bữa tối">Bữa tối</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Please Enter Number of people</label>
                                            <input name="people" id="people" type="number" value="1" min="1"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <ul class="list-inline pull-right">
                                    <li>
                                        <button type="submit" class="default-btn next-step" id="next">Next
                                        </button>
                                    </li>
                                </ul>
                            </form>

                            {{-- form step 2  --}}
                            <form data-step="3" class="tab-pane step-2" role="tabpanel" id="formStep-2">
                                <h4 class="text-center">Step 2</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Please Select a Restaurant</label>
                                            <select name="restaurant" class="form-control" id="restaurant">
                                                <option value="" selected="selected">- - -</option>
                                                <option value="nha-hang-a">nhà hàng a</option>
                                                <option value="nha-hang-b">nhà hàng b</option>
                                                <option value="nha-hang-c">nhà hàng c</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <ul class="list-inline pull-right">
                                    <li>
                                        <button type="button" class="default-btn prev-step" data-step="1">Back</button>
                                    </li>
                                    <li>
                                        <button type="submit" class="default-btn next-step" id="next">
                                            Next
                                        </button>
                                    </li>
                                </ul>
                            </form>

                            {{-- form step 3  --}}
                            <form data-step="4" class="tab-pane step-3" role="tabpanel" id="formStep-3">
                                <h4 class="text-center">Step 3</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Please Select a Dish</label>
                                            <select name="dish" class="form-control selectd-dish" id="dish"
                                                    data-key="1">
                                                <option value="" selected="selected">- - -</option>
                                                <option value="1">Cơm gà</option>
                                                <option value="2">Phở bò</option>
                                                <option value="3">Bún cá</option>
                                                <option value="4">Bún chả</option>
                                                <option value="5">Cơm tấm</option>
                                                <option value="6">Bánh xèo</option>
                                                <option value="7">Hủ tiếu</option>
                                                <option value="8">Gỏi cuốn</option>
                                                <option value="9">Bún bò Nam bộ</option>
                                                <option value="10">Phở gà</option>
                                            </select>
                                            <span class="text-danger error error-1"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Please enter no of servings</label>
                                            <input type="number" id="servings-1" name="serving"
                                                   class="form-control serving"
                                                   value="1" min="1"/>
                                        </div>
                                    </div>

                                </div>
                                <div id="show-dish">

                                </div>
                                <button id="add-dish" class="rounded-circle" style="width: 40px; height: 40px"
                                        type="button">
                                    <i style="margin-right: 1px" class="fa fa-plus"></i>
                                </button>

                                <ul class="list-inline pull-right">
                                    <li>
                                        <button type="button" class="default-btn prev-step" data-step="2">Back</button>
                                    </li>
                                    <li>
                                        <button type="submit" class="default-btn next-step" id="next">
                                            Next
                                        </button>
                                    </li>
                                </ul>
                            </form>

                            {{-- Review  --}}
                            <form class="tab-pane step-4" role="tabpanel" id="review">
                                <h4 class="text-center">Step 4</h4>
                                <div class="all-info-container row">
                                    <div class="col-12 row">
                                        <div class="col-3">
                                            Meal
                                        </div>
                                        <div class="col-9" id="meal-text"></div>
                                        <span class="text-danger error error-meal"></span>
                                    </div>
                                    <div class="col-12 row">
                                        <div class="col-3">
                                            No. of. people
                                        </div>
                                        <div class="col-9" id="people-text"> </div>
                                        <span class="text-danger error error-people"></span>
                                    </div>
                                    <div class="col-12 row">
                                        <div class="col-3">
                                            Restaurant
                                        </div>
                                        <div class="col-9" id="restaurant-text"></div>
                                        <span class="text-danger error error-restaurant"></span>
                                    </div>
                                    <div class="col-12 row">
                                        <div class="col-3">
                                            Dishes
                                        </div>
                                        <div class="col-9 row" id="dishes-text">
                                        </div>
                                        <span class="text-danger error error-dishes"></span>
                                    </div>

                                </div>

                                <ul class="list-inline pull-right">
                                    <li>
                                        <button type="button" class="default-btn prev-step" data-step="3">Back</button>
                                    </li>
                                    <li>
                                        <button type="submit" class="default-btn next-step" data-step="4">Submit
                                        </button>
                                    </li>
                                </ul>
                            </form>

                            <div class="clearfix"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<script>
    var stepNow = 1;
    var category = null;
    var categoryName = null;
    var people = 1;
    var restaurant = null;
    var restaurantName = null;
    var dishes = [];
    $(document).ready(function () {
        activeClass();

        $(".prev-step").click(function (e) {
            stepNow = parseInt($(this).data('step'));
            activeClass();
        });

        $(".round-tab").click(function (e) {
            stepNow = parseInt($(this).data('step'));
            activeClass();
        });

        $('#formStep-1').on('submit', function (e) {
            e.preventDefault();
            $('.error').html('');
            category = $('#category').val();
            people = $('#people').val();
            if (category === '') {
                $('#category').after('<p class="error" style="color: red;">Vui lòng lựa chọn danh mục</p>')
            } else if (people > 10) {
                $('#people').after('<p class="error" style="color: red;">Số lượng tối đa là 10 </p>')
            } else {
                categoryName = $('#category').find('option:selected').text();
                stepNow = parseInt($(this).data('step'));
                activeClass();
            }
        });

        $('#formStep-2').on('submit', function (e) {
            e.preventDefault();
            $('.error').html('');
            restaurant = $('#restaurant').val();
            if (restaurant === '') {
                $('#restaurant').after('<p class="error" style="color: red;">Vui lòng lựa chọn nhà hàng</p>')
            } else {
                restaurantName = $('#restaurant').find('option:selected').text();
                stepNow = parseInt($(this).data('step'));
                activeClass();
            }
        });

        $('#formStep-3').on('submit', function (e) {
            e.preventDefault();
            $('.error').html('');
            let totalDish = 0;
            let check = false;
            $('#meal-text').html('')
            $('#people-text').html('')
            $('#restaurant-text').html('');
            $('#dishes-text').html('');
            //check validate
            $('.selectd-dish').each(function () {
                let selectDish = $(this);
                totalDish += parseInt($('#servings-'+$(this).data('key')).val());
                $('.selectd-dish').each(function () {
                    if($(this).val() == ''){
                        $('.error-'+$(this).data('key')).html('Vui lòng lựa chọn món ăn');
                        check = true;
                    }
                    if(selectDish.data('key') != $(this).data('key') && selectDish.val() == $(this).val() && $(this).val() != '') {
                        $('.error-'+$(this).data('key')).html('Vui lòng không lựa chọn lại món ăn đã chọn');
                        check = true;
                    }
                });
            });


            if (totalDish < people){
                $('#show-dish').after('<p class="error" style="color: red;">Vui lòng chọn thêm số lượng món ăn </p>')
            }else if(!check){
                dishes = []
                $('.selectd-dish').each(function () {
                    dishes.push({ name:$(this).find('option:selected').text(), value:  $('#servings-'+$(this).data('key')).val() })
                });
                stepNow = parseInt($(this).data('step'));
                activeClass();

                $('#meal-text').html(categoryName)
                $('#people-text').html(people)
                $('#restaurant-text').html(restaurantName);
                let htmlDish = '';
                if(dishes.length > 0){

                    dishes.forEach(function (value) {
                        htmlDish +=`<div class="col-12">${value.name} - ${value.value}</div>`

                    });
                }
                $('#dishes-text').html(htmlDish);
            }



        });

        $('#review').on('submit', function (e) {
            e.preventDefault();
            $('.error').html('');
            if (categoryName != '' && people != '' && restaurantName != '' && dishes != ''){
               alert('Thành công. Vui lòng kiểm tra console log')
                console.log('Meal:' ,  ' ', categoryName);
                console.log('No. of. people:' ,  ' ', people);
                console.log('Restaurant:' ,  ' ', restaurantName);
                console.log('Dishes:', ' ', JSON.stringify(dishes));
            } else {
                $('.error-meal').html('Vui lòng chọn bữa ăn ở bước trước ');
                $('.error-people').html('Vui lòng nhập số người ở bước trước ');
                $('.error-restaurant').html('Vui lòng nhập tên nhà hàng ở bước trước ');
                $('.error-dishes').html('Vui lòng chọn món ăn ở bước trước ');
            }
        });

        var clickAddDish = 1;

        $('#add-dish').on('click', function () {
            if (clickAddDish < 10) {
                clickAddDish++;
                let addDish =
                    `
                    <div class="row form-row ">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Please Select a Dish</label>
                                <select name="dish" class="form-control add-dish selectd-dish" data-key="${clickAddDish}">
                                    <option value="" selected="selected">- - -</option>
                                    <option value="1">Cơm gà</option>
                                    <option value="2">Phở bò</option>
                                    <option value="3">Bún cá</option>
                                    <option value="4">Bún chả</option>
                                    <option value="5">Cơm tấm</option>
                                    <option value="6">Bánh xèo</option>
                                    <option value="7">Hủ tiếu</option>
                                    <option value="8">Gỏi cuốn</option>
                                    <option value="9">Bún bò Nam bộ</option>
                                    <option value="10">Phở gà</option>
                                </select>
                                <span class="text-danger error error-${clickAddDish}"></span>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Please enter no of servings</label>
                                <input type="number" id="servings-${clickAddDish}" class="form-control add-serving" value="1" min="1"/>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <button class="remove-dish rounded-circle" style="width: 30px; height: 30px" type="button">
                                    <i style="margin-right: 1px" class="fa fa-remove"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                `;
                $('#show-dish').append(addDish);

                $('.remove-dish').off('click').on('click', function () {
                    $('.error').remove()
                    $(this).closest('.form-row').remove();
                    clickAddDish--;
                });


            } else {
                $('.error').remove()
                $('#show-dish').after('<p class="error" style="color: red;">Tối đa là 10 món ăn </p>')
            }
        });

    });

    function activeClass() {
        $('.step-class').removeClass('active');
        $('.tab-pane').removeClass('active');
        $('.round-tab').each(function () {
            let step = $(this).data('step');
            if (step <= stepNow) {
                $('#step-' + step).addClass('active')
                if (step == stepNow) {
                    $('.step-' + step).addClass('active')
                }
            }

        });
    }


</script>
</body>
</html>
