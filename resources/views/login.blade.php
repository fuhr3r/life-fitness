<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, user-scalable=0, initial-scale=1.0, maximum-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta name="viewport" content="width=device-width, user-scalable=no"/>
  <meta name="theme-color" content="#000000"/>

  {{--<link rel="icon" sizes="192x192" href="nice-highres.png"> //logo--}}
  <link rel="stylesheet" href="{{ URL::asset('semantic/semantic.css') }}"/>
  <!-- <link rel="stylesheet" href="{{ URL::asset('css/app.css/app.css') }}"/> -->
</head>
<body>
  <div class="ui middle aligned center aligned grid">
    <div class="column">
      <h2 class="ui black image header">
        <img src="{{ URL::asset('images/icons/peitoral.svg') }}" alt="Logo" class="image">
        <div class="content">Life-Fitness</div>
      </h2>
      <form class="ui large form" action="/login" method="post">
        {{csrf_field()}}
        <div class="ui stacked segment">
          <div class="field">
            <div class="ui left icon input">
              <i class="user icon"></i>
              <input type="text" name="login" value="">
            </div>
          </div>
          <div class="field">
            <div class="ui left icon input">
              <i class="lock icon"></i>
              <input type="password" name="password" value="">
            </div>
          </div>
          <input type="submit" class="ui large black submit button" value="Entrar">
        </div>
      </form>
    </div>
  </div>

  @yield('content')

  <script src="{{ URL::asset('js/jquery/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ URL::asset('semantic/semantic.js') }}"></script>

  <script src="{{ URL::asset('js/hammer-js/hammer.min.js') }}"></script>
  <script src="{{ URL::asset('js/hammer-js/hammer-time.min.js') }}"></script>
  <script src="{{ URL::asset('js/hammer-js/jquery.hammer.js') }}"></script>

  <script src="{{ URL::asset('js/app.js') }}"></script>
</body>
</html>
