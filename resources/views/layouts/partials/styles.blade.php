<!-- Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

<!-- Vendors -->
<link rel="stylesheet" href="{{ asset('/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
<link rel="stylesheet" href="{{ asset('/vendors/bootstrap-icons/bootstrap-icons.css') }}">
<link rel="stylesheet" href="{{ asset('/vendors/sweetalert2/sweetalert2.min.css') }}">


<!-- Styles -->
{{-- <link rel="stylesheet" href="{{ mix('css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
<link rel="stylesheet" href="{{ mix('css/app-dark.css') }}"> --}}
@vite(["resources/sass/bootstrap.scss", "resources/sass/themes/dark/app-dark.scss", "resources/sass/pages/auth.scss", "resources/sass/app.scss","resources/sass/iconly.scss", "resources/sass/pages/simple-datatables.scss"])

@livewireStyles

{{ $style ?? '' }}