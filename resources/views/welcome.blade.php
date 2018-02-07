<!doctype html>
<html lang="{{ app()->getLocale() }}" xmlns="http://www.w3.org/1999/html">
        <head>
            <!-- php artisan serve  http://localhost:8000/-->
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>Laravel</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
            <!--style>
            </style-->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        </head>

        <body>
        <div class="container">
            <h2 class="text-center">Table for trainers</h2>
            <div class="row">

            <div class="col-md-3">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Clients list</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Classes list</a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="flex-center position-ref full-height">
                            <div class="content">
                                <div class="title m-b-md">
                                    <button type="button" class="btn btn-success btn-sm ml-4" id="getAllClients">Get all</button>
                                </div>

                                <p id="getAllClientsData"></p>

                                <div class="title m-b-md">
                                    <button type="button" class="btn btn-primary btn-sm ml-3" id="showFormForNewClient">Add new</button>
                                </div>


                                <form id="formAddClients">
                                    <div class="form-group row">
                                        <label for="name-input" class="col-2 col-form-label">1st name</label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" id="name-input" name="first_name" >
                                        </div>
                                        <label for="name-input" class="col-2 col-form-label">lst name</label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" id="last-name-input" name="last_name">
                                        </div>
                                        <button type="button" class="btn btn-primary btn-sm ml-3" id="addNewClient">Add</button>
                                        <button type="button" class="btn btn-primary btn-sm ml-3" id="hideFormForNewClient">Hide</button>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">classes list</div>
                </div>
            </div>

            <div class="col-md-9">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>

                </tbody>
            </table>
            </div>
        </div>
        </div>

            <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <script type="text/javascript">

                $(document).ready(function() {
                    $("#formAddClients").hide();


                    $('#getAllClients').click(function () {
                        //alert(100);
                        $.ajax({
                            url: '{{ url('clients')  }}',
                            type: 'GET',
                            data: {_token: $("input[name=_token]").val()},
                            success: function (response) {
                                $('.div_for_item_clients').remove(),
                                $.each( response, function( key, value ) {
                                    $('#getAllClientsData').append("<div class='div_for_item_clients'>" +
                                        "<input style='display: block' name='first_name' class='itemClient st_name' data-id='"+value.id+"' disabled value='"+value.first_name+"'/>" +
                                        "<input style='display: block' name='last_name' class='itemClient lst_name' data-id='"+value.id+"' disabled value='"+value.last_name+"' />"+
                                        "<button type='button' class='btn btn-primary btn-sm ml-1 editNewClient' >Edit</button>"+
                                        "<button type='button' class='btn btn-danger btn-sm ml-1 deleteNewClient'>Delete</button>"+
                                        "<button type='button' class='btn btn-success btn-sm ml-1 saveAfterEditClient' disabled>Save</button></div>"
                                    );
                                })
                            },
                            error: function(xhr){
                                var errors = xhr.responseJSON;
                                var error = errors;
                                if (error) {
                                    alert(error);
                                }
                            }
                        });
                    });

                    $('#hideFormForNewClient').click(function () {
                        $('#formAddClients').hide();
                    });

                    $('#showFormForNewClient').click(function () {
                        $('#formAddClients').show();
                    })
/**Add new client BEGIN*****************************************************************/
                    $('#addNewClient').click(function (e) {
                        console.log("99",e);
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        var first_name = $("#formAddClients").find("input[name='first_name']").val();
                        var last_name = $("#formAddClients").find("input[name='last_name']").val();
                        // console.log("first_name0---",first_name);

                        $.ajax({
                            url: '{{ url('clients')  }}',
                            type: 'POST',

                            data: {_token: $("input[name=_token]").val(), first_name:first_name, last_name:last_name},
                            success: function (response) {
                                alert("добавлено");
                                //response[0].id;
                                var id =response;
                                $('#getAllClientsData').append("<div class='div_for_item_clients'>" +
                                    "<input style='display: block' name='first_name' class='itemClient st_name' data-id='"+id+"' disabled value='"+first_name+"'/>" +
                                    "<input style='display: block' name='last_name' class='itemClient lst_name' data-id='"+id+"' disabled value='"+last_name+"' />"+
                                    "<button type='button' class='btn btn-primary btn-sm ml-1 editNewClient' >Edit</button>"+
                                    "<button type='button' class='btn btn-danger btn-sm ml-1 deleteNewClient'>Delete</button>"+
                                    "<button type='button' class='btn btn-success btn-sm ml-1 saveAfterEditClient' disabled>Save</button></div>"
                                );





                            },
                            error: function(xhr){
                                var errors = xhr.responseJSON;
                                var error = errors;
                                if (error) {
                                    alert(error);
                                }
                            },

                        });
                        /*
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });*/
                    });
/**Add new client END*****************************************************************/


/*DELETE CLIENT BEGIN***************************************************/
                    $(document).on('click', '.deleteNewClient',function () {
                        var id = $(this).parent().find("input[name='first_name']").data('id') ;
                        var div_remove_from_dom = $(this).parent();
                        console.log("div_remove_from_dom-", div_remove_from_dom);
                        console.log("id-",id);

                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        $.ajax({

                            type: 'delete',
                            url: '{{ url('clients')  }}' +'/'+ id,

                            data: {_token: $("input[name=_token]").val()},
                            success: function (response) {
                                div_remove_from_dom.remove();
                            },
                            error: function(xhr){
                                var errors = xhr.responseJSON;
                                var error = errors;
                                if (error) {
                                    alert(error);
                                }
                            },

                        });
                    });
/*DELETE CLIENT END***********************************************************/

/*ACTIVE FIELDS FOR EDIT CLIENT BEGIN***************************************************/
                    $(document).on('click', '.editNewClient',function () {
                        $(this).parent().children(".itemClient").attr('disabled', false);
                        $(this).parent().children(".saveAfterEditClient").attr('disabled', false);
                        //console.log(id);
                    });
/*ACTIVE FIELDS FOR EDIT CLIENT END***************************************************/

/*SAVE AFTER EDIT CLIENT BEGIN***************************************************/
                    $(document).on('click', '.saveAfterEditClient',function () {
                        var id = $(this).parent().find("input[name='first_name']").data('id') ;
                        var btn_edit = $(this).parent().children(".saveAfterEditClient");
                        var first_name = $(this).parent().find("input[name='first_name']");
                        var last_name = $(this).parent().find("input[name='last_name']");

                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        $.ajax({
                            type: 'PUT',
                            url: '{{ url('clients')  }}' +'/'+ id,

                            data: {_token: $("input[name=_token]").val(), first_name:first_name.val(), last_name:last_name.val()},
                            success: function (response) {
                                alert("изменено",response);
                                first_name.attr('disabled', true);
                                last_name.attr('disabled', true);
                                btn_edit.attr('disabled', true);
                            },
                            error: function(xhr){
                                var errors = xhr.responseJSON;
                                var error = errors;
                                if (error) {
                                    alert(error);
                                }

                            },

          /*              });*/

                        });
                    });

                });


            </script>

        </body>

    </html>
<!--
<script>
        $("document").ready(function(){

            $('.bbb').click(function() {
                val=($(this).val());
                parent=$(this).parent().parent().parent();

                confirm_var=confirm('Удалить песню с помощью AJAX?');//запрашиваем подтверждение на удаление
                if (!confirm_var) return false;
                $.ajax({
                    url:'{{ url('songs')  }}'+'/'+val,
                    type: 'DELETE',
                    data:{_token: $("input[name=_token]").val()},
                    success: function(response) {
                        parent.remove();
                        alert ("Песня удалена");
                    },
                    error: function(xhr) {
                        var errors = xhr.responseJSON;
                        var error = errors;
                        if (error) {
                            alert(error);
                        }
                    }
                })
            })
        })
    </script>