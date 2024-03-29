<div class="Edit__Modal__category__ absolute top-0 w-full min-h-screen z-40 bg-black opacity-[.5] justify-center items-center"></div>
<div class="Edit__Modal__category__ flex absolute top-0 w-full min-h-screen z-50 justify-center items-center">
    <form class="w-[30%] p-3 bg-slate-100 rounded-md" method="post" action="{{ route('__upload__edit__') }}" enctype="multipart/form-data">
        @csrf
        <div><input name="_id_" value="{{ json_decode(json_encode(session('__Categories_data__edit__')), true)['id'] }}" hidden /></div>
        <div id="MODAL_CLOSE_Edit__BTN" class="w-full flex justify-end my-1">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="30px" width="30px" version="1.1" id="Capa_1" viewBox="0 0 26 26" xml:space="preserve">
                <g>
                    <path style="fill:#A93226;" d="M21.125,0H4.875C2.182,0,0,2.182,0,4.875v16.25C0,23.818,2.182,26,4.875,26h16.25   C23.818,26,26,23.818,26,21.125V4.875C26,2.182,23.818,0,21.125,0z M18.78,17.394l-1.388,1.387c-0.254,0.255-0.67,0.255-0.924,0   L13,15.313L9.533,18.78c-0.255,0.255-0.67,0.255-0.925-0.002L7.22,17.394c-0.253-0.256-0.253-0.669,0-0.926l3.468-3.467   L7.221,9.534c-0.254-0.256-0.254-0.672,0-0.925l1.388-1.388c0.255-0.257,0.671-0.257,0.925,0L13,10.689l3.468-3.468   c0.255-0.257,0.671-0.257,0.924,0l1.388,1.386c0.254,0.255,0.254,0.671,0.001,0.927l-3.468,3.467l3.468,3.467   C19.033,16.725,19.033,17.138,18.78,17.394z" />
                </g>
            </svg>
        </div>
        <div class="w-full">
            <label for="language" class="block mb-2 text-sm font-medium text-[#000]">Bir Dil Seçin</label>
            <select name="lang" id="language" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Bir Dil Seçin</option>
                <option @if(json_decode(json_encode(session('__Categories_data__edit__')), true)['lang']=='TR' ) {{ 'selected' }} @endif value="TR">TR</option>
                <option @if(json_decode(json_encode(session('__Categories_data__edit__')), true)['lang']=='EN' ) {{ 'selected' }} @endif value="EN">EN</option>
                <option @if(json_decode(json_encode(session('__Categories_data__edit__')), true)['lang']=='AR' ) {{ 'selected' }} @endif value="AR">AR</option>
            </select>
        </div>
        <div class="w-full mt-3">
            <label for="default-input" class="block mb-2 text-sm font-medium text-[#000]">Başlık</label>
            <input name="title" type="text" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ json_decode(json_encode(session('__Categories_data__edit__')), true)['title'] }}">
        </div>
        <div class="w-full mt-3">
            <div class="flex items-center justify-center w-full">
                <label for="dropzonefile" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                        </svg>
                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Yüklemek için tıklayın</span></p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG veya JPEG</p>
                    </div>
                    <input name="file" id="dropzonefile" type="file" hidden/>
                </label>
            </div>
        </div>
        <div class="w-full my-3">
            <button type="submit" class="text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-5 py-5 text-center flex justify-center items-center dark:focus:ring-[#3b5998]/55 w-full">
                . . . Kategoriyi güncelle . . .
            </button>
        </div>
    </form>
</div>
