<x-layouts.app.sidebar :title="$title ?? null">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
    integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Les Délices de Dior</title>
    <link rel="shortcut icon" href="{{asset('assets/images/logo.png')}}" type="image/x-icon" />
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <flux:main>
         <div class="page-content">
                @yield('content')
         </div>

    </flux:main>
</x-layouts.app.sidebar>
