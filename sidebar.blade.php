<div class="w-60 fixed h-full">

    <div class="h-screen flex flex-col bg-slate-800">


    <div class="flex p-3 overflow-clip items-center pl-5 ">
        

        <div class="rounded">
            <img class="h-10 rounded-md" src="https://code-axion.github.io/dark-admin-sidebar.github.io/codeaxion.jpg" alt="">
        </div>
        <div class="ml-3 min-w-max ">

            <div class="flex items-center">
                <h6 class="text-sm ml-5 font-light text-white ">Hello</h6>
            </div>
            <h2 class="text-white font-normal ml-3 font-sans">CODE AXION</h2>

        </div>

    </div>
    {{-- overflow-clip --}}
    <div class=" mx-5 overflow-clip  ">

        <div  class="w-full mt-6 rounded-2xl " style="height:1px; animation: pulse 3s infinite;
        background-color: #3481ff;
        animation-timing-function: ease-in-out;
        animation-iteration-count: infinite;background: rgb(255, 255, 255,0.3);"></div>


        <div class="hover:bg-indigo-800 my-0  cursor-pointer flex items-center rounded mt-2 px-3 py-2.5 min-w-0 ">


            <svg xmlns="http://www.w3.org/2000/svg" style="fill: white" width="16" height="16" fill="currentColor" class="scale-110 bi bi-grid" viewBox="0 0 16 16">
                <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"></path>
            </svg>
            
            <h2 class="text-white ml-9 overflow-hidden font-light"> Dashboard</h2>





        </div>

     
        <a href="{{route('index-product')}}">
            <div class="@if(Route::currentRouteName() == 'index-product') bg-indigo-700 @else hover:bg-indigo-800 @endif my-0  cursor-pointer flex items-center rounded px-3 py-2.5 min-w-0 ">


                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="fill-white scale-110 bi bi-archive-fill" viewBox="0 0 16 16">
                    <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
                  </svg>
            
            <h2 class="text-white ml-9 overflow-hidden font-light"> Products</h2>





            </div>
        </a>
        <a href="{{route('index-category')}}">
            <div class="@if(Route::currentRouteName() == 'index-category') bg-indigo-800 @else hover:bg-indigo-800 @endif mt-1  cursor-pointer flex items-center rounded px-3 py-2.5 min-w-0 ">


                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="scale-110 fill-white bi bi-tags" viewBox="0 0 16 16">
                    <path d="M3 2v4.586l7 7L14.586 9l-7-7H3zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2z"/>
                    <path d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z"/>
                  </svg>
            
            <h2 class="text-white ml-9 overflow-hidden font-light"> Categories</h2>





            </div>
        </a>

        <a href="{{route('index-coupon')}}">
            <div class="@if(Route::currentRouteName() == 'index-coupon') bg-indigo-800 @else hover:bg-indigo-800 @endif mt-1  cursor-pointer flex items-center rounded px-3 py-2.5 min-w-0 ">


                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="scale-110 fill-white bi bi-clipboard-heart" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M5 1.5A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5v1A1.5 1.5 0 0 1 9.5 4h-3A1.5 1.5 0 0 1 5 2.5v-1Zm5 0a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1Z"/>
                    <path d="M3 1.5h1v1H3a1 1 0 0 0-1 1V14a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V3.5a1 1 0 0 0-1-1h-1v-1h1a2 2 0 0 1 2 2V14a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V3.5a2 2 0 0 1 2-2Z"/>
                    <path d="M8 6.982C9.664 5.309 13.825 8.236 8 12 2.175 8.236 6.336 5.31 8 6.982Z"/>
                  </svg>
            
            <h2 class="text-white ml-9 overflow-hidden font-light"> Coupons</h2>





            </div>
        </a>

           
        <a href="{{route('index-attribute')}}">
            <div class="@if(Route::currentRouteName() == 'index-attribute') bg-indigo-800 @else hover:bg-indigo-800 @endif mt-1  cursor-pointer flex items-center rounded px-3 py-2.5 min-w-0 ">
            
            
            <svg xmlns="http://www.w3.org/2000/svg" style="fill: white" width="16" height="16" fill="currentColor" class="scale-110 bi bi-grid" viewBox="0 0 16 16">
                <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"></path>
            </svg>

            <h2 class="text-white ml-9 overflow-hidden font-light"> Attributes</h2>
        
        
        
        
        
            </div>
        </a>

    



    </div>

    <div class=" p-0 mx-5 off">


        <div class="flex p-3 overflow-hidden items-center  cursor-pointer">

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="fill-white  scale-110 bi bi-window-stack" viewBox="0 0 16 16">
                <path d="M4.5 6a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1ZM6 6a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1Zm2-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z"></path>
                <path d="M12 1a2 2 0 0 1 2 2 2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2 2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h10ZM2 12V5a2 2 0 0 1 2-2h9a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1Zm1-4v5a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V8H3Zm12-1V5a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v2h12Z"></path>
            </svg>

            <h2 class="ml-9 text-white font-light  overflow-hidden">Create Catalog</h2>

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ml-auto my-auto fill-white scale-125 bi bi-caret-down" viewBox="0 0 16 16">
                <path d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z"/>
              </svg>

        </div>

        <div class="on">
            <ul style="border-left: 1px solid white" class="w-44 mx-4 rounded-tl-none rounded-tr-xl rounded-br-xl rounded-bl-xl ">
            
                <a href="{{route('create-product')}}">
                    <div style="border-left: 1px solid white; margin-inline:-1px" class="hover:bg-indigo-800 my-0  rounded-tl-none rounded-tr-xl rounded-br-xl rounded-bl-xl">
                    
                        <li class="text-white p-2.5 font-sans font-ligher rounded-tl-none rounded-tr-md rounded-br-md rounded-bl-md list-none cursor-pointer">Create Product</li>
                    </div>
                </a>

                <a href="{{route('createCategory')}}">
                    <div style="border-left: 1px solid white; margin-inline:-1px" class="hover:bg-indigo-800 my-0  rounded-tl-none rounded-tr-xl rounded-br-xl rounded-bl-xl">
                    
                        <li class="text-white p-2.5 font-sans font-ligher rounded-tl-none rounded-tr-md rounded-br-md rounded-bl-md list-none cursor-pointer">Create Category</li>
                    </div>
                </a>



                <a href="{{route('create-attribute')}}">
                    <div style="border-left: 1px solid white; margin-inline:-1px" class="hover:bg-indigo-800 my-0  rounded-tl-none rounded-tr-xl rounded-br-xl rounded-bl-xl">
                    
                        <li class="text-white p-2.5 font-sans font-ligher rounded-tl-none rounded-tr-md rounded-br-md rounded-bl-md list-none cursor-pointer">Create Attributes</li>
                    </div>
                </a>

                
                <a href="{{route('create-coupon')}}">
                    <div style="border-left: 1px solid white; margin-inline:-1px" class="hover:bg-indigo-800 my-0  rounded-tl-none rounded-tr-xl rounded-br-xl rounded-bl-xl">
                    
                        <li class="text-white p-2.5 font-sans font-ligher rounded-tl-none rounded-tr-md rounded-br-md rounded-bl-md list-none cursor-pointer">Create Coupons</li>
                    </div>
                </a>



          

            </ul>
        </div>

    </div>

    <div class=" mx-5 overflow-clip  ">

        <div  class="w-full mt-6 rounded-2xl  " style="height:1px; animation: pulse 3s infinite;
        background-color: #3481ff;
        animation-timing-function: ease-in-out;
        animation-iteration-count: infinite;background: rgb(255, 255, 255,0.3);"></div>


      

        <a href="{{route('index-order')}}">
            <div class="@if(Route::currentRouteName() == 'index-order') bg-indigo-800 @else hover:bg-indigo-800 @endif mt-1  cursor-pointer flex items-center rounded px-3 py-2.5 min-w-0 ">
            
            
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="scale-110 fill-white bi bi-box-seam" viewBox="0 0 16 16">
                    <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
                  </svg>
        
            <h2 class="text-white ml-9 overflow-hidden font-light"> Orders</h2>
        
        
        
        
        
            </div>
        </a>

        
        <a href="">
            <div class="@if(Route::currentRouteName() == 'index-banner') bg-indigo-800 @else hover:bg-indigo-800 @endif mt-1  cursor-pointer flex items-center rounded px-3 py-2.5 min-w-0 ">
            
            
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="fill-white scale-110 bi bi-collection" viewBox="0 0 16 16">
                    <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z"/>
                  </svg>
        
            <h2 class="text-white ml-9 overflow-hidden font-light"> Banners</h2>
        
        
        
        
        
            </div>
        </a>


        <a href="">
            <div class="@if(Route::currentRouteName() == 'index-user') bg-indigo-800 @else hover:bg-indigo-800 @endif mt-1  cursor-pointer flex items-center rounded px-3 py-2.5 min-w-0 ">
            
            
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="fill-white scale-110 bi bi-people" viewBox="0 0 16 16">
                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                  </svg>
        
            <h2 class="text-white ml-9 overflow-hidden font-light"> Users</h2>
        
        
        
        
        
            </div>
        </a>
        



    </div>

    


    </div>

</div>