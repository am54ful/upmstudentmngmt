<!DOCTYPE HTML>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <title>UPM Student Management</title>

  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="http://www.keadilandaily.com/wp-content/uploads/2011/04/UPM.jpg">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Material Design Lite">
  <link rel="apple-touch-icon-precomposed" href="{{ asset('images/ios-desktop.png') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name="msapplication-TileImage" content="{{ asset('images/touch/ms-touch-icon-144x144-precomposed.png') }}">
  <meta name="msapplication-TileColor" content="#3372DF">

  <link rel="shortcut icon" href="http://www.keadilandaily.com/wp-content/uploads/2011/04/UPM.jpg">

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
  </style>
</head>

<body>
  <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
    <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Home</span>
        <div class="mdl-layout-spacer"></div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
          <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
            <i class="material-icons">search</i>
          </label>
          <div class="mdl-textfield__expandable-holder">
            <input class="mdl-textfield__input" type="text" id="search">
            <label class="mdl-textfield__label" for="search">Enter your query...</label>
          </div>
        </div>
        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
          <i class="material-icons">more_vert</i>
        </button>
        <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
          <li class="mdl-menu__item">About</li>
          <li class="mdl-menu__item">Contact</li>
          <li class="mdl-menu__item">Legal information</li>
        </ul>
      </div>
    </header>
    <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
      <header class="demo-drawer-header">
        <img src="http://www.keadilandaily.com/wp-content/uploads/2011/04/UPM.jpg" class="demo-avatar">
        <div class="demo-avatar-dropdown">
          <span>BHEP UPM</span>
          <div class="mdl-layout-spacer"></div>
          <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
            <i class="material-icons" role="presentation">arrow_drop_down</i>
            <span class="visuallyhidden">Accounts</span>
          </button>
          <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
            <li class="mdl-menu__item">Profile</li>
            <li class="mdl-menu__item">Log out</li>
            <li class="mdl-menu__item">
              <i class="material-icons">add</i>Add another account...</li>
          </ul>
        </div>
      </header>
      <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
        <a class="mdl-navigation__link" href="/show">
          <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>List of Applicant</a>
        <a class="mdl-navigation__link" href="/processed">
          <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">inbox</i>Processed Applicants</a>
        <div class="mdl-layout-spacer"></div>
        <a class="mdl-navigation__link" href="">
          <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i>
          <span class="visuallyhidden">Help</span>
        </a>
      </nav>
    </div>






    <main class="mdl-layout__content mdl-color--grey-100" id="dat">
      <div class="mdl-grid demo-content" style="overflow-x: auto;">
        <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp"  id="tableApplicant">
          <thead>
            <tr>
              <th class="mdl-data-table__cell--non-numeric">ID</th>
              <th>Name</th>
              <th>Phone Number</th>
              <th>Address</th>
              <th>Result</th>
            </tr>
          </thead>
          <tbody>
            @foreach($applicants as $applicant)

            <tr>
              <td class="mdl-data-table__cell--non-numeric">{{$applicant->ic}}</td>
              <td>{{$applicant->name}}</td>
              <td>{{$applicant->phone}}</td>
              <td>{{$applicant->address}}</td>
              <td>{{$applicant->result}}</td>
            </tr>

            @endforeach
          </tbody>
        </table>
    </main> -
    </div>
</body>
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<script>
  $(function () {
    $("#dat").on('scroll', function () {
      // Check if check Scrolled Down Of Div dat
      var checkScrolledDownOfDiv = $(this).scrollTop() + $(this).innerHeight() + 40 >= $(this)[0].scrollHeight;
      if(checkScrolledDownOfDiv){
        axios.get('/ajaXshow/5')
        .then(function (response) {
           console.log(response);
          for (var i = 0; i < response.data.length; i++) {
           $('#tableApplicant').append("<tr><td class='mdl-data-table__cell--non-numeric'>"+response.data[i].ic+"</td><td>"+response.data[i].name+"</td><td>"+response.data[i].phone+"</td><td>"+response.data[i].address+"</td><td>"+response.data[i].result+"</td></tr>")
          }
        })
        .catch(function (error) {
          console.log(error);
        });
      }

      // console.log("scrollTop "+$("#dat").scrollTop());
      // console.log("height #dat "+$("#dat").height());
      // console.log("body "+$('body').height());
      // console.log("window "+$('window').height());
    });
  });
</script>

</html>