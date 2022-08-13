<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Styles -->
 <style>



    .on{
        display: none;
    }
    
    .off:hover .on{

        display:block;
        
    }


    .btn-edit{
        color: #5a6cbe !important;
        border: 2px solid #55629f63 !important;
        background: #739eff00;
    }

    .btn-edit:hover{
        background: #739eff00 !important;
         border: 2px solid #2b8aff !important;
    }



    .btn-delete{
        color: #be5a5a !important;
        border: 2px solid #9f555563 !important;
        background: #739eff00;
    }

    .btn-delete:hover{
        background: #739eff00 !important;
         border: 2px solid #ff2b2b !important;
    }

    .scale-100x{
        transform: scale(2);
    }

    .height-1px{
        height: 1px;
    }
    
 </style>

</head>
<body>
    



  <div class=" bg-slate-900 h-full">

    

  
    @include('layouts_files.sidebar')
  

    <div class=" ml-72 h-full py-8 mr-8">

        @include('layouts_files.secondary_navbar')



        
        <div class="flex justify-between items-center">
        
          <h3 class="text-2xl font-base text-white my-4">Admin Dashboard  <span class="ml-4 text-base font-medium text-slate-400">Home > <a href="{{route('index-product')}}">Products</a> </span></h3>
  
          <div class="flex items-center mt-2 rounded-xl bg-slate-800">
  
              <input type="text" name="" id="" placeholder="Search Something..." class="p-2.5 pl-3 border-0 outline-none w-48 bg-transparent text-white">
              
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="fill-white mr-2 scale-110 bi bi-search" viewBox="0 0 16 16">
                  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
              </svg>
  
          </div>
  
       </div>

       

        <div class=" w-full mx-auto mt-4 overflow-x-auto shadow-md rounded-lg">

          <table class="w-full  text-sm text-left text-gray-400">
            <thead class="text-xs uppercase bg-gray-700 text-gray-400">
              <tr>
              
                <th scope="col" class="py-3 px-2.5 text-light text-base">Sr.No</th>
                <th scope="col" class="py-3 px-2.5 text-light text-base">Id</th>
             
                  <th scope="col" class="py-3 px-2.5 text-light text-base">Product Image</th>
                  <th scope="col" class="py-3 px-2.5 text-light text-base">Product Name</th>
                  <th scope="col" class="py-3 px-2.5 text-light text-base">Product Brand</th>
                  <th scope="col" class="py-3 px-2.5 text-light text-base">Price</th>
                  <th scope="col" class="py-3 px-2.5 text-light text-base">Product Attributes</th>
                  <th scope="col" class="py-3 px-2.5 text-light text-base">Stock Status</th>
    
                  <th scope="col" class="py-3 px-2.5 text-light text-base">Category</th>
                  <th scope="col" class="py-3 px-2.5 text-light text-base">Edit</th>
                  <th scope="col" class="py-3 px-2.5 text-light text-base">Delete</th>

              </tr>
            </thead>
            <tbody>


              @foreach ($products as $product)       
    <tr class="  border-b bg-slate-900 border-gray-700 hover:bg-slate-800">
 
      <td  class="py-4 pl-3">{{$loop->index}}</td>
      <td  class="py-4 px-0">{{$product->id}}</td>
      
        <td class="py-4 pl-3"><img  class="h-16" src="{{$product->image}}" alt=""></td>
      <td class="py-4 px-0">{{Str::limit($product->name,35,'...')}}</td>
      
      <td class="py-4 px-3">{{$product->brand_name}}</td>
      <td class="py-4 px-3">{{$product->sale_price}}</td>
      @if($product->attributeValues)
     
      
      <td class="py-4 pl-3">
        @foreach ($product->attributeValues->unique('product_attribute_id') as $attributeValue)
        
            {{$attributeValue->productAttribute->name}} :
            {{$attributeValue->value}}<br>
            
           
        @endforeach

      </td>
      @if($product->stock_status == 1)
      <td class="py-4 px-0">
        
      <div class="py-2 px-2.5 bg-emerald-400 font-semibold rounded ">

        <h2 class="font-semibold  text-emerald-900 ">In Stock ({{$product->quantity}})</h2>
      </div>
    
      </td>
      @else
      <td class="py-4 px-0">
        <div class="py-1.5 px-2.5  border-red-400 border-2 font-semibold text-sm  rounded ">
          <h2 class=" font-semibold text-sm text-red-400">Out Stock ({{$product->quantity}})</h2>
        </div>
      </td>
      @endif

     
      <td class="py-4 px-3">
        {{Str::limit($product->category->name,10,'...')}}
      </td>

      

      
    


      @endif
      <td  class="py-4 px-3" > <a class="font-medium text-blue-500 hover:underline" href="{{Route('edit-product', $product->id)}}">
        <button class="btn-edit  px-4 py-1 rounded  text-base">Edit</button>
    </a></td>


    <td class="py-4 px-3">                                  
                      
        <form action="{{route('delete-product', $product->id)}}" method="POST">
            @csrf
            @method('DELETE')
        
        <button style="" type="submit" value="DELETE" class="btn-delete font-medium  px-3 py-1 rounded  text-base">DELETE</button>
        </form>
    </td>
     
    </tr>
    @endforeach


            </tbody>  

          </table>
        
        </div>

        
    </div>
    
  </div>  
    
    
    
    
    <!-- ========================================================================= -->
    
  



<!-- ======================================= M A I N   C O N T E N T ========================================== -->
    










<!--======================================= MAIN FOOTER =========================== -->






    <script>
    
            let toggle = document.getElementsByClassName('toggle_bar');
    
            function toggle_bar() {
    
             let element = document.querySelector(".toggle");
             element.classList.toggle("show")
             
             let element2 = document.querySelector(".bar")
             element2.classList.toggle("bar2")
            
             
              
                
                
            }
    
            
         
    




    </body>
    </html>