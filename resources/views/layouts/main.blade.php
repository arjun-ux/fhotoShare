<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    {{-- search ajax --}}
    <script>
        $(document).ready(function() {
            // readData();
            $("#input").keyup(function() {
                var cari = $("#input").val();
                if (cari != ""){
                    $("#read").html('<p><center><strong>Menunggu Data Yang Dicari...</strong></center></p>');
                    $.ajax({
                        type: "get",
                        url: "{{ url('ajax') }}",
                        data: "name=" + cari,
                        success:function(data){
                            $("#read").html(data);
                        }
                    });
                }else{
                    readData();
                }
            });
        });

        function readData(){
            $.get("{{ url('read') }}",{},
            function(data, status) {
                $("#read").html(data);
            });
        }
    </script>
</body>
</html>
