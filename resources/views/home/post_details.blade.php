<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->

      <base href="/public">
      
      @include('home.homecss')

   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         @include('home.header')
         
      </div>
      <!-- header section end -->
      
                <div style="text-align: center;" class="col-md-12">
                     <div><img style="padding: 20px" src="/postimage/{{$post->image}}"></div>

                     <h2> <b> {{$post->title}} </b> </h2>

                     <h4> {{$post->description}} </h4>

                     <p> Post by <b> {{$post->name}} </b> </p>

                </div>
      
      <!-- footer section start -->
        @include('home.footer')
        
   </body>
</html>