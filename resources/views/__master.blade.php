<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style.css') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/app.css')
</head>
<body class="Kanit">
    <div class="relative w-full min-h-screen bg-[#273746]">
        @yield('__Content')
    </div>
    <script src="{{ asset('jquery.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#MODAL_CLOSE_BTN').on('click', function() {
                $('.category_modal').css('display', 'none');
            })
            $('#MODAL_OPEN_BTN').click(function() {
                $('.category_modal').css('display', 'flex');
            })
            $('#aletSection').fadeOut(7000)
            $('#MODAL_CLOSE_BTN_Edit').on('click', function() {
                $('.Edit__page').css({
                    'display': 'none'
                })
            })
            $('#__close__btn__food__image__').on('click', function() {
                $('.image__focus').css({
                    'display': 'none'
                })
            })
            $('#MODAL_CLOSE_Edit__BTN').on('click', function() {
                $('.Edit__Modal__category__').css({
                    'display': 'none'
                })
            })
        })
        const __get__id = (data) => {
            console.log(data)
            $.ajax({
                type: 'GET'
                , url: "{{ env('HOST_NAME') }}" + "/list/ajax/" + data
                , success: function(result) {
                    console.log(result.id)
                    $('.image__focus').css({
                        'display': 'flex'
                    })
                    $('#__image__render__section__').html(`<img src="{{ env('HOST_NAME') }}/uploads/${result.id}"/>`)
                }
            });
        }
        const __get__id__category__ = (data) => {
            $.ajax({
                type: 'GET'
                , url: "{{ env('HOST_NAME') }}" + "/category/ajax/" + data
                , success: function(result) {
                    console.log(result.id)
                    $('.image__focus').css({
                        'display': 'flex'
                    })
                    $('#__image__render__section__').html(`<img src="{{ env('HOST_NAME') }}/uploads/${result.id}"/>`)
                }
            });
        }
        const __get__id__wallpaper__ = (data) => {
            $.ajax({
                type: 'GET'
                , url: "{{ env('HOST_NAME') }}" + "/wallpaper/ajax/" + data
                , success: function(result) {
                    console.log(result.id)
                    $('.image__focus').css({
                        'display': 'flex'
                    })
                    $('#__image__render__section__').html(`<img style="width:800px;" src="{{ env('HOST_NAME') }}/uploads/${result.id}"/>`)
                }
            });
        }
        const __delete__btn__category__ = (data) => {
            $.ajax({
                type: 'GET'
                , url: "{{ env('HOST_NAME') }}" + "/wallpaper/ajax/" + data
                , success: function(result) {
                    console.log(result.id)
                    $('.image__focus').css({
                        'display': 'flex'
                    })
                    $('#__image__render__section__').html(`<img style="width:800px;" src="{{ env('HOST_NAME') }}/uploads/${result.id}"/>`)
                }
            });
        }
        const __delete__category__function__ = (data) => {
            $('.__delete__confirmation__').html(
                `
                <div class="w-[30%] h-[120px] bg-white rounded-md">
                    <div class="text-xl p-5">Bu Kaydı Kaldıracağınızdan Emin misiniz ?</div>
                    <div class="flex justify-between px-5">
                        <button id="__close__btn__confirmation__" type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-2 px-10 rounded focus:outline-none focus:shadow-outline">iptal</button>
                        <a href="${"{{ env('HOST_NAME') }}"}/categories/destroy/${data}"><button type="button" class="text-sm mr-5 bg-[#1B4F72] hover:bg-red-700 text-white py-2 px-10 rounded focus:outline-none focus:shadow-outline">Evet</button></a>
                    </div>
                </div>
                `
            )
            $('#__close__btn__confirmation__').on('click', function() {
                console.log('close')
                $('.__delete__confirmation__').css({
                    'display': 'none'
                })
            })
            $('.__delete__confirmation__').css({
                'display': 'flex'
            })
        }
        const __delete__list__function__ = (data) => {
            $('.__delete__confirmation__').html(
                `
                <div class="w-[30%] h-[120px] bg-white rounded-md">
                    <div class="text-xl p-5">Bu Kaydı Kaldıracağınızdan Emin misiniz ?</div>
                    <div class="flex justify-between px-5">
                        <button id="__close__btn__confirmation__" type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-2 px-10 rounded focus:outline-none focus:shadow-outline">iptal</button>
                        <a href="${"{{ env('HOST_NAME') }}"}/lists/destroy/${data}"><button type="button" class="text-sm mr-5 bg-[#1B4F72] hover:bg-red-700 text-white py-2 px-10 rounded focus:outline-none focus:shadow-outline">Evet</button></a>
                    </div>
                </div>
                `
            )
            $('#__close__btn__confirmation__').on('click', function() {
                $('.__delete__confirmation__').css({
                    'display': 'none'
                })
            })
            $('.__delete__confirmation__').css({
                'display': 'flex'
            })
        }
        const __delete__wallpaper__function__ = (data) => {
            $('.__delete__confirmation__').html(
                `
                <div class="w-[30%] h-[120px] bg-white rounded-md">
                    <div class="text-xl p-5">Bu Kaydı Kaldıracağınızdan Emin misiniz ?</div>
                    <div class="flex justify-between px-5">
                        <button id="__close__btn__confirmation__" type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-2 px-10 rounded focus:outline-none focus:shadow-outline">iptal</button>
                        <a href="${"{{ env('HOST_NAME') }}"}/wallpaper/destroy/${data}"><button type="button" class="text-sm mr-5 bg-[#1B4F72] hover:bg-red-700 text-white py-2 px-10 rounded focus:outline-none focus:shadow-outline">Evet</button></a>
                    </div>
                </div>
                `
            )
            $('#__close__btn__confirmation__').on('click', function() {
                $('.__delete__confirmation__').css({
                    'display': 'none'
                })
            })
            $('.__delete__confirmation__').css({
                'display': 'flex'
            })
        }
        const __delete__music__function__ = (data) => {
            $('.__delete__confirmation__').html(
                `
                <div class="w-[30%] h-[120px] bg-white rounded-md">
                    <div class="text-xl p-5">Bu Kaydı Kaldıracağınızdan Emin misiniz ?</div>
                    <div class="flex justify-between px-5">
                        <button id="__close__btn__confirmation__" type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-2 px-10 rounded focus:outline-none focus:shadow-outline">iptal</button>
                        <a href="${"{{ env('HOST_NAME') }}"}/music/destroy/${data}"><button type="button" class="text-sm mr-5 bg-[#1B4F72] hover:bg-red-700 text-white py-2 px-10 rounded focus:outline-none focus:shadow-outline">Evet</button></a>
                    </div>
                </div>
                `
            )
            $('#__close__btn__confirmation__').on('click', function() {
                $('.__delete__confirmation__').css({
                    'display': 'none'
                })
            })
            $('.__delete__confirmation__').css({
                'display': 'flex'
            })
        }
        const __search__ = (data, category) => {
            $.ajax({
                type: 'GET'
                , url: "{{ env('APP_URL') }}" + "/search/" + data + "/" + category
                , success: function(result) {
                    console.log(result)
                    $('#__search__result__').empty()
                    category == 'categories' ? result.data.map((item, index) => {
                            $('#__search__result__').append(
                                `
                            <div data-id="${item.id}" data-categories="${category}" class="__Edit__Process__" style="width:100%;cursor:pointer;background-color:#fff;margin-top:10px;border-radius:10px;">
                                <div style="width:100%;display:flex;justify-content:center;padding:10px 10px;">
                                    <div style="width:300px;height:300px;">
                                        <img style="border-radius:10px;width:100%;height:100%;" src="${"{{ env('HOST_NAME') }}"}/uploads/${item.image}"/>
                                    </div>
                                </div>
                                <div style="width:100%;display:flex;justify-content:center;padding:10px 0;align-items:center;"><span style="font-size:20px;">ünvan :</span><span style="font-size:20px;margin:0 10px;">${item.title}</span></div>
                            </div>
                            `
                            )
                        }) :
                        result.data.map((item, index) => {
                            $('#__search__result__').append(
                                `
                                <div class="__Edit__Process__" data-id="${item.id}" data-categories="${category}" style="width:100%;cursor:pointer;background-color:#fff;margin-top:10px;border-radius:10px;">
                                    <div style="width:100%;display:flex;justify-content:center;padding:10px 10px;">
                                        <div style="width:300px;height:300px;">
                                            <img style="border-radius:10px;width:100%;height:100%;" src="${"{{ env('HOST_NAME') }}"}/uploads/${item.image}"/>
                                        </div>
                                    </div>
                                    <div style="width:100%;padding:10px 0;text-align:center;">
                                        <div style="font-size:20px;">ünvan :</div>
                                        <div style="font-size:20px;margin:0 10px;">
                                            ${item.title}
                                        </div>
                                    </div>
                                    <div style="width:100%;padding:10px 0;text-align:center;">
                                        <div style="font-size:20px;padding:10px 0;">içerikBaşlığı :</div>
                                        <div style="font-size:20px;margin:0 10px;">
                                            ${item.contentHeader}
                                        </div>
                                    </div>
                                    <div style="width:100%;padding:10px 0;text-align:center;">
                                        <div style="font-size:20px;">içerikGövde :</div>
                                        <div style="font-size:20px;margin:0 10px;">
                                            ${item.contentBody.slice(0,10)}
                                        </div>
                                    </div>
                                    <div style="width:100%;padding:10px 0;text-align:center;">
                                        <span style="font-size:20px;">fiyat :</span>
                                        <span style="font-size:20px;margin:0 10px;">
                                            ${item.price}
                                        </span>
                                    </div>
                                </div>
                            `
                            )
                        })
                }
            });
        }
        $('.__search__key__').on('keyup', function() {
            console.log($('.__select__filtering__categories__').val())
            $('#__search__result__ , #__search__edit__result__').empty()
            __search__($(this).val(), $('.__select__filtering__categories__').val())
        })
        // Find me
        $(document).on('submit', '#searchForm', function(e) {
            e.preventDefault(); // Prevent the default form submission
            var formData = new FormData(this); // Create a FormData object passing the form

            console.log(formData);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                , type: 'POST', // Change to POST method
                url: "{{ route('__Search__Update__') }}", // Use the form's action attribute
                data: formData
                , processData: false, // Don't process the files
                contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                success: function(result) {
                    if (result.status == 'success') {
                        swal({
                            title: "Success!"
                            , text: "işlem başarılı oldu"
                            , icon: "success"
                            , button: false, // Hide the button
                            timer: 3000 // Alert will close after 5 seconds
                        });
                    } else {
                        swal({
                            title: "Failed!"
                            , text: "Bir şeyler yanlış gitti. Bu mesaj 3 saniye içinde kapatılacak."
                            , icon: "error"
                            , button: false, // Hide the button
                            timer: 3000 // Alert will close after 3 seconds
                        });
                    }
                }
                , error: function(error) {
                    // Handle error
                }
            });
        });
        $(document).on('click', '.__Edit__Process__', function() {
            var dataId = $(this).data('id');
            var categories = $(this).data('categories');

            $('#__search__result__ , #__search__edit__result__').empty()
            $.ajax({
                type: 'GET'
                , url: "{{ env('APP_URL') }}" + "/search/edit/" + $(this).data('id') + "/" + $(this).data('categories')
                , success: function(result) {
                    $('#__search__result__ , #__search__edit__result__').empty()
                    result.data.map((item, index) => (
                        $('#__search__edit__result__').html(
                            `
                            <form id="searchForm">
                                <input type="hidden" name="dataId" value="${dataId}">
                                <input type="hidden" name="categoriesId" value="${categories}">
                            <div style="width:100%;display:flex;justify-content:center;">
                                <div style="width:80%;display:flex;justify-content:center;">
                                    <label for="imageeditupload" style="cursor:pointer;width:30%;">
                                        <div style="width:100%;background-color:#fff;display:flex;justify-content:center;border-radius:10px;">
                                            <div style="width:90%;padding:20px 0px;">
                                                <div style="width:100%;display:flex;justify-content:center;">
                                                    <svg style="width:50%;color:#000;font-weight:300;" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"></path>
                                                    </svg>
                                                </div>
                                                <p style="width:100%;margin:10px 0px;color:#000;text-align:center;"><span>Yüklemek için tıklayın</span></p>
                                                <p style="width:100%;margin:10px 0px;color:#000;text-align:center;">PNG, JPG veya JPEG</p>
                                            </div>
                                        </div>
                                    </label>
                                    <input name="file" id="imageeditupload" type="file" hidden />
                                </div>
                            </div>
                            <div style="width:100%;margin:20px 0;">
                                <div style="width:100%;display:flex;justify-content:center;">
                                   <div style="display:flex;align-item:center;height:50px;">
                                    <div>
                                        <div style="margin:0 10px;color:#fff;font-size:20px;height:100%;display:flex;align-item:center;"><span style="display:flex;align-items:center;">ünvan</span></div>
                                        <div style="margin:0 10px;color:#fff;font-size:20px;height:100%;">
                                            <input name="SearchTitleUpdatingSearch" style="border-radius:5px;height:100%;color:#000;padding:0 10px;" type="text" value="${item.title}"/>
                                        </div>
                                    </div>
                                   </div>
                                </div>
                            </div>
                            ${item.contentBody!=undefined ?
                                `
                                <div style="width:100%;margin-top:60px;">
                                    <div style="width:100%;display:flex;justify-content:center;">
                                       <div style="display:flex;align-item:center;height:50px;">
                                            <div>
                                                <div style="margin:0 10px;color:#fff;font-size:20px;height:100%;display:flex;align-item:center;"><span style="display:flex;align-items:center;">içerikBaşlığı :</span></div>
                                                <div style="margin:0 10px;color:#fff;font-size:20px;height:100%;">
                                                    <input name="SearchContentHeaderUpdating" style="border-radius:5px;height:100%;color:#000;padding:0 10px;" type="text" value="${item.contentHeader}"/>
                                                </div>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                                <div style="width:100%;margin-top:60px;">
                                    <div style="width:100%;display:flex;justify-content:center;">
                                       <div style="display:flex;align-item:center;height:50px;">
                                            <div>
                                                <div style="margin:0 10px;color:#fff;font-size:20px;height:100%;display:flex;align-item:center;"><span style="display:flex;align-items:center;">içerikGövde :</span></div>
                                                <div style="margin:0 10px;color:#fff;font-size:20px;height:100%;">
                                                    <input name="SearchContentBody" style="border-radius:5px;height:100%;color:#000;padding:0 10px;" type="text" value="${item.contentBody?.slice(0,10)}"/>
                                                </div>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                                <div style="width:100%;margin-top:60px;">
                                    <div style="width:100%;display:flex;justify-content:center;">
                                       <div style="display:flex;align-item:center;height:50px;">
                                            <div>
                                                <div style="margin:0 10px;color:#fff;font-size:20px;height:100%;display:flex;align-item:center;"><span style="display:flex;align-items:center;">fyiat :</span></div>
                                                <div style="margin:0 10px;color:#fff;font-size:20px;height:100%;">
                                                    <input name="SearchPriceUpdating" style="border-radius:5px;height:100%;color:#000;padding:0 10px;" type="text" value="${item.price}"/>
                                                </div>
                                            </div>
                                       </div>
                                    </div>
                                </div>

                                `:'<span></span>'
                            }
                            <div style="width:100%;margin-top:100px;height:50px;display:flex;justify-content:center;">
                                <div style="width:20%;display:flex;justify-content:center;height:100%;display:flex;justify-content:space-between;padding:0px 30px;">
                                    <div><button data-id="${dataId}" data-category="${categories}" class="__button__search__edditing__" style="background-color:#172697;color:#fff;padding:10px 20px;border-radius:10px;margin:0 10px;" type="submit">Düzenleme</button></div>
                                    <div style="display:flex;align-items:center;"><a style="background-color:#ff3333;color:#fff;padding:10px 20px;border-radius:10px;" href="https://pisipisikahvalti.com/menu/delete/${dataId}/${categories}">sil</a></div>
                                </div>
                            </div>
                        </form>
                            `
                        )
                    ))
                }
            });
        })

    </script>
</body>
</html>
