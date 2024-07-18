<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->

      <base href="/public">

      @include('home.homecss')

      <style type="text/css">

        .div_deg
        {
            text-align: center;
        }

        .title_deg
        {
            font-size: 30px;
            font-weight: bold;
            padding: 20px;
            padding-top: 230px;
        }

        label
        {
            display: inline-block;
            width: 200px;
            font-size: 18px;
            font-weight: bold;
        }

        .field_deg
        {
            padding: 25px;
        }

      </style>

   </head>
   <body>

    @include('sweetalert::alert')

      <!-- header section start -->
      <div class="header_section">
         @include('home.header')
        </div>

      <div class="div_deg">

        <h3 class="title_deg"> Update Post </h3>

        <form action="{{url('update_post_data',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="field_deg">
                <label> Post Title </label>
                <input type="text" name="title" value="{{$data->title}}">
            </div>
            <div class="field_deg">
                <label> Post Description </label>
                <textarea name="description"> {{$data->description}} </textarea>
            </div>
            <div class="field_deg">
                <label> Current Image </label>
                <img height="150" width="250" src="/postimage/{{$data->image}}">
            </div>
            <div class="field_deg">
                <label> Change Current Image </label>
                <input type="file" name="image">
            </div>
            <div class="field_deg">
                <input type="submit" class="btn btn-primary" value="Update">
            </div>
        </form>

      </div>
    </div>

      <!-- footer section start -->
        @include('home.footer')

   </body>
</html>