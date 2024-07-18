<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      
      @include('home.homecss')

      <style type="text/css">

        .post_deg
        {
            padding: 20px;
            text-align: center;
        }

        .title_deg
        {
            font-size: 30px;
            font-weight: bold;
            padding: 10px;
        }

        .des_deg
        {
            font-size: 18px;
            padding: 10px;
        }

        .img_deg
        {
            height: 200px;
            width: 300px;
            padding: 30px;
        }

      </style>

   </head>
   <body>

      <!-- header section start -->
      <div class="header_section">
         @include('home.header')
        </div>

        @if(session()->has('message'))

            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> x </button>

                {{session()->get('message')}}

            </div>

        @endif

        @foreach($data as $data)

        <div class="post_deg">
            <img class="img_deg" src="/postimage/{{$data->image}}">

            <h4 class="title_deg"> {{$data->title}} </h4>

            <p class="des_deg"> {{$data->description}} </p>

            <a onclick="return confirm('Are You Sure to Delete this?')" href="{{url('my_post_delete',$data->id)}}" class="btn btn-danger"> Delete </a>

            <a href="{{url('post_update_page',$data->id)}}" class="btn btn-primary"> Update </a>
        </div>

        @endforeach

      <!-- footer section start -->
        @include('home.footer')

   </body>
</html>